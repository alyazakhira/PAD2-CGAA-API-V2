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
    public function run(): void {
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
        MultipleChoice::create([
            'question_type' => 'pusat',
            'question' => '<p>Pernyataan Standar Akuntansi Pemerintahan Nomor 5 menyatakan bahwa penilaian persediaan dapat menggunakan metode berikut, kecuali&hellip;</p>',
            'question_explanation' => '<p>PSAP 5 mensyaratkan persediaan dapat dinilai menggunakan:&nbsp;</p>

            <ul>
                <li>
                <p>Metode sistematis seperti FIFO atau rata-rata tertimbang;</p>
                </li>
                <li>
                <p>Harga pembelian terakhir apabila setiap unit persediaan nilainya tidak material dan bermacam-macam jenis.</p>
                </li>
            </ul>',
            'answer_a' => '<p>Harga pasar</p>',
            'answer_b' => '<p>First in First out</p>',
            'answer_c' => '<p>Weighted-Average</p>',
            'answer_d' => '<p>Harga pembelian terakhir</p>',
            'correct_answer' => 'a',
        ]);
        MultipleChoice::create([
            'question_type' => 'pusat',
            'question' => '<p>Apa yang dimaksud dengan Laporan Operasional?&nbsp;</p>',
            'question_explanation' => '<p>Laporan yang menyajikan ikhtisar sumber daya ekonomi yang menambah ekuitas dan penggunaannya dikelola oleh pemerintah pusat/daerah untuk kegiatan penyelenggaraan pemerintahan dalam periode pelaporan. Unsur yang dicakup secara langsung dalam Laporan Operasional terdiri dari Pendapatan-LO, Beban, Transfer, dan Pos-Pos Luar Biasa.&nbsp;</p>',
            'answer_a' => '<p>Laporan yang menyajikan informasi kenaikan atau penurunan ekuitas tahun pelaporan dibandingkan dengan tahun sebelumnya</p>',
            'answer_b' => '<p>Laporan yang meliputi penjelasan naratif atau rincian dari angka yang tertera dalam Laporan Realisasi Anggaran, Laporan Perubahan SAL, Laporan Operasional, Laporan Perubahan Ekuitas, Neraca, dan Laporan Arus Kas</p>',
            'answer_c' => '<p>Laporan yang menyajikan ikhtisar sumber daya ekonomi yang menambah ekuitas dan penggunaannya dikelola oleh pemerintah pusat/daerah untuk kegiatan penyelenggaraan pemerintahan dalam periode pelaporan</p>',
            'answer_d' => '<p>Laporan yang menyajikan informasi kas sehubungan dengan aktivitas operasi, investasi, pendanaan, dan transitoris yang menggambarkan saldo awal, penerimaan, pengeluaran, dan saldo akhir kas pemerintah pusat/daerah selama periode tertentu&nbsp;</p>',
            'correct_answer' => 'c',
        ]);
        MultipleChoice::create([
            'question_type' => 'pusat',
            'question' => '<p>Apa yang dimaksud dengan penyusutan?&nbsp;</p>',
            'question_explanation' => '<p>Nilai penyusutan untuk masing-masing periode diakui sebagai pengurang nilai tercatat aset tetap dalam neraca dan beban penyusutan dalam laporan operasional</p>', 
            'answer_a' => '<p>Nilai buku aset yang dihitung dari biaya perolehan suatu aset setelah dikurangi akumulasi penyusutan</p>',
            'answer_b' => '<p>Alokasi yang sistematis atas nilai suatu aset tetap yang dapat disusutkan (depreciable assets) selama masa manfaat aset yang bersangkutan</p>',
            'answer_c' => '<p>Jumlah neto yang diharapkan dapat diperoleh pada akhir masa manfaat suatu aset setelah dikurangi taksiran biaya pelepasan</p>',
            'answer_d' => '<p>Aset berwujud yang mempunyai masa manfaat lebih dari 12 (dua belas) bulan untuk digunakan, atau dimaksudkan untuk digunakan dalam kegiatan pemerintah atau dimanfaatkan oleh masyarakat umum</p>',
            'correct_answer' => 'b',
        ]);
        MultipleChoice::create([
            'question_type' => 'pusat',
            'question' => '<p>Berikut merupakan metode penyusutan yang dapat digunakan berdasarkan pada Standar Akuntansi Pemerintahan berbasis Akrual, kecuali&hellip;</p>',
            'question_explanation' => '<p>Menurut Standar Akuntansi Pemerintahan, metode penyusutan yang dapat dipergunakan antara lain: Metode garis lurus (<em>straight line method</em>), metode saldo menurun ganda (<em>double declining balance method</em>), dan metode unit produksi (<em>unit of production method</em>)</p>',
            'answer_a' => '<p>Metode garis lurus (<em>straight line method</em>)</p>',
            'answer_b' => '<p>Metode saldo menurun ganda (<em>double declining balance method</em>)</p>',
            'answer_c' => '<p>Metode unit produksi (<em>unit of production method</em>)</p>',
            'answer_d' => '<p>Metode penyusutan jumlah angka tahun (<em>sum of the year digit method</em>)</p>',
            'correct_answer' => 'd',
        ]);
        MultipleChoice::create([
            'question_type' => 'pusat',
            'question' => '<p>Perhatikan pernyataan di bawah ini:&nbsp;<br />
            a)&nbsp;Suku cadang<br />
            b)&nbsp;Tanah<br />
            c) Peralatan dan Mesin<br />
            d) Bahan baku<br />
            e) Tanah/bangunan untuk dijual atau diserahkan kepada masyarakat<br />
            f) Konstruksi dalam Pengerjaan<br />
            Dari pernyataan tersebut, mana yang termasuk klasifikasi persediaan?</p>',
            'question_explanation' => '<p>Persediaan merupakan aset yang berupa:&nbsp;</p>

            <ol>
                <li>
                <p>Barang atau perlengkapan (supplies) yang digunakan dalam rangka kegiatan operasional pemerintah;</p>
                </li>
                <li>
                <p>Bahan atau perlengkapan (supplies) yang akan digunakan dalam proses produksi;</p>
                </li>
                <li>
                <p>Barang dalam proses produksi yang akan dimaksudkan untuk dijual atau diserahkan kepada masyarakat;&nbsp;</p>
                </li>
                <li>
                <p>Barang yang akan disimpan untuk dijual atau diserahkan kepada masyarakat dalam rangka kegiatan pemerintahan.</p>
                </li>
            </ol>',
            'answer_a' => '<p>b), c), dan f)&nbsp;</p>',
            'answer_b' => '<p>f), c), dan a)&nbsp;</p>',
            'answer_c' => '<p>a), d), dan e)&nbsp;</p>',
            'answer_d' => '<p>f), e), dan a)&nbsp;</p>',
            'correct_answer' => 'c',
        ]);
        MultipleChoice::create([
            'question_type' => 'pusat',
            'question' => '<p>Berikut merupakan contoh biaya yang dapat diatribusikan secara langsung kedalam biaya perolehan aset tetap, kecuali&hellip;</p>',
            'question_explanation' => '<p>Biaya perolehan suatu aset tetap terdiri dari harga belinya atau konstruksinya, termasuk bea impor dan setiap biaya yang dapat diatribusikan secara langsung dalam membawa aset tersebut ke kondisi yang membuat aset tersebut dapat bekerja untuk penggunaan yang dimaksudkan. Contoh biaya yang dapat diatribusikan secara langsung adalah:&nbsp;</p>

            <ol>
                <li>
                <p>Biaya pengiriman awal (initial delivery) dan biaya simpan dan bongkar muat (handling cost);</p>
                </li>
                <li>
                <p>Biaya pemasangan (installation cost);</p>
                </li>
                <li>
                <p>Biaya profesional seperti arsitek dan insinyur; dan&nbsp;</p>
                </li>
                <li>
                <p>Biaya konstruksi.</p>
                </li>
            </ol>',
            'answer_a' => '<p>Biaya pengiriman awal (<em>initial delivery</em>)</p>',
            'answer_b' => '<p>Biaya simpan dan bongkar muat (<em>handling cost</em>)</p>',
            'answer_c' => '<p>Biaya konsumsi panitia</p>',
            'answer_d' => '<p>Biaya konstruksi</p>',
            'correct_answer' => 'c',
        ]);
        MultipleChoice::create([
            'question_type' => 'pusat',
            'question' => '<p>Buatlah jurnal akrual sesuai dengan PMK/212.05/2019 dari transaksi berikut:&nbsp;<br />
            Pada 28 Agustus 2022, dilakukan penghentian penggunaan kendaraan berupa sepeda motor. Harga perolehan sepeda motor adalah Rp 18.000.000 dan akumulasi penyusutan sampai dengan tanggal penghentian adalah sebesar 15.000.000. Bagaimana jurnal yang sesuai untuk mencatat transaksi tersebut?</p>',
            'question_explanation' => '<p>Aset tetap/aset tidak berwujud yang dihentikan penggunaanya dalam operasi normal pemerintah direklasifikasi menjadi aset lainnya - aset yang tidak digunakan dalam operasi pemerintah sesuai dengan nilai tercatatnya (<em>carrying amount</em>). Dalam hal ini dibutuhkan jurnal reklasifikasi aset tetap/aset tidak berwujud atas aset lainnya dan reklasifikasi akumulasi penyusutan atas reklasifikasi aset tetap/aset tidak berwujud yang memenuhi karakteristik disusutkan/diamortisasi.&nbsp;</p>',
            'answer_a' => '<p>Aset tetap-kendaraan roda 2&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Rp 18.000.000<br />
            Akumulasi penyusutan&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Rp 15.000.000<br />
            &nbsp;&nbsp; &nbsp;Aset lainnya-kendaraan roda 2&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Rp 18.000.000<br />
            &nbsp;&nbsp; &nbsp;Aset lainnya-akumulasi penyusutan kendaraan roda 2&nbsp;&nbsp; &nbsp;Rp 15.000.000</p>',
            'answer_b' => '<p>Aset lainnya-kendaraan roda 2&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Rp 18.000.000<br />
            Akumulasi penyusutan&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Rp 15.000.000<br />
            &nbsp;&nbsp; &nbsp;Aset tetap-kendaraan roda 2&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Rp 18.000.000<br />
            &nbsp;&nbsp; &nbsp;Aset lainnya-akumulasi penyusutan kendaraan roda 2&nbsp;&nbsp; &nbsp;Rp 15.000.000</p>',
            'answer_c' => '<p>Kas di BUN&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Rp 18.000.000<br />
            Akumulasi penyusutan&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Rp 15.000.000<br />
            &nbsp;&nbsp; &nbsp;Aset tetap-kendaraan roda 2&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Rp 18.000.000<br />
            &nbsp;&nbsp; &nbsp;Aset lainnya-akumulasi penyusutan kendaraan roda 2&nbsp;&nbsp; &nbsp;Rp 15.000.000</p>',
            'answer_d' => '<p>Aset tetap-kendaraan roda 2&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Rp 18.000.000<br />
            Aset lainnya-akumulasi penyusutan kendaraan roda 2&nbsp;&nbsp; &nbsp;Rp 15.000.000<br />
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Aset tetap-kendaraan roda 2&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Rp 18.000.000<br />
            &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Akumulasi penyusutan kendaraan roda 2&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Rp 15.000.000</p>',
            'correct_answer' => 'b',
        ]);
        MultipleChoice::create([
            'question_type' => 'pusat',
            'question' => '<p>Berikut merupakan jenis-jenis belanja pemerintah yang meliputi:&nbsp;</p>

            <ol>
                <li>
                <p>Belanja pegawai;</p>
                </li>
                <li>
                <p>Belanja subsidi;</p>
                </li>
                <li>
                <p>Belanja hibah.</p>
                </li>
            </ol>
            
            <p>Dari ketiga kelompok belanja tersebut masuk ke dalam sifat belanja&hellip;</p>',
            'question_explanation' => '<p>Secara umum belanja pemerintah yang bersifat expandable berbeda dengan belanja yang bersifat intrakomptabel yang meliputi: 1) belanja pegawai, 2) belanja barang yang tidak menghasilkan BMN, 3) belanja bunga, 4) belanja subsidi, 5) belanja hibah, 6) belanja bantuan sosial yang tidak menghasilkan BMN, dan 7) transfer ke daerah dan dana desa.&nbsp;</p>',
            'answer_a' => '<p>Intrakomptabel</p>',
            'answer_b' => '<p>Belanja tunai&nbsp;</p>',
            'answer_c' => '<p>Belanja langsung&nbsp;</p>',
            'answer_d' => '<p><em>Expandable&nbsp;</em></p>',
            'correct_answer' => 'd',
        ]);
        MultipleChoice::create([
            'question_type' => 'pusat',
            'question' => '<p>Pada tanggal 20 Mei 2022, Pejabat Pembuat Komitmen membuat kontrak pengadaan sembako untuk kegiatan bakti sosial dengan nomor SPK-22/PPK.02/IV/2022 dengan nilai kontrak sebesar Rp 50.000.000. Buatlah jurnal atas belanja tersebut!</p>',
            'question_explanation' => '<p>Belanja persediaan masuk ke dalam kategori belanja intrakomptabel. Jurnal pada entitas akuntansi/pelaporan belanja atas diterimanya persediaan namun belum terverifikasi kondisi BMN dan belum terverifikasi resume tagihan belanja adalah sebagai berikut:&nbsp;<br />
            Persediaan yang belum diregister&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Rp 50.000.000<br />
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Utang yang belum diterima tagihannya&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Rp 50.000.000</p>',
            'answer_a' => '<p>Persediaan yang belum diregister&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Rp 50.000.000<br />
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Utang yang belum diterima tagihannya&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Rp 50.000.000</p>',
            'answer_b' => '<p>Belanja persediaan&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Rp 50.000.000<br />
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Kas di Bendahara Umum Negara&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Rp 50.000.000</p>',
            'answer_c' => '<p>Utang yang belum diterima tagihannya&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Rp 50.000.000<br />
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Belanja yang masih harus dibayar&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Rp 50.000.000</p>',
            'answer_d' => '<p>Persediaan&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Rp 50.000.000<br />
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Persediaan yang belum diregister&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Rp 50.000.000</p>',
            'correct_answer' => 'a',
        ]);
        MultipleChoice::create([
            'question_type' => 'pusat',
            'question' => '<p>Berikut merupakan arus kas masuk:&nbsp;<br />
            a. Penerimaan perpajakan<br />
            b. Pencairan dana cadangan&nbsp;<br />
            c. Penerimaan dari utang obligasi<br />
            d. Penerimaan hibah<br />
            e. Penerimaan negara bukan pajak<br />
            Dari poin-poin di atas, manakah yang termasuk kedalam arus kas masuk dari aktivitas operasi?</p>',
            'question_explanation' => '<p>Arus kas bersih aktivitas operasi merupakan indikator yang menunjukkan kemampuan operasi pemerintah dalam menghasilkan kas yang cukup untuk membiayai aktivitas operasionalnya di masa yang akan datang tanpa mengandalkan sumber pendanaan dari luar. Arus kas masuk dari aktivitas operasi terutama diperoleh dari:&nbsp;<br />
            a. Penerimaan perpajakan;<br />
            b. Penerimaan negara bukan pajak (PNBP);<br />
            c. Penerimaan hibah;<br />
            d. Penerimaan bagian laba perusahaan negara/daerah dan investasi lainnya;&nbsp;<br />
            e. Penerimaan lain-lain/penerimaan dari pendapatan luar biasa; dan&nbsp;<br />
            f. Penerimaan transfer.&nbsp;</p>',
            'answer_a' => '<p>a), b), dan c)&nbsp;</p>',
            'answer_b' => '<p>a), d), dan c)</p>',
            'answer_c' => '<p>a), d), dan e)&nbsp;</p>',
            'answer_d' => '<p>a), c), dan e)&nbsp;</p>',
            'correct_answer' => 'c',
        ]);
        MultipleChoice::create([
            'question_type' => 'pusat',
            'question' => '<p>Petikan DIPA Tahun Anggaran 2020 untuk Unit Organisasi Balai Penelitian dan Pengembangan Kementerian Kesehatan menunjukkan alokasi belanja sebagai berikut:&nbsp;</p>

            <ul>
                <li>Belanja pegawai&nbsp;&nbsp; &nbsp;Rp 124.500.000</li>
                <li>Belanja barang&nbsp; &nbsp; &nbsp; Rp 147.860.000</li>
                <li>Belanja modal&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Rp 56.750.000</li>
            </ul>
            
            <p>Manakah jurnal yang tepat untuk transaksi tersebut?&nbsp;</p>',
            'question_explanation' => '<p>Karena hal tersebut masih termasuk ke dalam jurnal anggaran sehubungan dengan komitmen belanja yang belum disertai komitmen pengeluaran pembiayaan.&nbsp;</p>',
            'answer_a' => '<p>Buku besar akrual</p>

            <table border="1" cellpadding="1" cellspacing="1" style="width:100%">
                <tbody>
                    <tr>
                        <td>Debit</td>
                        <td>Belanja pegawai</td>
                        <td>Rp 124.500.000</td>
                    </tr>
                    <tr>
                        <td>Debit</td>
                        <td>Belanja barang</td>
                        <td>Rp 147.860.000</td>
                    </tr>
                    <tr>
                        <td>Debit</td>
                        <td>Belanja modal</td>
                        <td>Rp 56.750.000</td>
                    </tr>
                    <tr>
                        <td>Debit</td>
                        <td>Dicadangkan untuk belanja</td>
                        <td>Rp 329.110.000</td>
                    </tr>
                </tbody>
            </table>
            
            <p>&nbsp;</p>',
            'answer_b' => '<p>Buku besar akrual</p>

            <table border="1" cellpadding="1" cellspacing="1" style="width:100%">
                <tbody>
                    <tr>
                        <td>Debit</td>
                        <td>Dicadangkan untuk belanja</td>
                        <td>Rp 329.110.000</td>
                    </tr>
                    <tr>
                        <td>Kredit</td>
                        <td>Belanja pegawai</td>
                        <td>Rp 124.500.000</td>
                    </tr>
                    <tr>
                        <td>Kredit</td>
                        <td>Belanja barang</td>
                        <td>Rp 147.860.000</td>
                    </tr>
                    <tr>
                        <td>Kredit</td>
                        <td>Belanja modal</td>
                        <td>Rp 56.750.000</td>
                    </tr>
                </tbody>
            </table>
            
            <p>&nbsp;</p>',
            'answer_c' => '<p>Buku besar akrual</p>

            <table border="1" cellpadding="1" cellspacing="1" style="width:100%">
                <tbody>
                    <tr>
                        <td>Debit</td>
                        <td>Belanja pegawai</td>
                        <td>Rp 124.500.000</td>
                    </tr>
                    <tr>
                        <td>Debit</td>
                        <td>Belanja barang</td>
                        <td>Rp 147.860.000</td>
                    </tr>
                    <tr>
                        <td>Debit</td>
                        <td>Belanja modal</td>
                        <td>Rp 56.750.000</td>
                    </tr>
                    <tr>
                        <td>Kredit</td>
                        <td>Kas di Bendahara Umum Negara</td>
                        <td>Rp 329.110.000</td>
                    </tr>
                </tbody>
            </table>
            
            <p>&nbsp;</p>',
            'answer_d' => '<p>Buku besar akrual</p>

            <table border="1" cellpadding="1" cellspacing="1" style="width:100%">
                <tbody>
                    <tr>
                        <td>Debit</td>
                        <td>Dicadangkan untuk belanja</td>
                        <td>Rp 329.110.000</td>
                    </tr>
                    <tr>
                        <td>Kredit</td>
                        <td>Pengeluaran pembiayaan dalam negeri</td>
                        <td>Rp 329.110.000</td>
                    </tr>
                </tbody>
            </table>
            
            <p>&nbsp;</p>',
            'correct_answer' => 'a',
        ]);
        MultipleChoice::create([
            'question_type' => 'pusat',
            'question' => '<p>Diketahui terjadi penerimaan pembayaran sewa kantin untuk 1 (satu) tahun sejak tanggal 1 Januari 2020 sebesar Rp 24.000.000. Bagaimana jurnal yang sesuai untuk mencatat transaksi tersebut?</p>',
            'question_explanation' => '<p>Jurnal pengakuan pendapatan pada entitas akuntansi/pelaporan pemerintah:&nbsp;</p>
            <table border="1" cellpadding="1" cellspacing="1" style="width:100%">
                <tbody>
                    <tr>
                        <td>&nbsp;</td>
                        <td><strong>Buku Besar Akrual</strong></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td><strong>Buku Besar Kas</strong></td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>Uraian</td>
                        <td>Ket</td>
                        <td>&nbsp;</td>
                        <td>Uraian</td>
                        <td>Ket</td>
                    </tr>
                    <tr>
                        <td>Db</td>
                        <td>Diterima dari entitas lain (ekuitas)&nbsp;</td>
                        <td>LPE</td>
                        <td>Db</td>
                        <td>Diterima dari entitas lain</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Kr</td>
                        <td>Pendapatan</td>
                        <td>LO</td>
                        <td>Kr</td>
                        <td>Pendapatan</td>
                        <td>LRA</td>
                    </tr>
                </tbody>
            </table>',
            'answer_a' => '<table border="1" cellpadding="1" cellspacing="1" style="width:100%">
            <tbody>
                <tr>
                    <td>Tanggal</td>
                    <td>Keterangan</td>
                    <td>Debit</td>
                    <td>Kredit</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><strong>Jurnal akrual</strong></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>1 Jan 20</td>
                    <td>Pendapatan PNBP-Sewa</td>
                    <td>Rp 24.000.000</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>Pendapatan Sewa diterima dimuka</td>
                    <td>&nbsp;</td>
                    <td>Rp 24.000.000</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><strong>Jurnal kas</strong></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>1 Jan 20</td>
                    <td>Diterima dari entitas lain</td>
                    <td>Rp 24.000.000</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>Pendapatan sewa</td>
                    <td>&nbsp;</td>
                    <td>Rp 24.000.000</td>
                </tr>
            </tbody>
            </table>',
                'answer_b' => '<table border="1" cellpadding="1" cellspacing="1" style="width:100%">
                <tbody>
                    <tr>
                        <td>Tanggal</td>
                        <td>Keterangan</td>
                        <td>Debit</td>
                        <td>Kredit</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td><strong>Jurnal akrual</strong></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>1 Jan 20</td>
                        <td>Diterima dari entitas lain</td>
                        <td>Rp 24.000.000</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>Pendapatan PNBP-Sewa</td>
                        <td>&nbsp;</td>
                        <td>Rp 24.000.000</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td><strong>Jurnal kas</strong></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>1 Jan 20</td>
                        <td>Pendapatan sewa</td>
                        <td>Rp 24.000.000</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>Pendapatan diterima di muka</td>
                        <td>&nbsp;</td>
                        <td>Rp 24.000.000</td>
                    </tr>
                </tbody>
            </table>',
                'answer_c' => '<table border="1" cellpadding="1" cellspacing="1" style="width:100%">
                <tbody>
                    <tr>
                        <td>Tanggal</td>
                        <td>Keterangan</td>
                        <td>Debit</td>
                        <td>Kredit</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td><strong>Jurnal akrual</strong></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>1 Jan 20</td>
                        <td>Diterima dari entitas lain</td>
                        <td>Rp 24.000.000</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>Pendapatan PNBP-Sewa</td>
                        <td>&nbsp;</td>
                        <td>Rp 24.000.000</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td><strong>Jurnal kas</strong></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>1 Jan 20</td>
                        <td>Diterima dari entitas lain</td>
                        <td>Rp 24.000.000</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>Pendapatan sewa</td>
                        <td>&nbsp;</td>
                        <td>Rp 24.000.000</td>
                    </tr>
                </tbody>
            </table>',
                'answer_d' => '<table border="1" cellpadding="1" cellspacing="1" style="width:100%">
                <tbody>
                    <tr>
                        <td>Tanggal</td>
                        <td>Keterangan</td>
                        <td>Debit</td>
                        <td>Kredit</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td><strong>Jurnal akrual</strong></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>1 Jan 20</td>
                        <td>Diterima dari entitas lain</td>
                        <td>Rp 24.000.000</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>Pendapatan sewa diterima dimuka</td>
                        <td>&nbsp;</td>
                        <td>Rp 24.000.000</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td><strong>Jurnal kas</strong></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>1 Jan 20</td>
                        <td>Diterima dari entitas lain</td>
                        <td>Rp 24.000.000</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>Pendapatan sewa diterima dimuka</td>
                        <td>&nbsp;</td>
                        <td>Rp 24.000.000</td>
                    </tr>
                </tbody>
            </table>',
            'correct_answer' => 'c',
        ]);
        MultipleChoice::create([
            'question_type' => 'pusat',
            'question' => '<p>Dari pernyataan berikut tentang penyusutan dan amortisasi, manakah pernyataan yang tidak benar?&nbsp;</p>',
            'question_explanation' => '<p>Penyusutan adalah alokasi sistematis atas nilai suatu aset tetap yang dapat disusutkan selama masa manfaat aset yang bersangkutan. Nilai penyusutan untuk masing-masing periode diakui sebagai pengurang nilai tercatat aset tetap dalam neraca dan sebagai beban penyusutan dalam laporan operasional. Amortisasi adalah pengurangan nilai tak berwujud secara sistematis yang dilakukan setiap periode akuntansi dalam jangka waktu tertentu. Nilai amortisasi masing-masing periode diakui sebagai beban amortisasi yang disajikan di laporan operasional dan mengurangi nilai buku aset tak berwujud pada neraca.&nbsp;</p>',
            'answer_a' => '<p>Penyusutan adalah alokasi sistematis atas nilai suatu aset tetap yang dapat disusutkan selama masa manfaat aset yang bersangkutan</p>',
            'answer_b' => '<p>Nilai penyusutan untuk masing-masing periode diakui sebagai pengurang nilai tercatat aset tetap dalam neraca dan sebagai beban penyusutan dalam laporan operasional</p>',
            'answer_c' => '<p>Nilai amortisasi masing-masing periode diakui sebagai penambah nilai buku aset tidak berwujud pada neraca</p>',
            'answer_d' => '<p>Amortisasi merupakan pengurang nilai tak berwujud secara sistematis yang dilakukan setiap periode akuntansi dalam jangka waktu tertentu</p>',
            'correct_answer' => 'c',
        ]);
        MultipleChoice::create([
            'question_type' => 'pusat',
            'question' => '<p>Aset yang sudah lama dan tidak dapat digunakan secara optimal dapat diajukan usulan penghapusan, bagaimana jurnal yang tepat untuk mencatat penghapusan aset tersebut?</p>',
            'question_explanation' => '<p>Aset yang sudah lama dan tidak dapat digunakan secara optimal lagi oleh pemerintah, dapat diajukan usulan penghapusannya yang jika secara ekonomis akan lebih menguntungkan bagi negara. Perekaman dilakukan pada Aplikasi SIMAK-BMN dengan jurnal akrual sebagai berikut:</p>
                <table border="1" cellpadding="1" cellspacing="1" style="width:100%">
                    <tbody>
                        <tr>
                            <td>Tanggal</td>
                            <td>Keterangan</td>
                            <td>Debit</td>
                            <td>Kredit</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td><strong>Jurnal akrual</strong></td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>X/X/XX</td>
                            <td>Aset tetap yang tidak digunakan dalam operasi pemerintah</td>
                            <td>Rp XX</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>Aset tetap&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>Rp XX</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>Akumulasi penyusutan aset tetap&nbsp;</td>
                            <td>Rp XX</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>Akumulasi penyusutan aset tetap yang tidak digunakan dalam operasi pemerintah</td>
                            <td>&nbsp;</td>
                            <td>Rp XX</td>
                        </tr>
                    </tbody>
                </table>',
            'answer_a' => '<table border="1" cellpadding="1" cellspacing="1" style="width:100%">
                                <tbody>
                                    <tr>
                                        <td>Tanggal</td>
                                        <td>Keterangan</td>
                                        <td>Debit</td>
                                        <td>Kredit</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td><strong>Jurnal akrual</strong></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>X/X/XX</td>
                                        <td>Aset tetap</td>
                                        <td>Rp XX</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Aset tetap yang tidak digunakan dalam operasi pemerintah</td>
                                        <td>&nbsp;</td>
                                        <td>Rp XX</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Akumulasi penyusutan aset tetap yang tidak digunakan dalam operasi pemerintah</td>
                                        <td>Rp XX</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Akumulasi penyusutan aset tetap</td>
                                        <td>&nbsp;</td>
                                        <td>Rp XX</td>
                                    </tr>
                                </tbody>
                            </table>
                            <p>&nbsp;</p>',
            'answer_b' => '<table border="1" cellpadding="1" cellspacing="1" style="width:100%">
                                <tbody>
                                    <tr>
                                        <td>Tanggal</td>
                                        <td>Keterangan</td>
                                        <td>Debit</td>
                                        <td>Kredit</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td><strong>Jurnal akrual</strong></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>X/X/XX</td>
                                        <td>Aset tetap yang tidak digunakan dalam operasi pemerintah</td>
                                        <td>Rp XX</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Aset tetap&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>Rp XX</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Akumulasi penyusutan aset tetap yang tidak digunakan dalam operasi pemerintah</td>
                                        <td>Rp XX</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Akumulasi penyusutan aset tetap</td>
                                        <td>&nbsp;</td>
                                        <td>Rp XX</td>
                                    </tr>
                                </tbody>
                            </table>',
            'answer_c' => '<table border="1" cellpadding="1" cellspacing="1" style="width:100%">
                                <tbody>
                                    <tr>
                                        <td>Tanggal</td>
                                        <td>Keterangan</td>
                                        <td>Debit</td>
                                        <td>Kredit</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td><strong>Jurnal akrual</strong></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>X/X/XX</td>
                                        <td>Beban kerugian pelepasan aset</td>
                                        <td>Rp XX</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Aset tetap yang tidak digunakan dalam operasi pemerintah&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>Rp XX</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Akumulasi penyusutan aset tetap yang tidak digunakan dalam operasi pemerintah</td>
                                        <td>Rp XX</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Akumulasi penyusutan aset tetap</td>
                                        <td>&nbsp;</td>
                                        <td>Rp XX</td>
                                    </tr>
                                </tbody>
                            </table>',
            'answer_d' => '<table border="1" cellpadding="1" cellspacing="1" style="width:100%">
                                <tbody>
                                    <tr>
                                        <td>Tanggal</td>
                                        <td>Keterangan</td>
                                        <td>Debit</td>
                                        <td>Kredit</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td><strong>Jurnal akrual</strong></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>X/X/XX</td>
                                        <td>Aset tetap yang tidak digunakan dalam operasi pemerintah</td>
                                        <td>Rp XX</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Aset tetap&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>Rp XX</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Akumulasi penyusutan aset tetap&nbsp;</td>
                                        <td>Rp XX</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Akumulasi penyusutan aset tetap yang tidak digunakan dalam operasi pemerintah</td>
                                        <td>&nbsp;</td>
                                        <td>Rp XX</td>
                                    </tr>
                                </tbody>
                            </table>',
            'correct_answer' => 'd',
        ]);
        MultipleChoice::create([
            'question_type' => 'pusat',
            'question' => '<p>Pada tanggal 5 Mei 2020, Instansi membeli laptop sebanyak 10 unit dengan harga satuan Rp 8.000.000. Atas pengeluaran tersebut, diterbitkan SPM/SP2D sesuai tanggal BAST pada 10 Mei 2020. Diketahui masa manfaat laptop tersebut adalah 5 tahun. Buatlah jurnal terkait transaksi tersebut!&nbsp;</p>',
            'question_explanation' => '<p>Oleh sifat laptop dapat disajikan ke dalam aset tetap, maka diketahui bahwa pembelian aset tersebut masuk ke dalam kategori aset intrakomptabel. Maka pencatatannya adalah sebagai berikut:&nbsp;</p>
                <table border="1" cellpadding="1" cellspacing="1" style="width:100%">
                    <tbody>
                        <tr>
                            <td>Tanggal</td>
                            <td>Keterangan</td>
                            <td>Debit</td>
                            <td>Kredit</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td><strong>Jurnal akrual</strong></td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>X/X/XX</td>
                            <td>Aset tetap/Aset Lainnya yang Belum Diregister</td>
                            <td>Rp XX</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>Ditagihkan ke entitas lain</td>
                            <td>&nbsp;</td>
                            <td>Rp XX</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>Aset tetap/Aset Lainnya&nbsp;</td>
                            <td>Rp XX</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>Aset tetap yang belum diregister</td>
                            <td>&nbsp;</td>
                            <td>Rp XX</td>
                        </tr>
                    </tbody>
                </table>',
            'answer_a' => '<table border="1" cellpadding="1" cellspacing="1" style="width:100%">
                                <tbody>
                                    <tr>
                                        <td>Tanggal</td>
                                        <td>Keterangan</td>
                                        <td>Debit</td>
                                        <td>Kredit</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td><strong>Jurnal akrual</strong></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>5 Mei 20</td>
                                        <td>Aset tetap yang belum diregister</td>
                                        <td>Rp 8.000.000</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Ditagihkan ke entitas lain</td>
                                        <td>&nbsp;</td>
                                        <td>Rp 8.000.000</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Aset tetap-laptop</td>
                                        <td>Rp 8.000.000</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Aset tetap yang belum diregister</td>
                                        <td>&nbsp;</td>
                                        <td>Rp 8.000.000</td>
                                    </tr>
                                    <tr>
                                        <td>31 Des 20</td>
                                        <td>Beban depresiasi - laptop</td>
                                        <td>Rp 1.066.667</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Akumulasi depresiasi</td>
                                        <td>&nbsp;</td>
                                        <td>Rp 1.066.667</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td><strong>Jurnal kas</strong></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>1 Jan 20</td>
                                        <td>Belanja modal</td>
                                        <td>Rp 8.000.000</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Ditagihkan ke entitas lain</td>
                                        <td>&nbsp;</td>
                                        <td>Rp 8.000.000</td>
                                    </tr>
                                </tbody>
                            </table>',
            'answer_b' => '<table border="1" cellpadding="1" cellspacing="1" style="width:100%">
                                <tbody>
                                    <tr>
                                        <td>Tanggal</td>
                                        <td>Keterangan</td>
                                        <td>Debit</td>
                                        <td>Kredit</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td><strong>Jurnal akrual</strong></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>5 Mei 20</td>
                                        <td>Aset tetap-laptop</td>
                                        <td>Rp 8.000.000</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Aset tetap yang belum diregister</td>
                                        <td>&nbsp;</td>
                                        <td>Rp 8.000.000</td>
                                    </tr>
                                    <tr>
                                        <td>31 Des 20</td>
                                        <td>Beban depresiasi - laptop</td>
                                        <td>Rp 1.066.667</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Akumulasi depresiasi</td>
                                        <td>&nbsp;</td>
                                        <td>Rp 1.066.667</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td><strong>Jurnal kas</strong></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>1 Jan 20</td>
                                        <td>Belanja modal</td>
                                        <td>Rp 8.000.000</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Ditagihkan ke entitas lain</td>
                                        <td>&nbsp;</td>
                                        <td>Rp 8.000.000</td>
                                    </tr>
                                </tbody>
                            </table>',
            'answer_c' => '<table border="1" cellpadding="1" cellspacing="1" style="width:100%">
                                <tbody>
                                    <tr>
                                        <td>Tanggal</td>
                                        <td>Keterangan</td>
                                        <td>Debit</td>
                                        <td>Kredit</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td><strong>Jurnal akrual</strong></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>5 Mei 20</td>
                                        <td>Aset tetap yang belum diregister</td>
                                        <td>Rp 80.000.000</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Ditagihkan ke entitas lain</td>
                                        <td>&nbsp;</td>
                                        <td>Rp 80.000.000</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Aset tetap-laptop</td>
                                        <td>Rp 80.000.000</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Aset tetap yang belum diregister</td>
                                        <td>&nbsp;</td>
                                        <td>Rp 80.000.000</td>
                                    </tr>
                                    <tr>
                                        <td>31 Des 20</td>
                                        <td>Beban depresiasi - laptop</td>
                                        <td>Rp 10.066.667</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Akumulasi depresiasi</td>
                                        <td>&nbsp;</td>
                                        <td>Rp 10.066.667</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td><strong>Jurnal kas</strong></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>1 Jan 20</td>
                                        <td>Belanja modal</td>
                                        <td>Rp 80.000.000</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Ditagihkan ke entitas lain</td>
                                        <td>&nbsp;</td>
                                        <td>Rp 80.000.000</td>
                                    </tr>
                                </tbody>
                            </table>',
            'answer_d' => '<table border="1" cellpadding="1" cellspacing="1" style="width:100%">
                                <tbody>
                                    <tr>
                                        <td>Tanggal</td>
                                        <td>Keterangan</td>
                                        <td>Debit</td>
                                        <td>Kredit</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td><strong>Jurnal akrual</strong></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>5 Mei 20</td>
                                        <td>Aset tetap-laptop</td>
                                        <td>Rp 80.000.000</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Aset tetap yang belum diregister</td>
                                        <td>&nbsp;</td>
                                        <td>Rp 80.000.000</td>
                                    </tr>
                                    <tr>
                                        <td>31 Des 20</td>
                                        <td>Beban depresiasi - laptop</td>
                                        <td>Rp 10.066.667</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Akumulasi depresiasi</td>
                                        <td>&nbsp;</td>
                                        <td>Rp 10.066.667</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td><strong>Jurnal kas</strong></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>1 Jan 20</td>
                                        <td>Belanja modal</td>
                                        <td>Rp 80.000.000</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Ditagihkan ke entitas lain</td>
                                        <td>&nbsp;</td>
                                        <td>Rp 80.000.000</td>
                                    </tr>
                                </tbody>
                            </table>',
            'correct_answer' => 'c',
        ]);
        MultipleChoice::create([
            'question_type' => 'pusat',
            'question' => '<p>Apa yang membedakan antara Laporan Realisasi Anggaran (LRA) dan Laporan Operasional (LO)?</p>',
            'question_explanation' => '<p>Komponen Laporan Keuangan termasuk:&nbsp;<br />
            <strong>Laporan Realisasi Anggaran (LRA)</strong>: LRA merupakan komponen laporan keuangan yang menyediakan informasi mengenai realisasi pendapatan-LRA, belanja, transfer, surplus/defisit-LRA, dan pembiayaan dari suatu entitas pelaporan yang masing-masing diperbandingkan dengan anggarannya. Informasi tersebut berguna bagi para pengguna laporan dalam mengevaluasi keputusan mengenai alokasi sumber-sumber daya ekonomi, akuntabilitas, dan ketaatan entitas pelaporan terhadap anggaran.&nbsp;<br />
            <strong>Laporan Operasional (LO)</strong>: LO merupakan komponen laporan keuangan yang menyediakan informasi mengenai seluruh kegiatan operasional keuangan entitas pelaporan yang tercerminkan dalam pendapatan-LO, beban, dan surplus/defisit operasional dari suatu entitas pelaporan. Disamping melaporkan kegiatan operasional, LO juga melaporkan transaksi keuangan dari kegiatan non operasional dan pos luar biasa yang merupakan transaksi di luar tugas dan fungsi utama entitas.&nbsp;</p>',
            'answer_a' => '<p>LO merupakan komponen laporan keuangan yang menyediakan informasi mengenai realisasi, sedangkan LRA menyediakan mengenai seluruh kegiatan operasional keuangan entitas pelaporan</p>',
            'answer_b' => '<p>LO merupakan komponen laporan keuangan yang menyajikan secara komparatif dengan periode sebelumnya, sedangkan LRA menggambarkan posisi keuangan suatu entitas pelaporan</p>',
            'answer_c' => '<p>LO merupakan komponen laporan keuangan yang menyediakan informasi mengenai seluruh kegiatan operasional keuangan entitas pelaporan, sedangkan LRA menyediakan informasi mengenai realisasi yang berguna dalam mengevaluasi keputusan mengenai alokasi sumber daya ekonomi, akuntabilitas, dan ketaatan entitas pelaporan terhadap anggaran</p>',
            'answer_d' => '<p>LO merupakan komponen keuangan yang berguna bagi pengambil keputusan dalam mengevaluasi informasi mengenai alokasi sumber daya ekonomi, akuntabilitas, dan ketaatan pelaporan terhadap anggaran, sedangkan LRA melaporkan terkait kegiatan operasional, non operasional, dan pos luar biasa di luar tugas dan fungsi utama entitas</p>',
            'correct_answer' => 'c',
        ]);
        MultipleChoice::create([
            'question_type' => 'pusat',
            'question' => '<p>Berikut merupakan bagian dari Laporan Keuangan Pemerintah Pusat (LKPP):</p>

            <ol>
                <li>Laporan Realisasi Anggaran</li>
                <li>Laporan Perubahan SAL&nbsp;</li>
                <li>Neraca</li>
                <li>Laporan Operasional&nbsp;</li>
                <li>Laporan Arus Kas</li>
                <li>Laporan Perubahan Ekuitas</li>
                <li>CaLK</li>
            </ol>
            
            <p>Manakah bagian dari laporan keuangan tersebut yang tidak dibuat dalam Sistem Akuntansi dan Pelaporan Keuangan Instansi (SAI)?&nbsp;</p>',
            'question_explanation' => '<p>Output akhir dari proses akuntansi SAI adalah Laporan Keuangan yang terdiri dari:&nbsp;</p>

            <ol>
                <li>Laporan Realisasi Anggaran</li>
                <li>Neraca</li>
                <li>Laporan Operasional</li>
                <li>Laporan Perubahan Ekuitas</li>
                <li>Catatan atas Laporan Keuangan</li>
            </ol>',
            'answer_a' => '<p>2) dan 3)</p>',
            'answer_b' => '<p>6) dan 7)&nbsp;</p>',
            'answer_c' => '<p>5) dan 7)&nbsp;</p>',
            'answer_d' => '<p>2) dan 6)&nbsp;</p>',
            'correct_answer' => 'd',
        ]);
        MultipleChoice::create([
            'question_type' => 'pusat',
            'question' => '<p>Pada Mei 2020 diterima pengembalian atas pembayaran honor bulan Oktober 2020 sebesar Rp 1.000.000 kepada Bendahara Pengeluaran. Atas kas yang diterima, Bendahara Pengeluaran melakukan penyetoran ke kas negara menggunakan BPN. Berdasarkan uraian tersebut, bagaimana jurnal yang tepat?</p>',
            'question_explanation' => '<p>Transaksi pendapatan terjadi dengan adanya Bukti Penerimaan Negara (BPN) atau dokumen lain yang dipersamakan. Berdasarkan BPN atau dokumen lain yang dipersamakan tersebut, satuan kerja melakukan perekaman pendapatan pada Aplikasi SAIBA. Setelah proses posting dilakukan maka akan terbentuk jurnal sebagai berikut:&nbsp;</p>
                <table border="1" cellpadding="1" cellspacing="1">
                    <tbody>
                        <tr>
                            <td>Tanggal</td>
                            <td>Keterangan</td>
                            <td>Debit</td>
                            <td>Kredit</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td><strong>Jurnal akrual</strong></td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>x/xx/xxxx</td>
                            <td>Diterima dari entitas lain</td>
                            <td>x</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>Penerimaan kembali belanja barang TAYL</td>
                            <td>&nbsp;</td>
                            <td>x</td>
                        </tr>
                        <tr>
                            <td>x/xx/xxxx</td>
                            <td><strong>Jurnal Kas</strong></td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>Utang kepada KUN&nbsp;</td>
                            <td>x</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>Penerimaan kembali belanja barang TAYL</td>
                            <td>&nbsp;</td>
                            <td>x</td>
                        </tr>
                    </tbody>
                </table>',
            'answer_a' => '<table border="1" cellpadding="1" cellspacing="1" style="width:100%">
                                <tbody>
                                    <tr>
                                        <td>Tanggal</td>
                                        <td>Keterangan</td>
                                        <td>Debit</td>
                                        <td>Kredit</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td><strong>Jurnal akrual</strong></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>x/xx/xxxx</td>
                                        <td>Diterima dari entitas lain</td>
                                        <td>Rp 1.000.000</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Penerimaan kembali belanja barang TAYL</td>
                                        <td>&nbsp;</td>
                                        <td>Rp 1.000.000</td>
                                    </tr>
                                    <tr>
                                        <td>x/xx/xxxx</td>
                                        <td><strong>Jurnal Kas</strong></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Utang kepada KUN&nbsp;</td>
                                        <td>Rp 1.000.000</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Penerimaan kembali belanja barang TAYL</td>
                                        <td>&nbsp;</td>
                                        <td>Rp 1.000.000</td>
                                    </tr>
                                </tbody>
                            </table>',
            'answer_b' => '<table border="1" cellpadding="1" cellspacing="1" style="width:100%">
                                <tbody>
                                    <tr>
                                        <td>Tanggal</td>
                                        <td>Keterangan</td>
                                        <td>Debit</td>
                                        <td>Kredit</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td><strong>Jurnal akrual</strong></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>x/xx/xxxx</td>
                                        <td>Diterima dari entitas lain</td>
                                        <td>Rp 1.000.000</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Pendapatan PNBP lainnya</td>
                                        <td>&nbsp;</td>
                                        <td>Rp 1.000.000</td>
                                    </tr>
                                    <tr>
                                        <td>x/xx/xxxx</td>
                                        <td><strong>Jurnal Kas</strong></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Utang kepada KUN&nbsp;</td>
                                        <td>Rp 1.000.000</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Pendapatan PNBP lainnya</td>
                                        <td>&nbsp;</td>
                                        <td>Rp 1.000.000</td>
                                    </tr>
                                </tbody>
                            </table>',
            'answer_c' => '<table border="1" cellpadding="1" cellspacing="1" style="width:100%">
                                <tbody>
                                    <tr>
                                        <td>Tanggal</td>
                                        <td>Keterangan</td>
                                        <td>Debit</td>
                                        <td>Kredit</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td><strong>Jurnal akrual</strong></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>x/xx/xxxx</td>
                                        <td>Kas di Bendahara Penerimaan</td>
                                        <td>Rp 1.000.000</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Pendapatan PNBP lainnya</td>
                                        <td>&nbsp;</td>
                                        <td>Rp 1.000.000</td>
                                    </tr>
                                    <tr>
                                        <td>x/xx/xxxx</td>
                                        <td><strong>Jurnal Kas</strong></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Kas di Bendahara Penerimaan</td>
                                        <td>Rp 1.000.000</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Pendapatan PNBP lainnya</td>
                                        <td>&nbsp;</td>
                                        <td>Rp 1.000.000</td>
                                    </tr>
                                </tbody>
                            </table>',
            'answer_d' => '<table border="1" cellpadding="1" cellspacing="1" style="width:100%">
                                <tbody>
                                    <tr>
                                        <td>Tanggal</td>
                                        <td>Keterangan</td>
                                        <td>Debit</td>
                                        <td>Kredit</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td><strong>Jurnal akrual</strong></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>x/xx/xxxx</td>
                                        <td>Kas di Bendahara Penerimaan</td>
                                        <td>Rp 1.000.000</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Penerimaan kembali belanja barang TAYL</td>
                                        <td>&nbsp;</td>
                                        <td>Rp 1.000.000</td>
                                    </tr>
                                    <tr>
                                        <td>x/xx/xxxx</td>
                                        <td><strong>Jurnal Kas</strong></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Kas di Bendahara Penerimaan</td>
                                        <td>Rp 1.000.000</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Penerimaan kembali belanja barang TAYL</td>
                                        <td>&nbsp;</td>
                                        <td>Rp 1.000.000</td>
                                    </tr>
                                </tbody>
                            </table>',
            'correct_answer' => 'a',
        ]);
        MultipleChoice::create([
            'question_type' => 'pusat',
            'question' => '<p>Berikut merupakan bagian dari klasifikasi ekonomi belanja, kecuali&hellip;&nbsp;</p>',
            'question_explanation' => '<p>Berdasarkan klasifikasi ekonomi, maka belanja dapat dibagi menjadi 8 (delapan) jenis, yaitu:&nbsp;</p>
            <ul>
                <li>Belanja Pegawai;</li>
                <li>Belanja Barang;</li>
                <li>Belanja Modal;</li>
                <li>Belanja Bunga Utang;</li>
                <li>Belanja Subsidi;</li>
                <li>Belanja Bantuan Sosial</li>
                <li>Belanja Lain-lain</li>
            </ul>',
            'answer_a' => '<p>Belanja Pegawai</p>',
            'answer_b' => '<p>Belanja Bantuan Sosiall</p>',
            'answer_c' => '<p>Belanja Barang&nbsp;</p>',
            'answer_d' => '<p>Belanja Perjalanan Dinas</p>',
            'correct_answer' => 'd',
        ]);
        MultipleChoice::create([
            'question_type' => 'pusat',
            'question' => '<p>Berikut merupakan pernyataan terkait definisi Beban, kecuali&hellip;&nbsp;</p>',
            'question_explanation' => '<p>Definisi Beban adalah penurunan manfaat ekonomi atau potensi jasa atau biaya yang timbul akibat transaksi tersebut dalam periode laporan yang berdampak pada penurunan ekuitas, baik berupa pengeluaran, konsumsi aset, atau timbulnya kewajiban.&nbsp;</p>',
            'answer_a' => '<p>Merupakan penurunan manfaat ekonomi atau potensi jasa</p>',
            'answer_b' => '<p>Merupakan biaya yang timbul akibat dari transaksi yang timbul dalam periode laporan yang berdampak pada penurunan ekuitas</p>',
            'answer_c' => '<p>Pengeluaran dari Rekening Kas Umum Negara</p>',
            'answer_d' => '<p>Berupa pengeluaran, konsumsi aset, atau timbulnya kewajiban</p>',
            'correct_answer' => 'c',
        ]);
        MultipleChoice::create([
            'question_type' => 'pusat',
            'question' => '<p>Kapan transaksi Beban dapat diakui dalam laporan keuangan?</p>',
            'question_explanation' => '<p>Beban diakui pada saat terjadi penurunan manfaat ekonomi atau potensi jasa, terjadi konsumsi aset, dan timbulnya kewajiban.</p>',
            'answer_a' => '<p>Terjadinya pengeluaran dari Rekening Kas Umum Negara</p>',
            'answer_b' => '<p>Terjadi penurunan manfaat ekonomi atau potensi jasa</p>',
            'answer_c' => '<p>Terjadi pengesahan dari Bendahara Umum Negara/Kuasa Bendahara Umum Negara</p>',
            'answer_d' => '<p>Pengembalian dari tahun anggaran berjalan</p>',
            'correct_answer' => 'b',
        ]);
        MultipleChoice::create([
            'question_type' => 'pusat',
            'question' => '<p>Penerimaan/pengeluaran uang dari suatu entitas pelaporan dari/kepada entitas pelaporan lain, termasuk dana perimbangan, dana otonomi khusus, dan dana penyesuaian serta dana bagi hasil pemerintah daerah merupakan definisi dari&hellip;</p>',
            'question_explanation' => '<p>Transfer adalah penerimaan/pengeluaran uang dari suatu entitas pelaporan dari/kepada entitas pelaporan lain, termasuk dana perimbangan, dana otonomi khusus, dan dana penyesuaian serta dana bagi hasil pemerintah daerah.</p>',
            'answer_a' => '<p>Transfer</p>',
            'answer_b' => '<p>Belanja</p>',
            'answer_c' => '<p>Beban</p>',
            'answer_d' => '<p>Pendapatan</p>',
            'correct_answer' => 'a',
        ]);
        MultipleChoice::create([
            'question_type' => 'pusat',
            'question' => '<p>Mulai dari tahun 2021, apa metode penilaian persediaan yang digunakan oleh Pemerintah?&nbsp;</p>',
            'question_explanation' => '<p>Metode First in First out merupakan metode dimana barang yang masuk terlebih dahulu dianggap sebagai barang yang pertama kali keluar. Dengan metode ini saldo persediaan dihitung berdasarkan harga perolehan masing-masing. Penilaian persediaan menggunakan FIFO diterapkan mulai tahun 2021 secara prospektif, setelah Pemerintah menerapkan Metode Harga Perolehan Terakhir pada tahun-tahun sebelumnya.</p>',
            'answer_a' => '<p>Harga pasar</p>',
            'answer_b' => '<p>First in First out</p>',
            'answer_c' => '<p>Weighted-Average</p>',
            'answer_d' => '<p>Harga pembelian terakhir</p>',
            'correct_answer' => 'b',
        ]);
        MultipleChoice::create([
            'question_type' => 'pusat',
            'question' => '<p>Apa yang dimaksud dengan metode penilaian persediaan First in First out?&nbsp;</p>',
            'question_explanation' => '<p>Metode First in First out merupakan metode dimana barang yang masuk terlebih dahulu dianggap sebagai barang yang pertama kali keluar. Dengan metode ini saldo persediaan dihitung berdasarkan harga perolehan masing-masing. Penilaian persediaan menggunakan FIFO diterapkan mulai tahun 2021 secara prospektif, setelah Pemerintah menerapkan Metode Harga Perolehan Terakhir pada tahun-tahun sebelumnya.&nbsp;</p>',
            'answer_a' => '<p>Pencatatan persediaan yang dilakukan setiap terjadi transaksi yang mempengaruhi persediaan</p>',
            'answer_b' => '<p>Biaya langsung yang terkait dengan persediaan yang diproduksi dan biaya tidak langsung yang dialokasikan secara sistematis</p>',
            'answer_c' => '<p>Penilaian persediaan dimana barang yang masuk terlebih dahulu dianggap sebagai barang yang pertama kali keluar</p>',
            'answer_d' => '<p>Pencatatan persediaan dimana barang yang masuk terakhir dianggap sebagai barang yang pertama kali keluar</p>',
            'correct_answer' => 'c',
        ]);
        MultipleChoice::create([
            'question_type' => 'pusat',
            'question' => '<p>Dalam rangka penyajian beban persediaan pada Laporan Operasional, yang dikecualikan dari beban persediaan adalah sebagai berikut, kecuali&hellip;</p>',
            'question_explanation' => '<p>Dalam rangka penyajian beban persediaan pada Laporan Operasional, Beban Persediaan dicatat sebesar pemakaian persediaan (use of goods). Dikecualikan dari Beban Persediaan adalah:&nbsp;<br />
            Pemakaian barang persediaan untuk pemeliharaan yang dicatat sebagai Beban Pemeliharaan;</p>
            
            <ol>
                <li>Penyerahan barang persediaan untuk dijual/diserahkan kepada masyarakat/pemda yang dicatat sebagai Beban Barang untuk Dijual/Diserahkan kepada Masyarakat/Pemda;</li>
                <li>Penyerahan barang persediaan dalam rangka bantuan sosial yang dicatat sebagai Beban Bantuan Sosial; dan&nbsp;</li>
                <li>Penyerahan barang persediaan untuk tujuan strategis/berjaga-jaga yang dicatat sebagai Beban Persediaan untuk Tujuan Strategis/Berjaga-jaga.&nbsp;</li>
            </ol>',
            'answer_a' => '<p>Pemakaian barang persediaan untuk pemeliharaan&nbsp;</p>',
            'answer_b' => '<p>Penyerahan barang persediaan dalam rangka bantuan sosial&nbsp;</p>',
            'answer_c' => '<p>Pemakaian sebesar pemakaian persediaan (<em>use of goods</em>)</p>',
            'answer_d' => '<p>Penyerahan barang persediaan untuk tujuan strategis/berjaga-jaga</p>',
            'correct_answer' => 'c',
        ]);
        MultipleChoice::create([
            'question_type' => 'pusat',
            'question' => '<p>Pada 18 Mei 2020, diterima resume tagihan belanja yang bersifat expandable. Bagaimana jurnal yang tepat untuk mencatat transaksi tersebut?&nbsp;</p>',
            'question_explanation' => '<p>Jurnal pada entitas akuntansi/pelaporan belanja atas resume tagihan belanja yang bersifat expandable adalah sebagai berikut:&nbsp;</p>
                <table border="1" cellpadding="1" cellspacing="1">
                    <tbody>
                        <tr>
                            <td>&nbsp;</td>
                            <td colspan="2" rowspan="1">Buku Besar Akrual</td>
                            <td>&nbsp;</td>
                            <td>Buku Besar Kas</td>
                        </tr>
                        <tr>
                            <td>Db</td>
                            <td>Belanja/transfer yang masih harus dibayar (kewajiban)</td>
                            <td>LO</td>
                            <td>Db</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>Kr</td>
                            <td>Ditagihkan ke entitas lain (ekuitas)&nbsp;</td>
                            <td>NRC</td>
                            <td>Kr</td>
                            <td>&nbsp;</td>
                        </tr>
                    </tbody>
                </table>',
            'answer_a' => '<table border="1" cellpadding="1" cellspacing="1" style="width:100%">
                                <tbody>
                                    <tr>
                                        <td>Tanggal</td>
                                        <td>Keterangan</td>
                                        <td>Debit</td>
                                        <td>Kredit</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td><strong>Jurnal Kas</strong></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>x/xx/xxxx</td>
                                        <td>Belanja (expandable)</td>
                                        <td>x</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Ditagihkan ke entitas lain</td>
                                        <td>&nbsp;</td>
                                        <td>x</td>
                                    </tr>
                                </tbody>
                            </table>',
            'answer_b' => '<table border="1" cellpadding="1" cellspacing="1" style="width:100%">
                                <tbody>
                                    <tr>
                                        <td>Tanggal</td>
                                        <td>Keterangan</td>
                                        <td>Debit</td>
                                        <td>Kredit</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td><strong>Jurnal Kas</strong></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>x/xx/xxxx</td>
                                        <td>Beban (expandable)</td>
                                        <td>x</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Belanja/transfer yang masih harus dibayar (kewajiban)&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>x</td>
                                    </tr>
                                </tbody>
                            </table>',
            'answer_c' => '<table border="1" cellpadding="1" cellspacing="1" style="width:100%">
                                <tbody>
                                    <tr>
                                        <td>Tanggal</td>
                                        <td>Keterangan</td>
                                        <td>Debit</td>
                                        <td>Kredit</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td><strong>Jurnal Kas</strong></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>x/xx/xxxx</td>
                                        <td>Ditagihkan ke entitas lain</td>
                                        <td>x</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Belanja/transfer yang masih harus dibayar (kewajiban)</td>
                                        <td>&nbsp;</td>
                                        <td>x</td>
                                    </tr>
                                </tbody>
                            </table>',
            'answer_d' => '<table border="1" cellpadding="1" cellspacing="1" style="width:100%">
                                <tbody>
                                    <tr>
                                        <td>Tanggal</td>
                                        <td>Keterangan</td>
                                        <td>Debit</td>
                                        <td>Kredit</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td><strong>Jurnal Kas</strong></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>x/xx/xxxx</td>
                                        <td>Belanja/transfer yang masih harus dibayar (kewajiban)</td>
                                        <td>x</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Ditagihkan ke entitas lain (ekuitas)&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>x</td>
                                    </tr>
                                </tbody>
                            </table>',
            'correct_answer' => 'b',
        ]);
        MultipleChoice::create([
            'question_type' => 'pusat',
            'question' => '<p>Pada 20 Mei 2020 diterima resume tagihan belanja yang bersifat expendable. Selanjutnya bagaimana jurnal atas realisasi pembayaran belanja yang bersifat expendable?&nbsp;</p>',
            'question_explanation' => '<p>Jurnal pada entitas akuntansi/pelaporan belanja atas realisasi pembayaran belanja yang bersifat expendable yang membebani rekening kas negara:&nbsp;</p>
                <table border="1" cellpadding="1" cellspacing="1" style="width:100%">
                    <tbody>
                        <tr>
                            <td colspan="1" rowspan="2">&nbsp;</td>
                            <td colspan="2" rowspan="1"><strong>Buku Besar Akrual</strong></td>
                            <td colspan="1" rowspan="2">&nbsp;</td>
                            <td colspan="2" rowspan="1"><strong>Buku Besar Kas</strong></td>
                        </tr>
                        <tr>
                            <td><strong>Uraian</strong></td>
                            <td><strong>Ket</strong></td>
                            <td><strong>Uraian</strong></td>
                            <td><strong>Ket</strong></td>
                        </tr>
                        <tr>
                            <td>Db</td>
                            <td>Belanja/Transfer yang masih harus dibayar (kewajiban)</td>
                            <td>NRC</td>
                            <td>Db</td>
                            <td>Belanja (expendable)</td>
                            <td>LRA</td>
                        </tr>
                        <tr>
                            <td>Kr</td>
                            <td>Ditagihkan ke entitas lain (ekuitas)&nbsp;</td>
                            <td>LPE</td>
                            <td>Kr</td>
                            <td>Ditagihkan ke entitas lain</td>
                            <td>&nbsp;</td>
                        </tr>
                    </tbody>
                </table>',
            'answer_a' => '<table border="1" cellpadding="1" cellspacing="1" style="width:100%">
                                <tbody>
                                    <tr>
                                        <td colspan="1" rowspan="2">&nbsp;</td>
                                        <td colspan="2" rowspan="1"><strong>Buku Besar Akrual</strong></td>
                                        <td colspan="1" rowspan="2">&nbsp;</td>
                                        <td colspan="2" rowspan="1"><strong>Buku Besar Kas</strong></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Uraian</strong></td>
                                        <td><strong>Ket</strong></td>
                                        <td><strong>Uraian</strong></td>
                                        <td><strong>Ket</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Db</td>
                                        <td>Belanja/Transfer yang masih harus dibayar (kewajiban)</td>
                                        <td>NRC</td>
                                        <td>Db</td>
                                        <td>Belanja (expendable)</td>
                                        <td>LRA</td>
                                    </tr>
                                    <tr>
                                        <td>Kr</td>
                                        <td>Ditagihkan ke entitas lain (ekuitas)&nbsp;</td>
                                        <td>LPE</td>
                                        <td>Kr</td>
                                        <td>Ditagihkan ke entitas lain</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                </tbody>
                            </table>
        
                <p>&nbsp;</p>',
            'answer_b' => '<table border="1" cellpadding="1" cellspacing="1" style="width:100%">
                                <tbody>
                                    <tr>
                                        <td colspan="1" rowspan="2">&nbsp;</td>
                                        <td colspan="2" rowspan="1"><strong>Buku Besar Akrual</strong></td>
                                        <td colspan="1" rowspan="2">&nbsp;</td>
                                        <td colspan="2" rowspan="1"><strong>Buku Besar Kas</strong></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Uraian</strong></td>
                                        <td><strong>Ket</strong></td>
                                        <td><strong>Uraian</strong></td>
                                        <td><strong>Ket</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Db</td>
                                        <td>Diterima dari entitas lain</td>
                                        <td>LPE</td>
                                        <td>Db</td>
                                        <td>Diterima dari entitas lain</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Kr</td>
                                        <td>Kas</td>
                                        <td>NRC</td>
                                        <td>Kr</td>
                                        <td>Kas</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                </tbody>
                            </table>',
            'answer_c' => '<table border="1" cellpadding="1" cellspacing="1" style="width:100%">
                                <tbody>
                                    <tr>
                                        <td colspan="1" rowspan="2">&nbsp;</td>
                                        <td colspan="2" rowspan="1"><strong>Buku Besar Akrual</strong></td>
                                        <td colspan="1" rowspan="2">&nbsp;</td>
                                        <td colspan="2" rowspan="1"><strong>Buku Besar Kas</strong></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Uraian</strong></td>
                                        <td><strong>Ket</strong></td>
                                        <td><strong>Uraian</strong></td>
                                        <td><strong>Ket</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Db</td>
                                        <td>Belanja (expendable)</td>
                                        <td>LRA</td>
                                        <td>Db</td>
                                        <td>Belanja/Transfer&nbsp;yang masih harus dibayar (kewajiban)</td>
                                        <td>NRC</td>
                                    </tr>
                                    <tr>
                                        <td>Kr</td>
                                        <td>Ditagihkan ke entitas lain&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>Kr</td>
                                        <td>Ditagihkan ke entitas lain&nbsp;(ekuitas)</td>
                                        <td>LPE</td>
                                    </tr>
                                </tbody>
                            </table>',
            'answer_d' => '<table border="1" cellpadding="1" cellspacing="1" style="width:100%">
                                <tbody>
                                    <tr>
                                        <td colspan="1" rowspan="2">&nbsp;</td>
                                        <td colspan="2" rowspan="1"><strong>Buku Besar Akrual</strong></td>
                                        <td colspan="1" rowspan="2">&nbsp;</td>
                                        <td colspan="2" rowspan="1"><strong>Buku Besar Kas</strong></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Uraian</strong></td>
                                        <td><strong>Ket</strong></td>
                                        <td><strong>Uraian</strong></td>
                                        <td><strong>Ket</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Db</td>
                                        <td>Belanja (expendable)</td>
                                        <td>LRA</td>
                                        <td>Db</td>
                                        <td>Diterima dari entitas lain</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Kr</td>
                                        <td>Ditagihkan ke entitas lain</td>
                                        <td>&nbsp;</td>
                                        <td>Kr</td>
                                        <td>Kas</td>
                                        <td>LAK</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>Db</td>
                                        <td>Belanja (expendable)</td>
                                        <td>LAK</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>Kr</td>
                                        <td>Ditagihkan ke entitas lain</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                </tbody>
                            </table>',
            'correct_answer' => 'a',
        ]);
        MultipleChoice::create([
            'question_type' => 'pusat',
            'question' => '<p>Pendapatan tunai diterima oleh Bendahara Pengeluaran dan/atau Bendahara Penerimaan entitas akuntansi/pelaporan pemerintah. Dalam hal pemungutan pajak belum disetor ke rekening kas negara maka akan disajikan sebagai&hellip;</p>',
            'question_explanation' => '<p>Jurnal pada entitas akuntansi/pelaporan pemungut pajak atas pendapatan tunai dari pungutan pajak belum disetor ke rekening kas negara:&nbsp;<br />
            Kas lainnya di bendahara<br />
            &nbsp;&nbsp; &nbsp;Utang pajak bendahara yang belum disetor</p>',
            'answer_a' => '<p>Kas</p>',
            'answer_b' => '<p>Utang pajak bendahara yang belum disetor</p>',
            'answer_c' => '<p>Kas lainnya di bendahara</p>',
            'answer_d' => '<p>Pendapatan perpajakan</p>',
            'correct_answer' => 'b',
        ]);
        MultipleChoice::create([
            'question_type' => 'pusat',
            'question' => '<p>Pada tanggal 31 Mei 2020 diterima pajak oleh Bendahara Penerimaan sejumlah Rp 100.000, akan tetapi penerimaan tersebut belum disetorkan karena terhalang oleh hari libur nasional. Bagaimana jurnal yang benar untuk mencatat transaksi tersebut?&nbsp;</p>',
            'question_explanation' => '<p>Jurnal pada entitas akuntansi/pelaporan pemungut pajak atas pendapatan tunai dari pungutan pajak belum disetor ke rekening kas negara:&nbsp;</p>
                <table border="1" cellpadding="1" cellspacing="1">
                    <tbody>
                        <tr>
                            <td colspan="1" rowspan="2">&nbsp;</td>
                            <td colspan="2" rowspan="1"><strong>Buku Besar Akrual</strong></td>
                            <td colspan="1" rowspan="2">&nbsp;</td>
                            <td colspan="2" rowspan="1"><strong>Buku Besar Kas</strong></td>
                        </tr>
                        <tr>
                            <td><strong>Uraian</strong></td>
                            <td><strong>Ket</strong></td>
                            <td><strong>Uraian</strong></td>
                            <td><strong>Ket</strong></td>
                        </tr>
                        <tr>
                            <td>Db</td>
                            <td>Kas lainnya di bendahara</td>
                            <td>NRC</td>
                            <td>Db</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>Kr</td>
                            <td>Utang pajak&nbsp;</td>
                            <td>NRC</td>
                            <td>Kr</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                    </tbody>
                </table>',
            'answer_a' => '<table border="1" cellpadding="1" cellspacing="1">
                                <tbody>
                                    <tr>
                                        <td colspan="1" rowspan="2">&nbsp;</td>
                                        <td colspan="2" rowspan="1"><strong>Buku Besar Akrual</strong></td>
                                        <td colspan="1" rowspan="2">&nbsp;</td>
                                        <td colspan="2" rowspan="1"><strong>Buku Besar Kas</strong></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Uraian</strong></td>
                                        <td><strong>Ket</strong></td>
                                        <td><strong>Uraian</strong></td>
                                        <td><strong>Ket</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Db</td>
                                        <td>Belanja/Transfer yang masih harus dibayar (kewajiban)</td>
                                        <td>NRC</td>
                                        <td>Db</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Kr</td>
                                        <td>Ditagihkan ke entitas lain (ekuitas)&nbsp;</td>
                                        <td>LPE</td>
                                        <td>Kr</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                </tbody>
                            </table>',
            'answer_b' => '<table border="1" cellpadding="1" cellspacing="1">
                                <tbody>
                                    <tr>
                                        <td colspan="1" rowspan="2">&nbsp;</td>
                                        <td colspan="2" rowspan="1"><strong>Buku Besar Akrual</strong></td>
                                        <td colspan="1" rowspan="2">&nbsp;</td>
                                        <td colspan="2" rowspan="1"><strong>Buku Besar Kas</strong></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Uraian</strong></td>
                                        <td><strong>Ket</strong></td>
                                        <td><strong>Uraian</strong></td>
                                        <td><strong>Ket</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Db</td>
                                        <td>Utang pajak bendahara yang belum disetor</td>
                                        <td>NRC</td>
                                        <td>Db</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Kr</td>
                                        <td>Kas lainnya di bendahara&nbsp;</td>
                                        <td>NRC</td>
                                        <td>Kr</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                </tbody>
                            </table>',
            'answer_c' => '<table border="1" cellpadding="1" cellspacing="1">
                                <tbody>
                                    <tr>
                                        <td colspan="1" rowspan="2">&nbsp;</td>
                                        <td colspan="2" rowspan="1"><strong>Buku Besar Akrual</strong></td>
                                        <td colspan="1" rowspan="2">&nbsp;</td>
                                        <td colspan="2" rowspan="1"><strong>Buku Besar Kas</strong></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Uraian</strong></td>
                                        <td><strong>Ket</strong></td>
                                        <td><strong>Uraian</strong></td>
                                        <td><strong>Ket</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Db</td>
                                        <td>Diterima dari entitas lain</td>
                                        <td>LPE</td>
                                        <td>Db</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Kr</td>
                                        <td>Pendapatan perpajakan&nbsp;&nbsp;</td>
                                        <td>LO</td>
                                        <td>Kr</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                </tbody>
                            </table>',
            'answer_d' => '<table border="1" cellpadding="1" cellspacing="1">
                                <tbody>
                                    <tr>
                                        <td colspan="1" rowspan="2">&nbsp;</td>
                                        <td colspan="2" rowspan="1"><strong>Buku Besar Akrual</strong></td>
                                        <td colspan="1" rowspan="2">&nbsp;</td>
                                        <td colspan="2" rowspan="1"><strong>Buku Besar Kas</strong></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Uraian</strong></td>
                                        <td><strong>Ket</strong></td>
                                        <td><strong>Uraian</strong></td>
                                        <td><strong>Ket</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Db</td>
                                        <td>Kas lainnya di bendahara</td>
                                        <td>NRC</td>
                                        <td>Db</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Kr</td>
                                        <td>Utang pajak&nbsp;</td>
                                        <td>NRC</td>
                                        <td>Kr</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                </tbody>
                            </table>',
            'correct_answer' => 'd',
        ]);
        MultipleChoice::create([
            'question_type' => 'pusat',
            'question' => '<p>Pada 10 Mei 2020, disewakan sebidang ruangan kepada UMKM untuk masa sewa 5 (lima) tahun. Perjanjian ini dituangkan dalam 20/PPK/SW/2020 dengan nilai sewa Rp 20.000.000 untuk 5 (lima) tahun. Pada 15 Mei 2020 diterima pembayaran tersebut. Bagaimana jurnal akrual untuk mencatat transaksi tersebut?</p>',
            'question_explanation' => '<p>Jurnal pengakuan pendapatan pada entitas akuntansi/pelaporan pemerintah:</p>

                <table border="1" cellpadding="1" cellspacing="1">
                    <tbody>
                        <tr>
                            <td colspan="1" rowspan="2">&nbsp;</td>
                            <td colspan="2" rowspan="1"><strong>Buku Besar Akrual</strong></td>
                            <td colspan="1" rowspan="2">&nbsp;</td>
                            <td colspan="2" rowspan="1"><strong>Buku Besar Kas</strong></td>
                        </tr>
                        <tr>
                            <td><strong>Uraian</strong></td>
                            <td><strong>Ket</strong></td>
                            <td><strong>Uraian</strong></td>
                            <td><strong>Ket</strong></td>
                        </tr>
                        <tr>
                            <td>Db</td>
                            <td>Diterima dari entitas lain</td>
                            <td>LPE</td>
                            <td>Db</td>
                            <td>Diterima dari entitas lain</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>Kr</td>
                            <td>Pendapatan&nbsp;&nbsp;</td>
                            <td>LO</td>
                            <td>Kr</td>
                            <td>Pendapatan&nbsp;</td>
                            <td>LRA</td>
                        </tr>
                    </tbody>
                </table>',
            'answer_a' => '<table border="1" cellpadding="1" cellspacing="1" style="width:100%">
                                <tbody>
                                    <tr>
                                        <td>Tanggal</td>
                                        <td>Keterangan</td>
                                        <td>Debit</td>
                                        <td>Kredit</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td><strong>Jurnal Akrual</strong></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>15/05/2020</td>
                                        <td>Diterima dari entitas lain</td>
                                        <td>Rp 20.000.000</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Pendapatan</td>
                                        <td>&nbsp;</td>
                                        <td>Rp 20.000.000</td>
                                    </tr>
                                </tbody>
                            </table>
                            <p>&nbsp;</p>',
            'answer_b' => '<table border="1" cellpadding="1" cellspacing="1" style="width:100%">
                                <tbody>
                                    <tr>
                                        <td>Tanggal</td>
                                        <td>Keterangan</td>
                                        <td>Debit</td>
                                        <td>Kredit</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td><strong>Jurnal Akrual</strong></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>10/05/2020</td>
                                        <td>Diterima dari entitas lain</td>
                                        <td>Rp 20.000.000</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Pendapatan</td>
                                        <td>&nbsp;</td>
                                        <td>Rp 20.000.000</td>
                                    </tr>
                                </tbody>
                            </table>',
            'answer_c' => '<table border="1" cellpadding="1" cellspacing="1" style="width:100%">
                                <tbody>
                                    <tr>
                                        <td>Tanggal</td>
                                        <td>Keterangan</td>
                                        <td>Debit</td>
                                        <td>Kredit</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td><strong>Jurnal Akrual</strong></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>10/05/2020</td>
                                        <td>Kas</td>
                                        <td>Rp 20.000.000</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Ditagihkan ke entitas lain</td>
                                        <td>&nbsp;</td>
                                        <td>Rp 20.000.000</td>
                                    </tr>
                                </tbody>
                            </table>',
            'answer_d' => '<table border="1" cellpadding="1" cellspacing="1" style="width:100%">
                                <tbody>
                                    <tr>
                                        <td>Tanggal</td>
                                        <td>Keterangan</td>
                                        <td>Debit</td>
                                        <td>Kredit</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td><strong>Jurnal Akrual</strong></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>15/05/2020</td>
                                        <td>Kas</td>
                                        <td>Rp 20.000.000</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Ditagihkan ke entitas lain</td>
                                        <td>&nbsp;</td>
                                        <td>Rp 20.000.000</td>
                                    </tr>
                                </tbody>
                            </table>',
            'correct_answer' => 'a',
        ]);
        MultipleChoice::create([
            'question_type' => 'pusat',
            'question' => '<p>Bagaimana jurnal kas yang tepat untuk mencatat penerimaan kas dari perjanjian yang dituangkan dalam 20/PPK/SW/2020 dengan nilai sewa Rp 20.000.000 untuk 5 (lima) tahun pada 15 Mei 2020?</p>',
            'question_explanation' => '<p>Jurnal pengakuan kas pada KUN:&nbsp;</p>
                <table border="1" cellpadding="1" cellspacing="1">
                    <tbody>
                        <tr>
                            <td colspan="1" rowspan="2">&nbsp;</td>
                            <td colspan="2" rowspan="1"><strong>Buku Besar Akrual</strong></td>
                            <td colspan="1" rowspan="2">&nbsp;</td>
                            <td colspan="2" rowspan="1"><strong>Buku Besar Kas</strong></td>
                        </tr>
                        <tr>
                            <td><strong>Uraian</strong></td>
                            <td><strong>Ket</strong></td>
                            <td><strong>Uraian</strong></td>
                            <td><strong>Ket</strong></td>
                        </tr>
                        <tr>
                            <td>Db</td>
                            <td>Kas</td>
                            <td>NRC</td>
                            <td>Db</td>
                            <td>Kas</td>
                            <td>LAK</td>
                        </tr>
                        <tr>
                            <td>Kr</td>
                            <td>Ditagihkan ke entitas lain&nbsp;</td>
                            <td>LPE</td>
                            <td>Kr</td>
                            <td>Ditagihkan ke entitas lain</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>Db</td>
                            <td>Diterima dari entitas lain</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>Kr</td>
                            <td>Pendapatan</td>
                            <td>LAK</td>
                        </tr>
                    </tbody>
                </table>',
            'answer_a' => '<table border="1" cellpadding="1" cellspacing="1">
                                <tbody>
                                    <tr>
                                        <td>Tanggal</td>
                                        <td>Keterangan</td>
                                        <td>Debit</td>
                                        <td>Kredit</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td><strong>Jurnal Kas</strong></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>15/05/2020</td>
                                        <td>Kas</td>
                                        <td>Rp 20.000.000</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Ditagihkan ke entitas lain</td>
                                        <td>&nbsp;</td>
                                        <td>Rp 20.000.000</td>
                                    </tr>
                                </tbody>
                            </table>',
            'answer_b' => '<table border="1" cellpadding="1" cellspacing="1">
                                <tbody>
                                    <tr>
                                        <td>Tanggal</td>
                                        <td>Keterangan</td>
                                        <td>Debit</td>
                                        <td>Kredit</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td><strong>Jurnal Kas</strong></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>15/05/2020</td>
                                        <td>Kas</td>
                                        <td>Rp 20.000.000</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Ditagihkan ke entitas lain</td>
                                        <td>&nbsp;</td>
                                        <td>Rp 20.000.000</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Diterima dari entitas lain</td>
                                        <td>Rp 20.000.000</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Pendapatan</td>
                                        <td>&nbsp;</td>
                                        <td>Rp 20.000.000</td>
                                    </tr>
                                </tbody>
                            </table>',
            'answer_c' => '<table border="1" cellpadding="1" cellspacing="1">
                                <tbody>
                                    <tr>
                                        <td>Tanggal</td>
                                        <td>Keterangan</td>
                                        <td>Debit</td>
                                        <td>Kredit</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td><strong>Jurnal Kas</strong></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>15/05/2020</td>
                                        <td>Diterima dari entitas lain</td>
                                        <td>Rp 20.000.000</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Pendapatan</td>
                                        <td>&nbsp;</td>
                                        <td>Rp 20.000.000</td>
                                    </tr>
                                </tbody>
                            </table>',
            'answer_d' => '<table border="1" cellpadding="1" cellspacing="1">
                                <tbody>
                                    <tr>
                                        <td>Tanggal</td>
                                        <td>Keterangan</td>
                                        <td>Debit</td>
                                        <td>Kredit</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td><strong>Jurnal Kas</strong></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>15/05/2020</td>
                                        <td>Kas</td>
                                        <td>Rp 20.000.000</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Diterima dari entitas lain</td>
                                        <td>&nbsp;</td>
                                        <td>Rp 20.000.000</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Ditagihkan ke entitas lain</td>
                                        <td>Rp 20.000.000</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Pendapatan</td>
                                        <td>&nbsp;</td>
                                        <td>Rp 20.000.000</td>
                                    </tr>
                                </tbody>
                            </table>',
            'correct_answer' => 'b',
        ]);
        MultipleChoice::create([
            'question_type' => 'pusat',
            'question' => '<p>Pada tanggal 5 Juni 2020, satuan kerja ABC membeli barang persediaan berupa ATK seharga Rp 5.000.000. Barang tersebut telah diterima dan diterbitkan SPM dan SP2D sejumlah tersebut. Berdasarkan SPM/SP2D, bagaimana jurnal yang tepat?</p>',
            'question_explanation' => '<p>Transaksi belanja operasional yang menghasilkan barang persediaan terjadi pada saat pengadaan barang persediaan dan diikuti dengan penerbitan SPM dan SP2D. Terhadap dokumen sumber tersebut, terbentuk jurnal sebagai berikut:</p>
                <table border="1" cellpadding="1" cellspacing="1">
                    <tbody>
                        <tr>
                            <td colspan="1" rowspan="2">&nbsp;</td>
                            <td colspan="1" rowspan="1"><strong>Jurnal Kas</strong></td>
                            <td colspan="1" rowspan="2">&nbsp;</td>
                            <td colspan="1" rowspan="1"><strong>Jurnal Akrual</strong></td>
                        </tr>
                        <tr>
                            <td><strong>Uraian</strong></td>
                            <td><strong>Uraian</strong></td>
                        </tr>
                        <tr>
                            <td>Db</td>
                            <td>Belanja barang/bansos</td>
                            <td>Db</td>
                            <td>Persediaan yang belum diregister</td>
                        </tr>
                        <tr>
                            <td>Kr</td>
                            <td>Piutang dari KUN&nbsp;</td>
                            <td>Kr</td>
                            <td>Ditagihkan ke entitas lain</td>
                        </tr>
                    </tbody>
                </table>',
            'answer_a' => '<table border="1" cellpadding="1" cellspacing="1">
                            <tbody>
                                <tr>
                                    <td>Tanggal</td>
                                    <td>Keterangan</td>
                                    <td>Debit</td>
                                    <td>Kredit</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td><strong>Jurnal Kas</strong></td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>05/06/2020</td>
                                    <td>Persediaan yang belum diregister</td>
                                    <td>Rp 5.000.000</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>Ditagihkan ke entitas lain</td>
                                    <td>&nbsp;</td>
                                    <td>Rp 5.000.000</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td><strong>Jurnal Akrual</strong></td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>05/06/2020</td>
                                    <td>Belanja barang persediaan</td>
                                    <td>Rp 5.000.000</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>Piutang dari KUN</td>
                                    <td>&nbsp;</td>
                                    <td>Rp 5.000.000</td>
                                </tr>
                            </tbody>
                        </table>',
            'answer_b' => '<table border="1" cellpadding="1" cellspacing="1">
                                <tbody>
                                    <tr>
                                        <td>Tanggal</td>
                                        <td>Keterangan</td>
                                        <td>Debit</td>
                                        <td>Kredit</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td><strong>Jurnal Akrual</strong></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>05/06/2020</td>
                                        <td>Belanja barang persediaan</td>
                                        <td>Rp 5.000.000</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Ditagihkan ke entitas lain</td>
                                        <td>&nbsp;</td>
                                        <td>Rp 5.000.000</td>
                                    </tr>
                                </tbody>
                            </table>',
            'answer_c' => '<table border="1" cellpadding="1" cellspacing="1">
                                <tbody>
                                    <tr>
                                        <td>Tanggal</td>
                                        <td>Keterangan</td>
                                        <td>Debit</td>
                                        <td>Kredit</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td><strong>Jurnal Kas</strong></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>05/06/2020</td>
                                        <td>Belanja barang persediaan</td>
                                        <td>Rp 5.000.000</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Piutang dari KUN</td>
                                        <td>&nbsp;</td>
                                        <td>Rp 5.000.000</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td><strong>Jurnal Akrual</strong></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>05/06/2020</td>
                                        <td>Persediaan yang belum diregister</td>
                                        <td>Rp 5.000.000</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Ditagihkan ke entitas lain</td>
                                        <td>&nbsp;</td>
                                        <td>Rp 5.000.000</td>
                                    </tr>
                                </tbody>
                            </table>',
            'answer_d' => '<table border="1" cellpadding="1" cellspacing="1">
                                <tbody>
                                    <tr>
                                        <td>Tanggal</td>
                                        <td>Keterangan</td>
                                        <td>Debit</td>
                                        <td>Kredit</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td><strong>Jurnal Akrual</strong></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>05/06/2020</td>
                                        <td>Persediaan yang belum diregister</td>
                                        <td>Rp 5.000.000</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Piutang dari KUN</td>
                                        <td>&nbsp;</td>
                                        <td>Rp 5.000.000</td>
                                    </tr>
                                </tbody>
                            </table>',
            'correct_answer' => 'c',
        ]);
        MultipleChoice::create([
            'question_type' => 'pusat',
            'question' => '<p>Pada tanggal 6 Juni 2020, PPK membuat kontrak atas pengadaan Alat Tulis Kantor dengan nomor SPK06/06/2020 tanggal 6 Juni 2020 senilai Rp 23.000.000. Atas kontrak tersebut, bagaimana jurnal atas komitmen yang perlu dicatat?</p>',
            'question_explanation' => '<p>Jurnal anggaran untuk mencatat transaksi dan kejadian keuangan sehubungan komitmen belanja dan/atau transfer dana ke pemerintah daerah secara double entry adalah sebagai berikut:</p>
                <table border="1" cellpadding="1" cellspacing="1">
                    <tbody>
                        <tr>
                            <td colspan="1" rowspan="2">&nbsp;</td>
                            <td colspan="2" rowspan="1"><strong>Buku Besar Akrual</strong></td>
                            <td colspan="1" rowspan="2">&nbsp;</td>
                            <td colspan="2" rowspan="1"><strong>Buku Besar Kas</strong></td>
                        </tr>
                        <tr>
                            <td><strong>Uraian</strong></td>
                            <td><strong>Ket</strong></td>
                            <td><strong>Uraian</strong></td>
                            <td><strong>Ket</strong></td>
                        </tr>
                        <tr>
                            <td>Db</td>
                            <td>Belanja barang</td>
                            <td>-</td>
                            <td>Db</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>Kr</td>
                            <td>Dicadangkan untuk belanja&nbsp;</td>
                            <td>-</td>
                            <td>Kr</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                    </tbody>
                </table>',
            'answer_a' => '<table border="1" cellpadding="1" cellspacing="1">
                                <tbody>
                                    <tr>
                                        <td>Tanggal</td>
                                        <td>Keterangan</td>
                                        <td>Debit</td>
                                        <td>Kredit</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td><strong>Jurnal Akrual</strong></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>06/06/2020</td>
                                        <td>Dicadangkan untuk belanja</td>
                                        <td>Rp 23.000.000</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Belanja barang</td>
                                        <td>&nbsp;</td>
                                        <td>Rp 23.000.000</td>
                                    </tr>
                                </tbody>
                            </table>',
            'answer_b' => '<table border="1" cellpadding="1" cellspacing="1">
                                <tbody>
                                    <tr>
                                        <td>Tanggal</td>
                                        <td>Keterangan</td>
                                        <td>Debit</td>
                                        <td>Kredit</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td><strong>Jurnal Akrual</strong></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>06/06/2020</td>
                                        <td>Dicadangkan untuk belanja</td>
                                        <td>Rp 23.000.000</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Belanja modal</td>
                                        <td>&nbsp;</td>
                                        <td>Rp 23.000.000</td>
                                    </tr>
                                </tbody>
                            </table>',
            'answer_c' => '<table border="1" cellpadding="1" cellspacing="1">
                                <tbody>
                                    <tr>
                                        <td>Tanggal</td>
                                        <td>Keterangan</td>
                                        <td>Debit</td>
                                        <td>Kredit</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td><strong>Jurnal Akrual</strong></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>06/06/2020</td>
                                        <td>Belanja modal</td>
                                        <td>Rp 23.000.000</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Dicadangkan untuk belanja</td>
                                        <td>&nbsp;</td>
                                        <td>Rp 23.000.000</td>
                                    </tr>
                                </tbody>
                            </table>',
            'answer_d' => '<table border="1" cellpadding="1" cellspacing="1">
                                <tbody>
                                    <tr>
                                        <td>Tanggal</td>
                                        <td>Keterangan</td>
                                        <td>Debit</td>
                                        <td>Kredit</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td><strong>Jurnal Akrual</strong></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>06/06/2020</td>
                                        <td>Belanja barang</td>
                                        <td>Rp 23.000.000</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Dicadangkan untuk belanja</td>
                                        <td>&nbsp;</td>
                                        <td>Rp 23.000.000</td>
                                    </tr>
                                </tbody>
                            </table>',
            'correct_answer' => 'd',
        ]);
        MultipleChoice::create([
            'question_type' => 'pusat',
            'question' => '<p>Definisi dari investasi jangka pendek pemerintah adalah&hellip;</p>',
            'question_explanation' => '<p>Investasi jangka pendek adalah investasi yang dapat segera dicairkan dan dimaksudkan untuk dimiliki selama lebih dari 3 (tiga) bulan sampai dengan 12 (dua belas) bulan.</p>',
            'answer_a' => '<p>Dimaksudkan untuk dimiliki lebih dari 12 bulan&nbsp;</p>',
            'answer_b' => '<p>Meliputi investasi permanen</p>',
            'answer_c' => '<p>Meliputi investasi non permanen</p>',
            'answer_d' => '<p>Dimaksudkan untuk dimiliki selama lebih dari 3 bulan sampai 12 bulan</p>',
            'correct_answer' => 'd',
        ]);
        MultipleChoice::create([
            'question_type' => 'pusat',
            'question' => '<p>Berikut merupakan tujuan laporan keuangan, kecuali&hellip;</p>',
            'question_explanation' => '<p>Tujuan laporan keuangan adalah menyajikan informasi mengenai posisi keuangan, realisasi anggaran, saldo anggaran lebih, arus kas, hasil operasi, dan perubahan ekuitas suatu entitas pelaporan yang bermanfaat bagi para pengguna dalam membuat dan mengevaluasi keputusan mengenai alokasi sumber daya. Secara spesifik, tujuan pelaporan keuangan pemerintah adalah untuk menyajikan informasi yang berguna bagi pengambilan keputusan dan untuk menunjukkan akuntabilitas entitas pelaporan atas sumber daya yang dipercayakan kepadanya.&nbsp;</p>',
            'answer_a' => '<p>Menyajikan informasi mengenai posisi keuangan, realisasi anggaran, saldo anggaran lebih, arus kas, hasil operasi, dan perubahan ekuitas suatu entitas pelaporan</p>',
            'answer_b' => '<p>Menyajikan informasi yang berguna bagi pengambilan keputusan</p>',
            'answer_c' => '<p>Menyajikan informasi berkaitan dengan opini atas penyajian laporan keuangan</p>',
            'answer_d' => '<p>Menunjukkan akuntabilitas entitas pelaporan atas sumber daya yang dipercayakan kepadanya</p>',
            'correct_answer' => 'c',
        ]);
        MultipleChoice::create([
            'question_type' => 'pusat',
            'question' => '<p>Pada tanggal 7 Juni 2020, dilakukan penyetoran pengembalian belanja barang expandable tahun anggaran berjalan sebesar Rp 3.000.000. Bagaimana jurnal yang tepat untuk mencatat transaksi tersebut?&nbsp;</p>',
            'question_explanation' => '<p>Pengembalian belanja atas belanja tunai TAB yang bersifat expendable:</p>
                <table border="1" cellpadding="1" cellspacing="1">
                    <tbody>
                        <tr>
                            <td colspan="1" rowspan="2">&nbsp;</td>
                            <td colspan="2" rowspan="1"><strong>Buku Besar Akrual</strong></td>
                            <td colspan="1" rowspan="2">&nbsp;</td>
                            <td colspan="2" rowspan="1"><strong>Buku Besar Kas</strong></td>
                        </tr>
                        <tr>
                            <td><strong>Uraian</strong></td>
                            <td><strong>Ket</strong></td>
                            <td><strong>Uraian</strong></td>
                            <td><strong>Ket</strong></td>
                        </tr>
                        <tr>
                            <td>Db</td>
                            <td>Diterima dari entitas lain</td>
                            <td>LPE</td>
                            <td>Db</td>
                            <td>Diterima dari entitas lain</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>Kr</td>
                            <td>Beban (expendable)</td>
                            <td>LO</td>
                            <td>Kr</td>
                            <td>Belanja (expendable)</td>
                            <td>LRA</td>
                        </tr>
                    </tbody>
                </table>',
            'answer_a' => '<table border="1" cellpadding="1" cellspacing="1">
                                <tbody>
                                    <tr>
                                        <td>Tanggal</td>
                                        <td>Keterangan</td>
                                        <td>Debit</td>
                                        <td>Kredit</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td><strong>Jurnal Akrual</strong></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>07/06/2020</td>
                                        <td>Diterima dari entitas lain</td>
                                        <td>Rp 3.000.000</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Belanja barang</td>
                                        <td>&nbsp;</td>
                                        <td>Rp 3.000.000</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td><strong>Jurnal Kas</strong></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Diterima dari entitas lain</td>
                                        <td>Rp 3.000.000</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Beban barang</td>
                                        <td>&nbsp;</td>
                                        <td>Rp 3.000.000</td>
                                    </tr>
                                </tbody>
                            </table>',
            'answer_b' => '<table border="1" cellpadding="1" cellspacing="1">
                                <tbody>
                                    <tr>
                                        <td>Tanggal</td>
                                        <td>Keterangan</td>
                                        <td>Debit</td>
                                        <td>Kredit</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td><strong>Jurnal Akrual</strong></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>07/06/2020</td>
                                        <td>Diterima dari entitas lain</td>
                                        <td>Rp 3.000.000</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Beban barang</td>
                                        <td>&nbsp;</td>
                                        <td>Rp 3.000.000</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td><strong>Jurnal Kas</strong></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Diterima dari entitas lain</td>
                                        <td>Rp 3.000.000</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Belanja barang</td>
                                        <td>&nbsp;</td>
                                        <td>Rp 3.000.000</td>
                                    </tr>
                                </tbody>
                            </table>',
            'answer_c' => '<table border="1" cellpadding="1" cellspacing="1">
                                <tbody>
                                    <tr>
                                        <td>Tanggal</td>
                                        <td>Keterangan</td>
                                        <td>Debit</td>
                                        <td>Kredit</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td><strong>Jurnal Akrual</strong></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>07/06/2020</td>
                                        <td>Beban barang</td>
                                        <td>Rp 3.000.000</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Belanja yang masih harus dibayar</td>
                                        <td>&nbsp;</td>
                                        <td>Rp 3.000.000</td>
                                    </tr>
                                </tbody>
                            </table>',
            'answer_d' => '<table border="1" cellpadding="1" cellspacing="1">
                                <tbody>
                                    <tr>
                                        <td>Tanggal</td>
                                        <td>Keterangan</td>
                                        <td>Debit</td>
                                        <td>Kredit</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td><strong>Jurnal Akrual</strong></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>07/06/2020</td>
                                        <td>Diterima dari entitas lain</td>
                                        <td>Rp 3.000.000</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Kas</td>
                                        <td>&nbsp;</td>
                                        <td>Rp 3.000.000</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td><strong>Jurnal Kas</strong></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Diterima dari entitas lain</td>
                                        <td>Rp 3.000.000</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Kas</td>
                                        <td>&nbsp;</td>
                                        <td>Rp 3.000.000</td>
                                    </tr>
                                </tbody>
                            </table>',
            'correct_answer' => 'b',
        ]);
        MultipleChoice::create([
            'question_type' => 'pusat',
            'question' => '<p>Pada tanggal 8 Juni 2020, dilakukan penyetoran ke rekening kas negara atas pengembalian belanja pegawai TAYL sebesar Rp 8.000.000. Bagaimana jurnal yang tepat untuk mencatat transaksi tersebut?&nbsp;</p>',
            'question_explanation' => '<p>Pengembalian belanja atas belanja tunai TAYL yang bersifat expendable:<br />
                Jurnal pada entitas akuntansi/pelaporan belanja atas pengembalian belanja yang realisasinya pada TAYL dan pengembaliannya langsung ke rekening kas Negara:&nbsp;</p>
                    <table border="1" cellpadding="1" cellspacing="1">
                        <tbody>
                            <tr>
                                <td colspan="1" rowspan="2">&nbsp;</td>
                                <td colspan="2" rowspan="1"><strong>Buku Besar Akrual</strong></td>
                                <td colspan="1" rowspan="2">&nbsp;</td>
                                <td colspan="2" rowspan="1"><strong>Buku Besar Kas</strong></td>
                            </tr>
                            <tr>
                                <td><strong>Uraian</strong></td>
                                <td><strong>Ket</strong></td>
                                <td><strong>Uraian</strong></td>
                                <td><strong>Ket</strong></td>
                            </tr>
                            <tr>
                                <td>Db</td>
                                <td>Diterima dari entitas lain</td>
                                <td>LPE</td>
                                <td>Db</td>
                                <td>Diterima dari entitas lain</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>Kr</td>
                                <td>PNBP lainnya&nbsp;</td>
                                <td>NRC</td>
                                <td>Kr</td>
                                <td>PNBP lainnya</td>
                                <td>LRA</td>
                            </tr>
                        </tbody>
                    </table>',
            'answer_a' => '<table border="1" cellpadding="1" cellspacing="1">
                                <tbody>
                                    <tr>
                                        <td>Tanggal</td>
                                        <td>Keterangan</td>
                                        <td>Debit</td>
                                        <td>Kredit</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td><strong>Jurnal Akrual</strong></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>08/06/2020</td>
                                        <td>Diterima dari entitas lain</td>
                                        <td>Rp 8.000.000</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>PNBP lainnya</td>
                                        <td>&nbsp;</td>
                                        <td>Rp 8.000.000</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td><strong>Jurnal Kas</strong></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Diterima dari entitas lain</td>
                                        <td>Rp 8.000.000</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>PNBP lainnya</td>
                                        <td>&nbsp;</td>
                                        <td>Rp 8.000.000</td>
                                    </tr>
                                </tbody>
                            </table>',
            'answer_b' => '<table border="1" cellpadding="1" cellspacing="1">
                                <tbody>
                                    <tr>
                                        <td>Tanggal</td>
                                        <td>Keterangan</td>
                                        <td>Debit</td>
                                        <td>Kredit</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td><strong>Jurnal Akrual</strong></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>08/06/2020</td>
                                        <td>Kas</td>
                                        <td>Rp 8.000.000</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Ditagihkan ke entitas lain</td>
                                        <td>&nbsp;</td>
                                        <td>Rp 8.000.000</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td><strong>Jurnal Kas</strong></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Kas</td>
                                        <td>Rp 8.000.000</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Ditagihkan ke entitas lain</td>
                                        <td>&nbsp;</td>
                                        <td>Rp 8.000.000</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Diterima dari entitas lain</td>
                                        <td>Rp 8.000.000</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>PNBP lainnya</td>
                                        <td>&nbsp;</td>
                                        <td>Rp 8.000.000</td>
                                    </tr>
                                </tbody>
                            </table>',
            'answer_c' => '<table border="1" cellpadding="1" cellspacing="1">
                                <tbody>
                                    <tr>
                                        <td>Tanggal</td>
                                        <td>Keterangan</td>
                                        <td>Debit</td>
                                        <td>Kredit</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td><strong>Jurnal Akrual</strong></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>08/06/2020</td>
                                        <td>Kas</td>
                                        <td>Rp 8.000.000</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Ditagihkan ke entitas lain</td>
                                        <td>&nbsp;</td>
                                        <td>Rp 8.000.000</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td><strong>Jurnal Kas</strong></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Kas</td>
                                        <td>Rp 8.000.000</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Ditagihkan ke entitas lain</td>
                                        <td>&nbsp;</td>
                                        <td>Rp 8.000.000</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Diterima dari entitas lain</td>
                                        <td>Rp 8.000.000</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Belanja pegawai</td>
                                        <td>&nbsp;</td>
                                        <td>Rp 8.000.000</td>
                                    </tr>
                                </tbody>
                            </table>',
            'answer_d' => '<table border="1" cellpadding="1" cellspacing="1">
                                <tbody>
                                    <tr>
                                        <td>Tanggal</td>
                                        <td>Keterangan</td>
                                        <td>Debit</td>
                                        <td>Kredit</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td><strong>Jurnal Akrual</strong></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>08/06/2020</td>
                                        <td>Diterima dari entitas lain</td>
                                        <td>Rp 8.000.000</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Beban pegawai</td>
                                        <td>&nbsp;</td>
                                        <td>Rp 8.000.000</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td><strong>Jurnal Kas</strong></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Diterima dari entitas lain</td>
                                        <td>Rp 8.000.000</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Belanja pegawai</td>
                                        <td>&nbsp;</td>
                                        <td>Rp 8.000.000</td>
                                    </tr>
                                </tbody>
                            </table>',
            'correct_answer' => 'a',
        ]);
        MultipleChoice::create([
            'question_type' => 'pusat',
            'question' => '<p>10 Juni 2020 diterima aset tetap berupa kendaraan roda 4 dengan nilai perolehan sebesar Rp 250.000.000. Aset tetap tersebut belum terverifikasi kondisi BMN dan resume tagihan belanja yang menambah aset BMN intrakomtabel. Bagaimana jurnal yang tepat untuk mencatat transaksi tersebut?</p>',
            'question_explanation' => '<p>Jurnal pada entitas akuntansi/pelaporan belanja atas diterimanya aset tetap/aset lainnya/persediaan namun belum terverifikasi kondisi BMN dan belum terverifikasi resume tagihan belanja yang menambah aset BMN intrakomtabel:&nbsp;</p>
                <table>
                    <tbody>
                        <tr>
                            <td rowspan="2">&nbsp;</td>
                            <td colspan="2">
                            <p><strong>Buku Besar Akrual</strong></p>
                            </td>
                            <td rowspan="2">&nbsp;</td>
                            <td colspan="2">
                            <p><strong>Buku Besar Kas</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>Uraian</strong></p>
                            </td>
                            <td>
                            <p><strong>Ket</strong></p>
                            </td>
                            <td>
                            <p><strong>Uraian</strong></p>
                            </td>
                            <td>
                            <p><strong>Ket</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>Db</p>
                            </td>
                            <td>
                            <p>Aset tetap yang belum diregister</p>
                            </td>
                            <td>
                            <p>NRC</p>
                            </td>
                            <td>
                            <p>Db</p>
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>Kr</p>
                            </td>
                            <td>
                            <p>Utang yang belum diterima tagihannya</p>
                            </td>
                            <td>
                            <p>NRC</p>
                            </td>
                            <td>
                            <p>Kr</p>
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                    </tbody>
                </table>',
            'answer_a' => '<table border="1" cellpadding="1" cellspacing="1">
                                <tbody>
                                    <tr>
                                        <td>Tanggal</td>
                                        <td>Keterangan</td>
                                        <td>Debit</td>
                                        <td>Kredit</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td><strong>Jurnal Akrual</strong></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>10/06/2020</td>
                                        <td>Utang yang belum diterima tagihannya</td>
                                        <td>Rp 250.000.000</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Belanja yang masih harus dibayar</td>
                                        <td>&nbsp;</td>
                                        <td>Rp 250.000.000</td>
                                    </tr>
                                </tbody>
                            </table>',
            'answer_b' => '<table border="1" cellpadding="1" cellspacing="1">
                                <tbody>
                                    <tr>
                                        <td>Tanggal</td>
                                        <td>Keterangan</td>
                                        <td>Debit</td>
                                        <td>Kredit</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td><strong>Jurnal Akrual</strong></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>10/06/2020</td>
                                        <td>Persediaan yang belum&nbsp;diregister</td>
                                        <td>Rp 250.000.000</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Utang yang belum diterima tagihannya</td>
                                        <td>&nbsp;</td>
                                        <td>Rp 250.000.000</td>
                                    </tr>
                                </tbody>
                            </table>',
            'answer_c' => '<table border="1" cellpadding="1" cellspacing="1">
                                <tbody>
                                    <tr>
                                        <td>Tanggal</td>
                                        <td>Keterangan</td>
                                        <td>Debit</td>
                                        <td>Kredit</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td><strong>Jurnal Akrual</strong></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>10/06/2020</td>
                                        <td>Aset tetap</td>
                                        <td>Rp 250.000.000</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Aset tetap yang belum diregister</td>
                                        <td>&nbsp;</td>
                                        <td>Rp 250.000.000</td>
                                    </tr>
                                </tbody>
                            </table>',
            'answer_d' => '<table border="1" cellpadding="1" cellspacing="1">
                                <tbody>
                                    <tr>
                                        <td>Tanggal</td>
                                        <td>Keterangan</td>
                                        <td>Debit</td>
                                        <td>Kredit</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td><strong>Jurnal Akrual</strong></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>10/06/2020</td>
                                        <td>Aset tetap yang belum diregister</td>
                                        <td>Rp 250.000.000</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Aset tetap</td>
                                        <td>&nbsp;</td>
                                        <td>Rp 250.000.000</td>
                                    </tr>
                                </tbody>
                            </table>',
            'correct_answer' => 'd',
        ]);
        MultipleChoice::create([
            'question_type' => 'pusat',
            'question' => '<p>Pada tanggal 12 Juni 2020, dilakukan penyertaan modal negara yang dilakukan pemerintah sebesar Rp 2.000.000.000. Realisasi pembayaran belum dilakukan, namun resume atas tagihan telah diperoleh. Bagaimana jurnal untuk mencatat transaksi tersebut?</p>',
            'question_explanation' => '<p>Jurnal pada entitas akuntansi/pelaporan BA BUN atas resume tagihan pengeluaran pembiayaan untuk PMN/Investasi Permanen:</p>
                <table>
                    <tbody>
                        <tr>
                            <td rowspan="2">&nbsp;</td>
                            <td colspan="2">
                            <p><strong>Buku Besar Akrual</strong></p>
                            </td>
                            <td rowspan="2">&nbsp;</td>
                            <td colspan="2">
                            <p><strong>Buku Besar Kas</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>Uraian</strong></p>
                            </td>
                            <td>
                            <p><strong>Ket</strong></p>
                            </td>
                            <td>
                            <p><strong>Uraian</strong></p>
                            </td>
                            <td>
                            <p><strong>Ket</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>Db</p>
                            </td>
                            <td>
                            <p>Investasi jangka panjang permanen</p>
                            </td>
                            <td>
                            <p>NRC</p>
                            </td>
                            <td>
                            <p>Db</p>
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>Kr</p>
                            </td>
                            <td>
                            <p>Pengeluaran pembiayaan yang masih harus dibayar</p>
                            </td>
                            <td>
                            <p>NRC</p>
                            </td>
                            <td>
                            <p>Kr</p>
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                    </tbody>
                </table>',
            'answer_a' => '<table>
                                <tbody>
                                    <tr>
                                        <td>
                                        <p><strong>Tanggal</strong></p>
                                        </td>
                                        <td>
                                        <p><strong>Keterangan</strong></p>
                                        </td>
                                        <td>
                                        <p><strong>Debit</strong></p>
                                        </td>
                                        <td>
                                        <p><strong>Kredit</strong></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>
                                        <p><strong>Jurnal Akrual</strong></p>
                                        </td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>
                                        <p>12/06/2020</p>
                                        </td>
                                        <td>
                                        <p>Pengeluaran pembiayaan yang masih harus dibayar</p>
                                        </td>
                                        <td>
                                        <p>Rp 2.000.000.000</p>
                                        </td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>
                                        <p>Ditagihkan ke entitas lain</p>
                                        </td>
                                        <td>&nbsp;</td>
                                        <td>
                                        <p>Rp 2.000.000.000</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>',
            'answer_b' => '<table>
                            <tbody>
                                <tr>
                                    <td>
                                    <p><strong>Tanggal</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Keterangan</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Debit</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Kredit</strong></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p><strong>Jurnal Akrual</strong></p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>12/06/2020</p>
                                    </td>
                                    <td>
                                    <p>Investasi jangka panjang permanen</p>
                                    </td>
                                    <td>
                                    <p>Rp 2.000.000.000</p>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Pengeluaran pembiayaan yang masih harus dibayar</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Rp 2.000.000.000</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>',
            'answer_c' => '<table>
                            <tbody>
                                <tr>
                                    <td>
                                    <p><strong>Tanggal</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Keterangan</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Debit</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Kredit</strong></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p><strong>Jurnal Akrual</strong></p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>12/06/2020</p>
                                    </td>
                                    <td>
                                    <p>Pengeluaran pembiayaan yang masih harus dibayar</p>
                                    </td>
                                    <td>
                                    <p>Rp 2.000.000.000</p>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Investasi jangka panjang permanen</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Rp 2.000.000.000</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>',
            'answer_d' => '<table>
                            <tbody>
                                <tr>
                                    <td>
                                    <p><strong>Tanggal</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Keterangan</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Debit</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Kredit</strong></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p><strong>Jurnal Akrual</strong></p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>12/06/2020</p>
                                    </td>
                                    <td>
                                    <p>Ditagihkan ke entitas lain</p>
                                    </td>
                                    <td>
                                    <p>Rp 2.000.000.000</p>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Pengeluaran pembiayaan yang masih harus dibayar</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Rp 2.000.000.000</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>',
            'correct_answer' => 'b',
        ]);
        MultipleChoice::create([
            'question_type' => 'pusat',
            'question' => '<p>Pada tanggal 14 Juni 2020, dilakukan realisasi pembayaran pengeluaran pembiayaan untuk penyertaan modal negara atas resume tagihan pengeluaran yang diterima pemerintah sebesar Rp 2.000.000.000 pada 12 Juni 2020. Bagaimana jurnal untuk mencatat transaksi tersebut?</p>',
            'question_explanation' => '<p>Jurnal pada entitas akuntansi/pelaporan BA BUN atas realisasi pembayaran pengeluaran pembiayaan untuk PMN yang membebani rekening kas negara:</p>
                <table border="1" cellpadding="1" cellspacing="1">
                    <tbody>
                        <tr>
                            <td rowspan="2">&nbsp;</td>
                            <td colspan="2">
                            <p><strong>Buku Besar Akrual</strong></p>
                            </td>
                            <td rowspan="2">&nbsp;</td>
                            <td colspan="2">
                            <p><strong>Buku Besar Kas</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>Uraian</strong></p>
                            </td>
                            <td>
                            <p><strong>Ket</strong></p>
                            </td>
                            <td>
                            <p><strong>Uraian</strong></p>
                            </td>
                            <td>
                            <p><strong>Ket</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>Db</p>
                            </td>
                            <td>
                            <p>Pengeluaran pembiayaan yang masih harus dibayar</p>
                            </td>
                            <td>
                            <p>NRC</p>
                            </td>
                            <td>
                            <p>Db</p>
                            </td>
                            <td>
                            <p>Pengeluaran pembiayaan PMN</p>
                            </td>
                            <td>
                            <p>LRA</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>Kr</p>
                            </td>
                            <td>
                            <p>Ditagihkan ke entitas lain</p>
                            </td>
                            <td>
                            <p>LPE</p>
                            </td>
                            <td>
                            <p>Kr</p>
                            </td>
                            <td>
                            <p>Ditagihkan ke entitas lain</p>
                            </td>
                            <td>&nbsp;</td>
                        </tr>
                    </tbody>
                </table>',
            'answer_a' => '<table border="1" cellpadding="1" cellspacing="1">
                            <tbody>
                                <tr>
                                    <td>Tanggal</td>
                                    <td>Keterangan</td>
                                    <td>Debit</td>
                                    <td>Kredit</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td><strong>Jurnal Akrual</strong></td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>12/06/2020</td>
                                    <td>Pengeluaran pembiayaan yang masih harus dibayar</td>
                                    <td>Rp 2.000.000.000</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>Ditagihkan ke entitas lain</td>
                                    <td>&nbsp;</td>
                                    <td>Rp 2.000.000.000</td>
                                </tr>
                            </tbody>
                        </table>',
            'answer_b' => '<table border="1" cellpadding="1" cellspacing="1">
                            <tbody>
                                <tr>
                                    <td>Tanggal</td>
                                    <td>Keterangan</td>
                                    <td>Debit</td>
                                    <td>Kredit</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td><strong>Jurnal Akrual</strong></td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>12/06/2020</td>
                                    <td>Investasi jangka panjang</td>
                                    <td>Rp 2.000.000.000</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>Pengeluaran pembiayaan yang masih harus dibayar</td>
                                    <td>&nbsp;</td>
                                    <td>Rp 2.000.000.000</td>
                                </tr>
                            </tbody>
                        </table>',
            'answer_c' => '<table border="1" cellpadding="1" cellspacing="1">
                            <tbody>
                                <tr>
                                    <td>Tanggal</td>
                                    <td>Keterangan</td>
                                    <td>Debit</td>
                                    <td>Kredit</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td><strong>Jurnal Akrual</strong></td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>14/06/2020</td>
                                    <td>Pengeluaran pembiayaan yang masih harus dibayar</td>
                                    <td>Rp 2.000.000.000</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>Ditagihkan ke entitas lain</td>
                                    <td>&nbsp;</td>
                                    <td>Rp 2.000.000.000</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td><strong>Jurnal Kas</strong></td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>Pengeluaran pembiayaan penyertaan modal negara</td>
                                    <td>Rp 2.000.000.000</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>Ditagihkan ke entitas lain</td>
                                    <td>&nbsp;</td>
                                    <td>Rp 2.000.000.000</td>
                                </tr>
                            </tbody>
                        </table>',
            'answer_d' => '<table border="1" cellpadding="1" cellspacing="1">
                            <tbody>
                                <tr>
                                    <td>Tanggal</td>
                                    <td>Keterangan</td>
                                    <td>Debit</td>
                                    <td>Kredit</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td><strong>Jurnal Akrual</strong></td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>14/06/2020</td>
                                    <td>Investasi jangka panjang</td>
                                    <td>Rp 2.000.000.000</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>Pengeluaran pembiayaan yang masih harus dibayar</td>
                                    <td>&nbsp;</td>
                                    <td>Rp 2.000.000.000</td>
                                </tr>
                            </tbody>
                        </table>',
            'correct_answer' => 'c',
        ]);
        MultipleChoice::create([
            'question_type' => 'pusat',
            'question' => '<p>Berikut merupakan transaksi yang dilakukan pemerintah:</p>
                            <ol>
                                <li>Pembelian obligasi atau surat utang jangka panjang yang dimaksudkan untuk dimiliki sampai dengan tanggal jatuh tempo;</li>
                                <li>Penanaman modal dalam proyek pembangunan yang dapat dialihkan kepada pihak ketiga;</li>
                                <li>Dana yang disisihkan pemerintah dalam rangka pelayanan masyarakat seperti bantuan modal kerja secara bergulir kepada kelompok masyarakat;</li>
                            </ol>
                            <p>Transaksi tersebut masuk kedalam kategori&hellip;</p>',
            'question_explanation' => '<p>Investasi non permanen merupakan investasi jangka panjang yang kepemilikannya berjangka waktu lebih dari 12 bulan dimaksudkan untuk tidak dimiliki terus menerus/berkelanjutan atau ada niat untuk memperjualbelikan atau menarik kembali. Investasi non permanen dapat berupa:&nbsp;</p>
                <ol>
                    <li>Pembelian obligasi atau surat utang jangka panjang yang dimaksudkan untuk dimiliki sampai dengan tanggal jatuh tempo;</li>
                    <li>Penanaman modal dalam proyek pembangunan yang dapat dialihkan kepada pihak ketiga;</li>
                    <li>Dana yang disisihkan pemerintah dalam rangka pelayanan masyarakat seperti bantuan modal kerja secara bergulir kepada kelompok masyarakat;</li>
                    <li>Investasi non permanen lainnya, yang sifatnya tidak dimaksudkan untuk dimiliki pemerintah secara berkelanjutan, seperti penyerahan modal yang dimaksudkan untuk penyehatan/penyelamatan perekonomian.&nbsp;</li>
                </ol>',
            'answer_a' => '<p>Investasi non permanen</p>',
            'answer_b' => '<p>Investasi permanen</p>',
            'answer_c' => '<p>Penyertaan modal negara</p>',
            'answer_d' => '<p>Investasi jangka pendek</p>',
            'correct_answer' => 'a',
        ]);
        MultipleChoice::create([
            'question_type' => 'pusat',
            'question' => '<p>Berikut merupakan jenis-jenis dari piutang jangka pendek, kecuali&hellip;</p>',
            'question_explanation' => '<p>Jenis-jenis piutang jangka pendek:</p>
                <ul>
                    <li>Piutang pajak&nbsp;</li>
                    <li>Piutang bukan pajak&nbsp;</li>
                    <li>Bagian lancar tagihan penjualan angsuran&nbsp;</li>
                    <li>Bagian lancar tagihan tuntutan perbendaharaan/tuntutan ganti rugi</li>
                    <li>Bagian lancar piutang jangka panjang</li>
                    <li>Beban dibayar di muka/uang muka belanja</li>
                    <li>Piutang BLU</li>
                    <li>Piutang transfer ke daerah&nbsp;</li>
                    <li>Piutang yang timbul dari putusan pengadilan</li>
                </ul>',
            'answer_a' => '<p>Piutang pajak</p>',
            'answer_b' => '<p>Piutang bukan pajak&nbsp;</p>',
            'answer_c' => '<p>Piutang tagihan penjualan angsuran</p>',
            'answer_d' => '<p>Bagian lancar tagihan penjualan angsuran</p>',
            'correct_answer' => 'c',
        ]);
        MultipleChoice::create([
            'question_type' => 'pusat',
            'question' => '<p>Piutang tuntutan perbendaharaan/tuntutan ganti rugi diakui apabila telah memenuhi kriteria&hellip;</p>',
            'question_explanation' => '<p>Piutang tagihan TP/TGR diakui apabila telah memenuhi kriteria:&nbsp;</p>
                <ol>
                    <li>Telah ditandatanganinya Surat Keterangan Tanggung Jawab Mutlak (SKTJM)</li>
                    <li>Telah diterbitkan:</li>
                    <li>Surat keputusan pembebanan sementara kepada pihak yang dikenakan tuntutan perbendaharaan; atau&nbsp;</li>
                    <li>Surat Keputusan Pembebanan Penggantian Kerugian Sementara (SKP2KS) kepada pihak yang dikenakan tuntutan ganti kerugian negara bukan bendahara; atau&nbsp;</li>
                    <li>Telah ada putusan Lembaga Peradilan yang berkekuatan hukum tetap (in kracht van gewijsde) yang menghukum seseorang untuk membayar sejumlah uang kepada Pemerintah.&nbsp;</li>
                </ol>',
            'answer_a' => '<p>Telah timbul surat tagihan pajak</p>',
            'answer_b' => '<p>Telah diterbitkan surat penagihan</p>',
            'answer_c' => '<p>Telah dilaksanakan penagihan</p>',
            'answer_d' => '<p>Telah ditandatangani Surat Keterangan Tanggung Jawab Mutlak</p>',
            'correct_answer' => 'd',
        ]);
        MultipleChoice::create([
            'question_type' => 'pusat',
            'question' => '<p>Hal-hal yang perlu dipertimbangkan dalam pencatatan Persediaan untuk operasional kegiatan satker adalah sebagai berikut, kecuali&hellip;&nbsp;</p>',
            'question_explanation' => '<p>Hal-hal yang perlu dipertimbangkan dalam pencatatan Persediaan untuk operasional kegiatan satker adalah:</p>
                <ol>
                    <li>Materialitas;</li>
                    <li>Pencerminan dari tugas dan fungsi utama satker; dan&nbsp;</li>
                    <li>Pengendalian internal</li>
                </ol>',
            'answer_a' => '<p>Kebaruan persediaan</p>',
            'answer_b' => '<p>Materialitas</p>',
            'answer_c' => '<p>Pencerminan dari tugas dan fungsi utama satker</p>',
            'answer_d' => '<p>Pengendalian internal&nbsp;</p>',
            'correct_answer' => 'a',
        ]);
        MultipleChoice::create([
            'question_type' => 'pusat',
            'question' => '<p>Barang persediaan terdiri dari:</p>
                <ol>
                    <li>Barang habis pakai</li>
                    <li>Barang tak habis pakai&nbsp;</li>
                    <li>Barang bekas pakai&nbsp;</li>
                </ol>
                <p>Ketiga jenis tersebut merupakan pengkategorian persediaan berdasarkan&hellip;&nbsp;</p>',
            'question_explanation' => '<p>Jenis-jenis persediaan berdasarkan sifat pemakaiannya terdiri atas:</p>
                <ol>
                    <li>Barang habis pakai</li>
                    <li>Barang tak habis pakai&nbsp;</li>
                    <li>Barang bekas pakai&nbsp;</li>
                </ol>',
            'answer_a' => '<p>Bentuk</p>',
            'answer_b' => '<p>Jenis&nbsp;</p>',
            'answer_c' => '<p>Sifat&nbsp;</p>',
            'answer_d' => '<p>Legalitas</p>',
            'correct_answer' => 'c',
        ]);
        MultipleChoice::create([
            'question_type' => 'pusat',
            'question' => '<p>Berikut merupakan klasifikasi aset tetap, kecuali&hellip;</p>',
            'question_explanation' => '<p>Aset Tetap diklasifikasikan berdasarkan kesamaan dalam sifat atau fungsinya dalam aktivitas operasi entitas. Klasifikasi Aset Tetap adalah sebagai berikut:&nbsp;</p>
                <ol>
                    <li>Tanah;</li>
                    <li>Peralatan dan Mesin;</li>
                    <li>Gedung dan Bangunan;</li>
                    <li>Jalan, Irigasi, dan Jaringan;</li>
                    <li>Aset Tetap Lainnya;</li>
                    <li>Konstruksi dalam Pengerjaan (KDP).</li>
                </ol>',
            'answer_a' => '<p>Tanah</p>',
            'answer_b' => '<p>Persediaan</p>',
            'answer_c' => '<p>Peralatan&nbsp;</p>',
            'answer_d' => '<p>Mesin</p>',
            'correct_answer' => 'b',
        ]);
        MultipleChoice::create([
            'question_type' => 'pusat',
            'question' => '<p>Suatu transaksi sampai dengan aset tersebut dalam kondisi siap digunakan yang mencakup pembelian, transfer masuk, hibah masuk merupakan pengakuan atas Aset Tetap pada jenis transaksi&hellip;</p>',
            'question_explanation' => '<p>Perolehan adalah suatu transaksi perolehan Aset Tetap sampai dengan aset tersebut dalam kondisi siap digunakan. Perolehan aset tetap antara lain mencakup transaksi pembelian, transfer masuk, hibah masuk, dan perolehan lainnya.</p>',
            'answer_a' => '<p>Perubahan</p>',
            'answer_b' => '<p>Penghentian</p>',
            'answer_c' => '<p>Perolehan</p>',
            'answer_d' => '<p>Pelepasan</p>',
            'correct_answer' => 'c',
        ]);
        MultipleChoice::create([
            'question_type' => 'pusat',
            'question' => '<p>Biaya perolehan aset tetap terdiri atas harga pembelian dan biaya lainnya yang dapat dihubungkan kepada aset. Berikut merupakan biaya yang secara langsung dapat dihubungkan/diatribusikan dengan aset, kecuali&hellip;</p>',
            'question_explanation' => '<p>Bea impor dan pajak pembelian merupakan bagian dari harga pembelian atau biaya konstruksi atas aset tetap yang juga merupakan komponen biaya perolehan atas aset tetap.&nbsp;</p>',
            'answer_a' => '<p>Biaya persiapan tempat</p>',
            'answer_b' => '<p>Bea impor dan pajak pembelian</p>',
            'answer_c' => '<p>Biaya pemasangan</p>',
            'answer_d' => '<p>Biaya konstruksi</p>',
            'correct_answer' => 'b',
        ]);
        MultipleChoice::create([
            'question_type' => 'pusat',
            'question' => '<p>Metode penyusutan aset tetap yang diterapkan pemerintah untuk mengalokasikan nilai/besaran aset yang dapat didepresiasikan secara sistematis sepanjang umur aset adalah&hellip;</p>',
            'question_explanation' => '<p>Metode penyusutan aset tetap yang diterapkan pemerintah untuk mengalokasikan nilai/besaran aset yang dapat didepresiasikan secara sistematis sepanjang umur aset adalah metode garis lurus (straight line method). Metode garis lurus menetapkan tarif penyusutan untuk masing-masing periode dengan jumlah yang sama.</p>',
            'answer_a' => '<p>Metode jumlah angka tahun</p>',
            'answer_b' => '<p>Metode saldo menurun</p>',
            'answer_c' => '<p>Metode depresiasi khusus</p>',
            'answer_d' => '<p>Metode garis lurus</p>',
            'correct_answer' => 'd',
        ]);
        MultipleChoice::create([
            'question_type' => 'pusat',
            'question' => '<p>Secara umum dalam konteks pemerintahan, kewajiban jangka pendek dapat muncul antara lain karena&hellip;</p>',
            'question_explanation' => '<p>Secara umum dalam konteks pemerintahan, kewajiban jangka pendek dapat muncul antara lain karena:</p>
                <ol>
                    <li>penggunaan sumber pembiayaan berupa pinjaman yang bersifat jangka pendek dari masyarakat dan lembaga keuangan;&nbsp;</li>
                    <li>perikatan dengan pegawai yang bekerja pada pemerintah;</li>
                    <li>kewajiban kepada masyarakat luas dalam tempo kurang dari 1 (satu) tahun, yaitu kewajiban tunjangan, kompensasi, ganti rugi, kelebihan setoran pajak dari wajib pajak, atau kewajiban dengan pemberi jasa lainnya;&nbsp;</li>
                    <li>kewajiban kepada entitas lainnya sebagai konsekuensi alokasi/ realokasi pendapatan atau anggaran;&nbsp;</li>
                    <li>kewajiban kepada lembaga internasional karena menjadi anggota yang harus memberikan iuran secara rutin dalam tempo kurang dari satu tahun; dan/ atau&nbsp;</li>
                    <li>kewajiban kepada wajib bayar PNBP yang timbul karena Pemerintah telah menerima uang dari wajib bayar namun Pemerintah belum dapat menyelenggarakan jasa/ pelayanan kepada wajib bayar sampai dengan tanggal pelaporan.</li>
                </ol>',
            'answer_a' => '<p>Penggunaan sumber pembiayaan berupa pinjaman yang bersifat jangka panjang</p>',
            'answer_b' => '<p>Penggunaan sumber pembiayaan jangka panjang yang berasal dari masyarakat, lembaga keuangan, entitas pemerintahan lain, maupun lembaga internasional</p>',
            'answer_c' => '<p>Kewajiban kepada wajib bayar PNBP yang timbul karena Pemerintah telah menerima uang dari wajib bayar namun belum dapat menyelenggarakan jasa/pelayanan kepada wajib bayar</p>',
            'answer_d' => '<p>Kewajiban dengan pemberi jasa yang penyelesaiannya melalui cicilan dengan jangka waktu lebih dari satu tahun</p>',
            'correct_answer' => 'c',
        ]);
        MultipleChoice::create([
            'question_type' => 'pusat',
            'question' => '<p>Pada tanggal 15 Juni 2020, diterima resume tagihan atas permintaan pembentukan uang persediaan bendahara pengeluaran sebesar Rp 20.000.000. Bagaimana jurnal yang tepat untuk mencatat transaksi tersebut?&nbsp;</p>',
            'question_explanation' => '<p>Jurnal pada entitas/pelaporan atas resume tagihan permintaan pembentukan uang persediaan bendahara pengeluaran:&nbsp;</p>
                <table border="1" cellpadding="1" cellspacing="1">
                    <tbody>
                        <tr>
                            <td rowspan="2">&nbsp;</td>
                            <td colspan="2">
                            <p><strong>Buku Besar Akrual</strong></p>
                            </td>
                            <td rowspan="2">&nbsp;</td>
                            <td colspan="2">
                            <p><strong>Buku Besar Kas</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>Uraian</strong></p>
                            </td>
                            <td>
                            <p><strong>Ket</strong></p>
                            </td>
                            <td>
                            <p><strong>Uraian</strong></p>
                            </td>
                            <td>
                            <p><strong>Ket</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>Db</p>
                            </td>
                            <td>
                            <p>Pengeluaran transito-uang persediaan</p>
                            </td>
                            <td>
                            <p>-</p>
                            </td>
                            <td>
                            <p>Db</p>
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>Kr</p>
                            </td>
                            <td>
                            <p>Pengeluaran transito yang masih harus dibayar</p>
                            </td>
                            <td>
                            <p>NRC</p>
                            </td>
                            <td>
                            <p>Kr</p>
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>Db</p>
                            </td>
                            <td>
                            <p>Piutang dari uang persediaan yang akan diterima</p>
                            </td>
                            <td>
                            <p>NRC</p>
                            </td>
                            <td>
                            <p>Db</p>
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>Kr</p>
                            </td>
                            <td>
                            <p>Pengeluaran transito-uang persediaan</p>
                            </td>
                            <td>
                            <p>-</p>
                            </td>
                            <td>
                            <p>Kr</p>
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                    </tbody>
                </table>',
            'answer_a' => '<table border="1" cellpadding="1" cellspacing="1">
                            <tbody>
                                <tr>
                                    <td>
                                    <p><strong>Tanggal</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Keterangan</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Debit</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Kredit</strong></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p><strong>Jurnal Akrual</strong></p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>15/06/2020</p>
                                    </td>
                                    <td>
                                    <p>Piutang dari uang persediaan yang akan diterima</p>
                                    </td>
                                    <td>
                                    <p>Rp 200.000.000</p>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Pengeluaran transito-uang persediaan</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Rp 200.000.000</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>',
            'answer_b' => '<table border="1" cellpadding="1" cellspacing="1">
                            <tbody>
                                <tr>
                                    <td>
                                    <p><strong>Tanggal</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Keterangan</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Debit</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Kredit</strong></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p><strong>Jurnal Akrual</strong></p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>15/06/2020</p>
                                    </td>
                                    <td>
                                    <p>Pengeluaran transito-uang persediaan</p>
                                    </td>
                                    <td>
                                    <p>Rp 200.000.000</p>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Uang muka dari KPPN</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Rp 200.000.000</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>',
            'answer_c' => '<table border="1" cellpadding="1" cellspacing="1">
                            <tbody>
                                <tr>
                                    <td>
                                    <p><strong>Tanggal</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Keterangan</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Debit</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Kredit</strong></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p><strong>Jurnal Akrual</strong></p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>15/06/2020</p>
                                    </td>
                                    <td>
                                    <p>Kas di bendahara pengeluaran&nbsp;</p>
                                    </td>
                                    <td>
                                    <p>Rp 200.000.000</p>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Piutang dari uang persediaan yang akan diterima</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Rp 200.000.000</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>',
            'answer_d' => '<table border="1" cellpadding="1" cellspacing="1">
                            <tbody>
                                <tr>
                                    <td>
                                    <p><strong>Tanggal</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Keterangan</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Debit</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Kredit</strong></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p><strong>Jurnal Akrual</strong></p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>15/06/2020</p>
                                    </td>
                                    <td>
                                    <p>Pengeluaran transito-uang persediaan</p>
                                    </td>
                                    <td>
                                    <p>Rp 200.000.000</p>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Pengeluaran transito yang masih harus dibayar</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Rp 200.000.000</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Piutang dari uang persediaan yang akan diterima&nbsp;</p>
                                    </td>
                                    <td>
                                    <p>Rp 200.000.000</p>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Pengeluaran transito-uang persediaan</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Rp 200.000.000</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>',
            'correct_answer' => 'd',
        ]);
        MultipleChoice::create([
            'question_type' => 'pusat',
            'question' => '<p>Pada tanggal 31 Desember 2019, ketika dilakukan stock opname diketahui bahwa terdapat persediaan usang dengan nilai sebesar Rp 3.000.000. Atas hal tersebut, maka bagaimana pembentukan jurnal yang tepat?</p>',
            'question_explanation' => '<p>Jurnal akuntansi penyesuaian nilai persediaan usang dan rusak:</p>
                <table border="1" cellpadding="1" cellspacing="1">
                    <tbody>
                        <tr>
                            <td rowspan="2">&nbsp;</td>
                            <td colspan="2">
                            <p><strong>Buku Besar Akrual</strong></p>
                            </td>
                            <td rowspan="2">&nbsp;</td>
                            <td colspan="2">
                            <p><strong>Buku Besar Kas</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>Uraian</strong></p>
                            </td>
                            <td>
                            <p><strong>Ket</strong></p>
                            </td>
                            <td>
                            <p><strong>Uraian</strong></p>
                            </td>
                            <td>
                            <p><strong>Ket</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>Db</p>
                            </td>
                            <td>
                            <p>Beban kerugian persediaan rusak</p>
                            </td>
                            <td>
                            <p>LO</p>
                            </td>
                            <td>
                            <p>Db</p>
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>Kr</p>
                            </td>
                            <td>
                            <p>Persediaan</p>
                            </td>
                            <td>
                            <p>NRC</p>
                            </td>
                            <td>
                            <p>Kr</p>
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                    </tbody>
                </table>',
            'answer_a' => '<table border="1" cellpadding="1" cellspacing="1">
                            <tbody>
                                <tr>
                                    <td>
                                    <p><strong>Tanggal</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Keterangan</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Debit</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Kredit</strong></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p><strong>Jurnal Akrual</strong></p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>31/12/2019</p>
                                    </td>
                                    <td>
                                    <p>Beban persediaan</p>
                                    </td>
                                    <td>
                                    <p>Rp 3.000.000</p>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Persediaan</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Rp 3.000.000</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>',
            'answer_b' => '<table border="1" cellpadding="1" cellspacing="1">
                            <tbody>
                                <tr>
                                    <td>
                                    <p><strong>Tanggal</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Keterangan</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Debit</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Kredit</strong></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p><strong>Jurnal Akrual</strong></p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>31/12/2019</p>
                                    </td>
                                    <td>
                                    <p>Beban kerugian persediaan rusak</p>
                                    </td>
                                    <td>
                                    <p>Rp 3.000.000</p>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Persediaan</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Rp 3.000.000</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>',
            'answer_c' => '<table border="1" cellpadding="1" cellspacing="1">
                            <tbody>
                                <tr>
                                    <td>
                                    <p><strong>Tanggal</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Keterangan</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Debit</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Kredit</strong></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p><strong>Jurnal Akrual</strong></p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>31/12/2019</p>
                                    </td>
                                    <td>
                                    <p>Beban kerugian pelepasan aset</p>
                                    </td>
                                    <td>
                                    <p>Rp 3.000.000</p>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Persediaan</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Rp 3.000.000</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>',
            'answer_d' => '<table border="1" cellpadding="1" cellspacing="1">
                            <tbody>
                                <tr>
                                    <td>
                                    <p><strong>Tanggal</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Keterangan</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Debit</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Kredit</strong></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p><strong>Jurnal Akrual</strong></p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>31/12/2019</p>
                                    </td>
                                    <td>
                                    <p>Beban penyesuaian nilai persediaan</p>
                                    </td>
                                    <td>
                                    <p>Rp 3.000.000</p>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Persediaan</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Rp 3.000.000</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>',
            'correct_answer' => 'b',
        ]);
        MultipleChoice::create([
            'question_type' => 'pusat',
            'question' => '<p>Pada tanggal 20 Juni 2020, diterima pembayaran sewa kantin untuk periode 2 tahun terhitung mulai tanggal 1 Juli 2020 sebesar Rp 48.000.000. Bagaimana jurnal yang harus dicatat atas transaksi tersebut?&nbsp;</p>',
            'question_explanation' => '<p>Jurnal pada entitas/pelaporan atas resume tagihan permintaan pembentukan uang persediaan bendahara pengeluaran:&nbsp;</p>
                <table border="1" cellpadding="1" cellspacing="1">
                    <tbody>
                        <tr>
                            <td rowspan="2">&nbsp;</td>
                            <td colspan="2">
                            <p><strong>Buku Besar Akrual</strong></p>
                            </td>
                            <td rowspan="2">&nbsp;</td>
                            <td colspan="2">
                            <p><strong>Buku Besar Kas</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>Uraian</strong></p>
                            </td>
                            <td>
                            <p><strong>Ket</strong></p>
                            </td>
                            <td>
                            <p><strong>Uraian</strong></p>
                            </td>
                            <td>
                            <p><strong>Ket</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>Db</p>
                            </td>
                            <td>
                            <p>Diterima dari entitas lain</p>
                            </td>
                            <td>
                            <p>LPE</p>
                            </td>
                            <td>
                            <p>Db</p>
                            </td>
                            <td>
                            <p>Diterima dari entitas lain</p>
                            </td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>Kr</p>
                            </td>
                            <td>
                            <p>PNBP</p>
                            </td>
                            <td>
                            <p>LO</p>
                            </td>
                            <td>
                            <p>Kr</p>
                            </td>
                            <td>
                            <p>PNBP</p>
                            </td>
                            <td>
                            <p>LRA</p>
                            </td>
                        </tr>
                    </tbody>
                </table>',
            'answer_a' => '<table border="1" cellpadding="1" cellspacing="1">
                            <tbody>
                                <tr>
                                    <td>
                                    <p><strong>Tanggal</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Keterangan</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Debit</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Kredit</strong></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p><strong>Jurnal Akrual</strong></p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>20/06/2019</p>
                                    </td>
                                    <td>
                                    <p>Diterima dari entitas lain</p>
                                    </td>
                                    <td>
                                    <p>Rp 48.000.000</p>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>PNBP</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Rp 48.000.000</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Jurnal Kas</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Diterima dari entitas lain</p>
                                    </td>
                                    <td>
                                    <p>Rp 48.000.000</p>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>PNBP</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Rp 48.000.000</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>',
            'answer_b' => '<table border="1" cellpadding="1" cellspacing="1">
                            <tbody>
                                <tr>
                                    <td>
                                    <p><strong>Tanggal</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Keterangan</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Debit</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Kredit</strong></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p><strong>Jurnal Akrual</strong></p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>20/06/2019</p>
                                    </td>
                                    <td>
                                    <p>Kas di Bendahara</p>
                                    </td>
                                    <td>
                                    <p>Rp 48.000.000</p>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>PNBP</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Rp 48.000.000</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>',
            'answer_c' => '<table border="1" cellpadding="1" cellspacing="1">
                            <tbody>
                                <tr>
                                    <td>
                                    <p><strong>Tanggal</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Keterangan</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Debit</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Kredit</strong></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p><strong>Jurnal Akrual</strong></p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>20/06/2019</p>
                                    </td>
                                    <td>
                                    <p>Kas&nbsp;</p>
                                    </td>
                                    <td>
                                    <p>Rp 48.000.000</p>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Ditagihkan ke entitas lain</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Rp 48.000.000</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Jurnal Kas</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Kas</p>
                                    </td>
                                    <td>
                                    <p>Rp 48.000.000</p>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Ditagihkan ke entitas lain</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Rp 48.000.000</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Diterima dari entitas lain</p>
                                    </td>
                                    <td>
                                    <p>Rp 48.000.000</p>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>PNBP</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Rp 48.000.000</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>',
            'answer_d' => '<table border="1" cellpadding="1" cellspacing="1">
                            <tbody>
                                <tr>
                                    <td>
                                    <p><strong>Tanggal</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Keterangan</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Debit</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Kredit</strong></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p><strong>Jurnal Akrual</strong></p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>20/06/2019</p>
                                    </td>
                                    <td>
                                    <p>PNBP</p>
                                    </td>
                                    <td>
                                    <p>Rp 48.000.000</p>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Kas di Bendahara</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Rp 48.000.000</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>',
            'correct_answer' => 'a',
        ]);
        MultipleChoice::create([
            'question_type' => 'pusat',
            'question' => '<p>Pada tanggal 28 Juni 2020 dilakukan penghentian penggunaan mesin foto copy karena rusak. Adapun harga perolehan mesin foto copy adalah sebesar Rp 25.000.000 dan akumulasi penyusutan sampai tanggal penghentian sebesar Rp 20.000.000. Bagaimana jurnal yang tepat untuk mencatat transaksi tersebut?</p>',
            'question_explanation' => '<p>Jurnal reklasifikasi aset tetap kepada aset lainnya-aset yang tidak digunakan dalam operasi pemerintah dan reklasifikasi akumulasi penyusutan atas reklasifikasi aset tetap yang memenuhi karakteristik untuk disusutkan:&nbsp;<strong>&nbsp;</strong></p>
                <table border="1" cellpadding="1" cellspacing="1">
                    <tbody>
                        <tr>
                            <td rowspan="2">&nbsp;</td>
                            <td colspan="2">
                            <p><strong>Buku Besar Akrual</strong></p>
                            </td>
                            <td rowspan="2">&nbsp;</td>
                            <td colspan="2">
                            <p><strong>Buku Besar Kas</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>Uraian</strong></p>
                            </td>
                            <td>
                            <p><strong>Ket</strong></p>
                            </td>
                            <td>
                            <p><strong>Uraian</strong></p>
                            </td>
                            <td>
                            <p><strong>Ket</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>Db</p>
                            </td>
                            <td>
                            <p>Aset lainnya-aset yang tidak digunakan dalam operasi pemerintah</p>
                            </td>
                            <td>
                            <p>NRC</p>
                            </td>
                            <td>
                            <p>Db</p>
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>Kr</p>
                            </td>
                            <td>
                            <p>Aset tetap</p>
                            </td>
                            <td>
                            <p>NRC</p>
                            </td>
                            <td>
                            <p>Kr</p>
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>Db</p>
                            </td>
                            <td>
                            <p>Akumulasi penyusutan aset tetap</p>
                            </td>
                            <td>
                            <p>NRC</p>
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>Kr</p>
                            </td>
                            <td>
                            <p>Akumulasi penyusutan aset lainnya-aset yang tidak digunakan dalam operasi pemerintah</p>
                            </td>
                            <td>
                            <p>NRC</p>
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                    </tbody>
                </table>',
            'answer_a' => '<table border="1" cellpadding="1" cellspacing="1">
                            <tbody>
                                <tr>
                                    <td>
                                    <p><strong>Tanggal</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Keterangan</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Debit</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Kredit</strong></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p><strong>Jurnal Akrual</strong></p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>28/06/2019</p>
                                    </td>
                                    <td>
                                    <p>Aset lainnya</p>
                                    </td>
                                    <td>
                                    <p>Rp 25.000.000</p>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Aset tetap</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Rp 25.000.000</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Akumulasi penyusutan aset tetap</p>
                                    </td>
                                    <td>
                                    <p>Rp 20.000.000</p>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Akumulasi penyusutan aset lainnya-aset yang tidak digunakan dalam operasi pemerintah</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Rp 20.000.000</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>',
            'answer_b' => '<table border="1" cellpadding="1" cellspacing="1">
                            <tbody>
                                <tr>
                                    <td>
                                    <p><strong>Tanggal</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Keterangan</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Debit</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Kredit</strong></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p><strong>Jurnal Akrual</strong></p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>28/06/2019</p>
                                    </td>
                                    <td>
                                    <p>Aset lainnya</p>
                                    </td>
                                    <td>
                                    <p>Rp 25.000.000</p>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Aset tetap&nbsp;</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Rp 25.000.000</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>',
            'answer_c' => '<table border="1" cellpadding="1" cellspacing="1">
                            <tbody>
                                <tr>
                                    <td>
                                    <p><strong>Tanggal</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Keterangan</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Debit</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Kredit</strong></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p><strong>Jurnal Akrual</strong></p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>28/06/2019</p>
                                    </td>
                                    <td>
                                    <p>Beban Pelepasan aset</p>
                                    </td>
                                    <td>
                                    <p>Rp 25.000.000</p>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Akumulasi penyusutan</p>
                                    </td>
                                    <td>
                                    <p>Rp 20.000.000</p>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Aset tetap&nbsp;</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Rp 25.000.000</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Aset lainnya-Akumulasi penyusutan</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Rp 20.000.000</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>',
            'answer_d' => '<table border="1" cellpadding="1" cellspacing="1">
                            <tbody>
                                <tr>
                                    <td>
                                    <p><strong>Tanggal</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Keterangan</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Debit</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Kredit</strong></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p><strong>Jurnal Akrual</strong></p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>28/06/2019</p>
                                    </td>
                                    <td>
                                    <p>Beban pelepasan aset</p>
                                    </td>
                                    <td>
                                    <p>Rp 25.000.000</p>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Aset tetap&nbsp;</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Rp 25.000.000</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>',
            'correct_answer' => 'a',
        ]);
        MultipleChoice::create([
            'question_type' => 'pusat',
            'question' => '<p>Pada tanggal 5 Juli 2020 dikembalikan kelebihan pembayaran atas pengadaan mesin pada tahun anggaran 2019 sebesar Rp 1.000.000. Buatlah jurnal atas transaksi tersebut!</p>',
            'question_explanation' => '<p>Jurnal pada entitas akuntansi/pelaporan belanja atas pengembalian belanja yang realisasinya pada TAYL dan pengembaliannya langsung ke rekening kas Negara:&nbsp;</p>
                <table>
                    <tbody>
                        <tr>
                            <td rowspan="2">&nbsp;</td>
                            <td colspan="2">
                            <p><strong>Buku Besar Akrual</strong></p>
                            </td>
                            <td rowspan="2">&nbsp;</td>
                            <td colspan="2">
                            <p><strong>Buku Besar Kas</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>Uraian</strong></p>
                            </td>
                            <td>
                            <p><strong>Ket</strong></p>
                            </td>
                            <td>
                            <p><strong>Uraian</strong></p>
                            </td>
                            <td>
                            <p><strong>Ket</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>Db</p>
                            </td>
                            <td>
                            <p>Diterima dari entitas lain</p>
                            </td>
                            <td>
                            <p>LPE</p>
                            </td>
                            <td>
                            <p>Db</p>
                            </td>
                            <td>
                            <p>Diterima dari entitas lain</p>
                            </td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>Kr</p>
                            </td>
                            <td>
                            <p>PNBP lainnya</p>
                            </td>
                            <td>
                            <p>LO</p>
                            </td>
                            <td>
                            <p>Kr</p>
                            </td>
                            <td>
                            <p>PNBP lainnya</p>
                            </td>
                            <td>
                            <p>LRA</p>
                            </td>
                        </tr>
                    </tbody>
                </table>',
            'answer_a' => '<table border="1" cellpadding="1" cellspacing="1">
                            <tbody>
                                <tr>
                                    <td>
                                    <p><strong>Tanggal</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Keterangan</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Debit</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Kredit</strong></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p><strong>Jurnal Akrual</strong></p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>05/07/2019</p>
                                    </td>
                                    <td>
                                    <p>Diterima dari entitas lain</p>
                                    </td>
                                    <td>
                                    <p>Rp 1.000.000</p>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>PNBP lainnya</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Rp 1.000.000</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Jurnal Kas</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Diterima dari entitas lain</p>
                                    </td>
                                    <td>
                                    <p>Rp 1.000.000</p>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>PNBP lainnya</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Rp 1.000.000</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>',
            'answer_b' => '<table border="1" cellpadding="1" cellspacing="1">
                            <tbody>
                                <tr>
                                    <td>
                                    <p><strong>Tanggal</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Keterangan</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Debit</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Kredit</strong></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p><strong>Jurnal Akrual</strong></p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>05/07/2019</p>
                                    </td>
                                    <td>
                                    <p>Kas</p>
                                    </td>
                                    <td>
                                    <p>Rp 1.000.000</p>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Ditagihkan ke entitas lain</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Rp 1.000.000</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Jurnal Kas</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Kas</p>
                                    </td>
                                    <td>
                                    <p>Rp 1.000.000</p>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Ditagihkan ke entitas lain</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Rp 1.000.000</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Diterima dari entitas lain</p>
                                    </td>
                                    <td>
                                    <p>Rp 1.000.000</p>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>PNBP lainnya</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Rp 1.000.000</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>',
            'answer_c' => '<table border="1" cellpadding="1" cellspacing="1">
                            <tbody>
                                <tr>
                                    <td>
                                    <p><strong>Tanggal</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Keterangan</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Debit</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Kredit</strong></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p><strong>Jurnal Akrual</strong></p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>05/07/2019</p>
                                    </td>
                                    <td>
                                    <p>Diterima dari entitas lain</p>
                                    </td>
                                    <td>
                                    <p>Rp 1.000.000</p>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Beban&nbsp;</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Rp 1.000.000</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Jurnal Kas</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Diterima dari entitas lain</p>
                                    </td>
                                    <td>
                                    <p>Rp 1.000.000</p>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                            </tbody>
                        </table>',
            'answer_d' => '<table border="1" cellpadding="1" cellspacing="1">
                            <tbody>
                                <tr>
                                    <td>
                                    <p><strong>Tanggal</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Keterangan</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Debit</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Kredit</strong></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p><strong>Jurnal Akrual</strong></p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>05/07/2019</p>
                                    </td>
                                    <td>
                                    <p>Kas</p>
                                    </td>
                                    <td>
                                    <p>Rp 1.000.000</p>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Ditagihkan ke entitas lain</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Rp 1.000.000</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Jurnal Kas</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Kas</p>
                                    </td>
                                    <td>
                                    <p>Rp 1.000.000</p>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Ditagihkan ke entitas lain</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Rp 1.000.000</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Diterima dari entitas lain</p>
                                    </td>
                                    <td>
                                    <p>Rp 1.000.000</p>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Belanja</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Rp 1.000.000</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>',
            'correct_answer' => 'a',
        ]);
        MultipleChoice::create([
            'question_type' => 'pusat',
            'question' => '<p>Pada tanggal 10 Juli 2020, diterbitkan SBN Seri 001 sebanyak 100 lembar dengan nilai nominal Rp 10.000.000. Bagaimana jurnal yang tepat untuk mencatat transaksi tersebut?</p>',
            'question_explanation' => '<p>Jurnal pada entitas akuntansi/pelaporan BA BUN atas dana yang terverifikasi di rekening kas negara sebagai penerimaan pembiayaan dari SBN:&nbsp;</p>
                <table>
                    <tbody>
                        <tr>
                            <td rowspan="2">&nbsp;</td>
                            <td colspan="2">
                            <p><strong>Buku Besar Akrual</strong></p>
                            </td>
                            <td rowspan="2">&nbsp;</td>
                            <td colspan="2">
                            <p><strong>Buku Besar Kas</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>Uraian</strong></p>
                            </td>
                            <td>
                            <p><strong>Ket</strong></p>
                            </td>
                            <td>
                            <p><strong>Uraian</strong></p>
                            </td>
                            <td>
                            <p><strong>Ket</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>Db</p>
                            </td>
                            <td>
                            <p>Diterima dari entitas lain</p>
                            </td>
                            <td>
                            <p>LPE</p>
                            </td>
                            <td>
                            <p>Db</p>
                            </td>
                            <td>
                            <p>Diterima dari entitas lain</p>
                            </td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>Kr</p>
                            </td>
                            <td>
                            <p>Utang SBN jangka pendek/panjang</p>
                            </td>
                            <td>
                            <p>NRC</p>
                            </td>
                            <td>
                            <p>Kr</p>
                            </td>
                            <td>
                            <p>Penerimaan pembiayaan (penjualan SBN)</p>
                            </td>
                            <td>
                            <p>LRA</p>
                            </td>
                        </tr>
                    </tbody>
                </table>',
            'answer_a' => '<table border="1" cellpadding="1" cellspacing="1">
                            <tbody>
                                <tr>
                                    <td>
                                    <p><strong>Tanggal</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Keterangan</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Debit</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Kredit</strong></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p><strong>Jurnal Akrual</strong></p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>05/07/2019</p>
                                    </td>
                                    <td>
                                    <p>Kas</p>
                                    </td>
                                    <td>
                                    <p>Rp 1.000.000.000</p>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Utang jangka panjang dalam negeri</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Rp 1.000.000.000</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Jurnal Kas</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Kas</p>
                                    </td>
                                    <td>
                                    <p>Rp 1.000.000.000</p>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Penerimaan pembiayaan</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Rp 1.000.000.000</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>',
            'answer_b' => '<table border="1" cellpadding="1" cellspacing="1">
                            <tbody>
                                <tr>
                                    <td>
                                    <p><strong>Tanggal</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Keterangan</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Debit</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Kredit</strong></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p><strong>Jurnal Akrual</strong></p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>05/07/2019</p>
                                    </td>
                                    <td>
                                    <p>Diterima dari entitas lain</p>
                                    </td>
                                    <td>
                                    <p>Rp 1.000.000.000</p>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Utang jangka panjang dalam negeri</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Rp 1.000.000.000</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Jurnal Kas</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Diterima dari entitas lain</p>
                                    </td>
                                    <td>
                                    <p>Rp 1.000.000.000</p>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Penerimaan pembiayaan</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Rp 1.000.000.000</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>',
            'answer_c' => '<table border="1" cellpadding="1" cellspacing="1">
                            <tbody>
                                <tr>
                                    <td>
                                    <p><strong>Tanggal</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Keterangan</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Debit</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Kredit</strong></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p><strong>Jurnal Akrual</strong></p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>05/07/2019</p>
                                    </td>
                                    <td>
                                    <p>SAL</p>
                                    </td>
                                    <td>
                                    <p>Rp 1.000.000.000</p>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Ditagihkan ke entitas lain</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Rp 1.000.000.000</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Jurnal Kas</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>SAL</p>
                                    </td>
                                    <td>
                                    <p>Rp 1.000.000.000</p>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Ditagihkan ke entitas lain</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Rp 1.000.000.000</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Diterima dari entitas lain</p>
                                    </td>
                                    <td>
                                    <p>Rp 1.000.000.000</p>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Penerimaan pembiayaan</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Rp 1.000.000.000</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>',
            'answer_d' => '<table border="1" cellpadding="1" cellspacing="1">
                            <tbody>
                                <tr>
                                    <td>
                                    <p><strong>Tanggal</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Keterangan</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Debit</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Kredit</strong></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p><strong>Jurnal Akrual</strong></p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>05/07/2019</p>
                                    </td>
                                    <td>
                                    <p>Diterima dari entitas lain</p>
                                    </td>
                                    <td>
                                    <p>Rp 1.000.000.000</p>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Utang SBN jangka pendek/panjang</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Rp 1.000.000.000</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Jurnal Kas</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Diterima dari entitas lain</p>
                                    </td>
                                    <td>
                                    <p>Rp 1.000.000.000</p>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Penerimaan pembiayaan</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Rp 1.000.000.000</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>',
            'correct_answer' => 'd',
        ]);
        MultipleChoice::create([
            'question_type' => 'pusat',
            'question' => '<p>Pada tanggal 25 Juni 2020, diterima SK kenaikan pangkat pegawai yang mengakibatkan terdapat kekurangan gaji yang belum dibayar sebesar Rp 7.000.000. Bagaimana jurnal pencatatan yang tepat atas transaksi tersebut?</p>',
            'question_explanation' => '<p>&nbsp;Jurnal pada entitas akuntansi/pelaporan belanja atas resume tagihan belanja yang bersifat expendable:&nbsp;</p>
                <table border="1" cellpadding="1" cellspacing="1">
                    <tbody>
                        <tr>
                            <td rowspan="2">&nbsp;</td>
                            <td colspan="2">
                            <p><strong>Buku Besar Akrual</strong></p>
                            </td>
                            <td rowspan="2">&nbsp;</td>
                            <td colspan="2">
                            <p><strong>Buku Besar Kas</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>Uraian</strong></p>
                            </td>
                            <td>
                            <p><strong>Ket</strong></p>
                            </td>
                            <td>
                            <p><strong>Uraian</strong></p>
                            </td>
                            <td>
                            <p><strong>Ket</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>Db</p>
                            </td>
                            <td>
                            <p>Beban (expendable)</p>
                            </td>
                            <td>
                            <p>LO</p>
                            </td>
                            <td>
                            <p>Db</p>
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>Kr</p>
                            </td>
                            <td>
                            <p>Belanja yang masih harus dibayar</p>
                            </td>
                            <td>
                            <p>NRC</p>
                            </td>
                            <td>
                            <p>Kr</p>
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                    </tbody>
                </table>',
            'answer_a' => '<table>
                            <tbody>
                                <tr>
                                    <td>
                                    <p><strong>Tanggal</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Keterangan</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Debit</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Kredit</strong></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p><strong>Jurnal Akrual</strong></p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>25/07/2019</p>
                                    </td>
                                    <td>
                                    <p>Belanja yang masih harus dibayar</p>
                                    </td>
                                    <td>
                                    <p>Rp 7.000.000</p>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Ditagihkan ke entitas lain</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Rp 7.000.000</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Jurnal Kas</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Belanja</p>
                                    </td>
                                    <td>
                                    <p>Rp 7.000.000</p>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Ditagihkan ke entitas lain</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Rp 7.000.000</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>',
            'answer_b' => '<table border="1" cellpadding="1" cellspacing="1">
                            <tbody>
                                <tr>
                                    <td>
                                    <p><strong>Tanggal</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Keterangan</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Debit</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Kredit</strong></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p><strong>Jurnal Akrual</strong></p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>25/07/2019</p>
                                    </td>
                                    <td>
                                    <p>Diterima dari entitas lain</p>
                                    </td>
                                    <td>
                                    <p>Rp 7.000.000</p>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Kas</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Rp 7.000.000</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>',
            'answer_c' => '<table border="1" cellpadding="1" cellspacing="1">
                            <tbody>
                                <tr>
                                    <td>
                                    <p><strong>Tanggal</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Keterangan</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Debit</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Kredit</strong></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p><strong>Jurnal Akrual</strong></p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>25/07/2019</p>
                                    </td>
                                    <td>
                                    <p>Beban</p>
                                    </td>
                                    <td>
                                    <p>Rp 7.000.000</p>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Belanja yang masih harus dibayar</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Rp 7.000.000</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>',
            'answer_d' => '<table border="1" cellpadding="1" cellspacing="1">
                            <tbody>
                                <tr>
                                    <td>
                                    <p><strong>Tanggal</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Keterangan</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Debit</strong></p>
                                    </td>
                                    <td>
                                    <p><strong>Kredit</strong></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p><strong>Jurnal Akrual</strong></p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>25/07/2019</p>
                                    </td>
                                    <td>
                                    <p>Belanja yang masih harus dibayar</p>
                                    </td>
                                    <td>
                                    <p>Rp 7.000.000</p>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Beban</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Rp 7.000.000</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>',
            'correct_answer' => 'c',
        ]);
        MultipleChoice::create([
            'question_type' => 'pusat',
            'question' => '<p>Bagaimana cara pengakuan utang perhitungan fihak ketiga (PFK)?&nbsp;</p>',
            'question_explanation' => '<p>Pengakuan utang PFK:</p>
                <ol>
                    <li>Pada saat dilakukan pemotongan oleh BUN atau diterima oleh BUN untuk PFK yang disetorkan oleh BUD; atau&nbsp;</li>
                    <li>Pada akhir periode pelaporan, saldo pungutan/potongan berupa PFK yang belum disetorkan kepada pihak lain dicatat pada periode laporan keuangan sebesar jumlah yang masih harus disetorkan</li>
                </ol>',
            'answer_a' => '<p>Diakui pada saat melakukan reklasifikasi pinjaman jangka panjang</p>',
            'answer_b' => '<p>Diakui pada saat telah menerima barang/jasa/uang, namun pemerintah belum menyerahkan barang/jasa kepada pihak ketiga</p>',
            'answer_c' => '<p>Diakui pada saat entitas rutin mengikat kontrak pengadaan barang atau jasa</p>',
            'answer_d' => '<p>Diakui pada saat dilakukan pemotongan oleh BUN atau diterima oleh BUN</p>',
            'correct_answer' => 'd',
        ]);
        MultipleChoice::create([
            'question_type' => 'pusat',
            'question' => '<p>Kekayaan bersih pemerintah yang merupakan selisih antara aset dan kewajiban pemerintah disebut dengan&hellip;</p>',
            'question_explanation' => '<p>Ekuitas adalah kekayaan bersih pemerintah yang merupakan selisih antara aset dan kewajiban pemerintah.&nbsp;</p>',
            'answer_a' => '<p>Ekuitas</p>',
            'answer_b' => '<p>Liabilitas</p>',
            'answer_c' => '<p>Aset</p>',
            'answer_d' => '<p>Piutang</p>',
            'correct_answer' => 'a',
        ]);

        // Soal CGAA Daerah
        MultipleChoice::create([
            'question_type' => 'daerah',
            'question' => '<p>Pengakuan manakah yang sesuai klasifikasi dalam format APBD?</p>',
            'question_explanation' => '<p>Belanja: Berbasis kas, saat terjadinya pengeluaran dari Rekening Kas BUD/ Bendahara Pengeluaran), dan saat pertanggungjawaban pengeluaran yang disahkan oleh unit yang mempunyai fungsi perbendaharaan<br />
            Beban: Berbasis akrual, saat timbulnya kewajiban beban, saat terjadinya konsumsi aset non kas dalam kegiatan operasional pemerintah, dan saat terjadi penurunan nilai aset sehubungan dengan penggunaan aset bersangkutan</p>',
            'answer_a' => '<p>Belanja berbasis kas</p>',
            'answer_b' => '<p>Biaya berbasis akrual</p>',
            'answer_c' => '<p>Beban berbasis kas</p>',
            'answer_d' => '<p>Biaya berbasis akrual</p>',
            'correct_answer' => 'a',
        ]);
        MultipleChoice::create([
            'question_type' => 'daerah',
            'question' => '<p>Yang merupakan aset lancar adalah &hellip;</p>',
            'question_explanation' => '<p>kewajiban jangka pendek dan utang jangka pendek = komponen pasiva, sementara investasi jangka panjang = aset non lancar</p>',
            'answer_a' => '<p>Kewajiban jangka pendek</p>',
            'answer_b' => '<p>Investasi jangka panjang</p>',
            'answer_c' => '<p>Piutang jangka pendek</p>',
            'answer_d' => '<p>Utang jangka pendek</p>',
            'correct_answer' => 'c',
        ]);
        MultipleChoice::create([
            'question_type' => 'daerah',
            'question' => '<p>Setelah BUD menerima dokumen tagihan dari pihak ketiga atau dokumen sumber lainnya dan menyerahkan tembusannya kepada Fungsi Akuntansi PPKD, prosedur akuntansi selanjutnya adalah?</p>',
            'question_explanation' => '<ol>
                                        <li>Bendahara Umum Daerah menerima dokumen tagihan dari pihak ketiga atau dokumen sumber lainnya dan menyerahkan tembusannya kepada Fungsi Akuntansi PPKD.</li>
                                        <li>Fungsi Akuntansi PPKD membuat memo jurnal/bukti memorial berdasarkan tembusan tagihan dari pihak ketiga atau dokumen sumber lainnya dari BUD/Kuasa BUD.</li>
                                        <li>Berdasarkan dokumen tersebut BUD/Kuasa BUD melakukan proses penatausahaan sesuai dengan sistem dan prosedur penatausahaan keuangan, kemudian menyerahkan tembusan dokumen pembayaran yaitu SP2D tersebut kepada fungsi akuntansi PPKD.</li>
                                        <li>Fungsi Akuntansi PPKD membuat memo jurnal/bukti memorial berdasarkan tembusan dokumen pembayaran SP2D dari BUD/Kuasa BUD.</li>
                                        <li>Fungsi Akuntansi PPKD melakukan pencatatan akuntansi dalam buku jurnal berdasarkan memo jurnal.</li>
                                        <li>Fungsi Akuntansi PPKD melakukan posting jurnal ke buku besar.</li>
                                        <li>Berdasarkan saldo Buku Besar Fungsi Akuntansi PPKD menyusun Laporan Keuangan PPKD.</li>
                                    </ol>',
            'answer_a' => '<p>Fungsi Akuntansi PPKD melakukan posting jurnal ke buku besar</p>',
            'answer_b' => '<p>Fungsi Akuntansi PPKD membuat memo jurnal/bukti memorial berdasarkan tembusan tagihan dari pihak ketiga atau dokumen sumber lainnya dari BUD/Kuasa BUD</p>',
            'answer_c' => '<p>Fungsi Akuntansi PPKD menyusun Laporan Keuangan PPKD</p>',
            'answer_d' => '<p>Fungsi Akuntansi PPKD membuat memo jurnal/bukti memorial berdasarkan tembusan dokumen pembayaran SP2D dari BUD/Kuasa BUD</p>',
            'correct_answer' => 'b',
        ]);
        MultipleChoice::create([
            'question_type' => 'daerah',
            'question' => '<p>Apakah perbedaan mendasar antara pendapatan-LRA dengan pendapatan-LO?</p>',
            'question_explanation' => '<p>Pendapatan-LRA = basis kas, diakui ketika kas diterima di Rekening Kas Umum Daerah/ oleh entitas pelaporan, kode BAS 4<br />
            Pendapatan-LO = basis akrual, diakui ketika timbulnya hak atas pendapatan tersebut atau ada aliran masuk sumber daya ekonomi, kode BAS 8</p>',
            'answer_a' => '<p>Pendapatan-LRA berbasis akrual dan pendapatan-LO berbasis kas</p>',
            'answer_b' => '<p>Pendapatan LRA &amp; LO sama-sama berbasis kas</p>',
            'answer_c' => '<p>Pendapatan LRA &amp; LO sama-sama berbasis akrual</p>',
            'answer_d' => '<p>Pendapatan-LRA berbasis kas dan pendapatan-LO berbasis akrual</p>',
            'correct_answer' => 'd',
        ]);
        MultipleChoice::create([
            'question_type' => 'daerah',
            'question' => '<p>komponen laporan keuangan yang menyediakan informasi mengenai realisasi pendapatan, Belanja, Transfer, Surplus/defisit, dan Pembiayaan dari suatu entitas pelaporan yang masing-masing diperbandingkan dengan anggarannya dengan menggunakan basis kas merupakan pengertian dari&hellip;</p>',
            'question_explanation' => '<p>Dalam PMK tersebut (Hal.16) menyatakan bahwa LRA merupakan komponen laporan keuangan yang menyediakan informasi mengenai realisasi pendapatan-LRA, belanja, transfer, surplus/defisit-LRA, dan pembiayaan dari suatu entitas pelaporan yang masing-masing diperbandingkan dengan anggarannya. Informasi tersebut berguna bagi para pengguna laporan dalam mengevaluasi keputusan mengenai alokasi sumber-sumber daya ekonomi, akuntabilitas dan ketaatan entitas pelaporan terhadap anggaran. &nbsp;</p>',
            'answer_a' => '<p>Laporan Posisi Keuangan</p>',
            'answer_b' => '<p>Laporan Realisasi Anggaran&nbsp;</p>',
            'answer_c' => '<p>Laporan Perubahan Ekuitas</p>',
            'answer_d' => '<p>Laporan Operasional&nbsp;</p>',
            'correct_answer' => 'b',
        ]);
        MultipleChoice::create([
            'question_type' => 'daerah',
            'question' => '<p>Terdapat transaksi Beban Modal/Aset Tetap ketika SPP dan SPM terbit-Transaksi LS dengan dokumen sumber BAST (Berita Acara Serah Terima). Pencatatan dilakukan hanya di SKPD, yaitu LO: (D) Aset Tetap dan (K) Utang. Benar atau salah?</p>',
            'question_explanation' => '<p>(1) Ketika timbul potensi manfaat ekonomi masa depan diperoleh oleh pemerintah dan mempunyai nilai atau biaya yang dapat diukur dengan andal.<br />
            (2) Pengakuan suatu aset tetap harus memperhatikan kebijakan pemerintah mengenai ketentuan nilai satuan minimum kapitalisasi aset tetap. Namun, untuk aset tetap berupa tanah serta jalan, irigasi, dan jaringan, berapapun nilai perolehannya seluruhnya dikapitalisasi sebagai nilai aset tetap.</p>',
            'answer_a' => '<p>Benar</p>',
            'answer_b' => '<p>Benar, tetapi pengakuan juga dilakukan di PPKD</p>',
            'answer_c' => '<p>Salah, pengakuan seharusnya hanya dilakukan di PPKD</p>',
            'answer_d' => '<p>Salah</p>',
            'correct_answer' => 'a',
        ]);
        MultipleChoice::create([
            'question_type' => 'daerah',
            'question' => '<p>Sesuai dalam PMK nomor 212/PMK.05/2019 bahwa Jurnal Anggaran untuk mencatat transaksi dan kejadian keuangan sehubungan komitmen belanja dan/ atau transfer dana ke pemerintah daerah secara double entry, apakah alasan mendasar dilakukannya double entry&nbsp;</p>',
            'question_explanation' => '<p>kewajiban jangka pendek dan utang jangka pendek = komponen pasiva, sementara investasi jangka panjang = aset non lancar</p>',
            'answer_a' => '<p>Karena akan menghasilkan LKPD seperti LRA dan LO</p>',
            'answer_b' => '<p>Agar transaksi ter-record lebih detail dan lengkap</p>',
            'answer_c' => '<p>Sebagai laporan pertanggungjawaban</p>',
            'answer_d' => '<p>Untuk mengkonsolidasi transaksi</p>',
            'correct_answer' => 'a',
        ]);
        MultipleChoice::create([
            'question_type' => 'daerah',
            'question' => '<p>Dalam Peraturan Menteri Dalam Negeri Nomor 13 Tahun 2006 tentang Pedoman Pengelolaan Keuangan Daerah, sebagaimana telah diubah dengan Peraturan Menteri Dalam Negeri Nomor 59 Tahun 2007 Surat Permintaan Pembayaran (SPP) terbagi kedalam 4 jenis pengajuan pembayaran yaitu&hellip;</p>',
            'question_explanation' => '<p>Dalam Peraturan Menteri Dalam Negeri Nomor 13 Tahun 2006 tentang Pedoman Pengelolaan Keuangan Daerah, sebagaimana telah diubah dengan Peraturan Menteri Dalam Negeri Nomor 59 Tahun 2007 Surat Permintaan Pembayaran (SPP) adalah dokumen yang diterbitkan oleh pejabat yang bertanggung jawab atas pelaksanaan kegiatan/bendahara pengeluaran untuk mengajukan permintaan pembayaran. SPP terbagi menjadi empat macam yaitu (1)Uang Persediaan (SPP-UP); (2) Ganti Uang (SPP-GU); (3) Tambah Uang (SPP-TU); (4) Langsung (SPP-LS)</p>',
            'answer_a' => '<p>SPP-UP, SPP-GU, SPP-LS, SPP-TU</p>',
            'answer_b' => '<p>SPP-LU, SPP-SP-SPP-GU,SPP-TU</p>',
            'answer_c' => '<p>SPP-TU, SPP-GP, SPP-UP, SPP-LS</p>',
            'answer_d' => '<p>SPP-GU, SPP-LS, SPP-PU,SPP-TU</p>',
            'correct_answer' => 'a',
        ]);
        MultipleChoice::create([
            'question_type' => 'daerah',
            'question' => '<p>Bagaimanakah jurnal penyesuaian untuk akumulasi amortisasi dan beban amortisasi yang dicatat setiap akhir periode pelaporan (semesteran)?</p>',
            'question_explanation' => '<p>Amortisasi adalah alokasi yang sistematis atas nilai suatu aset tetap tidak berwujud yang dapat disusutkan selama masa manfaat aset yang bersangkutan.Nilai amortisasi untuk masing-masing periode diakui sebagai pengurang nilai tercatat aset tetap tidak berwujud dalam neraca dan beban amortisasi dalam laporan operasional.</p>',
            'answer_a' => '<table border="1" cellpadding="1" cellspacing="1">
                            <tbody>
                                <tr>
                                    <td>
                                    <p>Tanggal</p>
                                    </td>
                                    <td>
                                    <p>Keterangan</p>
                                    </td>
                                    <td>
                                    <p>Debit</p>
                                    </td>
                                    <td>
                                    <p>Kredit</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>xxx</p>
                                    </td>
                                    <td>
                                    <p>Beban Amortisasi Aset Tidak Berwujud</p>
                                    </td>
                                    <td>
                                    <p>xxx</p>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Akumulasi Amortisasi Aset Tidak Berwujud</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>xxx</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>',
            'answer_b' => '<table border="1" cellpadding="1" cellspacing="1">
                            <tbody>
                                <tr>
                                    <td>
                                    <p>Tanggal</p>
                                    </td>
                                    <td>
                                    <p>Keterangan</p>
                                    </td>
                                    <td>
                                    <p>Debit</p>
                                    </td>
                                    <td>
                                    <p>Kredit</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>xxx</p>
                                    </td>
                                    <td>
                                    <p>Akumulasi Amortisasi Aset Tidak Berwujud</p>
                                    </td>
                                    <td>
                                    <p>xxx</p>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Beban Amortisasi Aset Tidak Berwujud</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>xxx</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>',
            'answer_c' => '<table border="1" cellpadding="1" cellspacing="1">
                            <tbody>
                                <tr>
                                    <td>
                                    <p>Tanggal</p>
                                    </td>
                                    <td>
                                    <p>Keterangan</p>
                                    </td>
                                    <td>
                                    <p>Debit</p>
                                    </td>
                                    <td>
                                    <p>Kredit</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>xxx</p>
                                    </td>
                                    <td>
                                    <p>Akumulasi Amortisasi Aset Tidak Berwujud</p>
                                    </td>
                                    <td>
                                    <p>xxx</p>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Akumulasi Amortisasi Aset Berwujud</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>xxx</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>',
            'answer_d' => '<table border="1" cellpadding="1" cellspacing="1">
                            <tbody>
                                <tr>
                                    <td>
                                    <p>Tanggal</p>
                                    </td>
                                    <td>
                                    <p>Keterangan</p>
                                    </td>
                                    <td>
                                    <p>Debit</p>
                                    </td>
                                    <td>
                                    <p>Kredit</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>xxx</p>
                                    </td>
                                    <td>
                                    <p>Akumulasi Amortisasi Aset Berwujud</p>
                                    </td>
                                    <td>
                                    <p>xxx</p>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Beban Amortisasi Aset Berwujud</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>xxx</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>',
            'correct_answer' => 'a',
        ]);
        MultipleChoice::create([
            'question_type' => 'daerah',
            'question' => '<p>Beban penyusutan atas aset tetap selain tanah dan amortisasi atas aset tak berwujud adalah alokasi yang sistematis atas nilai aset tetap/aset tak berwujud yang dapat disusutkan (depreciable assets). Apakah pernyataan tersebut sudah cukup menjelaskan arti beban penyusutan?</p>',
            'question_explanation' => '<p>Beban penyusutan atas aset tetap selain tanah dan amortisasi atas aset tak berwujud adalah alokasi yang sistematis atas nilai aset tetap/aset tak berwujud yang dapat disusutkan (depreciable assets) selama masa manfaat aset yang bersangkutan. Adanya bukti memorial/dokumen yang dipersamakan, PPK SKPD membuat jurnal.&nbsp;</p>',
            'answer_a' => '<p>Sudah</p>',
            'answer_b' => '<p>Hanya cukup perlu ditambahkan pernyataan &ldquo;selama masa manfaat aset yang bersangkutan&rdquo;</p>',
            'answer_c' => '<p>Sama sekali tidak menjelaskan beban penyusutan</p>',
            'answer_d' => '<p>Tidak ada jawaban yang benar</p>',
            'correct_answer' => 'b',
        ]);
        MultipleChoice::create([
            'question_type' => 'daerah',
            'question' => '<p>Pada saat diterimakanya kas atas pendapatan hibah yang diterima Pemda, maka Fungsi Akuntansi PPKD juga melakukan pencatatan atas pendapatan &ndash; LRA, bagaimana penjurnalannya?</p>',
            'question_explanation' => '<p>D: Piutang Pendapatan Hibah pada K: Pendapatan Transfer merupakan penjurnalan ketika Fungsi Akuntansi PPKD mencatat Naskah Perjanjian Hibah Daerah yang ditandatangani.</p>',
            'answer_a' => '<table border="1" cellpadding="1" cellspacing="1">
                            <tbody>
                                <tr>
                                    <td>
                                    <p>Tanggal</p>
                                    </td>
                                    <td>
                                    <p>Keterangan</p>
                                    </td>
                                    <td>
                                    <p>Debit</p>
                                    </td>
                                    <td>
                                    <p>Kredit</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>xxx</p>
                                    </td>
                                    <td>
                                    <p>Piutang Pendapatan Hibah</p>
                                    </td>
                                    <td>
                                    <p>xxx</p>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Pendapatan Transfer</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>xxx</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>',
            'answer_b' => '<table border="1" cellpadding="1" cellspacing="1">
                            <tbody>
                                <tr>
                                    <td>
                                    <p>Tanggal</p>
                                    </td>
                                    <td>
                                    <p>Keterangan</p>
                                    </td>
                                    <td>
                                    <p>Debit</p>
                                    </td>
                                    <td>
                                    <p>Kredit</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>xxx</p>
                                    </td>
                                    <td>
                                    <p>Perubahan SAL</p>
                                    </td>
                                    <td>
                                    <p>xxx</p>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Pendapatan Hibah - LRA</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>xxx</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>',
            'answer_c' => '<table border="1" cellpadding="1" cellspacing="1">
                            <tbody>
                                <tr>
                                    <td>
                                    <p>Tanggal</p>
                                    </td>
                                    <td>
                                    <p>Keterangan</p>
                                    </td>
                                    <td>
                                    <p>Debit</p>
                                    </td>
                                    <td>
                                    <p>Kredit</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>xxx</p>
                                    </td>
                                    <td>
                                    <p>Piutang Pendapatan Hibah</p>
                                    </td>
                                    <td>
                                    <p>xxx</p>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Kas di Kas Daerah</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>xxx</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>',
            'answer_d' => '<table border="1" cellpadding="1" cellspacing="1">
                            <tbody>
                                <tr>
                                    <td>
                                    <p>Tanggal</p>
                                    </td>
                                    <td>
                                    <p>Keterangan</p>
                                    </td>
                                    <td>
                                    <p>Debit</p>
                                    </td>
                                    <td>
                                    <p>Kredit</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>xxx</p>
                                    </td>
                                    <td>
                                    <p>Pendapatan Hibah - LRA</p>
                                    </td>
                                    <td>
                                    <p>xxx</p>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Perubahan SAL</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>xxx</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>',
            'correct_answer' => 'b',
        ]);
        MultipleChoice::create([
            'question_type' => 'daerah',
            'question' => '<p>Pada saat Pemerintah Daerah melakukan pencairan dana bagi hasil, diterbitkan SP2D LS dan dilakukan pembayaran kepada yang berhak menerima, bagaimanakah jurnal atas fungsi akuntansi SKPKD?</p>',
            'question_explanation' => '<p>Pencatatan di lakukan bukan hanya di LO dan Neraca tetapi juga dilakukan pada jurnal LRA. Adapun D: Beban bagi hasil, pada K: Utang Transfer Bagi Hasil merupakan penjurnalan ketika fungsi akuntansi SKPKD membuat jurnal Surat Keputusan Kepala Daerah tentang transfer bagi hasil yang dikeluarkan oleh Pemerintah Daerah.</p>',
            'answer_a' => '<table border="1" cellpadding="1" cellspacing="1">
                            <tbody>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Jurnal LO dan Neraca</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>-</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>Db</p>
                                    </td>
                                    <td>
                                    <p>Utang Transfer Bagi Hasil</p>
                                    </td>
                                    <td>
                                    <p>Db</p>
                                    </td>
                                    <td>
                                    <p>-</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>Kr</p>
                                    </td>
                                    <td>
                                    <p>Kas di Kas Daerah</p>
                                    </td>
                                    <td>
                                    <p>Kr</p>
                                    </td>
                                    <td>
                                    <p>-</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>',
            'answer_b' => '<table border="1" cellpadding="1" cellspacing="1">
                            <tbody>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Jurnal LO dan Neraca</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Jurnal LRA</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>Db</p>
                                    </td>
                                    <td>
                                    <p>Utang Transfer Bagi Hasil</p>
                                    </td>
                                    <td>
                                    <p>Db</p>
                                    </td>
                                    <td>
                                    <p>Belanja bagi hasil</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>Kr</p>
                                    </td>
                                    <td>
                                    <p>Kas di Kas Daerah</p>
                                    </td>
                                    <td>
                                    <p>Kr</p>
                                    </td>
                                    <td>
                                    <p>Estimasi Perubahan SAL</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>',
            'answer_c' => '<table border="1" cellpadding="1" cellspacing="1">
                            <tbody>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Jurnal LRA</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Jurnal LO dan Neraca</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>Db</p>
                                    </td>
                                    <td>
                                    <p>Belanja bagi hasil</p>
                                    </td>
                                    <td>
                                    <p>Db</p>
                                    </td>
                                    <td>
                                    <p>Utang Transfer Bagi Hasil</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>Kr</p>
                                    </td>
                                    <td>
                                    <p>Estimasi Perubahan SAL</p>
                                    </td>
                                    <td>
                                    <p>Kr</p>
                                    </td>
                                    <td>
                                    <p>Kas di Kas Daerah</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>',
            'answer_d' => '<table border="1" cellpadding="1" cellspacing="1">
                            <tbody>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Jurnal LO dan Neraca</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>-</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>Db</p>
                                    </td>
                                    <td>
                                    <p>Beban Bagi Hasil</p>
                                    </td>
                                    <td>
                                    <p>Db</p>
                                    </td>
                                    <td>
                                    <p>-</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>Kr</p>
                                    </td>
                                    <td>
                                    <p>Utang Transfer Bagi Hasil</p>
                                    </td>
                                    <td>
                                    <p>Kr</p>
                                    </td>
                                    <td>
                                    <p>-</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>',
            'correct_answer' => 'b',
        ]);
        MultipleChoice::create([
            'question_type' => 'daerah',
            'question' => '<p>Pajak merupakan kontribusi wajib kepada negara yang tertuang oleh orang pribadi atau badan yang sifatnya memaksa berdasarkan UU. Beragam jenis pajak seperti pajak reklame, pajak hotel, hingga pajak air tanah digolong kedalam jenis pajak&hellip;</p>',
            'question_explanation' => '<p>Dalam UU No 28 Tahun 2009 pada BAB II Pasal 2 ayat 2 menjelaskan bahwa jenis pajak Kabupaten/ kota terdiri atas :Pajak Hotel, Pajak Restoran, Pajak Hiburan, Pajak Reklame, Pajak Penerangan Jalan, Pajak Mineral Bukan Logam dan Batuan, Pajak Parkir, Pajak Air Tanah, Pajak Sarang Burung Walet, Pajak Bumi dan Bangunan Pedesaan dan Perkotaan, Bea Perolehan Hak atas Tanah dan Bangunan.</p>',
            'answer_a' => '<p>Pajak Daerah 3T</p>',
            'answer_b' => '<p>Pajak Pusat&nbsp;</p>',
            'answer_c' => '<p>Pajak Daerah&nbsp;</p>',
            'answer_d' => '<p>Pajak Ibu Kota Negara&nbsp;</p>',
            'correct_answer' => 'c',
        ]);
        MultipleChoice::create([
            'question_type' => 'daerah',
            'question' => '<p>SKPD Dinas Pendidikan Ponrogo membeli aset tetap tanah senilai Rp165.000.000. Bagaimana kah penjurnalannya?</p>',
            'question_explanation' => '<p>Pencatatan dilakukan bukan hanya di Jurnal Finansial tetapi juga dilakukan pada jurnal Anggaran. Adapun D: Aset tetap, pada K: Utang kepada Pihak Ketiga merupakan penjurnalan ketika fungsi akuntansi terjadi pembelian aset tetap secara kredit di SKPD menggunakan SP2D LS dari Bendahara Umum Daerah (BUD)</p>',
            'answer_a' => '<table border="1" cellpadding="1" cellspacing="1">
                            <tbody>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Jurnal Finansial</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>-</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>Db</p>
                                    </td>
                                    <td>
                                    <p>Aset Tetap</p>
                                    </td>
                                    <td>
                                    <p>Db</p>
                                    </td>
                                    <td>
                                    <p>-</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>Kr</p>
                                    </td>
                                    <td>
                                    <p>Kas di Bendahara Pengeluaran</p>
                                    </td>
                                    <td>
                                    <p>Kr</p>
                                    </td>
                                    <td>
                                    <p>-</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>',
            'answer_b' => '<table border="1" cellpadding="1" cellspacing="1">
                            <tbody>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Jurnal Finansial dan Anggaran</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Jurnal Anggaran</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>Db</p>
                                    </td>
                                    <td>
                                    <p>Aset Tetap</p>
                                    </td>
                                    <td>
                                    <p>Db</p>
                                    </td>
                                    <td>
                                    <p>Belanja modal</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>Kr</p>
                                    </td>
                                    <td>
                                    <p>Kas di Bendahara Pengeluaran</p>
                                    </td>
                                    <td>
                                    <p>Kr</p>
                                    </td>
                                    <td>
                                    <p>Estimasi Perubahan SAL</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>',
            'answer_c' => '<table border="1" cellpadding="1" cellspacing="1">
                            <tbody>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>-</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Jurnal Anggaran</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>Db</p>
                                    </td>
                                    <td>
                                    <p>-</p>
                                    </td>
                                    <td>
                                    <p>Db</p>
                                    </td>
                                    <td>
                                    <p>Belanja modal</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>Kr</p>
                                    </td>
                                    <td>
                                    <p>-</p>
                                    </td>
                                    <td>
                                    <p>Kr</p>
                                    </td>
                                    <td>
                                    <p>Estimasi Perubahan SAL</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>',
            'answer_d' => '<table border="1" cellpadding="1" cellspacing="1">
                            <tbody>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Jurnal SKPD</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>-</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>Db</p>
                                    </td>
                                    <td>
                                    <p>Aset tetap</p>
                                    </td>
                                    <td>
                                    <p>Db</p>
                                    </td>
                                    <td>
                                    <p>-</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>Kr</p>
                                    </td>
                                    <td>
                                    <p>Utang Transfer Bagi Hasil</p>
                                    </td>
                                    <td>
                                    <p>Kr</p>
                                    </td>
                                    <td>
                                    <p>-</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>',
            'correct_answer' => 'b',
        ]);
        MultipleChoice::create([
            'question_type' => 'daerah',
            'question' => '<p>Seluruh pengeluaran kas yang digunakan untuk pinjaman kepada pihak ketiga, pembayaran kembali pokok pinjaman tahun tertentu, hingga pembentukan dana cadangan disebut sebagai&hellip;</p>',
            'question_explanation' => '<p>Pengeluaran pembiayaan adalah semua pengeluaran Rekening kas umum Daerah antara lain pemberian pinjaman kepada pihak ketiga, penyertaan modal pemerintah, pembayaran kembali pokok pinjaman dalam periode tahun anggaran tertentu, dan pembentukan dana cadangan</p>',
            'answer_a' => '<p>Pengeluaran Pembiayaan</p>',
            'answer_b' => '<p>Penerimaan Pembiayaan&nbsp;</p>',
            'answer_c' => '<p>Penyaluran Pembiayaan&nbsp;</p>',
            'answer_d' => '<p>Pendistribusian Pembiayaan&nbsp;</p>',
            'correct_answer' => 'a',
        ]);
        MultipleChoice::create([
            'question_type' => 'daerah',
            'question' => '<p>Alokasi sistematis atas nilai aset tetap yang dapat disusutkan ke umur ekonomis aset terkait merupakan pengertian dari&hellip;</p>',
            'question_explanation' => '<p>Pada PP No 71 Tahun 2010 bagian definisi (Lampiran I.02 PSAP 01- 2). Dijelaskan bahwa Penyusutan adalah alokasi yang sistematis atas nilai suatu aset tetap yang dapat disusutkan (depreciable assets) selama masa manfaat aset yang bersangkutan.</p>',
            'answer_a' => '<p>Persediaan</p>',
            'answer_b' => '<p>Pos Luar Biasa</p>',
            'answer_c' => '<p>Pembiayaan&nbsp;</p>',
            'answer_d' => '<p>Penyusutan&nbsp;</p>',
            'correct_answer' => 'd',
        ]);
        MultipleChoice::create([
            'question_type' => 'daerah',
            'question' => '<p>Tanah merupakan salah satu jenis aset tetap yang dalam PSAP 07 yang diartikan sebagai&hellip;</p>',
            'question_explanation' => '<p>Tanah yang dikelompokkan sebagai aset tetap ialah tanah 8 yang diperoleh dengan maksud untuk dipakai dalam kegiatan operasional 9 pemerintah dan dalam kondisi siap dipakai.</p>',
            'answer_a' => '<p>Aset yang diperoleh dengan maksud untuk dipakai dalam kegiatan operasional 9 pemerintah dan dalam kondisi siap dipakai. &nbsp;</p>',
            'answer_b' => '<p>Aset yang dibangun oleh pemerintah serta dimiliki dan/atau dikuasai oleh 19 pemerintah dan dalam kondisi siap dipakai. &nbsp;</p>',
            'answer_c' => '<p>Aset yang sedang dalam proses pembangunan namun pada tanggal laporan keuangan 26 belum selesai seluruhnya</p>',
            'answer_d' => '<p>Aset yang harus disajikan di pos aset 29 lainnya sesuai dengan nilai tercatatnya.</p>',
            'correct_answer' => 'a',
        ]);
        MultipleChoice::create([
            'question_type' => 'daerah',
            'question' => '<p>Menurut PP nomor 12 tahun 2019 pengeluaran atas beban APBD disebut sebagai&hellip;</p>',
            'question_explanation' => '<p>pada Halaman 44 ayat (4) Belanja tidak terduga sebagaimana dimaksud pada ayat (1) huruf c merupakan pengeluaran anggaran atas Beban APBD untuk keperluan darurat termasuk keperluan mendesak yang tidak dapat diprediksi sebelumnya.</p>',
            'answer_a' => '<p>Belanja Modal&nbsp;</p>',
            'answer_b' => '<p>Belanja Tidak Terduga&nbsp;</p>',
            'answer_c' => '<p>Belanja Operasional&nbsp;</p>',
            'answer_d' => '<p>Belanja Transfer&nbsp;</p>',
            'correct_answer' => 'b',
        ]);
        MultipleChoice::create([
            'question_type' => 'daerah',
            'question' => '<p>Apakah pengertian kas sesuai dalam PSAP 01 tentang Penyajian Laporan Keuangan</p>',
            'question_explanation' => '<p>Kas adalah uang tunai dan saldo simpanan di bank yang setiap saat dapat digunakan untuk membiayai kegiatan pemerintahan.</p>',
            'answer_a' => '<p>Kas adalah uang tunai dan saldo simpanan di bank yang setiap saat dapat digunakan untuk membiayai kegiatan pemerintahan.</p>',
            'answer_b' => '<p>Kas adalah saldo simpanan di bank untuk membiayai kegiatan pemerintahan.</p>',
            'answer_c' => '<p>Kas adalah uang tunai yang setiap saat dapat digunakan untuk membiayai kegiatan pemerintahan.</p>',
            'answer_d' => '<p>Kas adalah seluruh uang persediaan yang setiap saat dapat digunakan untuk membiayai kegiatan pemerintahan</p>',
            'correct_answer' => 'a',
        ]);
        MultipleChoice::create([
            'question_type' => 'daerah',
            'question' => '<p>Pengeluaran uang dari pemerintah daerah kepada pemerintah disebut sebagai&hellip;</p>',
            'question_explanation' => '<p>Belanja transfer sebagaimana dimaksud pada ayat (1) huruf d merupakan pengeluaran uang dari Pemerintah Daerah kepada Pemerintah Daerah lainnya dan/atau dari Pemerintah Daerah kepada pemerintah desa.</p>',
            'answer_a' => '<p>Belanja Pegawai&nbsp;</p>',
            'answer_b' => '<p>Belanja Operasional&nbsp;</p>',
            'answer_c' => '<p>Belanja Transfer&nbsp;</p>',
            'answer_d' => '<p>Belanja Barang dan Jasa&nbsp;</p>',
            'correct_answer' => 'c',
        ]);
        MultipleChoice::create([
            'question_type' => 'daerah',
            'question' => '<p>Standar Akuntansi Pemerintah (SAP) menyatakan bahwa transaksi dalam mata uang asing perlu dijabarkan jumlahnya berdasarkan kurs tengah bank sentral yang telah diatur dalam PSAP nomor&hellip;</p>',
            'question_explanation' => '<p>Paragraf 62 PSAP Nomor 02 tentang Laporan Realisasi Anggaran menyatakan: Transaksi dalam mata uang asing harus dibukukan dalam mata uang rupiah dengan menjabarkan jumlah mata uang asing tersebut menurut kurs tengah bank sentral pada tanggal transaksi.</p>',
            'answer_a' => '<p>Paragraf 80 Nomor 01 tentang Laporan Operasional&nbsp;</p>',
            'answer_b' => '<p>Paragarf 9 Nomor 01 tentang Laporan Posisi Keuangan&nbsp;</p>',
            'answer_c' => '<p>Paragraf 53 Nomor 02 tengang Laporan Realisasi Anggaran&nbsp;</p>',
            'answer_d' => '<p>Paragraf 62 Nomor 02 tengang Laporan Realisasi Anggaran</p>',
            'correct_answer' => 'd',
        ]);
        MultipleChoice::create([
            'question_type' => 'daerah',
            'question' => '<p>Manakah pernyataan yang benar atas pengertian belanja operasi dalam pengelolaan keuangan daerah ?&nbsp;</p>',
            'question_explanation' => '<p>Pada Pasal 55 Ayat 4 menyatakan bahwa Belanja operasi sebagaimana dimaksud pada ayat (1) huruf a merupakan pengeluaran anggaran untuk Kegiatan sehari-hari Pemerintah Daerah yang memberi manfaat jangka pendek.&nbsp;</p>',
            'answer_a' => '<p>pengeluaran anggaran untuk Kegiatan sehari-hari Pemerintah Daerah.</p>',
            'answer_b' => '<p>pengeluaran anggaran atas Beban APBD untuk keperluan darurat</p>',
            'answer_c' => '<p>pengeluaran anggaran untuk perolehan aset tetap dan aset lainnya&nbsp;</p>',
            'answer_d' => '<p>&nbsp;pengeluaran uang dari Pemerintah Daerah kepada Pemerintah Daerah lainnya</p>',
            'correct_answer' => 'a',
        ]);
        MultipleChoice::create([
            'question_type' => 'daerah',
            'question' => '<p>Pada saat SKPD melakukan pencairan belanja hibah diterbitkan SP2D LS dan BAST penyerahan kepada yang berhak menerima hibah dalam bentuk uang. Berdasarkan SP2D atau BAST hibah, PPK SKPD membuat jurnal sebagai berikut:</p>',
            'question_explanation' => '<p>Pencatatan dilakukan bukan hanya di Jurnal LO dan Neraca tetapi juga dilakukan pada jurnal LRA. Adapun untuk Jurnal LO dan Neraca yaitu D: Utang Belanja Hibah kepada &hellip; pada K: Persediaan untuk dijual/diserahkan kepada &hellip; adalah jurnal ketika SKPD melakukan penyerahan barang hibah kepada pihak ketiga, SKPD menerbitkan BAST penyerahan kepada yang berhak menerima hibah dalam bentuk barang.</p>',
            'answer_a' => '<table border="1" cellpadding="1" cellspacing="1">
                            <tbody>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Jurnal LO dan Neraca</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>-</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>Db</p>
                                    </td>
                                    <td>
                                    <p>Utang Belanja Hibah kepada ...</p>
                                    </td>
                                    <td>
                                    <p>Db</p>
                                    </td>
                                    <td>
                                    <p>-</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>Kr</p>
                                    </td>
                                    <td>
                                    <p>RK PPKD</p>
                                    </td>
                                    <td>
                                    <p>Kr</p>
                                    </td>
                                    <td>
                                    <p>-</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>',
            'answer_b' => '<table border="1" cellpadding="1" cellspacing="1">
                            <tbody>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Jurnal LO dan Neraca</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Jurnal LRA</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>Db</p>
                                    </td>
                                    <td>
                                    <p>Utang Belanja Hibah kepada ...</p>
                                    </td>
                                    <td>
                                    <p>Db</p>
                                    </td>
                                    <td>
                                    <p>Belanja Hibah kepada &hellip;</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>Kr</p>
                                    </td>
                                    <td>
                                    <p>RK PPKD</p>
                                    </td>
                                    <td>
                                    <p>Kr</p>
                                    </td>
                                    <td>
                                    <p>Estimasi Perubahan SAL</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>',
            'answer_c' => '<table border="1" cellpadding="1" cellspacing="1">
                            <tbody>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>-</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Jurnal LRA</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>Db</p>
                                    </td>
                                    <td>
                                    <p>-</p>
                                    </td>
                                    <td>
                                    <p>Db</p>
                                    </td>
                                    <td>
                                    <p>Belanja Hibah kepada &hellip;</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>Kr</p>
                                    </td>
                                    <td>
                                    <p>-</p>
                                    </td>
                                    <td>
                                    <p>Kr</p>
                                    </td>
                                    <td>
                                    <p>Estimasi Perubahan SAL</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>',
            'answer_d' => '<table border="1" cellpadding="1" cellspacing="1">
                            <tbody>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Jurnal LO dan Neraca</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Jurnal LRA</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>Db</p>
                                    </td>
                                    <td>
                                    <p>Utang Belanja Hibah kepada ...</p>
                                    </td>
                                    <td>
                                    <p>Db</p>
                                    </td>
                                    <td>
                                    <p>Belanja Hibah kepada &hellip;</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>Kr</p>
                                    </td>
                                    <td>
                                    <p>Persediaan untuk dijual/diserahkan kepada &hellip;</p>
                                    </td>
                                    <td>
                                    <p>Kr</p>
                                    </td>
                                    <td>
                                    <p>Estimasi Perubahan SAL</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>',
            'correct_answer' => 'b',
        ]);
        MultipleChoice::create([
            'question_type' => 'daerah',
            'question' => '<p>Dalam sistem akuntansi beban dan belanja di SKPD, siapakah yang menerima dan menyetorkan atas pengembalian belanja atas koreksi atau hasil pemeriksaan internal dan eksternal; serta menyiapkan dokumen surat tanda setoran atas pengembalian belanja akibat koreksi atau hasil pemeriksaan internal dan eksternal?</p>',
            'question_explanation' => '<p>Dalam sistem akuntansi beban dan belanja, Bendahara Pengeluaran SKPKD, memiliki tugas untukmenerima dan menyetorkan atas pengembalian belanja atas koreksi atau hasil pemeriksaan internal dan eksternal; serta menyiapkan dokumen surat tanda setoran atas pengembalian belanja akibat koreksi atau hasil pemeriksaan internal dan eksternal</p>',
            'answer_a' => '<p>Fungsi akuntansi SKPD</p>',
            'answer_b' => '<p>Kuasa PA</p>',
            'answer_c' => '<p>PPK SKPD</p>',
            'answer_d' => '<p>Bendahara Pengeluaran SKPD/ Bendahara Pengeluaran Pembantu SKPD</p>',
            'correct_answer' => 'd',
        ]);
        MultipleChoice::create([
            'question_type' => 'daerah',
            'question' => '<p>Pendapatan transfer pemerintah daerah diakui saat diterbitkannya dokumen sumber seperti:</p>',
            'question_explanation' => '<p>PMK/Perpres/Dokumen yang dipsersamakan dan Nota Kredit dari Bank/bukti memorial merupakan dokumen sumber atas pengakuan pendapatan transfer pemerintah pusat</p>',
            'answer_a' => '<p>PMK/Perpres/Dokumen yang dipsersamakan dan Nota Kredit dari Bank/bukti memorial</p>',
            'answer_b' => '<p>Keputusan Kepala Daerah/PMK/Dokumen yang dipsersamakan dan Nota Perjanjian Hibah Daerah/bukti memorial</p>',
            'answer_c' => '<p>Nota Kredit dari Bank/bukti memorial</p>',
            'answer_d' => '<p>Nota Perjanjian Hibah Daerah/ Dokumen yang dipsersamakan /bukti memorial</p>',
            'correct_answer' => 'b',
        ]);
        MultipleChoice::create([
            'question_type' => 'daerah',
            'question' => '<p>Pengeluaran kas yang dilakukan oleh BUD/Kuasa BUD atas pembayaran dan tembusan dokumen telah diterima dan diverifikasi oleh serta disahkan oleh pengguna anggaran/PPKD, jurnalnya adalah</p>',
            'question_explanation' => '<p>Ketika muncul sumber dokumen dari Kuasa BUD, maaka akuntansi melakukan jurnal Beban pada Utang Beban. Sementara itu, ketika dokumen tersebut disahkan oleh pengguna anggaran maka penjurnalannya adalah &ldquo;Utang beban&rdquo; pada &ldquo;Kas di Kas Daerah&rdquo;</p>',
            'answer_a' => '<table border="1" cellpadding="1" cellspacing="1">
                            <tbody>
                                <tr>
                                    <td>
                                    <p>Tanggal</p>
                                    </td>
                                    <td>
                                    <p>Keterangan</p>
                                    </td>
                                    <td>
                                    <p>Debit</p>
                                    </td>
                                    <td>
                                    <p>Kredit</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>xxx</p>
                                    </td>
                                    <td>
                                    <p>Belanja</p>
                                    </td>
                                    <td>
                                    <p>xxx</p>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Kas di kas daerah</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>xxx</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>',
            'answer_b' => '<table border="1" cellpadding="1" cellspacing="1">
                            <tbody>
                                <tr>
                                    <td>
                                    <p>Tanggal</p>
                                    </td>
                                    <td>
                                    <p>Keterangan</p>
                                    </td>
                                    <td>
                                    <p>Debit</p>
                                    </td>
                                    <td>
                                    <p>Kredit</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>xxx</p>
                                    </td>
                                    <td>
                                    <p>Beban</p>
                                    </td>
                                    <td>
                                    <p>xxx</p>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Utang Beban</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>xxx</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>',
            'answer_c' => '<table border="1" cellpadding="1" cellspacing="1">
                            <tbody>
                                <tr>
                                    <td>
                                    <p>Tanggal</p>
                                    </td>
                                    <td>
                                    <p>Keterangan</p>
                                    </td>
                                    <td>
                                    <p>Debit</p>
                                    </td>
                                    <td>
                                    <p>Kredit</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>xxx</p>
                                    </td>
                                    <td>
                                    <p>Beban</p>
                                    </td>
                                    <td>
                                    <p>xxx</p>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Perubahan SAL</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>xxx</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>',
            'answer_d' => '<table border="1" cellpadding="1" cellspacing="1">
                            <tbody>
                                <tr>
                                    <td>
                                    <p>Tanggal</p>
                                    </td>
                                    <td>
                                    <p>Keterangan</p>
                                    </td>
                                    <td>
                                    <p>Debit</p>
                                    </td>
                                    <td>
                                    <p>Kredit</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>xxx</p>
                                    </td>
                                    <td>
                                    <p>Belanja</p>
                                    </td>
                                    <td>
                                    <p>xxx</p>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Perubahan SAL</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>xxx</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>',
            'correct_answer' => 'd',
        ]);
        MultipleChoice::create([
            'question_type' => 'daerah',
            'question' => '<p>Kas yang bersumber dari transfer diakui pada saat &hellip; dengan jurnal &hellip;</p>',
            'question_explanation' => '<p>Transfer yang dilakukan oleh pemerintah daerah merupakan transfer pendapatan bagi hasil pendapatan dan transfer bantuan keuangan kepada daerah otonom di bawahnya seperti kabupaten/Kabupaten serta pemerintah desa di wilayah provinsi. Berdasarkan surat ketetapan tentang transfer yang terkait, membuat bukti memorial terkait pengakuan beban transfer untuk diotorisasi oleh PPKD. Berdasarkan bukti memorial tersebut melakukan pencatatan pengakuan beban dengan jurnal &ldquo;Beban transfer&rdquo; di debit dan &ldquo;Utang Beban Transfer&rdquo; di kredit.&nbsp;</p>

            <p>Selanjutnya dilaksanakan proses penatausahaan untuk pembayaran beban transfer tersebut mulai dari pengajuan SPP, pembuatan SPM hingga penerbitan SP2D. Berdasarkan SP2D tersebut akan mencatat pengeluaran kas yang juga merupakan penghapusan utang beban transfer, dengan jurnal &ldquo;Utang beban transfer&rdquo; di debit dan &ldquo;Kas di Kas Daerah&rdquo; di kredit.</p>',
            'answer_a' => '<p>Transfer dilakukan; &ldquo;Beban transfer&rdquo; di debit dan &ldquo;Utang Beban Transfer&rdquo; di kredit</p>',
            'answer_b' => '<p>Surat ketetapan terkait dengan bukti memorial terotorisasi oleh PPKD; Beban transfer&rdquo; di debit dan &ldquo;Utang Beban Transfer&rdquo; di kredit</p>',
            'answer_c' => '<p>Penerbitan SP2D; &ldquo;Utang beban transfer&rdquo; di debit dan &ldquo;Kas di Kas Daerah&rdquo; di kredit.</p>',
            'answer_d' => '<p>Pengajuan SPP hingga pembuatan SPM; &ldquo;Utang beban transfer&rdquo; di debit dan &ldquo;Kas di Kas Daerah&rdquo; di kredit.</p>',
            'correct_answer' => 'b',
        ]);
        MultipleChoice::create([
            'question_type' => 'daerah',
            'question' => '<p>Pajak Perdagangan Internasional adalah semua penerimaan negara yang bersumber dari&hellip;</p>',
            'question_explanation' => '<p>Pasal 1 ayat 5 mengungkapkan bahwa Pendapatan Pajak Perdagangan Internasional adalah semua penerimaan negara yang berasal dari pendapatan bea masuk dan pendapatan bea keluar</p>',
            'answer_a' => '<p>Pendapatan Hibah dan PAD&nbsp;</p>',
            'answer_b' => '<p>Pendapatan beas masuk dan pendapatan bea keluar&nbsp;</p>',
            'answer_c' => '<p>Pendapatan Transfer dari pusat dan Lain - lain PAD yang sah&nbsp;</p>',
            'answer_d' => '<p>Pendapatan LO dan Pendapatan LRA&nbsp;</p>',
            'correct_answer' => 'b',
        ]);
        MultipleChoice::create([
            'question_type' => 'daerah',
            'question' => '<p>Apabila suatu transaksi dalam mata uang asing timbul dan diselesaikan dalam periode yang sama, maka seluruh selisih kurs tersebut diakui dalam&hellip;</p>',
            'question_explanation' => '<p>Apabila suatu transaksi dalam mata uang asing timbul dan &nbsp;diselesaikan dalam periode yang sama, maka seluruh selisih kurs tersebut diakui &nbsp;pada periode tersebut.&nbsp;</p>',
            'answer_a' => '<p>Periode yang akan datang</p>',
            'answer_b' => '<p>Periode yang selanjutnya&nbsp;</p>',
            'answer_c' => '<p>Periode yang sama&nbsp;</p>',
            'answer_d' => '<p>Periode 1 masa sebelumnya&nbsp;</p>',
            'correct_answer' => 'c',
        ]);
        MultipleChoice::create([
            'question_type' => 'daerah',
            'question' => '<p>Penerimaan pinjaman, penjualan obligasi pemerintah, dan hasil privatisasi merupakan komponen penerimaan pembiayaan yang diakui pada saat&hellip;</p>',
            'question_explanation' => '<p>Penerimaan pembiayaan adalah semua penerimaan Rekening Kas Umum Daerah antara lain berasal dari penerimaan pinjaman, penjualan obligasi pemerintah, hasil privatisasi perusahaan daerah, penerimaan kembali pinjaman yang diberikan kepada fihak ketiga, penjualan investasi permanen lainnya, dan pencairan dana cadangan yang &nbsp;diakui pada saat <strong>diterima pada Rekening Kas Umum Negara/Daerah</strong></p>',
            'answer_a' => '<p>Diterima pada Rekening Kas Umum Negara/Daerah</p>',
            'answer_b' => '<p>Dikeluarkan pada Rekening Kas Umum Negara/Daerah&nbsp;</p>',
            'answer_c' => '<p>Ditangguhkan Dikeluarkan pada Rekening Kas Umum Negara/Daerah</p>',
            'answer_d' => '<p>Diutangkan pada Rekening Kas Umum Negara/Daerah&nbsp;</p>',
            'correct_answer' => 'a',
        ]);
        MultipleChoice::create([
            'question_type' => 'daerah',
            'question' => '<p>Manakah PSAP yang mengatur tentang aset moneter &amp; kewajiban dalam mata yang asing yg mengatur mengenai kurs atas pembiayaan?</p>',
            'question_explanation' => '<p>PSAP Nomor 1 tentang Penyajian Laporan Keuangan Paragraf 68 dan 77 mengatur 23 bahwa aset moneter dan kewajiban dalam mata uang asing dijabarkan dan dilaporkan 24 dalam mata uang Rupiah dengan menggunakan kurs tengah bank sentral.&nbsp;</p>',
            'answer_a' => '<p>PSAP Nomor 4 paragraf 65 dan 70&nbsp;</p>',
            'answer_b' => '<p>PSAP Nomor 3 paragraf 68 dan 76</p>',
            'answer_c' => '<p>PSAP Nomor 2 paragraf 69 dan 77&nbsp;</p>',
            'answer_d' => '<p>PSAP Nomor 1 paragraf 68 dan 77&nbsp;</p>',
            'correct_answer' => 'd',
        ]);
        MultipleChoice::create([
            'question_type' => 'daerah',
            'question' => '<p>Balasan jasa yang disalurkan bank kepada nasabah (pemerintah daerah) yang telah memanfaatkan salah satu fiturnya melalui simpanan giro disebut sebagai &hellip;</p>',
            'question_explanation' => '<p>Dinyatakan bahwa Suku Bunga Bank adalah Balas jasa yang disalurkaan bank kepada nasabah yang membeli datau menjual produknya&nbsp;</p>',
            'answer_a' => '<p>Bilyet Giro&nbsp;</p>',
            'answer_b' => '<p>Rekening Kas Giro&nbsp;</p>',
            'answer_c' => '<p>Suku Bunga Bank&nbsp;</p>',
            'answer_d' => '<p>Cross Cheque</p>',
            'correct_answer' => 'c',
        ]);
        MultipleChoice::create([
            'question_type' => 'daerah',
            'question' => '<p>Kondisi keumungkinan timbulnya kewajiban akibat peristiwa masa lalu dan keberadaan tidak sepenuhnya berada pada kendali entitas disebut sebagai&hellip;</p>',
            'question_explanation' => '<p>Kewajiban Kontijensi merupakan Kewajiban yang mungkin timbul akibat peristiwa masa lalu dan keberadaannya &nbsp;menjadi pasti dengan terjadi atau tidak terjadinya satu atau lebih peristiwa di masa &nbsp;yang akan datang yang tidak sepenuhnya berada dalam kendali entitas</p>',
            'answer_a' => '<p>Kewajiban konstruksi&nbsp;</p>',
            'answer_b' => '<p>Kewajiban Kontijensi&nbsp;</p>',
            'answer_c' => '<p>Kewajiban Bunga&nbsp;</p>',
            'answer_d' => '<p>Kewajiban Konstruktif</p>',
            'correct_answer' => 'b',
        ]);
        MultipleChoice::create([
            'question_type' => 'daerah',
            'question' => '<p>Disamping memiliki tugas untuk mengelola &nbsp;Uang Persediaan (UP) bendahara pengeluaran juga memiliki wewenang untuk mengelola&hellip;</p>',
            'question_explanation' => '<p>Pasal 14 ayat (2) Bendahara Pengeluaran berwewenang untuk mengajukan&nbsp;SPP-UP, SPP-GU, SPP-TU, dan SPP-LS beserta bukti kelengkapannya</p>',
            'answer_a' => '<p>Uang Milik Masyarakat&nbsp;</p>',
            'answer_b' => '<p>Dana Hibah&nbsp;</p>',
            'answer_c' => '<p>Guna Uang, Tambahan Uang, dan Langsung&nbsp;</p>',
            'answer_d' => '<p>Langsung, Tunjangan Gaji, Uang Muka</p>',
            'correct_answer' => 'c',
        ]);
        MultipleChoice::create([
            'question_type' => 'daerah',
            'question' => '<p>Transaksi kas dapat dikelompokkan menjadi dua bagian yaitu&hellip;</p>',
            'question_explanation' => '<p>Transaksi kas dapat dikelompokkan menjadi dua bagian yaitu transaksi penerimaan kas dan transaksi pengeluaran kas</p>',
            'answer_a' => '<p>Transaksi Penerimaan Kas dan Transaksi Pengeluaran Kas Tambahan</p>',
            'answer_b' => '<p>Transaksi Perhutangan Kas dan Transaksi Penangguhan Kas&nbsp;</p>',
            'answer_c' => '<p>Transaksi Pengkreditan Kas dan Transaksi Pengeluaran Kas&nbsp;</p>',
            'answer_d' => '<p>Transaksi Penerimaan Kas dan Transaksi Pengeluaran Kas&nbsp;</p>',
            'correct_answer' => 'd',
        ]);
        MultipleChoice::create([
            'question_type' => 'daerah',
            'question' => '<p>Proses pencocokan data dan informasi keuangan Pemerintah Umum dengan sumber data counter party transaksi dan posisi keuangannya yang berasal dari sistem/subsistem yang berbeda disebut dengan proses&hellip;.</p>',
            'question_explanation' => '<p>Pada Pasal 1 Ayat (1) &nbsp;Rekonsiliasi adalah proses pencocokan data dan informasi keuangan Pemerintah Umum dengan sumber data counterparty transaksi dan posisi keuangannya yang berasal dari sistem/subsistem yang berbeda.</p>',
            'answer_a' => '<p>Pemeriksaan&nbsp;</p>',
            'answer_b' => '<p>Rekonsiliasi&nbsp;</p>',
            'answer_c' => '<p>Penghapusan&nbsp;</p>',
            'answer_d' => '<p>Penyesuaian</p>',
            'correct_answer' => 'b',
        ]);
        MultipleChoice::create([
            'question_type' => 'daerah',
            'question' => '<p>Pada UU Nomor 28 Tahun 2009, pajak provinsi terdiri dari &hellip;</p>',
            'question_explanation' => '<p>Pada BAB II, pasal 2 ayat (1) : Jenis Pajak provinsi terdiri atas: Pajak Kendaraan Bermotor; &nbsp;Bea Balik Nama Kendaraan Bermotor; Pajak Bahan Bakar Kendaraan Bermotor;&nbsp;Pajak Air Permukaan; dan &nbsp;Pajak Rokok</p>',
            'answer_a' => '<p>Pajak Air Permukaan , Pajak Kendaraan Bermotor; &nbsp;Bea Balik Nama Kendaraan Bermotor; Pajak Bahan Bakar Kendaraan Bermotor; dan Pajak Rokok.</p>',
            'answer_b' => '<p>Pajak Air Permukaan , Pajak Kendaraan Bermotor; PBBP2; Pajak Bahan Bakar Kendaraan Bermotor; dan Pajak Rokok.</p>',
            'answer_c' => '<p>Pajak Air Permukaan , Pajak Kendaraan Bermotor; &nbsp;Bea Balik Nama Kendaraan Bermotor; Pajak Bahan Bakar Kendaraan Bermotor; dan Pajak Rokok.</p>',
            'answer_d' => '<p>Pajak Air Permukaan , Pajak Kendaraan Bermotor; &nbsp;Bea Balik Nama Kendaraan Bermotor; Pajak Bahan Bakar Kendaraan Bermotor; dan Pajak Air Tanah.</p>',
            'correct_answer' => 'c',
        ]);
        MultipleChoice::create([
            'question_type' => 'daerah',
            'question' => '<p>Catatan atas Laporan Keuangan akan menyajikan sejumlah hal, kecuali&hellip;</p>',
            'question_explanation' => '<p>Pada bagian Catatan Atas Laporan Keuangan menyatakan bahwa Catatan atas &nbsp;Laporan Keuangan mengungkapkan/menyajikan/menyediakan hal-hal sebagai &nbsp;berikut: Mengungkapkan informasi Umum tentang Entitas Pelaporan dan Entitas Akuntansi, Menyajikan ikhtisar pencapaian target keuangan selama tahun pelaporan berikut kendala dan hambatan yang dihadapi dalam pencapaian target, Menyajikan informasi tentang kebijakan fiskal/keuangan dan ekonomi makro, Menyajikan rincian dan penjelasan masing-masing pos yang disajikan pada &nbsp;lembar muka laporan keuangan</p>',
            'answer_a' => '<p>Mengungkapkan informasi Umum tentang Entitas Pelaporan dan Entitas Akuntansi</p>',
            'answer_b' => '<p>Menyajikan ikhtisar pencapaian target keuangan selama tahun pelaporan berikut kendala dan hambatan yang dihadapi dalam pencapaian target</p>',
            'answer_c' => '<p>Menyajikan informasi tentang kebijakan fiskal/keuangan dan ekonomi mikro&nbsp;</p>',
            'answer_d' => '<p>Menyajikan rincian dan penjelasan masing-masing pos yang disajikan pada lembar muka laporan keuangan</p>',
            'correct_answer' => 'c',
        ]);
        MultipleChoice::create([
            'question_type' => 'daerah',
            'question' => '<p>Jalan, Irigasi, dan Jaringan diklasifikasikan kedalam aset tetap dan diatur pada PSAP&hellip;</p>',
            'question_explanation' => '<p>Aset tetap diklasifikasikan berdasarkan kesamaan dalam sifat atau fungsinya dalam aktivitas operasi entitas. Klasifikasi aset tetap adalah sebagai berikut: 4. Jalan, irigasi, dan Jaringan&nbsp;</p>',
            'answer_a' => '<p>04</p>',
            'answer_b' => '<p>05</p>',
            'answer_c' => '<p>06</p>',
            'answer_d' => '<p>07</p>',
            'correct_answer' => 'd',
        ]);
        MultipleChoice::create([
            'question_type' => 'daerah',
            'question' => '<p>Dasar hukum pendapatan hibah berbasis kah ialah&hellip;</p>',
            'question_explanation' => '<p>Pendapat hibah basis kas akan menjadi salah satu komponen yang dijelaskan dalam peraturan daerah salah satunya pada PERWAL Nomor 16 tahun 2021 &nbsp;tentang Belanja Hibah Berupa Uang&nbsp;</p>',
            'answer_a' => '<p>Undang - Undang Nomor 17 Tahun 2003 tentang Keuangan Negara&nbsp;</p>',
            'answer_b' => '<p>Undang - Undang Nomor 20 Tahun 2011 tentang Hibah Daerah</p>',
            'answer_c' => '<p>Peraturan Pemerintah Nomor 16 tahun 2016 &nbsp;tentang Hibah Keuangan</p>',
            'answer_d' => '<p>Peraturan Menteri Keuangan Nomor 7 Tahun 2018 tentang Pengelolaan HIbah</p>',
            'correct_answer' => 'c',
        ]);
        MultipleChoice::create([
            'question_type' => 'daerah',
            'question' => '<p>Kepala Daerah memiliki wewenang dalam memegang kekuasaan pengelolaan keuangan pemerintah daerah telah dijelaskan dalam peraturan&hellip;</p>',
            'question_explanation' => '<p>Pada BAB II Bagian Kesatu pasal 4 ayat 1 dijelaskan bahwa Kepala Daerah selaku pemegang kekuasaan Pengelolaan Keuangan Daerah dan mewakili Pemerintah Daerah dalam kepemilikan kekayaan daerah yang dipisahkan</p>',
            'answer_a' => '<p>Peraturan Pemerintah Nomor 12 Tahun 2021</p>',
            'answer_b' => '<p>Peraturan Pemerintah Nomor 71 Tahun 2010</p>',
            'answer_c' => '<p>Peraturan Pemerintah Nomor 12 tahun 2019&nbsp;</p>',
            'answer_d' => '<p>Peraturan Pemerintah Nomor 28 tahun 2009&nbsp;</p>',
            'correct_answer' => 'c',
        ]);
        MultipleChoice::create([
            'question_type' => 'daerah',
            'question' => '<p>Manakah metode penilaian investasi pemerintah bagi investasi jangka pendek/panjang ?&nbsp;</p>',
            'question_explanation' => '<p>Penilaian investasi pemerintah dilakukan dengan tiga metode yaitu: (a) Metode biaya; (b) metode ekuitas; (3) Metode niai bersih yang dapat direalisasikan&nbsp;</p>',
            'answer_a' => '<p>Metode garis lurus, metode nilai suust, metode nilai ekonomi&nbsp;</p>',
            'answer_b' => '<p>Metode biaya, metode ekuitas, dan metode nilai bersih yang dapat direalisasikan&nbsp;</p>',
            'answer_c' => '<p>Metode FIFO, LIFO, Average&nbsp;</p>',
            'answer_d' => '<p>Metode Saldo Menurun, metode biaya, dan metode ekuitas&nbsp;</p>',
            'correct_answer' => 'b',
        ]);
        MultipleChoice::create([
            'question_type' => 'daerah',
            'question' => '<p>Manakah pernyataan yang benar mengenai pengakuan pendapatan hibah berbasis akrual ?&nbsp;</p>',
            'question_explanation' => '<p>Basis akrual untuk LO mengandung arti bahwa Pendapatan Hibah-LO diakui pada saat timbulnya hak atas Pendapatan Hibah tersebut atau terdapat aliran masuk sumber daya ekonomi.&nbsp;</p>',
            'answer_a' => '<p>Diakui saat terdapat aliran masuk sumber daya ekonomi</p>',
            'answer_b' => '<p>Dicatat penurunan nilai kekayaan bersih&nbsp;</p>',
            'answer_c' => '<p>Diakui saat kas dikeluarkan dari RKUN</p>',
            'answer_d' => '<p>Dicatat saat kas atau setara kas diterima atau dibayar</p>',
            'correct_answer' => 'a',
        ]);
        MultipleChoice::create([
            'question_type' => 'daerah',
            'question' => '<p>Dalam ketentuan aset tetap, gadung dan bangunan didefinisikan sebagai&hellip;</p>',
            'question_explanation' => '<p>Dalam Kebijakan Akuntan No.09 nomor 2 tentang klasifikasi. Gedung dan bangunan memiliki definisi &ldquo;Gedung dan bangunan mencakup seluruh gedung dan bangunan yang diperoleh dengan maksud untuk dipakai dalam kegiatan operasional pemerintah dan dalam kondisi siap dipakai&rdquo;.</p>',
            'answer_a' => '<p>Gedung dan bangunan mencakup seluruh gedung dan bangunan yang diperoleh dengan maksud untuk dipakai dalam kegiatan operasional pemerintah dan dalam kondisi siap dipakai dan dilaporkan dalam LRA.</p>',
            'answer_b' => '<p>Gedung dan bangunan mencakup seluruh gedung dan bangunan yang diperoleh dengan maksud untuk dipakai dalam kegiatan operasional pemerintah dan dalam kondisi siap dipakai dan dilaporkan dalam LAK.</p>',
            'answer_c' => '<p>Gedung dan bangunan mencakup seluruh gedung dan bangunan yang diperoleh dengan maksud untuk dipakai dalam kegiatan operasional pemerintah dan dalam kondisi siap dipakai.</p>',
            'answer_d' => '<p>Gedung dan bangunan mencakup seluruh gedung dan bangunan yang diperoleh dengan maksud untuk dipakai dalam kegiatan operasional pemerintah dan dalam kondisi siap dipakai dan dilaporkan dalam LO.</p>',
            'correct_answer' => 'c',
        ]);
        MultipleChoice::create([
            'question_type' => 'daerah',
            'question' => '<p>Berikut ini merupakan sumber Hibah daerah dari pemerintah melalui APBN dalam transaksi hibah, kecuali&hellip;</p>',
            'question_explanation' => '<p>Hibah daerah dari pemerintah yang bersumber dari APBN meliputi Penerimaan dalam negeri, hibah luar negeri, peminjaman luar negeri</p>',
            'answer_a' => '<p>Penerimaan Dalam Negeri&nbsp;</p>',
            'answer_b' => '<p>Hibah Luar Negeri</p>',
            'answer_c' => '<p>Peminjaman Dalam Negeri&nbsp;</p>',
            'answer_d' => '<p>Peminjaman Luar Negeri&nbsp;</p>',
            'correct_answer' => 'c',
        ]);
        MultipleChoice::create([
            'question_type' => 'daerah',
            'question' => '<p>Manakah diantara beberapa jenis aset dibawah ini yang diklasifikasikan menjadi aset tidak berwujud :&nbsp;</p>
                <ol>
                    <li>Lisensi&nbsp;</li>
                    <li>Pengerjaan Konstruksi&nbsp;</li>
                    <li>Hak Cipta&nbsp;</li>
                    <li>Hasil kajian/pengembangan yang memberikan manfaatjangka panjang</li>
                </ol>',
            'question_explanation' => '<p>Jenis - jenis aset tidak berwujud doantaranya lisensi, Hak Cipta dan Hak Paten, Hasil kajian/pengembangan yang memberikan manfaat jangka panjang, ATB yang mempunyai nilai sejarah/budaya; dan &nbsp;ATB dalam Pengerjaan.&nbsp;</p>',
            'answer_a' => '<p>(2) dan (4)&nbsp;</p>',
            'answer_b' => '<p>(1), (2), dan (4)</p>',
            'answer_c' => '<p>(1) dan (4)</p>',
            'answer_d' => '<p>(1),(3),dan (4)&nbsp;</p>',
            'correct_answer' => 'd',
        ]); 
        MultipleChoice::create([
            'question_type' => 'daerah',
            'question' => '<p>Pedoman teknis Pengelolaan Keuangan Daerah&nbsp;telah diatur pada peraturan&hellip;</p>',
            'question_explanation' => '<p>Mencabut Permendagri No.99 tahun 2019 tentang Perubahan Kelima atas Peraturan Menteri Dalam Negeri Nomor 32 Tahun 2011 tentang Pedoman Pemberian Hibah dan Bantuan Sosial yang Bersumber dari Anggaran Pendapatan dan Belanja Daerah saat ini peraturan mengenai teknis pengelolaan keuangan daerah diatur pada Permendagri Nomor 77 Tahun 2020&nbsp;</p>',
            'answer_a' => '<p>Permendagri Nomor 77 Tahun 2020&nbsp;</p>',
            'answer_b' => '<p>Permendagri Nomor 14 Tahun 2016</p>',
            'answer_c' => '<p>Peraturan Pemerintah Nomor 71 Tahun 2010</p>',
            'answer_d' => '<p>Peraturan Pemerintah Nomor 12 tahun 2021&nbsp;</p>',
            'correct_answer' => 'a',
        ]); 
        MultipleChoice::create([
            'question_type' => 'daerah',
            'question' => '<p>Pendapatan hibah menurut sumbernya terbagi menjadi Pendapatan Hibah Dalam Negeri dan Pendapatan Hibah Luar Negeri. Pendapatan Hibah Luar Negeri dapat bersumber dari</p>

                        <p>a) Negara asing;</p>
                        
                        <p>b) Lembaga donor multilateral;</p>
                        
                        <p>c) Lembaga keuangan asing; dan</p>
                        
                        <p>d) Lembaga non keuangan asing.</p>
                        
                        <p>Adapun contoh pendapatan hibah luar negeri dapat juga ditinjau menurut bentuknya, antara lain...</p>',
            'question_explanation' => '<p>Menurut bentuknya, pendapatan hibah dapat diterima</p>

                <ul>
                    <li>Dalam bentuk uang berupa rupiah, valuta asing atau devisa yang dirupiahkan;&nbsp;</li>
                    <li>Dalam bentuk surat berharga</li>
                    <li>Dalam bentuk barang;</li>
                    <li>Dalam bentuk jasa termasuk asistensi, tenaga ahli, beasiswa dan pelatihan.</li>
                </ul>
                
                <p>Adapaun Pendapatan Hibah baik LRA maupun LO disajikan dalam mata uang rupiah. Realisasi Pendapatan Hibah dalam mata uang asing yang pencairannya melalui Kuasa BUN dijabarkan dan dinyatakan dalam mata uang Rupiah menggunakan kurs tengah Bank Indonesia pada tanggal diterimanya hibah di RKUN atau Reksus. Selain disajikan dalam LRA dan LO, Pendapatan Hibah juga harus diungkapkan sedemikian rupa dalam CaLK sehingga dapat memberikan semua informasi yang relevan terkait Pendapatan Hibah tersebut</p>',
            'answer_a' => '<p>Dalam bentuk uang berupa rupiah, valuta asing atau devisa yang dirupiahkan</p>',
            'answer_b' => '<p>Dalam bentuk surat berharga atau pun dalam bentuk barang</p>',
            'answer_c' => '<p>Dalam bentuk jasa termasuk asistensi, tenaga ahli, beasiswa dan pelatihan</p>',
            'answer_d' => '<p>Semua Jawaban Benar</p>',
            'correct_answer' => 'd',
        ]); 
        MultipleChoice::create([
            'question_type' => 'daerah',
            'question' => '<p>Metode penilaian investasi pemenrintah dengan metode ekuitas jika kepemilikan pemerintah ada pada presentase...</p>',
            'question_explanation' => '<p>Bagian Keempat, Metode Penilaian Investasi, Pasal 10</p>

                <ol>
                    <li>Investasi dilakukan dengan metode sebagai berikut:
                    <ul>
                        <li>Metode Biaya;</li>
                        <li>Metode Ekuitas; dan</li>
                        <li>Metode Nilai Bersih yang Dapat Direalisasikan.</li>
                    </ul>
                    </li>
                    <li>Metode Biaya sebagaimana dimaksud pada ayat (1) huruf a digunakan dalam hal kepemilikan pemerintah kurang dari 20% (dua puluh perseratus).</li>
                    <li>Metode ekuitas sebagaimana dimaksud pada ayat (1) huruf b digunakan dalam hal:
                    <ul>
                        <li>kepemilikan pemerintah sama dengan 20% (dua puluh perseratus) sampai dengan 50% (lima puluh perseratus);</li>
                        <li>kepemilikan pemerintah kurang dari 20% (dua puluh perseratus) tetapi memiliki pengaruh yang signifikan; atau</li>
                        <li>kepemilikan pemerintah lebih dari 50% (lima puluh perseratus).</li>
                    </ul>
                    </li>
                    <li>Metode Nilai Bersih yang Dapat Direalisasikan sebagaimana dimaksud pada ayat (1) huruf c digunakan dalam hal kepemilikan pemerintah bersifat Non-Permanen.</li>
                    <li>Dalam kondisi tertentu pemilihan metode penilaian Investasi ditentukan oleh tingkat pengaruh atau pengendalian terhadap investee.</li>
                </ol>',
            'answer_a' => '<p>Kepemilikan pemerintah kurang dari 20%</p>',
            'answer_b' => '<p>Kepemilikan pemerintah sama dengan 20%-50%</p>',
            'answer_c' => '<p>Kepemilikan pemerintah lebih dari 50%&nbsp;</p>',
            'answer_d' => '<p>Semua benar kecuali A</p>',
            'correct_answer' => 'd',
        ]); 
        MultipleChoice::create([
            'question_type' => 'daerah',
            'question' => '<p>Akuntansi pengeluaran kas pada SKPD meliputi akuntansi untuk belanja yang dapat melalui mekanisme, antara lain, kecuali...</p>',
            'question_explanation' => '<p>Akuntansi pengeluaran kas pada SKPD meliputi serangkaian proses, baik manual maupun terkomputerisasi, mulai dari pencatatan, penggolongan, sampai peringkasan transaksi dan/atau kejadian keuangan serta pelaporan keuangan yang berkaitan dengan pengeluaran kas belanja SKPD. Akuntansi pengeluaran kas pada SKPD meliputi akuntansi untuk belanja melalui mekanisme Uang Persediaan (UP)/Ganti Uang (GU)/Tambah Uang (TU) dan belanja langsung (LS) dimana bendahara pengeluaran menerima kas untuk pengeluaran belanja tersebut.</p>',
            'answer_a' => '<p>Uang Persediaan (UP)</p>',
            'answer_b' => '<p>Ganti Uang (GU)/Tambah Uang (TU)</p>',
            'answer_c' => '<p>Belanja langsung (LS) dimana bendahara pengeluaran menerima kas untuk pengeluaran belanja tersebut</p>',
            'answer_d' => '<p>Utang pemerintah pusat</p>',
            'correct_answer' => 'd',
        ]); 
        MultipleChoice::create([
            'question_type' => 'daerah',
            'question' => '<p>Dinas Pendapatan Pengelolaan Keuangan dan Aset Daerah (DPPKAD) yang bertindak sebagai SKPD akan digunakan sebagai ilustrasi. Pada 31 Desember 2011 PPK-SKPD melakukan inventarisasi untuk retribusi pemakaian kekayaan daerah sewa lahan, hal ini dilakukan dengan membandingkan antara catatan SKR sewa lahan yang sudah diterbitkan dengan bukti pembayaran SKR. Berdasarkan hasil pembandingan tersebut diketahui bahwa masih terdapat SKR yang telah diterbitkan dan belum dibayar oleh wajib retribusi sebesar Rp1.050.000,00 sehingga dilakukan pengakuan dan pecatatan atas piutang retribusi tersebut. Selanjutnya, pada awal tahun berikutnya saldo pada akun piutang dibuat jurnal balik (reversing entry) untuk piutang retribusi. PPK-SKPD mencatat dalam Jurnal Umum sebagai berikut...</p>',
            'question_explanation' => '<p>Pada awal tahun berikutnya saldo pada akun piutang dibuat jurnal balik (reversing entry) untuk piutang retribusi. Maka, PPK-SKPD mencatat dalam Jurnal Umum melalui Cadangan Piutang Retribusi (Debit) pada Piutang Retribusi (Kredit). Sementara itu, pada akhir tahun sebelumnya (sebelum dilakukan jurnal balik) pengakuan dilakukan pada Piutang Retribusi (Debit) pada Cadangan Piutang Retribusi (Kredit).</p>',
            'answer_a' => '<table border="1" cellpadding="1" cellspacing="1">
                            <tbody>
                                <tr>
                                    <td>
                                    <p>Tanggal</p>
                                    </td>
                                    <td>
                                    <p>Keterangan</p>
                                    </td>
                                    <td>
                                    <p>Debit</p>
                                    </td>
                                    <td>
                                    <p>Kredit</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>1 Januari 2012</p>
                                    </td>
                                    <td>
                                    <p>Cadangan Piutang Retribusi</p>
                                    </td>
                                    <td>
                                    <p>Rp1.050.000,00</p>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Piutang Retribusi</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Rp1.050.000,00</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>',
            'answer_b' => '<table border="1" cellpadding="1" cellspacing="1">
                            <tbody>
                                <tr>
                                    <td>
                                    <p>Tanggal</p>
                                    </td>
                                    <td>
                                    <p>Keterangan</p>
                                    </td>
                                    <td>
                                    <p>Debit</p>
                                    </td>
                                    <td>
                                    <p>Kredit</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>1 Januari 2012</p>
                                    </td>
                                    <td>
                                    <p>Piutang Retribusi</p>
                                    </td>
                                    <td>
                                    <p>Rp1.050.000,00</p>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Cadangan Piutang Retribusi</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Rp1.050.000,00</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>',
            'answer_c' => '<table border="1" cellpadding="1" cellspacing="1">
                            <tbody>
                                <tr>
                                    <td>
                                    <p>Tanggal</p>
                                    </td>
                                    <td>
                                    <p>Keterangan</p>
                                    </td>
                                    <td>
                                    <p>Debit</p>
                                    </td>
                                    <td>
                                    <p>Kredit</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>1 Januari 2012</p>
                                    </td>
                                    <td>
                                    <p>Cadangan Piutang Retribusi</p>
                                    </td>
                                    <td>
                                    <p>Rp1.050.000,00</p>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Kas</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Rp1.050.000,00</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>',
            'answer_d' => '<table border="1" cellpadding="1" cellspacing="1">
                            <tbody>
                                <tr>
                                    <td>
                                    <p>Tanggal</p>
                                    </td>
                                    <td>
                                    <p>Keterangan</p>
                                    </td>
                                    <td>
                                    <p>Debit</p>
                                    </td>
                                    <td>
                                    <p>Kredit</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>1 Januari 2012</p>
                                    </td>
                                    <td>
                                    <p>Kas</p>
                                    </td>
                                    <td>
                                    <p>Rp1.050.000,00</p>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Piutang Retribusi</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Rp1.050.000,00</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>',
            'correct_answer' => 'a',
        ]); 
        MultipleChoice::create([
            'question_type' => 'daerah',
            'question' => '<p>Manakah metode penilaian investasi pemerintah bagi investasi jangka pendek/panjang?</p>',
            'question_explanation' => '<p>Penilaian investasi pemerintah dilakukan dengan tiga metode yaitu:</p>

                <p>(a) Metode biaya;</p>
                
                <p>(b) metode ekuitas;</p>
                
                <p>(c) Metode niai bersih yang dapat direalisasikan</p>',
            'answer_a' => '<p>Metode garis lurus, metode nilai suust, metode nilai ekonomi</p>',
            'answer_b' => '<p>Metode biaya, metode ekuitas, dan metode nilai bersih yang dapat direalisasikan</p>',
            'answer_c' => '<p>Metode FIFO, LIFO, Average</p>',
            'answer_d' => '<p>Metode Saldo Menurun, metode biaya, dan metode ekuitas</p>',
            'correct_answer' => 'b',
        ]); 
        MultipleChoice::create([
            'question_type' => 'daerah',
            'question' => '<p>Dalam ketentuan aset tetap, gedung dan bangunan didefinisikan sebagai&hellip;</p>',
            'question_explanation' => '<p>Dalam Kebijakan Akuntan No.09 nomor 2 tentang klasifikasi. Gedung dan bangunan memiliki definisi &ldquo;Gedung dan bangunan mencakup seluruh gedung dan bangunan yang diperoleh dengan maksud untuk dipakai dalam kegiatan operasional pemerintah dan dalam kondisi siap dipakai&rdquo;.</p>',
            'answer_a' => '<p>Gedung dan bangunan mencakup seluruh gedung dan bangunan yang diperoleh dengan maksud untuk dipakai dalam kegiatan operasional pemerintah dan dalam kondisi siap dipakai dan dilaporkan dalam LRA.</p',
            'answer_b' => '<p>Gedung dan bangunan mencakup seluruh gedung dan bangunan yang diperoleh dengan maksud untuk dipakai dalam kegiatan operasional pemerintah dan dalam kondisi siap dipakai dan dilaporkan dalam LAK.</p>',
            'answer_c' => '<p>Gedung dan bangunan mencakup seluruh gedung dan bangunan yang diperoleh dengan maksud untuk dipakai dalam kegiatan operasional pemerintah dan dalam kondisi siap dipakai.</p>',
            'answer_d' => '<p>Gedung dan bangunan mencakup seluruh gedung dan bangunan yang diperoleh dengan maksud untuk dipakai dalam kegiatan operasional pemerintah dan dalam kondisi siap dipakai dan dilaporkan dalam LO.</p>',
            'correct_answer' => 'c',
        ]); 
        MultipleChoice::create([
            'question_type' => 'daerah',
            'question' => '<p>Berikut ini merupakan sumber Hibah daerah dari pemerintah melalui APBN dalam transaksi hibah, kecuali&hellip;</p>',
            'question_explanation' => '<p>Hibah daerah dari pemerintah yang bersumber dari APBN meliputi Penerimaan dalam negeri, hibah luar negeri, peminjaman luar negeri&nbsp;</p>',
            'answer_a' => '<p>Penerimaan Dalam Negeri&nbsp;</p>',
            'answer_b' => '<p>Hibah Luar Negeri&nbsp;</p>',
            'answer_c' => '<p>Peminjaman Dalam Negeri&nbsp;</p>',
            'answer_d' => '<p>Peminjaman Luar Negeri&nbsp;</p>',
            'correct_answer' => 'c',
        ]);  
        MultipleChoice::create([
            'question_type' => 'daerah',
            'question' => '<p>Pada tanggal 6 Januari 2011, Dinas Pariwisata mengirimkan sisa Kas di Bendahara Pengeluaran berupa USD, dan kemudian disetorkan ke Rekening Kas Daerah dalam rupiah dengan kurs Rp 11.300/USD sebagai berikut:</p>
                            <p>Seluruh setoran (USD2.045 x Rp11.300/USD) = Rp23.108.500</p>
                            <ul>
                                <li>
                                <p>Sebagai setoran sisa UP TAYL&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; = Rp22.491.000</p>
                                </li>
                                <li>
                                <p>Sebagai pendapatan selisih kurs&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;=&nbsp;Rp617.500</p>
                                </li>
                            </ul>
                            <p>Maka, Jurnal pengakuan pendapatan lain-lain dari selisih kurs pada Pengelola Kas adalah</p>',
            'question_explanation' => '<p>Dikarenakan Utang kepada KUD pada Pendapatan lain-lain (selisih kurs) merupakan jurnal untuk pengakuan pendapatan lain-lain dari selisih kurs pada SKPD perwakilan luar negeri. Sementara itu, Ekuitas Dana Lancar-Selisih Kurs pada Kas di Bendahara Pengeluaran merupakan jurnal penyesuaian di awal tahun untuk membalik (reverse) akun selisih kurs atas Kas di Bendahara Pengeluaran pada SKPD</p>',
            'answer_a' => '<table border="1" cellpadding="1" cellspacing="1">
                            <tbody>
                                <tr>
                                    <td>
                                    <p>Keterangan</p>
                                    </td>
                                    <td>
                                    <p>Debit</p>
                                    </td>
                                    <td>
                                    <p>Kredit</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>Kas</p>
                                    </td>
                                    <td>
                                    <p>Rp617.500</p>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>Pendapatan lain-lain (selisih kurs)</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Rp617.500</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>',
            'answer_b' => '<table border="1" cellpadding="1" cellspacing="1">
                            <tbody>
                                <tr>
                                    <td>
                                    <p>Keterangan</p>
                                    </td>
                                    <td>
                                    <p>Debit</p>
                                    </td>
                                    <td>
                                    <p>Kredit</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>Utang kepada KUD</p>
                                    </td>
                                    <td>
                                    <p>Rp617.500</p>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>Pendapatan lain-lain (selisih kurs)</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Rp617.500</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>',
            'answer_c' => '<table border="1" cellpadding="1" cellspacing="1">
                            <tbody>
                                <tr>
                                    <td>
                                    <p>Keterangan</p>
                                    </td>
                                    <td>
                                    <p>Debit</p>
                                    </td>
                                    <td>
                                    <p>Kredit</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>Pendapatan lain-lain (selisih kurs)</p>
                                    </td>
                                    <td>
                                    <p>Rp617.500</p>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>Utang kepada KUD</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Rp617.500</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>',
            'answer_d' => '<table border="1" cellpadding="1" cellspacing="1">
                            <tbody>
                                <tr>
                                    <td>
                                    <p>Keterangan</p>
                                    </td>
                                    <td>
                                    <p>Debit</p>
                                    </td>
                                    <td>
                                    <p>Kredit</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>Ekuitas Dana Lancar-Selisih Kurs</p>
                                    </td>
                                    <td>
                                    <p>Rp617.500</p>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>Kas di Bendahara Pengeluaran</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Rp617.500</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>',
            'correct_answer' => 'a',
        ]);  
        MultipleChoice::create([
            'question_type' => 'daerah',
            'question' => '<p>Untuk dapat diakui sebagai aset tetap harus dipenuhi kriteria sebagai berikut :&nbsp;</p>
                            <ol>
                                <li>berwujud;</li>
                                <li>mempunyai masa manfaat maksimal 12 bulan;</li>
                                <li>biaya perolehan aset dapat diukur secara andal;</li>
                                <li>dimaksudkan untuk dijual dalam operasi normal entitas;</li>
                                <li>diperoleh atau dibangun dengan maksud untuk digunakan;</li>
                                <li>bukan merupakan objek pemeliharaan atau memerlukan biaya/ongkos untuk dipelihara</li>
                                <li>nilai rupiah pembelian barang material atau pengeluaran untuk pembelian barang tersebut memenuhi batasan minimal kapitalisasi aset tetap yang telah ditetapkan.</li>
                            </ol>',
            'question_explanation' => '<p>Mempunyai masa manfaat lebih dari 12 bulan; tidak dimaksudkan untuk dijual dalam operasi normal entitas; dan merupakan objek pemeliharaan atau memerlukan biaya/ongkos untuk dipelihara</p>',
            'answer_a' => '<p>(1), (3), (6) dan (7)&nbsp;</p>',
            'answer_b' => '<p>(1), (2), (3) dan (4)</p>',
            'answer_c' => '<p>(1), (4), (5), dan (7)</p>',
            'answer_d' => '<p>(1),(3), (5), dan (7)</p>',
            'correct_answer' => 'd',
        ]);  
        MultipleChoice::create([
            'question_type' => 'daerah',
            'question' => '<p>Penarikan Hibah dapat dilakukan melalui tata cara sebagai berikut:</p>
                            <ol>
                                <li>
                                <p>Pembayaran Langsung (Direct Payment);</p>
                                </li>
                                <li>
                                <p>Rekening Khusus (Special Account): dan/atau</p>
                                </li>
                                <li>
                                <p>Pembukuan Letter of Credit (L/C).</p>
                                </li>
                            </ol>',
            'question_explanation' => '<p>Seusai pasal 2 PMK NO. 52 tahun 2006 ketiga tata cara tersebut merupakan tata cara penarikan hibah yang dapat dilakukan.</p>',
            'answer_a' => '<p>(1) dan (2)</p>',
            'answer_b' => '<p>(1) dan (3)</p>',
            'answer_c' => '<p>(2) dan (3)</p>',
            'answer_d' => '<p>Semua benar</p>',
            'correct_answer' => 'd',
        ]);  
        MultipleChoice::create([
            'question_type' => 'daerah',
            'question' => '<p>Pelaporan keuangan hibah meliputi laporan-laporan yang disusun untuk menyajikan transaksi-transaksi terkait hibah, yang terdiri darI, kecuali:</p>
                            <ol>
                                <li>
                                <p>Laporan Realisasi Anggaran</p>
                                </li>
                                <li>
                                <p>Laporan Perubahan SAL&nbsp;</p>
                                </li>
                                <li>
                                <p>Neraca</p>
                                </li>
                                <li>
                                <p>Laporan Operasional&nbsp;</p>
                                </li>
                                <li>
                                <p>Laporan Arus Kas</p>
                                </li>
                                <li>
                                <p>Laporan Perubahan Ekuitas</p>
                                </li>
                                <li>
                                <p>CaLK</p>
                                </li>
                            </ol>',
            'question_explanation' => '<p>Akuntansi hibah meliputi perlakuan akuntansi untuk Pendapatan Hibah-LRA, Pendapatan Hibah-LO, Belanja Hibah, Behan Hibah, aset yang diperoleh dari hibah (kas, aset tetap, aset lainnya, dan persediaan), serta belanja dan beban yang bersumber dari hibah.</p>',
            'answer_a' => '<p>(1) dan (2)</p>',
            'answer_b' => '<p>(2) dan (5)</p>',
            'answer_c' => '<p>(2) dan (6)</p>',
            'answer_d' => '<p>(5) dan (6)</p>',
            'correct_answer' => 'b',
        ]);  
        MultipleChoice::create([
            'question_type' => 'daerah',
            'question' => '<p>Jurnal penerimaan kas dari hibah yang pencairannya melalui Kuasa BUN (mekanisme RKUN dan Reksus) di Buku Besar UAKPA-BUN adalah</p>',
            'question_explanation' => '<p>Opsi b merupakan jurnal pencatatan Pendapatan Hibah yang pencairannya melalui Kuasa BUN, sementara opsi c merupakan purnal pencatatan Pendapatan Hibah yang penca1rannya melalui Kuasa BUN (mekanisme PL, L/C, dan pembiayaan pendahuluan).</p>',
            'answer_a' => '<table border="1" cellpadding="1" cellspacing="1">
                            <tbody>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Buku Besar Kas</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Buku Besar Akrual</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>Db</p>
                                    </td>
                                    <td>
                                    <p>Diterima dari Entitas Lain</p>
                                    </td>
                                    <td>
                                    <p>Db</p>
                                    </td>
                                    <td>
                                    <p>Pendapatan Hibah yang ditangguhkan</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>Kr</p>
                                    </td>
                                    <td>
                                    <p>Pendapatan Hibah</p>
                                    </td>
                                    <td>
                                    <p>Kr</p>
                                    </td>
                                    <td>
                                    <p>Pendapatan Hibah</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>',
            'answer_b' => '<table border="1" cellpadding="1" cellspacing="1">
                            <tbody>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Buku Besar Kas</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Buku Besar Akrual</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>Db</p>
                                    </td>
                                    <td>
                                    <p>-</p>
                                    </td>
                                    <td>
                                    <p>Db</p>
                                    </td>
                                    <td>
                                    <p>Akun Transito</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>Kr</p>
                                    </td>
                                    <td>
                                    <p>-</p>
                                    </td>
                                    <td>
                                    <p>Kr</p>
                                    </td>
                                    <td>
                                    <p>Pendapatan Hibah yang ditangguhkan</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>',
            'answer_c' => '<table border="1" cellpadding="1" cellspacing="1">
                            <tbody>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Buku Besar Kas</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Buku Besar Akrual</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>Db</p>
                                    </td>
                                    <td>
                                    <p>Diterima dari Entitas Lain</p>
                                    </td>
                                    <td>
                                    <p>Db</p>
                                    </td>
                                    <td>
                                    <p>Diterima dari Entitas Lain</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>Kr</p>
                                    </td>
                                    <td>
                                    <p>Pendapatan Hibah</p>
                                    </td>
                                    <td>
                                    <p>Kr</p>
                                    </td>
                                    <td>
                                    <p>Pendapatan Hibah</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>',
            'answer_d' => '<table border="1" cellpadding="1" cellspacing="1">
                            <tbody>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Buku Besar Kas</p>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                    <p>Buku Besar Akrual</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>Db</p>
                                    </td>
                                    <td>
                                    <p>-</p>
                                    </td>
                                    <td>
                                    <p>Db</p>
                                    </td>
                                    <td>
                                    <p>Pendapatan Hibah yang ditangguhkan</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <p>Kr</p>
                                    </td>
                                    <td>
                                    <p>-</p>
                                    </td>
                                    <td>
                                    <p>Kr</p>
                                    </td>
                                    <td>
                                    <p>Pendapatan Hibah</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>',
            'correct_answer' => 'b',
        ]);  
        MultipleChoice::create([
            'question_type' => 'daerah',
            'question' => '<p>Alokasi harga perolehan ATB secara sistematis dan rasional selama masa manfaatnya merupakan pengertian dari &hellip;</p>',
            'question_explanation' => '<p><strong>Amortisasi</strong> adalah alokasi harga perolehan ATB secara sistematis dan rasional selama masa manfaatnya. <strong>Nilai tercatat </strong>(carrying amount) Aset Tak Berwujud adalah nilai buku Aset Tak Berwujud, yang dihitung dari biaya perolehan suatu aset setelah dikurangi akumulasi amortisasi. <strong>Penyusutan </strong>aset dapat diartikan sebagai alokasi yang sistematis atas nilai suatu aset tetap yang dapat disusutkan selama masa manfaat aset yang bersangkutan. <strong>Nilai residu</strong> adalah nilai sisa pada suatu aset atau barang yang sudah berakhir umur ekonomisnya</p>',
            'answer_a' => '<p>Depresiasi</p>',
            'answer_b' => '<p>Nilai Residu</p>',
            'answer_c' => '<p>Amortisasi</p>',
            'answer_d' => '<p>Nilai tercatat ATB</p>',
            'correct_answer' => 'c',
        ]);  
    }
}
