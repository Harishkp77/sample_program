<?php
if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  if ($username === 'harish' && $password === '0707') {
    header("Location:StudentPage.php");
    exit;
  } 
  else {
    echo "Invalid username or password";

  }
}
?>


