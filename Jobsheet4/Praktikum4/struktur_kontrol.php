<?php
    $nilaiNumerik = 92;

    if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
        echo "Nilai huruf: A <br>";
    } elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
        echo "Nilai huruf: B <br>";
    } elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80){
        echo "Nilai huruf: C <br>";

    }elseif ($nilaiNumerik < 78) {
        echo "Nilai huruf: D <br>";
    }
    echo "------------------------------- <br>";
    $jarakSaatIni = 0;
    $jarakTarget = 500;
    $perningkatanHarian = 30;
    $hari = 0;

    while($jarakSaatIni < $jarakTarget){
        $jarakSaatIni += $perningkatanHarian;
        $hari++;
    }

    echo " <br> Altet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer <br>";
    echo "------------------------------- <br>";
    

    $jumlahLahan = 10;
    $tanamanPerlahan = 5;
    $buahPerTanaman = 10;
    $jumlahBuah = 0;

    for($i = 1; $i <= $jumlahLahan; $i++){
        $jumlahBuah += ($tanamanPerlahan * $buahPerTanaman);
    }
    echo "Jumlah buah yang akan di panen adalah: $jumlahBuah <br>";
    echo "------------------------------- <br>";
    

    $skorUjian = [85, 92, 78, 96, 88];
    $totalSkor = 0;

    foreach($skorUjian as $skor) {
        $totalSkor += $skor;
    }

    echo "Total skor ujian adalah: $totalSkor <br>";
    echo "------------------------------- <br>";

    $nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

    foreach($nilaiSiswa as $nilai){
        if ($nilai < 60) {
            echo "Nilai: $nilai (Tidak lulus) <br>";
            continue;
        }
        echo "Nilai: $nilai (lulus) <br>";

        
    }
    echo "----------------------- <br>";
    // soal cerita 1 
    $jumlahsiswa =10;
    $skornilai = [85, 92, 78, 64, 90,75, 88, 79, 70, 96];
    $total = 0;

    for($i = 0 ; $i < $jumlahsiswa ; $i++){
        $total += $skornilai[$i];
    }

    $hitungratarata = $total / $jumlahsiswa;

    echo "Rata-rata nilai adalah : $hitungratarata <br> dengan total skor sebelum di rata rata : $total <br>";
    echo"------------------------------------------<br>";

    // soal cerita 2
    $totalbelanja = 120000;
    if($totalbelanja > 100000) {
        $potongan = $totalbelanja * 20 / 100;
        $hargaafter = $totalbelanja - $potongan;
        echo "Harga : $totalbelanja  <br> dengan harga setelah diskon : $hargaafter <br>";
    } elseif   ($totalbelanja < 100000){
        echo"Mohon maaf tidak mendapat diskon mohon bayar dengan total : $totalbelanja <br>";

    }

    echo "--------------------------------------- <br>";

    $poin = 450; 
    $totalSkor = $poin;
    $dapatHadiah = ($totalSkor > 500) ? "YA" : "TIDAK";
    
    echo "Total skor pemain adalah: " . $totalSkor . "<br>";
    echo "Apakah pemain mendapatkan hadiah tambahan? " . $dapatHadiah;

?>