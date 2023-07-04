<?php
include_once __DIR__ . '/models/Toys.php';
include_once __DIR__ . '/models/Food.php';

$productsArray = [];

$prodotto1 = new Toys('Pallina');
$prodotto1-> setPrice(10);
$prodotto1-> setCategories(['Cane','Gatto']);
$prodotto1-> setProductImg('prodotto.png');
$productsArray['prodotto1'] = $prodotto1;

$prodotto2 = new Food('Croccantini');
$prodotto2-> setPrice(35);
$prodotto2-> setCategories(['Cane']);
$prodotto2-> setProductImg('prodotto.png');
$prodotto2-> setDescription('Croccantini fantastici!');



$productsArray['prodotto2'] = $prodotto2;

var_dump($productsArray)
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous' />
    <title>Pet Store</title>
</head>

<body>

</body>

</html>