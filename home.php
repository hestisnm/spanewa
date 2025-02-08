<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="home.css" rel="stylesheet">
</head>
<body>
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

