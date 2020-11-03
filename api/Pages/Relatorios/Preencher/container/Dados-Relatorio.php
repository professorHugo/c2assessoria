<?php
  $ExeQrBuscarRelatorios = mysqli_query($connection, $QueryBuscarRelatorios);
  $RowQrByscarRelatorios = mysqli_num_rows($ExeQrBuscarRelatorios);
  
  if( $RowQrByscarRelatorios > 0 ){
    ?>
      <h2 class="col-7 float-left">Preencher relatório: </h2>
      <?php
        echo '<h4 class="col-5 float-left" style="margin-top: .4rem">';
        while( $Relatorio = mysqli_fetch_assoc($ExeQrBuscarRelatorios) ){
          echo $Relatorio['natureza_evento'] . "-2020-" . date('m');
          if( $Relatorio['id_relatorio'] < 10){
            echo "-000" . $Relatorio['id_relatorio'];
          }else
          if( $Relatorio['id_relatorio'] < 100 ){
            echo "-00" . $Relatorio['id_relatorio'];
          }else
          if( $Relatorio['id_relatorio'] < 1000 ){
            echo "-0" . $Relatorio['id_relatorio'];
          }else{
            echo "-" . $Relatorio['id_relatorio'];
          }
        }
        echo '</h4>';
      ?>
      <div class="col-12" style="border-top: 2px solid #bbb; margin-bottom: 2.5rem;float: left;height:1px"></div>
    
      <div class="row col-12" style="margin:1.5rem 0 0; width: 100%">
        
        <?php
          if( isset($_GET['Content']) ){
            $Content = $_GET['Content'];
            switch( $Content ){
              case $Content : include "components/" . $Content . "/index.php";break;
              default: include "Conteudo-Relatorio.php";
            }
          }else{
            include "Conteudo-Relatorio.php";
          }
          
        ?>
      </div>
    <?php
  }  
?>
