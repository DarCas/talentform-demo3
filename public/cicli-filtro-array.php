<?php
/**
 * Stampa i valori pari di un array numeri casuale
 *
 * La funzione range di PHP crea un array che va da start a end.
 */
$numeri = range(17, 50);

echo '<h1>FOR</h1>';

for (
    $i = 0;                 // Dichiarazione contatore
    $i < count($numeri);    // Condizione da verificare
    ++$i                    // Incremento contatore
) {
    $numero = $numeri[$i];  // Metto nella variabile numero il valore preso dall'array

    if ($numero % 2 === 0) {
        echo $numero . '<br>';
    }
}

echo '<h1>FOREACH</h1>';

foreach ($numeri as $numero) {
    if ($numero % 2 === 0) {
        echo $numero . '<br>';
    }
}

echo '<h1>WHILE</h1>';

$i = 0;                         // Dichiarazione contatore

while (
    $i < count($numeri)         // Condizione da verificare
) {
    $numero = $numeri[$i];      // Metto nella variabile numero il valore preso dall'array

    if ($numero % 2 === 0) {
        echo $numero . '<br>';
    }

    ++$i;                       // Incremento contatore
}

echo '<h1>DO-WHILE</h1>';

$i = 0;                         // Dichiarazione contatore

do {
    $numero = $numeri[$i];      // Metto nella variabile numero il valore preso dall'array

    if ($numero % 2 === 0) {
        echo $numero . '<br>';
    }

    ++$i;                       // Incremento contatore
} while(
    $i < count($numeri)         // Condizione da verificare
);
