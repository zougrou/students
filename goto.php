<?php
 include 'dataconn.php';

 $sql = "INSERT INTO connexion (nom, email, password) VALUES ('".$_POST["nom"]."','".$_POST["email"]."','".$_POST["password"]."')";
 
 $result = $conn->query($sql);
 
 
 $conn->close();