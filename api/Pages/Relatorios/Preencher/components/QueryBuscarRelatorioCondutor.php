<?php
if( $permissao == 1 || $permissao == 3 ){
  //Buscar o relatório com condutor terceiro com permissão administrador/DEV
  //** DEV **/
  if( $SysMode == 1 ){
    echo "<br><pre>".
    $QueryBuscarRelatoriosCondutor = "
      SELECT * FROM tb_relatorios relatorio
      INNER JOIN tb_condutores condutor
        ON relatorio.protocolo_evento = condutor.protocolo_evento
      WHERE relatorio.protocolo_evento = '$Protocolo'
    ";
    echo "</pre>";
  }else{
    //echo "<br><pre>".
    $QueryBuscarRelatoriosCondutor = "
      SELECT * FROM tb_relatorios relatorio
      INNER JOIN tb_condutores condutor
        ON relatorio.protocolo_evento = condutor.protocolo_evento
      WHERE relatorio.protocolo_evento = '$Protocolo'
    ";
    //echo "</pre>";
  }
  
}