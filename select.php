<?php
    include 'dbconn.php';


    $query = 'SELECT * FROM winkel.Producten';

    $statement = $conn->prepare($query);

    $statement->execute();

    $result = $statement->fetchAll();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <table>
        <tr>
            <th>Product code</th>
            <th>Product naam</th>
            <th>Prijs per stuk</th>
            <th>Omschrijving</th>
        </tr>

        <?php 
            foreach($result as $value){
                echo "<tr>";
                echo "<td>" . $value['product_code'] . "</td>";
                echo "<td>" . $value['product_naam'] . "</td>";
                echo "<td>" . $value['prijs_per_stuk'] . "</td>";
                echo "<td>" . $value['omschrijving'] . "</td>";
                echo "</tr>";
            }
        ?>
    </table>

</body>
</html>