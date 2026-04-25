<?php

    print_r($_POST);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parsing Array</title>
</head>
<body>
    <h1>Form Biodata</h1>
    <form action="" method="POST">
        <input type="text" name="nama" placeholder="Nama">
        <input type="date" name="birthdate" placeholder="Tanggal Lahir">
        <select name="fieldstudy" id="">
            <option value="informatics">Informatika</option>
            <option value="dkv">Desain Komunikasi Visual</option>
            <option value="civil">Sipil</option>
        </select>
        <input type="submit" value="submit">
    </form>
</body>
</html>