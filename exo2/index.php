<?php

function position($alpha)
{
$posx = cos($alpha);
$posy = sin($alpha);
return "Le point P est en x $posx et y $posy";
};

position(5);