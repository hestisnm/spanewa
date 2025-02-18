<?php
include '../koneksi.php';
$id = $_GET['id'];
$sql = "DELETE FROM agenda WHERE id=$id";
if ($conn->query($sql) === TRUE) {
header("Location: tampil_agenda.php");
} else {
echo "Error: " . $conn->error;
}
?>