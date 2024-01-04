<!DOCTYPE html>
<html>
<head>
</head>
<body>
   

    <h2>isset:</h2>
    <p>
        Fungsi <code>isset</code> digunakan untuk memeriksa apakah suatu variabel telah didefinisikan (ada dalam lingkup variabel) dan apakah nilainya bukan null.
        Hasil dari <code>isset</code> adalah <code>true</code> jika variabel telah didefinisikan dan memiliki nilai (meskipun nilai tersebut adalah null),
        dan <code>false</code> jika variabel tidak ada atau memiliki nilai null.
    </p>

    <?php
    // Contoh penggunaan isset
    $nama = "John";
    if (isset($nama)) {
        echo "<p>Variabel 'nama' telah didefinisikan dan tidak null.</p>";
    } else {
        echo "<p>Variabel 'nama' tidak didefinisikan atau null.</p>";
    }
    ?>

    <h2>empty:</h2>
    <p>
        Fungsi <code>empty</code> digunakan untuk memeriksa apakah suatu variabel telah didefinisikan dan apakah nilainya "kosong" (null, 0, '', false, array kosong, atau variabel yang tidak didefinisikan).
        Hasil dari <code>empty</code> adalah <code>true</code> jika variabel tidak ada, nilainya null, 0, '', false, atau array kosong, dan <code>false</code> jika variabel telah didefinisikan dan memiliki nilai selain dari nilai-nilai tersebut.
    </p>

    <?php
    // Contoh penggunaan empty
    $var1 = "Hello";
    if (empty($var1)) {
        echo "<p>Variabel 'var1' kosong atau bernilai false.</p>";
    } else {
        echo "<p>Variabel 'var1' tidak kosong dan bernilai true.</p>";
    }
    ?>
</body>
</html>
