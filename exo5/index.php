<?php

$pyramide = array();
for($i = 1; $i<= 25; $i++) {
    array_push($pyramide, $i);
    foreach ($pyramide as $p) {
        echo $p;};
        echo "<br/>";
}