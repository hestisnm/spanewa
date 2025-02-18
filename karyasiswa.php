
    <link href="karyasiswa.css" rel="stylesheet">

<body>
<div class="banner">
<div class="hero">
<img style="height:300px; width:100%; object-fit:cover;" src="./media/Wireframe - 6 (2).png"></div>
            <div class="judul">
            <h2><B>KARYA SISWA</B></h2> 
            <div class="garis"></div>
            </div>
            </div>



            <div class="karya">

            <?php
            include './admin/koneksi.php';

            $sql = "SELECT * FROM karya_siswa ORDER BY date DESC";
            $result = $conn->query($sql);

            if ($result->num_rows > 0 ){
              while($row = $result->fetch_assoc()){
              ?>


            <div class="card" style="width: 16rem;">
  <img src="./admin/media/<?php echo $row['image'];?>">
  <div class="card-text">
  <b><?php echo nl2br($row['title']); ?></b><br>
  <?php echo substr(nl2br($row['content']), 0, 150) . '...'; ?><br>
  </div>
</div>  
</div>
<?php
            }
          }else {
            echo "<p>Belum ada Karya Baru";
          }
          $conn->close();
          ?>



