<?php

include 'config.php';

try {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $type = $_FILES['pdf_file']['type'];
    $data = addslashes(file_get_contents($_FILES['pdf_file']['tmp_name']));

    $stmt="INSERT INTO job_applicants VALUES ('$name', '$email','$type','$data')";
    $conn->query($stmt);
    header( "refresh:0;url=hiring.php" );

} catch (PDOException $e) {
    echo "Connection failed! " . $e->getMessage();
}

?>