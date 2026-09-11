<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="track.css">
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
                    <li><a href="home.php">Home</a></li>
                    <li><a href="">Services</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
            </nav> 
                <div class="menu-buttons">
                <a href="login.php"><button class="btnl">Log in</button></a>
                <a href="signup.php"><button class="btnl">Sign up</button></a>
            </div>
        </div>
    </header>
    <br>
    <div><button class="menu-toggle" onclick="toggleMenu()">&#9776;</button> <!-- Hamburger Button --></div>
    <!-- Sidebar Menu -->
    <div class="side-menu" id="sideMenu">
        <button class="close-btn" onclick="toggleMenu()">&#10006; </button> <!-- Back Button -->
        <ul>
            <li><a href="complaintbox.php">Add Complaints</a></li>
            <li><a href="track.php">Track Complaints status</a></li>
            <li><a href="#">Feedback</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
    <main>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "try";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$email = $_SESSION['email'];
$query = "SELECT subject,status FROM complaint WHERE Email = '$email'";

$run = mysqli_query($conn, $query);
?>

    <div class="container">
        <div class="complaints-section">
            <h2>Complaint Status</h2>
            <table id="complaintTable">
                <thead>
                    <tr>
                        <th>Complaint Name</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                
                    if (mysqli_num_rows($run) > 0) {
                        while ($row = mysqli_fetch_assoc($run)) {
                            echo "<tr>
                                    <td>" . htmlspecialchars($row['subject']) . "</td>
                                    <td>" . htmlspecialchars($row['status']) . "</td>
                                  </tr>";
                        }
                    } else {
                        echo "<tr><td>No complaints found.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
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