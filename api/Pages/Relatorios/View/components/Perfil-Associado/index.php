<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>".
    $QueryBuscarDadosAssociado = "
      SELECT * FROM 
        tb_associados associado
      INNER JOIN tb_cnh_registros cnh
        ON associado.cnh_associado = cnh.id_cnh
      INNER JOIN tb_fotos foto1
        ON cnh.img_cnh1 = foto1.id_foto
      INNER JOIN tb_fotos foto2
        ON cnh.img_cnh2 = foto2.id_foto
      INNER JOIN tb_tipos_civil estado_civil
        ON associado.civil_associado = estado_civil.id_civil
      WHERE 
        cnh.protocolo_cnh = '$Protocolo'
    ";
    echo "</pre>";
    $ExeQrBuscarDadosAssociado = mysqli_query($connection, $QueryBuscarDadosAssociado);
    $RowQrBuscarDadosAssociado = mysqli_num_rows($ExeQrBuscarDadosAssociado);
    if( $RowQrBuscarDadosAssociado = 1 ){
      while ( $PerfilAssociado = mysqli_fetch_assoc($ExeQrBuscarDadosAssociado) ) {
        $NomeAssociado = $PerfilAssociado['nome_associado'];
        $EstadoCivilAssociado = $PerfilAssociado['descricao_civil'];
        $CPFAssociado = $PerfilAssociado['cpf_associado'];
        $CEPAssociado = $PerfilAssociado['cep_associado'];
        $EnderecoAssociado = $PerfilAssociado['endereco_associado'];
        $BairroAssociado = $PerfilAssociado['bairro_associado'];
        $CidadeAssociado = $PerfilAssociado['cidade_associado'];
        $EstadoAssociado = $PerfilAssociado['estado_associado'];
        $FotoProntuarioFrente = $PerfilAssociado['img_cnh1'];
        $FotoProntuarioVerso = $PerfilAssociado['img_cnh2'];
        $FotoDocumentoFrente = $PerfilAssociado['documento_frente'];
        $FotoDocumentoVerso = $PerfilAssociado['documento_verso'];
        $DeclaracaoAssociado1 = $PerfilAssociado['declaracao1'];
        $DeclaracaoAssociado2 = $PerfilAssociado['declaracao2'];
        $DeclaracaoAssociado3 = $PerfilAssociado['declaracao3'];
      }
    }else{
      echo "<br>Erro: " . mysqli_error($connection);
    }
  }else{

    //PROD
    "<br><pre>".
    $QueryBuscarDadosAssociado = "
      SELECT * FROM 
        tb_associados associado
      INNER JOIN tb_cnh_registros cnh
        ON associado.cnh_associado = cnh.id_cnh
      INNER JOIN tb_fotos foto1
        ON cnh.img_cnh1 = foto1.id_foto
      INNER JOIN tb_fotos foto2
        ON cnh.img_cnh2 = foto2.id_foto
      INNER JOIN tb_tipos_civil estado_civil
        ON associado.civil_associado = estado_civil.id_civil
      WHERE 
        cnh.protocolo_cnh = '$Protocolo'
    ";
    "</pre>";
    $ExeQrBuscarDadosAssociado = mysqli_query($connection, $QueryBuscarDadosAssociado);
    $RowQrBuscarDadosAssociado = mysqli_num_rows($ExeQrBuscarDadosAssociado);
    if( $RowQrBuscarDadosAssociado = 1 ){
      while ( $PerfilAssociado = mysqli_fetch_assoc($ExeQrBuscarDadosAssociado) ) {
        $NomeAssociado = $PerfilAssociado['nome_associado'];
        $EstadoCivilAssociado = $PerfilAssociado['descricao_civil'];
        $CPFAssociado = $PerfilAssociado['cpf_associado'];
        $CEPAssociado = $PerfilAssociado['cep_associado'];
        $EnderecoAssociado = $PerfilAssociado['endereco_associado'];
        $BairroAssociado = $PerfilAssociado['bairro_associado'];
        $CidadeAssociado = $PerfilAssociado['cidade_associado'];
        $EstadoAssociado = $PerfilAssociado['estado_associado'];
        $FotoProntuarioFrente = $PerfilAssociado['img_cnh1'];
        $FotoProntuarioVerso = $PerfilAssociado['img_cnh2'];
        $FotoDocumentoFrente = $PerfilAssociado['documento_frente'];
        $FotoDocumentoVerso = $PerfilAssociado['documento_verso'];
        $DeclaracaoAssociado1 = $PerfilAssociado['declaracao1'];
        $DeclaracaoAssociado2 = $PerfilAssociado['declaracao2'];
        $DeclaracaoAssociado3 = $PerfilAssociado['declaracao3'];
      }
    }else{
      echo "<br>Erro: " . mysqli_error($connection);
    }
  }
?>
<h3 class="col-12 rotulos">
  Perfil do Associado: 
  <span class="nomes-rotulos">
    <?php echo $NomeAssociado?>
  </span>
</h3>

<div class="col-xs-12 col-md-6 float-left">
  <b>Estado Civil: </b> <br>
  <?php echo $EstadoCivilAssociado ?>
</div>

<div class="col-xs-12 col-md-6 float-left">
  <b>CPF: </b> <br>
  <?php 
    echo substr_replace($CPFAssociado, "-", 9, 0); 
  ?>
</div>

<div class="col-12 space-3"></div>

<h4 class="col-12 rotulos">Domicílio: </h4>
<div class="col-xs-12 col-md-2 float-left">
  <b>CEP: </b> <br>
  <?php echo substr_replace($CEPAssociado, "-", 5, 0) ?>
</div>

<div class="col-xs-12 col-md-6 float-left">
  <b>Endereço: </b> <br>
  <?php echo $EnderecoAssociado ?>
</div>

<div class="col-xs-12 col-md-4 float-left">
  <b>Bairro/Cidade/UF: </b><br>
  <?php echo $BairroAssociado . " / " . $CidadeAssociado . " / " . $EstadoAssociado ?>
</div>

<h4 class="col-12 rotulos">Registros em imagem:</h4>

<?php include 'Prontuario-DETRAN.php'?>
<?php include 'Documentos.php'?>
<?php include 'Declaracao.php'?>