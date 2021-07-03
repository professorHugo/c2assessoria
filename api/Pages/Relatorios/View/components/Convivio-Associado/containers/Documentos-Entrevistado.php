<?php
  //Documento Entrevistado Convívio - Frente
  if( $DocumentoConvivioFrente != 1 ){
    if( $SysMode == 1 ){
      //DEV
      echo "<br><pre>" . 
      $QueryBuscarDocumentosEntrevistadoConvivioFrente = "
        SELECT * FROM tb_fotos
        WHERE id_foto = '$DocumentoConvivioFrente'
      ";
      echo "</pre>";
      $ExeQrBuscarDocumentosEntrevistadoConvivioFrente = mysqli_query(
        $connection, $QueryBuscarDocumentosEntrevistadoConvivioFrente
      );
      $RowQrBuscarDocumentosEntrevistadoConvivioFrente = mysqli_num_rows(
        $ExeQrBuscarDocumentosEntrevistadoConvivioFrente
      );
  
      if( $RowQrBuscarDocumentosEntrevistadoConvivioFrente = 1 ){
        while( $ReturnDocumentosConvivioFrente = mysqli_fetch_assoc($ExeQrBuscarDocumentosEntrevistadoConvivioFrente) ){
          $DocConvivioFrente = $ReturnDocumentosConvivioFrente['nome_foto'];
          $PastaConvivioFrente = $ReturnDocumentosConvivioFrente['pasta_foto'];
        }
        ?>
          <div class="col-12 float-left text-center foto-documento">
            <p><b>Documento Entrevistado <?php echo $NomeEntrevistadoConvivio ?> - Frente</b><br></p>
            <img 
              src="Docs/<?php echo "$PastaConvivioFrente/$DocConvivioFrente" ?>" 
              alt="<?php echo $DocConvivioFrente?>" 
              class="img-fluid"
              data-toggle="modal"
              data-target="#Documento-Convivio-Frente<?php echo $IdEntrevistadoConvivio?>"
            >
          </div>
        <?php
        //Exibir Documento-Convivio-Frente
        include 'Modals/Documento-Convivio-Frente.php';
      }
  
    }else{
      //PROD
      "<br><pre>" . 
      $QueryBuscarDocumentosEntrevistadoConvivioFrente = "
        SELECT * FROM tb_fotos
        WHERE id_foto = '$DocumentoConvivioFrente'
      ";
      "</pre>";
      $ExeQrBuscarDocumentosEntrevistadoConvivioFrente = mysqli_query(
        $connection, $QueryBuscarDocumentosEntrevistadoConvivioFrente
      );
      $RowQrBuscarDocumentosEntrevistadoConvivioFrente = mysqli_num_rows(
        $ExeQrBuscarDocumentosEntrevistadoConvivioFrente
      );
  
      if( $RowQrBuscarDocumentosEntrevistadoConvivioFrente = 1 ){
        while( $ReturnDocumentosConvivioFrente = mysqli_fetch_assoc($ExeQrBuscarDocumentosEntrevistadoConvivioFrente) ){
          $DocConvivioFrente = $ReturnDocumentosConvivioFrente['nome_foto'];
          $PastaConvivioFrente = $ReturnDocumentosConvivioFrente['pasta_foto'];
        }
        ?>
          <div class="col-12 float-left text-center foto-documento">
            <p><b>Documento Entrevistado <?php echo $NomeEntrevistadoConvivio ?> - Frente</b><br></p>
            <img 
              src="Docs/<?php echo "$PastaConvivioFrente/$DocConvivioFrente" ?>" 
              alt="<?php echo $DocConvivioFrente?>" 
              class="img-fluid"
              data-toggle="modal"
              data-target="#Documento-Convivio-Frente<?php echo $IdEntrevistadoConvivio?>"
            >
          </div>
        <?php
        //Exibir Documento-Convivio-Frente
        include 'Modals/Documento-Convivio-Frente.php';
      }
  
    }
  }
  





  //Documento Entrevistado Convívio - Verso
  if( $DocumentoConvivioVerso != 1 ){
    if( $SysMode == 1 ){
      //DEV
      echo "<br><pre>" . 
      $QueryBuscarDocumentosEntrevistadoConvivioVerso = "
        SELECT * FROM tb_fotos
        WHERE id_foto = '$DocumentoConvivioVerso'
      ";
      echo "</pre>";
      $ExeQrBuscarDocumentosEntrevistadoConvivioVerso = mysqli_query(
        $connection, $QueryBuscarDocumentosEntrevistadoConvivioVerso
      );
      $RowQrBuscarDocumentosEntrevistadoConvivioVerso = mysqli_num_rows(
        $ExeQrBuscarDocumentosEntrevistadoConvivioVerso
      );
  
      if( $RowQrBuscarDocumentosEntrevistadoConvivioVerso = 1 ){
        while( $ReturnDocumentosConvivioVerso = mysqli_fetch_assoc($ExeQrBuscarDocumentosEntrevistadoConvivioVerso) ){
          $DocConvivioVerso = $ReturnDocumentosConvivioVerso['nome_foto'];
          $PastaConvivioVerso = $ReturnDocumentosConvivioVerso['pasta_foto'];
        }
        ?>
          <div class="col-12 float-left text-center foto-documento">
            <p><b>Documento Entrevistado <?php echo $NomeEntrevistadoConvivio ?> - Verso</b><br></p>
            <img 
              src="Docs/<?php echo "$PastaConvivioVerso/$DocConvivioVerso" ?>" 
              alt="<?php echo $DocConvivioVerso?>" 
              class="img-fluid"
              data-toggle="modal"
              data-target="#Documento-Convivio-Verso<?php echo $IdEntrevistadoConvivio?>"
            >
          </div>
        <?php
        //Exibir Documento-Convivio-Verso
        include 'Modals/Documento-Convivio-Verso.php';
      }
  
    }else{
      //PROD
      "<br><pre>" . 
      $QueryBuscarDocumentosEntrevistadoConvivioVerso = "
        SELECT * FROM tb_fotos
        WHERE id_foto = '$DocumentoConvivioVerso'
      ";
      "</pre>";
      $ExeQrBuscarDocumentosEntrevistadoConvivioVerso = mysqli_query(
        $connection, $QueryBuscarDocumentosEntrevistadoConvivioVerso
      );
      $RowQrBuscarDocumentosEntrevistadoConvivioVerso = mysqli_num_rows(
        $ExeQrBuscarDocumentosEntrevistadoConvivioVerso
      );
  
      if( $RowQrBuscarDocumentosEntrevistadoConvivioVerso = 1 ){
        while( $ReturnDocumentosConvivioVerso = mysqli_fetch_assoc($ExeQrBuscarDocumentosEntrevistadoConvivioVerso) ){
          $DocConvivioVerso = $ReturnDocumentosConvivioVerso['nome_foto'];
          $PastaConvivioVerso = $ReturnDocumentosConvivioVerso['pasta_foto'];
        }
        ?>
          <div class="col-12 float-left text-center foto-documento">
            <p><b>Documento Entrevistado <?php echo $NomeEntrevistadoConvivio ?> - Verso</b><br></p>
            <img 
              src="Docs/<?php echo "$PastaConvivioVerso/$DocConvivioVerso" ?>" 
              alt="<?php echo $DocConvivioVerso?>" 
              class="img-fluid"
              data-toggle="modal"
              data-target="#Documento-Convivio-Verso<?php echo $IdEntrevistadoConvivio?>"
            >
          </div>
        <?php
        //Exibir Documento-Convivio-Verso
        include 'Modals/Documento-Convivio-Verso.php';
      }
  
    }
  }
  