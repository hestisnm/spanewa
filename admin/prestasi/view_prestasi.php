<?php
include '../koneksi.php';
$id = $_GET['id'];
$sql = "SELECT * FROM prestasi WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

?>
<h2><?php echo $row['title']; ?></h2>
<img src="../media/<?php echo $row['image']; ?>" width="500">
<p><?php echo $row['content']; ?></p>
<p><strong>Penulis:</strong> <?php echo $row['author']; ?></p>
<p><strong>Tanggal:</strong> <?php echo $row['date']; ?></p>
<a href="tampil_prestasi.php">Kembali</a>