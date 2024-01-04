<?php
require_once __DIR__ . '/vendor/autoload.php';

require 'Connection.php';
$pinjam = query("SELECT * FROM data_bohotel");


$hotel .= '
<page>
    <h3 align="center">Laporan Booking Hotel Mona</h3>
    <table border="1" align="center" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>Tanggal lahir</th>
            <th>jenis kelamin</th>
            <th>No telepon</th>
            <th>No kamar</th>
            <th>Jenis kamar</th>
            <th>Gambar</th>
        </tr>
        ';

$no = 1;
foreach ($pinjam as $row) {
    $hotel .= ' 
                <tr>
                    <td>' . $no++ . '</td>
                    <td>' . $row['nama'] . '</td>
                    <td>' . $row['alamat'] . '</td>
                    <td>' . $row['email'] . '</td>
                    <td>' . $row['tanggal_lahir'] . '</td>
                    <td>' . $row['jenis_kelamin'] . '</td>
                    <td>' . $row['telepon'] . '</td>
                    <td>' . $row['no_kamar'] . '</td>
                    <td>' . $row['jenis_kamar'] . '</td>
                    <td><img src="image/' . $row['gambar'] . '" width="50" height="50"></td>
                </tr>
                ';
}
$hotel .= '
            </table>
</page>';

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($hotel);
$mpdf->Output("Laporan Data Booking Hotel", "I");
exit;
