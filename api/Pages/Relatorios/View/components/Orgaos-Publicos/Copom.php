<?php
  //Query-Copom
  include 'Querys/Copom.php';
?>
<h4 class="rotulos">Procedimentos Legais: COMPOM 190</h4>
<h5 class="col-12">Resultado após pesquisa: <?php echo $IrregularidadesRegistroCopom ?></h5>

<div class="row space-2" id="Fotos-Copom">
<?php
    if( $FotoRegistroCopom1 != 0 ){
      //FotoRegistroCopom1
      if( $SysMode == 1 ){
        //DEV
        echo "<br><pre>" . 
        $QueryBuscarFotoRegistroCopom1 = "
          SELECT * FROM tb_fotos
          WHERE id_foto = '$FotoRegistroCopom1'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoRegistroCopom1 = mysqli_query($connection, $QueryBuscarFotoRegistroCopom1);
        $RowQrBuscarFotoRegistroCopom1 = mysqli_num_rows($ExeQrBuscarFotoRegistroCopom1);
        if( $RowQrBuscarFotoRegistroCopom1 = 1 ){
          while( $ReturnFotoRegistroCopom1 = mysqli_fetch_assoc($ExeQrBuscarFotoRegistroCopom1) ){
            $PastaFotoRegistroCopom1 = $ReturnFotoRegistroCopom1['pasta_foto'];
            $ArquivoFotoRegistroCopom1 = $ReturnFotoRegistroCopom1['nome_foto'];
          }
          ?>
            <div class="col-12 float-left text-center foto-copom">
              <p><b>Policia Civil: Foto 1</b></p>
              <img 
                src="Docs/<?php echo "$PastaFotoRegistroCopom1/$ArquivoFotoRegistroCopom1" ?>" 
                alt="<?php echo $ArquivoFotoRegistroCopom1?>" 
                class="img-fluid"
                data-toggle="modal"
                data-target="#FotoRegistroCopom1"
              >
            </div>
          <?php
        }
      }else{
        //PROD
        "<br><pre>" . 
        $QueryBuscarFotoRegistroCopom1 = "
          SELECT * FROM tb_fotos
          WHERE id_foto = '$FotoRegistroCopom1'
        ";
        "</pre>";
        $ExeQrBuscarFotoRegistroCopom1 = mysqli_query($connection, $QueryBuscarFotoRegistroCopom1);
        $RowQrBuscarFotoRegistroCopom1 = mysqli_num_rows($ExeQrBuscarFotoRegistroCopom1);
        if( $RowQrBuscarFotoRegistroCopom1 = 1 ){
          while( $ReturnFotoRegistroCopom1 = mysqli_fetch_assoc($ExeQrBuscarFotoRegistroCopom1) ){
            $PastaFotoRegistroCopom1 = $ReturnFotoRegistroCopom1['pasta_foto'];
            $ArquivoFotoRegistroCopom1 = $ReturnFotoRegistroCopom1['nome_foto'];
          }
          ?>
            <div class="col-12 float-left text-center foto-copom">
              <p><b>Policia Civil: Foto 1</b></p>
              <img 
                src="Docs/<?php echo "$PastaFotoRegistroCopom1/$ArquivoFotoRegistroCopom1" ?>" 
                alt="<?php echo $ArquivoFotoRegistroCopom1?>" 
                class="img-fluid"
                data-toggle="modal"
                data-target="#FotoRegistroCopom1"
              >
            </div>
          <?php
        }
      }
    }


    if( $FotoRegistroCopom2 != 0 ){
      //FotoRegistroCopom2
      if( $SysMode == 1 ){
        //DEV
        echo "<br><pre>" . 
        $QueryBuscarFotoRegistroCopom2 = "
          SELECT * FROM tb_fotos
          WHERE id_foto = '$FotoRegistroCopom2'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoRegistroCopom2 = mysqli_query($connection, $QueryBuscarFotoRegistroCopom2);
        $RowQrBuscarFotoRegistroCopom2 = mysqli_num_rows($ExeQrBuscarFotoRegistroCopom2);
        if( $RowQrBuscarFotoRegistroCopom2 = 1 ){
          while( $ReturnFotoRegistroCopom2 = mysqli_fetch_assoc($ExeQrBuscarFotoRegistroCopom2) ){
            $PastaFotoRegistroCopom2 = $ReturnFotoRegistroCopom2['pasta_foto'];
            $ArquivoFotoRegistroCopom2 = $ReturnFotoRegistroCopom2['nome_foto'];
          }
          ?>
            <div class="col-12 float-left text-center foto-copom">
              <p><b>Policia Civil: Foto 2</b></p>
              <img 
                src="Docs/<?php echo "$PastaFotoRegistroCopom2/$ArquivoFotoRegistroCopom2" ?>" 
                alt="<?php echo $ArquivoFotoRegistroCopom2?>" 
                class="img-fluid"
                data-toggle="modal"
                data-target="#FotoRegistroCopom2"
              >
            </div>
          <?php
        }
      }else{
        //PROD
        "<br><pre>" . 
        $QueryBuscarFotoRegistroCopom2 = "
          SELECT * FROM tb_fotos
          WHERE id_foto = '$FotoRegistroCopom2'
        ";
        "</pre>";
        $ExeQrBuscarFotoRegistroCopom2 = mysqli_query($connection, $QueryBuscarFotoRegistroCopom2);
        $RowQrBuscarFotoRegistroCopom2 = mysqli_num_rows($ExeQrBuscarFotoRegistroCopom2);
        if( $RowQrBuscarFotoRegistroCopom2 = 1 ){
          while( $ReturnFotoRegistroCopom2 = mysqli_fetch_assoc($ExeQrBuscarFotoRegistroCopom2) ){
            $PastaFotoRegistroCopom2 = $ReturnFotoRegistroCopom2['pasta_foto'];
            $ArquivoFotoRegistroCopom2 = $ReturnFotoRegistroCopom2['nome_foto'];
          }
          ?>
            <div class="col-12 float-left text-center foto-copom">
              <p><b>Policia Civil: Foto 2</b></p>
              <img 
                src="Docs/<?php echo "$PastaFotoRegistroCopom2/$ArquivoFotoRegistroCopom2" ?>" 
                alt="<?php echo $ArquivoFotoRegistroCopom2?>" 
                class="img-fluid"
                data-toggle="modal"
                data-target="#FotoRegistroCopom2"
              >
            </div>
          <?php
        }
      }
    }


    if( $FotoRegistroCopom3 != 0 ){
      //FotoRegistroCopom3
      if( $SysMode == 1 ){
        //DEV
        echo "<br><pre>" . 
        $QueryBuscarFotoRegistroCopom3 = "
          SELECT * FROM tb_fotos
          WHERE id_foto = '$FotoRegistroCopom3'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoRegistroCopom3 = mysqli_query($connection, $QueryBuscarFotoRegistroCopom3);
        $RowQrBuscarFotoRegistroCopom3 = mysqli_num_rows($ExeQrBuscarFotoRegistroCopom3);
        if( $RowQrBuscarFotoRegistroCopom3 = 1 ){
          while( $ReturnFotoRegistroCopom3 = mysqli_fetch_assoc($ExeQrBuscarFotoRegistroCopom3) ){
            $PastaFotoRegistroCopom3 = $ReturnFotoRegistroCopom3['pasta_foto'];
            $ArquivoFotoRegistroCopom3 = $ReturnFotoRegistroCopom3['nome_foto'];
          }
          ?>
            <div class="col-12 float-left text-center foto-copom">
              <p><b>Policia Civil: Foto 3</b></p>
              <img 
                src="Docs/<?php echo "$PastaFotoRegistroCopom3/$ArquivoFotoRegistroCopom3" ?>" 
                alt="<?php echo $ArquivoFotoRegistroCopom3?>" 
                class="img-fluid"
                data-toggle="modal"
                data-target="#FotoRegistroCopom3"
              >
            </div>
          <?php
        }
      }else{
        //PROD
        "<br><pre>" . 
        $QueryBuscarFotoRegistroCopom3 = "
          SELECT * FROM tb_fotos
          WHERE id_foto = '$FotoRegistroCopom3'
        ";
        "</pre>";
        $ExeQrBuscarFotoRegistroCopom3 = mysqli_query($connection, $QueryBuscarFotoRegistroCopom3);
        $RowQrBuscarFotoRegistroCopom3 = mysqli_num_rows($ExeQrBuscarFotoRegistroCopom3);
        if( $RowQrBuscarFotoRegistroCopom3 = 1 ){
          while( $ReturnFotoRegistroCopom3 = mysqli_fetch_assoc($ExeQrBuscarFotoRegistroCopom3) ){
            $PastaFotoRegistroCopom3 = $ReturnFotoRegistroCopom3['pasta_foto'];
            $ArquivoFotoRegistroCopom3 = $ReturnFotoRegistroCopom3['nome_foto'];
          }
          ?>
            <div class="col-12 float-left text-center foto-copom">
              <p><b>Policia Civil: Foto 3</b></p>
              <img 
                src="Docs/<?php echo "$PastaFotoRegistroCopom3/$ArquivoFotoRegistroCopom3" ?>" 
                alt="<?php echo $ArquivoFotoRegistroCopom3?>" 
                class="img-fluid"
                data-toggle="modal"
                data-target="#FotoRegistroCopom3"
              >
            </div>
          <?php
        }
      }
    }


    if( $FotoRegistroCopom4 != 0 ){
      //FotoRegistroCopom4
      if( $SysMode == 1 ){
        //DEV
        echo "<br><pre>" . 
        $QueryBuscarFotoRegistroCopom4 = "
          SELECT * FROM tb_fotos
          WHERE id_foto = '$FotoRegistroCopom4'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoRegistroCopom4 = mysqli_query($connection, $QueryBuscarFotoRegistroCopom4);
        $RowQrBuscarFotoRegistroCopom4 = mysqli_num_rows($ExeQrBuscarFotoRegistroCopom4);
        if( $RowQrBuscarFotoRegistroCopom4 = 1 ){
          while( $ReturnFotoRegistroCopom4 = mysqli_fetch_assoc($ExeQrBuscarFotoRegistroCopom4) ){
            $PastaFotoRegistroCopom4 = $ReturnFotoRegistroCopom4['pasta_foto'];
            $ArquivoFotoRegistroCopom4 = $ReturnFotoRegistroCopom4['nome_foto'];
          }
          ?>
            <div class="col-12 float-left text-center foto-copom">
              <p><b>Policia Civil: Foto 4</b></p>
              <img 
                src="Docs/<?php echo "$PastaFotoRegistroCopom4/$ArquivoFotoRegistroCopom4" ?>" 
                alt="<?php echo $ArquivoFotoRegistroCopom4?>" 
                class="img-fluid"
                data-toggle="modal"
                data-target="#FotoRegistroCopom4"
              >
            </div>
          <?php
        }
      }else{
        //PROD
        "<br><pre>" . 
        $QueryBuscarFotoRegistroCopom4 = "
          SELECT * FROM tb_fotos
          WHERE id_foto = '$FotoRegistroCopom4'
        ";
        "</pre>";
        $ExeQrBuscarFotoRegistroCopom4 = mysqli_query($connection, $QueryBuscarFotoRegistroCopom4);
        $RowQrBuscarFotoRegistroCopom4 = mysqli_num_rows($ExeQrBuscarFotoRegistroCopom4);
        if( $RowQrBuscarFotoRegistroCopom4 = 1 ){
          while( $ReturnFotoRegistroCopom4 = mysqli_fetch_assoc($ExeQrBuscarFotoRegistroCopom4) ){
            $PastaFotoRegistroCopom4 = $ReturnFotoRegistroCopom4['pasta_foto'];
            $ArquivoFotoRegistroCopom4 = $ReturnFotoRegistroCopom4['nome_foto'];
          }
          ?>
            <div class="col-12 float-left text-center foto-copom">
              <p><b>Policia Civil: Foto 4</b></p>
              <img 
                src="Docs/<?php echo "$PastaFotoRegistroCopom4/$ArquivoFotoRegistroCopom4" ?>" 
                alt="<?php echo $ArquivoFotoRegistroCopom4?>" 
                class="img-fluid"
                data-toggle="modal"
                data-target="#FotoRegistroCopom4"
              >
            </div>
          <?php
        }
      }
    }


    if( $FotoRegistroCopom5 != 0 ){
      //FotoRegistroCopom5
      if( $SysMode == 1 ){
        //DEV
        echo "<br><pre>" . 
        $QueryBuscarFotoRegistroCopom5 = "
          SELECT * FROM tb_fotos
          WHERE id_foto = '$FotoRegistroCopom5'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoRegistroCopom5 = mysqli_query($connection, $QueryBuscarFotoRegistroCopom5);
        $RowQrBuscarFotoRegistroCopom5 = mysqli_num_rows($ExeQrBuscarFotoRegistroCopom5);
        if( $RowQrBuscarFotoRegistroCopom5 = 1 ){
          while( $ReturnFotoRegistroCopom5 = mysqli_fetch_assoc($ExeQrBuscarFotoRegistroCopom5) ){
            $PastaFotoRegistroCopom5 = $ReturnFotoRegistroCopom5['pasta_foto'];
            $ArquivoFotoRegistroCopom5 = $ReturnFotoRegistroCopom5['nome_foto'];
          }
          ?>
            <div class="col-12 float-left text-center foto-copom">
              <p><b>Policia Civil: Foto 5</b></p>
              <img 
                src="Docs/<?php echo "$PastaFotoRegistroCopom5/$ArquivoFotoRegistroCopom5" ?>" 
                alt="<?php echo $ArquivoFotoRegistroCopom5?>" 
                class="img-fluid"
                data-toggle="modal"
                data-target="#FotoRegistroCopom5"
              >
            </div>
          <?php
        }
      }else{
        //PROD
        "<br><pre>" . 
        $QueryBuscarFotoRegistroCopom5 = "
          SELECT * FROM tb_fotos
          WHERE id_foto = '$FotoRegistroCopom5'
        ";
        "</pre>";
        $ExeQrBuscarFotoRegistroCopom5 = mysqli_query($connection, $QueryBuscarFotoRegistroCopom5);
        $RowQrBuscarFotoRegistroCopom5 = mysqli_num_rows($ExeQrBuscarFotoRegistroCopom5);
        if( $RowQrBuscarFotoRegistroCopom5 = 1 ){
          while( $ReturnFotoRegistroCopom5 = mysqli_fetch_assoc($ExeQrBuscarFotoRegistroCopom5) ){
            $PastaFotoRegistroCopom5 = $ReturnFotoRegistroCopom5['pasta_foto'];
            $ArquivoFotoRegistroCopom5 = $ReturnFotoRegistroCopom5['nome_foto'];
          }
          ?>
            <div class="col-12 float-left text-center foto-copom">
              <p><b>Policia Civil: Foto 5</b></p>
              <img 
                src="Docs/<?php echo "$PastaFotoRegistroCopom5/$ArquivoFotoRegistroCopom5" ?>" 
                alt="<?php echo $ArquivoFotoRegistroCopom5?>" 
                class="img-fluid"
                data-toggle="modal"
                data-target="#FotoRegistroCopom5"
              >
            </div>
          <?php
        }
      }
    }



    if( $FotoRegistroCopom6 != 0 ){
      //FotoRegistroCopom6
      if( $SysMode == 1 ){
        //DEV
        echo "<br><pre>" . 
        $QueryBuscarFotoRegistroCopom6 = "
          SELECT * FROM tb_fotos
          WHERE id_foto = '$FotoRegistroCopom6'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoRegistroCopom6 = mysqli_query($connection, $QueryBuscarFotoRegistroCopom6);
        $RowQrBuscarFotoRegistroCopom6 = mysqli_num_rows($ExeQrBuscarFotoRegistroCopom6);
        if( $RowQrBuscarFotoRegistroCopom6 = 1 ){
          while( $ReturnFotoRegistroCopom6 = mysqli_fetch_assoc($ExeQrBuscarFotoRegistroCopom6) ){
            $PastaFotoRegistroCopom6 = $ReturnFotoRegistroCopom6['pasta_foto'];
            $ArquivoFotoRegistroCopom6 = $ReturnFotoRegistroCopom6['nome_foto'];
          }
          ?>
            <div class="col-12 float-left text-center foto-copom">
              <p><b>Policia Civil: Foto 6</b></p>
              <img 
                src="Docs/<?php echo "$PastaFotoRegistroCopom6/$ArquivoFotoRegistroCopom6" ?>" 
                alt="<?php echo $ArquivoFotoRegistroCopom6?>" 
                class="img-fluid"
                data-toggle="modal"
                data-target="#FotoRegistroCopom6"
              >
            </div>
          <?php
        }
      }else{
        //PROD
        "<br><pre>" . 
        $QueryBuscarFotoRegistroCopom6 = "
          SELECT * FROM tb_fotos
          WHERE id_foto = '$FotoRegistroCopom6'
        ";
        "</pre>";
        $ExeQrBuscarFotoRegistroCopom6 = mysqli_query($connection, $QueryBuscarFotoRegistroCopom6);
        $RowQrBuscarFotoRegistroCopom6 = mysqli_num_rows($ExeQrBuscarFotoRegistroCopom6);
        if( $RowQrBuscarFotoRegistroCopom6 = 1 ){
          while( $ReturnFotoRegistroCopom6 = mysqli_fetch_assoc($ExeQrBuscarFotoRegistroCopom6) ){
            $PastaFotoRegistroCopom6 = $ReturnFotoRegistroCopom6['pasta_foto'];
            $ArquivoFotoRegistroCopom6 = $ReturnFotoRegistroCopom6['nome_foto'];
          }
          ?>
            <div class="col-12 float-left text-center foto-copom">
              <p><b>Policia Civil: Foto 6</b></p>
              <img 
                src="Docs/<?php echo "$PastaFotoRegistroCopom6/$ArquivoFotoRegistroCopom6" ?>" 
                alt="<?php echo $ArquivoFotoRegistroCopom6?>" 
                class="img-fluid"
                data-toggle="modal"
                data-target="#FotoRegistroCopom6"
              >
            </div>
          <?php
        }
      }
    }
  ?>
</div>