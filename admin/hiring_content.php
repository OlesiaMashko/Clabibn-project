<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="body_style.css">
<?php
include 'config.php'; 

echo "<h1 style='margin-left:80px;text-decoration:underline;'>Applicans Report:</h1><br>";
try{ 
    $stmt = $conn->prepare("select * from job_applicants");
    $stmt->execute();
    $array = $stmt->fetchAll();
        $displayTable = "<table border='2'><tr><th>Name</th><th>Email</th><th>Resume</th><th>Option</th></tr>";
        for ($i = 0; $i < count($array); $i++) {
            $displayTable .= "<tr><td>" . $array[$i]['name'] . "</td>";
            $displayTable .= "<td>" . $array[$i]['email'] . "</td>";
            $displayTable .= "<td><a target='_blank' href='view.php?name=" . $array[$i]['name'] . "'>View Resume</td>";
            $displayTable .= "<td><a target='_blank' href='delete.php?name=" . $array[$i]['name'] . "'>Delete</td></tr>";
        }
        $displayTable .= "</table>";

} catch (PDOException $e) {
    echo "Connection failed! " . $e->getMessage();
}

?>