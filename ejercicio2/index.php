<?php
require_once "Menu.php";
$opcion1 = new Menu;
$opcion1->CargarEnlaces('Facebook','https://www.facebook.com/?ref=tn_tnmn');
$opcion1->CargarEnlaces('Google','https://www.google.com/');
$opcion1->CargarEnlaces('Twitter','https://twitter.com/?lang=es');
$opcion1->CargarEnlaces('Youtube','https://www.youtube.com/n');
$opcion1->CargarEnlaces('Outlook','https://outlook.live.com/owa/');

$opcion1->MostrarVertical();

?>