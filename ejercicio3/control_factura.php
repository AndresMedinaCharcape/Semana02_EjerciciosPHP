<?php
require_once "Factura.php";

 $factura = new Factura;
 $cliente1 = $factura->FacturaRecibida('Andres','Chocolate');
 $cliente1->comprar(3,0.80);
 $cliente1->Imprimir();


?>