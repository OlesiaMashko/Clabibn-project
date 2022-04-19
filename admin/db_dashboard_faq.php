<?php

include 'config.php';

try {

    if (isset($_POST["question"]) && isset($_POST["answer"])) {
        $question = $_POST['question'];
        $answer = $_POST['answer'];
     
    
        
        $sql = "INSERT INTO faqs (question, answer) VALUES ('$question', '$answer')";
    
        $conn->exec($sql);
        
        echo "<h1 style='text-align:center;background-color:#fff;color:#333;margin-top:10%;'>FAQ Added Successfully!</h1>";
        header( "refresh:3;url=admin_dashboard.php" );
    }

} catch (PDOException $e) {
    echo "Connection failed! " . $e->getMessage();
}
