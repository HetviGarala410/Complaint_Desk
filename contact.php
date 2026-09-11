<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="contact.css"> <!-- Updated to use contact.css -->
    <title>Contact Us</title>
    <script>
        function showPopup() {
            alert("Thank you for contacting us! We have recieved your message.We will get back to you soon.");
        }
    </script>
</head>
<body>
    <div class="container">
        
        <div class="navbar">
            <div class="logo-container">
                <img src="logo.png" alt="Logo" height="80px" >
                <h3>ComplaintDesk</h3>
                
            </div>
            <nav class="center-nav">
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="">Services</a></li>
                    <li><a href="contact.php">Contact us</a></li>
                    <li><a href="alogin.php">Admin</a></li>
                </ul>
            </nav>
            <div class="menu-buttons">
            <button class="btnl"><a href="login.php">Log in</a></button>
            <button class="btnl"><a href="signup.php">Sign up</button>
        </div>
        </div>
        <br>
        <br>
        <br>
        <div class="contact-container">
            <div class="contact-info">
                <p>
                <h3 class="fade-in">Get in Touch</h3> </p>
                <p> Have a complaint or query? We are here to help. Fill out the form below or use our contact information. </p>
                <div class="contact-details">
                    <p class="fade-in"><i class="fa fa-phone"></i> Phone: +910000000000</p>
                    <p class="fade-in"><i class="fa fa-envelope"></i> Email: complaint@gmal.com</p>
                    <p class="fade-in"><i class="fa fa-map-marker"></i> Address: 123 Main Street, City</p>
                </div>
            </div>
            <div class="contact-form" style="background-color: rgba(246, 234, 234, 0.804); padding: 20px; border-radius: 10px; margin-bottom: 100px;"> <!-- Adjusted margin-bottom -->
                <form action="#" method="post" onsubmit="showPopup(); return false;"> <!-- Added onsubmit event -->
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" class="fade-in">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="fade-in" required>
                    
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="5" class="fade-in" ></textarea>
                    <button type="submit" class="btn2">Submit</button>
                </form>

            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-section">
                <h4>Contact Info</h4>
                <p><i class="fa fa-phone"></i>0000000000</p>
                <p><i class="fa fa-envelope"></i>complaint@gmail.com</p>
                <p><i class="fa fa-map-marker"></i> 123 Main Street, City</p>
            </div>
            <div class="footer-section">
                <h4>Quick Links</h4>
                <p>About Us</p>
                <p><a href="contact.php">Contact Us</a></p>
                <p>Services</p>
            </div>
            <div class="footer-section">
                <h4>Working Hours</h4>
                <p>Monday - Friday: 9:00 AM - 5:00 PM</p>
                <p>Saturday: 9:00 AM - 1:00 PM</p>
                <p>Sunday: Closed</p>
            </div>
        </div>
        <div class="social-media">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-youtube"></i></a>
            <a href="#"><i class="fa fa-whatsapp"></i></a>
        </div>
    </footer>
</body>
</html>