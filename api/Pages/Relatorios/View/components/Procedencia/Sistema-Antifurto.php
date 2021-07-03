<h4 class="col-12 rotulos">
  Sistema Antifurto: 
  <?php 
    switch( $TipoSistema ){
      case 1: echo "Rastreador";break;
      case 2: echo "Alarme Padrão";break;
    }
  ?>
</h4>

<?php 
  if( $TipoSistema == 1 ){

    //Comprovante de Instalação 1
    if( $SysMode == 1 ){
      //DEV
      echo "<br><pre>" . 
      $QueryBuscarAntifurto1 = "
        SELECT * FROM tb_fotos
        WHERE id_foto = '$AntiFurtoComprovante1'
      ";
      echo "</pre>";
      $ExeQrBuscarAntifurto1 = mysqli_query($connection, $QueryBuscarAntifurto1);
      $RowQrBuscarAntifurto1 = mysqli_num_rows($ExeQrBuscarAntifurto1);
      if( $RowQrBuscarAntifurto1 = 1 ){
        while( $ReturnComprovanteAntifurto1 = mysqli_fetch_assoc($ExeQrBuscarAntifurto1) ){
          $PastaAntifurto1 = $ReturnComprovanteAntifurto1['pasta_foto'];
          $ArquivoAntifurto1 = $ReturnComprovanteAntifurto1['nome_foto'];
        }
        ?>
          <div class="col-12 text-center float-left foto-comprovante">
            <p class="col-12"><b>Comprovante de instalação - Foto 1</b></p>
            <img 
              src="Docs/<?php echo "$PastaAntifurto1/$ArquivoAntifurto1"?>" 
              alt="<?php echo $ArquivoAntifurto1 ?>" 
              class="img-fluid"
              data-toggle="modal"
              data-target="#Comprovante-Instalacao-Antifurto1"
            >
          </div>
        <?php
      }
    }else{

      //PROD
      "<br><pre>" . 
      $QueryBuscarAntifurto1 = "
        SELECT * FROM tb_fotos
        WHERE id_foto = '$AntiFurtoComprovante1'
      ";
      "</pre>";
      $ExeQrBuscarAntifurto1 = mysqli_query($connection, $QueryBuscarAntifurto1);
      $RowQrBuscarAntifurto1 = mysqli_num_rows($ExeQrBuscarAntifurto1);
      if( $RowQrBuscarAntifurto1 = 1 ){
        while( $ReturnComprovanteAntifurto1 = mysqli_fetch_assoc($ExeQrBuscarAntifurto1) ){
          $PastaAntifurto1 = $ReturnComprovanteAntifurto1['pasta_foto'];
          $ArquivoAntifurto1 = $ReturnComprovanteAntifurto1['nome_foto'];
        }
        ?>
          <div class="col-12 text-center float-left foto-comprovante">
            <p class="col-12"><b>Comprovante de instalação - Foto 1</b></p>
            <img 
              src="Docs/<?php echo "$PastaAntifurto1/$ArquivoAntifurto1"?>" 
              alt="<?php echo $ArquivoAntifurto1 ?>" 
              class="img-fluid"
              data-toggle="modal"
              data-target="#Comprovante-Instalacao-Antifurto1"
            >
          </div>
        <?php
      }
    }




    
    //Comprovante de Instalação 2
    if( $SysMode == 1 ){
      //DEV
      echo "<br><pre>" . 
      $QueryBuscarAntifurto2 = "
        SELECT * FROM tb_fotos
        WHERE id_foto = '$AntiFurtoComprovante1'
      ";
      echo "</pre>";
      $ExeQrBuscarAntifurto2 = mysqli_query($connection, $QueryBuscarAntifurto2);
      $RowQrBuscarAntifurto2 = mysqli_num_rows($ExeQrBuscarAntifurto2);
      if( $RowQrBuscarAntifurto2 = 1 ){
        while( $ReturnComprovanteAntifurto2 = mysqli_fetch_assoc($ExeQrBuscarAntifurto2) ){
          $PastaAntifurto2 = $ReturnComprovanteAntifurto2['pasta_foto'];
          $ArquivoAntifurto2 = $ReturnComprovanteAntifurto2['nome_foto'];
        }
        ?>
          <div class="col-12 text-center float-left foto-comprovante">
            <p class="col-12"><b>Comprovante de instalação - Foto 2</b></p>
            <img 
              src="Docs/<?php echo "$PastaAntifurto2/$ArquivoAntifurto2"?>" 
              alt="<?php echo $ArquivoAntifurto2 ?>" 
              class="img-fluid"
              data-toggle="modal"
              data-target="#Comprovante-Instalacao-Antifurto2"
            >
          </div>
        <?php
      }
    }else{

      //PROD
      "<br><pre>" . 
      $QueryBuscarAntifurto2 = "
        SELECT * FROM tb_fotos
        WHERE id_foto = '$AntiFurtoComprovante2'
      ";
      "</pre>";
      $ExeQrBuscarAntifurto2 = mysqli_query($connection, $QueryBuscarAntifurto2);
      $RowQrBuscarAntifurto2 = mysqli_num_rows($ExeQrBuscarAntifurto2);
      if( $RowQrBuscarAntifurto2 = 1 ){
        while( $ReturnComprovanteAntifurto2 = mysqli_fetch_assoc($ExeQrBuscarAntifurto2) ){
          $PastaAntifurto2 = $ReturnComprovanteAntifurto2['pasta_foto'];
          $ArquivoAntifurto2 = $ReturnComprovanteAntifurto2['nome_foto'];
        }
        ?>
          <div class="col-12 text-center float-left foto-comprovante">
            <p class="col-12"><b>Comprovante de instalação - Foto 2</b></p>
            <img 
              src="Docs/<?php echo "$PastaAntifurto2/$ArquivoAntifurto2"?>" 
              alt="<?php echo $ArquivoAntifurto2 ?>" 
              class="img-fluid"
              data-toggle="modal"
              data-target="#Comprovante-Instalacao-Antifurto2"
            >
          </div>
        <?php
      }
    }

  }
?>