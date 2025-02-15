<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="index.css" rel="stylesheet">
    <script src="search.js" defer></script>


<link href="@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
    crossorigin="anonymous"></script>

   
  </head>

  <body>
    <!-- navigasi -->
<nav class="navbar navbar-expand-lg bg-body-transparant sticky-top" style="font-size:0.8em">
  <div class="container-fluid">
    <a class="navbar-brand pe-35">
      <a href="index.php?page=home"> <img src="./media/logo_spanewa-removebg-preview (1).png" alt="Logo" width="40" height="auto" class="d-inline-block align-text-top"></a>
      <h5 style="color:white; font-size:1rem; margin: 5px;">SMPN 1 WAGIR</h5> 
    </a>
    

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item ps-2">
          <a class="nav-link active" aria-current="page" href="index.php?page=home"> BERANDA</a>
        </li>
        <li class="nav-item dropdown ps-2">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            PROFIL
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="index.php?page=profilsekolah">PROFIL SEKOLAH</a></li>
            <li><a class="dropdown-item" href="index.php?page=visimisi">VISI DAN MISI</a></li>
            <li><a class="dropdown-item" href="index.php?page=fasilitas">SARANA DAN PRASARANA</a></li>
          </ul>
        </li>
        <li class="nav-item ps-2"> 
          <a class="nav-link" href="index.php?page=ekstrakurikuler">EKTRAKURIKULER</a>
        </li>
        <li class="nav-item ps-2">
          <a class="nav-link" href="index.php?page=karyasiswa">KARYA SISWA</a>
        </li>
        <li class="nav-item ps-2">
          <a class="nav-link" href="index.php?page=prestasi">PRESTASI</a>
        </li>
        <li class="nav-item ps-2">
          <a class="nav-link" href="index.php?page=guru">GURU DAN STAFF</a>
        </li>
        <li class="nav-item dropdown ps-2">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            MEDIA
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="index.php?page=berita">BERITA </a></li>
            <li><a class="dropdown-item" href="index.php?page=agenda">AGENDA</a></li>
          </ul>
        </li>
        <li class="nav-item ps-2 pe-3">
        <a class="nav-link" href="index.php?page=galeri">GALERI</a>
        </li>
       <form class="d-flex" role="/search" method:"get">
        <input  style="width:180px;" class="form-control me-2" type="search" placeholder="Cari" aria-label="Search" >
        <button class="btn btn-outline-primary" type="submit">Cari</button>

      </form>
      </ul>
    </div>
  </div>
</nav>



<!-- aktif -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const currentPage = new URLSearchParams(window.location.search).get('page') || 'home';
    const navLinks = document.querySelectorAll('.navbar-nav .nav-link'); // Targetkan semua nav-link dalam navbar

    navLinks.forEach(link => {
        const href = link.getAttribute('href');
        
        // Cek apakah href link cocok dengan page saat ini
        if (href && href.includes(`page=${currentPage}`)) {
            link.classList.add('active'); // Tambahkan kelas active
        } else {
            link.classList.remove('active'); // Hapus kelas active dari link lainnya
        }
    });
});
</script>


<!-- scroll -->
  <script>
window.addEventListener('scroll', function () {
  const navbar = document.querySelector('.navbar');
  if (window.scrollY > 50) {
    navbar.classList.add('navbar-scrolled');
  } else {
    navbar.classList.remove('navbar-scrolled');
  }
});
</script>



     <!-- akhir -->
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
case 'upkp':
include './berita/upkp.php';
break;
case 'view';
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


<!-- footer -->
<footer class="bg-dark text-white pt-5 pb-4">

  <div class="container text-left text-md-left">
    <div class="container text-left text-md-left">
      <div class="row text-left text-md-left">
      
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
          <h5 class="text-uppercase mb-4 font-weight-bold text-white" style="text-underline-position: below;">TENTANG KAMI</h5>
          <hr class="my-4 border-warning" style="border-width: 3px;">
          <P>
            <a href="index.php?page=profilsekolah" class="text-secondary link-hover" style="text-decoration: none;">Profil Sekolah</a>
          </P>
          <P>
            <a href="index.php?page=visimisi" class="text-secondary link-hover" style="text-decoration: none;">Visi Misi</a>
          </P>
          <P>
            <a href="index.php?page=fasilitas" class="text-secondary link-hover" style="text-decoration: none;">Sarpras</a>
          </P>
          <P>
            <a href="index.php?page=guru" class="text-secondary link-hover" style="text-decoration: none;">Guru & Staff</a>
          </P>
          <P>
            <a href="index.php?page=ekstrakurikuler" class="text-secondary link-hover" style="text-decoration: none;">Ekstrakurikuler</a>
          </P>
          <P>
            <a href="index.php?page=prestasi" class="text-secondary link-hover" style="text-decoration: none;">Prestasi</a>
          </P>
        </div>

        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
          <h5 class="text-uppercase mb-4 font-weight-bold text-white" style="text-underline-position: below;">HUBUNGI KAMI</h5>
          <hr class="my-4 border-warning" style="border-width: 3px;">
          <P>
            <a href="#" class="text-secondary link-hover" style="text-decoration: none;">(0341) 801821</a>
          </P>
          <P>
            <a href="#" class="text-secondary link-hover" style="text-decoration: none;">smpn1wagir.sch.id</a>
          </P>
          <P>
            <a href="#" class="text-secondary link-hover" style="text-decoration: none;">Jl. Sitirejo, Lemah Duwur, Sitirejo, Kec. Wagir, Kabupaten Malang, Jawa Timur 65158</a>
          </P>
        </div>


        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
          <h5 class="text-uppercase mb-4 font-weight-bold text-white" style="text-underline-position: below;">MEDIA SOSIAL</h5>
          <hr class="my-4 border-warning" style="border-width: 3px;">
          <P>
            <a href="#" class="text-secondary link-hover" style="text-decoration: none;">Facebook</a>
          </P>
          <P>
            <a href="#" class="text-secondary link-hover" style="text-decoration: none;">Instagram</a>
          </P>
          <P>
            <a href="#" class="text-secondary link-hover" style="text-decoration: none;">Youtube</a>
          </P>
          <P>
            <a href="#" class="text-secondary link-hover" style="text-decoration: none;">Tiktok</a>
          </P>
        </div>

        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
          <h5 class="text-uppercase mb-4 font-weight-bold text-white" style="text-underline-position: below;">TENTANG KAMI</h5>
          
          <a style="color:white; text-decoration:none;" href="#"><hr class="my-4 border-warning" style="border-width: 3px;">
         Click disini<br>Bantu kami untuk memberikan pelayanan yang lebih baik</a>
        </div>
        </div>
        <div class="copyright">
                    <p>Copyright ©2024 All rights reserved | SMPN 1 Wagir</p>
                </div>
                </div>
      </div>
    </div>
  </div>
</footer>



<style>
  .link-hover:hover {
    color: white !important; 
    text-decoration: underline !important;
  }
</style>

    </div>
  </div>
 </footer>
 <!-- akhir footer -->



  </body>
</html>