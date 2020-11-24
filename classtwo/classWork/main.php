<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    # code...
    $name = $_REQUEST["sname"];
    $email = $_REQUEST["email"];
    $age = $_REQUEST["age"];
    $role = $_REQUEST["role"];
    $likely = $_REQUEST["likely"];
    $role2 = $_REQUEST["roley"];
    $likely2 = $_REQUEST["likelyx"];

    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $age;
    echo "<br>";
    echo $role;
    echo "<br>";
    echo $likely;
    echo "<br>";
    echo $role2;
    echo "<br>";
    echo $likely2;
}
?>