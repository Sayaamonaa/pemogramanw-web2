<?php

$lirik = [
    "001" => "Balonku ada lima",
    "002" => "Rupa-rupa warna-nya",
    "003" => "hijau, kuning, kelabu, merah muda, dan biru",
    "004" => "Meletus balon hijau DOR!!!",
    "005" => "Hatiku sangat kacau"
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>warna</title>
</head>
<body>
<?php
foreach ($lirik as $balon) { // Perulangan akan otomatis menampilkan semua isi array
  echo "<p>$balon</p>";
}
?>
</body>
</html>