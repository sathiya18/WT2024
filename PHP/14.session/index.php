<?php
session_start();
if (!isset($_SESSION['username'])) {
  echo "You are not logged in. Please login first.";
  header('Location: login.php');
  exit;
}
echo"<center>";
echo "Hello, " . $_SESSION['username'] . "!<br>";
echo "Welcome to the PHP Sessions.<br>";
echo "<br><button onclick=\"window.location.href='logout.php'\">Logout</button>";
echo"</center>";
?>


