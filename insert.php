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
    include 'dbconn.php';

    if(isset($_POST['submit'])){
        $product_naam = $_POST['product_naam'];
        $prijs_per_stuk = $_POST['prijs_per_stuk'];
        $omschrijving = $_POST['omschrijving'];

        $query = 'INSERT INTO Producten (product_naam, prijs_per_stuk, omschrijving) VALUES (?, ?, ?)';
        $result = $conn->prepare($query);
        $data = [$product_naam, $prijs_per_stuk, $omschrijving];
        $result->execute($data);
    };    
?>