<?php
include '../koneksi.php';
$id = $_GET['id'];
$sql = "DELETE FROM kepsek WHERE id=$id";
if ($conn->query($sql) === TRUE) {
    header("Location: ../?page=kepsek");
} else {
    echo "Error: " . $conn->error;
}
?>