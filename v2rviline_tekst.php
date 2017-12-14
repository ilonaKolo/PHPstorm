<?php
for($rida = 1; $rida <= 5; $rida++) {
    $varv = '#';
    for($kord =1; $kord <= 6; $kord++){
        $symbol = rand(0, 20);
        $varv = $varv.$symbol;
    }
    echo '<font color="'.$varv.'">'.
        'Värviline tekst'.
        '</font>'.
        '<br />';
}