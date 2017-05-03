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
    private $firstname;
    private $lastname;
    private $hairColor;
    private $height;
    private static $count = 0;
    const MAX_PEEPS = 5;
    /**
     * Human constructor.
     * @param int $weight
     * @param $firstname
     * @param $lastname
     * @param $hairColor
     * @param $height
     */
    public function __construct(
            $firstname,
            $lastname,
            $hairColor = 'chauve',
            $height = 1.70,
            $weight = 80
    )
    {
        $this->weight = $weight;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->hairColor = $hairColor;
        $this->height = $height;
        self::setCount(self::getCount() + 1);
    }

    public function __destruct()
    {
        self::setCount(self::getCount() - 1);
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

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param mixed $firstname
     * @return $this
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param mixed $lastname
     * @return $this
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getHairColor()
    {
        return $this->hairColor;
    }

    /**
     * @param mixed $hairColor
     * @return $this
     */
    public function setHairColor($hairColor)
    {
        $this->hairColor = $hairColor;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $height
     * @return $this
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * @return int
     */
    public static function getCount(): int
    {
        return self::$count;
    }

    /**
     * @param int $count
     * @throws \Exception
     */
    private static function setCount($count)
    {
        if(self::$count > self::MAX_PEEPS){
            throw new \Exception('Hahahahah trop de gens');
        }
//        echo $count.PHP_EOL;
        self::$count = $count;
    }

}
