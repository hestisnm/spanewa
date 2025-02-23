<?php
include '../koneksi.php';
$id = $_GET['id'];
$sql = "DELETE FROM staff WHERE id=$id";
if ($conn->query($sql) === TRUE) {
    header("Location: ../?page=staff");
} else {
    echo "Error: " . $conn->error;
}
?>