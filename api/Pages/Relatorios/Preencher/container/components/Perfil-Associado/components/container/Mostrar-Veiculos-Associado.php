<div class="col-12" id="veiculos_adicionais">
  <?php
  "<br><pre>";
  $QueryBuscarVeiculosExtra = "
    SELECT * FROM 
      tb_relatorios relatorio
    INNER JOIN tb_associados associado
      ON relatorio.cpf_associado = associado.cpf_associado
    INNER JOIN tb_veiculos veiculo
      ON associado.cpf_associado = veiculo.segurado_veiculo
    WHERE 
      relatorio.protocolo_evento = '$Protocolo' &&
      associado.perfil_salvo = 1 &&
      veiculo.id_veiculo != associado.veiculo1_associado
  ";
  "</pre>";
  $ExeQrBuscarVeiculosExtra = mysqli_query($connection, $QueryBuscarVeiculosExtra);
  $RowQrBuscarVeiculosExtra = mysqli_num_rows($ExeQrBuscarVeiculosExtra);
  if( $RowQrBuscarVeiculosExtra = 1 ){
    while( $VeiculosExtra = mysqli_fetch_assoc($ExeQrBuscarVeiculosExtra) ){
      $LinkBase = "?Page=Relatorios&Preencher&Protocolo=$Protocolo";
      $Veiculo = $VeiculosExtra['veiculo2_associado'];
      $VeiculoExtraNome = $VeiculosExtra['modelo_veiculo'];
      $VeiculoExtraPlaca = $VeiculosExtra['placa_veiculo'];

      ?>
        <span class="sr-only">
          Atualizar o valor do veículo na tabela do associado para NULL e depois apagar o registro do veículo
        </span>
        <div class="col-4 float-left">
          Veículo Extra: <br>
          <?php echo $VeiculoExtraNome?><br>
          Placa: <?php echo $VeiculoExtraPlaca?><br>
          <!-- <a href="<?php echo $LinkBase?>&Content=Perfil-Associado&Delete-Car=<?php echo $Veiculo?>">
            Apagar Veículo
          </a> -->
        </div>
        
      <?php
      
    }
  }
  ?>
</div>