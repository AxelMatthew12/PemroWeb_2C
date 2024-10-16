<?php

$targetDirectory = "document/"; // Folder tujuan
$allowedExtention = array("jpg", "jpeg", "png", "gif"); // Ekstensi yang diperbolehkan

// Cek apakah folder tujuan sudah ada, jika belum buat folder
if(!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}

if($_FILES['files']['name'][0]) {
    $totalFiles = count($_FILES['files']['name']); // Hitung total file yang diunggah

    for($i = 0; $i < $totalFiles; $i++){
        $fileName = $_FILES['files']['name'][$i]; // Nama file
        $targetFile = $targetDirectory . basename($fileName); // Lokasi target
        $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION)); // Ambil ekstensi file

        // Cek apakah ekstensi file valid
        if(in_array($fileType, $allowedExtention)){
            // Pindahkan file dari tmp ke folder tujuan
            if(move_uploaded_file($_FILES['files']['tmp_name'][$i], $targetFile)){
                echo "File $fileName berhasil diunggah.<br>";
            } else {
                echo "Gagal mengunggah file $fileName.<br>";
            }
        } else {
            echo "File $fileName memiliki ekstensi yang tidak diizinkan. Hanya file dengan ekstensi jpg, jpeg, png, gif yang diizinkan.<br>";
        }
    }
} else {
    echo "Tidak ada file yang diunggah.";
}

?>
