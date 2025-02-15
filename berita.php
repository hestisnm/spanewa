<link href="berita.css" rel="stylesheet">

<div class="banner">
  <div class="hero">
    <img style="height:300px; width:100%; object-fit: cover;" src="./media/Wireframe - 6 (2).png">
  </div>
  <div class="judul">
    <h2><b>BERITA</b></h2>
    <div class="garis"></div>
  </div>
</div>

<div class="berita">
  <?php
  include 'etmin/koneksi.php';

  // Query untuk mengambil data berita
  $sql = "SELECT id, title, content, image FROM news";
  $result = $conn->query($sql);

  // Loop berita
  while ($row = $result->fetch_assoc()) : ?>
    <div class="card" style="width: 18rem;">
      <img src="etmin/media/<?= $row['image'] ?>" class="card-img-top" alt="Gambar Berita">
      <div class="card-body">
        <h5 class="card-title"><?= $row['title'] ?></h5>
        <p><?= $row['content'] ?></p>
        <a href="beritaSelengkapnya.php?id=<?= $row['id'] ?>" class="btn btn-primary">Baca Selengkapnya</a>
      </div>
    </div>
  <?php endwhile; ?>

</div>

<?php $conn->close(); ?>