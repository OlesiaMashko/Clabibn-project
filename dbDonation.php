<?php

include 'config.php';

try {

    if (isset($_POST["firstName"]) && isset($_POST["lastName"]) && isset($_POST["email"]) && isset($_POST["amount"]) && isset($_POST["permission"]) && isset($_POST["distribution"]) && isset($_POST["payMethod"])) {
        $fname = $_POST['firstName'];
        $lname = $_POST['lastName'];
        $email = $_POST['email'];
        $amount = $_POST['amount'];
        $permission = $_POST['permission'];
        $distribution = $_POST['distribution'];
        $checkbox = "";
        $payment = $_POST['payMethod'];
    }

    if (isset($fname) != "" && isset($lname) != ""){

        foreach ($distribution as $chk) {
            $checkbox .= $chk . " ";
        }
    
        $sql = "INSERT INTO donation (fname, lname, email, amount, permission, freq_of_payment, paymentType) VALUES ('$fname', '$lname', '$email', '$amount', '$permission', '$checkbox', '$payment')";
    
        $conn->exec($sql);
        
        echo "<h1 style='text-align:center;color:darkgreen;margin-top:10%;'>Payment Submited Successfully!</h1>";
        header( "refresh:3;url=Aboutus.html" );
    } 

} catch (PDOException $e) {
    echo "Connection failed! " . $e->getMessage();
}