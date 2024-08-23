<?php

$env = parse_ini_file('.env');

$dbHost = $env["DB_HOST"];
$dbName = $env["DB_NAME"];
$dbUsername = $env["DB_USERNAME"];
$dbPassword = $env["DB_PASSWORD"];

$connection = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

?>