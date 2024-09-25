<?php 
    function perkenalan ($nama, $salam){
        echo $salam.", ";
        echo "perkenalkan, nama saya". $nama. "<br/>";
        echo "Senang berkenalan dengan Anda<br/>";
    }

    perkenalan("Hamdana", "Hallo");

    echo "<hr>";
    $saya = "Elok";
    $ucapanSalam = "Selamat pagi";

    perkenalan($saya, $ucapanSalam);
?>