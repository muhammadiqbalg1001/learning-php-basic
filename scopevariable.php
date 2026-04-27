<?php

    // Global = Variabel yang dibuat diluar fungsi, yang hanya bisa dipakai diluar function
    // Lokal = Variabel yang dibuat di dalam fungsi, hanya bisa dipakai di dalam fungsi itu saja

    $nama = "Iqbal";

    // function halo($nama) {
    //     echo "Halo $nama, apa kabarmu hari ini?";
    // }
    
    // Global variabel
    function halo() {
        global $nama; // ambil variabel global
        echo "Halo $nama, apa kabarmu hari ini?";
    }

    halo($nama);

    echo "<br>";

    // Lokal variabel
    function kota() {
        $kota = "Bandung";
        echo "Halo-Halo $kota";
    }

    kota();

?>