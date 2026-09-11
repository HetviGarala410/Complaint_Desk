<?php
session_start();
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
    <div><button class="menu-toggle" onclick="toggleMenu()">&#9776;</button> <!-- Hamburger Button --></div>
    <!-- Sidebar Menu -->
    <div class="side-menu" id="sideMenu">
        <button class="close-btn" onclick="toggleMenu()">&#10006; </button> <!-- Back Button -->
        <ul>
            <li><a href="view.php">View Complaints</a></li>
            <li><a href="update.php">Update Complaint Status</a></li>
            
            
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
$query = "SELECT * FROM complaint";
$run = mysqli_query($conn, $query);
?>

        <div class="container">
        
            <div class="complaints-section">
        
                <table>
                    <thead>
                        <tr>
                            <th>Complaint ID</th>
                            <th>Complaint</th>
                            <th>User Name</th>
                            <th>Email Id</th>
                            <th>Phone No</th>
                            <th>Address</th>
                            <th>Description</th>
                            <th>Status</th>
                            
                        </tr>
                    </thead>
                <tbody>
                        <?php
                    // Check if there are any complaints for the user
                    if (mysqli_num_rows($run) > 0) {
                        while ($row = mysqli_fetch_assoc($run)) {
                            echo "<tr>
                                    <td>" . htmlspecialchars($row['id']) . "</td>
                                    <td>" . htmlspecialchars($row['subject']) . "</td>
                                    <td>" . htmlspecialchars($row['name']) . "</td>
                                    <td>" . htmlspecialchars($row['email']) . "</td>
                                    <td>" . htmlspecialchars($row['phone']) . "</td>
                                    <td>" . htmlspecialchars($row['address']) . "</td>
                                    <td>" . htmlspecialchars($row['description']) . "</td>
                                    <td>" . htmlspecialchars($row['status']) . "</td>
                                    
                                </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='4'>No complaints found.</td></tr>";
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