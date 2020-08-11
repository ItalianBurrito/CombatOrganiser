<?php
session_start();
if(!empty($_SESSION['login'])){
  header("location: CampaignList.php");
}
//include 'DB_Connect.php';//Change to DB_Query that has nothing but search priv

$nameErr = $emailErr = $passwordErr = $confirmPasswordErr = '';
$name = $email = $password = $confirmPassword = '';

//Check is the submit button has been pressed
if($_SERVER["REQUEST_METHOD"] == "POST"){
  if(empty($_POST['name'])){$nameErr = 'Name is required.';}
  else{$name = scrub_input($_POST['name']);}
  if(empty($_POST['email']){$emailErr = 'Email is required.';}
  else{$email = scrub_input($_POST['email']);}
  if(empty($_POST['password'])){$nameErr = 'Password is required.';}
  else{$password = scrub_input($_POST['password']);}
  if(empty($_POST['confirmPassword'])){$confirmPasswordErr = 'Must confirm password.';}
  else{$confirmPassword = scrub_input($_POST['confirmPassword']);}
}

//Remove special characters and excess white space.
function scrub_input($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

<html>
<body>
  <form method='post' action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>'>
    <p>Name</p>
    <input type='text' name='name'>
    <span class='error'>* <?php echo $nameErr;?></span>

    <p>Email</p>
    <input type='text' name='email'>
    <span class='error'>* <?php echo $emailErr;?></span>

    <p>Password</p>
    <input type='password' name='password'>
    <span class='error'>* <?php echo $passwordErr;?></span>

    <p>Confirm Password</p>
    <input type='password' name='confirmPassword'>
    <span class='error'>* <?php echo $confirmPasswordErr;?></span>

    <input type='submit'>
  </form>
</body>
</html>
