<?php
    //Connect to MySQL
    $con = mysqli_connect("localhost","root","","shoutit");

    //Test connection
    if (mysqli_connect_errno()) {
        echo 'Failed to connect to the database: '.mysqli_connect_error();
    }
?>
