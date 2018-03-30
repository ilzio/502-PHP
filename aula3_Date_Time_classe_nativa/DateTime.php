<?php

//classe nativa Datetime



$atual = new DateTime();
$especifica = new DateTime('1985/09/20');
$texto = new DateTime('+ 1 year');


echo "<pre>";
//metodos
  // formataçoes

    var_dump($atual->format('d-m-Y H:i:s')); //retorna uma string
    echo "<br>";
    print_r($especifica);
    echo "<br>";
    print_r($texto);
    echo "<br>";
    $hora= new DateTime();
    $hora->format('d-m-Y H:i:s');
    // echo $hora;

      // sem instanciar
        print_r((new DateTime())->format('d-m-Y H:i:s'));
        echo "<br>";
        echo "<br>";

    //modificaçoes

    print_r((new DateTime())->modify('+ 10 years 2 months 10 days 1 hour'));
    echo "<br>";
        //data e hora

        $hora->setDate(2001,9,11);
        $hora->setTime(13,01,20);
          // print_r($hora);

        //fuso -- timezone
        $fuso = new DateTimeZone("Europe/Rome");
        $data = new DateTime();
        echo $data->format('d-m-Y H:i:s');
        echo "<br>";
        echo "<br>";
        $data->setTimeZone($fuso);
          // echo $data->format('d-m-Y H:i:s');
        print_r($data);
