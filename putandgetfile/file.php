<?php

    $pesan = "Ini hasil membuat file melalui PHP";
    file_put_contents("testFile.txt", $pesan, FILE_APPEND);

    $file = file_get_contents("testFile.txt");

    echo $file;

?>