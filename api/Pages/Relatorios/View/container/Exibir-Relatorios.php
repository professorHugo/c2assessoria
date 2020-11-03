<?php
$ExeQrBuscarRelatorios = mysqli_query($connection, $QueryBuscarRelatorios);
$RowQrByscarRelatorios = mysqli_num_rows($ExeQrBuscarRelatorios);

if( $RowQrByscarRelatorios > 0 ){
  echo '<div class="row">';
  while( $Relatorios = mysqli_fetch_assoc($ExeQrBuscarRelatorios) ){
    $Protocolo = $Relatorios['protocolo_evento'];
    ?>
      <div class="col-sm-12 col-md-3 bg-white table-bordered" style="margin-bottom: 1rem; padding-bottom:10px">
        
        <?php 
          echo  "Relatório: " . $Relatorios['natureza_evento'] . "-2020-" . date('m');
          if( $Relatorios['id_relatorio'] < 10){
            echo "-000" . $Relatorios['id_relatorio'];
          }else
          if( $Relatorios['id_relatorio'] < 100 ){
            echo "-00" . $Relatorios['id_relatorio'];
          }else
          if( $Relatorios['id_relatorio'] < 1000 ){
            echo "-0" . $Relatorios['id_relatorio'];
          }else{
            echo "-" . $Relatorios['id_relatorio'];
          }
          
        ?>
        <br>
        Associado: <?php echo resumo($Relatorios['nome_associado'], 25)?> <br>
        Protocolo: <?php echo $Relatorios['protocolo_evento']?><br>
        <a 
          href="?Page=Relatorios&Preencher&Protocolo=<?php echo $Protocolo?>" 
          class="btn btn-info" 
          title="Prencher"
        >
          <i class="icones icone-preencher" aria-hidden="true"></i> Preencher
        </a>
        <a 
          href="?Page=Relatorios&Entregar&Protocolo=<?php echo $Protocolo?>" 
          class="btn btn-success" 
          title="Entregar"
        >
          <i class="icones icone-entregar" aria-hidden="true"></i> Entregar
        </a>

      </div>
    <?php
  }
  echo '</div>';
}else{
  echo "<br>Você não tem relatórios para visualizar";
}