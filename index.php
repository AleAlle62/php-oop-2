<?php
include __DIR__ . '/user.php';
include __DIR__ . '/extents/Sub.php';
include __DIR__ . '/extents/NotSub.php';
include __DIR__ . '/products.php';
include __DIR__ . '/card.php';

// stampra per vedere che sia giusto lo sconto
$alessio= new NotSub('alessio', 'allegrini', '20/21');
$alessio= new Sub('alessio', 'allegrini', '20/21');
var_dump($alessio);

// stampra per vedere che sia giusto gli oggetti
$cuccia = new Products('cuccia', 23);
var_dump($cuccia);

// stampra per vedere che sia giusta la carta
$esito = $alessio->isExpired();
var_dump($esito);

?>

