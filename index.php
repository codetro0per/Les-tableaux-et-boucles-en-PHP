<?php
$films = [
    "INDIANA JONES ET LA DERNIÈRE CROISADE" => 1989 ,
    "INDIANA JONES ET LE ROYAUME DU CRÂNE DE CRISTAL" => 2008,
    "LES AVENTURES DU JEUNE INDIANA JONES" => 1992
];
asort($films,SORT_NATURAL);
 foreach ($films as $key =>$film) {
    echo " $film - $key <br>";
 }