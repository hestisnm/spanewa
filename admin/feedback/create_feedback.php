<?php
include '../koneksi.php';
if (isset($_POST['submit'])) {
$title = $_POST['title'];
$content = $_POST['content'];
$author = $_POST['author'];
// Upload gambar
$image = $_FILES['image']['name'];
$target = "../media/" . basename($image);
if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
// Menyimpan data ke database
$sql = "INSERT INTO feedback (title, content, author, image) VALUES
('$title', '$content', '$author', '$image')";
if ($conn->query($sql) === TRUE) {
header("Location: tampil_feedback.php");
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
} else {
echo "Gagal mengunggah gambar.";
}
}
?>
<h2>Saran dan Masukkan</h2>
<form method="POST" action="" enctype="multipart/form-data">
Judul: <input type="text" name="title" required><br>
Konten: <textarea name="content" required></textarea><br>
Penulis: <input type="text" name="author" required><br>
Gambar: <input type="file" name="image" required><br>
<button type="submit" name="submit">Simpan</button>
</form>