<?php

$link = mysqli_connect("localhost", "root", "", "abdul");

if ($link == false) die("Error not connected to database. info" . mysqli_connect_error());

echo "Succefully connected to database Host info: " . mysqli_get_host_info($link);
//$sql = "CREATE DATABASE demo";
$sql = "CREATE TABLE persons(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(30) NOT NULL,
    last_name VARCHAR(30) NOT NULL,
    email VARCHAR(70) NOT NULL UNIQUE,
    pass_word VARCHAR(30) NOT NULL
)";

if (mysqli_query($link, $sql)) die("<br>could not create $sql" . mysqli_error($sql));
echo "<br>table created successfully";

mysqli_close($link);
?>