<?php

    $warna = ['merah','biru','hijau','kuning','jingga','biru','hijau','merah','kuning'];

    foreach($warna as $key => $value) {
        echo "Warna pada elemen array ke-$key adalah $value <br>";

        if($value == 'jingga') {
            echo "<br> Nah, warna jingga udah ketemu nih di indeks ke-$key";
            break;
        }
    }

?>