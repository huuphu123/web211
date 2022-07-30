<?php

    function getConnection() {

        $conn = mysqli_connect("localhost" , "root" , "" , "btl_web");
        if (mysqli_connect_errno())
        {
            die("Failed to connect to MySQL: " . mysqli_connect_error());
        }
        return $conn;
    }

?>