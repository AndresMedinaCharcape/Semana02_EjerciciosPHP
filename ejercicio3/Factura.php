<?php
class Factura{

    public function FacturaRecibida($p_cliente,$p_producto){
        return new class($p_cliente,$p_producto){
            private $cliente;
            private $producto;
            private const IVA = 0.18;  //IVA 18%
            private $ImporteBase;  //Dinero  a pagar sin Iva
            private $importeBruto; //Dinero a pagar 
            private $cantidad_producto;
            private $precio_unitario;


            public function __construct($p_cliente,$p_producto)
            {
                $this->cliente = $p_cliente;
                $this->producto = $p_producto;
            }

            public function comprar($p_cantidad,$p_precio_unitario){
                $this->cantidad_producto = $p_cantidad;
                $this->precio_unitario = $p_precio_unitario;
                $this->ImporteBase = $p_cantidad*$p_precio_unitario;
                $this->ImporteBruto = $this->ImporteBase*self::IVA + $this->ImporteBase;


            }


            public function Imprimir()
            {

                echo '<style>';
                echo ' div{
                    color:blue;
                    padding: 0.1em;
                 }';
                echo '</style>';
                echo '<h1> Emitiendo Factura.. </h1>';
                echo "<div style='text-align:center;'>";
                echo ' Cliente: ' .($this->cliente) . '<br>';
                echo ' producto: '.($this->producto) . '<br>';
                echo ' cantidad: '.($this->cantidad_producto) . '<br>';
                echo ' precio_unitario ' .($this->precio_unitario) . '<br>';
                echo ' IVA: ' .(self::IVA) . '<br>';
                echo  'ImporteBase: ' .($this->ImporteBase) . '<br>';
                echo  'Impuesto a pagar: ' .( $this->ImporteBase*self::IVA) . '<br>';
                echo  'ImporteBruto: ' .($this->ImporteBruto) . '<br>';
                echo '</div>';
            }
        
        };
    
    
    
    }
 
    
}


?>