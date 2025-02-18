<?php 
session_start();
if (!isset($_SESSION['admin_username'])) {
    header("location:login.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar Admin Dinamis</title>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            margin: 0;
            font-family: 'Josefin Sans', sans-serif;
        }

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: 180px;
            height: 100vh;
            background: white;
            color: black;
            padding: 20px;
            box-shadow: 2px 0 15px rgba(0, 0, 0, 0.1);
            overflow-y: auto;
            scrollbar-width: thin;
            scrollbar-color: rgb(174, 179, 234);
            border-bottom-right-radius: 10px;
            border-top-right-radius: 10px;
        }

        .sidebar::-webkit-scrollbar {
            width: 8px;
        }
        .sidebar::-webkit-scrollbar-thumb {
            background: rgb(174, 179, 234);
            border-radius: 10px;
        }
        .sidebar::-webkit-scrollbar-track {
            background: white;
        }

        .sidebar .logo-container {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 30px;
        }

        .sidebar .logo-container img {
            height: 30px;
        }

        .sidebar .logo-container span {
            font-size: 24px;
            font-weight: 700;
        }

        .menu a {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 15px;
            margin: 5px 0;
            color: black;
            text-decoration: none;
            font-size: 16px;
            transition: all 0.3s;
            border-radius: 10px;
        }

        .menu a:hover, .menu a.active {
            background-color: rgb(174, 179, 234);
            color: black;
        }

        .menu i {
            font-size: 18px;
        }

        .content {
            margin-left: 220px;
            padding: 20px;
        }
    </style>
</head>
<body>

<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';
?>

<nav class="sidebar">
    <div class="logo-container">
        <img src="media/logo_spanewa-removebg-preview (1).png" alt="Logo">
        <span>SPANEWA</span>
    </div>
    <div class="menu">
        <a href="index.php?page=dashboard" class="<?= ($page == 'dashboard') ? 'active' : '' ?>"><i class="fas fa-chart-bar"></i>Dashboard</a>
        <a href="index.php?page=agenda" class="<?= ($page == 'agenda') ? 'active' : '' ?>"><i class="fas fa-calendar-alt"></i>Agenda</a>
        <a href="index.php?page=berita" class="<?= ($page == 'berita') ? 'active' : '' ?>"><i class="fas fa-newspaper"></i>Berita</a>
        <a href="index.php?page=ekstrakurikuler" class="<?= ($page == 'ekstrakurikuler') ? 'active' : '' ?>"><i class="fas fa-users"></i>Ekstrakurikuler</a>
        <a href="index.php?page=fasilitas" class="<?= ($page == 'fasilitas') ? 'active' : '' ?>"><i class="fas fa-tools"></i>Fasilitas</a>
        <a href="index.php?page=karya" class="<?= ($page == 'karya_siswa') ? 'active' : '' ?>"><i class="fas fa-paint-brush"></i>Karya Siswa</a>
        <a href="index.php?page=prestasi" class="<?= ($page == 'prestasi') ? 'active' : '' ?>"><i class="fas fa-trophy"></i>Prestasi</a>
        <a href="index.php?page=guru" class="<?= ($page == 'guru') ? 'active' : '' ?>"><i class="fas fa-chalkboard-teacher"></i>Guru</a>
        <a href="index.php?page=kepsek" class="<?= ($page == 'kepsek') ? 'active' : '' ?>"><i class="fas fa-chalkboard-teacher"></i>Staff</a>
        <a href="index.php?page=staff" class="<?= ($page == 'staff') ? 'active' : '' ?>"><i class="fas fa-chalkboard-teacher"></i>Kepsek</a>
        <a href="index.php?page=galeri" class="<?= ($page == 'galeri') ? 'active' : '' ?>"><i class="fas fa-images"></i>Galeri</a>
        <a href="index.php?page=feedback" class="<?= ($page == 'feedback') ? 'active' : '' ?>"><i class="fas fa-comments"></i>Saran</a>
        <a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
    </div>
</nav>

<div class="content">
    <?php
    switch ($page) {
        case 'dashboard':
            include 'dashboard.php';
            break;
        case 'agenda':
            include 'agenda/tampil_agenda.php';
            break;
        case 'berita':
            include 'berita/tampil_berita.php';
            break;
        case 'ekstrakurikuler':
            include 'ekstrakurikuler/tampil_ekskul.php';
            break;
        case 'fasilitas':
            include 'fasilitas/tampil_fasilitas.php';
            break;
        case 'karya':
            include 'karya_siswa/tampil_karya.php';
            break;
        case 'prestasi':
            include 'prestasi/tampil_prestasi.php';
            break;
        case 'guru':
            include 'guru/tampil_guru.php';
            break;
        case 'kepsek':
            include 'kepsek/tampil_kepsek.php';
            break;
        case 'staff':
            include 'staff/tampil_staff.php';
            break;
        case 'galeri':
            include 'galeri/tampil_galeri.php';
            break;
        case 'feedback':
            include 'feedback/tampil_feedback.php';
            break;
        default:
            echo "<p>Halaman tidak ditemukan!</p>";
            break;
    }
    ?>
</div>

</body>
</html>
