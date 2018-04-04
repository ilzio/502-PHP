<form class="" action="#" method="post">
  <p>CEP:</p>
  <p> <input type="text" name="cep"> </p>
  <p> <input type="submit" value="buscar"> </p>
</form>

<?php

if (array_key_exists('cep', $_POST) && !empty($_POST['cep']))
{
$cep = $_POST['cep'];

$url = 'https://viacep.com.br/ws/' . $cep . '/json/';

//retorna um objeto stdClass
$retorno = file_get_contents($url);

//decodifica e retorna um array
$endereco = json_decode($retorno);
// echo "<pre>";
// print_r($endereco);

echo "<strong>O CPF informado corresponde a: </strong><br><br>";
echo "<strong> Rua: </strong>" . $endereco->logradouro . "<br>";
echo "<strong> Bairro: </strong>" . $endereco->bairro . "<br>";
echo "<strong> Localidade: </strong>" . $endereco->localidade . "<br>";
echo "<strong> UF: </strong>" . $endereco->uf . "<br>";


}
