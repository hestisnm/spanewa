<?php
include '../koneksi.php';
$id = $_GET['id'];
$sql = "DELETE FROM fasilitas WHERE id=$id";
if ($conn->query($sql) === TRUE) {
    header("Location: ../?page=fasilitas");
} else {
    echo "Error: " . $conn->error;
}
?>