<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="complaintbox.css">
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

    <div class="container">
        <a href="form.php?subject=Water Issues" class="box">
        <img src="water.jpg" alt="Water">Water Issues</a>
        <a href="form.php?subject=Road Issues" class="box">
        <img src="road.jpg" alt="Road">Road Issues</a>
        <a href="form.php?subject=Electricity" class="box">
        <img src="electricity.jpg" alt="Electricity">Electricity</a>
        <a href="form.php?subject=Garbage" class="box">
        <img src="garbage.jpg" alt="Garbage">Garbage</a>
        <a href="form.php?subject=Public Transport" class="box">
        <img src="transport.jpg" alt="Transport">Public Transport</a>
        <a href="form.php?subject=Public Toilets & Cleanliness" class="box">
        <img src="toilate.jpg" alt="Toilets">Public Toilets</a>
    </div>



    <script>
        function toggleMenu() {
            var menu = document.getElementById('sideMenu');
            menu.classList.toggle('open'); // Toggle Sidebar Open/Close
        }
    </script>

</body>
</html>
