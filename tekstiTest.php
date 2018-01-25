<?php
/**
 * Created by PhpStorm.
 * User: Reppi
 * Date: 1/25/2018
 * Time: 10:52 AM
 */
require_once 'tekst.php';
//loome teksti objekti
$minuTekst = new tekst(sone: 'Tere maailm!');
//määrame tekstile konkreetne sisu
//vaatame, mis objekti sees
echo '<pre>';
echo '</pre>';
//prindime välja
$minuTekst->prindiTekst();


//loome veel ühe objekti
$mustTekst = new tekst(sone: 'Must tekst.');
//vaatame, mis objekti sees
echo '<pre>';
echo '</pre>';
//prindime välja
$mustTekst->prindiTekst();