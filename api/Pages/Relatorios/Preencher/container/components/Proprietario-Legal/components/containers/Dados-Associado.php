<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>";
    echo $QueryBuscarDados = "
      SELECT * FROM 
        tb_relatorios relatorio
      INNER JOIN tb_veiculos veiculo
        ON veiculo.protocolo_evento = relatorio.protocolo_evento
      INNER JOIN tb_associados associado
        ON relatorio.cpf_associado = associado.cpf_associado
      WHERE 
        relatorio.protocolo_evento = '$Protocolo'
    ";
    echo "</pre>";
    $ExeQrBuscarDados = mysqli_query($connection, $QueryBuscarDados);
    $RowQrBuscarDados = mysqli_num_rows($ExeQrBuscarDados);

    if( $RowQrBuscarDados = 1 ){
      while($Dados = mysqli_fetch_assoc($ExeQrBuscarDados)){
        echo "<p>Nome do Associado: " . $NomeAssociado = $Dados['nome_associado'];
        echo "</p>";
        ?>
          <input type="hidden" name="cpf_associado" value="<?php echo str_pad($Dados['cpf_associado'], 11, 0, STR_PAD_LEFT)?>">
          <input type="hidden" name="placa_veiculo" value="<?php echo $Dados['placa_veiculo']?>">
        <?php
        break;
      }
    }
  }else{
    //PROD
    $QueryBuscarDados = "
    SELECT * FROM 
      tb_relatorios relatorio
    INNER JOIN tb_veiculos veiculo
      ON veiculo.protocolo_evento = relatorio.protocolo_evento
    WHERE 
      relatorio.protocolo_evento = '$Protocolo'
    ";
    $ExeQrBuscarDados = mysqli_query($connection, $QueryBuscarDados);
    $RowQrBuscarDados = mysqli_num_rows($ExeQrBuscarDados);

    if( $RowQrBuscarDados = 1 ){
      while($Dados = mysqli_fetch_assoc($ExeQrBuscarDados)){
        ?>
          <input type="hidden" name="cpf_associado" value="<?php echo str_pad($Dados['cpf_associado'], 11, 0, STR_PAD_LEFT)?>">
          <input type="hidden" name="placa_veiculo" value="<?php echo $Dados['placa_veiculo']?>">
        <?php
        break;
      }
    }
  }