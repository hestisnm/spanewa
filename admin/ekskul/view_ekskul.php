<?php
include '../koneksi.php';
$id = $_GET['id'];
$sql = "SELECT * FROM ekstrakurikuler WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

?>
<h2><?php echo $row['title']; ?></h2>
<img src="upload/<?php echo $row['image']; ?>" width="500">
<p><strong>Penulis:</strong> <?php echo $row['author']; ?></p>
<p><strong>Tanggal:</strong> <?php echo $row['date']; ?></p>
<a href="../?>ekskul">Kembali</a>

<style>
    body {
        background: linear-gradient(135deg, rgba(139, 161, 227, 0.2), rgba(174, 179, 234, 0.3));
        font-family: 'Poppins', sans-serif;
        margin: 0;
        padding: 0;
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        position: relative;
    }

    /* Hiasan Dekoratif */
    .circle-deco-1 {
        position: absolute;
        top: -40px;
        left: 50px;
        width: 150px;
        height: 150px;
        background: rgba(139, 161, 227, 0.3);
        border-radius: 50%;
    }

    .circle-deco-2 {
        position: absolute;
        bottom: 50px;
        right: 40px;
        width: 180px;
        height: 180px;
        background: rgba(139, 161, 227, 0.2);
        border-radius: 50%;
    }

    h2 {
        color: rgb(75, 95, 170);
        font-size: 28px;
        margin-bottom: 15px;
    }

    img {
        border-radius: 12px;
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
        margin-bottom: 10px;
    }

    p {
        font-size: 16px;
        color: #555;
    }

    a {
        display: inline-block;
        margin-top: 15px;
        text-decoration: none;
        background-color: rgb(139, 161, 227);
        color: white;
        padding: 10px 20px;
        border-radius: 8px;
        transition: background-color 0.3s ease;
        font-weight: 600;
    }

    a:hover {
        background-color: rgb(120, 140, 210);
    }
</style>

<!-- Dekorasi Lingkaran -->
<div class="circle-deco-1"></div>
<div class="circle-deco-2"></div>