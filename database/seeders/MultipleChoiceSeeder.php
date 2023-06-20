<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MultipleChoice;

class MultipleChoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Soal CGAA Pusat
        MultipleChoice::create([
            'question_type' => 'pusat',
            'question' => '<p>Berikut merupakan aset dalam bentuk persediaan, kecuali&hellip;</p>',
            'question_explanation' => '<p>Persediaan adalah aset lancar dalam bentuk barang atau perlengkapan yang dimaksudkan untuk mendukung kegiatan operasional pemerintah, dan barang-barang yang dimaksudkan untuk dijual dan/atau diserahkan dalam rangka pelayanan kepada masyarakat. Persediaan merupakan aset berwujud:&nbsp;</p>

            <ul>
                <li>
                <p>Barang atau perlengkapan (supplies) yang digunakan dalam rangka kegiatan operasional pemerintah;</p>
                </li>
                <li>
                <p>Barang atau perlengkapan (supplies) yang digunakan dalam proses produksi;</p>
                </li>
                <li>
                <p>Barang dalam proses produksi yang dimaksudkan untuk dijual atau diserahkan kepada masyarakat;</p>
                </li>
                <li>
                <p>Barang yang disimpan untuk dijual atau diserahkan kepada masyarakat dalam rangka kegiatan pemerintahan.&nbsp;</p>
                </li>
            </ul>
            
            <p>Konstruksi dalam pengerjaan masuk dalam klasifikasi aset tetap yang meliputi aset dalam proses pembangunan namun pada tanggal laporan keuangan belum selesai seluruhnya.</p>',
            'answer_a' => '<p>Barang yang digunakan dalam rangka kegiatan operasional pemerintah</p>',
            'answer_b' => '<p>Konstruksi dalam pengerjaan</p>',
            'answer_c' => '<p>Barang yang digunakan dalam proses produksi</p>',
            'answer_d' => '<p>Barang yang dimaksudkan untuk dijual/diserahkan kepada masyarakat</p>',
            'correct_answer' => 'b',
        ]);
        // MultipleChoice::create([
        //     'question_type' => 'pusat',
        //     'question' => 'Pernyataan Standar Akuntansi Pemerintahan Nomor 5 menyatakan bahwa penilaian persediaan dapat menggunakan metode berikut, kecuali…',
        //     'question_explanation' => 'PSAP 5 mensyaratkan persediaan dapat dinilai menggunakan: 
        //     Metode sistematis seperti FIFO atau rata-rata tertimbang;
        //     Harga pembelian terakhir apabila setiap unit persediaan nilainya tidak material dan bermacam-macam jenis.',
        //     'answer_a' => 'Harga pasar',
        //     'answer_b' => 'First in First out',
        //     'answer_c' => 'Weighted-Average',
        //     'answer_d' => 'Harga pembelian terakhir',
        //     'correct_answer' => 'a',
        // ]);

        // MultipleChoice::create([
        //     'question_type' => 'pusat',
        //     'question' => 'Apa yang dimaksud dengan Laporan Operasional?',
        //     'question_explanation' => 'Laporan yang menyajikan ikhtisar sumber daya ekonomi yang menambah ekuitas dan penggunaannya dikelola oleh pemerintah pusat/daerah untuk kegiatan penyelenggaraan pemerintahan dalam periode pelaporan. Unsur yang dicakup secara langsung dalam Laporan Operasional terdiri dari Pendapatan-LO, Beban, Transfer, dan Pos-Pos Luar Biasa.',
        //     'answer_a' => 'Laporan yang menyajikan informasi kenaikan atau penurunan ekuitas tahun pelaporan dibandingkan dengan tahun sebelumnya',
        //     'answer_b' => 'Laporan yang meliputi penjelasan naratif atau rincian dari angka yang tertera dalam Laporan Realisasi Anggaran, Laporan Perubahan SAL, Laporan Operasional, Laporan Perubahan Ekuitas, Neraca, dan Laporan Arus Kas',
        //     'answer_c' => 'Laporan yang menyajikan ikhtisar sumber daya ekonomi yang menambah ekuitas dan penggunaannya dikelola oleh pemerintah pusat/daerah untuk kegiatan penyelenggaraan pemerintahan dalam periode pelaporan',
        //     'answer_d' => 'Laporan yang menyajikan informasi kas sehubungan dengan aktivitas operasi, investasi, pendanaan, dan transitoris yang menggambarkan saldo awal, penerimaan, pengeluaran, dan saldo akhir kas pemerintah pusat/daerah selama periode tertentu',
        //     'correct_answer' => 'c',
        // ]);
        
        // MultipleChoice::create([
        //     'question_type' => 'pusat',
        //     'question' => 'Apa yang dimaksud dengan penyusutan?',
        //     'question_explanation' => 'Nilai penyusutan untuk masing-masing periode diakui sebagai pengurang nilai tercatat aset tetap dalam neraca dan beban penyusutan dalam laporan operasional', 
        //     'answer_a' => 'Nilai buku aset yang dihitung dari biaya perolehan suatu aset setelah dikurangi akumulasi penyusutan',
        //     'answer_b' => 'Alokasi yang sistematis atas nilai suatu aset tetap yang dapat disusutkan (depreciable assets) selama masa manfaat aset yang bersangkutan',
        //     'answer_c' => 'Jumlah neto yang diharapkan dapat diperoleh pada akhir masa manfaat suatu aset setelah dikurangi taksiran biaya pelepasan',
        //     'answer_d' => 'Aset berwujud yang mempunyai masa manfaat lebih dari 12 (dua belas) bulan untuk digunakan, atau dimaksudkan untuk digunakan dalam kegiatan pemerintah atau dimanfaatkan oleh masyarakat umum',
        //     'correct_answer' => 'b',
        // ]);

        // MultipleChoice::create([
        //     'question_type' => 'pusat',
        //     'question' => 'Berikut merupakan metode penyusutan yang dapat digunakan berdasarkan pada Standar Akuntansi Pemerintahan berbasis Akrual, kecuali…',
        //     'question_explanation' => 'Menurut Standar Akuntansi Pemerintahan, metode penyusutan yang dapat dipergunakan antara lain: Metode garis lurus (straight line method), metode saldo menurun ganda (double declining balance method), dan metode unit produksi (unit of production method)',
        //     'answer_a' => 'Metode garis lurus (straight line method)',
        //     'answer_b' => 'Metode saldo menurun ganda (double declining balance method)',
        //     'answer_c' => 'Metode unit produksi (unit of production method)',
        //     'answer_d' => 'Metode penyusutan jumlah angka tahun (sum of the year digit method)',
        //     'correct_answer' => 'd',
        // ]);

        // MultipleChoice::create([
        //     'question_type' => 'pusat',
        //     'question' => 'Berikut merupakan contoh biaya yang dapat diatribusikan secara langsung kedalam biaya perolehan aset tetap, kecuali…',
        //     'question_explanation' => 'Biaya perolehan suatu aset tetap terdiri dari harga belinya atau konstruksinya, termasuk bea impor dan setiap biaya yang dapat diatribusikan secara langsung dalam membawa aset tersebut ke kondisi yang membuat aset tersebut dapat bekerja untuk penggunaan yang dimaksudkan. Contoh biaya yang dapat diatribusikan secara langsung adalah: 
        //     Biaya pengiriman awal (initial delivery) dan biaya simpan dan bongkar muat (handling cost);
        //     Biaya pemasangan (installation cost);
        //     Biaya profesional seperti arsitek dan insinyur; dan 
        //     Biaya konstruksi.',
        //     'answer_a' => 'Biaya pengiriman awal (initial delivery)',
        //     'answer_b' => 'Biaya simpan dan bongkar muat (handling cost)',
        //     'answer_c' => 'Biaya konsumsi panitia',
        //     'answer_d' => 'Biaya konstruksi',
        //     'correct_answer' => 'c',
        // ]);

        // MultipleChoice::create([
        //     'question_type' => 'pusat',
        //     'question' => 'Dari pernyataan berikut tentang penyusutan dan amortisasi, manakah pernyataan yang tidak benar?',
        //     'question_explanation' => 'Penyusutan adalah alokasi sistematis atas nilai suatu aset tetap yang dapat disusutkan selama masa manfaat aset yang bersangkutan. Nilai penyusutan untuk masing-masing periode diakui sebagai pengurang nilai tercatat aset tetap dalam neraca dan sebagai beban penyusutan dalam laporan operasional. Amortisasi adalah pengurangan nilai tak berwujud secara sistematis yang dilakukan setiap periode akuntansi dalam jangka waktu tertentu. Nilai amortisasi masing-masing periode diakui sebagai beban amortisasi yang disajikan di laporan operasional dan mengurangi nilai buku aset tak berwujud pada neraca.',
        //     'answer_a' => 'Penyusutan adalah alokasi sistematis atas nilai suatu aset tetap yang dapat disusutkan selama masa manfaat aset yang bersangkutan',
        //     'answer_b' => 'Nilai penyusutan untuk masing-masing periode diakui sebagai pengurang nilai tercatat aset tetap dalam neraca dan sebagai beban penyusutan dalam laporan operasional',
        //     'answer_c' => 'Nilai amortisasi masing-masing periode diakui sebagai penambah nilai buku aset tidak berwujud pada neraca',
        //     'answer_d' => 'Amortisasi merupakan pengurang nilai tak berwujud secara sistematis yang dilakukan setiap periode akuntansi dalam jangka waktu tertentu',
        //     'correct_answer' => 'c',
        // ]);

        // MultipleChoice::create([
        //     'question_type' => 'pusat',
        //     'question' => 'Apa yang membedakan antara Laporan Realisasi Anggaran (LRA) dan Laporan Operasional (LO)?',
        //     'question_explanation' => 'Komponen Laporan Keuangan termasuk: 
        //     Laporan Realisasi Anggaran (LRA): LRA merupakan komponen laporan keuangan yang menyediakan informasi mengenai realisasi pendapatan-LRA, belanja, transfer, surplus/defisit-LRA, dan pembiayaan dari suatu entitas pelaporan yang masing-masing diperbandingkan dengan anggarannya. Informasi tersebut berguna bagi para pengguna laporan dalam mengevaluasi keputusan mengenai alokasi sumber-sumber daya ekonomi, akuntabilitas, dan ketaatan entitas pelaporan terhadap anggaran. 
        //     Laporan Operasional (LO): LO merupakan komponen laporan keuangan yang menyediakan informasi mengenai seluruh kegiatan operasional keuangan entitas pelaporan yang tercerminkan dalam pendapatan-LO, beban, dan surplus/defisit operasional dari suatu entitas pelaporan. Disamping melaporkan kegiatan operasional, LO juga melaporkan transaksi keuangan dari kegiatan non operasional dan pos luar biasa yang merupakan transaksi di luar tugas dan fungsi utama entitas.',
        //     'answer_a' => 'LO merupakan komponen laporan keuangan yang menyediakan informasi mengenai realisasi, sedangkan LRA menyediakan mengenai seluruh kegiatan operasional keuangan entitas pelaporan',
        //     'answer_b' => 'LO merupakan komponen laporan keuangan yang menyajikan secara komparatif dengan periode sebelumnya, sedangkan LRA menggambarkan posisi keuangan suatu entitas pelaporan',
        //     'answer_c' => 'LO merupakan komponen laporan keuangan yang menyediakan informasi mengenai seluruh kegiatan operasional keuangan entitas pelaporan, sedangkan LRA menyediakan informasi mengenai realisasi yang berguna dalam mengevaluasi keputusan mengenai alokasi sumber daya ekonomi, akuntabilitas, dan ketaatan entitas pelaporan terhadap anggaran',
        //     'answer_d' => 'LO merupakan komponen keuangan yang berguna bagi pengambil keputusan dalam mengevaluasi informasi mengenai alokasi sumber daya ekonomi, akuntabilitas, dan ketaatan pelaporan terhadap anggaran, sedangkan LRA melaporkan terkait kegiatan operasional, non operasional, dan pos luar biasa di luar tugas dan fungsi utama entitas',
        //     'correct_answer' => 'c',
        // ]);

        // MultipleChoice::create([
        //     'question_type' => 'pusat',
        //     'question' => 'Berikut merupakan bagian dari klasifikasi ekonomi belanja, kecuali…',
        //     'question_explanation' => 'Berdasarkan klasifikasi ekonomi, maka belanja dapat dibagi menjadi 8 (delapan) jenis, yaitu: 
        //         Belanja Pegawai;
        //         Belanja Barang;
        //         Belanja Modal;
        //         Belanja Bunga Utang;
        //         Belanja Subsidi;
        //         Belanja Bantuan Sosial
        //         Belanja Lain-lain',
        //     'answer_a' => 'Belanja Pegawai',
        //     'answer_b' => 'Belanja Bantuan Sosial',
        //     'answer_c' => 'Belanja Barang',
        //     'answer_d' => 'Belanja Perjalanan Dinas',
        //     'correct_answer' => 'd',
        // ]);

        // MultipleChoice::create([
        //     'question_type' => 'pusat',
        //     'question' => 'Berikut merupakan pernyataan terkait definisi Beban, kecuali…',
        //     'question_explanation' => 'Definisi Beban adalah penurunan manfaat ekonomi atau potensi jasa atau biaya yang timbul akibat transaksi tersebut dalam periode laporan yang berdampak pada penurunan ekuitas, baik berupa pengeluaran, konsumsi aset, atau timbulnya kewajiban.',
        //     'answer_a' => 'Merupakan penurunan manfaat ekonomi atau potensi jasa',
        //     'answer_b' => 'Merupakan biaya yang timbul akibat dari transaksi yang timbul dalam periode laporan yang berdampak pada penurunan ekuitas',
        //     'answer_c' => 'Pengeluaran dari Rekening Kas Umum Negara',
        //     'answer_d' => 'Berupa pengeluaran, konsumsi aset, atau timbulnya kewajiban',
        //     'correct_answer' => 'c',
        // ]);

        // MultipleChoice::create([
        //     'question_type' => 'pusat',
        //     'question' => 'Kapan transaksi Beban dapat diakui dalam laporan keuangan?',
        //     'question_explanation' => 'Beban diakui pada saat terjadi penurunan manfaat ekonomi atau potensi jasa, terjadi konsumsi aset, dan timbulnya kewajiban.',
        //     'answer_a' => 'Terjadinya pengeluaran dari Rekening Kas Umum Negara',
        //     'answer_b' => 'Terjadi penurunan manfaat ekonomi atau potensi jasa',
        //     'answer_c' => 'Terjadi pengesahan dari Bendahara Umum Negara/Kuasa Bendahara Umum Negara',
        //     'answer_d' => 'Pengembalian dari tahun anggaran berjalan',
        //     'correct_answer' => 'b',
        // ]);

        // MultipleChoice::create([
        //     'question_type' => 'pusat',
        //     'question' => 'Penerimaan/pengeluaran uang dari suatu entitas pelaporan dari/kepada entitas pelaporan lain, termasuk dana perimbangan, dana otonomi khusus, dan dana penyesuaian serta dana bagi hasil pemerintah daerah merupakan definisi dari…',
        //     'question_explanation' => 'Transfer adalah penerimaan/pengeluaran uang dari suatu entitas pelaporan dari/kepada entitas pelaporan lain, termasuk dana perimbangan, dana otonomi khusus, dan dana penyesuaian serta dana bagi hasil pemerintah daerah.',
        //     'answer_a' => 'Transfer',
        //     'answer_b' => 'Belanja',
        //     'answer_c' => 'Beban',
        //     'answer_d' => 'Pendapatan',
        //     'correct_answer' => 'a',
        // ]);

        // MultipleChoice::create([
        //     'question_type' => 'pusat',
        //     'question' => 'Mulai dari tahun 2021, apa metode penilaian persediaan yang digunakan oleh Pemerintah?',
        //     'question_explanation' => 'Metode First in First out merupakan metode dimana barang yang masuk terlebih dahulu dianggap sebagai barang yang pertama kali keluar. Dengan metode ini saldo persediaan dihitung berdasarkan harga perolehan masing-masing. Penilaian persediaan menggunakan FIFO diterapkan mulai tahun 2021 secara prospektif, setelah Pemerintah menerapkan Metode Harga Perolehan Terakhir pada tahun-tahun sebelumnya.',
        //     'answer_a' => 'Harga pasar',
        //     'answer_b' => 'First in First out',
        //     'answer_c' => 'Weighted-Average',
        //     'answer_d' => 'Harga pembelian terakhir',
        //     'correct_answer' => 'b',
        // ]);

        // MultipleChoice::create([
        //     'question_type' => 'pusat',
        //     'question' => 'Apa yang dimaksud dengan metode penilaian persediaan First in First out?',
        //     'question_explanation' => 'Metode First in First out merupakan metode dimana barang yang masuk terlebih dahulu dianggap sebagai barang yang pertama kali keluar. Dengan metode ini saldo persediaan dihitung berdasarkan harga perolehan masing-masing. Penilaian persediaan menggunakan FIFO diterapkan mulai tahun 2021 secara prospektif, setelah Pemerintah menerapkan Metode Harga Perolehan Terakhir pada tahun-tahun sebelumnya.',
        //     'answer_a' => 'Pencatatan persediaan yang dilakukan setiap terjadi transaksi yang mempengaruhi persediaan',
        //     'answer_b' => 'Biaya langsung yang terkait dengan persediaan yang diproduksi dan biaya tidak langsung yang dialokasikan secara sistematis',
        //     'answer_c' => 'Penilaian persediaan dimana barang yang masuk terlebih dahulu dianggap sebagai barang yang pertama kali keluar',
        //     'answer_d' => 'Pencatatan persediaan dimana barang yang masuk terakhir dianggap sebagai barang yang pertama kali keluar',
        //     'correct_answer' => 'c',
        // ]);

        // MultipleChoice::create([
        //     'question_type' => 'pusat',
        //     'question' => 'Dalam rangka penyajian beban persediaan pada Laporan Operasional, yang dikecualikan dari beban persediaan adalah sebagai berikut, kecuali…',
        //     'question_explanation' => 'Dalam rangka penyajian beban persediaan pada Laporan Operasional, Beban Persediaan dicatat sebesar pemakaian persediaan (use of goods). Dikecualikan dari Beban Persediaan adalah: 
        //     Pemakaian barang persediaan untuk pemeliharaan yang dicatat sebagai Beban Pemeliharaan;
        //     Penyerahan barang persediaan untuk dijual/diserahkan kepada masyarakat/pemda yang dicatat sebagai Beban Barang untuk Dijual/Diserahkan kepada Masyarakat/Pemda;
        //     Penyerahan barang persediaan dalam rangka bantuan sosial yang dicatat sebagai Beban Bantuan Sosial; dan 
        //     Penyerahan barang persediaan untuk tujuan strategis/berjaga-jaga yang dicatat sebagai Beban Persediaan untuk Tujuan Strategis/Berjaga-jaga.',
        //     'answer_a' => 'Pemakaian barang persediaan untuk pemeliharaan ',
        //     'answer_b' => 'Penyerahan barang persediaan dalam rangka bantuan sosial ',
        //     'answer_c' => 'Pemakaian sebesar pemakaian persediaan (use of goods)',
        //     'answer_d' => 'Penyerahan barang persediaan untuk tujuan strategis/berjaga-jaga',
        //     'correct_answer' => 'c',
        // ]);

        // MultipleChoice::create([
        //     'question_type' => 'pusat',
        //     'question' => 'Pendapatan tunai diterima oleh Bendahara Pengeluaran dan/atau Bendahara Penerimaan entitas akuntansi/pelaporan pemerintah. Dalam hal pemungutan pajak belum disetor ke rekening kas negara maka akan disajikan sebagai…',
        //     'question_explanation' => 'Jurnal pada entitas akuntansi/pelaporan pemungut pajak atas pendapatan tunai dari pungutan pajak belum disetor ke rekening kas negara: 
        //         Kas lainnya di bendahara
        //         Utang pajak bendahara yang belum disetor',
        //     'answer_a' => 'Kas',
        //     'answer_b' => 'Utang pajak bendahara yang belum disetor',
        //     'answer_c' => 'Kas lainnya di bendahara',
        //     'answer_d' => 'Pendapatan perpajakan',
        //     'correct_answer' => 'b',
        // ]);

        // MultipleChoice::create([
        //     'question_type' => 'pusat',
        //     'question' => 'Definisi dari investasi jangka pendek pemerintah adalah…',
        //     'question_explanation' => 'Investasi jangka pendek adalah investasi yang dapat segera dicairkan dan dimaksudkan untuk dimiliki selama lebih dari 3 (tiga) bulan sampai dengan 12 (dua belas) bulan.',
        //     'answer_a' => 'Dimaksudkan untuk dimiliki lebih dari 12 bulan ',
        //     'answer_b' => 'Meliputi investasi permanen',
        //     'answer_c' => 'Meliputi investasi non permanen',
        //     'answer_d' => 'Dimaksudkan untuk dimiliki selama lebih dari 3 bulan sampai 12 bulan',
        //     'correct_answer' => 'd',
        // ]);

        // MultipleChoice::create([
        //     'question_type' => 'pusat',
        //     'question' => 'Berikut merupakan tujuan laporan keuangan, kecuali…',
        //     'question_explanation' => 'Tujuan laporan keuangan adalah menyajikan informasi mengenai posisi keuangan, realisasi anggaran, saldo anggaran lebih, arus kas, hasil operasi, dan perubahan ekuitas suatu entitas pelaporan yang bermanfaat bagi para pengguna dalam membuat dan mengevaluasi keputusan mengenai alokasi sumber daya. Secara spesifik, tujuan pelaporan keuangan pemerintah adalah untuk menyajikan informasi yang berguna bagi pengambilan keputusan dan untuk menunjukkan akuntabilitas entitas pelaporan atas sumber daya yang dipercayakan kepadanya.',
        //     'answer_a' => 'Menyajikan informasi mengenai posisi keuangan, realisasi anggaran, saldo anggaran lebih, arus kas, hasil operasi, dan perubahan ekuitas suatu entitas pelaporan',
        //     'answer_b' => 'Menyajikan informasi yang berguna bagi pengambilan keputusan',
        //     'answer_c' => 'Menyajikan informasi berkaitan dengan opini atas penyajian laporan keuangan',
        //     'answer_d' => 'Menunjukkan akuntabilitas entitas pelaporan atas sumber daya yang dipercayakan kepadanya',
        //     'correct_answer' => 'c',
        // ]);

        // MultipleChoice::create([
        //     'question_type' => 'pusat',
        //     'question' => 'Berikut merupakan transaksi yang dilakukan pemerintah:
        //     Pembelian obligasi atau surat utang jangka panjang yang dimaksudkan untuk dimiliki sampai dengan tanggal jatuh tempo;
        //     Penanaman modal dalam proyek pembangunan yang dapat dialihkan kepada pihak ketiga;
        //     Dana yang disisihkan pemerintah dalam rangka pelayanan masyarakat seperti bantuan modal kerja secara bergulir kepada kelompok masyarakat;
        //     Transaksi tersebut masuk kedalam kategori…',
        //     'question_explanation' => 'Investasi non permanen merupakan investasi jangka panjang yang kepemilikannya berjangka waktu lebih dari 12 bulan dimaksudkan untuk tidak dimiliki terus menerus/berkelanjutan atau ada niat untuk memperjualbelikan atau menarik kembali. Investasi non permanen dapat berupa: 
        //     Pembelian obligasi atau surat utang jangka panjang yang dimaksudkan untuk dimiliki sampai dengan tanggal jatuh tempo;
        //     Penanaman modal dalam proyek pembangunan yang dapat dialihkan kepada pihak ketiga;
        //     Dana yang disisihkan pemerintah dalam rangka pelayanan masyarakat seperti bantuan modal kerja secara bergulir kepada kelompok masyarakat;
        //     Investasi non permanen lainnya, yang sifatnya tidak dimaksudkan untuk dimiliki pemerintah secara berkelanjutan, seperti penyerahan modal yang dimaksudkan untuk penyehatan/penyelamatan perekonomian.',
        //     'answer_a' => 'Investasi non permanen',
        //     'answer_b' => 'Investasi permanen',
        //     'answer_c' => 'Penyertaan modal negara',
        //     'answer_d' => 'Investasi jangka pendek',
        //     'correct_answer' => 'a',
        // ]);

        // MultipleChoice::create([
        //     'question_type' => 'pusat',
        //     'question' => 'Berikut merupakan jenis-jenis dari piutang jangka pendek, kecuali…',
        //     'question_explanation' => ' Jenis-jenis piutang jangka pendek:
        //     Piutang pajak 
        //     Piutang bukan pajak 
        //     Bagian lancar tagihan penjualan angsuran 
        //     Bagian lancar tagihan tuntutan perbendaharaan/tuntutan ganti rugi
        //     Bagian lancar piutang jangka panjang
        //     Beban dibayar di muka/uang muka belanja
        //     Piutang BLU
        //     Piutang transfer ke daerah 
        //     Piutang yang timbul dari putusan pengadilan',
        //     'answer_a' => 'Piutang pajak',
        //     'answer_b' => 'Piutang bukan pajak ',
        //     'answer_c' => 'Piutang tagihan penjualan angsuran',
        //     'answer_d' => 'Bagian lancar tagihan penjualan angsuran',
        //     'correct_answer' => 'c',
        // ]);

        // MultipleChoice::create([
        //     'question_type' => 'pusat',
        //     'question' => 'Piutang tuntutan perbendaharaan/tuntutan ganti rugi diakui apabila telah memenuhi kriteria…',
        //     'question_explanation' => 'Piutang tagihan TP/TGR diakui apabila telah memenuhi kriteria: 
        //     Telah ditandatanganinya Surat Keterangan Tanggung Jawab Mutlak (SKTJM)
        //     Telah diterbitkan:
        //     Surat keputusan pembebanan sementara kepada pihak yang dikenakan tuntutan perbendaharaan; atau 
        //     Surat Keputusan Pembebanan Penggantian Kerugian Sementara (SKP2KS) kepada pihak yang dikenakan tuntutan ganti kerugian negara bukan bendahara; atau 
        //     Telah ada putusan Lembaga Peradilan yang berkekuatan hukum tetap (in kracht van gewijsde) yang menghukum seseorang untuk membayar sejumlah uang kepada Pemerintah.',
        //     'answer_a' => 'Telah timbul surat tagihan pajak',
        //     'answer_b' => 'Telah diterbitkan surat penagihan',
        //     'answer_c' => 'Telah dilaksanakan penagihan',
        //     'answer_d' => 'Telah ditandatangani Surat Keterangan Tanggung Jawab Mutlak',
        //     'correct_answer' => 'd',
        // ]);

        // MultipleChoice::create([
        //     'question_type' => 'pusat',
        //     'question' => 'Hal-hal yang perlu dipertimbangkan dalam pencatatan Persediaan untuk operasional kegiatan satker adalah sebagai berikut, kecuali…',
        //     'question_explanation' => 'Hal-hal yang perlu dipertimbangkan dalam pencatatan Persediaan untuk operasional kegiatan satker adalah:
        //     Materialitas;
        //     Pencerminan dari tugas dan fungsi utama satker; dan 
        //     Pengendalian internal',
        //     'answer_a' => 'Kebaruan persediaan',
        //     'answer_b' => 'Materialitas',
        //     'answer_c' => 'Pencerminan dari tugas dan fungsi utama satker',
        //     'answer_d' => 'Pengendalian internal ',
        //     'correct_answer' => 'a',
        // ]);

        // MultipleChoice::create([
        //     'question_type' => 'pusat',
        //     'question' => 'Barang persediaan terdiri dari:
        //     Barang habis pakai
        //     Barang tak habis pakai 
        //     Barang bekas pakai 
        //     Ketiga jenis tersebut merupakan pengkategorian persediaan berdasarkan…',
        //     'question_explanation' => 'Jenis-jenis persediaan berdasarkan sifat pemakaiannya terdiri atas:
        //         Barang habis pakai
        //         Barang tak habis pakai 
        //         Barang bekas pakai ',
        //     'answer_a' => 'Bentuk',
        //     'answer_b' => 'Jenis ',
        //     'answer_c' => 'Sifat ',
        //     'answer_d' => 'Legalitas',
        //     'correct_answer' => 'c',
        // ]);

        // MultipleChoice::create([
        //     'question_type' => 'pusat',
        //     'question' => 'Berikut merupakan klasifikasi aset tetap, kecuali…',
        //     'question_explanation' => 'Aset Tetap diklasifikasikan berdasarkan kesamaan dalam sifat atau fungsinya dalam aktivitas operasi entitas. Klasifikasi Aset Tetap adalah sebagai berikut: 
        //         Tanah;
        //         Peralatan dan Mesin;
        //         Gedung dan Bangunan;
        //         Jalan, Irigasi, dan Jaringan;
        //         Aset Tetap Lainnya;
        //         Konstruksi dalam Pengerjaan (KDP).',
        //     'answer_a' => 'Tanah',
        //     'answer_b' => 'Persediaan',
        //     'answer_c' => 'Peralatan ',
        //     'answer_d' => 'Mesin',
        //     'correct_answer' => 'b',
        // ]);

        // MultipleChoice::create([
        //     'question_type' => 'pusat',
        //     'question' => 'Suatu transaksi sampai dengan aset tersebut dalam kondisi siap digunakan yang mencakup pembelian, transfer masuk, hibah masuk merupakan pengakuan atas Aset Tetap pada jenis transaksi…',
        //     'question_explanation' => 'Perolehan adalah suatu transaksi perolehan Aset Tetap sampai dengan aset tersebut dalam kondisi siap digunakan. Perolehan aset tetap antara lain mencakup transaksi pembelian, transfer masuk, hibah masuk, dan perolehan lainnya. ',
        //     'answer_a' => 'Perubahan',
        //     'answer_b' => 'Penghentian',
        //     'answer_c' => 'Perolehan',
        //     'answer_d' => 'Pelepasan',
        //     'correct_answer' => 'c',
        // ]);

        // MultipleChoice::create([
        //     'question_type' => 'pusat',
        //     'question' => 'Biaya perolehan aset tetap terdiri atas harga pembelian dan biaya lainnya yang dapat dihubungkan kepada aset. Berikut merupakan biaya yang secara langsung dapat dihubungkan/diatribusikan dengan aset, kecuali…',
        //     'question_explanation' => 'Bea impor dan pajak pembelian merupakan bagian dari harga pembelian atau biaya konstruksi atas aset tetap yang juga merupakan komponen biaya perolehan atas aset tetap.',
        //     'answer_a' => 'Biaya persiapan tempat',
        //     'answer_b' => 'Bea impor dan pajak pembelian',
        //     'answer_c' => 'Biaya pemasangan',
        //     'answer_d' => 'Biaya konstruksi',
        //     'correct_answer' => 'b',
        // ]);

        // MultipleChoice::create([
        //     'question_type' => 'pusat',
        //     'question' => 'Metode penyusutan aset tetap yang diterapkan pemerintah untuk mengalokasikan nilai/besaran aset yang dapat didepresiasikan secara sistematis sepanjang umur aset adalah…',
        //     'question_explanation' => 'Metode penyusutan aset tetap yang diterapkan pemerintah untuk mengalokasikan nilai/besaran aset yang dapat didepresiasikan secara sistematis sepanjang umur aset adalah metode garis lurus (straight line method). Metode garis lurus menetapkan tarif penyusutan untuk masing-masing periode dengan jumlah yang sama. ',
        //     'answer_a' => 'Metode jumlah angka tahun',
        //     'answer_b' => 'Metode saldo menurun',
        //     'answer_c' => 'Metode depresiasi khusus',
        //     'answer_d' => 'Metode garis lurus',
        //     'correct_answer' => 'd',
        // ]);

        // MultipleChoice::create([
        //     'question_type' => 'pusat',
        //     'question' => 'Secara umum dalam konteks pemerintahan, kewajiban jangka pendek dapat muncul antara lain karena…',
        //     'question_explanation' => 'Secara umum dalam konteks pemerintahan, kewajiban jangka pendek dapat muncul antara lain karena:
        //     penggunaan sumber pembiayaan berupa pinjaman yang bersifat jangka pendek dari masyarakat dan lembaga keuangan; 
        //     perikatan dengan pegawai yang bekerja pada pemerintah;
        //     kewajiban kepada masyarakat luas dalam tempo kurang dari 1 (satu) tahun, yaitu kewajiban tunjangan, kompensasi, ganti rugi, kelebihan setoran pajak dari wajib pajak, atau kewajiban dengan pemberi jasa lainnya; 
        //     kewajiban kepada entitas lainnya sebagai konsekuensi alokasi/ realokasi pendapatan atau anggaran; 
        //     kewajiban kepada lembaga internasional karena menjadi anggota yang harus memberikan iuran secara rutin dalam tempo kurang dari satu tahun; dan/ atau 
        //     kewajiban kepada wajib bayar PNBP yang timbul karena Pemerintah telah menerima uang dari wajib bayar namun Pemerintah belum dapat menyelenggarakan jasa/ pelayanan kepada wajib bayar sampai dengan tanggal pelaporan.
        //     ',
        //     'answer_a' => 'Penggunaan sumber pembiayaan berupa pinjaman yang bersifat jangka panjang',
        //     'answer_b' => 'Penggunaan sumber pembiayaan jangka panjang yang berasal dari masyarakat, lembaga keuangan, entitas pemerintahan lain, maupun lembaga internasional',
        //     'answer_c' => 'Kewajiban kepada wajib bayar PNBP yang timbul karena Pemerintah telah menerima uang dari wajib bayar namun belum dapat menyelenggarakan jasa/pelayanan kepada wajib bayar',
        //     'answer_d' => 'Kewajiban dengan pemberi jasa yang penyelesaiannya melalui cicilan dengan jangka waktu lebih dari satu tahun',
        //     'correct_answer' => 'c',
        // ]);

        // MultipleChoice::create([
        //     'question_type' => 'pusat',
        //     'question' => 'Bagaimana cara pengakuan utang perhitungan fihak ketiga (PFK)?',
        //     'question_explanation' => 'Pengakuan utang PFK:
        //     Pada saat dilakukan pemotongan oleh BUN atau diterima oleh BUN untuk PFK yang disetorkan oleh BUD; atau 
        //     Pada akhir periode pelaporan, saldo pungutan/potongan berupa PFK yang belum disetorkan kepada pihak lain dicatat pada periode laporan keuangan sebesar jumlah yang masih harus disetorkan
        //     ',
        //     'answer_a' => 'Diakui pada saat melakukan reklasifikasi pinjaman jangka panjang',
        //     'answer_b' => 'Diakui pada saat telah menerima barang/jasa/uang, namun pemerintah belum menyerahkan barang/jasa kepada pihak ketiga',
        //     'answer_c' => 'Diakui pada saat entitas rutin mengikat kontrak pengadaan barang atau jasa',
        //     'answer_d' => 'Diakui pada saat dilakukan pemotongan oleh BUN atau diterima oleh BUN',
        //     'correct_answer' => 'd',
        // ]);

        // MultipleChoice::create([
        //     'question_type' => 'pusat',
        //     'question' => 'Kekayaan bersih pemerintah yang merupakan selisih antara aset dan kewajiban pemerintah disebut dengan…',
        //     'question_explanation' => 'Ekuitas adalah kekayaan bersih pemerintah yang merupakan selisih antara aset dan kewajiban pemerintah.',
        //     'answer_a' => 'Ekuitas',
        //     'answer_b' => 'Liabilitas',
        //     'answer_c' => 'Aset',
        //     'answer_d' => 'Piutang',
        //     'correct_answer' => 'a',
        // ]);

        // // Soal CGAA Daerah
        // MultipleChoice::create([
        //     'question_type' => 'daerah',
        //     'question' => 'Pengakuan manakah yang sesuai klasifikasi dalam format APBD?',
        //     'question_explanation' => 'Belanja: Berbasis kas, saat terjadinya pengeluaran dari Rekening Kas BUD/ Bendahara Pengeluaran), dan saat pertanggungjawaban pengeluaran yang disahkan oleh unit yang mempunyai fungsi perbendaharaan
        //     Beban: Berbasis akrual, saat timbulnya kewajiban beban, saat terjadinya konsumsi aset non kas dalam kegiatan operasional pemerintah, dan saat terjadi penurunan nilai aset sehubungan dengan penggunaan aset bersangkutan
        //     ',
        //     'answer_a' => 'Belanja berbasis kas',
        //     'answer_b' => 'Biaya berbasis akrual',
        //     'answer_c' => 'Beban berbasis kas',
        //     'answer_d' => 'Biaya berbasis akrual',
        //     'correct_answer' => 'a',
        // ]);

        // MultipleChoice::create([
        //     'question_type' => 'daerah',
        //     'question' => 'Yang merupakan aset lancar adalah …',
        //     'question_explanation' => 'kewajiban jangka pendek dan utang jangka pendek = komponen pasiva, sementara investasi jangka panjang = aset non lancar',
        //     'answer_a' => 'Kewajiban jangka pendek',
        //     'answer_b' => 'Investasi jangka panjang',
        //     'answer_c' => 'Piutang jangka pendek',
        //     'answer_d' => 'Utang jangka pendek',
        //     'correct_answer' => 'c',
        // ]);

        // MultipleChoice::create([
        //     'question_type' => 'daerah',
        //     'question' => 'Setelah BUD menerima dokumen tagihan dari pihak ketiga atau dokumen sumber lainnya dan menyerahkan tembusannya kepada Fungsi Akuntansi PPKD, prosedur akuntansi selanjutnya adalah?',
        //     'question_explanation' => 'Bendahara Umum Daerah menerima dokumen tagihan dari pihak ketiga atau dokumen sumber lainnya dan menyerahkan tembusannya kepada Fungsi Akuntansi PPKD.
        //     Fungsi Akuntansi PPKD membuat memo jurnal/bukti memorial berdasarkan tembusan tagihan dari pihak ketiga atau dokumen sumber lainnya dari BUD/Kuasa BUD.
        //     Berdasarkan dokumen tersebut BUD/Kuasa BUD melakukan proses penatausahaan sesuai dengan sistem dan prosedur penatausahaan keuangan, kemudian menyerahkan tembusan dokumen pembayaran yaitu SP2D tersebut kepada fungsi akuntansi PPKD.
        //     Fungsi Akuntansi PPKD membuat memo jurnal/bukti memorial berdasarkan tembusan dokumen pembayaran SP2D dari BUD/Kuasa BUD.
        //     Fungsi Akuntansi PPKD melakukan pencatatan akuntansi dalam buku jurnal berdasarkan memo jurnal.
        //     Fungsi Akuntansi PPKD melakukan posting jurnal ke buku besar.
        //     Berdasarkan saldo Buku Besar Fungsi Akuntansi PPKD menyusun Laporan Keuangan PPKD.
        //     ',
        //     'answer_a' => 'Fungsi Akuntansi PPKD melakukan posting jurnal ke buku besar',
        //     'answer_b' => 'Fungsi Akuntansi PPKD membuat memo jurnal/bukti memorial berdasarkan tembusan tagihan dari pihak ketiga atau dokumen sumber lainnya dari BUD/Kuasa BUD',
        //     'answer_c' => 'Fungsi Akuntansi PPKD menyusun Laporan Keuangan PPKD',
        //     'answer_d' => 'Fungsi Akuntansi PPKD membuat memo jurnal/bukti memorial berdasarkan tembusan dokumen pembayaran SP2D dari BUD/Kuasa BUD',
        //     'correct_answer' => 'b',
        // ]);

        // MultipleChoice::create([
        //     'question_type' => 'daerah',
        //     'question' => 'Apakah perbedaan mendasar antara pendapatan-LRA dengan pendapatan-LO?',
        //     'question_explanation' => 'Pendapatan-LRA = basis kas, diakui ketika kas diterima di Rekening Kas Umum Daerah/ oleh entitas pelaporan, kode BAS 4
        //     Pendapatan-LO = basis akrual, diakui ketika timbulnya hak atas pendapatan tersebut atau ada aliran masuk sumber daya ekonomi, kode BAS 8
        //     ',
        //     'answer_a' => 'Pendapatan-LRA berbasis akrual dan pendapatan-LO berbasis kas',
        //     'answer_b' => 'Pendapatan LRA & LO sama-sama berbasis kas',
        //     'answer_c' => 'Pendapatan LRA & LO sama-sama berbasis akrual',
        //     'answer_d' => 'Pendapatan-LRA berbasis kas dan pendapatan-LO berbasis akrual',
        //     'correct_answer' => 'd',
        // ]);

        // MultipleChoice::create([
        //     'question_type' => 'daerah',
        //     'question' => 'komponen laporan keuangan yang menyediakan informasi mengenai realisasi pendapatan, Belanja, Transfer, Surplus/defisit, dan Pembiayaan dari suatu entitas pelaporan yang masing-masing diperbandingkan dengan anggarannya dengan menggunakan basis kas merupakan pengertian dari…',
        //     'question_explanation' => 'Dalam PMK tersebut (Hal.16) menyatakan bahwa LRA merupakan komponen laporan keuangan yang menyediakan informasi mengenai realisasi pendapatan-LRA, belanja, transfer, surplus/defisit-LRA, dan pembiayaan dari suatu entitas pelaporan yang masing-masing diperbandingkan dengan anggarannya. Informasi tersebut berguna bagi para pengguna laporan dalam mengevaluasi keputusan mengenai alokasi sumber-sumber daya ekonomi, akuntabilitas dan ketaatan entitas pelaporan terhadap anggaran.  ',
        //     'answer_a' => 'Laporan Posisi Keuangan ',
        //     'answer_b' => 'Laporan Realisasi Anggaran ',
        //     'answer_c' => 'Laporan Perubahan Ekuitas ',
        //     'answer_d' => 'Laporan Operasional ',
        //     'correct_answer' => 'b',
        // ]);
        
        // MultipleChoice::create([
        //     'question_type' => 'daerah',
        //     'question' => 'Terdapat transaksi Beban Modal/Aset Tetap ketika SPP dan SPM terbit-Transaksi LS dengan dokumen sumber BAST (Berita Acara Serah Terima). Pencatatan dilakukan hanya di SKPD, yaitu LO: (D) Aset Tetap dan (K) Utang. Benar atau salah?',
        //     'question_explanation' => '(1) Ketika timbul potensi manfaat ekonomi masa depan diperoleh oleh pemerintah dan mempunyai nilai atau biaya yang dapat diukur dengan andal.
        //     (2) Pengakuan suatu aset tetap harus memperhatikan kebijakan pemerintah mengenai ketentuan nilai satuan minimum kapitalisasi aset tetap. Namun, untuk aset tetap berupa tanah serta jalan, irigasi, dan jaringan, berapapun nilai perolehannya seluruhnya dikapitalisasi sebagai nilai aset tetap.
        //     ',
        //     'answer_a' => 'Benar',
        //     'answer_b' => 'Benar, tetapi pengakuan juga dilakukan di PPKD',
        //     'answer_c' => 'Salah, pengakuan seharusnya hanya dilakukan di PPKD',
        //     'answer_d' => 'Salah',
        //     'correct_answer' => 'a',
        // ]);

        // MultipleChoice::create([
        //     'question_type' => 'daerah',
        //     'question' => 'Dalam Peraturan Menteri Dalam Negeri Nomor 13 Tahun 2006 tentang Pedoman Pengelolaan Keuangan Daerah, sebagaimana telah diubah dengan Peraturan Menteri Dalam Negeri Nomor 59 Tahun 2007 Surat Permintaan Pembayaran (SPP) terbagi kedalam 4 jenis pengajuan pembayaran yaitu…',
        //     'question_explanation' => 'Dalam Peraturan Menteri Dalam Negeri Nomor 13 Tahun 2006 tentang Pedoman Pengelolaan Keuangan Daerah, sebagaimana telah diubah dengan Peraturan Menteri Dalam Negeri Nomor 59 Tahun 2007 Surat Permintaan Pembayaran (SPP) adalah dokumen yang diterbitkan oleh pejabat yang bertanggung jawab atas pelaksanaan kegiatan/bendahara pengeluaran untuk mengajukan permintaan pembayaran. SPP terbagi menjadi empat macam yaitu (1)Uang Persediaan (SPP-UP); (2) Ganti Uang (SPP-GU); (3) Tambah Uang (SPP-TU); (4) Langsung (SPP-LS)',
        //     'answer_a' => 'SPP-UP, SPP-GU, SPP-LS, SPP-TU',
        //     'answer_b' => 'SPP-LU, SPP-SP-SPP-GU,SPP-TU',
        //     'answer_c' => 'SPP-TU, SPP-GP, SPP-UP, SPP-LS',
        //     'answer_d' => 'SPP-GU, SPP-LS, SPP-PU,SPP-TU',
        //     'correct_answer' => 'a',
        // ]);

        // MultipleChoice::create([
        //     'question_type' => 'daerah',
        //     'question' => 'Bagaimanakah jurnal penyesuaian untuk akumulasi amortisasi dan beban amortisasi yang dicatat setiap akhir periode pelaporan (semesteran)?',
        //     'question_explanation' => 'Amortisasi adalah alokasi yang sistematis atas nilai suatu aset tetap tidak berwujud yang dapat disusutkan selama masa manfaat aset yang bersangkutan.Nilai amortisasi untuk masing-masing periode diakui sebagai pengurang nilai tercatat aset tetap tidak berwujud dalam neraca dan beban amortisasi dalam laporan operasional.',
        //     'answer_a' => 'D: Beban Amortisasi Aset Tidak Berwujud
        //     K: Akumulasi Amortisasi Aset Tidak Berwujud
        //     ',
        //     'answer_b' => 'D: Akumulasi Amortisasi Aset Tidak Berwujud
        //     K: Beban Amortisasi Aset Tidak Berwujud
        //     ',
        //     'answer_c' => 'D: Beban Amortisasi Aset Berwujud
        //     K: Akumulasi Amortisasi Aset Berwujud
        //     ',
        //     'answer_d' => 'D: Akumulasi Amortisasi Aset Berwujud
        //     K: Beban Amortisasi Aset Berwujud
        //     ',
        //     'correct_answer' => 'a',
        // ]);

        // MultipleChoice::create([
        //     'question_type' => 'daerah',
        //     'question' => 'Pedoman teknis Pengelolaan Keuangan Daerah  telah diatur pada peraturan…',
        //     'question_explanation' => 'Mencabut Permendagri No.99 tahun 2019 tentang Perubahan Kelima atas Peraturan Menteri Dalam Negeri Nomor 32 Tahun 2011 tentang Pedoman Pemberian Hibah dan Bantuan Sosial yang Bersumber dari Anggaran Pendapatan dan Belanja Daerah saat ini peraturan mengenai teknis pengelolaan keuangan daerah diatur pada Permendagri Nomor 77 Tahun 2020 ',
        //     'answer_a' => 'Permendagri Nomor 77 Tahun 2020 ',
        //     'answer_b' => 'Permendagri Nomor 14 Tahun 2016 ',
        //     'answer_c' => 'Peraturan Pemerintah Nomor 71 Tahun 2010',
        //     'answer_d' => 'Peraturan Pemerintah Nomor 12 tahun 2021 ',
        //     'correct_answer' => 'a',
        // ]);

        // MultipleChoice::create([
        //     'question_type' => 'daerah',
        //     'question' => 'Beban penyusutan atas aset tetap selain tanah dan amortisasi atas aset tak berwujud adalah alokasi yang sistematis atas nilai aset tetap/aset tak berwujud yang dapat disusutkan (depreciable assets). Apakah pernyataan tersebut sudah cukup menjelaskan arti beban penyusutan?',
        //     'question_explanation' => 'Beban penyusutan atas aset tetap selain tanah dan amortisasi atas aset tak berwujud adalah alokasi yang sistematis atas nilai aset tetap/aset tak berwujud yang dapat disusutkan (depreciable assets) selama masa manfaat aset yang bersangkutan. Adanya bukti memorial/dokumen yang dipersamakan, PPK SKPD membuat jurnal. ',
        //     'answer_a' => 'Sudah',
        //     'answer_b' => 'Hanya cukup perlu ditambahkan pernyataan “selama masa manfaat aset yang bersangkutan”',
        //     'answer_c' => 'Sama sekali tidak menjelaskan beban penyusutan',
        //     'answer_d' => 'Tidak ada jawaban yang benar',
        //     'correct_answer' => 'b',
        // ]);

        // MultipleChoice::create([
        //     'question_type' => 'daerah',
        //     'question' => 'Pada saat diterimakanya kas atas pendapatan hibah yang diterima Pemda, maka Fungsi Akuntansi PPKD juga melakukan pencatatan atas pendapatan – LRA, bagaimana penjurnalannya?',
        //     'question_explanation' => 'D: Piutang Pendapatan Hibah pada K: Pendapatan Transfer merupakan penjurnalan ketika Fungsi Akuntansi PPKD mencatat Naskah Perjanjian Hibah Daerah yang ditandatangani.',
        //     'answer_a' => 'D: Piutang Pendapatan Hibah
        //     K: Pendapatan Transfer
        //     ',
        //     'answer_b' => 'D: Perubahan SAL
        //     K: Pendapatan Hibah - LRA
        //     ',
        //     'answer_c' => 'D: Piutang Pendapatan Hibah
        //     K: Kas di Kas Daerah
        //     ',
        //     'answer_d' => 'D: Pendapatan Hibah - LRA
        //     K: Perubahan SAL
        //     ',
        //     'correct_answer' => 'b',
        // ]);

        // MultipleChoice::create([
        //     'question_type' => 'daerah',
        //     'question' => 'Pajak merupakan kontribusi wajib kepada negara yang tertuang oleh orang pribadi atau badan yang sifatnya memaksa berdasarkan UU. Beragam jenis pajak seperti pajak reklame, pajak hotel, hingga pajak air tanah digolong kedalam jenis pajak…',
        //     'question_explanation' => 'Dalam UU No 28 Tahun 2009 pada BAB II Pasal 2 ayat 2 menjelaskan bahwa jenis pajak Kabupaten/ kota terdiri atas :Pajak Hotel, Pajak Restoran, Pajak Hiburan, Pajak Reklame, Pajak Penerangan Jalan, Pajak Mineral Bukan Logam dan Batuan, Pajak Parkir, Pajak Air Tanah, Pajak Sarang Burung Walet, Pajak Bumi dan Bangunan Pedesaan dan Perkotaan, Bea Perolehan Hak atas Tanah dan Bangunan.',
        //     'answer_a' => 'Pajak Daerah 3T',
        //     'answer_b' => 'Pajak Pusat ',
        //     'answer_c' => 'Pajak Daerah ',
        //     'answer_d' => 'Pajak Ibu Kota Negara ',
        //     'correct_answer' => 'c',
        // ]);

        // MultipleChoice::create([
        //     'question_type' => 'daerah',
        //     'question' => 'Seluruh pengeluaran kas yang digunakan untuk pinjaman kepada pihak ketiga, pembayaran kembali pokok pinjaman tahun tertentu, hingga pembentukan dana cadangan disebut sebagai…',
        //     'question_explanation' => 'Pengeluaran pembiayaan adalah semua pengeluaran Rekening kas umum Daerah antara lain pemberian pinjaman kepada pihak ketiga, penyertaan modal pemerintah, pembayaran kembali pokok pinjaman dalam periode tahun anggaran tertentu, dan pembentukan dana cadangan',
        //     'answer_a' => 'Pengeluaran Pembiayaan ',
        //     'answer_b' => 'Penerimaan Pembiayaan ',
        //     'answer_c' => 'Penyaluran Pembiayaan ',
        //     'answer_d' => 'Pendistribusian Pembiayaan ',
        //     'correct_answer' => 'a',
        // ]);

        // MultipleChoice::create([
        //     'question_type' => 'daerah',
        //     'question' => 'Alokasi sistematis atas nilai aset tetap yang dapat disusutkan ke umur ekonomis aset terkait merupakan pengertian dari…',
        //     'question_explanation' => 'Pada PP No 71 Tahun 2010 bagian definisi (Lampiran I.02 PSAP 01- 2). Dijelaskan bahwa Penyusutan adalah alokasi yang sistematis atas nilai suatu aset tetap yang dapat disusutkan (depreciable assets) selama masa manfaat aset yang bersangkutan.',
        //     'answer_a' => 'Persediaan',
        //     'answer_b' => 'Pos Luar Biasa',
        //     'answer_c' => 'Pembiayaan ',
        //     'answer_d' => 'Penyusutan ',
        //     'correct_answer' => 'd',
        // ]);

        // MultipleChoice::create([
        //     'question_type' => 'daerah',
        //     'question' => 'Tanah merupakan salah satu jenis aset tetap yang dalam PSAP 07 yang diartikan sebagai…',
        //     'question_explanation' => 'Tanah yang dikelompokkan sebagai aset tetap ialah tanah 8 yang diperoleh dengan maksud untuk dipakai dalam kegiatan operasional 9 pemerintah dan dalam kondisi siap dipakai.  ',
        //     'answer_a' => 'Aset yang diperoleh dengan maksud untuk dipakai dalam kegiatan operasional 9 pemerintah dan dalam kondisi siap dipakai.',
        //     'answer_b' => 'Aset yang dibangun oleh pemerintah serta dimiliki dan/atau dikuasai oleh 19 pemerintah dan dalam kondisi siap dipakai. ',
        //     'answer_c' => 'Aset yang sedang dalam proses pembangunan namun pada tanggal laporan keuangan 26 belum selesai seluruhnya',
        //     'answer_d' => 'Aset yang harus disajikan di pos aset 29 lainnya sesuai dengan nilai tercatatnya.',
        //     'correct_answer' => 'a',
        // ]);

        // MultipleChoice::create([
        //     'question_type' => 'daerah',
        //     'question' => 'Menurut PP nomor 12 tahun 2019 pengeluaran atas beban APBD disebut sebagai…',
        //     'question_explanation' => 'pada Halaman 44 ayat (4) Belanja tidak terduga sebagaimana dimaksud pada ayat (1) huruf c merupakan pengeluaran anggaran atas Beban APBD untuk keperluan darurat termasuk keperluan mendesak yang tidak dapat diprediksi sebelumnya.',
        //     'answer_a' => 'Belanja Modal ',
        //     'answer_b' => 'Belanja Tidak Terduga ',
        //     'answer_c' => 'Belanja Operasional ',
        //     'answer_d' => 'Belanja Transfer ',
        //     'correct_answer' => 'b',
        // ]);

        // MultipleChoice::create([
        //     'question_type' => 'daerah',
        //     'question' => 'Pengeluaran uang dari pemerintah daerah kepada pemerintah disebut sebagai…',
        //     'question_explanation' => 'Belanja transfer sebagaimana dimaksud pada ayat (1) huruf d merupakan pengeluaran uang dari Pemerintah Daerah kepada Pemerintah Daerah lainnya dan/atau dari Pemerintah Daerah kepada pemerintah desa.',
        //     'answer_a' => 'Belanja Pegawai ',
        //     'answer_b' => 'Belanja Operasional ',
        //     'answer_c' => 'Belanja Transfer ',
        //     'answer_d' => 'Belanja Barang dan Jasa ',
        //     'correct_answer' => 'c',
        // ]);

        // MultipleChoice::create([
        //     'question_type' => 'daerah',
        //     'question' => 'Standar Akuntansi Pemerintah (SAP) menyatakan bahwa transaksi dalam mata uang asing perlu dijabarkan jumlahnya berdasarkan kurs tengah bank sentral yang telah diatur dalam PSAP nomor…',
        //     'question_explanation' => 'Paragraf 62 PSAP Nomor 02 tentang Laporan Realisasi Anggaran menyatakan: Transaksi dalam mata uang asing harus dibukukan dalam mata uang rupiah dengan menjabarkan jumlah mata uang asing tersebut menurut kurs tengah bank sentral pada tanggal transaksi.',
        //     'answer_a' => 'Paragraf 80 Nomor 01 tentang Laporan Operasional ',
        //     'answer_b' => 'Paragarf 9 Nomor 01 tentang Laporan Posisi Keuangan ',
        //     'answer_c' => 'Paragraf 53 Nomor 02 tengang Laporan Realisasi Anggaran ',
        //     'answer_d' => 'Paragraf 62 Nomor 02 tengang Laporan Realisasi Anggaran ',
        //     'correct_answer' => 'd',
        // ]);

        // MultipleChoice::create([
        //     'question_type' => 'daerah',
        //     'question' => 'Manakah pernyataan yang benar atas pengertian belanja operasi dalam pengelolaan keuangan daerah ? ',
        //     'question_explanation' => 'Pada Pasal 55 Ayat 4 menyatakan bahwa Belanja operasi sebagaimana dimaksud pada ayat (1) huruf a merupakan pengeluaran anggaran untuk Kegiatan sehari-hari Pemerintah Daerah yang memberi manfaat jangka pendek. ',
        //     'answer_a' => 'pengeluaran anggaran untuk Kegiatan sehari-hari Pemerintah Daerah.',
        //     'answer_b' => ' pengeluaran anggaran atas Beban APBD untuk keperluan darurat',
        //     'answer_c' => 'pengeluaran anggaran untuk perolehan aset tetap dan aset lainnya',
        //     'answer_d' => ' pengeluaran uang dari Pemerintah Daerah kepada Pemerintah Daerah lainnya',
        //     'correct_answer' => 'a',
        // ]);

        // MultipleChoice::create([
        //     'question_type' => 'daerah',
        //     'question' => 'Pajak Perdagangan Internasional adalah semua penerimaan negara yang bersumber dari…',
        //     'question_explanation' => 'Pasal 1 ayat 5 mengungkapkan bahwa Pendapatan Pajak Perdagangan Internasional adalah semua penerimaan negara yang berasal dari pendapatan bea masuk dan pendapatan bea keluar',
        //     'answer_a' => 'Pendapatan Hibah dan PAD ',
        //     'answer_b' => 'Pendapatan beas masuk dan pendapatan bea keluar ',
        //     'answer_c' => 'Pendapatan Trasfer dari pusat dan Lain - lain PAD yang sah ',
        //     'answer_d' => 'Pendapatan LO dan Pendapatan LRA ',
        //     'correct_answer' => 'b',
        // ]);

        // MultipleChoice::create([
        //     'question_type' => 'daerah',
        //     'question' => 'Apabila suatu transaksi dalam mata uang asing timbul dan diselesaikan dalam periode yang sama, maka seluruh selisih kurs tersebut diakui dalam…',
        //     'question_explanation' => 'Apabila suatu transaksi dalam mata uang asing timbul dan  diselesaikan dalam periode yang sama, maka seluruh selisih kurs tersebut diakui  pada periode tersebut. ',
        //     'answer_a' => 'Periode yang akan datang',
        //     'answer_b' => 'Periode yang selanjutnya ',
        //     'answer_c' => 'Periode yang sama',
        //     'answer_d' => 'Periode 1 masa sebelumnya ',
        //     'correct_answer' => 'c',
        // ]);

        // MultipleChoice::create([
        //     'question_type' => 'daerah',
        //     'question' => 'Penerimaan pinjaman, penjualan obligasi pemerintah, dan hasil privatisasi merupakan komponen penerimaan pembiayaan yang diakui pada saat…',
        //     'question_explanation' => 'Penerimaan pembiayaan adalah semua penerimaan Rekening Kas Umum Daerah antara lain berasal dari penerimaan pinjaman, penjualan obligasi pemerintah, hasil privatisasi perusahaan daerah, penerimaan kembali pinjaman yang diberikan kepada fihak ketiga, penjualan investasi permanen lainnya, dan pencairan dana cadangan yang  diakui pada saat diterima pada Rekening Kas Umum Negara/Daerah',
        //     'answer_a' => 'Diterima pada Rekening Kas Umum Negara/Daerah',
        //     'answer_b' => 'Dikeluarkan pada Rekening Kas Umum Negara/Daerah ',
        //     'answer_c' => 'Ditangguhkan Dikeluarkan pada Rekening Kas Umum Negara/Daerah',
        //     'answer_d' => 'Diutangkan pada Rekening Kas Umum Negara/Daerah ',
        //     'correct_answer' => 'a',
        // ]);

        // MultipleChoice::create([
        //     'question_type' => 'daerah',
        //     'question' => 'Manakah PSAP yang mengatur tentang aset moneter & kewajiban dalam mata yang asing yg mengatur mengenai kurs atas pembiayaan ?',
        //     'question_explanation' => 'PSAP Nomor 1 tentang Penyajian Laporan Keuangan Paragraf 68 dan 77 mengatur 23 bahwa aset moneter dan kewajiban dalam mata uang asing dijabarkan dan dilaporkan 24 dalam mata uang Rupiah dengan menggunakan kurs tengah bank sentral. ',
        //     'answer_a' => 'PSAP Nomor 4 paragraf 65 dan 70 ',
        //     'answer_b' => 'PSAP Nomor 3 paragraf 68 dan 76',
        //     'answer_c' => 'PSAP Nomor 2 paragraf 69 dan 77 ',
        //     'answer_d' => 'PSAP Nomor 1 paragraf 68 dan 77 ',
        //     'correct_answer' => 'd',
        // ]);

        // MultipleChoice::create([
        //     'question_type' => 'daerah',
        //     'question' => 'Balasan jasa yang disalurkaan bank kepada nasabah ( pemerintah daerah) yang telah memanfaatkan salah satu fiturnya melalui simpanan giro disebut sebagai …',
        //     'question_explanation' => 'Dinyatakan bahwa Suku Bunga Bank adalah Balas jasa yang disalurkaan bank kepada nasabah yang membeli datau menjual produknya ',
        //     'answer_a' => 'Bilyet Giro ',
        //     'answer_b' => 'Rekening Kas Giro ',
        //     'answer_c' => 'Suku Bunga Bank ',
        //     'answer_d' => 'Cross Cheque',
        //     'correct_answer' => 'c',
        // ]);

        // MultipleChoice::create([
        //     'question_type' => 'daerah',
        //     'question' => 'Kondisi keumungkinan timbulnya kewajiban akibat peristiwa masa lalu dan keberadaan tidak sepenuhnya berada pada kendali entitas disebut sebagai…',
        //     'question_explanation' => 'Kewajiban Kontijensi merupakan Kewajiban yang mungkin timbul akibat peristiwa masa lalu dan keberadaannya  menjadi pasti dengan terjadi atau tidak terjadinya satu atau lebih peristiwa di masa  yang akan datang yang tidak sepenuhnya berada dalam kendali entitas',
        //     'answer_a' => 'Kewajiban konstruksi',
        //     'answer_b' => 'Kewajiban Kontijensi ',
        //     'answer_c' => 'Kewajiban Bunga ',
        //     'answer_d' => 'Kewajiban Konstruktif ',
        //     'correct_answer' => 'b',
        // ]);

        // MultipleChoice::create([
        //     'question_type' => 'daerah',
        //     'question' => 'Disamping memiliki tugas untuk mengelola  Uang Persediaan (UP) bendahara pengeluaran juga memiliki wewenang untuk mengelola…',
        //     'question_explanation' => 'Pasal 14 ayat (2) Bendahara Pengeluaran berwewenang untuk mengajukan i SPP-UP, SPP-GU, SPP-TU, dan SPP-LS beserta bukti kelengkapannya',
        //     'answer_a' => 'Uang Milik Masyarakat ',
        //     'answer_b' => 'Dana Hibah ',
        //     'answer_c' => 'Guna Uang, Tambahan Uang, dan Langsung ',
        //     'answer_d' => 'Langsung, Tunjangan Gaji, Uang Muka ',
        //     'correct_answer' => 'c',
        // ]);

        // MultipleChoice::create([
        //     'question_type' => 'daerah',
        //     'question' => 'Transaksi kas dapat dikelompokkan menjadi dua bagian yaitu…',
        //     'question_explanation' => 'Transaksi kas dapat dikelompokkan menjadi dua bagian yaitu transaksi penerimaan kas dan transaksi pengeluaran kas.',
        //     'answer_a' => 'Transaksi Penerimaan Kas dan Transaksi Pengeluaran Kas Tambahan ',
        //     'answer_b' => 'Transaksi Perhutangan Kas dan Transaksi Penangguhan Kas ',
        //     'answer_c' => 'Transaksi Pengkreditan Kas dan Transaksi Pengeluaran Kas ',
        //     'answer_d' => 'Transaksi Penerimaan Kas dan Transaksi Pengeluaran Kas ',
        //     'correct_answer' => 'd',
        // ]);

        // MultipleChoice::create([
        //     'question_type' => 'daerah',
        //     'question' => 'Proses pencocokan data dan informasi keuangan Pemerintah Umum dengan sumber data counter party transaksi dan posisi keuangannya yang berasal dari sistem/subsistem yang berbeda disebut dengan proses….',
        //     'question_explanation' => 'Pada Pasal 1 Ayat (1)  Rekonsiliasi adalah proses pencocokan data dan informasi keuangan Pemerintah Umum dengan sumber data counterparty transaksi dan posisi keuangannya yang berasal dari sistem/subsistem yang berbeda.',
        //     'answer_a' => 'Pemeriksaan ',
        //     'answer_b' => 'Rekonsiliasi ',
        //     'answer_c' => 'Penghapusan ',
        //     'answer_d' => 'Penyesuaian',
        //     'correct_answer' => 'b',
        // ]);

        // MultipleChoice::create([
        //     'question_type' => 'daerah',
        //     'question' => 'Pada UU Nomor 28 Tahun 2009, pajak provinsi terdiri dari …',
        //     'question_explanation' => 'Pada BAB II, pasal 2 ayat (1) : Jenis Pajak provinsi terdiri atas: Pajak Kendaraan Bermotor;  Bea Balik Nama Kendaraan Bermotor; Pajak Bahan Bakar Kendaraan Bermotor; 
        //     Pajak Air Permukaan; dan  Pajak Rokok',
        //     'answer_a' => 'Pajak Air Permukaan , Pajak Kendaraan Bermotor;  Bea Balik Nama Kendaraan Bermotor; Pajak Bahan Bakar Kendaraan Bermotor; dan Pajak Rokok.',
        //     'answer_b' => 'Pajak Air Permukaan , Pajak Kendaraan Bermotor; PBBP2; Pajak Bahan Bakar Kendaraan Bermotor; dan Pajak Rokok.',
        //     'answer_c' => 'Pajak Air Permukaan , Pajak Kendaraan Bermotor;  Bea Balik Nama Kendaraan Bermotor; Pajak Bahan Bakar Kendaraan Bermotor; dan Pajak Rokok.',
        //     'answer_d' => 'Pajak Air Permukaan , Pajak Kendaraan Bermotor;  Bea Balik Nama Kendaraan Bermotor; Pajak Bahan Bakar Kendaraan Bermotor; dan Pajak Air Tanah.',
        //     'correct_answer' => 'c',
        // ]);

        // MultipleChoice::create([
        //     'question_type' => 'daerah',
        //     'question' => 'Catatan atas Laporan Keuangan akan menyajikan sejumlah hal, kecuali…',
        //     'question_explanation' => 'Pada bagian Catatan Atas Laporan Keuangan menyatakan bahwa Catatan atas  Laporan Keuangan mengungkapkan/menyajikan/menyediakan hal-hal sebagai  berikut: Mengungkapkan informasi Umum tentang Entitas Pelaporan dan Entitas Akuntansi, Menyajikan ikhtisar pencapaian target keuangan selama tahun pelaporan berikut kendala dan hambatan yang dihadapi dalam pencapaian target, Menyajikan informasi tentang kebijakan fiskal/keuangan dan ekonomi makro , Menyajikan rincian dan penjelasan masing-masing pos yang disajikan pada  lembar muka laporan keuangan',
        //     'answer_a' => 'Mengungkapkan informasi Umum tentang Entitas Pelaporan dan Entitas Akuntansi',
        //     'answer_b' => 'Menyajikan ikhtisar pencapaian target keuangan selama tahun pelaporan berikut kendala dan hambatan yang dihadapi dalam pencapaian target',
        //     'answer_c' => 'Menyajikan informasi tentang kebijakan fiskal/keuangan dan ekonomi mikro ',
        //     'answer_d' => 'Menyajikan rincian dan penjelasan masing-masing pos yang disajikan pada  lembar muka laporan keuangan',
        //     'correct_answer' => 'c',
        // ]);
    }
}
