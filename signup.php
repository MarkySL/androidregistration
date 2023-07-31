<?php
require "dbcon.php";
$db = new DataBase();
if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {
    if ($db->dbConnect()) {
        /*Call the signUp() function with the object and pass tablename and all the necessary arguments */
        if ($db->signUp("users", $_POST['username'], $_POST['email'], $_POST['password'])) {
            echo "Registration Successfully";
        } else echo "Registration Failed";
    } else echo "Error: Database connection";
} else echo "All fields are required";
?>
