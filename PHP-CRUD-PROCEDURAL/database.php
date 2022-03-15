<?php

$connection = new mysqli("localhost", "root", "", "phpCrud");
if(!$connection){
    die(mysqli_error($connection));
}
?>