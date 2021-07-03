<h4 class="col-12 rotulos float-left">Fotos das parcela: </h4>

<?php
  //Foto-Parcela1
  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>" . 
    $QueryBuscarFotoParcela1 = "
      SELECT * FROM tb_fotos
      WHERE id_foto = '$FotoParcela1'
    ";
    echo "</pre>";
    $ExeQrBuscarFotoParcela1 = mysqli_query($connection, $QueryBuscarFotoParcela1);
    $RowQrBuscarFotoParcela1 = mysqli_num_rows($ExeQrBuscarFotoParcela1);
    if( $RowQrBuscarFotoParcela1 = 1 ){
      while( $ReturnFotoParcela1 = mysqli_fetch_assoc($ExeQrBuscarFotoParcela1) ){
        $PastaFotoParcela1 = $ReturnFotoParcela1['pasta_foto'];
        $ArquivoFotoParcela1 = $ReturnFotoParcela1['nome_foto'];
      }
      ?>
        <div class="col-12 text-center float-left foto-parcela">
          <p><b>Parcelas: Foto 1</b></p>
          <img 
            src="Docs/<?php echo "$PastaFotoParcela1/$ArquivoFotoParcela1"?>" 
            alt="<?php echo $ArquivoFotoParcela1?>" 
            class="img-fluid"
            data-toggle="modal"
            data-target="#Foto-Parcela1"
          >
        </div>
      <?php
    }
  }else{

    //PROD
    "<br><pre>" . 
    $QueryBuscarFotoParcela1 = "
      SELECT * FROM tb_fotos
      WHERE id_foto = '$FotoParcela1'
    ";
    "</pre>";
    $ExeQrBuscarFotoParcela1 = mysqli_query($connection, $QueryBuscarFotoParcela1);
    $RowQrBuscarFotoParcela1 = mysqli_num_rows($ExeQrBuscarFotoParcela1);
    if( $RowQrBuscarFotoParcela1 = 1 ){
      while( $ReturnFotoParcela1 = mysqli_fetch_assoc($ExeQrBuscarFotoParcela1) ){
        $PastaFotoParcela1 = $ReturnFotoParcela1['pasta_foto'];
        $ArquivoFotoParcela1 = $ReturnFotoParcela1['nome_foto'];
      }
      ?>
        <div class="col-12 text-center float-left foto-parcela">
          <p><b>Parcela: Foto 1</b></p>
          <img 
            src="Docs/<?php echo "$PastaFotoParcela1/$ArquivoFotoParcela1"?>" 
            alt="<?php echo $ArquivoFotoParcela1?>" 
            class="img-fluid"
            data-toggle="modal"
            data-target="#Foto-Parcela1"
          >
        </div>
      <?php
    }
  }




  //Foto-Parcela2
  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>" . 
    $QueryBuscarFotoParcela2 = "
      SELECT * FROM tb_fotos
      WHERE id_foto = '$FotoParcela2'
    ";
    echo "</pre>";
    $ExeQrBuscarFotoParcela2 = mysqli_query($connection, $QueryBuscarFotoParcela2);
    $RowQrBuscarFotoParcela2 = mysqli_num_rows($ExeQrBuscarFotoParcela2);
    if( $RowQrBuscarFotoParcela2 = 1 ){
      while( $ReturnFotoParcela2 = mysqli_fetch_assoc($ExeQrBuscarFotoParcela2) ){
        $PastaFotoParcela2 = $ReturnFotoParcela2['pasta_foto'];
        $ArquivoFotoParcela2 = $ReturnFotoParcela2['nome_foto'];
      }
      ?>
        <div class="col-12 text-center float-left foto-parcela">
          <p><b>Parcelas: Foto 2</b></p>
          <img 
            src="Docs/<?php echo "$PastaFotoParcela2/$ArquivoFotoParcela2"?>" 
            alt="<?php echo $ArquivoFotoParcela2?>" 
            class="img-fluid"
            data-toggle="modal"
            data-target="#Foto-Parcela2"
          >
        </div>
      <?php
    }
  }else{

    //PROD
    "<br><pre>" . 
    $QueryBuscarFotoParcela2 = "
      SELECT * FROM tb_fotos
      WHERE id_foto = '$FotoParcela2'
    ";
    "</pre>";
    $ExeQrBuscarFotoParcela2 = mysqli_query($connection, $QueryBuscarFotoParcela2);
    $RowQrBuscarFotoParcela2 = mysqli_num_rows($ExeQrBuscarFotoParcela2);
    if( $RowQrBuscarFotoParcela2 = 1 ){
      while( $ReturnFotoParcela2 = mysqli_fetch_assoc($ExeQrBuscarFotoParcela2) ){
        $PastaFotoParcela2 = $ReturnFotoParcela2['pasta_foto'];
        $ArquivoFotoParcela2 = $ReturnFotoParcela2['nome_foto'];
      }
      ?>
        <div class="col-12 text-center float-left foto-parcela">
          <p><b>Parcela: Foto 2</b></p>
          <img 
            src="Docs/<?php echo "$PastaFotoParcela2/$ArquivoFotoParcela2"?>" 
            alt="<?php echo $ArquivoFotoParcela2?>" 
            class="img-fluid"
            data-toggle="modal"
            data-target="#Foto-Parcela2"
          >
        </div>
      <?php
    }
  }



  //Foto-Parcela3
  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>" . 
    $QueryBuscarFotoParcela3 = "
      SELECT * FROM tb_fotos
      WHERE id_foto = '$FotoParcela3'
    ";
    echo "</pre>";
    $ExeQrBuscarFotoParcela3 = mysqli_query($connection, $QueryBuscarFotoParcela3);
    $RowQrBuscarFotoParcela3 = mysqli_num_rows($ExeQrBuscarFotoParcela3);
    if( $RowQrBuscarFotoParcela3 = 1 ){
      while( $ReturnFotoParcela3 = mysqli_fetch_assoc($ExeQrBuscarFotoParcela3) ){
        $PastaFotoParcela3 = $ReturnFotoParcela3['pasta_foto'];
        $ArquivoFotoParcela3 = $ReturnFotoParcela3['nome_foto'];
      }
      ?>
        <div class="col-12 text-center float-left foto-parcela">
          <p><b>Parcelas: Foto 3</b></p>
          <img 
            src="Docs/<?php echo "$PastaFotoParcela3/$ArquivoFotoParcela3"?>" 
            alt="<?php echo $ArquivoFotoParcela3?>" 
            class="img-fluid"
            data-toggle="modal"
            data-target="#Foto-Parcela3"
          >
        </div>
      <?php
    }
  }else{

    //PROD
    "<br><pre>" . 
    $QueryBuscarFotoParcela3 = "
      SELECT * FROM tb_fotos
      WHERE id_foto = '$FotoParcela3'
    ";
    "</pre>";
    $ExeQrBuscarFotoParcela3 = mysqli_query($connection, $QueryBuscarFotoParcela3);
    $RowQrBuscarFotoParcela3 = mysqli_num_rows($ExeQrBuscarFotoParcela3);
    if( $RowQrBuscarFotoParcela3 = 1 ){
      while( $ReturnFotoParcela3 = mysqli_fetch_assoc($ExeQrBuscarFotoParcela3) ){
        $PastaFotoParcela3 = $ReturnFotoParcela3['pasta_foto'];
        $ArquivoFotoParcela3 = $ReturnFotoParcela3['nome_foto'];
      }
      ?>
        <div class="col-12 text-center float-left foto-parcela">
          <p><b>Parcela: Foto 3</b></p>
          <img 
            src="Docs/<?php echo "$PastaFotoParcela3/$ArquivoFotoParcela3"?>" 
            alt="<?php echo $ArquivoFotoParcela3?>" 
            class="img-fluid"
            data-toggle="modal"
            data-target="#Foto-Parcela3"
          >
        </div>
      <?php
    }
  }



  //Foto-Parcela4
  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>" . 
    $QueryBuscarFotoParcela4 = "
      SELECT * FROM tb_fotos
      WHERE id_foto = '$FotoParcela4'
    ";
    echo "</pre>";
    $ExeQrBuscarFotoParcela4 = mysqli_query($connection, $QueryBuscarFotoParcela4);
    $RowQrBuscarFotoParcela4 = mysqli_num_rows($ExeQrBuscarFotoParcela4);
    if( $RowQrBuscarFotoParcela4 = 1 ){
      while( $ReturnFotoParcela4 = mysqli_fetch_assoc($ExeQrBuscarFotoParcela4) ){
        $PastaFotoParcela4 = $ReturnFotoParcela4['pasta_foto'];
        $ArquivoFotoParcela4 = $ReturnFotoParcela4['nome_foto'];
      }
      ?>
        <div class="col-12 text-center float-left foto-parcela">
          <p><b>Parcelas: Foto 4</b></p>
          <img 
            src="Docs/<?php echo "$PastaFotoParcela4/$ArquivoFotoParcela4"?>" 
            alt="<?php echo $ArquivoFotoParcela4?>" 
            class="img-fluid"
            data-toggle="modal"
            data-target="#Foto-Parcela4"
          >
        </div>
      <?php
    }
  }else{

    //PROD
    "<br><pre>" . 
    $QueryBuscarFotoParcela4 = "
      SELECT * FROM tb_fotos
      WHERE id_foto = '$FotoParcela4'
    ";
    "</pre>";
    $ExeQrBuscarFotoParcela4 = mysqli_query($connection, $QueryBuscarFotoParcela4);
    $RowQrBuscarFotoParcela4 = mysqli_num_rows($ExeQrBuscarFotoParcela4);
    if( $RowQrBuscarFotoParcela4 = 1 ){
      while( $ReturnFotoParcela4 = mysqli_fetch_assoc($ExeQrBuscarFotoParcela4) ){
        $PastaFotoParcela4 = $ReturnFotoParcela4['pasta_foto'];
        $ArquivoFotoParcela4 = $ReturnFotoParcela4['nome_foto'];
      }
      ?>
        <div class="col-12 text-center float-left foto-parcela">
          <p><b>Parcela: Foto 4</b></p>
          <img 
            src="Docs/<?php echo "$PastaFotoParcela4/$ArquivoFotoParcela4"?>" 
            alt="<?php echo $ArquivoFotoParcela4?>" 
            class="img-fluid"
            data-toggle="modal"
            data-target="#Foto-Parcela4"
          >
        </div>
      <?php
    }
  }




  //Foto-Parcela5
  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>" . 
    $QueryBuscarFotoParcela5 = "
      SELECT * FROM tb_fotos
      WHERE id_foto = '$FotoParcela5'
    ";
    echo "</pre>";
    $ExeQrBuscarFotoParcela5 = mysqli_query($connection, $QueryBuscarFotoParcela5);
    $RowQrBuscarFotoParcela5 = mysqli_num_rows($ExeQrBuscarFotoParcela5);
    if( $RowQrBuscarFotoParcela5 = 1 ){
      while( $ReturnFotoParcela5 = mysqli_fetch_assoc($ExeQrBuscarFotoParcela5) ){
        $PastaFotoParcela5 = $ReturnFotoParcela5['pasta_foto'];
        $ArquivoFotoParcela5 = $ReturnFotoParcela5['nome_foto'];
      }
      ?>
        <div class="col-12 text-center float-left foto-parcela">
          <p><b>Parcelas: Foto 5</b></p>
          <img 
            src="Docs/<?php echo "$PastaFotoParcela5/$ArquivoFotoParcela5"?>" 
            alt="<?php echo $ArquivoFotoParcela5?>" 
            class="img-fluid"
            data-toggle="modal"
            data-target="#Foto-Parcela5"
          >
        </div>
      <?php
    }
  }else{

    //PROD
    "<br><pre>" . 
    $QueryBuscarFotoParcela5 = "
      SELECT * FROM tb_fotos
      WHERE id_foto = '$FotoParcela5'
    ";
    "</pre>";
    $ExeQrBuscarFotoParcela5 = mysqli_query($connection, $QueryBuscarFotoParcela5);
    $RowQrBuscarFotoParcela5 = mysqli_num_rows($ExeQrBuscarFotoParcela5);
    if( $RowQrBuscarFotoParcela5 = 1 ){
      while( $ReturnFotoParcela5 = mysqli_fetch_assoc($ExeQrBuscarFotoParcela5) ){
        $PastaFotoParcela5 = $ReturnFotoParcela5['pasta_foto'];
        $ArquivoFotoParcela5 = $ReturnFotoParcela5['nome_foto'];
      }
      ?>
        <div class="col-12 text-center float-left foto-parcela">
          <p><b>Parcela: Foto 5</b></p>
          <img 
            src="Docs/<?php echo "$PastaFotoParcela5/$ArquivoFotoParcela5"?>" 
            alt="<?php echo $ArquivoFotoParcela5?>" 
            class="img-fluid"
            data-toggle="modal"
            data-target="#Foto-Parcela5"
          >
        </div>
      <?php
    }
  }



  //Foto-Parcela6
  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>" . 
    $QueryBuscarFotoParcela6 = "
      SELECT * FROM tb_fotos
      WHERE id_foto = '$FotoParcela6'
    ";
    echo "</pre>";
    $ExeQrBuscarFotoParcela6 = mysqli_query($connection, $QueryBuscarFotoParcela6);
    $RowQrBuscarFotoParcela6 = mysqli_num_rows($ExeQrBuscarFotoParcela6);
    if( $RowQrBuscarFotoParcela6 = 1 ){
      while( $ReturnFotoParcela6 = mysqli_fetch_assoc($ExeQrBuscarFotoParcela6) ){
        $PastaFotoParcela6 = $ReturnFotoParcela6['pasta_foto'];
        $ArquivoFotoParcela6 = $ReturnFotoParcela6['nome_foto'];
      }
      ?>
        <div class="col-12 text-center float-left foto-parcela">
          <p><b>Parcelas: Foto 5</b></p>
          <img 
            src="Docs/<?php echo "$PastaFotoParcela6/$ArquivoFotoParcela6"?>" 
            alt="<?php echo $ArquivoFotoParcela6?>" 
            class="img-fluid"
            data-toggle="modal"
            data-target="#Foto-Parcela6"
          >
        </div>
      <?php
    }
  }else{

    //PROD
    "<br><pre>" . 
    $QueryBuscarFotoParcela6 = "
      SELECT * FROM tb_fotos
      WHERE id_foto = '$FotoParcela6'
    ";
    "</pre>";
    $ExeQrBuscarFotoParcela6 = mysqli_query($connection, $QueryBuscarFotoParcela6);
    $RowQrBuscarFotoParcela6 = mysqli_num_rows($ExeQrBuscarFotoParcela6);
    if( $RowQrBuscarFotoParcela6 = 1 ){
      while( $ReturnFotoParcela6 = mysqli_fetch_assoc($ExeQrBuscarFotoParcela6) ){
        $PastaFotoParcela6 = $ReturnFotoParcela6['pasta_foto'];
        $ArquivoFotoParcela6 = $ReturnFotoParcela6['nome_foto'];
      }
      ?>
        <div class="col-12 text-center float-left foto-parcela">
          <p><b>Parcela: Foto 6</b></p>
          <img 
            src="Docs/<?php echo "$PastaFotoParcela6/$ArquivoFotoParcela6"?>" 
            alt="<?php echo $ArquivoFotoParcela6?>" 
            class="img-fluid"
            data-toggle="modal"
            data-target="#Foto-Parcela6"
          >
        </div>
      <?php
    }
  }