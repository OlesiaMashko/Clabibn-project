<?php

include 'config.php';

try {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $type = $_FILES['pdf_file']['type'];
    $data = addslashes(file_get_contents($_FILES['pdf_file']['tmp_name']));

    $stmt="INSERT INTO job_applicants VALUES ('$name', '$email','$type','$data')";
    $conn->query($stmt);
    echo "<h1 style='text-align:center;color:darkgreen;margin-top:10%;'>Thank you for aplying!<br>Resume Submited Successfully!</h1>";
    echo "<h2 style='text-align:center;color:darkgreen;margin-top:10%;'>We will contact you.</h2>";
    header( "refresh:2;url=hiring.php" );

} catch (PDOException $e) {
    echo "Connection failed! " . $e->getMessage();
}

?>