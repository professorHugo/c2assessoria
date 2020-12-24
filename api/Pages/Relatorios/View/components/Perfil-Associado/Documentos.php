<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>" . 
    $QueryBuscarFotoDocumentoAssociadoFrente = "
      SELECT * FROM tb_fotos
      WHERE id_foto = '$FotoDocumentoFrente'
    ";
    echo "</pre>";
    $ExeQrBuscarFotoDocumentoAssociadoFrente = mysqli_query($connection, $QueryBuscarFotoDocumentoAssociadoFrente);
    while( $DocumentoFrente = mysqli_fetch_assoc($ExeQrBuscarFotoDocumentoAssociadoFrente) ){
      $NomeFrente = $DocumentoFrente['nome_foto'];
      $PastaFrente = $CPFAssociado;
      ?>
        <div class="col-xs-12 col-md-6 float-left text-center">
          <b>Frente do Documento do Associado:</b>

          <img src="Docs/<?php echo "$PastaFrente/$NomeFrente" ?>" alt="<?php echo $NomeFrente ?>" class="img-fluid" style="max-height: 300px">
        </div>
      <?php
    }
  }else{

    //PROD

    "<br><pre>" . 
    $QueryBuscarFotoDocumentoAssociadoFrente = "
      SELECT * FROM tb_fotos
      WHERE id_foto = '$FotoDocumentoFrente'
    ";
    "</pre>";
    $ExeQrBuscarFotoDocumentoAssociadoFrente = mysqli_query($connection, $QueryBuscarFotoDocumentoAssociadoFrente);
    while( $DocumentoFrente = mysqli_fetch_assoc($ExeQrBuscarFotoDocumentoAssociadoFrente) ){
      $NomeFrente = $DocumentoFrente['nome_foto'];
      $PastaFrente = $CPFAssociado;
      ?>
        <div class="col-xs-12 col-md-6 float-left text-center">
          <b>Frente do Documento do Associado:</b>

          <img src="Docs/<?php echo "$PastaFrente/$NomeFrente" ?>" alt="<?php echo $NomeFrente ?>" class="img-fluid" style="max-height: 300px">
        </div>
      <?php
    }
  }


  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>" . 
    $QueryBuscarFotoDocumentoAssociadoVerso = "
      SELECT * FROM tb_fotos
      WHERE id_foto = '$FotoDocumentoVerso'
    ";
    echo "</pre>";
    $ExeQrBuscarFotoDocumentoAssociadoVerso = mysqli_query($connection, $QueryBuscarFotoDocumentoAssociadoVerso);
    while( $FotoVerso = mysqli_fetch_assoc($ExeQrBuscarFotoDocumentoAssociadoVerso) ){
      $NomeVerso = $FotoVerso['nome_foto'];
      $PastaVerso = $CPFAssociado;
      ?>
        <div class="col-xs-12 col-md-6 float-left text-center">
          <b>Verso do Documento do Associado:</b>

          <img src="Docs/<?php echo "$PastaVerso/$NomeVerso" ?>" alt="<?php echo $NomeVerso ?>" class="img-fluid" style="max-height: 300px">
        </div>
      <?php
    }
  }else{

    //PROD
    "<br><pre>" . 
    $QueryBuscarFotoDocumentoAssociadoVerso = "
      SELECT * FROM tb_fotos
      WHERE id_foto = '$FotoDocumentoVerso'
    ";
    "</pre>";
    $ExeQrBuscarFotoDocumentoAssociadoVerso = mysqli_query($connection, $QueryBuscarFotoDocumentoAssociadoVerso);
    while( $FotoVerso = mysqli_fetch_assoc($ExeQrBuscarFotoDocumentoAssociadoVerso) ){
      $NomeVerso = $FotoVerso['nome_foto'];
      $PastaVerso = $CPFAssociado;
      ?>
        <div class="col-xs-12 col-md-6 float-left text-center">
          <b>Verso do Documento do Associado:</b>

          <img src="Docs/<?php echo "$PastaVerso/$NomeVerso" ?>" alt="<?php echo $NomeVerso ?>" class="img-fluid" style="max-height: 300px">
        </div>
      <?php
    }
  }
?>