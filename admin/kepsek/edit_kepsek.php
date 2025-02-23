<?php
include '../koneksi.php';

$id = $_GET['id'];

// Ambil data dari database berdasarkan ID
$sql = "SELECT * FROM kepsek WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

// Cek apakah form disubmit
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $tanggal = $_POST['tanggal'];
    $date = $_POST['date'];

   // Update data di database
    $sql = "UPDATE kepsek SET nama='$nama', tanggal='$tanggal', date='$date' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        header("Location: ../?page=kepsek");
        exit(); // Supaya script berhenti setelah redirect
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
<h2>Tambah kepala Sekolah</h2>

<form method="POST" action="" enctype="multipart/form-data">
    Nama Kepala Sekolah: <input type="text" name="nama" value="<?php echo
                                                    $row['nama']; ?>" required><br>
    Tanggal Bertugas: <input type="type" name="tanggal" value="<?php echo
                                                        $row['tanggal']; ?>" required><br>
    <label>Tanggal & Jam:</label>
    <input type="datetime-local" id="date" name="date" required>
    <button type="submit" name="submit">Update</button>
</form>

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
    input[type="file"] {
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
