<?php
include __DIR__ . '/classes/User.php';
include __DIR__ . '/classes/CreditCard.php';
include __DIR__ . '/classes/Product.php';

// USER
$user1 = new User(
    'Mario',
    'Rossi',
    'Via Milano 1',
    new CreditCard(),
    'BENVENUTO10',
    'f'
);
var_dump($user1);

$product1 = new Product();
var_dump($product1);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>