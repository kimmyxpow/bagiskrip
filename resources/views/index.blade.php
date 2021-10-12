@extends('layouts.main')

@section('container')
<section class="grid grid-cols-12 sm:gap-6 gap-1 sm:mt-0 mt-8">
   <div class="grid col-span-10 col-start-2 md:grid-cols-2 gap-6 items-center md:text-left text-center">
      <div class="space-y-8 md:order-1 order-2">
         <h1 class="font-montserrat font-bold text-mycolor-dark-text lg:text-5xl sm:text-4xl text-3xl">Bagikan kodemu disini!</h1>
         <p class="font-poppins text-mycolor-light-text lg:text-lg sm:text-base text-sm">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry"s standard dummy text ever since the 1500s.</p>
         <div class="flex items-center md:justify-start justify-center space-x-2">
            <a class="font-poppins font-medium py-1.5 px-8 rounded-full bg-mycolor text-white ring ring-offset-2 ring-transparent focus:ring-mycolor transition-all duration-300" href="/codes">Coba Sekarang</a>
            <a title="Lihat di github" target="_blank" rel="noopener noreferrer" href="https://github.com/abinoval/my-code"><i class="bx bxl-github text-4xl"></i></a>
         </div>
      </div>
      <img class="lg:order-2 order-1" src="{{ asset('img/main-img.png') }}" alt="Hero Image">
   </div>
</section>
<section class="grid grid-cols-12 sm:gap-6 gap-1 py-16">
   <div class="grid lg:col-span-8 col-span-10 lg:col-start-3 col-start-2 space-y-14">
      <div class="flex flex-col items-center gap-2">
         <svg width="46" height="3" viewBox="0 0 46 3" fill="none" xmlns="http://www.w3.org/2000/svg">
            <line x1="1.08301" y1="1.67181" x2="44.9166" y2="1.67181" stroke="#7C83FD" stroke-width="2" stroke-linecap="round"/>
         </svg>                  
         <h1 class="capitalize font-bold text-mycolor-dark-text text-2xl font-montserrat text-center">fitur yang bisa<br>digunakan olehmu</h1>
      </div>
      <div class="grid md:grid-cols-3 sm:grid-cols-2 col-span-1 gap-6">
         <div class="text-center flex flex-col items-center space-y-4">
            <i class="bx bx-save text-2xl text-white p-3 rounded-2xl" style="background-image: linear-gradient(to bottom left, #7C83FD, #96BAFF); box-shadow: 0 24px 25px -10px rgba(124, 131, 253, 0.38);"></i>
            <div>
               <h3 class="text-lg font-bold font-montserrat text-mycolor-dark-text">Simpan dan Bagikan</h3>
               <p class="font-poppins font-normal text-base text-mycolor-light-text">Simpan kodemu dan bagikan kepada orang lain!</p>
            </div>
         </div>
         <div class="text-center flex flex-col items-center space-y-4">
            <i class="bx bx-highlight text-2xl text-white p-3 rounded-2xl" style="background-image: linear-gradient(to bottom left, #BE03FF, #F199FF); box-shadow: 0 24px 25px -10px rgba(190, 3, 255, 0.38);"></i>
            <div>
               <h3 class="text-lg font-bold font-montserrat text-mycolor-dark-text">Syntax Highligting</h3>
               <p class="font-poppins font-normal text-base text-mycolor-light-text">Percantik kodemu dengan <em>syntax highlighting</em>!</p>
            </div>
         </div>
         <div class="text-center flex flex-col items-center space-y-4 md:col-span-1 sm:col-span-2">
            <i class="bx bx-code-alt text-2xl text-white p-3 rounded-2xl" style="background-image: linear-gradient(to bottom left, #00F0FF, #24FFD8); box-shadow: 0 24px 25px -10px rgba(0, 240, 253, 0.38);"></i>
            <div>
               <h3 class="text-lg font-bold font-montserrat text-mycolor-dark-text">Pilihan Bahasa</h3>
               <p class="font-poppins font-normal text-base text-mycolor-light-text">Menyuport banyak bahasa pemrogramman!</p>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="grid grid-cols-12 sm:gap-6 gap-1 py-16">
   <div class="col-span-10 col-start-2 space-y-14">
      <div class="flex flex-col items-center gap-2">
         <svg width="46" height="3" viewBox="0 0 46 3" fill="none" xmlns="http://www.w3.org/2000/svg">
            <line x1="1.08301" y1="1.67181" x2="44.9166" y2="1.67181" stroke="#7C83FD" stroke-width="2" stroke-linecap="round"/>
         </svg>                  
         <h1 class="capitalize font-bold text-mycolor-dark-text text-2xl font-montserrat text-center">Contoh-contoh kode<br><span class="text-mycolor">myCode</span></h1>
      </div>
      <div class="grid gap-6">
         <pre class="rounded-xl" style="max-width: 0; min-width: 100%; width: 100%; overflow: auto;">
            <code class="language-html">
               &lt;section class=&quot;section-top&quot;&gt;
                  &lt;nav class=&quot;row&quot;&gt;
                     &lt;div class=&quot;nav&quot;&gt;
                     &lt;a class=&quot;nav__logo&quot; href=&quot;#&quot;&gt;MyName&lt;/a&gt;
                     &lt;div class=&quot;nav__menu-wrapper&quot;&gt;
                        &lt;button class=&quot;nav__menu&quot;&gt;&lt;i class='bx bx-menu-alt-right'&gt;&lt;/i&gt;&lt;/button&gt;
                        &lt;div class=&quot;nav__menu-dropdown&quot;&gt;
                           &lt;div class=&quot;nav__menu-links&quot;&gt;
                           &lt;a href=&quot;form.php&quot; target=&quot;_blank&quot; rel=&quot;noopener noreferrer&quot; class=&quot;nav__menu-link&quot;&gt;
                              &lt;i class='bx bx-chevron-right'&gt;&lt;/i&gt;
                              &lt;span&gt;Submit Suggestions&lt;/span&gt;
                           &lt;/a&gt;
                           &lt;a href=&quot;https://github.com/bbhpowpow/myname&quot; target=&quot;_blank&quot; rel=&quot;noopener noreferrer&quot; class=&quot;nav__menu-link&quot;&gt;
                              &lt;i class='bx bx-chevron-right'&gt;&lt;/i&gt;
                              &lt;span&gt;Github Repository&lt;/span&gt;
                           &lt;/a&gt;
                           &lt;/div&gt;
                           &lt;hr&gt;
                           &lt;div class=&quot;nav__menu-links&quot;&gt;
                           &lt;a href=&quot;https://www.instagram.com/envil.a/&quot; target=&quot;_blank&quot; rel=&quot;noopener noreferrer&quot; class=&quot;nav__menu-link&quot;&gt;
                              &lt;i class='bx bx-chevron-right'&gt;&lt;/i&gt;
                              &lt;span&gt;My Instagram&lt;/span&gt;
                           &lt;/a&gt;
                           &lt;a href=&quot;https://github.com/bbhpowpow&quot; target=&quot;_blank&quot; rel=&quot;noopener noreferrer&quot; class=&quot;nav__menu-link&quot;&gt;
                              &lt;i class='bx bx-chevron-right'&gt;&lt;/i&gt;
                              &lt;span&gt;My Github&lt;/span&gt;
                           &lt;/a&gt;
                           &lt;a href=&quot;https://saweria.co/abinf&quot; target=&quot;_blank&quot; rel=&quot;noopener noreferrer&quot; class=&quot;nav__menu-link&quot;&gt;
                              &lt;i class='bx bx-chevron-right'&gt;&lt;/i&gt;
                              &lt;span&gt;Saweria&lt;/span&gt;
                           &lt;/a&gt;
                           &lt;/div&gt;
                        &lt;/div&gt;
                     &lt;/div&gt;
                     &lt;/div&gt;
                  &lt;/nav&gt;
                  &lt;main class=&quot;row&quot;&gt;
                     &lt;div class=&quot;main&quot;&gt;
                     &lt;div class=&quot;main__header&quot;&gt;
                        &lt;h1 class=&quot;main__header-text&quot;&gt;WELCOME TO OUR WEBSITE&lt;/h1&gt;
                     &lt;/div&gt;
                     &lt;p class=&quot;main__text&quot;&gt;
                        Dapatkan nama terbaik untuk karaktermu dengan mudah&lt;br&gt;bersama &lt;span class=&quot;main__logo&quot;&gt;MyName&lt;/span&gt;.
                     &lt;/p&gt;
                     &lt;div id=&quot;btn-wrapper&quot;&gt;
                        &lt;a class=&quot;btn btn-black&quot; data-scroll href=&quot;#generate&quot;&gt;Mulai&lt;/a&gt;
                     &lt;/div&gt;
                     &lt;/div&gt;
                  &lt;/main&gt;
               &lt;/section&gt;
            </code>
         </pre>
         <div class="grid md:grid-cols-2 gap-6">
            <pre class="rounded-xl" style="max-width: 0; min-width: 100%; width: 100%; overflow: auto;">
               <code class="language-css">
                  .section-top {
                     background-image: url('../img/bg-main.jpg');
                     background-position: center;
                     background-repeat: no-repeat;
                     background-size: cover;
                     height: 100vh;
                  }
                     
                  .row {
                     display: grid;
                     grid-template-columns: repeat(12, minmax(0, 1fr));
                  }
                     
                  .nav {
                     grid-column: span 10 / span 10;
                     grid-column-start: 2;
                     display: flex;
                     justify-content: space-between;
                     align-items: center;
                     padding: 2rem 0;
                     position: relative;
                     z-index: 2;
                  }
               </code>
            </pre>
            <pre class="rounded-xl" style="max-width: 0; min-width: 100%; width: 100%; overflow: auto;">
               <code class="language-javascript">
                  form.addEventListener('submit', e => {
                     e.preventDefault();
                     formSubmit.innerHTML = "Tunggu";
                     formSubmit.setAttribute('disabled', 'disabled');
                     fetch(scriptURL, {
                           method: 'POST',
                           body: new FormData(form)
                        })
                        .then(response => {
                           setAlert("Pesan Berhasil Dikirim!!");
                           console.log('Success!', response);
                        })
                        .catch(error => {
                           setAlert("Pesan Gagal Dikirim!!");
                           console.error('Error!', error.message);
                        })
                     });
               </code>
            </pre>
         </div>
      </div>
   </div>
</section>
<section class="grid grid-cols-12 sm:gap-6 gap-1 py-16 bg-mycolor text-center">
   <div class="col-span-10 col-start-2">
      <div class="space-y-5 relative">
         <h1 class="sm:text-5xl text-3xl font-bold font-montserrat text-white">Tunggu Apa Lagi?</h1>
         <a class="font-poppins font-medium inline-block py-1.5 px-8 rounded-full bg-white text-mycolor" href="/codes">Coba Sekarang</a>
      </div>
      <img class="mx-auto -mt-24" src="{{ asset('img/human-study.png') }}" alt="Footer Image">
   </div>
</section>
@endsection   