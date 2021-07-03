<h4 class="col-12 rotulos">Fotos da procedencia do veículo: </h4>
<?php

  //Foto 1 da procedêcia
  if( $ConfirmaProcedente != 1 && $ConfirmaProcedente != 99 ){
    if( $SysMode == 1 ){
      //DEV
      echo "<br><pre>" . 
      $QueryBuscarFotoProcedencia1 = "
        SELECT * FROM tb_fotos
        WHERE id_foto = '$FotoProcedenteVeiculo1'
      ";
      echo "</pre>";
      $ExeQrBuscarFotoProcedencia1 = mysqli_query($connection, $QueryBuscarFotoProcedencia1);
      while( $ReturnFotoProcedencia1 = mysqli_fetch_assoc($ExeQrBuscarFotoProcedencia1) ){
        $NomeArquivoProcedencia1 = $ReturnFotoProcedencia1['nome_foto'];
        $PastaArquivoProcedencia1 = $ReturnFotoProcedencia1['pasta_foto'];
        ?>
          <div class="col-12 text-center float-left foto-declaracao">
            <p class="col-12"><b>Foto 1 da procedência do veículo: </b></p>
            <img 
              src="Docs/<?php echo "$PastaArquivoProcedencia1/$NomeArquivoProcedencia1"?>" 
              alt="<?php echo $NomeArquivoProcedencia1?>" 
              class="img-fluid"
              data-toggle="modal"
              data-target="#Procedencia-Veiculo1"
            >
          </div>
        <?php
      }
    }else{
      //PROD
      "<br><pre>" . 
      $QueryBuscarFotoProcedencia1 = "
        SELECT * FROM tb_fotos
        WHERE id_foto = '$FotoProcedenteVeiculo1'
      ";
      "</pre>";
      $ExeQrBuscarFotoProcedencia1 = mysqli_query($connection, $QueryBuscarFotoProcedencia1);
      while( $ReturnFotoProcedencia1 = mysqli_fetch_assoc($ExeQrBuscarFotoProcedencia1) ){
        $NomeArquivoProcedencia1 = $ReturnFotoProcedencia1['nome_foto'];
        $PastaArquivoProcedencia1 = $ReturnFotoProcedencia1['pasta_foto'];
        ?>
          <div class="col-12 text-center float-left foto-declaracao">
            <p class="col-12"><b>Foto 1 da procedência do veículo: </b></p>
            <img 
              src="Docs/<?php echo "$PastaArquivoProcedencia1/$NomeArquivoProcedencia1"?>" 
              alt="<?php echo $NomeArquivoProcedencia1?>" 
              class="img-fluid"
              data-toggle="modal"
              data-target="#Procedencia-Veiculo1"
            >
          </div>
        <?php
      }
    }
  }




  //Foto 2 da procedêcia
  if( $ConfirmaProcedente != 1 && $ConfirmaProcedente != 99 ){
    if( $SysMode == 1 ){
      //DEV
      echo "<br><pre>" . 
      $QueryBuscarFotoProcedencia2 = "
        SELECT * FROM tb_fotos
        WHERE id_foto = '$FotoProcedenteVeiculo2'
      ";
      echo "</pre>";
      $ExeQrBuscarFotoProcedencia2 = mysqli_query($connection, $QueryBuscarFotoProcedencia2);
      while( $ReturnFotoProcedencia2 = mysqli_fetch_assoc($ExeQrBuscarFotoProcedencia2) ){
        $NomeArquivoProcedencia2 = $ReturnFotoProcedencia2['nome_foto'];
        $PastaArquivoProcedencia2 = $ReturnFotoProcedencia2['pasta_foto'];
        ?>
          <div class="col-12 text-center float-left foto-declaracao">
            <p class="col-12"><b>Foto 2 da procedência do veículo: </b></p>
            <img 
              src="Docs/<?php echo "$PastaArquivoProcedencia2/$NomeArquivoProcedencia2"?>" 
              alt="<?php echo $NomeArquivoProcedencia2?>" 
              class="img-fluid"
              data-toggle="modal"
              data-target="#Procedencia-Veiculo2"
            >
          </div>
        <?php
      }
    }else{
      //PROD
      "<br><pre>" . 
      $QueryBuscarFotoProcedencia2 = "
        SELECT * FROM tb_fotos
        WHERE id_foto = '$FotoProcedenteVeiculo2'
      ";
      "</pre>";
      $ExeQrBuscarFotoProcedencia2 = mysqli_query($connection, $QueryBuscarFotoProcedencia2);
      while( $ReturnFotoProcedencia2 = mysqli_fetch_assoc($ExeQrBuscarFotoProcedencia2) ){
        $NomeArquivoProcedencia2 = $ReturnFotoProcedencia2['nome_foto'];
        $PastaArquivoProcedencia2 = $ReturnFotoProcedencia2['pasta_foto'];
        ?>
          <div class="col-12 text-center float-left foto-declaracao">
            <p class="col-12"><b>Foto 2 da procedência do veículo: </b></p>
            <img 
              src="Docs/<?php echo "$PastaArquivoProcedencia2/$NomeArquivoProcedencia2"?>" 
              alt="<?php echo $NomeArquivoProcedencia2?>" 
              class="img-fluid"
              data-toggle="modal"
              data-target="#Procedencia-Veiculo2"
            >
          </div>
        <?php
      }
    }
  }



  //Foto 3 da procedêcia
  if( $ConfirmaProcedente != 1 && $ConfirmaProcedente != 99 ){
    if( $SysMode == 1 ){
      //DEV
      echo "<br><pre>" . 
      $QueryBuscarFotoProcedencia3 = "
        SELECT * FROM tb_fotos
        WHERE id_foto = '$FotoProcedenteVeiculo3'
      ";
      echo "</pre>";
      $ExeQrBuscarFotoProcedencia3 = mysqli_query($connection, $QueryBuscarFotoProcedencia3);
      while( $ReturnFotoProcedencia3 = mysqli_fetch_assoc($ExeQrBuscarFotoProcedencia3) ){
        $NomeArquivoProcedencia3 = $ReturnFotoProcedencia3['nome_foto'];
        $PastaArquivoProcedencia3 = $ReturnFotoProcedencia3['pasta_foto'];
        ?>
          <div class="col-12 text-center float-left foto-declaracao">
            <p class="col-12"><b>Foto 3 da procedência do veículo: </b></p>
            <img 
              src="Docs/<?php echo "$PastaArquivoProcedencia3/$NomeArquivoProcedencia3"?>" 
              alt="<?php echo $NomeArquivoProcedencia3?>" 
              class="img-fluid"
              data-toggle="modal"
              data-target="#Procedencia-Veiculo3"
            >
          </div>
        <?php
      }
    }else{
      //PROD
      "<br><pre>" . 
      $QueryBuscarFotoProcedencia3 = "
        SELECT * FROM tb_fotos
        WHERE id_foto = '$FotoProcedenteVeiculo3'
      ";
      "</pre>";
      $ExeQrBuscarFotoProcedencia3 = mysqli_query($connection, $QueryBuscarFotoProcedencia3);
      while( $ReturnFotoProcedencia3 = mysqli_fetch_assoc($ExeQrBuscarFotoProcedencia3) ){
        $NomeArquivoProcedencia3 = $ReturnFotoProcedencia3['nome_foto'];
        $PastaArquivoProcedencia3 = $ReturnFotoProcedencia3['pasta_foto'];
        ?>
          <div class="col-12 text-center float-left foto-declaracao">
            <p class="col-12"><b>Foto 3 da procedência do veículo: </b></p>
            <img 
              src="Docs/<?php echo "$PastaArquivoProcedencia3/$NomeArquivoProcedencia3"?>" 
              alt="<?php echo $NomeArquivoProcedencia3?>" 
              class="img-fluid"
              data-toggle="modal"
              data-target="#Procedencia-Veiculo3"
            >
          </div>
        <?php
      }
    }
  }
?>