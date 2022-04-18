<?php
include('/var/www/html/Server/DB_Connect.php');

try{
  $stmt = $conn->prepare("INSERT INTO PLAYERS (PLAYER_NAME, PLAYER_PASS, PLAYER_EMAIL)
  VALUES (:name,:pass ,:email )");
  $stmt->bindParam(':name', $name);
  $stmt->bindParam(':pass', $pass);
  $stmt->bindParam(':email', $email);

  $name = "Eric Puls";
  $pass = password_hash("DungeonsAndDragons", PASSWORD_DEFAULT);
  $email = "eat_lead76@hotmail.com";
  $stmt->execute();

  echo "New record created successfully";
  echo "<br>";

  $stmt = $conn->prepare("SELECT * FROM PLAYERS");
  $stmt->execute();

  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

  foreach($stmt->fetchAll() as $col=>$row){
    foreach($row as $lineitem){
      echo $lineitem;
      echo "<br>";
    }
  }

}catch(PDOException $e){
  echo "Operation failed: " . $e->getMessage();
}

$conn = null;
?>
