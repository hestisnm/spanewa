<?php
include '../koneksi.php';
$id = $_GET['id'];
$sql = "SELECT * FROM karya_siswa WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $nama = $_POST['nama'];

    // Ambil tanggal saat ini jika tidak diinput oleh user
    $date = !empty($_POST['date']) ? $_POST['date'] : date('Y-m-d H:i:s');

    if ($_FILES['image']['name']) {
        $image = $_FILES['image']['name'];
        $target = "upload/" . basename($image);
        move_uploaded_file($_FILES['image']['tmp_name'], $target);
    } else {
        $image = $row['image'];
    }

    $sql = "UPDATE karya_siswa SET title='$title', author='$author', image='$image', nama='$nama', date='$date' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../?>karya_siswa");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<div class="container">
    <h2>Edit Karya Siswa</h2>
    <div class="card">
        <form method="POST" action="" enctype="multipart/form-data">
            <label>Judul:</label>
            <input type="text" name="title" value="<?php echo htmlspecialchars($row['title']); ?>" required>

            <label>Nama Pemilik Karya:</label>
            <input type="text" name="nama" value="<?php echo htmlspecialchars($row['nama']); ?>" required>

            <label>Penulis:</label>
            <input type="text" name="author" value="<?php echo htmlspecialchars($row['author']); ?>" required>

            <label>Tanggal & Jam:</label>
            <input type="datetime-local" id="date" name="date" required>

            <label>Gambar:</label>
            <input type="file" name="image">
            <div class="preview">
                <img src="upload/<?php echo htmlspecialchars($row['image']); ?>" alt="Preview Gambar">
            </div>

            <button type="submit" name="submit">Update Karya</button>
        </form>
    </div>
</div>

<!-- SCRIPT UNTUK OTOMATIS MENGISI WAKTU -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        let dateInput = document.getElementById("date");

        // Ambil data dari PHP
        let existingDate = "<?php echo $row['date'] ?? ''; ?>";

        if (existingDate) {
            // Jika ada data di database, gunakan
            dateInput.value = existingDate.replace(" ", "T");
        } else {
            // Jika tidak ada, gunakan waktu saat ini
            let now = new Date();
            let formattedDate = now.toISOString().slice(0, 16);
            dateInput.value = formattedDate;
        }
    });
</script>

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

    input[type="text"], input[type="file"], input[type="datetime-local"] {
        width: 100%;
        padding: 12px;
        margin-top: 5px;
        border: 1px solid #ddd;
        border-radius: 8px;
        font-size: 14px;
        transition: all 0.3s ease;
        background: #f8f9ff;
    }

    input:focus {
        border-color: rgb(139, 161, 227);
        outline: none;
        background: #eef1ff;
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
