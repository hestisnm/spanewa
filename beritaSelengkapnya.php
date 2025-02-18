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

// Fetch berita berdasarkan ID
$sql = "SELECT * FROM news WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $berita = $result->fetch_assoc();

    // Ambil gambar slider dari kolom image_slider, split jadi array
    $images = [];
    if (!empty($berita['image_slider'])) {
        $images = explode(',', $berita['image_slider']);
        // Tambahkan path ke folder gambar
        foreach ($images as &$img) {
            $img = './admin/media/' . trim($img);
        }
    }
} else {
    echo "<p>Berita tidak ditemukan.</p>";
    exit;
}
?>

<div class="image-container-wrapper">
    <div class="image-container">
        <?php
        for ($i = 0; $i < 2; $i++) :
            foreach ($images as $image) :
        ?>
                <div class="image-item">
                    <img src="<?= $image; ?>" alt="Gambar Berita">
                </div>
        <?php
            endforeach;
        endfor;
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

<div style="display:flex; margin:40px; gap:20px;" class="konten">
    <img style="width:300px; height:200px; border-radius:10px;" src="./admin/media/<?= $berita['image']; ?>">
    <div>
        <h1><?= nl2br($berita['title']); ?></h1>
        <p><?= nl2br($berita['content']); ?></p>
        <p style="font-size:14px; color:gray;">Dibuat pada: <?= date('d F Y', strtotime($berita['date'])); ?> | Oleh: <?= $berita['author']; ?></p>
    </div>
</div>

<div style="margin:40px; margin-top:10px;" class="text">           
    <?= nl2br($berita['selengkapnya']); ?>
</div>

<?php
$conn->close();
?>
