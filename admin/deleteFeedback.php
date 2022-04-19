<?php
include 'config.php';
$n = isset($_GET['id'])? $_GET['id'] : "";
$stmt=$conn->prepare("delete from feedback where id = ?");
$stmt -> bindParam(1,$n);
$stmt->execute();
header( "refresh:0;url=dashboard_feedback.php" );

