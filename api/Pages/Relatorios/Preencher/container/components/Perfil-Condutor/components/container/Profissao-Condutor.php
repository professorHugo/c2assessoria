<?php
"<br><pre>" . 
$QueryBuscarAssociado = "
  SELECT * FROM 
    tb_relatorios relatorio
  INNER JOIN tb_condutores condutor
    ON relatorio.protocolo_evento = condutor.protocolo_evento
  WHERE 
    relatorio.protocolo_evento = '$Protocolo' &&
    condutor.perfil_salvo = 1
";
  "</pre>";
$ExeQrBuscarAssociado = mysqli_query($connection, $QueryBuscarAssociado);
$RowQrBuscarAssociado = mysqli_num_rows($ExeQrBuscarAssociado);
if( $RowQrBuscarAssociado >= 1 ){
  while( $ReturnAssociado = mysqli_fetch_assoc($ExeQrBuscarAssociado) ){
    ?>
      <input 
        type="text" 
        name="profissao_condutor" 
        id="profissao_condutor"
        class="form-control form-control-lg"
        value=<?php echo $ReturnAssociado['profissao_condutor']?>
      >
    <?php
  }
}else{
  ?>
  <input 
    type="text" 
    name="profissao_condutor" 
    id="profissao_condutor"
    class="form-control form-control-lg"
  >
<?php
}
