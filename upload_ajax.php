<?php

if(isset($_FILES['file'])) {
    $errors = array();
    
    // Mendapatkan informasi file
    $file_name = $_FILES['file']['name'];
    $file_size = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_type = $_FILES['file']['type'];
    
    // Mendapatkan ekstensi file dengan pathinfo()
    $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
    
    // Ekstensi file yang diizinkan
    $extensions = array("pdf", "doc", "docx", "txt");

    // Memeriksa apakah ekstensi file diizinkan
    if(!in_array($file_ext, $extensions)){
        $errors[] = "Ekstensi file yang diizinkan adalah PDF, DOC, DOCX, atau TXT.";
    }

    // Memeriksa apakah ukuran file melebihi 2 MB
    if($file_size > 2097152){
        $errors[] = 'Ukuran file tidak boleh lebih dari 2 MB.';
    }

    // Jika tidak ada error, pindahkan file ke folder tujuan
    if(empty($errors)){
        // Pastikan direktori tujuan ada
        if(!file_exists('documents')){
            mkdir('documents', 0777, true);
        }

        if(move_uploaded_file($file_tmp, "documents/" . $file_name)){
            echo "File berhasil diunggah.";
        } else {
            echo "Gagal memindahkan file.";
        }
    } else {
        // Menampilkan semua error
        echo implode(" ", $errors);
    }
} else {
    echo "Tidak ada file yang diunggah.";
}

?>
