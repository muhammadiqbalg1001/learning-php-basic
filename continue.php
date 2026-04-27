<?php

    $warna = ['merah','biru','hijau','kuning','jingga','biru','hijau','merah','kuning'];

    foreach($warna as $key => $value) {

        if($value == 'jingga') {
            continue;
        }

        echo "Warna pada elemen array ke-$key adalah $value <br>";
    }

?>