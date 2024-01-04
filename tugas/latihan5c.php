 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Detail Data</title>
</head>
<body>

<?php
// Ambil data dari array yang dikirim melalui URL
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = (int)$_GET['id'];

    // Contoh array data (gantilah dengan array sesuai kebutuhan)
    $data = array(
        array('id' => 1, 'nama' => 'John Doe', 'umur' => 25),
        array('id' => 2, 'nama' => 'Jane Doe', 'umur' => 30),
        // ... tambahkan data lainnya sesuai kebutuhan
    );

    // Cari data yang sesuai dengan ID
    $detailData = array_filter($data, function($item) use ($id) {
        return $item['id'] === $id;
    });

    if (!empty($detailData)) {
        $detailData = reset($detailData); // Ambil data pertama dari hasil filter
?>
        <h2>Detail Data</h2>
        <p>ID: <?php echo $detailData['id']; ?></p>
        <p>Nama: <?php echo $detailData['nama']; ?></p>
        <p>Umur: <?php echo $detailData['umur']; ?></p>

        <p><a href="latihan5b.php">Kembali ke halaman latihan5b.php</a></p>
<?php
    } else {
        echo '<p>Data tidak ditemukan.</p>';
    }
} else {
    echo '<p>ID tidak valid.</p>';
}
?>

</body>
</html>
