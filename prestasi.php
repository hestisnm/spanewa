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
            <h2><B>PRESTASI</B></h2> 
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



<?php
    include './admin/koneksi.php';
    
    // Fetch news from database
    $sql = "SELECT * FROM prestasi ORDER BY date DESC";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
?>
<div class="container mt-5">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php while ($row = $result->fetch_assoc()) { ?>
            <div class="col-lg-4 mb-4">
                <div class="card h-80">
                    <img src="./admin/prestasi/upload/<?php echo htmlspecialchars($row['image']); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo htmlspecialchars($row['title']); ?></h5>
                        <p class="card-text"><?php echo htmlspecialchars(substr($row['content'], 0, 150)) . '...'; ?></p>
                        <a href="prestasiSelengkapnya.php?id=<?= $row['id'] ?>" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<?php
    } else {
        echo "<p>Belum ada prestasi terbaru.</p>";
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

.judul {
    color: white;
    position: absolute;
    z-index: 2;
    top: 30%;  /* Menyesuaikan posisi secara dinamis */
    left: 50%; /* Menyusun teks di tengah horizontal */
    transform: translateX(-50%); /* Menyelaraskan judul di tengah */
    font-size: 5vw; /* Ukuran font dinamis berdasarkan lebar layar */
}

/* Garis */
.garis {
    position: absolute;
    width: 80%; /* Lebar garis dinamis (80% dari lebar layar) */
    height: 2px; /* Lebar garis */
    background-color: white; /* Warna garis */
    animation: slideInFromRight 1s ease-out forwards; /* Animasi garis masuk dari kanan */
    top: 80%; /* Menyesuaikan posisi vertikal garis */
    left: 50%; /* Menyelaraskan garis secara horizontal */
    transform: translateX(-50%); /* Menyelaraskan garis di tengah */
}

/* Animasi garis masuk dari kanan */
@keyframes slideInFromRight {
    0% {
        transform: translateX(100%); /* Posisi awal: di luar layar di sisi kanan */
    }
    100% {
        transform: translateX(-50%); /* Posisi akhir: garis berada di tempatnya */
    }
}

/* Media Queries untuk responsivitas lebih lanjut */
@media (max-width: 768px) {
    .judul {
        font-size: 8vw; /* Ukuran font lebih besar pada layar kecil */
        top: 25%; /* Menyesuaikan posisi vertikal untuk layar kecil */
    }

    .garis {
        width: 90%; /* Garis lebih lebar pada layar kecil */
        top: 40%; /* Menyesuaikan posisi garis pada layar kecil */
    }
}

@media (max-width: 480px) {
    .judul {
        font-size: 10vw; /* Ukuran font lebih besar pada layar sangat kecil */
        top: 20%; /* Menyesuaikan posisi vertikal lebih rendah */
    }

    .garis {
        width: 100%; /* Garis memenuhi lebar layar */
        top: 45%; /* Menyesuaikan posisi garis pada layar kecil */
    }
}

</style>