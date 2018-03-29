<?php

//cronometro usando o microtime

function cronometro()
{
    return microtime(true); //parametro true traz em formato de decimal. assim operadores aritmeticos podem ser usados
}

$start = cronometro();

$a = [];
  for ($i=0; $i < 1000000; $i++) {
    $a[] = pow($i,2);
  }
$end = cronometro();
echo "<pre>";
echo "Gastou " . ($end - $start) . " segundos";
