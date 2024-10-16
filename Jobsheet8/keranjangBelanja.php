<html>
    <head>

    </head>
    <body>
        <h2> Keranjang Belanjga</h2>

        <?php
    if (isset($_COOKIE['beliNovel']) && isset($_COOKIE['beliBuku'])) {
    $beliNovel = $_COOKIE['beliNovel'];
    $beliBuku = $_COOKIE['beliBuku'];

    echo "Jumlah Novel: " . $beliNovel . "<br>";
    echo "Jumlah Buku : " . $beliBuku;
    } else {
    echo "Belum ada item dalam keranjang belanja.";
    }
    ?>

    </body>
</html>