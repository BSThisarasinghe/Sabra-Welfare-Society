<?php
$host = "localhost";
$uname = "root";
$pwd = "";
$dbName = "Welfare";
$conn = mysqli_connect($host, $uname, $pwd, $dbName);
if (mysqli_connect_errno()) {
    die("Database connection failed: " .
        mysqli_connect_error() .
        " (" . mysqli_connect_errno() . ")"
    );
}
?>