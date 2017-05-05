<?php

namespace Hetic;

/**
 * Class Promotion
 * @author Yann Le Scouarnec <bunkermaster@gmail.com>
 * @package Hetic
 */
class Promotion
{
//    private $eleve = array(); // avant la 5.4
    /** @var array $eleve */
    private $eleve = [];

    /**
     * @return array
     */
    public function getEleve(): array
    {

        return $this->eleve;
    }

    public function addEleve(Eleve $eleve)
    {
        $this->eleve[$eleve->getUuid()] = $eleve;

        return $this;
    }

    public function removeEleve($uuid)
    {
        unset($this->eleve[$uuid]);
    }

}
