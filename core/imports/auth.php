<?php 
session_start();
if (!isset($_SESSION['loggedin'])) {
  if ($_SERVER["REQUEST_URI"] != "/") {
    $_SESSION["redirafterlogin"] = $_SERVER["REQUEST_URI"];
  }
  header("Location: /auth/login");
  
}
?>