
<?php
    error_reporting(1);
    $servername = "localhost";
    $username = "admin";
    $password = "admin";
    $dbname = "scribehub";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (mysqli_connect_errno()) {
        die('ERROR: Connection to Database failed');
    }
?>