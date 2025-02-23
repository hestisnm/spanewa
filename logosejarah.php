<link href="logosejarah.css" rel="stylesheet">

<div class="container">
    <div class="section-title">
        <h2>LOGO DAN SEJARAH SEKOLAH</h2>
        <div class="garis"></div>
    </div>

    <div class="content-wrapper">
        <div class="container-logo">
            <img src="./media/logo_spanewa-removebg-preview (1).png" alt="Logo SMPN 1 Wagir" class="school-logo">
        </div>
        
        <div class="history-content">
            <h3>SEJARAH SMP NEGERI 1 WAGIR</h3>
            
            <div class="history-section">
                <h4>Awal Mula Perjalanan</h4>
                <p>SMP Negeri 1 Wagir memulai perjalanan pendidikannya pada tanggal 1 Juli 1983, ditandai dengan terbitnya SK Menteri Pendidikan dan Kebudayaan Nomor 0472/C/1983. Berlokasi strategis di Jalan Raya Wagir No. 71, sekolah ini awalnya hanya memiliki 3 ruang kelas dengan 80 siswa pionir yang penuh semangat untuk menimba ilmu.</p>
            </div>

            <div class="history-section">
                <h4>Perkembangan dan Transformasi</h4>
                <p>Berkat dukungan pemerintah melalui Anggaran Rutin dan partisipasi aktif masyarakat melalui BP-3, SMP Negeri 1 Wagir bertransformasi menjadi institusi pendidikan modern. Sekolah mengalami beberapa perubahan nama yang signifikan, termasuk menjadi SLTP Negeri 1 Wagir pada tahun 1997 melalui SK Nomor 034/O/1997, sebelum akhirnya kembali menggunakan nama SMP Negeri 1 Wagir pada tahun 2004.</p>
            </div>

            <div class="history-section">
                <h4>Pencapaian Gemilang</h4>
                <p>Tahun ajaran 2007-2008 menjadi tonggak sejarah ketika sekolah ini meraih status prestisius sebagai Sekolah Standar Nasional (SSN). Kini, SMP Negeri 1 Wagir berkembang pesat dengan 20 kelompok belajar dan total 766 siswa, menegaskan posisinya sebagai salah satu institusi pendidikan terkemuka di Kabupaten Malang.</p>
            </div>

            <div class="facility-section">
                <h4>Fasilitas Modern</h4>
                <div class="facility-grid">
                    <div class="facility-column">
                        <h5>Ruang Pembelajaran</h5>
                        <ul>
                            <li>20 Ruang Kelas Modern</li>
                            <li>Laboratorium IPA</li>
                            <li>Laboratorium Komputer</li>
                            <li>Laboratorium Bahasa</li>
                            <li>Ruang Multimedia</li>
                            <li>Perpustakaan Digital</li>
                        </ul>
                    </div>
                    <div class="facility-column">
                        <h5>Ruang Administrasi</h5>
                        <ul>
                            <li>Ruang Kepala Sekolah</li>
                            <li>Ruang Guru</li>
                            <li>Ruang Tata Usaha</li>
                            <li>Ruang BK</li>
                            <li>Ruang Staf</li>
                            <li>Fasilitas Pendukung</li>
                        </ul>
                    </div>
                </div>
            </div>
           
            

            <div class="leadership-section">
                <h4>Estafet Kepemimpinan</h4>
                <?php
    include './admin/koneksi.php';
    
    // Fetch news from database
    $sql = "SELECT * FROM kepsek ORDER BY date DESC";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
    ?>

                <div class="leadership-timeline">
                    <div class="timeline-item">
                        <span class="year"><?php echo $row['tanggal']; ?></span>
                        <span class="leader"><?php echo $row['nama']; ?></span>
                    </div>
                   
               
                
                    <?php
        }
        
    } else {
        echo "<p>Belum ada Daftar Guru</p>";
    }
    $conn->close();
    ?>
      
      </div>
                </div>
            
                </div>         
                </div>

