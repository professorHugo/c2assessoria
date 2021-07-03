<div class="col-12" id="Fotos-Prontuario-Condutor">
  <?php

    //Foto Frente
    if( $SysMode == 1 ){
      //DEV
      echo "<br><pre>" . 
      $QueryBuscarFotoProntuarioCondutorFrente = "
        SELECT * FROM tb_fotos
        WHERE id_foto = '$FotoProntuarioFrenteC' && categoria_foto = 'prontuario_condutor1'
      ";
      echo "</pre>";
      $ExeQrBuscarFotoProntuarioCondutorFrente = mysqli_query($connection, $QueryBuscarFotoProntuarioCondutorFrente);
      while( $FotoFrenteC = mysqli_fetch_assoc($ExeQrBuscarFotoProntuarioCondutorFrente) ){
        $NomeFrenteC = $FotoFrenteC['nome_foto'];
        $PastaFrenteC = $CPFAssociado;
        ?>
          <div class="col-12 float-left text-center foto-prontuario">
            <p class="col-12"><b>Frente do Prontuário no DETRAN:</b></p>

            <img 
              src="Docs/<?php echo "$PastaFrenteC/$NomeFrenteC" ?>" 
              alt="" 
              class="img-fluid"
              data-toggle="modal"
              data-target="#Foto-Prontuario-Condutor-Frente"
            >
          </div>
        <?php
      }
    }else{

      //PROD

      "<br><pre>" . 
      $QueryBuscarFotoProntuarioCondutorFrente = "
        SELECT * FROM tb_fotos
        WHERE id_foto = '$FotoProntuarioFrenteC' && categoria_foto = 'prontuario_condutor1'
      ";
      "</pre>";
      $ExeQrBuscarFotoProntuarioCondutorFrente = mysqli_query($connection, $QueryBuscarFotoProntuarioCondutorFrente);
      while( $FotoFrenteC = mysqli_fetch_assoc($ExeQrBuscarFotoProntuarioCondutorFrente) ){
        $NomeFrenteC = $FotoFrenteC['nome_foto'];
        $PastaFrenteC = $CPFAssociado;
        ?>
          <div class="col-12 float-left text-center foto-prontuario">
            <p class="col-12"><b>Frente do Prontuário no DETRAN:</b></p>

            <img 
              src="Docs/<?php echo "$PastaFrenteC/$NomeFrenteC" ?>" 
              alt="" 
              class="img-fluid"
              data-toggle="modal"
              data-target="#Foto-Prontuario-Condutor-Frente"
            >
          </div>
        <?php
      }
    }


    //Foto Verso
    if( $SysMode == 1 ){
      //DEV
      echo "<br><pre>" . 
      $QueryBuscarFotoProntuarioCondutorVerso = "
        SELECT * FROM tb_fotos
        WHERE id_foto = '$FotoProntuarioVersoC' && categoria_foto = 'prontuario_condutor2'
      ";
      echo "</pre>";
      $ExeQrBuscarFotoProntuarioCondutorVerso = mysqli_query($connection, $QueryBuscarFotoProntuarioCondutorVerso);
      while( $FotoVersoC = mysqli_fetch_assoc($ExeQrBuscarFotoProntuarioCondutorVerso) ){
        $NomeVersoC = $FotoVersoC['nome_foto'];
        $PastaVersoC = $CPFAssociado;
        ?>
          <div class="col-12 float-left text-center foto-prontuario">
            <p class="col-12"><b>Verso do Prontuário no DETRAN:</b></p>

            <img 
              src="Docs/<?php echo "$PastaVersoC/$NomeVersoC" ?>" alt="" 
              class="img-fluid"
              data-toggle="modal"
              data-target="#Foto-Prontuario-Condutor-Verso"
            >
          </div>
        <?php
      }
    }else{

      //PROD

      "<br><pre>" . 
      $QueryBuscarFotoProntuarioCondutorVerso = "
        SELECT * FROM tb_fotos
        WHERE id_foto = '$FotoProntuarioVersoC' && categoria_foto = 'prontuario_condutor2'
      ";
      "</pre>";
      $ExeQrBuscarFotoProntuarioCondutorVerso = mysqli_query($connection, $QueryBuscarFotoProntuarioCondutorVerso);
      while( $FotoVersoC = mysqli_fetch_assoc($ExeQrBuscarFotoProntuarioCondutorVerso) ){
        $NomeVersoC = $FotoVersoC['nome_foto'];
        $PastaVersoC = $CPFAssociado;
        ?>
          <div class="col-12 float-left text-center foto-prontuario">
            <p class="col-12"><b>Verso do Prontuário no DETRAN:</b></p>

            <img 
              src="Docs/<?php echo "$PastaVersoC/$NomeVersoC" ?>" alt="" 
              class="img-fluid"
              data-toggle="modal"
              data-target="#Foto-Prontuario-Condutor-Verso"
            >
          </div>
        <?php
      }
    }

  ?>
  <p class="numero-pagina">
    Relatório: <?php echo $Protocolo ?> 
    - Página ??? - 
    Perfil do Condutor (Prontuário no DETRAN)
  </p>
</div>