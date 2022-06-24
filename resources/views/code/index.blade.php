<x-app-layout title="BagiSkrip | Layanan Berbagi Kode Online">
    <div class="sm:bg-white sm:p-10 sm:rounded-xl sm:shadow-2xl sm:shadow-gray-200">
        <form action="{{ route('store') }}" method="POST" class="space-y-6">
            @csrf
            <div class="grid gap-2">
                <label class="text-gray-600 font-bold" for="script">
                    Masukkan Skrip :
                    <span class="text-red-600">*</span>
                </label>
                <textarea
                    class="border border-gray-200 rounded-lg focus:outline-none py-4 px-6 ring ring-transparent focus:border-indigo-600 focus:ring-indigo-200 h-96 resize-none transition-all duration-300"
                    name="script" id="script">{{ old('script') }}</textarea>
                @error('script')
                    <span class="font-bold text-red-600">{{ $message }}</span>
                @enderror
            </div>
            <div class="grid xl:grid-cols-2 lg:grid-cols-1 md:grid-cols-2 items-start gap-6">
                <div class="grid gap-2">
                    <label class="text-gray-600 font-bold" for="title">
                        Masukkan Judul / Nama Skrip :
                        <span class="text-red-600">*</span>
                    </label>
                    <input
                        class="border border-gray-200 rounded-lg focus:outline-none py-2 px-4 ring ring-transparent focus:border-indigo-600 focus:ring-indigo-200 transition-all duration-300"
                        name="title" id="title" value="{{ old('title') }}" />
                    @error('title')
                        <span class="font-bold text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div class="grid gap-2">
                    <label class="text-gray-600 font-bold" for="lang_hash">
                        Pilih Bahasa Skrip :
                        <span class="text-red-600">*</span>
                    </label>
                    <select
                        class="border border-gray-200 rounded-lg focus:outline-none py-2 px-4 ring ring-transparent focus:border-indigo-600 focus:ring-indigo-200 transition-all duration-300"
                        name="lang_hash" id="lang_hash">
                        <option value="" selected disabled>- Pilih -</option>
                        @foreach ($langs as $lang)
                            <option {{ old('lang_hash') === $lang->hash ? 'selected' : '' }}
                                value="{{ $lang->hash }}">{{ $lang->name }}</option>
                        @endforeach
                    </select>
                    @error('lang_hash')
                        <span class="font-bold text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div class="grid gap-2">
                    <label class="text-gray-600 font-bold" for="password">
                        Masukkan Password Skrip :
                    </label>
                    <input
                        class="border border-gray-200 rounded-lg focus:outline-none py-2 px-4 ring ring-transparent focus:border-indigo-600 focus:ring-indigo-200 transition-all duration-300"
                        name="password" id="password" autocomplete="current-password" type="password" />
                    @error('password')
                        <span class="font-bold text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div class="grid gap-2">
                    <label class="text-gray-600 font-bold" for="visibility_hash">
                        Pilih Visibilitas Skrip :
                        <span class="text-red-600">*</span>
                    </label>
                    <select
                        class="border border-gray-200 rounded-lg focus:outline-none py-2 px-4 ring ring-transparent focus:border-indigo-600 focus:ring-indigo-200 transition-all duration-300"
                        name="visibility_hash" id="visibility_hash">
                        <option value="" selected disabled>- Pilih -</option>
                        @foreach ($visibilities as $visibility)
                            <option value="{{ $visibility->hash }}">{{ $visibility->name }}</option>
                        @endforeach
                    </select>
                    @error('visibility_hash')
                        <span class="font-bold text-red-600">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <button
                class="inline-block py-2 px-6 rounded-lg bg-indigo-600 text-white font-medium hover:bg-indigo-700 ring ring-transparent focus:bg-indigo-700 focus:ring-indigo-200 transition-all duration-300 shadow-xl shadow-indigo-200 focus:shadow-transparent focus:outline-none">
                Bagikan
            </button>
        </form>
    </div>
</x-app-layout>
