<?php
include '../koneksi.php';
$sql = "SELECT * FROM galeri ORDER BY date DESC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri Terkini</title>
    <style>
        .container {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            max-width: 1200px;
            margin: 20px auto;
            animation: fadeIn 0.5s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
        }

        th, td {
            padding: 15px;
            text-align: left;
            border: 1px solid #eee;
            max-width: 300px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        th {
            background: rgb(139, 161, 227);
            color: white;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        tr:nth-child(even) {
            background-color: #f8f9fa;
        }

        tr:hover {
            background-color: #f2f2f2;
            transition: background-color 0.3s ease;
        }

        tr {
            transition: all 0.3s ease;
        }

        tr:hover td {
            white-space: normal;
            word-break: break-word;
        }

        a {
            text-decoration: none;
            color: rgb(139, 161, 227);
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }

        @media (max-width: 768px) {
            .container {
                padding: 20px;
                margin: 10px;
            }

            table {
                display: block;
                overflow-x: auto;
            }

            th, td {
                padding: 10px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Galeri Terkini</h2>
        <a href="create_galeri.php">Tambah Galeri</a>
        <table>
            <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
            <?php $no = 1; ?>
            <?php while($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><img src="../media/<?php echo $row['image']; ?>" width="100"></td>
                    <td><?php echo $row['title']; ?></td>
                    <td><?php echo $row['author']; ?></td>
                    <td><?php echo $row['date']; ?></td>
                    <td>
                        <a href="view_galeri.php?id=<?php echo $row['id']; ?>">Baca</a> |
                        <a href="edit_galeri.php?id=<?php echo $row['id']; ?>">Edit</a> |
                        <a href="delete_galeri.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>
    </div>
</body>
</html>
