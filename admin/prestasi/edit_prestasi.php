<?php
include '../koneksi.php';
$id = $_GET['id'];
$sql = "SELECT * FROM prestasi WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $author = $_POST['author'];

    // Ambil tanggal dari input, jika kosong gunakan data dari database atau tanggal saat ini
    $date = !empty($_POST['date']) ? $_POST['date'] : date('Y-m-d\TH:i');

    if ($_FILES['image']['name']) {
        // Update gambar jika ada gambar baru
        $image = $_FILES['image']['name'];
        $target = "upload/" . basename($image);
        move_uploaded_file($_FILES['image']['tmp_name'], $target);
    } else {
        // Jika tidak ada gambar baru, gunakan gambar lama
        $image = $row['image'];
    }

    $sql = "UPDATE prestasi SET title='$title', content='$content', author='$author', image='$image', date='$date' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../?>prestasi");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<h2>Edit Prestasi</h2>

<form method="POST" action="" enctype="multipart/form-data">
    <label>Nama Prestasi:</label>
    <input type="text" name="title" value="<?php echo htmlspecialchars($row['title']); ?>" required>

    <label>Deskripsi Umum:</label>
    <textarea name="content" required><?php echo htmlspecialchars($row['content']); ?></textarea>

    <label>Penulis:</label>
    <input type="text" name="author" value="<?php echo htmlspecialchars($row['author']); ?>" required>

    <label>Tanggal:</label>
    <input type="datetime-local" id="date" name="date" required>

    <label>Gambar:</label>
    <input type="file" name="image">
    <img src="upload/<?php echo htmlspecialchars($row['image']); ?>" width="100">

    <button type="submit" name="submit">Update</button>
</form>

<!-- SCRIPT UNTUK MENAMPILKAN TANGGAL DARI DATABASE -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        let dateInput = document.getElementById("date");

        // Ambil data tanggal dari PHP
        let existingDate = "<?php echo $row['date'] ?? ''; ?>";

        if (existingDate) {
            // Format ulang tanggal dari database agar cocok dengan input datetime-local
            dateInput.value = existingDate.replace(" ", "T");
        } else {
            // Jika tidak ada data di database, gunakan waktu saat ini
            let now = new Date();
            let formattedDate = now.toISOString().slice(0, 16);
            dateInput.value = formattedDate;
        }
    });
</script>

<style>
    body {
        background: rgb(139, 161, 227);
        font-family: 'Poppins', sans-serif;
        margin: 0;
        padding: 0;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }

    h2 {
        color: rgb(139, 161, 227);
        font-size: 24px;
        margin-bottom: 15px;
        font-weight: bold;
        text-align: center;
    }

    form {
        background: white;
        padding: 25px;
        border-radius: 12px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        max-width: 450px;
        width: 100%;
        text-align: left;
        border: 1px solid rgba(139, 161, 227, 0.4);
    }

    label {
        font-weight: 600;
        color: #555;
        font-size: 14px;
        margin-top: 10px;
        display: block;
    }

    input[type="text"],
    textarea,
    input[type="file"],
    input[type="datetime-local"] {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        border: 1px solid #ddd;
        border-radius: 8px;
        font-size: 14px;
        transition: all 0.3s ease;
        background: #f8f9ff;
    }

    textarea {
        height: 100px;
        resize: none;
    }

    input:focus,
    textarea:focus {
        border-color: rgb(139, 161, 227);
        outline: none;
        background: #eef1ff;
    }

    img {
        margin-top: 10px;
        border-radius: 8px;
        border: 1px solid #ddd;
        max-width: 150px;
        height: auto;
        display: block;
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
