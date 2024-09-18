<?php
    $a = 10;
    $b = 5;

    $hasilTambah = $a + $a;
    $hasilKurang = $a - $b;
    $hasilKali = $a * $b;
    $hasilBagi = $a / $b;
    $sisaBagi = $a % $b;
    $pangkat = $a ** $b;

    // opsi rapi mungkin seperti ini ? 
    echo "Hasil dari pertambahan: {$hasilTambah} <br>";
    echo "Hasil dari kurang     :{$hasilKurang} <br>";
    echo "Hasil dari Perkalian  : {$hasilKali} <br>";
    echo "Hasil dari Pembagian  : {$hasilBagi} <br>";
    echo "Hasil dari Sisa bagi  : {$sisaBagi} <br>";
    echo "Hasil dari pangkat    : {$pangkat} <br>";
    echo "---------------------------------------- <br>";

    $hasilSama = $a == $b;
    $hasilTidakSama = $a != $b;
    $hasilLebihKecil = $a < $b;
    $hasilLebihBesar = $a > $b;
    $hasilLebihKecilSama = $a <= $b;
    $hasilLebihBesarSama = $a >= $b;

    echo "HasilSama          : {$hasilSama} <br>";
    echo "HasilTidakSama     : {$hasilTidakSama} <br>";
    echo "HasilLebihKecil    : {$hasilLebihKecil} <br>";
    echo "HasilLebihBesar    : {$hasilLebihBesar} <br>";
    echo "HasilLebihKecilSama: {$hasilLebihKecilSama} <br>";
    echo "HasilLebihBesarSama: {$hasilLebihBesarSama}<br>";
    echo "---------------------------------------- <br>";


    $hasilAnd = $a && $b;
    $hasilOr = $a || $b;
    $hasilNotA = !$a;
    $hasilNotB = !$b;

    echo "HasilAnd : {$hasilAnd} <br>";
    echo "HasilOr  : {$hasilOr} <br>";
    echo "HasilNotA: {$hasilNotA} <br>";
    echo "HasilNotB: {$hasilNotB} <br>";
    echo "---------------------------------------- <br>";

    $hasilsamadengantambah = $a += $b;
    $hasilsamadengankurang = $a -= $b;
    $hasilsamadengankali   = $a *= $b;
    $hasilsamadenganbagi   = $a /= $b;
    $hasilsamadengansisa   = $a %= $b;

    echo "HasilSamadenganTambah: {$hasilsamadengantambah} <br>";
    echo "HasilSamadenganKurang: {$hasilsamadengankurang} <br>";
    echo "HasilSamadenganKali  : {$hasilsamadengankali} <br>";
    echo "HasilSamadenganbagi  : {$hasilsamadenganbagi} <br>";
    echo "HasilSamadenganSisa  : {$hasilsamadengansisa} <br>";
    echo "---------------------------------------- <br>";

    $hasilIdentik = $a === $b;
    $hasilTIdakIdentik = $a !== $b;

    echo "HasilIdentik: {$hasilIdentik} <br>";
    echo "HasilTidakIdentik: {$hasilTIdakIdentik} <br>";
    echo "---------------------------------------- <br>";

    // Jawaban soal cerita 

    $kursiresto = 45;
    $penggunaan = 28;
    $kursitersedia = ($kursiresto - $penggunaan)/$kursiresto *100;
    $kursitersedia = round($kursitersedia);

    echo "Kursi tersedia: {$kursitersedia} %";

?>