<?php
declare(strict_types=1);

/**
 * Stampa i valori pari di un array numeri casuale
 *
 * La funzione range di PHP crea un array che va da start a end.
 */
$numeri = range(17, 50);

class Stampa
{
    /**
     * @param int $numero Numero sul quale fare le elaborazioni
     */
    function __construct(protected int $numero)
    {
    }

    /**
     * @return void
     */
    public function stampa_pari(): void
    {
        if ($this->isEven()) {
            $this->stampa();
        }
    }

    /**
     * @return void
     */
    public function stampa_dispari(): void
    {
        if ($this->isOdd()) {
            $this->stampa();
        }
    }

    /**
     * @return void
     */
    private function stampa(): void
    {
        echo $this->numero . '<br>';
    }

    /**
     * @return bool
     */
    private function isOdd(): bool
    {
        return $this->numero % 2 === 1;
    }

    /**
     * @return bool
     */
    private function isEven(): bool
    {
        return !$this->isOdd();
    }
}

echo '<h1>FOR</h1>';

for (
    $i = 0;                 // Dichiarazione contatore
    $i < count($numeri);    // Condizione da verificare
    ++$i                    // Incremento contatore
) {
    $numero = $numeri[$i];  // Metto nella variabile numero il valore preso dall'array

    $stampa = new Stampa($numero);
    $stampa->stampa_pari();
}

echo '<h1>FOREACH</h1>';

foreach ($numeri as $numero) {
    $stampa = new Stampa($numero);
    $stampa->stampa_dispari();
}

echo '<h1>WHILE</h1>';

$i = 0;                         // Dichiarazione contatore

while (
    $i < count($numeri)         // Condizione da verificare
) {
    $numero = $numeri[$i];      // Metto nella variabile numero il valore preso dall'array

    $stampa = new Stampa($numero);
    $stampa->stampa_pari();

    ++$i;                       // Incremento contatore
}

echo '<h1>DO-WHILE</h1>';

$i = 0;                         // Dichiarazione contatore

do {
    $numero = $numeri[$i];      // Metto nella variabile numero il valore preso dall'array

    $stampa = new Stampa($numero);
    $stampa->stampa_dispari();

    ++$i;                       // Incremento contatore
} while (
    $i < count($numeri)         // Condizione da verificare
);
