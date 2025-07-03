<?php
declare(strict_types=1);

/**
 * Funzionalità che è possibile iniettare in qualsiasi classe che abbia le proprietà $marca e $modello.
 *
 * @property string $marca
 * @property string $modello
 */
trait Fullname
{
    /**
     * Metodo magico per stampare un oggetto
     *
     * @return string
     */
    function __toString(): string
    {
        return "{$this->marca} {$this->modello}";
    }
}

/**
 * Enumeratore PURO
 */
enum ColoreLuci
{
    case Led;
    case Alogena;
    case Incandescente;
    case Cinema;
}

/**
 * Enumeratore BACKED
 *  - from
 *  - tryFrom
 */
enum ColoreLuci2: int
{
    case Led = 0;
    case Alogena = 1;
    case Incandescente = 2;
    case Cinema = 3;

    /**
     * Per recuperare il nome della costante a partire dal valore.
     * Si interroga con ColoreLuci2::getName(*valore*)
     * Ex.: echo ColoreLuci2::getName(0);
     *
     * @param int $value
     * @return string|null
     */
    static function getName(int $value): ?string
    {
        return self::tryFrom($value)?->name;
    }
}
