<?php
include '../koneksi.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    
    // Memeriksa apakah data 'message' ada di POST
    $message = isset($_POST['message']) ? $_POST['message'] : '';

    // Pastikan $message tidak kosong sebelum melanjutkan
    if (!empty($message)) {
        $sql = "INSERT INTO feedback (name, email, message) VALUES ('$name', '$email', '$message')";
        if ($conn->query($sql) === TRUE) {
            echo "<div class='success-container'>";
            echo "<div class='success-message'>";
            echo "<div class='success-icon'>✓</div>";
            echo "<h3>Terima Kasih!</h3>";
            echo "<p>Kritik dan saran Anda telah berhasil dikirim.</p>";
            echo "<div class='button-group'>";
            echo "<a href='feedback.php' class='button primary-btn'>Berikan Kritik Lagi</a>";
            echo "<a href='javascript:history.go(-2)' class='button secondary-btn'>Kembali</a>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            exit();
        } else {
            echo "Error: " . $conn->error;
        }
    } else {
        echo "Message cannot be empty!";
    }
}
?>

<h2>Kritik dan Saran</h2>
<div class="container">
    <form method="POST" action="" class="feedback-form">
        <div class="form-group">
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name" required>
        </div>
        
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        
        <div class="form-group">
            <label for="message">Pesan:</label>
            <textarea id="message" name="message" required></textarea>
        </div>
        
        <button type="submit" name="submit" class="submit-btn">Kirim</button>
    </form>
</div>

<style>

.success-container {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: rgba(0, 0, 0, 0.5);
    padding: 20px;
}

.success-message {
    text-align: center;
    padding: 40px;
    background-color: white;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    max-width: 450px;
    width: 100%;
    animation: slideIn 0.5s ease-out;
}

.success-icon {
    width: 90px;
    height: 90px;
    background: linear-gradient(45deg, rgb(139, 161, 227), rgb(120, 140, 207));
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 25px;
    font-size: 45px;
    box-shadow: 0 5px 15px rgba(139, 161, 227, 0.3);
    animation: scaleIn 0.5s ease-out;
}

.success-message h3 {
    color: rgb(75, 95, 170);
    font-size: 28px;
    margin-bottom: 15px;
    font-weight: 600;
}

.success-message p {
    color: #666;
    margin-bottom: 30px;
    font-size: 16px;
}

.button-group {
    display: flex;
    gap: 15px;
    justify-content: center;
    flex-wrap: wrap;
}

.button {
    padding: 14px 28px;
    border-radius: 12px;
    font-weight: 500;
    text-decoration: none;
    transition: all 0.3s ease;
}

.primary-btn {
    background: linear-gradient(45deg, rgb(139, 161, 227), rgb(120, 140, 207));
    color: white;
    box-shadow: 0 4px 15px rgba(139, 161, 227, 0.2);
}

.secondary-btn {
    background-color: white;
    color: rgb(75, 95, 170);
    border: 2px solid rgba(139, 161, 227, 0.4);
}

.primary-btn:hover, .secondary-btn:hover {
    transform: translateY(-2px);
}

@keyframes scaleIn {
    from {
        transform: scale(0);
        opacity: 0;
    }
    to {
        transform: scale(1);
        opacity: 1;
    }
}

@keyframes slideIn {
    from {
        transform: translateY(30px);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

/* Additional styles for form */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(135deg, rgba(139, 161, 227, 0.2), rgba(174, 179, 234, 0.3));
    line-height: 1.6;
}

.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
}

h2 {
    text-align: center;
    color: #4a4a4a;
    margin: 30px 0;
    font-size: 2em;
}

.feedback-form {
    background: white;
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
}

.form-group {
    margin-bottom: 20px;
}

label {
    display: block;
    margin-bottom: 5px;
    color: #555;
    font-weight: 500;
}

input, textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 8px;
    font-size: 16px;
    transition: border-color 0.3s ease;
}

input:focus, textarea:focus {
    outline: none;
    border-color: rgb(139, 161, 227);
}

textarea {
    height: 150px;
    resize: vertical;
}

.submit-btn {
    background-color: rgb(139, 161, 227);
    color: white;
    padding: 12px 30px;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    font-size: 16px;
    width: 100%;
    transition: background-color 0.3s ease;
}

.submit-btn:hover {
    background-color: rgb(120, 140, 207);
}
</style>
