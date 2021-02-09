<?php

/**
 * 1. Créez une classe Habitation, elle contiendra les propriétés:
 *    - pays ( string )
 *    - ville ( string )
 *    - code postal ( entier ou string )
 *    - chambres ( entier )
 *    - pièces ( entier )
 *
 * Définissez tous les setters et les getters.
 *
 *
 *
 * 2. Créez une classe Maison qui étend de Habitation, elle contiendra les propriétés:
 *    - jardin ( booleen )
 *    - etages ( entier )
 *    - garage ( booleen )
 *
 * Définissez tous les getters et les setters.
 *
 *
 *
 * 3. Créez une classe Appartement qui étend de habitation, elle contiendra les propriétés:
 *    - garage ( booleen )
 *
 * Définissez tous les getters et les setters.
 *
 *
 *
 * 4. Créez deux instances de Maison et invoquez toutes les méthodes définies, sauf les setters ( dans index.php ).
 *
 *
 *
 * 5. Créez une instance de Appartement et invoquez toutes les méthodes définies, y compris les setters ( dans index.php ).
 */

require "./classes/Habitation.php";
require "./classes/Maison.php";
require "./classes/Appartement.php";

$maison1 = new Maison("Belgique", "Chimay", "6464", "3", "10", true, "2", false);
$maison2 = new Maison("France", "Albertville", "73200", "5", "7", false, "0", true);

echo $maison1->getPays() . "<br>";
echo $maison1->getVille() . "<br>";
echo $maison1->getCodePostal() . "<br>";
echo $maison1->getChambre() . "<br>";
echo $maison1->getPiece() . "<br>";
echo $maison1->hasJardin() . "<br>";
echo $maison1->getEtage() . "<br>";
echo $maison1->hasGarage() . "<br>";

echo $maison2->getPays() . "<br>";
echo $maison2->getVille() . "<br>";
echo $maison2->getCodePostal() . "<br>";
echo $maison2->getChambre() . "<br>";
echo $maison2->getPiece() . "<br>";
echo $maison2->hasJardin() . "<br>";
echo $maison2->getEtage() . "<br>";
echo $maison2->hasGarage() . "<br>";

$appartement1 = new Appartement("Belgique", "chimay", "6464", "3", "7", true);

$appartement1->setPays("France");
$appartement1->setVille("Grenoble");
$appartement1->setCodePostal(38000);
$appartement1->setChambre(3);
$appartement1->setPiece(12);
$appartement1->setGarage(False);

echo $appartement1->getPays() . "<br>";
echo $appartement1->getVille() . "<br>";
echo $appartement1->getCodePostal() . "<br>";
echo $appartement1->getChambre() . "<br>";
echo $appartement1->getPiece() . "<br>";
echo $appartement1->hasGarage() . "<br>";