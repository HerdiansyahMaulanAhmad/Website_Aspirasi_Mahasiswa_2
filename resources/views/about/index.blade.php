<!-- resources/views/about/index.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('About') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-2xl font-bold mb-6">Tentang Sistem Laporan Aspirasi</h1>
                    
                    <div class="space-y-6 text-lg">
                        <div>
                            <h2 class="text-xl font-semibold mb-2">Apa itu Sistem Laporan Aspirasi?</h2>
                            <p>Sistem Laporan Aspirasi adalah platform yang memungkinkan pengguna untuk menyampaikan aspirasi, saran, kritik, atau ide secara anonim. Sistem ini dirancang untuk memberikan ruang bagi semua orang untuk bersuara tanpa khawatir identitas mereka diketahui publik.</p>
                        </div>
                        
                        <div>
                            <h2 class="text-xl font-semibold mb-2">Tujuan</h2>
                            <p>Tujuan dari Sistem Laporan Aspirasi adalah:</p>
                            <ul class="list-disc list-inside mt-2 ml-4">
                                <li>Menyediakan wadah untuk menyampaikan aspirasi secara terbuka</li>
                                <li>Mengumpulkan masukan dan ide dari berbagai pihak</li>
                                <li>Mendorong transparansi dan partisipasi aktif</li>
                                <li>Memfasilitasi komunikasi dua arah antara pengguna dan pengelola</li>
                            </ul>
                        </div>
                        
                        <div>
                            <h2 class="text-xl font-semibold mb-2">Cara Kerja</h2>
                            <p>Sistem ini bekerja dengan sangat sederhana:</p>
                            <ol class="list-decimal list-inside mt-2 ml-4">
                                <li>Pengguna melakukan registrasi dan login</li>
                                <li>Pengguna dapat menyampaikan aspirasi melalui form yang tersedia</li>
                                <li>Aspirasi akan ditampilkan secara anonim, tanpa menampilkan identitas pengirim</li>
                                <li>Pengirim aspirasi dapat menghapus aspirasi yang telah dikirim jika diperlukan</li>
                                <li>Semua pengguna dapat melihat aspirasi yang telah dikirimkan</li>
                            </ol>
                        </div>
                        
                        <div>
                            <h2 class="text-xl font-semibold mb-2">Keamanan dan Privasi</h2>
                            <p>Kami menjamin keamanan dan privasi pengguna dengan:</p>
                            <ul class="list-disc list-inside mt-2 ml-4">
                                <li>Menampilkan semua aspirasi sebagai "Anonim" kepada publik</li>
                                <li>Mengenkripsi data pengguna</li>
                                <li>Membatasi akses ke data pengguna hanya untuk keperluan administratif</li>
                                <li>Memastikan bahwa hanya pemilik aspirasi yang dapat menghapus aspirasi mereka</li>
                            </ul>
                        </div>
                        
                        <div>
                            <h2 class="text-xl font-semibold mb-2">Kontak</h2>
                            <p>Jika Anda memiliki pertanyaan atau kendala terkait sistem ini, silakan hubungi kami melalui:</p>
                            <p class="mt-2">Email: admin@laporan-aspirasi.com</p>
                            <p>Telepon: 021-12345678</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>