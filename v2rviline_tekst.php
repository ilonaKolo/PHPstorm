<?php
header('Refresh: 0.3');
for($rida = 1; $rida <= 5; $rida++) {
    $varv = '#';
    for($kord =1; $kord <= 6; $kord++){
        $symbol = rand(0, 15);
        $varv = $varv.$symbol;
    }
    echo '<font color="'.$varv.'">'.
        'Värviline tekst'.
        '</font>'.
        '<br />';
}

//
$a = 5; $b = 2;
$c = ++$a;
$d = --$b;
echo 'a = '.$a.'<br />';
echo 'b = '.$b.'<br />';
echo 'c = '.$c.'<br />';
echo 'd = '.$d.'<br />';