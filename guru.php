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
  <img src="admin/guru/upload/<?php echo $row['image']; ?>" class="card-img-top" style="height: 12rem; object-fit:cover;" alt="...">
  <div class="card-body">
    <p class="card-text">
    <b><?php echo nl2br($row['nama']); ?></b><br>
    <b><?php echo nl2br($row['mapel']); ?></b><br>
</p>
  </div>

<?php
        }
    } else {
        echo "<p>Belum ada Daftar Guru</p>";
    }
    $conn->close();
    ?>
</div>
</div>



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
<img  src="./admin/staff/upload/<?php echo $row['image']; ?>" class="card-img-top" style="height: 12rem; object-fit:cover;" alt="...">
  <div class="card-body">
    <p class="card-text">
    <b><?php echo nl2br($row['nama']); ?></b><br>
    <b><?php echo nl2br($row['bidang_kerja']); ?></b><br>
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


<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
    scroll-behavior: smooth;
}

body{
    background-color: white;
    font-family: 'poppins';
}

.judul h1{
    color: #161D6F;
    position: absolute;
    z-index: 2;
    top: 10%;  
    left: 50%; 
    transform: translateX(-50%); 
    font-size: 5vw; 
}

.guru{
    justify-content: center;
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    gap: 20px;
    padding: 120px;
}

.card{
    padding: 5px;
    justify-content: center;
}

.card-body{
    margin: 4;
}

.judul2 h1{
    color: #161D6F;
    position: absolute;  
    left: 50%; 
    transform: translateX(-50%); 
    font-size: 5vw; 
}

.staff{
    justify-content: center;
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    gap: 20px;
    padding: 120px;
}
</style>