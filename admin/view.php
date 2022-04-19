<?php
include 'config.php';
$n = isset($_GET['name'])? $_GET['name'] : "";
$stmt=$conn->prepare("select * from job_applicants where name = ?");
$stmt -> bindParam(1,$n);
$stmt->execute();
$row = $stmt->fetch();

header('Content-type:'.$row['mime']);
echo $row['resume'];

