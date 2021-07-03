<?php
  //Query-Boletim-Ocorrencia
  include 'Querys/Boletim-Ocorrencia.php';
?>
<h4 class="rotulos">Procedimentos Legais: Boletim de Ocorrência</h4>
<h5 class="col-12">Resultado após pesquisa: <?php echo $IrreguladiradeBoletim ?></h5>

<div class="row space-2" id="Fotos-Boletim-Ocorrencia">
  <?php
    if( $FotoBoletim1 != 0 ){
      //FotoBoletim1
      if( $SysMode == 1 ){
        //DEV
        echo "<br><pre>" . 
        $QueryBuscarFotoBoletim1 = "
          SELECT * FROM tb_fotos
          WHERE id_foto = '$FotoBoletim1'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoBoletim1 = mysqli_query($connection, $QueryBuscarFotoBoletim1);
        $RowQrBuscarFotoBoletim1 = mysqli_num_rows($ExeQrBuscarFotoBoletim1);
        if( $RowQrBuscarFotoBoletim1 = 1 ){
          while( $ReturnFotoBoletim1 = mysqli_fetch_assoc($ExeQrBuscarFotoBoletim1) ){
            $PastaFotoBoletim1 = $ReturnFotoBoletim1['pasta_foto'];
            $ArquivoFotoBoletim1 = $ReturnFotoBoletim1['nome_foto'];
          }
          ?>
            <div class="col-12 float-left text-center foto-boletim">
              <p><b>Boletim de Ocorrência: Foto 1</b></p>
              <img 
                src="Docs/<?php echo "$PastaFotoBoletim1/$ArquivoFotoBoletim1" ?>" 
                alt="<?php echo $ArquivoFotoBoletim1?>" 
                class="img-fluid"
                data-toggle="modal"
                data-target="#FotoBoletim1"
              >
            </div>
          <?php
        }
      }else{
        //PROD
        "<br><pre>" . 
        $QueryBuscarFotoBoletim1 = "
          SELECT * FROM tb_fotos
          WHERE id_foto = '$FotoBoletim1'
        ";
        "</pre>";
        $ExeQrBuscarFotoBoletim1 = mysqli_query($connection, $QueryBuscarFotoBoletim1);
        $RowQrBuscarFotoBoletim1 = mysqli_num_rows($ExeQrBuscarFotoBoletim1);
        if( $RowQrBuscarFotoBoletim1 = 1 ){
          while( $ReturnFotoBoletim1 = mysqli_fetch_assoc($ExeQrBuscarFotoBoletim1) ){
            $PastaFotoBoletim1 = $ReturnFotoBoletim1['pasta_foto'];
            $ArquivoFotoBoletim1 = $ReturnFotoBoletim1['nome_foto'];
          }
          ?>
            <div class="col-12 float-left text-center foto-boletim">
              <p><b>Boletim de Ocorrência: Foto 1</b></p>
              <img 
                src="Docs/<?php echo "$PastaFotoBoletim1/$ArquivoFotoBoletim1" ?>" 
                alt="<?php echo $ArquivoFotoBoletim1?>" 
                class="img-fluid"
                data-toggle="modal"
                data-target="#FotoBoletim1"
              >
            </div>
          <?php
        }
      }
    }


    if( $FotoBoletim2 != 0 ){
      //FotoBoletim2
      if( $SysMode == 1 ){
        //DEV
        echo "<br><pre>" . 
        $QueryBuscarFotoBoletim2 = "
          SELECT * FROM tb_fotos
          WHERE id_foto = '$FotoBoletim2'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoBoletim2 = mysqli_query($connection, $QueryBuscarFotoBoletim2);
        $RowQrBuscarFotoBoletim2 = mysqli_num_rows($ExeQrBuscarFotoBoletim2);
        if( $RowQrBuscarFotoBoletim2 = 1 ){
          while( $ReturnFotoBoletim2 = mysqli_fetch_assoc($ExeQrBuscarFotoBoletim2) ){
            $PastaFotoBoletim2 = $ReturnFotoBoletim2['pasta_foto'];
            $ArquivoFotoBoletim2 = $ReturnFotoBoletim2['nome_foto'];
          }
          ?>
            <div class="col-12 float-left text-center foto-boletim">
              <p><b>Boletim de Ocorrência: Foto 2</b></p>
              <img 
                src="Docs/<?php echo "$PastaFotoBoletim2/$ArquivoFotoBoletim2" ?>" 
                alt="<?php echo $ArquivoFotoBoletim2?>" 
                class="img-fluid"
                data-toggle="modal"
                data-target="#FotoBoletim2"
              >
            </div>
          <?php
        }
      }else{
        //PROD
        "<br><pre>" . 
        $QueryBuscarFotoBoletim2 = "
          SELECT * FROM tb_fotos
          WHERE id_foto = '$FotoBoletim2'
        ";
        "</pre>";
        $ExeQrBuscarFotoBoletim2 = mysqli_query($connection, $QueryBuscarFotoBoletim2);
        $RowQrBuscarFotoBoletim2 = mysqli_num_rows($ExeQrBuscarFotoBoletim2);
        if( $RowQrBuscarFotoBoletim2 = 1 ){
          while( $ReturnFotoBoletim2 = mysqli_fetch_assoc($ExeQrBuscarFotoBoletim2) ){
            $PastaFotoBoletim2 = $ReturnFotoBoletim2['pasta_foto'];
            $ArquivoFotoBoletim2 = $ReturnFotoBoletim2['nome_foto'];
          }
          ?>
            <div class="col-12 float-left text-center foto-boletim">
              <p><b>Boletim de Ocorrência: Foto 2</b></p>
              <img 
                src="Docs/<?php echo "$PastaFotoBoletim2/$ArquivoFotoBoletim2" ?>" 
                alt="<?php echo $ArquivoFotoBoletim2?>" 
                class="img-fluid"
                data-toggle="modal"
                data-target="#FotoBoletim2"
              >
            </div>
          <?php
        }
      }
    }



    if( $FotoBoletim3 != 0 ){
      //FotoBoletim3
      if( $SysMode == 1 ){
        //DEV
        echo "<br><pre>" . 
        $QueryBuscarFotoBoletim3 = "
          SELECT * FROM tb_fotos
          WHERE id_foto = '$FotoBoletim3'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoBoletim3 = mysqli_query($connection, $QueryBuscarFotoBoletim3);
        $RowQrBuscarFotoBoletim3 = mysqli_num_rows($ExeQrBuscarFotoBoletim3);
        if( $RowQrBuscarFotoBoletim3 = 1 ){
          while( $ReturnFotoBoletim3 = mysqli_fetch_assoc($ExeQrBuscarFotoBoletim3) ){
            $PastaFotoBoletim3 = $ReturnFotoBoletim3['pasta_foto'];
            $ArquivoFotoBoletim3 = $ReturnFotoBoletim3['nome_foto'];
          }
          ?>
            <div class="col-12 float-left text-center foto-boletim">
              <p><b>Boletim de Ocorrência: Foto 3</b></p>
              <img 
                src="Docs/<?php echo "$PastaFotoBoletim3/$ArquivoFotoBoletim3" ?>" 
                alt="<?php echo $ArquivoFotoBoletim3?>" 
                class="img-fluid"
                data-toggle="modal"
                data-target="#FotoBoletim3"
              >
            </div>
          <?php
        }
      }else{
        //PROD
        "<br><pre>" . 
        $QueryBuscarFotoBoletim3 = "
          SELECT * FROM tb_fotos
          WHERE id_foto = '$FotoBoletim3'
        ";
        "</pre>";
        $ExeQrBuscarFotoBoletim3 = mysqli_query($connection, $QueryBuscarFotoBoletim3);
        $RowQrBuscarFotoBoletim3 = mysqli_num_rows($ExeQrBuscarFotoBoletim3);
        if( $RowQrBuscarFotoBoletim3 = 1 ){
          while( $ReturnFotoBoletim3 = mysqli_fetch_assoc($ExeQrBuscarFotoBoletim3) ){
            $PastaFotoBoletim3 = $ReturnFotoBoletim3['pasta_foto'];
            $ArquivoFotoBoletim3 = $ReturnFotoBoletim3['nome_foto'];
          }
          ?>
            <div class="col-12 float-left text-center foto-boletim">
              <p><b>Boletim de Ocorrência: Foto 3</b></p>
              <img 
                src="Docs/<?php echo "$PastaFotoBoletim3/$ArquivoFotoBoletim3" ?>" 
                alt="<?php echo $ArquivoFotoBoletim3?>" 
                class="img-fluid"
                data-toggle="modal"
                data-target="#FotoBoletim3"
              >
            </div>
          <?php
        }
      }
    }


    if( $FotoBoletim4 != 0 ){
      //FotoBoletim4
      if( $SysMode == 1 ){
        //DEV
        echo "<br><pre>" . 
        $QueryBuscarFotoBoletim4 = "
          SELECT * FROM tb_fotos
          WHERE id_foto = '$FotoBoletim4'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoBoletim4 = mysqli_query($connection, $QueryBuscarFotoBoletim4);
        $RowQrBuscarFotoBoletim4 = mysqli_num_rows($ExeQrBuscarFotoBoletim4);
        if( $RowQrBuscarFotoBoletim4 = 1 ){
          while( $ReturnFotoBoletim4 = mysqli_fetch_assoc($ExeQrBuscarFotoBoletim4) ){
            $PastaFotoBoletim4 = $ReturnFotoBoletim4['pasta_foto'];
            $ArquivoFotoBoletim4 = $ReturnFotoBoletim4['nome_foto'];
          }
          ?>
            <div class="col-12 float-left text-center foto-boletim">
              <p><b>Boletim de Ocorrência: Foto 4</b></p>
              <img 
                src="Docs/<?php echo "$PastaFotoBoletim4/$ArquivoFotoBoletim4" ?>" 
                alt="<?php echo $ArquivoFotoBoletim4?>" 
                class="img-fluid"
                data-toggle="modal"
                data-target="#FotoBoletim4"
              >
            </div>
          <?php
        }
      }else{
        //PROD
        "<br><pre>" . 
        $QueryBuscarFotoBoletim4 = "
          SELECT * FROM tb_fotos
          WHERE id_foto = '$FotoBoletim4'
        ";
        "</pre>";
        $ExeQrBuscarFotoBoletim4 = mysqli_query($connection, $QueryBuscarFotoBoletim4);
        $RowQrBuscarFotoBoletim4 = mysqli_num_rows($ExeQrBuscarFotoBoletim4);
        if( $RowQrBuscarFotoBoletim4 = 1 ){
          while( $ReturnFotoBoletim4 = mysqli_fetch_assoc($ExeQrBuscarFotoBoletim4) ){
            $PastaFotoBoletim4 = $ReturnFotoBoletim4['pasta_foto'];
            $ArquivoFotoBoletim4 = $ReturnFotoBoletim4['nome_foto'];
          }
          ?>
            <div class="col-12 float-left text-center foto-boletim">
              <p><b>Boletim de Ocorrência: Foto 4</b></p>
              <img 
                src="Docs/<?php echo "$PastaFotoBoletim4/$ArquivoFotoBoletim4" ?>" 
                alt="<?php echo $ArquivoFotoBoletim4?>" 
                class="img-fluid"
                data-toggle="modal"
                data-target="#FotoBoletim4"
              >
            </div>
          <?php
        }
      }
    }



    if( $FotoBoletim5 != 0 ){
      //FotoBoletim5
      if( $SysMode == 1 ){
        //DEV
        echo "<br><pre>" . 
        $QueryBuscarFotoBoletim5 = "
          SELECT * FROM tb_fotos
          WHERE id_foto = '$FotoBoletim5'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoBoletim5 = mysqli_query($connection, $QueryBuscarFotoBoletim5);
        $RowQrBuscarFotoBoletim5 = mysqli_num_rows($ExeQrBuscarFotoBoletim5);
        if( $RowQrBuscarFotoBoletim5 = 1 ){
          while( $ReturnFotoBoletim5 = mysqli_fetch_assoc($ExeQrBuscarFotoBoletim5) ){
            $PastaFotoBoletim5 = $ReturnFotoBoletim5['pasta_foto'];
            $ArquivoFotoBoletim5 = $ReturnFotoBoletim5['nome_foto'];
          }
          ?>
            <div class="col-12 float-left text-center foto-boletim">
              <p><b>Boletim de Ocorrência: Foto 5</b></p>
              <img 
                src="Docs/<?php echo "$PastaFotoBoletim5/$ArquivoFotoBoletim5" ?>" 
                alt="<?php echo $ArquivoFotoBoletim5?>" 
                class="img-fluid"
                data-toggle="modal"
                data-target="#FotoBoletim5"
              >
            </div>
          <?php
        }
      }else{
        //PROD
        "<br><pre>" . 
        $QueryBuscarFotoBoletim5 = "
          SELECT * FROM tb_fotos
          WHERE id_foto = '$FotoBoletim5'
        ";
        "</pre>";
        $ExeQrBuscarFotoBoletim5 = mysqli_query($connection, $QueryBuscarFotoBoletim5);
        $RowQrBuscarFotoBoletim5 = mysqli_num_rows($ExeQrBuscarFotoBoletim5);
        if( $RowQrBuscarFotoBoletim5 = 1 ){
          while( $ReturnFotoBoletim5 = mysqli_fetch_assoc($ExeQrBuscarFotoBoletim5) ){
            $PastaFotoBoletim5 = $ReturnFotoBoletim5['pasta_foto'];
            $ArquivoFotoBoletim5 = $ReturnFotoBoletim5['nome_foto'];
          }
          ?>
            <div class="col-12 float-left text-center foto-boletim">
              <p><b>Boletim de Ocorrência: Foto 5</b></p>
              <img 
                src="Docs/<?php echo "$PastaFotoBoletim5/$ArquivoFotoBoletim5" ?>" 
                alt="<?php echo $ArquivoFotoBoletim5?>" 
                class="img-fluid"
                data-toggle="modal"
                data-target="#FotoBoletim5"
              >
            </div>
          <?php
        }
      }
    }



    if( $FotoBoletim6 != 0 ){
      //FotoBoletim6
      if( $SysMode == 1 ){
        //DEV
        echo "<br><pre>" . 
        $QueryBuscarFotoBoletim6 = "
          SELECT * FROM tb_fotos
          WHERE id_foto = '$FotoBoletim6'
        ";
        echo "</pre>";
        $ExeQrBuscarFotoBoletim6 = mysqli_query($connection, $QueryBuscarFotoBoletim6);
        $RowQrBuscarFotoBoletim6 = mysqli_num_rows($ExeQrBuscarFotoBoletim6);
        if( $RowQrBuscarFotoBoletim6 = 1 ){
          while( $ReturnFotoBoletim6 = mysqli_fetch_assoc($ExeQrBuscarFotoBoletim6) ){
            $PastaFotoBoletim6 = $ReturnFotoBoletim6['pasta_foto'];
            $ArquivoFotoBoletim6 = $ReturnFotoBoletim6['nome_foto'];
          }
          ?>
            <div class="col-12 float-left text-center foto-boletim">
              <p><b>Boletim de Ocorrência: Foto 6</b></p>
              <img 
                src="Docs/<?php echo "$PastaFotoBoletim6/$ArquivoFotoBoletim6" ?>" 
                alt="<?php echo $ArquivoFotoBoletim6?>" 
                class="img-fluid"
                data-toggle="modal"
                data-target="#FotoBoletim6"
              >
            </div>
          <?php
        }
      }else{
        //PROD
        "<br><pre>" . 
        $QueryBuscarFotoBoletim6 = "
          SELECT * FROM tb_fotos
          WHERE id_foto = '$FotoBoletim6'
        ";
        "</pre>";
        $ExeQrBuscarFotoBoletim6 = mysqli_query($connection, $QueryBuscarFotoBoletim6);
        $RowQrBuscarFotoBoletim6 = mysqli_num_rows($ExeQrBuscarFotoBoletim6);
        if( $RowQrBuscarFotoBoletim6 = 1 ){
          while( $ReturnFotoBoletim6 = mysqli_fetch_assoc($ExeQrBuscarFotoBoletim6) ){
            $PastaFotoBoletim6 = $ReturnFotoBoletim6['pasta_foto'];
            $ArquivoFotoBoletim6 = $ReturnFotoBoletim6['nome_foto'];
          }
          ?>
            <div class="col-12 float-left text-center foto-boletim">
              <p><b>Boletim de Ocorrência: Foto 6</b></p>
              <img 
                src="Docs/<?php echo "$PastaFotoBoletim6/$ArquivoFotoBoletim6" ?>" 
                alt="<?php echo $ArquivoFotoBoletim6?>" 
                class="img-fluid"
                data-toggle="modal"
                data-target="#FotoBoletim6"
              >
            </div>
          <?php
        }
      }
    }
  ?>
</div>