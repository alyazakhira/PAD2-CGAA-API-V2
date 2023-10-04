<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CaseStudy;

class CaseStudySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CaseStudy::create([
            'question_type' => 'pusat',
            'instruction_count' => 6,
            'information' => '<p>Neraca per 31 Desember 2022 dan Dokumen Pelaksanaan Anggaran (DIPA) Tahun Anggaran 2023 Direktorat Jenderal X Kementerian X disajikan pada bagian di bawah ini:</p>
                <table>
                    <tbody>
                        <tr>
                            <td colspan="3" style="text-align:center">
                            <p><strong>KEMENTERIAN X</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" style="text-align:center">
                            <p><strong>DIREKTORAT JENDERAL X</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" style="text-align:center">
                            <p><strong>NERACA</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" style="text-align:center">
                            <p><strong>PER 31 DESEMBER 2022</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                            <p><strong>Aset</strong></p>
                            </td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="2">
                            <p><strong>Aset Lancar</strong></p>
                            </td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="2">
                            <p>Kas di Bendahara Pengeluaran</p>
                            </td>
                            <td>
                            <p>Rp500,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                            <p>Uang Muka Belanja Barang</p>
                            </td>
                            <td>
                            <p>Rp20,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                            <p>Persediaan</p>
                            </td>
                            <td>
                            <p>Rp115,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                            <p>Jumlah Aset Lancar</p>
                            </td>
                            <td>
                            <p>Rp135,500,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="2">
                            <p><strong>Aset Tetap</strong></p>
                            </td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="2">
                            <p>Tanah</p>
                            </td>
                            <td>
                            <p>Rp 57,000,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                            <p>Peralatan dan Mesin</p>
                            </td>
                            <td>
                            <p>Rp 16,000,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                            <p>Gedung dan Bangunan</p>
                            </td>
                            <td>
                            <p>Rp 45,000,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                            <p>Jalan, Irigasi, dan Jaringan</p>
                            </td>
                            <td>
                            <p>Rp 867,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                            <p>Aset Tetap Lainnya</p>
                            </td>
                            <td>
                            <p>Rp 130,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                            <p>Jumlah Aset Tidak Lancar</p>
                            </td>
                            <td>
                            <p>Rp 118,997,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="2">
                            <p><strong>Aset Lainnya</strong></p>
                            </td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="2">
                            <p>Aset Lain-Lain</p>
                            </td>
                            <td>
                            <p>Rp 32,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                            <p>Jumlah Aset Lainnya</p>
                            </td>
                            <td>
                            <p>Rp 32,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                            <p>Jumlah Aset</p>
                            </td>
                            <td>
                            <p>Rp119,164,500,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                            <p>Kewajiban</p>
                            </td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="2">
                            <p>Kewajiban Jangka Pendek</p>
                            </td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="2">
                            <p>Utang kepada Pihak Ketiga</p>
                            </td>
                            <td>
                            <p>Rp 242,500,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                            <p>Jumlah Kewajiban</p>
                            </td>
                            <td>
                            <p>Rp 242,500,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="2">
                            <p><strong>Ekuitas</strong></p>
                            </td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="2">
                            <p>Ekuitas Dana Lancar</p>
                            </td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="2">
                            <p>Cadangan Piutang</p>
                            </td>
                            <td>
                            <p>Rp20,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                            <p>Cadangan Persediaan</p>
                            </td>
                            <td>
                            <p>Rp115,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                            <p>Pendapatan yang Ditangguhkan</p>
                            </td>
                            <td>
                            <p>Rp 500,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                            <p>Dana yang harus Disediakan Untuk Pembayaran Utang Jangka Pendek</p>
                            </td>
                            <td>
                            <p>Rp (242,500,000)</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                            <p>Jumlah Ekuitas Dana Lancar</p>
                            </td>
                            <td>
                            <p>Rp (107,000,000)</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="2">
                            <p><strong>Ekuitas Dana Investasi</strong></p>
                            </td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="2">
                            <p>Diinvestasikan dalam Aset Tetap</p>
                            </td>
                            <td>
                            <p>Rp118,997,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                            <p>Diinvestasikan dalam Aset Lainnya</p>
                            </td>
                            <td>
                            <p>Rp32,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                            <p>Jumlah Ekuitas Dana Investasi</p>
                            </td>
                            <td>
                            <p>Rp119,029,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                            <p>Jumlah Ekuitas</p>
                            </td>
                            <td>
                            <p>Rp118,922,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                            <p>Jumlah Kewajiban dan Ekuitas</p>
                            </td>
                            <td>
                            <p>Rp119,164,500,000</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
                <br>
                
                <table>
                    <tbody>
                        <tr>
                            <td colspan="3">
                            <p><strong>Dokumen Pelaksanaan Anggaran (DIPA)</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                            <p><strong>Tahun Anggaran 2023</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                            <p>Pendapatan Negara Bukan Pajak (PNBP)</p>
                            </td>
                            <td>
                            <p>Rp200,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                            <p>Belanja</p>
                            </td>
                            <td>
                            <p>Rp3,024,090,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                            <p>Belanja Pegawai</p>
                            </td>
                            <td>
                            <p>Rp1,931,958,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                            <p>Belanja Barang dan Jasa</p>
                            </td>
                            <td>
                            <p>Rp1,084,332,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                            <p>Belanja Modal Peralatan dan Mesin</p>
                            </td>
                            <td>
                            <p>Rp7,800,000</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
                <br>
                
                <p>Kemudian, pada tahun 2023 Satuan Kerja Direktorat Jenderal X, Kementerian X mempunyai transaksi sebagai berikut:</p>
                
                <ol>
                    <li>
                    <p>Disewakan sebidang ruangan kepada Bank BRI untuk pembukaan kantor cabang pembantu selama 5 Tahun. Perjanjian ini dituangkan dalam perjanjian nomor 001/PPK/SW/2023 tanggal 1 Januari dengan nilai sewa Rp120.000.000 untuk 5 tahun. Pada tanggal 5 Januari 2023 diterima pembayaran tersebut dan langsung disetor ke kas negara melalui bank persepsi.</p>
                    </li>
                    <li>
                    <p>Pada bulan Januari 2023, dilakukan pembelian Alat Tulis Kantor. PPK menunjuk CV Abadi sebagai rekanan. PPK membuat kontrak pengadaan Alat Tulis Kantor untuk keperluan perkantoran dengan nomor SPK.01/WPB.01/I/2023 tanggal 5 Januari 2023. Tanggal mulai pelaksanaan kontrak 5 Januari 2023 dan selesai pada 7 Januari 223 dengan pembayaran kontrak sekaligus. Nilai kontrak sebesar Rp150.000.000. ATK diserahterimakan oleh CV Abadi pada tanggal 7 Januari 2023 dengan BAST No.09/CV.B/I/2023.</p>
                    </li>
                    <li>
                    <p>Pada tanggal 01 Februari PPK membuat kontrak pengadaan akomodasi hotel untuk keperluan sosialisasi dengan nomor SPK.02/WPB.02/II/2023 dengan nilai kontrak sebesar Rp50.000.000. BAPP dibuat tanggal 10 Februari dan Invoice atas kegiatan tersebut diterima KPPN tanggal 15 Februari 2023, dan langsung dibuat SPP/SPM atas tagihan tersebut. SP2D atas SPP/SPM terbit tanggal 16 Februari 2023.&nbsp;</p>
                    </li>
                    <li>
                    <p>Pada bulan Maret 2023, dilakukan pembelian satu buah Laptop. PPK menunjuk PT Solusi sebagai rekanan dan membuat kontrak pengadaan Laptop dengan nomor SPK.03/WPB.03/III/2023 dengan nilai kontrak sebesar Rp7.800.000. Tanggal mulai pelaksanaan kontrak 15 Maret 2023 dan selesai pada 17 Maret 2023 dengan cara pembayaran kontrak sekaligus. Laptop diserahterimakan oleh PT Solusi pada 17 Maret 2023 dengan BAST No.10/PT.S/III/2023.</p>
                    </li>
                    <li>
                    <p>Pada tanggal 2 April 2023 diterbitkan SPP/SPM pembayaran Gaji dan Tunjangan PNS bulan Maret 2023 sebesar Rp100.000.000. Pada hari yang sama, diterbitkan SP2D atas Gaji dan Tunjangan PNS bulan Maret 2023.</p>
                    </li>
                    <li>
                    <p>Pada tanggal 15 Mei 2023, dibuat SPP/SPM Permintaan Uang Persediaan sebesar&nbsp;Rp10.000.000 yang terbit SP2Dnya pada hari yang sama</p>
                    </li>
                    <li>
                    <p>Pada tanggal 20 Mei 2023 dibayar tagihan jasa penggandaan dokumen sebesar Rp4.000.000, tagihan servis motor rutin Rp3.000.000, dan tagihan biaya jasa pengiriman Rp1.000.000</p>
                    </li>
                    <li>
                    <p>Pada tanggal 3 Agustus 2023 Bendahara Penerimaan menyetorkan Uang yang diterima bulan Desember 2022 yang masih ada pada rekeningnya ke bank persepsi sebesar Rp500.000.</p>
                    </li>
                    <li>
                    <p>Berdasarkan hasil opname fisik barang persediaan per 31 Desember 2023, jumlah persediaan sebesar Rp100.000.000, maka diperlukan jurnal sebesar selisih persediaan.</p>
                    </li>
                    <li>
                    <p>Pada akhir periode pelaporan tanggal 31 Desember 2023, diperlukan jurnal penyesuaian aset tetap. Laptop yang dibeli melalui kontrak pada tanggal 15 Maret 2023 diperkirakan memiliki masa manfaat (empat) tahun.&nbsp;</p>
                    </li>
                    <li>
                    <p>Pada akhir periode pelaporan tanggal 31 Desember 2023, diperlukan jurnal penyesuaian aset tetap. Peralatan dan mesin sebesar Rp1.600.000.000, gedung dan bangunan sebesar Rp2.250.000.000, Jalan Irigasi dan Jaringan sebesar Rp86.700.000, aset tetap lainnya sebesar Rp 13.000.000</p>
                    </li>
                </ol>',
            'instruction_1' => "<p>Buatlah jurnal umum akrual dan jurnal umum kas sesuai transaksi yang terjadi selama tahun 2023!</p>",
            'instruction_2' => "<p>Buatlah buku besar per masing-masing akun!</p>",
            'instruction_3' => "<p>Buatlah jurnal penyesuaian berdasarkan transaksi tahun 2023!</p>",
            'instruction_4' => "<p>Buatlah neraca lajur!</p>",
            'instruction_5' => "<p>​​​​​Buatlah laporan keuangan yang memuat:</p>
                <ol>
                    <li>
                    <p>Laporan realisasi anggaran;</p>
                    </li>
                    <li>
                    <p>Laporan operasional;</p>
                    </li>
                    <li>
                    <p>Laporan perubahan ekuitas;</p>
                    </li>
                    <li>
                    <p>Neraca;</p>
                    </li>
                </ol>",
            'instruction_6' => "<p>Buatlah jurnal penutup!</p>",
            'key_answer_1'  => '<table>
                <thead>
                    <tr>
                        <th rowspan="2" scope="col" style="text-align:center">
                        <p>No</p>
                        </th>
                        <th colspan="4" scope="col" style="text-align:center">
                        <p>Jurnal Akrual</p>
                        </th>
                        <th colspan="3" scope="col" style="text-align:center">
                        <p>Jurnal Kas</p>
                        </th>
                    </tr>
                    <tr>
                        <th scope="col" style="text-align:center">
                        <p>Tanggal</p>
                        </th>
                        <th scope="col" style="text-align:center">
                        <p>Keterangan&nbsp;</p>
                        </th>
                        <th scope="col" style="text-align:center">
                        <p>Debit</p>
                        </th>
                        <th scope="col" style="text-align:center">
                        <p>Kredit&nbsp;</p>
                        </th>
                        <th scope="col" style="text-align:center">
                        <p>Keterangan&nbsp;</p>
                        </th>
                        <th scope="col" style="text-align:center">
                        <p>Debit&nbsp;</p>
                        </th>
                        <th scope="col" style="text-align:center">
                        <p>Kredit</p>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                        <p>a</p>
                        </td>
                        <td>
                        <p>1-Jan-2023</p>
                        </td>
                        <td>
                        <p>Allotment belanja pegawai</p>
                        </td>
                        <td style="text-align:right">
                        <p>Rp1,931,958,000</p>
                        </td>
                        <td style="text-align:right">&nbsp;</td>
                        <td>&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>
                        <p>Allotment belanja barang dan jasa</p>
                        </td>
                        <td style="text-align:right">
                        <p>Rp1,084,332,000</p>
                        </td>
                        <td style="text-align:right">&nbsp;</td>
                        <td>&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>
                        <p>Allotment belanja modal</p>
                        </td>
                        <td style="text-align:right">
                        <p>Rp7,800,000</p>
                        </td>
                        <td style="text-align:right">&nbsp;</td>
                        <td>&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>
                        <p>Estimasi pendapatan negara bukan pajak</p>
                        </td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">
                        <p>Rp200,000,000</p>
                        </td>
                        <td>&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>
                        <p>(mencatat jurnal anggaran)</p>
                        </td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                        <td>&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                        <p>a</p>
                        </td>
                        <td>
                        <p>5-Jan-2023</p>
                        </td>
                        <td>
                        <p>Diterima dari entitas lain</p>
                        </td>
                        <td style="text-align:right">
                        <p>Rp120,000,000</p>
                        </td>
                        <td style="text-align:right">&nbsp;</td>
                        <td>
                        <p>Diterima dari entitas lain</p>
                        </td>
                        <td style="text-align:right">
                        <p>Rp120,000,000</p>
                        </td>
                        <td style="text-align:right">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>
                        <p>Pendapatan LO Sewa Gedung&nbsp;</p>
                        </td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">
                        <p>Rp120,000,000</p>
                        </td>
                        <td>
                        <p>Pendapatan LRA Sewa Gedung&nbsp;</p>
                        </td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">
                        <p>Rp120,000,000</p>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>
                        <p>(Mencatat penerimaan sewa gedung)</p>
                        </td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                        <td>
                        <p>(Mencatat penerimaan sewa gedung)</p>
                        </td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                        <p>b</p>
                        </td>
                        <td>
                        <p>5-Jan-2023</p>
                        </td>
                        <td>
                        <p>Persediaan yang belum diregister&nbsp;</p>
                        </td>
                        <td style="text-align:right">
                        <p>Rp150,000,000</p>
                        </td>
                        <td style="text-align:right">&nbsp;</td>
                        <td>&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>
                        <p>Utang yang belum diterima tagihannya</p>
                        </td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">
                        <p>Rp150,000,000</p>
                        </td>
                        <td>&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>
                        <p>(mencatat persediaan yang belum terverifikasi kondisi BMN)</p>
                        </td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                        <td>&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                        <p>b</p>
                        </td>
                        <td>
                        <p>7-Jan-2023</p>
                        </td>
                        <td>
                        <p>Utang yang belum diterima tagihannya</p>
                        </td>
                        <td style="text-align:right">
                        <p>Rp150,000,000</p>
                        </td>
                        <td style="text-align:right">&nbsp;</td>
                        <td>&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>
                        <p>Belanja yang masih harus dibayar</p>
                        </td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">
                        <p>Rp150,000,000</p>
                        </td>
                        <td>&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>
                        <p>(mencatat resume tagihan belanja yang menambah aset BMN Intrakomtabel)</p>
                        </td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                        <td>&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>
                        <p>Belanja barang yang masih harus dibayar</p>
                        </td>
                        <td style="text-align:right">
                        <p>Rp150,000,000</p>
                        </td>
                        <td style="text-align:right">&nbsp;</td>
                        <td>
                        <p>Belanja barang yang masih harus dibayar</p>
                        </td>
                        <td style="text-align:right">
                        <p>Rp150,000,000</p>
                        </td>
                        <td style="text-align:right">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>
                        <p>Ditagihkan ke entitas lain&nbsp;</p>
                        </td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">
                        <p>Rp150,000,000</p>
                        </td>
                        <td>
                        <p>Ditagihkan ke entitas lain&nbsp;</p>
                        </td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">
                        <p>Rp150,000,000</p>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>
                        <p>(Mencatat pelunasan dengan ADK SPM)</p>
                        </td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                        <td>
                        <p>(Mencatat pelunasan dengan ADK SPM)</p>
                        </td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>
                        <p>Persediaan yang belum diregister&nbsp;</p>
                        </td>
                        <td style="text-align:right">
                        <p>Rp150,000,000</p>
                        </td>
                        <td style="text-align:right">&nbsp;</td>
                        <td>&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>
                        <p>Persediaan yang belum diregister</p>
                        </td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">
                        <p>Rp150,000,000</p>
                        </td>
                        <td>&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>
                        <p>(Mencatat atas verifikasi kondisi BMN)</p>
                        </td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                        <td>&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                        <p>c</p>
                        </td>
                        <td>
                        <p>15-Feb-2023</p>
                        </td>
                        <td>
                        <p>Beban jasa</p>
                        </td>
                        <td style="text-align:right">
                        <p>Rp50,000,000</p>
                        </td>
                        <td style="text-align:right">&nbsp;</td>
                        <td>&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>
                        <p>Utang yang belum diterima tagihannya</p>
                        </td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">
                        <p>Rp50,000,000</p>
                        </td>
                        <td>&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                        <td>&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>
                        <p>15-Feb-2023</p>
                        </td>
                        <td>
                        <p>Utang yang belum diterima tagihannya</p>
                        </td>
                        <td style="text-align:right">
                        <p>Rp50,000,000</p>
                        </td>
                        <td style="text-align:right">&nbsp;</td>
                        <td>&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>
                        <p>Belanja yang masih harus dibayar</p>
                        </td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">
                        <p>Rp50,000,000</p>
                        </td>
                        <td>&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>
                        <p>(mencatat resume tagihan belanja)&nbsp;</p>
                        </td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                        <td>&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>
                        <p>16-Feb-2023</p>
                        </td>
                        <td>
                        <p>Belanja/transfer yang masih harus dibayar</p>
                        </td>
                        <td style="text-align:right">
                        <p>Rp50,000,000</p>
                        </td>
                        <td style="text-align:right">&nbsp;</td>
                        <td>
                        <p>Belanja jasa</p>
                        </td>
                        <td style="text-align:right">
                        <p>Rp50,000,000</p>
                        </td>
                        <td style="text-align:right">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>
                        <p>Ditagihkan ke entitas lain&nbsp;</p>
                        </td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">
                        <p>Rp50,000,000</p>
                        </td>
                        <td>
                        <p>Ditagihkan ke entitas lain&nbsp;</p>
                        </td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">
                        <p>Rp50,000,000</p>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>
                        <p>(Mencatat penerbitan SP2D)</p>
                        </td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                        <td>
                        <p>(Mencatat penerbitan SP2D)</p>
                        </td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                        <p>d</p>
                        </td>
                        <td>
                        <p>17-Mar-2023</p>
                        </td>
                        <td>
                        <p>Aset tetap yang belum diregister</p>
                        </td>
                        <td style="text-align:right">
                        <p>Rp7,800,000</p>
                        </td>
                        <td style="text-align:right">&nbsp;</td>
                        <td>&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>
                        <p>Utang yang belum diterima tagihannya</p>
                        </td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">
                        <p>Rp7,800,000</p>
                        </td>
                        <td>&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>
                        <p>(mencatat BAST perolehan aset tetap)</p>
                        </td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                        <td>&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>
                        <p>17-Mar-2023</p>
                        </td>
                        <td>
                        <p>Utang yang belum diterima tagihannya</p>
                        </td>
                        <td style="text-align:right">
                        <p>Rp7,800,000</p>
                        </td>
                        <td style="text-align:right">&nbsp;</td>
                        <td>&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>
                        <p>Belanja yang masih harus dibayar</p>
                        </td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">
                        <p>Rp7,800,000</p>
                        </td>
                        <td>&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>
                        <p>(mencatat atas resume tagihan)</p>
                        </td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                        <td>&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>
                        <p>17-Mar-2023</p>
                        </td>
                        <td>
                        <p>Belanja/transfer yang masih harus dibayar</p>
                        </td>
                        <td style="text-align:right">
                        <p>Rp7,800,000</p>
                        </td>
                        <td style="text-align:right">&nbsp;</td>
                        <td>
                        <p>Belanja modal</p>
                        </td>
                        <td style="text-align:right">
                        <p>Rp7,800,000</p>
                        </td>
                        <td style="text-align:right">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>
                        <p>Ditagihkan ke entitas lain&nbsp;</p>
                        </td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">
                        <p>Rp7,800,000</p>
                        </td>
                        <td>
                        <p>Ditagihkan ke entitas lain&nbsp;</p>
                        </td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">
                        <p>Rp7,800,000</p>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>
                        <p>(mencatat realisasi pembayaran)</p>
                        </td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                        <td>
                        <p>(mencatat realisasi pembayaran)</p>
                        </td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>
                        <p>17-Mar-2023</p>
                        </td>
                        <td>
                        <p>Peralatan dan Mesin</p>
                        </td>
                        <td style="text-align:right">
                        <p>Rp7,800,000</p>
                        </td>
                        <td style="text-align:right">&nbsp;</td>
                        <td>&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>
                        <p>Aset tetap yang belum diregister</p>
                        </td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">
                        <p>Rp7,800,000</p>
                        </td>
                        <td>&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>
                        <p>(mencatat verifikasi)</p>
                        </td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                        <td>&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                        <p>e</p>
                        </td>
                        <td>
                        <p>2-Apr-2023</p>
                        </td>
                        <td>
                        <p>Beban pegawai&nbsp;</p>
                        </td>
                        <td style="text-align:right">
                        <p>Rp100,000,000</p>
                        </td>
                        <td style="text-align:right">&nbsp;</td>
                        <td>&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>
                        <p>Belanja yang masih harus dibayar</p>
                        </td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">
                        <p>Rp100,000,000</p>
                        </td>
                        <td>&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>
                        <p>(mencatat resume tagihan belanja)</p>
                        </td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                        <td>&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>
                        <p>2-Apr-2023</p>
                        </td>
                        <td>
                        <p>Belanja yang masih harus dibayar</p>
                        </td>
                        <td style="text-align:right">
                        <p>Rp100,000,000</p>
                        </td>
                        <td style="text-align:right">&nbsp;</td>
                        <td>
                        <p>Belanja pegawai</p>
                        </td>
                        <td style="text-align:right">
                        <p>Rp250,000,000</p>
                        </td>
                        <td style="text-align:right">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>
                        <p>Ditagihkan ke entitas lain</p>
                        </td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">
                        <p>Rp100,000,000</p>
                        </td>
                        <td>
                        <p>Ditagihkan ke entitas lain</p>
                        </td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">
                        <p>Rp250,000,000</p>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>
                        <p>Mencatat atas realisasi pembayaran belanja)</p>
                        </td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                        <td>
                        <p>Mencatat atas realisasi pembayaran belanja)</p>
                        </td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                        <p>f</p>
                        </td>
                        <td>
                        <p>15-May-2023</p>
                        </td>
                        <td>
                        <p>Kas di Bendahara Pengeluaran</p>
                        </td>
                        <td style="text-align:right">
                        <p>Rp10,000,000</p>
                        </td>
                        <td style="text-align:right">&nbsp;</td>
                        <td>&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>
                        <p>Uang muka dari KPPN</p>
                        </td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">
                        <p>Rp10,000,000</p>
                        </td>
                        <td>&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>
                        <p>(Mencatat SPP/SPM/SP2D)</p>
                        </td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                        <td>&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                        <p>g</p>
                        </td>
                        <td>
                        <p>20-May-2023</p>
                        </td>
                        <td>
                        <p>Beban jasa</p>
                        </td>
                        <td style="text-align:right">
                        <p>Rp5,000,000</p>
                        </td>
                        <td style="text-align:right">&nbsp;</td>
                        <td>
                        <p>Beban jasa</p>
                        </td>
                        <td style="text-align:right">
                        <p>Rp5,000,000</p>
                        </td>
                        <td style="text-align:right">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>
                        <p>Beban pemeliharaan</p>
                        </td>
                        <td style="text-align:right">
                        <p>Rp3,000,000</p>
                        </td>
                        <td style="text-align:right">&nbsp;</td>
                        <td>
                        <p>Beban pemeliharaan</p>
                        </td>
                        <td style="text-align:right">
                        <p>Rp3,000,000</p>
                        </td>
                        <td style="text-align:right">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>
                        <p>Ditagihkan ke entitas lain</p>
                        </td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">
                        <p>Rp8,000,000</p>
                        </td>
                        <td>
                        <p>Ditagihkan ke entitas lain</p>
                        </td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">
                        <p>Rp8,000,000</p>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>
                        <p>(mencatat SPP/SPM/SP2D GUP)</p>
                        </td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                        <td>
                        <p>(mencatat SPP/SPM/SP2D GUP)</p>
                        </td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                        <p>h</p>
                        </td>
                        <td>
                        <p>3-Aug-2023</p>
                        </td>
                        <td>
                        <p>Diterima dari entitas lain</p>
                        </td>
                        <td style="text-align:right">
                        <p>Rp500,000</p>
                        </td>
                        <td style="text-align:right">&nbsp;</td>
                        <td>&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>
                        <p>Kas di Bendahara Penerimaan&nbsp;</p>
                        </td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">
                        <p>Rp500,000</p>
                        </td>
                        <td>&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>
                        <p>(mencatat penyetoran dari bendahara penerimaan)</p>
                        </td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                        <td>&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                        <td style="text-align:right">&nbsp;</td>
                    </tr>
                </tbody>
                </table>',
            'key_answer_2'  => '<p><strong>A. Buku Besar Akrual</strong></p>
                <table>
                    <tbody>
                        <tr>
                            <td colspan="7" style="text-align:center">
                            <p><strong>KEMENTERIAN X&nbsp;</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="7" style="text-align:center">
                            <p><strong>DIREKTORAT JENDERAL X</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="7" style="text-align:center">
                            <p><strong>SATUAN KERJA ABC&nbsp;</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="7" style="text-align:center">
                            <p><strong>BUKU BESAR AKRUAL&nbsp;</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align:center">
                            <p><strong>Nama Akun:&nbsp;</strong></p>
                            </td>
                            <td colspan="2">
                            <p><strong>Kas di Bendahara Penerimaan&nbsp;</strong></p>
                            </td>
                            <td style="text-align:center">&nbsp;</td>
                            <td style="text-align:center">&nbsp;</td>
                            <td style="text-align:center">&nbsp;</td>
                            <td style="text-align:center">&nbsp;</td>
                        </tr>
                        <tr>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Tanggal</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Keterangan&nbsp;</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Debit&nbsp;</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Kredit&nbsp;</strong></p>
                            </td>
                            <td colspan="2" style="text-align:center">
                            <p><strong>Saldo&nbsp;</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Saldo Akhir</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align:center">
                            <p><strong>Debit&nbsp;</strong></p>
                            </td>
                            <td style="text-align:center">
                            <p><strong>Kredit&nbsp;</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>1-Jan-2023</p>
                            </td>
                            <td>
                            <p>Saldo Awal&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp500,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp500,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp500,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>3-Aug-2023</p>
                            </td>
                            <td>
                            <p>Penyetoran</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp500,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp500,000</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>Nama Akun:&nbsp;</strong></p>
                            </td>
                            <td colspan="2">
                            <p><strong>Uang Muka Belanja Barang&nbsp;</strong></p>
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Tanggal</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Keterangan&nbsp;</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Debit&nbsp;</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Kredit&nbsp;</strong></p>
                            </td>
                            <td colspan="2" style="text-align:center">
                            <p><strong>Saldo&nbsp;</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Saldo Akhir</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align:center">
                            <p><strong>Debit&nbsp;</strong></p>
                            </td>
                            <td style="text-align:center">
                            <p><strong>Kredit&nbsp;</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>1-Jan-2023</p>
                            </td>
                            <td>
                            <p>Saldo Awal&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp20,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp20,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp20,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>Nama Akun:&nbsp;</strong></p>
                            </td>
                            <td>
                            <p><strong>Persediaan</strong></p>
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Tanggal</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Keterangan&nbsp;</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Debit&nbsp;</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Kredit&nbsp;</strong></p>
                            </td>
                            <td colspan="2" style="text-align:center">
                            <p><strong>Saldo&nbsp;</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Saldo Akhir</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align:center">
                            <p><strong>Debit&nbsp;</strong></p>
                            </td>
                            <td style="text-align:center">
                            <p><strong>Kredit&nbsp;</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>1-Jan-2023</p>
                            </td>
                            <td>
                            <p>Saldo Awal&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp115,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp115,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp115,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>7-Jan-2023</p>
                            </td>
                            <td>
                            <p>Pembelian&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp150,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp150,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp265,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>31-Dec-2023</p>
                            </td>
                            <td>
                            <p>Penyesuaian</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp165,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp165,000,000</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp100,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>Nama Akun:&nbsp;</strong></p>
                            </td>
                            <td>
                            <p><strong>Tanah</strong></p>
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Tanggal</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Keterangan&nbsp;</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Debit&nbsp;</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Kredit&nbsp;</strong></p>
                            </td>
                            <td colspan="2" style="text-align:center">
                            <p><strong>Saldo&nbsp;</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Saldo Akhir</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align:center">
                            <p><strong>Debit&nbsp;</strong></p>
                            </td>
                            <td style="text-align:center">
                            <p><strong>Kredit&nbsp;</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>1-Jan-2023</p>
                            </td>
                            <td>
                            <p>Saldo Awal&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp57,000,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp57,000,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp57,000,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>Nama Akun:&nbsp;</strong></p>
                            </td>
                            <td colspan="2">
                            <p><strong>Peralatan dan Mesin&nbsp;</strong></p>
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Tanggal</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Keterangan&nbsp;</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Debit&nbsp;</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Kredit&nbsp;</strong></p>
                            </td>
                            <td colspan="2" style="text-align:center">
                            <p><strong>Saldo&nbsp;</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Saldo Akhir</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align:center">
                            <p><strong>Debit&nbsp;</strong></p>
                            </td>
                            <td style="text-align:center">
                            <p><strong>Kredit&nbsp;</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>1-Jan-2023</p>
                            </td>
                            <td>
                            <p>Saldo Awal&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp16,000,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp16,000,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp16,000,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>17-Mar-2023</p>
                            </td>
                            <td>
                            <p>Pembelian</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp7,800,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp7,800,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp16,007,800,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>Nama Akun:&nbsp;</strong></p>
                            </td>
                            <td colspan="2">
                            <p><strong>Gedung dan Bangunan&nbsp;</strong></p>
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Tanggal</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Keterangan&nbsp;</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Debit&nbsp;</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Kredit&nbsp;</strong></p>
                            </td>
                            <td colspan="2" style="text-align:center">
                            <p><strong>Saldo&nbsp;</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Saldo Akhir</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align:center">
                            <p><strong>Debit&nbsp;</strong></p>
                            </td>
                            <td style="text-align:center">
                            <p><strong>Kredit&nbsp;</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>1-Jan-2023</p>
                            </td>
                            <td>
                            <p>Saldo Awal&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp45,000,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp45,000,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp45,000,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>Nama Akun:&nbsp;</strong></p>
                            </td>
                            <td colspan="2">
                            <p><strong>Jalan, Irigasi, dan Jaringan</strong></p>
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <th rowspan="2" style="text-align:center">
                            <p><strong>Tanggal</strong></p>
                            </th>
                            <th rowspan="2" style="text-align:center">
                            <p><strong>Keterangan&nbsp;</strong></p>
                            </th>
                            <th rowspan="2" style="text-align:center">
                            <p><strong>Debit&nbsp;</strong></p>
                            </th>
                            <th rowspan="2" style="text-align:center">
                            <p><strong>Kredit&nbsp;</strong></p>
                            </th>
                            <th colspan="2" style="text-align:center">
                            <p><strong>Saldo&nbsp;</strong></p>
                            </th>
                            <th rowspan="2" style="text-align:center">
                            <p><strong>Saldo Akhir</strong></p>
                            </th>
                        </tr>
                        <tr>
                            <td style="text-align:center">
                            <p><strong>Debit&nbsp;</strong></p>
                            </td>
                            <td style="text-align:center">
                            <p><strong>Kredit&nbsp;</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>1-Jan-2023</p>
                            </td>
                            <td>
                            <p>Saldo Awal&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp867,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp867,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp867,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>Nama Akun:&nbsp;</strong></p>
                            </td>
                            <td colspan="2">
                            <p><strong>Aset Tetap Lainnya&nbsp;</strong></p>
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <th rowspan="2" style="text-align:center">
                            <p><strong>Tanggal</strong></p>
                            </th>
                            <th rowspan="2" style="text-align:center">
                            <p><strong>Keterangan&nbsp;</strong></p>
                            </th>
                            <th rowspan="2" style="text-align:center">
                            <p><strong>Debit&nbsp;</strong></p>
                            </th>
                            <th rowspan="2" style="text-align:center">
                            <p><strong>Kredit&nbsp;</strong></p>
                            </th>
                            <th colspan="2" style="text-align:center">
                            <p><strong>Saldo&nbsp;</strong></p>
                            </th>
                            <th rowspan="2" style="text-align:center">
                            <p><strong>Saldo Akhir</strong></p>
                            </th>
                        </tr>
                        <tr>
                            <th style="text-align:center">
                            <p><strong>Debit&nbsp;</strong></p>
                            </th>
                            <th style="text-align:center">
                            <p><strong>Kredit&nbsp;</strong></p>
                            </th>
                        </tr>
                        <tr>
                            <td>
                            <p>1-Jan-2023</p>
                            </td>
                            <td>
                            <p>Saldo Awal&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp130,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp130,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp130,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>Nama Akun:&nbsp;</strong></p>
                            </td>
                            <td>
                            <p><strong>Aset Lain-Lain</strong></p>
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <th rowspan="2" style="text-align:center">
                            <p><strong>Tanggal</strong></p>
                            </th>
                            <th rowspan="2" style="text-align:center">
                            <p><strong>Keterangan&nbsp;</strong></p>
                            </th>
                            <th rowspan="2" style="text-align:center">
                            <p><strong>Debit&nbsp;</strong></p>
                            </th>
                            <th rowspan="2" style="text-align:center">
                            <p><strong>Kredit&nbsp;</strong></p>
                            </th>
                            <th colspan="2" style="text-align:center">
                            <p><strong>Saldo&nbsp;</strong></p>
                            </th>
                            <th rowspan="2" style="text-align:center">
                            <p><strong>Saldo Akhir</strong></p>
                            </th>
                        </tr>
                        <tr>
                            <th style="text-align:center">
                            <p><strong>Debit&nbsp;</strong></p>
                            </th>
                            <th style="text-align:center">
                            <p><strong>Kredit&nbsp;</strong></p>
                            </th>
                        </tr>
                        <tr>
                            <td>
                            <p>1-Jan-2023</p>
                            </td>
                            <td>
                            <p>Saldo Awal&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp32,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp32,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp32,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td colspan="2">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>Nama Akun:&nbsp;</strong></p>
                            </td>
                            <td colspan="2">
                            <p><strong>Utang kepada Pihak Ketiga</strong></p>
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Tanggal</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Keterangan&nbsp;</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Debit&nbsp;</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Kredit&nbsp;</strong></p>
                            </td>
                            <td colspan="2" style="text-align:center">
                            <p><strong>Saldo&nbsp;</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Saldo Akhir</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align:center">
                            <p><strong>Debit&nbsp;</strong></p>
                            </td>
                            <td style="text-align:center">
                            <p><strong>Kredit&nbsp;</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>1-Jan-2023</p>
                            </td>
                            <td>
                            <p>Saldo Awal&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp242,500,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp242,500,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp242,500,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>Nama Akun:&nbsp;</strong></p>
                            </td>
                            <td>
                            <p><strong>Ekuitas</strong></p>
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Tanggal</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Keterangan&nbsp;</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Debit&nbsp;</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Kredit&nbsp;</strong></p>
                            </td>
                            <td colspan="2" style="text-align:center">
                            <p><strong>Saldo&nbsp;</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Saldo Akhir</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align:center">
                            <p><strong>Debit&nbsp;</strong></p>
                            </td>
                            <td style="text-align:center">
                            <p><strong>Kredit&nbsp;</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>1-Jan-2023</p>
                            </td>
                            <td>
                            <p>Saldo Awal&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp118,922,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp118,922,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp118,922,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>Nama Akun:&nbsp;</strong></p>
                            </td>
                            <td colspan="2">
                            <p><strong>Diterima dari entitas lain&nbsp;</strong></p>
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Tanggal</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Keterangan&nbsp;</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Debit&nbsp;</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Kredit&nbsp;</strong></p>
                            </td>
                            <td colspan="2" style="text-align:center">
                            <p><strong>Saldo&nbsp;</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Saldo Akhir</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align:center">
                            <p><strong>Debit&nbsp;</strong></p>
                            </td>
                            <td style="text-align:center">
                            <p><strong>Kredit&nbsp;</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>5-Jan-2023</p>
                            </td>
                            <td>
                            <p>Pendapatan sewa gedung&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp120,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp120,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp120,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>3-Aug-2023</p>
                            </td>
                            <td>
                            <p>KPPN</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp500,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp500,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp120,500,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>Nama Akun:&nbsp;</strong></p>
                            </td>
                            <td colspan="2">
                            <p><strong>Piutang Pendapatan</strong></p>
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Tanggal</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Keterangan&nbsp;</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Debit&nbsp;</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Kredit&nbsp;</strong></p>
                            </td>
                            <td colspan="2" style="text-align:center">
                            <p><strong>Saldo&nbsp;</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Saldo Akhir</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align:center">
                            <p><strong>Debit&nbsp;</strong></p>
                            </td>
                            <td style="text-align:center">
                            <p><strong>Kredit&nbsp;</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>Nama Akun:&nbsp;</strong></p>
                            </td>
                            <td>
                            <p><strong>Pendapatan&nbsp;</strong></p>
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Tanggal</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Keterangan&nbsp;</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Debit&nbsp;</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Kredit&nbsp;</strong></p>
                            </td>
                            <td colspan="2" style="text-align:center">
                            <p><strong>Saldo&nbsp;</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Saldo Akhir</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align:center">
                            <p><strong>Debit&nbsp;</strong></p>
                            </td>
                            <td style="text-align:center">
                            <p><strong>Kredit&nbsp;</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>5-Jan-2023</p>
                            </td>
                            <td>
                            <p>Kontrak Sewa Gedung</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp120,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp120,000,000</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp120,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>31-Dec-2023</p>
                            </td>
                            <td>
                            <p>Penyesuaian Sewa Gedung&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp96,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp96,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp24,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>Nama Akun:&nbsp;</strong></p>
                            </td>
                            <td colspan="2">
                            <p><strong>Pendapatan diterima di muka</strong></p>
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Tanggal</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Keterangan&nbsp;</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Debit&nbsp;</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Kredit&nbsp;</strong></p>
                            </td>
                            <td colspan="2" style="text-align:center">
                            <p><strong>Saldo&nbsp;</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Saldo Akhir</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align:center">
                            <p><strong>Debit&nbsp;</strong></p>
                            </td>
                            <td style="text-align:center">
                            <p><strong>Kredit&nbsp;</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>31-Dec-2023</p>
                            </td>
                            <td>
                            <p>Penyesuaian Sewa Gedung&nbsp;</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp96,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp96,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>Nama Akun:&nbsp;</strong></p>
                            </td>
                            <td colspan="2">
                            <p><strong>Persediaan yang belum diregister</strong></p>
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Tanggal</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Keterangan&nbsp;</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Debit&nbsp;</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Kredit&nbsp;</strong></p>
                            </td>
                            <td colspan="2" style="text-align:center">
                            <p><strong>Saldo&nbsp;</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Saldo Akhir</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align:center">
                            <p><strong>Debit&nbsp;</strong></p>
                            </td>
                            <td style="text-align:center">
                            <p><strong>Kredit&nbsp;</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>5-Jan-2023</p>
                            </td>
                            <td>
                            <p>Pengadaan</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp150,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp150,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp150,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>7-Jan-2023</p>
                            </td>
                            <td>
                            <p>Pembukuan</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp150,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp150,000,000</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>Nama Akun:&nbsp;</strong></p>
                            </td>
                            <td colspan="2">
                            <p><strong>Utang yang masih belum diterima tagihannya</strong></p>
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Tanggal</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Keterangan&nbsp;</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Debit&nbsp;</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Kredit&nbsp;</strong></p>
                            </td>
                            <td colspan="2" style="text-align:center">
                            <p><strong>Saldo&nbsp;</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Saldo Akhir</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align:center">
                            <p><strong>Debit&nbsp;</strong></p>
                            </td>
                            <td style="text-align:center">
                            <p><strong>Kredit&nbsp;</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>5-Jan-2023</p>
                            </td>
                            <td>
                            <p>Pengadaan</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp150,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp150,000,000</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp150,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>7-Jan-2023</p>
                            </td>
                            <td>
                            <p>Tagihan persediaan</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp150,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp150,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>15-Feb-2023</p>
                            </td>
                            <td>
                            <p>Akomodasi hotel</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp50,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp50,000,000</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp50,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>16-Feb-2023</p>
                            </td>
                            <td>
                            <p>Tagihan</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp50,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp50,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>17-Mar-2023</p>
                            </td>
                            <td>
                            <p>Komitmen peralatan dan mesin</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp7,800,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp7,800,000</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp7,800,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>17-Mar-2023</p>
                            </td>
                            <td>
                            <p>Tagihan peralatan dan mesin</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp7,800,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp7,800,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>Nama Akun:&nbsp;</strong></p>
                            </td>
                            <td colspan="2">
                            <p><strong>Belanja barang yang masih harus dibayar</strong></p>
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Tanggal</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Keterangan&nbsp;</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Debit&nbsp;</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Kredit&nbsp;</strong></p>
                            </td>
                            <td colspan="2" style="text-align:center">
                            <p><strong>Saldo&nbsp;</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Saldo Akhir</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align:center">
                            <p><strong>Debit&nbsp;</strong></p>
                            </td>
                            <td style="text-align:center">
                            <p><strong>Kredit&nbsp;</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>7-Jan-2023</p>
                            </td>
                            <td>
                            <p>Tagihan persediaan</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp150,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp150,000,000</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp150,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>7-Jan-2023</p>
                            </td>
                            <td>
                            <p>SP2D</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp150,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp150,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>15-Feb-2023</p>
                            </td>
                            <td>
                            <p>Akomodasi hotel</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp50,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp50,000,000</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp50,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>16-Feb-2023</p>
                            </td>
                            <td>
                            <p>Tagihan</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp50,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp50,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>Nama Akun:&nbsp;</strong></p>
                            </td>
                            <td colspan="2">
                            <p><strong>Ditagihkan ke entitas lain</strong></p>
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Tanggal</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Keterangan&nbsp;</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Debit&nbsp;</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Kredit&nbsp;</strong></p>
                            </td>
                            <td colspan="2" style="text-align:center">
                            <p><strong>Saldo&nbsp;</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Saldo Akhir</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align:center">
                            <p><strong>Debit&nbsp;</strong></p>
                            </td>
                            <td style="text-align:center">
                            <p><strong>Kredit&nbsp;</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>7-Jan-2023</p>
                            </td>
                            <td>
                            <p>SP2D Belanja Barang&nbsp;</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp150,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp150,000,000</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp150,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>16-Feb-2023</p>
                            </td>
                            <td>
                            <p>SP2D Belanja Jasa</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp50,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp50,000,000</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp200,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>17-Mar-2023</p>
                            </td>
                            <td>
                            <p>SP2D Belanja Modal</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp7,800,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp7,800,000</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp207,800,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>2-Apr-2023</p>
                            </td>
                            <td>
                            <p>Gaji&nbsp;</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp100,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp100,000,000</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp307,800,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>20-May-2023</p>
                            </td>
                            <td>
                            <p>SP2D GU</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp8,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp8,000,000</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp315,800,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>Nama Akun:&nbsp;</strong></p>
                            </td>
                            <td>
                            <p><strong>Beban Persediaan</strong></p>
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Tanggal</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Keterangan&nbsp;</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Debit&nbsp;</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Kredit&nbsp;</strong></p>
                            </td>
                            <td colspan="2" style="text-align:center">
                            <p><strong>Saldo&nbsp;</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Saldo Akhir</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align:center">
                            <p><strong>Debit&nbsp;</strong></p>
                            </td>
                            <td style="text-align:center">
                            <p><strong>Kredit&nbsp;</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>31-Dec-2023</p>
                            </td>
                            <td>
                            <p>Penyesuaian&nbsp;</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp165,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp165,000,000</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp165,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>Nama Akun:&nbsp;</strong></p>
                            </td>
                            <td colspan="2">
                            <p><strong>Aset Tetap yang belum Diregister</strong></p>
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Tanggal</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Keterangan&nbsp;</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Debit&nbsp;</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Kredit&nbsp;</strong></p>
                            </td>
                            <td colspan="2" style="text-align:center">
                            <p><strong>Saldo&nbsp;</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Saldo Akhir</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align:center">
                            <p><strong>Debit&nbsp;</strong></p>
                            </td>
                            <td style="text-align:center">
                            <p><strong>Kredit&nbsp;</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>17-Mar-2023</p>
                            </td>
                            <td>
                            <p>Komitmen BAST</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp7,800,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp7,800,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp7,800,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>17-Mar-2023</p>
                            </td>
                            <td>
                            <p>Pencatatan&nbsp;</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp7,800,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp7,800,000</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>Nama Akun:&nbsp;</strong></p>
                            </td>
                            <td colspan="2">
                            <p><strong>Belanja Modal yang masih harus dibayar</strong></p>
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Tanggal</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Keterangan&nbsp;</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Debit&nbsp;</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Kredit&nbsp;</strong></p>
                            </td>
                            <td colspan="2" style="text-align:center">
                            <p><strong>Saldo&nbsp;</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Saldo Akhir</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align:center">
                            <p><strong>Debit&nbsp;</strong></p>
                            </td>
                            <td style="text-align:center">
                            <p><strong>Kredit&nbsp;</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>17-Mar-2023</p>
                            </td>
                            <td>
                            <p>Resume tagihan&nbsp;</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp7,800,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp7,800,000</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp7,800,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>17-Mar-2023</p>
                            </td>
                            <td>
                            <p>Pencatatan Aset</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp7,800,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp7,800,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>Nama Akun:&nbsp;</strong></p>
                            </td>
                            <td>
                            <p><strong>Beban penyusutan&nbsp;</strong></p>
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Tanggal</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Keterangan&nbsp;</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Debit&nbsp;</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Kredit&nbsp;</strong></p>
                            </td>
                            <td colspan="2" style="text-align:center">
                            <p><strong>Saldo&nbsp;</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Saldo Akhir</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align:center">
                            <p><strong>Debit&nbsp;</strong></p>
                            </td>
                            <td style="text-align:center">
                            <p><strong>Kredit&nbsp;</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>31-Dec-2023</p>
                            </td>
                            <td>
                            <p>Peralatan dan Mesin&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp1,600,975,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp1,600,975,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp1,600,975,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>31-Dec-2023</p>
                            </td>
                            <td>
                            <p>Gedung dan Bangunan&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp2,250,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp2,250,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp3,850,975,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>31-Dec-2023</p>
                            </td>
                            <td>
                            <p>Jalan, Irigasi, dan Jaringan&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp86,700,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp86,700,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp3,937,675,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>31-Dec-2023</p>
                            </td>
                            <td>
                            <p>Aset Tetap Lainnya&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp13,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp13,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp3,950,675,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>Nama Akun:&nbsp;</strong></p>
                            </td>
                            <td colspan="2">
                            <p><strong>Akumulasi penyusutan</strong></p>
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Tanggal</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Keterangan&nbsp;</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Debit&nbsp;</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Kredit&nbsp;</strong></p>
                            </td>
                            <td colspan="2" style="text-align:center">
                            <p><strong>Saldo&nbsp;</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Saldo Akhir</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align:center">
                            <p><strong>Debit&nbsp;</strong></p>
                            </td>
                            <td style="text-align:center">
                            <p><strong>Kredit&nbsp;</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>31-Dec-2023</p>
                            </td>
                            <td>
                            <p>Peralatan dan Mesin&nbsp;</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp1,600,975,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp1,600,975,000</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp1,600,975,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>31-Dec-2023</p>
                            </td>
                            <td>
                            <p>Gedung dan Bangunan&nbsp;</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp2,250,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp2,250,000,000</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp3,850,975,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>31-Dec-2023</p>
                            </td>
                            <td>
                            <p>Jalan, Irigasi, dan Jaringan&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp96,000,000</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp86,700,000</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp96,000,000</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp86,700,000</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp3,841,675,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>31-Dec-2023</p>
                            </td>
                            <td>
                            <p>Aset Tetap Lainnya&nbsp;</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp13,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp13,000,000</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp3,854,675,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>Nama Akun:&nbsp;</strong></p>
                            </td>
                            <td>
                            <p><strong>Beban Pegawai</strong></p>
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Tanggal</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Keterangan&nbsp;</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Debit&nbsp;</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Kredit&nbsp;</strong></p>
                            </td>
                            <td colspan="2" style="text-align:center">
                            <p><strong>Saldo&nbsp;</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Saldo Akhir</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align:center">
                            <p><strong>Debit&nbsp;</strong></p>
                            </td>
                            <td style="text-align:center">
                            <p><strong>Kredit&nbsp;</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>20-May-2023</p>
                            </td>
                            <td>
                            <p>Beban Pegawai</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp100,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp100,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp100,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>Nama Akun:&nbsp;</strong></p>
                            </td>
                            <td colspan="2">
                            <p><strong>Belanja yang masih harus dibayar</strong></p>
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Tanggal</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Keterangan&nbsp;</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Debit&nbsp;</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Kredit&nbsp;</strong></p>
                            </td>
                            <td colspan="2" style="text-align:center">
                            <p><strong>Saldo&nbsp;</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Saldo Akhir</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align:center">
                            <p><strong>Debit&nbsp;</strong></p>
                            </td>
                            <td style="text-align:center">
                            <p><strong>Kredit&nbsp;</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>7-Jan-2023</p>
                            </td>
                            <td>
                            <p>Belanja modal</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp150,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp150,000,000</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp150,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>7-Jan-2023</p>
                            </td>
                            <td>
                            <p>Belanja modal</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp150,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp150,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>15-Feb-2023</p>
                            </td>
                            <td>
                            <p>Belanja Jasa</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp50,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp50,000,000</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp50,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>16-Feb-2023</p>
                            </td>
                            <td>
                            <p>Belanja Jasa</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp50,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp50,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>17-Mar-2023</p>
                            </td>
                            <td>
                            <p>Belanja Modal</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp7,800,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp7,800,000</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp7,800,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>17-Mar-2023</p>
                            </td>
                            <td>
                            <p>Belanja Modal</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp7,800,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp7,800,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>2-Apr-2023</p>
                            </td>
                            <td>
                            <p>Belanja Pegawai&nbsp;</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp100,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp100,000,000</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp100,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>2-Apr-2023</p>
                            </td>
                            <td>
                            <p>Belanja Pegawai&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp100,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp100,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>Nama Akun:&nbsp;</strong></p>
                            </td>
                            <td>
                            <p><strong>Beban Jasa</strong></p>
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Tanggal</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Keterangan&nbsp;</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Debit&nbsp;</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Kredit&nbsp;</strong></p>
                            </td>
                            <td colspan="2" style="text-align:center">
                            <p><strong>Saldo&nbsp;</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Saldo Akhir</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align:center">
                            <p><strong>Debit&nbsp;</strong></p>
                            </td>
                            <td style="text-align:center">
                            <p><strong>Kredit&nbsp;</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>16-Feb-2023</p>
                            </td>
                            <td>
                            <p>Akomodasi Hotel</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp50,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp50,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp50,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>20-May-2023</p>
                            </td>
                            <td>
                            <p>Operasional Kantor</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp5,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp5,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp55,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>Nama Akun:&nbsp;</strong></p>
                            </td>
                            <td>
                            <p><strong>Beban Pemeliharaan</strong></p>
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Tanggal</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Keterangan&nbsp;</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Debit&nbsp;</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Kredit&nbsp;</strong></p>
                            </td>
                            <td colspan="2" style="text-align:center">
                            <p><strong>Saldo&nbsp;</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Saldo Akhir</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align:center">
                            <p><strong>Debit&nbsp;</strong></p>
                            </td>
                            <td style="text-align:center">
                            <p><strong>Kredit&nbsp;</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>20-May-2023</p>
                            </td>
                            <td>
                            <p>Servis</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp3,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp3,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp3,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>Nama Akun:&nbsp;</strong></p>
                            </td>
                            <td>
                            <p><strong>Beban Perjalanan&nbsp;</strong></p>
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Tanggal</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Keterangan&nbsp;</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Debit&nbsp;</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Kredit&nbsp;</strong></p>
                            </td>
                            <td colspan="2" style="text-align:center">
                            <p><strong>Saldo&nbsp;</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Saldo Akhir</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align:center">
                            <p><strong>Debit&nbsp;</strong></p>
                            </td>
                            <td style="text-align:center">
                            <p><strong>Kredit&nbsp;</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>Nama Akun:&nbsp;</strong></p>
                            </td>
                            <td>
                            <p><strong>Pendapatan yang Ditangguhkan</strong></p>
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Tanggal</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Keterangan&nbsp;</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Debit&nbsp;</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Kredit&nbsp;</strong></p>
                            </td>
                            <td colspan="2" style="text-align:center">
                            <p><strong>Saldo&nbsp;</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Saldo Akhir</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align:center">
                            <p><strong>Debit&nbsp;</strong></p>
                            </td>
                            <td style="text-align:center">
                            <p><strong>Kredit&nbsp;</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td style="text-align:right">Rp0</td>
                        </tr>
                    </tbody>
                </table>
                
                <p>&nbsp;</p>
                
                <p><strong>B. Buku Besar Kas</strong></p>
                
                <table>
                    <tbody>
                        <tr>
                            <td colspan="5" style="text-align:center">
                            <p><strong>KEMENTERIAN X</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="5" style="text-align:center">
                            <p><strong>DIREKTORAT JENDERAL X</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="5" style="text-align:center">
                            <p><strong>SATUAN KERJA ABC</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="5" style="text-align:center">
                            <p><strong>BUKU BESAR KAS</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>Nama Akun:</strong></p>
                            </td>
                            <td>
                            <p><strong>Diterima dari entitas lain</strong></p>
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Tanggal</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Keterangan</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Debit</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Kredit</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Saldo Akhir</strong></p>
                            </td>
                        </tr>
                        <tr>
                        </tr>
                        <tr>
                            <td>
                            <p>5-Jan-2023</p>
                            </td>
                            <td>
                            <p>Pendapatan Sewa</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp120,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp120,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>3-Aug-2023</p>
                            </td>
                            <td>
                            <p>KPPN</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp500,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp120,500,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>Nama Akun:</strong></p>
                            </td>
                            <td>
                            <p><strong>Pendapatan</strong></p>
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Tanggal</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Keterangan</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Debit</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Kredit</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Saldo Akhir</strong></p>
                            </td>
                        </tr>
                        <tr>
                        </tr>
                        <tr>
                            <td>
                            <p>5-Jan-2023</p>
                            </td>
                            <td>
                            <p>Pendapatan Sewa</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp120,000,000</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp120,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>Nama Akun:</strong></p>
                            </td>
                            <td>
                            <p><strong>Ditagihkan ke entitas lain</strong></p>
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Tanggal</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Keterangan</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Debit</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Kredit</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Saldo Akhir</strong></p>
                            </td>
                        </tr>
                        <tr>
                        </tr>
                        <tr>
                            <td>
                            <p>7-Jan-2023</p>
                            </td>
                            <td>
                            <p>SP2D Persediaan</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp150,000,000</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp150,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>16-Feb-2023</p>
                            </td>
                            <td>
                            <p>Akomodasi Hotel</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp50,000,000</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp200,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>17-Mar-2023</p>
                            </td>
                            <td>
                            <p>Belanja Modal</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp7,800,000</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp207,800,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>2-Apr-2023</p>
                            </td>
                            <td>
                            <p>Belanja Pegawai</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp100,000,000</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp307,800,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>20-May-2023</p>
                            </td>
                            <td>
                            <p>GUP</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp8,000,000</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp315,800,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>Nama Akun:</strong></p>
                            </td>
                            <td>
                            <p><strong>Belanja Modal</strong></p>
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Tanggal</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Keterangan</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Debit</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Kredit</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Saldo Akhir</strong></p>
                            </td>
                        </tr>
                        <tr>
                        </tr>
                        <tr>
                            <td>
                            <p>17-Mar-2023</p>
                            </td>
                            <td>
                            <p>Belanja Modal</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp7,800,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp7,800,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>Nama Akun:</strong></p>
                            </td>
                            <td>
                            <p><strong>Belanja Pegawai</strong></p>
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Tanggal</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Keterangan</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Debit</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Kredit</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Saldo Akhir</strong></p>
                            </td>
                        </tr>
                        <tr>
                        </tr>
                        <tr>
                            <td>
                            <p>2-Apr-2023</p>
                            </td>
                            <td>
                            <p>Belanja Pegawai</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp100,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp100,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>Nama Akun:</strong></p>
                            </td>
                            <td>
                            <p><strong>Belanja Barang dan Jasa</strong></p>
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Tanggal</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Keterangan</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Debit</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Kredit</strong></p>
                            </td>
                            <td rowspan="2" style="text-align:center">
                            <p><strong>Saldo Akhir</strong></p>
                            </td>
                        </tr>
                        <tr>
                        </tr>
                        <tr>
                            <td>
                            <p>7-Jan-2023</p>
                            </td>
                            <td>
                            <p>SP2D Persediaan</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp150,000,000</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp150,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>16-Feb-2023</p>
                            </td>
                            <td>
                            <p>Akomodasi Hotel</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp50,000,000</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp200,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>20-May-2023</p>
                            </td>
                            <td>
                            <p>Belanja jasa</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp8,000,000</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp208,000,000</p>
                            </td>
                        </tr>
                    </tbody>
                </table>',
            'key_answer_3'  => '<table>
                    <tbody>
                        <tr>
                            <td colspan="4" style="text-align:center">
                            <p><strong>KEMENTERIAN X</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4" style="text-align:center">
                            <p><strong>DIREKTORAT JENDERAL X</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4" style="text-align:center">
                            <p><strong>SATUAN KERJA ABC</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4" style="text-align:center">
                            <p><strong>JURNAL PENYESUAIAN AKRUAL</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align:center">
                            <p><strong>Tanggal</strong></p>
                            </td>
                            <td style="text-align:center">
                            <p><strong>Keterangan</strong></p>
                            </td>
                            <td style="text-align:center">
                            <p><strong>Debit</strong></p>
                            </td>
                            <td style="text-align:center">
                            <p><strong>Kredit</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>31-Dec-2023</p>
                            </td>
                            <td>
                            <p>Beban persediaan</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp165,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                            <p>Persediaan</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp165,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                            <p><em>(mencatat persediaan)</em></p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>31-Dec-2023</p>
                            </td>
                            <td>
                            <p>Beban penyusutan peralatan dan mesin</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp975,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                            <p>Akumulasi penyusutan peralatan dan mesin</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp975,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                            <p><em>(mencatat penyusutan peralatan dan mesin)</em></p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>31-Dec-2023</p>
                            </td>
                            <td>
                            <p>Beban penyusutan peralatan dan mesin</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp1,600,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                            <p>Akumulasi penyusutan peralatan dan mesin</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp1,600,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                            <p><em>(mencatat penyusutan peralatan dan mesin)</em></p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>31-Dec-2023</p>
                            </td>
                            <td>
                            <p>Beban penyusutan gedung dan bangunann</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp2,250,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                            <p>Akumulasi penyusutan gedung dan bangunan</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp2,250,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                            <p><em>(mencatat penyusutan peralatan dan mesin)</em></p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>31-Dec-2023</p>
                            </td>
                            <td>
                            <p>Beban penyusutan jalan,irigasi dan jaringan</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp86,700,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                            <p>Akumulasi penyusutan jalan,irigasi dan jaringan</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp86,700,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                            <p><em>(mencatat penyusutan jalan,irigasi dan jaringan)</em></p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>31-Dec-2023</p>
                            </td>
                            <td>
                            <p>Beban penyusutan aset tetap lainnya</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp13,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                            <p>Akumulasi penyusutan aset tetap lainnya</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp13,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                            <p><em>(mencatat penyusutan aset tetap lainnya)</em></p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>31-Dec-2023</p>
                            </td>
                            <td>
                            <p>Beban Jasa</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp10,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                            <p>Uang Muka Belanja</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp10,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                            <p><em>(Mencatat penyesuaian uang muka belanja)</em></p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>31-Dec-2023</p>
                            </td>
                            <td>
                            <p>Pendapatan diterima dimuka</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp96,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                            <p>Pendapatan</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp96,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                            <p><em>(Mencatat penyesuaian uang muka belanja)</em></p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                    </tbody>
                </table>',
            'key_answer_4'  => '<table>
                    <thead>
                        <tr>
                            <th colspan="12" scope="col" style="text-align:center">
                            <p>KEMENTERIAN X</p>
                            </th>
                        </tr>
                        <tr>
                            <th colspan="12" scope="col" style="text-align:center">
                            <p>DIREKTORAT JENDERAL X</p>
                            </th>
                        </tr>
                        <tr>
                            <th colspan="12" scope="col" style="text-align:center">
                            <p>SATUAN KERJA ABC</p>
                            </th>
                        </tr>
                        <tr>
                            <th colspan="12" scope="col" style="text-align:center">
                            <p>NERACA LAJUR</p>
                            </th>
                        </tr>
                        <tr>
                            <th rowspan="2" scope="col" style="text-align:center">
                            <p>No</p>
                            </th>
                            <th rowspan="2" scope="col" style="text-align:center">
                            <p>Keterangan</p>
                            </th>
                            <th colspan="2" scope="col" style="text-align:center">
                            <p>Neraca Saldo Sebelum Disesuaikan</p>
                            </th>
                            <th colspan="2" scope="col" style="text-align:center">
                            <p>Penyesuaian</p>
                            </th>
                            <th colspan="2" scope="col" style="text-align:center">
                            <p>NS Setelah Disesuaikan</p>
                            </th>
                            <th colspan="2" scope="col" style="text-align:center">
                            <p>Laporan Operasional</p>
                            </th>
                            <th colspan="2" scope="col" style="text-align:center">
                            <p>Neraca</p>
                            </th>
                        </tr>
                        <tr>
                            <th scope="col" style="text-align:center">
                            <p>Debit</p>
                            </th>
                            <th scope="col" style="text-align:center">
                            <p>Kredit</p>
                            </th>
                            <th scope="col" style="text-align:center">
                            <p>Debit</p>
                            </th>
                            <th scope="col" style="text-align:center">
                            <p>Kredit</p>
                            </th>
                            <th scope="col" style="text-align:center">
                            <p>Debit</p>
                            </th>
                            <th scope="col" style="text-align:center">
                            <p>Kredit</p>
                            </th>
                            <th scope="col" style="text-align:center">
                            <p>Debit</p>
                            </th>
                            <th scope="col" style="text-align:center">
                            <p>Kredit</p>
                            </th>
                            <th scope="col" style="text-align:center">
                            <p>Debit</p>
                            </th>
                            <th scope="col" style="text-align:center">
                            <p>Kredit</p>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                            <p>1</p>
                            </td>
                            <td>
                            <p>Kas di Bendahara Penerimaan</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>2</p>
                            </td>
                            <td>
                            <p>Uang Muka Belanja Barang</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp20,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp20,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp20,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>3</p>
                            </td>
                            <td>
                            <p>Persediaan</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp265,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp165,000,000</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp100,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp100,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>4</p>
                            </td>
                            <td>
                            <p>Tanah</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp57,000,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp57,000,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp57,000,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>5</p>
                            </td>
                            <td>
                            <p>Peralatan dan Mesin</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp16,007,800,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp16,007,800,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp16,007,800,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>6</p>
                            </td>
                            <td>
                            <p>Gedung dan Bangunan</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp45,000,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp45,000,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp45,000,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>7</p>
                            </td>
                            <td>
                            <p>Jalan Irigasi dan Jaringan</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp867,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp867,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp867,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>8</p>
                            </td>
                            <td>
                            <p>Aset Tetap Lainnya</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp130,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp130,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp130,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>9</p>
                            </td>
                            <td>
                            <p>Aset Lain-Lain</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp32,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp32,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp32,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>10</p>
                            </td>
                            <td>
                            <p>Utang kepada Pihak Ketiga</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp242,500,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp242,500,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp242,500,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>11</p>
                            </td>
                            <td>
                            <p>Ekuitas</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp118,922,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp118,922,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp118,922,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>12</p>
                            </td>
                            <td>
                            <p>Diterima dari Entitas Lain</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp120,500,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp120,500,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp120,500,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>13</p>
                            </td>
                            <td>
                            <p>Pendapatan</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp120,000,000</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp96,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp24,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp24,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>14</p>
                            </td>
                            <td>
                            <p>Pendapatan diterima Dimuka</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>0</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp96,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp96,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp96,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>15</p>
                            </td>
                            <td>
                            <p>Ditagihkan ke Entitas Lain</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp315,800,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp315,800,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp315,800,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>16</p>
                            </td>
                            <td>
                            <p>Beban Persediaan</p>
                            </td>
                            <td style="text-align:right">
                            <p>0</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp165,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp165,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp165,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>17</p>
                            </td>
                            <td>
                            <p>Beban Penyusutan</p>
                            </td>
                            <td style="text-align:right">
                            <p>0</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp3,950,675,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp3,950,675,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp3,950,675,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>18</p>
                            </td>
                            <td>
                            <p>Akumulasi Penyusutan</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp3,950,675,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp3,950,675,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp3,950,675,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>19</p>
                            </td>
                            <td>
                            <p>Beban Pegawai</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp100,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp100,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp100,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>20</p>
                            </td>
                            <td>
                            <p>Belanja yang masih Harus Dibayar</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>21</p>
                            </td>
                            <td>
                            <p>Beban Jasa</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp55,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp55,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp55,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>22</p>
                            </td>
                            <td>
                            <p>Beban Pemeliharaan</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp3,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp3,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp3,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>23</p>
                            </td>
                            <td>
                            <p>Beban Perjalanan</p>
                            </td>
                            <td style="text-align:right">
                            <p>0</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>24</p>
                            </td>
                            <td>
                            <p>Pendapatan yang Ditangguhkan</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>0</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                            <p><strong>Jumlah</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>Rp119,600,300,000</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>Rp119,600,300,000</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>Rp4,211,675,000</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>Rp4,211,675,000</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>Rp123,550,975,000</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>Rp123,550,975,000</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>Rp4,273,675,000</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>Rp24,000,000</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>Rp119,277,300,000</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>Rp123,526,975,000</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                            <p>SURPLUS/DEFISIT</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp4,249,675,000</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp4,249,675,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                            <p><strong>Jumlah Akhir</strong></p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p><strong>Rp4,273,675,000</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>Rp4,273,675,000</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>Rp123,526,975,000</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>Rp123,526,975,000</strong></p>
                            </td>
                        </tr>
                    </tbody>
                </table>',
            'key_answer_5'  => '<p><strong>A. Laporan realisasi anggaran</strong></p>
                <table>
                    <tbody>
                        <tr>
                            <td colspan="5" style="text-align:center">
                            <p><strong>KEMENTERIAN X</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="5" style="text-align:center">
                            <p><strong>DIREKTORAT JENDERAL X</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="5" style="text-align:center">
                            <p><strong>LAPORAN REALISASI ANGGARAN</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="5" style="text-align:center">
                            <p><strong>UNTUK TAHUN YANG BERAKHIR SAMPAI DENGAN 31 DESEMBER 2023</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align:center">
                            <p><strong>No</strong></p>
                            </td>
                            <td style="text-align:center">
                            <p><strong>Uraian</strong></p>
                            </td>
                            <td style="text-align:center">
                            <p><strong>Anggaran 2023</strong></p>
                            </td>
                            <td style="text-align:center">
                            <p><strong>Realisasi 2023</strong></p>
                            </td>
                            <td style="text-align:center">
                            <p><strong>%</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>1</p>
                            </td>
                            <td>
                            <p><strong>PENDAPATAN</strong></p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>2</p>
                            </td>
                            <td>
                            <p><strong>PENDAPATAN PERPAJAKAN</strong></p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>3</p>
                            </td>
                            <td>
                            <p>Pendapatan Pajak Penghasilan</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                            <td style="text-align:right">
                            <p>0.00%</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>4</p>
                            </td>
                            <td>
                            <p>Pendapatan PPN dan PPNBM</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                            <td style="text-align:right">
                            <p>0.00%</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>5</p>
                            </td>
                            <td>
                            <p>Pendapatan Pajak Bumi dan Bangunan</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                            <td style="text-align:right">
                            <p>0.00%</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>6</p>
                            </td>
                            <td>
                            <p>Pendapatan Bea Perolehan Hak atas Tanah dan Bangunan</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                            <td style="text-align:right">
                            <p>0.00%</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>7</p>
                            </td>
                            <td>
                            <p>Pendapatan Cukai</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                            <td style="text-align:right">
                            <p>0.00%</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>8</p>
                            </td>
                            <td>
                            <p>Pendapatan Bea Masuk</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                            <td style="text-align:right">
                            <p>0.00%</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>9</p>
                            </td>
                            <td>
                            <p>Pendapatan Pajak Ekspor</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                            <td style="text-align:right">
                            <p>0.00%</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>10</p>
                            </td>
                            <td>
                            <p>Pendapatan Pajak Lainnya</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                            <td style="text-align:right">
                            <p>0.00%</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>11</p>
                            </td>
                            <td>
                            <p><strong>Jumlah Pendapatan Perpajakan</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>Rp0</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>Rp0</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>0.00%</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>12</p>
                            </td>
                            <td>
                            <p><strong>PENDAPATAN NEGARA BUKAN PAJAK</strong></p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>13</p>
                            </td>
                            <td>
                            <p>Pendapatan Sumber Daya Alam</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                            <td style="text-align:right">
                            <p>0.00%</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>14</p>
                            </td>
                            <td>
                            <p>Pendapatan Bagian Pemerintah Atas Laba</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                            <td style="text-align:right">
                            <p>0.00%</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>15</p>
                            </td>
                            <td>
                            <p>Pendapatan Negara Bukan Pajak Lainnya</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp200,000,000</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp120,000,000</p>
                            </td>
                            <td style="text-align:right">
                            <p>60.00%</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>16</p>
                            </td>
                            <td>
                            <p><strong>Jumlah Pendapatan Negara Bukan Pajak</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>Rp200,000,000</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>Rp120,000,000</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>60.00%</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>17</p>
                            </td>
                            <td>
                            <p><strong>PENDAPATAN HIBAH</strong></p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>18</p>
                            </td>
                            <td>
                            <p>Pendapatan Hibah</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                            <td style="text-align:right">
                            <p>0.00%</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>19</p>
                            </td>
                            <td>
                            <p><strong>Jumlah Pendapatan Hibah</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>Rp0</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>Rp0</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>0.00%</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>20</p>
                            </td>
                            <td>
                            <p><strong>JUMLAH PENDAPATAN</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>Rp200,000,000</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>Rp120,000,000</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>60.00%</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>21</p>
                            </td>
                            <td>
                            <p><strong>BELANJA</strong></p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>22</p>
                            </td>
                            <td>
                            <p><strong>BELANJA OPERASI</strong></p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>23</p>
                            </td>
                            <td>
                            <p>Belanja Pegawai</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp1,931,958,000</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp100,000,000</p>
                            </td>
                            <td style="text-align:right">
                            <p>5.18%</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>24</p>
                            </td>
                            <td>
                            <p>Belanja Barang dan Jasa</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp1,084,332,000</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp208,000,000</p>
                            </td>
                            <td style="text-align:right">
                            <p>19.18%</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>25</p>
                            </td>
                            <td>
                            <p>Bunga</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                            <td style="text-align:right">
                            <p>0.00%</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>26</p>
                            </td>
                            <td>
                            <p>Subsidi</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                            <td style="text-align:right">
                            <p>0.00%</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>27</p>
                            </td>
                            <td>
                            <p>Hibah</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                            <td style="text-align:right">
                            <p>0.00%</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>28</p>
                            </td>
                            <td>
                            <p>Bantuan Sosial</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                            <td style="text-align:right">
                            <p>0.00%</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>29</p>
                            </td>
                            <td>
                            <p>Belanja Lain-Lain</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                            <td style="text-align:right">
                            <p>0.00%</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>30</p>
                            </td>
                            <td>
                            <p><strong>Jumlah Belanja Operasi</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>Rp3,016,290,000</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>Rp308,000,000</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>10.21%</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>31</p>
                            </td>
                            <td>
                            <p><strong>BELANJA MODAL</strong></p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>32</p>
                            </td>
                            <td>
                            <p>Belanja Tanah</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>33</p>
                            </td>
                            <td>
                            <p>Belanja Peralatan dan Mesin</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp7,800,000</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp7,800,000</p>
                            </td>
                            <td style="text-align:right">
                            <p>100.00%</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>34</p>
                            </td>
                            <td>
                            <p>Belanja Gedung dan Bangunan</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                            <td style="text-align:right">
                            <p>0.00%</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>35</p>
                            </td>
                            <td>
                            <p>Belanja Jalan, Irigasi, dan Jaringan</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                            <td style="text-align:right">
                            <p>0.00%</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>36</p>
                            </td>
                            <td>
                            <p>Belanja Aset Tetap Lainnya</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                            <td style="text-align:right">
                            <p>0.00%</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>37</p>
                            </td>
                            <td>
                            <p>Belanja Aset Lainnya</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                            <td style="text-align:right">
                            <p>0.00%</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>38</p>
                            </td>
                            <td>
                            <p><strong>Jumlah Belanja Modal</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>Rp7,800,000</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>Rp7,800,000</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>100.00%</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>39</p>
                            </td>
                            <td>
                            <p><strong>JUMLAH BELANJA</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>Rp3,024,090,000</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>Rp315,800,000</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>10.44%</strong></p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
                <p>&nbsp;</p>
                
                <p><strong>B. Laporan operasional&nbsp;</strong></p>
                
                <table>
                    <tbody>
                        <tr>
                            <td colspan="3" style="text-align:center">
                            <p><strong>KEMENTERIAN X</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" style="text-align:center">
                            <p><strong>DIREKTORAT JENDERAL X</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" style="text-align:center">
                            <p><strong>LAPORAN OPERASIONAL</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" style="text-align:center">
                            <p><strong>UNTUK TAHUN YANG BERAKHIR SAMPAI DENGAN 31 DESEMBER 2023</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align:center">
                            <p><strong>No</strong></p>
                            </td>
                            <td style="text-align:center">
                            <p><strong>Uraian</strong></p>
                            </td>
                            <td style="text-align:center">
                            <p><strong>2023</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>1</p>
                            </td>
                            <td>
                            <p><strong>PENDAPATAN</strong></p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>2</p>
                            </td>
                            <td>
                            <p><strong>PENDAPATAN PERPAJAKAN</strong></p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>3</p>
                            </td>
                            <td>
                            <p>Pendapatan Pajak Penghasilan</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>4</p>
                            </td>
                            <td>
                            <p>Pendapatan PPN dan PPNBM</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>5</p>
                            </td>
                            <td>
                            <p>Pendapatan Pajak Bumi dan Bangunan</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>6</p>
                            </td>
                            <td>
                            <p>Pendapatan Bea Perolehan Hak atas Tanah dan Bangunan</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>7</p>
                            </td>
                            <td>
                            <p>Pendapatan Cukai</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>8</p>
                            </td>
                            <td>
                            <p>Pendapatan Bea Masuk</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>9</p>
                            </td>
                            <td>
                            <p>Pendapatan Pajak Ekspor</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>10</p>
                            </td>
                            <td>
                            <p>Pendapatan Pajak Lainnya</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>11</p>
                            </td>
                            <td>
                            <p><strong>Jumlah Pendapatan Perpajakan</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>Rp0</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>12</p>
                            </td>
                            <td>
                            <p><strong>PENDAPATAN NEGARA BUKAN PAJAK</strong></p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>13</p>
                            </td>
                            <td>
                            <p>Pendapatan Sumber Daya Alam</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>14</p>
                            </td>
                            <td>
                            <p>Pendapatan Bagian Pemerintah Atas Laba</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>15</p>
                            </td>
                            <td>
                            <p>Pendapatan Negara Bukan Pajak Lainnya</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp24,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>16</p>
                            </td>
                            <td>
                            <p><strong>Jumlah Pendapatan Negara Bukan Pajak</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>Rp24,000,000</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>17</p>
                            </td>
                            <td>
                            <p><strong>PENDAPATAN HIBAH</strong></p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>18</p>
                            </td>
                            <td>
                            <p>Pendapatan Hibah</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>19</p>
                            </td>
                            <td>
                            <p><strong>Jumlah Pendapatan Hibah</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>Rp0</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>20</p>
                            </td>
                            <td>
                            <p><strong>JUMLAH PENDAPATAN</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>Rp24,000,000</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>21</p>
                            </td>
                            <td>
                            <p><strong>BEBAN</strong></p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>23</p>
                            </td>
                            <td>
                            <p>Beban Pegawai</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp100,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>24</p>
                            </td>
                            <td>
                            <p>Beban Persediaan</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp165,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>25</p>
                            </td>
                            <td>
                            <p>Beban Jasa</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp55,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>26</p>
                            </td>
                            <td>
                            <p>Beban Penyusutan</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp3,950,675,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>27</p>
                            </td>
                            <td>
                            <p>Beban Pemeliharaan</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp3,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>28</p>
                            </td>
                            <td>
                            <p>Beban Perjalanan</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>29</p>
                            </td>
                            <td>
                            <p><strong>Jumlah Beban</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>Rp4,273,675,000</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>31</p>
                            </td>
                            <td>
                            <p><strong>KEGIATAN NON OPERASIONAL</strong></p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>32</p>
                            </td>
                            <td>
                            <p>Surplus Penjualan Aset Non-Lancar</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>33</p>
                            </td>
                            <td>
                            <p>Surplus Penyelesaian Kewajiban Jk. Panjang</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>34</p>
                            </td>
                            <td>
                            <p>Defisit Penjualan Aset Non-Lancar</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>35</p>
                            </td>
                            <td>
                            <p>Defisit Penyelesaian Kewajiban Jk. Panjang</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>36</p>
                            </td>
                            <td>
                            <p>Surplus/Defisit dari Kegiatan Non-Operasional Lainnya</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>37</p>
                            </td>
                            <td>
                            <p><strong>Surplus/Defisit dari Kegiatan Non Operasional</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>Rp0</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>38</p>
                            </td>
                            <td>
                            <p><strong>Surplus/Defisit Sebelum Pos Luar Biasa</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>Rp0</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>39</p>
                            </td>
                            <td>
                            <p><strong>POS LUAR BIASA</strong></p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>40</p>
                            </td>
                            <td>
                            <p>Pendapatan Luar Biasa</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>41</p>
                            </td>
                            <td>
                            <p>Beban Luar Biasa</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>42</p>
                            </td>
                            <td>
                            <p><strong>Pos Luar Biasa</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>Rp0</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>42</p>
                            </td>
                            <td>
                            <p><strong>Surplus/Defisit LO</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>-Rp4,249,675,000</strong></p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
                <p>&nbsp;</p>
                
                <p><strong>C. Laporan perubahan ekuitas</strong></p>
                
                <table>
                    <tbody>
                        <tr>
                            <td colspan="3" style="text-align:center">
                            <p><strong>KEMENTERIAN X</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" style="text-align:center">
                            <p><strong>DIREKTORAT JENDERAL X</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" style="text-align:center">
                            <p><strong>LAPORAN PERUBAHAN EKUITAS</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" style="text-align:center">
                            <p><strong>UNTUK TAHUN YANG BERAKHIR SAMPAI DENGAN 31 DESEMBER 2023</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align:center">
                            <p><strong>No</strong></p>
                            </td>
                            <td style="text-align:center">
                            <p><strong>Uraian</strong></p>
                            </td>
                            <td style="text-align:center">
                            <p><strong>2023</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>1</p>
                            </td>
                            <td>
                            <p>Ekuitas Awal</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp118,922,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>2</p>
                            </td>
                            <td>
                            <p>Surplus/Defisit LO</p>
                            </td>
                            <td style="text-align:right">
                            <p>-Rp4,249,675,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>3</p>
                            </td>
                            <td>
                            <p>Dampak Kumulaitf Perubahan Kebijakan/Kesalahan</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>4</p>
                            </td>
                            <td>
                            <p>Koreksi Nilai Persediaan</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>5</p>
                            </td>
                            <td>
                            <p>Selisih Revaluasi Aset Tetap</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>6</p>
                            </td>
                            <td>
                            <p>Ditagihkan/Diterima Entitas Lain</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp195,300,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>7</p>
                            </td>
                            <td>
                            <p>Ekuitas Akhir</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp114,867,625,000</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
                <p>&nbsp;</p>
                
                <p><strong>D. Neraca</strong></p>
                
                <table>
                    <tbody>
                        <tr>
                            <td colspan="4" style="text-align:center">
                            <p><strong>KEMENTERIAN X</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4" style="text-align:center">
                            <p><strong>DIREKTORAT JENDERAL X</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4" style="text-align:center">
                            <p><strong>NERACA</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4" style="text-align:center">
                            <p><strong>UNTUK TAHUN YANG BERAKHIR SAMPAI DENGAN 31 DESEMBER 2023</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align:center">
                            <p><strong>No</strong></p>
                            </td>
                            <td style="text-align:center">
                            <p><strong>Uraian</strong></p>
                            </td>
                            <td style="text-align:center">
                            <p><strong>2023</strong></p>
                            </td>
                            <td style="text-align:center">
                            <p><strong>2022</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>1</p>
                            </td>
                            <td>
                            <p><strong>ASET</strong></p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>2</p>
                            </td>
                            <td>
                            <p><strong>Aset Lancar</strong></p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>3</p>
                            </td>
                            <td>
                            <p>Kas di Bendahara Pengeluaran</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp500,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>4</p>
                            </td>
                            <td>
                            <p>Kas di Bendahara Penerimaan</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>5</p>
                            </td>
                            <td>
                            <p>Uang Muka Belanja Barang</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp20,000,000</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp20,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>6</p>
                            </td>
                            <td>
                            <p>Persediaan</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp100,000,000</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp115,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>7</p>
                            </td>
                            <td>
                            <p><strong>Jumlah Aset Lancar</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>Rp120,000,000</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>Rp135,500,000</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>8</p>
                            </td>
                            <td>&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>9</p>
                            </td>
                            <td>
                            <p><strong>Aset Tetap</strong></p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>10</p>
                            </td>
                            <td>
                            <p>Tanah</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp57,000,000,000</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp57,000,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>11</p>
                            </td>
                            <td>
                            <p>Peralatan dan Mesin</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp16,007,800,000</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp16,000,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>12</p>
                            </td>
                            <td>
                            <p>Gedung dan Bangunan</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp45,000,000,000</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp45,000,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>13</p>
                            </td>
                            <td>
                            <p>Jalan, Irigasi, dan Jaringan</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp867,000,000</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp867,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>14</p>
                            </td>
                            <td>
                            <p>Aset Tetap Lainnya</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp130,000,000</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp130,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>15</p>
                            </td>
                            <td>
                            <p>Akumulasi Penyusutan</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp0</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>16</p>
                            </td>
                            <td>
                            <p><strong>Jumlah Aset Tetap</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>Rp119,004,800,000</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>Rp118,997,000,000</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>17</p>
                            </td>
                            <td>
                            <p><strong>Aset Lainnya</strong></p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>18</p>
                            </td>
                            <td>
                            <p>Aset Lain-Lain</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp32,000,000</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp32,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>19</p>
                            </td>
                            <td>
                            <p><strong>Jumlah Aset Lainnya</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>Rp32,000,000</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>Rp32,000,000</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>19</p>
                            </td>
                            <td>
                            <p><strong>JUMLAH ASET</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>Rp119,156,800,000</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>Rp119,164,500,000</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>18</p>
                            </td>
                            <td>
                            <p><strong>KEWAJIBAN</strong></p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>19</p>
                            </td>
                            <td>
                            <p>Pendapatan diterima dimuka</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>20</p>
                            </td>
                            <td>
                            <p>Kewajiban Jangka Pendek</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>21</p>
                            </td>
                            <td>
                            <p>Utang Kepada Pihak Ketiga</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp242,500,000</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp242,500,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>22</p>
                            </td>
                            <td>
                            <p>Pendapatan yang ditangguhkan</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>23</p>
                            </td>
                            <td>
                            <p><strong>JUMLAH KEWAJIBAN</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>Rp242,500,000</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>Rp242,500,000</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>24</p>
                            </td>
                            <td>
                            <p><strong>EKUITAS</strong></p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>25</p>
                            </td>
                            <td>
                            <p>Ekuitas</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp114,867,625,000</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp118,922,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>26</p>
                            </td>
                            <td>
                            <p><strong>JUMLAH EKUITAS</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>Rp114,867,625,000</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>Rp118,922,000,000</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>26</p>
                            </td>
                            <td>
                            <p><strong>JUMLAH KEWAJIBAN DAN EKUITAS</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>Rp115,110,125,000</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>Rp119,164,500,000</strong></p>
                            </td>
                        </tr>
                    </tbody>
                </table>',
            'key_answer_6'  => '<table>
                    <thead>
                        <tr>
                            <th colspan="7" scope="col" style="text-align: center;">
                            <p>KEMENTERIAN X</p>
                            </th>
                        </tr>
                        <tr>
                            <th colspan="7" scope="col" style="text-align: center;">
                            <p>DIREKTORAT JENDERAL X</p>
                            </th>
                        </tr>
                        <tr>
                            <th colspan="7" scope="col" style="text-align: center;">
                            <p>SATUAN KERJA ABC</p>
                            </th>
                        </tr>
                        <tr>
                            <th colspan="7" scope="col" style="text-align: center;">
                            <p>JURNAL PENUTUP</p>
                            </th>
                        </tr>
                        <tr>
                            <th scope="col" style="text-align: center;">
                            <p>Tanggal</p>
                            </th>
                            <th scope="col" style="text-align: center;">
                            <p>Keterangan</p>
                            </th>
                            <th scope="col" style="text-align: center;">
                            <p>Debit</p>
                            </th>
                            <th scope="col" style="text-align: center;">
                            <p>Kredit</p>
                            </th>
                            <th scope="col" style="text-align: center;">
                            <p>Keterangan</p>
                            </th>
                            <th scope="col" style="text-align: center;">
                            <p>Debit</p>
                            </th>
                            <th scope="col" style="text-align: center;">
                            <p>Kredit</p>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="4" style="text-align:center">
                            <p><strong>Akrual</strong></p>
                            </td>
                            <td colspan="3" style="text-align:center">
                            <p><strong>Kas</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>31-Dec-2023</p>
                            </td>
                            <td>
                            <p>Pendapatan</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp24,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td>
                            <p>Pendapatan</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp120,000,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                            <p>Surplus/Defisit-LO</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp24,000,000</p>
                            </td>
                            <td>
                            <p>Surplus/Defisit-LRA</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp120,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                            <p><em>(Menutup akun pendapatan)</em></p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td>
                            <p><em>(Menutup akun pendapatan)</em></p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>31-Dec-2023</p>
                            </td>
                            <td>
                            <p>Surplus/Defisit-LO</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp4,273,675,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td>
                            <p>Surplus/Defisit-LO</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp315,800,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                            <p>Beban</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp4,273,675,000</p>
                            </td>
                            <td>
                            <p>Belanja</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp315,800,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                            <p><em>(Menutup akun beban)</em></p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td>
                            <p><em>(Menutup akun belanja)</em></p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>31-Dec-2023</p>
                            </td>
                            <td>
                            <p>Ekuitas</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp4,249,675,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td>
                            <p>SiLPA</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp4,444,975,000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                            <p>Defisit LO</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp4,249,675,000</p>
                            </td>
                            <td>
                            <p>Defisit LRA</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp4,444,975,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                            <p><em>(Menutup akun defisit LO)</em></p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td>
                            <p><em>(Menutup akun defisit LRA)</em></p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                    </tbody>
                </table>',
        ]);

        CaseStudy::create([
            'question_type' => 'daerah',
            'instruction_count' => 9,
            'information' => '<p>Berikut ini disajikan Laporan Posisi Keuangan, Dokumen Pelaksanaan Anggaran, dan beberapa transaksi pada salah satu Satuan Kerja Perangkat Daerah (SKPD) di Pemerintah Kota Sembada tepatnya di Dinas Pariwisata dengan data sebagai berikut :&nbsp;</p>
                <table>
                    <thead>
                        <tr>
                            <th colspan="2" rowspan="3" scope="col" style="text-align:center">
                            <p>Pemerintah Daerah Kota Sembada&nbsp;</p>
                
                            <p>Dinas Pariwisata&nbsp;</p>
                
                            <p>Laporan Posisi Keuangan&nbsp;</p>
                
                            <p>Per 31 Desember 2020</p>
                            </th>
                        </tr>
                        <tr>
                        </tr>
                        <tr>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                            <p><strong>Aset&nbsp;</strong></p>
                            </td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>Aset Lancar&nbsp;</strong></p>
                            </td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>&nbsp; Kas di Bendahara Pengeluaran&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp80.000.000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>&nbsp; Persediaan&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp25.000.000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>Total Aset Lancar&nbsp;</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>Rp105.000.000</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>Aset Tidak Lancar&nbsp;</strong></p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>&nbsp; Tanah&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp600.000.000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>&nbsp; Bangunan&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp11.000.000.000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>&nbsp; Kendaraan&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp255.000.000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>Total Aset Tidak Lancar&nbsp;</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>Rp11.855.000.000</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>TOTAL ASET&nbsp;</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>Rp11.960.000.000</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>Kewajiban&nbsp;</strong></p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>Kewajiban Jangka Pendek&nbsp;</strong></p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>&nbsp; Utang Pajak&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp25.000.000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>&nbsp; Utang Pihak Ketiga&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp150.000.000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>Total Kewajiban Jangka Pendek&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp175.000.000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>Ekuitas&nbsp;</strong></p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>Ekuitas&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp11.785.000.000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>TOTAL KEWAJIBAN DAN EKUITAS&nbsp;</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>Rp11.960.000.000</strong></p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <p>&nbsp;</p>
                <table>
                    <tbody>
                        <tr>
                            <td colspan="3" style="text-align:center">
                            <p><strong>Dokumen Pelaksanaan Anggaran (DPA) Dinas Pariwisata Tahun Anggaran 2020&nbsp;</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>Pendapatan Asli Daerah&nbsp;</strong></p>
                            </td>
                            <td colspan="2">
                            <p><strong>Rp300.000.000</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>Belanja&nbsp;</strong></p>
                            </td>
                            <td colspan="2">
                            <p><strong>Rp855.000.000</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>Belanja Pegawai&nbsp;</strong></p>
                            </td>
                            <td colspan="2">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>&nbsp; Gaji Pokok/Uang Representasi&nbsp;</p>
                            </td>
                            <td colspan="2">
                            <p>Rp350.000.000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>&nbsp; Tunjangan Keluarga&nbsp;</p>
                            </td>
                            <td colspan="2">
                            <p>Rp145.000.000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>&nbsp; Tunjangan Jabatan&nbsp;</p>
                            </td>
                            <td colspan="2">
                            <p>Rp120.000.000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>&nbsp; Tunjangan Fungsional&nbsp;</p>
                            </td>
                            <td colspan="2">
                            <p>Rp110.000.000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>&nbsp; Tunjangan Fungsional Umum&nbsp;</p>
                            </td>
                            <td colspan="2">
                            <p>Rp75.000.000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>&nbsp; Tunjangan Beras&nbsp;</p>
                            </td>
                            <td colspan="2">
                            <p>Rp25.000.000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>&nbsp; Tunjangan PPh&nbsp;</p>
                            </td>
                            <td colspan="2">
                            <p>Rp30.000.000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>Belanja Barang dan Jasa&nbsp;</strong></p>
                            </td>
                            <td colspan="2" style="text-align:right">
                            <p><strong>Rp325.000.000</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>&nbsp; Belanja Alat Tulis Kantor&nbsp;</p>
                            </td>
                            <td colspan="2">
                            <p>Rp200.000.000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>&nbsp; Honorarium&nbsp;</p>
                            </td>
                            <td colspan="2">
                            <p>Rp125.000.000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>Belanja Modal&nbsp;</strong></p>
                            </td>
                            <td colspan="2" style="text-align:right">
                            <p><strong>Rp555.000.000</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>&nbsp; Belanja Pengadaan Studio Audio&nbsp;</p>
                            </td>
                            <td colspan="2">
                            <p>Rp555.000.000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>Surplus (Defisit)&nbsp;</strong></p>
                            </td>
                            <td colspan="2" style="text-align:right">
                            <p><strong>Rp(1.435.000.000)</strong></p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <p>&nbsp;</p>
                <table>
                    <tbody>
                        <tr>
                            <td colspan="10">
                            <p>Berikut ini ditampilkan Transaksi Dinas Pariwisata Kota Sembada Selama Tahun 2020 :</p>
                            </td>
                        </tr>
                        <tr>
                            <th style="text-align:center">
                            <p><strong>No</strong></p>
                            </th>
                            <th style="text-align:center">
                            <p><strong>Tanggal</strong></p>
                            </th>
                            <th style="text-align:center">
                            <p><strong>No. Bukti</strong></p>
                            </th>
                            <th colspan="7" style="text-align:center">
                            <p><strong>Transaksi</strong></p>
                            </th>
                        </tr>
                        <tr>
                            <td>
                            <p>1</p>
                            </td>
                            <td>
                            <p>9 Januari 2021</p>
                            </td>
                            <td>
                            <p>012/Dispar/I/2021</p>
                            </td>
                            <td colspan="7">
                            <p>Bendahara Pengeluaran membayarkan potongan pajak Dinas Parisiwata Kota Sembada ke Kas Negara melalui Surat Setoran Pajak (SSP) senilai Rp45.000.000 melalui Bank Jateng.</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>2</p>
                            </td>
                            <td>
                            <p>15 Februari 2021</p>
                            </td>
                            <td>
                            <p>012/Dispar/II/2021</p>
                            </td>
                            <td colspan="7">
                            <p>Bendahara Umum Daerah memberikan Uang Persediaan (UP) kepada Bendahara Dinas Pariwisata senilai Rp80.000.000 disertai dengan SP2D UP.</p>
                            </td>
                        </tr>
                        <tr>
                            <td rowspan="8">
                            <p>3</p>
                            </td>
                            <td rowspan="8">
                            <p>6 Maret 2021</p>
                            </td>
                            <td rowspan="8">
                            <p>012/Dispar/III/2021</p>
                            </td>
                            <td colspan="7">
                            <p>Berikut ini merupakan rincian pembayaran gaji dan tunjangan Bulan Maret 2021 sesuai dengan SP2D LS sebagai berikut :</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="5">
                            <p>Gaji Pokok</p>
                            </td>
                            <td colspan="2">
                            <p>Rp 250,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="5">
                            <p>Tunjangan Keluarga</p>
                            </td>
                            <td colspan="2">
                            <p>Rp 80,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="5">
                            <p>Tunjangan Jabatan</p>
                            </td>
                            <td colspan="2">
                            <p>Rp 45,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="5">
                            <p>Tunjangan Fungsional</p>
                            </td>
                            <td colspan="2">
                            <p>Rp 25,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="5">
                            <p>Tunjangan Fungsional Umum</p>
                            </td>
                            <td colspan="2">
                            <p>Rp 30,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="5">
                            <p>Tunjangan Beras</p>
                            </td>
                            <td colspan="2">
                            <p>Rp 9,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="5">
                            <p>Tunjangan PPh</p>
                            </td>
                            <td colspan="2">
                            <p>Rp 1,500,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>4</p>
                            </td>
                            <td>
                            <p>11 April 2021</p>
                            </td>
                            <td>
                            <p>012/Dispar/IV/2021</p>
                            </td>
                            <td colspan="7">
                            <p>Dinas Pariwisata Kota Sembada membayar belanja modal atas pengadaan Studio Audio disertai bukti SP2D LS senilai Rp450.000.000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>5</p>
                            </td>
                            <td>
                            <p>6 Mei 2021</p>
                            </td>
                            <td>
                            <p>012/Dispar/V/2021</p>
                            </td>
                            <td colspan="7">
                            <p>Dinas Pariwisata Kota Sembada membayar pembelian ATK disertai bukti SP2D LS senilai Rp250.000.000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>6</p>
                            </td>
                            <td>
                            <p>13 Juni 2021</p>
                            </td>
                            <td>
                            <p>012/Dispar/VI/2021</p>
                            </td>
                            <td colspan="7">
                            <p>memperoleh Pendapatan retribusi Event Pariwisata senilai Rp325.000.000. Pendapatan retribusi ini disetorkan ke Rekening Kas Daerah disertai bukti berupa setoran Bank Jateng.</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>7</p>
                            </td>
                            <td>
                            <p>15 Juli 2021</p>
                            </td>
                            <td>
                            <p>012/Dispar/VII/2021</p>
                            </td>
                            <td colspan="7">
                            <p>Dinas Pariwisata membayar honorarium tenaga profesional tambahan senilai Rp50.000.000 dengan Uang persediaan</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>8</p>
                            </td>
                            <td>
                            <p>23 Juli 2021</p>
                            </td>
                            <td>
                            <p>012/Dispar/VIII/2021</p>
                            </td>
                            <td colspan="7">
                            <p>Dinas Pariwisata membayar honorarium tenaga profesional tambahan senilai Rp60.000.000 dengan dana yang ada di Bendahara Pengeluaran</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>9</p>
                            </td>
                            <td>
                            <p>5 Agustus 2021</p>
                            </td>
                            <td>
                            <p>012/Dispar/IX/2021</p>
                            </td>
                            <td colspan="7">
                            <p>Terdapat pembayaran termin ke-2 atas pengadaan Studio Audio sebesar Rp300.000.000</p>
                            </td>
                        </tr>
                        <tr>
                            <td rowspan="8">
                            <p>10</p>
                            </td>
                            <td rowspan="8">
                            <p>4 September 2021</p>
                            </td>
                            <td rowspan="8">
                            <p>012/Dispar/X/2021</p>
                            </td>
                            <td colspan="7">
                            <p>Berikut ini merupakan rincian pembayaran gaji dan tunjangan Bulan September 2021 sesuai dengan SP2D LS sebagai berikut :</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="5">
                            <p>Gaji Pokok</p>
                            </td>
                            <td colspan="2">
                            <p>Rp 135,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="5">
                            <p>Tunjangan Keluarga</p>
                            </td>
                            <td colspan="2">
                            <p>Rp 65,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="5">
                            <p>Tunjangan Jabatan</p>
                            </td>
                            <td colspan="2">
                            <p>Rp 75,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="5">
                            <p>Tunjangan Fungsional</p>
                            </td>
                            <td colspan="2">
                            <p>Rp 25,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="5">
                            <p>Tunjangan Fungsional Umum</p>
                            </td>
                            <td colspan="2">
                            <p>Rp 40,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="5">
                            <p>Tunjangan Beras</p>
                            </td>
                            <td colspan="2">
                            <p>Rp 15,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="5">
                            <p>Tunjangan PPh</p>
                            </td>
                            <td colspan="2">
                            <p>Rp 7,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td rowspan="8">
                            <p>11</p>
                            </td>
                            <td rowspan="8">
                            <p>3 Desember 2021</p>
                            </td>
                            <td rowspan="8">
                            <p>012/Dispar/XI/2021</p>
                            </td>
                            <td colspan="7">
                            <p>Berikut ini merupakan rincian pembayaran gaji dan tunjangan Bulan Desember 2021 sesuai dengan SP2D LS sebagai berikut :</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="5">
                            <p>Gaji Pokok</p>
                            </td>
                            <td colspan="2">
                            <p>Rp 120,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="5">
                            <p>Tunjangan Keluarga</p>
                            </td>
                            <td colspan="2">
                            <p>Rp 30,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="5">
                            <p>Tunjangan Jabatan</p>
                            </td>
                            <td colspan="2">
                            <p>Rp 80,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="5">
                            <p>Tunjangan Fungsional</p>
                            </td>
                            <td colspan="2">
                            <p>Rp 45,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="5">
                            <p>Tunjangan Fungsional Umum</p>
                            </td>
                            <td colspan="2">
                            <p>Rp 60,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="5">
                            <p>Tunjangan Beras</p>
                            </td>
                            <td colspan="2">
                            <p>Rp 5,000,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="5">
                            <p>Tunjangan PPh</p>
                            </td>
                            <td colspan="2">
                            <p>Rp 3,500,000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>12</p>
                            </td>
                            <td>
                            <p>31 Desember 2021</p>
                            </td>
                            <td>
                            <p>012/Dispar/XII/2021</p>
                            </td>
                            <td colspan="7">
                            <p>Pada akhir bulan ini terdapat nilai persediaan ATK senilai Rp15.000.000. Jumlah ini sesuai dengan hasil stock opname gudang Dinas melalui pendekatan pencatatan dengan metode periodik.</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>13</p>
                            </td>
                            <td>
                            <p>31 Desember 2021</p>
                            </td>
                            <td>
                            <p>012/Dispar/XIII/2021</p>
                            </td>
                            <td colspan="7">
                            <p>Dinas Pariwisata memiliki aset berupa kendaraan bermotor yang memiliki masa manfaat 5 tahun sedangkan gedung 20 tahun, dengan residu Rp0,00. Dinas menggunakan metode garis lurus untuk menghitung penyusutan pada aset yang dimiliki selama 1 tahun penuh.</p>
                            </td>
                        </tr>
                    </tbody>
                </table>',
            'instruction_1' => "<p>Buatlah Jurnal Anggaran berdasarkan DPA Tahun 2020!</p>",
            'instruction_2' => "<p>Buatlah Pencatatan Saldo Awal berdasarkan neraca awal per 31 Desember 2020!</p>",
            'instruction_3' => "<p>Buatlah Jurnal Umum!</p>",
            'instruction_4' => "<p>Buatlah Buku Besar per masing - masing akun!</p>",
            'instruction_5' => "<p>Buatlah Neraca Saldo per 31 Desember 2021!</p>",
            'instruction_6' => "<p>Buatlah Jurnal Penyesuaian per 31 Desember 2021!</p>",
            'instruction_7' => "<p>Buatlah Neraca Setelah Penyesuaian Saldo per 31 Desember 2021!</p>",
            'instruction_8' => "<p>Buatlah Jurnal Penutup per 31 Desember 2021!</p>",
            'instruction_9' => "<p>Buatlah Laporan Keuangan dari Dinas Pariwisata Kota Sembada!</p>",
            'key_answer_1'  => '<table>
                    <tbody>
                        <tr>
                            <th style="text-align: center;">
                            <p><strong>Tanggal</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Keterangan&nbsp;</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Debit&nbsp;</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Kredit&nbsp;</strong></p>
                            </th>
                        </tr>
                        <tr>
                            <td>
                            <p>1/Jan/21&nbsp;</p>
                            </td>
                            <td>
                            <p>Estimasi Pendapatan&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp300.000.000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                            <p>Estimasi Perubahan SAL&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp1.435.000.000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                            <p>&nbsp; &nbsp; &nbsp; Apropriasi Belanja&nbsp;</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp1.735.000.000</p>
                            </td>
                        </tr>
                    </tbody>
                </table>',
            'key_answer_2'  => '<table>
                    <tbody>
                        <tr>
                            <th style="text-align: center;">
                            <p><strong>Tanggal</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Keterangan&nbsp;</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Debit&nbsp;</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Kredit&nbsp;</strong></p>
                            </th>
                        </tr>
                        <tr>
                            <td>
                            <p>1/Jan/21</p>
                            </td>
                            <td>
                            <p>Kas di Bendahara Pengeluaran&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp80.000.000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                            <p>Persediaan&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp25.000.000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                            <p>Tanah&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp600.000.000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                            <p>Bangunan</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp11.000.000.000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                            <p>Kendaraan</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp255.000.000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                            <p>&nbsp; &nbsp; Utang PPh 21&nbsp;</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp25.000.000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                            <p>&nbsp; &nbsp; Utang Pihak Ketiga&nbsp;</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp150.000.000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>&nbsp;</p>
                            </td>
                            <td>
                            <p>&nbsp; &nbsp; Ekuitas&nbsp;</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp11.785.000.000</p>
                            </td>
                        </tr>
                    </tbody>
                </table>',
            'key_answer_3'  => '<table>
                    <thead>
                        <tr>
                            <th scope="col" style="text-align: center;">
                            <p>No</p>
                            </th>
                            <th scope="col" style="text-align: center;">
                            <p>Tanggal</p>
                            </th>
                            <th scope="col" style="text-align: center;">
                            <p>Ref</p>
                            </th>
                            <th scope="col" style="text-align: center;">
                            <p>Jurnal Transaksi&nbsp;</p>
                            </th>
                            <th scope="col" style="text-align: center;">
                            <p>Debit&nbsp;</p>
                            </th>
                            <th scope="col" style="text-align: center;">
                            <p>Kredit&nbsp;</p>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                            <p>1</p>
                            </td>
                            <td>
                            <p>9 Januari 2021&nbsp;</p>
                            </td>
                            <td>
                            <p>012/Dispar/I/2021</p>
                            </td>
                            <td>
                            <p>Utang&nbsp; PPh 21&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp45.000.000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>
                            <p>Kas di Bendahara Pengeluaran&nbsp;</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp45.000.000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td colspan="4">
                            <p><em><strong>(Penyetoran utang pajak oleh bendahara pengeluaran)</strong></em></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>2</p>
                            </td>
                            <td>
                            <p>15 Februari 2021&nbsp;</p>
                            </td>
                            <td>
                            <p>012/Dispar/II/2021</p>
                            </td>
                            <td>
                            <p>Kas di Bendahara Pengeluaran&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp80.000.000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>
                            <p>RK PPKD</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp80.000.000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                            <p>15 Februari 2021</p>
                            </td>
                            <td>
                            <p>012/Dispar/II/2021</p>
                            </td>
                            <td>
                            <p>RK-SKPD</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp80.000.000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>
                            <p>Kas di Kas Daerah&nbsp;</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp80.000.000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td colspan="4">
                            <p><em><strong>(Penerimaan UP oleh Bendara Pengeluaran)&nbsp;</strong></em></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>3</p>
                            </td>
                            <td>
                            <p>6 Maret 2021&nbsp;</p>
                            </td>
                            <td>
                            <p>012/Dispar/III/2021</p>
                            </td>
                            <td>
                            <p>Gaji Pokok PNS/Uang Representasi&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp250.000.000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>
                            <p>Tunjangan Keluarga - LO&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp80.000.000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>
                            <p>Tunjangan Jabatan - LO&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp45.000.000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>
                            <p>Tunjangan Fungsional - LO&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>R25.000.000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>
                            <p>Tunjangan Fungsional Umum - LO&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp30.000.000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>
                            <p>Tunjangan Beras - LO&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp9.000.000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>
                            <p>RK-PPKD&nbsp;</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp440.500.000.000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                            <p>6 Maret 2021&nbsp;</p>
                            </td>
                            <td>
                            <p>012/Dispar/III/2021</p>
                            </td>
                            <td>
                            <p>Gaji Pokok PNS/Uang Representasi&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp250.000.000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>
                            <p>Tunjangan Keluarga&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp80.000.000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>
                            <p>Tunjangan Jabatan&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp45.000.000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>
                            <p>Tunjangan Fungsional&nbsp;&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>R25.000.000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>
                            <p>Tunjangan Fungsional Umum&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp30.000.000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>
                            <p>Tunjangan Beras&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp9.000.000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>
                            <p>Estimasi Perubahan SAL</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp440.500.000.000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td colspan="4">
                            <p><em><strong>(Pembayaran Gaji dan Tunjangan Bulan Maret Th 2021 SP2D-LS)&nbsp;</strong></em></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>4</p>
                            </td>
                            <td>
                            <p>11 April 2021</p>
                            </td>
                            <td>
                            <p>012/Dispar/IV/2021</p>
                            </td>
                            <td>
                            <p>Studio Audio&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp450.000.000</p>
                            </td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>
                            <p>RK-PPKD&nbsp;</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp450.000.000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                            <p>11 April 2021</p>
                            </td>
                            <td>
                            <p>012/Dispar/IV/2021</p>
                            </td>
                            <td>
                            <p>Belanja Modal Pengadaan Studio Audio&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp450.000.000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>
                            <p>Estimasi Perubahan SAL&nbsp;</p>
                            </td>
                            <td>&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp450.000.000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td colspan="4">
                            <p><strong><em>(Pembayaran Belanja Modal Pengadaan Studio Audio)&nbsp;</em></strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>5</p>
                            </td>
                            <td>
                            <p>6 Mei 2021</p>
                            </td>
                            <td>
                            <p>012/Dispar/V/2021</p>
                            </td>
                            <td>
                            <p>Persediaan Alat Tulis Kantor&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp250.000.000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>
                            <p>RK-PPKD</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp250.000.000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                            <p>6 Mei 2021</p>
                            </td>
                            <td>
                            <p>012/Dispar/V/2021</p>
                            </td>
                            <td>
                            <p>Belanja Alat Tulis Kantor&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp250.000.000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>
                            <p>Estimasi Perubahan SAL&nbsp;</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp250.000.000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td colspan="4">
                            <p><strong><em>(Pembayaran Belanja ATK SP2D-LS)</em></strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>6</p>
                            </td>
                            <td>
                            <p>13 Juni 2021&nbsp;</p>
                            </td>
                            <td>
                            <p>012/Dispar/VI/2021</p>
                            </td>
                            <td>
                            <p>RK-PPKD&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp325.000.000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>
                            <p>Pendapatan Retribusi Event Pariwisata&nbsp;</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp325.000.000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                            <p>13 Juni 2021&nbsp;</p>
                            </td>
                            <td>
                            <p>012/Dispar/VI/2021</p>
                            </td>
                            <td>
                            <p>Estimasi Perubahan SAL&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp325.000.000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>
                            <p>Pendapatan Retribusi Event Pariwisata - LRA&nbsp;</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp325.000.000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td colspan="4">
                            <p><em><strong>(Penerimaan Pendapatan Retribusi Kemudian di setor ke Kas Daerah)&nbsp;</strong></em></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>7</p>
                            </td>
                            <td>
                            <p>15 Juli 2021</p>
                            </td>
                            <td>
                            <p>012/Dispar/VII/2021</p>
                            </td>
                            <td>
                            <p>Honorarium Tenaga Ahli/Narasumber/Instruktur&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp50.000.000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>
                            <p>Kas di Bendahara Pengeluaran&nbsp;</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp50.000.000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                            <p>15 Juli 2021</p>
                            </td>
                            <td>
                            <p>012/Dispar/VII/2021</p>
                            </td>
                            <td>
                            <p>Honorarium Tenaga Ahli/Narasumber/Instruktur&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp50.000.000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>
                            <p>Estimasi Perubahan SAL</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp50.000.000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td colspan="4">
                            <p><em><strong>(Pembayaran Honorarium Tenaga Profesional UP)</strong></em></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>8</p>
                            </td>
                            <td>
                            <p>23 Juli 2021</p>
                            </td>
                            <td>
                            <p>012/Dispar/VIII/2021</p>
                            </td>
                            <td>
                            <p>Honorarium Tenaga Ahli/Narasumber/Instruktur&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp60.000.000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>
                            <p>Kas di Bendahara Pengeluaran&nbsp;</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp60.000.000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                            <p>23 Juli 2021</p>
                            </td>
                            <td>
                            <p>012/Dispar/VIII/2021</p>
                            </td>
                            <td>
                            <p>Honorarium Tenaga Ahli/Narasumber/Instruktur&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp60.000.000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>
                            <p>Estimasi Perubahan SAL</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp60.000.000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td colspan="4">
                            <p><em><strong>(Pembayaran Pengadaan Studio Audio Tahap 2)&nbsp;</strong></em></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>9</p>
                            </td>
                            <td>
                            <p>5 Agustus 2021</p>
                            </td>
                            <td>
                            <p>012/Dispar/IX/2021</p>
                            </td>
                            <td>
                            <p>Studio Audio&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp300.000.000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>
                            <p>Kas di Bendahara Pengeluaran&nbsp;</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp300.000.000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                            <p>5 Agustus 2021</p>
                            </td>
                            <td>
                            <p>012/Dispar/IX/2021</p>
                            </td>
                            <td>
                            <p>Belanja Modal Pengadaan Studio Audio&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp300.000.000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>
                            <p>Estimasi Perubahan SAL&nbsp;</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp300.000.000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td colspan="4">
                            <p><em><strong>(Pembayaran Pengadaan Studio Audio Tahap 2)&nbsp;</strong></em></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>10</p>
                            </td>
                            <td>
                            <p>4 September 2021</p>
                            </td>
                            <td>
                            <p>012/Dispar/X/2021</p>
                            </td>
                            <td>
                            <p>Gaji Pokok PNS/Uang Representasi&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp135.000.000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>
                            <p>Tunjangan Keluarga - LO&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp65.000.000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>
                            <p>Tunjangan Jabatan - LO&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp75.000.000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>
                            <p>Tunjangan Fungsional - LO&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp25.000.000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>
                            <p>Tunjangan Fungsional Umum - LO&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp40.000.000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>
                            <p>Tunjangan Beras - LO&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp15.000.000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>
                            <p>Tunjangan PPh/Tunjangan Khusus -LO</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp7.000.000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>
                            <p>RK-PPKD&nbsp;</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp362.000.000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                            <p>4 September 2021</p>
                            </td>
                            <td>
                            <p>012/Dispar/X/2021</p>
                            </td>
                            <td>
                            <p>Gaji Pokok PNS/Uang Representasi&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp135.000.000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>
                            <p>Tunjangan Keluarga&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp65.000.000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>
                            <p>Tunjangan Jabatan&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp75.000.000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>
                            <p>Tunjangan Fungsional&nbsp;&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp25.000.000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>
                            <p>Tunjangan Fungsional Umum&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp40.000.000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>
                            <p>Tunjangan Beras&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp15.000.000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>
                            <p>Tunjangan PPh/Tunjangan Khusus</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp7.000.000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>
                            <p>Estimasi Perubahan SAL</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp362.000.000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td colspan="4">
                            <p><em><strong>(Pembayaran Belanja gaji dan tunjangan bulan September 2021 dengan bukti SP2D-LS)</strong></em></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>11</p>
                            </td>
                            <td>
                            <p>3 Desember 2021</p>
                            </td>
                            <td>
                            <p>012/Dispar/XI/2021</p>
                            </td>
                            <td>
                            <p>Gaji Pokok PNS/Uang Representasi&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp120.00.000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>
                            <p>Tunjangan Keluarga - LO&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp30.000.000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>
                            <p>Tunjangan Jabatan - LO&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp80.000.000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>
                            <p>Tunjangan Fungsional - LO&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp45.000.000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>
                            <p>Tunjangan Fungsional Umum - LO&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp60.000.000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>
                            <p>Tunjangan Beras - LO&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp5.000.000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>
                            <p>Tunjangan PPh/Tunjangan Khusus -LO</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp3.500.000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>
                            <p>RK-PPKD&nbsp;</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp343.500.000.000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                            <p>3&nbsp; Desember 2021</p>
                            </td>
                            <td>
                            <p>012/Dispar/XI/2021</p>
                            </td>
                            <td>
                            <p>Gaji Pokok PNS/Uang Representasi&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp120.00.000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>
                            <p>Tunjangan Keluarga&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp30.000.000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>
                            <p>Tunjangan Jabatan&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp80.000.000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>
                            <p>Tunjangan Fungsional&nbsp;&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp45.000.000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>
                            <p>Tunjangan Fungsional Umum&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp60.000.000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>
                            <p>Tunjangan Beras&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp5.000.000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>
                            <p>Tunjangan PPh/Tunjangan Khusus</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp3.500.000</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>
                            <p>Estimasi Perubahan SAL</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp343.500.000.000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td colspan="4">
                            <p><em><strong>(Pembayaran belanja gaji dan tunjangan bulan Desember 2020 dengan bukti SP2D-LS)</strong></em></p>
                            </td>
                        </tr>
                    </tbody>
                </table>',
            'key_answer_4'  => '<p>Nama Akun : Kas di Kas Daerah</p>
                <table>
                    <tbody>
                        <tr>
                            <th style="text-align: center;">
                            <p><strong>Tanggal</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Keterangan&nbsp;</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Debit</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Kredit</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Saldo&nbsp;</strong></p>
                            </th>
                        </tr>
                        <tr>
                            <td>
                            <p>1 Januari 2021</p>
                            </td>
                            <td>
                            <p>Saldo Awal</p>
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>
                            <p>Rp0.00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>15 Februari 2021</p>
                            </td>
                            <td>
                            <p>Penerimaan UP Oleh Bendahara Pengeluaran</p>
                            </td>
                            <td>&nbsp;</td>
                            <td>
                            <p>Rp80,000,000.00</p>
                            </td>
                            <td>
                            <p>Rp80,000,000.00</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
                <p>&nbsp;</p>
                
                <p>Nama Akun : Kas di Bendahara Pengeluaran</p>
                
                <table>
                    <tbody>
                        <tr>
                            <th style="text-align: center;">
                            <p><strong>Tanggal</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Keterangan&nbsp;</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Debit</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Kredit</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Saldo&nbsp;</strong></p>
                            </th>
                        </tr>
                        <tr>
                            <td>
                            <p>1 Januari 2021</p>
                            </td>
                            <td>
                            <p>Saldo Awal</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp80.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>9 Januari 2021</p>
                            </td>
                            <td>
                            <p>Penyetoran Utang Pajak Oleh Bendahara Pengeluaran Dinas Pariwisata</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp45.000.000,00</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp35.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>15 Februari 2021</p>
                            </td>
                            <td>
                            <p>Penerimaan UP Oleh Bendahara Dinas Pariwisata</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp80.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp115.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>15 Juli 2021</p>
                            </td>
                            <td>
                            <p>Pembayaran Honorarium Tenaga Profesional UP</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp50.000.000,00</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp65.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>23 Juli 2021</p>
                            </td>
                            <td>
                            <p>Pembayaran Honorarium Tenaga Profesional Tambahan</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp60.000.000,00</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp5.000.000,00</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
                <p>&nbsp;</p>
                
                <p>Nama Akun : Persediaan Alat Tulis Kantor</p>
                
                <table>
                    <tbody>
                        <tr>
                            <th style="text-align: center;">
                            <p><strong>Tanggal</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Keterangan&nbsp;</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Debit</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Kredit</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Saldo&nbsp;</strong></p>
                            </th>
                        </tr>
                        <tr>
                            <td>
                            <p>1 Januari 2021</p>
                            </td>
                            <td>
                            <p>Saldo Awal</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp25.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>6 Mei 2021</p>
                            </td>
                            <td>
                            <p>Pembayaran Belanja ATK SP2D-LS</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp250.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp275.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>31 Desember 2021</p>
                            </td>
                            <td>
                            <p>Penyesuaian Akhir Tahun</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp260.000.000,00</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp15.000.000,00</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
                <p>&nbsp;</p>
                
                <p>Nama Akun : RK-SKPD</p>
                
                <table>
                    <tbody>
                        <tr>
                            <th style="text-align: center;">
                            <p><strong>Tanggal</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Keterangan&nbsp;</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Debit</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Kredit</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Saldo&nbsp;</strong></p>
                            </th>
                        </tr>
                        <tr>
                            <td>
                            <p>1 Januari 2021</p>
                            </td>
                            <td>
                            <p>Saldo Awal</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp0,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>15 Februari 2021</p>
                            </td>
                            <td>
                            <p>Penerimaan UP Oleh Bendahara Pengeluaran</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp80.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp80.000.000,00</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
                <p>&nbsp;</p>
                
                <p>Nama Akun : Tanah</p>
                
                <table>
                    <tbody>
                        <tr>
                            <th style="text-align: center;">
                            <p><strong>Tanggal</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Keterangan&nbsp;</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Debit</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Kredit</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Saldo&nbsp;</strong></p>
                            </th>
                        </tr>
                        <tr>
                            <td>
                            <p>1 Januari 2021</p>
                            </td>
                            <td>
                            <p>Saldo Awal</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp600.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp600.000.000,00</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
                <p>&nbsp;</p>
                
                <p>Nama Akun : Kendaraan</p>
                
                <table>
                    <tbody>
                        <tr>
                            <th style="text-align: center;">
                            <p><strong>Tanggal</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Keterangan&nbsp;</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Debit</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Kredit</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Saldo&nbsp;</strong></p>
                            </th>
                        </tr>
                        <tr>
                            <td>
                            <p>1 Januari 2021</p>
                            </td>
                            <td>
                            <p>Saldo Awal</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp255.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp255.000.000,00</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
                <p>&nbsp;</p>
                
                <p>Nama Akun : Akumulasi Penyusutan Alat Angkutan Darat Bermotor</p>
                
                <table>
                    <tbody>
                        <tr>
                            <th style="text-align: center;">
                            <p><strong>Tanggal</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Keterangan&nbsp;</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Debit</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Kredit</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Saldo&nbsp;</strong></p>
                            </th>
                        </tr>
                        <tr>
                            <td>
                            <p>31 Desember 2021</p>
                            </td>
                            <td>
                            <p>Penyesuaian Akhir Tahun&nbsp;</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp51.000.000,00</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp51.000.000,00</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
                <p>&nbsp;</p>
                
                <p>Nama Akun : Bangunan&nbsp;</p>
                
                <table>
                    <tbody>
                        <tr>
                            <th style="text-align: center;">
                            <p><strong>Tanggal</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Keterangan&nbsp;</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Debit</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Kredit</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Saldo&nbsp;</strong></p>
                            </th>
                        </tr>
                        <tr>
                            <td>
                            <p>1 Januari 2021</p>
                            </td>
                            <td>
                            <p>Saldo Awal</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp11.000.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp11.000.000.000,00</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
                <p>&nbsp;</p>
                
                <p>Nama Akun : Akumulasi Penyusutan Bangunan Gedung Tempat Kerja</p>
                
                <table>
                    <tbody>
                        <tr>
                            <td style="text-align:center">
                            <p><strong>Tanggal</strong></p>
                            </td>
                            <td style="text-align:center">
                            <p><strong>Keterangan&nbsp;</strong></p>
                            </td>
                            <td style="text-align:center">
                            <p><strong>Debit</strong></p>
                            </td>
                            <td style="text-align:center">
                            <p><strong>Kredit</strong></p>
                            </td>
                            <td style="text-align:center">
                            <p><strong>Saldo&nbsp;</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>31 Desember 2021</p>
                            </td>
                            <td>
                            <p>Penyesuaian Akhir Tahun</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp550.000.000,00</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp550.000.000,00</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
                <p>&nbsp;</p>
                
                <p>Nama Akun : Studio Audio</p>
                
                <table>
                    <tbody>
                        <tr>
                            <td style="text-align:center">
                            <p><strong>Tanggal</strong></p>
                            </td>
                            <td style="text-align:center">
                            <p><strong>Keterangan&nbsp;</strong></p>
                            </td>
                            <td style="text-align:center">
                            <p><strong>Debit</strong></p>
                            </td>
                            <td style="text-align:center">
                            <p><strong>Kredit</strong></p>
                            </td>
                            <td style="text-align:center">
                            <p><strong>Saldo&nbsp;</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>1 Januari 2021</p>
                            </td>
                            <td>
                            <p>Saldo Awal</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp0,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>11 April 2021</p>
                            </td>
                            <td>
                            <p>Pembayaran Belanja Modal Pengadaan Studio Audio</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp450.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp450.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>5 Agustus 2021</p>
                            </td>
                            <td>
                            <p>Pembayaran Pengadaan Studio Audio Termin 2</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp300.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp750.000.000,00</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
                <p>&nbsp;</p>
                
                <p>Nama Akun :Utang Pihak Ketiga</p>
                
                <table>
                    <tbody>
                        <tr>
                            <th style="text-align: center;">
                            <p><strong>Tanggal</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Keterangan&nbsp;</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Debit</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Kredit</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Saldo&nbsp;</strong></p>
                            </th>
                        </tr>
                        <tr>
                            <td>
                            <p>1 Januari 2021</p>
                            </td>
                            <td>
                            <p>Saldo Awal</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp150.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp150.000.000,00</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
                <p>&nbsp;</p>
                
                <p>Nama Akun :Utang Pihak PPh 21</p>
                
                <table>
                    <tbody>
                        <tr>
                            <th style="text-align: center;">
                            <p><strong>Tanggal</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Keterangan&nbsp;</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Debit</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Kredit</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Saldo&nbsp;</strong></p>
                            </th>
                        </tr>
                        <tr>
                            <td>
                            <p>1 Januari 2021</p>
                            </td>
                            <td>
                            <p>Saldo Awal</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp25.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>9 Januari 2021</p>
                            </td>
                            <td>
                            <p>Penyetoran Utang Pajak Oleh Bendahara Pengeluaran</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp45.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>-Rp20.000.000,00</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
                <p>&nbsp;</p>
                
                <p>Nama Akun :Ekuitas&nbsp;</p>
                
                <table>
                    <tbody>
                        <tr>
                            <th style="text-align: center;">
                            <p><strong>Tanggal</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Keterangan&nbsp;</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Debit</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Kredit</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Saldo&nbsp;</strong></p>
                            </th>
                        </tr>
                        <tr>
                            <td>
                            <p>1 Januari 2021</p>
                            </td>
                            <td>
                            <p>Saldo Awal</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp11.785.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp11.785.000.000,00</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
                <p>&nbsp;</p>
                
                <p>Nama Akun :Estimasi Perubahan SAL</p>
                
                <table>
                    <tbody>
                        <tr>
                            <th style="text-align: center;">
                            <p><strong>Tanggal</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Keterangan&nbsp;</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Debit</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Kredit</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Saldo&nbsp;</strong></p>
                            </th>
                        </tr>
                        <tr>
                            <td>
                            <p>1 Januari 2021</p>
                            </td>
                            <td>
                            <p>Saldo Awal</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp0,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>6 Maret 2021</p>
                            </td>
                            <td>
                            <p>Pembayaran Gaji dan Tunjangan Bulan Maret Th 2021 SP2D-LS</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp440.500.000,00</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp440.500.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>11 April 2021</p>
                            </td>
                            <td>
                            <p>Pembayaran Belanja Modal Pengadaan Jalan Kota (Jalur Evakuasi)</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp450.000.000,00</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp890.500.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>6 Mei 2021</p>
                            </td>
                            <td>
                            <p>Pembayaran Belanja ATK SP2D-LS</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp250.000.000,00</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp1.140.500.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>13 Juni 2021</p>
                            </td>
                            <td>
                            <p>Penerimaan Pendapatan Retribusi Kemudian disetor ke Kas Daerah</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp325.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp815.500.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>15 Juli 2021</p>
                            </td>
                            <td>
                            <p>Pembayaran Honorarium Tenaga Profesional UP</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp50.000.000,00</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp865.500.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>23 Juli 2021</p>
                            </td>
                            <td>
                            <p>Pembayaran Honorarium Tenaga Profesional Tambahan dengan Dana di Bendahara Pengeluaran</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp60.000.000,00</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp925.500.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>5 Agustus 2021</p>
                            </td>
                            <td>
                            <p>Pembayaran Pembangunan Jalan Kota Tahap 2</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp300.000.000,00</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp1.225.500.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>4 September 2021</p>
                            </td>
                            <td>
                            <p>Pembayaran belanja gaji dan tunjangan bulan September 2021 dengan bukti SP2D LS</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp362.000.000,00</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp1.587.500.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>3 Desember 2021</p>
                            </td>
                            <td>
                            <p>Pembayaran belanja gaji dan tunjangan bulan Desember 2021 dengan bukti SP2D LS</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp343.500.000,00</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp1.931.000.000,00</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
                <p>&nbsp;</p>
                
                <p>Nama Akun :RK-PPKD</p>
                
                <table>
                    <tbody>
                        <tr>
                            <th style="text-align: center;">
                            <p><strong>Tanggal</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Keterangan&nbsp;</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Debit</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Kredit</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Saldo&nbsp;</strong></p>
                            </th>
                        </tr>
                        <tr>
                            <td>
                            <p>1 Januari 2021</p>
                            </td>
                            <td>
                            <p>Saldo Awal</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp0,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>15 Februari 2021</p>
                            </td>
                            <td>
                            <p>Penerimaan UP Oleh Bendahara Pengeluaran</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp80.000.000,00</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp80.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>6 Maret 2021</p>
                            </td>
                            <td>
                            <p>Pembayaran Gaji dan Tunjangan Bulan Maret Th 2021 SP2D-LS</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp440.500.000,00</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp520.500.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>11 April 2021</p>
                            </td>
                            <td>
                            <p>Pembayaran Belanja Modal Pengadaan Jalan Kota (Jalur Evakuasi)</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp450.000.000,00</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp970.500.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>6 Mei 2021</p>
                            </td>
                            <td>
                            <p>Pembayaran Belanja ATK SP2D-LS</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp250.000.000,00</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp1.220.500.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>13 Juni 2021</p>
                            </td>
                            <td>
                            <p>Penerimaan Pendapatan Retribusi Kemudian disetor ke Kas Daerah</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp325.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp895.500.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>5 Agustus 2021</p>
                            </td>
                            <td>
                            <p>Pembayaran Pembangunan Jalan Kota Tahap 2</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp300.000.000,00</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp1.195.500.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>4 September 2021</p>
                            </td>
                            <td>
                            <p>Pembayaran belanja gaji dan tunjangan bulan September 2021 dengan bukti SP2D LS</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp362.000.000,00</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp1.557.500.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>3 Desember 2021</p>
                            </td>
                            <td>
                            <p>Pembayaran belanja gaji dan tunjangan bulan Desember 2021 dengan bukti SP2D LS</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp343.500.000,00</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp1.901.000.000,00</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
                <p>&nbsp;</p>
                
                <p>Nama Akun :pengadaan Studio Audio - LRA</p>
                
                <table>
                    <tbody>
                        <tr>
                            <th style="text-align: center;">
                            <p><strong>Tanggal</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Keterangan&nbsp;</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Debit</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Kredit</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Saldo&nbsp;</strong></p>
                            </th>
                        </tr>
                        <tr>
                            <td>
                            <p>1 Januari 2021</p>
                            </td>
                            <td>
                            <p>Saldo Awal</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp0,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>13 Juni 2021</p>
                            </td>
                            <td>
                            <p>Penerimaan Pendapatan Retribusi Kemudian disetor ke Kas Daerah</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp325.000.000,00</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp325.000.000,00</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
                <p>&nbsp;</p>
                
                <p>Nama Akun :Gaji Pokok PNS/Uang Representasi</p>
                
                <table>
                    <tbody>
                        <tr>
                            <th style="text-align: center;">
                            <p><strong>Tanggal</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Keterangan&nbsp;</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Debit</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Kredit</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Saldo&nbsp;</strong></p>
                            </th>
                        </tr>
                        <tr>
                            <td>
                            <p>1 Januari 2021</p>
                            </td>
                            <td>
                            <p>Saldo Awal</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp0,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>6 Maret 2021</p>
                            </td>
                            <td>
                            <p>Pembayaran Gaji dan Tunjangan Bulan Maret Th 2021 SP2D-LS</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp250.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp250.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>4 September 2021</p>
                            </td>
                            <td>
                            <p>Pembayaran belanja gaji dan tunjangan bulan September 2021 dengan bukti SP2D LS</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp135.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp385.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>3 Desember 2021</p>
                            </td>
                            <td>
                            <p>Pembayaran belanja gaji dan tunjangan bulan Desember 2021 dengan bukti SP2D LS</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp120.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp505.000.000,00</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
                <p>&nbsp;</p>
                
                <p>Nama Akun : Taunjangan Keluarga</p>
                
                <table>
                    <tbody>
                        <tr>
                            <th style="text-align: center;">
                            <p><strong>Tanggal</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Keterangan&nbsp;</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Debit</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Kredit</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Saldo&nbsp;</strong></p>
                            </th>
                        </tr>
                        <tr>
                            <td>
                            <p>1 Januari 2021</p>
                            </td>
                            <td>
                            <p>Saldo Awal</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp0,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>6 Maret 2021</p>
                            </td>
                            <td>
                            <p>Pembayaran Gaji dan Tunjangan Bulan Maret Th 2021 SP2D-LS</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp80.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp80.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>4 September 2021</p>
                            </td>
                            <td>
                            <p>Pembayaran belanja gaji dan tunjangan bulan September 2021 dengan bukti SP2D LS</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp65.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp145.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>3 Desember 2021</p>
                            </td>
                            <td>
                            <p>Pembayaran belanja gaji dan tunjangan bulan Desember 2021 dengan bukti SP2D LS</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp30.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp175.000.000,00</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
                <p>&nbsp;</p>
                
                <p>Nama Akun : Tunjangan Jabatan</p>
                
                <table>
                    <tbody>
                        <tr>
                            <th style="text-align: center;">
                            <p><strong>Tanggal</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Keterangan&nbsp;</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Debit</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Kredit</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Saldo&nbsp;</strong></p>
                            </th>
                        </tr>
                        <tr>
                            <td>
                            <p>1 Januari 2021</p>
                            </td>
                            <td>
                            <p>Saldo Awal</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp0,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>6 Maret 2021</p>
                            </td>
                            <td>
                            <p>Pembayaran Gaji dan Tunjangan Bulan Maret Th 2021 SP2D-LS</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp45.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp45.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>4 September 2021</p>
                            </td>
                            <td>
                            <p>Pembayaran belanja gaji dan tunjangan bulan September 2021 dengan bukti SP2D LS</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp75.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp120.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>3 Desember 2021</p>
                            </td>
                            <td>
                            <p>Pembayaran belanja gaji dan tunjangan bulan Desember 2021 dengan bukti SP2D LS</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp80.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp200.000.000,00</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
                <p>&nbsp;</p>
                
                <p>Nama Akun :Tunjangan Fungsional</p>
                
                <table>
                    <tbody>
                        <tr>
                            <th style="text-align: center;">
                            <p><strong>Tanggal</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Keterangan&nbsp;</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Debit</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Kredit</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Saldo&nbsp;</strong></p>
                            </th>
                        </tr>
                        <tr>
                            <td>
                            <p>1 Januari 2021</p>
                            </td>
                            <td>
                            <p>Saldo Awal</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp0,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>6 Maret 2021</p>
                            </td>
                            <td>
                            <p>Pembayaran Gaji dan Tunjangan Bulan Maret Th 2021 SP2D-LS</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp25.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp25.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>4 September 2021</p>
                            </td>
                            <td>
                            <p>Pembayaran belanja gaji dan tunjangan bulan September 2021 dengan bukti SP2D LS</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp25.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp50.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>3 Desember 2021</p>
                            </td>
                            <td>
                            <p>Pembayaran belanja gaji dan tunjangan bulan Desember 2021 dengan bukti SP2D LS</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp45.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp95.000.000,00</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
                <p>&nbsp;</p>
                
                <p>Nama Akun :Tunjangan Fungsional Umum</p>
                
                <table>
                    <tbody>
                        <tr>
                            <th style="text-align: center;">
                            <p><strong>Tanggal</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Keterangan&nbsp;</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Debit</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Kredit</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Saldo&nbsp;</strong></p>
                            </th>
                        </tr>
                        <tr>
                            <td>
                            <p>1 Januari 2021</p>
                            </td>
                            <td>
                            <p>Saldo Awal</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp0,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>6 Maret 2021</p>
                            </td>
                            <td>
                            <p>Pembayaran Gaji dan Tunjangan Bulan Maret Th 2021 SP2D-LS</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp30.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp30.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>4 September 2021</p>
                            </td>
                            <td>
                            <p>Pembayaran belanja gaji dan tunjangan bulan September 2021 dengan bukti SP2D LS</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp40.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp70.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>3 Desember 2021</p>
                            </td>
                            <td>
                            <p>Pembayaran belanja gaji dan tunjangan bulan Desember 2021 dengan bukti SP2D LS</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp60.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp130.000.000,00</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
                <p>&nbsp;</p>
                
                <p>Nama Akun :Tunjangan Beras</p>
                
                <table>
                    <tbody>
                        <tr>
                            <th style="text-align: center;">
                            <p><strong>Tanggal</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Keterangan&nbsp;</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Debit</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Kredit</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Saldo&nbsp;</strong></p>
                            </th>
                        </tr>
                        <tr>
                            <td>
                            <p>1 Januari 2021</p>
                            </td>
                            <td>
                            <p>Saldo Awal</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp0,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>6 Maret 2021</p>
                            </td>
                            <td>
                            <p>Pembayaran Gaji dan Tunjangan Bulan Maret Th 2021 SP2D-LS</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp9.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp9.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>4 September 2021</p>
                            </td>
                            <td>
                            <p>Pembayaran belanja gaji dan tunjangan bulan September 2021 dengan bukti SP2D LS</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp15.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp24.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>3 Desember 2021</p>
                            </td>
                            <td>
                            <p>Pembayaran belanja gaji dan tunjangan bulan Desember 2021 dengan bukti SP2D LS</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp5.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp29.000.000,00</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
                <p>&nbsp;</p>
                
                <p>Nama Akun :Tunjangan PPh/Tunjangan Khusus</p>
                
                <table>
                    <tbody>
                        <tr>
                            <th style="text-align: center;">
                            <p><strong>Tanggal</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Keterangan&nbsp;</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Debit</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Kredit</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Saldo&nbsp;</strong></p>
                            </th>
                        </tr>
                        <tr>
                            <td>
                            <p>1 Januari 2021</p>
                            </td>
                            <td>
                            <p>Saldo Awal</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp0,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>6 Maret 2021</p>
                            </td>
                            <td>
                            <p>Pembayaran Gaji dan Tunjangan Bulan Maret Th 2021 SP2D-LS</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp1.500.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp1.500.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>4 September 2021</p>
                            </td>
                            <td>
                            <p>Pembayaran belanja gaji dan tunjangan bulan September 2021 dengan bukti SP2D LS</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp7.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp8.500.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>3 Desember 2021</p>
                            </td>
                            <td>
                            <p>Pembayaran belanja gaji dan tunjangan bulan Desember 2021 dengan bukti SP2D LS</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp3.500.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp12.000.000,00</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
                <p>&nbsp;</p>
                
                <p>Nama Akun :Belanja Alat Tulis Kantor</p>
                
                <table>
                    <tbody>
                        <tr>
                            <td style="text-align:center">
                            <p><strong>Tanggal</strong></p>
                            </td>
                            <td style="text-align:center">
                            <p><strong>Keterangan&nbsp;</strong></p>
                            </td>
                            <td style="text-align:center">
                            <p><strong>Debit</strong></p>
                            </td>
                            <td style="text-align:center">
                            <p><strong>Kredit</strong></p>
                            </td>
                            <td style="text-align:center">
                            <p><strong>Saldo&nbsp;</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>1 Januari 2021</p>
                            </td>
                            <td>
                            <p>Saldo Awal</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp0,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>6 Mei 2021</p>
                            </td>
                            <td>
                            <p>Pembayaran Belanja ATK SP2D-LS</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp250.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp250.000.000,00</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
                <p>&nbsp;</p>
                
                <p>Nama Akun :Honorarium Tenaga Ahli/Narasumber/Instruktur</p>
                
                <table>
                    <tbody>
                        <tr>
                            <th style="text-align: center;">
                            <p><strong>Tanggal</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Keterangan&nbsp;</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Debit</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Kredit</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Saldo&nbsp;</strong></p>
                            </th>
                        </tr>
                        <tr>
                            <td>
                            <p>1 Januari 2021</p>
                            </td>
                            <td>
                            <p>Saldo Awal</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp0,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>15 Juli 2021</p>
                            </td>
                            <td>
                            <p>Pembayaran Honorarium Tenaga Profesional UP</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp50.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp50.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>23 Juli 2021</p>
                            </td>
                            <td>
                            <p>Pembayaran Honorarium Tenaga Profesional Tambahan dengan Dana di Bendahara Pengeluaran</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp60.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp110.000.000,00</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
                <p>&nbsp;</p>
                
                <p>Nama Akun :Pembayaran Belanja Modal Pengadaan Studio Audio</p>
                
                <table>
                    <tbody>
                        <tr>
                            <th style="text-align: center;">
                            <p><strong>Tanggal</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Keterangan&nbsp;</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Debit</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Kredit</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Saldo&nbsp;</strong></p>
                            </th>
                        </tr>
                        <tr>
                            <td>
                            <p>1 Januari 2021</p>
                            </td>
                            <td>
                            <p>Saldo Awal</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp0,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>11 April 2021&nbsp;</p>
                            </td>
                            <td>
                            <p>Pembayaran Belanja Modal Pengadaan Studio Audio</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp450.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp450.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>5 Agustus 2021</p>
                            </td>
                            <td>
                            <p>Pembayaran Pembangunan Studio Audio Tahap 2</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp300.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp750.000.000,00</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
                <p>&nbsp;</p>
                
                <p>Nama Akun :Pendapatan - Pengadaan Studio Audio -LRA</p>
                
                <table>
                    <tbody>
                        <tr>
                            <th style="text-align: center;">
                            <p><strong>Tanggal</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Keterangan&nbsp;</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Debit</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Kredit</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Saldo&nbsp;</strong></p>
                            </th>
                        </tr>
                        <tr>
                            <td>
                            <p>1 Januari 2021</p>
                            </td>
                            <td>
                            <p>Saldo Awal</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp0,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>13 Juni 2021</p>
                            </td>
                            <td>
                            <p>Penerimaan Pendapatan Retribusi Kemudian disetor ke Kas Daerah</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp325.000.000,00</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp325.000.000,00</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
                <p>&nbsp;</p>
                
                <p>Nama Akun :Gaji Pokok PNS/Uang Representasi</p>
                
                <table>
                    <tbody>
                        <tr>
                            <th style="text-align: center;">
                            <p><strong>Tanggal</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Keterangan&nbsp;</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Debit</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Kredit</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Saldo&nbsp;</strong></p>
                            </th>
                        </tr>
                        <tr>
                            <td>
                            <p>1 Januari 2021</p>
                            </td>
                            <td>
                            <p>Saldo Awal</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp0,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>6 Maret 2021</p>
                            </td>
                            <td>
                            <p>Pembayaran Gaji dan Tunjangan Bulan Maret Th 2021 SP2D-LS</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp250.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp250.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>4 September 2021</p>
                            </td>
                            <td>
                            <p>Pembayaran belanja gaji dan tunjangan bulan September 2021 dengan bukti SP2D LS</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp135.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp385.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>3 Desember 2021</p>
                            </td>
                            <td>
                            <p>Pembayaran belanja gaji dan tunjangan bulan Desember 2021 dengan bukti SP2D LS</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp120.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp505.000.000,00</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
                <p>&nbsp;</p>
                
                <p>Nama Akun :Tunjangan Keluarga - LO</p>
                
                <table>
                    <tbody>
                        <tr>
                            <th style="text-align: center;">
                            <p><strong>Tanggal</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Keterangan&nbsp;</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Debit</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Kredit</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Saldo&nbsp;</strong></p>
                            </th>
                        </tr>
                        <tr>
                            <td>
                            <p>1 Januari 2021</p>
                            </td>
                            <td>
                            <p>Saldo Awal</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp0,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>6 Maret 2021</p>
                            </td>
                            <td>
                            <p>Pembayaran Gaji dan Tunjangan Bulan Maret Th 2021 SP2D-LS</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp80.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp80.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>4 September 2021</p>
                            </td>
                            <td>
                            <p>Pembayaran belanja gaji dan tunjangan bulan September 2021 dengan bukti SP2D LS</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp65.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp145.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>3 Desember 2021</p>
                            </td>
                            <td>
                            <p>Pembayaran belanja gaji dan tunjangan bulan Desember 2021 dengan bukti SP2D LS</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp30.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp175.000.000,00</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
                <p>&nbsp;</p>
                
                <p>Nama Akun :Tunjangan Jabatan - LO</p>
                
                <table>
                    <tbody>
                        <tr>
                            <th style="text-align: center;">
                            <p><strong>Tanggal</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Keterangan&nbsp;</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Debit</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Kredit</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Saldo&nbsp;</strong></p>
                            </th>
                        </tr>
                        <tr>
                            <td>
                            <p>1 Januari 2021</p>
                            </td>
                            <td>
                            <p>Saldo Awal</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp0,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>6 Maret 2021</p>
                            </td>
                            <td>
                            <p>Pembayaran Gaji dan Tunjangan Bulan Maret Th 2021 SP2D-LS</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp45.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp45.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>4 September 2021</p>
                            </td>
                            <td>
                            <p>Pembayaran belanja gaji dan tunjangan bulan September 2021 dengan bukti SP2D LS</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp75.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp120.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>3 Desember 2021</p>
                            </td>
                            <td>
                            <p>Pembayaran belanja gaji dan tunjangan bulan Desember 2021 dengan bukti SP2D LS</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp80.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp200.000.000,00</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
                <p>&nbsp;</p>
                
                <p>Nama Akun:Tunjangan Fungsional - LO;</p>
                
                <table>
                    <tbody>
                        <tr>
                            <th style="text-align: center;">
                            <p><strong>Tanggal</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Keterangan&nbsp;</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Debit</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Kredit</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Saldo&nbsp;</strong></p>
                            </th>
                        </tr>
                        <tr>
                            <td>
                            <p>1 Januari 2021</p>
                            </td>
                            <td>
                            <p>Saldo Awal</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp0,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>6 Maret 2021</p>
                            </td>
                            <td>
                            <p>Pembayaran Gaji dan Tunjangan Bulan Maret Th 2021 SP2D-LS</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp25.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp25.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>4 September 2021</p>
                            </td>
                            <td>
                            <p>Pembayaran belanja gaji dan tunjangan bulan September 2021 dengan bukti SP2D LS</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp25.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp50.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>3 Desember 2021</p>
                            </td>
                            <td>
                            <p>Pembayaran belanja gaji dan tunjangan bulan Desember 2021 dengan bukti SP2D LS</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp45.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp95.000.000,00</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
                <p>&nbsp;</p>
                
                <p>Nama Akun :Tunjangan Fungsional Umum&nbsp; LO</p>
                
                <table>
                    <tbody>
                        <tr>
                            <th style="text-align: center;">
                            <p><strong>Tanggal</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Keterangan&nbsp;</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Debit</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Kredit</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Saldo&nbsp;</strong></p>
                            </th>
                        </tr>
                        <tr>
                            <td>
                            <p>1 Januari 2021</p>
                            </td>
                            <td>
                            <p>Saldo Awal</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp0,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>6 Maret 2021</p>
                            </td>
                            <td>
                            <p>Pembayaran Gaji dan Tunjangan Bulan Maret Th 2021 SP2D-LS</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp30.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp30.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>4 September 2021</p>
                            </td>
                            <td>
                            <p>Pembayaran belanja gaji dan tunjangan bulan September 2021 dengan bukti SP2D LS</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp40.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp70.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>3 Desember 2021</p>
                            </td>
                            <td>
                            <p>Pembayaran belanja gaji dan tunjangan bulan Desember 2021 dengan bukti SP2D LS</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp60.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp130.000.000,00</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
                <p>&nbsp;</p>
                
                <p>Nama Akun :Tunjangan Beras - LO</p>
                
                <table>
                    <tbody>
                        <tr>
                            <th style="text-align: center;">
                            <p><strong>Tanggal</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Keterangan&nbsp;</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Debit</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Kredit</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Saldo&nbsp;</strong></p>
                            </th>
                        </tr>
                        <tr>
                            <td>
                            <p>1 Januari 2021</p>
                            </td>
                            <td>
                            <p>Saldo Awal</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp0,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>6 Maret 2021</p>
                            </td>
                            <td>
                            <p>Pembayaran Gaji dan Tunjangan Bulan Maret Th 2021 SP2D-LS</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp9.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp9.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>4 September 2021</p>
                            </td>
                            <td>
                            <p>Pembayaran belanja gaji dan tunjangan bulan September 2021 dengan bukti SP2D LS</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp15.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp24.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>3 Desember 2021</p>
                            </td>
                            <td>
                            <p>Pembayaran belanja gaji dan tunjangan bulan Desember 2021 dengan bukti SP2D LS</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp5.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp29.000.000,00</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
                <p>&nbsp;</p>
                
                <p>Nama Akun :Tunjangan PPh/Tunjangan Khusus - LO</p>
                
                <table>
                    <tbody>
                        <tr>
                            <th style="text-align: center;">
                            <p><strong>Tanggal</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Keterangan&nbsp;</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Debit</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Kredit</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Saldo&nbsp;</strong></p>
                            </th>
                        </tr>
                        <tr>
                            <td>
                            <p>1 Januari 2021</p>
                            </td>
                            <td>
                            <p>Saldo Awal</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp0,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>6 Maret 2021</p>
                            </td>
                            <td>
                            <p>Pembayaran Gaji dan Tunjangan Bulan Maret Th 2021 SP2D-LS</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp1.500.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp1.500.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>4 September 2021</p>
                            </td>
                            <td>
                            <p>Pembayaran belanja gaji dan tunjangan bulan September 2021 dengan bukti SP2D LS</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp7.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp8.500.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>3 Desember 2021</p>
                            </td>
                            <td>
                            <p>Pembayaran belanja gaji dan tunjangan bulan Desember 2021 dengan bukti SP2D LS</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp3.500.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp12.000.000,00</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
                <p>&nbsp;</p>
                
                <p>Nama Akun : Honorarium Tenaga Ahli/Narasumber/Instruktur</p>
                
                <table>
                    <tbody>
                        <tr>
                            <th style="text-align: center;">
                            <p><strong>Tanggal</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Keterangan&nbsp;</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Debit</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Kredit</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Saldo&nbsp;</strong></p>
                            </th>
                        </tr>
                        <tr>
                            <td>
                            <p>1 Januari 2021</p>
                            </td>
                            <td>
                            <p>Saldo Awal</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp0,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>15 Juli 2021</p>
                            </td>
                            <td>
                            <p>Pembayaran Honorarium Tenaga Profesional UP</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp50.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp50.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>23 Juli 2021</p>
                            </td>
                            <td>
                            <p>Pembayaran Honorarium Tenaga Profesional Tambahan dengan Dana di Bendahara Pengeluaran</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp60.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp110.000.000,00</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
                <p>&nbsp;</p>
                
                <p>Nama Akun :Beban Persediaan Alat Tulis Kantor</p>
                
                <table>
                    <tbody>
                        <tr>
                            <th style="text-align: center;">
                            <p><strong>Tanggal</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Keterangan&nbsp;</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Debit</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Kredit</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Saldo&nbsp;</strong></p>
                            </th>
                        </tr>
                        <tr>
                            <td>
                            <p>31 Desember 2021</p>
                            </td>
                            <td>
                            <p>Penyesuaian Akhir Tahun</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp260.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp260.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>0</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
                <p>&nbsp;</p>
                
                <p>Nama Akun :Beban Penyusutan Alat Angkutan Darat Bermotor</p>
                
                <table>
                    <tbody>
                        <tr>
                            <th style="text-align: center;">
                            <p><strong>Tanggal</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Keterangan&nbsp;</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Debit</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Kredit</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Saldo&nbsp;</strong></p>
                            </th>
                        </tr>
                        <tr>
                            <td>
                            <p>31 Desember 2021</p>
                            </td>
                            <td>
                            <p>Penyesuaian Akhir Tahun</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp51.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp51.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                    </tbody>
                </table>
                
                <p>&nbsp;</p>
                
                <p>Nama Akun :Beban Penyusutan Bangunan Gedung Tempat Kerja</p>
                
                <table>
                    <tbody>
                        <tr>
                            <th style="text-align: center;">
                            <p><strong>Tanggal</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Keterangan&nbsp;</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Debit</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Kredit</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Saldo&nbsp;</strong></p>
                            </th>
                        </tr>
                        <tr>
                            <td>
                            <p>31 Desember 2021</p>
                            </td>
                            <td>
                            <p>Penyesuaian Akhir Tahun</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp550.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp550.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                    </tbody>
                </table>',
            'key_answer_5'  => '<table>
                    <tbody>
                        <tr>
                            <th colspan="3" style="text-align: center;">
                            <p><strong>Dinas Pariwisata Kota Sembada</strong></p>
                            </th>
                        </tr>
                        <tr>
                            <th colspan="3" style="text-align: center;">
                            <p><strong>Neraca Saldo</strong></p>
                            </th>
                        </tr>
                        <tr>
                            <th colspan="3" style="text-align: center;">
                            <p><strong>per 31 Desember 2021</strong></p>
                            </th>
                        </tr>
                        <tr>
                            <th rowspan="2" style="text-align: center;">
                            <p><strong>Keterangan</strong></p>
                            </th>
                            <th colspan="2" style="text-align: center;">
                            <p><strong>Saldo</strong></p>
                            </th>
                        </tr>
                        <tr>
                            <th style="text-align: center;">
                            <p><strong>Debit</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Kredit</strong></p>
                            </th>
                        </tr>
                        <tr>
                            <td>
                            <p>Kas di Bendahara Pengeluaran</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp5.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>Persediaan Alat Tulis Kantor</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp275.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>Tanah</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp600.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>Kendaraan</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp255.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>Bangunan</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp11.000.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>Studio Audio</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp750.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>Utang Pihak Ketiga</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp150.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>Utang PPh 21</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp20.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>Ekuitas</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp11.785.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>Estimasi Perubahan SAL</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp1.931.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>RK PPKD</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp1.901.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>Pendapatan - Event Pariwisata - LRA</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp325.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>Gaji Pokok PNS/Uang Representasi</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp505.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>Tunjangan Keluarga</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp175.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>Tunjangan Jabatan</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp200.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>Tunjangan Fungsional</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp95.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>Tunjangan Fungsional Umum</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp130.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>Tunjangan Beras</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp29.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>Tunjangan PPh/Tunjangan Khusus</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp12.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>Belanja Alat Tulis Kantor</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp250.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>Honorarium Tenaga Ahli/Narasumber/Instruktur</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp110.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>Belanja Modal Pengadaan Studio Audio</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp750.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>Pendapatan - Event pariwisata - LO</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp325.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>Gaji Pokok PNS/Uang Representasi</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp505.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>Tunjangan Keluarga-LO</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp175.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>Tunjangan Jabatan-LO</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp200.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>Tunjangan Fungsional-LO</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp95.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>Tunjangan Fungsional Umum-LO</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp130.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>Tunjangan Beras-LO</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp29.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>Tunjangan PPh/Tunjangan Khusus-LO</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp12.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>Honorarium Tenaga Ahli/Narasumber/Instruktur</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp110.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td style="text-align:right">
                            <p><strong>Rp16.417.000.000,00</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>Rp16.417.000.000,00</strong></p>
                            </td>
                        </tr>
                    </tbody>
                </table>',
            'key_answer_6'  => '<table>
                    <tbody>
                        <tr>
                            <th colspan="4" style="text-align: center;">
                            <p><strong>Dinas Pariwisata Kota Sembada</strong></p>
                            </th>
                        </tr>
                        <tr>
                            <th colspan="4" style="text-align: center;">
                            <p><strong>Jurnal Penyesuaian</strong></p>
                            </th>
                        </tr>
                        <tr>
                            <th colspan="4" style="text-align: center;">
                            <p><strong>per 31 Desember 2021</strong></p>
                            </th>
                        </tr>
                        <tr>
                            <th style="text-align: center;">
                            <p><strong>Tanggal</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Keterangan</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Debit</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Kredit</strong></p>
                            </th>
                        </tr>
                        <tr>
                            <td>
                            <p>31 Desember 2021</p>
                            </td>
                            <td>
                            <p>Beban Persediaan Alat Tulis Kantor</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp260.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                            <p>Persediaan Alat Tulis Kantor</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp260.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>31 Desember 2021</p>
                            </td>
                            <td>
                            <p>Beban Penyusutan Bangunan Gedung Tempat Kerja</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp550.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                            <p>&nbsp; Akumulasi Penyusutan Bangunan Gedung Tempat Kerja</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp550.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>31 Desember 2021</p>
                            </td>
                            <td>
                            <p>Beban Penyusutan Alat Angkutan Darat Bermotor</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp51.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                            <p>&nbsp; Akumulasi Penyusutan Alat Angkutan Darat Bermotor</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp51.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align:center">
                            <p><strong>Total</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>Rp861.000.000,00</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>Rp861.000.000,00</strong></p>
                            </td>
                        </tr>
                    </tbody>
                </table>',
            'key_answer_7'  => '<table>
                    <thead>
                        <tr>
                            <th colspan="3" scope="col" style="text-align: center;">
                            <p>Dinas Pariwisata Kota Sembada</p>
                            </th>
                        </tr>
                        <tr>
                            <th colspan="3" scope="col" style="text-align: center;">
                            <p>Neraca Saldo Setelah Disesuaikan</p>
                            </th>
                        </tr>
                        <tr>
                            <th colspan="3" scope="col" style="text-align: center;">
                            <p>per 31 Desember 2021</p>
                            </th>
                        </tr>
                        <tr>
                            <th rowspan="2" scope="col" style="text-align: center;">
                            <p>Keterangan</p>
                            </th>
                            <th colspan="2" scope="col" style="text-align: center;">
                            <p>Saldo</p>
                            </th>
                        </tr>
                        <tr>
                            <th scope="col" style="text-align: center;">
                            <p>Debit</p>
                            </th>
                            <th scope="col" style="text-align: center;">
                            <p>Kredit</p>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                            <p>Kas di Bendahara Pengeluaran</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp5.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>Persediaan Alat Tulis Kantor</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp15.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>Tanah</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp600.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>Kendaraan</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp255.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>Bangunan</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp11.000.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>Studio Audio</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp750.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>Utang Pihak Ketiga</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp51.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>Utang PPh 21</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp550.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>Ekuitas</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp150.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>Estimasi Perubahan SAL</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp20.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>RK PPKD</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp11.785.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>Pendapatan - Event Pariwisata - LRA</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp1.931.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>Gaji Pokok PNS/Uang Representasi</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp1.901.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>Tunjangan Keluarga</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp325.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>Tunjangan Jabatan</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp505.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>Tunjangan Fungsional</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp175.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>Tunjangan Fungsional Umum</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp200.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>Tunjangan Beras</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp95.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>Tunjangan PPh/Tunjangan Khusus</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp130.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>Belanja Alat Tulis Kantor</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp29.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>Honorarium Tenaga Ahli/Narasumber/Instruktur</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp12.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>Belanja Modal Pengadaan Studio Audio</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp250.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>Pendapatan - Event pariwisata - LO</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp110.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>Gaji Pokok PNS/Uang Representasi</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp750.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>Tunjangan Keluarga-LO</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp325.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>Tunjangan Jabatan-LO</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp505.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>Tunjangan Fungsional-LO</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp175.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>Tunjangan Fungsional Umum-LO</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp200.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>Tunjangan Beras-LO</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp95.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>Tunjangan PPh/Tunjangan Khusus-LO</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp130.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>Honorarium Tenaga Ahli/Narasumber/Instruktur</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp29.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>Tunjangan PPh/Tunjangan Khusus-LO</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp12.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>Beban Persediaan Alat Tulis Kantor</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp260.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>Honorarium Tenaga Ahli/Narasumber/Instruktur</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp110.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>Beban Penyusutan Alat Angkutan Darat Bermotor</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp51.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>Beban Penyusutan Bangunan Gedung Tempat Kerja</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp550.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp17.018.000.000,00</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp17.018.000.000,00</p>
                            </td>
                        </tr>
                    </tbody>
                </table>',
            'key_answer_8'  => '<table>
                    <tbody>
                        <tr>
                            <th colspan="4" rowspan="3" style="text-align: center;">
                            <p><strong>Dinas Pariwisata Kota Sembada</strong></p>
                
                            <p><strong>Jurnal Penutup</strong></p>
                
                            <p><strong>per 31 Desember 2021</strong></p>
                            </th>
                        </tr>
                        <tr>
                        </tr>
                        <tr>
                        </tr>
                        <tr>
                            <th colspan="4" style="text-align: center;">
                            <p><strong>Jurnal Penutup LRA</strong></p>
                            </th>
                        </tr>
                        <tr>
                            <th style="text-align: center;">
                            <p><strong>Tanggal</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Keterangan</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Debit</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Kredit</strong></p>
                            </th>
                        </tr>
                        <tr>
                            <td>
                            <p>31 Desember 2021</p>
                            </td>
                            <td>
                            <p>Apropriasi Belanja</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp1,735,000,000.00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                            <p>&nbsp; Estimasi Pendapatan</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp300,000,000.00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                            <p>&nbsp; Estimasi Perubahan SAL</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp1,435,000,000.00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>31 Desember 2021</p>
                            </td>
                            <td>
                            <p>Pendapatan - Retribusi Event Pariwisata - LRA</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp325.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                            <p>Surplus/Defisit LRA</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp1.931.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                            <p>&nbsp; Gaji Pokok PNS/Uang&nbsp; Representasi</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp505.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                            <p>&nbsp; Tunjangan Keluarga</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp175.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                            <p>&nbsp; Tunjangan Jabatan</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp200.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                            <p>&nbsp; Tunjangan Fungsional</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp95.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                            <p>&nbsp; Tunjangan Fungsional Umum</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp130.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                            <p>&nbsp; Tunjangan Beras</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp29.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                            <p>&nbsp; Tunjangan PPh/Tunjangan Khusus</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp12.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                            <p>&nbsp; Belanja Alat Tulis Kantor</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp250.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                            <p>&nbsp; Honorarium Tenaga Ahli/Narasumber/Instruktur</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp110.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                            <p>&nbsp; Belanja Modal Pengadaan Jalan Kabupaten</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp750.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>31 Desember 2021</p>
                            </td>
                            <td>
                            <p>Estimasi Perubahan SAL</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp1.931.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                            <p>&nbsp; Surplus/Defisit LRA</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp1.931.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td><br />
                            <br />
                            <br />
                            <br />
                            &nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <th colspan="4" style="text-align: center;">
                            <p><strong>Jurnal Penutup LO</strong></p>
                            </th>
                        </tr>
                        <tr>
                            <th style="text-align: center;">
                            <p><strong>Tanggal</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Keterangan</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Debit</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>Kredit</strong></p>
                            </th>
                        </tr>
                        <tr>
                            <td>
                            <p>31 Desember 2021</p>
                            </td>
                            <td>
                            <p>Pendapatan - Event Pariwisata - LO</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp325.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                            <p>Surplus/Defisit LO</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp1.792.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                            <p>&nbsp; Gaji Pokok PNS/Uang Representasi</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp505.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                            <p>&nbsp; Tunjangan Keluarga-LO</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp175.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                            <p>&nbsp; Tunjangan Jabatan-LO</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp200.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                            <p>&nbsp; Tunjangan Fungsional-LO</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp95.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                            <p>&nbsp; Tunjangan Fungsional Umum-LO</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp130.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>&nbsp;</p>
                            </td>
                            <td>
                            <p>&nbsp; Tunjangan Beras-LO</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp29.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                            <p>&nbsp; Tunjangan PPh/Tunjangan Khusus-LO</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp12.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                            <p>&nbsp; Belanja Alat Tulis Kantor</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp260.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                            <p>&nbsp; Honorarium Tenaga Ahli/Narasumber/Instruktur</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp110.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                            <p>&nbsp; Beban penyusutan Alat Angkutan Darat Bermotor</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp51.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                            <p>&nbsp; Beban penyusutan Banguann Gedung Tempat Kerja</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp550.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>31 Desember 2021</p>
                            </td>
                            <td>
                            <p>Ekuitas</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp1.792.000.000,00</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                            <p>&nbsp; Surplus/Defisit LO</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">
                            <p>Rp1.792.000.000,0</p>
                            </td>
                        </tr>
                    </tbody>
                </table>',
            'key_answer_9'  => '<table>
                    <tbody>
                        <tr>
                            <td colspan="3" style="text-align:center">
                            <p><strong>PEMERINTAH KOTA SEMBADA</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" style="text-align:center">
                            <p><strong>DINAS PARIWISATA</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" style="text-align:center">
                            <p><strong>LAPORAN REALISASI ANGGARAN PENDAPATAN DAN BELANJA DAERAH</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" style="text-align:center">
                            <p><strong>UNTUK TAHUN YANG BERAKHIR SAMPAI DENGAN 31 DESEMBER 2021</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align:center">
                            <p><strong>Uraian</strong></p>
                            </td>
                            <td style="text-align:center">
                            <p><strong>Anggaran</strong></p>
                            </td>
                            <td style="text-align:center">
                            <p><strong>Realisasi</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>PENDAPATAN - LRA</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>PENDAPATAN ASLI DAERAH (PAD) - LRA</p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>Pendapatan Retribusi Daerah - LRA</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp300.000.000,00</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp325.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>Jumlah Pendapatan</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>Rp300.000.000,00</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>Rp325.000.000,00</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>BELANJA</strong></p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>BELANJA OPERASI</strong></p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>Belanja Pegawai</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp855.000.000,00</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp1.256.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>Belanja Barang dan Jasa</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp325.000.000,00</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp250.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>Jumlah Belanja Operasi</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>Rp1.180.000.000,00</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>Rp1.506.000.000,00</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>BELANJA MODAL</strong></p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>Belanja Modal Jalan, Irigasi, Dan Jaringan</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp555.000.000,00</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp750.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>Jumlah Belanja Modal</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>Rp555.000.000,00</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>Rp750.000.000,00</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>JUMLAH BELANJA</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>Rp1.735.000.000,00</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>Rp2.256.000.000,00</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>SURPLUS DEFISIT</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>(Rp1.435.000.000,00)</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>(Rp1.931.000.000,00)</strong></p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
                <p>&nbsp;</p>
                
                <table>
                    <tbody>
                        <tr>
                            <th colspan="2" style="text-align: center;">
                            <p><strong>PEMERINTAH KOTA SEMBADA</strong></p>
                            </th>
                        </tr>
                        <tr>
                            <th colspan="2" style="text-align: center;">
                            <p><strong>DINAS PARIWISATA</strong></p>
                            </th>
                        </tr>
                        <tr>
                            <th colspan="2" style="text-align: center;">
                            <p><strong>LAPORAN OPERASIONAL</strong></p>
                            </th>
                        </tr>
                        <tr>
                            <th colspan="2" style="text-align: center;">
                            <p><strong>UNTUK TAHUN YANG BERAKHIR SAMPAI DENGAN 31 DESEMBER 2021</strong></p>
                            </th>
                        </tr>
                        <tr>
                            <th style="text-align: center;">
                            <p><strong>Uraian</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>2021</strong></p>
                            </th>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>PENDAPATAN - LRA</strong></p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>PENDAPATAN ASLI DAERAH (PAD) - LO</strong></p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>Pendapatan Retribusi Daerah - LO</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp325.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>JUMLAH PENDAPATAN</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>Rp325.000.000,00</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>BEBAN</strong></p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>BEBAN OPERASI - LO</strong></p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>Beban Pegawai - LO</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp1.256.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>Beban Barang dan Jasa</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp260.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>Beban Penyusutan dan Amortisasi</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp601.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>JUMLAH BEBAN&nbsp;</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>Rp2.117.000.000,00</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>SURPLUS (DEFISIT) - LO</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>(Rp1.792.000.000,00)</strong></p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
                <p>&nbsp;</p>
                
                <table>
                    <tbody>
                        <tr>
                            <th colspan="2" style="text-align: center;">
                            <p><strong>PEMERINTAH KOTA SEMBADA</strong></p>
                            </th>
                        </tr>
                        <tr>
                            <th colspan="2" style="text-align: center;">
                            <p><strong>DINAS PARIWISATA</strong></p>
                            </th>
                        </tr>
                        <tr>
                            <th colspan="2" style="text-align: center;">
                            <p><strong>LAPORAN PERUBAHAN EKUITAS</strong></p>
                            </th>
                        </tr>
                        <tr>
                            <th colspan="2" style="text-align: center;">
                            <p><strong>UNTUK PERIODE YANG BERAKHIR SAMPAI DENGAN 31 DESEMBER 2021</strong></p>
                            </th>
                        </tr>
                        <tr>
                            <th style="text-align: center;">
                            <p><strong>Uraian</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>2021</strong></p>
                            </th>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>Ekuitas Awal</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>Rp11,785,000,000.00</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>Surplus/Defisit - LO</p>
                            </td>
                            <td style="text-align:right">
                            <p>(Rp1.792.000.000,00)</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>Ekuitas Akhir&nbsp;</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>Rp9.993.000.000,00</strong></p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
                <p>&nbsp;</p>
                
                <table>
                    <tbody>
                        <tr>
                            <th colspan="2" style="text-align: center;">
                            <p><strong>PEMERINTAH KOTA SEMBADA</strong></p>
                            </th>
                        </tr>
                        <tr>
                            <th colspan="2" style="text-align: center;">
                            <p><strong>DINAS PARIWISATA</strong></p>
                            </th>
                        </tr>
                        <tr>
                            <th colspan="2" style="text-align: center;">
                            <p><strong>LAPORAN POSISI KEUANGAN</strong></p>
                            </th>
                        </tr>
                        <tr>
                            <th colspan="2" style="text-align: center;">
                            <p><strong>Per 31 Desember 2021</strong></p>
                            </th>
                        </tr>
                        <tr>
                            <th style="text-align: center;">
                            <p><strong>Uraian</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>2021</strong></p>
                            </th>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>ASET</strong></p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>ASET LANCAR</strong></p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>Kas dan Setara Kas</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp5.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>Persediaan</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp15.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>Jumlah Aset Lancar</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp20.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>ASET TETAP</strong></p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>Tanah</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp600.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>Peralatan dan Mesin</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp255.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>Gedung dan Bangunan</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp11.000.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>Jalan, Irigasi, dan Jaringan</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp750.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>Akumulasi Penyusutan</p>
                            </td>
                            <td style="text-align:right">
                            <p>(Rp601.000.000,00)</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>Jumlah Aset Tetap</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>Rp12.004.000.000,00</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>JUMLAH ASET</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>Rp12.024.000.000,00</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>KEWAJIBAN</strong></p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>KEWAJIBAN JANGKA PENDEK</strong></p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>Utang Perhitungan Pihak Ketiga</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp150.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>Estimasi Perubahan SAL</p>
                            </td>
                            <td style="text-align:right">
                            <p>(Rp20.000.000,00)</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>Jumlah Kewajiban Jangka Pendek</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp130.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>JUMLAH KEWAJIBAN</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>Rp130.000.000,00</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>EKUITAS</strong></p>
                            </td>
                            <td style="text-align:right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>Ekuitas</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp9.993.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>Ekuitas untuk dikonsolidasikan</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp1.901.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>Jumlah Ekuitas&nbsp;</p>
                            </td>
                            <td style="text-align:right">
                            <p>Rp11.894.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>JUMLAH KEWAJIBAN DAN EKUITAS&nbsp;</strong></p>
                            </td>
                            <td style="text-align:right">
                            <p><strong>Rp12.024.000.000,00</strong></p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
                <p>&nbsp;</p>
                
                <table>
                    <tbody>
                        <tr>
                            <th colspan="2" style="text-align: center;">
                            <p><strong>PEMERINTAH KOTA SEMBADA</strong></p>
                            </th>
                        </tr>
                        <tr>
                            <th colspan="2" style="text-align: center;">
                            <p><strong>DINAS PARIWISATA</strong></p>
                            </th>
                        </tr>
                        <tr>
                            <th colspan="2" style="text-align: center;">
                            <p><strong>LAPORAN ARUS KAS</strong></p>
                            </th>
                        </tr>
                        <tr>
                            <th colspan="2" style="text-align: center;">
                            <p><strong>Untuk Tahun Yang Berakhir Sampai Dengan 31 Desember 2021</strong></p>
                            </th>
                        </tr>
                        <tr>
                            <th style="text-align: center;">
                            <p><strong>Uraian</strong></p>
                            </th>
                            <th style="text-align: center;">
                            <p><strong>2021</strong></p>
                            </th>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>ARUS KAS DARI AKTIVITAS OPERASI</strong></p>
                            </td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>Arus Kas Keluar</strong></p>
                            </td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>Pembayaran Barang dan Jasa</p>
                            </td>
                            <td>
                            <p>Rp110.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>Jumlah Arus Kas Keluar</strong></p>
                            </td>
                            <td>
                            <p><strong>Rp110.000.000,00</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>Jumlah Arus Kas Bersih dari Aktivitas Operasi</strong></p>
                            </td>
                            <td>
                            <p><strong>(Rp110.000.000,00)</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>ARUS KAS DARI AKTIVITAS TRANSITORIS</strong></p>
                            </td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>Arus Kas Masuk</p>
                            </td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>Penerimaan Perhitungan Pihak Ketiga</p>
                            </td>
                            <td>
                            <p>Rp80.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>Jumlah Arus Kas Masuk</strong></p>
                            </td>
                            <td>
                            <p><strong>Rp80.000.000,00</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>Arus Kas Keluar</p>
                            </td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>Pengeluaran Perhitungan Pihak Ketiga</p>
                            </td>
                            <td>
                            <p>Rp45.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>Jumlah Arus Keluar</strong></p>
                            </td>
                            <td>
                            <p><strong>Rp45.000.000,00</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p>Jumlah Arus Kas Bersih dari Aktivitas Transitoris</p>
                            </td>
                            <td>
                            <p>Rp35.000.000,00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                            <p>Kenaikan (Penurunan) Bersih Kas Selama Periode</p>
                            </td>
                            <td>
                            <p>(Rp75.000.000,00)</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>Saldo Awal Kas</strong></p>
                            </td>
                            <td>
                            <p><strong>Rp80.000.000,00</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <p><strong>Saldo Akhir Kas</strong></p>
                            </td>
                            <td>
                            <p><strong>Rp5.000.000,00</strong></p>
                            </td>
                        </tr>
                    </tbody>
                </table>',
        ]);
    }
}
