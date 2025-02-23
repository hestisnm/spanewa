
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        body{
            margin: 0;
            font-family: 'Josefin Sans', sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 60px;
            padding: 40px;
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
            padding-left:480px; 
            height:200px;
            top: 10px;
        }
        .statistik-box {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            margin-bottom: 30px;
        }
        .statistik-item {
            background: white;
            padding: 25px;
            border-radius: 10px;
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
       
        .calendar-container {
            background-color:rgb(174, 179, 234);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin-bottom: 10px;
            margin-top: 870px;
        }
        h1 {
            color:rgb(0, 0, 0);
        }
        p {
            font-size: 18px;
            color: #333;
        }
        
    </style>


<div id="dashboard" class="page">
    <!-- kalender -->

    <?php
  date_default_timezone_set('Asia/Jakarta');
  setlocale(LC_TIME, 'id_ID.utf8');
  $date = strftime ('%A, %d %B %Y');
?>

   

<div class="calendar-container">
        <h1>Hari Ini</h1>
        <p> <?php echo $date; ?></p>
        <p id="jam">Waktu: --:--:--</p>
        <p id="cuaca">Cuaca: Memuat...</p>
    </div>

    <script>
        function updateJam() {
            const jamElement = document.getElementById('jam');
            const now = new Date();
            const waktu = now.toLocaleTimeString('id-ID');
            jamElement.textContent = 'Waktu: ' + waktu;
        }

        function updateCuaca() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(position => {
                    const lat = position.coords.latitude;
                    const lon = position.coords.longitude;
                    fetch(`https://api.open-meteo.com/v1/forecast?latitude=${lat}&longitude=${lon}&current_weather=true`)
                        .then(response => response.json())
                        .then(data => {
                            const cuacaElement = document.getElementById('cuaca');
                            const suhu = data.current_weather.temperature;
                            const kondisi = data.current_weather.weathercode;
                            cuacaElement.textContent = `Cuaca: ${suhu}°C, Kondisi Kode ${kondisi}`;
                        })
                        .catch(() => {
                            document.getElementById('cuaca').textContent = 'Cuaca: Gagal memuat cuaca';
                        });
                });
            } else {
                document.getElementById('cuaca').textContent = 'Cuaca: Geolokasi tidak didukung';
            }
        }

        setInterval(updateJam, 1000);
        updateJam();
        updateCuaca();
    </script>



        <div class="kotak1">
    <h1><i class="fas fa-chart-bar"></i> Hallo <span id="adminNameDisplay">Admin Spanewa</span>!</h1>
    <p>Selamat datang kembali di halaman dashboard.</p>
    <div class="gambar">
    <img src="admin cwk.png" alt="admin" class="apa-img">
    </div>

</div>

<h2 style="margin:20px">Statistik</h2>
            <div class="statistik-box">
                <div class="statistik-item">
                    <h3>Jumlah Siswa</h3>
                    <input type="number" id="siswa" value="1500" />
                    <button onclick="saveStat('siswa')">Simpan</button>
                </div>
                <div class="statistik-item">
                    <h3>Jumlah Guru</h3>
                    <input type="number" id="alumni" value="1200" />
                    <button onclick="saveStat('alumni')">Simpan</button>
                </div>
                <div class="statistik-item">
                    <h3>Jumlah Staff</h3>
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


</div>




</body>
</html>