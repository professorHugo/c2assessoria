<?php
  //Documento Entrevistado - Frente
  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>" . 
    $QueryBuscarDocumentoEntrevistadoFrente = "
      SELECT * FROM tb_fotos
      WHERE id_foto = '$DocumentoEntrevistadoFrente'
    ";
    echo "</pre>";
    $ExeQrBuscarDocumentoEntrevistadoFrente = mysqli_query($connection, $QueryBuscarDocumentoEntrevistadoFrente);
    $RowQrBuscarDocumentoEntrevistadoFrente = mysqli_num_rows($ExeQrBuscarDocumentoEntrevistadoFrente);
    if( $RowQrBuscarDocumentoEntrevistadoFrente = 1 ){
      while( $DocumentoEntrevistadoFrente = mysqli_fetch_assoc($ExeQrBuscarDocumentoEntrevistadoFrente) ){
        $DocEntrevistadoFrente = $DocumentoEntrevistadoFrente['nome_foto'];
        $PastaDocEntrevistadoFrente = $DocumentoEntrevistadoFrente['pasta_foto'];
      }
      ?>
        <div class="col-12 float-left text-center foto-documento">
          <p><b>Documento Entrevistado <?php echo $NomeEntrevistado?> - Frente</b><br></p>
          <img 
            src='Docs/<?php echo "$PastaDocEntrevistadoFrente/$DocEntrevistadoFrente"?>' 
            alt="<?php echo $DocEntrevistadoFrente ?>" 
            class="img-fluid"
            data-toggle="modal"
            data-target="#Documento-Entrevistado-Frente<?php echo $IdEntrevistado?>"
          >
        </div>
      <?php
      // Exibir Documento-Entrevistado-Frente
      include 'Modals/Documento-Entrevistado-Frente.php';
    }
  }else{
    //PROD
    "<br><pre>" . 
    $QueryBuscarDocumentoEntrevistadoFrente = "
      SELECT * FROM tb_fotos
      WHERE id_foto = '$DocumentoEntrevistadoFrente'
    ";
    "</pre>";
    $ExeQrBuscarDocumentoEntrevistadoFrente = mysqli_query($connection, $QueryBuscarDocumentoEntrevistadoFrente);
    $RowQrBuscarDocumentoEntrevistadoFrente = mysqli_num_rows($ExeQrBuscarDocumentoEntrevistadoFrente);
    if( $RowQrBuscarDocumentoEntrevistadoFrente = 1 ){
      while( $DocumentoEntrevistadoFrente = mysqli_fetch_assoc($ExeQrBuscarDocumentoEntrevistadoFrente) ){
        $DocEntrevistadoFrente = $DocumentoEntrevistadoFrente['nome_foto'];
        $PastaDocEntrevistadoFrente = $DocumentoEntrevistadoFrente['pasta_foto'];
      }
      ?>
        <div class="col-12 float-left text-center foto-documento">
          <p><b>Documento Entrevistado <?php echo $NomeEntrevistado?> - Frente</b><br></p>
          <img 
            src='Docs/<?php echo "$PastaDocEntrevistadoFrente/$DocEntrevistadoFrente"?>' 
            alt="<?php echo $DocEntrevistadoFrente ?>" 
            class="img-fluid"
            data-toggle="modal"
            data-target="#Documento-Entrevistado-Frente<?php echo $IdEntrevistado?>"
          >
        </div>        
      <?php
      // Exibir Documento-Entrevistado-Frente
      include 'Modals/Documento-Entrevistado-Frente.php';
    }
  }





  //Documento Entrevistado - Verso
  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>" . 
    $QueryBuscarDocumentoEntrevistadoVerso = "
      SELECT * FROM tb_fotos
      WHERE id_foto = '$DocumentoEntrevistadoVerso'
    ";
    echo "</pre>";
    $ExeQrBuscarDocumentoEntrevistadoVerso = mysqli_query($connection, $QueryBuscarDocumentoEntrevistadoVerso);
    $RowQrBuscarDocumentoEntrevistadoVerso = mysqli_num_rows($ExeQrBuscarDocumentoEntrevistadoVerso);
    if( $RowQrBuscarDocumentoEntrevistadoVerso = 1 ){
      while( $DocumentoEntrevistadoVerso = mysqli_fetch_assoc($ExeQrBuscarDocumentoEntrevistadoVerso) ){
        $DocEntrevistadoVerso = $DocumentoEntrevistadoVerso['nome_foto'];
        $PastaDocEntrevistadoVerso = $DocumentoEntrevistadoVerso['pasta_foto'];
      }
      ?>
        <div class="col-12 float-left text-center foto-documento">
          <p><b>Documento Entrevistado <?php echo $NomeEntrevistado?> - Verso</b><br></p>
          <img 
            src='Docs/<?php echo "$PastaDocEntrevistadoVerso/$DocEntrevistadoVerso"?>' 
            alt="<?php echo $DocEntrevistadoVerso ?>" 
            class="img-fluid"
            data-toggle="modal"
            data-target="#Documento-Entrevistado-Verso<?php echo $IdEntrevistado?>"
          >
        </div>
      <?php
      // Exibir Documento-Entrevistado-Verso
      include 'Modals/Documento-Entrevistado-Verso.php';
    }
  }else{
    //PROD
    "<br><pre>" . 
    $QueryBuscarDocumentoEntrevistadoVerso = "
      SELECT * FROM tb_fotos
      WHERE id_foto = '$DocumentoEntrevistadoVerso'
    ";
    "</pre>";
    $ExeQrBuscarDocumentoEntrevistadoVerso = mysqli_query($connection, $QueryBuscarDocumentoEntrevistadoVerso);
    $RowQrBuscarDocumentoEntrevistadoVerso = mysqli_num_rows($ExeQrBuscarDocumentoEntrevistadoVerso);
    if( $RowQrBuscarDocumentoEntrevistadoVerso = 1 ){
      while( $DocumentoEntrevistadoVerso = mysqli_fetch_assoc($ExeQrBuscarDocumentoEntrevistadoVerso) ){
        $DocEntrevistadoVerso = $DocumentoEntrevistadoVerso['nome_foto'];
        $PastaDocEntrevistadoVerso = $DocumentoEntrevistadoVerso['pasta_foto'];
      }
      ?>
        <div class="col-12 float-left text-center foto-documento">
          <p><b>Documento Entrevistado <?php echo $NomeEntrevistado?> - Verso</b><br></p>
          <img 
            src='Docs/<?php echo "$PastaDocEntrevistadoVerso/$DocEntrevistadoVerso"?>' 
            alt="<?php echo $DocEntrevistadoVerso ?>" 
            class="img-fluid"
            data-toggle="modal"
            data-target="#Documento-Entrevistado-Verso<?php echo $IdEntrevistado?>"
          >
        </div>        
      <?php
      // Exibir Documento-Entrevistado-Verso
      include 'Modals/Documento-Entrevistado-Verso.php';
    }
  }