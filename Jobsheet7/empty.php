<?php

$myArray = array();
    if(empty($myArray)) {
        echo "Array tidak terdefinisikan atau kosong.";
    } else {
        echo "Array terdefinisikan dan tidak kosong. ";
    }

echo "<br>";
echo "===========================";
echo "<br>";

if(empty($nonExistentVar)) {
    echo "Variabel tidak terdefinisikan atau kosong. ";
} else {
    echo "Variabel terdefinisikan dan tidak kosong. ";
}

?>