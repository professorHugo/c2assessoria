<h3 class="rotulos">Local do Evento: Fotos registradas do local</h3>
<div class="row" id="Fotos-Local-Evento" style="padding-left: 25px; margin-bottom: 50px">
  <?php
    if( $Foto1LocalEvento != '' ){
      //Foto1LocalEvento
      if( $SysMode == 1 ){
        //DEV
        echo "<br><pre>" . 
        $QueryBuscarFoto1LocalEvento = "
          SELECT * FROM
            tb_fotos
          WHERE id_foto = '$Foto1LocalEvento'
        ";
        echo "</pre>";
        $ExeQrBuscarFoto1LocalEvento = mysqli_query($connection, $QueryBuscarFoto1LocalEvento);
        $RowQrBuscarFoto1LocalEvento = mysqli_fetch_assoc($ExeQrBuscarFoto1LocalEvento);
        if( $RowQrBuscarFoto1LocalEvento = 1 ){
          while( $ReturnFoto1LocalEvento = mysqli_fetch_assoc($ExeQrBuscarFoto1LocalEvento) ){
            echo "<br>Pasta: " . $PastaFoto1LocalEvento = $ReturnFoto1LocalEvento['pasta_foto'];
            echo "<br>Arquivo:" . $ArquivoFoto1LocalEvento = $ReturnFoto1LocalEvento['nome_foto'];
          }
          ?>
            <div class="col-12 text-center float-left foto-local-evento" style="margin-bottom: 3rem">
              <p><b>Foto do local: Foto 1</b></p>
              <img 
                src="Docs/<?php echo "$PastaFoto1LocalEvento/$ArquivoFoto1LocalEvento"?>" 
                alt="<?php echo $ArquivoFoto1LocalEvento ?>" 
                class="img-fluid"
                data-toggle="modal"
                data-target="#Local-Evento-Foto1"
              >
            </div>
          <?php
          
        }
      }else{
        //PROD
        "<br><pre>" . 
        $QueryBuscarFoto1LocalEvento = "
          SELECT * FROM
            tb_fotos
          WHERE id_foto = '$Foto1LocalEvento'
        ";
        "</pre>";
        $ExeQrBuscarFoto1LocalEvento = mysqli_query($connection, $QueryBuscarFoto1LocalEvento);
        $RowQrBuscarFoto1LocalEvento = mysqli_num_rows($ExeQrBuscarFoto1LocalEvento);
        if( $RowQrBuscarFoto1LocalEvento = 1 ){
          while( $ReturnFoto1LocalEvento = mysqli_fetch_assoc($ExeQrBuscarFoto1LocalEvento) ){
            "<br>Pasta: " . $PastaFoto1LocalEvento = $ReturnFoto1LocalEvento['pasta_foto'];
            "<br>Arquivo:" . $ArquivoFoto1LocalEvento = $ReturnFoto1LocalEvento['nome_foto'];
          }
          ?>
            <div class="col-12 text-center float-left foto-local-evento" style="margin-bottom: 3rem">
              <p><b>Foto do local: Foto 1</b></p>
              <img 
                src="Docs/<?php echo "$PastaFoto1LocalEvento/$ArquivoFoto1LocalEvento"?>" 
                alt="<?php echo $ArquivoFoto1LocalEvento ?>" 
                class="img-fluid"
                data-toggle="modal"
                data-target="#Local-Evento-Foto1"
              >
            </div>
          <?php
          
        }
      }
    }



    if( $Foto2LocalEvento != '' ){
      //Foto2LocalEvento
      if( $SysMode == 1 ){
        //DEV
        echo "<br><pre>" . 
        $QueryBuscarFoto2LocalEvento = "
          SELECT * FROM
            tb_fotos
          WHERE id_foto = '$Foto2LocalEvento'
        ";
        echo "</pre>";
        $ExeQrBuscarFoto2LocalEvento = mysqli_query($connection, $QueryBuscarFoto2LocalEvento);
        $RowQrBuscarFoto2LocalEvento = mysqli_fetch_assoc($ExeQrBuscarFoto2LocalEvento);
        if( $RowQrBuscarFoto2LocalEvento = 1 ){
          while( $ReturnFoto2LocalEvento = mysqli_fetch_assoc($ExeQrBuscarFoto2LocalEvento) ){
            echo "<br>Pasta: " . $PastaFoto2LocalEvento = $ReturnFoto2LocalEvento['pasta_foto'];
            echo "<br>Arquivo:" . $ArquivoFoto2LocalEvento = $ReturnFoto2LocalEvento['nome_foto'];
          }
          ?>
            <div class="col-12 text-center float-left foto-local-evento" style="margin-bottom: 3rem">
              <p><b>Foto do local: Foto 2</b></p>
              <img 
                src="Docs/<?php echo "$PastaFoto2LocalEvento/$ArquivoFoto2LocalEvento"?>" 
                alt="<?php echo $ArquivoFoto2LocalEvento ?>" 
                class="img-fluid"
                data-toggle="modal"
                data-target="#Local-Evento-Foto2"
              >
            </div>
          <?php
          
        }
      }else{
        //PROD
        "<br><pre>" . 
        $QueryBuscarFoto2LocalEvento = "
          SELECT * FROM
            tb_fotos
          WHERE id_foto = '$Foto2LocalEvento'
        ";
        "</pre>";
        $ExeQrBuscarFoto2LocalEvento = mysqli_query($connection, $QueryBuscarFoto2LocalEvento);
        $RowQrBuscarFoto2LocalEvento = mysqli_num_rows($ExeQrBuscarFoto2LocalEvento);
        if( $RowQrBuscarFoto2LocalEvento = 1 ){
          while( $ReturnFoto2LocalEvento = mysqli_fetch_assoc($ExeQrBuscarFoto2LocalEvento) ){
            "<br>Pasta: " . $PastaFoto2LocalEvento = $ReturnFoto2LocalEvento['pasta_foto'];
            "<br>Arquivo:" . $ArquivoFoto2LocalEvento = $ReturnFoto2LocalEvento['nome_foto'];
          }
          ?>
            <div class="col-12 text-center float-left foto-local-evento" style="margin-bottom: 3rem">
              <p><b>Foto do local: Foto 2</b></p>
              <img 
                src="Docs/<?php echo "$PastaFoto2LocalEvento/$ArquivoFoto2LocalEvento"?>" 
                alt="<?php echo $ArquivoFoto2LocalEvento ?>" 
                class="img-fluid"
                data-toggle="modal"
                data-target="#Local-Evento-Foto2"
              >
            </div>
          <?php
          
        }
      }
    }


    if( $Foto3LocalEvento != '' ){
      //Foto3LocalEvento
      if( $SysMode == 1 ){
        //DEV
        echo "<br><pre>" . 
        $QueryBuscarFoto3LocalEvento = "
          SELECT * FROM
            tb_fotos
          WHERE id_foto = '$Foto3LocalEvento'
        ";
        echo "</pre>";
        $ExeQrBuscarFoto3LocalEvento = mysqli_query($connection, $QueryBuscarFoto3LocalEvento);
        $RowQrBuscarFoto3LocalEvento = mysqli_fetch_assoc($ExeQrBuscarFoto3LocalEvento);
        if( $RowQrBuscarFoto3LocalEvento = 1 ){
          while( $ReturnFoto3LocalEvento = mysqli_fetch_assoc($ExeQrBuscarFoto3LocalEvento) ){
            echo "<br>Pasta: " . $PastaFoto3LocalEvento = $ReturnFoto3LocalEvento['pasta_foto'];
            echo "<br>Arquivo:" . $ArquivoFoto3LocalEvento = $ReturnFoto3LocalEvento['nome_foto'];
          }
          ?>
            <div class="col-12 text-center float-left foto-local-evento" style="margin-bottom: 3rem">
              <p><b>Foto do local: Foto 3</b></p>
              <img 
                src="Docs/<?php echo "$PastaFoto3LocalEvento/$ArquivoFoto3LocalEvento"?>" 
                alt="<?php echo $ArquivoFoto3LocalEvento ?>" 
                class="img-fluid"
                data-toggle="modal"
                data-target="#Local-Evento-Foto3"
              >
            </div>
          <?php
          
        }
      }else{
        //PROD
        "<br><pre>" . 
        $QueryBuscarFoto3LocalEvento = "
          SELECT * FROM
            tb_fotos
          WHERE id_foto = '$Foto3LocalEvento'
        ";
        "</pre>";
        $ExeQrBuscarFoto3LocalEvento = mysqli_query($connection, $QueryBuscarFoto3LocalEvento);
        $RowQrBuscarFoto3LocalEvento = mysqli_num_rows($ExeQrBuscarFoto3LocalEvento);
        if( $RowQrBuscarFoto3LocalEvento = 1 ){
          while( $ReturnFoto3LocalEvento = mysqli_fetch_assoc($ExeQrBuscarFoto3LocalEvento) ){
            "<br>Pasta: " . $PastaFoto3LocalEvento = $ReturnFoto3LocalEvento['pasta_foto'];
            "<br>Arquivo:" . $ArquivoFoto3LocalEvento = $ReturnFoto3LocalEvento['nome_foto'];
          }
          ?>
            <div class="col-12 text-center float-left foto-local-evento" style="margin-bottom: 3rem">
              <p><b>Foto do local: Foto 3</b></p>
              <img 
                src="Docs/<?php echo "$PastaFoto3LocalEvento/$ArquivoFoto3LocalEvento"?>" 
                alt="<?php echo $ArquivoFoto3LocalEvento ?>" 
                class="img-fluid"
                data-toggle="modal"
                data-target="#Local-Evento-Foto3"
              >
            </div>
          <?php
          
        }
      }
    }


    if( $Foto1LocalEvento != '' ){
      //Modal Local-Evento-Foto1
      include 'Modals/Local-Evento-Foto1.php';
    }

    if( $Foto2LocalEvento != '' ){
      //Modal Local-Evento-Foto2
      include 'Modals/Local-Evento-Foto2.php';
    }

    if( $Foto3LocalEvento != '' ){
      //Modal Local-Evento-Foto3
      include 'Modals/Local-Evento-Foto3.php';
    }
  ?>
</div>