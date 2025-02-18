<?php
include '../koneksi.php';
$id = $_GET['id'];
$sql = "DELETE FROM kepsek_siswa WHERE id=$id";
if ($conn->query($sql) === TRUE) {
header("Location: tampil_kepsek.php");
} else {
echo "Error: " . $conn->error;
}
?>