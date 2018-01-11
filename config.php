<?php

/** Config for Db Connection 

$host		= "localhost";
$username 	= "root";
$password	= "password";
$dbname		= "users";
$dsn		= "mysql:host=$host;dbname=$dbname";
$options	= array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);


mysql_connect($servername, $username, $password);
mysql_select_db($Table_name) or die(mysql_error());

$firstnameone" => $_POST['firstnameone'];
$lastnameone" => $_POST['lastnameone'];
$emailone" => $_POST['emailone'];

mysql_query("INSERT INTO $Table_name('firstnameone', 'secondnameone', 'emailone') VALUES('$firstnameone', '$lastnameone', '$emailone');



*/

$servername = "127.0.0.1";
$username   = "root";
$password   = "password";
$Table_name = "users";

$postdata = file_get_contents("php://input");
$request = json_decode($postdata);

$firstnameone = $request->firstnameone;
$lastnameone = $request->lastnameone;
$emailone = $emailone->emailone;

$conn = new sqli($servername, $username, $password, $dbname);
//check connection
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO $Table_name('firstnameone', 'secondnameone', 'emailone') VALUES('$firstnameone', '$lastnameone', '$emailone');

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

?>