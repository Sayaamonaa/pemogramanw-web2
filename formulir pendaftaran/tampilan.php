<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $nim = $_POST["nim"];
    $jurusan = $_POST["jurusan"];
    $alamat = $_POST["alamat"];
    $minat = $_POST["minat"];

    // Proses upload foto
    $foto_name = $_FILES["foto"]["name"];
    $foto_tmp = $_FILES["foto"]["tmp_name"];
    $foto_path = "WEB2/formulir pendaftaran" . $foto_name;
    move_uploaded_file($foto_tmp, $foto_path);

    // Redirect ke halaman konfirmasi
    header("Location: konfirmasi.php?nama=$nama&nim=$nim&jurusan=$jurusan&alamat=$alamat&minat=$minat&foto=$foto_path");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Pendaftaran Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 20px;
            text-align: center;
        }

        h2 {
            color: #333;
        }

        p {
            margin-bottom: 20px;
        }

        img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h2>Konfirmasi Pendaftaran Mahasiswa</h2>
    <p>Terima kasih, data pendaftaran Anda telah berhasil diproses.</p>

    <p>Detail Pendaftaran:</p>
    <?php
  

        echo "<p>Nama: $nama</p>";
        echo "<p>NIM: $nim</p>";
        echo "<p>Jurusan: $jurusan</p>";
        echo "<p>Alamat: $alamat</p>";
        echo "<p>Minat: $minat</p>";
        echo "<p>Foto:</p>";
        echo "<img src='$foto_path' alt='Foto'>";
    
    ?>
</body>
</html>
