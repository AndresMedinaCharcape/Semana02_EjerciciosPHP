<?php
class Menu{
    private $titulo = array();
    private $URL = array();

   public function CargarEnlaces($p_titulo,$p_URL)
   {
       $this->titulo[] = $p_titulo;
       $this->URL[] = $p_URL;
   }

   public function MostrarHorizontal()
   {
       echo '<h1> Mostrando Enlaces en Horizontal </h1>';
       $longitud = count($this->URL);
       for ($i=0;$i<$longitud;$i++)
       {
           echo '<a href="'.($this->URL[$i]) .'">' .($this->titulo[$i]). '</a> ----' ;
       }
   }

   public function MostrarVertical()
   {
         echo '<h1> Mostrando Enlaces en Vertical </h1>';
        $longitud = count($this->URL);
        for ($i=0;$i<$longitud;$i++)
        {
            echo '<a href="'.($this->URL[$i]) .'">' .($this->titulo[$i]). '</a><br>' ;
        }
    }
}




?>
