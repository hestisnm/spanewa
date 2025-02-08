<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMP Negeri 1 Wagir</title>
    <link href="https://fonts.googleapis.com/css2?family=Inknut+Antiqua:wght@400;700&family=Konkhmer+Sleokchher&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="navbar.css">
    <script src="js/search.js"></script>
</head>
<body>
<nav class="navbar">
        <div class="nav-container">
            <div class="nav-logo">
                <a href="index.php?page=home"><img src="./media/logo_spanewa-removebg-preview (1).png" alt="Logo SMPN 1 Wagir"></a>
            </div>
            <div class="nav-links">
                <a href="index.php?page=home" class="nav-link">BERANDA</a>
                <div class="dropdown">
                    <a href="#" class="nav-link">PROFIL<i class="fas fa-chevron-down"></i></a>
                    <div class="dropdown-content">
                        <a href="index.php?page=profilsekolah">Profil Sekolah</a>
                        <a href="index.php?page=visimisi">Visi & Misi</a>
                        <a href="index.php?page=fasilitas">Fasilitas</a>
                    </div>
                </div>
                <a href="index.php?page=ekstrakurikuler" class="nav-link">EKSTRAKURIKULER</a>
                <a href="index.php?page=karyasiswa" class="nav-link">KARYA SISWA</a>
                <a href="index.php?page=prestasi" class="nav-link">PRESTASI</a>
                <a href="index.php?page=guru" class="nav-link">GURU DAN STAFF</a>
                <div class="dropdown">
                    <a href="#" class="nav-link">MEDIA<i class="fas fa-chevron-down"></i></a>
                    <div class="dropdown-content">
                        <a href="index.php?page=berita">Berita</a>
                        <a href="index.php?page=agenda">Agenda</a>
                    </div>
                </div>
                <a href="index.php?page=galeri" class="nav-link">GALERI</a>
            </div>
            <div class="search-container">
                <button class="search-btn" onclick="openSearchPopup()">
                    <i class="fas fa-search"></i>
                </button>
            </div>
            <div class="menu-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>

    <!-- bagiancontent -->
    <?php
// Menggunakan switch case untuk memuat halaman
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
switch ($page)   {
case 'home':
include 'home.php';
break;
case 'profilsekolah':
include 'profilsekolah.php';
break;
case 'sambutan':
include 'sambutan.php';
break;
case 'visimisi':
include 'visimisi.php';
break;
case 'fasilitas':
include 'fasilitas.php';
break;
case 'ekstrakurikuler':
include 'ekstrakurikuler.php';
break;
case 'prestasi':
include 'prestasi.php';
break;
case 'feedback':
include 'feedback.php';
break;
case 'karyasiswa':
include 'karyasiswa.php';
break;
case 'guru':
include 'guru.php';
break;
case 'logosejarah':
include 'logosejarah.php';
break;
case 'berita':
include 'berita.php';
break;
case 'view':
include 'view.php';
break;
case 'agenda':
include 'agenda.php';
break;
case 'galeri':
include 'galeri.php';
break;
default:
echo "<p>Halaman tidak ditemukan!</p>";
break;
}
?>
</div>

        <footer class="footer">
            <div class="container">
                <div class="footer-content">
                    <div class="footer-section">
                        <h3 class="footer-title">Tentang Kami</h3>
                        <ul>
                            <li><a href="index.php?page=home">Beranda</a></li>
                            <li><a href="index.php?page=profilsekolah">Profil Sekolah</a></li>
                            <li><a href="index.php?page=visimisi">Visi & Misi</a></li>
                            <li><a href="index.php?page=fasilitas">Fasilitas</a></li>
                            <li><a href="index.php?page=guru">Guru & Staff</a></li>
                            <li><a href="index.php?page=ekstrakurikuler">Ekstrakurikuler</a></li>
                            <li><a href="index.php?page=prestasi">Prestasi</a></li>
                        </ul>
                    </div>

                    <div class="footer-section">
                        <h3 class="footer-title">Hubungi Kami</h3>
                        <ul class="contact-links">
                            <li>
                                <a href="tel:+0341801821" target="_blank">
                                    <i class="fas fa-phone"></i>
                                    (0341) 801821
                                </a>
                            </li>
                            <li>
                                <a href="mailto:info@smpn1wagir.sch.id" target="_blank">
                                    <i class="fas fa-envelope"></i>
                                    info@smpn1wagir.sch.id
                                </a>
                            </li>
                            <li>
                                <a href="https://maps.app.goo.gl/cvNTndcsA4PdpEyb7" target="_blank">
                                    <i class="fas fa-map-marker-alt"></i>
                                    Jl. Sitirejo, Lemah Duwur, Sitirejo, Kec. Wagir, Kabupaten Malang, Jawa Timur
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="footer-section">
                        <h3 class="footer-title">Media Sosial</h3>
                        <ul class="social-media-links">
                            <li>
                                <a href="#" target="_blank"><i class="fab fa-facebook-f"></i> Facebook</a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/spanewaofficial/?utm_source=ig_web_button_share_sheet" target="_blank"><i class="fab fa-instagram"></i> Instagram</a>
                            </li>
                            <li>
                                <a href="https://youtube.com/@smpnegeri1wagir642?si=4JywYybFbXPCoxIB" target="_blank"><i class="fab fa-youtube"></i> Youtube</a>
                            </li>
                            <li>
                                <a href="https://www.tiktok.com/@spanewaofficial?is_from_webapp=1&sender_device=pc" target="_blank"><i class="fab fa-tiktok"></i> TikTok</a>
                            </li>
                        </ul>
                    </div>

                    <div class="footer-section">
                        <h3 class="footer-title">Kritik & Saran</h3>
                        <a href="feedback.php" target="_blank" class="feedback-link">Click Disini</a>
                        <p class="feedback-text">Bantu kami memberikan pelayanan yang lebih baik💕</p>
                    </div>
                </div>
                
                <div class="copyright">
                    <p>Copyright ©2024 All rights reserved | SMPN 1 Wagir</p>
                </div>
            </div>
        </footer>
    </div>

    <!-- pop up search -->
    <div id="searchPopup" class="search-popup">
        <div class="search-popup-content">
            <form action="search.php" method="GET">
                <input type="text" name="query" placeholder="Search...">
                <button type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>
    </div>

    <!-- scroll ke atas -->
    <button id="scrollToTop" class="scroll-to-top">
        <i class="fas fa-arrow-up"></i>
    </button>

    <script>

        const scrollToTopBtn = document.getElementById("scrollToTop");

        window.onscroll = function() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                scrollToTopBtn.classList.add("show");
            } else {
                scrollToTopBtn.classList.remove("show");
            }
        };

        scrollToTopBtn.addEventListener("click", function() {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        });

        // aktifkan link navigasi berdasarkan halaman saat ini
        document.addEventListener('DOMContentLoaded', function() {
            const currentPage = new URLSearchParams(window.location.search).get('page') || 'home';
        const navLinks = document.querySelectorAll('.nav-links .nav-link');
        
        // tentukan halaman mana yang termasuk ke dalam dropdown parent
        const dropdownGroups = {
            'profil': ['profilsekolah', 'visimisi', 'fasilitas'],
            'media': ['berita', 'agenda']
        };

        navLinks.forEach(link => {
            const href = link.getAttribute('href');
            
            // aktifkan dropdown parent
            for (const [parent, children] of Object.entries(dropdownGroups)) {
                if (children.includes(currentPage)) {
                    const parentLink = link.textContent.toLowerCase().includes(parent);
                    if (parentLink) {
                        link.classList.add('active');
                        return;
                    }
                }
            }

            // Handle regular links
            if (href && href.includes(`page=${currentPage}`)) {
                link.classList.add('active');
            } else {
                link.classList.remove('active');
            }
        });
    });

    const menuToggle = document.querySelector('.menu-toggle');
    const navLinks = document.querySelector('.nav-links');

    menuToggle.addEventListener('click', () => {
        navLinks.classList.toggle('active');
    });

    </script>
</body>
</html>
