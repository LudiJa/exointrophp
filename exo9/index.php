<?php
// 5! = 5*4*3*2*1

$somme = 1;
for($i = 6; $i > 1 ; $i--) {
    $somme *= $i;
};

echo $somme;