<?php
namespace Hetic;

/**
 * Class Man
 * @author Yann Le Scouarnec <bunkermaster@gmail.com>
 * @package Hetic
 */
class Man extends Human
{
    /**
     * @return int
     */
    public function getWeight()
    {

        return 80;
    }

    /**
     * @return string
     */
    public function boireDesCanons()
    {
        return "J'aime le foot";
    }
}
