<?php

include 'config.php';

$email = $_POST['email'];
 
try{
      $stmt="INSERT INTO registration (users_email) VALUES ('$email')";
      $conn->query($stmt);

      echo "<h1 style='text-align:center;background-color:#fff;color:#333;margin-top:10%;'>Registered Successfully!</h1>";
      header( "refresh:2;url=index.html" );
      
    } catch (PDOException $e) {
      Echo "Connection failed".$e->getMessage();

  }
    $conn = null;

    ?>