<?php

    $kumpulan_warna = ['merah','biru','hijau','kuning','jingga','biru','hijau','merah','kuning'];
    $jumlah_merah = 0;

    foreach($kumpulan_warna as $warna) {
        // echo "Warna saat ini pada indeks ke $index adalah $value <br>";
        if($warna == 'merah') {
            $jumlah_merah++;
        }
    }

    echo "Jumlah warna merah adalah $jumlah_merah";

?>