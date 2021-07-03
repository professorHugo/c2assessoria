<?php
  //Documento Entrevistado Convívio - Frente
  if( $DocumentoConvivioFrenteCondutor != 1 ){
    if( $SysMode == 1 ){
      //DEV
      echo "<br><pre>" . 
      $QueryBuscarDocumentosEntrevistadoConvivioFrenteCondutor = "
        SELECT * FROM tb_fotos
        WHERE id_foto = '$DocumentoConvivioFrenteCondutor'
      ";
      echo "</pre>";
      $ExeQrBuscarDocumentosEntrevistadoConvivioFrenteCondutor = mysqli_query(
        $connection, $QueryBuscarDocumentosEntrevistadoConvivioFrenteCondutor
      );
      $RowQrBuscarDocumentosEntrevistadoConvivioFrente = mysqli_num_rows(
        $ExeQrBuscarDocumentosEntrevistadoConvivioFrenteCondutor
      );
  
      if( $RowQrBuscarDocumentosEntrevistadoConvivioFrente = 1 ){
        while( $ReturnDocumentosConvivioFrenteCondutor = mysqli_fetch_assoc($ExeQrBuscarDocumentosEntrevistadoConvivioFrenteCondutor) ){
          $DocConvivioFrenteCondutor = $ReturnDocumentosConvivioFrenteCondutor['nome_foto'];
          $PastaConvivioFrenteCondutor = $ReturnDocumentosConvivioFrenteCondutor['pasta_foto'];
        }
        ?>
          <div class="col-12 float-left text-center foto-documento">
            <p><b>Documento Entrevistado <?php echo $NomeEntrevistadoConvivioCondutor ?> - Frente</b><br></p>
            <img 
              src="Docs/<?php echo "$PastaConvivioFrenteCondutor/$DocConvivioFrenteCondutor" ?>" 
              alt="<?php echo $DocConvivioFrenteCondutor?>" 
              class="img-fluid"
              data-toggle="modal"
              data-target="#Documento-Convivio-Frente-Condutor<?php echo $IdEntrevistadoConvivioCondutor?>"
            >
          </div>
        <?php
        //Exibir Documento-Convivio-Frente
        include 'Modals/Documento-Convivio-Frente-Condutor.php';
      }
  
    }else{
      //PROD
      "<br><pre>" . 
      $QueryBuscarDocumentosEntrevistadoConvivioFrenteCondutor = "
        SELECT * FROM tb_fotos
        WHERE id_foto = '$DocumentoConvivioFrenteCondutor'
      ";
      "</pre>";
      $ExeQrBuscarDocumentosEntrevistadoConvivioFrenteCondutor = mysqli_query(
        $connection, $QueryBuscarDocumentosEntrevistadoConvivioFrenteCondutor
      );
      $RowQrBuscarDocumentosEntrevistadoConvivioFrente = mysqli_num_rows(
        $ExeQrBuscarDocumentosEntrevistadoConvivioFrenteCondutor
      );
  
      if( $RowQrBuscarDocumentosEntrevistadoConvivioFrente = 1 ){
        while( $ReturnDocumentosConvivioFrenteCondutor = mysqli_fetch_assoc($ExeQrBuscarDocumentosEntrevistadoConvivioFrenteCondutor) ){
          $DocConvivioFrenteCondutor = $ReturnDocumentosConvivioFrenteCondutor['nome_foto'];
          $PastaConvivioFrenteCondutor = $ReturnDocumentosConvivioFrenteCondutor['pasta_foto'];
        }
        ?>
          <div class="col-12 float-left text-center foto-documento">
            <p><b>Documento Entrevistado <?php echo $NomeEntrevistadoConvivioCondutor ?> - Frente</b><br></p>
            <img 
              src="Docs/<?php echo "$PastaConvivioFrenteCondutor/$DocConvivioFrenteCondutor" ?>" 
              alt="<?php echo $DocConvivioFrenteCondutor?>" 
              class="img-fluid"
              data-toggle="modal"
              data-target="#Documento-Convivio-Frente-Condutor<?php echo $IdEntrevistadoConvivioCondutor?>"
            >
          </div>
        <?php
        //Exibir Documento-Convivio-Frente
        include 'Modals/Documento-Convivio-Frente-Condutor.php';
      }
  
    }
  }
  





  //Documento Entrevistado Convívio - Verso
  if( $DocumentoConvivioVersoCondutor != 1 ){
    if( $SysMode == 1 ){
      //DEV
      echo "<br><pre>" . 
      $QueryBuscarDocumentosEntrevistadoConvivioVerso = "
        SELECT * FROM tb_fotos
        WHERE id_foto = '$DocumentoConvivioVersoCondutor'
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
          $DocConvivioVersoCondutor = $ReturnDocumentosConvivioVerso['nome_foto'];
          $PastaConvivioVersoCondutor = $ReturnDocumentosConvivioVerso['pasta_foto'];
        }
        ?>
          <div class="col-12 float-left text-center foto-documento">
            <p><b>Documento Entrevistado <?php echo $NomeEntrevistadoConvivioCondutor ?> - Verso</b><br></p>
            <img 
              src="Docs/<?php echo "$PastaConvivioVersoCondutor/$DocConvivioVersoCondutor" ?>" 
              alt="<?php echo $DocConvivioVersoCondutor?>" 
              class="img-fluid"
              data-toggle="modal"
              data-target="#Documento-Convivio-Verso-Condutor<?php echo $IdEntrevistadoConvivioCondutor?>"
            >
          </div>
        <?php
        //Exibir Documento-Convivio-Verso
        include 'Modals/Documento-Convivio-Verso-Condutor.php';
      }
  
    }else{
      //PROD
      "<br><pre>" . 
      $QueryBuscarDocumentosEntrevistadoConvivioVerso = "
        SELECT * FROM tb_fotos
        WHERE id_foto = '$DocumentoConvivioVersoCondutor'
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
          $DocConvivioVersoCondutor = $ReturnDocumentosConvivioVerso['nome_foto'];
          $PastaConvivioVersoCondutor = $ReturnDocumentosConvivioVerso['pasta_foto'];
        }
        ?>
          <div class="col-12 float-left text-center foto-documento">
            <p><b>Documento Entrevistado <?php echo $NomeEntrevistadoConvivioCondutor ?> - Verso</b><br></p>
            <img 
              src="Docs/<?php echo "$PastaConvivioVersoCondutor/$DocConvivioVersoCondutor" ?>" 
              alt="<?php echo $DocConvivioVersoCondutor?>" 
              class="img-fluid"
              data-toggle="modal"
              data-target="#Documento-Convivio-Verso-Condutor<?php echo $IdEntrevistadoConvivioCondutor?>"
            >
          </div>
        <?php
        //Exibir Documento-Convivio-Verso
        include 'Modals/Documento-Convivio-Verso-Condutor.php';
      }
  
    }
  }
  