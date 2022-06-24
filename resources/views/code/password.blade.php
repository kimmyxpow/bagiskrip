<x-app-layout title="Unlock {{ $code->title }} | BagiSkrip">
    <div class="space-y-6">
        <div class="space-y-2">
            <h1 class="text-2xl font-bold text-gray-600">Masukkan Password Untuk Mengakses</h1>
            <div class="flex items-center gap-4">
                <div class="flex items-center gap-1 text-gray-600">
                    <i class='bx bx-time'></i>
                    <span>{{ $code->created_at->diffForHumans() }}</span>
                </div>
                <div class="flex items-center gap-1 text-gray-600">
                    <i class='bx bx-code-alt'></i>
                    <span>{{ $code->lang->name }}</span>
                </div>
                <div class="flex items-center gap-1 text-gray-600">
                    <i class='bx bx-purchase-tag'></i>
                    <span>{{ $code->visibility->name }}</span>
                </div>
                <div class="flex items-center gap-1 text-gray-600">
                    <i class='bx bx-show'></i>
                    <span>{{ $code->views }}</span>
                </div>
            </div>
        </div>
        @if (session()->has('message'))
            <div class="bg-orange-500 text-white font-medium py-2 px-6 rounded-lg">
                <p>{{ session('message') }}</p>
            </div>
        @endif
        <form action="{{ route('unlock', $code->hash) }}" method="POST" class="flex items-center gap-2">
            @csrf
            <input
                class="border border-gray-200 rounded-lg focus:outline-none py-2 px-4 ring ring-transparent focus:border-indigo-600 focus:ring-indigo-200 transition-all duration-300 w-full"
                name="password" id="password" autocomplete="current-password" type="password"
                placeholder="Ketik password disini..." />
            <button
                class="inline-block py-2 px-6 rounded-lg bg-indigo-600 text-white font-medium hover:bg-indigo-700 ring ring-transparent focus:bg-indigo-700 focus:ring-indigo-200 transition-all duration-300 shadow-xl shadow-indigo-200 focus:shadow-transparent focus:outline-none">
                Buka
            </button>
        </form>
    </div>
</x-app-layout>
