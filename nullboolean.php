<?php

    $hasil = null;

    $a = 3;
    $b = 4;
    $hasil = $a + $b * $a;

    echo $hasil;

    $nilai = false;

    if($nilai) {
        echo "Hasil Tidak Muncul Karena True";
    } else {
        echo "<br/>Hasil nya adalah ", $hasil;
    }

?>