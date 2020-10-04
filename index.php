<?php

require_once 'classes/Magazzino.php';
require_once 'classes/Microfoni.php';


$prova = new Prodotti("Prova", "08100300", 10);
var_dump($prova);

$microfono1 = new Microfoni("provaMic", "08200300", 30, "Wireless");
var_dump($microfono1);
 ?>
