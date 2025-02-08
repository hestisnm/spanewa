
<link href="profilsekolah.css" rel="stylesheet">


<div class="banner">
<div class="hero">
<img style="height:300px; width:100%; object-fit:cover" src="./media/Wireframe - 6 (2).png"></div>
            <div class="judul">
            <h2><B>PROFIL SEKOLAH</B></h2> 
            <div class="garis"></div>
            </div>
            </div>

        
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

         <!-- Gallery Section -->
         <section class="gallery-section">
            <div class="container">
                <div class="gallery-grid">
                    <div class="gallery-item">
                        <img src="./media/bulan bahsasa.jpg" alt="Gallery 1">
                        <div class="gallery-caption">Kegiatan Bulan Bahasa 2024</div>
                    </div>
                    <div class="gallery-item">
                        <img src="./media/ekskultradisional.jpg" alt="Gallery 2">
                        <div class="gallery-caption">Penampilan Ekstrakurikurel Traditional Dance</div>
                    </div>
                    <div class="gallery-item">
                        <img src="./media/cakpras.jpg" alt="Gallery 3">
                        <div class="gallery-caption">Penampilan Siswa SMPN 1 Wagir</div>
                    </div>
                    <div class="gallery-item">
                        <img src="./media/purnawiyata.jpg" alt="Gallery 4">
                        <div class="gallery-caption">Kegiatan Purnawiyata 2024</div>
                    </div>
                    <div class="gallery-item">
                        <img src="./media/gurudanstaff.jpg" alt="Gallery 5">
                        <div class="gallery-caption">Kegiatan Guru dan Staff</div>
                    </div>
                    <div class="gallery-item">
                        <img src="./media/pemilihan ketos.jpg" alt="Gallery 6">
                        <div class="gallery-caption">Pemilihan ketua & wakil ketua osis 2024</div>
                    </div>
                </div>
            </div>
        </section>
    </main>

</body>