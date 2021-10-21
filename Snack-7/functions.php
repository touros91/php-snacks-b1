<?php 

function media ($numeri) {
    $somma = 0;
    foreach ($numeri as $numero) {
        $somma += $numero;
    }
    return round($somma / count($numeri), 2);
}

?>