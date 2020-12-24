<div class="form-group row col-12" style="margin-top:10px" id="component_pessoas_sabedoras">
  <input type="hidden" id="protocolo" value="<?php echo $Protocolo?>">

  <?php 
    if( !isset($_GET['Entrevistado']) ){
      //Buscar Testemunhas
       "<br><pre>" . 
      $QueryBuscarTestemunhas = "
        SELECT * FROM tb_entrevistados
        WHERE 
          protocolo_entrevistados = '$Protocolo' && 
          testemunha_entrevistado = 1 &&
          perfil_entrevistado = 1
      ";
       "</pre>";
      $ExeQrBuscarTestemunhas = mysqli_query($connection, $QueryBuscarTestemunhas);
      if( mysqli_num_rows($ExeQrBuscarTestemunhas) < 1 ){
        include 'components/containers/Entrevistados1.php';
      }else{
        include 'components/containers/Entrevistados2.php';
      }
    }
    
  ?>

  <?php 
    //Buscar testemunhas
     "<br><pre>" . 
    $QueryBuscarTestemunhas = "
      SELECT * FROM tb_entrevistados
      WHERE 
        protocolo_entrevistados = '$Protocolo' && 
        testemunha_entrevistado = 1 &&
        perfil_entrevistado = 1
    ";
     "</pre>";
    $ExeQrBuscarTestemunhas = mysqli_query($connection, $QueryBuscarTestemunhas);

    if( mysqli_num_rows($ExeQrBuscarTestemunhas) < 1 ){
      include 'components/containers/Mensagem-Atencao.php';
    }else{
      if( !isset($_GET['Entrevistado']) ){
        ?>
          <h5 class="col-12" style="margin-top: 1.2rem; border-bottom: 1px solid #ccc">
            <?php
              if( mysqli_num_rows($ExeQrBuscarTestemunhas) > 1 ){
                ?>
                  Cadastre os dados a respeito dos entrevistados: 
                <?php
              }else{
                ?>
                  Cadastre os dados a respeito do entrevistado: 
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
                href="?Page=Relatorios&Preencher&Protocolo=<?php echo $Protocolo ?>&Content=Convivio-Associado&Entrevistado=<?php echo $IdEntrevistado ?>">
                  
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
    include 'components/containers/Modal-Novo-Entrevistado.php';
  }
  
  ?>
  

</div>

<?php
  //Salvar o Entrevistado
  if( isset($_POST['Salvar']) && isset($_GET['SalvarEntrevistado']) ){
    include 'components/Salvar.php';
    include 'components/Modal-Confirma-Salvar.php';
    // echo "<meta http-equiv='refresh' content='0;?Page=Relatorios&Preencher&Protocolo=$Protocolo&Content=Convivio-Associado'>";
  }

  if( isset( $_POST['Salvar'] ) && isset($_GET['Salvar-Sabedores']) ){
    include 'components/Salvar.php';
    include 'components/Modal-Confirma-Salvar.php';
    // echo "<meta http-equiv='refresh' content='0;?Page=Relatorios&Preencher&Protocolo=$Protocolo&Content=Convivio-Associado'>";
  }
