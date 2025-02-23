<?php
include __DIR__ . '/../koneksi.php';
$sql = "SELECT * FROM feedback ORDER BY date DESC";
$result = $conn->query($sql);
?>

<div id="feedback" class="page">

<div class="container">
    <h2>Daftar Kritik dan Saran</h2>
    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Pesan</th>
            <th>Tanggal</th>
            <th>Aksi</th>
        </tr>
        <?php $no = 1; ?>
        <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo htmlspecialchars($row['name']); ?></td>
                <td><?php echo htmlspecialchars($row['email']); ?></td>
                <td><?php echo htmlspecialchars($row['message']); ?></td>
                <td><?php echo htmlspecialchars($row['date']); ?></td>
                <td>
                    <a href="feedback/view_feedback.php?id=<?php echo $row['id']; ?>">Baca</a> |
                    <a href="feedback/dalate_feedback.php?id=<?php echo $row['id']; ?>" 
                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</a></td>
            </tr>
        <?php endwhile; ?>
    </table>
</div>
</div>

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

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(-20px); }
        to { opacity: 1; transform: translateY(0); }
    }


    table {
        width: 900px;
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
        background: rgb(139, 161, 227); ;
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

    /* Responsive design improvements */
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
