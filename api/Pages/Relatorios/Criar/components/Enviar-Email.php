<?php
if( $SysMode == 1 ){
  //DEV
  echo "<br><pre>" . 
  $QueryBuscarSindicante = "
    SELECT * FROM 
      tb_usuarios usuario
    WHERE id_usuario = '$Sindicante'
  ";
  echo "</pre>";
  $ExeQrBuscarSindicante = mysqli_query($connection, $QueryBuscarSindicante);
  $RowQrBuscarSindicante = mysqli_num_rows($ExeQrBuscarSindicante);

  if( $RowQrBuscarSindicante = 1 ){
    while( $ReturnDadosSindicante = mysqli_fetch_assoc($ExeQrBuscarSindicante) ){
      $Email = $ReturnDadosSindicante['email_usuario'];
      $Nome = $ReturnDadosSindicante['nome_usuario'];
    }
  }
  echo "<h4>Dados para envio de e-mail e cadastro de mensagens no sistema</h4>";
  echo "<br>Nome: " . $nome = $Nome;
  echo "<br>Email: ".$email = $Email;
  echo "<br>Telefone: " . $telefone = "Não disponível";
  echo "<br>Opções: " . $opcoes = "Não Disponível";
  echo "<br> Mensagem: " . $mensagem = "Um novo relatório foi cadastrado para você, acesse o portal e faça a sindicância";
  echo "<br>Data do Envio: " . $data_envio = date('d/m/Y');
  echo "<br>Hora do Envio: " . $hora_envio = date('H:i:s');

  // Compo E-mail
  include 'Compo-Email.php';


  $EmailC2Assessoria = EMAIL;
  // emails para quem será enviado o formulário
  $emailenviar = $email;
  $destino = $emailenviar;
  $assunto = "Novo relatório de Sindicância";

  // É necessário indicar que o formato do e-mail é html
  $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      $headers .= "From: " . SITENAME . "<$EmailC2Assessoria>";
  //$headers .= "Bcc: $EmailPadrao\r\n";

  $enviaremail = mail($destino, $assunto, $arquivo, $headers);
  if($enviaremail){
  $mgm = "E-MAIL ENVIADO COM SUCESSO! <br> O link será enviado para o e-mail fornecido no formulário";
  } else {
  $mgm = "ERRO AO ENVIAR E-MAIL!";
  echo "";
  }
}else{

  //PROD
  "<br><pre>" . 
  $QueryBuscarSindicante = "
    SELECT * FROM 
      tb_usuarios usuario
    WHERE id_usuario = '$Sindicante'
  ";
  "</pre>";
  $ExeQrBuscarSindicante = mysqli_query($connection, $QueryBuscarSindicante);
  $RowQrBuscarSindicante = mysqli_num_rows($ExeQrBuscarSindicante);

  if( $RowQrBuscarSindicante = 1 ){
    while( $ReturnDadosSindicante = mysqli_fetch_assoc($ExeQrBuscarSindicante) ){
      $Email = $ReturnDadosSindicante['email_usuario'];
      $Nome = $ReturnDadosSindicante['nome_usuario'];
    }
  }
  "<h4>Dados para envio de e-mail e cadastro de mensagens no sistema</h4>";
  "<br>Nome: " . $nome = $Nome;
  "<br>Email: ".$email = $Email;
  "<br>Telefone: " . $telefone = "Não disponível";
  "<br>Opções: " . $opcoes = "Não Disponível";
  "<br> Mensagem: " . $mensagem = "Um novo relatório foi cadastrado para você, acesse o portal e faça a sindicância";
  "<br>Data do Envio: " . $data_envio = date('d/m/Y');
  "<br>Hora do Envio: " . $hora_envio = date('H:i:s');

  // Compo E-mail
  include 'Compo-Email.php';


  $EmailC2Assessoria = EMAIL;
  // emails para quem será enviado o formulário
  $emailenviar = $email;
  $destino = $emailenviar;
  $assunto = "Novo relatório de Sindicância";

  // É necessário indicar que o formato do e-mail é html
  $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      $headers .= "From: " . SITENAME . "<$EmailC2Assessoria>";
  //$headers .= "Bcc: $EmailPadrao\r\n";

  $enviaremail = mail($destino, $assunto, $arquivo, $headers);
  if($enviaremail){
  $mgm = "E-MAIL ENVIADO COM SUCESSO! <br> O link será enviado para o e-mail fornecido no formulário";
  } else {
  $mgm = "ERRO AO ENVIAR E-MAIL!";
  echo "";
  }
}
