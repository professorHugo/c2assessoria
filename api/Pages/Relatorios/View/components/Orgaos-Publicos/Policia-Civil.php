<?php
  //Query-Policia-Civil
  include 'Querys/Policia-Civil.php';
?>
<h4 class="rotulos">Procedimentos Legais: Policia Civil</h4>
<h5 class="col-12">Resultado após pesquisa: <?php echo $Irregularidades ?></h5>

<div class="row space-2" id="Fotos-Policia-Civil">
  <?php
    if( $FotoPoliciaCivil1 != 0 ){
      //FotoPoliciaCivil1
      if( $SysMode == 1 ){
        //DEV
        echo "<br><pre>" . 
        $QueryBuscarFotoPoliciaCivil1 = "
          SELECT * FROM tb_fotos
          WHERE id_foto = '$FotoPoliciaCivil1'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoPoliciaCivil1 = mysqli_query($connection, $QueryBuscarFotoPoliciaCivil1);
        $RowQrBuscarFotoPoliciaCivil1 = mysqli_num_rows($ExeQrBuscarFotoPoliciaCivil1);
        if( $RowQrBuscarFotoPoliciaCivil1 = 1 ){
          while( $ReturnFotoPoliciaCivil1 = mysqli_fetch_assoc($ExeQrBuscarFotoPoliciaCivil1) ){
            $PastaFotoPoliciaCivil1 = $ReturnFotoPoliciaCivil1['pasta_foto'];
            $ArquivoFotoPoliciaCivil1 = $ReturnFotoPoliciaCivil1['nome_foto'];
          }
          ?>
            <div class="col-12 float-left text-center foto-policia-civil">
              <p><b>Policia Civil: Foto 1</b></p>
              <img 
                src="Docs/<?php echo "$PastaFotoPoliciaCivil1/$ArquivoFotoPoliciaCivil1" ?>" 
                alt="<?php echo $ArquivoFotoPoliciaCivil1?>" 
                class="img-fluid"
                data-toggle="modal"
                data-target="#FotoPoliciaCivil1"
              >
            </div>
          <?php
        }
      }else{
        //PROD
        "<br><pre>" . 
        $QueryBuscarFotoPoliciaCivil1 = "
          SELECT * FROM tb_fotos
          WHERE id_foto = '$FotoPoliciaCivil1'
        ";
        "</pre>";
        $ExeQrBuscarFotoPoliciaCivil1 = mysqli_query($connection, $QueryBuscarFotoPoliciaCivil1);
        $RowQrBuscarFotoPoliciaCivil1 = mysqli_num_rows($ExeQrBuscarFotoPoliciaCivil1);
        if( $RowQrBuscarFotoPoliciaCivil1 = 1 ){
          while( $ReturnFotoPoliciaCivil1 = mysqli_fetch_assoc($ExeQrBuscarFotoPoliciaCivil1) ){
            $PastaFotoPoliciaCivil1 = $ReturnFotoPoliciaCivil1['pasta_foto'];
            $ArquivoFotoPoliciaCivil1 = $ReturnFotoPoliciaCivil1['nome_foto'];
          }
          ?>
            <div class="col-12 float-left text-center foto-policia-civil">
              <p><b>Policia Civil: Foto 1</b></p>
              <img 
                src="Docs/<?php echo "$PastaFotoPoliciaCivil1/$ArquivoFotoPoliciaCivil1" ?>" 
                alt="<?php echo $ArquivoFotoPoliciaCivil1?>" 
                class="img-fluid"
                data-toggle="modal"
                data-target="#FotoPoliciaCivil1"
              >
            </div>
          <?php
        }
      }
    }


    if( $FotoPoliciaCivil2 != 0 ){
      //FotoPoliciaCivil2
      if( $SysMode == 1 ){
        //DEV
        echo "<br><pre>" . 
        $QueryBuscarFotoPoliciaCivil2 = "
          SELECT * FROM tb_fotos
          WHERE id_foto = '$FotoPoliciaCivil2'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoPoliciaCivil2 = mysqli_query($connection, $QueryBuscarFotoPoliciaCivil2);
        $RowQrBuscarFotoPoliciaCivil2 = mysqli_num_rows($ExeQrBuscarFotoPoliciaCivil2);
        if( $RowQrBuscarFotoPoliciaCivil2 = 1 ){
          while( $ReturnFotoPoliciaCivil2 = mysqli_fetch_assoc($ExeQrBuscarFotoPoliciaCivil2) ){
            $PastaFotoPoliciaCivil2 = $ReturnFotoPoliciaCivil2['pasta_foto'];
            $ArquivoFotoPoliciaCivil2 = $ReturnFotoPoliciaCivil2['nome_foto'];
          }
          ?>
            <div class="col-12 float-left text-center foto-policia-civil">
              <p><b>Policia Civil: Foto 2</b></p>
              <img 
                src="Docs/<?php echo "$PastaFotoPoliciaCivil2/$ArquivoFotoPoliciaCivil2" ?>" 
                alt="<?php echo $ArquivoFotoPoliciaCivil2?>" 
                class="img-fluid"
                data-toggle="modal"
                data-target="#FotoPoliciaCivil2"
              >
            </div>
          <?php
        }
      }else{
        //PROD
        "<br><pre>" . 
        $QueryBuscarFotoPoliciaCivil2 = "
          SELECT * FROM tb_fotos
          WHERE id_foto = '$FotoPoliciaCivil2'
        ";
        "</pre>";
        $ExeQrBuscarFotoPoliciaCivil2 = mysqli_query($connection, $QueryBuscarFotoPoliciaCivil2);
        $RowQrBuscarFotoPoliciaCivil2 = mysqli_num_rows($ExeQrBuscarFotoPoliciaCivil2);
        if( $RowQrBuscarFotoPoliciaCivil2 = 1 ){
          while( $ReturnFotoPoliciaCivil2 = mysqli_fetch_assoc($ExeQrBuscarFotoPoliciaCivil2) ){
            $PastaFotoPoliciaCivil2 = $ReturnFotoPoliciaCivil2['pasta_foto'];
            $ArquivoFotoPoliciaCivil2 = $ReturnFotoPoliciaCivil2['nome_foto'];
          }
          ?>
            <div class="col-12 float-left text-center foto-policia-civil">
              <p><b>Policia Civil: Foto 2</b></p>
              <img 
                src="Docs/<?php echo "$PastaFotoPoliciaCivil2/$ArquivoFotoPoliciaCivil2" ?>" 
                alt="<?php echo $ArquivoFotoPoliciaCivil2?>" 
                class="img-fluid"
                data-toggle="modal"
                data-target="#FotoPoliciaCivil2"
              >
            </div>
          <?php
        }
      }
    }


    if( $FotoPoliciaCivil3 != 0 ){
      //FotoPoliciaCivil3
      if( $SysMode == 1 ){
        //DEV
        echo "<br><pre>" . 
        $QueryBuscarFotoPoliciaCivil3 = "
          SELECT * FROM tb_fotos
          WHERE id_foto = '$FotoPoliciaCivil3'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoPoliciaCivil3 = mysqli_query($connection, $QueryBuscarFotoPoliciaCivil3);
        $RowQrBuscarFotoPoliciaCivil3 = mysqli_num_rows($ExeQrBuscarFotoPoliciaCivil3);
        if( $RowQrBuscarFotoPoliciaCivil3 = 1 ){
          while( $ReturnFotoPoliciaCivil3 = mysqli_fetch_assoc($ExeQrBuscarFotoPoliciaCivil3) ){
            $PastaFotoPoliciaCivil3 = $ReturnFotoPoliciaCivil3['pasta_foto'];
            $ArquivoFotoPoliciaCivil3 = $ReturnFotoPoliciaCivil3['nome_foto'];
          }
          ?>
            <div class="col-12 float-left text-center foto-policia-civil">
              <p><b>Policia Civil: Foto 3</b></p>
              <img 
                src="Docs/<?php echo "$PastaFotoPoliciaCivil3/$ArquivoFotoPoliciaCivil3" ?>" 
                alt="<?php echo $ArquivoFotoPoliciaCivil3?>" 
                class="img-fluid"
                data-toggle="modal"
                data-target="#FotoPoliciaCivil3"
              >
            </div>
          <?php
        }
      }else{
        //PROD
        "<br><pre>" . 
        $QueryBuscarFotoPoliciaCivil3 = "
          SELECT * FROM tb_fotos
          WHERE id_foto = '$FotoPoliciaCivil3'
        ";
        "</pre>";
        $ExeQrBuscarFotoPoliciaCivil3 = mysqli_query($connection, $QueryBuscarFotoPoliciaCivil3);
        $RowQrBuscarFotoPoliciaCivil3 = mysqli_num_rows($ExeQrBuscarFotoPoliciaCivil3);
        if( $RowQrBuscarFotoPoliciaCivil3 = 1 ){
          while( $ReturnFotoPoliciaCivil3 = mysqli_fetch_assoc($ExeQrBuscarFotoPoliciaCivil3) ){
            $PastaFotoPoliciaCivil3 = $ReturnFotoPoliciaCivil3['pasta_foto'];
            $ArquivoFotoPoliciaCivil3 = $ReturnFotoPoliciaCivil3['nome_foto'];
          }
          ?>
            <div class="col-12 float-left text-center foto-policia-civil">
              <p><b>Policia Civil: Foto 3</b></p>
              <img 
                src="Docs/<?php echo "$PastaFotoPoliciaCivil3/$ArquivoFotoPoliciaCivil3" ?>" 
                alt="<?php echo $ArquivoFotoPoliciaCivil3?>" 
                class="img-fluid"
                data-toggle="modal"
                data-target="#FotoPoliciaCivil3"
              >
            </div>
          <?php
        }
      }
    }


    if( $FotoPoliciaCivil4 != 0 ){
      //FotoPoliciaCivil4
      if( $SysMode == 1 ){
        //DEV
        echo "<br><pre>" . 
        $QueryBuscarFotoPoliciaCivil4 = "
          SELECT * FROM tb_fotos
          WHERE id_foto = '$FotoPoliciaCivil4'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoPoliciaCivil4 = mysqli_query($connection, $QueryBuscarFotoPoliciaCivil4);
        $RowQrBuscarFotoPoliciaCivil4 = mysqli_num_rows($ExeQrBuscarFotoPoliciaCivil4);
        if( $RowQrBuscarFotoPoliciaCivil4 = 1 ){
          while( $ReturnFotoPoliciaCivil4 = mysqli_fetch_assoc($ExeQrBuscarFotoPoliciaCivil4) ){
            $PastaFotoPoliciaCivil4 = $ReturnFotoPoliciaCivil4['pasta_foto'];
            $ArquivoFotoPoliciaCivil4 = $ReturnFotoPoliciaCivil4['nome_foto'];
          }
          ?>
            <div class="col-12 float-left text-center foto-policia-civil">
              <p><b>Policia Civil: Foto 4</b></p>
              <img 
                src="Docs/<?php echo "$PastaFotoPoliciaCivil4/$ArquivoFotoPoliciaCivil4" ?>" 
                alt="<?php echo $ArquivoFotoPoliciaCivil4?>" 
                class="img-fluid"
                data-toggle="modal"
                data-target="#FotoPoliciaCivil4"
              >
            </div>
          <?php
        }
      }else{
        //PROD
        "<br><pre>" . 
        $QueryBuscarFotoPoliciaCivil4 = "
          SELECT * FROM tb_fotos
          WHERE id_foto = '$FotoPoliciaCivil4'
        ";
        "</pre>";
        $ExeQrBuscarFotoPoliciaCivil4 = mysqli_query($connection, $QueryBuscarFotoPoliciaCivil4);
        $RowQrBuscarFotoPoliciaCivil4 = mysqli_num_rows($ExeQrBuscarFotoPoliciaCivil4);
        if( $RowQrBuscarFotoPoliciaCivil4 = 1 ){
          while( $ReturnFotoPoliciaCivil4 = mysqli_fetch_assoc($ExeQrBuscarFotoPoliciaCivil4) ){
            $PastaFotoPoliciaCivil4 = $ReturnFotoPoliciaCivil4['pasta_foto'];
            $ArquivoFotoPoliciaCivil4 = $ReturnFotoPoliciaCivil4['nome_foto'];
          }
          ?>
            <div class="col-12 float-left text-center foto-policia-civil">
              <p><b>Policia Civil: Foto 4</b></p>
              <img 
                src="Docs/<?php echo "$PastaFotoPoliciaCivil4/$ArquivoFotoPoliciaCivil4" ?>" 
                alt="<?php echo $ArquivoFotoPoliciaCivil4?>" 
                class="img-fluid"
                data-toggle="modal"
                data-target="#FotoPoliciaCivil4"
              >
            </div>
          <?php
        }
      }
    }


    if( $FotoPoliciaCivil5 != 0 ){
      //FotoPoliciaCivil5
      if( $SysMode == 1 ){
        //DEV
        echo "<br><pre>" . 
        $QueryBuscarFotoPoliciaCivil5 = "
          SELECT * FROM tb_fotos
          WHERE id_foto = '$FotoPoliciaCivil5'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoPoliciaCivil5 = mysqli_query($connection, $QueryBuscarFotoPoliciaCivil5);
        $RowQrBuscarFotoPoliciaCivil5 = mysqli_num_rows($ExeQrBuscarFotoPoliciaCivil5);
        if( $RowQrBuscarFotoPoliciaCivil5 = 1 ){
          while( $ReturnFotoPoliciaCivil5 = mysqli_fetch_assoc($ExeQrBuscarFotoPoliciaCivil5) ){
            $PastaFotoPoliciaCivil5 = $ReturnFotoPoliciaCivil5['pasta_foto'];
            $ArquivoFotoPoliciaCivil5 = $ReturnFotoPoliciaCivil5['nome_foto'];
          }
          ?>
            <div class="col-12 float-left text-center foto-policia-civil">
              <p><b>Policia Civil: Foto 5</b></p>
              <img 
                src="Docs/<?php echo "$PastaFotoPoliciaCivil5/$ArquivoFotoPoliciaCivil5" ?>" 
                alt="<?php echo $ArquivoFotoPoliciaCivil5?>" 
                class="img-fluid"
                data-toggle="modal"
                data-target="#FotoPoliciaCivil5"
              >
            </div>
          <?php
        }
      }else{
        //PROD
        "<br><pre>" . 
        $QueryBuscarFotoPoliciaCivil5 = "
          SELECT * FROM tb_fotos
          WHERE id_foto = '$FotoPoliciaCivil5'
        ";
        "</pre>";
        $ExeQrBuscarFotoPoliciaCivil5 = mysqli_query($connection, $QueryBuscarFotoPoliciaCivil5);
        $RowQrBuscarFotoPoliciaCivil5 = mysqli_num_rows($ExeQrBuscarFotoPoliciaCivil5);
        if( $RowQrBuscarFotoPoliciaCivil5 = 1 ){
          while( $ReturnFotoPoliciaCivil5 = mysqli_fetch_assoc($ExeQrBuscarFotoPoliciaCivil5) ){
            $PastaFotoPoliciaCivil5 = $ReturnFotoPoliciaCivil5['pasta_foto'];
            $ArquivoFotoPoliciaCivil5 = $ReturnFotoPoliciaCivil5['nome_foto'];
          }
          ?>
            <div class="col-12 float-left text-center foto-policia-civil">
              <p><b>Policia Civil: Foto 5</b></p>
              <img 
                src="Docs/<?php echo "$PastaFotoPoliciaCivil5/$ArquivoFotoPoliciaCivil5" ?>" 
                alt="<?php echo $ArquivoFotoPoliciaCivil5?>" 
                class="img-fluid"
                data-toggle="modal"
                data-target="#FotoPoliciaCivil5"
              >
            </div>
          <?php
        }
      }
    }



    if( $FotoPoliciaCivil6 != 0 ){
      //FotoPoliciaCivil6
      if( $SysMode == 1 ){
        //DEV
        echo "<br><pre>" . 
        $QueryBuscarFotoPoliciaCivil6 = "
          SELECT * FROM tb_fotos
          WHERE id_foto = '$FotoPoliciaCivil6'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoPoliciaCivil6 = mysqli_query($connection, $QueryBuscarFotoPoliciaCivil6);
        $RowQrBuscarFotoPoliciaCivil6 = mysqli_num_rows($ExeQrBuscarFotoPoliciaCivil6);
        if( $RowQrBuscarFotoPoliciaCivil6 = 1 ){
          while( $ReturnFotoPoliciaCivil6 = mysqli_fetch_assoc($ExeQrBuscarFotoPoliciaCivil6) ){
            $PastaFotoPoliciaCivil6 = $ReturnFotoPoliciaCivil6['pasta_foto'];
            $ArquivoFotoPoliciaCivil6 = $ReturnFotoPoliciaCivil6['nome_foto'];
          }
          ?>
            <div class="col-12 float-left text-center foto-policia-civil">
              <p><b>Policia Civil: Foto 6</b></p>
              <img 
                src="Docs/<?php echo "$PastaFotoPoliciaCivil6/$ArquivoFotoPoliciaCivil6" ?>" 
                alt="<?php echo $ArquivoFotoPoliciaCivil6?>" 
                class="img-fluid"
                data-toggle="modal"
                data-target="#FotoPoliciaCivil6"
              >
            </div>
          <?php
        }
      }else{
        //PROD
        "<br><pre>" . 
        $QueryBuscarFotoPoliciaCivil6 = "
          SELECT * FROM tb_fotos
          WHERE id_foto = '$FotoPoliciaCivil6'
        ";
        "</pre>";
        $ExeQrBuscarFotoPoliciaCivil6 = mysqli_query($connection, $QueryBuscarFotoPoliciaCivil6);
        $RowQrBuscarFotoPoliciaCivil6 = mysqli_num_rows($ExeQrBuscarFotoPoliciaCivil6);
        if( $RowQrBuscarFotoPoliciaCivil6 = 1 ){
          while( $ReturnFotoPoliciaCivil6 = mysqli_fetch_assoc($ExeQrBuscarFotoPoliciaCivil6) ){
            $PastaFotoPoliciaCivil6 = $ReturnFotoPoliciaCivil6['pasta_foto'];
            $ArquivoFotoPoliciaCivil6 = $ReturnFotoPoliciaCivil6['nome_foto'];
          }
          ?>
            <div class="col-12 float-left text-center foto-policia-civil">
              <p><b>Policia Civil: Foto 6</b></p>
              <img 
                src="Docs/<?php echo "$PastaFotoPoliciaCivil6/$ArquivoFotoPoliciaCivil6" ?>" 
                alt="<?php echo $ArquivoFotoPoliciaCivil6?>" 
                class="img-fluid"
                data-toggle="modal"
                data-target="#FotoPoliciaCivil6"
              >
            </div>
          <?php
        }
      }
    }
  ?>
</div>