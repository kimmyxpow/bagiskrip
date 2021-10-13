@extends('layouts.main')

@section('container')
<section class="grid grid-cols-12 sm:gap-6 gap-1 sm:my-10 mt-8">
   <div class="col-span-10 col-start-2 space-y-8">
      <h1 class="md:text-4xl text-3xl font-montserrat font-bold text-center text-mycolor-dark-text">Lanjutkan:</h1>
      <div class="grid md:grid-cols-2 gap-6">
         <div class="order-2 md:order-1">
            <div class="space-y-4 bg-white shadow-2xl py-12 px-8 rounded-xl">
               <h2 class="md:text-2xl text-xl text-mycolor-dark-text font-montserrat font-bold text-center">Tanpa Log In</h2>
               <div class="space-y-4">
                  <div class="flex items-center space-x-2">
                     <div class="sm:flex hidden justify-center items-center h-10 w-10 rounded-xl text-white" style="background-image: linear-gradient(to bottom left, rgb(71, 226, 40), rgb(141, 238, 121)); box-shadow: 0 24px 25px -10px rgba(71, 226, 40, 0.38); min-width: 2.5rem; max-width: 2.5rem;">
                        <i class="bx bx-check"></i>
                     </div>
                     <p class="font-poppins md:text-lg sm:text-base text-sm text-mycolor-light-text">Bisa mengunggah dan membagikan kode kepada orang lain.</p>
                  </div>
                  <div class="flex items-center space-x-2">
                     <div class="sm:flex hidden justify-center items-center h-10 w-10 rounded-xl text-white" style="background-image: linear-gradient(to bottom left, rgb(253, 124, 124), #ff9696); box-shadow: 0 24px 25px -10px rgba(253, 124, 124, 0.38); min-width: 2.5rem; max-width: 2.5rem;">
                        <i class="bx bx-x"></i>
                     </div>
                     <p class="font-poppins md:text-lg sm:text-base text-sm text-mycolor-light-text">Tidak bisa menyimpan kode. Jika link kode hilang, maka kode tidak dapat dikembalikan.</p>
                  </div>
                  <div class="flex items-center space-x-2">
                     <div class="sm:flex hidden justify-center items-center h-10 w-10 rounded-xl text-white" style="background-image: linear-gradient(to bottom left, rgb(253, 124, 124), #ff9696); box-shadow: 0 24px 25px -10px rgba(253, 124, 124, 0.38); min-width: 2.5rem; max-width: 2.5rem;">
                        <i class="bx bx-x"></i>
                     </div>
                     <p class="font-poppins md:text-lg sm:text-base text-sm text-mycolor-light-text">Tidak dapat mengedit kode. Jika ingin membuat perubahan pada kode, harus membuat ulang.</p>
                  </div>
                  <div class="flex items-center space-x-2">
                     <div class="sm:flex hidden justify-center items-center h-10 w-10 rounded-xl text-white" style="background-image: linear-gradient(to bottom left, rgb(253, 124, 124), #ff9696); box-shadow: 0 24px 25px -10px rgba(253, 124, 124, 0.38); min-width: 2.5rem; max-width: 2.5rem;">
                        <i class="bx bx-x"></i>
                     </div>
                     <p class="font-poppins md:text-lg sm:text-base text-sm text-mycolor-light-text">Tidak dapat menghapus kode.</p>
                  </div>
                  <div class="flex items-center space-x-2">
                     <div class="sm:flex hidden justify-center items-center h-10 w-10 rounded-xl text-white" style="background-image: linear-gradient(to bottom left, rgb(253, 124, 124), #ff9696); box-shadow: 0 24px 25px -10px rgba(253, 124, 124, 0.38); min-width: 2.5rem; max-width: 2.5rem;">
                        <i class="bx bx-x"></i>
                     </div>
                     <p class="font-poppins md:text-lg sm:text-base text-sm text-mycolor-light-text">Tidak dapat melihat berapa jumlah kunjungan pada kode yang telah di unggah.</p>
                  </div>
               </div>
               <a class="sm:text-lg text-sm text-white bg-mycolor py-2 w-full text-center inline-block font-poppins font-medium rounded-md ring ring-transparent ring-offset-2 focus:ring-mycolor transition-all duration-300" href="/add">Lanjutkan Tanpa Log In</a>
            </div>
         </div>
         <div class="order-1 md:order-2">
            <div class="space-y-4 bg-white shadow-2xl py-12 px-8 rounded-xl">
               <h2 class="md:text-2xl text-xl text-mycolor-dark-text font-montserrat font-bold text-center">Dengan Log In</h2>
               <div class="space-y-4">
                  <div class="flex items-center space-x-2">
                     <div class="sm:flex hidden justify-center items-center h-10 w-10 rounded-xl text-white" style="background-image: linear-gradient(to bottom left, rgb(71, 226, 40), rgb(141, 238, 121)); box-shadow: 0 24px 25px -10px rgba(71, 226, 40, 0.38); min-width: 2.5rem; max-width: 2.5rem;">
                        <i class="bx bx-check"></i>
                     </div>
                     <p class="font-poppins md:text-lg sm:text-base text-sm text-mycolor-light-text">Bisa mengunggah dan membagikan kode kepada orang lain.</p>
                  </div>
                  <div class="flex items-center space-x-2">
                     <div class="sm:flex hidden justify-center items-center h-10 w-10 rounded-xl text-white" style="background-image: linear-gradient(to bottom left, rgb(71, 226, 40), rgb(141, 238, 121)); box-shadow: 0 24px 25px -10px rgba(71, 226, 40, 0.38); min-width: 2.5rem; max-width: 2.5rem;">
                        <i class="bx bx-check"></i>
                     </div>
                     <p class="font-poppins md:text-lg sm:text-base text-sm text-mycolor-light-text">Bisa menyimpan kode dan mempunyai dashboard untuk memudahkan pencarian.</p>
                  </div>
                  <div class="flex items-center space-x-2">
                     <div class="sm:flex hidden justify-center items-center h-10 w-10 rounded-xl text-white" style="background-image: linear-gradient(to bottom left, rgb(71, 226, 40), rgb(141, 238, 121)); box-shadow: 0 24px 25px -10px rgba(71, 226, 40, 0.38); min-width: 2.5rem; max-width: 2.5rem;">
                        <i class="bx bx-check"></i>
                     </div>
                     <p class="font-poppins md:text-lg sm:text-base text-sm text-mycolor-light-text">Bisa mengedit kode.</p>
                  </div>
                  <div class="flex items-center space-x-2">
                     <div class="sm:flex hidden justify-center items-center h-10 w-10 rounded-xl text-white" style="background-image: linear-gradient(to bottom left, rgb(71, 226, 40), rgb(141, 238, 121)); box-shadow: 0 24px 25px -10px rgba(71, 226, 40, 0.38); min-width: 2.5rem; max-width: 2.5rem;">
                        <i class="bx bx-check"></i>
                     </div>
                     <p class="font-poppins md:text-lg sm:text-base text-sm text-mycolor-light-text">Bisa menghapus kode.</p>
                  </div>
                  <div class="flex items-center space-x-2">
                     <div class="sm:flex hidden justify-center items-center h-10 w-10 rounded-xl text-white" style="background-image: linear-gradient(to bottom left, rgb(71, 226, 40), rgb(141, 238, 121)); box-shadow: 0 24px 25px -10px rgba(71, 226, 40, 0.38); min-width: 2.5rem; max-width: 2.5rem;">
                        <i class="bx bx-check"></i>
                     </div>
                     <p class="font-poppins md:text-lg sm:text-base text-sm text-mycolor-light-text">Bisa melihat berapa jumlah kunjungan pada kode yang telah di unggah.</p>
                  </div>
               </div>
               <a class="sm:text-lg text-sm text-white bg-mycolor py-2 w-full text-center inline-block font-poppins font-medium rounded-md ring ring-transparent ring-offset-2 focus:ring-mycolor transition-all duration-300" href="/codes">Lanjutkan Dengan Log In</a>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection