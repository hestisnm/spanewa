<?php
include 'koneksi.php';
$id = $_GET['id'];
$sql = "SELECT * FROM news WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
if (isset($_POST['submit'])) {
$title = $_POST['title'];
$content = $_POST['content'];
$author = $_POST['author'];
if ($_FILES['image']['name']) {
// Update gambar jika ada gambar baru
$image = $_FILES['image']['name'];
$target = "upload/" . basename($image);
move_uploaded_file($_FILES['image']['tmp_name'], $target);
} else {
// Jika tidak ada gambar baru, gunakan gambar lama
$image = $row['image'];
}
$sql = "UPDATE news SET title='$title', content='$content',
author='$author', image='$image' WHERE id=$id";
if ($conn->query($sql) === TRUE) {
header("Location: dashboard.php");
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
}
?>
<h2>Edit Berita</h2>

<form method="POST" action="" enctype="multipart/form-data">
Judul: <input type="text" name="title" value="<?php echo
$row['title']; ?>" required><br>
Konten: <textarea name="content" required><?php echo
$row['content']; ?></textarea><br>
Penulis: <input type="text" name="author" value="<?php echo
$row['author']; ?>" required><br>
Gambar: <input type="file" name="image"><br>
<img src="upload/<?php echo $row['image']; ?>" width="100"><br>
<button type="submit" name="submit">Update</button>
</form>