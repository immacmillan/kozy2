<?php


function getSqlConnection(){

    $servername = "127.0.0.1";
    $username 	= "root";
    $password	= "password";
    $dbname		= "test";

    return mysqli_connect($servername, $username, $password, $dbname);
}
?>
