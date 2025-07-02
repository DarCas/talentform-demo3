<?php
declare(strict_types=1);

/**
 * Stampa i valori pari di un array numeri casuale
 *
 * La funzione range di PHP crea un array che va da start a end.
 */
$numeri = range(17, 50);

/**
 * @param int $numero
 * @return bool
 */
function isOdd(int $numero): bool
{
    return $numero % 2 === 1;
}

/**
 * @param int $numero
 * @return bool
 */
function isEven(int $numero): bool
{
    return !isOdd($numero);
}

/**
 * @param int $numero
 * @return void
 */
function stampa(int $numero): void
{
    echo $numero . '<br>';
}

/**
 * @param int $numero
 * @return void
 */
function stampa_pari(int $numero): void
{
    if (isEven($numero)) {
        stampa($numero);
    }
}

/**
 * @param int $numero
 * @return void
 */
function stampa_dispari(int $numero): void
{
    if (isOdd($numero)) {
        stampa($numero);
    }
}

echo '<h1>FOR</h1>';

for (
    $i = 0;                 // Dichiarazione contatore
    $i < count($numeri);    // Condizione da verificare
    ++$i                    // Incremento contatore
) {
    $numero = $numeri[$i];  // Metto nella variabile numero il valore preso dall'array

    stampa_pari($numero);
}

echo '<h1>FOREACH</h1>';

foreach ($numeri as $numero) {
    stampa_dispari($numero);
}

echo '<h1>WHILE</h1>';

$i = 0;                         // Dichiarazione contatore

while (
    $i < count($numeri)         // Condizione da verificare
) {
    $numero = $numeri[$i];      // Metto nella variabile numero il valore preso dall'array

    stampa_pari($numero);

    ++$i;                       // Incremento contatore
}

echo '<h1>DO-WHILE</h1>';

$i = 0;                         // Dichiarazione contatore

do {
    $numero = $numeri[$i];      // Metto nella variabile numero il valore preso dall'array

    stampa_dispari($numero);

    ++$i;                       // Incremento contatore
} while(
    $i < count($numeri)         // Condizione da verificare
);
