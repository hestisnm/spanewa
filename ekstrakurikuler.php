
    <link href="ekstrakurikuler.css" rel="stylesheet">
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
            <h2><B>AGENDA</B></h2> 
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

            <div class="activities">
            <?php
    include './admin/koneksi.php';
    $sql = "SELECT * FROM ekstrakurikuler ORDER BY date DESC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
    ?>
        <div class="activity">
            <img src="admin/ekskul/upload/<?php echo $row['image'];?>">
            <p><?php echo nl2br($row['title']); ?></p>
        </div>
        
        <?php
        }
    } else {
        echo "<p>Belum ada berita.</p>";
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

body {
    overflow-x: hidden;
    width: 100%;
    margin: 0;
    padding: 0;
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
        top: 80%; /* Menyesuaikan posisi garis pada layar kecil */
    }
}

@media (max-width: 480px) {
    .judul {
        font-size: 10vw; /* Ukuran font lebih besar pada layar sangat kecil */
        top: 20%; /* Menyesuaikan posisi vertikal lebih rendah */
    }

    .garis {
        width: 100%; /* Garis memenuhi lebar layar */
        top: 90%; /* Menyesuaikan posisi garis pada layar kecil */
    }
}

.ekstrakurikuler-container {
    text-align: center;
    padding: 0;
    position: relative;
    background: linear-gradient(to right, #000066bd 0%, #000066b6 15%, white 15%, white 100%);
    min-height: 555px;
}

.ekstrakurikuler-container img {
    position: absolute;
    left: 5%;
    height: 100%;
    width: auto;
    z-index: 1;
    animation: fadeInLeft 1.5s ease-out;
}

@keyframes fadeInLeft {
    from {
        opacity: 0;
        transform: translateX(-50px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

.ekstrakurikuler-title {
    padding-top: 250px;
    text-align: center;
    right: -10%;
    font-size: 2.5em;
    font-weight: bold;
    margin-bottom: 40px;
    color: #000;
    position: relative;
    z-index: 2;
    font-family: 'Inknut Antiqua', serif
}

.ekstrakurikuler-container::after {
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    width: 50%;
    height: 100%;
    background-image: 
        radial-gradient(circle at 80% 20%, rgba(32, 19, 151, 0.384) 10%, rgba(32, 19, 151, 0.384) 40%, transparent 50%),
        radial-gradient(circle at 80% 150%, rgba(32, 19, 151, 0.384) 10%, rgba(32, 19, 151, 0.384) 40%, transparent 50%);
    z-index: 1;
}

.activities {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 50px;
    max-width: 1000px;
    margin: 0 auto;
    padding: 50px;
    position: relative;
    z-index: 2;
}

.activity {
    position: relative;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    overflow: hidden;
    transition: all 0.3s ease;
    cursor: pointer;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.activity:hover {
    transform: translateY(-5px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    color: #ffffff;
}

.activity img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
    animation: fadeIn 1s ease-out;
}

@keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

.activity:hover img {
    transform: scale(1.0);
}

.activity p {
    background-color: #fdd835;
    margin: 0;
    padding: 15px;
    font-weight: bold;
    position: absolute;
    bottom: 0;
    width: 100%;
    box-sizing: border-box;
    text-align: center;
}

.activity:hover p {
    background-color: #ffed4a;
}
</style>