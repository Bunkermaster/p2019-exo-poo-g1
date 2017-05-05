<?php
/**
 * Created by PhpStorm.
 * @author Yann Le Scouarnec <bunkermaster@gmail.com>
 * Date: 05/05/2017
 * Time: 11:21
 */
require_once "vendor/autoload.php";

use Hetic\{Eleve, Promotion};

$webp2019g1 = new Promotion();
$webp2018 = new Promotion();

echo 'eleves'.PHP_EOL;
var_dump(Eleve::getListeEleves());

$eleve = new Eleve();
$uuid = $eleve->getUuid();
$webp2019g1->addEleve($eleve);
$webp2019g1->addEleve(new Eleve());
$webp2019g1->addEleve(new Eleve());

$webp2018->addEleve(new Eleve());
$webp2018->addEleve(new Eleve());
$webp2018->addEleve(new Eleve());

Eleve::removeEleve($uuid);

echo '$webp2019g1'.PHP_EOL;
var_dump($webp2019g1);
echo '$webp2018'.PHP_EOL;
var_dump($webp2018);
echo 'eleves'.PHP_EOL;
var_dump(Eleve::getListeEleves());
