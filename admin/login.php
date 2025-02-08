<?php
session_start();
if(isset($_SESSION['admin_username'])){
    header("location:dashboard.php");
} //kalau sdh login, tdk usah login kembali
include("koneksi.php");
$username = "";
$password = "";
$err = "";
if (isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    if($username == '' or $password == ''){
        $err .= "<li>Silahkan masukkan username dan password dengan benar!</li><br>";
    }
{
    if (empty($err)){
    $sql1 = "select * from admin where username = '$username'";
    $q1 = mysqli_query($koneksi, $sql1);
    $r1 = mysqli_fetch_array($q1);
    if ($r1['password'] != md5($password)){
        $err .= "<li>Akun tidak ditemukan</li>";
    }
    }
    if (empty($err)){
    $_SESSION['admin_username'] = $username;
    header("location:dashboard.php");
    exit();
    }
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>


<div class="container">
<div class="login">
<h3>Hallo, Selamat Datang Admin!</h3><br>
<?php
if($err){
    echo "<ul>$err</ul>";
}

?>
    <div id="app">
<div class="form">
        <form action="" method="post">
            <input type="text" style="background-color:Transparent; width: 250px; height:40px; border-radius:15px; border-color: white;" name="username" class="input" placeholder="Isikan username..."><br><br>
            <input type="password" style="background-color:Transparent; width: 250px; height:40px; border-radius:15px; border-color: white;" name="password" class="input" placeholder="Isikan Password..."><br><br>

            <input type="submit" style="width: 250px; height:40px; border-radius:15px; border-color: white" name="login" value="Masuk ke sistem">
</form>
        </div>
    </div>
    </div>
    </div>
</body>
</html>