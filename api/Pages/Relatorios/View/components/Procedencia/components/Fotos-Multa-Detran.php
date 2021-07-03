<h4 class="col-12 rotulos float-left">Fotos das multas encontradas: </h4>

<?php
  //Fotos multas detran 1
  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>" . 
    $QueryBuscarFotoMultaDetran1 = "
      SELECT * FROM tb_fotos
      WHERE id_foto = '$FotoMultaDetran1'
    ";
    echo "</pre>";
    $ExeQrBuscarFotoMultaDetran1 = mysqli_query($connection, $QueryBuscarFotoMultaDetran1);
    $RowQrBuscarFotoMultaDetran1 = mysqli_num_rows($ExeQrBuscarFotoMultaDetran1);

    if( $RowQrBuscarFotoMultaDetran1 = 1 ){
      while( $ReturFotoMultaDetran1 = mysqli_fetch_assoc($ExeQrBuscarFotoMultaDetran1) ){
        $PastaFotoMultaDetran1 = $ReturFotoMultaDetran1['pasta_foto'];
        $ArquivoFotoMultaDetran1 = $ReturFotoMultaDetran1['nome_foto'];
      }
      ?>
        <div class="col-12 text-center float-left foto-multa-detran">
          <p class="col-12"><b>Multa: Foto 1</b></p>
          <img 
            src="Docs/<?php echo "$PastaFotoMultaDetran1/$ArquivoFotoMultaDetran1"?>" 
            alt="<?php echo $ArquivoFotoMultaDetran1?>" 
            class="img-fluid"
            data-toggle="modal"
            data-target="#Foto-MultaDetran1"
          >
        </div>
      <?php
    }
  }else{
    //PROD
    "<br><pre>" . 
    $QueryBuscarFotoMultaDetran1 = "
      SELECT * FROM tb_fotos
      WHERE id_foto = '$FotoMultaDetran1'
    ";
    "</pre>";
    $ExeQrBuscarFotoMultaDetran1 = mysqli_query($connection, $QueryBuscarFotoMultaDetran1);
    $RowQrBuscarFotoMultaDetran1 = mysqli_num_rows($ExeQrBuscarFotoMultaDetran1);

    if( $RowQrBuscarFotoMultaDetran1 = 1 ){
      while( $ReturFotoMultaDetran1 = mysqli_fetch_assoc($ExeQrBuscarFotoMultaDetran1) ){
        $PastaFotoMultaDetran1 = $ReturFotoMultaDetran1['pasta_foto'];
        $ArquivoFotoMultaDetran1 = $ReturFotoMultaDetran1['nome_foto'];
      }
      ?>
        <div class="col-12 text-center float-left foto-multa-detran">
          <p class="col-12"><b>Multa: Foto 1</b></p>
          <img 
            src="Docs/<?php echo "$PastaFotoMultaDetran1/$ArquivoFotoMultaDetran1"?>" 
            alt="<?php echo $ArquivoFotoMultaDetran1?>" 
            class="img-fluid"
            data-toggle="modal"
            data-target="#Foto-MultaDetran1"
          >
        </div>
      <?php
    }
  }



  //Fotos multas detran 2
  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>" . 
    $QueryBuscarFotoMultaDetran2 = "
      SELECT * FROM tb_fotos
      WHERE id_foto = '$FotoMultaDetran2'
    ";
    echo "</pre>";
    $ExeQrBuscarFotoMultaDetran2 = mysqli_query($connection, $QueryBuscarFotoMultaDetran2);
    $RowQrBuscarFotoMultaDetran2 = mysqli_num_rows($ExeQrBuscarFotoMultaDetran2);

    if( $RowQrBuscarFotoMultaDetran2 = 1 ){
      while( $ReturFotoMultaDetran2 = mysqli_fetch_assoc($ExeQrBuscarFotoMultaDetran2) ){
        $PastaFotoMultaDetran2 = $ReturFotoMultaDetran2['pasta_foto'];
        $ArquivoFotoMultaDetran2 = $ReturFotoMultaDetran2['nome_foto'];
      }
      ?>
        <div class="col-12 text-center float-left foto-multa-detran">
          <p class="col-12"><b>Multa: Foto 2</b></p>
          <img 
            src="Docs/<?php echo "$PastaFotoMultaDetran2/$ArquivoFotoMultaDetran2"?>" 
            alt="<?php echo $ArquivoFotoMultaDetran2?>" 
            class="img-fluid"
            data-toggle="modal"
            data-target="#Foto-MultaDetran2"
          >
        </div>
      <?php
    }
  }else{
    //PROD
    "<br><pre>" . 
    $QueryBuscarFotoMultaDetran2 = "
      SELECT * FROM tb_fotos
      WHERE id_foto = '$FotoMultaDetran2'
    ";
    "</pre>";
    $ExeQrBuscarFotoMultaDetran2 = mysqli_query($connection, $QueryBuscarFotoMultaDetran2);
    $RowQrBuscarFotoMultaDetran2 = mysqli_num_rows($ExeQrBuscarFotoMultaDetran2);

    if( $RowQrBuscarFotoMultaDetran2 = 1 ){
      while( $ReturFotoMultaDetran2 = mysqli_fetch_assoc($ExeQrBuscarFotoMultaDetran2) ){
        $PastaFotoMultaDetran2 = $ReturFotoMultaDetran2['pasta_foto'];
        $ArquivoFotoMultaDetran2 = $ReturFotoMultaDetran2['nome_foto'];
      }
      ?>
        <div class="col-12 text-center float-left foto-multa-detran">
          <p class="col-12"><b>Multa: Foto 2</b></p>
          <img 
            src="Docs/<?php echo "$PastaFotoMultaDetran2/$ArquivoFotoMultaDetran2"?>" 
            alt="<?php echo $ArquivoFotoMultaDetran2?>" 
            class="img-fluid"
            data-toggle="modal"
            data-target="#Foto-MultaDetran2"
          >
        </div>
      <?php
    }
  }




  //Fotos multas detran 3
  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>" . 
    $QueryBuscarFotoMultaDetran3 = "
      SELECT * FROM tb_fotos
      WHERE id_foto = '$FotoMultaDetran3'
    ";
    echo "</pre>";
    $ExeQrBuscarFotoMultaDetran3 = mysqli_query($connection, $QueryBuscarFotoMultaDetran3);
    $RowQrBuscarFotoMultaDetran3 = mysqli_num_rows($ExeQrBuscarFotoMultaDetran3);

    if( $RowQrBuscarFotoMultaDetran3 = 1 ){
      while( $ReturFotoMultaDetran3 = mysqli_fetch_assoc($ExeQrBuscarFotoMultaDetran3) ){
        $PastaFotoMultaDetran3 = $ReturFotoMultaDetran3['pasta_foto'];
        $ArquivoFotoMultaDetran3 = $ReturFotoMultaDetran3['nome_foto'];
      }
      ?>
        <div class="col-12 text-center float-left foto-multa-detran">
          <p class="col-12"><b>Multa: Foto 3</b></p>
          <img 
            src="Docs/<?php echo "$PastaFotoMultaDetran3/$ArquivoFotoMultaDetran3"?>" 
            alt="<?php echo $ArquivoFotoMultaDetran3?>" 
            class="img-fluid"
            data-toggle="modal"
            data-target="#Foto-MultaDetran3"
          >
        </div>
      <?php
    }
  }else{
    //PROD
    "<br><pre>" . 
    $QueryBuscarFotoMultaDetran3 = "
      SELECT * FROM tb_fotos
      WHERE id_foto = '$FotoMultaDetran3'
    ";
    "</pre>";
    $ExeQrBuscarFotoMultaDetran3 = mysqli_query($connection, $QueryBuscarFotoMultaDetran3);
    $RowQrBuscarFotoMultaDetran3 = mysqli_num_rows($ExeQrBuscarFotoMultaDetran3);

    if( $RowQrBuscarFotoMultaDetran3 = 1 ){
      while( $ReturFotoMultaDetran3 = mysqli_fetch_assoc($ExeQrBuscarFotoMultaDetran3) ){
        $PastaFotoMultaDetran3 = $ReturFotoMultaDetran3['pasta_foto'];
        $ArquivoFotoMultaDetran3 = $ReturFotoMultaDetran3['nome_foto'];
      }
      ?>
        <div class="col-12 text-center float-left foto-multa-detran">
          <p class="col-12"><b>Multa: Foto 3</b></p>
          <img 
            src="Docs/<?php echo "$PastaFotoMultaDetran3/$ArquivoFotoMultaDetran3"?>" 
            alt="<?php echo $ArquivoFotoMultaDetran3?>" 
            class="img-fluid"
            data-toggle="modal"
            data-target="#Foto-MultaDetran3"
          >
        </div>
      <?php
    }
  }
?>