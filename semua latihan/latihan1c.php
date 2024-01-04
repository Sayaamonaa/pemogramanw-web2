<!DOCTYPE html>
<html>
<head>
    <style>
        .box {
            width: 50px;
            height: 50px;
            background-color: gray;
            display: inline-block;
            text-align: center;
            line-height: 50px;
            font-size: 24px;
            margin: 2px;
        }
    </style>
</head>
<body>
    <?php
    // Huruf yang ingin Anda isi dalam kotak
    $huruf = 'AABABC';

    // Mencetak segitiga dengan huruf-huruf
    echo '<div class="box">' . $huruf[0] . '</div><br>';
    echo '<div class="box">' . $huruf[1] . '</div>';
    echo '<div class="box">' . $huruf[2] . '</div><br>';
    echo '<div class="box">' . $huruf[3] . '</div>';
    echo '<div class="box">' . $huruf[4] . '</div>';
    echo '<div class="box">' . $huruf[5] . '</div>';
    ?>
</body>
</html>
