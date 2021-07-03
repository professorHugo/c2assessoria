<h4 class="col-12 rotulos">Fotos da declaração do proprietário anterior:</h4>
<?php
  //Foto-Declaracao-Proprietario-Anterior-1
  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>" . 
    $QueryBuscarFtDeclaracaoProprietarioAnterior1 = "
      SELECT * FROM tb_fotos
      WHERE id_foto = '$DeclaracaoProprietarioAnterior1'
    ";
    echo "</pre>";
    $ExeQrBuscarFtDeclaracaoProprietarioAnterior1 = mysqli_query($connection, $QueryBuscarFtDeclaracaoProprietarioAnterior1);
    $RowQrBuscarFtDeclaracaoProprietarioAnterior1 = mysqli_num_rows($ExeQrBuscarFtDeclaracaoProprietarioAnterior1);

    if( $RowQrBuscarFtDeclaracaoProprietarioAnterior1 = 1 ){
      while( $ReturnFtDeclaracao1 = mysqli_fetch_assoc($ExeQrBuscarFtDeclaracaoProprietarioAnterior1) ){
        $PastaProprietarioAnterior1 = $ReturnFtDeclaracao1['pasta_foto'];
        $ArquivoDeclaracaoPropAnterior1 = $ReturnFtDeclaracao1['nome_foto'];
        ?>
          <div class="col-12 foto-documento float-left">
            <p class="col-12"><b>Declaração do proprietário anterior - Foto 1</b></p>
            <img 
              src="Docs/<?php echo "$PastaProprietarioAnterior1/$ArquivoDeclaracaoPropAnterior1" ?>" 
              alt="<?php echo $ArquivoDeclaracaoPropAnterior1 ?>" 
              class="img-fluid"
              data-toggle="modal"
              data-target="#Foto-Declaracao-Proprietario-Anterior-1"
            >
          </div>
        <?php
      }
    }
  }else{

    //PROD
    "<br><pre>" . 
    $QueryBuscarFtDeclaracaoProprietarioAnterior1 = "
      SELECT * FROM tb_fotos
      WHERE id_foto = '$DeclaracaoProprietarioAnterior1'
    ";
    "</pre>";
    $ExeQrBuscarFtDeclaracaoProprietarioAnterior1 = mysqli_query($connection, $QueryBuscarFtDeclaracaoProprietarioAnterior1);
    $RowQrBuscarFtDeclaracaoProprietarioAnterior1 = mysqli_num_rows($ExeQrBuscarFtDeclaracaoProprietarioAnterior1);

    if( $RowQrBuscarFtDeclaracaoProprietarioAnterior1 = 1 ){
      while( $ReturnFtDeclaracao1 = mysqli_fetch_assoc($ExeQrBuscarFtDeclaracaoProprietarioAnterior1) ){
        $PastaProprietarioAnterior1 = $ReturnFtDeclaracao1['pasta_foto'];
        $ArquivoDeclaracaoPropAnterior1 = $ReturnFtDeclaracao1['nome_foto'];
        ?>
          <div class="col-12 foto-documento float-left">
            <p class="col-12"><b>Declaração do proprietário anterior - Foto 1</b></p>
            <img 
              src="Docs/<?php echo "$PastaProprietarioAnterior1/$ArquivoDeclaracaoPropAnterior1" ?>" 
              alt="<?php echo $ArquivoDeclaracaoPropAnterior1 ?>" 
              class="img-fluid"
              data-toggle="modal"
              data-target="#Foto-Declaracao-Proprietario-Anterior-1"
            >
          </div>
        <?php
      }
    }
  }




  //Foto-Declaracao-Proprietario-Anterior-2
  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>" . 
    $QueryBuscarFtDeclaracaoProprietarioAnterior2 = "
      SELECT * FROM tb_fotos
      WHERE id_foto = '$DeclaracaoProprietarioAnterior2'
    ";
    echo "</pre>";
    $ExeQrBuscarFtDeclaracaoProprietarioAnterior2 = mysqli_query($connection, $QueryBuscarFtDeclaracaoProprietarioAnterior2);
    $RowQrBuscarFtDeclaracaoProprietarioAnterior2 = mysqli_num_rows($ExeQrBuscarFtDeclaracaoProprietarioAnterior2);

    if( $RowQrBuscarFtDeclaracaoProprietarioAnterior2 = 1 ){
      while( $ReturnFtDeclaracao2 = mysqli_fetch_assoc($ExeQrBuscarFtDeclaracaoProprietarioAnterior2) ){
        $PastaProprietarioAnterior2 = $ReturnFtDeclaracao2['pasta_foto'];
        $ArquivoDeclaracaoPropAnterior2 = $ReturnFtDeclaracao2['nome_foto'];
        ?>
          <div class="col-12 foto-documento float-left">
            <p class="col-12"><b>Declaração do proprietário anterior - Foto 2</b></p>
            <img 
              src="Docs/<?php echo "$PastaProprietarioAnterior2/$ArquivoDeclaracaoPropAnterior2" ?>" 
              alt="<?php echo $ArquivoDeclaracaoPropAnterior2 ?>" 
              class="img-fluid"
              data-toggle="modal"
              data-target="#Foto-Declaracao-Proprietario-Anterior-2"
            >
          </div>
        <?php
      }
    }
  }else{

    //PROD
    "<br><pre>" . 
    $QueryBuscarFtDeclaracaoProprietarioAnterior2 = "
      SELECT * FROM tb_fotos
      WHERE id_foto = '$DeclaracaoProprietarioAnterior2'
    ";
    "</pre>";
    $ExeQrBuscarFtDeclaracaoProprietarioAnterior2 = mysqli_query($connection, $QueryBuscarFtDeclaracaoProprietarioAnterior2);
    $RowQrBuscarFtDeclaracaoProprietarioAnterior2 = mysqli_num_rows($ExeQrBuscarFtDeclaracaoProprietarioAnterior2);

    if( $RowQrBuscarFtDeclaracaoProprietarioAnterior2 = 1 ){
      while( $ReturnFtDeclaracao2 = mysqli_fetch_assoc($ExeQrBuscarFtDeclaracaoProprietarioAnterior2) ){
        $PastaProprietarioAnterior2 = $ReturnFtDeclaracao2['pasta_foto'];
        $ArquivoDeclaracaoPropAnterior2 = $ReturnFtDeclaracao2['nome_foto'];
        ?>
          <div class="col-12 foto-documento float-left">
            <p class="col-12"><b>Declaração do proprietário anterior - Foto 2</b></p>
            <img 
              src="Docs/<?php echo "$PastaProprietarioAnterior2/$ArquivoDeclaracaoPropAnterior2" ?>" 
              alt="<?php echo $ArquivoDeclaracaoPropAnterior2 ?>" 
              class="img-fluid"
              data-toggle="modal"
              data-target="#Foto-Declaracao-Proprietario-Anterior-2"
            >
          </div>
        <?php
      }
    }
  }




  //Foto-Declaracao-Proprietario-Anterior-3
  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>" . 
    $QueryBuscarFtDeclaracaoProprietarioAnterior3 = "
      SELECT * FROM tb_fotos
      WHERE id_foto = '$DeclaracaoProprietarioAnterior3'
    ";
    echo "</pre>";
    $ExeQrBuscarFtDeclaracaoProprietarioAnterior3 = mysqli_query($connection, $QueryBuscarFtDeclaracaoProprietarioAnterior3);
    $RowQrBuscarFtDeclaracaoProprietarioAnterior3 = mysqli_num_rows($ExeQrBuscarFtDeclaracaoProprietarioAnterior3);

    if( $RowQrBuscarFtDeclaracaoProprietarioAnterior3 = 1 ){
      while( $ReturnFtDeclaracao3 = mysqli_fetch_assoc($ExeQrBuscarFtDeclaracaoProprietarioAnterior3) ){
        $PastaProprietarioAnterior3 = $ReturnFtDeclaracao3['pasta_foto'];
        $ArquivoDeclaracaoPropAnterior3 = $ReturnFtDeclaracao3['nome_foto'];
        ?>
          <div class="col-12 foto-documento float-left">
            <p class="col-12"><b>Declaração do proprietário anterior - Foto 3</b></p>
            <img 
              src="Docs/<?php echo "$PastaProprietarioAnterior3/$ArquivoDeclaracaoPropAnterior3" ?>" 
              alt="<?php echo $ArquivoDeclaracaoPropAnterior3 ?>" 
              class="img-fluid"
              data-toggle="modal"
              data-target="#Foto-Declaracao-Proprietario-Anterior-3"
            >
          </div>
        <?php
      }
    }
  }else{

    //PROD
    "<br><pre>" . 
    $QueryBuscarFtDeclaracaoProprietarioAnterior3 = "
      SELECT * FROM tb_fotos
      WHERE id_foto = '$DeclaracaoProprietarioAnterior3'
    ";
    "</pre>";
    $ExeQrBuscarFtDeclaracaoProprietarioAnterior3 = mysqli_query($connection, $QueryBuscarFtDeclaracaoProprietarioAnterior3);
    $RowQrBuscarFtDeclaracaoProprietarioAnterior3 = mysqli_num_rows($ExeQrBuscarFtDeclaracaoProprietarioAnterior3);

    if( $RowQrBuscarFtDeclaracaoProprietarioAnterior3 = 1 ){
      while( $ReturnFtDeclaracao3 = mysqli_fetch_assoc($ExeQrBuscarFtDeclaracaoProprietarioAnterior3) ){
        $PastaProprietarioAnterior3 = $ReturnFtDeclaracao3['pasta_foto'];
        $ArquivoDeclaracaoPropAnterior3 = $ReturnFtDeclaracao3['nome_foto'];
        ?>
          <div class="col-12 foto-documento float-left">
            <p class="col-12"><b>Declaração do proprietário anterior - Foto 3</b></p>
            <img 
              src="Docs/<?php echo "$PastaProprietarioAnterior3/$ArquivoDeclaracaoPropAnterior3" ?>" 
              alt="<?php echo $ArquivoDeclaracaoPropAnterior3 ?>" 
              class="img-fluid"
              data-toggle="modal"
              data-target="#Foto-Declaracao-Proprietario-Anterior-3"
            >
          </div>
        <?php
      }
    }
  }