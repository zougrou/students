

<?php
 include 'dataconn.php';
 session_start();

 $sql = "SELECT * FROM connexion where email = ".$_POST["email"]." and password = ".$_POST["password"]."";
 $result = $conn->query($sql);

 if($result -> num_rows > 0){
  $_SESSION["email"] = $_POST["email"];
  echo "success";
 }else{
  echo "fail";
 }
 ?>