<?php
function isExpired($expirationDate) {
    $now = new DateTime();

    $expiration = DateTime::createFromFormat('m/y', $expirationDate);
    $interval = $now->diff($expiration);
    return $interval->invert == 1;
}
//controllo della carta scaduta
// $expirationDate = "02/22";
// if (isExpired($expirationDate)) {
//     echo "La carta è scaduta";
// } else {
//     echo "La carta è valida";
// }
?>