<?php

date_default_timezone_set('America/Sao_Paulo');

$dataSP = new DateTime();
echo "Hora de São Paulo: " . $dataSP->format('d/m/Y H:i:s');

echo "<br>";
echo "<br>";
date_default_timezone_set('Asia/Tokyo');

$dataTk = new DateTime();
echo "Hora de Tokio: " . $dataTk->format('d/m/Y H:i:s');

  $diferencia= $dataSP->diff($dataTk);

  // echo $diferencia;

//configurar datas e horas em outras linguas

echo "<br>";
echo "<br>";

// setlocale(LC_ALL, 'it_IT.utf8');
 setlocale(LC_ALL, 'pt_BR.utf8');

  echo strftime("%A, %e de %B de %Y");
