<?php
/**
 * Stampare gli elementi dell'array $numeri con i cicli:
 *  - for
 *  - foreach
 *  - while
 *  - do-while
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

for (
    $i = 0;                 // Dichiarazione contatore
    $i < count($numeri);    // Condizione da verificare
    ++$i                    // Incremento contatore
) {
    echo $numeri[$i] . '<br>';
}

echo '<h1>FOREACH</h1>';

foreach($numeri as $numero) {
    echo "{$numero} <br>";
}

echo '<h1>WHILE</h1>';

$i = 0;                     // Dichiarazione contatore

while (
    $i < count($numeri)     // Condizione da verificare
) {
    echo $numeri[$i] . '<br>';

    ++$i;                   // Incremento contatore
}

echo '<h1>DO-WHILE</h1>';

$i = 0;                     // Dichiarazione contatore

do {
    echo $numeri[$i] . '<br>';

    ++$i;                   // Incremento contatore
} while(
    $i < count($numeri)     // Condizione da verificare
);
