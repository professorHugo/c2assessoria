<?php
  if( $SysMode == 1 ){
    //DEV
    while( $Relatorio = mysqli_fetch_assoc($ExeQrBuscarRelatorioPreenchido) ){
      
      echo "<pre>";
      print_r($Relatorio);
      echo "</pre>";
      $HorarioUpdate = $Relatorio['horario_update'];
      $DataEvento = $Relatorio['data_evento'];
    ?>
      <div class="row" id="Relatorio">
        <h1 class="text-center col-12 topo-relatorio">
          Relatório de Sindicância
        </h1>
        <div class="col-12 cabecalho-relatorio">
          <?php include_once 'components/Cabecalho-Relatorio.php'?>
        </div>

        <div class="row col-12 pagina-solicitacao">
          <?php include_once 'components/Topo-Relatorio.php';?>
        </div>

        <div class="row col-12 pagina-1">
          <?php include_once 'components/Perfil-Associado.php' ?>
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
      $HorarioUpdate = $Relatorio['horario_update'];
      $DataEvento = $Relatorio['data_evento'];
    ?>
      <div class="row" id="Relatorio">
        <h1 class="text-center col-12 topo-relatorio">
          Relatório de Sindicância
        </h1>
        <div class="col-12 cabecalho-relatorio">
          <?php include_once 'components/Cabecalho-Relatorio.php'?>
        </div>

        <div class="row col-12 pagina-solicitacao">
          <?php include_once 'components/Topo-Relatorio.php';?>
        </div>

        <div class="row col-12 perfil-associado">
          <?php include_once 'components/Perfil-Associado/index.php' ?>
        </div>
        
        <?php
          if( $Relatorio['condutor_veiculo'] == 2 ){
            ?>
              <div class="row col-12 perfil-condutor">
                <?php include_once 'components/Perfil-Condutor/index.php' ?>
              </div>
            <?php
          }
        ?>
      </div>
    <?php
    }
  }