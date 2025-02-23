<?php
include '../koneksi.php';
$id = $_GET['id'];
$sql = "DELETE FROM feedback WHERE id=$id";
if ($conn->query($sql) === TRUE) {
    header("Location: ../?page=feedback");
} else {
    echo "Error: " . $conn->error;
}
?>