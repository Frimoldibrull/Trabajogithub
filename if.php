php<?
$a = readline("ingrese un valor: ");
$b = readline("ingrese otro valor: ");

if(($a>$b)&&($a==8)){
    echo "a es mayor que b".PHP_EOL;// si es verdadera
    echo "a es igual a 8".PHP_EOL;
}else{
    echo "a es menor que b".PHP_EOL;// si es falso
    echo "a no es igual a 8";
}


?>