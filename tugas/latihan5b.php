<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
</head>
<body>

<?php
    // Ambil nilai variabel 'nama-anda' dari POST
    $nama_anda = isset($_POST["nama-anda"]) ? $_POST["nama-anda"] : "monaaa";

    // Buat link yang terhubung ke latihan5c.php dengan mengirimkan data melalui URL
    $link_url = "latihan5c.php?nama-anda=" . urlencode($nama_anda);
?>

<h2>
    Welcome to the jungle, <a href="<?php echo $link_url; ?>"><?php echo $nama_anda; ?></a>!
</h2>

</body>
</html>
