<link href="visimisi.css" rel="stylesheet">
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
            <h2><B>VISI MISI</B></h2> 
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

            <div class="content-section">
    <div class="left-content">
        <img style="height:auto; width:90%" src="./media/Group 100.png   " alt="Siswa SMPN 1 Wagir" class="students-image">
    </div>
    <div class="right-content">
        <div class="vision-box">
            <h3>Visi</h3>
            <p>"Unggul dalam prestasi yang berwawasan lingkungan dan berlandaskan nilai-nilai Pancasila"</p>
        </div>

        <div class="mission-box">
            <h3>Misi</h3>
            <ol>
                <li>Mewujudkan prestasi akademik</li>
                <li>Mewujudkan prestasi non akademik</li>
                <li>Mewujudkan kurikulum yang berwawasan lingkungan</li>
                <li>Mewujudkan sumber daya manusia yang peduli lingkungan</li>
                <li>Mewujudkan sumber daya manusia yang tangguh</li>
                <li>Mewujudkan sumber daya manusia yang berdimensi Pancasila</li>
            </ol>
        </div>
    </div>
</div>

