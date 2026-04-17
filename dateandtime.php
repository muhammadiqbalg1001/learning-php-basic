<?php

    // Y = 2026
    // y = 26
    // D = Day
    // d = date
    // M = month string
    // m = month integer

    // H = 12 hour format
    // h = 24 hour format
    // i = minute
    // s = second
    // u = microsecond

    date_default_timezone_set('Asia/Jakarta'); // set date default timezone
    echo date('D, d M Y H:i:s');
    // echo date_default_timezone_get(); // get date default timezone

?>