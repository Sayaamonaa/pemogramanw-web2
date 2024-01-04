<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 20px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        form {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }

        input, textarea, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
        }

        input[type="file"] {
            padding: 10px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        /* Optional: Add responsive styling for smaller screens */
        @media only screen and (max-width: 600px) {
            form {
                padding: 10px;
            }
        }
    </style>
</head>
<body>
    <h2>Formulir Pendaftaran Mahasiswa</h2>
    <form action="tampilan.php" method="post" enctype="multipart/form-data">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" required>

        <label for="nim">NIM:</label>
        <input type="text" name="nim" required>

        <label for="jurusan">Jurusan:</label>
        <input type="text" name="jurusan" required>

        <label for="alamat">Alamat:</label>
        <textarea name="alamat" rows="4" required></textarea>

        <label for="minat">Minat:</label>
        <select name="minat" required>
            <option value="programming">Programming</option>
            <option value="desain">Desain</option>
            <option value="mapala">Mapala (Mahasiswa Pecinta Alam)</option>
            <option value="animasi">Animasi</option>
        </select>

        <label for="foto">Foto:</label>
        <input type="file" name="foto" accept="image/*">

        <input type="submit" value="Daftar">
    </form>
</body>
</html>
