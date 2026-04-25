<?php

    if(isset($_POST['upload'])) {
        // ambil informasi file $_FILES
        $nama_file = $_FILES['foto']['name'];
        $tmp_file = $_FILES['foto']['tmp_name'];

        $folder = "images/" . $nama_file;

        if(!is_dir('images')) {
            mkdir('images',0777, true);
        }

        move_uploaded_file($tmp_file, $folder);
        echo "Upload berhasil! file tersimpan di: " . $folder;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Enctype File</title>
</head>
<body>
    <form method="POST" enctype="multipart/form-data">
        <input type="text" name="nama" placeholder="Silahkan Masukkan Nama Anda">
        <input type="file" name="foto">
        <button  type="submit" name="upload">Upload</button>
    </form>
</body>
</html>