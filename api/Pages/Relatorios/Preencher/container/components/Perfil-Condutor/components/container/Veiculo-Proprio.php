<?php
"<br><pre>" . 
$QueryBuscarCondutor = "
  SELECT * FROM 
    tb_relatorios relatorio
  INNER JOIN tb_condutores condutor
    ON relatorio.protocolo_evento = condutor.protocolo_evento
  WHERE 
    relatorio.protocolo_evento = '$Protocolo' &&
    condutor.perfil_salvo = 2
";
"</pre>";
$ExeQrBuscarCondutor = mysqli_query($connection, $QueryBuscarCondutor);
$RowQrBuscarCondutor = mysqli_num_rows($ExeQrBuscarCondutor);

if( $RowQrBuscarCondutor = 1 ){
  while( $ReturnCondutor = mysqli_fetch_assoc($ExeQrBuscarCondutor) ){
    echo $VeiculoProprio = $ReturnCondutor['veiculo_proprio'];

    if( $VeiculoProprio == null ){
      ?>
        <select 
          name="veiculo_proprio" 
          id="veiculo_proprio" 
          class="form-control form-control-lg"
          required
          onchange="acionarVeiculosProprios();desativarVeiculosProprios();"
        >
          <option value="">Selecione</option>
          <option value="1">Sim</option>
          <option value="2">Não</option>
        </select>
      <?php
    }else {
      if( $VeiculoProprio == 1 ){
        ?>
          <select 
            name="veiculo_proprio" 
            id="veiculo_proprio" 
            class="form-control form-control-lg"
          >
            <option value="1" selected>Sim</option>
          </select>
        <?php
      }else{
        ?>
          <select 
            name="veiculo_proprio" 
            id="veiculo_proprio" 
            class="form-control form-control-lg"
            required
            onchange="acionarVeiculosProprios();desativarVeiculosProprios();"
          >
            <option value="">Selecione</option>
            <option value="1">Sim</option>
            <option value="2">Não</option>
          </select>
        <?php
      }
    }
  }
}
else{
  echo "<br>Erro: " . mysqli_error($connection);
}

?>