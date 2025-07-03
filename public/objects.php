<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/assets.inc.php';

/**
 * "Contratto" con cui definisco quali metodi pubblici (le funzioni), la classe che implementerà (implements)
 * l'interfaccia, dovrà necessariamente e obbligatoriamente mettere a disposizione.
 */
interface VeicoloInterface
{
    function start(): void;

    function stop(): void;

    function frenata(): void;

    function frecce(string $direzione): void;

    function luci(int $intensita): void;
}

/**
 * "Contratto" con cui definisco le proprietà standard (le variabili) della classe. Siccome implemento
 * un'interfaccia, dichiarerò anche i metodi astratti.
 */
abstract class Veicolo implements VeicoloInterface
{
    use Fullname;

    protected string $marca;
    protected string $modello;
    protected string $colore;
    private string $alimentazione;
    private string $cambio;
    private int $numeroRuote;
    protected string $coloreLuci = ColoreLuci2::Alogena->name;

    public function __construct(
        string $marca,
        string $modello,
        string $colore,
        string $alimentazione,
        string $cambio,
        int    $numeroRuote
    )
    {
        $this->marca = $marca;
        $this->modello = $modello;
        $this->colore = $colore;
        $this->alimentazione = $alimentazione;
        $this->cambio = $cambio;
        $this->numeroRuote = $numeroRuote;
    }

    abstract public function start(): void;

    abstract public function stop(): void;

    abstract public function frenata(): void;

    abstract public function frecce(string $direzione): void;

    abstract public function luci(int $intensita): void;

    public function getColore(): string
    {
        return $this->colore;
    }

    function isLusso(): bool
    {
        return in_array($this->marca, [
            'Ferrari',
            'Mercedes',
        ]);
    }
}

/**
 * La classe Auto estende la classe astratta Veicolo
 */
class Auto extends Veicolo
{
    public function __construct(
        string $marca,
        string $modello,
        string $colore,
        string $alimentazione,
        string $cambio
    )
    {
        parent::__construct($marca, $modello, $colore, $alimentazione, $cambio, 4);
    }

    public function start(): void
    {
        // Farò qualcosa
    }

    public function stop(): void
    {
        // Farò qualcosa
    }

    public function frecce(string $direzione): void
    {
        // TODO: Implement frecce() method.

        echo "Vado a: {$direzione}";
    }

    public function frenata(): void
    {
        // TODO: Implement frenata() method.
    }

    public function luci(int $intensita): void
    {
        // TODO: Implement luci() method.
    }

    public function setColoreLuci(ColoreLuci $colore): void
    {
        $this->coloreLuci = $colore->name;
    }
}

/**
 * La classe astratta Aereo implementa l'interfaccia VeicoloInterface
 */
abstract class Aereo implements VeicoloInterface
{
    use Fullname;

    protected string $marca;
    protected string $modello;
    protected string $typology;

    function __construct(string $marca, string $modello, string $typology)
    {
        $this->marca = $marca;
        $this->modello = $modello;
        $this->typology = $typology;
    }

    public function start(): void
    {
        // TODO: Implement start() method.
    }

    public function stop(): void
    {
        // TODO: Implement stop() method.
    }

    public function frenata(): void
    {
        // TODO: Implement frenata() method.
    }

    public function frecce(string $direzione): void
    {
        // TODO: Implement frecce() method.
    }

    public function luci(int $intensita): void
    {
        // TODO: Implement luci() method.
    }
}

/**
 * La classe Jet estende la classe astratta Aereo
 */
class Jet extends Aereo
{
    function __construct(string $marca, string $modello)
    {
        parent::__construct($marca, $modello, 'Jet');
    }
}

try {
    /**
     * Quando istanzio una classe, creo un oggetto.
     */
    $fiatPunto = new Auto('Fiat', 'Punto', 'Blu', 'Gasolio', 'Manuale');

    /**
     * Accesso al metodo pubblico setColoreLuci
     */
    $fiatPunto->setColoreLuci(ColoreLuci::Led);

    echo '<pre>';
    echo $fiatPunto->getColore() . PHP_EOL;
    echo ($fiatPunto->isLusso() ? 'È di lusso' : 'Non è di lusso') . PHP_EOL;

    print_r($fiatPunto);

    echo '<hr>';

    $aereo = new Jet('Boeing', '787');
    echo $aereo;
} catch (\InvalidArgumentException $e) {
    echo 'Errore: ' . $e->getMessage();
} catch (\Exception $e) {
    echo '<pre>';
    print_r($e);
}
