<h4 class="col-12 rotulos float-left">Fotos da vistoria: </h4>

<?php
  
  // Foto-Vistoria1
  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>" . 
    $QueryBuscarFotoVistoria1 = "
      SELECT * FROM tb_fotos
      WHERE id_foto = '$FotoVistoria1'
    ";
    echo "</pre>";
    $ExeQrBuscarFotoVistoria1 = mysqli_query($connection, $QueryBuscarFotoVistoria1);
    $RowQrBuscarFotoVistoria1 = mysqli_num_rows($ExeQrBuscarFotoVistoria1);

    if( $RowQrBuscarFotoVistoria1 = 1 ){
      while( $ReturnFotoVistoria1 = mysqli_fetch_assoc($ExeQrBuscarFotoVistoria1) ){
        $PastaFotoVistoria1 = $ReturnFotoVistoria1['pasta_foto'];
        $ArquivoFotoVistoria1 = $ReturnFotoVistoria1['nome_foto'];
      }
      ?>
        <div class="col-12 text-center float-left foto-vistoria">
          <p><b>Vistoria: Foto 1</b><br></p>
          <img 
            src="Docs/<?php echo "$PastaFotoVistoria1/$ArquivoFotoVistoria1" ?>" 
            alt="<?php echo $ArquivoFotoVistoria1 ?>" 
            class="img-fluid"
            data-toggle="modal"
            data-target="#Foto-Vistoria1"
          >
        </div>
      <?php
    }
  }else{
    //PROD

    "<br><pre>" . 
    $QueryBuscarFotoVistoria1 = "
      SELECT * FROM tb_fotos
      WHERE id_foto = '$FotoVistoria1'
    ";
    "</pre>";
    $ExeQrBuscarFotoVistoria1 = mysqli_query($connection, $QueryBuscarFotoVistoria1);
    $RowQrBuscarFotoVistoria1 = mysqli_num_rows($ExeQrBuscarFotoVistoria1);

    if( $RowQrBuscarFotoVistoria1 = 1 ){
      while( $ReturnFotoVistoria1 = mysqli_fetch_assoc($ExeQrBuscarFotoVistoria1) ){
        $PastaFotoVistoria1 = $ReturnFotoVistoria1['pasta_foto'];
        $ArquivoFotoVistoria1 = $ReturnFotoVistoria1['nome_foto'];
      }
      ?>
        <div class="col-12 text-center float-left foto-vistoria">
          <p><b>Vistoria: Foto 1</b><br></p>
          <img 
            src="Docs/<?php echo "$PastaFotoVistoria1/$ArquivoFotoVistoria1" ?>" 
            alt="<?php echo $ArquivoFotoVistoria1 ?>" 
            class="img-fluid"
            data-toggle="modal"
            data-target="#Foto-Vistoria1"
          >
        </div>
      <?php
    }
  }




  // Foto-Vistoria2
  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>" . 
    $QueryBuscarFotoVistoria2 = "
      SELECT * FROM tb_fotos
      WHERE id_foto = '$FotoVistoria2'
    ";
    echo "</pre>";
    $ExeQrBuscarFotoVistoria2 = mysqli_query($connection, $QueryBuscarFotoVistoria2);
    $RowQrBuscarFotoVistoria2 = mysqli_num_rows($ExeQrBuscarFotoVistoria2);

    if( $RowQrBuscarFotoVistoria2 = 1 ){
      while( $ReturnFotoVistoria2 = mysqli_fetch_assoc($ExeQrBuscarFotoVistoria2) ){
        $PastaFotoVistoria2 = $ReturnFotoVistoria2['pasta_foto'];
        $ArquivoFotoVistoria2 = $ReturnFotoVistoria2['nome_foto'];
      }
      ?>
        <div class="col-12 text-center float-left foto-vistoria">
          <p><b>Vistoria: Foto 2</b><br></p>
          <img 
            src="Docs/<?php echo "$PastaFotoVistoria2/$ArquivoFotoVistoria2" ?>" 
            alt="<?php echo $ArquivoFotoVistoria2 ?>" 
            class="img-fluid"
            data-toggle="modal"
            data-target="#Foto-Vistoria2"
          >
        </div>
      <?php
    }
  }else{
    //PROD

    "<br><pre>" . 
    $QueryBuscarFotoVistoria2 = "
      SELECT * FROM tb_fotos
      WHERE id_foto = '$FotoVistoria2'
    ";
    "</pre>";
    $ExeQrBuscarFotoVistoria2 = mysqli_query($connection, $QueryBuscarFotoVistoria2);
    $RowQrBuscarFotoVistoria2 = mysqli_num_rows($ExeQrBuscarFotoVistoria2);

    if( $RowQrBuscarFotoVistoria2 = 1 ){
      while( $ReturnFotoVistoria2 = mysqli_fetch_assoc($ExeQrBuscarFotoVistoria2) ){
        $PastaFotoVistoria2 = $ReturnFotoVistoria2['pasta_foto'];
        $ArquivoFotoVistoria2 = $ReturnFotoVistoria2['nome_foto'];
      }
      ?>
        <div class="col-12 text-center float-left foto-vistoria">
          <p><b>Vistoria: Foto 2</b><br></p>
          <img 
            src="Docs/<?php echo "$PastaFotoVistoria2/$ArquivoFotoVistoria2" ?>" 
            alt="<?php echo $ArquivoFotoVistoria2 ?>" 
            class="img-fluid"
            data-toggle="modal"
            data-target="#Foto-Vistoria2"
          >
        </div>
      <?php
    }
  }



  // Foto-Vistoria3
  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>" . 
    $QueryBuscarFotoVistoria3 = "
      SELECT * FROM tb_fotos
      WHERE id_foto = '$FotoVistoria3'
    ";
    echo "</pre>";
    $ExeQrBuscarFotoVistoria3 = mysqli_query($connection, $QueryBuscarFotoVistoria3);
    $RowQrBuscarFotoVistoria3 = mysqli_num_rows($ExeQrBuscarFotoVistoria3);

    if( $RowQrBuscarFotoVistoria3 = 1 ){
      while( $ReturnFotoVistoria3 = mysqli_fetch_assoc($ExeQrBuscarFotoVistoria3) ){
        $PastaFotoVistoria3 = $ReturnFotoVistoria3['pasta_foto'];
        $ArquivoFotoVistoria3 = $ReturnFotoVistoria3['nome_foto'];
      }
      ?>
        <div class="col-12 text-center float-left foto-vistoria">
          <p><b>Vistoria: Foto 3</b><br></p>
          <img 
            src="Docs/<?php echo "$PastaFotoVistoria3/$ArquivoFotoVistoria3" ?>" 
            alt="<?php echo $ArquivoFotoVistoria3 ?>" 
            class="img-fluid"
            data-toggle="modal"
            data-target="#Foto-Vistoria3"
          >
        </div>
      <?php
    }
  }else{
    //PROD

    "<br><pre>" . 
    $QueryBuscarFotoVistoria3 = "
      SELECT * FROM tb_fotos
      WHERE id_foto = '$FotoVistoria3'
    ";
    "</pre>";
    $ExeQrBuscarFotoVistoria3 = mysqli_query($connection, $QueryBuscarFotoVistoria3);
    $RowQrBuscarFotoVistoria3 = mysqli_num_rows($ExeQrBuscarFotoVistoria3);

    if( $RowQrBuscarFotoVistoria3 = 1 ){
      while( $ReturnFotoVistoria3 = mysqli_fetch_assoc($ExeQrBuscarFotoVistoria3) ){
        $PastaFotoVistoria3 = $ReturnFotoVistoria3['pasta_foto'];
        $ArquivoFotoVistoria3 = $ReturnFotoVistoria3['nome_foto'];
      }
      ?>
        <div class="col-12 text-center float-left foto-vistoria">
          <p><b>Vistoria: Foto 3</b><br></p>
          <img 
            src="Docs/<?php echo "$PastaFotoVistoria3/$ArquivoFotoVistoria3" ?>" 
            alt="<?php echo $ArquivoFotoVistoria3 ?>" 
            class="img-fluid"
            data-toggle="modal"
            data-target="#Foto-Vistoria3"
          >
        </div>
      <?php
    }
  }