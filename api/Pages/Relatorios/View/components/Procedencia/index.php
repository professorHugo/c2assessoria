<?php 
  include 'Query-Data.php';

  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>" . 
    $QueryBuscarProprietarioLegal = "
      SELECT * FROM 
        tb_proprietario_legal
      WHERE id_proprietario = '$ProprietarioLegal'
    ";
    echo "</pre>";
    $ExeQrBuscarProprietarioLegal = mysqli_query($connection, $QueryBuscarProprietarioLegal);
    $RowQrBuscarProprietarioLegal = mysqli_num_rows($ExeQrBuscarProprietarioLegal);

    if( $RowQrBuscarProprietarioLegal = 1 ){
      while( $Proprietario = mysqli_fetch_assoc($ExeQrBuscarProprietarioLegal) ){
        echo "<br>Proprietario Legal: " . $NomeProprietarioLegal = $Proprietario['nome_proprietario'];
        echo "<br>Vínculo: " . $VinculoProprietarioLegal = $Proprietario['vinculo_associado'];
        echo "<br>Observação Proprietário Legal: " . $ObservacaoProprietarioLegal = $Proprietario['observacao_proprietario'];
        
        $FotoDeclaracaoproprietario1 = $Proprietario['foto_declaracao_proprietario1'];
        if( $FotoDeclaracaoproprietario1 == '' ){
          echo "<br>Foto Declaração Proprietario1: " . $FotoDeclaracaoproprietario1 = 0;
          echo "Vazio";
        }
        $FotoDeclaracaoproprietario2 = $Proprietario['foto_declaracao_proprietario2'];
        if( $FotoDeclaracaoproprietario2 == '' ){
          echo "<br>Foto Declaração Proprietario2: " . $FotoDeclaracaoproprietario2 = 0;
          echo "Vazio";
        }
        $FotoDeclaracaoproprietario3 = $Proprietario['foto_declaracao_proprietario3'];
        if( $FotoDeclaracaoproprietario3 == '' ){
          echo "<br>Foto Declaração Proprietario3: " . $FotoDeclaracaoproprietario3 = 0;
          echo "Vazio";
        }
        echo "<br>Documento Proprietário Legal - Frente: " . $FotoDocumentoProprietarioFrente = $Proprietario['foto_documento_proprietario_frente'];
        echo "<br>Documento Proprietário Legal - Verso: " . $FotoDocumentoProprietarioVerso = $Proprietario['foto_documento_proprietario_verso'];
      }
    }
  }else{
    //PROD

    $QueryBuscarProprietarioLegal = "
    SELECT * FROM 
      tb_proprietario_legal
    WHERE id_proprietario = '$ProprietarioLegal'
  ";
  $ExeQrBuscarProprietarioLegal = mysqli_query($connection, $QueryBuscarProprietarioLegal);
  $RowQrBuscarProprietarioLegal = mysqli_num_rows($ExeQrBuscarProprietarioLegal);

  if( $RowQrBuscarProprietarioLegal = 1 ){
    while( $Proprietario = mysqli_fetch_assoc($ExeQrBuscarProprietarioLegal) ){
      "<br>Proprietario Legal: " . $NomeProprietarioLegal = $Proprietario['nome_proprietario'];
      "<br>Vínculo: " . $VinculoProprietarioLegal = $Proprietario['vinculo_associado'];
      "<br>Observação Proprietário Legal: " . $ObservacaoProprietarioLegal = $Proprietario['observacao_proprietario'];
      
      $FotoDeclaracaoproprietario1 = $Proprietario['foto_declaracao_proprietario1'];
      if( $FotoDeclaracaoproprietario1 == '' ){
        "<br>Foto Declaração Proprietario1: " . $FotoDeclaracaoproprietario1 = 0;
        "Vazio";
      }
      $FotoDeclaracaoproprietario2 = $Proprietario['foto_declaracao_proprietario2'];
      if( $FotoDeclaracaoproprietario2 == '' ){
        "<br>Foto Declaração Proprietario2: " . $FotoDeclaracaoproprietario2 = 0;
        "Vazio";
      }
      $FotoDeclaracaoproprietario3 = $Proprietario['foto_declaracao_proprietario3'];
      if( $FotoDeclaracaoproprietario3 == '' ){
        "<br>Foto Declaração Proprietario3: " . $FotoDeclaracaoproprietario3 = 0;
        "Vazio";
      }
      "<br>Documento Proprietário Legal - Frente: " . $FotoDocumentoProprietarioFrente = $Proprietario['foto_documento_proprietario_frente'];
      "<br>Documento Proprietário Legal - Verso: " . $FotoDocumentoProprietarioVerso = $Proprietario['foto_documento_proprietario_verso'];
    }
  }
  }


?>

<div class="Pagina-1">
  <h3 class="rotulos">
    Procedência do veículo associado: 
    <span class="nomes-rotulos">
      <?php echo $ExibirVeiculo?>
    </span>
  </h3>

  <div class="col-12" id="Proprietario-Legal" style="padding-left: 25px">
    <h4 class="rotulos">Proprietário Legal</h4><br>
    
    <div class="col-3 float-left">
      <b>Nome: </b><br>
      <?php echo $NomeProprietarioLegal ?>
    </div>

    <div class="col-3 float-left">
      <b>Vínculo: </b><br>
      <?php echo $VinculoProprietarioLegal?>
    </div>

    <div class="col-3 float-left">
      <b>CRV/DUT:</b><br>
      <?php 
        if( $DocumentoPreenchido == 1 ){
          echo "Em branco";
        }else{
          echo "Preenchido";
        }
      ?>
    </div>

    <div class="col-3 float-left">
      <b>Procedente:</b><br>
      <?php 
        if( $ConfirmaProcedente > 1 && $ConfirmaProcedente < 99 ){
          switch( $ConfirmaProcedente ){
            case 2: echo "Loja";break;
            case 3: echo "Particular";break;
            case 4: echo "Leilão";break;
          }
        }else{
          if( $ConfirmaProcedente == 1 ){
            echo "Não apresentado";
          }
          if( $ConfirmaProcedente == 99 ){
            echo "Não quis informar";
          }
        }
      ?>
    </div>

  </div>

  <div class="col-12" id="Documentos-Proprietario">
    <?php include 'Documentos-Proprietario-Legal.php';?>
  </div>
</div>

<div class="space-3"></div>

<div class="Pagina-2">
  <div class="col-12" id="Fotos-Documento-Veiculo">
    <?php include 'Documento-Veiculo.php'; ?>
  </div>
</div>

<div class="space-3"></div>

<div class="Pagina-3">
  <div class="col-12" id="Procedente-Veiculo">
    <?php include 'Procedente-Veiculo.php' ?>
  </div>
</div>

<div class="space-3"></div>

<div class="Pagina-4">
  <div class="col-12" id="Declaracao-Proprietario-Legal">
    <?php include 'Declaracao-Proprietario-Legal.php'?>
  </div>
</div>

<div class="space-3"></div>

<div class="Pagina-6">
  <div class="col-12" id="Proprietario-Anterior">
    <?php include 'Proprietario-Anterior.php' ?>
  </div>
</div>

<div class="space-3"></div>

<div class="Pagina-7">
  <div class="col-12" id="Sistema-Antifurto">
    <?php include 'Sistema-Antifurto.php'?>
  </div>
</div>

<div class="space-3"></div>

<div class="Pagina-8">
  <div class="col-12" id="Telemetria">
    <?php include 'Telemetria.php'?>
  </div>
</div>

<div class="space-3"></div>

<div class="Pagina-9">
  <div class="col-12" id="Apontamentos-Detran">
    <?php include 'Apontamentos-Detran.php'?>
  </div>
</div>

<div class="Pagina-10">
  <?php
    if( $VistoriaObrigatoria == 1 ){
      ?>
        <div class="col-12" id="Vistoria-Cautelar">
          <?php include 'Vistoria-Cautelar.php'?>
        </div>
      <?php
    }
  ?>
</div>

<div class="space-3"></div>

<div class="Pagina-11">
  <div class="col-12" id="Financeiro">
    <?php
      if( $FinanceiroVeiculo != '' ){
        include 'Financeiro-Veiculo.php';
      }
    ?>
  </div>
</div>

<?php
  include 'Modals/index.php';
?>