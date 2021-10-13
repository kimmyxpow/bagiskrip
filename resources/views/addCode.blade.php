@extends('layouts.main')

@section('container')
<section class="grid grid-cols-12 sm:gap-6 gap-1 py-8">
   <form method="POST" action="{{ $action }}" class="col-span-10 col-start-2 space-y-5">
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
@endsection