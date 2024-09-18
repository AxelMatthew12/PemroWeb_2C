<?php

// Daftar nilai siswa
$nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];

// Inisialisasi array untuk nilai yang lulus
$nilailulus = [];

// Looping untuk memeriksa nilai
foreach($nilaiSiswa as $nilai){
    if($nilai >= 70){
        $nilailulus[] = $nilai; // Tambahkan nilai yang lulus ke array
    }
}

// Tampilkan hasil dengan imploding array nilailulus menjadi string
echo "Daftar nilai siswa yang lulus: " . implode(', ', $nilailulus);

$daftarKaryawan = [
    ['Alice', 7],
    ['Bob', 3],
    ['Charlie', 9],
    ['David', 5],
    ['Eva', 6],

];

$karyawanPengalamanLimaTahun = [];
foreach($daftarKaryawan as $karyawan){
    if  ($karyawan[1] > 5) {
        $karyawanPengalamanLimaTahun[] = $karyawan[0];
    }
}
echo "<br>Daftar karyawan dengan pengalaman kerja lebih dari 5 tahun: " .implode(', ', $karyawanPengalamanLimaTahun);

$daftarNilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],

    ],
    'Fisika' => [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75],

    ],
    'Kimia' => [
        ['Alice', 92],
        ['Bob', 80],
        ['Charlie', 85],

    ],
];

$matakuliah = 'Fisika';

echo "<br>Daftar nilai mahasiswa dalam mata kuliah $matakuliah: <br>";

foreach ($daftarNilai[$matakuliah] as $nilai) {
    echo "<br>Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br>";
}

// soal cerita 1
$siswa = [
    "Alice" => 85,
    "Bob" => 92,
    "Charlie" => 78,
    "David" => 64,
    "Eva" => 90
];

$totalNilai = array_sum($siswa);
$jumlahSiswa = count($siswa);
$rataRata = $totalNilai / $jumlahSiswa;

echo "<br>Rata-rata nilai kelas: " . $rataRata . "\n\n";


echo "<br>Daftar siswa yang mendapatkan nilai di atas rata-rata:\n";

foreach($siswa as $nama => $nilai){
    if($nilai > $rataRata){
        echo "<br>$nama dengan nilai $nilai\n";
    }
}
?>
