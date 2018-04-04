<form class="" action="#" method="post">
  <p>CEP:</p>
  <p> <input type="text" name="cep"> </p>
  <p> <input type="submit" value="buscar"> </p>
</form>

<?php

phpinfo(); // verifica se o cURL	esta ativado, se nao usar php7.0-curl

//file_get_contents nao sirve pra outra coisa que nao seja pegar informacao, curl é mais complexo

if (array_key_exists('cep', $_POST) && !empty($_POST['cep']))
{
$cep = $_POST['cep'];
$url = 'https://viacep.com.br/ws/' . $cep . '/json/';

$curl= curl_init(); //comeca o CURL

curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$return = curl_exec($curl); //executa o CURL

curl_close($curl); //fexa o CURL

$endereco = json_decode($return); 

echo "<strong>O CPF informado corresponde a: </strong><br><br>";
echo "<strong> Rua: </strong>" . $endereco->logradouro . "<br>";
echo "<strong> Bairro: </strong>" . $endereco->bairro . "<br>";
echo "<strong> Localidade: </strong>" . $endereco->localidade . "<br>";
echo "<strong> UF: </strong>" . $endereco->uf . "<br>";


}
