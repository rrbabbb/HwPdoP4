<?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $database = "winkel";

    try 
    {
        $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
        echo "De connectie is gelukt";
    }

    catch(PDOException $e)
    {
        echo "er is een fout opgetreden, namelijk deze fout: " . $e->getMessage();
    }
?> 