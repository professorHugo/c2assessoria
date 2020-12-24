<?php
"<br><pre>" . 
$QueryBuscarAssociado = "
  SELECT * FROM 
    tb_relatorios relatorio
  INNER JOIN tb_associados associado
    ON relatorio.cpf_associado = associado.cpf_associado
  WHERE 
    protocolo_evento = '$Protocolo' &&
    associado.perfil_salvo = 2
";
"</pre>";
$ExeQrBuscarAssociado = mysqli_query($connection, $QueryBuscarAssociado);
$RowQrBuscarAssociado = mysqli_num_rows($ExeQrBuscarAssociado);
if( $RowQrBuscarAssociado = 1 ){
  while( $ReturnAssociado = mysqli_fetch_assoc($ExeQrBuscarAssociado) ){
    $VeiculoExtra = $ReturnAssociado['outros_veiculos'];
    if( $VeiculoExtra == NULL ){
      ?>
        <div class="col-sm-12 col-md-6" id="quantidadeReturn" style="margin-top: 10px">
          <!-- Caso tenha veículos adicionais -->
        </div>
      <?php
    }
  }
}else{
  echo "<br>Erro: " . mysqli_error($connection);
}