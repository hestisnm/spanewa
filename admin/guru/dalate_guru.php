<?php
include '../koneksi.php';
$id = $_GET['id'];
$sql = "DELETE FROM guru WHERE id=$id";
if ($conn->query($sql) === TRUE) {
header("Location: tampil_guru.php");
} else {
echo "Error: " . $conn->error;
}
?>