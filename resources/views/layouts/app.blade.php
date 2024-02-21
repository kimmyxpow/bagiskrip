@props(['title', 'lang'])

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />

    {{-- Icons --}}
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    @if (Route::is('show'))
    {{-- <link rel="stylesheet" href="{{ asset('css/prism.light.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/devibeans.min.css') }}" />
    @endif

    <title>{{ $title }}</title>
</head>

<body>
    <div class="overflow-x-hidden relative min-h-screen sm:bg-gray-50">
        <nav class="py-4 fixed top-0 inset-x-0 bg-gray-50/40 backdrop-blur-md z-50">
            <div class="container flex justify-between items-center">
                <a class="font-bold text-gray-800 text-lg" href="/">BagiSkrip</a>
                <a class="inline-block py-2 px-6 rounded-lg border border-indigo-600 text-indigo-600 font-medium hover:bg-indigo-100 focus:text-white focus:bg-indigo-600 transition-all duration-300 focus:outline-none" href="{{ route('index') }}">
                    Berbagi
                </a>
            </div>
        </nav>

        <main class="my-32">
            <div class="container lg:grid grid-cols-12 lg:gap-10 lg:space-y-0 space-y-10">
                <div class="xl:col-span-8 col-span-7">
                    {{ $slot }}
                </div>
                <hr class="sm:hidden">
                <div class="xl:col-span-4 col-span-5 space-y-10">
                    <div class="sm:bg-white sm:p-10 sm:rounded-xl sm:shadow-2xl sm:shadow-gray-200">
                        <h2 class="text-lg font-bold text-gray-600 mb-4">Skrip Publik Terbaru</h2>
                        @forelse ($latestScripts as $script)
                        <div class="grid py-2 border-y border-gray-100">
                            <a class="hover:underline text-gray-600 font-bold truncate" href="{{ route('show', $script->hash) }}">
                                {{ $script->title }}
                            </a>
                            <div class="flex items-center gap-4">
                                <div class="flex items-center gap-1 text-gray-600 text-sm">
                                    <i class='bx bx-time'></i>
                                    <span>{{ $script->created_at->diffForHumans() }}</span>
                                </div>
                                <div class="flex items-center gap-1 text-gray-600 text-sm">
                                    <i class='bx bx-code-alt'></i>
                                    <span>{{ $script->lang->name }}</span>
                                </div>
                                <div class="flex items-center gap-1 text-gray-600 text-sm">
                                    <i class='bx bx-show'></i>
                                    <span>{{ $script->views }}</span>
                                </div>
                            </div>
                        </div>
                        @empty
                        <p class="text-gray-600">Kami tidak menemukan apapun, sepertinya ada kesalahan</p>
                        @endforelse
                    </div>
                    <div class="sm:bg-white sm:p-10 sm:rounded-xl sm:shadow-2xl sm:shadow-gray-200">
                        <h2 class="text-lg font-bold text-gray-600 mb-4">Skrip Publik Populer</h2>
                        @forelse ($popularScripts as $script)
                        <div class="grid py-2 border-y border-gray-100">
                            <a class="hover:underline text-gray-600 font-bold truncate" href="{{ route('show', $script->hash) }}">
                                {{ $script->title }}
                            </a>
                            <div class="flex items-center gap-4">
                                <div class="flex items-center gap-1 text-gray-600 text-sm">
                                    <i class='bx bx-time'></i>
                                    <span>{{ $script->created_at->diffForHumans() }}</span>
                                </div>
                                <div class="flex items-center gap-1 text-gray-600 text-sm">
                                    <i class='bx bx-code-alt'></i>
                                    <span>{{ $script->lang->name }}</span>
                                </div>
                                <div class="flex items-center gap-1 text-gray-600 text-sm">
                                    <i class='bx bx-show'></i>
                                    <span>{{ $script->views }}</span>
                                </div>
                            </div>
                        </div>
                        @empty
                        <p class="text-gray-600">Kami tidak menemukan apapun, sepertinya ada kesalahan</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </main>

        <footer class="border-t border-gray-200 py-5">
            <div class="container flex justify-between items-center">
                <p class="text-center text-sm font-bold text-gray-500">
                    Copyright &copy; 2021 - {{ date('Y') }} BagiSkrip
                </p>
            </div>
        </footer>
    </div>

    @if (Route::is('show'))
    <script src="{{ asset('js/highlight.min.js') }}"></script>
    <script src="{{ asset('js/langs/' . $lang . '.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlightjs-line-numbers.js/2.8.0/highlightjs-line-numbers.min.js">
    </script>
    <script src="{{ asset('js/show.js') }}"></script>
    @endif
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>