@extends('layouts.main')

@section('container')
<section class="grid grid-cols-12 sm:gap-6 gap-1 py-8">
   <div class="col-span-10 col-start-2 space-y-5">
      @if (session()->has('success'))
         <div class="bg-green-500 py-2 px-5 font-poppins font-medium text-white rounded-md">
            {!! session('success') !!}
         </div>
      @endif
      <div class="flex sm:flex-row flex-col justify-between sm:items-center md:space-y-0 space-y-2">
         <a class="font-poppins font-medium py-2 px-8 rounded-xl bg-mycolor text-white ring ring-offset-2 ring-transparent focus:ring-mycolor transition-all duration-300 max-w-max" href="/codes/create">Tambah</a>
         <form class="sm:block flex" action="/codes">
            <input type="search" name="s" value="{{ request('s') }}" placeholder="Cari kode..." class="border border-transparent rounded-xl py-2 px-6 font-poppins text-mycolor-dark-text focus:border-mycolor focus-within:border-mycolor focus-within:outline-none sm:w-auto w-full">
            <button class="font-poppins font-medium py-2 px-8 rounded-xl bg-mycolor text-white ring ring-offset-2 ring-transparent focus:ring-mycolor transition-all duration-300 max-w-max ml-1" href="/codes" type="submit">Cari</button>
         </form>
      </div>
      <div class="grid md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-6">
        @if ($codes->count())
         @foreach ($codes as $code)
            <div class="bg-white rounded-xl py-4 px-6 space-y-4">
               <div>
                  <h1 class="font-montserrat font-bold text-mycolor-dark-text text-lg">{{ $code->name }}</h1>
                  <a class="text-sm text-mycolor-light-text font-poppins line-clamp-1 break-all hover:underline" href="{{ env('APP_URL') . 'codes/' . $code->slug }}">{{ env('APP_URL') . 'codes/' . $code->slug }}</a>
               </div>
               <div class="flex space-x-1">
                  <a title="Edit Kode" href="/codes/{{  $code->slug  }}/edit" class="h-8 w-8 flex justify-center items-center bg-yellow-500 rounded-md"><i class="bx bx-edit text-white"></i></a>
                  <form action="/codes/{{ $code->slug }}" method="POST">
                     @method('delete')
                     @csrf
                     <button title="Hapus Kode" class="h-8 w-8 flex justify-center items-center bg-red-500 rounded-md" onclick="return confirm('Apakah anda yakin ingin menghapus kode ini?')" type="submit"><i class="bx bx-trash text-white"></i></button>
                  </form>
                  <div class="copy-clipboard">
                     <button title="Salin Tautan Kode" class="h-8 w-8 flex justify-center items-center bg-green-400 rounded-md"><i class="bx bx-clipboard text-white"></i></button>
                     <input class="absolute opacity-0 pointer-events-none invisible" type="text" value="{{ env('APP_URL') . 'codes/' . $code->slug }}">
                  </div>
                  <a title="Lihat Kode" href="{{ env('APP_URL') . 'codes/' . $code->slug }}" class="h-8 w-8 flex justify-center items-center bg-blue-400 rounded-md"><i class="bx bx-show text-white"></i></a>
               </div>
               <div class="flex justify-between">
                  <p class="font-poppins text-sm text-mycolor-light-text">{{ $code->created_at->diffForHumans() }}</p>
                  <div class="flex items-center">
                     <i class="bx bx-show text-mycolor-light-text"></i>
                     <p class="text-sm text-mycolor-light-text font-medium font-poppins">{{ $code->views }}</p>
                  </div>
               </div>
            </div>
         @endforeach
        @else
            @if (request('s'))
               <h1 class="col-span-1 sm:col-span-2 md:col-span-3 font-montserrat text-2xl text-mycolor-dark-text font-bold">Tidak ada kode dengan nama {{ request('s') }}</h1>
            @else
               <h1 class="col-span-1 sm:col-span-2 md:col-span-3 font-montserrat text-2xl text-mycolor-dark-text font-bold">Ayo Tambah Kodenya Dan Bagikan Pada Orang Lain!</h1>
            @endif
        @endif
      </div>
   </div>
</section>
<script>
   const copyClipboardBtn = document.querySelectorAll('.copy-clipboard button');

   copyClipboardBtn.forEach(el => {
      el.addEventListener('click', () => {
         const parentElement = el.parentElement;
         const input = parentElement.querySelector('input');
         const icon = parentElement.querySelector('i');

         input.select();
         input.setSelectionRange(0, 9999);
         document.execCommand('copy');

         icon.setAttribute('class', 'bx bx-check text-white');
         setTimeout(function () {
            icon.setAttribute('class', 'bx bx-clipboard text-white')
         }, 2000);
      })
   });
</script>
@endsection