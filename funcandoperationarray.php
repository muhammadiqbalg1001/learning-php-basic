<?php

    $fruit = ["Apple", "Banana", "Mango", "Tomato"];
    $vegetable = ["Brokoli","Carrot","Cucumber", "Tomato"];

    $plant = array_merge($fruit, $vegetable); // Merge Array
    $plant2 = array_unique($plant); // Remove Duplicate Values from an Array
    $plant3 = array_diff($fruit, $vegetable); // extract data or elements that differ between arrays.
    $plant4 = array_intersect($fruit, $vegetable); // displays the same data or elements across arrays.
    
    // array_push($fruit,"Watermelon"); // Adding Data in Array

    // array_pop($fruit); // Delete Data in Array
    
    // echo count($fruit); // Count the elements of an array

    // echo implode(", ", $fruit); // delimiter between data strings

    // echo array_search("Apple", $fruit); // Find the index of the data at which position

    echo implode(", ", $plant);
    echo "<br/>";
    echo implode(", ", $plant2);
    echo "<br/>";
    echo implode(", ", $plant3);
    echo "<br/>";
    echo implode(", ", $plant4);


?>