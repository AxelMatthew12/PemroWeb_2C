<?php   
    $loremIpsum = "Lorem ipsum dolot sit amt consectetur adipisicing elit.";

    echo "<p>{$loremIpsum}</p>";
    echo "Panjang karakter: " . strlen($loremIpsum). "<br>";
    echo "Panjang kata: ". str_word_count($loremIpsum) . "<br>";
    echo "<p>". strtoupper($loremIpsum)."</p>";
    echo "<p>". strtolower($loremIpsum)."</p>";

  
 ?>