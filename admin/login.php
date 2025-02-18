<?php 
session_start();

include("koneksi.php");
$username = "";
$password = "";
$err = "";
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username == '' || $password == '') {
        $err .= "<li>Silahkan masukkan username dan password dengan benar!</li><br>";
    } else {
        $sql1 = "SELECT * FROM admin WHERE username = '$username'";
        $q1 = mysqli_query($conn, $sql1);
        $r1 = mysqli_fetch_array($q1);
        if (!$r1 || $r1['password'] != md5($password)) {
            $err .= "<li>Akun tidak ditemukan atau password salah</li>";
        } else {
            $_SESSION['admin_username'] = $username;
            header("location:index.php");
            exit();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: rgb(139, 161, 227);
            margin: 0;
            padding: 0;
            display: flex;
            height: 100vh;
            justify-content: center;
            align-items: center;
        }
        .login-container {
            background: #ffffff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .login-container img {
            width: 100px;
            margin-bottom: 15px;
        }
        .input-field {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid rgb(139, 161, 227);
            border-radius: 8px;
        }
        .btn-login {
            background-color: rgb(139, 161, 227);
            color: white;
            border: none;
            padding: 10px;
            border-radius: 8px;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.3s;
        }
        .btn-login:hover {
            background-color: rgb(109, 130, 206);
        }
        .error-message {
            color: red;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="Admin Icon">
        <h3>Login Admin</h3>
        <?php if ($err): ?>
            <div class="error-message">
                <ul><?php echo $err; ?></ul>
            </div>
        <?php endif; ?>
        <form action="" method="post">
            <input type="text" class="input-field" name="username" placeholder="Username" value="<?php echo htmlspecialchars($username); ?>">
            <input type="password" class="input-field" name="password" placeholder="Password">
            <button type="submit" class="btn-login" name="login">Masuk</button>
        </form>
    </div>
</body>
</html>
