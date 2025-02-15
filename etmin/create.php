<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $author = $_POST['author'];

    // Upload gambar
    $image = $_FILES['image']['name'];
    $target = "./media/" . basename($image);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        // Menyimpan data ke database
        $sql = "INSERT INTO news (title, content, author, image) VALUES ('$title', '$content', '$author', '$image')";
        if ($conn->query($sql) === TRUE) {
            header("Location: dashboard.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Gagal mengunggah gambar.";
    }
}
?>


<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Berita</title>
    <style>
        body {
            background: linear-gradient(135deg, rgb(174, 179, 234), #d4a5d4, #ff68a1);
            font-family: 'Comic Sans MS', cursive, sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .form-container {
            background: rgba(255, 255, 255, 0.9);
            padding: 25px;
            border-radius: 20px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            max-width: 350px;
            width: 100%;
            backdrop-filter: blur(10px);
            border: 2px solid rgb(174, 179, 234);
            animation: fadeIn 1s ease-in-out;
        }
        h2 {
            text-align: center;
            font-size: 24px;
            color: rgb(174, 179, 234);
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
            color: #5C4B8E;
            display: block;
            margin-bottom: 5px;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #d4a5d4;
            border-radius: 8px;
            margin-bottom: 15px;
        }
        button {
            background-color: rgb(174, 179, 234);
            color: white;
            border: none;
            padding: 10px 15px;
            font-size: 16px;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%;
        }
        button:hover {
            background-color: #a1a6e6;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Tambah Berita</h2>
        <form method="POST" action="" enctype="multipart/form-data">
            <div class="input-container">
                <label for="title">Judul:</label>
                <input type="text" name="title" id="title" required placeholder="Masukkan judul berita...">
            </div>
            <div class="input-container">
                <label for="content">Konten:</label>
                <textarea name="content" id="content" required placeholder="Tuliskan konten berita di sini..."></textarea>
            </div>
            <div class="input-container">
                <label for="author">Penulis:</label>
                <input type="text" name="author" id="author" required placeholder="Siapa penulisnya?">
            </div>
            <div class="input-container">
                <label for="image">Gambar:</label>
                <input type="file" name="image" id="image" required>
            </div>
            <button type="submit" name="submit">Simpan Berita!</button>
        </form>
    </div>
</body>
</html>
