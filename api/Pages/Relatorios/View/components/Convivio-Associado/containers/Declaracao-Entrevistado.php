<?php
  //Foto1EntrevistadoConvivio
  if( $Foto1EntrevistadoConvivio != 1 ){
    if( $SysMode == 1 ){
      //DEV
      echo "<br><pre>" . 
      $QueryBuscarFoto1EntrevistadoConvivio = "
        SELECT * FROM tb_fotos
        WHERE id_foto = '$Foto1EntrevistadoConvivio'
      ";
      echo "</pre>";
      $ExeQrBuscarFoto1EntrevistadoConvivio = mysqli_query($connection, $QueryBuscarFoto1EntrevistadoConvivio);
      $RowQrBuscarFoto1EntrevistadoConvivio = mysqli_num_rows($ExeQrBuscarFoto1EntrevistadoConvivio);
      if( $RowQrBuscarFoto1EntrevistadoConvivio = 1 ){
        while( $ReturnFoto1EntrevistadoConvivio = mysqli_fetch_assoc($ExeQrBuscarFoto1EntrevistadoConvivio) ){
          $ArquivoFoto1EntrevistadoConvivio = $ReturnFoto1EntrevistadoConvivio['nome_foto'];
          $PastaFoto1EntrevistadoConvivio = $ReturnFoto1EntrevistadoConvivio['pasta_foto'];
        }
        ?>
          <div class="col-12 float-left text-center foto-declaracao">
            <p><b>Declaracao Entrevistado <?php echo $NomeEntrevistadoConvivio?> - Foto 1</b></p>
            <img 
              src="Docs/<?php echo "$PastaFoto1EntrevistadoConvivio/$ArquivoFoto1EntrevistadoConvivio"?>" 
              alt="<?php echo $ArquivoFoto1EntrevistadoConvivio ?>" 
              class="img-fluid"
              data-toggle="modal"
              data-target="#Declaracao1-Entrevistado<?php echo $IdEntrevistadoConvivio?>"
            >
          </div>
        <?php
        //Modals/Modal1-Entrevistado-Convivio
        include 'Modals/Modal1-Entrevistado-Convivio.php';
      }
    }else{
      //PROD
      "<br><pre>" . 
      $QueryBuscarFoto1EntrevistadoConvivio = "
        SELECT * FROM tb_fotos
        WHERE id_foto = '$Foto1EntrevistadoConvivio'
      ";
      "</pre>";
      $ExeQrBuscarFoto1EntrevistadoConvivio = mysqli_query($connection, $QueryBuscarFoto1EntrevistadoConvivio);
      $RowQrBuscarFoto1EntrevistadoConvivio = mysqli_num_rows($ExeQrBuscarFoto1EntrevistadoConvivio);
      if( $RowQrBuscarFoto1EntrevistadoConvivio = 1 ){
        while( $ReturnFoto1EntrevistadoConvivio = mysqli_fetch_assoc($ExeQrBuscarFoto1EntrevistadoConvivio) ){
          $ArquivoFoto1EntrevistadoConvivio = $ReturnFoto1EntrevistadoConvivio['nome_foto'];
          $PastaFoto1EntrevistadoConvivio = $ReturnFoto1EntrevistadoConvivio['pasta_foto'];
        }
        ?>
          <div class="col-12 float-left text-center foto-declaracao">
            <p><b>Declaracao Entrevistado <?php echo $NomeEntrevistadoConvivio?> - Foto 1</b></p>
            <img 
              src="Docs/<?php echo "$PastaFoto1EntrevistadoConvivio/$ArquivoFoto1EntrevistadoConvivio"?>" 
              alt="<?php echo $ArquivoFoto1EntrevistadoConvivio ?>" 
              class="img-fluid"
              data-toggle="modal"
              data-target="#Declaracao1-Entrevistado<?php echo $IdEntrevistadoConvivio?>"
            >
          </div>
        <?php
        //Modals/Modal1-Entrevistado-Convivio
        include 'Modals/Modal1-Entrevistado-Convivio.php';
      }
    }
  }



  //Foto2EntrevistadoConvivio
  if( $Foto2EntrevistadoConvivio != 1 ){
    if( $SysMode == 1 ){
      //DEV
      echo "<br><pre>" . 
      $QueryBuscarFoto2EntrevistadoConvivio = "
        SELECT * FROM tb_fotos
        WHERE id_foto = '$Foto2EntrevistadoConvivio'
      ";
      echo "</pre>";
      $ExeQrBuscarFoto2EntrevistadoConvivio = mysqli_query($connection, $QueryBuscarFoto2EntrevistadoConvivio);
      $RowQrBuscarFoto2EntrevistadoConvivio = mysqli_num_rows($ExeQrBuscarFoto2EntrevistadoConvivio);
      if( $RowQrBuscarFoto2EntrevistadoConvivio = 1 ){
        while( $ReturnFoto2EntrevistadoConvivio = mysqli_fetch_assoc($ExeQrBuscarFoto2EntrevistadoConvivio) ){
          $ArquivoFoto2EntrevistadoConvivio = $ReturnFoto2EntrevistadoConvivio['nome_foto'];
          $PastaFoto2EntrevistadoConvivio = $ReturnFoto2EntrevistadoConvivio['pasta_foto'];
        }
        ?>
          <div class="col-12 float-left text-center foto-declaracao">
            <p><b>Declaracao Entrevistado <?php echo $NomeEntrevistadoConvivio?> - Foto2</b></p>
            <img 
              src="Docs/<?php echo "$PastaFoto2EntrevistadoConvivio/$ArquivoFoto2EntrevistadoConvivio"?>" 
              alt="<?php echo $ArquivoFoto2EntrevistadoConvivio ?>" 
              class="img-fluid"
              data-toggle="modal"
              data-target="#Declaracao2-Entrevistado<?php echo $IdEntrevistadoConvivio?>"
            >
          </div>
        <?php
        //Modals/Modal2-Entrevistado-Convivio
        include 'Modals/Modal2-Entrevistado-Convivio.php';
      }
    }else{
      //PROD
      "<br><pre>" . 
      $QueryBuscarFoto2EntrevistadoConvivio = "
        SELECT * FROM tb_fotos
        WHERE id_foto = '$Foto2EntrevistadoConvivio'
      ";
      "</pre>";
      $ExeQrBuscarFoto2EntrevistadoConvivio = mysqli_query($connection, $QueryBuscarFoto2EntrevistadoConvivio);
      $RowQrBuscarFoto2EntrevistadoConvivio = mysqli_num_rows($ExeQrBuscarFoto2EntrevistadoConvivio);
      if( $RowQrBuscarFoto2EntrevistadoConvivio = 1 ){
        while( $ReturnFoto2EntrevistadoConvivio = mysqli_fetch_assoc($ExeQrBuscarFoto2EntrevistadoConvivio) ){
          $ArquivoFoto2EntrevistadoConvivio = $ReturnFoto2EntrevistadoConvivio['nome_foto'];
          $PastaFoto2EntrevistadoConvivio = $ReturnFoto2EntrevistadoConvivio['pasta_foto'];
        }
        ?>
          <div class="col-12 float-left text-center foto-declaracao">
            <p><b>Declaracao Entrevistado <?php echo $NomeEntrevistadoConvivio?> - Foto2</b></p>
            <img 
              src="Docs/<?php echo "$PastaFoto2EntrevistadoConvivio/$ArquivoFoto2EntrevistadoConvivio"?>" 
              alt="<?php echo $ArquivoFoto2EntrevistadoConvivio ?>" 
              class="img-fluid"
              data-toggle="modal"
              data-target="#Declaracao2-Entrevistado<?php echo $IdEntrevistadoConvivio?>"
            >
          </div>
        <?php
        //Modals/Modal2-Entrevistado-Convivio
        include 'Modals/Modal2-Entrevistado-Convivio.php';
      }
    }
  }



  //Foto3EntrevistadoConvivio
  if( $Foto3EntrevistadoConvivio != 1 ){
    if( $SysMode == 1 ){
      //DEV
      echo "<br><pre>" . 
      $QueryBuscarFoto3EntrevistadoConvivio = "
        SELECT * FROM tb_fotos
        WHERE id_foto = '$Foto3EntrevistadoConvivio'
      ";
      echo "</pre>";
      $ExeQrBuscarFoto3EntrevistadoConvivio = mysqli_query($connection, $QueryBuscarFoto3EntrevistadoConvivio);
      $RowQrBuscarFoto3EntrevistadoConvivio = mysqli_num_rows($ExeQrBuscarFoto3EntrevistadoConvivio);
      if( $RowQrBuscarFoto3EntrevistadoConvivio = 1 ){
        while( $ReturnFoto3EntrevistadoConvivio = mysqli_fetch_assoc($ExeQrBuscarFoto3EntrevistadoConvivio) ){
          $ArquivoFoto3EntrevistadoConvivio = $ReturnFoto3EntrevistadoConvivio['nome_foto'];
          $PastaFoto3EntrevistadoConvivio = $ReturnFoto3EntrevistadoConvivio['pasta_foto'];
        }
        ?>
          <div class="col-12 float-left text-center foto-declaracao">
            <p><b>Declaracao Entrevistado <?php echo $NomeEntrevistadoConvivio?> - Foto3</b></p>
            <img 
              src="Docs/<?php echo "$PastaFoto3EntrevistadoConvivio/$ArquivoFoto3EntrevistadoConvivio"?>" 
              alt="<?php echo $ArquivoFoto3EntrevistadoConvivio ?>" 
              class="img-fluid"
              data-toggle="modal"
              data-target="#Declaracao3-Entrevistado<?php echo $IdEntrevistadoConvivio?>"
            >
          </div>
        <?php
        //Modals/Modal3-Entrevistado-Convivio
        include 'Modals/Modal3-Entrevistado-Convivio.php';
      }
    }else{
      //PROD
      "<br><pre>" . 
      $QueryBuscarFoto3EntrevistadoConvivio = "
        SELECT * FROM tb_fotos
        WHERE id_foto = '$Foto3EntrevistadoConvivio'
      ";
      "</pre>";
      $ExeQrBuscarFoto3EntrevistadoConvivio = mysqli_query($connection, $QueryBuscarFoto3EntrevistadoConvivio);
      $RowQrBuscarFoto3EntrevistadoConvivio = mysqli_num_rows($ExeQrBuscarFoto3EntrevistadoConvivio);
      if( $RowQrBuscarFoto3EntrevistadoConvivio = 1 ){
        while( $ReturnFoto3EntrevistadoConvivio = mysqli_fetch_assoc($ExeQrBuscarFoto3EntrevistadoConvivio) ){
          $ArquivoFoto3EntrevistadoConvivio = $ReturnFoto3EntrevistadoConvivio['nome_foto'];
          $PastaFoto3EntrevistadoConvivio = $ReturnFoto3EntrevistadoConvivio['pasta_foto'];
        }
        ?>
          <div class="col-12 float-left text-center foto-declaracao">
            <p><b>Declaracao Entrevistado <?php echo $NomeEntrevistadoConvivio?> - Foto3</b></p>
            <img 
              src="Docs/<?php echo "$PastaFoto3EntrevistadoConvivio/$ArquivoFoto3EntrevistadoConvivio"?>" 
              alt="<?php echo $ArquivoFoto3EntrevistadoConvivio ?>" 
              class="img-fluid"
              data-toggle="modal"
              data-target="#Declaracao3-Entrevistado<?php echo $IdEntrevistadoConvivio?>"
            >
          </div>
        <?php
        //Modals/Modal3-Entrevistado-Convivio
        include 'Modals/Modal3-Entrevistado-Convivio.php';
      }
    }
  }



  //Foto4EntrevistadoConvivio
  if( $Foto4EntrevistadoConvivio != 1 ){
    if( $SysMode == 1 ){
      //DEV
      echo "<br><pre>" . 
      $QueryBuscarFoto4EntrevistadoConvivio = "
        SELECT * FROM tb_fotos
        WHERE id_foto = '$Foto4EntrevistadoConvivio'
      ";
      echo "</pre>";
      $ExeQrBuscarFoto4EntrevistadoConvivio = mysqli_query($connection, $QueryBuscarFoto4EntrevistadoConvivio);
      $RowQrBuscarFoto4EntrevistadoConvivio = mysqli_num_rows($ExeQrBuscarFoto4EntrevistadoConvivio);
      if( $RowQrBuscarFoto4EntrevistadoConvivio = 1 ){
        while( $ReturnFoto4EntrevistadoConvivio = mysqli_fetch_assoc($ExeQrBuscarFoto4EntrevistadoConvivio) ){
          $ArquivoFoto4EntrevistadoConvivio = $ReturnFoto4EntrevistadoConvivio['nome_foto'];
          $PastaFoto4EntrevistadoConvivio = $ReturnFoto4EntrevistadoConvivio['pasta_foto'];
        }
        ?>
          <div class="col-12 float-left text-center foto-declaracao">
            <p><b>Declaracao Entrevistado <?php echo $NomeEntrevistadoConvivio?> - Foto4</b></p>
            <img 
              src="Docs/<?php echo "$PastaFoto4EntrevistadoConvivio/$ArquivoFoto4EntrevistadoConvivio"?>" 
              alt="<?php echo $ArquivoFoto4EntrevistadoConvivio ?>" 
              class="img-fluid"
              data-toggle="modal"
              data-target="#Declaracao4-Entrevistado<?php echo $IdEntrevistadoConvivio?>"
            >
          </div>
        <?php
        //Modals/Modal4-Entrevistado-Convivio
        include 'Modals/Modal4-Entrevistado-Convivio.php';
      }
    }else{
      //PROD
      "<br><pre>" . 
      $QueryBuscarFoto4EntrevistadoConvivio = "
        SELECT * FROM tb_fotos
        WHERE id_foto = '$Foto4EntrevistadoConvivio'
      ";
      "</pre>";
      $ExeQrBuscarFoto4EntrevistadoConvivio = mysqli_query($connection, $QueryBuscarFoto4EntrevistadoConvivio);
      $RowQrBuscarFoto4EntrevistadoConvivio = mysqli_num_rows($ExeQrBuscarFoto4EntrevistadoConvivio);
      if( $RowQrBuscarFoto4EntrevistadoConvivio = 1 ){
        while( $ReturnFoto4EntrevistadoConvivio = mysqli_fetch_assoc($ExeQrBuscarFoto4EntrevistadoConvivio) ){
          $ArquivoFoto4EntrevistadoConvivio = $ReturnFoto4EntrevistadoConvivio['nome_foto'];
          $PastaFoto4EntrevistadoConvivio = $ReturnFoto4EntrevistadoConvivio['pasta_foto'];
        }
        ?>
          <div class="col-12 float-left text-center foto-declaracao">
            <p><b>Declaracao Entrevistado <?php echo $NomeEntrevistadoConvivio?> - Foto4</b></p>
            <img 
              src="Docs/<?php echo "$PastaFoto4EntrevistadoConvivio/$ArquivoFoto4EntrevistadoConvivio"?>" 
              alt="<?php echo $ArquivoFoto4EntrevistadoConvivio ?>" 
              class="img-fluid"
              data-toggle="modal"
              data-target="#Declaracao4-Entrevistado<?php echo $IdEntrevistadoConvivio?>"
            >
          </div>
        <?php
        //Modals/Modal4-Entrevistado-Convivio
        include 'Modals/Modal4-Entrevistado-Convivio.php';
      }
    }
  }


  //Foto5EntrevistadoConvivio
  if( $Foto5EntrevistadoConvivio != 1 ){
    if( $SysMode == 1 ){
      //DEV
      echo "<br><pre>" . 
      $QueryBuscarFoto5EntrevistadoConvivio = "
        SELECT * FROM tb_fotos
        WHERE id_foto = '$Foto5EntrevistadoConvivio'
      ";
      echo "</pre>";
      $ExeQrBuscarFoto5EntrevistadoConvivio = mysqli_query($connection, $QueryBuscarFoto5EntrevistadoConvivio);
      $RowQrBuscarFoto5EntrevistadoConvivio = mysqli_num_rows($ExeQrBuscarFoto5EntrevistadoConvivio);
      if( $RowQrBuscarFoto5EntrevistadoConvivio = 1 ){
        while( $ReturnFoto5EntrevistadoConvivio = mysqli_fetch_assoc($ExeQrBuscarFoto5EntrevistadoConvivio) ){
          $ArquivoFoto5EntrevistadoConvivio = $ReturnFoto5EntrevistadoConvivio['nome_foto'];
          $PastaFoto5EntrevistadoConvivio = $ReturnFoto5EntrevistadoConvivio['pasta_foto'];
        }
        ?>
          <div class="col-12 float-left text-center foto-declaracao">
            <p><b>Declaracao Entrevistado <?php echo $NomeEntrevistadoConvivio?> - Foto5</b></p>
            <img 
              src="Docs/<?php echo "$PastaFoto5EntrevistadoConvivio/$ArquivoFoto5EntrevistadoConvivio"?>" 
              alt="<?php echo $ArquivoFoto5EntrevistadoConvivio ?>" 
              class="img-fluid"
              data-toggle="modal"
              data-target="#Declaracao5-Entrevistado<?php echo $IdEntrevistadoConvivio?>"
            >
          </div>
        <?php
        //Modals/Modal5-Entrevistado-Convivio
        include 'Modals/Modal5-Entrevistado-Convivio.php';
      }
    }else{
      //PROD
      "<br><pre>" . 
      $QueryBuscarFoto5EntrevistadoConvivio = "
        SELECT * FROM tb_fotos
        WHERE id_foto = '$Foto5EntrevistadoConvivio'
      ";
      "</pre>";
      $ExeQrBuscarFoto5EntrevistadoConvivio = mysqli_query($connection, $QueryBuscarFoto5EntrevistadoConvivio);
      $RowQrBuscarFoto5EntrevistadoConvivio = mysqli_num_rows($ExeQrBuscarFoto5EntrevistadoConvivio);
      if( $RowQrBuscarFoto5EntrevistadoConvivio = 1 ){
        while( $ReturnFoto5EntrevistadoConvivio = mysqli_fetch_assoc($ExeQrBuscarFoto5EntrevistadoConvivio) ){
          $ArquivoFoto5EntrevistadoConvivio = $ReturnFoto5EntrevistadoConvivio['nome_foto'];
          $PastaFoto5EntrevistadoConvivio = $ReturnFoto5EntrevistadoConvivio['pasta_foto'];
        }
        ?>
          <div class="col-12 float-left text-center foto-declaracao">
            <p><b>Declaracao Entrevistado <?php echo $NomeEntrevistadoConvivio?> - Foto5</b></p>
            <img 
              src="Docs/<?php echo "$PastaFoto5EntrevistadoConvivio/$ArquivoFoto5EntrevistadoConvivio"?>" 
              alt="<?php echo $ArquivoFoto5EntrevistadoConvivio ?>" 
              class="img-fluid"
              data-toggle="modal"
              data-target="#Declaracao5-Entrevistado<?php echo $IdEntrevistadoConvivio?>"
            >
          </div>
        <?php
        //Modals/Modal5-Entrevistado-Convivio
        include 'Modals/Modal5-Entrevistado-Convivio.php';
      }
    }
  }



  //Foto6EntrevistadoConvivio
  if( $Foto6EntrevistadoConvivio != 1 ){
    if( $SysMode == 1 ){
      //DEV
      echo "<br><pre>" . 
      $QueryBuscarFoto6EntrevistadoConvivio = "
        SELECT * FROM tb_fotos
        WHERE id_foto = '$Foto6EntrevistadoConvivio'
      ";
      echo "</pre>";
      $ExeQrBuscarFoto6EntrevistadoConvivio = mysqli_query($connection, $QueryBuscarFoto6EntrevistadoConvivio);
      $RowQrBuscarFoto6EntrevistadoConvivio = mysqli_num_rows($ExeQrBuscarFoto6EntrevistadoConvivio);
      if( $RowQrBuscarFoto6EntrevistadoConvivio = 1 ){
        while( $ReturnFoto6EntrevistadoConvivio = mysqli_fetch_assoc($ExeQrBuscarFoto6EntrevistadoConvivio) ){
          $ArquivoFoto6EntrevistadoConvivio = $ReturnFoto6EntrevistadoConvivio['nome_foto'];
          $PastaFoto6EntrevistadoConvivio = $ReturnFoto6EntrevistadoConvivio['pasta_foto'];
        }
        ?>
          <div class="col-12 float-left text-center foto-declaracao">
            <p><b>Declaracao Entrevistado <?php echo $NomeEntrevistadoConvivio?> - Foto6</b></p>
            <img 
              src="Docs/<?php echo "$PastaFoto6EntrevistadoConvivio/$ArquivoFoto6EntrevistadoConvivio"?>" 
              alt="<?php echo $ArquivoFoto6EntrevistadoConvivio ?>" 
              class="img-fluid"
              data-toggle="modal"
              data-target="#Declaracao6-Entrevistado<?php echo $IdEntrevistadoConvivio?>"
            >
          </div>
        <?php
        //Modals/Modal6-Entrevistado-Convivio
        include 'Modals/Modal6-Entrevistado-Convivio.php';
      }
    }else{
      //PROD
      "<br><pre>" . 
      $QueryBuscarFoto6EntrevistadoConvivio = "
        SELECT * FROM tb_fotos
        WHERE id_foto = '$Foto6EntrevistadoConvivio'
      ";
      "</pre>";
      $ExeQrBuscarFoto6EntrevistadoConvivio = mysqli_query($connection, $QueryBuscarFoto6EntrevistadoConvivio);
      $RowQrBuscarFoto6EntrevistadoConvivio = mysqli_num_rows($ExeQrBuscarFoto6EntrevistadoConvivio);
      if( $RowQrBuscarFoto6EntrevistadoConvivio = 1 ){
        while( $ReturnFoto6EntrevistadoConvivio = mysqli_fetch_assoc($ExeQrBuscarFoto6EntrevistadoConvivio) ){
          $ArquivoFoto6EntrevistadoConvivio = $ReturnFoto6EntrevistadoConvivio['nome_foto'];
          $PastaFoto6EntrevistadoConvivio = $ReturnFoto6EntrevistadoConvivio['pasta_foto'];
        }
        ?>
          <div class="col-12 float-left text-center foto-declaracao">
            <p><b>Declaracao Entrevistado <?php echo $NomeEntrevistadoConvivio?> - Foto6</b></p>
            <img 
              src="Docs/<?php echo "$PastaFoto6EntrevistadoConvivio/$ArquivoFoto6EntrevistadoConvivio"?>" 
              alt="<?php echo $ArquivoFoto6EntrevistadoConvivio ?>" 
              class="img-fluid"
              data-toggle="modal"
              data-target="#Declaracao6-Entrevistado<?php echo $IdEntrevistadoConvivio?>"
            >
          </div>
        <?php
        //Modals/Modal6-Entrevistado-Convivio
        include 'Modals/Modal6-Entrevistado-Convivio.php';
      }
    }
  }