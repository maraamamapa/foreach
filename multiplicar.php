<?php

$tablas=array("primera"=>5,"segunda"=>13,"tercera"=>11,);

foreach ($tablas as $indice => $valor) {
  echo " Tabla del $valor :"."<br>";

//Se recogen los elementos del array,se crea un bucle for para que saque los
//modificacion1
  for ($i=1; $i <=70 ; $i++) {
      $operacion= $i * $valor;
      echo  "$valor x $i =". $operacion."<br>";
    }
}
 ?>
