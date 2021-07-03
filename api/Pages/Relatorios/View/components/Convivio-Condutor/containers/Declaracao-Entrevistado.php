<?php
  //Foto1EntrevistadoConvivioCondutor
  if( $Foto1EntrevistadoConvivioCondutor != 1 ){
    if( $SysMode == 1 ){
      //DEV
      echo "<br><pre>" . 
      $QueryBuscarFoto1EntrevistadoConvivioCondutor = "
        SELECT * FROM tb_fotos
        WHERE id_foto = '$Foto1EntrevistadoConvivioCondutor'
      ";
      echo "</pre>";
      $ExeQrBuscarFoto1EntrevistadoConvivioCondutor = mysqli_query($connection, $QueryBuscarFoto1EntrevistadoConvivioCondutor);
      $RowQrBuscarFoto1EntrevistadoConvivioCondutor = mysqli_num_rows($ExeQrBuscarFoto1EntrevistadoConvivioCondutor);
      if( $RowQrBuscarFoto1EntrevistadoConvivioCondutor = 1 ){
        while( $ReturnFoto1EntrevistadoConvivioCondutor = mysqli_fetch_assoc($ExeQrBuscarFoto1EntrevistadoConvivioCondutor) ){
          $ArquivoFoto1EntrevistadoConvivioCondutor = $ReturnFoto1EntrevistadoConvivioCondutor['nome_foto'];
          $PastaFoto1EntrevistadoConvivioCondutor = $ReturnFoto1EntrevistadoConvivioCondutor['pasta_foto'];
        }
        ?>
          <div class="col-12 float-left text-center foto-declaracao">
            <p><b>Declaracao Entrevistado <?php echo $NomeEntrevistadoConvivioCondutor?> - Foto 1</b></p>
            <img 
              src="Docs/<?php echo "$PastaFoto1EntrevistadoConvivioCondutor/$ArquivoFoto1EntrevistadoConvivioCondutor"?>" 
              alt="<?php echo $ArquivoFoto1EntrevistadoConvivioCondutor ?>" 
              class="img-fluid"
              data-toggle="modal"
              data-target="#Declaracao1-Entrevistado-Convivio<?php echo $IdEntrevistadoConvivioCondutor?>"
            >
          </div>
        <?php
        //Modals/Modal1-Entrevistado-Convivio-Condutor
        include 'Modals/Modal1-Entrevistado-Convivio-Condutor.php';
      }
    }else{
      //PROD
      "<br><pre>" . 
      $QueryBuscarFoto1EntrevistadoConvivioCondutor = "
        SELECT * FROM tb_fotos
        WHERE id_foto = '$Foto1EntrevistadoConvivioCondutor'
      ";
      "</pre>";
      $ExeQrBuscarFoto1EntrevistadoConvivioCondutor = mysqli_query($connection, $QueryBuscarFoto1EntrevistadoConvivioCondutor);
      $RowQrBuscarFoto1EntrevistadoConvivioCondutor = mysqli_num_rows($ExeQrBuscarFoto1EntrevistadoConvivioCondutor);
      if( $RowQrBuscarFoto1EntrevistadoConvivioCondutor = 1 ){
        while( $ReturnFoto1EntrevistadoConvivioCondutor = mysqli_fetch_assoc($ExeQrBuscarFoto1EntrevistadoConvivioCondutor) ){
          $ArquivoFoto1EntrevistadoConvivioCondutor = $ReturnFoto1EntrevistadoConvivioCondutor['nome_foto'];
          $PastaFoto1EntrevistadoConvivioCondutor = $ReturnFoto1EntrevistadoConvivioCondutor['pasta_foto'];
        }
        ?>
          <div class="col-12 float-left text-center foto-declaracao">
            <p><b>Declaracao Entrevistado <?php echo $NomeEntrevistadoConvivioCondutor?> - Foto 1</b></p>
            <img 
              src="Docs/<?php echo "$PastaFoto1EntrevistadoConvivioCondutor/$ArquivoFoto1EntrevistadoConvivioCondutor"?>" 
              alt="<?php echo $ArquivoFoto1EntrevistadoConvivioCondutor ?>" 
              class="img-fluid"
              data-toggle="modal"
              data-target="#Declaracao1-Entrevistado-Convivio<?php echo $IdEntrevistadoConvivioCondutor?>"
            >
          </div>
        <?php
        //Modals/Modal1-Entrevistado-Convivio-Condutor
        include 'Modals/Modal1-Entrevistado-Convivio-Condutor.php';
      }
    }
  }



  //Foto2EntrevistadoConvivioCondutor
  if( $Foto2EntrevistadoConvivioCondutor != 1 ){
    if( $SysMode == 1 ){
      //DEV
      echo "<br><pre>" . 
      $QueryBuscarFoto2EntrevistadoConvivioCondutor = "
        SELECT * FROM tb_fotos
        WHERE id_foto = '$Foto2EntrevistadoConvivioCondutor'
      ";
      echo "</pre>";
      $ExeQrBuscarFoto2EntrevistadoConvivioCondutor = mysqli_query($connection, $QueryBuscarFoto2EntrevistadoConvivioCondutor);
      $RowQrBuscarFoto2EntrevistadoConvivioCondutor = mysqli_num_rows($ExeQrBuscarFoto2EntrevistadoConvivioCondutor);
      if( $RowQrBuscarFoto2EntrevistadoConvivioCondutor = 1 ){
        while( $ReturnFoto2EntrevistadoConvivioCondutor = mysqli_fetch_assoc($ExeQrBuscarFoto2EntrevistadoConvivioCondutor) ){
          $ArquivoFoto2EntrevistadoConvivioCondutor = $ReturnFoto2EntrevistadoConvivioCondutor['nome_foto'];
          $PastaFoto2EntrevistadoConvivioCondutor = $ReturnFoto2EntrevistadoConvivioCondutor['pasta_foto'];
        }
        ?>
          <div class="col-12 float-left text-center foto-declaracao">
            <p><b>Declaracao Entrevistado <?php echo $NomeEntrevistadoConvivioCondutor?> - Foto2</b></p>
            <img 
              src="Docs/<?php echo "$PastaFoto2EntrevistadoConvivioCondutor/$ArquivoFoto2EntrevistadoConvivioCondutor"?>" 
              alt="<?php echo $ArquivoFoto2EntrevistadoConvivioCondutor ?>" 
              class="img-fluid"
              data-toggle="modal"
              data-target="#Declaracao2-Entrevistado-Convivio<?php echo $IdEntrevistadoConvivioCondutor?>"
            >
          </div>
        <?php
        //Modals/Modal2-Entrevistado-Convivio-Condutor
        include 'Modals/Modal2-Entrevistado-Convivio-Condutor.php';
      }
    }else{
      //PROD
      "<br><pre>" . 
      $QueryBuscarFoto2EntrevistadoConvivioCondutor = "
        SELECT * FROM tb_fotos
        WHERE id_foto = '$Foto2EntrevistadoConvivioCondutor'
      ";
      "</pre>";
      $ExeQrBuscarFoto2EntrevistadoConvivioCondutor = mysqli_query($connection, $QueryBuscarFoto2EntrevistadoConvivioCondutor);
      $RowQrBuscarFoto2EntrevistadoConvivioCondutor = mysqli_num_rows($ExeQrBuscarFoto2EntrevistadoConvivioCondutor);
      if( $RowQrBuscarFoto2EntrevistadoConvivioCondutor = 1 ){
        while( $ReturnFoto2EntrevistadoConvivioCondutor = mysqli_fetch_assoc($ExeQrBuscarFoto2EntrevistadoConvivioCondutor) ){
          $ArquivoFoto2EntrevistadoConvivioCondutor = $ReturnFoto2EntrevistadoConvivioCondutor['nome_foto'];
          $PastaFoto2EntrevistadoConvivioCondutor = $ReturnFoto2EntrevistadoConvivioCondutor['pasta_foto'];
        }
        ?>
          <div class="col-12 float-left text-center foto-declaracao">
            <p><b>Declaracao Entrevistado <?php echo $NomeEntrevistadoConvivioCondutor?> - Foto2</b></p>
            <img 
              src="Docs/<?php echo "$PastaFoto2EntrevistadoConvivioCondutor/$ArquivoFoto2EntrevistadoConvivioCondutor"?>" 
              alt="<?php echo $ArquivoFoto2EntrevistadoConvivioCondutor ?>" 
              class="img-fluid"
              data-toggle="modal"
              data-target="#Declaracao2-Entrevistado-Convivio<?php echo $IdEntrevistadoConvivioCondutor?>"
            >
          </div>
        <?php
        //Modals/Modal2-Entrevistado-Convivio-Condutor
        include 'Modals/Modal2-Entrevistado-Convivio-Condutor.php';
      }
    }
  }



  //Foto3EntrevistadoConvivioCondutor
  if( $Foto3EntrevistadoConvivioCondutor != 1 ){
    if( $SysMode == 1 ){
      //DEV
      echo "<br><pre>" . 
      $QueryBuscarFoto3EntrevistadoConvivioCondutor = "
        SELECT * FROM tb_fotos
        WHERE id_foto = '$Foto3EntrevistadoConvivioCondutor'
      ";
      echo "</pre>";
      $ExeQrBuscarFoto3EntrevistadoConvivioCondutor = mysqli_query($connection, $QueryBuscarFoto3EntrevistadoConvivioCondutor);
      $RowQrBuscarFoto3EntrevistadoConvivioCondutor = mysqli_num_rows($ExeQrBuscarFoto3EntrevistadoConvivioCondutor);
      if( $RowQrBuscarFoto3EntrevistadoConvivioCondutor = 1 ){
        while( $ReturnFoto3EntrevistadoConvivioCondutor = mysqli_fetch_assoc($ExeQrBuscarFoto3EntrevistadoConvivioCondutor) ){
          $ArquivoFoto3EntrevistadoConvivioCondutor = $ReturnFoto3EntrevistadoConvivioCondutor['nome_foto'];
          $PastaFoto3EntrevistadoConvivioCondutor = $ReturnFoto3EntrevistadoConvivioCondutor['pasta_foto'];
        }
        ?>
          <div class="col-12 float-left text-center foto-declaracao">
            <p><b>Declaracao Entrevistado <?php echo $NomeEntrevistadoConvivioCondutor?> - Foto3</b></p>
            <img 
              src="Docs/<?php echo "$PastaFoto3EntrevistadoConvivioCondutor/$ArquivoFoto3EntrevistadoConvivioCondutor"?>" 
              alt="<?php echo $ArquivoFoto3EntrevistadoConvivioCondutor ?>" 
              class="img-fluid"
              data-toggle="modal"
              data-target="#Declaracao3-Entrevistado-Convivio<?php echo $IdEntrevistadoConvivioCondutor?>"
            >
          </div>
        <?php
        //Modals/Modal3-Entrevistado-Convivio-Condutor
        include 'Modals/Modal3-Entrevistado-Convivio-Condutor.php';
      }
    }else{
      //PROD
      "<br><pre>" . 
      $QueryBuscarFoto3EntrevistadoConvivioCondutor = "
        SELECT * FROM tb_fotos
        WHERE id_foto = '$Foto3EntrevistadoConvivioCondutor'
      ";
      "</pre>";
      $ExeQrBuscarFoto3EntrevistadoConvivioCondutor = mysqli_query($connection, $QueryBuscarFoto3EntrevistadoConvivioCondutor);
      $RowQrBuscarFoto3EntrevistadoConvivioCondutor = mysqli_num_rows($ExeQrBuscarFoto3EntrevistadoConvivioCondutor);
      if( $RowQrBuscarFoto3EntrevistadoConvivioCondutor = 1 ){
        while( $ReturnFoto3EntrevistadoConvivioCondutor = mysqli_fetch_assoc($ExeQrBuscarFoto3EntrevistadoConvivioCondutor) ){
          $ArquivoFoto3EntrevistadoConvivioCondutor = $ReturnFoto3EntrevistadoConvivioCondutor['nome_foto'];
          $PastaFoto3EntrevistadoConvivioCondutor = $ReturnFoto3EntrevistadoConvivioCondutor['pasta_foto'];
        }
        ?>
          <div class="col-12 float-left text-center foto-declaracao">
            <p><b>Declaracao Entrevistado <?php echo $NomeEntrevistadoConvivioCondutor?> - Foto3</b></p>
            <img 
              src="Docs/<?php echo "$PastaFoto3EntrevistadoConvivioCondutor/$ArquivoFoto3EntrevistadoConvivioCondutor"?>" 
              alt="<?php echo $ArquivoFoto3EntrevistadoConvivioCondutor ?>" 
              class="img-fluid"
              data-toggle="modal"
              data-target="#Declaracao3-Entrevistado-Convivio<?php echo $IdEntrevistadoConvivioCondutor?>"
            >
          </div>
        <?php
        //Modals/Modal3-Entrevistado-Convivio-Condutor
        include 'Modals/Modal3-Entrevistado-Convivio-Condutor.php';
      }
    }
  }



  //Foto4EntrevistadoConvivioCondutor
  if( $Foto4EntrevistadoConvivioCondutor != 1 ){
    if( $SysMode == 1 ){
      //DEV
      echo "<br><pre>" . 
      $QueryBuscarFoto4EntrevistadoConvivioCondutor = "
        SELECT * FROM tb_fotos
        WHERE id_foto = '$Foto4EntrevistadoConvivioCondutor'
      ";
      echo "</pre>";
      $ExeQrBuscarFoto4EntrevistadoConvivioCondutor = mysqli_query($connection, $QueryBuscarFoto4EntrevistadoConvivioCondutor);
      $RowQrBuscarFoto4EntrevistadoConvivioCondutor = mysqli_num_rows($ExeQrBuscarFoto4EntrevistadoConvivioCondutor);
      if( $RowQrBuscarFoto4EntrevistadoConvivioCondutor = 1 ){
        while( $ReturnFoto4EntrevistadoConvivioCondutor = mysqli_fetch_assoc($ExeQrBuscarFoto4EntrevistadoConvivioCondutor) ){
          $ArquivoFoto4EntrevistadoConvivioCondutor = $ReturnFoto4EntrevistadoConvivioCondutor['nome_foto'];
          $PastaFoto4EntrevistadoConvivioCondutor = $ReturnFoto4EntrevistadoConvivioCondutor['pasta_foto'];
        }
        ?>
          <div class="col-12 float-left text-center foto-declaracao">
            <p><b>Declaracao Entrevistado <?php echo $NomeEntrevistadoConvivioCondutor?> - Foto4</b></p>
            <img 
              src="Docs/<?php echo "$PastaFoto4EntrevistadoConvivioCondutor/$ArquivoFoto4EntrevistadoConvivioCondutor"?>" 
              alt="<?php echo $ArquivoFoto4EntrevistadoConvivioCondutor ?>" 
              class="img-fluid"
              data-toggle="modal"
              data-target="#Declaracao4-Entrevistado-Convivio<?php echo $IdEntrevistadoConvivioCondutor?>"
            >
          </div>
        <?php
        //Modals/Modal4-Entrevistado-Convivio-Condutor
        include 'Modals/Modal4-Entrevistado-Convivio-Condutor.php';
      }
    }else{
      //PROD
      "<br><pre>" . 
      $QueryBuscarFoto4EntrevistadoConvivioCondutor = "
        SELECT * FROM tb_fotos
        WHERE id_foto = '$Foto4EntrevistadoConvivioCondutor'
      ";
      "</pre>";
      $ExeQrBuscarFoto4EntrevistadoConvivioCondutor = mysqli_query($connection, $QueryBuscarFoto4EntrevistadoConvivioCondutor);
      $RowQrBuscarFoto4EntrevistadoConvivioCondutor = mysqli_num_rows($ExeQrBuscarFoto4EntrevistadoConvivioCondutor);
      if( $RowQrBuscarFoto4EntrevistadoConvivioCondutor = 1 ){
        while( $ReturnFoto4EntrevistadoConvivioCondutor = mysqli_fetch_assoc($ExeQrBuscarFoto4EntrevistadoConvivioCondutor) ){
          $ArquivoFoto4EntrevistadoConvivioCondutor = $ReturnFoto4EntrevistadoConvivioCondutor['nome_foto'];
          $PastaFoto4EntrevistadoConvivioCondutor = $ReturnFoto4EntrevistadoConvivioCondutor['pasta_foto'];
        }
        ?>
          <div class="col-12 float-left text-center foto-declaracao">
            <p><b>Declaracao Entrevistado <?php echo $NomeEntrevistadoConvivioCondutor?> - Foto4</b></p>
            <img 
              src="Docs/<?php echo "$PastaFoto4EntrevistadoConvivioCondutor/$ArquivoFoto4EntrevistadoConvivioCondutor"?>" 
              alt="<?php echo $ArquivoFoto4EntrevistadoConvivioCondutor ?>" 
              class="img-fluid"
              data-toggle="modal"
              data-target="#Declaracao4-Entrevistado-Convivio<?php echo $IdEntrevistadoConvivioCondutor?>"
            >
          </div>
        <?php
        //Modals/Modal4-Entrevistado-Convivio-Condutor
        include 'Modals/Modal4-Entrevistado-Convivio-Condutor.php';
      }
    }
  }


  //Foto5EntrevistadoConvivioCondutor
  if( $Foto5EntrevistadoConvivioCondutor != 1 ){
    if( $SysMode == 1 ){
      //DEV
      echo "<br><pre>" . 
      $QueryBuscarFoto5EntrevistadoConvivioCondutor = "
        SELECT * FROM tb_fotos
        WHERE id_foto = '$Foto5EntrevistadoConvivioCondutor'
      ";
      echo "</pre>";
      $ExeQrBuscarFoto5EntrevistadoConvivioCondutor = mysqli_query($connection, $QueryBuscarFoto5EntrevistadoConvivioCondutor);
      $RowQrBuscarFoto5EntrevistadoConvivioCondutor = mysqli_num_rows($ExeQrBuscarFoto5EntrevistadoConvivioCondutor);
      if( $RowQrBuscarFoto5EntrevistadoConvivioCondutor = 1 ){
        while( $ReturnFoto5EntrevistadoConvivioCondutor = mysqli_fetch_assoc($ExeQrBuscarFoto5EntrevistadoConvivioCondutor) ){
          $ArquivoFoto5EntrevistadoConvivioCondutor = $ReturnFoto5EntrevistadoConvivioCondutor['nome_foto'];
          $PastaFoto5EntrevistadoConvivioCondutor = $ReturnFoto5EntrevistadoConvivioCondutor['pasta_foto'];
        }
        ?>
          <div class="col-12 float-left text-center foto-declaracao">
            <p><b>Declaracao Entrevistado <?php echo $NomeEntrevistadoConvivioCondutor?> - Foto5</b></p>
            <img 
              src="Docs/<?php echo "$PastaFoto5EntrevistadoConvivioCondutor/$ArquivoFoto5EntrevistadoConvivioCondutor"?>" 
              alt="<?php echo $ArquivoFoto5EntrevistadoConvivioCondutor ?>" 
              class="img-fluid"
              data-toggle="modal"
              data-target="#Declaracao5-Entrevistado-Convivio<?php echo $IdEntrevistadoConvivioCondutor?>"
            >
          </div>
        <?php
        //Modals/Modal5-Entrevistado-Convivio-Condutor
        include 'Modals/Modal5-Entrevistado-Convivio-Condutor.php';
      }
    }else{
      //PROD
      "<br><pre>" . 
      $QueryBuscarFoto5EntrevistadoConvivioCondutor = "
        SELECT * FROM tb_fotos
        WHERE id_foto = '$Foto5EntrevistadoConvivioCondutor'
      ";
      "</pre>";
      $ExeQrBuscarFoto5EntrevistadoConvivioCondutor = mysqli_query($connection, $QueryBuscarFoto5EntrevistadoConvivioCondutor);
      $RowQrBuscarFoto5EntrevistadoConvivioCondutor = mysqli_num_rows($ExeQrBuscarFoto5EntrevistadoConvivioCondutor);
      if( $RowQrBuscarFoto5EntrevistadoConvivioCondutor = 1 ){
        while( $ReturnFoto5EntrevistadoConvivioCondutor = mysqli_fetch_assoc($ExeQrBuscarFoto5EntrevistadoConvivioCondutor) ){
          $ArquivoFoto5EntrevistadoConvivioCondutor = $ReturnFoto5EntrevistadoConvivioCondutor['nome_foto'];
          $PastaFoto5EntrevistadoConvivioCondutor = $ReturnFoto5EntrevistadoConvivioCondutor['pasta_foto'];
        }
        ?>
          <div class="col-12 float-left text-center foto-declaracao">
            <p><b>Declaracao Entrevistado <?php echo $NomeEntrevistadoConvivioCondutor?> - Foto5</b></p>
            <img 
              src="Docs/<?php echo "$PastaFoto5EntrevistadoConvivioCondutor/$ArquivoFoto5EntrevistadoConvivioCondutor"?>" 
              alt="<?php echo $ArquivoFoto5EntrevistadoConvivioCondutor ?>" 
              class="img-fluid"
              data-toggle="modal"
              data-target="#Declaracao5-Entrevistado-Convivio<?php echo $IdEntrevistadoConvivioCondutor?>"
            >
          </div>
        <?php
        //Modals/Modal5-Entrevistado-Convivio-Condutor
        include 'Modals/Modal5-Entrevistado-Convivio-Condutor.php';
      }
    }
  }



  //Foto6EntrevistadoConvivioCondutor
  if( $Foto6EntrevistadoConvivioCondutor != 1 ){
    if( $SysMode == 1 ){
      //DEV
      echo "<br><pre>" . 
      $QueryBuscarFoto6EntrevistadoConvivioCondutor = "
        SELECT * FROM tb_fotos
        WHERE id_foto = '$Foto6EntrevistadoConvivioCondutor'
      ";
      echo "</pre>";
      $ExeQrBuscarFoto6EntrevistadoConvivioCondutor = mysqli_query($connection, $QueryBuscarFoto6EntrevistadoConvivioCondutor);
      $RowQrBuscarFoto6EntrevistadoConvivioCondutor = mysqli_num_rows($ExeQrBuscarFoto6EntrevistadoConvivioCondutor);
      if( $RowQrBuscarFoto6EntrevistadoConvivioCondutor = 1 ){
        while( $ReturnFoto6EntrevistadoConvivioCondutor = mysqli_fetch_assoc($ExeQrBuscarFoto6EntrevistadoConvivioCondutor) ){
          $ArquivoFoto6EntrevistadoConvivioCondutor = $ReturnFoto6EntrevistadoConvivioCondutor['nome_foto'];
          $PastaFoto6EntrevistadoConvivioCondutor = $ReturnFoto6EntrevistadoConvivioCondutor['pasta_foto'];
        }
        ?>
          <div class="col-12 float-left text-center foto-declaracao">
            <p><b>Declaracao Entrevistado <?php echo $NomeEntrevistadoConvivioCondutor?> - Foto6</b></p>
            <img 
              src="Docs/<?php echo "$PastaFoto6EntrevistadoConvivioCondutor/$ArquivoFoto6EntrevistadoConvivioCondutor"?>" 
              alt="<?php echo $ArquivoFoto6EntrevistadoConvivioCondutor ?>" 
              class="img-fluid"
              data-toggle="modal"
              data-target="#Declaracao6-Entrevistado-Convivio<?php echo $IdEntrevistadoConvivioCondutor?>"
            >
          </div>
        <?php
        //Modals/Modal6-Entrevistado-Convivio-Condutor
        include 'Modals/Modal6-Entrevistado-Convivio-Condutor.php';
      }
    }else{
      //PROD
      "<br><pre>" . 
      $QueryBuscarFoto6EntrevistadoConvivioCondutor = "
        SELECT * FROM tb_fotos
        WHERE id_foto = '$Foto6EntrevistadoConvivioCondutor'
      ";
      "</pre>";
      $ExeQrBuscarFoto6EntrevistadoConvivioCondutor = mysqli_query($connection, $QueryBuscarFoto6EntrevistadoConvivioCondutor);
      $RowQrBuscarFoto6EntrevistadoConvivioCondutor = mysqli_num_rows($ExeQrBuscarFoto6EntrevistadoConvivioCondutor);
      if( $RowQrBuscarFoto6EntrevistadoConvivioCondutor = 1 ){
        while( $ReturnFoto6EntrevistadoConvivioCondutor = mysqli_fetch_assoc($ExeQrBuscarFoto6EntrevistadoConvivioCondutor) ){
          $ArquivoFoto6EntrevistadoConvivioCondutor = $ReturnFoto6EntrevistadoConvivioCondutor['nome_foto'];
          $PastaFoto6EntrevistadoConvivioCondutor = $ReturnFoto6EntrevistadoConvivioCondutor['pasta_foto'];
        }
        ?>
          <div class="col-12 float-left text-center foto-declaracao">
            <p><b>Declaracao Entrevistado <?php echo $NomeEntrevistadoConvivioCondutor?> - Foto6</b></p>
            <img 
              src="Docs/<?php echo "$PastaFoto6EntrevistadoConvivioCondutor/$ArquivoFoto6EntrevistadoConvivioCondutor"?>" 
              alt="<?php echo $ArquivoFoto6EntrevistadoConvivioCondutor ?>" 
              class="img-fluid"
              data-toggle="modal"
              data-target="#Declaracao6-Entrevistado-Convivio<?php echo $IdEntrevistadoConvivioCondutor?>"
            >
          </div>
        <?php
        //Modals/Modal6-Entrevistado-Convivio-Condutor
        include 'Modals/Modal6-Entrevistado-Convivio-Condutor.php';
      }
    }
  }