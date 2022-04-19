<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="body_style.css">
<?php
include 'config.php'; 

echo "<h1 style='margin-left:80px;text-decoration:underline;'>FeedBacks:</h1><br>";
try{ 
    $stmt = $conn->prepare("select * from feedback");
    $stmt->execute();
    $array = $stmt->fetchAll();
        $displayTable = "<table border='2'><tr><th>ID</th><th>Firstname</th><th>Lastname</th><th>Email</th><th>Age</th><th>Country</th><th>Feedback</th><th>action</th></tr>";
        for ($i = 0; $i < count($array); $i++) {
            $displayTable .= "<tr><td>" . $array[$i]['id'] . "</td>";
            $displayTable .= "<td>" . $array[$i]['fname'] . "</td>";
            $displayTable .= "<td>" . $array[$i]['lname'] . "</td>";
            $displayTable .= "<td>" . $array[$i]['email'] . "</td>";
            $displayTable .= "<td>" . $array[$i]['age'] . "</td>";
            $displayTable .= "<td>" . $array[$i]['country'] . "</td>";
            $displayTable .= "<td style='width: 25%'>" . $array[$i]['comment'] . "</td>";
           
            $displayTable .= "<td><a target='_blank' href='deleteFeedback.php?id=" . $array[$i]['id'] . "'>Delete</td></tr>";
        }
        $displayTable .= "</table>";

} catch (PDOException $e) {
    echo "Connection failed! " . $e->getMessage();
}

?>




