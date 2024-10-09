<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Form dengan PHP</title>
</head>
<body>
    <h2>Form Contoh</h2>
    <form method="POST" action="proses_lanjut.php">
        
        <!-- Pilihan Buah -->
        <div>
            <label for="buah">Pilih Buah:</label>
            <select name="buah" id="buah">
                <option value="apel">Apel</option>
                <option value="pisang">Pisang</option>
                <option value="mangga">Mangga</option>
                <option value="jeruk">Jeruk</option>
            </select>
        </div>
        
        <br>

        <!-- Pilihan Warna Favorit -->
        <div>
            <label>Pilih Warna Favorit:</label><br>
            <input type="checkbox" name="warna[]" value="merah" id="warna-merah">
            <label for="warna-merah">Merah</label><br>
            <input type="checkbox" name="warna[]" value="biru" id="warna-biru">
            <label for="warna-biru">Biru</label><br>
            <input type="checkbox" name="warna[]" value="hijau" id="warna-hijau">
            <label for="warna-hijau">Hijau</label><br>
        </div>

        <br>

        <!-- Pilihan Jenis Kelamin -->
        <div>
            <label>Pilih Jenis Kelamin:</label><br>
            <input type="radio" name="jenis_kelamin" value="laki-laki" id="jk-laki">
            <label for="jk-laki">Laki-Laki</label><br>
            <input type="radio" name="jenis_kelamin" value="perempuan" id="jk-perempuan">
            <label for="jk-perempuan">Perempuan</label><br>
        </div>

        <br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
