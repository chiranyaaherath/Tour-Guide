<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "tour_guide";

$Connection = mysqli_connect($serverName, $userName, $password, $dbName);
mysqli_report(MYSQLI_REPORT_OFF);
