<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="firstname" placeholder="Naam" required>
        <input type="text" name="lastname" placeholder="Achternaam" required>
        <input type="number" name="age" min="1" max="99" placeholder="Leeftijd" required>
        <input type="text" name="adress" placeholder="Adres" required>
        <input type="email" name="email" placeholder="Mail" required>
        
        <input type="submit" name="submit" value="Verstuur">
    </form>
</body>
</html>

<?php
    if(isset($_POST["submit"])){
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $age = $_POST["age"];
        $adress = $_POST["adress"];
        $email = $_POST["email"];
    
        echo " Uw gegevens: <br> $firstname <br> $lastname <br> $age <br> $adress <br> $email";
    }
?>