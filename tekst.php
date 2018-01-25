<?php
/**
 * Created by PhpStorm.
 * User: Reppi
 * Date: 1/25/2018
 * Time: 10:42 AM
 */
class tekst
{//klassi algus
//klassi omadused- väljas - fields
//klassi muutuja
    var $sone = ''; //teksti kirjeldavad sõnad
//klassi tegevused
//meetodid
//teksti määrammine
//maaraTekst('Tere Maailm!')
    function maaraTekst($sone)
    {
    }

//teksti väljastamine
    function prindiTekst()
    {
        echo $this->sone . '<br />';
    }
} //klassi lõpp