<?php

    $panjang = 5;
    $lebar = 7;

    function luasPersegiPanjang($panjang, $lebar) {
        $luas = $panjang * $lebar;
        return $luas;
    }

    echo "Luas persegi panjang adalah ... " . luasPersegiPanjang($panjang, $lebar);

    // function perkalian($nilai1, $nilai2) {
    //     $hasil = $nilai1 * $nilai2;
    //     return $hasil;
    // }

    // $result = perkalian(3, 4);

    // echo $result;

?>