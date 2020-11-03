<?php
// include "Querys/QueryBuscarMensagens.php";
$QueryBuscarMensagens = "
    SELECT * FROM tb_mensagens WHERE receptor_mensagem = '$IdUsuario'
";
$ExeQrBuscarMensagens = mysqli_query($connection, $QueryBuscarMensagens);
if( mysqli_num_rows($ExeQrBuscarMensagens) > 0 ){
 if( mysqli_num_rows($ExeQrBuscarMensagens) > 1 ){
  echo mysqli_num_rows($ExeQrBuscarMensagens) . " Mensagens";
 }else{
  echo mysqli_num_rows($ExeQrBuscarMensagens) . " Mensagem";
 }
}else{
    echo "Nenhuma Mensagem";
}