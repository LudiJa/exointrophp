<?php

function EstPair($nbr) {
    if($nbr % 2 == 0 ) {
    // echo "$nbr est Pair.";
        return true;
    } else {
        // echo "$nbr est Impair.";
        return false;
    };
};

// echo EstPair(8);


$somme=0;
for($i = 1; $i<= 30; $i++) {
    if (EstPair($i) == true) {
    $somme += $i;
};
};

echo $somme;