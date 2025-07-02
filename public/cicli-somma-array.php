<?php
/**
 * Sommare gli elementi dell'array $numeri con i cicli:
 *  - for
 *  - foreach
 *  - while
 *  - do-while
 * e stampare il risultato
 */

$numeri = [
    2,
    5,
    8,
    3,
    10,
    24,
    16,
];

echo '<h1>FOR</h1>';

$somma = 0;                         // Credo una variabile

for (
    $i = 0;                         // Dichiarazione contatore
    $i < count($numeri);            // Condizione da verificare
    ++$i                            // Incremento contatore
) {
    $somma = $somma + $numeri[$i];  // Aggiungo a $somma il valore
}

echo "<h3>Somma: {$somma}</h3>";    // Stampo la variabile $somma

echo '<h1>FOREACH</h1>';

$somma = 0;                         // Credo una variabile

foreach($numeri as $numero) {
    $somma = $somma + $numero;
}

echo "<h3>Somma: {$somma}</h3>";    // Stampo la variabile $somma

echo '<h1>WHILE</h1>';

$somma = 0;                         // Credo una variabile

$i = 0;                             // Dichiarazione contatore

while (
    $i < count($numeri)             // Condizione da verificare
) {
    $somma = $somma + $numeri[$i];  // Aggiungo a $somma il valore

    ++$i;                           // Incremento contatore
}

echo "<h3>Somma: {$somma}</h3>";    // Stampo la variabile $somma

echo '<h1>DO-WHILE</h1>';

$somma = 0;                         // Credo una variabile

$i = 0;                             // Dichiarazione contatore

do {
    $somma = $somma + $numeri[$i];  // Aggiungo a $somma il valore

    ++$i;                           // Incremento contatore
} while(
    $i < count($numeri)             // Condizione da verificare
);

echo "<h3>Somma: {$somma}</h3>";    // Stampo la variabile $somma
