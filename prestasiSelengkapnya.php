<link rel="stylesheet" href="prestasiSelengkapnya.css">

<button class="back-button">
     <a href="index.php?page=prestasi" style="color:white; text-decoration:none;">Kembali</button></a>

     <div class="banner">
<div class="hero">
<img style="height:300px; width:100%; object-fit:cover" src="./media/osis.png"></div>
            <div class="judul">
            <h2><B>Prestasi Siswa Siswi SPANEWA</B></h2> 
            </div>
    </div>

    <?php
include './admin/koneksi.php';

// Ambil ID berita dari URL
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Ambil berita berdasarkan ID
$sql = "SELECT * FROM prestasi WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
?>

<div style="display: flex; margin: 40px; gap: 20px; align-items: center;" class="konten">
    <img style="width: 400px; height: auto;" src="./admin/prestasi/upload/<?php echo $row['image']; ?>">
    <div>
        <h1><?= nl2br($row['title']); ?></h1>
        <p style="font-size: 14px; color: gray;">
            Dibuat pada: <?php echo date('d F Y', strtotime($row['date'])); ?><br>
            Oleh: <?= $row['author']; ?>
        </p>
    </div>
    <img style="width: 400px; height: auto;" src="./media/prestasi.png">
</div>

<!-- Menampilkan isi konten berita keseluruhan -->
<div style="margin: 40px; margin-top: 10px;" class="text">
    <?= nl2br($row['content']); ?>
    
<?php
} else {
    echo "<p>Prestasi tidak ditemukan.</p>";
}

$conn->close();
?>
</div>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
        scroll-behavior: smooth;
    }

    body {
        background-color: white;
        font-family: 'Poppins';
    }

    .back-button {
        background-color: #161D6F;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        font-size: 16px;
        font-weight: bold;
        cursor: pointer;
        transition: background-color 0.3s ease, transform 0.3s ease;
        position: fixed;
        top: 20px;
        left: 20px;
        z-index: 1000;
    }

    .back-button:hover {
        background-color: #0F145A;
        transform: scale(1.05);
    }

    .judul {
        color: white;
        position: absolute;
        z-index: 2;
        top: 30%;
        left: 50%;
        transform: translateX(-50%);
        font-size: 1rem;
    }

    .text {
        margin-bottom: 30px;
        font-size: 16px;
        color: #828893;
        line-height: 26px;
    }
</style>
