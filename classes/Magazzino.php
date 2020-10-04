<?php

class Prodotti{

    public $nomeProdotto;
    public $barcode;
    public $marca;
    public $prezzo;
    public $quantita;

    public function __construct($_nomeProdotto,$_barcode,$_quantita){
        $this->nomeProdotto = $_nomeProdotto;
        $this->barcode = $_barcode;
        $this->quantita = $_quantita;
    }

}

 ?>
