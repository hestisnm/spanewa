<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="beritaSelengkapnya.css" rel="stylesheet">

<button class="back-button">
     <a href="index.php?page=berita" style="color:white; text-decoration:none;">Kembali</a>
</button>

<div class="banner">
    <div class="hero">
        <img style="height:300px; width:100%; object-fit:cover" src="./media/osis.png">
    </div>
    <div class="judul">
        <h2><b>Berita</b></h2>
    </div>
</div>


<?php
    include './admin/koneksi.php';
    
    // Ambil ID berita dari URL
    $id = isset($_GET['id']) ? intval($_GET['id']) : 0;

    // Ambil berita berdasarkan ID
    $sql = "SELECT * FROM news WHERE id = $id";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
?>

<div class="image-container-wrapper">
    <div class="image-container">
    <?php
// Tentukan direktori tempat gambar disimpan
$directory = "./admin/berita/upload/";

// Baca semua file dalam direktori
$images = array_diff(scandir($directory), array('..', '.')); // Menghapus . dan .. untuk hanya mengambil gambar

// Buat array untuk menyimpan path gambar
$imagePaths = [];

// Iterasi untuk membuat path lengkap dari setiap gambar yang ada di folder
foreach ($images as $image) {
    // Pastikan hanya file gambar yang diambil (misalnya dengan ekstensi .jpg, .png, .jpeg)
    if (in_array(pathinfo($image, PATHINFO_EXTENSION), ['jpg', 'jpeg', 'png'])) {
        $imagePaths[] = $directory . $image;
    }
}
// Menampilkan gambar-gambar yang ditemukan
foreach ($imagePaths as $imagePath) {
    echo '<img src="' . $imagePath . '" alt="Gambar" style="width: 300px; height:140px; object-fit:cover; margin: 2px;">';
}
?>
       
    </div>
</div>

<style>
.image-container-wrapper {
    overflow: hidden;
    white-space: nowrap;
    position: relative;
    background: white;
    padding: 10px 0;
}

.image-container {
    display: flex;
    width: fit-content;
    animation: marquee 90s linear infinite;
}

.image-item img {
    width: 200px;
    height: 150px;
    object-fit: cover;
    margin-right: 10px;
}

@keyframes marquee {
    from { transform: translateX(0); }
    to { transform: translateX(-50%); }
}

.image-container-wrapper:hover .image-container {
    animation-play-state: paused;
}
</style>

<!-- Konten utama berita -->
<div style="display:flex; margin:40px; gap:20px;" class="konten">
    <img style="width:auto; height:200px; border-radius:10px;" src="./admin/berita/upload/<?php echo $row['image']; ?>">
    <div>
        <h1><?= nl2br($row['title']); ?></h1>
        <p style="font-size:14px; color:gray;">
            Dibuat pada: <? echo date('d F Y', strtotime($row['date'])); ?><br>
            Oleh: <?= $row['author']; ?>
        </p> 
    </div>
    <img style="width:400px; height:auto; margin-right:0; display:block;" src="./media/prestasi.png">
</div>

<!-- Menampilkan isi konten berita keseluruhan -->
<div style="margin:40px; margin-top:10px;" class="text">           
    <?= nl2br($row['content']); ?>
</div>

<?php
    } else {
        echo "<p>Berita tidak ditemukan.</p>";
    }

    $conn->close();
?>
