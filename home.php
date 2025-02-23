<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="home.css" rel="stylesheet">
</head>
    <div class="banner">
        <div class="gambar1">
            <img src="./media/Wireframe - 5 (5).png">
        </div>
        <div class="gambar2">
        <img style="height: 400px; width: auto;" src="./media/kartun murid.png">
        </div>
        <div class="kotak">
        <div class="judul">
            <h5><b>SELAMAT DATANG!</b></h5>
            <p>Anggun Dalam Mentalitas Unggul Dalam Prestasi</p>
            <div class="buton">
                <a style="color:white; text-decoration:none;" href="index.php?page=profilsekolah">Ketahui Lebih Lanjut</a>
            </div>
        </div>
        </div>
</div>
   




<!-- statistik -->
<div class="stats-section">
    <div class="statistik">
        <h1><b>STATISTIK</b></h1>
    </div>
    <div class="stats-grid">
        <div class="stat-item">
            <div class="stat-icon">
                <img src="./media/student.png" alt="Siswa">
            </div>
            <div class="stat-number" data-target="956">0</div>
            <div class="stat-label">Siswa</div>
        </div>
        
        <div class="stat-item">
            <div class="stat-icon">
                <img src="./media/teACHER.png" alt="Tenaga Pendidik">
            </div>
            <div class="stat-number" data-target="66">0</div>
            <div class="stat-label">Tenaga Pendidik</div>
        </div>
        
        <div class="stat-item">
            <div class="stat-icon">
                <img src="./media/class.png" alt="Ruang Kelas">
            </div>
            <div class="stat-number" data-target="30">0</div>
            <div class="stat-label">Ruang Kelas</div>
        </div>
        
        <div class="stat-item">
            <div class="stat-icon">
                <img src="./media/medali.png" alt="Akreditasi">
            </div>
            <div class="stat-text">A</div>
            <div class="stat-label">Akreditasi</div>
        </div>
    </div>
</div>

<script>
// Fungsi untuk animasi angka
function animateStatNumber(element, target) {
    let current = 0;
    const increment = Math.ceil(target / 100); // Mengatur kecepatan animasi

    const interval = setInterval(() => {
        current += increment;
        if (current >= target) {
            current = target;
            clearInterval(interval); // Berhenti jika sudah mencapai angka target
        }
        element.textContent = current; // Mengubah teks angka
    }, 30); // Interval setiap 30ms
}

// Menangani animasi ketika halaman dimuat
window.addEventListener('load', () => {
    const statNumbers = document.querySelectorAll('.stat-number');
    statNumbers.forEach(stat => {
        const target = parseInt(stat.getAttribute('data-target'), 10);
        animateStatNumber(stat, target); // Mulai animasi untuk setiap elemen
    });
});
</script>

<!-- akhir -->

<!-- sambutan kepsek -->
<div style="background-color:white;">
        <section class="profile-section container">
            <div class="profile-grid">
                <div class="profile-image-container">
                    <div class="profile-image-wrapper">
                        <img src="./media/pak budi 1.svg" alt="Kepala Sekolah" class="profile-image">
                    </div>
                    <div class="profile-title">
                        <h3>KEPALA SMP NEGERI 1 WAGIR</h3>
                        <p>Drs. Budi Prasetyo</p>
                    </div>
                </div>
                <div class="profile-text">
                    <div class="message-box">
                        <p>Saya, Budi Prasetyo, dengan bangga menyambut Anda di situs resmi SMP Negeri 1 Wagir. Kami sangat senang dapat memperkenalkan Anda kepada komunitas kami melalui platform ini.</p>
                        <p>Sebagai lembaga pendidikan yang berkomitmen untuk menciptakan lingkungan belajar yang berkualitas dan inovatif, kami percaya bahwa setiap siswa memiliki potensi luar biasa yang perlu dikembangkan. Di SMP Negeri 1 Wagir, kami tidak hanya fokus pada pencapaian akademik, tetapi juga pada pembentukan karakter, keterampilan sosial, dan kreativitas siswa.</p>
                        <a href="index.php?page=sambutan"><button class="cta-button">BACA SELENGKAPNYA</button></a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- selesai -->

<!-- Pop-up Modal -->
<script>
    // Mengecek jika pengunjung baru di sesi ini
    window.onload = function() {
        // Jika sessionStorage tidak ada (pengguna baru dalam sesi ini)
        if (!sessionStorage.getItem('visited')) {
            document.getElementById('welcomeModal').style.display = 'block'; // Menampilkan modal
            sessionStorage.setItem('visited', 'true'); // Tandai bahwa pengguna sudah mengunjungi dalam sesi ini
        }
    };

    // Menutup modal saat tombol close diklik
    const closeBtn = document.querySelector('.close-btn');
    closeBtn.addEventListener('click', function() {
        document.getElementById('welcomeModal').style.display = 'none';
    });

    // Menutup modal saat klik di luar konten modal
    window.onclick = function(event) {
        if (event.target == document.getElementById('welcomeModal')) {
            document.getElementById('welcomeModal').style.display = 'none';
        }
    };
</script>

<!-- berita -->
    <h3 style="font-size: 3vw;
    text-align: center;
    margin-top: 4vh;
    color: #161D6F;
    font-weight: bold;">BERITA TERKINI</h3>

<div class="banyak">
    
    <?php
    include './admin/koneksi.php';
    
    // Fetch 3 latest news from database
    $sql = "SELECT * FROM news ORDER BY date DESC LIMIT 3";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
    ?>
        <div class="foto2">
            <img src="./admin/berita/upload/<?php echo $row['image']; ?>">
            <div class="text2">
                <p>
                    <b><?php echo nl2br($row['title']); ?></b><br>
                    <?php echo substr(nl2br($row['content']), 0, 150) . '...'; ?><br>
                    <h5>📆 <?php echo date('d F Y', strtotime($row['date'])); ?></h5>
                    <h5>✍️ <?php echo $row['author']; ?></h5>
                    <a href="beritaSelengkapnya.php?id=<?= $row['id'] ?>" style="background-color: #0B2F9F; color: white;" class="btn btn-primary">Baca Selengkapnya</a>
                </p>
            </div>
        </div>
</div>
    <?php
        }
    } else {
        echo "<p>Belum ada berita.</p>";
    }
    $conn->close();
    ?>
    <div  class="lebih-banyak">
    <a href="index.php?page=berita">
        <button style="text-align: center; padding: 10px; background-color: #0B2F9F; color: white; margin-left: 43%;" class="cta-button1">BACA BERITA LAINNYA</button></a>
</div>


<style>
    .banyak {
        display: flex;
        align-items: stretch;
        gap: 30px;
        margin: 50px;
        flex-wrap: wrap;
        justify-content: center;
    }

    .foto2 {
        width: 340px;
        background: white;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
        padding: 15px;
    }

    .foto2:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    }

    .foto2 img {
        width: 100%;
        height: 220px;
        border-radius: 8px;
        object-fit: cover;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .text2 {
        padding: 15px 0;
    }

    .text2 p {
        font-size: 16px;
        color: #333;
        line-height: 1.5;
        margin: 0;
    }

    .text2 b {
        background: linear-gradient(120deg, #0B2F9F, #4169E1);
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
        transition: opacity 0.3s ease;
        font-size: 16px;
    }

    .text2 b:hover {
        opacity: 0.8;
    }

    .text2 h5 {
        color: #666;
        margin-top: 10px;
        font-size: 12px;
    }
</style>
</div>


<!-- galeri -->
<h3 style="font-size: 3vw;
    text-align: center;
    margin-top: 4vh;
    color: #161D6F;
    font-weight: bold;">GALERI</h3>

<div class="tiga">
            <?php
    include './admin/koneksi.php';
    
    // Fetch news from database
    $sql = "SELECT * FROM galeri ORDER BY date DESC";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
    ?>

<div class="persegi">
    <div class="wanpik">
    <img class="pik" src="./admin/galeri/upload/<?php echo $row['image']; ?>">
    <div class="text-overlay-container">
    <div class="text-overlay">
    <p><?php echo nl2br($row['title']); ?></p>
    <p><?php echo date('d F Y', strtotime($row['date'])); ?></p>
                </div>
    </div>
    </div>
</div>

<?php
        }
    } else 
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
</div>