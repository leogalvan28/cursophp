<?php

#variable numerica 
$numero = 5;

echo "esto es una variable numerica : $numero<br>";
var_dump($numero);
echo '<br></br>';
#variable texto

$palabra = "palabra";

echo "esto es una variable texto : $palabra<br>";
var_dump($palabra);
echo '<br></br>';


#variable boleana

$boleana = true;

echo "esto es una variable boleana : $boleana<br>";
var_dump($boleana);
echo '<br></br>';

#variable arreglo 
$colores = array("rojo", "amarillo");

echo "esto es una variable arreglo : $colores[1]<br>";
var_dump($colores);
echo '<br></br>';

#variable arreglo propiedades
$frutas = array("verdura1" => "lechuga", "verdura2" => "cebolla");

echo "esto es una variable arreglo con propiedades: $frutas[verdura1]<br>";
var_dump($frutas);
echo '<br></br>';

#variables tipo objeto 

$frutas2 = (object)["fruta1" => "pera", "fruta2" => "manzana"];
echo "esto es una variable objeto: $frutas2->fruta1<br>";
var_dump($frutas2);
echo '<br></br>';

?>