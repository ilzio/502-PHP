<?php

$pessoas = [
    [
        'nome' => 'Heath Ledger',
        'data_nasc' => '19/05/1956',
    ],
    [
        'nome' => 'Alfie Allen',
        'data_nasc' => '10/07/1993',
    ],
    [
        'nome' => 'Taylor Kinney',
        'data_nasc' => '04/09/1979',
    ],
    [
        'nome' => 'Audrey Hepburn',
        'data_nasc' => '13/07/1972',
    ],
];

echo "<pre>";
// print_r($pessoas);


foreach ($pessoas as $key => $pessoa) {
    //converte datas em formato DateTime object from formato
    $pessoa['data_nasc'] = DateTime::createFromFormat('d/m/Y', $pessoa['data_nasc']);

    //coloca de volta dentro do array inicial depois de converter em objetos, passando a mesma chave que ele ja tinha
    $pessoas[$key] = $pessoa;
}

// print_r($pessoas);


$novo = $pessoas[0];
$velho = $pessoas[0];

foreach ($pessoas as $pessoa) {
  //   // echo $pessoa['data_nasc']->date;
  //   // echo "<br>";
  //   echo $pessoas[0]['data_nasc']->date;
  // }
  // die();
//comparaçao é feita com timestamp unix (strtotime), entao o mais novo tem o timestamp maior
    if ($pessoa['data_nasc'] > $novo['data_nasc']) {
        $novo = $pessoa;
    }

    if ($pessoa['data_nasc'] < $velho['data_nasc']) {
        $velho = $pessoa;
    }

    // return $velho;
    // return $novo;
}
echo "<br>";
// echo "velho";
echo 'O mais velho é ' . $velho['nome'] . ' nascido em ' . $velho['data_nasc']->format('Y');

echo "<br>";
// echo "novo";
echo 'O mais novo é ' . $novo['nome'] . ' nascido em ' . $novo['data_nasc']->format('Y');
$intervalo= $novo['data_nasc']->diff($velho['data_nasc']);
echo "<br>";
echo 'A differença entre eles é de ' . $intervalo->format('%y anos e %m mes(es)');
