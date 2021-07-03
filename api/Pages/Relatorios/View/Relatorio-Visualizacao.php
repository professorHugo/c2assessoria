<?php

  include "components/Modal/Modals-Confirmacao.php";


  
  if( $SysMode == 1 ){
    //DEV
    while( $Relatorio = mysqli_fetch_assoc($ExeQrBuscarRelatorioPreenchido) ){
      
      echo "<pre>";
      print_r($Relatorio);
      echo "</pre>";
      $HorarioUpdate = $Relatorio["horario_update"];
      $DataEvento = $Relatorio["data_evento"];
    ?>
    
      <div class="row" id="Relatorio">
      
        <h1 class='text-center topo-relatorio'>
          Relatório de Sindicância
        </h1>

        <!-- <a href='?Page=Print&Protocolo=<?php echo $Protocolo?>&Print' target='_blank' class='botao-gerar-pdf btn btn-primary' 
          style='
            width: 10%; position: fixed; right: 0; text-align: center; z-index: 9999;
          '
        >
          Gerar PDF <i class='fas fa-file-pdf'></i>
        </a> -->

        
        <div class="cabecalho-relatorio">
          <?php include "components/Cabecalho-Relatorio.php"?>
        </div>

        <div class="row pagina-solicitacao">
          <?php include "components/Topo-Relatorio.php";?>
          <p class="numero-pagina">Relatório: <?php echo $Protocolo ?> - Página 1 - Sobre a Solicitação</p>
        </div>

        <div class="row perfil-associado">
          <?php include "components/Perfil-Associado/index.php" ?>
        </div>
        
        <?php
          if( $Relatorio["condutor_veiculo"] == 2 ){
            ?>
              <div class="row perfil-condutor">
                <?php include "components/Perfil-Condutor/index.php" ?>
              </div>
            <?php
          }
        ?>

        <div class="row procedencia">
          <?php include "components/Procedencia/index.php"?>
        </div>
      </div>
    <?php
    }
  }else{

    //PROD


    while( $Relatorio = mysqli_fetch_assoc($ExeQrBuscarRelatorioPreenchido) ){
      
      "<pre>";
      ($Relatorio);
      "</pre>";
      $HorarioUpdate = $Relatorio["horario_update"];
      $DataEvento = $Relatorio["data_evento"];
    ?>
        
      <div class="row" id="Relatorio">
        <h1 class='text-center topo-relatorio'>
          Relatório de Sindicância
        </h1>

        <!-- <a href='?Page=Print&Protocolo=<?php echo $Protocolo?>&Print' target='_blank' class='botao-gerar-pdf btn btn-primary' 
          style='
            width: 10%; position: fixed; right: 0; text-align: center; z-index: 9999;
          '
        >
          Gerar PDF <i class='fas fa-file-pdf'></i>
        </a> -->


        <div class="cabecalho-relatorio">
          <?php include "components/Cabecalho-Relatorio.php"?>
        </div>

        <div class="row pagina-solicitacao">
          <?php include "components/Pagina-Solicitacao.php";?>
          <p class="numero-pagina">Relatório: <?php echo $Protocolo ?> - Página 1 - Sobre a Solicitação</p>
        </div>

        <div class="row perfil-associado" id="Perfil-Associado">
          <?php include "components/Perfil-Associado/index.php" ?>
        </div>
        
        <?php
          if( $Relatorio["condutor_veiculo"] == 2 ){
            ?>
              <div class="row perfil-condutor" id="Perfil-Condutor">
                <?php include "components/Perfil-Condutor/index.php" ?>
              </div>
            <?php
          }
        ?>

        <div class="row procedencia" id="Procedencia-Veiculo">
          <?php include "components/Procedencia/index.php"?>
        </div>

        <div class="row evento" id="Sobre-Evento">
          <?php include "components/Evento/index.php"?>
        </div>

        <div class="row orgaos-publicos" id="Orgaos-Publicos">
          <?php include "components/Orgaos-Publicos/index.php"?>
        </div>

        <div class="row col-12 Convivio-Associado" id="Convivio-Associado">
          <?php include "components/Convivio-Associado/index.php";?>
        </div>
        <?php
          if( $Relatorio["condutor_veiculo"] == 2 ){
            ?>
              <div class="row col-12 Convivio-Condutor" id="Convivio-Condutor">
                <?php include "components/Convivio-Condutor/index.php";?>
              </div>
            <?php
          }
        ?>
      </div>
    <?php
    }
  }