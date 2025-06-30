<?php
    $server='localhost:3307';
    $username='root';
    $password='12345789';
    $db='users';

    $conn=mysqli_connect($server,$username,$password,$db);
    if($conn)
    {}
    else {
        die('Connection failed');
    }
?>