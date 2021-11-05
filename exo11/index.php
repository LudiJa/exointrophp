<!-- 347872 / 3600 = h
h / 60 = m
m / 60 = s 
347872s équivaut à 96h37m52s -->

<?php

function heure($seconde) {
    $heure = (floor($seconde / 3600));
    $rest = $seconde % 3600;
    $min = (floor($rest / 60));
    $rest = $rest % 60;
    echo "L'heure est $heure h $min min $rest s";
};

heure(347872);