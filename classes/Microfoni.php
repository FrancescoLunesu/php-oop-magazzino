<?php

require_once 'Magazzino.php';

class Microfoni extends Prodotti {
    public $tipoMicrofono;
    public $trasduttore;
    public $attacco;

    public function __construct($_nomeProdotto, $_barcode, $_quantita,$_tipoMicrofono){
        parent::__construct($_nomeProdotto, $_barcode, $_quantita);
        $this->tipoMicrofono = $_tipoMicrofono;
    }
}





 ?>
