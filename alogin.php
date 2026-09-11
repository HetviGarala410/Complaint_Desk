<?php
session_start();
?>

<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="alogin.css" />
    <style>
      .message {
        text-align: center;
        font-weight: bold;
        margin-bottom: 15px;
      }
    
      .error {
        color: red;
      }
    </style>
</head>
<body>
  <div class="login-container">

<?php
    

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "try";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $message = ""; 
    $class = "";

    if (isset($_POST['submit'])) {
        $eml = $_POST['email'];
        $pass = $_POST['password'];



        $query = "SELECT * FROM adminlogin WHERE Email='$eml' AND Password='$pass'";
        $run = mysqli_query($conn, $query);

        if (mysqli_num_rows($run) > 0) {
            $_SESSION['email']=$eml;
            echo "<script>
                  alert('Login Successful!');
                  window.location.href = 'view.php';
                  </script>";

        } else {
            $message = "Incorrect Email or Password";
            $class = "error";
        }
    }

    if (!empty($message)) {
        echo "<div class='message $class'>$message</div>";
    }

    
    ?>

    <form action="" method="post">
      <h2>Login</h2>
      <div class="input-group">
        <label for="email">Email</label>
        <input type="text" name="email" required />
      </div>
      <div class="input-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required />
      </div>
      <button type="submit" name="submit">Login</button>
      
    </form>
  </div>
</body>
</html>
