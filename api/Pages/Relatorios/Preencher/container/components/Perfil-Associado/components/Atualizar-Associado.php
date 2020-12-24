<?php
if( $SysMode == 1 ){
  //DEV
  echo "<br><pre>" . 
  $QueryUpdateAssociado = "
    UPDATE tb_associados
    SET
      civil_associado = '$EstadoCivil',
      profissao_associado = '$Profissao',
      outros_veiculos = '$OutrosVeiculos',
      quantidade_veiculos = '$QuantidadeVeiculosExtras',
      perfil_salvo = 1
    WHERE cpf_associado = '$CPFAssociado'
  ";
  echo "</pre>";
  $ExeQrUpdateAssociado = mysqli_query($connection, $QueryUpdateAssociado);
  if( $ExeQrUpdateAssociado ){
    echo "<br>Perfil do associado atualizado";
  }else{
    echo "<br>Erro: " . mysqli_error($connection);
  }
  
}else{



  //Prod
   "<br><pre>" . 
  $QueryUpdateAssociado = "
    UPDATE tb_associados
    SET
      civil_associado = '$EstadoCivil',
      profissao_associado = '$Profissao',
      outros_veiculos = '$OutrosVeiculos',
      quantidade_veiculos = '$QuantidadeVeiculosExtras',
      perfil_salvo = 1
    WHERE cpf_associado = '$CPFAssociado'
  ";
   "</pre>";
  $ExeQrUpdateAssociado = mysqli_query($connection, $QueryUpdateAssociado);
  if( $ExeQrUpdateAssociado ){
     "<br>Perfil do associado atualizado";
  }else{
    echo "<br>Erro: " . mysqli_error($connection);
  }
}