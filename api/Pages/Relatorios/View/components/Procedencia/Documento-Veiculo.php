<h4 class="col-12 rotulos">Fotos do documento do veículo: </h4>
<?php
  //Foto Documento Veículo Frente
  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>" . 
    $QueryBuscarFotosDocumentoVeiculoFrente = "
      SELECT * FROM tb_fotos
      WHERE id_foto = '$FotoFrenteDocumentoVeiculo'
    ";
    echo "</pre>";
    $ExeQrBuscarFotosDocumentoVeiculoFrente = mysqli_query($connection, $QueryBuscarFotosDocumentoVeiculoFrente);
    $RowQrBuscarFotosDocumentoVeiculoFrente = mysqli_num_rows($ExeQrBuscarFotosDocumentoVeiculoFrente);

    if( $RowQrBuscarFotosDocumentoVeiculoFrente = 1 ){
      while( $FotoFrenteDocumentoVeiculo = mysqli_fetch_assoc($ExeQrBuscarFotosDocumentoVeiculoFrente) ){
        $ArquivoDocumentoVeiculoF = $FotoFrenteDocumentoVeiculo['nome_foto'];
        $PastaDocumentoVeiculoF = $FotoFrenteDocumentoVeiculo['pasta_foto'];
        ?>
          <div class="col-12 foto-documento">
            <p class="col-12"><b>Documento do veículo - Frente</b></p>
            <img 
              src='<?php echo "Docs/$PastaDocumentoVeiculoF/$ArquivoDocumentoVeiculoF"?>' 
              alt='<?php echo "$ArquivoDocumentoVeiculoF"?>' 
              class="img-fluid"
              data-toggle="modal"
              data-target="#Foto-Documento-Veiculo-Frente"
            >
          </div>
        <?php
      }
    }
  }else{

    //PROD
    "<br><pre>" . 
    $QueryBuscarFotosDocumentoVeiculoFrente = "
      SELECT * FROM tb_fotos
      WHERE id_foto = '$FotoFrenteDocumentoVeiculo'
    ";
    "</pre>";
    $ExeQrBuscarFotosDocumentoVeiculoFrente = mysqli_query($connection, $QueryBuscarFotosDocumentoVeiculoFrente);
    $RowQrBuscarFotosDocumentoVeiculoFrente = mysqli_num_rows($ExeQrBuscarFotosDocumentoVeiculoFrente);

    if( $RowQrBuscarFotosDocumentoVeiculoFrente = 1 ){
      while( $FotoFrenteDocumentoVeiculo = mysqli_fetch_assoc($ExeQrBuscarFotosDocumentoVeiculoFrente) ){
        $ArquivoDocumentoVeiculoF = $FotoFrenteDocumentoVeiculo['nome_foto'];
        $PastaDocumentoVeiculoF = $FotoFrenteDocumentoVeiculo['pasta_foto'];
        ?>
          <div class="col-12 foto-documento">
            <p class="col-12"><b>Documento do veículo - Frente</b></p>
            <img 
              src='<?php echo "Docs/$PastaDocumentoVeiculoF/$ArquivoDocumentoVeiculoF"?>' 
              alt='<?php echo "$ArquivoDocumentoVeiculoF"?>' 
              class="img-fluid"
              data-toggle="modal"
              data-target="#Foto-Documento-Veiculo-Frente"
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
      WHERE id_foto = '$FotoVersoDocumentoVeiculo'
    ";
    echo "</pre>";
    $ExeQrBuscarFotosDocumentoVeiculoVerso = mysqli_query($connection, $QueryBuscarFotosDocumentoVeiculoVerso);
    $RowQrBuscarFotosDocumentoVeiculoVerso = mysqli_num_rows($ExeQrBuscarFotosDocumentoVeiculoVerso);

    if( $RowQrBuscarFotosDocumentoVeiculoVerso = 1 ){
      while( $FotoVersoDocumentoVeiculo = mysqli_fetch_assoc($ExeQrBuscarFotosDocumentoVeiculoVerso) ){
        $ArquivoDocumentoVeiculoV = $FotoVersoDocumentoVeiculo['nome_foto'];
        $PastaDocumentoVeiculoV = $FotoVersoDocumentoVeiculo['pasta_foto'];
        ?>
          <div class="col-12 foto-documento">
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
      WHERE id_foto = '$FotoVersoDocumentoVeiculo'
    ";
    "</pre>";
    $ExeQrBuscarFotosDocumentoVeiculoVerso = mysqli_query($connection, $QueryBuscarFotosDocumentoVeiculoVerso);
    $RowQrBuscarFotosDocumentoVeiculoVerso = mysqli_num_rows($ExeQrBuscarFotosDocumentoVeiculoVerso);

    if( $RowQrBuscarFotosDocumentoVeiculoVerso = 1 ){
      while( $FotoVersoDocumentoVeiculo = mysqli_fetch_assoc($ExeQrBuscarFotosDocumentoVeiculoVerso) ){
        $ArquivoDocumentoVeiculoV = $FotoVersoDocumentoVeiculo['nome_foto'];
        $PastaDocumentoVeiculoV = $FotoVersoDocumentoVeiculo['pasta_foto'];
        ?>
          <div class="col-12 foto-documento">
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