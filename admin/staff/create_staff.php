<?php
include '../koneksi.php';
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $bidang_kerja = $_POST['bidang_kerja'];
    // Upload gambar
    $image = $_FILES['image']['name'];
    $target = "upload/" . basename($image);
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        // Menyimpan data ke database
        $sql = "INSERT INTO staff (nama, bidang_kerja, image) VALUES ('$nama','$bidang_kerja', '$image')";
        if ($conn->query($sql) === TRUE) {
            header("Location: ../?page=staff");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Gagal mengunggah gambar.";
    }
}
?>

<div class="form-container">
    <h2>Tambah staff Baru</h2>
    <form method="POST" action="" enctype="multipart/form-data">
        <label for="nama">Nama Staff:</label>
        <input type="text" id="nama" name="nama" required>
        <label for="bidang_kerja">Bidang Kerja:</label>
        <input type="text" id="bidang_kerja" name="bidang_kerja" required>
        <label for="image">Gambar:</label>
        <input type="file" id="image" name="image" required>

        <button type="submit" name="submit">Simpan</button>
    </form>
</div>

<style>
    .form-container {
        background: white;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        font-family: 'Poppins', sans-serif;
        max-width: 500px;
        margin: 30px auto;
    }
    h2 {
        color: #333;
    }
    label {
        display: block;
        margin-top: 10px;
        font-weight: bold;
    }
    input[type="text"],
    textarea,
    input[type="file"] {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }
    button {
        margin-top: 15px;
        background-color: #4CAF50;
        color: white;
        border: none;
        padding: 10px 15px;
        border-radius: 5px;
        cursor: pointer;
    }
    button:hover {
        background-color: #45a049;
    }
</style>