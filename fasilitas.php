<link href="fasilitas.css" rel="stylesheet">
<div class="judul">
            <h2><B>SARANA DAN PRASARANA</B></h2> 
            <div class="garis"></div>
            </div>

<!-- Facilities Grid -->
<div class="fasilitas">


<?php
include './admin/koneksi.php';
$sqlf = "SELECT * FROM fasilitas ORDER BY date DESC";
$resultf = $conn->query($sqlf);

if ($resultf->num_rows > 0) {
    while($row = $resultf->fetch_assoc()){
        ?>
<div class="facilities-grid">
<div class="facility-card">
<img src="./admin/fasilitas/upload/<?php echo $row['image']; ?>">
<h2><?php echo nl2br($row ['title']); ?></h2>
</div>
</div>
<?php
    }
}else {
    echo "<p>Belum ada fasilitas barux</p>";
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
    text-align: center; /* Menyusun teks di tengah */
    color: navy; /* Warna teks putih */
    padding: 50px;
    width: 100%; /* Lebar kotak, dapat disesuaikan */
    animation: slideInFromBottom 2s ease-out forwards; /* Tambahkan animasi */
}

/* Animasi Judul */
@keyframes slideInFromBottom {
    0% {
        top: 100%; /* Awal dari luar layar bagian bawah */
        opacity: 0; /* Tidak terlihat di awal */
    }
    50% {
        opacity: 0.5; /* Perlahan muncul */
    }
    100% {
        top: 50%; /* Akhir di posisi tengah */
        opacity: 1; /* Sepenuhnya terlihat */
    }
}

.garis {
    position: absolute;
    width: 30%; /* Lebar garis dinamis (80% dari lebar layar) */
    height: 2px; /* Lebar garis */
    background-color: #FFD700; /* Warna garis */
    animation: slideInFromRight 1s ease-out forwards; /* Animasi garis masuk dari kanan */
    top: 30%; /* Menyesuaikan posisi vertikal garis */
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

.fasilitas{
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    display: flex;
}

.facilities-grid{
    justify-content: center;
    display: flex;
    padding: 20px;
    gap: 20px;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
}


.fasilitas-card{
    background: linear-gradient(135deg, #1a237e, #3949ab);
    border-radius: 15px;
    padding: 15px;
    text-align: center;
    color: white;
    transition: transform 0.3s ease;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    max-width: 300px;
}

.fasilitas-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
}

.fasilitas img {
    width: 250px;
    height: 200px;
    object-fit: cover;
    border-radius: 10px;
    margin-bottom: 15px;
}

.fasilitas img:hover{
    background-color: #1a227e34;
}

.fasilitas-card h3 {
    font-size: 18px;
    margin: 10px 0;
}



/* Responsive Design */
@media (max-width: 1024px) {
    .facilities-grid {
        grid-template-columns: repeat(2, 1fr);
        padding: 30px;
    }
}

@media (max-width: 768px) {
    .hero-section h1 {
        font-size: 36px;
    }

    .hero-section h2 {
        font-size: 24px;
    }
}

@media (max-width: 480px) {
    .facilities-grid {
        grid-template-columns: 1fr;
        padding: 20px;
    }

    .hero-section h1 {
        font-size: 28px;
    }

    .hero-section h2 {
        font-size: 20px;
    }
}

</style>

