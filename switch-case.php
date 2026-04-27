<?php

    $nilai = "B";

    switch ($nilai) {
        case 'A' : 
            echo "Nilai anda sangat memuaskan";
            break;
        case 'B' :
            echo "Nilai anda bagus";
            break;
        case "C" :
            echo "Nilai anda cukup saja";
            break;
        default :
            echo "Nilai tidak terdapat di database";
            break;
    }

?>