

<div class="banner">
<div class="hero">
<img style="height:300px; width:100%; object-fit:cover" src="./media/Wireframe - 6 (2).png"></div>
            <div class="judul">
            <h2><B>GALERI</B></h2> 
            <div class="garis"></div>
            </div>
            </div>

            <div class="judul2">
            <?php
    include './admin/koneksi.php';
    
    // Fetch news from database
    $sql = "SELECT * FROM galeri ORDER BY date DESC";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
    ?>

    <h3><?php echo nl2br($row['title']); ?></h3>
</div>

<div class="tiga">
    <div class="persegi">
        <div class="wanpik">
            <img src="./admin/media/<?php echo $row['image']; ?>">
            <div class="text-overlay-container">
                <div class="text-overlay">
                <?php echo nl2br($row['title']); ?>
            </div>
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

       </div>

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

.judul2{
    text-align: center;
    justify-content: center;
    margin-top: 50px;
}

.awal {
    position: relative;
    width: 300px;
    height: auto;
    overflow: hidden;
}

.persegi {
    position: relative;
    width: 300px;
    height: auto;
    overflow: hidden;
    border-radius: 5px; 
}

.tiga {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    margin: 50px 150px;
}

.wanpik {
    position: relative;
    width: 200px;
    height: 160px;
    box-shadow: black;
}

.pik {   
    width: 300px;
    height: auto;
    object-fit: cover;
    filter: brightness(100%);
    transform: scale(1);
    transition: filter 1s ease, transform 1s ease;
}

.text-overlay-container {
    position: absolute;
    bottom: 15px;
    left: 10px;
    right: 25px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    gap: 5px;
    transform: translateY(100%);
    opacity: 0;
    transition: opacity 1s ease, transform 1s ease;
}

.text-overlay {
    font-size: 0.8em;
    font-weight: 400;
    color: white;
}

.wanpik:hover .pik {
    filter: brightness(60%);
    transform: scale(1.25);
}

.wanpik:hover .text-overlay-container {
    transform: translateY(0);
    opacity: 1;
}
       </style>