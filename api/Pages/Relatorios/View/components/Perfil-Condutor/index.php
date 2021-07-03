<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>" . 
    $QueryBuscarDadosCondutor = "
      SELECT * FROM 
        tb_condutores condutor
      INNER JOIN tb_cnh_registros cnh
        ON condutor.cnh_condutor = cnh.id_cnh
      INNER JOIN tb_tipos_civil estado_civil
        ON condutor.civil_condutor = estado_civil.id_civil
      INNER JOIN tb_fotos foto1
        ON cnh.img_cnh1 = foto1.id_foto
      INNER JOIN tb_fotos foto2
        ON cnh.img_cnh2 = foto2.id_foto
      WHERE
        condutor.protocolo_evento = '$Protocolo' &&
        cnh.protocolo_cnh = '$Protocolo'
    ";
    echo "</pre>";
    $ExeQrBuscarDadosCondutor = mysqli_query($connection, $QueryBuscarDadosCondutor);
    $RowQrBuscarDadosCondutor = mysqli_num_rows($ExeQrBuscarDadosCondutor);

    if( $RowQrBuscarDadosCondutor = 1 ){
      while ( $PerfilCondutor = mysqli_fetch_assoc($ExeQrBuscarDadosCondutor) ) {
        $NomeCondutor = $PerfilCondutor['nome_condutor'];
        $EstadoCivilCondutor = $PerfilCondutor['descricao_civil'];
        $VinculoCondutor = $PerfilCondutor['vinculo_associado'];

        $CEPCondutor = $PerfilCondutor['cep_condutor'];
        $EnderecoCondutor = $PerfilCondutor['endereco_condutor'];
        $BairroCondutor = $PerfilCondutor['bairro_condutor'];
        $CidadeCondutor = $PerfilCondutor['cidade_condutor'];
        $EstadoCondutor = $PerfilCondutor['estado_condutor'];

        $VeiculoProprio = $PerfilCondutor['veiculo_proprio'];
        $QtdVeiculos = $PerfilCondutor['qtd_veiculo_proprio'];

        $VeiculoProprio1 = $PerfilCondutor['veiculo1_condutor'];
        $VeiculoProprio2 = $PerfilCondutor['veiculo2_condutor'];
        $VeiculoProprio3 = $PerfilCondutor['veiculo3_condutor'];

        $StatusCHNCondutor = $PerfilCondutor['status_cnh'];
        $FotoProntuarioFrenteC = $PerfilCondutor['img_cnh1'];
        $FotoProntuarioVersoC = $PerfilCondutor['img_cnh2'];
        $FotoDocumentoFrenteC = $PerfilCondutor['documento_frente'];
        $FotoDocumentoVersoC = $PerfilCondutor['documento_verso'];
        $DeclaracaoCondutor1 = $PerfilCondutor['declaracao1'];
        $DeclaracaoCondutor2 = $PerfilCondutor['declaracao2'];
        $DeclaracaoCondutor3 = $PerfilCondutor['declaracao3'];

        $RelatoCondutor = $PerfilCondutor['relato_condutor'];
      }
    }else{
      echo "<br>Erro: " . mysqli_error($connection);
    }
  }else{

    //PROD

    "<br><pre>" . 
    $QueryBuscarDadosCondutor = "
      SELECT * FROM 
        tb_condutores condutor
      INNER JOIN tb_cnh_registros cnh
        ON condutor.cnh_condutor = cnh.id_cnh
      INNER JOIN tb_tipos_civil estado_civil
        ON condutor.civil_condutor = estado_civil.id_civil
      INNER JOIN tb_fotos foto1
        ON cnh.img_cnh1 = foto1.id_foto
      INNER JOIN tb_fotos foto2
        ON cnh.img_cnh2 = foto2.id_foto
      WHERE
        condutor.protocolo_evento = '$Protocolo' &&
        cnh.protocolo_cnh = '$Protocolo'
    ";
    "</pre>";
    $ExeQrBuscarDadosCondutor = mysqli_query($connection, $QueryBuscarDadosCondutor);
    $RowQrBuscarDadosCondutor = mysqli_num_rows($ExeQrBuscarDadosCondutor);

    if( $RowQrBuscarDadosCondutor = 1 ){
      while ( $PerfilCondutor = mysqli_fetch_assoc($ExeQrBuscarDadosCondutor) ) {
        $NomeCondutor = $PerfilCondutor['nome_condutor'];
        $EstadoCivilCondutor = $PerfilCondutor['descricao_civil'];
        $VinculoCondutor = $PerfilCondutor['vinculo_associado'];

        $CEPCondutor = $PerfilCondutor['cep_condutor'];
        $EnderecoCondutor = $PerfilCondutor['endereco_condutor'];
        $BairroCondutor = $PerfilCondutor['bairro_condutor'];
        $CidadeCondutor = $PerfilCondutor['cidade_condutor'];
        $EstadoCondutor = $PerfilCondutor['estado_condutor'];

        $VeiculoProprio = $PerfilCondutor['veiculo_proprio'];
        $QtdVeiculos = $PerfilCondutor['qtd_veiculo_proprio'];

        $VeiculoProprio1 = $PerfilCondutor['veiculo1_condutor'];
        $VeiculoProprio2 = $PerfilCondutor['veiculo2_condutor'];
        $VeiculoProprio3 = $PerfilCondutor['veiculo3_condutor'];

        $StatusCHNCondutor = $PerfilCondutor['status_cnh'];
        $FotoProntuarioFrenteC = $PerfilCondutor['img_cnh1'];
        $FotoProntuarioVersoC = $PerfilCondutor['img_cnh2'];
        $FotoDocumentoFrenteC = $PerfilCondutor['documento_frente'];
        $FotoDocumentoVersoC = $PerfilCondutor['documento_verso'];
        $DeclaracaoCondutor1 = $PerfilCondutor['declaracao1'];
        $DeclaracaoCondutor2 = $PerfilCondutor['declaracao2'];
        $DeclaracaoCondutor3 = $PerfilCondutor['declaracao3'];

        $RelatoCondutor = $PerfilCondutor['relato_condutor'];
      }
    }else{
      echo "<br>Erro: " . mysqli_error($connection);
    }
  }
?>
<div class="Pagina-1">
  <div class="col-12 space-2"></div>
  <h3 class="col-12 rotulos">
    Perfil do Condutor: 
    <span class="nomes-rotulos">
      <?php echo $NomeCondutor?>
    </span>
  </h3>

  <div class="col-xs-12 col-md-6 float-left">
    <b>Estado Civil: </b> <br>
    <?php echo $EstadoCivilCondutor ?>
  </div>

  <div class="col-xs-12 col-md-6 float-left">
    <b>Vínculo com Associado: </b> <br>
    <?php 
      echo $VinculoCondutor; 
    ?>
  </div>

  <div class="col-12 space-3"></div>

  <h4 class="col-12 rotulos">Domicílio: </h4>
  <div class="col-xs-12 col-md-2 float-left">
    <b>CEP: </b> <br>
    <?php echo substr_replace($CEPCondutor, "-", 5, 0) ?>
  </div>

  <div class="col-xs-12 col-md-6 float-left">
    <b>Endereço: </b> <br>
    <?php echo $EnderecoCondutor ?>
  </div>

  <div class="col-xs-12 col-md-4 float-left">
    <b>Bairro/Cidade/UF: </b><br>
    <?php echo $BairroCondutor . " / " . $CidadeCondutor . " / " . $EstadoCondutor ?>
  </div>

  <?php
    if( $VeiculoProprio == 1 ){
      if( $QtdVeiculos <= 1 ){
        ?>
          <div class="space-2"></div>
          <h4 class="rotulos col-12">Veículo Extra: </h4>
        <?php
      }else{
        ?>
          <div class="space-2"></div>
          <h4 class="rotulos col-12">Veículos Extras: </h4>
        <?php
      }
      include 'Veiculos-Proprios/index.php'; 
    }
  ?>
</div>

<!-- Numeração da página -->
<p class="numero-pagina perfil-1">
  Relatório: <?php echo $Protocolo ?> 
  - Página 2 - 
  Perfil do Associado (Domicício e Veículos Extras)
</p>
<div class="space-3"></div>

<div class="Pagina-2">
  <h4 class="rotulos col-12">
    Situação da CNH do condutor: <?php echo $StatusCHNCondutor ?>
  </h4>

  <div class="space-2"></div>
  <h5 class="col-12 rotulos">Registros em imagem:</h5>

  <?php include 'Prontuario-DETRAN.php'?>
</div>

<!-- Numeração da página -->
<p class="numero-pagina perfil-2">
  Relatório: <?php echo $Protocolo ?> 
  - Página 3 - 
  Perfil do Associado (Prontuário no DETRAN)
</p>

<div class="Pagina-3">
  <?php include 'Documentos.php'?>
</div>

<!-- Numeração da página -->
<p class="numero-pagina perfil-3">
  Relatório: <?php echo $Protocolo ?> 
  - Página 4 - 
  Documentos do Associado (Frente e Verso)
</p>

<?php include 'Declaracao.php'?>
<?php include 'Modals/index.php'?>
<div class="space-3"></div>
