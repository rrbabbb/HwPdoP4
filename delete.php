<?php

include 'dbconn.php';

$product_code = $_GET['product_code'];


$query = 'delete from Producten where product_code=:product_code';
$result = $conn->prepare($query);
$data = ['product_code' => $product_code];
$result->execute($data);

?>