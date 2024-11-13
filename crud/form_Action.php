<?php
session_start();
include 'koneksi.php';
include 'csrf.php';

$nama = stripcslashes(strip_tags(htmlspecialchars($_POST['nama'], ENT_QUOTES)));
$jenis_kelamin = stripslashes(strip_tags(htmlspecialchars($_POST['jenis_kelamin'], ENT_QUOTES)));
$alamat = stripslashes(strip_tags(htmlspecialchars($_POST['alamat'], ENT_QUOTES)));
$no_telp = stripslashes(strip_tags(htmlspecialchars($_POST['no_telp'], ENT_QUOTES)));
$id = isset($_POST['id']) ? stripslashes(strip_tags(htmlspecialchars($_POST['id'], ENT_QUOTES))) : "";

$response = [];

try {
    if ($id == "") {
        // Tambah data baru
        $query = "INSERT INTO anggota (nama, jenis_kelamin, alamat, no_telp) VALUES (?, ?, ?, ?)";
        $sql = $db1->prepare($query);
        $sql->bind_param("ssss", $nama, $jenis_kelamin, $alamat, $no_telp);
        $sql->execute();
        $response['success'] = true;
        $response['message'] = "Data berhasil ditambahkan";
    } else {
        // Update data yang ada
        $query = "UPDATE anggota SET nama=?, jenis_kelamin=?, alamat=?, no_telp=? WHERE id=?";
        $sql = $db1->prepare($query);
        $sql->bind_param("ssssi", $nama, $jenis_kelamin, $alamat, $no_telp, $id);
        $sql->execute();
        $response['success'] = true;
        $response['message'] = "Data berhasil diperbarui";
    }
} catch (Exception $e) {
    $response['success'] = false;
    $response['message'] = "Terjadi kesalahan: " . $e->getMessage();
}

// Mengembalikan response sebagai JSON
header('Content-Type: application/json');
echo json_encode($response);

// Tutup koneksi database
$db1->close();
?>
