<?php
  //Declaração - Foto 1
  if( $SysMode == 1 ){
    echo "<br><pre>" . 
    $QueryBuscarFotoDeclaracao1 = "
      SELECT * FROM tb_fotos
      WHERE id_foto = '$DeclaracaoAssociado1'
    ";
    echo "</pre>";
    $ExeQrBuscarFotoDeclaracao1 = mysqli_query($connection, $QueryBuscarFotoDeclaracao1);
    while( $ReturnDeclaracao1 = mysqli_fetch_assoc($ExeQrBuscarFotoDeclaracao1) ){
      $NomeArquivo1 = $ReturnDeclaracao1['nome_foto'];
      $PastaArquivo1 = $CPFAssociado;
      ?>
        <div class="col-12 text-center">
          <b>Foto da Declaracao do Associado 1: </b>
          <img src="Docs/<?php "$PastaArquivo1/$NomeArquivo1"?>" alt="<?php echo $NomeArquivo1?>" class="img-fluid">
        </div>
      <?php
    }
  }else{
    "<br><pre>" . 
    $QueryBuscarFotoDeclaracao1 = "
      SELECT * FROM tb_fotos
      WHERE id_foto = '$DeclaracaoAssociado1'
    ";
    "</pre>";
    $ExeQrBuscarFotoDeclaracao1 = mysqli_query($connection, $QueryBuscarFotoDeclaracao1);
    while( $ReturnDeclaracao1 = mysqli_fetch_assoc($ExeQrBuscarFotoDeclaracao1) ){
      $NomeArquivo1 = $ReturnDeclaracao1['nome_foto'];
      $PastaArquivo1 = $CPFAssociado;
      ?>
        <div class="col-12 text-center">
          <b>Foto da Declaracao do Associado 1: </b>
          <img src="Docs/<?php echo "$PastaArquivo1/$NomeArquivo1"?>" alt="<?php echo $NomeArquivo1?>" class="img-fluid">
        </div>
      <?php
    }
  }


  //Declaração - Foto 2
  if( $SysMode == 1 ){
    echo "<br><pre>" . 
    $QueryBuscarFotoDeclaracao2 = "
      SELECT * FROM tb_fotos
      WHERE id_foto = '$DeclaracaoAssociado2'
    ";
    echo "</pre>";
    $ExeQrBuscarFotoDeclaracao2 = mysqli_query($connection, $QueryBuscarFotoDeclaracao2);
    while( $ReturnDeclaracao2 = mysqli_fetch_assoc($ExeQrBuscarFotoDeclaracao2) ){
      $NomeArquivo2 = $ReturnDeclaracao2['nome_foto'];
      $PastaArquivo2 = $CPFAssociado;
      ?>
        <div class="col-12 text-center">
          <b>Foto da Declaracao do Associado 2: </b>
          <img src="Docs/<?php "$PastaArquivo2/$NomeArquivo2"?>" alt="<?php echo $NomeArquivo2?>" class="img-fluid">
        </div>
      <?php
    }
  }else{
    "<br><pre>" . 
    $QueryBuscarFotoDeclaracao2 = "
      SELECT * FROM tb_fotos
      WHERE id_foto = '$DeclaracaoAssociado2'
    ";
    "</pre>";
    $ExeQrBuscarFotoDeclaracao2 = mysqli_query($connection, $QueryBuscarFotoDeclaracao2);
    while( $ReturnDeclaracao2 = mysqli_fetch_assoc($ExeQrBuscarFotoDeclaracao2) ){
      $NomeArquivo2 = $ReturnDeclaracao2['nome_foto'];
      $PastaArquivo2 = $CPFAssociado;
      ?>
        <div class="col-12 text-center">
          <b>Foto da Declaracao do Associado 2: </b>
          <img src="Docs/<?php echo "$PastaArquivo2/$NomeArquivo2"?>" alt="<?php echo $NomeArquivo2?>" class="img-fluid">
        </div>
      <?php
    }
  }


  //Declaração - Foto 3
  if( $SysMode == 1 ){
    echo "<br><pre>" . 
    $QueryBuscarFotoDeclaracao3 = "
      SELECT * FROM tb_fotos
      WHERE id_foto = '$DeclaracaoAssociado3'
    ";
    echo "</pre>";
    $ExeQrBuscarFotoDeclaracao3 = mysqli_query($connection, $QueryBuscarFotoDeclaracao3);
    while( $ReturnDeclaracao3 = mysqli_fetch_assoc($ExeQrBuscarFotoDeclaracao3) ){
      $NomeArquivo3 = $ReturnDeclaracao3['nome_foto'];
      $PastaArquivo3 = $CPFAssociado;
      ?>
        <div class="col-12 text-center">
          <b>Foto da Declaracao do Associado 3: </b>
          <img src="Docs/<?php "$PastaArquivo3/$NomeArquivo3"?>" alt="<?php echo $NomeArquivo3?>" class="img-fluid">
        </div>
      <?php
    }
  }else{
    "<br><pre>" . 
    $QueryBuscarFotoDeclaracao3 = "
      SELECT * FROM tb_fotos
      WHERE id_foto = '$DeclaracaoAssociado3'
    ";
    "</pre>";
    $ExeQrBuscarFotoDeclaracao3 = mysqli_query($connection, $QueryBuscarFotoDeclaracao3);
    while( $ReturnDeclaracao3 = mysqli_fetch_assoc($ExeQrBuscarFotoDeclaracao3) ){
      $NomeArquivo3 = $ReturnDeclaracao3['nome_foto'];
      $PastaArquivo3 = $CPFAssociado;
      ?>
        <div class="col-12 text-center">
          <b>Foto da Declaracao do Associado 3: </b>
          <img src="Docs/<?php echo "$PastaArquivo3/$NomeArquivo3"?>" alt="<?php echo $NomeArquivo3?>" class="img-fluid">
        </div>
      <?php
    }
  }