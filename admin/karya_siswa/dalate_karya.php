<?php
include '../koneksi.php';
$id = $_GET['id'];
$sql = "DELETE FROM karya_siswa WHERE id=$id";
if ($conn->query($sql) === TRUE) {
    header("Location: ../?page=karya_siswa");
} else {
    echo "Error: " . $conn->error;
}
?>