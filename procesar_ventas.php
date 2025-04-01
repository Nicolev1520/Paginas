<?php
require 'config/conex.php' ;

$cantidad = $_POST['cantidad'] ;

$total = 1500 * $cantidad;

$sql = "INSERT INTO ventas(valor) VALUES (".$total.")";

if ($dbh->query ($sql))
{
      //aparecera este mensaje 
      echo "venta registrada: $".$total;
}else 
{
     //error aparece esto
     echo "error en la venta";
}
?>