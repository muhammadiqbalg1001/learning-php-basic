<?php

    $mahasiswa = [
        ['nama' => 'Iqbal', 'prodi' => 'Informatika', 'lulus' => 2026],
        ['nama' => 'Rafli', 'prodi' => 'DKV', 'lulus' => 2024],
    ];

    $data = json_encode($mahasiswa);
    file_put_contents("data_Json.txt", $data);

    $output = file_get_contents("data_Json.txt");
    $decode = json_decode($output);

    print_r($decode);

?>