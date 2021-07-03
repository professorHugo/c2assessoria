<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>" . 
    $QueryDeslogarUsuario = "
      UPDATE tb_usuarios
      SET
        usuario_status = '2'
      WHERE id_usuario = '$IdUsuario'
    ";
    echo "</pre>";

    $ExeQrDeslogarUsuario = mysqli_query($connection, $QueryDeslogarUsuario);

    if( $ExeQrDeslogarUsuario ){
      echo "<br> Usuário desconectado, redirecionar para Login";
      echo "<br>";
      session_destroy();
    }
  }else{
    "<br><pre>" . 
    $QueryDeslogarUsuario = "
      UPDATE tb_usuarios
      SET
        usuario_status = '2'
      WHERE id_usuario = '$IdUsuario'
    ";
    "</pre>";

    $ExeQrDeslogarUsuario = mysqli_query($connection, $QueryDeslogarUsuario);

    if( $ExeQrDeslogarUsuario ){
      "<br> Usuário desconectado, redirecionar para Login";
      "<br>";
      session_destroy();
    }
  }