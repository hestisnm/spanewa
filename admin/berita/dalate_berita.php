<?php
include '../koneksi.php';
$id = $_GET['id'];
$sql = "DELETE FROM news WHERE id=$id";
if ($conn->query($sql) === TRUE) {
    header("Location: ../?page=berita");
} else {
    echo "Error: " . $conn->error;
}
?>