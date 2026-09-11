<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register Your Complaint</title>
<link rel="stylesheet" href="form.css">
</head>
<body>

<?php
    session_start();

    $subject = isset($_GET['subject']) ? htmlspecialchars($_GET['subject']) : '';
    $email = isset($_SESSION['email']) ? $_SESSION['email'] : '';

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "try";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if (isset($_POST['submit'])) {
        $sub = $_POST['subject'];
        $nm = $_POST['name'];
        $eml = $_POST['email'];
        $ph = $_POST['phone'];
        $add = $_POST['address'];
        $desc = $_POST['description'];

        $query = "INSERT INTO complaint (subject, name, email, phone, address, description) VALUES ('$sub', '$nm', '$eml', '$ph', '$add', '$desc')";

        $run = mysqli_query($conn, $query);

        if ($run) {
            header("location: success.php");
        }
        else {
            header("location: form.php");
        }
    }

    ?>


    <form class="form-box"  method="post" enctype="multipart/form-data">
        <h2>📣 Register Your Complaint</h2>

        Subject:
        <input type="text" id="subjectField" name="subject" value="<?php echo $subject; ?>" readonly>

        Your Name:
        <input type="text" name="name" required placeholder="Enter your full name">

        Your Email:
        <input type="email" name="email" value="<?php echo $email; ?>" readonly>

        Phone Number:
        <input type="text" name="phone" required placeholder="Enter 10-digit number">

        Address:
        <input type="text" name="address" required placeholder="Enter your address">


        Complaint Description:
        <textarea name="description" placeholder="Describe your complaint in detail"></textarea>

        Upload Image (Optional):
        <input type="file" name="image">

        <input type="submit" name="submit" value="📩 Submit Complaint">
    </form>

</body>
</html>