<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "clabin";
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $age = $_POST['age'];
    $country = $_POST['country'];
    $email = $_POST['email'];
    $comment = $_POST['feedback'];
    try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);     
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
      $stmt="INSERT INTO feedback (fname, lname, email, age, country, comment) VALUES ('$fname','$lname','$email','$age','$country','$comment')";
      $conn->query($stmt);
      header( "refresh:0;url=feedback.php" );
    
    } catch(PDOException $e) {
      
      $conn->rollback();
      echo "Error: " . $e->getMessage();
    }
    
    $conn = null;

?>
