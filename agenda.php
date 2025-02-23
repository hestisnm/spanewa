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


            <div class="judul2">
            <h3>"Langkah demi langkah menuju pengalaman belajar yang seru"</h3>
    </div>

            <div class="parent-container">
            <div class="history-content">
                <?php
                include './admin/koneksi.php';
                $sql = "SELECT * FROM agenda ORDER BY date DESC";
                $result = $conn->query($sql);

                if ($result->num_rows > 0){
                        while($row = $result->fetch_assoc()){
                  ?>
                  
                  <div class="konten">
                        <img src="./admin/agenda/upload/<?php echo $row['image']; ?>">
                        <h2><?php echo nl2br($row['title']);?></h2>
                        </div>
                       
                       
           <?php
                        }
                }else{
                        echo "<p>Belum ada Agenda Baru";
                }
                $conn->close();
                ?>
</div>
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

.parent-container {
    display: flex;
    justify-content: center; /* Pusat secara horizontal */
    align-items: center; /* Pusat secara vertikal */
    width: 100%; /* Pastikan tinggi elemen induk */
}


.judul2{
    text-align: center;
    justify-content: center;
    margin-top: 50px;
}

.history-content {
    display: flex; /* Menggunakan flexbox untuk sejajar horizontal */
    gap: 20px; /* Memberikan jarak antar konten */
    margin: 60px;
    background: white;
    padding: 2rem;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.39);
    width: 100%; /* Pastikan tinggi elemen induk */
    justify-content: center; /* Pusatkan semua elemen secara horizontal */
    align-items: center; /* Pusatkan elemen secara vertikal */
    flex-wrap: wrap; /* Jika ruang tidak cukup, elemen akan meliputi baris baru */
}

.konten {
    width: 20rem; /* Setiap konten memiliki lebar tetap */
    height: 15rem; /* Setiap konten memiliki tinggi tetap */
    background-color: white;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.39);
    display: flex;
    flex-direction: column;
    align-items: center; /* Pusatkan isi konten secara vertikal */
    justify-content: space-between;
    padding: 10px;
}

.konten img {
    object-fit: cover;
    width: 100%;
    height: 70%; /* Gambar menempati 70% dari tinggi konten */
    border-radius: 8px; /* Sudut gambar lebih halus */
}

.konten h2 {
    font-size: 1rem;
    text-align: center;
    margin-top: 10px;
    color: #333;
}

.konten p {
    text-align: center;
    font-size: 0.9rem;
}


</style>           

         
           

           