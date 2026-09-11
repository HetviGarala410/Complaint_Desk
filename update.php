<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "try";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $status = $_POST['status'];

    $query = "UPDATE complaint SET status='$status' WHERE id='$id'";
    $run = mysqli_query($conn, $query);

    if ($run) {
        header("Location: view.php");
        exit();
    } else {
        echo "Error updating status: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view.css">
    <title>Complaint Management Dashboard</title>
</head>
<body>

<header>
    <div class="navbar">
        <div class="logo-container">
            <img src="logo2.png" alt="Logo" class="logo">
            <h3>ComplaintDesk</h3>
        </div>
        <nav class="nav-links">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="">Services</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
        </nav>
        <div class="menu-buttons">
                <a href="alogin.php"><button class="btnl">Log in</button></a>
            </div>
    </div>
</header>

<br>
<div>
    <button class="menu-toggle" onclick="toggleMenu()">&#9776;</button>
</div>

<div class="side-menu" id="sideMenu">
    <button class="close-btn" onclick="toggleMenu()">&#10006;</button>
    <ul>
        <li><a href="view.php">View Complaints</a></li>
        <li><a href="update.php">Update Complaint Status</a></li>
    </ul>
</div>

<main class="main-content" id="mainContent">
    <div class="container">
        <div class="background-box">
            <h2>Update Complaint Status</h2><br>
            <form action="update.php" method="post">
                Complaint ID:
                <input type="text" name="id" required><br>
                Status:
                <select id="status" name="status" required>
                    <option value="Pending">Pending</option>
                    <option value="Approved">Approved</option>
                    <option value="Rejected">Rejected</option>
                </select><br><br>
                <button type="submit" name="submit" class="submit-btn">Update Status</button>
            </form>
        </div>
    </div>
</main>

<script>
    function toggleMenu() {
        var menu = document.getElementById('sideMenu');
        menu.classList.toggle('open');
    }
</script>

</body>
</html>
