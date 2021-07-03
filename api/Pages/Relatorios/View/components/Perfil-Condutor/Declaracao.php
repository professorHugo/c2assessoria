<div class="float-left" id="Declaracao-Condutor">
  <h4 class="rotulos col-12">Relato do condutor:</h4>
  <div class="col-12 texto-relato float-left">
    <p class="text-justify">
      <textarea 
        rows="30" disabled class="form-control form-control-lg"
        style="border: none"
      ><?php echo $RelatoCondutor ?></textarea>
      <span class="text-aviso-pc">Para editar o texto do relato, acesse via computador</span>
      <div class="editar-relato">
        <button type="button" class="btn btn-primary"
          data-toggle="modal" 
          data-target="#Editar-Relato-Condutor"
        >
          Editar relato
        </button>
      </div>
    </p>
  </div>
  <p class="numero-pagina">
    Relatório: <?php echo $Protocolo ?> 
    - Página ??? - 
    Relato do Condutor
  </p>
  <?php
    //Declaração - Foto 1
    if( $SysMode == 1 ){
      //DEV
      echo "<br><pre>" . 
      $QueryBuscarFotoDeclaracaoC1 = "
        SELECT * FROM tb_fotos
        WHERE id_foto = '$DeclaracaoCondutor1'
      ";
      echo "</pre>";
      $ExeQrBuscarFotoDeclaracaoC1 = mysqli_query($connection, $QueryBuscarFotoDeclaracaoC1);
      while( $ReturnDeclaracaoC1 = mysqli_fetch_assoc($ExeQrBuscarFotoDeclaracaoC1) ){
        $NomeArquivoC1 = $ReturnDeclaracaoC1['nome_foto'];
        $PastaArquivoC1 = $ReturnDeclaracaoC1['pasta_foto'];
        ?>
          <div class="col-12 text-center float-left foto-declaracao">
            <p class="col-12"><b>Foto da Declaracao do Condutor 1: </b></p>
            <img 
              src="Docs/<?php echo "$PastaArquivoC1/$NomeArquivoC1"?>" 
              alt="<?php echo $NomeArquivoC1?>"
              class="img-fluid"
              data-toggle="modal"
              data-target="#Declaracao-Condutor1"
            >
          </div>
        <?php
      }
    }else{

      //PROD
      "<br><pre>" . 
      $QueryBuscarFotoDeclaracaoC1 = "
        SELECT * FROM tb_fotos
        WHERE id_foto = '$DeclaracaoCondutor1'
      ";
      "</pre>";
      $ExeQrBuscarFotoDeclaracaoC1 = mysqli_query($connection, $QueryBuscarFotoDeclaracaoC1);
      while( $ReturnDeclaracaoC1 = mysqli_fetch_assoc($ExeQrBuscarFotoDeclaracaoC1) ){
        $NomeArquivoC1 = $ReturnDeclaracaoC1['nome_foto'];
        $PastaArquivoC1 = $ReturnDeclaracaoC1['pasta_foto'];
        ?>
          <div class="col-12 text-center float-left foto-declaracao">
            <p class="col-12"><b>Foto da Declaracao do Condutor 1: </b></p>
            <img 
              src="Docs/<?php echo "$PastaArquivoC1/$NomeArquivoC1"?>" 
              alt="<?php echo $NomeArquivoC1?>"
              class="img-fluid"
              data-toggle="modal"
              data-target="#Declaracao-Condutor1"
            >
          </div>
        <?php
      }
    }

    ?>
      <p class="numero-pagina2">
        Relatório: <?php echo $Protocolo ?> 
        - Página ??? - 
        Foto da página 1 da declaração do condutor
      </p>
    <?php
    //Declaração - Foto 2
    if( $SysMode == 1 ){
      //DEV
      echo "<br><pre>" . 
      $QueryBuscarFotoDeclaracaoC2 = "
        SELECT * FROM tb_fotos
        WHERE id_foto = '$DeclaracaoCondutor2'
      ";
      echo "</pre>";
      $ExeQrBuscarFotoDeclaracaoC2 = mysqli_query($connection, $QueryBuscarFotoDeclaracaoC2);
      while( $ReturnDeclaracaoC2 = mysqli_fetch_assoc($ExeQrBuscarFotoDeclaracaoC2) ){
        $NomeArquivoC2 = $ReturnDeclaracaoC2['nome_foto'];
        $PastaArquivoC2 = $ReturnDeclaracaoC2['pasta_foto'];
        ?>
          <div class="col-12 text-center float-left foto-declaracao">
            <p class="col-12"><b>Foto da Declaracao do Condutor 2: </b></p>
            <img 
              src="Docs/<?php echo "$PastaArquivoC2/$NomeArquivoC2"?>" 
              alt="<?php echo $NomeArquivoC2?>"
              class="img-fluid"
              data-toggle="modal"
              data-target="#Declaracao-Condutor2"
            >
          </div>
        <?php
      }
    }else{

      //PROD
      "<br><pre>" . 
      $QueryBuscarFotoDeclaracaoC2 = "
        SELECT * FROM tb_fotos
        WHERE id_foto = '$DeclaracaoCondutor2'
      ";
      "</pre>";
      $ExeQrBuscarFotoDeclaracaoC2 = mysqli_query($connection, $QueryBuscarFotoDeclaracaoC2);
      while( $ReturnDeclaracaoC2 = mysqli_fetch_assoc($ExeQrBuscarFotoDeclaracaoC2) ){
        $NomeArquivoC2 = $ReturnDeclaracaoC2['nome_foto'];
        $PastaArquivoC2 = $ReturnDeclaracaoC2['pasta_foto'];
        ?>
          <div class="col-12 text-center float-left foto-declaracao">
            <p class="col-12"><b>Foto da Declaracao do Condutor 2: </b></p>
            <img 
              src="Docs/<?php echo "$PastaArquivoC2/$NomeArquivoC2"?>" 
              alt="<?php echo $NomeArquivoC2?>"
              class="img-fluid"
              data-toggle="modal"
              data-target="#Declaracao-Condutor2"
            >
          </div>
        <?php
      }
    }

    ?>
      <p class="numero-pagina3">
        Relatório: <?php echo $Protocolo ?> 
        - Página ??? - 
        Foto da página 2 da declaração do condutor
      </p>
    <?php

    //Declaração - Foto 3
    if( $SysMode == 1 ){
      //DEV
      echo "<br><pre>" . 
      $QueryBuscarFotoDeclaracaoC3 = "
        SELECT * FROM tb_fotos
        WHERE id_foto = '$DeclaracaoCondutor3'
      ";
      echo "</pre>";
      $ExeQrBuscarFotoDeclaracaoC3 = mysqli_query($connection, $QueryBuscarFotoDeclaracaoC3);
      while( $ReturnDeclaracaoC3 = mysqli_fetch_assoc($ExeQrBuscarFotoDeclaracaoC3) ){
        $NomeArquivoC3 = $ReturnDeclaracaoC3['nome_foto'];
        $PastaArquivoC3 = $ReturnDeclaracaoC3['pasta_foto'];
        ?>
          <div class="col-12 text-center float-left foto-declaracao">
            <p class="col-12"><b>Foto da Declaracao do Condutor 3: </b></p>
            <img 
              src="Docs/<?php echo "$PastaArquivoC3/$NomeArquivoC3"?>" 
              alt="<?php echo $NomeArquivoC3?>"
              class="img-fluid"
              data-toggle="modal"
              data-target="#Declaracao-Condutor3"
            >
          </div>
        <?php
      }
    }else{

      //PROD
      "<br><pre>" . 
      $QueryBuscarFotoDeclaracaoC3 = "
        SELECT * FROM tb_fotos
        WHERE id_foto = '$DeclaracaoCondutor3'
      ";
      "</pre>";
      $ExeQrBuscarFotoDeclaracaoC3 = mysqli_query($connection, $QueryBuscarFotoDeclaracaoC3);
      while( $ReturnDeclaracaoC3 = mysqli_fetch_assoc($ExeQrBuscarFotoDeclaracaoC3) ){
        $NomeArquivoC3 = $ReturnDeclaracaoC3['nome_foto'];
        $PastaArquivoC3 = $ReturnDeclaracaoC3['pasta_foto'];
        ?>
          <div class="col-12 text-center float-left foto-declaracao">
            <p class="col-12"><b>Foto da Declaracao do Condutor 3: </b></p>
            <img 
              src="Docs/<?php echo "$PastaArquivoC3/$NomeArquivoC3"?>" 
              alt="<?php echo $NomeArquivoC3?>"
              class="img-fluid"
              data-toggle="modal"
              data-target="#Declaracao-Condutor3"
            >
          </div>
        <?php
      }
    }
  ?>

  <p class="numero-pagina2">
    Relatório: <?php echo $Protocolo ?> 
    - Página ?? - 
    Foto da página 3 da declaração do associado
  </p>
</div>