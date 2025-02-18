<?php
include '../koneksi.php';
$id = $_GET['id'];
$sql = "DELETE FROM news WHERE id=$id";
if ($conn->query($sql) === TRUE) {
header("Location: tampil_berita.php");
} else {
echo "Error: " . $conn->error;
}
?>