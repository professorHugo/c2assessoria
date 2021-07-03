<?php
if( $permissao == 1 || $permissao == 3 ){
  //Buscar o relatório com condutor associado com permissão administrador/DEV
  // echo "<br><pre>" . 
  $QueryBuscarRelatorios = "
    SELECT * FROM tb_relatorios relatorio
    INNER JOIN tb_associados associado
      ON relatorio.cpf_associado = associado.cpf_associado
    WHERE relatorio.protocolo_evento = '$Protocolo'
  ";
  // echo "</pre>";
}else{
  //Buscar o relatório com condutor associado com permissão de sindicante
  // echo "<br><pre>" . 
  $QueryBuscarRelatorios = "
    SELECT * FROM 
      tb_relatorios relatorio
    INNER JOIN tb_associados associado
      ON relatorio.cpf_associado = associado.cpf_associado
    WHERE sindicante_evento = '$IdUsuario' && relatorio.protocolo_evento = '$Protocolo'
  ";
  // echo "</pre>";
}