<nav class="sticky top-0 grid grid-cols-12 gap-6 py-3 bg-white" style="z-index: 999;">
   <div class="flex justify-between col-span-10 col-start-2">
      <a href="/" class="flex justify-center items-center h-10 w-10 rounded-xl text-white" style="background-image: linear-gradient(to bottom left, #7C83FD, #96BAFF); box-shadow: 0 24px 25px -10px rgba(124, 131, 253, 0.38);">
         <i class="bx bx-clipboard"></i>
      </a>
      <div class="flex items-center gap-6">
         {{-- <button class="ring ring-offset-2 ring-transparent focus-within:ring-mycolor transition-all duration-300 rounded-full"><i class="bx bx-moon p-2.5 bg-mycolor text-white rounded-full text-lg"></i></button> --}}
            @if (Route::has('login'))
               @auth
                  <div class="relative">
                     <button id="menu-btn">
                        <img style="width: 40px; height: 40px; max-height: 40px; min-height: 40px; max-width: 40px; min-width: 40px;" class="object-cover object-center rounded-full" src="{{ Auth::user()->avatar }}" alt="">
                     </button>
                     <div class="absolute w-40 right-0 bg-mycolor rounded-xl flex flex-col overflow-hidden opacity-0 pointer-events-none invisible transition-all duration-300" id="menu-dropdown">
                        <a class="text-white flex items-center gap-1 font-poppins hover:bg-blue-500 py-2.5 px-5 transition-all duration-300" href="/codes">
                           <i class="bx bx-code text-xl"></i>
                           Kode Saya
                        </a>
                        <form method="POST" action="{{ route('logout') }}">
                           @csrf
                           <a class="text-white flex items-center gap-1 font-poppins hover:bg-blue-500 py-2.5 px-5 transition-all duration-300" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                              <i class="bx bx-log-out-circle text-xl"></i>
                              Keluar
                           </a>
                        </form>
                     </div>
                  </div>
               @else
                  <div class="flex gap-4 items-center">
                     @if (Route::has('register'))
                        <a class="font-poppins font-medium py-1.5 px-8 rounded-full bg-mycolor text-white ring ring-offset-2 ring-transparent focus:ring-mycolor transition-all duration-300" href="{{ route('register') }}">Daftar</a>
                     @endif

                     <a class="font-poppins font-medium text-mycolor-dark-text hover:underline" href="{{ route('login') }}">Masuk</a>
                  </div>
               @endauth
            @endif
      </div>
   </div>
</nav>