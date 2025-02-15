<?php
$conn = new mysqli("localhost", "root", "", "spanewa_hesti");

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$month = date('n');
$year = date('Y');

// Cek apakah bulan & tahun ini sudah ada di database
$sqlCheck = "SELECT * FROM visitor_monthly WHERE month = $month AND year = $year";
$resultCheck = $conn->query($sqlCheck);

if ($resultCheck->num_rows > 0) {
    // Kalau sudah ada, update jumlahnya
    $sqlUpdate = "UPDATE visitor_monthly SET count = count + 1 WHERE month = $month AND year = $year";
    $conn->query($sqlUpdate);
} else {
    // Kalau belum ada, tambahkan data baru
    $sqlInsert = "INSERT INTO visitor_monthly (month, year, count) VALUES ($month, $year, 1)";
    $conn->query($sqlInsert);
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <!-- Link untuk Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            display: flex;
            height: 100vh;
            background-color: rgba(174, 179, 234, 0.29);
            overflow: hidden;
            font-family: 'Josefin Sans', sans-serif;
        }
      
    .sidebar {
        position: fixed;
        top: 0;
        left: 0;
        width: 230px;
        height: 100vh;
        background: white;
        color: black;
        padding: 20px;
        box-shadow: 2px 0 15px rgba(0, 0, 0, 0.1);
        overflow-y: auto; /* Menambahkan scrollbar jika konten lebih panjang */
        scrollbar-width: thin; /* Untuk Firefox */
        scrollbar-color:rgb(174, 179, 234);
        border-bottom-right-radius: 10px;
        border-top-right-radius: 10px;
    }
    
    /* Untuk Chrome, Edge, dan Safari */
    .sidebar::-webkit-scrollbar {
        width: 8px;
    }
    .sidebar::-webkit-scrollbar-thumb {
        border-radius: 10px;
    }
    .sidebar::-webkit-scrollbar-track {
        background: white;
    }

        .sidebar h2 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 24px;
            font-weight: 700;
        }

        .menu button {
            width: 190px;
            padding: 15px;
            margin: 10px 0;
            border: none;
            color: black;
            cursor: pointer;
            text-align: left;
            font-size: 16px;
            display: flex;
            align-items: center;
            gap: 15px;
            transition: all 0.3s;
            background-color: white;
        }
        .menu button i {
            font-size: 18px;
        }
          .menu button:hover {
          border-radius: 20px;
            background:rgb(174, 179, 234);
            color: black;
        }
        .content {
            flex: 1;
            margin-left: 230px;
            padding: 30px;
            background: color #f6f6f6;
            overflow-y: auto;
            height: 100vh;
            overflow-x: hidden;
            margin-bottom: 20px;
        }

        .kotak1 {
            background:white;
            padding: 70px;
            border-radius: 10px;
            margin-bottom: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.19);
            position: relative;
            z-index: 0;
        }
        .kotak1 h1 {
            font-size: 28px;
            margin-bottom: 10px;
        }
        .kotak1 p {
            font-size: 18px;
            color: #555;
        }

        .gambar img{
            position: absolute;
            z-index: 4;
            padding-left:570px; 
            height:180px;
            top: 10px;
        }
        /* sidebar kanan */
        .sidebar-right {
            position: absolute;
            z-index: 6;
            top: 0;
            right: -320px;
            width: 300px;
            height: 100vh;
            color: white;
            background-color: #161D6F;
            box-shadow: -2px 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            transition: right 0.3s ease;
            overflow-y: auto;
        }

        .sidebar-right.active {
            right: 0;
        }

        .profile-btn {
            cursor: pointer;
            font-size: 24px;
            color:rgb(127, 132, 184);
            padding-left: 800px;
            margin: 10px;
            display: flex;
            align-items: center;
            gap: 8px; /* Jarak antara ikon dan teks */
            cursor: pointer;
        }

        .profile-btn i {
        font-size: 24px;
        color: #161D6F;
    }

    .profile-btn p {
        margin: 0;
        font-size: 16px;
        color: #333;
        white-space: nowrap; /* Agar teks tetap dalam satu baris */
    }
        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
           width: auto;
            margin-bottom: 10px;
        }

        .form-group input[type="text"],
        .form-group input[type="password"],
        .form-group input[type="date"],
        .form-group input[type="file"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .profile-img {
            display: block;
            width: auto;
            height: 80px;
            margin-bottom: 10px;
            object-fit: cover;
        }

        button {
            background-color:rgb(132, 138, 209);
            color: white;
            border: none;
            padding: 10px;
            margin: 5px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color:rgb(178, 182, 227);
        }

        .calendar-box {
            display: flex;
            flex-wrap: wrap;
        }

        .date-box {
            width: calc(14.28% - 4px);
            margin: 2px;
            padding: 8px;
            text-align: center;
            border: 1px solid #ddd;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .date-box:hover {
            background-color: #f0f0f0;
            color: black;
        }

        .current-day {
            background-color:rgb(144, 150, 220);
            color: white;
            font-weight: bold;
            border-radius: 5px;
        }

        #currentDate {
            font-size: 14px;
            margin-bottom: 10px;
        }
/* selesai */

/* statistik sejarah */
        .statistik-box {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            margin-bottom: 30px;
        }
        .statistik-item {
            background: white;
            padding: 25px;
            border-radius: 30px;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s;
        }

        .statistik-item:hover {
            background-color: #161D6F;
            color: white
        }

        .statistik-item h3 {
            margin-bottom: 15px;
            font-size: 20px;
        }
        .statistik-item input {
            width: 40%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }
        .statistik-item button {
            padding: 10px 20px;
            border: none;
            background: rgb(174, 179, 234);
            color: white;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s;
        }
        .statistik-item button:hover {
            background: #5a69cc;
        }

        .chart-box {
            margin-top: 40px;
            padding: 25px;
            background-color: #f9f9f9;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            height: 200px;
        }

        .chart-box2{
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 20px;
            float: right;
            padding: 20px;
            width:500px;
            background-color: white;
        }

        .box{
            margin-top: 40px;
            padding: 20px;
            border-radius: 15px;
            display: flex;
            justify-content: space-between;
        }
        iframe {
            border-radius: 10px;
        }
    </style>
</head>
<body>

<div class="sidebar">
    <h2>Admin Panel</h2>
    <p style="text-align:center;">SPANEWA</p>
    <div class="menu">
        <button onclick="showPage('dashboard')"><i class="fas fa-chart-bar"></i> Dashboard</button>
        <button onclick="showPage('news')"><i class="fas fa-newspaper"></i> Berita</button>
        <button onclick="showPage('fasilitas1')"><i class="fas fa-tools"></i> Fasilitas</button>
        <button onclick="showPage('ekstrakurikuler')"><i class="fas fa-users"></i> Ekstrakurikuler</button>
        <button onclick="showPage('karya')"><i class="fas fa-paint-brush"></i> Karya Siswa</button>
        <button onclick="showPage('prestasi')"><i class="fas fa-trophy"></i> Prestasi</button>
        <button onclick="showPage('guru')"><i class="fas fa-chalkboard-teacher"></i> Guru dan Staff</button>
        <button onclick="showPage('agenda')"><i class="fas fa-calendar-alt"></i> Agenda</button>
        <button onclick="showPage('galeri')"><i class="fas fa-images"></i> Galeri</button>
        <button onclick="showPage('saran')"><i class="fas fa-comments"></i> Saran</button>
    </div>
</div>




    <div class="content">


        <!-- sidebar kanan -->
        
<div class="profile-btn" onclick="toggleProfileSidebar()">
    <i class="fas fa-user-circle"></i>
        <p>spanewa server</p>
</div>
<div class="sidebar-right" id="profileSidebar">
<div style="border: 1.6px solid white; padding: 10px; border-radius: 8px;" class="jarak1">
    <div style="margin: 10px;" class="isi">
        <h3 style="text-align:center;">Profil Admin</h3>
        <div style="text-align:center;" class="form-group">
            <label for="profileImage">Foto Profil:</label>
            <img style="padding-left:35px;" src="./media/admin1.png" alt="Profile" class="profile-img" id="profilePreview">
            <input type="file" id="profileImage" accept="image/*">
        </div>
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" id="username" value="Admin123">
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" value="password123">
        </div>
        </div>   

<div style="border: 1px solid white; padding: 10px; border-radius: 8px;" class="jarak">
        <div style="text-align: center;" class="calendar-container">
    <h4>Kalender Waktu Terkini</h4>
    <div id="currentDate"></div>
    <div id="calendar" class="calendar-box"></div>

    <button onclick="closeSidebar()">Tutup</button>
    <button onclick="saveSidebar()">Simpan</button>
    <button><a style="text-decoration: none; color:black;" href="logout.php" class="button">Logout</a></button>
</div>
</div>
        </div>
    </div>

    <script>

    function closeSidebar() {
        const sidebar = document.getElementById('profileSidebar');
        sidebar.classList.remove('active');
    }

        function toggleProfileSidebar() {
            const sidebar = document.getElementById('profileSidebar');
            sidebar.classList.toggle('active');
            updateCalendar();
        }

        function updateCurrentDate() {
            const now = new Date();
            const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric', hour: '2-digit', minute: '2-digit', second: '2-digit', hour12: false };
            document.getElementById('currentDate').innerText = now.toLocaleDateString('id-ID', options);
        }

        function generateCalendar() {
            const calendarElement = document.getElementById('calendar');
            calendarElement.innerHTML = '';
            const now = new Date();
            const currentMonth = now.getMonth();
            const currentYear = now.getFullYear();
            const currentDay = now.getDate();

            const lastDate = new Date(currentYear, currentMonth + 1, 0).getDate();

            for (let i = 1; i <= lastDate; i++) {
                const dateBox = document.createElement('div');
                dateBox.classList.add('date-box');
                dateBox.innerText = i;

                if (i === currentDay) {
                    dateBox.classList.add('current-day');
                }

                calendarElement.appendChild(dateBox);
            }
        }

        function updateCalendar() {
            updateCurrentDate();
            generateCalendar();
        }

        setInterval(updateCurrentDate, 1000);
    </script>

        <div id="dashboard" class="page">
        <div class="kotak1">
    <h1><i class="fas fa-chart-bar"></i> Hallo <span id="adminNameDisplay">Admin123</span>!</h1>
    <p>Selamat datang kembali di halaman dashboard.</p>
    <div class="gambar">
    <img src="./media/admin1.png" alt="admin" class="apa-img">
    </div>

    <script>
    function saveProfile() {
    const username = document.getElementById("username").value;
    alert(`Profil berhasil diperbarui!\nUsername: ${username}`);

    // Perbarui tampilan nama admin di sidebar dan kotak1
    document.getElementById("adminNameDisplay").innerText = username;
}
</script>
</div>

<h2 style="margin:20px">Statistik</h2>
            <div class="statistik-box">
                <div class="statistik-item">
                    <h3>Jumlah Siswa</h3>
                    <input type="number" id="siswa" value="1500" />
                    <button onclick="saveStat('siswa')">Simpan</button>
                </div>
                <div class="statistik-item">
                    <h3>Jumlah Alumni</h3>
                    <input type="number" id="alumni" value="1200" />
                    <button onclick="saveStat('alumni')">Simpan</button>
                </div>
                <div class="statistik-item">
                    <h3>Jumlah Guru</h3>
                    <input type="number" id="guru" value="100" />
                    <button onclick="saveStat('guru')">Simpan</button>
                </div>
                <div class="statistik-item">
                    <h3>Jumlah Ruang Kelas</h3>
                    <input type="number" id="ruangKelas" value="30" />
                    <button onclick="saveStat('ruangKelas')">Simpan</button>
                </div>

                <div class="statistik-item">
                    <h3>Akreditasi</h3>
                    <input type="text" id="akreditasi" value="A" />
                    <button onclick="saveStat('akreditasi')">Simpan</button>
                </div>

                <div class="statistik-item">
                    <h3>Jumlah Fasilitas</h3>
                    <input type="number" id="fasilitas" value="12" />
                    <button onclick="saveStat('fasilitas')">Simpan</button>
                </div>

                </div>


                <div class="chart-box2">
    <canvas id="visitorChart"></canvas>
    <p style="text-align: center; margin-top: 10px; font-size: 14px; color: #555;">
        Data per Tahun <?php echo date('Y'); ?>
    </p>
</div>
<script>
const monthNames = [
  'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
  'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
];

fetch('grafik_pengunjung.php')
  .then(response => response.json())
  .then(data => {
    console.log(data); // Buat ngecek isi datanya
    // ...lanjutan buat grafiknya
    const ctx = document.getElementById('visitorChart').getContext('2d');
    new Chart(ctx, {
      type: 'bar',
      data: {
        labels: data.month.map(m => monthNames[m = 1]), // index bulan dimulai dari 0
        datasets: [{
          label: 'Jumlah Pengunjung',
          data: data.count,
          backgroundColor: 'rgba(75, 192, 192, 0.5)',
          borderColor: 'rgba(75, 192, 192, 1)',
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  });

</script>

    <script>
        // JavaScript untuk menampilkan halaman yang relevan
        function showPage(pageId) {
            const pages = document.querySelectorAll('.page');
            pages.forEach(page => {
                page.style.display = 'none';
            });
            document.getElementById(pageId).style.display = 'block';
        }

       
        // Menampilkan dashboard secara default
        showPage('dashboard');
    </script>
</div>

<!-- berita -->
<div id="news" class="page" style="display: none;">
    <h2 style="color: #5C4B8E; text-align: center;">Berita Terkini</h2>
    <div style="text-align: center; margin-bottom: 15px; margin-top: 15px;">
        <a href="create.php" style="text-decoration: none; background-color: #a1a6e6; color: white; padding: 8px 12px; border-radius: 8px; font-size: 14px;">Tambah Berita</a>
    </div>
    <div style="overflow-x: auto;">
        <table style="width: 100%; border-collapse: collapse; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
            <thead style="background-color:rgb(139, 161, 227); color:rgb(0, 0, 0);">
                <tr>
                    <th style="padding: 12px;">No</th>
                    <th style="padding: 12px;">Judul</th>
                    <th style="padding: 12px;">Penulis</th>
                    <th style="padding: 12px;">Tanggal</th>
                    <th style="padding: 12px;">Gambar</th>
                    <th style="padding: 12px;">Aksi</th>
                </tr>
            </thead>
            <tbody id="beritaList" style="text-align: center;"></tbody>
        </table>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    function loadBerita() {
        fetch('view.php')
            .then(response => response.json())
            .then(data => {
                const beritaList = document.getElementById('beritaList');
                beritaList.innerHTML = '';
                data.forEach((berita, index) => {
                    const beritaRow = document.createElement('tr');
                    beritaRow.style.borderBottom = '1px solid #f3f3f3';
                    beritaRow.innerHTML = `
                        <td style="padding: 10px;">${index + 1}</td>
                        <td style="padding: 10px;">${berita.title}</td>
                        <td style="padding: 10px;">${berita.author}</td>
                        <td style="padding: 10px;">${berita.date}</td>
                        <td style="padding: 10px;"><img src="./media/${berita.image}" width="80" style="border-radius: 8px;"></td>
                        <td style="padding: 10px;">
                            <a href="view.php?id=${berita.id}" style="text-decoration: none; color: #5C4B8E;">Baca</a> |
                            <a href="edit.php?id=${berita.id}" style="text-decoration: none; color: #6d28d9;">Edit</a> |
                            <a href="dalate.php?id=${berita.id}" onclick="deleteBerita(${berita.id})" style="text-decoration: none; color: #ef4444;">Hapus</a>
                        </td>
                    `;
                    beritaList.appendChild(beritaRow);
                });
            });
    }

    function deleteBerita(id) {
    if (confirm('Yakin ingin hapus berita ini?')) {
        fetch(`delete.php?id=${id}`)
            .then(response => response.json())
            .then(data => {
                if (data.status === 'success') {
                    alert(data.message);
                    loadBerita();
                } else {
                    alert('Gagal menghapus berita: ' + data.message);
                }
            })
            .catch(error => {
                alert('Terjadi kesalahan: ' + error);
            });
    }
}

    loadBerita();
});
</script>



<!-- fasilitas -->
<div id="fasilitas1" class="page" style="display: none;">
    <h2 style="color: #5C4B8E; text-align: center;">Fasilitas Terkini</h2>
    <div style="text-align: center; margin-bottom: 15px; margin-top: 15px;">
        <a href="create.php" style="text-decoration: none; background-color: #a1a6e6; color: white; padding: 8px 12px; border-radius: 8px; font-size: 14px;">Tambah Fasilitas</a>
    </div>
    <div style="overflow-x: auto;">
        <table style="width: 100%; border-collapse: collapse; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
            <thead style="background-color:rgb(139, 161, 227); color:rgb(0, 0, 0);">
                <tr>
                    <th style="padding: 12px;">No</th>
                    <th style="padding: 12px;">Judul</th>
                    <th style="padding: 12px;">Penulis</th>
                    <th style="padding: 12px;">Tanggal</th>
                    <th style="padding: 12px;">Gambar</th>
                    <th style="padding: 12px;">Aksi</th>
                </tr>
            </thead>
            <tbody id="fasilitasList" style="text-align: center;"></tbody>
        </table>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    function loadFasilitas() {
        fetch('view_fasilitas.php')
            .then(response => response.json())
            .then(data => {
                const fasilitasList = document.getElementById('fasilitasList');
                fasilitasList.innerHTML = '';
                data.forEach((fasilitas, index) => {
                    const fasilitasRow = document.createElement('tr');
                    fasilitasRow.style.borderBottom = '1px solid #f3f3f3';
                    fasilitasRow.innerHTML = `
                        <td style="padding: 10px;">${index + 1}</td>
                        <td style="padding: 10px;">${fasilitas.title}</td>
                        <td style="padding: 10px;">${fasilitas.author}</td>
                        <td style="padding: 10px;">${fasilitas.date}</td>
                        <td style="padding: 10px;"><img src="./media/${fasilitas.image}" width="80" style="border-radius: 8px;"></td>
                        <td style="padding: 10px;">
                            <a href="view.php?id=${fasilitas.id}" style="text-decoration: none; color: #5C4B8E;">Baca</a> |
                            <a href="edit.php?id=${fasilitas.id}" style="text-decoration: none; color: #6d28d9;">Edit</a> |
                            <a href="dalate.php?id=${fasilitas.id}" onclick="deleteFasilitas(${fasilitas.id})" style="text-decoration: none; color: #ef4444;">Hapus</a>
                        </td>
                    `;
                    fasilitasList.appendChild(fasilitasRow);
                });
            });
    }

    function deleteFasilitas(id) {
    if (confirm('Yakin ingin hapus fasilitas ini?')) {
        fetch(`delete.php?id=${id}`)
            .then(response => response.json())
            .then(data => {
                if (data.status === 'success') {
                    alert(data.message);
                    loadFasilitas();
                } else {
                    alert('Gagal menghapus fasilitas: ' + data.message);
                }
            })
            .catch(error => {
                alert('Terjadi kesalahan: ' + error);
            });
    }
}

    loadFasilitas();
});
</script>




</div>
</body>
</html>
