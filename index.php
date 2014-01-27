<?php
/**
 * Created by PhpStorm.
 * User: rdoring
 * Date: 1/26/14
 * Time: 4:08 PM
 */
//Executa blocos diferenciados de codigo baseado em parametros
//if else
//switch / case -> baseado em casos Default (else do switch)
$valor1 = 45;
$valor2 = 49;
$total = $valor1 + $valor2;

//if($valor1 >= 45 && $valor2 <= 49){
//    echo "Condicional Verdadeira";
//}else{
//    echo "Condicional Falsa";
//}

switch($total){
    case 30:
        echo "Valor = 30";
        break;
    case 60:
        echo "Valor = 60";
        break;
    case 94:
        echo "Valor = 94";
        break;
    default:
        echo "Não é igual a nada";
        break;
}