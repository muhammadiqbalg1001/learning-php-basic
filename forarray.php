<?php

    $warna = ['merah','biru','hijau','kuning','jingga','biru','hijau','merah','kuning'];
    $jumlah = 0;

    for($i = 0; $i < count($warna); $i++ ) {
        if ($warna[$i] == 'merah') {
            $jumlah++;
        }
    }

    echo "Jumlah warna merah adalah $jumlah";

?>