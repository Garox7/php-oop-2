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

echo('<hr>');

$product1 = new Product(
    '00001',
    'Croccantini al Pesce',
    8549,
    'description',
    234,
    'Cibo'
);
$product1->setSalesMount(5, 8);
var_dump($product1);
var_dump($product1->isAvaiable());
var_dump($product1->getPrice());

echo('<hr>');

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