<div class="float-left" id="Declaracao-Associado">
  <h4 class="rotulos col-12">Relato do associado:</h4>
  <div class="col-12 texto-relato float-left">
    <p class="text-justify">
      <textarea 
        rows="30" disabled class="form-control form-control-lg"
        style="border: none"
      ><?php echo $RelatoAssociado ?></textarea>
      <span class="text-aviso-pc">Para editar o texto do relato, acesse via computador</span>
      <div class="editar-relato">
        <button type="button" class="btn btn-primary"
          data-toggle="modal" 
          data-target="#Editar-Relato-Associado"
        >
          Editar relato
        </button>
      </div>
    </p>
  </div>
  <p class="numero-pagina">
    Relatório: <?php echo $Protocolo ?> 
    - Página 5 - 
    Relato do associado
  </p>
  
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
        $NomeArquivoDeclaracao1 = $ReturnDeclaracao1['nome_foto'];
        $PastaArquivoDeclaracao1 = $CPFAssociado;
        ?>
          <div class="col-12 text-center foto-declaracao float-left">
            <p class="col-12"><b>Foto da Declaracao do Associado 1: </b> </p>
            <img 
              src="Docs/<?php echo "$PastaArquivoDeclaracao1/$NomeArquivoDeclaracao1"?>" 
              alt="<?php echo $NomeArquivoDeclaracao1?>" 
              class="img-fluid"
              data-toggle="modal"
              data-target="#DeclaracaoAssociado1"
            >
          </div>
          <p class="numero-pagina2">
            Relatório: <?php echo $Protocolo ?> 
            - Página 6 - 
            Foto da página 1 da declaração do associado
          </p>
        <?php
      }
    }else{
      
      //PROD
      "<br><pre>" . 
      $QueryBuscarFotoDeclaracao1 = "
        SELECT * FROM tb_fotos
        WHERE id_foto = '$DeclaracaoAssociado1'
      ";
      "</pre>";
      $ExeQrBuscarFotoDeclaracao1 = mysqli_query($connection, $QueryBuscarFotoDeclaracao1);
      while( $ReturnDeclaracao1 = mysqli_fetch_assoc($ExeQrBuscarFotoDeclaracao1) ){
        $NomeArquivoDeclaracao1 = $ReturnDeclaracao1['nome_foto'];
        $PastaArquivoDeclaracao1 = $CPFAssociado;
        ?>
          <div class="col-12 text-center foto-declaracao float-left">
            <p class="col-12"><b>Foto da Declaracao do Associado 1: </b> </p>
            <img 
              src="Docs/<?php echo "$PastaArquivoDeclaracao1/$NomeArquivoDeclaracao1"?>" 
              alt="<?php echo $NomeArquivoDeclaracao1?>" 
              class="img-fluid"
              data-toggle="modal"
              data-target="#DeclaracaoAssociado1"
            >
          </div>
          <p class="numero-pagina2">
            Relatório: <?php echo $Protocolo ?> 
            - Página 6 - 
            Foto da página 1 da declaração do associado
          </p>
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
        $NomeArquivoDeclaracao2 = $ReturnDeclaracao2['nome_foto'];
        $PastaArquivoDeclaracao2 = $CPFAssociado;
        ?>
          <div class="col-12 text-center foto-declaracao float-left declaracao2">
            <p class="col-12"><b>Foto da Declaracao do Associado 2: </b> </p>
            <img 
              src="Docs/<?php echo "$PastaArquivoDeclaracao2/$NomeArquivoDeclaracao2"
              ?>" alt="<?php echo $NomeArquivoDeclaracao2
              ?>" class="img-fluid"
              data-toggle="modal"
              data-target="#DeclaracaoAssociado2"
            >
          </div>
          <p class="numero-pagina3">
            Relatório: <?php echo $Protocolo ?> 
            - Página 7 - 
            Foto da página 2 da declaração do associado
          </p>
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
        $NomeArquivoDeclaracao2 = $ReturnDeclaracao2['nome_foto'];
        $PastaArquivoDeclaracao2 = $CPFAssociado;
        ?>
          <div class="col-12 text-center foto-declaracao float-left declaracao2">
            <p class="col-12"><b>Foto da Declaracao do Associado 2: </b> </p>
            <img 
              src="Docs/<?php echo "$PastaArquivoDeclaracao2/$NomeArquivoDeclaracao2"
              ?>" alt="<?php echo $NomeArquivoDeclaracao2
              ?>" class="img-fluid"
              data-toggle="modal"
              data-target="#DeclaracaoAssociado2"
            >
          </div>
          <p class="numero-pagina3">
            Relatório: <?php echo $Protocolo ?> 
            - Página 7 - 
            Foto da página 2 da declaração do associado
          </p>
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
        $NomeArquivoDeclaracao3 = $ReturnDeclaracao3['nome_foto'];
        $PastaArquivoDeclaracao3 = $CPFAssociado;
        ?>
          <div class="col-12 text-center foto-declaracao float-left">
            <p class="col-12"><b>Foto da Declaracao do Associado 3: </b> </p>
            <img src
              ="Docs/<?php echo "$PastaArquivoDeclaracao3/$NomeArquivoDeclaracao3"?>" 
              alt="<?php echo $NomeArquivoDeclaracao3?>" 
              class="img-fluid"
              data-toggle="modal"
              data-target="#DeclaracaoAssociado3"
            >
          </div>
          <p class="numero-pagina2">
            Relatório: <?php echo $Protocolo ?> 
            - Página 8 - 
            Foto da página 3 da declaração do associado
          </p>
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
        $NomeArquivoDeclaracao3 = $ReturnDeclaracao3['nome_foto'];
        $PastaArquivoDeclaracao3 = $CPFAssociado;
        ?>
          <div class="col-12 text-center foto-declaracao float-left">
            <p class="col-12"><b>Foto da Declaracao do Associado 3: </b> </p>
            <img src
              ="Docs/<?php echo "$PastaArquivoDeclaracao3/$NomeArquivoDeclaracao3"?>" 
              alt="<?php echo $NomeArquivoDeclaracao3?>" 
              class="img-fluid"
              data-toggle="modal"
              data-target="#DeclaracaoAssociado3"
            >
          </div>
          <p class="numero-pagina2">
            Relatório: <?php echo $Protocolo ?> 
            - Página 8 - 
            Foto da página 3 da declaração do associado
          </p>
        <?php
      }
    }
  ?>
</div>