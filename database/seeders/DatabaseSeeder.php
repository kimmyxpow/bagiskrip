<?php

namespace Database\Seeders;

use App\Models\Code;
use App\Models\Lang;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Abi Noval Fauzi',
            'email' => 'novalabi612@gmail.com',
            'username' => 'anf612',
            'email_verified_at' => now(),
            'password' => bcrypt("anf12345678"),
            'avatar' => 'https://source.unsplash.com/random/' . mt_rand(1000,9999),
            'remember_token' => Str::random(10),
        ]);

        // Code::create([
        //     'name' => 'Kode Index HTML',
        //     'slug' => 'kode-index-html-' . mt_rand(1000,9999),
        //     'code' => "
        //     @extends('layouts.main')

        //     @section('container')
        //     &lt;section class=&quot;grid grid-cols-12 sm:gap-6 gap-1 sm:mt-0 mt-8&quot;&gt;
        //     &lt;div class=&quot;grid col-span-10 col-start-2 md:grid-cols-2 gap-6 items-center md:text-left text-center&quot;&gt;
        //         &lt;div class=&quot;space-y-8 md:order-1 order-2&quot;&gt;
        //             &lt;h1 class=&quot;font-montserrat font-bold text-mycolor-dark-text lg:text-5xl sm:text-4xl text-3xl&quot;&gt;Bagikan kodemu disini!&lt;/h1&gt;
        //             &lt;p class=&quot;font-poppins text-mycolor-light-text lg:text-lg sm:text-base text-sm&quot;&gt;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&quot;s standard dummy text ever since the 1500s.&lt;/p&gt;
        //             &lt;div class=&quot;flex items-center md:justify-start justify-center gap-2&quot;&gt;
        //                 &lt;a class=&quot;font-poppins font-medium py-1.5 px-8 rounded-full bg-mycolor text-white ring ring-offset-2 ring-transparent focus:ring-mycolor transition-all duration-300&quot; href=&quot;{{ route('codes') }}&quot;&gt;Coba Sekarang&lt;/a&gt;
        //                 &lt;a class=&quot;inline-block&quot; title=&quot;Lihat di github&quot; href=&quot;#&quot;&gt;&lt;i class=&quot;bx bxl-github text-4xl&quot;&gt;&lt;/i&gt;&lt;/a&gt;
        //             &lt;/div&gt;
        //         &lt;/div&gt;
        //         &lt;img class=&quot;lg:order-2 order-1&quot; src=&quot;{{ asset('img/main-img.png') }}&quot; alt=&quot;Hero Image&quot;&gt;
        //     &lt;/div&gt;
        //     &lt;/section&gt;
        //     &lt;section class=&quot;grid grid-cols-12 sm:gap-6 gap-1 py-16&quot;&gt;
        //     &lt;div class=&quot;grid lg:col-span-8 col-span-10 lg:col-start-3 col-start-2 space-y-14&quot;&gt;
        //         &lt;div class=&quot;flex flex-col items-center gap-2&quot;&gt;
        //             &lt;svg width=&quot;46&quot; height=&quot;3&quot; viewBox=&quot;0 0 46 3&quot; fill=&quot;none&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;&gt;
        //                 &lt;line x1=&quot;1.08301&quot; y1=&quot;1.67181&quot; x2=&quot;44.9166&quot; y2=&quot;1.67181&quot; stroke=&quot;#7C83FD&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot;/&gt;
        //             &lt;/svg&gt;                  
        //             &lt;h1 class=&quot;capitalize font-bold text-mycolor-dark-text text-2xl font-montserrat text-center&quot;&gt;fitur yang bisa&lt;br&gt;digunakan olehmu&lt;/h1&gt;
        //         &lt;/div&gt;
        //         &lt;div class=&quot;grid md:grid-cols-3 sm:grid-cols-2 col-span-1 gap-6&quot;&gt;
        //             &lt;div class=&quot;text-center flex flex-col items-center gap-4&quot;&gt;
        //                 &lt;i class=&quot;bx bx-save text-2xl text-white p-3 rounded-2xl&quot; style=&quot;background-image: linear-gradient(to bottom left, #7C83FD, #96BAFF); box-shadow: 0 24px 25px -10px rgba(124, 131, 253, 0.38);&quot;&gt;&lt;/i&gt;
        //                 &lt;div&gt;
        //                 &lt;h3 class=&quot;text-lg font-bold font-montserrat text-mycolor-dark-text&quot;&gt;Simpan dan Bagikan&lt;/h3&gt;
        //                 &lt;p class=&quot;font-poppins font-normal text-base text-mycolor-light-text&quot;&gt;Simpan kodemu dan bagikan kepada orang lain!&lt;/p&gt;
        //                 &lt;/div&gt;
        //             &lt;/div&gt;
        //             &lt;div class=&quot;text-center flex flex-col items-center gap-4&quot;&gt;
        //                 &lt;i class=&quot;bx bx-highlight text-2xl text-white p-3 rounded-2xl&quot; style=&quot;background-image: linear-gradient(to bottom left, #BE03FF, #F199FF); box-shadow: 0 24px 25px -10px rgba(190, 3, 255, 0.38);&quot;&gt;&lt;/i&gt;
        //                 &lt;div&gt;
        //                 &lt;h3 class=&quot;text-lg font-bold font-montserrat text-mycolor-dark-text&quot;&gt;Syntax Highligting&lt;/h3&gt;
        //                 &lt;p class=&quot;font-poppins font-normal text-base text-mycolor-light-text&quot;&gt;Percantik kodemu dengan &lt;em&gt;syntax highlighting&lt;/em&gt;!&lt;/p&gt;
        //                 &lt;/div&gt;
        //             &lt;/div&gt;
        //             &lt;div class=&quot;text-center flex flex-col items-center gap-4 md:col-span-1 sm:col-span-2&quot;&gt;
        //                 &lt;i class=&quot;bx bx-code-alt text-2xl text-white p-3 rounded-2xl&quot; style=&quot;background-image: linear-gradient(to bottom left, #00F0FF, #24FFD8); box-shadow: 0 24px 25px -10px rgba(0, 240, 253, 0.38);&quot;&gt;&lt;/i&gt;
        //                 &lt;div&gt;
        //                 &lt;h3 class=&quot;text-lg font-bold font-montserrat text-mycolor-dark-text&quot;&gt;Pilihan Bahasa&lt;/h3&gt;
        //                 &lt;p class=&quot;font-poppins font-normal text-base text-mycolor-light-text&quot;&gt;Menyuport banyak bahasa pemrogramman!&lt;/p&gt;
        //                 &lt;/div&gt;
        //             &lt;/div&gt;
        //         &lt;/div&gt;
        //     &lt;/div&gt;
        //     &lt;/section&gt;
        //     &lt;section class=&quot;grid grid-cols-12 sm:gap-6 gap-1 py-16&quot;&gt;
        //     &lt;div class=&quot;col-span-10 col-start-2 space-y-14&quot;&gt;
        //         &lt;div class=&quot;flex flex-col items-center gap-2&quot;&gt;
        //             &lt;svg width=&quot;46&quot; height=&quot;3&quot; viewBox=&quot;0 0 46 3&quot; fill=&quot;none&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;&gt;
        //                 &lt;line x1=&quot;1.08301&quot; y1=&quot;1.67181&quot; x2=&quot;44.9166&quot; y2=&quot;1.67181&quot; stroke=&quot;#7C83FD&quot; stroke-width=&quot;2&quot; stroke-linecap=&quot;round&quot;/&gt;
        //             &lt;/svg&gt;                  
        //             &lt;h1 class=&quot;capitalize font-bold text-mycolor-dark-text text-2xl font-montserrat text-center&quot;&gt;Contoh-contoh kode&lt;br&gt;&lt;span class=&quot;text-mycolor&quot;&gt;myCode&lt;/span&gt;&lt;/h1&gt;
        //         &lt;/div&gt;
        //         &lt;div class=&quot;grid gap-6&quot;&gt;
        //             &lt;pre class=&quot;rounded-xl&quot; style=&quot;max-width: 0; min-width: 100%; width: 100%; overflow: auto;&quot;&gt;
        //                 &lt;code class=&quot;language-html&quot;&gt;
        //                 &amp;lt;section class=&amp;quot;section-top&amp;quot;&amp;gt;
        //                     &amp;lt;nav class=&amp;quot;row&amp;quot;&amp;gt;
        //                         &amp;lt;div class=&amp;quot;nav&amp;quot;&amp;gt;
        //                         &amp;lt;a class=&amp;quot;nav__logo&amp;quot; href=&amp;quot;#&amp;quot;&amp;gt;MyName&amp;lt;/a&amp;gt;
        //                         &amp;lt;div class=&amp;quot;nav__menu-wrapper&amp;quot;&amp;gt;
        //                             &amp;lt;button class=&amp;quot;nav__menu&amp;quot;&amp;gt;&amp;lt;i class='bx bx-menu-alt-right'&amp;gt;&amp;lt;/i&amp;gt;&amp;lt;/button&amp;gt;
        //                             &amp;lt;div class=&amp;quot;nav__menu-dropdown&amp;quot;&amp;gt;
        //                             &amp;lt;div class=&amp;quot;nav__menu-links&amp;quot;&amp;gt;
        //                             &amp;lt;a href=&amp;quot;form.php&amp;quot; target=&amp;quot;_blank&amp;quot; rel=&amp;quot;noopener noreferrer&amp;quot; class=&amp;quot;nav__menu-link&amp;quot;&amp;gt;
        //                                 &amp;lt;i class='bx bx-chevron-right'&amp;gt;&amp;lt;/i&amp;gt;
        //                                 &amp;lt;span&amp;gt;Submit Suggestions&amp;lt;/span&amp;gt;
        //                             &amp;lt;/a&amp;gt;
        //                             &amp;lt;a href=&amp;quot;https://github.com/bbhpowpow/myname&amp;quot; target=&amp;quot;_blank&amp;quot; rel=&amp;quot;noopener noreferrer&amp;quot; class=&amp;quot;nav__menu-link&amp;quot;&amp;gt;
        //                                 &amp;lt;i class='bx bx-chevron-right'&amp;gt;&amp;lt;/i&amp;gt;
        //                                 &amp;lt;span&amp;gt;Github Repository&amp;lt;/span&amp;gt;
        //                             &amp;lt;/a&amp;gt;
        //                             &amp;lt;/div&amp;gt;
        //                             &amp;lt;hr&amp;gt;
        //                             &amp;lt;div class=&amp;quot;nav__menu-links&amp;quot;&amp;gt;
        //                             &amp;lt;a href=&amp;quot;https://www.instagram.com/envil.a/&amp;quot; target=&amp;quot;_blank&amp;quot; rel=&amp;quot;noopener noreferrer&amp;quot; class=&amp;quot;nav__menu-link&amp;quot;&amp;gt;
        //                                 &amp;lt;i class='bx bx-chevron-right'&amp;gt;&amp;lt;/i&amp;gt;
        //                                 &amp;lt;span&amp;gt;My Instagram&amp;lt;/span&amp;gt;
        //                             &amp;lt;/a&amp;gt;
        //                             &amp;lt;a href=&amp;quot;https://github.com/bbhpowpow&amp;quot; target=&amp;quot;_blank&amp;quot; rel=&amp;quot;noopener noreferrer&amp;quot; class=&amp;quot;nav__menu-link&amp;quot;&amp;gt;
        //                                 &amp;lt;i class='bx bx-chevron-right'&amp;gt;&amp;lt;/i&amp;gt;
        //                                 &amp;lt;span&amp;gt;My Github&amp;lt;/span&amp;gt;
        //                             &amp;lt;/a&amp;gt;
        //                             &amp;lt;a href=&amp;quot;https://saweria.co/abinf&amp;quot; target=&amp;quot;_blank&amp;quot; rel=&amp;quot;noopener noreferrer&amp;quot; class=&amp;quot;nav__menu-link&amp;quot;&amp;gt;
        //                                 &amp;lt;i class='bx bx-chevron-right'&amp;gt;&amp;lt;/i&amp;gt;
        //                                 &amp;lt;span&amp;gt;Saweria&amp;lt;/span&amp;gt;
        //                             &amp;lt;/a&amp;gt;
        //                             &amp;lt;/div&amp;gt;
        //                             &amp;lt;/div&amp;gt;
        //                         &amp;lt;/div&amp;gt;
        //                         &amp;lt;/div&amp;gt;
        //                     &amp;lt;/nav&amp;gt;
        //                     &amp;lt;main class=&amp;quot;row&amp;quot;&amp;gt;
        //                         &amp;lt;div class=&amp;quot;main&amp;quot;&amp;gt;
        //                         &amp;lt;div class=&amp;quot;main__header&amp;quot;&amp;gt;
        //                             &amp;lt;h1 class=&amp;quot;main__header-text&amp;quot;&amp;gt;WELCOME TO OUR WEBSITE&amp;lt;/h1&amp;gt;
        //                         &amp;lt;/div&amp;gt;
        //                         &amp;lt;p class=&amp;quot;main__text&amp;quot;&amp;gt;
        //                             Dapatkan nama terbaik untuk karaktermu dengan mudah&amp;lt;br&amp;gt;bersama &amp;lt;span class=&amp;quot;main__logo&amp;quot;&amp;gt;MyName&amp;lt;/span&amp;gt;.
        //                         &amp;lt;/p&amp;gt;
        //                         &amp;lt;div id=&amp;quot;btn-wrapper&amp;quot;&amp;gt;
        //                             &amp;lt;a class=&amp;quot;btn btn-black&amp;quot; data-scroll href=&amp;quot;#generate&amp;quot;&amp;gt;Mulai&amp;lt;/a&amp;gt;
        //                         &amp;lt;/div&amp;gt;
        //                         &amp;lt;/div&amp;gt;
        //                     &amp;lt;/main&amp;gt;
        //                 &amp;lt;/section&amp;gt;
        //                 &lt;/code&gt;
        //             &lt;/pre&gt;
        //             &lt;div class=&quot;grid md:grid-cols-2 gap-6&quot;&gt;
        //                 &lt;pre class=&quot;rounded-xl&quot; style=&quot;max-width: 0; min-width: 100%; width: 100%; overflow: auto;&quot;&gt;
        //                 &lt;code class=&quot;language-css&quot;&gt;
        //                     .section-top {
        //                         background-image: url('../img/bg-main.jpg');
        //                         background-position: center;
        //                         background-repeat: no-repeat;
        //                         background-size: cover;
        //                         height: 100vh;
        //                     }
                                
        //                     .row {
        //                         display: grid;
        //                         grid-template-columns: repeat(12, minmax(0, 1fr));
        //                     }
                                
        //                     .nav {
        //                         grid-column: span 10 / span 10;
        //                         grid-column-start: 2;
        //                         display: flex;
        //                         justify-content: space-between;
        //                         align-items: center;
        //                         padding: 2rem 0;
        //                         position: relative;
        //                         z-index: 2;
        //                     }
        //                 &lt;/code&gt;
        //                 &lt;/pre&gt;
        //                 &lt;pre class=&quot;rounded-xl&quot; style=&quot;max-width: 0; min-width: 100%; width: 100%; overflow: auto;&quot;&gt;
        //                 &lt;code class=&quot;language-javascript&quot;&gt;
        //                     form.addEventListener('submit', e =&gt; {
        //                         e.preventDefault();
        //                         formSubmit.innerHTML = &quot;Tunggu&quot;;
        //                         formSubmit.setAttribute('disabled', 'disabled');
        //                         fetch(scriptURL, {
        //                             method: 'POST',
        //                             body: new FormData(form)
        //                             })
        //                             .then(response =&gt; {
        //                             setAlert(&quot;Pesan Berhasil Dikirim!!&quot;);
        //                             console.log('Success!', response);
        //                             })
        //                             .catch(error =&gt; {
        //                             setAlert(&quot;Pesan Gagal Dikirim!!&quot;);
        //                             console.error('Error!', error.message);
        //                             })
        //                         });
        //                 &lt;/code&gt;
        //                 &lt;/pre&gt;
        //             &lt;/div&gt;
        //         &lt;/div&gt;
        //     &lt;/div&gt;
        //     &lt;/section&gt;
        //     &lt;section class=&quot;grid grid-cols-12 sm:gap-6 gap-1 py-16 bg-mycolor text-center&quot;&gt;
        //     &lt;div class=&quot;col-span-10 col-start-2&quot;&gt;
        //         &lt;div class=&quot;space-y-5 relative&quot;&gt;
        //             &lt;h1 class=&quot;sm:text-5xl text-3xl font-bold font-montserrat text-white&quot;&gt;Tunggu Apa Lagi?&lt;/h1&gt;
        //             &lt;a class=&quot;font-poppins font-medium inline-block py-1.5 px-8 rounded-full bg-white text-mycolor&quot; href=&quot;{{ route('codes') }}&quot;&gt;Coba Sekarang&lt;/a&gt;
        //         &lt;/div&gt;
        //         &lt;img class=&quot;mx-auto -mt-24&quot; src=&quot;{{ asset('img/human-study.png') }}&quot; alt=&quot;Footer Image&quot;&gt;
        //     &lt;/div&gt;
        //     &lt;/section&gt;
        //     @endsection",
        //     'lang_id' => 2,
        //     'user_id' => 1,
        //     'views' => 0
        // ]);

        Lang::create([
            'name' => 'Teks',
            'key' => 'Text'
        ]);

        Lang::create([
            'name' => 'HTML',
            'key' => 'html'
        ]);

        Lang::create([
            'name' => 'CSS',
            'key' => 'css'
        ]);

        Lang::create([
            'name' => 'JavaScript',
            'key' => 'javascript'
        ]);

        Lang::create([
            'name' => 'C',
            'key' => 'c'
        ]);

        Lang::create([
            'name' => 'C#',
            'key' => 'csharp'
        ]);

        Lang::create([
            'name' => 'C++',
            'key' => 'cpp'
        ]);

        Lang::create([
            'name' => 'Dart',
            'key' => 'dart'
        ]);

        Lang::create([
            'name' => 'Django',
            'key' => 'django'
        ]);

        Lang::create([
            'name' => 'Jinja2',
            'key' => 'jinja2'
        ]);

        Lang::create([
            'name' => 'Docker',
            'key' => 'docker'
        ]);

        Lang::create([
            'name' => 'Git',
            'key' => 'git'
        ]);

        Lang::create([
            'name' => 'Go',
            'key' => 'go'
        ]);

        Lang::create([
            'name' => 'Java',
            'key' => 'java'
        ]);

        Lang::create([
            'name' => 'Kotlin',
            'key' => 'kotlin'
        ]);

        Lang::create([
            'name' => 'MongoDB',
            'key' => 'mongodb'
        ]);

        Lang::create([
            'name' => 'Objective-C',
            'key' => 'objectivec'
        ]);

        Lang::create([
            'name' => 'PHP',
            'key' => 'php'
        ]);

        Lang::create([
            'name' => 'Python',
            'key' => 'python'
        ]);

        Lang::create([
            'name' => 'R',
            'key' => 'r'
        ]);

        Lang::create([
            'name' => 'React JSX',
            'key' => 'jsx'
        ]);

        Lang::create([
            'name' => 'React TSX',
            'key' => 'tsx'
        ]);

        Lang::create([
            'name' => 'Ruby',
            'key' => 'ruby'
        ]);

        Lang::create([
            'name' => 'SASS',
            'key' => 'sass'
        ]);

        Lang::create([
            'name' => 'SCSS',
            'key' => 'scss'
        ]);

        Lang::create([
            'name' => 'SQL',
            'key' => 'sql'
        ]);

        Lang::create([
            'name' => 'Typescript',
            'key' => 'typescript'
        ]);

        Lang::create([
            'name' => 'Yaml',
            'key' => 'yaml'
        ]);
    }
}
