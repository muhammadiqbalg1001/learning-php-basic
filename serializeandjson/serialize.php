<?php

    $mahasiswa = [
        ['nama' => 'Iqbal', 'prodi' => 'Informatika', 'lulus' => 2026],
        ['nama' => 'Rafli', 'prodi' => 'DKV', 'lulus' => 2024],
    ];

    $data = serialize($mahasiswa);

    file_put_contents("data.txt", $data);

    $output = file_get_contents("data.txt");

    $unserialized = unserialize($output);

    print_r($unserialized);

?>