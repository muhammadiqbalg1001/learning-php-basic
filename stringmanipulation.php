<?php

    $name = "Iqbal"; // string

    // string manipulation
    $text = "Learning PHP Basic";
    $textb = "learning php basic in KelasFullstack";

    echo strlen($text); //char length
    echo "<br/>", strtoupper($text); //uppercase char
    echo "<br/>", strtolower($text); //lowercase char
    echo "<br/>", ucfirst($textb); //uppercase first char
    echo "<br/>", ucwords($textb); //uppercase first char in words
    echo "<br/>", strrev($textb); //descending char in words
    echo "<br/>", str_replace("KelasFullstack","CODEPOLITAN",$textb); //replace words
    echo "<br/>", str_repeat($text, 5); //looping string

?>