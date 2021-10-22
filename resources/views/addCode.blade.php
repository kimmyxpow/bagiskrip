@extends('layouts.main')

@section('container')
<section class="grid sm:grid-cols-12 grid-cols-1 sm:gap-6 gap-1 py-8 sm:px-0 px-4">
   <form method="POST" action="{{ $action }}" class="sm:col-span-10 col-span-1 sm:col-start-2 col-start-1 space-y-5">
      @csrf
      <div class="flex  sm:flex-row flex-col gap-4">
         <div class="flex flex-col gap-1">
            <label class="font-bold font-montserrat text-mycolor-dark-text" for="selectBahasa">Bahasa:</label>
            <select class="border border-gray-200 rounded-xl py-2 px-6 font-poppins cursor-pointer text-mycolor-dark-text focus:border-mycolor focus-within:border-mycolor focus-within:outline-none @error('lang') border-red-500 @enderror" name="lang" id="selectBahasa">
               <option value="" disabled selected>- Pilih Bahasa -</option>
               @foreach ($langs as $lang)
                   <option value="{{ $lang['id'] }}" {{ ($lang['id'] == old('lang')) ? 'selected' : '' }}>{{ $lang['name'] }}</option>
               @endforeach
            </select>
            @error('lang')
                <small class="italic font-poppins font-medium text-red-500">{{ $message }}</small>
            @enderror
         </div>
      </div>
      <div class="flex flex-col gap-1">
         <label class="font-bold font-montserrat text-mycolor-dark-text" for="textareaCode">Kode:</label>
         <textarea class="border border-gray-200 rounded-xl focus:outline-none focus:border-mycolor resize-none font-mono text-mycolor-dark-text py-3 px-4 h-96 @error('code') border-red-500 @enderror" name="code" id="textareaCode" placeholder="Ketikkan kode disini">{{ old('code') }}</textarea>
         @error('code')
             <small class="italic font-poppins font-medium text-red-500">{{ $message }}</small>
         @enderror
      </div>
      @if ($continue == 'login')
         <div class="flex flex-col gap-4">
            <div class="flex flex-col gap-1 sm:max-w-max">
               <label class="font-bold font-montserrat text-mycolor-dark-text" for="neededPassword">Tambah Kata Sandi:</label>
               <select class="border rounded-xl py-2 px-6 font-poppins cursor-pointer text-mycolor-dark-text focus:border-mycolor focus-within:border-mycolor focus-within:outline-none border-gray-200" name="neededPassword" id="neededPassword">
                  <option {{ (old('neededPassword') == 'n') ? 'selected' : '' }} value="n">Tidak</option>
                  <option {{ (old('neededPassword') == 'y') ? 'selected' : '' }} value="y">Ya</option>
               </select>
            </div>
            <div class="hidden flex-col gap-1 sm:max-w-max">
               <label class="font-bold font-montserrat text-mycolor-dark-text" for="password">Kata sandi:</label>
               <input class="border rounded-xl py-2 px-6 font-poppins text-mycolor-dark-text focus:border-mycolor focus-within:border-mycolor focus-within:outline-none border-gray-200 @error('password') border-red-500 @enderror" type="password" name="password" id="password">
               @error('password')
                  <small class="italic font-poppins font-medium text-red-500">{{ $message }}</small>
               @enderror
            </div>
         </div>
      @endif
      <div class="flex flex-col gap-4">
         <div class="flex flex-col gap-1 sm:max-w-max">
            <label class="font-bold font-montserrat text-mycolor-dark-text" for="name">Nama Kode:</label>
            <input value="{{ old('name') }}" autocomplete="off" class="border border-gray-200 rounded-xl py-2 px-6 font-poppins text-mycolor-dark-text focus:border-mycolor focus-within:border-mycolor focus-within:outline-none @error('name') border-red-500 @enderror" type="text" name="name" id="name">
            @error('name')
                <small class="italic font-poppins font-medium text-red-500">{{ $message }}</small>
            @enderror
         </div>
      </div>
      <button class="font-poppins font-medium py-2 px-8 rounded-xl bg-mycolor text-white ring ring-offset-2 ring-transparent focus:ring-mycolor transition-all duration-300">Simpan</button>
   </form>
</section>
<script>
   const neededPassword = document.querySelector('#neededPassword');
   const password = document.querySelector('#password').parentElement;
   
   neededPassword.addEventListener('change', () => {
      if (neededPassword.value == 'n') {
         password.classList.add('hidden');
         password.classList.remove('flex');
      } else {
         password.classList.add('flex');
         password.classList.remove('hidden');
      }
   });

   if (neededPassword.value == 'n') {
      password.classList.add('hidden');
      password.classList.remove('flex');
   } else {
      password.classList.add('flex');
      password.classList.remove('hidden');
   }
</script>
@endsection