<?php
include '../koneksi.php';
$id = $_GET['id'];
$sql = "DELETE FROM galeri WHERE id=$id";
if ($conn->query($sql) === TRUE) {
header("Location: tampil_galeri.php");
} else {
echo "Error: " . $conn->error;
}
?>