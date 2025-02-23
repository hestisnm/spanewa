<?php
include '../koneksi.php';
$id = $_GET['id'];
$sql = "SELECT * FROM agenda WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $date = $_POST['date'];

    // Check if an image was uploaded
    if ($_FILES['image']['name']) {
        // If there's a new image, update it
        $image = $_FILES['image']['name'];
        $target = "upload/" . basename($image);
        move_uploaded_file($_FILES['image']['tmp_name'], $target);
    } else {
        // Otherwise, keep the existing image
        $image = $row['image'];
    }

    $sql = "UPDATE agenda SET title='$title', image='$image', date='$date' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../?agenda");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<div class="form-container">
    <h2>Edit Agenda</h2>

    <form method="POST" action="" enctype="multipart/form-data">
        <label for="title">Judul:</label>
        <input type="text" id="title" name="title" value="<?php echo htmlspecialchars($row['title']); ?>" required>

        <label for="date">Tanggal & Jam:</label>
<input type="datetime-local" id="date" name="date" 
       value="<?php echo date('Y-m-d\TH:i', strtotime($row['date'])); ?>" required>


        <label for="image">Gambar:</label>
        <input type="file" id="image" name="image">

        <img src="upload/<?php echo htmlspecialchars($row['image']); ?>" alt="Gambar Agenda">

        <button type="submit" name="submit">Update</button>
    </form>
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
    }

    .form-container {
        background: white;
        padding: 25px;
        border-radius: 15px;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
        max-width: 400px;
        width: 100%;
        position: relative;
        overflow: hidden;
        border: 1px solid rgba(139, 161, 227, 0.4);
    }

    .form-container::before {
        content: '';
        position: absolute;
        top: -60px;
        left: -60px;
        width: 120px;
        height: 120px;
        background: rgb(139, 161, 227, 0.3);
        border-radius: 50%;
        z-index: 0;
    }

    .form-container::after {
        content: '';
        position: absolute;
        bottom: -50px;
        right: -50px;
        width: 100px;
        height: 100px;
        background: rgb(139, 161, 227, 0.2);
        border-radius: 50%;
        z-index: 0;
    }

    h2 {
        color: rgb(139, 161, 227);
        text-align: center;
        font-size: 24px;
        margin-bottom: 15px;
        position: relative;
        z-index: 1;
    }

    label {
        display: block;
        margin-top: 10px;
        font-weight: bold;
        color: #555;
        font-size: 14px;
        position: relative;
        z-index: 1;
    }

    input[type="text"],
    input[type="file"],
    input[type="date"] {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        border: 1px solid #ddd;
        border-radius: 8px;
        font-size: 14px;
        transition: all 0.3s ease;
        position: relative;
        z-index: 1;
    }

    input[type="text"]:focus,
    input[type="file"]:focus,
    input[type="date"]:focus {
        border-color: rgb(139, 161, 227);
        outline: none;
    }

    img {
        margin-top: 10px;
        border-radius: 8px;
        border: 1px solid #ddd;
        max-width: 100px;
    }

    button {
        margin-top: 15px;
        background-color: rgb(139, 161, 227);
        color: white;
        border: none;
        padding: 10px;
        border-radius: 8px;
        font-size: 16px;
        cursor: pointer;
        width: 100%;
        transition: background-color 0.3s;
        position: relative;
        z-index: 1;
    }

    button:hover {
        background-color: rgb(120, 140, 207);
    }
</style>
