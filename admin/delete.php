<?php
include 'config.php';
$n = isset($_GET['name'])? $_GET['name'] : "";
$stmt=$conn->prepare("delete from job_applicants where name = ?");
$stmt -> bindParam(1,$n);
$stmt->execute();
header( "refresh:0;url=dashboard_hiring.php" );

