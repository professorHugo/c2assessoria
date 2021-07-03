<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>";
    echo $QueryBuscarDados = "
      SELECT * FROM 
        tb_relatorios relatorio
      INNER JOIN tb_veiculos veiculo
        ON veiculo.protocolo_evento = relatorio.protocolo_evento
      WHERE 
        relatorio.protocolo_evento = '$Protocolo'
    ";
    echo "</pre>";
    $ExeQrBuscarDados = mysqli_query($connection, $QueryBuscarDados);
    $RowQrBuscarDados = mysqli_num_rows($ExeQrBuscarDados);

    if( $RowQrBuscarDados = 1 ){
      while($Dados = mysqli_fetch_assoc($ExeQrBuscarDados)){
        ?>
          <input type="hidden" name="cpf_associado" value="<?php echo $Dados['cpf_associado']?>">
          <input type="hidden" name="placa_veiculo" value="<?php echo $Dados['placa_veiculo']?>">
        <?php
        break;
      }
    }
  }else{

    //PROD

    "<br><pre>";
    $QueryBuscarDados = "
      SELECT * FROM 
        tb_relatorios relatorio
      INNER JOIN tb_veiculos veiculo
        ON veiculo.protocolo_evento = relatorio.protocolo_evento
      WHERE 
        relatorio.protocolo_evento = '$Protocolo'
    ";
    "</pre>";
    $ExeQrBuscarDados = mysqli_query($connection, $QueryBuscarDados);
    $RowQrBuscarDados = mysqli_num_rows($ExeQrBuscarDados);

    if( $RowQrBuscarDados = 1 ){
      while($Dados = mysqli_fetch_assoc($ExeQrBuscarDados)){
        ?>
          <input type="hidden" name="cpf_associado" value="<?php echo $Dados['cpf_associado']?>">
          <input type="hidden" name="placa_veiculo" value="<?php echo $Dados['placa_veiculo']?>">
        <?php
        break;
      }
    }
  }