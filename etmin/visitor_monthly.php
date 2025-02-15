<?php
$conn = new mysqli("localhost", "root", "", "");

// Dapatkan bulan dan tahun sekarang
$bulan = date('n');
$tahun = date('Y');

// Cek apakah sudah ada data bulan ini
$sqlCek = "SELECT * FROM pengunjung WHERE bulan = $bulan AND tahun = $tahun";
$resultCek = $conn->query($sqlCek);

if ($resultCek->num_rows > 0) {
    // Kalau sudah ada, update jumlah
    $sqlUpdate = "UPDATE pengunjung SET jumlah = jumlah + 1 WHERE bulan = $bulan AND tahun = $tahun";
    $conn->query($sqlUpdate);
} else {
    // Kalau belum ada, insert data baru
    $sqlInsert = "INSERT INTO pengunjung (bulan, tahun, jumlah) VALUES ($bulan, $tahun, 1)";
    $conn->query($sqlInsert);
}

$conn->close();
?>
