<?php

$arquivo = fopen("../Basicos/arquivo1.txt", 'r+');

if (flock($arquivo,LOCK_EX)){ //lock exclusivo
  // echo "bloco";
  sleep(5);
  flock($arquivo,LOCK_UN); //libera lock
} else {
  echo "Arquivo bloqueado ";
}

fclose($arquivo);
