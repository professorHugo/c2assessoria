<?php
echo "<br><pre>" . 
$QueryUpdateCNHAssociado = "
  UPDATE tb_associados
  SET cnh_associado = '$IdFoto'
  WHERE cpf_associado = '$CPFAssociado'
";
echo "</pre>";

$ExeQrUpdateCNHAssociado = mysqli_query($connection, $QueryUpdateCNHAssociado);
if( $ExeQrUpdateCNHAssociado ){
  echo "<br>Prontuário do Associado atualizado para <b>$IdFoto</b>";
}else{
  echo "<br>Erro: " . mysqli_error($connection);
}