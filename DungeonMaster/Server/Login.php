<?php
session_start();
if(!empty($_SESSION['login'])){
  header("location: CampaignList.php");
}
?>
<p>Enter your email</p>
<input type='text' name='email'>

<p>Enter your password</p>
<input type='password' name='password'>

<input type='button' value='Login' name='login'>
<a href='CreateAccount.php'>Sign-up</a>
<a href='ChangePassword.php'>Forgot Password</a>
