<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form PHP</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="nama" placeholder="Nama">
        <input type="submit" value="submit">
    </form>

    <?php
    
        if(isset($_POST['nama'])) {
            if(empty($_POST['nama'])) {
                echo "Nama wajib diisi";
            } else {
                echo "Halo! " . $_POST['nama'];
            }
        }

    ?>
</body>
</html>