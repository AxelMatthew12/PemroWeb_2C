<?php

$pattern = '/[a-z]/';
$text = 'This is a Sample Text.';

if  (preg_match($pattern, $text)) {
    echo "Huruf kecil ditemukan!";
} else {
    echo "Tidak ada huruf kecil!";
}

echo "<br>";
echo "=========================";
echo "<br>";

$pattern = '/[0-9]+/';
$text = 'There are 123 apples.';
if  (preg_match($pattern,$text,$matches)) {
    echo "Cocokkan: " . $matches[0];
} else {
    echo "Tidak ada yang cocok!";
}


echo "<br>";
echo"=========================";
echo"<br>";


$pattern = '/apple/';
$replacement = 'banana';
$text = 'I like apple pie.';
$next_text = preg_replace($pattern, $replacement, $text);
echo $next_text;   #Output : "I like banana pie."

echo "<br>";
echo"=========================";
echo"<br>";


$pattern = '/{n,m}/'; // Cocokkan "gd" atau "god"
$text = 'good is god.';
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: ". $matches[0];
} else {
    echo "Tidak ada yang cocok!";
}


?>


