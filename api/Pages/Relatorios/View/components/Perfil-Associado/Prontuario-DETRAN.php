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
    while( $FotoFrente = mysqli_fetch_assoc($ExeQrBuscarFotoProntuarioAssociadoFrente) ){
      $NomeFrente = $FotoFrente['nome_foto'];
      $PastaFrente = $CPFAssociado;
      ?>
        <div class="col-xs-12 col-md-6 float-left text-center">
          <b>Frente do Prontuário no DETRAN:</b>

          <img src="Docs/<?php echo "$PastaFrente/$NomeFrente" ?>" alt="" class="img-fluid" style="max-height: 300px">
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
    while( $FotoFrente = mysqli_fetch_assoc($ExeQrBuscarFotoProntuarioAssociadoFrente) ){
      $NomeFrente = $FotoFrente['nome_foto'];
      $PastaFrente = $CPFAssociado;
      ?>
        <div class="col-xs-12 col-md-6 float-left text-center">
          <b>Frente do Prontuário no DETRAN:</b>

          <img src="Docs/<?php echo "$PastaFrente/$NomeFrente" ?>" alt="" class="img-fluid" style="max-height: 300px">
        </div>
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
    while( $FotoVerso = mysqli_fetch_assoc($ExeQrBuscarFotoProntuarioAssociadoVerso) ){
      $NomeVerso = $FotoVerso['nome_foto'];
      $PastaVerso = $CPFAssociado;
      ?>
        <div class="col-xs-12 col-md-6 float-left text-center">
          <b>Verso do Prontuário do DETRAN:</b>

          <img src="Docs/<?php echo "$PastaVerso/$NomeVerso" ?>" alt="" class="img-fluid" style="max-height: 300px">
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
    while( $FotoVerso = mysqli_fetch_assoc($ExeQrBuscarFotoProntuarioAssociadoVerso) ){
      $NomeVerso = $FotoVerso['nome_foto'];
      $PastaVerso = $CPFAssociado;
      ?>
        <div class="col-xs-12 col-md-6 float-left text-center">
          <b>Verso do Prontuário do DETRAN:</b>

          <img src="Docs/<?php echo "$PastaVerso/$NomeVerso" ?>" alt="" class="img-fluid" style="max-height: 300px">
        </div>
      <?php
    }
  }
?>