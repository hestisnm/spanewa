<?php
include '../koneksi.php';
$id = $_GET['id'];
$sql = "DELETE FROM news WHERE id=$id";
if ($conn->query($sql) === TRUE) {
header("Location: tampil_fasilitas.php");
} else {
echo "Error: " . $conn->error;
}
?>