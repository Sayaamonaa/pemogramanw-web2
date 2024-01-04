<?php
function hitungPangkat($bilangan, $pangkat) {
    $hasil = 1;

    for ($i = 1; $i <= $pangkat; $i++) {
        $hasil *= $bilangan;
    }

    return $hasil;
}

$angka = 5; 
$pangkat = 4; 

$hasilPangkat = hitungPangkat($angka, $pangkat);
echo "$angka pangkat $pangkat = $hasilPangkat";
?>
