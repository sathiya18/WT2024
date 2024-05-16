<?php
session_start();
if (isset($_POST['username']) && isset($_POST['password'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  if ($username === 'sathya' && $password === '123') {
    $_SESSION['username'] = $username;
    echo "Login successful! Redirecting...";
    header('Location: index.php'); // Replace with your desired redirect URL
    exit;
  } else {
    echo "Invalid username or password.";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
</head>
<body align="center">
  <h1>Login</h1>
  <form method="post" action="">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username" required><br><br>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required><br><br>
    <button type="submit">Login</button>
  </form>
</body>
</html>
