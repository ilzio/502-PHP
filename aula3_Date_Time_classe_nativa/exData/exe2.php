<?php
	// Se data de vencimento > que data atual
	// mostrar a msg 'Pode pagar o boleto'
	// Senão, boleto está vencido
	// mostra a msg 'Boleto vencido em X dias'
	if(isset($_POST['data']) && !empty($_POST['data'])){

    $today = new DateTime();
    $data = '';
		$data = $_POST['data'];
    $data = DateTime::createFromFormat('d/m/Y', $data);

    if ($data->format('l') == 'Saturday' ) {
      $data->modify('+ 2 days');
    }
    if ($data->format('l') == 'Sunday' ) {
      $data->modify('+ 1 day');
    }
    $dias = $today->diff($data);

// die();
    // echo "<pre>";
    // echo $dias->format('%a dia(s)');
    // die();
    //tem que convertir ele num objeto DateTime primero senao nao pode comparar

      if ($data < $today) {
        $resultado = "Seu boleto esta vencido. Ele venceu ha " .  $dias->format('%a dias');
      } else
        $resultado = 'Seu boleto nao esta vencido, ele vence em ' . $dias->format('%a dias');
    } else {
      $resultado = '';
    }

  $atual = new DateTime();

	echo "Hoje é " . $atual->format('d/m/Y');
  echo "<br>";
  echo "Vencimento :" .$data->format('d/m/Y');

 ?>

<form action="" method="POST">
	<p>Data de Vencimento: <input type="text" name="data"></p>
	<input type="submit" name="enviar">
</form>
<h2><?= $resultado ?></h2>
