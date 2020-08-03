<?php
session_start();
if(!empty($_SESSION['login'])){
  header("location: CampaignList.php");
}
?>

<p>Name</p>
<input type='text' name='name'>

<p>Email</p>
<input type='text' name='email'>

<p>Password</p>
<input type='password' name='password'>

<input type='button' value='Submit' name='submit'>
