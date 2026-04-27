<?php

    $age = 18;
    $status = "student";

    if($age <= 18) {
        if($status == "student") {
            echo "Discount 50%";
        } else {
            echo "Cannot get discount";
        }
    } else {
        echo "Cannot get discount";
    }

?>