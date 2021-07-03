<div class="col-12" id="Fotos-Documento">
  <?php
    //Documento - FRENTE
    if( $SysMode == 1 ){
      //DEV
      echo "<br><pre>" . 
      $QueryBuscarFotoDocumentoAssociadoFrente = "
        SELECT * FROM tb_fotos
        WHERE id_foto = '$FotoDocumentoFrente'
      ";
      echo "</pre>";
      $ExeQrBuscarFotoDocumentoAssociadoFrente = mysqli_query($connection, $QueryBuscarFotoDocumentoAssociadoFrente);
      while( $FotoDocumentoAssociadoFrente = mysqli_fetch_assoc($ExeQrBuscarFotoDocumentoAssociadoFrente) ){
        $NomeDocumentoFrente = $FotoDocumentoAssociadoFrente['nome_foto'];
        $PastaFrente = $CPFAssociado;
        ?>
          <div class="col-12 float-left text-center foto-documento">
            <p class="col-12"><b>Frente do Documento do Associado:</b></p>

            <img 
              src="Docs/<?php echo "$PastaFrente/$NomeDocumentoFrente" ?>" 
              alt="<?php echo $NomeDocumentoFrente ?>" 
              class="img-fluid"
              data-toggle="modal"
              data-target="#Foto-Documento-Frente"
            >
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
      while( $FotoDocumentoAssociadoFrente = mysqli_fetch_assoc($ExeQrBuscarFotoDocumentoAssociadoFrente) ){
        $NomeDocumentoFrente = $FotoDocumentoAssociadoFrente['nome_foto'];
        $PastaFrente = $CPFAssociado;
        ?>
          <div class="col-12 float-left text-center foto-documento">
            <p class="col-12"><b>Frente do Documento do Associado:</b></p>

            <img 
              src="Docs/<?php echo "$PastaFrente/$NomeDocumentoFrente" ?>" 
              alt="<?php echo $NomeDocumentoFrente ?>" 
              class="img-fluid"
              data-toggle="modal"
              data-target="#Foto-Documento-Frente"
            >
          </div>
        <?php
      }
    }




    //Documento - Verso
    if( $SysMode == 1 ){
      //DEV
      echo "<br><pre>" . 
      $QueryBuscarFotoDocumentoAssociadoVerso = "
        SELECT * FROM tb_fotos
        WHERE id_foto = '$FotoDocumentoVerso'
      ";
      echo "</pre>";
      $ExeQrBuscarFotoDocumentoAssociadoVerso = mysqli_query($connection, $QueryBuscarFotoDocumentoAssociadoVerso);
      while( $FotoDocumentoVerso = mysqli_fetch_assoc($ExeQrBuscarFotoDocumentoAssociadoVerso) ){
        $NomeDocumentoVerso = $FotoDocumentoVerso['nome_foto'];
        $PastaVerso = $CPFAssociado;
        ?>
          <div class="col-12 float-left text-center foto-documento">
            <p class="col-12"><b>Verso do Documento do Associado:</b></p>

            <img 
              src="Docs/<?php echo "$PastaVerso/$NomeDocumentoVerso" ?>" 
              alt="<?php echo $NomeDocumentoVerso ?>" 
              class="img-fluid"
              data-toggle="modal"
              data-target="#Foto-Documento-Verso"
            >
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
      while( $FotoDocumentoVerso = mysqli_fetch_assoc($ExeQrBuscarFotoDocumentoAssociadoVerso) ){
        $NomeDocumentoVerso = $FotoDocumentoVerso['nome_foto'];
        $PastaVerso = $CPFAssociado;
        ?>
          <div class="col-12 float-left text-center foto-documento">
            <p class="col-12"><b>Verso do Documento do Associado:</b></p>

            <img 
              src="Docs/<?php echo "$PastaVerso/$NomeDocumentoVerso" ?>" 
              alt="<?php echo $NomeDocumentoVerso ?>" 
              class="img-fluid"
              data-toggle="modal"
              data-target="#Foto-Documento-Verso"
            >
          </div>
        <?php
      }
    }
  ?>
</div>