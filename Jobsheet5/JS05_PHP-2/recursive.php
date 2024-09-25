<?php
    for ($i=1; $i <=25; $i++){
        echo"Perulangan ke-{$i} <br>";
    }

    echo "<hr>";
?>

<?php   
    function tampilkanAngka(int $jumlah , int $indeks = 1) {
        echo "Perulangan ke-{$indeks} <br>";

        // pangil diri sendiri selama $indeks <= jumlah
        if($indeks < $jumlah){
            tampilkanAngka($jumlah, $indeks + 1);
        }
    }
    tampilkanAngka(20);
 ?>