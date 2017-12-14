<?php
$unpaired = array("1","3","5","7","9");
$paired = array("2","4","6","8","10");
for($i = 0; $i<count($unpaired); $i++) {
    echo "<font color='red'>".$unpaired[$i] . " ";
    echo "<font color='blue'>".$paired[$i] . " ";
}
?>