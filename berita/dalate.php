<?php
include '../admin/koneksi.php';
$id = $_GET['id'];
$sql = "DELETE FROM news WHERE id=$id";
if ($conn->query($sql) === TRUE) {
header("Location: tampil.php");
} else {
echo "Error: " . $conn->error;
}
?>