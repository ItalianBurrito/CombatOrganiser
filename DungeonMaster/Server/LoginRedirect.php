<?php
session_start();
if(empty($_SESSION['login'])){
  header("location: Login.php");
}

echo "You shouldn't be here, " . $_SESSION['login'];
?>
