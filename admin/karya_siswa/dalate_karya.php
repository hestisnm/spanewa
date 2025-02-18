<?php
include '../koneksi.php';
$id = $_GET['id'];
$sql = "DELETE FROM karya_siswa WHERE id=$id";
if ($conn->query($sql) === TRUE) {
header("Location: tampil_karya.php");
} else {
echo "Error: " . $conn->error;
}
?>