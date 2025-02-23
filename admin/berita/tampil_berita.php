<?php
include __DIR__ . '/../koneksi.php';
$sql = "SELECT * FROM news ORDER BY date DESC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita Terkini</title>

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

        td.konten {
            max-width: 300px;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Berita Terkini</h2>
        <a href="berita/create_berita.php">Tambah berita</a>
        <table>
            <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>Judul</th>
                <th>Konten</th>
                <th>Penulis</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
            <?php $no = 1; ?>
            <?php while($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><img src="berita/upload/<?php echo $row['image']; ?>" width="100"></td>
                    <td><?php echo $row['title']; ?></td>
                    <td class="konten">
                        <?php echo strlen($row['content']) > 100 ? substr(strip_tags($row['content']), 0, 100) . '...' : $row['content']; ?>
                    </td>
                    <td><?php echo $row['author']; ?></td>
                    <td><?php echo $row['date']; ?></td>
                    <td>
                        <a href="berita/view_berita.php?id=<?php echo $row['id']; ?>">Baca</a> |
                        <a href="berita/edit_berita.php?id=<?php echo $row['id']; ?>">Edit</a> |
                        <a href="berita/delete_berita.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>
    </div>
</body>
</html>
