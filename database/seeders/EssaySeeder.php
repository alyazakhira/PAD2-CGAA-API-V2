<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Essay;

class EssaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Essay::create([
            'question_type' => 'pusat',
            'question' => '<p>Jelaskan apa yang dimaksud dengan penyusutan aset tetap dan sebutkan beberapa metode penyusutan yang dapat digunakan oleh Pemerintah!</p>',
            'correct_answer' => '<p>Penyusutan adalah alokasi yang sistematis atas nilai suatu aset tetap yang dapat disusutkan (depreciable assets) selama masa manfaat aset yang bersangkutan. Nilai penyusutan untuk masing-masing periode diakui sebagai pengurang nilai tercatat aset tetap dalam neraca dan beban penyusutan dalam laporan operasional.</p>

            <p>Penyusutan nilai aset tetap dilakukan dengan berbagai metode yang sistematis sesuai dengan masa manfaat. Metode penyusutan yang digunakan harus dapat menggambarkan manfaat ekonomi atau kemungkinan jasa (service potential) yang akan mengalir ke pemerintah. Metode penyusutan yang dapat digunakan antara lain:</p>
            
            <ul>
                <li>
                <p>Metode garis lurus (straight line method);</p>
                </li>
                <li>
                <p>Metode saldo menurun ganda (double declining balance method);</p>
                </li>
                <li>
                <p>Metode unit produksi (unit of production method).</p>
                </li>
            </ul>',
        ]);
        Essay::create([
            'question_type' => 'pusat',
            'question' => '<p>Jelaskan kriteria pengakuan beban dan sebutkan 4 jenis beban yang ada pada laporan keuangan pemerintah?</p>',
            'correct_answer' => '<p>Beban diakui pada saat:&nbsp;</p>

            <ol>
                <li>
                <p>Timbulnya kewajiban</p>
                Saat timbulnya kewajiban adalah saat terjadinya peralihan hak dari pihak lain ke pemerintah tanpa diikuti keluarnya kas dari kas umum negara/daerah. Contohnya tagihan rekening telepon dan rekening listrik yang belum dibayar.</li>
                <li>
                <p>Terjadinya konsumsi aset.</p>
                Yang dimaksud terjadinya konsumsi aset adalah saat pengeluaran kas kepada pihak lain yang tidak didahului timbulnya kewajiban dan/atau konsumsi aset nonkas dalam kegiatan operasional pemerintah.&nbsp;</li>
                <li>
                <p>Terjadinya penurunan manfaat ekonomi atau potensi jasa.</p>
                Terjadinya penurunan manfaat ekonomi atau potensi jasa terjadi pada saat penurunan nilai aset sehubungan dengan penggunaan aset bersangkutan/berlalunya waktu. Contoh penurunan manfaat ekonomi atau potensi jasa adalah penyusutan atau amortisasi.&nbsp;</li>
            </ol>
            
            <p>Beban diklasifikasikan menurut klasifikasi ekonomi. Klasifikasi ekonomi pada prinsipnya mengelompokkan berdasarkan jenis beban. Klasifikasi ekonomi untuk pemerintah pusat yaitu beban pegawai, beban barang, beban bunga, beban subsidi, beban hibah, beban bantuan sosial, beban penyusutan aset tetap/amortisasi, beban transfer, dan beban lain-lain.</p>',
        ]);
        Essay::create([
            'question_type' => 'pusat',
            'question' => '<p>Apa yang dimaksud dengan laporan keuangan dan jelaskan tujuan dari laporan keuangan pemerintah?</p>',
            'correct_answer' => '<p>Laporan keuangan merupakan laporan yang terstruktur mengenai posisi keuangan dan transaksi-transaksi yang dilakukan oleh suatu entitas pelaporan.&nbsp;</p>

            <p>Tujuan umum laporan keuangan adalah menyajikan informasi mengenai posisi keuangan, realisasi anggaran, saldo anggaran lebih, arus kas, hasil operasi, dan perubahan ekuitas suatu entitas pelaporan yang bermanfaat bagi para pengguna dalam membuat dan mengevaluasi keputusan mengenai alokasi sumber daya.&nbsp;</p>
            
            <p>Tujuan spesifik pelaporan keuangan pemerintah adalah untuk menyajikan informasi yang berguna untuk pengambilan keputusan dan untuk menunjukkan akuntabilitas entitas pelaporan atas sumber daya yang dipercayakan kepadanya, dengan:&nbsp;</p>
            
            <ol>
                <li>Menyediakan informasi mengenai posisi sumber daya ekonomi, kewajiban, dan ekuitas pemerintah;</li>
                <li>
                <p>Menyediakan informasi mengenai perubahan posisi sumber daya ekonomi, kewajiban, dan ekuitas pemerintah;</p>
                </li>
                <li>
                <p>Menyediakan informasi mengenai sumber, alokasi, dan penggunaan sumber daya ekonomi;</p>
                </li>
                <li>
                <p>Menyediakan informasi mengenai ketaatan realisasi terhadap anggarannya;</p>
                </li>
                <li>
                <p>Menyediakan informasi mengenai cara entitas pelaporan mendanai aktivitasnya dan memenuhi kebutuhan kasnya;</p>
                </li>
                <li>
                <p>Menyediakan informasi mengenai potensi pemerintah untuk membiayai penyelenggaraan kegiatan pemerintahan;</p>
                </li>
                <li>
                <p>Menyediakan informasi yang berguna untuk mengevaluasi kemampuan entitas pelaporan dalam mendanai aktivitasnya.&nbsp;</p>
                </li>
            </ol>
            
            <p>Tujuan umum laporan keuangan pemerintah j mempunyai peranan prediktif dan prospektif, menyediakan informasi yang berguna untuk memprediksi besarnya sumber daya yang dibutuhkan untuk operasi yang berkelanjutan, sumber daya yang dihasilkan dari operasi yang berkelanjutan, serta risiko dan ketidakpastian terkait. Pelaporan keuangan juga menyajikan informasi bagi pengguna mengenai:&nbsp;</p>
            
            <ol>
                <li>
                <p>Indikasi apakah sumber daya yang telah diperoleh dan digunakan sesuai dengan anggaran; dan</p>
                </li>
                <li>
                <p>Indikasi apakah sumber daya diperoleh dan digunakan sesuai dengan ketentuan, termasuk batas anggaran yang ditetapkan oleh DPR/DPRD.</p>
                </li>
            </ol>',
        ]);
        Essay::create([
            'question_type' => 'pusat',
            'question' => '<p>Kementerian X membeli mesin dengan harga Rp100.000.000. Mesin tersebut memiliki umur manfaat selama 5 (lima) tahun dan direncanakan mempunyai nilai residu Rp 20.000.000. Berapakah beban penyusutan yang diakui oleh Kementerian X setiap tahunnya dengan menggunakan metode penyusutan garis lurus?</p>',
            'correct_answer' => '<p>Perhitungan dari penyusutan aset tetap dengan garis lurus:&nbsp;</p>

            <ul>
                <li>
                <p>Biaya perolehan mesin : Rp 100.000.000</p>
                </li>
                <li>
                <p>Nilai residu : Rp 20.000.000</p>
                </li>
                <li>
                <p>Umur manfaat : 5 Tahun</p>
                </li>
            </ul>
            
            <p>Beban penyusutan per tahun = (biaya perolehan - nilai residu)/umur manfaat&nbsp;</p>
            
            <p>Beban penyusutan per tahun = (Rp 100.000.000 - Rp 20.000.000)/5 tahun</p>
            
            <p>Beban penyusutan per tahun = Rp 16.000.000</p>
            
            <p>Dengan demikian, beban penyusutan per tahun yang diakui oleh Kementerian X setiap tahun adalah Rp 16.000.000</p>',
        ]);
        Essay::create([
            'question_type' => 'pusat',
            'question' => '<p>Apa yang dimaksud dengan aset tetap dan sebutkan klasifikasi aset tetap yang dimiliki pemerintah?</p>',
            'correct_answer' => '<p>Aset tetap adalah sumber daya ekonomi yang dikuasai dan/atau dimiliki oleh pemerintah sebagai akibat dari peristiwa masa lalu dan dari mana manfaat ekonomi dan/atau sosial di masa depan diharapkan dapat diperoleh, baik oleh pemerintah maupun masyarakat, serta dapat diukur dalam satuan uang, termasuk sumber daya nonkeuangan yang diperlukan untuk penyediaan jasa bagi masyarakat umum dan sumber-sumber daya yang dipelihara karena alasan sejarah dan budaya. Aset tetap adalah aset berwujud yang mempunyai masa manfaat lebih dari 12 (dua belas) bulan untuk digunakan, atau dimaksudkan untuk digunakan, dalam kegiatan pemerintah atau dimanfaatkan oleh masyarakat umum.&nbsp;</p>

            <p>Klasifikasi aset tetap berdasarkan kesamaan dalam sifat atau fungsinya dalam aktivitas operasi entitas. Klasifikasi aset tetap adalah sebagai berikut:&nbsp;</p>
            
            <ol>
                <li>
                <p>Tanah;</p>
                </li>
                <li>
                <p>Peralatan dan mesin;</p>
                </li>
                <li>
                <p>Gedung dan bangunan;</p>
                </li>
                <li>
                <p>Jalan, irigasi, dan jaringan;</p>
                </li>
                <li>
                <p>Aset tetap lainnya; dan</p>
                </li>
                <li>
                <p>Konstruksi dalam pengerjaan.</p>
                </li>
            </ol>',
        ]);
        Essay::create([
            'question_type' => 'daerah',
            'question' => '<p>Jelaskan lima alasan mengapa fungsi anggaran di lingkungan pemerintah daerah memiliki peranan penting untuk fungsi penyusunan pelaporan keuangan daerah!</p>',
            'correct_answer' => '<ol>
            <li>Anggaran merupakan pernyataan kebijakan publik.</li>
            <li>Anggaran merupakan target fiskal yang menggambarkan keseimbangan antara belanja, pendapatan, dan pembiayaan yang diinginkan.</li>
            <li>Anggaran menjadi landasan pengendalian yang memiliki konsekuensi hukum.</li>
            <li>Anggaran memberi landasan penilaian kinerja pemerintah.</li>
            <li>Hasil pelaksanaan anggaran dituangkan dalam laporan keuangan pemerintah sebagai pernyataan pertanggungjawaban pemerintah kepada publik.</li>
            </ol>
        
            <p>Anggaran pemerintah merupakan dokumen formal hasil kesepakatan antara eksekutif dan legislatif tentang belanja yang ditetapkan untuk melaksanakan kegiatan pemerintah dan pendapatan yang diharapkan untuk menutup keperluan belanja tersebut atau pembiayaan yang diperlukan bila diperkirakan akan terjadi defisit atau surplus. Dengan demikian, anggaran mengkoordinasikan aktivitas belanja pemerintah dan memberi landasan bagi upaya perolehan pendapatan dan pembiayaan oleh pemerintah untuk suatu periode tertentu yang biasanya mencakup periode tahunan.</p>',
        ]);
        Essay::create([
            'question_type' => 'daerah',
            'question' => '<p>Sebutkan dan jelaskan empat utama klasifikasi belanja daerah!</p>',
            'correct_answer' => '<ol>
            <li>
            <p><strong>Belanja operasi</strong>, merupakan pengeluaran anggaran untuk Kegiatan sehari-hari Pemerintah Daerah yang memberi manfaat jangka pendek.</p>
            </li>
            <li>
            <p><strong>Belanja modal</strong>, merupakan pengeluaran anggaran untuk perolehan aset tetap dan aset lainnya yang memberi manfaat lebih dari 1 (satu) periode akuntansi.</p>
            </li>
            <li>
            <p><strong>Belanja tidak terduga</strong>, merupakan pengeluaran anggaran atas Beban APBD untuk keperluan darurat termasuk keperluan mendesak yang tidak dapat diprediksi sebelumnya</p>
            </li>
            <li>
            <p><strong>Belanja transfer</strong>,&nbsp; merupakan pengeluaran uang dari Pemerintah Daerah kepada Pemerintah Daerah lainnya dan/atau dari Pemerintah Daerah kepada pemerintah desa.</p>
            </li>
            </ol>',
        ]);
        Essay::create([
            'question_type' => 'daerah',
            'question' => '<p>Jelaskan lima faktor apa saja yang diutamakan atas penggunaan surplus APBD?</p>',
            'correct_answer' => '<p>Penggunaan surplus APBD diutamakan untuk:</p>

            <ol>
                <li>
                <p>Pembayaran cicilan pokok Utang yang jatuh tempo;</p>
                </li>
                <li>
                <p>Penyertaan modal Daerah;</p>
                </li>
                <li>
                <p>Pembentukan Dana Cadangan;</p>
                </li>
                <li>
                <p>Pemberian Pinjaman Daerah; dan/atau</p>
                </li>
                <li>
                <p>Pengeluaran Pembiayaan lainnya sesuai dengan ketentuan peraturan perundang-undangan.</p>
                </li>
            </ol>',
        ]);
        Essay::create([
            'question_type' => 'daerah',
            'question' => '<p>Jelaskan pengertian selisih kurs dan bagaimana perlakuan akuntansinya di pemerintah daerah?</p>',
            'correct_answer' => '<ul>
            <li>
            <p>Selisih kurs adalah selisih yang timbul karena penjabaran mata uang asing ke rupiah pada kurs yang berbeda.&nbsp;</p>
            </li>
            <li>
            <p>Apabila suatu transaksi dalam mata uang asing timbul dan diselesaikan dalam periode yang sama, maka seluruh selisih kurs tersebut diakui pada periode tersebut.&nbsp;</p>
            </li>
            <li>
            <p>Namun jika timbul dan diselesaikannya suatu transaksi berada dalam beberapa periode akuntansi yang berbeda, maka selisih kurs harus diakui untuk setiap periode akuntansi dengan memperhitungkan perubahan kurs untuk masing-masing periode.</p>
            </li>
            </ul>',
        ]);
        Essay::create([
            'question_type' => 'daerah',
            'question' => '<p>Pembiayaan daerah dirinci menurut urusan pemerintahan daerah, organisasi, jenis, obyek, dan rincian obyek Pembiayaan daerah. Sebutkan sumber-sumber Penerimaan Pembiayaan daerah!</p>',
            'correct_answer' => '<ol>
            <li>
            <p>SiLPA;</p>
            </li>
            <li>
            <p>Pencairan Dana Cadangan;</p>
            </li>
            <li>
            <p>Hasil penjualan kekayaan daerah yang dipisahkan;&nbsp;</p>
            </li>
            <li>
            <p>Penerimaan Pinjaman Daerah;&nbsp;</p>
            </li>
            <li>
            <p>Penerimaan kembali Pemberian Pinjaman Daerah; dan/atau&nbsp;</p>
            </li>
            <li>
            <p>Penerimaan Pembiayaan lainnya sesuai dengan ketentuan peraturan perundang-undangan.</p>
            </li>
            </ol>
            
            <p>Penjelasan:</p>
            
            <ul>
                <li>
                <p>SiLPA bersumber dari: a. pelampauan penerimaan PAD; b. pelampauan penerimaan pendapatan transfer; c. pelampauan penerimaan lain-lain Pendapatan Daerah yang sah; d. pelampauan penerimaan Pembiayaan; e. penghematan belanja; f. kewajiban kepada pihak ketiga sampai dengan akhir tahun belum terselesaikan; dan/ atau g. sisa dana akibat tidak tercapainya capaian target Kinerja dan sisa dana pengeluaran Pembiayaan.</p>
                </li>
            </ul>
            
            <ul>
                <li>
                <p>Jumlah Dana Cadangan sesuai dengan jumlah yang telah ditetapkan dengan Perda tentang pembentukan Dana Cadangan bersangkutan.</p>
                </li>
                <li>
                <p>Hasil penjualan kekayaan daerah yang dipisahkan dilakukan sesuai dengan ketentuan peraturan perundang undangan.</p>
                </li>
                <li>
                <p>Penerimaan Pinjaman Daerah dapat bersumber dari: a. Pemerintah Pusat; b. Pemerintah Daerah lain; c. lembaga keuangan bank; d. lembaga keuangan bukan bank; dan/atau e. Masyarakat.</p>
                </li>
                <li>
                <p>Penerimaan kembali Pemberian Pinjaman Daerah dan lainnya diberikan kepada pihak penerima pinjaman sesuai dengan ketentuan peraturan perundang-undangan.</p>
                </li>
            </ul>',
        ]);
    }
}
