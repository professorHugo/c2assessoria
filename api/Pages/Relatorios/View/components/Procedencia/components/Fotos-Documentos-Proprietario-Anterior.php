<h4 class="col-12 rotulos">Fotos do documento do proprietário anterior: </h4>
<?php
  //Foto Documento Veículo Frente
  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>" . 
    $QueryBuscarFtDocProprietarioAnterior = "
      SELECT * FROM tb_fotos
      WHERE id_foto = '$DocumentoProprietarioAnteriorFrente'
    ";
    echo "</pre>";
    $ExeQrBuscarFtDocProprietarioAnterior = mysqli_query($connection, $QueryBuscarFtDocProprietarioAnterior);
    $RowQrBuscarFtDocProprietarioAnterior = mysqli_num_rows($ExeQrBuscarFtDocProprietarioAnterior);

    if( $RowQrBuscarFtDocProprietarioAnterior = 1 ){
      while( $FtDocPropAnteriorFrente = mysqli_fetch_assoc($ExeQrBuscarFtDocProprietarioAnterior) ){
        $ArqFotDocPropAnteriorFrente = $FtDocPropAnteriorFrente['nome_foto'];
        $PastaDocPropAnteriorFrente = $FtDocPropAnteriorFrente['pasta_foto'];
        ?>
          <div class="col-12 foto-documento float-left">
            <p class="col-12"><b>Documento do veículo - Frente</b></p>
            <img 
              src='<?php echo "Docs/$PastaDocPropAnteriorFrente/$ArqFotDocPropAnteriorFrente"?>' 
              alt='<?php echo "$ArqFotDocPropAnteriorFrente"?>' 
              class="img-fluid"
              data-toggle="modal"
              data-target="#Foto-Documento-Proprietario-Anterior-Frente"
            >
          </div>
        <?php
      }
    }
  }else{

    //PROD
    "<br><pre>" . 
    $QueryBuscarFtDocProprietarioAnterior = "
      SELECT * FROM tb_fotos
      WHERE id_foto = '$DocumentoProprietarioAnteriorFrente'
    ";
    "</pre>";
    $ExeQrBuscarFtDocProprietarioAnterior = mysqli_query($connection, $QueryBuscarFtDocProprietarioAnterior);
    $RowQrBuscarFtDocProprietarioAnterior = mysqli_num_rows($ExeQrBuscarFtDocProprietarioAnterior);

    if( $RowQrBuscarFtDocProprietarioAnterior = 1 ){
      while( $FtDocPropAnteriorFrente = mysqli_fetch_assoc($ExeQrBuscarFtDocProprietarioAnterior) ){
        $ArqFotDocPropAnteriorFrente = $FtDocPropAnteriorFrente['nome_foto'];
        $PastaDocPropAnteriorFrente = $FtDocPropAnteriorFrente['pasta_foto'];
        ?>
          <div class="col-12 foto-documento float-left">
            <p class="col-12"><b>Documento do veículo - Frente</b></p>
            <img 
              src='<?php echo "Docs/$PastaDocPropAnteriorFrente/$ArqFotDocPropAnteriorFrente"?>' 
              alt='<?php echo "$ArqFotDocPropAnteriorFrente"?>' 
              class="img-fluid"
              data-toggle="modal"
              data-target="#Foto-Documento-Proprietario-Anterior-Frente"
            >
          </div>
        <?php
      }
    }
  }



  //Foto Documento Veículo Verso
  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>" . 
    $QueryBuscarFotosDocumentoVeiculoVerso = "
      SELECT * FROM tb_fotos
      WHERE id_foto = '$DocumentoProprietarioAnteriorVerso'
    ";
    echo "</pre>";
    $ExeQrBuscarFotosDocumentoVeiculoVerso = mysqli_query($connection, $QueryBuscarFotosDocumentoVeiculoVerso);
    $RowQrBuscarFotosDocumentoVeiculoVerso = mysqli_num_rows($ExeQrBuscarFotosDocumentoVeiculoVerso);

    if( $RowQrBuscarFotosDocumentoVeiculoVerso = 1 ){
      while( $FotoVersoDocumentoVeiculo = mysqli_fetch_assoc($ExeQrBuscarFotosDocumentoVeiculoVerso) ){
        $ArquivoDocumentoVeiculoV = $FotoVersoDocumentoVeiculo['nome_foto'];
        $PastaDocumentoVeiculoV = $FotoVersoDocumentoVeiculo['pasta_foto'];
        ?>
          <div class="col-12 foto-documento float-left">
            <p class="col-12"><b>Documento do veículo - Verso</b></p>
            <img 
              src='<?php echo "Docs/$PastaDocumentoVeiculoV/$ArquivoDocumentoVeiculoV"?>' 
              alt='<?php echo "$ArquivoDocumentoVeiculoV"?>' 
              class="img-fluid"
              data-toggle="modal"
              data-target="#Foto-Documento-Veiculo-Verso"
            >
          </div>
        <?php
      }
    }
  }else{

    //PROD
    "<br><pre>" . 
    $QueryBuscarFotosDocumentoVeiculoVerso = "
      SELECT * FROM tb_fotos
      WHERE id_foto = '$DocumentoProprietarioAnteriorVerso'
    ";
    "</pre>";
    $ExeQrBuscarFotosDocumentoVeiculoVerso = mysqli_query($connection, $QueryBuscarFotosDocumentoVeiculoVerso);
    $RowQrBuscarFotosDocumentoVeiculoVerso = mysqli_num_rows($ExeQrBuscarFotosDocumentoVeiculoVerso);

    if( $RowQrBuscarFotosDocumentoVeiculoVerso = 1 ){
      while( $FotoVersoDocumentoVeiculo = mysqli_fetch_assoc($ExeQrBuscarFotosDocumentoVeiculoVerso) ){
        $ArquivoDocumentoVeiculoV = $FotoVersoDocumentoVeiculo['nome_foto'];
        $PastaDocumentoVeiculoV = $FotoVersoDocumentoVeiculo['pasta_foto'];
        ?>
          <div class="col-12 foto-documento float-left">
            <p class="col-12"><b>Documento do veículo - Verso</b></p>
            <img 
              src='<?php echo "Docs/$PastaDocumentoVeiculoV/$ArquivoDocumentoVeiculoV"?>' 
              alt='<?php echo "$ArquivoDocumentoVeiculoV"?>' 
              class="img-fluid"
              data-toggle="modal"
              data-target="#Foto-Documento-Veiculo-Verso"
            >
          </div>
        <?php
      }
    }
  }