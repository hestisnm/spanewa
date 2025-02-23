<?php
include __DIR__ . '/../koneksi.php';
$sql = "SELECT * FROM karya_siswa ORDER BY date DESC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karya Terkini</title>
    <style>
        .container {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            max-width: 900px;
            margin: 20px auto;
            animation: fadeIn 0.5s ease;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 15px;
            text-align: left;
            border: 1px solid #eee;
        }

        th {
            background: rgb(139, 161, 227);
            color: white;
            font-weight: bold;
            text-transform: uppercase;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Karya Siswa Terkini</h2>
        <a href="karya_siswa/create_karya.php">Tambah Karya</a>
        <table>
            <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>Judul</th>
                <th>Nama Pemilik Karya</th>
                <th>Penulis</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
            <?php $no = 1; ?>
            <?php while($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><img src="karya_siswa/upload/<?php echo $row['image']; ?>" width="100"></td>
                    <td><?php echo $row['title']; ?></td>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['author']; ?></td>
                    <td><?php echo $row['date']; ?></td>
                    <td>
                        <a href="karya_siswa/view_karya.php?id=<?php echo $row['id']; ?>">Baca</a> |
                        <a href="karya_siswa/edit_karya.php?id=<?php echo $row['id']; ?>">Edit</a> |
                        <a href="karya_siswa/dalate_karya.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>
    </div>
</body>
</html>
