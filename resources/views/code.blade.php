@extends('layouts.main')

@section('container')
<section class="grid grid-cols-12 sm:gap-6 gap-1 py-8">
   <div class="col-span-10 col-start-2 space-y-5">
      <div class="space-y-2">
         <h1 class="text-2xl text-mycolor-dark-text font-montserrat font-bold">{{ $code->name }}</h1>
         <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center sm:space-y-0 space-y-4">
            <div class="flex items-center space-x-4">
               @if ($code->user->name != 'anonymous')
                   <p class="font-poppins text-mycolor-light-text flex items-center space-x-1"><img class="rounded-full object-cover object-center" src="{{ $code->user->avatar }}" style="width: 30px; height: 30px; min-height: 30px; min-width: 30px; max-width: 30px; max-height: 30px;" alt="{{ $code->user->username }}"><span>{{ $code->user->username }}</span></p>
                   <div class="flex items-center">
                      <i class="bx bx-show text-mycolor-light-text"></i>
                      <p class="text-sm text-mycolor-light-text font-medium font-poppins">{{ $code->views }}</p>
                   </div>
               @endif
               <p class="font-poppins text-sm text-mycolor-light-text">{{ $code->created_at->diffForHumans() }}</p>
            </div>
            <div class="flex space-x-1 copy-clipboard">
               <input class="border border-gray-200 rounded-xl py-2 px-6 font-poppins text-mycolor-dark-text focus:border-mycolor focus-within:border-mycolor focus-within:outline-none w-full" type="text" readonly value="{{ env('APP_URL') . 'codes/' . $code->slug }}">
               <button style="min-width: 2.5rem; min-height: 2.5rem" title="Salin Tautan Kode" class="h-10 w-10 flex justify-center items-center bg-green-400 rounded-xl"><i class="bx bx-clipboard text-white"></i></button>
            </div>
         </div>
      </div>
      <pre class="rounded-xl" style="max-width: 0; min-width: 100%; width: 100%; overflow: auto;">
         <code class="language-{{ $code->lang->name }}">
            {!! $code->code !!}
         </code>
      </pre>
   </div>
</section>
<script>
   const copyClipboardBtn = document.querySelector('.copy-clipboard button');

   copyClipboardBtn.addEventListener('click', () => {
      const parentElement = copyClipboardBtn.parentElement;
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
</script>
@endsection