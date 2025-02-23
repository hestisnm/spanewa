<?php
include '../koneksi.php';
$id = $_GET['id'];
$sql = "DELETE FROM galeri WHERE id=$id";
if ($conn->query($sql) === TRUE) {
    header("Location: ../?page=galeri");
} else {
    echo "Error: " . $conn->error;
}
?>