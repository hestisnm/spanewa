<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="prestasi.css" rel="stylesheet">
</head>
<body>
<div class="banner">
<div class="hero">
<img style="height:300px; width:100%; object-fit:cover;" src="./media/Wireframe - 6 (2).png"></div>
            <div class="judul">
            <h2><B>PRESTASI</B></h2> 
            <div class="garis"></div>
            </div>
            </div>


<div class="prestasi">
<?php
    include './admin/koneksi.php';
    
    // Fetch news from database
    $sql = "SELECT * FROM prestasi ORDER BY date DESC";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
    ?>

            <div class="card">
  <img src="./admin/media" class="card-img-top" alt="...">
  <div class="card-body">
  <b><?php echo nl2br($row['title']); ?></b><br>
  <?php echo substr(nl2br($row['content']), 0, 150) . '...'; ?><br>
  <a href="prestasiSelengkapnya.php?id=<?= $row['id'] ?>" class="btn btn-primary">Baca Selengkapnya</a>
  </div>
</div>
</div>

<?php
        }
    } else {
        echo "<p>Belum ada prestasi terbaru.</p>";
    }
    $conn->close();
    ?>

