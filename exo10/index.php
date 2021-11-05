<?php

function echange($a, $b) {
$c = $a;
$a = $b;
$b = $c;
echo "a= $a et b = $b";
};

echange(5,6);