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
    $VeiculoExtra = $ReturnCondutor['veiculo_proprio'];
    if( $VeiculoExtra == NULL ){
      ?>

        <div class="col-xs-12 col-sm-12 col-md-6" id="veiculo_condutor_return" style="margin-top: 10px">
          <!-- Caso tenha veículos adicionais -->
        </div>

        <div class="col-12" id="veiculos_adicionais">
          <!-- Caso tenha veículos adicionais -->
        </div>

      <?php
    }
  }
}else{
  echo "<br>Erro: " . mysqli_error($connection);
}