<?php
$servername = "172.17.0.3";
$username = "root";
$password = "DNDisforCoolDOODES42069";

try{
  $conn = new PDO("mysql:host=$servername; dbname=Dungeons",$username, $password);
  //Set the PDO error mode to exception.
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
  echo "Connection failed: " . $e->getMessage();
}

?>
