<?php

    $nama = $_GET["nama"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form PHP</title>
</head>
<body>
    <h1>Selamat Datang, <?php echo $nama; ?></h1>
    <p>Kita akan belajar dasar PHP</p>
    <form>
        <input type="text" name="nama" placeholder="Nama">
        <input type="submit" value="submit">
    </form>
</body>
</html>