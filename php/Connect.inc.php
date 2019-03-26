<?php
 
     $Server = "localhost";
     $UserName ="root";
     $Password = "";
     $DataBaseName= "protfoliodatabase";
     $TableName ="portfolio";



     try {
    $conn = new PDO("mysql:host=$Server;dbname=$DataBaseName", $UserName, $Password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
    $conn = null;



?>