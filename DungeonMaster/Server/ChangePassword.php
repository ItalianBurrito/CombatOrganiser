<?php
session_start();
if(empty($_SESSION['login'])){
  header("location: Login.php");
}
