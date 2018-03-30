<?php

class MeuArquivo
{
private $arquivo;

public function __construct($path){
  $this->arquivo = $path;
}

public function pegaConteudo(){
  return file_get_contents($this->arquivo);
}

public function pegaExtensao(){
  return pathinfo($this->arquivo);
}

public function pegaNomeArquivo(){
  return basename($this->arquivo);
}

public function pegaTamanho(){
  return filesize($this->arquivo);
}

}
