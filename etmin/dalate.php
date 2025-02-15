<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query delete sesuai dengan struktur tabel di database
    $sql = "DELETE FROM news WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo json_encode(["status" => "success", "message" => "Berita berhasil dihapus"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Gagal menghapus berita: " . $conn->error]);
    }
} else {
    echo json_encode(["status" => "error", "message" => "ID berita tidak ditemukan"]);
}
?>
