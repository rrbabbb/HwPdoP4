<?php
    include 'dbconn.php';


    $query = 'SELECT * FROM producten';

    $statement = $conn->prepare($query);
    $statement->execute();
    $result = $statement->fetchAll();


    
?>
<a href="delete.php?product_code=2">Link</a>