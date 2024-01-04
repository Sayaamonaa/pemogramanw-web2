<?php
// Membuat array dengan 5 negara di ASEAN
$negara_asean = ["Indonesia", "Singapura", "Malaysia", "Brunei", "Thailand"];

// Menampilkan array awal sebagai daftar HTML
echo "<h2>Daftar negara ASEAN awal:</h2>";
echo "<ul>";
foreach ($negara_asean as $negara) {
    echo "<li>$negara</li>";
}
echo "</ul>";

echo "<h2>Daftar negara ASEAN baru:</h2>";
echo "<ul>";
$negara = array_push($negara_asean, "laos", "filipina", "mnyanmar "); //menambah beberapa elemen pada akhir array
foreach ($negara_asean as $negara) {
echo "<li>$negara</li>";
}
echo "</ul>";

?>