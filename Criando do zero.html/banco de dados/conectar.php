<?php
$conn = new mysqli('localhost','root','','geek');

    if ($conn->connect_error) {
        die('Connection failed'. $conn->connect_error);
    }
?>