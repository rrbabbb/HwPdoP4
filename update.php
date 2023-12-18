<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulier</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="product_naam" placeholder="Product naam" required>
        <input type="text" name="prijs_per_stuk" placeholder="Prijs per stuk" required>
        <input type="text" name="omschrijving" placeholder="Omschrijving" required>

        <input type="submit" name="submit" value="Verzenden" required>
    </form>
</body>
</html>


<?php

    require_once 'dbconn.php';


    if(isset($_POST['submit'])){
        $product_naam = $_POST['product_naam'];
        $prijs_per_stuk = $_POST['prijs_per_stuk'];
        $omschrijving = $_POST['omschrijving'];

        $query = 'update producten set product_naam=:product_naam, prijs_per_stuk=:prijs_per_stuk, omschrijving=:omschrijving where product_code=:product_code';
        $result = $conn->prepare($query);
        $data = ['product_naam' => $product_naam, 'prijs_per_stuk' => $prijs_per_stuk, 'omschrijving' => $omschrijving, 'product_code' => 2];
        $result->execute($data);
    };    


?>