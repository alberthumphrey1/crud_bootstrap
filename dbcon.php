<?php

$con = mysqli_connect ("localhost", "root", "", "CRUD");

if (!$con){
    die('Connection Failed'.mysqli_connect_error());
}
?>
