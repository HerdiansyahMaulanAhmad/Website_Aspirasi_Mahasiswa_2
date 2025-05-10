<!-- resources/views/aspirasi/index.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Aspirasi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- Tampilkan pesan sukses atau error -->
                    @if (session('success'))
                        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif

                    <!-- Form untuk menambahkan aspirasi (hanya untuk user yang login) -->
                    @auth
                    <div class="mb-8">
                        <h3 class="text-lg font-semibold mb-3">Tambahkan Aspirasi Anda</h3>
                        <form action="{{ route('aspirasi.store') }}" method="POST">
                            @csrf
                            <div class="mb-4">
                                <textarea 
                                    name="komentar" 
                                    rows="4" 
                                    class="block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" 
                                    placeholder="Tulis aspirasi Anda di sini..."
                                    required
                                >{{ old('komentar') }}</textarea>
                                @error('komentar')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                                    Kirim Aspirasi
                                </button>
                            </div>
                        </form>
                    </div>
                    @else
                    <div class="bg-blue-100 border-l-4 border-blue-500 text-blue-700 p-4 mb-8" role="alert">
                        <p>Untuk menambahkan aspirasi, silahkan <a href="{{ route('login') }}" class="underline">login</a> atau <a href="{{ route('register') }}" class="underline">register</a> terlebih dahulu.</p>
                    </div>
                    @endauth

                    <!-- Daftar Aspirasi -->
                    <div>
                        <h3 class="text-lg font-semibold mb-4">Daftar Aspirasi</h3>
                        
                        @if($aspirasis->count() > 0)
                            <div class="space-y-6">
                                @foreach($aspirasis as $aspirasi)
                                    <div class="bg-gray-100 dark:bg-gray-700 p-4 rounded-lg">
                                        <div class="flex justify-between mb-2">
                                            <div>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                    <span class="font-semibold">Anonim</span> • 
                                                    {{ $aspirasi->created_at->format('d M Y, H:i') }}
                                                </p>
                                            </div>
                                            
                                            <!-- Tombol hapus hanya muncul jika user yang login adalah pemilik aspirasi -->
                                            @auth
                                                @if(Auth::id() === $aspirasi->user_id)
                                                    <form action="{{ route('aspirasi.destroy', $aspirasi) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus aspirasi ini?');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="text-red-600 dark:text-red-400 hover:text-red-800 dark:hover:text-red-300">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                            </svg>
                                                        </button>
                                                    </form>
                                                @endif
                                            @endauth
                                        </div>
                                        <div class="mt-2">
                                            <p class="text-gray-800 dark:text-gray-200">{{ $aspirasi->komentar }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <p class="text-gray-500 dark:text-gray-400">Belum ada aspirasi yang ditambahkan.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>