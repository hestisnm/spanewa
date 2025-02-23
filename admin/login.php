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
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
</head>
<body class="bg-blue-100 flex items-center justify-center min-h-screen">
    <div class="bg-white rounded-lg shadow-lg flex max-w-4xl w-full">
        <!-- Left Side - Login Form -->
        <div class="w-1/2 p-8">
            <div class="flex items-center mb-8">
                <img alt="Logo" class="mr-2" height="40" src="admin_icon.png" width="40"/>
                <h1 class="text-2xl font-bold">Login Admin</h1>
            </div>

            <?php if ($err): ?>
                <div class="bg-red-100 text-red-700 p-4 mb-4 rounded-lg">
                    <ul><?php echo $err; ?></ul>
                </div>
            <?php endif; ?>

            <form action="" method="post">
                <div class="mb-4">
                    <label class="block text-gray-700">Username</label>
                    <input type="text" name="username" class="w-full border border-gray-300 p-2 rounded-lg" placeholder="Username" value="<?php echo htmlspecialchars($username); ?>" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Password</label>
                    <input type="password" name="password" class="w-full border border-gray-300 p-2 rounded-lg" placeholder="Password" required>
                </div>
                <button type="submit" name="login" class="w-full bg-blue-700 text-white py-2 px-4 rounded-lg flex items-center justify-center">
                    Log in
                    <i class="fas fa-arrow-right ml-2"></i>
                </button>
            </form>
        </div>

        <!-- Right Side - Information Section -->
        <div class="w-1/2 bg-white  p-8 rounded-r-lg flex flex-col justify-center items-center">
            <img alt="Illustration" class="mt-8" height="400" src="../media/Screenshot_2025-02-12_192529-removebg-preview.png" width="400"/>
        </div>
    </div>
</body>
</html>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
    scroll-behavior: smooth;
}

body{
    font-family: 'poppins';
}
body {
    background-color: #eef2ff;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    margin: 0;
}

.bg-white {
    background-color: #ffffff;
    border-radius: 12px;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
}

input[type="text"], input[type="password"] {
    border: 1px solid #d1d5db;
    padding: 10px;
    border-radius: 8px;
    width: 100%;
    transition: border-color 0.3s ease;
}

input[type="text"]:focus, input[type="password"]:focus {
    outline: none;
    border-color: #6366f1;
    box-shadow: 0 0 5px rgba(99, 102, 241, 0.2);
}

button[type="submit"] {
    background-color: #4f46e5;
    color: white;
    padding: 12px;
    border-radius: 8px;
    display: flex;
    justify-content: center;
    align-items: center;
    font-weight: bold;
    transition: background-color 0.3s ease;
}

button[type="submit"]:hover {
    background-color: #4338ca;
}

.bg-red-100 {
    background-color: #fee2e2;
    color: #b91c1c;
    border-radius: 8px;
    padding: 12px;
    margin-bottom: 16px;
}

label {
    font-weight: 500;
    margin-bottom: 8px;
    display: block;
    color: #374151;
}

.text-2xl {
    font-size: 1.5rem;
    font-weight: bold;
    color: #1f2937;
}

.w-1\/2 {
    width: 50%;
}

.max-w-4xl {
    max-width: 900px;
}

img {
    object-fit: contain;
}

.flex {
    display: flex;
}

.items-center {
    align-items: center;
}

.justify-center {
    justify-content: center;
}

.p-8 {
    padding: 2rem;
}

.mt-8 {
    margin-top: 2rem;
}

.mb-4 {
    margin-bottom: 1rem;
}

.mb-8 {
    margin-bottom: 2rem;
}

.rounded-lg {
    border-radius: 12px;
}

.rounded-r-lg {
    border-top-right-radius: 12px;
    border-bottom-right-radius: 12px;
}

.border-gray-300 {
    border-color: #d1d5db;
}

.text-gray-700 {
    color: #374151;
}

.text-red-700 {
    color: #b91c1c;
}

.bg-blue-700 {
    background-color: #1d4ed8;
}

.bg-blue-100 {
    background-color: #dbeafe;
}

</style>