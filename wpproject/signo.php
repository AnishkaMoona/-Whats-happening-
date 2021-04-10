<?php session_start();?>
<?php
session_destroy();

echo "<script>alert('You're logged out!');</script>";
echo "<meta http-equiv = 'refresh' content = '0.1; url = //localhost:8888/wpproject/home1.php' />";
?>
