<?php
include '../koneksi.php';
$id = $_GET['id'];
$sql = "SELECT * FROM banner WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if (isset($_POST['submit'])) {
    if ($_FILES['image']['name']) {
        // Update image if a new image is uploaded
        $image = $_FILES['image']['name'];
        $target = "upload/" . basename($image);
        move_uploaded_file($_FILES['image']['tmp_name'], $target);
    } else {
        // If no new image, keep the old image
        $image = $row['image'];
    }

    $sql = "UPDATE banner SET image='$image' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        header("Location: ../?banner");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<div class="form-container">
    <h2>Edit Banner</h2>

    <form method="POST" action="" enctype="multipart/form-data">
        <label for="image">Gambar:</label>
        <input type="file" name="image" id="image"><br>
        <img src="upload/<?php echo htmlspecialchars($row['image']); ?>" alt="Banner Image" class="banner-image"><br>
        <button type="submit" name="submit" class="submit-btn">Update</button>
    </form>
</div>

<style>
    body {
        background: linear-gradient(135deg, rgba(139, 161, 227, 0.2), rgba(174, 179, 234, 0.3));
        font-family: 'Poppins', sans-serif;
        margin: 0;
        padding: 0;
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        position: relative;
    }

    /* Decorative circles */
    .circle-deco-1 {
        position: absolute;
        top: -70px;
        left: -50px;
        width: 150px;
        height: 150px;
        background: rgba(139, 161, 227, 0.3);
        border-radius: 50%;
    }

    .circle-deco-2 {
        position: absolute;
        bottom: -60px;
        right: 40px;
        width: 180px;
        height: 180px;
        background: rgba(139, 161, 227, 0.2);
        border-radius: 50%;
    }

    .form-container {
        background: white;
        padding: 25px;
        border-radius: 15px;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
        width: 90%;
        max-width: 600px;
        text-align: center;
    }

    h2 {
        color: rgb(75, 95, 170);
        font-size: 28px;
        margin-bottom: 15px;
    }

    label {
        font-weight: bold;
        font-size: 16px;
        color: #333;
        display: block;
        margin-bottom: 8px;
    }

    input[type="file"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 8px;
        font-size: 14px;
        margin-bottom: 10px;
        transition: border-color 0.3s ease;
    }

    input[type="file"]:focus {
        border-color: rgb(139, 161, 227);
        outline: none;
    }

    .banner-image {
        border-radius: 12px;
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
        width: 100%;
        max-width: 500px;
        height: auto;
    }

    .submit-btn {
        background-color: rgb(139, 161, 227);
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 8px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        font-weight: 600;
        width: 100%;
    }

    .submit-btn:hover {
        background-color: rgb(120, 140, 210);
    }

    /* For mobile responsiveness */
    @media (max-width: 600px) {
        .form-container {
            width: 90%;
            padding: 20px;
        }
    }
</style>
