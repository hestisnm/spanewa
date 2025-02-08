<?php
session_start();
if (!isset($_SESSION['admin_username'])) {
    header("location:login.php");
    exit();
}
?>

<link href="dashboard.css" rel="stylesheet">

<div class="semua">
    <div class="kecil">
    <a>
        <li><href="#"><img src="../media/home.png"></li></a>
        <li><href="#"><img src="../media/more.png"></li></a>
        <li><href="#"><img src="../media/saran.png"></li></a>
    </ul>
    </div>

    



</div>