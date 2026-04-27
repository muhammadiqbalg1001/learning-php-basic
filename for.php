<?php

    // for(inisialisasi, kondisi, perubahan;)

    // $i -> iteration

    // for($i = 1; $i <= 10; $i++ ) {
    //     // echo "Hello World!<br>";
    //     // echo "Hari ke-$i <br>";
    // }
    
    for($i = 1; $i <= 10; $i++ ) {
        // echo "Hello World!<br>";
        // echo "Hari ke-$i <br>";
        if($i % 2 != 0) {
            echo $i . "<br>";
        }
    }
    
    for($i = 1; $i <= 10; $i++ ) {
        // echo "Hello World!<br>";
        // echo "Hari ke-$i <br>";
        if($i % 2 == 0) {
            echo $i . "<br>";
        }
    }

?>