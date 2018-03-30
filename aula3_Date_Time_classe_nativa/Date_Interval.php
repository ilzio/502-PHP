<?php

// calcular intervalos de datas

      //sempre comeca com o padrao P
      $interval = new DateInterval('P2Y'); //intervalo de 2 anos

      echo "<pre>";
      print_r($interval);
      echo "<br>";
      //T e' padrao para especificar o tempo e separar dos anos dias e meses
      $interval1 = new DateInterval('P2Y3M1DT3H40M6S'); //intervalo de 2 anos
      print_r($interval1);
      echo "<br>";

//formatear intervalo (apostila p. 45)

      $interval2 = new DateInterval('P30D'); //intervalo de 2 anos
      echo $interval2->format("%y anos %d dias ");
      echo "<br>";
      echo "<br>";
      echo "<br>";
      echo "<hr>";

//diferença entre duas datas

    $dataAtual = new DateTime();
    $dataNasc = new DateTime('1985-9-20');

    $intervalo= $dataNasc->diff($dataAtual);

    echo "data atual " . $dataAtual->format('d/m/y');
    echo "<br>";
    echo "data nascimento " . $dataNasc->format('d/m/y');
    echo "<br>";
    echo "<br>";
    echo $intervalo->format('%a dias de idade');

    $a = $intervalo->format('%a dias de idade');
    echo "<br>";
    echo ($a / 365) . " anos de idade";

//comparar datas - pode usar operadores aritmeticos e logicos -> da booleanos

    echo "<br>";
    echo "<hr>";
    var_dump($dataNasc > $dataAtual);
    var_dump($dataNasc == $dataAtual);
    var_dump($dataNasc < $dataAtual);
    var_dump($dataNasc != $dataAtual);


    echo "<br>";
    echo "<hr>";

    $data = new DateTime('2018-03-28');
    var_dump($data > $dataAtual); //falso porque se nao especifica hora sempre começa de 00:00:00 então é menor
    var_dump($data == $dataAtual);
    var_dump($data < $dataAtual);
    var_dump($data != $dataAtual);
    echo "<br>";
    echo "<hr>";

// sumar e substrair datas

print_r($data);
$data->add(new DateInterval('P4D'));
print_r($data);
$data->sub(new DateInterval('P25D'));
print_r($data);
