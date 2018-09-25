<?php
class Factura{

    public function FacturaRecibida($p_cliente,$p_producto){
        return new class($p_cliente,$p_producto){
            private $cliente;
            private $producto;
            private const IGV = 1.18;  //IGV 18%
            private $ImporteNeto;  //Dinero  a pagar sin IGV
            private $ImporteBruto; //Dinero a pagar con IGV
            private $dinero_cliente;
            private $Impuesto;
            private $cantidad_productos;
            private $fecha;


            public function __construct($p_cliente,$p_producto)
            {
                $this->cliente = $p_cliente;
                $this->producto = $p_producto;
                setlocale(LC_ALL,"es_ES.UTF-8");  //Para que soporte el formato de fecha en español
                date_default_timezone_set ('America/Lima'); //Definir la ona horaria en Lima
                $this->fecha = strftime("%A, %d de %B de %Y %H:%M");  //Formato de fecha
            }

            public function RealizarCompra($p_cantidad,$p_precioUnitario){
                $this->cantidad_productos = $p_cantidad;
                $this->ImporteBruto = round($p_cantidad*$p_precioUnitario,3);
                $this->ImporteNeto = round(($this->ImporteBruto)/self::IGV ,3);
                $this->Impuesto = round((18/100)*$this->ImporteNeto,3);
            }

            public function ImprimirFactura()
            {


                echo '<h1> Inversiones Charcape </h1>';

                echo '<fieldset>
                    <legend>Datos del Cliente</legend>
                    <p>Nombre :'.($this->cliente).'</p>
                    <p>Fecha:'.($this->fecha).' </p>
                </fieldset>';
                //echo "<div style='text-align:center;'>";

                echo '<table> 
                    <thead>
                        <tr>
                            <th>Producto</th>
                            <th>Cantidad</th>
                            <th>IGV</th>
                            <th>Impuesto</th>
                            <th>Importe Neto</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr> 
                            <td colspan="4" class="th2">Importe Bruto</td>
                            <td>'.($this->ImporteBruto) .'</td>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>'. ($this->producto).'</td>
                            <td>'. ($this->cantidad_productos).'</td>
                            <td>18%</td>
                            <td>'. ($this->Impuesto).'</td>
                            <td>'. ($this->ImporteNeto).'</td>
                        </tr>
                    </tbody>
                </table>';
                echo '<link rel="stylesheet" href="estilos.css" type="text/css">';

            }
        
        };
    
    
    
    }
 
    
}


?>