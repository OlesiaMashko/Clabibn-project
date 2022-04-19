<?php
    //create new obj of PDO
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "clabin";

    try{
        //set the connaction
        $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);

        //set PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        

    } catch (PDOException $e) {
        Echo "Connection failed".$e->getMessage();

    }

?>
