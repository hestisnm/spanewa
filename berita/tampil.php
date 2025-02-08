<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="tampil.css">
</head>
<body>
    


<?php
include '../admin/koneksi.php';
$sql = "SELECT * FROM news ORDER BY date DESC";
$result = $conn->query($sql);
?>

<h2>Berita Terkini</h2>
<a href="create.php">Tambah Berita</a>
<table border="1">
<tr>
<th>No</th>
<th>Gambar</th>
<th>Judul</th>
<th>Penulis</th>
<th>Tanggal</th>
<th>Aksi</th>
</tr>
<?php $no=1; ?>
<?php while($row = $result->fetch_assoc()): ?>
<tr>
<td><?php echo $no++; ?></td>
<td><img src="upload/<?php echo $row['image']; ?>" width="100"></td>
<td><?php echo $row['title']; ?></td>
<td><?php echo $row['author']; ?></td>
<td><?php echo $row['date']; ?></td>

<td>
<a href="view.php?id=<?php echo $row['id']; ?>">Baca</a> |
<a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a> |
<a href="delete.php?id=<?php echo $row['id']; ?>"
onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</a>
</td>
</tr>
<?php endwhile; ?>
</table>

</body>
</html>