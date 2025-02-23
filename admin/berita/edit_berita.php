<?php
include '../koneksi.php';
$id = $_GET['id'];
$sql = "SELECT * FROM news WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $author = $_POST['author'];
    
    $date = !empty($_POST['date']) ? $_POST['date'] : date('Y-m-d H:i:s');

    if ($_FILES['image']['name']) {
        $image = $_FILES['image']['name'];
        $target = "upload/" . basename($image);
        move_uploaded_file($_FILES['image']['tmp_name'], $target);
    } else {
        $image = $row['image'];
    }

    $sql = "UPDATE news SET title='$title', content='$content', author='$author', image='$image', date='$date' WHERE id=$id";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: ../?page=berita");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<div class="container">
    <h2>Edit Berita</h2>
    <div class="card">
        <form method="POST" action="" enctype="multipart/form-data">
            <label>Judul:</label>
            <input type="text" name="title" value="<?php echo htmlspecialchars($row['title']); ?>" required>

            <label>Konten:</label>
            <textarea name="content" required><?php echo htmlspecialchars($row['content']); ?></textarea>

            <label>Penulis:</label>
            <input type="text" name="author" value="<?php echo htmlspecialchars($row['author']); ?>" required>

            <label>Tanggal & Jam:</label>
            <input type="datetime-local" name="date" value="<?php echo date('Y-m-d\TH:i', strtotime($row['date'])); ?>" required>

            <label>Gambar:</label>
            <input type="file" name="image">
            <div class="preview">
                <img src="upload/<?php echo htmlspecialchars($row['image']); ?>" alt="Preview Gambar">
            </div>

            <button type="submit" name="submit">Update Berita</button>
        </form>
    </div>
</div>

<style>
    body {
        background: linear-gradient(135deg, rgb(231, 233, 250), rgb(139, 161, 227));
        font-family: 'Poppins', sans-serif;
        margin: 0;
        padding: 0;
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }

    .container {
        width: 100%;
        max-width: 500px;
        text-align: center;
    }

    h2 {
        color: rgb(139, 161, 227);
        font-size: 26px;
        margin-bottom: 20px;
        font-weight: bold;
    }

    .card {
        background: white;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        width: 100%;
        text-align: left;
        position: relative;
        border: 1px solid rgba(139, 161, 227, 0.4);
    }

    label {
        font-weight: 600;
        color: #555;
        font-size: 14px;
        margin-top: 10px;
        display: block;
    }

    input[type="text"], input[type="file"], input[type="datetime-local"], textarea {
        width: 100%;
        padding: 12px;
        margin-top: 5px;
        border: 1px solid #ddd;
        border-radius: 8px;
        font-size: 14px;
        transition: all 0.3s ease;
        background: #f8f9ff;
    }

    input:focus, textarea:focus {
        border-color: rgb(139, 161, 227);
        outline: none;
        background: #eef1ff;
    }

    textarea {
        height: 100px;
        resize: vertical;
    }

    .preview {
        margin-top: 10px;
        display: flex;
        justify-content: center;
    }

    .preview img {
        border-radius: 10px;
        border: 1px solid #ddd;
        max-width: 150px;
        height: auto;
    }

    button {
        margin-top: 20px;
        background: rgb(139, 161, 227);
        color: white;
        border: none;
        padding: 12px;
        border-radius: 8px;
        font-size: 16px;
        cursor: pointer;
        width: 100%;
        transition: 0.3s;
        font-weight: bold;
    }

    button:hover {
        background: rgb(120, 140, 207);
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(139, 161, 227, 0.3);
    }
</style>
    