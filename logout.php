<?php
session_start();

echo "<script>
                alert('You have been logged out.');
                </script>";
session_unset();
session_destroy();
echo "<script>
                window.location.href = 'login.php';
              </script>";
exit();
?>
