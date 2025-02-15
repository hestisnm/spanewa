<?php
include 'koneksi.php';
$sqlf = "SELECT * FROM fasilitas";
$resultf = $conn->query($sqlf);

$fasilitas = [];
while ($row = $resultf->fetch_assoc()) {
    $fasilitas[] = $row;
}

echo json_encode($fasilitas);

$conn->close();
?>
