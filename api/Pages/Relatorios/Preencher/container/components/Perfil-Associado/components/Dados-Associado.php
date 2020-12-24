<?php
  if( $SysMode == 1 ){
    echo "<br><pre>" . 
    $QueryBuscarAssociado = "
      SELECT * FROM 
        tb_relatorios relatorio
      INNER JOIN tb_associados associado
        ON relatorio.cpf_associado = associado.cpf_associado
      WHERE protocolo_evento = '$Protocolo'
    ";
    echo "</pre>";
    $ExeQrBuscarAssociado = mysqli_query($connection, $QueryBuscarAssociado);
    $RowQrBuscarAssociado = mysqli_num_rows($ExeQrBuscarAssociado);
    if( $RowQrBuscarAssociado = 1 ){
      while( $ReturnAssociado = mysqli_fetch_assoc($ExeQrBuscarAssociado) ){
        echo $ReturnAssociado['nome_associado'];
        ?>
          <input type='hidden' name='id_associado' value='<?php echo $ReturnAssociado['id_associado']?>'>
          <input type='hidden' name='cpf_associado' value='<?php echo $ReturnAssociado['cpf_associado']?>'>
          <input type='hidden' name='nome_associado' value='<?php echo $ReturnAssociado['nome_associado']?>'>
        <?php
        
      }
    }
  }else{
    "<br><pre>" . 
    $QueryBuscarAssociado = "
      SELECT * FROM 
        tb_relatorios relatorio
      INNER JOIN tb_associados associado
        ON relatorio.cpf_associado = associado.cpf_associado
      WHERE protocolo_evento = '$Protocolo'
    ";
    "</pre>";
    $ExeQrBuscarAssociado = mysqli_query($connection, $QueryBuscarAssociado);
    $RowQrBuscarAssociado = mysqli_num_rows($ExeQrBuscarAssociado);
    if( $RowQrBuscarAssociado = 1 ){
      while( $ReturnAssociado = mysqli_fetch_assoc($ExeQrBuscarAssociado) ){
        echo $ReturnAssociado['nome_associado'];
        ?>
          <input type='hidden' name='id_associado' value='<?php echo $ReturnAssociado['id_associado']?>'>
          <input type='hidden' name='cpf_associado' value='<?php echo $ReturnAssociado['cpf_associado']?>'>
          <input type='hidden' name='nome_associado' value='<?php echo $ReturnAssociado['nome_associado']?>'>
        <?php
        
      }
    }
  }
  