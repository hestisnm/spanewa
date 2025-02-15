<?php
// Koneksi ke database
$conn = new mysqli("localhost", "root", "", "spanewa_hesti");

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$year = date('Y');

// Ambil data pengunjung per bulan untuk tahun ini
$sql = "SELECT month, count FROM visitor_monthly WHERE year = $year";
$result = $conn->query($sql);

$months = [];
$counts = [];

// Menyusun data bulan dan jumlah pengunjung
while ($row = $result->fetch_assoc()) {
    $months[] = $row['month'];
    $counts[] = $row['count'];
}

$conn->close();

// Mengembalikan data dalam format JSON
echo json_encode([
    'month' => $months,
    'count' => $counts
]);
?>
