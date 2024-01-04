<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Segitiga Siku-siku</title>
</head>
<body>

<?php
// Ambil nilai variabel 'tinggi' dari URL
$tinggi = isset($_GET['tinggi']) ? (int)$_GET['tinggi'] : 10;

// Fungsi untuk menampilkan segitiga siku-siku ke bawah
function tampilkanSegitiga($tinggi) {
    for ($i = $tinggi; $i >= 1; $i--) {
        // Menampilkan angka dalam baris
        for ($j = 1; $j <= $i; $j++) {
            echo $j;
            if ($j < $i) {
                echo " ";
            }
        }

        echo "<br>";
    }
}

// Panggil fungsi untuk menampilkan segitiga siku-siku
tampilkanSegitiga($tinggi);
?>

</body>
</html>
