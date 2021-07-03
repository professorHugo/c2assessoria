<div class="progress progress-sm mr-2">
  <?php
    
      //Total de Preenchidos
      if( $Permissao != 2 ){
        $QueryBuscarRelatorios = "SELECT * FROM tb_relatorios WHERE status_relatorio = 'Entregue'";
        $ExeQrBuscarRelatorios = mysqli_query($connection, $QueryBuscarRelatorios);
        if( mysqli_num_rows($ExeQrBuscarRelatorios) > 0 ){
            $TotalRelatoriosPreenchidos = mysqli_num_rows($ExeQrBuscarRelatorios);
        }else{
            $TotalRelatoriosPreenchidos = "0";
        }
      }else{
          $QueryBuscarRelatorios = "
            SELECT * FROM tb_relatorios WHERE sindicante_evento = '$IdUsuario' && status_relatorio = 'Entregue'
          ";
        $ExeQrBuscarRelatorios = mysqli_query($connection, $QueryBuscarRelatorios);
        if( mysqli_num_rows($ExeQrBuscarRelatorios) > 0 ){
            $TotalRelatoriosPreenchidos = mysqli_num_rows($ExeQrBuscarRelatorios);
        }else{
            $TotalRelatoriosPreenchidos = "0";
        }
      }



      //Total de Relatórios
      if( $Permissao != 2 ){
        $QueryBuscarRelatorios = "SELECT * FROM tb_relatorios";
        $ExeQrBuscarRelatorios = mysqli_query($connection, $QueryBuscarRelatorios);
        if( mysqli_num_rows($ExeQrBuscarRelatorios) > 0 ){
            $TotalRelatorios = mysqli_num_rows($ExeQrBuscarRelatorios);
        }else{
            $TotalRelatorios = "0";
        }
      }else{
          $QueryBuscarRelatorios = "
            SELECT * FROM tb_relatorios WHERE sindicante_evento = '$IdUsuario'
          ";
        $ExeQrBuscarRelatorios = mysqli_query($connection, $QueryBuscarRelatorios);
        if( mysqli_num_rows($ExeQrBuscarRelatorios) > 0 ){
            $TotalRelatorios = mysqli_num_rows($ExeQrBuscarRelatorios);
        }else{
            $TotalRelatorios = "0";
        }
      }
      if( mysqli_num_rows($ExeQrBuscarRelatorios) > 0 ){
        "<div style='width: 200px; height: 100px; position: fixed; z-index: 9999'>";
          "<br>Total Relatórios: " . $TotalRelatorios;
          "<br>Total Preenchidos: " . $TotalRelatoriosPreenchidos;
          "<br>Porcentagem: " . 
            $Porcentagem = ( $TotalRelatoriosPreenchidos / $TotalRelatorios ) * 100 . "%";
        "</div>";
      }else{
        $Porcentagem = 0;
      }
      
    
  ?>
  <div 
    class="progress-bar bg-info" 
    role="progressbar" 
    style="width: <?php echo $Porcentagem ?>" 
    aria-valuenow="<?php echo $Porcentagem?>" 
    aria-valuemin="0" 
    aria-valuemax="100"
    ></div>
</div>