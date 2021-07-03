<?php
  //Documento Proprietário - Frente
  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>" . 
    $QueryBuscarDocumentosProprietarioFrente = "
      SELECT * FROM tb_fotos
      WHERE id_foto = '$FotoDocumentoProprietarioFrente'
    ";
    echo "</pre>";
    $ExeQrBuscarDocumentosProprietarioFrente = mysqli_query($connection, $QueryBuscarDocumentosProprietarioFrente);
    $RowQrBuscarDocumentosProprietarioFrente = mysqli_num_rows($ExeQrBuscarDocumentosProprietarioFrente);

    if( $RowQrBuscarDocumentosProprietarioFrente = 1 ){
      while( $DocumentoPropFrente = mysqli_fetch_assoc($ExeQrBuscarDocumentosProprietarioFrente) ){
        $DocProprietarioFrente = $DocumentoPropFrente['nome_foto'];
        $PastaDocProprietarioFrente = $DocumentoPropFrente['pasta_foto'];
        ?>
          <div class="col-12 float-left text-center foto-documento">
            <p class="col-12"><b>Documento Proprietário - Frente</b></p>
            <img 
              src='Docs/<?php echo "$PastaDocProprietarioFrente/$DocProprietarioFrente" ?>'
              alt=""
              class="img-fluid"
              data-toggle="modal"
              data-target="#Documento-Proprietario-Frente"
            >
          </div>
        <?php
      }
    }
  }else{

    //PROD

    "<br><pre>" . 
    $QueryBuscarDocumentosProprietarioFrente = "
      SELECT * FROM tb_fotos
      WHERE id_foto = '$FotoDocumentoProprietarioFrente'
    ";
    "</pre>";
    $ExeQrBuscarDocumentosProprietarioFrente = mysqli_query($connection, $QueryBuscarDocumentosProprietarioFrente);
    $RowQrBuscarDocumentosProprietarioFrente = mysqli_num_rows($ExeQrBuscarDocumentosProprietarioFrente);

    if( $RowQrBuscarDocumentosProprietarioFrente = 1 ){
      while( $DocumentoPropFrente = mysqli_fetch_assoc($ExeQrBuscarDocumentosProprietarioFrente) ){
        $DocProprietarioFrente = $DocumentoPropFrente['nome_foto'];
        $PastaDocProprietarioFrente = $DocumentoPropFrente['pasta_foto'];
        ?>
          <div class="col-12 float-left text-center foto-documento">
            <p class="col-12"><b>Documento Proprietário - Frente</b></p>
            <img 
              src='Docs/<?php echo "$PastaDocProprietarioFrente/$DocProprietarioFrente" ?>'
              alt=""
              class="img-fluid"
              data-toggle="modal"
              data-target="#Documento-Proprietario-Frente"
            >
          </div>
        <?php
      }
    }
  }




  //Documento Proprietário - Verso
  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>" . 
    $QueryBuscarDocumentosProprietarioVerso = "
      SELECT * FROM tb_fotos
      WHERE id_foto = '$FotoDocumentoProprietarioVerso'
    ";
    echo "</pre>";
    $ExeQrBuscarDocumentosProprietarioVerso = mysqli_query($connection, $QueryBuscarDocumentosProprietarioVerso);
    $RowQrBuscarDocumentosProprietarioVerso = mysqli_num_rows($ExeQrBuscarDocumentosProprietarioVerso);

    if( $RowQrBuscarDocumentosProprietarioVerso = 1 ){
      while( $DocumentoPropVerso = mysqli_fetch_assoc($ExeQrBuscarDocumentosProprietarioVerso) ){
        $DocProprietarioVerso = $DocumentoPropVerso['nome_foto'];
        $PastaDocProprietarioVerso = $DocumentoPropVerso['pasta_foto'];
        ?>
          <div class="col-12 float-left text-center foto-documento">
            <p class="col-12"><b>Documento Proprietário - Verso</b></p>
            <img 
              src='Docs/<?php echo "$PastaDocProprietarioVerso/$DocProprietarioVerso" ?>'
              alt=""
              class="img-fluid"
              data-toggle="modal"
              data-target="#Documento-Proprietario-Verso"
            >
          </div>
        <?php
      }
    }
  }else{

    //PROD

    "<br><pre>" . 
    $QueryBuscarDocumentosProprietarioVerso = "
      SELECT * FROM tb_fotos
      WHERE id_foto = '$FotoDocumentoProprietarioVerso'
    ";
    "</pre>";
    $ExeQrBuscarDocumentosProprietarioVerso = mysqli_query($connection, $QueryBuscarDocumentosProprietarioVerso);
    $RowQrBuscarDocumentosProprietarioVerso = mysqli_num_rows($ExeQrBuscarDocumentosProprietarioVerso);

    if( $RowQrBuscarDocumentosProprietarioVerso = 1 ){
      while( $DocumentoPropVerso = mysqli_fetch_assoc($ExeQrBuscarDocumentosProprietarioVerso) ){
        $DocProprietarioVerso = $DocumentoPropVerso['nome_foto'];
        $PastaDocProprietarioVerso = $DocumentoPropVerso['pasta_foto'];
        ?>
          <div class="col-12 float-left text-center foto-documento">
            <p class="col-12"><b>Documento Proprietário - Verso</b></p>
            <img 
              src='Docs/<?php echo "$PastaDocProprietarioVerso/$DocProprietarioVerso" ?>'
              alt=""
              class="img-fluid"
              data-toggle="modal"
              data-target="#Documento-Proprietario-Verso"
            >
          </div>
        <?php
      }
    }
  }
?>