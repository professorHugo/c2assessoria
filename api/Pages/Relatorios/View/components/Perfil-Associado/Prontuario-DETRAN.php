<div class="col-12" id="Fotos-Prontuario">
  <?php
    if( $SysMode == 1 ){
      //DEV
      echo "<br><pre>" . 
      $QueryBuscarFotoProntuarioAssociadoFrente = "
        SELECT * FROM tb_fotos
        WHERE id_foto = '$FotoProntuarioFrente'
      ";
      echo "</pre>";
      $ExeQrBuscarFotoProntuarioAssociadoFrente = mysqli_query($connection, $QueryBuscarFotoProntuarioAssociadoFrente);
      while( $FotoProntuarioFrente = mysqli_fetch_assoc($ExeQrBuscarFotoProntuarioAssociadoFrente) ){
        $NomeProntuarioFrente = $FotoProntuarioFrente['nome_foto'];
        $PastaFrente = $CPFAssociado;
        ?>
          
          <div class="col-12 float-left text-center foto-prontuario">
            <p class="col-12"><b>Frente do Prontuário no DETRAN:</b></p>

            <img src="Docs/<?php echo "$PastaFrente/$NomeProntuarioFrente" ?>" 
              alt="" class="img-fluid" 
              data-toggle="modal" 
              data-target="#Foto-Prontuario-Frente"
            >
          </div>
          
        <?php
      }
    }else{

      //PROD
      "<br><pre>" . 
      $QueryBuscarFotoProntuarioAssociadoFrente = "
        SELECT * FROM tb_fotos
        WHERE id_foto = '$FotoProntuarioFrente'
      ";
      "</pre>";
      $ExeQrBuscarFotoProntuarioAssociadoFrente = mysqli_query($connection, $QueryBuscarFotoProntuarioAssociadoFrente);
      while( $FotoProntuarioFrente = mysqli_fetch_assoc($ExeQrBuscarFotoProntuarioAssociadoFrente) ){
        $NomeProntuarioFrente = $FotoProntuarioFrente['nome_foto'];
        $PastaFrente = $CPFAssociado;
        ?>
          
          <div class="col-12 float-left text-center foto-prontuario">
            <p class="col-12"><b>Frente do Prontuário no DETRAN:</b></p>

            <img src="Docs/<?php echo "$PastaFrente/$NomeProntuarioFrente" ?>" 
              alt="" class="img-fluid" 
              data-toggle="modal" 
              data-target="#Foto-Prontuario-Frente"
            >
          </div>
          <div class="col-space-print"></div>
        <?php
      }
    }
 


    if( $SysMode == 1 ){
      //DEV
      echo "<br><pre>" . 
      $QueryBuscarFotoProntuarioAssociadoVerso = "
        SELECT * FROM tb_fotos
        WHERE id_foto = '$FotoProntuarioVerso'
      ";
      echo "</pre>";
      $ExeQrBuscarFotoProntuarioAssociadoVerso = mysqli_query($connection, $QueryBuscarFotoProntuarioAssociadoVerso);
      while( $FotoProntuarioVerso = mysqli_fetch_assoc($ExeQrBuscarFotoProntuarioAssociadoVerso) ){
        $NomeProntuarioVerso = $FotoProntuarioVerso['nome_foto'];
        $PastaVerso = $CPFAssociado;
        ?>
          <div class="col-12 float-left text-center foto-prontuario">
            <p class="col-12"><b>Verso do Prontuário do DETRAN:</b></p>

            <img src="Docs/<?php echo "$PastaVerso/$NomeProntuarioVerso" ?>" 
              alt="" 
              class="img-fluid"
              data-toggle="modal" 
              data-target="#Foto-Prontuario-Verso"
            >
          </div>
        <?php
      }
    }else{

      //PROD
      "<br><pre>" . 
      $QueryBuscarFotoProntuarioAssociadoVerso = "
        SELECT * FROM tb_fotos
        WHERE id_foto = '$FotoProntuarioVerso'
      ";
      "</pre>";
      $ExeQrBuscarFotoProntuarioAssociadoVerso = mysqli_query($connection, $QueryBuscarFotoProntuarioAssociadoVerso);
      while( $FotoProntuarioVerso = mysqli_fetch_assoc($ExeQrBuscarFotoProntuarioAssociadoVerso) ){
        $NomeProntuarioVerso = $FotoProntuarioVerso['nome_foto'];
        $PastaVerso = $CPFAssociado;
        ?>
          <div class="col-12 float-left text-center foto-prontuario">
            <p class="col-12"><b>Verso do Prontuário do DETRAN:</b></p>

            <img src="Docs/<?php echo "$PastaVerso/$NomeProntuarioVerso" ?>" 
              alt="" 
              class="img-fluid"
              data-toggle="modal" 
              data-target="#Foto-Prontuario-Verso"
            >
          </div>
        <?php
      }
    }
  ?>
</div>
