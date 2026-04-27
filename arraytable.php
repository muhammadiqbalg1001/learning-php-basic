<?php

    $mahasiswa = [
        ['nama' => 'Iqbal', 'prodi' => 'Informatika', 'lulus' => 2026],
        ['nama' => 'Rafli', 'prodi' => 'DKV', 'lulus' => 2024],
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h2>Data Mahasiswa</h2>
    <table border="1" cellpadding="8">
        <tr>
            <th>Nama</th>
            <th>Prodi</th>
            <th>Tahun Lulus</th>
        </tr>
        <?php foreach ($mahasiswa as $value): ?>
        <tr>
            <td>
                <?php echo $value['nama'] ?>
            </td>
            <td>
                <?php echo $value['prodi'] ?>
            </td>
            <td>
                <?php echo $value['lulus'] ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>