<?php

    $tujuan = "Malang";
    $harga = 300000;
    $diskon = 150000;

    if($tujuan == "Surabaya" || $tujuan == "Malang") {
        $harga = $harga - $diskon;
        echo "Harga tiket adalah " . $harga;
    } else {
        echo "Harga tiket adalah " . $harga;
    }

    // $ukuran = "XL";
    // $warna = "merah";
    // $harga = 70000;

    // if($ukuran == "XL" && $warna == "merah") {
    //     $biaya_tambahan = 5000;
    //     $total_biaya = $harga + $biaya_tambahan;

    //     echo  "Biaya yang dikenakan adalah " . $total_biaya;
    // } else {
    //     echo "Biaya yang dikeluarkan adalah " . $harga;
    // }

?>