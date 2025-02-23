<?php
include '../koneksi.php';
$id = $_GET['id'];
$sql = "DELETE FROM ekstrakurikuler WHERE id=$id";
if ($conn->query($sql) === TRUE) {
    header("Location: ../?page=ekskul");
} else {
    echo "Error: " . $conn->error;
}
?>