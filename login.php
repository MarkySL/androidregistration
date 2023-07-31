<?php
require "dbcon.php";
$db = new DataBase();
if (isset($_POST['username']) && isset($_POST['password'])) {
    if ($db->dbConnect()) {
        /*Call the logIn() function with the object and pass the tablename, username and password as its arguments.*/
        if ($db->logIn("users", $_POST['username'], $_POST['password'])) {
            echo "Login Success";
        } else echo "Username or Password wrong";
    } else echo "Error: Database connection";
} else echo "All fields are required";
?>
