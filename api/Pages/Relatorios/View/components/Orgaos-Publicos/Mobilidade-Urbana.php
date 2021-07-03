<?php
  //Query-Mobilidade-Urbana
  include 'Querys/Mobilidade-Urbana.php';
?>

<h4 class="rotulos">Procedimentos Legais: Uso de aplicativo de mobilidade urbana</h4>
<div class="col-12 space-1" id="Resultado-Mobilidade-Urbana">
  <div class="col-4 float-left">
    <b>Confirmação de Data: </b><br>
    <?php echo $DataRegistroMobilidade ?>
  </div>
  <div class="col-4 float-left">
    <b>Confirmação de Hora: </b><br>
    <?php echo $HoraRegistroMobilidade ?>
  </div>
  <div class="col-4 float-left">
    <b>Confirmação de Trajeto: </b><br>
    <?php echo $TrajetoRegistroMobilidade ?>
  </div>
</div>

<div class="row space-2" id="Fotos-Mobilidade-Urbana">
<?php
    if( $FotoRegistroMobilidade1 != 0 ){
      //FotoRegistroMobilidade1
      if( $SysMode == 1 ){
        //DEV
        echo "<br><pre>" . 
        $QueryBuscarFotoRegistroMobilidade1 = "
          SELECT * FROM tb_fotos
          WHERE id_foto = '$FotoRegistroMobilidade1'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoRegistroMobilidade1 = mysqli_query($connection, $QueryBuscarFotoRegistroMobilidade1);
        $RowQrBuscarFotoRegistroMobilidade1 = mysqli_num_rows($ExeQrBuscarFotoRegistroMobilidade1);
        if( $RowQrBuscarFotoRegistroMobilidade1 = 1 ){
          while( $ReturnFotoRegistroMobilidade1 = mysqli_fetch_assoc($ExeQrBuscarFotoRegistroMobilidade1) ){
            $PastaFotoRegistroMobilidade1 = $ReturnFotoRegistroMobilidade1['pasta_foto'];
            $ArquivoFotoRegistroMobilidade1 = $ReturnFotoRegistroMobilidade1['nome_foto'];
          }
          ?>
            <div class="col-12 float-left text-center foto-mobilidade-urbana">
              <p><b>Mobilidade Urbana: Foto 1</b></p>
              <img 
                src="Docs/<?php echo "$PastaFotoRegistroMobilidade1/$ArquivoFotoRegistroMobilidade1" ?>" 
                alt="<?php echo $ArquivoFotoRegistroMobilidade1?>" 
                class="img-fluid"
                data-toggle="modal"
                data-target="#FotoRegistroMobilidade1"
              >
            </div>
          <?php
        }
      }else{
        //PROD
        "<br><pre>" . 
        $QueryBuscarFotoRegistroMobilidade1 = "
          SELECT * FROM tb_fotos
          WHERE id_foto = '$FotoRegistroMobilidade1'
        ";
        "</pre>";
        $ExeQrBuscarFotoRegistroMobilidade1 = mysqli_query($connection, $QueryBuscarFotoRegistroMobilidade1);
        $RowQrBuscarFotoRegistroMobilidade1 = mysqli_num_rows($ExeQrBuscarFotoRegistroMobilidade1);
        if( $RowQrBuscarFotoRegistroMobilidade1 = 1 ){
          while( $ReturnFotoRegistroMobilidade1 = mysqli_fetch_assoc($ExeQrBuscarFotoRegistroMobilidade1) ){
            $PastaFotoRegistroMobilidade1 = $ReturnFotoRegistroMobilidade1['pasta_foto'];
            $ArquivoFotoRegistroMobilidade1 = $ReturnFotoRegistroMobilidade1['nome_foto'];
          }
          ?>
            <div class="col-12 float-left text-center foto-mobilidade-urbana">
              <p><b>Mobilidade Urbana: Foto 1</b></p>
              <img 
                src="Docs/<?php echo "$PastaFotoRegistroMobilidade1/$ArquivoFotoRegistroMobilidade1" ?>" 
                alt="<?php echo $ArquivoFotoRegistroMobilidade1?>" 
                class="img-fluid"
                data-toggle="modal"
                data-target="#FotoRegistroMobilidade1"
              >
            </div>
          <?php
        }
      }
    }


    if( $FotoRegistroMobilidade2 != 0 ){
      //FotoRegistroMobilidade2
      if( $SysMode == 1 ){
        //DEV
        echo "<br><pre>" . 
        $QueryBuscarFotoRegistroMobilidade2 = "
          SELECT * FROM tb_fotos
          WHERE id_foto = '$FotoRegistroMobilidade2'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoRegistroMobilidade2 = mysqli_query($connection, $QueryBuscarFotoRegistroMobilidade2);
        $RowQrBuscarFotoRegistroMobilidade2 = mysqli_num_rows($ExeQrBuscarFotoRegistroMobilidade2);
        if( $RowQrBuscarFotoRegistroMobilidade2 = 1 ){
          while( $ReturnFotoRegistroMobilidade2 = mysqli_fetch_assoc($ExeQrBuscarFotoRegistroMobilidade2) ){
            $PastaFotoRegistroMobilidade2 = $ReturnFotoRegistroMobilidade2['pasta_foto'];
            $ArquivoFotoRegistroMobilidade2 = $ReturnFotoRegistroMobilidade2['nome_foto'];
          }
          ?>
            <div class="col-12 float-left text-center foto-mobilidade-urbana">
              <p><b>Mobilidade Urbana: Foto 2</b></p>
              <img 
                src="Docs/<?php echo "$PastaFotoRegistroMobilidade2/$ArquivoFotoRegistroMobilidade2" ?>" 
                alt="<?php echo $ArquivoFotoRegistroMobilidade2?>" 
                class="img-fluid"
                data-toggle="modal"
                data-target="#FotoRegistroMobilidade2"
              >
            </div>
          <?php
        }
      }else{
        //PROD
        "<br><pre>" . 
        $QueryBuscarFotoRegistroMobilidade2 = "
          SELECT * FROM tb_fotos
          WHERE id_foto = '$FotoRegistroMobilidade2'
        ";
        "</pre>";
        $ExeQrBuscarFotoRegistroMobilidade2 = mysqli_query($connection, $QueryBuscarFotoRegistroMobilidade2);
        $RowQrBuscarFotoRegistroMobilidade2 = mysqli_num_rows($ExeQrBuscarFotoRegistroMobilidade2);
        if( $RowQrBuscarFotoRegistroMobilidade2 = 1 ){
          while( $ReturnFotoRegistroMobilidade2 = mysqli_fetch_assoc($ExeQrBuscarFotoRegistroMobilidade2) ){
            $PastaFotoRegistroMobilidade2 = $ReturnFotoRegistroMobilidade2['pasta_foto'];
            $ArquivoFotoRegistroMobilidade2 = $ReturnFotoRegistroMobilidade2['nome_foto'];
          }
          ?>
            <div class="col-12 float-left text-center foto-mobilidade-urbana">
              <p><b>Mobilidade Urbana: Foto 2</b></p>
              <img 
                src="Docs/<?php echo "$PastaFotoRegistroMobilidade2/$ArquivoFotoRegistroMobilidade2" ?>" 
                alt="<?php echo $ArquivoFotoRegistroMobilidade2?>" 
                class="img-fluid"
                data-toggle="modal"
                data-target="#FotoRegistroMobilidade2"
              >
            </div>
          <?php
        }
      }
    }


    if( $FotoRegistroMobilidade3 != 0 ){
      //FotoRegistroMobilidade3
      if( $SysMode == 1 ){
        //DEV
        echo "<br><pre>" . 
        $QueryBuscarFotoRegistroMobilidade3 = "
          SELECT * FROM tb_fotos
          WHERE id_foto = '$FotoRegistroMobilidade3'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoRegistroMobilidade3 = mysqli_query($connection, $QueryBuscarFotoRegistroMobilidade3);
        $RowQrBuscarFotoRegistroMobilidade3 = mysqli_num_rows($ExeQrBuscarFotoRegistroMobilidade3);
        if( $RowQrBuscarFotoRegistroMobilidade3 = 1 ){
          while( $ReturnFotoRegistroMobilidade3 = mysqli_fetch_assoc($ExeQrBuscarFotoRegistroMobilidade3) ){
            $PastaFotoRegistroMobilidade3 = $ReturnFotoRegistroMobilidade3['pasta_foto'];
            $ArquivoFotoRegistroMobilidade3 = $ReturnFotoRegistroMobilidade3['nome_foto'];
          }
          ?>
            <div class="col-12 float-left text-center foto-mobilidade-urbana">
              <p><b>Mobilidade Urbana: Foto 3</b></p>
              <img 
                src="Docs/<?php echo "$PastaFotoRegistroMobilidade3/$ArquivoFotoRegistroMobilidade3" ?>" 
                alt="<?php echo $ArquivoFotoRegistroMobilidade3?>" 
                class="img-fluid"
                data-toggle="modal"
                data-target="#FotoRegistroMobilidade3"
              >
            </div>
          <?php
        }
      }else{
        //PROD
        "<br><pre>" . 
        $QueryBuscarFotoRegistroMobilidade3 = "
          SELECT * FROM tb_fotos
          WHERE id_foto = '$FotoRegistroMobilidade3'
        ";
        "</pre>";
        $ExeQrBuscarFotoRegistroMobilidade3 = mysqli_query($connection, $QueryBuscarFotoRegistroMobilidade3);
        $RowQrBuscarFotoRegistroMobilidade3 = mysqli_num_rows($ExeQrBuscarFotoRegistroMobilidade3);
        if( $RowQrBuscarFotoRegistroMobilidade3 = 1 ){
          while( $ReturnFotoRegistroMobilidade3 = mysqli_fetch_assoc($ExeQrBuscarFotoRegistroMobilidade3) ){
            $PastaFotoRegistroMobilidade3 = $ReturnFotoRegistroMobilidade3['pasta_foto'];
            $ArquivoFotoRegistroMobilidade3 = $ReturnFotoRegistroMobilidade3['nome_foto'];
          }
          ?>
            <div class="col-12 float-left text-center foto-mobilidade-urbana">
              <p><b>Mobilidade Urbana: Foto 3</b></p>
              <img 
                src="Docs/<?php echo "$PastaFotoRegistroMobilidade3/$ArquivoFotoRegistroMobilidade3" ?>" 
                alt="<?php echo $ArquivoFotoRegistroMobilidade3?>" 
                class="img-fluid"
                data-toggle="modal"
                data-target="#FotoRegistroMobilidade3"
              >
            </div>
          <?php
        }
      }
    }


    if( $FotoRegistroMobilidade4 != 0 ){
      //FotoRegistroMobilidade4
      if( $SysMode == 1 ){
        //DEV
        echo "<br><pre>" . 
        $QueryBuscarFotoRegistroMobilidade4 = "
          SELECT * FROM tb_fotos
          WHERE id_foto = '$FotoRegistroMobilidade4'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoRegistroMobilidade4 = mysqli_query($connection, $QueryBuscarFotoRegistroMobilidade4);
        $RowQrBuscarFotoRegistroMobilidade4 = mysqli_num_rows($ExeQrBuscarFotoRegistroMobilidade4);
        if( $RowQrBuscarFotoRegistroMobilidade4 = 1 ){
          while( $ReturnFotoRegistroMobilidade4 = mysqli_fetch_assoc($ExeQrBuscarFotoRegistroMobilidade4) ){
            $PastaFotoRegistroMobilidade4 = $ReturnFotoRegistroMobilidade4['pasta_foto'];
            $ArquivoFotoRegistroMobilidade4 = $ReturnFotoRegistroMobilidade4['nome_foto'];
          }
          ?>
            <div class="col-12 float-left text-center foto-mobilidade-urbana">
              <p><b>Mobilidade Urbana: Foto 4</b></p>
              <img 
                src="Docs/<?php echo "$PastaFotoRegistroMobilidade4/$ArquivoFotoRegistroMobilidade4" ?>" 
                alt="<?php echo $ArquivoFotoRegistroMobilidade4?>" 
                class="img-fluid"
                data-toggle="modal"
                data-target="#FotoRegistroMobilidade4"
              >
            </div>
          <?php
        }
      }else{
        //PROD
        "<br><pre>" . 
        $QueryBuscarFotoRegistroMobilidade4 = "
          SELECT * FROM tb_fotos
          WHERE id_foto = '$FotoRegistroMobilidade4'
        ";
        "</pre>";
        $ExeQrBuscarFotoRegistroMobilidade4 = mysqli_query($connection, $QueryBuscarFotoRegistroMobilidade4);
        $RowQrBuscarFotoRegistroMobilidade4 = mysqli_num_rows($ExeQrBuscarFotoRegistroMobilidade4);
        if( $RowQrBuscarFotoRegistroMobilidade4 = 1 ){
          while( $ReturnFotoRegistroMobilidade4 = mysqli_fetch_assoc($ExeQrBuscarFotoRegistroMobilidade4) ){
            $PastaFotoRegistroMobilidade4 = $ReturnFotoRegistroMobilidade4['pasta_foto'];
            $ArquivoFotoRegistroMobilidade4 = $ReturnFotoRegistroMobilidade4['nome_foto'];
          }
          ?>
            <div class="col-12 float-left text-center foto-mobilidade-urbana">
              <p><b>Mobilidade Urbana: Foto 4</b></p>
              <img 
                src="Docs/<?php echo "$PastaFotoRegistroMobilidade4/$ArquivoFotoRegistroMobilidade4" ?>" 
                alt="<?php echo $ArquivoFotoRegistroMobilidade4?>" 
                class="img-fluid"
                data-toggle="modal"
                data-target="#FotoRegistroMobilidade4"
              >
            </div>
          <?php
        }
      }
    }


    if( $FotoRegistroMobilidade5 != 0 ){
      //FotoRegistroMobilidade5
      if( $SysMode == 1 ){
        //DEV
        echo "<br><pre>" . 
        $QueryBuscarFotoRegistroMobilidade5 = "
          SELECT * FROM tb_fotos
          WHERE id_foto = '$FotoRegistroMobilidade5'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoRegistroMobilidade5 = mysqli_query($connection, $QueryBuscarFotoRegistroMobilidade5);
        $RowQrBuscarFotoRegistroMobilidade5 = mysqli_num_rows($ExeQrBuscarFotoRegistroMobilidade5);
        if( $RowQrBuscarFotoRegistroMobilidade5 = 1 ){
          while( $ReturnFotoRegistroMobilidade5 = mysqli_fetch_assoc($ExeQrBuscarFotoRegistroMobilidade5) ){
            $PastaFotoRegistroMobilidade5 = $ReturnFotoRegistroMobilidade5['pasta_foto'];
            $ArquivoFotoRegistroMobilidade5 = $ReturnFotoRegistroMobilidade5['nome_foto'];
          }
          ?>
            <div class="col-12 float-left text-center foto-mobilidade-urbana">
              <p><b>Mobilidade Urbana: Foto 5</b></p>
              <img 
                src="Docs/<?php echo "$PastaFotoRegistroMobilidade5/$ArquivoFotoRegistroMobilidade5" ?>" 
                alt="<?php echo $ArquivoFotoRegistroMobilidade5?>" 
                class="img-fluid"
                data-toggle="modal"
                data-target="#FotoRegistroMobilidade5"
              >
            </div>
          <?php
        }
      }else{
        //PROD
        "<br><pre>" . 
        $QueryBuscarFotoRegistroMobilidade5 = "
          SELECT * FROM tb_fotos
          WHERE id_foto = '$FotoRegistroMobilidade5'
        ";
        "</pre>";
        $ExeQrBuscarFotoRegistroMobilidade5 = mysqli_query($connection, $QueryBuscarFotoRegistroMobilidade5);
        $RowQrBuscarFotoRegistroMobilidade5 = mysqli_num_rows($ExeQrBuscarFotoRegistroMobilidade5);
        if( $RowQrBuscarFotoRegistroMobilidade5 = 1 ){
          while( $ReturnFotoRegistroMobilidade5 = mysqli_fetch_assoc($ExeQrBuscarFotoRegistroMobilidade5) ){
            $PastaFotoRegistroMobilidade5 = $ReturnFotoRegistroMobilidade5['pasta_foto'];
            $ArquivoFotoRegistroMobilidade5 = $ReturnFotoRegistroMobilidade5['nome_foto'];
          }
          ?>
            <div class="col-12 float-left text-center foto-mobilidade-urbana">
              <p><b>Mobilidade Urbana: Foto 5</b></p>
              <img 
                src="Docs/<?php echo "$PastaFotoRegistroMobilidade5/$ArquivoFotoRegistroMobilidade5" ?>" 
                alt="<?php echo $ArquivoFotoRegistroMobilidade5?>" 
                class="img-fluid"
                data-toggle="modal"
                data-target="#FotoRegistroMobilidade5"
              >
            </div>
          <?php
        }
      }
    }



    if( $FotoRegistroMobilidade6 != 0 ){
      //FotoRegistroMobilidade6
      if( $SysMode == 1 ){
        //DEV
        echo "<br><pre>" . 
        $QueryBuscarFotoRegistroMobilidade6 = "
          SELECT * FROM tb_fotos
          WHERE id_foto = '$FotoRegistroMobilidade6'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoRegistroMobilidade6 = mysqli_query($connection, $QueryBuscarFotoRegistroMobilidade6);
        $RowQrBuscarFotoRegistroMobilidade6 = mysqli_num_rows($ExeQrBuscarFotoRegistroMobilidade6);
        if( $RowQrBuscarFotoRegistroMobilidade6 = 1 ){
          while( $ReturnFotoRegistroMobilidade6 = mysqli_fetch_assoc($ExeQrBuscarFotoRegistroMobilidade6) ){
            $PastaFotoRegistroMobilidade6 = $ReturnFotoRegistroMobilidade6['pasta_foto'];
            $ArquivoFotoRegistroMobilidade6 = $ReturnFotoRegistroMobilidade6['nome_foto'];
          }
          ?>
            <div class="col-12 float-left text-center foto-mobilidade-urbana">
              <p><b>Mobilidade Urbana: Foto 6</b></p>
              <img 
                src="Docs/<?php echo "$PastaFotoRegistroMobilidade6/$ArquivoFotoRegistroMobilidade6" ?>" 
                alt="<?php echo $ArquivoFotoRegistroMobilidade6?>" 
                class="img-fluid"
                data-toggle="modal"
                data-target="#FotoRegistroMobilidade6"
              >
            </div>
          <?php
        }
      }else{
        //PROD
        "<br><pre>" . 
        $QueryBuscarFotoRegistroMobilidade6 = "
          SELECT * FROM tb_fotos
          WHERE id_foto = '$FotoRegistroMobilidade6'
        ";
        "</pre>";
        $ExeQrBuscarFotoRegistroMobilidade6 = mysqli_query($connection, $QueryBuscarFotoRegistroMobilidade6);
        $RowQrBuscarFotoRegistroMobilidade6 = mysqli_num_rows($ExeQrBuscarFotoRegistroMobilidade6);
        if( $RowQrBuscarFotoRegistroMobilidade6 = 1 ){
          while( $ReturnFotoRegistroMobilidade6 = mysqli_fetch_assoc($ExeQrBuscarFotoRegistroMobilidade6) ){
            $PastaFotoRegistroMobilidade6 = $ReturnFotoRegistroMobilidade6['pasta_foto'];
            $ArquivoFotoRegistroMobilidade6 = $ReturnFotoRegistroMobilidade6['nome_foto'];
          }
          ?>
            <div class="col-12 float-left text-center foto-mobilidade-urbana">
              <p><b>Mobilidade Urbana: Foto 6</b></p>
              <img 
                src="Docs/<?php echo "$PastaFotoRegistroMobilidade6/$ArquivoFotoRegistroMobilidade6" ?>" 
                alt="<?php echo $ArquivoFotoRegistroMobilidade6?>" 
                class="img-fluid"
                data-toggle="modal"
                data-target="#FotoRegistroMobilidade6"
              >
            </div>
          <?php
        }
      }
    }
  ?>
</div>