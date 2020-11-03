<?php
echo "<br><pre>" . 
$QueryCadastrarFotoProntuario = "
  INSERT INTO tb_fotos(
    categoria_foto,
    protocolo_foto,
    pasta_foto,
    nome_foto
  )VALUES(
    'prontuario_associado',
    '$Protocolo',
    '$target_dir',
    '$Prontuario'
  )
";
echo "</pre>";
$ExeQrCadastrarFotoProntuario = mysqli_query($connection, $QueryCadastrarFotoProntuario);