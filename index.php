<?php
include __DIR__ . '/user.php';
include __DIR__ . '/extents/Sub.php';
include __DIR__ . '/extents/NotSub.php';
include __DIR__ . '/products.php';
include_once __DIR__ . '/traits/Loggable.php';

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



// eccezione
class FileNotFoundException extends Exception { }

try {
    if (!file_exists('file.txt')) {
        throw new FileNotFoundException('Il file richiesto non esiste.');
    }
} catch (FileNotFoundException $e) {
    echo $e->getMessage();
}
?>

