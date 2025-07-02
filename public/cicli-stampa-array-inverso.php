<?php
/**
 * Stampare gli elementi dell'array $numeri con i cicli:
 *  - for
 *  - foreach
 *  - while
 *  - do-while
 */

$alfabetoAscendente = range('A', 'Z');

$alfabetoDiscendente = [];

for (
    $index = count($alfabetoAscendente) - 1;    // Dichiarazione contatore
    $index >= 0;                                // Condizione da verificare
    --$index                                    // Incremento contatore
) {
    $alfabetoDiscendente[] = $alfabetoAscendente[$index];
}

echo '<h1>FOR</h1>';

for (
    $index = 0;                                 // Dichiarazione contatore
    $index < count($alfabetoDiscendente);       // Condizione da verificare
    ++$index                                    // Incremento contatore
) {
    echo $alfabetoDiscendente[$index] . '<br>';
}

echo '<h1>FOREACH</h1>';

foreach ($alfabetoDiscendente as $lettera) {
    echo "{$lettera} <br>";
}

echo '<h1>WHILE</h1>';

$index = 0;                     // Dichiarazione contatore

while (
    $index < count($alfabetoDiscendente)     // Condizione da verificare
) {
    echo $alfabetoDiscendente[$index] . '<br>';

    ++$index;                   // Incremento contatore
}

echo '<h1>DO-WHILE</h1>';

$index = 0;                     // Dichiarazione contatore

do {
    echo $alfabetoDiscendente[$index] . '<br>';

    ++$index;                   // Incremento contatore
} while (
    $index < count($alfabetoDiscendente)     // Condizione da verificare
);
