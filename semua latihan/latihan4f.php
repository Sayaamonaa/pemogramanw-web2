<?php
function hitungFaktorial($bilangan) {
    if ($bilangan < 0) {
        return "Bilangan negatif tidak memiliki faktorial.";
    } elseif ($bilangan == 0) {
        return 1;
    } else {
        $faktorial = 1;
        for ($i = 1; $i <= $bilangan; $i++) {
            $faktorial *= $i;
        }
        return $faktorial;
    }
}

$angka = 5; // Contoh angka
$hasilFaktorial = hitungFaktorial($angka);

if (is_numeric($hasilFaktorial)) {
    echo "Faktorial dari $angka = $hasilFaktorial";
} else {
    echo $hasilFaktorial;
}
?>
