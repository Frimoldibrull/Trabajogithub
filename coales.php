<?php
//$a ?? doy un valor por defecto
/*la idea es que si el primer valor es por null 
tomara el segundo valor 
si el siguiente es null tomara el proximo valor 
<valor></valor>*/

/*if(!$a){
    $a=0;
}*/

$a ?? 0;// valor de (cualesce) ocupa menos codigo
$cargo = $cargo ?? "Empleado comun";
$tipo_usuario = $tipo_usuario ?? "Invitado";
 

?>