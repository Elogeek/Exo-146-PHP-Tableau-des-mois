<?php

//exo 1
$array = [
    "janvier", "février", "mars", "avril", "mai", "juin",
    "juillet", "aout", "septembre", "octobre", "novembre", "decembre"
] ;

//exo 2
echo $array[2] . "<br>";

//exo 3
echo $array[5]."<br>";

//exo 4
array_splice($array, 7, 1, "août");
echo $array[7] . "<br>";

//exo 5
$array2 = ["59" => "Haut-de-France","38" => "Isère", "04" => "Alpes-de-Haute-Provence", "21" => "Corse-du-sud", "2B" => "Haute-Corse"];

//exo 6
echo $array2[59] ."<br>";

//exo 7
$array2[51] = "Marnes";

//exo 8
foreach ($array as $item) {
    echo $item . "<br>";
}

//exo 9
foreach ($array2 as $item) {
    echo $item . "<br>";
}

//exo 10
foreach ($array2 as $key => $value ) {
    echo "Le département numéro " . $key . " s'appelle " . $value . "<br>";
}