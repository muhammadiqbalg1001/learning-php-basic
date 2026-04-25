<?php

    $name = $_POST["nama"];
    $birthdate = $_POST["birthdate"];

    $date = new DateTime($birthdate);
    $today = new DateTime('today');

    $age = $today->diff($date)->y;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Form</title>
</head>
<body>
    <h1>Hasil Inputan Biodata</h1>
    <h3>Selamat Datang <?php echo $name; ?></h3>
    <p>Kamu lahir pada : <?php echo date('d F Y', strtotime($birthdate)); ?></p>
    <p>Umur kamu saat ini adalah <?php echo $age; ?></p>
</body>
</html>