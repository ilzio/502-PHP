<h1>Form</h1>
<p>Upload file</p>
<form enctype="multipart/form-data" action="" method="post"> <!-- è preciso o multipart para formularios que receben files -->
  <input type="hidden" name="MAX_FILE_SIZE" value="2097152" />
  <input name="arquivo" type="file" />
  <input type="submit" value="Enviar" />
</form>

<?php echo "<pre>"; ?>
<?php if ($_POST || $_FILES): ?>
  <?php print_r($_FILES) ?>
<!-- $_FILES é um array que tem como indice 'arquivo' que e o nome do input do formulario entao para visualizar informacoes precisa usar 'arquivo' como indice
$_FILES['arquivo']['name'] -->
<?php endif; ?>

<?php
// mover os arquivos para otro lugar
if (UPLOAD_ERR_OK == $_FILES['arquivo']['error']){

  $nome = basename($_FILES['arquivo']['name']);

  $movido = move_uploaded_file($_FILES['arquivo']['tmp_name'], "fotos/{$nome}");
  if ($movido){
    echo "salvo com sucesso";
  }

  // para monstrar a imagen em miniatura fazer um echo com o codigo html <img=src $nome e os tamanhos de height e lenght

  
}



 ?>
