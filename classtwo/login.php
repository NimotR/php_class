<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_REQUEST['fname'];
    $password = $_REQUEST['password'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name . "<br>";
        echo $password;
    }
}
?>