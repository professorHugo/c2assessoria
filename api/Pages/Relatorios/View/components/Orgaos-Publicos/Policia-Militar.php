<?php
  //Query-Policia-Militar
  include 'Querys/Policia-Militar.php';
?>
<h4 class="rotulos">Procedimentos Legais: Polícia Militar</h4>
<h5 class="col-12">Resultado após pesquisa: <?php echo $IrregularidadesPoliciaMilitar ?></h5>

<div class="row space-2" id="Fotos-Policia-Militar">
  <?php
    if( $FotoPoliciaMilitar1 != 0 ){
      if( $SysMode ==  1 ){
        //DEV
        echo "<br><pre>" . 
        $QueryBuscarFotoPoliciaMilitar1 = "
          SELECT * FROM tb_fotos
          WHERE id_foto = '$FotoPoliciaMilitar1'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoPoliciaMilitar1 = mysqli_query($connection, $QueryBuscarFotoPoliciaMilitar1);
        $RowQrBuscarFotoPoliciaMilitar1 = mysqli_num_rows($ExeQrBuscarFotoPoliciaMilitar1);
        if( $RowQrBuscarFotoPoliciaMilitar1 = 1 ){
          while( $ReturnFotoPoliciaMilitar1 = mysqli_fetch_assoc($ExeQrBuscarFotoPoliciaMilitar1) ){
            $PastaFotoPoliciaMilitar1 = $ReturnFotoPoliciaMilitar1['pasta_foto'];
            $ArquivoFotoPoliciaMilitar1 = $ReturnFotoPoliciaMilitar1['nome_foto'];
          }
          ?>
            <div class="col-12 float-left text-center foto-policia-militar">
              <p><b>Policia Militar: Foto 1</b></p>
              <img 
                src="Docs/<?php echo "$PastaFotoPoliciaMilitar1/$ArquivoFotoPoliciaMilitar1" ?>" 
                alt="<?php echo $ArquivoFotoPoliciaMilitar1 ?>" 
                class="img-fluid"
                data-toggle="modal"
                data-target="#FotoPoliciaMilitar1"
              >
            </div>
          <?php
        }
      }else{
        //PROD
        "<br><pre>" . 
        $QueryBuscarFotoPoliciaMilitar1 = "
          SELECT * FROM tb_fotos
          WHERE id_foto = '$FotoPoliciaMilitar1'
        ";
        "</pre>";
        $ExeQrBuscarFotoPoliciaMilitar1 = mysqli_query($connection, $QueryBuscarFotoPoliciaMilitar1);
        $RowQrBuscarFotoPoliciaMilitar1 = mysqli_num_rows($ExeQrBuscarFotoPoliciaMilitar1);
        if( $RowQrBuscarFotoPoliciaMilitar1 = 1 ){
          while( $ReturnFotoPoliciaMilitar1 = mysqli_fetch_assoc($ExeQrBuscarFotoPoliciaMilitar1) ){
            $PastaFotoPoliciaMilitar1 = $ReturnFotoPoliciaMilitar1['pasta_foto'];
            $ArquivoFotoPoliciaMilitar1 = $ReturnFotoPoliciaMilitar1['nome_foto'];
          }
          ?>
            <div class="col-12 float-left text-center foto-policia-militar">
              <p><b>Policia Militar: Foto 1</b></p>
              <img 
                src="Docs/<?php echo "$PastaFotoPoliciaMilitar1/$ArquivoFotoPoliciaMilitar1" ?>" 
                alt="<?php echo $ArquivoFotoPoliciaMilitar1 ?>" 
                class="img-fluid"
                data-toggle="modal"
                data-target="#FotoPoliciaMilitar1"
              >
            </div>
          <?php
        }
      }
    }



    if( $FotoPoliciaMilitar2 != 0 ){
      if( $SysMode ==  1 ){
        //DEV
        echo "<br><pre>" . 
        $QueryBuscarFotoPoliciaMilitar2 = "
          SELECT * FROM tb_fotos
          WHERE id_foto = '$FotoPoliciaMilitar2'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoPoliciaMilitar2 = mysqli_query($connection, $QueryBuscarFotoPoliciaMilitar2);
        $RowQrBuscarFotoPoliciaMilitar2 = mysqli_num_rows($ExeQrBuscarFotoPoliciaMilitar2);
        if( $RowQrBuscarFotoPoliciaMilitar2 = 1 ){
          while( $ReturnFotoPoliciaMilitar2 = mysqli_fetch_assoc($ExeQrBuscarFotoPoliciaMilitar2) ){
            $PastaFotoPoliciaMilitar2 = $ReturnFotoPoliciaMilitar2['pasta_foto'];
            $ArquivoFotoPoliciaMilitar2 = $ReturnFotoPoliciaMilitar2['nome_foto'];
          }
          ?>
            <div class="col-12 float-left text-center foto-policia-militar">
              <p><b>Policia Militar: Foto 2</b></p>
              <img 
                src="Docs/<?php echo "$PastaFotoPoliciaMilitar2/$ArquivoFotoPoliciaMilitar2" ?>" 
                alt="<?php echo $ArquivoFotoPoliciaMilitar2 ?>" 
                class="img-fluid"
                data-toggle="modal"
                data-target="#FotoPoliciaMilitar2"
              >
            </div>
          <?php
        }
      }else{
        //PROD
        "<br><pre>" . 
        $QueryBuscarFotoPoliciaMilitar2 = "
          SELECT * FROM tb_fotos
          WHERE id_foto = '$FotoPoliciaMilitar2'
        ";
        "</pre>";
        $ExeQrBuscarFotoPoliciaMilitar2 = mysqli_query($connection, $QueryBuscarFotoPoliciaMilitar2);
        $RowQrBuscarFotoPoliciaMilitar2 = mysqli_num_rows($ExeQrBuscarFotoPoliciaMilitar2);
        if( $RowQrBuscarFotoPoliciaMilitar2 = 1 ){
          while( $ReturnFotoPoliciaMilitar2 = mysqli_fetch_assoc($ExeQrBuscarFotoPoliciaMilitar2) ){
            $PastaFotoPoliciaMilitar2 = $ReturnFotoPoliciaMilitar2['pasta_foto'];
            $ArquivoFotoPoliciaMilitar2 = $ReturnFotoPoliciaMilitar2['nome_foto'];
          }
          ?>
            <div class="col-12 float-left text-center foto-policia-militar">
              <p><b>Policia Militar: Foto 2</b></p>
              <img 
                src="Docs/<?php echo "$PastaFotoPoliciaMilitar2/$ArquivoFotoPoliciaMilitar2" ?>" 
                alt="<?php echo $ArquivoFotoPoliciaMilitar2 ?>" 
                class="img-fluid"
                data-toggle="modal"
                data-target="#FotoPoliciaMilitar2"
              >
            </div>
          <?php
        }
      }
    }



    if( $FotoPoliciaMilitar3 != 0 ){
      if( $SysMode ==  1 ){
        //DEV
        echo "<br><pre>" . 
        $QueryBuscarFotoPoliciaMilitar3 = "
          SELECT * FROM tb_fotos
          WHERE id_foto = '$FotoPoliciaMilitar3'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoPoliciaMilitar3 = mysqli_query($connection, $QueryBuscarFotoPoliciaMilitar3);
        $RowQrBuscarFotoPoliciaMilitar3 = mysqli_num_rows($ExeQrBuscarFotoPoliciaMilitar3);
        if( $RowQrBuscarFotoPoliciaMilitar3 = 1 ){
          while( $ReturnFotoPoliciaMilitar3 = mysqli_fetch_assoc($ExeQrBuscarFotoPoliciaMilitar3) ){
            $PastaFotoPoliciaMilitar3 = $ReturnFotoPoliciaMilitar3['pasta_foto'];
            $ArquivoFotoPoliciaMilitar3 = $ReturnFotoPoliciaMilitar3['nome_foto'];
          }
          ?>
            <div class="col-12 float-left text-center foto-policia-militar">
              <p><b>Policia Militar: Foto 3</b></p>
              <img 
                src="Docs/<?php echo "$PastaFotoPoliciaMilitar3/$ArquivoFotoPoliciaMilitar3" ?>" 
                alt="<?php echo $ArquivoFotoPoliciaMilitar3 ?>" 
                class="img-fluid"
                data-toggle="modal"
                data-target="#FotoPoliciaMilitar3"
              >
            </div>
          <?php
        }
      }else{
        //PROD
        "<br><pre>" . 
        $QueryBuscarFotoPoliciaMilitar3 = "
          SELECT * FROM tb_fotos
          WHERE id_foto = '$FotoPoliciaMilitar3'
        ";
        "</pre>";
        $ExeQrBuscarFotoPoliciaMilitar3 = mysqli_query($connection, $QueryBuscarFotoPoliciaMilitar3);
        $RowQrBuscarFotoPoliciaMilitar3 = mysqli_num_rows($ExeQrBuscarFotoPoliciaMilitar3);
        if( $RowQrBuscarFotoPoliciaMilitar3 = 1 ){
          while( $ReturnFotoPoliciaMilitar3 = mysqli_fetch_assoc($ExeQrBuscarFotoPoliciaMilitar3) ){
            $PastaFotoPoliciaMilitar3 = $ReturnFotoPoliciaMilitar3['pasta_foto'];
            $ArquivoFotoPoliciaMilitar3 = $ReturnFotoPoliciaMilitar3['nome_foto'];
          }
          ?>
            <div class="col-12 float-left text-center foto-policia-militar">
              <p><b>Policia Militar: Foto 3</b></p>
              <img 
                src="Docs/<?php echo "$PastaFotoPoliciaMilitar3/$ArquivoFotoPoliciaMilitar3" ?>" 
                alt="<?php echo $ArquivoFotoPoliciaMilitar3 ?>" 
                class="img-fluid"
                data-toggle="modal"
                data-target="#FotoPoliciaMilitar3"
              >
            </div>
          <?php
        }
      }
    }


    if( $FotoPoliciaMilitar4 != 0 ){
      if( $SysMode ==  1 ){
        //DEV
        echo "<br><pre>" . 
        $QueryBuscarFotoPoliciaMilitar4 = "
          SELECT * FROM tb_fotos
          WHERE id_foto = '$FotoPoliciaMilitar4'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoPoliciaMilitar4 = mysqli_query($connection, $QueryBuscarFotoPoliciaMilitar4);
        $RowQrBuscarFotoPoliciaMilitar4 = mysqli_num_rows($ExeQrBuscarFotoPoliciaMilitar4);
        if( $RowQrBuscarFotoPoliciaMilitar4 = 1 ){
          while( $ReturnFotoPoliciaMilitar4 = mysqli_fetch_assoc($ExeQrBuscarFotoPoliciaMilitar4) ){
            $PastaFotoPoliciaMilitar4 = $ReturnFotoPoliciaMilitar4['pasta_foto'];
            $ArquivoFotoPoliciaMilitar4 = $ReturnFotoPoliciaMilitar4['nome_foto'];
          }
          ?>
            <div class="col-12 float-left text-center foto-policia-militar">
              <p><b>Policia Militar: Foto 4</b></p>
              <img 
                src="Docs/<?php echo "$PastaFotoPoliciaMilitar4/$ArquivoFotoPoliciaMilitar4" ?>" 
                alt="<?php echo $ArquivoFotoPoliciaMilitar4 ?>" 
                class="img-fluid"
                data-toggle="modal"
                data-target="#FotoPoliciaMilitar4"
              >
            </div>
          <?php
        }
      }else{
        //PROD
        "<br><pre>" . 
        $QueryBuscarFotoPoliciaMilitar4 = "
          SELECT * FROM tb_fotos
          WHERE id_foto = '$FotoPoliciaMilitar4'
        ";
        "</pre>";
        $ExeQrBuscarFotoPoliciaMilitar4 = mysqli_query($connection, $QueryBuscarFotoPoliciaMilitar4);
        $RowQrBuscarFotoPoliciaMilitar4 = mysqli_num_rows($ExeQrBuscarFotoPoliciaMilitar4);
        if( $RowQrBuscarFotoPoliciaMilitar4 = 1 ){
          while( $ReturnFotoPoliciaMilitar4 = mysqli_fetch_assoc($ExeQrBuscarFotoPoliciaMilitar4) ){
            $PastaFotoPoliciaMilitar4 = $ReturnFotoPoliciaMilitar4['pasta_foto'];
            $ArquivoFotoPoliciaMilitar4 = $ReturnFotoPoliciaMilitar4['nome_foto'];
          }
          ?>
            <div class="col-12 float-left text-center foto-policia-militar">
              <p><b>Policia Militar: Foto 4</b></p>
              <img 
                src="Docs/<?php echo "$PastaFotoPoliciaMilitar4/$ArquivoFotoPoliciaMilitar4" ?>" 
                alt="<?php echo $ArquivoFotoPoliciaMilitar4 ?>" 
                class="img-fluid"
                data-toggle="modal"
                data-target="#FotoPoliciaMilitar4"
              >
            </div>
          <?php
        }
      }
    }



    if( $FotoPoliciaMilitar5 != 0 ){
      if( $SysMode ==  1 ){
        //DEV
        echo "<br><pre>" . 
        $QueryBuscarFotoPoliciaMilitar5 = "
          SELECT * FROM tb_fotos
          WHERE id_foto = '$FotoPoliciaMilitar5'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoPoliciaMilitar5 = mysqli_query($connection, $QueryBuscarFotoPoliciaMilitar5);
        $RowQrBuscarFotoPoliciaMilitar5 = mysqli_num_rows($ExeQrBuscarFotoPoliciaMilitar5);
        if( $RowQrBuscarFotoPoliciaMilitar5 = 1 ){
          while( $ReturnFotoPoliciaMilitar5 = mysqli_fetch_assoc($ExeQrBuscarFotoPoliciaMilitar5) ){
            $PastaFotoPoliciaMilitar5 = $ReturnFotoPoliciaMilitar5['pasta_foto'];
            $ArquivoFotoPoliciaMilitar5 = $ReturnFotoPoliciaMilitar5['nome_foto'];
          }
          ?>
            <div class="col-12 float-left text-center foto-policia-militar">
              <p><b>Policia Militar: Foto 5</b></p>
              <img 
                src="Docs/<?php echo "$PastaFotoPoliciaMilitar5/$ArquivoFotoPoliciaMilitar5" ?>" 
                alt="<?php echo $ArquivoFotoPoliciaMilitar5 ?>" 
                class="img-fluid"
                data-toggle="modal"
                data-target="#FotoPoliciaMilitar5"
              >
            </div>
          <?php
        }
      }else{
        //PROD
        "<br><pre>" . 
        $QueryBuscarFotoPoliciaMilitar5 = "
          SELECT * FROM tb_fotos
          WHERE id_foto = '$FotoPoliciaMilitar5'
        ";
        "</pre>";
        $ExeQrBuscarFotoPoliciaMilitar5 = mysqli_query($connection, $QueryBuscarFotoPoliciaMilitar5);
        $RowQrBuscarFotoPoliciaMilitar5 = mysqli_num_rows($ExeQrBuscarFotoPoliciaMilitar5);
        if( $RowQrBuscarFotoPoliciaMilitar5 = 1 ){
          while( $ReturnFotoPoliciaMilitar5 = mysqli_fetch_assoc($ExeQrBuscarFotoPoliciaMilitar5) ){
            $PastaFotoPoliciaMilitar5 = $ReturnFotoPoliciaMilitar5['pasta_foto'];
            $ArquivoFotoPoliciaMilitar5 = $ReturnFotoPoliciaMilitar5['nome_foto'];
          }
          ?>
            <div class="col-12 float-left text-center foto-policia-militar">
              <p><b>Policia Militar: Foto 5</b></p>
              <img 
                src="Docs/<?php echo "$PastaFotoPoliciaMilitar5/$ArquivoFotoPoliciaMilitar5" ?>" 
                alt="<?php echo $ArquivoFotoPoliciaMilitar5 ?>" 
                class="img-fluid"
                data-toggle="modal"
                data-target="#FotoPoliciaMilitar5"
              >
            </div>
          <?php
        }
      }
    }



    if( $FotoPoliciaMilitar6 != 0 ){
      if( $SysMode ==  1 ){
        //DEV
        echo "<br><pre>" . 
        $QueryBuscarFotoPoliciaMilitar6 = "
          SELECT * FROM tb_fotos
          WHERE id_foto = '$FotoPoliciaMilitar6'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoPoliciaMilitar6 = mysqli_query($connection, $QueryBuscarFotoPoliciaMilitar6);
        $RowQrBuscarFotoPoliciaMilitar6 = mysqli_num_rows($ExeQrBuscarFotoPoliciaMilitar6);
        if( $RowQrBuscarFotoPoliciaMilitar6 = 1 ){
          while( $ReturnFotoPoliciaMilitar6 = mysqli_fetch_assoc($ExeQrBuscarFotoPoliciaMilitar6) ){
            $PastaFotoPoliciaMilitar6 = $ReturnFotoPoliciaMilitar6['pasta_foto'];
            $ArquivoFotoPoliciaMilitar6 = $ReturnFotoPoliciaMilitar6['nome_foto'];
          }
          ?>
            <div class="col-12 float-left text-center foto-policia-militar">
              <p><b>Policia Militar: Foto 6</b></p>
              <img 
                src="Docs/<?php echo "$PastaFotoPoliciaMilitar6/$ArquivoFotoPoliciaMilitar6" ?>" 
                alt="<?php echo $ArquivoFotoPoliciaMilitar6 ?>" 
                class="img-fluid"
                data-toggle="modal"
                data-target="#FotoPoliciaMilitar6"
              >
            </div>
          <?php
        }
      }else{
        //PROD
        "<br><pre>" . 
        $QueryBuscarFotoPoliciaMilitar6 = "
          SELECT * FROM tb_fotos
          WHERE id_foto = '$FotoPoliciaMilitar6'
        ";
        "</pre>";
        $ExeQrBuscarFotoPoliciaMilitar6 = mysqli_query($connection, $QueryBuscarFotoPoliciaMilitar6);
        $RowQrBuscarFotoPoliciaMilitar6 = mysqli_num_rows($ExeQrBuscarFotoPoliciaMilitar6);
        if( $RowQrBuscarFotoPoliciaMilitar6 = 1 ){
          while( $ReturnFotoPoliciaMilitar6 = mysqli_fetch_assoc($ExeQrBuscarFotoPoliciaMilitar6) ){
            $PastaFotoPoliciaMilitar6 = $ReturnFotoPoliciaMilitar6['pasta_foto'];
            $ArquivoFotoPoliciaMilitar6 = $ReturnFotoPoliciaMilitar6['nome_foto'];
          }
          ?>
            <div class="col-12 float-left text-center foto-policia-militar">
              <p><b>Policia Militar: Foto 6</b></p>
              <img 
                src="Docs/<?php echo "$PastaFotoPoliciaMilitar6/$ArquivoFotoPoliciaMilitar6" ?>" 
                alt="<?php echo $ArquivoFotoPoliciaMilitar6 ?>" 
                class="img-fluid"
                data-toggle="modal"
                data-target="#FotoPoliciaMilitar6"
              >
            </div>
          <?php
        }
      }
    }
  ?>
</div>