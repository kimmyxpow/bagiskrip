@extends('layouts.main')

@section('container')
<section class="grid sm:grid-cols-12 grid-cols-1 sm:gap-6 gap-1 py-8 sm:px-0 px-4">
   <div class="sm:col-span-10 col-span-1 sm:col-start-2 col-start-1 space-y-5">
      <p class="text-mycolor-light-text font-poppins">Jika kamu ingin mengakses kode <span class="font-mono text-mycolor-dark-text">`{{ $code->name }}`</span> milik <span class="font-mono text-mycolor-dark-text">`{{ $code->user->name }}`</span>, kamu harus memasukkan password kodenya terlebih dahulu!</p>
      <form action="/codes/unlock/{{ $code->slug }}" method="post" class="space-y-4">
         @csrf
         <div class="flex flex-col gap-1 sm:max-w-max">
            <label class="font-bold font-montserrat text-mycolor-dark-text" for="password">Password:</label>
            <input autocomplete="off" class="border border-gray-200 rounded-xl py-2 px-6 font-poppins text-mycolor-dark-text focus:border-mycolor focus-within:border-mycolor focus-within:outline-none {{ (session()->has('error')) ? 'border-red-500' : '' }}" type="password" name="password" id="password">
            @if (session()->has('error'))
               <small class="italic font-poppins font-medium text-red-500">{{ session('error') }}</small>
            @endif
         </div>
         <button class="font-poppins font-medium py-2 px-8 rounded-xl bg-mycolor text-white ring ring-offset-2 ring-transparent focus:ring-mycolor transition-all duration-300">Buka</button>
      </form>
   </div>
</section>
@endsection   