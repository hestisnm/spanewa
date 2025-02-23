<?php
include '../koneksi.php';

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    
    // Upload gambar
    $image = $_FILES['image']['name'];
    $target = "fasilitas/upload/" . basename($image);

    // Pastikan folder upload ada dan memiliki izin yang benar
    if (!is_dir("fasilitas/upload")) {
        mkdir("fasilitas/upload", 0777, true); // Membuat folder jika belum ada
    }

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        // Menyimpan data ke database
        $sql = "INSERT INTO fasilitas (title, image) VALUES ('$title', '$image')";
        if ($conn->query($sql) === TRUE) {
            header("Location: ../?page=fasilitas");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Gagal mengunggah gambar.";
    }
}
?>

<div class="form-container">
    <h2>Tambah fasilitas Baru</h2>
    <form method="POST" action="" enctype="multipart/form-data">
        <label for="title">Judul:</label>
        <input type="text" id="title" name="title" required>

        <label for="image">Gambar:</label>
        <input type="file" id="image" name="image" required>

        <button type="submit" name="submit">Simpan</button>
    </form>
</div>

<style>
    body {
        background: linear-gradient(135deg, rgba(139, 161, 227, 0.2), rgba(174, 179, 234, 0.4));
        font-family: 'Poppins', sans-serif;
        margin: 0;
        padding: 0;
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
    }

    /* Dekorasi */
    .bg-deco-1 {
        position: absolute;
        top: 60px;
        left: 60px;
        width: 250px;
        height: 250px;
        background: rgba(139, 161, 227, 0.3);
        border-radius: 50%;
        z-index: 0;
    }

    .bg-deco-2 {
        position: absolute;
        bottom: 60px;
        right: 60px;
        width: 180px;
        height: 180px;
        background: rgba(139, 161, 227, 0.2);
        border-radius: 50%;
        z-index: 0;
    }

    .form-container {
        background: white;
        padding: 25px;
        border-radius: 12px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        max-width: 400px;
        width: 100%;
        position: relative;
        z-index: 1;
    }

    h2 {
        color: rgb(75, 95, 170);
        font-size: 24px;
        text-align: center;
    }

    label {
        display: block;
        margin-top: 12px;
        font-weight: 600;
        color: #333;
        font-size: 14px;
    }

    input[type="text"],
    textarea,
    input[type="file"] {
        width: 100%;
        padding: 12px;
        margin-top: 5px;
        border: 1px solid #d1d1d1;
        border-radius: 8px;
        background-color: #f9f9f9;
        transition: 0.3s ease;
    }

    input[type="text"]:focus,
    textarea:focus,
    input[type="file"]:focus {
        border-color: rgb(139, 161, 227);
        background-color: #ffffff;
        outline: none;
        box-shadow: 0 0 5px rgba(139, 161, 227, 0.5);
    }

    button {
        margin-top: 20px;
        background-color: rgb(139, 161, 227);
        color: white;
        border: none;
        padding: 12px;
        border-radius: 8px;
        cursor: pointer;
        font-size: 14px;
        font-weight: 600;
        transition: background-color 0.3s ease;
        width: 100%;
    }

    button:hover {
        background-color: rgb(120, 140, 210);
    }


</style>