
    <link href="ekstrakurikuler.css" rel="stylesheet">
</head>
<body>
<div class="banner">
<div class="hero">
<img style="height:300px; width:100%; object-fit:cover;" src="./media/Wireframe - 6 (2).png"></div>
            <div class="judul">
            <h2><B>EKSTRAKURIKULER</B></h2> 
            <div class="garis"></div>
            </div>
            </div>

            <div class="activities">
            <?php
include './admin/koneksi.php';
$sql = "SELECT * FROM ekstrakurikuler";
$result = $conn->query($sql);

$ekstrakurikuler = [];
while ($row = $result->fetch_assoc()) 
    ?>