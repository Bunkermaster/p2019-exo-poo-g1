<?php
/**
 * Created by PhpStorm.
 * @author Yann Le Scouarnec <bunkermaster@gmail.com>
 * Date: 03/05/2017
 * Time: 10:00
 */
require_once "vendor/autoload.php";
$human = new \Hetic\Human(80);
echo $human->getWeight().PHP_EOL;
$human->setWeight(82);
echo $human->getWeight().PHP_EOL;
