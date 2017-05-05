<?php

namespace Hetic;

/**
 * Class Eleve
 * @property string uuid
 * @author Yann Le Scouarnec <bunkermaster@gmail.com>
 * @package Hetic
 */
class Eleve
{
    private static $listeEleves = [];
    private $uuid;

    /**
     * Eleve constructor.
     */
    public function __construct()
    {
        $this->uuid = uniqid();
        self::$listeEleves[$this->uuid] = $this;
    }

    public function __destruct()
    {
        unset(self::$listeEleves[$this->uuid]);
    }

    /**
     * @return string
     */
    public function getUuid(): string
    {
        return $this->uuid;
    }

    /**
     * @return array
     */
    public static function getListeEleves(): array
    {
        return self::$listeEleves;
    }

    public static function removeEleve($uuid)
    {
        $eleve = self::$listeEleves[$uuid];
        unset($eleve);
        var_dump(self::$listeEleves[$uuid]);
        unset(self::$listeEleves[$uuid]);
    }
}
