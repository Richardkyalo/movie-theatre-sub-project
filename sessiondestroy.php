<?php
  session_start();
   if(!(isset($_SESSION["login"]) && $_SESSION["login"] == "OK")) {
    header("location:userlogin.php");
    exit;
}
?>