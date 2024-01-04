<!DOCTYPE html>
<html lang="en">
<head>
    <neta charset="UTF-8">
    <title>modul 2 - latihan 3</title>
</head>
<body>
    <table border="1" cellpandding="3" cellspacing="0">
        <tr>
            <th>kolom 1</th>
            <th>kolom 2</th>
            <th>kolom 3</th>
            <th>kolom 4</th>
            <th>kolom 5</th>
        </tr>
    <?php
    $baris = 15;
    $kolom = 5;

    for ($i = 1; $i <= $baris; $i++) {
        echo '<tr>';
        for ($j = 1; $j <= $kolom; $j++) {
            echo '<td>';
            echo "kolom ke $i, baris ke $j";
            echo '</td>';
        }
        echo '</tr>';
    }
    ?>
    </table>
</body>
</html>

