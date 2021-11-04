<?php

function EstPair($nbr) {
if($nbr % 2 === 0 ) {
    echo "$nbr est Pair.";
    } else {
        echo "$nbr est Impair.";
};
};

echo EstPair(8);