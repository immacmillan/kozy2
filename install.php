<?php

/**
try {
    $connection =  new PDO("mysql:host=$host", $username, $password, $options);
    $sql = file_get_contents("data/init.sql");
    $connection->exec($sql);
    
    echo "Database and table users created successfully.";    
}
*/

if (isset($_POST['submit']){
    require '../config.php';
    
    
    try
    {
        $connection =  new PDO("mysql:host=$host", $username, $password, $options);
        //install new user code
        $new_user = array(
            "firstnameone" => $_POST['firstnameone'],
            "lastnameone" => $_POST['lastnameone'],
            "emailone" => $_POST['emailone']
        );
        $sql = sprintf(
            "INSERT INTO %s (%s) values (%s)",
            "users",
            implode(",", array_keys($new_user)),
            ":" . implode(", :", array_keys($new_user))
        );
        
        $statement = $connection->prepare($sql);
        $statement->execute($new_user);
        
    }
    
    catch(PDOException $error)
    {
        echo $sql . "<br>" . $error->getMessage();
    }
    
}


?>