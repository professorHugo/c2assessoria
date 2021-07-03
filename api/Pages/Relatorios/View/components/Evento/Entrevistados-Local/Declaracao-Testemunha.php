<h5 class="col-12 rotulos" id="Declaracao-Testemunha<?php echo $IdEntrevistado?>">
  Declaração
</h5>
<div class="col-12 texto-relato float-left">
  <p class="text-justify">
    <textarea disabled rows="20" disabled class="form-control form-control-lg" style="border: none"
    ><?php echo $ObservacaoEntrevistado ?></textarea>
    <span class="texto-aviso-pc">Para editar o texto de relato da testemunha, acesse via computador</span>
    <div class="editar-relato">
      <button type="button" class="btn btn-primary"
        data-toggle="modal"
        data-target="#Editar-Relato-Testemunha<?php echo $IdEntrevistado ?>"
      >
        Editar relato
      </button>
    </div>
  </p>
</div>

<?php include 'Modals/Editar-Relato-Testemunha.php' ?>


<h5 class="col-12 rotulos space-4 float-left">Fotos da declaração da testemunha: <?php echo $NomeEntrevistado?></h5>
<?php 
  if( $Foto1Entrevistado != 1 ){  
    //Declaração Testemunha - Foto1Entrevistado
    if( $SysMode == 1 ){
      //DEV
      echo "<br><pre>" . 
      $QueryBuscarFoto1Entrevistado = "
        SELECT * FROM tb_fotos
        WHERE id_foto = '$Foto1Entrevistado'
      ";
      echo "</pre>";
      $ExeQrBuscarFoto1Entrevistado = mysqli_query($connection, $QueryBuscarFoto1Entrevistado);
      $RowQrBuscarFoto1Entrevistado = mysqli_num_rows($ExeQrBuscarFoto1Entrevistado);
      if( $RowQrBuscarFoto1Entrevistado = 1 ){
        while( $ReturnFoto1Entrevistado = mysqli_fetch_assoc($ExeQrBuscarFoto1Entrevistado) ){
          $NomeArquivoFoto1Entrevistado = $ReturnFoto1Entrevistado['nome_foto'];
          $PastaFoto1Entrevistado = $ReturnFoto1Entrevistado['pasta_foto'];
        }
        ?>
          <div class="col-12 text-center float-left foto-declaracao" style="margin-bottom: 3rem">
            <p><b>Declaração do entrevistado <?php echo $NomeEntrevistado ?> - Foto 1</b></p>
            <img 
              src='Docs/<?php echo "$PastaFoto1Entrevistado/$NomeArquivoFoto1Entrevistado"?>'
              alt="<?php echo $NomeArquivoFoto1Entrevistado?>" 
              class="img-fluid"
              data-toggle="modal"
              data-target="#Declaracao-Foto1-Entrevistado<?php echo $IdEntrevistado?>"
            >
          </div>
        <?php
        // Ver Declaracao-Foto1-Entrevistado
        include 'Modals/Declaracao-Foto1-Entrevistado.php';
      }
    }else{
      //PROD
      "<br><pre>" . 
      $QueryBuscarFoto1Entrevistado = "
        SELECT * FROM tb_fotos
        WHERE id_foto = '$Foto1Entrevistado'
      ";
      "</pre>";
      $ExeQrBuscarFoto1Entrevistado = mysqli_query($connection, $QueryBuscarFoto1Entrevistado);
      $RowQrBuscarFoto1Entrevistado = mysqli_num_rows($ExeQrBuscarFoto1Entrevistado);
      if( $RowQrBuscarFoto1Entrevistado = 1 ){
        while( $ReturnFoto1Entrevistado = mysqli_fetch_assoc($ExeQrBuscarFoto1Entrevistado) ){
          $NomeArquivoFoto1Entrevistado = $ReturnFoto1Entrevistado['nome_foto'];
          $PastaFoto1Entrevistado = $ReturnFoto1Entrevistado['pasta_foto'];
        }
        ?>
          <div class="col-12 text-center float-left foto-declaracao" style="margin-bottom: 3rem">
            <p><b>Declaração do entrevistado <?php echo $NomeEntrevistado ?> - Foto 1</b></p>
            <img 
              src='Docs/<?php echo "$PastaFoto1Entrevistado/$NomeArquivoFoto1Entrevistado"?>'
              alt="<?php echo $NomeArquivoFoto1Entrevistado?>" 
              class="img-fluid"
              data-toggle="modal"
              data-target="#Declaracao-Foto1-Entrevistado<?php echo $IdEntrevistado?>"
            >
          </div>
        <?php
        // Ver Declaracao-Foto1-Entrevistado
        include 'Modals/Declaracao-Foto1-Entrevistado.php';
      }
    }
  }


  if( $Foto2Entrevistado != 1 ){

    //Declaração Testemunha - Foto2Entrevistado
    if( $SysMode == 1 ){
      //DEV
      echo "<br><pre>" . 
      $QueryBuscarFoto2Entrevistado = "
        SELECT * FROM tb_fotos
        WHERE id_foto = '$Foto2Entrevistado'
      ";
      echo "</pre>";
      $ExeQrBuscarFoto2Entrevistado = mysqli_query($connection, $QueryBuscarFoto2Entrevistado);
      $RowQrBuscarFoto2Entrevistado = mysqli_num_rows($ExeQrBuscarFoto2Entrevistado);
      if( $RowQrBuscarFoto2Entrevistado = 1 ){
        while( $ReturnFoto2Entrevistado = mysqli_fetch_assoc($ExeQrBuscarFoto2Entrevistado) ){
          $NomeArquivoFoto2Entrevistado = $ReturnFoto2Entrevistado['nome_foto'];
          $PastaFoto2Entrevistado = $ReturnFoto2Entrevistado['pasta_foto'];
        }
        ?>
          <div class="col-12 text-center float-left foto-declaracao" style="margin-bottom: 3rem">
            <p><b>Declaração do entrevistado <?php echo $NomeEntrevistado ?> - Foto 2</b></p>
            <img 
              src='Docs/<?php echo "$PastaFoto2Entrevistado/$NomeArquivoFoto2Entrevistado"?>'
              alt="<?php echo $NomeArquivoFoto2Entrevistado?>" 
              class="img-fluid"
              data-toggle="modal"
              data-target="#Declaracao-Foto2-Entrevistado<?php echo $IdEntrevistado?>"
            >
          </div>
        <?php
        // Ver Declaracao-Foto2-Entrevistado
        include 'Modals/Declaracao-Foto2-Entrevistado.php';
      }
    }else{
      //PROD
      "<br><pre>" . 
      $QueryBuscarFoto2Entrevistado = "
        SELECT * FROM tb_fotos
        WHERE id_foto = '$Foto2Entrevistado'
      ";
      "</pre>";
      $ExeQrBuscarFoto2Entrevistado = mysqli_query($connection, $QueryBuscarFoto2Entrevistado);
      $RowQrBuscarFoto2Entrevistado = mysqli_num_rows($ExeQrBuscarFoto2Entrevistado);
      if( $RowQrBuscarFoto2Entrevistado = 1 ){
        while( $ReturnFoto2Entrevistado = mysqli_fetch_assoc($ExeQrBuscarFoto2Entrevistado) ){
          $NomeArquivoFoto2Entrevistado = $ReturnFoto2Entrevistado['nome_foto'];
          $PastaFoto2Entrevistado = $ReturnFoto2Entrevistado['pasta_foto'];
        }
        ?>
          <div class="col-12 text-center float-left foto-declaracao" style="margin-bottom: 3rem">
            <p><b>Declaração do entrevistado <?php echo $NomeEntrevistado ?> - Foto 2</b></p>
            <img 
              src='Docs/<?php echo "$PastaFoto2Entrevistado/$NomeArquivoFoto2Entrevistado"?>'
              alt="<?php echo $NomeArquivoFoto2Entrevistado?>" 
              class="img-fluid"
              data-toggle="modal"
              data-target="#Declaracao-Foto2-Entrevistado<?php echo $IdEntrevistado?>"
            >
          </div>
        <?php
        // Ver Declaracao-Foto2-Entrevistado
        include 'Modals/Declaracao-Foto2-Entrevistado.php';
      }
    }
  }



  if( $Foto3Entrevistado != 1 ){
    //Declaração Testemunha - Foto3Entrevistado
    if( $SysMode == 1 ){
      //DEV
      echo "<br><pre>" . 
      $QueryBuscarFoto3Entrevistado = "
        SELECT * FROM tb_fotos
        WHERE id_foto = '$Foto3Entrevistado'
      ";
      echo "</pre>";
      $ExeQrBuscarFoto3Entrevistado = mysqli_query($connection, $QueryBuscarFoto3Entrevistado);
      $RowQrBuscarFoto3Entrevistado = mysqli_num_rows($ExeQrBuscarFoto3Entrevistado);
      if( $RowQrBuscarFoto3Entrevistado = 1 ){
        while( $ReturnFoto3Entrevistado = mysqli_fetch_assoc($ExeQrBuscarFoto3Entrevistado) ){
          $NomeArquivoFoto3Entrevistado = $ReturnFoto3Entrevistado['nome_foto'];
          $PastaFoto3Entrevistado = $ReturnFoto3Entrevistado['pasta_foto'];
        }
        ?>
          <div class="col-12 text-center float-left foto-declaracao" style="margin-bottom: 3rem">
            <p><b>Declaração do entrevistado <?php echo $NomeEntrevistado ?> - Foto 3</b></p>
            <img 
              src='Docs/<?php echo "$PastaFoto3Entrevistado/$NomeArquivoFoto3Entrevistado"?>'
              alt="<?php echo $NomeArquivoFoto3Entrevistado?>" 
              class="img-fluid"
              data-toggle="modal"
              data-target="#Declaracao-Foto3-Entrevistado<?php echo $IdEntrevistado?>"
            >
          </div>
        <?php
        // Ver Declaracao-Foto3-Entrevistado
        include 'Modals/Declaracao-Foto3-Entrevistado.php';
      }
    }else{
      //PROD
      "<br><pre>" . 
      $QueryBuscarFoto3Entrevistado = "
        SELECT * FROM tb_fotos
        WHERE id_foto = '$Foto3Entrevistado'
      ";
      "</pre>";
      $ExeQrBuscarFoto3Entrevistado = mysqli_query($connection, $QueryBuscarFoto3Entrevistado);
      $RowQrBuscarFoto3Entrevistado = mysqli_num_rows($ExeQrBuscarFoto3Entrevistado);
      if( $RowQrBuscarFoto3Entrevistado = 1 ){
        while( $ReturnFoto3Entrevistado = mysqli_fetch_assoc($ExeQrBuscarFoto3Entrevistado) ){
          $NomeArquivoFoto3Entrevistado = $ReturnFoto3Entrevistado['nome_foto'];
          $PastaFoto3Entrevistado = $ReturnFoto3Entrevistado['pasta_foto'];
        }
        ?>
          <div class="col-12 text-center float-left foto-declaracao" style="margin-bottom: 3rem">
            <p><b>Declaração do entrevistado <?php echo $NomeEntrevistado ?> - Foto 3</b></p>
            <img 
              src='Docs/<?php echo "$PastaFoto3Entrevistado/$NomeArquivoFoto3Entrevistado"?>'
              alt="<?php echo $NomeArquivoFoto3Entrevistado?>" 
              class="img-fluid"
              data-toggle="modal"
              data-target="#Declaracao-Foto3-Entrevistado<?php echo $IdEntrevistado?>"
            >
          </div>
        <?php
        // Ver Declaracao-Foto3-Entrevistado
        include 'Modals/Declaracao-Foto3-Entrevistado.php';
      }
    }
  }


  if( $Foto4Entrevistado != 1 ){
    //Declaração Testemunha - Foto4Entrevistado
    if( $SysMode == 1 ){
      //DEV
      echo "<br><pre>" . 
      $QueryBuscarFoto4Entrevistado = "
        SELECT * FROM tb_fotos
        WHERE id_foto = '$Foto4Entrevistado'
      ";
      echo "</pre>";
      $ExeQrBuscarFoto4Entrevistado = mysqli_query($connection, $QueryBuscarFoto4Entrevistado);
      $RowQrBuscarFoto4Entrevistado = mysqli_num_rows($ExeQrBuscarFoto4Entrevistado);
      if( $RowQrBuscarFoto4Entrevistado = 1 ){
        while( $ReturnFoto4Entrevistado = mysqli_fetch_assoc($ExeQrBuscarFoto4Entrevistado) ){
          $NomeArquivoFoto4Entrevistado = $ReturnFoto4Entrevistado['nome_foto'];
          $PastaFoto4Entrevistado = $ReturnFoto4Entrevistado['pasta_foto'];
        }
        ?>
          <div class="col-12 text-center float-left foto-declaracao" style="margin-bottom: 3rem">
            <p><b>Declaração do entrevistado <?php echo $NomeEntrevistado ?> - Foto 4</b></p>
            <img 
              src='Docs/<?php echo "$PastaFoto4Entrevistado/$NomeArquivoFoto4Entrevistado"?>'
              alt="<?php echo $NomeArquivoFoto4Entrevistado?>" 
              class="img-fluid"
              data-toggle="modal"
              data-target="#Declaracao-Foto4-Entrevistado<?php echo $IdEntrevistado?>"
            >
          </div>
        <?php
        // Ver Declaracao-Foto4-Entrevistado
        include 'Modals/Declaracao-Foto4-Entrevistado.php';
      }
    }else{
      //PROD
      "<br><pre>" . 
      $QueryBuscarFoto4Entrevistado = "
        SELECT * FROM tb_fotos
        WHERE id_foto = '$Foto4Entrevistado'
      ";
      "</pre>";
      $ExeQrBuscarFoto4Entrevistado = mysqli_query($connection, $QueryBuscarFoto4Entrevistado);
      $RowQrBuscarFoto4Entrevistado = mysqli_num_rows($ExeQrBuscarFoto4Entrevistado);
      if( $RowQrBuscarFoto4Entrevistado = 1 ){
        while( $ReturnFoto4Entrevistado = mysqli_fetch_assoc($ExeQrBuscarFoto4Entrevistado) ){
          $NomeArquivoFoto4Entrevistado = $ReturnFoto4Entrevistado['nome_foto'];
          $PastaFoto4Entrevistado = $ReturnFoto4Entrevistado['pasta_foto'];
        }
        ?>
          <div class="col-12 text-center float-left foto-declaracao" style="margin-bottom: 3rem">
            <p><b>Declaração do entrevistado <?php echo $NomeEntrevistado ?> - Foto 4</b></p>
            <img 
              src='Docs/<?php echo "$PastaFoto4Entrevistado/$NomeArquivoFoto4Entrevistado"?>'
              alt="<?php echo $NomeArquivoFoto4Entrevistado?>" 
              class="img-fluid"
              data-toggle="modal"
              data-target="#Declaracao-Foto4-Entrevistado<?php echo $IdEntrevistado?>"
            >
          </div>
        <?php
        // Ver Declaracao-Foto4-Entrevistado
        include 'Modals/Declaracao-Foto4-Entrevistado.php';
      }
    }
  }


  if( $Foto5Entrevistado != 1 ){
    //Declaração Testemunha - Foto5Entrevistado
    if( $SysMode == 1 ){
      //DEV
      echo "<br><pre>" . 
      $QueryBuscarFoto5Entrevistado = "
        SELECT * FROM tb_fotos
        WHERE id_foto = '$Foto5Entrevistado'
      ";
      echo "</pre>";
      $ExeQrBuscarFoto5Entrevistado = mysqli_query($connection, $QueryBuscarFoto5Entrevistado);
      $RowQrBuscarFoto5Entrevistado = mysqli_num_rows($ExeQrBuscarFoto5Entrevistado);
      if( $RowQrBuscarFoto5Entrevistado = 1 ){
        while( $ReturnFoto5Entrevistado = mysqli_fetch_assoc($ExeQrBuscarFoto5Entrevistado) ){
          $NomeArquivoFoto5Entrevistado = $ReturnFoto5Entrevistado['nome_foto'];
          $PastaFoto5Entrevistado = $ReturnFoto5Entrevistado['pasta_foto'];
        }
        ?>
          <div class="col-12 text-center float-left foto-declaracao" style="margin-bottom: 3rem">
            <p><b>Declaração do entrevistado <?php echo $NomeEntrevistado ?> - Foto 5</b></p>
            <img 
              src='Docs/<?php echo "$PastaFoto5Entrevistado/$NomeArquivoFoto5Entrevistado"?>'
              alt="<?php echo $NomeArquivoFoto5Entrevistado?>" 
              class="img-fluid"
              data-toggle="modal"
              data-target="#Declaracao-Foto5-Entrevistado<?php echo $IdEntrevistado?>"
            >
          </div>
        <?php
        // Ver Declaracao-Foto5-Entrevistado
        include 'Modals/Declaracao-Foto5-Entrevistado.php';
      }
    }else{
      //PROD
      "<br><pre>" . 
      $QueryBuscarFoto5Entrevistado = "
        SELECT * FROM tb_fotos
        WHERE id_foto = '$Foto5Entrevistado'
      ";
      "</pre>";
      $ExeQrBuscarFoto5Entrevistado = mysqli_query($connection, $QueryBuscarFoto5Entrevistado);
      $RowQrBuscarFoto5Entrevistado = mysqli_num_rows($ExeQrBuscarFoto5Entrevistado);
      if( $RowQrBuscarFoto5Entrevistado = 1 ){
        while( $ReturnFoto5Entrevistado = mysqli_fetch_assoc($ExeQrBuscarFoto5Entrevistado) ){
          $NomeArquivoFoto5Entrevistado = $ReturnFoto5Entrevistado['nome_foto'];
          $PastaFoto5Entrevistado = $ReturnFoto5Entrevistado['pasta_foto'];
        }
        ?>
          <div class="col-12 text-center float-left foto-declaracao" style="margin-bottom: 3rem">
            <p><b>Declaração do entrevistado <?php echo $NomeEntrevistado ?> - Foto 5</b></p>
            <img 
              src='Docs/<?php echo "$PastaFoto5Entrevistado/$NomeArquivoFoto5Entrevistado"?>'
              alt="<?php echo $NomeArquivoFoto5Entrevistado?>" 
              class="img-fluid"
              data-toggle="modal"
              data-target="#Declaracao-Foto5-Entrevistado<?php echo $IdEntrevistado?>"
            >
          </div>
        <?php
        // Ver Declaracao-Foto5-Entrevistado
        include 'Modals/Declaracao-Foto5-Entrevistado.php';
      }
    }
  }


  if( $Foto6Entrevistado != 1 ){
    //Declaração Testemunha - Foto6Entrevistado
    if( $SysMode == 1 ){
      //DEV
      echo "<br><pre>" . 
      $QueryBuscarFoto6Entrevistado = "
        SELECT * FROM tb_fotos
        WHERE id_foto = '$Foto6Entrevistado'
      ";
      echo "</pre>";
      $ExeQrBuscarFoto6Entrevistado = mysqli_query($connection, $QueryBuscarFoto6Entrevistado);
      $RowQrBuscarFoto6Entrevistado = mysqli_num_rows($ExeQrBuscarFoto6Entrevistado);
      if( $RowQrBuscarFoto6Entrevistado = 1 ){
        while( $ReturnFoto6Entrevistado = mysqli_fetch_assoc($ExeQrBuscarFoto6Entrevistado) ){
          $NomeArquivoFoto6Entrevistado = $ReturnFoto6Entrevistado['nome_foto'];
          $PastaFoto6Entrevistado = $ReturnFoto6Entrevistado['pasta_foto'];
        }
        ?>
          <div class="col-12 text-center float-left foto-declaracao" style="margin-bottom: 3rem">
            <p><b>Declaração do entrevistado <?php echo $NomeEntrevistado ?> - Foto 6</b></p>
            <img 
              src='Docs/<?php echo "$PastaFoto6Entrevistado/$NomeArquivoFoto6Entrevistado"?>'
              alt="<?php echo $NomeArquivoFoto6Entrevistado?>" 
              class="img-fluid"
              data-toggle="modal"
              data-target="#Declaracao-Foto6-Entrevistado<?php echo $IdEntrevistado?>"
            >
          </div>
        <?php
        // Ver Declaracao-Foto6-Entrevistado
        include 'Modals/Declaracao-Foto6-Entrevistado.php';
      }
    }else{
      //PROD
      "<br><pre>" . 
      $QueryBuscarFoto6Entrevistado = "
        SELECT * FROM tb_fotos
        WHERE id_foto = '$Foto6Entrevistado'
      ";
      "</pre>";
      $ExeQrBuscarFoto6Entrevistado = mysqli_query($connection, $QueryBuscarFoto6Entrevistado);
      $RowQrBuscarFoto6Entrevistado = mysqli_num_rows($ExeQrBuscarFoto6Entrevistado);
      if( $RowQrBuscarFoto6Entrevistado = 1 ){
        while( $ReturnFoto6Entrevistado = mysqli_fetch_assoc($ExeQrBuscarFoto6Entrevistado) ){
          $NomeArquivoFoto6Entrevistado = $ReturnFoto6Entrevistado['nome_foto'];
          $PastaFoto6Entrevistado = $ReturnFoto6Entrevistado['pasta_foto'];
        }
        ?>
          <div class="col-12 text-center float-left foto-declaracao" style="margin-bottom: 3rem">
            <p><b>Declaração do entrevistado <?php echo $NomeEntrevistado ?> - Foto 6</b></p>
            <img 
              src='Docs/<?php echo "$PastaFoto6Entrevistado/$NomeArquivoFoto6Entrevistado"?>'
              alt="<?php echo $NomeArquivoFoto6Entrevistado?>" 
              class="img-fluid"
              data-toggle="modal"
              data-target="#Declaracao-Foto6-Entrevistado<?php echo $IdEntrevistado?>"
            >
          </div>
        <?php
        // Ver Declaracao-Foto6-Entrevistado
        include 'Modals/Declaracao-Foto6-Entrevistado.php';
      }
    }
  }