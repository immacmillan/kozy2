<?php

require 'config.php';


$firstnameone = $_POST['firstnameone'];
$lastnameone = $_POST['lastnameone'];
$emailone = $_POST['emailone'];

$result = mysqli_query(getSqlConnection(), "INSERT INTO users (firstnameone, lastnameone, email) VALUES ('$firstnameone', '$lastnameone ', '$emailone')");


if($result){

    echo "Success";
}  
?>