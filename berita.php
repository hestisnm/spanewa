<link href="berita.css" rel="stylesheet">

<div class="banner">
<?php
    include './admin/koneksi.php';
    
    // Fetch news from database
    $sql = "SELECT * FROM banner ORDER BY date DESC";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
    ?>

<div class="hero">
<img style="height:300px; width:100%; object-fit: cover; filter: brightness(70%); " src="admin/banner/upload/<?php echo $row['image']; ?>">
    <div class="judul">
            <h2><B>BERITA</B></h2> 
            <div class="garis"></div>
    </div>
</div>
</div>
<?php
        }
    } else {
        echo "<p>Belum ada fotoyang ditambahkan.</p>";
    }
    $conn->close();
    ?>

<div class="banyak">
    <?php
    include './admin/koneksi.php';
    
    // Fetch news from database
    $sql = "SELECT * FROM news ORDER BY date DESC";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
    ?>
        <div class="foto2">
            <img src="./admin/berita/upload/<?php echo $row['image']; ?>">
            <div class="text2">
                <p>
                    <b><?php echo nl2br($row['title']); ?></b><br>
                    <?php echo substr(nl2br($row['content']), 0, 150) . '...'; ?><br>
                    <h5>📆 <?php echo date('d F Y', strtotime($row['date'])); ?></h5>
                    <h5>✍️ <?php echo $row['author']; ?></h5>
                    <a href="beritaSelengkapnya.php?id=<?= $row['id'] ?>" class="btn btn-primary">Baca Selengkapnya</a>
                </p>
            </div>
        </div>
    <?php
        }
    } else {
        echo "<p>Belum ada berita.</p>";
    }
    $conn->close();
    ?>

<style>
        *{
            .banyak {
    display: flex;
    align-items: stretch;
    gap: 30px;
    margin: 50px;
    flex-wrap: wrap;
    justify-content: center;
}

.foto2 {
    width: 340px;
    background: white;
    border-radius: 15px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
    padding: 15px;
}

.foto2:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
}

.foto2 img {
    width: 100%;
    height: 220px;
    border-radius: 8px;
    object-fit: cover;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

.text2 {
    padding: 15px 0;
}

.text2 p {
    font-size: 16px;
    color: #333;
    line-height: 1.5;
    margin: 0;
}

.text2 b {
    background: linear-gradient(120deg, #0B2F9F, #4169E1);
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
    transition: opacity 0.3s ease;
    font-size: 16px;
}

.text2 b:hover {
    opacity: 0.8;
}

.text2 h5 {
    color: #666;
    margin-top: 10px;
    font-size: 12px;
}
        }
    </style>
</div>