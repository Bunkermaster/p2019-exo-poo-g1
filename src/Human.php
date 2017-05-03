<?php

namespace Hetic;

/**
 * Class Human
 * @author Yann Le Scouarnec <bunkermaster@gmail.com>
 * @package Hetic
 */
class Human
{
    /**
     * @var int le poids des années
     */
    private $weight;

    /**
     * Human constructor.
     * @param int $weight
     */
    public function __construct($weight)
    {
        $this->weight = $weight;
    }

    /**
     * renvoie le poids
     * @return int
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param int $weight
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }



}