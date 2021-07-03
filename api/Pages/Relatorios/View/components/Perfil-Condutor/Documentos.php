<div class="col-12" id="Fotos-Documento-Condutor">
  <?php
    //Documento - FRENTE
    if( $SysMode == 1 ){
      //DEV
      echo "<br><pre>" . 
      $QueryBuscarFotoDocumentoCondutorFrente = "
        SELECT * FROM tb_fotos
        WHERE id_foto = '$FotoDocumentoFrenteC' && categoria_foto = 'documento_condutor_frente'
      ";
      echo "</pre>";
      $ExeQrBuscarFotoDocumentoCondutorFrente = mysqli_query($connection, $QueryBuscarFotoDocumentoCondutorFrente);
      while( $DocumentoFrenteC = mysqli_fetch_assoc($ExeQrBuscarFotoDocumentoCondutorFrente) ){
        $NomeDocumentoFrenteC = $DocumentoFrenteC['nome_foto'];
        $PastaFrenteC = $DocumentoFrenteC['pasta_foto'];
        ?>
          <div class="col-12 float-left text-center foto-documento">
            <p class="col-12"><b>Frente do Documento do Condutor:</b></p>

            <img 
              src="Docs/<?php echo "$PastaFrenteC/$NomeDocumentoFrenteC" ?>" 
              alt="<?php echo $NomeDocumentoFrenteC ?>" 
              class="img-fluid"
              data-toggle="modal"
              data-target="#Foto-Documento-Condutor-Frente"
            >
          </div>
        <?php
      }
    }else{

      //PROD
      "<br><pre>" . 
      $QueryBuscarFotoDocumentoCondutorFrente = "
        SELECT * FROM tb_fotos
        WHERE id_foto = '$FotoDocumentoFrenteC' && categoria_foto = 'documento_condutor_frente'
      ";
      "</pre>";
      $ExeQrBuscarFotoDocumentoCondutorFrente = mysqli_query($connection, $QueryBuscarFotoDocumentoCondutorFrente);
      while( $DocumentoFrenteC = mysqli_fetch_assoc($ExeQrBuscarFotoDocumentoCondutorFrente) ){
        $NomeDocumentoFrenteC = $DocumentoFrenteC['nome_foto'];
        $PastaFrenteC = $DocumentoFrenteC['pasta_foto'];
        ?>
          <div class="col-12 float-left text-center foto-documento">
            <p class="col-12"><b>Frente do Documento do Condutor:</b></p>

            <img 
              src="Docs/<?php echo "$PastaFrenteC/$NomeDocumentoFrenteC" ?>" 
              alt="<?php echo $NomeDocumentoFrenteC ?>" 
              class="img-fluid"
              data-toggle="modal"
              data-target="#Foto-Documento-Condutor-Frente"
            >
          </div>
        <?php
      }
    }




    //Documento - Verso
    if( $SysMode == 1 ){
      //DEV
      echo "<br><pre>" . 
      $QueryBuscarFotoDocumentoCondutorVerso = "
        SELECT * FROM tb_fotos
        WHERE id_foto = '$FotoDocumentoVersoC'
      ";
      echo "</pre>";
      $ExeQrBuscarFotoDocumentoCondutorVerso = mysqli_query($connection, $QueryBuscarFotoDocumentoCondutorVerso);
      while( $DocumentoVersoC = mysqli_fetch_assoc($ExeQrBuscarFotoDocumentoCondutorVerso) ){
        $NomeDocumentoVersoC = $DocumentoVersoC['nome_foto'];
        $PastaVersoC = $DocumentoVersoC['pasta_foto'];
        ?>
          <div class="col-12 float-left text-center foto-documento">
            <p class="col-12"><b>Verso do Documento do Condutor:</b></p>

            <img 
              src="Docs/<?php echo "$PastaVersoC/$NomeDocumentoVersoC" ?>" 
              alt="<?php echo $NomeDocumentoVersoC ?>" 
              class="img-fluid"
              data-toggle="modal"
              data-target="#Foto-Documento-Condutor-Verso"
            >
          </div>
        <?php
      }
    }else{

      //PROD
      "<br><pre>" . 
      $QueryBuscarFotoDocumentoCondutorVerso = "
        SELECT * FROM tb_fotos
        WHERE id_foto = '$FotoDocumentoVersoC'
      ";
      "</pre>";
      $ExeQrBuscarFotoDocumentoCondutorVerso = mysqli_query($connection, $QueryBuscarFotoDocumentoCondutorVerso);
      while( $DocumentoVersoC = mysqli_fetch_assoc($ExeQrBuscarFotoDocumentoCondutorVerso) ){
        $NomeDocumentoVersoC = $DocumentoVersoC['nome_foto'];
        $PastaVersoC = $DocumentoVersoC['pasta_foto'];
        ?>
          <div class="col-12 float-left text-center foto-documento">
            <p class="col-12"><b>Verso do Documento do Condutor:</b></p>

            <img 
              src="Docs/<?php echo "$PastaVersoC/$NomeDocumentoVersoC" ?>" 
              alt="<?php echo $NomeDocumentoVersoC ?>" 
              class="img-fluid"
              data-toggle="modal"
              data-target="#Foto-Documento-Condutor-Verso"
            >
          </div>
        <?php
      }
    }
  ?>

<p class="numero-pagina">
    Relatório: <?php echo $Protocolo ?> 
    - Página ??? - 
    Documentos do Condutor (Frente e Verso)
  </p>
</div>