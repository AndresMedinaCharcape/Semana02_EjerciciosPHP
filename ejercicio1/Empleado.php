<?php
class Empleado{
    private $nombre;
    private $sueldo;
    private $condicion;

    public function InicializarDatos($p_nombre,$p_sueldo)
    {
        if ($p_sueldo>3000)
        {
            $this->condicion = 'Debe Pagar Impuestos';
        }else{
            $this->condicion = 'Sin Impuestos';
        }
        
        $this->nombre = $p_nombre;
        $this->sueldo = $p_sueldo;

    }

    public function MostrarDatos()
    {
        echo '<table>';
        echo '<tr><th> Nombre del Empleado </th>';
        echo '<th>Sueldo</th>' ;
        echo '<th>Condicion</th></tr>';
        echo '<tr><td>' . ($this->nombre) . '</td>';
        echo '<td>' .($this->sueldo) . '</td>';
        echo '<td>' .($this->condicion) . '</td></tr>';
        echo '</table>';
    }
}


?>