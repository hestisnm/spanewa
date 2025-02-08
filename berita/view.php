<?php
include '../admin/koneksi.php';
$id = $_GET['id'];
$sql = "SELECT * FROM news WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

?>
<h2><?php echo $row['title']; ?></h2>
<img src="upload/<?php echo $row['image']; ?>" width="500">
<p><?php echo $row['content']; ?></p>
<p><strong>Penulis:</strong> <?php echo $row['author']; ?></p>
<p><strong>Tanggal:</strong> <?php echo $row['date']; ?></p>
<a href="tampil.php">Kembali</a>