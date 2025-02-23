<?php
include '../koneksi.php';
$id = $_GET['id'];
$sql = "DELETE FROM prestasi WHERE id=$id";
if ($conn->query($sql) === TRUE) {
    header("Location: ../?page=prestasi");
} else {
    echo "Error: " . $conn->error;
}
?>