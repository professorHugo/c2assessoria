<?php
  if( !isset($_GET['Entrevistado']) ){
    ?>
      <form 
        action="
          ?Page=Relatorios&Preencher&Protocolo=<?php echo $Protocolo?>&Content=Pesquisas-No-Local&SalvarImagens" 
        method="post" enctype="multipart/form-data"
        style="width: 100%"
        id="SalvarImagensEvento"
        >

        <?php include 'components/Dados-Associado.php'?>

        <h4 class="col-12"
          style="
            border-bottom: 2px solid #ddd; 
            margin-bottom: 2.5rem;
            float: left;
          "
        >Pesquisas realizadas no local do evento</h4>
        

        <div class="form-group row col-12" id="select_imagens_evento">
          <label 
            for="select_img_local" 
            class="col-6 col-md-6 col-form-label col-form-label-lg float-left"
          >Imagens do Evento: </label>

          <div class="col-6">
            <select 
              name="select_img_local" 
              id="select_img_local" 
              class="form-control form-control-lg"
              require
              onchange="selectFotosLocal();"
            >
              <option value="" selected disabled>Selecione</option>
              <option value="1">Sim</option>
              <option value="2">Não</option>
            </select>
          </div>

        </div>

        <div class="form-group row" id="return_imagens_evento" style="display: none">
          <!-- Exibir caso tenha imagens do local -->
          <?php include 'components/containers/Imagens-Evento.php'?>
        </div>

        <div class="col-12" style="margin-top: 1rem"></div>

        <div class="form-group row col-12">
          
          <div class="col-12">
            <button
              type="submit"
              name="Salvar"
              class="btn btn-outline-success btn-lg btn-block"
            >
              Salvar
            </button>
          </div>
        </div>
      </form>
    <?php
  }


  if( !isset($_GET['Entrevistado']) ){
    ?>
      <hr class="col-12">
    <?php
  }
?>
 
  <div class="form-group row col-12" style="margin-top:10px" id="select_testemunhas">
    
    <input type="hidden" id="protocolo" value="<?php echo $Protocolo?>">

    <?php
      if( !isset($_GET['Entrevistado']) ){
        //Buscar Testemunhas
        echo "<br><pre>" . 
        $QueryBuscarTestemunhas = "
          SELECT * FROM tb_entrevistados
          WHERE 
            protocolo_entrevistados = '$Protocolo' && testemunha_entrevistado = 0
        ";
        echo "</pre>";
        $ExeQrBuscarTestemunhas = mysqli_query($connection, $QueryBuscarTestemunhas);
        if( mysqli_num_rows($ExeQrBuscarTestemunhas) < 1 ){
          include 'components/containers/Testemunhas-Local1.php';
        }else{
          include 'components/containers/Testemunhas-Local2.php';
        }
      }
      
   
    if( !isset($_GET['Entrevistado']) ){
      ?>
        <div class="clearfix" style="margin-bottom:20px"></div>

        <hr>
      <?php
    }
  
  
    //Buscar testemunhas
    echo "<br><pre>" . 
    $QueryBuscarTestemunhas = "
      SELECT * FROM tb_entrevistados
      WHERE 
        protocolo_entrevistados = '$Protocolo' && testemunha_entrevistado = 0
    ";
    echo "</pre>";
    $ExeQrBuscarTestemunhas = mysqli_query($connection, $QueryBuscarTestemunhas);
    if( mysqli_num_rows($ExeQrBuscarTestemunhas) < 1 ){
      include 'components/containers/Mensagem-Atencao.php';
    }else{
      if( !isset($_GET['Entrevistado']) ){
        ?>
          <h5 class="col-12" style="margin-top: 1rem">
          <?php
              if( mysqli_num_rows($ExeQrBuscarTestemunhas) > 1 ){
                ?>
                  Cadastre os dados a respeito das testemunhas: 
                <?php
              }else{
                ?>
                  Cadastre os dados a respeito da testemunha: 
                <?php
              }
            ?>
          </h5>
        <?php
      }else{
        ?>
          <h5 class="col-12" style="margin-top: 1rem">
            Faça os ajustes sobre a testemunha em questão 
          </h5>
        <?php
      }
      

      if( isset($_GET['Entrevistado']) ){
        include 'components/containers/Mostrar-Testemunha.php';
      }else{
        while( $Testemunha = mysqli_fetch_assoc($ExeQrBuscarTestemunhas) ){
          $IdEntrevistado = $Testemunha['id_entrevistado'];
          $NomeEntrevistado = $Testemunha['nome_entrevistado'];
          $Salvo = $Testemunha['informacao_salva'];
          $TipoEntrevistado = $Testemunha['tipo_entrevistado'];
          $convivio = $Testemunha['testemunha_entrevistado'];

          ?>
            <div class="col-12">

              <a 
                href="?Page=Relatorios&Preencher&Protocolo=<?php echo $Protocolo ?>&Content=Pesquisas-No-Local&Entrevistado=<?php echo $IdEntrevistado ?>">
                  
                <?php 
                
                  if( $TipoEntrevistado == 1 ){
                    echo "Testemunha: $NomeEntrevistado";
                  }else{
                    echo "Sabedor: $NomeEntrevistado";
                  }
                  
                  if( $Salvo === "Sim" ){
                    echo ' &nbsp;<i class="fa fa-check" aria-hidden="true"></i>';
                  }
                ?>
              </a>
            </div>
          <?php

        }
        
      }
        
    }
  if( !isset($_GET['Entrevistado']) ){
    include 'components/containers/Sobre-Sabedores.php';
    include 'components/containers/Modal-Nova-Testemunha.php';
  }
  
 
  

  if( isset($_POST['Salvar']) && isset($_GET['SalvarImagens']) ){
    include 'components/Salvar.php';
    // echo "<meta http-equiv='refresh' content='0;?Page=Relatorios&Preencher&Protocolo=$Protocolo&Content=Pesquisas-No-Local'>";
  }
  if( isset($_GET['SalvarEntrevistado']) ){
    include 'components/Salvar.php';
    // echo "<meta http-equiv='refresh' content='0;?Page=Relatorios&Preencher&Protocolo=$Protocolo&Content=Pesquisas-No-Local'>";
  }

  if( isset( $_POST['Salvar'] ) && isset($_GET['Salvar-Sabedores']) ){
    include 'components/Salvar.php';
    // echo "<meta http-equiv='refresh' content='0;?Page=Relatorios&Preencher&Protocolo=$Protocolo&Content=Pesquisas-No-Local'>";
  }