<?php
// Pastikan kamu sudah mengonfigurasi database
$host = 'localhost';  // ganti dengan host database kamu
$db = 'nama_database'; // ganti dengan nama database
$user = 'username';    // ganti dengan username database
$pass = 'password';    // ganti dengan password database

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Mengambil jumlah murid
    $stmt = $pdo->query('SELECT COUNT(*) FROM murid');
    $jumlahMurid = $stmt->fetchColumn();

    // Mengambil jumlah guru
    $stmt = $pdo->query('SELECT COUNT(*) FROM guru');
    $jumlahGuru = $stmt->fetchColumn();

    // Mengambil jumlah staff
    $stmt = $pdo->query('SELECT COUNT(*) FROM staff');
    $jumlahStaff = $stmt->fetchColumn();

    // Mengambil jumlah ruang kelas
    $stmt = $pdo->query('SELECT COUNT(*) FROM ruang_kelas');
    $jumlahRuangKelas = $stmt->fetchColumn();

    // Mengambil status akreditasi
    $stmt = $pdo->query('SELECT status FROM akreditasi ORDER BY tanggal DESC LIMIT 1');
    $akreditasi = $stmt->fetchColumn();

    // Mengambil statistik pengunggahan data
    $stmt = $pdo->query('SELECT COUNT(*) FROM pengunggahan_data');
    $pengunggahan = $stmt->fetchColumn();

    // Mengambil jumlah ekstrakurikuler
    $stmt = $pdo->query('SELECT COUNT(*) FROM ekstrakurikuler');
    $jumlahEkstrakurikuler = $stmt->fetchColumn();

    // Mengirimkan data sebagai JSON
    echo json_encode([
        'jumlahMurid' => $jumlahMurid,
        'jumlahGuru' => $jumlahGuru,
        'jumlahStaff' => $jumlahStaff,
        'jumlahRuangKelas' => $jumlahRuangKelas,
        'akreditasi' => $akreditasi,
        'pengunggahan' => $pengunggahan,
        'jumlahEkstrakurikuler' => $jumlahEkstrakurikuler,
    ]);
} catch (PDOException $e) {
    echo json_encode(['error' => $e->getMessage()]);
}
?>
