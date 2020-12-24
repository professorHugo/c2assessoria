<?php

"<br><pre>" . 
$QueryBuscarAssociado = "
  SELECT * FROM 
    tb_relatorios relatorio
  INNER JOIN tb_associados associado
    ON relatorio.cpf_associado = associado.cpf_associado
  WHERE 
    protocolo_evento = '$Protocolo' &&
    perfil_salvo = 2
";
  "</pre>";
$ExeQrBuscarAssociado = mysqli_query($connection, $QueryBuscarAssociado);
$RowQrBuscarAssociado = mysqli_num_rows($ExeQrBuscarAssociado);
if( $RowQrBuscarAssociado = 1 ){
  while( $ReturnAssociado = mysqli_fetch_assoc($ExeQrBuscarAssociado) ){
    $VeiculoExtra = $ReturnAssociado['outros_veiculos'];
    if( $VeiculoExtra == NULL ){
      
      ?>
        <select 
          name="outro_veiculo" 
          id="outro_veiculo" 
          class="form-control form-control-lg"
          required
          onchange="acionarVeiculosAdicionais();desativarVeiculosAdicionais();"
        >
          <option value="">Selecione</option>
          <option value="1">Sim</option>
          <option value="2">Não</option>
        </select>
      <?php

    }else {
      if( $VeiculoExtra == 1 ){
        ?>
          <select 
            name="outro_veiculo" 
            id="outro_veiculo" 
            class="form-control form-control-lg"
          >
            <option value="1" selected>Sim</option>
          </select>
        <?php
      }else{
        ?>
          <select 
            name="outro_veiculo" 
            id="outro_veiculo" 
            class="form-control form-control-lg"
            required
            onchange="acionarVeiculosAdicionais();desativarVeiculosAdicionais();"
          >
            <option value="2" selected>Não</option>
            <option value="1">Sim</option>
          </select>
        <?php
      }
    }
    
  }
}else{
  echo "Teste";
}
