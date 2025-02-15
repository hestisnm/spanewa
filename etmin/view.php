<?php
include 'koneksi.php';
$sql = "SELECT * FROM news ORDER BY date DESC";
// $sqlf = "SELECT * FROM fasilitas ORDER BY date DESC";
$result = $conn->query($sql);
// $resultf = $conn->query($sqlf);

$berita = [];
while ($row = $result->fetch_assoc()) {
    $berita[] = $row;
}

echo json_encode($berita);


// $fasilitas = [];
// while ($row = $resultf->fetch_assoc()) {
//     $fasilitas[] = $row;
// }

// echo json_encode($fasilitas);

$conn->close();
?>
