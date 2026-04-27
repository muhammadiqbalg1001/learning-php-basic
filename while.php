<?php

    // inisialisasi atau $i di luar, while(kondisi) {isi; $i++}

    // $i = 1;

    // while($i <= 20) {
    //     echo "Nomor antrian ke-$i <br>";
    //     $i++;
    // }

    // echo "<br>";

    // While array
    $warna = ['merah','biru','hijau','kuning','jingga','biru','hijau','merah','kuning'];
    $jumlah = 0;
    $i = 0;

    // while($i < count($warna)) {
    //     if ($warna[$i] == 'merah') {
    //         $jumlah++;
    //     }
    //     $i++;
    // }

    do {
        if ($warna[$i] == 'merah') {
            $jumlah++;
        }
        $i++;
    } while ($i < count($warna));
        
    echo "Jumlah warna merah adalah $jumlah";


?>