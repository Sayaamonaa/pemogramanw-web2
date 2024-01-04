<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $nama = htmlspecialchars($_POST["nama"]);
    $nim = htmlspecialchars($_POST["nim"]);
    $jurusan = htmlspecialchars($_POST["jurusan"]);
    $alamat = htmlspecialchars($_POST["alamat"]);
    $minat = htmlspecialchars($_POST["minat"]);

    // Simpan data ke database
    $foto_path = upload_photo($_FILES["foto"]);
    save_to_database($nama, $nim, $jurusan, $alamat, $minat, $foto_path);

    // Tampilkan hasil pendaftaran
    echo "Pendaftaran berhasil!<br>";
    echo "Nama: $nama<br>";
    echo "NIM: $nim<br>";
    echo "Jurusan: $jurusan<br>";
    echo "Alamat: $alamat<br>";
    echo "Minat: $minat<br>";
    echo "Foto: <img src='$foto_path' alt='Foto Mahasiswa'>";
}

function upload_photo($file) {
    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($file["name"]);

    if (move_uploaded_file($file["tmp_name"], $targetFile)) {
        return $targetFile;
    } else {
        return null;
    }
}

function save_to_database($nama, $nim, $jurusan, $alamat, $minat, $foto_path) {
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mahasiswa_db";

    $conn = new mysqli($host, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }
    
}
?>
