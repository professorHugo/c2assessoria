<?php
###Definições do sistema###
define('SITENAME','C2Assessoria');
define('EMAIL','contato@c2assessoria.com.br');
define('SITEDESC','Software Web para gerenciamento de Auditorias de Sinistros');
define('SITEAUTHOR','Agência N2Y - Sempre ao seu lado');
define('SYSNAME','Advisory');
define('VERSION','0.0.9.2a');
"<br><pre>" . 
$QueryBuscarModoDeUso = "
  SELECT * FROM tb_sys_config
";
"</pre>";
$ExeQrNuscarModoDeUso = mysqli_query($connection, $QueryBuscarModoDeUso);
while( $ReturUso = mysqli_fetch_assoc($ExeQrNuscarModoDeUso)){
  $SysMode = $ReturUso['modo_sys_config'];
  $SysMessages = $ReturUso['sys_mensagens'];
  switch($SysMode){
    case 1: $SysModeNome = "Dev";break;
    case 2: $SysModeNome = "Production";break;
  }
}
if( isset($_GET['MudarSys']) ){
  $MudarSys = $_GET['MudarSys'];

  if( $MudarSys == 'Prod' ){

     "<br><pre>".
    $QueryMudarSys = "
      UPDATE tb_sys_config
      SET modo_sys_config = 2
    ";
     "</pre>";
    $ExeQrMudarSys = mysqli_query($connection, $QueryMudarSys);
    if( $ExeQrMudarSys ){
      echo "
        <script>alert('System changed to Production')</script>
        <meta http-equiv='refresh' content='0;index.php'> 
      ";
    }else{
      echo "Erro: " . mysqli_error($connection);
    }

  }elseif ( $MudarSys == 'Dev' ){
     "<br><pre>".
    $QueryMudarSys = "
      UPDATE tb_sys_config
      SET modo_sys_config = 1
    ";
     "</pre>";
    $ExeQrMudarSys = mysqli_query($connection, $QueryMudarSys);
    if( $ExeQrMudarSys ){
      echo "
        <script>alert('System changed to Developer')</script>
        <meta http-equiv='refresh' content='0;index.php'> 
      ";
    }else{
      echo "Erro: " . mysqli_error($connection);
    }
  }

}