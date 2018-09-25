<?php
require_once "Factura.php";

 $factura = new Factura;
 $cliente1 = $factura->FacturaRecibida('Andres Medina Charcape','Chocolate');
 $cliente1->RealizarCompra(3,0.80);
 $cliente1->ImprimirFactura();


?>