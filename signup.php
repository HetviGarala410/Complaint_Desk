<?php
session_start();
?>
<html>
<head>
  <title>Sign Up</title>
  <link rel="stylesheet" href="signup.css" />
</head>
<body>
  <div class="signup-container">
    <form action="" method="post">
      <h2>Create Account</h2>
      <div class="input-group">
        <label for="fullname">Full Name</label>
        <input type="text" id="fullname" name="fullname" required />
      </div>
      <div class="input-group">
        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" required />
      </div>
      <div class="input-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required />
      </div>
      <div class="input-group">
        <label for="confirm-password">Confirm Password</label>
        <input type="password" id="confirm-password" name="confirm-password" required />
      </div>
      <button type="submit" name="submit">Sign Up</button>
      <p class="login-link">Already have an account? <a href="login.php">Login here</a></p>
    </form>
  </div>
<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "try";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn)
{
  die("Connection failed :" . mysqli_error());
}

if(isset($_POST['submit']))
{
  $nm = $_POST['fullname'];
  $eml = $_POST['email'];
  $pass = $_POST['confirm-password'];

  $query = "INSERT INTO login (Name, Email, Password) values('$nm', '$eml', '$pass')";
  $run = mysqli_query($conn, $query);
  if ($run) {
     $_SESSION['email']=$eml;
    header("Location: complaintbox.php");
} else {
    echo "Error: " . mysqli_error($conn);
}
}
?>
</body>
</html>
