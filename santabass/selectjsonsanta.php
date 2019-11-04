<?php
    $dbc=mysqli_connect('127.0.0.1','root','apmsetup','santabass')
        or die("Error Connecting to MySQL server.");

    mysqli_query($dbc, "set names utf8;");

    $query="select * from "
?>
