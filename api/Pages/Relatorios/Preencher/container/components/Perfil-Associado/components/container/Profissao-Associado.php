<?php
"<br><pre>" . 
$QueryBuscarAssociado = "
  SELECT * FROM 
    tb_relatorios relatorio
  INNER JOIN tb_associados associado
    ON relatorio.cpf_associado = associado.cpf_associado
  WHERE 
    protocolo_evento = '$Protocolo' &&
    perfil_salvo = 1
";
  "</pre>";
$ExeQrBuscarAssociado = mysqli_query($connection, $QueryBuscarAssociado);
$RowQrBuscarAssociado = mysqli_num_rows($ExeQrBuscarAssociado);
if( $RowQrBuscarAssociado >= 1 ){
  while( $ReturnAssociado = mysqli_fetch_assoc($ExeQrBuscarAssociado) ){
    ?>
      <input 
        type="text" 
        name="profissao_associado" 
        id="profissao_associado"
        class="form-control form-control-lg"
        value=<?php echo $ReturnAssociado['profissao_associado']?>
      >
    <?php
  }
}else{
  ?>
  <input 
    type="text" 
    name="profissao_associado" 
    id="profissao_associado"
    class="form-control form-control-lg"
    placeholder="Profissão"
  >
<?php
}
