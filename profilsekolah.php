
<link href="profilsekolah.css" rel="stylesheet">
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
            <h2><B>PROFIL SEKOLAH</B></h2> 
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

        
        <section class="stats-section">
            <div class="stats-container">
                <div class="stat-box">
                    <div class="gambar-statistik">
                        <img src="./media/teACHER.png" alt="Pengajar">
                    </div>
                    <div class="stats-info">
                        <h3>Jumlah Pengajar</h3>
                        <div class="stat-number" data-target="66">0</div>
                    </div>
                </div>
                <div class="stat-box">
                    <div class="gambar-statistik">
                        <img src="./media/student.png" alt="Siswa">
                    </div>
                    <div class="stats-info">
                        <h3>Jumlah Siswa Siswi</h3>
                        <div class="stat-number" data-target="956">0</div>
                    </div>
                </div>
                <div class="stat-box">
                    <div class="gambar-statistik">
                        <img src="./media/class.png" alt="Ruang">
                    </div>
                    <div class="stats-info">
                        <h3>Jumlah Ruang Kelas</h3>
                        <div class="stat-number" data-target="30">0</div>
                    </div>
                </div>
            </div>
        </section>
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

<!-- sejarah -->
<section class="history-section">
            <div class="container">
                <div class="history-content">
                    <div class="logo-section">
                        <img src="./media/logo_spanewa-removebg-preview (1).png" alt="Logo SMPN 1 Wagir" class="school-logo">
                    </div>

                    <div class="history-text-box">
                        <div class="history-text">
                            <p>SMP Negeri 1 Wagir didirikan pada tanggal 1 Juli 1983 dengan SK Menteri Pendidikan dan
                                Kebudayaan tanggal 7 November 1983 nomor 0472/C/1983.</p>
                            <p>Lokasi pertama berada di jalan raya Wagir no. 71 kecamatan Wagir Kabupaten Malang.</p>
                            <p>Kelas 1-3 jumlah seluruh siswa 80 orang.</p>
                            <p>Seiring dengan berjalannya jaman telah berkembang pembangunan yang didukung oleh
                                dana-dana dari pemerintah melalui anggaran Rutin dan bantuan masyarakat BOP-3.</p>
                        </div>
                        <a href="index.php?page=logosejarah" class="read-more-btn">BACA SELENGKAPNYA</a>
                    </div>
                </div>
            </div>
        </section>

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
    } else {
        echo "<p>Belum ada fotoyang ditambahkan.</p>";
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
        </section>
    </main>

</body>