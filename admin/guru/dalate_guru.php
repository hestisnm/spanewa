<?php
include '../koneksi.php';
$id = $_GET['id'];
$sql = "DELETE FROM guru WHERE id=$id";
if ($conn->query($sql) === TRUE) {
    header("Location: ../?page=guru");
} else {
    echo "Error: " . $conn->error;
}
?>