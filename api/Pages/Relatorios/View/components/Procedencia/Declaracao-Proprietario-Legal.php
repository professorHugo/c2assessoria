<h4 class="col-12 rotulos">Declaração do proprietário legal: </h4>
<div class="col-12 texto-relato float-left">
  <p class="text-justify">
    <textarea rows="20" disabled class="form-control form-control-lg" style="border:none"
    ><?php echo $ObservacaoProprietarioLegal?></textarea>
    <span class="text-aviso-pc">Para editar o texto do relato, acesse via computador</span>
    <div class="editar-relato">
      <button type="button" class="btn btn-primary"
        data-toggle="modal" 
        data-target="#Editar-Relato-Proprietario-Legal"
      >
        Editar relato
      </button>
    </div>
  </p>
</div>

<p class="numero-pagina">
  Relatório: <?php echo $Protocolo ?> 
  - Página ??? - 
  Relato do Proprietario-Legal
</p>

<h4 class="col-12 rotulos float-left space-4">Fotos da declaração do Proprietário Legal: </h4>
<?php
  //Declaração - Foto 1
  if( $FotoDeclaracaoproprietario1 !== 0 ){
    if( $SysMode == 1 ){
      //DEV
      echo "<br><pre>" . 
      $QueryBuscarFotoDeclaracaoP1 = "
        SELECT * FROM tb_fotos
        WHERE id_foto = '$FotoDeclaracaoproprietario1'
      ";
      echo "</pre>";
      $ExeQrBuscarFotoDeclaracaoP1 = mysqli_query($connection, $QueryBuscarFotoDeclaracaoP1);
      while( $ReturnFotoDeclaracaoP1 = mysqli_fetch_assoc($ExeQrBuscarFotoDeclaracaoP1) ){
        $NomeArquivoDeclaracaoP1 = $ReturnFotoDeclaracaoP1['nome_foto'];
        $PastaArquivoDeclaracaoP1 = $ReturnFotoDeclaracaoP1['pasta_foto'];
      }
      ?>
        <div class="col-12 text-center float-left foto-declaracao">
          <p class="col-12"><b>Foto 1 da Declaracao do Proprietário legal:</b></p>
          <img 
            src="Docs/<?php echo "$PastaArquivoDeclaracaoP1/$NomeArquivoDeclaracaoP1"?>" 
            alt="<?php echo $NomeArquivoDeclaracaoP1?>" 
            class="img-fluid"
            data-toggle="modal"
            data-target="#Declaracao-Proprietario-Legal-1"
          >
        </div>
      <?php
    }else{
      //PROD
      "<br><pre>" . 
      $QueryBuscarFotoDeclaracaoP1 = "
        SELECT * FROM tb_fotos
        WHERE id_foto = '$FotoDeclaracaoproprietario1'
      ";
      "</pre>";
      $ExeQrBuscarFotoDeclaracaoP1 = mysqli_query($connection, $QueryBuscarFotoDeclaracaoP1);
      while( $ReturnFotoDeclaracaoP1 = mysqli_fetch_assoc($ExeQrBuscarFotoDeclaracaoP1) ){
        $NomeArquivoDeclaracaoP1 = $ReturnFotoDeclaracaoP1['nome_foto'];
        $PastaArquivoDeclaracaoP1 = $ReturnFotoDeclaracaoP1['pasta_foto'];
      }
      ?>
        <div class="col-12 text-center float-left foto-declaracao">
          <p class="col-12"><b>Foto 1 da Declaracao do Proprietário legal:</b></p>
          <img 
            src="Docs/<?php echo "$PastaArquivoDeclaracaoP1/$NomeArquivoDeclaracaoP1"?>" 
            alt="<?php echo $NomeArquivoDeclaracaoP1?>" 
            class="img-fluid"
            data-toggle="modal"
            data-target="#Declaracao-Proprietario-Legal-1"
          >
        </div>
      <?php
    }
  }



  //Declaração - Foto 2
  if( $FotoDeclaracaoproprietario2 !== 0 ){
    if( $SysMode == 1 ){
      //DEV
      echo "<br><pre>" . 
      $QueryBuscarFotoDeclaracaoP2 = "
        SELECT * FROM tb_fotos
        WHERE id_foto = '$FotoDeclaracaoproprietario2'
      ";
      echo "</pre>";
      $ExeQrBuscarFotoDeclaracaoP2 = mysqli_query($connection, $QueryBuscarFotoDeclaracaoP2);
      while( $ReturnFotoDeclaracaoP2 = mysqli_fetch_assoc($ExeQrBuscarFotoDeclaracaoP2) ){
        $NomeArquivoDeclaracaoP2 = $ReturnFotoDeclaracaoP2['nome_foto'];
        $PastaArquivoDeclaracaoP2 = $ReturnFotoDeclaracaoP2['pasta_foto'];
      }
      ?>
        <div class="col-12 text-center float-left foto-declaracao">
          <p class="col-12"><b>Foto 2 da Declaracao do Proprietário legal:</b></p>
          <img 
            src="Docs/<?php echo "$PastaArquivoDeclaracaoP2/$NomeArquivoDeclaracaoP2"?>" 
            alt="<?php echo $NomeArquivoDeclaracaoP2?>" 
            class="img-fluid"
            data-toggle="modal"
            data-target="#Declaracao-Proprietario-Legal-2"
          >
        </div>
      <?php
    }else{
      //PROD
      "<br><pre>" . 
      $QueryBuscarFotoDeclaracaoP2 = "
        SELECT * FROM tb_fotos
        WHERE id_foto = '$FotoDeclaracaoproprietario2'
      ";
      "</pre>";
      $ExeQrBuscarFotoDeclaracaoP2 = mysqli_query($connection, $QueryBuscarFotoDeclaracaoP2);
      while( $ReturnFotoDeclaracaoP2 = mysqli_fetch_assoc($ExeQrBuscarFotoDeclaracaoP2) ){
        $NomeArquivoDeclaracaoP2 = $ReturnFotoDeclaracaoP2['nome_foto'];
        $PastaArquivoDeclaracaoP2 = $ReturnFotoDeclaracaoP2['pasta_foto'];
      }
      ?>
        <div class="col-12 text-center float-left foto-declaracao">
          <p class="col-12"><b>Foto 2 da Declaracao do Proprietário legal:</b></p>
          <img 
            src="Docs/<?php echo "$PastaArquivoDeclaracaoP2/$NomeArquivoDeclaracaoP2"?>" 
            alt="<?php echo $NomeArquivoDeclaracaoP2?>" 
            class="img-fluid"
            data-toggle="modal"
            data-target="#Declaracao-Proprietario-Legal-2"
          >
        </div>
      <?php
    }
  }
  



  //Declaração - Foto 3
  if( $FotoDeclaracaoproprietario3 !== 0 ){
    if( $SysMode == 1 ){
      //DEV
      echo "<br><pre>" . 
      $QueryBuscarFotoDeclaracaoP3 = "
        SELECT * FROM tb_fotos
        WHERE id_foto = '$FotoDeclaracaoproprietario3'
      ";
      echo "</pre>";
      $ExeQrBuscarFotoDeclaracaoP3 = mysqli_query($connection, $QueryBuscarFotoDeclaracaoP3);
      while( $ReturnFotoDeclaracaoP3 = mysqli_fetch_assoc($ExeQrBuscarFotoDeclaracaoP3) ){
        $NomeArquivoDeclaracaoP3 = $ReturnFotoDeclaracaoP3['nome_foto'];
        $PastaArquivoDeclaracaoP3 = $ReturnFotoDeclaracaoP3['pasta_foto'];
      }
      ?>
        <div class="col-12 text-center float-left foto-declaracao">
          <p class="col-12"><b>Foto 3 da Declaracao do Proprietário legal:</b></p>
          <img 
            src="Docs/<?php echo "$PastaArquivoDeclaracaoP3/$NomeArquivoDeclaracaoP3"?>" 
            alt="<?php echo $NomeArquivoDeclaracaoP3?>" 
            class="img-fluid"
            data-toggle="modal"
            data-target="#Declaracao-Proprietario-Legal-3"
          >
        </div>
      <?php
    }else{
      //PROD
      "<br><pre>" . 
      $QueryBuscarFotoDeclaracaoP3 = "
        SELECT * FROM tb_fotos
        WHERE id_foto = '$FotoDeclaracaoproprietario3'
      ";
      "</pre>";
      $ExeQrBuscarFotoDeclaracaoP3 = mysqli_query($connection, $QueryBuscarFotoDeclaracaoP3);
      while( $ReturnFotoDeclaracaoP3 = mysqli_fetch_assoc($ExeQrBuscarFotoDeclaracaoP3) ){
        $NomeArquivoDeclaracaoP3 = $ReturnFotoDeclaracaoP3['nome_foto'];
        $PastaArquivoDeclaracaoP3 = $ReturnFotoDeclaracaoP3['pasta_foto'];
      }
      ?>
        <div class="col-12 text-center float-left foto-declaracao">
          <p class="col-12"><b>Foto 3 da Declaracao do Proprietário legal:</b></p>
          <img 
            src="Docs/<?php echo "$PastaArquivoDeclaracaoP3/$NomeArquivoDeclaracaoP3"?>" 
            alt="<?php echo $NomeArquivoDeclaracaoP3?>" 
            class="img-fluid"
            data-toggle="modal"
            data-target="#Declaracao-Proprietario-Legal-3"
          >
        </div>
      <?php
    }
  }