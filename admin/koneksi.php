<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "spanewa_hesti";

$koneksi = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if(!$koneksi){
    die("koneksi sukses");
}
?>

<!-- berita -->
<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "spanewa_hesti";
$conn = new mysqli($host, $user, $password, $dbname);
if ($conn->connect_error) {
die("Koneksi gagal: " . $conn->connect_error);
}
?>