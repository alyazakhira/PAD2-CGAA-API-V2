## Website Simulasi CGAA
Website simulasi CGAA <i>(Certified Government Accounting Associate)</i> adalah platform berbasis web yang menyediakan paket ujian simulasi CGAA Daerah dan Pusat. Pengguna dapat menggunakan website ini untuk mengukur kemampuan pemahaman dan kesiapan dalam memnghadapi ujian CGAA asli. Semua soal yang disediakan dibuat semirip mungkin dengan soal ujian asli. 
<hr>
Repository ini merupakan API dari aplikasi CGAA yang mendukung pengaksesan data pada aplikasi. Tampilan dari aplikasi ini dapat diakses dari repository APP (https://github.com/Luthfia39/WebCGAA-APP).
<hr>

#### Langkah-langkah penggunaan:
- Clone repository dengan menjalankan perintah `git clone https://github.com/Luthfia39/WebCGAA-API`.
- Install project di komputer `composer install`.
- Buat file env untuk konfigurasi `copy .env.example .env`.
- Sesuaikan database dan koneksinya.
- Install sanctum `composer require laravel/sanctum`.
- Publish vendor sanctum `php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"`.
- Ubah konfigurasi file kernel.php menjadi (biasanya hanya di uncomment):
    `'api' => [
    \Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful::class,
    \Illuminate\Routing\Middleware\ThrottleRequests::class.':api',
    \Illuminate\Routing\Middleware\SubstituteBindings::class,
    ],`
- Jalankan migrasi dengan `php artisan migrate --seed`.
- Untuk melihat endpoint yang ada dapat dicek menggunakan `php artisan route:list`.
- Jangan lupa hidupkan server dengan `php artisan serve`
- API sudah dapat digunakan.

Catatan tambahan:
- Ketika ingin menjalankan update, menggunakan metode PUT pada HTTP
- Ketika ingin melakukan hapus data, menggunakan metode DELETE pada HTTP
