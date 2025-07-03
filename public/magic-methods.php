<?php
declare(strict_types=1);

/**
 * Metodi magici
 * @link https://www.php.net/manual/it/language.oop5.magic.php
 */
class Human
{
    /**
     * Metodo richiamato al bootstrap della classe
     */
    function __construct(
        protected string $nome,
        protected string $cognome,
        protected int    $eta,
        protected string $sesso
    )
    {
    }

    /**
     * Metodo richiamato alla distruzione dell'oggetto perché lo script è terminato o perché ho cancellato la
     * variabile che contiene l'oggetto.
     */
    function __destruct()
    {
    }

    function __clone()
    {
        $this->nome = '';
        $this->cognome = '';
        $this->eta = 0;
    }

    function __set(string $nome, mixed $valore)
    {
        if (property_exists($this, $nome)) {
            $this->{$nome} = $valore;
        }
    }

    function __get(string $nome)
    {
        if (property_exists($this, $nome)) {
            return $this->{$nome};
        }

        return null;
    }

    function __sleep(): array
    {
        return [
            'nome',
            'cognome',
            'eta',
            'sesso',
        ];
    }

    function __wakeup()
    {

    }

    function __toString(): string
    {
        return "{$this->cognome}, {$this->nome}";
    }
}

try {
    echo '<pre>';

    $dario = new Human('Dario', 'Casertano', 43, 'M');
    $ciccio = clone $dario;

    print_r($dario);

    $ciccio->nome = 'Ciccio';
    $ciccio->cognome = 'Ciccio';
    $ciccio->eta = 50;

    print_r($ciccio);

    echo $dario->nome . PHP_EOL;
    echo $dario->cognome . PHP_EOL;
    echo $dario->eta . PHP_EOL;

    echo PHP_EOL;

    echo $dario;

    unset($dario, $ciccio);
} catch (\Exception $e) {
    echo '<pre>';
    print_r($e);
}
