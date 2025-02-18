<link href="guru.css" rel="stylesheet">
    <!--guru-->

<div class="judul">
    <h1>GURU</h1>
</div>

<div class="guru">
<?php
    include './admin/koneksi.php';
    
    // Fetch news from database
    $sql = "SELECT * FROM guru ORDER BY date DESC";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
    ?>


<div class="card" style="width: 15rem;">
  <img  src="./admin/media/<?php echo $row['image']; ?>" class="card-img-top" style="height: 12rem; object-fit:cover;" alt="...">
  <div class="card-body">
    <p class="card-text">
    <b><?php echo nl2br($row['nim']); ?></b><br>
    <b><?php echo nl2br($row['nama']); ?></b><br>
</p>
  </div>
</div>
</div>
<?php
        }
    } else {
        echo "<p>Belum ada Daftar Guru</p>";
    }
    $conn->close();
    ?>




<div class="judul2">
    <h1>STAFF</h1>
</div>


<div class="staff">
<?php
    include './admin/koneksi.php';
    
    // Fetch news from database
    $sql = "SELECT * FROM staff ORDER BY date DESC";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
    ?>


<div class="card" style="width: 15rem;">
<img  src="./admin/media/<?php echo $row['image']; ?>" class="card-img-top" style="height: 12rem; object-fit:cover;" alt="...">
  <div class="card-body">
    <p class="card-text">
    <b><?php echo nl2br($row['nim']); ?></b><br>
    <b><?php echo nl2br($row['nama']); ?></b><br>
    </p>
  </div>
</div>
</div>
<?php
        }
    } else {
        echo "<p>Belum ada Daftar Staff</p>";
    }
    $conn->close();
    ?>


