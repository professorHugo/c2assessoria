<h4 class="col-12 rotulos float-left">Comprovantes de Telemetria: </h4>

<?php
  //Telemetria 1
  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>" . 
    $QueryBuscarAntifurtoTelemetria1 = "
      SELECT * FROM tb_fotos
      WHERE id_foto = '$AntifurtoTelemetria1'
    ";
    echo "</pre>";
    $ExeQrBuscarAntifurtoTelemetria1 = mysqli_query($connection, $QueryBuscarAntifurtoTelemetria1);
    $RowQrBuscarAntifurtoTelemetria1 = mysqli_num_rows($ExeQrBuscarAntifurtoTelemetria1);
    if( $RowQrBuscarAntifurtoTelemetria1 = 1 ){
      while( $ReturnComprovanteAntifurtoTelemetria1 = mysqli_fetch_assoc($ExeQrBuscarAntifurtoTelemetria1) ){
        $PastaAntifurtoTelemetria1 = $ReturnComprovanteAntifurtoTelemetria1['pasta_foto'];
        $ArquivoAntifurtoTelemetria1 = $ReturnComprovanteAntifurtoTelemetria1['nome_foto'];
      }
      ?>
        <div class="col-12 text-center float-left foto-comprovante-telemetria">
          <p class="col-12"><b>Comprovante de telemetria - 1</b></p>
          <img 
            src="Docs/<?php echo "$PastaAntifurtoTelemetria1/$ArquivoAntifurtoTelemetria1"?>" 
            alt="<?php echo $ArquivoAntifurtoTelemetria1 ?>" 
            class="img-fluid"
            data-toggle="modal"
            data-target="#Comprovante-Instalacao-AntifurtoTelemetria1"
          >
        </div>
      <?php
    }
  }else{

    //PROD
    "<br><pre>" . 
    $QueryBuscarAntifurtoTelemetria1 = "
      SELECT * FROM tb_fotos
      WHERE id_foto = '$AntifurtoTelemetria1'
    ";
    "</pre>";
    $ExeQrBuscarAntifurtoTelemetria1 = mysqli_query($connection, $QueryBuscarAntifurtoTelemetria1);
    $RowQrBuscarAntifurtoTelemetria1 = mysqli_num_rows($ExeQrBuscarAntifurtoTelemetria1);
    if( $RowQrBuscarAntifurtoTelemetria1 = 1 ){
      while( $ReturnComprovanteAntifurtoTelemetria1 = mysqli_fetch_assoc($ExeQrBuscarAntifurtoTelemetria1) ){
        $PastaAntifurtoTelemetria1 = $ReturnComprovanteAntifurtoTelemetria1['pasta_foto'];
        $ArquivoAntifurtoTelemetria1 = $ReturnComprovanteAntifurtoTelemetria1['nome_foto'];
      }
      ?>
        <div class="col-12 text-center float-left foto-comprovante-telemetria">
          <p class="col-12"><b>Comprovante de telemetria - 1</b></p>
          <img 
            src="Docs/<?php echo "$PastaAntifurtoTelemetria1/$ArquivoAntifurtoTelemetria1"?>" 
            alt="<?php echo $ArquivoAntifurtoTelemetria1 ?>" 
            class="img-fluid"
            data-toggle="modal"
            data-target="#Comprovante-Instalacao-AntifurtoTelemetria1"
          >
        </div>
      <?php
    }
  }



  //Telemetria 2
  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>" . 
    $QueryBuscarAntifurtoTelemetria2 = "
      SELECT * FROM tb_fotos
      WHERE id_foto = '$AntifurtoTelemetria2'
    ";
    echo "</pre>";
    $ExeQrBuscarAntifurtoTelemetria2 = mysqli_query($connection, $QueryBuscarAntifurtoTelemetria2);
    $RowQrBuscarAntifurtoTelemetria2 = mysqli_num_rows($ExeQrBuscarAntifurtoTelemetria2);
    if( $RowQrBuscarAntifurtoTelemetria2 = 1 ){
      while( $ReturnComprovanteAntifurtoTelemetria2 = mysqli_fetch_assoc($ExeQrBuscarAntifurtoTelemetria2) ){
        $PastaAntifurtoTelemetria2 = $ReturnComprovanteAntifurtoTelemetria2['pasta_foto'];
        $ArquivoAntifurtoTelemetria2 = $ReturnComprovanteAntifurtoTelemetria2['nome_foto'];
      }
      ?>
        <div class="col-12 text-center float-left foto-comprovante-telemetria">
          <p class="col-12"><b>Comprovante de telemetria - 2</b></p>
          <img 
            src="Docs/<?php echo "$PastaAntifurtoTelemetria2/$ArquivoAntifurtoTelemetria2"?>" 
            alt="<?php echo $ArquivoAntifurtoTelemetria2 ?>" 
            class="img-fluid"
            data-toggle="modal"
            data-target="#Comprovante-Instalacao-AntifurtoTelemetria2"
          >
        </div>
      <?php
    }
  }else{

    //PROD
    "<br><pre>" . 
    $QueryBuscarAntifurtoTelemetria2 = "
      SELECT * FROM tb_fotos
      WHERE id_foto = '$AntifurtoTelemetria2'
    ";
    "</pre>";
    $ExeQrBuscarAntifurtoTelemetria2 = mysqli_query($connection, $QueryBuscarAntifurtoTelemetria2);
    $RowQrBuscarAntifurtoTelemetria2 = mysqli_num_rows($ExeQrBuscarAntifurtoTelemetria2);
    if( $RowQrBuscarAntifurtoTelemetria2 = 1 ){
      while( $ReturnComprovanteAntifurtoTelemetria2 = mysqli_fetch_assoc($ExeQrBuscarAntifurtoTelemetria2) ){
        $PastaAntifurtoTelemetria2 = $ReturnComprovanteAntifurtoTelemetria2['pasta_foto'];
        $ArquivoAntifurtoTelemetria2 = $ReturnComprovanteAntifurtoTelemetria2['nome_foto'];
      }
      ?>
        <div class="col-12 text-center float-left foto-comprovante-telemetria">
          <p class="col-12"><b>Comprovante de telemetria - 2</b></p>
          <img 
            src="Docs/<?php echo "$PastaAntifurtoTelemetria2/$ArquivoAntifurtoTelemetria2"?>" 
            alt="<?php echo $ArquivoAntifurtoTelemetria2 ?>" 
            class="img-fluid"
            data-toggle="modal"
            data-target="#Comprovante-Instalacao-AntifurtoTelemetria2"
          >
        </div>
      <?php
    }
  }



  //Telemetria 3
  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>" . 
    $QueryBuscarAntifurtoTelemetria3 = "
      SELECT * FROM tb_fotos
      WHERE id_foto = '$AntifurtoTelemetria3'
    ";
    echo "</pre>";
    $ExeQrBuscarAntifurtoTelemetria3 = mysqli_query($connection, $QueryBuscarAntifurtoTelemetria3);
    $RowQrBuscarAntifurtoTelemetria3 = mysqli_num_rows($ExeQrBuscarAntifurtoTelemetria3);
    if( $RowQrBuscarAntifurtoTelemetria3 = 1 ){
      while( $ReturnComprovanteAntifurtoTelemetria3 = mysqli_fetch_assoc($ExeQrBuscarAntifurtoTelemetria3) ){
        $PastaAntifurtoTelemetria3 = $ReturnComprovanteAntifurtoTelemetria3['pasta_foto'];
        $ArquivoAntifurtoTelemetria3 = $ReturnComprovanteAntifurtoTelemetria3['nome_foto'];
      }
      ?>
        <div class="col-12 text-center float-left foto-comprovante-telemetria">
          <p class="col-12"><b>Comprovante de telemetria - 3</b></p>
          <img 
            src="Docs/<?php echo "$PastaAntifurtoTelemetria3/$ArquivoAntifurtoTelemetria3"?>" 
            alt="<?php echo $ArquivoAntifurtoTelemetria3 ?>" 
            class="img-fluid"
            data-toggle="modal"
            data-target="#Comprovante-Instalacao-AntifurtoTelemetria3"
          >
        </div>
      <?php
    }
  }else{

    //PROD
    "<br><pre>" . 
    $QueryBuscarAntifurtoTelemetria3 = "
      SELECT * FROM tb_fotos
      WHERE id_foto = '$AntifurtoTelemetria3'
    ";
    "</pre>";
    $ExeQrBuscarAntifurtoTelemetria3 = mysqli_query($connection, $QueryBuscarAntifurtoTelemetria3);
    $RowQrBuscarAntifurtoTelemetria3 = mysqli_num_rows($ExeQrBuscarAntifurtoTelemetria3);
    if( $RowQrBuscarAntifurtoTelemetria3 = 1 ){
      while( $ReturnComprovanteAntifurtoTelemetria3 = mysqli_fetch_assoc($ExeQrBuscarAntifurtoTelemetria3) ){
        $PastaAntifurtoTelemetria3 = $ReturnComprovanteAntifurtoTelemetria3['pasta_foto'];
        $ArquivoAntifurtoTelemetria3 = $ReturnComprovanteAntifurtoTelemetria3['nome_foto'];
      }
      ?>
        <div class="col-12 text-center float-left foto-comprovante-telemetria">
          <p class="col-12"><b>Comprovante de telemetria - 3</b></p>
          <img 
            src="Docs/<?php echo "$PastaAntifurtoTelemetria3/$ArquivoAntifurtoTelemetria3"?>" 
            alt="<?php echo $ArquivoAntifurtoTelemetria3 ?>" 
            class="img-fluid"
            data-toggle="modal"
            data-target="#Comprovante-Instalacao-AntifurtoTelemetria3"
          >
        </div>
      <?php
    }
  }
?>