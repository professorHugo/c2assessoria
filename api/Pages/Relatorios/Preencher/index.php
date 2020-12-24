<?php
if( $SysMode == 1 ){
  echo "<br>DEV";
  echo "<br>Permissão: " . $permissao = $_SESSION['LoginUsuario']['permissao_usuario'];
  echo "<br>Id Usuário: " . $IdUsuario = $_SESSION['LoginUsuario']['id_usuario'];
  echo "<br>Protocolo: " . $Protocolo = $_GET['Protocolo'];
  if( $permissao == 1 || $permissao == 3 ){
    echo "<br><pre>".
    $QueryBuscarRelatorios = "
      SELECT * FROM tb_relatorios relatorio
      INNER JOIN tb_associados associado
        ON relatorio.cpf_associado = associado.cpf_associado
      INNER JOIN tb_condutores condutor
        ON relatorio.protocolo_evento = condutor.protocolo_evento
      WHERE relatorio.protocolo_evento = '$Protocolo'
    ";
    echo "</pre>";
  }else{
    echo "<br><pre>".
    $QueryBuscarRelatorios = "
      SELECT * FROM 
        tb_relatorios relatorio
      INNER JOIN tb_associados associado
        ON relatorio.cpf_associado = associado.cpf_associado
      INNER JOIN tb_condutores condutor
        ON relatorio.protocolo_evento = condutor.protocolo_evento
      WHERE sindicante_evento = '$IdUsuario' && relatorio.protocolo_evento = '$Protocolo'
    ";
    echo "</pre>";
  }

  $ExeQrBuscarRelatorios = mysqli_query($connection, $QueryBuscarRelatorios);
  $RowQrByscarRelatorios = mysqli_num_rows($ExeQrBuscarRelatorios);

  while( $Endereco = mysqli_fetch_assoc($ExeQrBuscarRelatorios) ){
    $Endereco1 = $Endereco['endereco_associado'];
    $Bairro1 = $Endereco['bairro_associado'];
    $Cidade1 = $Endereco['cidade_associado'];
    $Estado1 = $Endereco['estado_associado'];
    $Cep1 = $Endereco['cep_associado'];

    $Endereco2 = $Endereco['endereco_condutor'];
    $Bairro2 = $Endereco['bairro_condutor'];
    $Cidade2 = $Endereco['cidade_condutor'];
    $Estado2 = $Endereco['estado_condutor'];
    $Cep2 = $Endereco['cep_condutor'];

    $CondutorEvento = $Endereco['condutor_veiculo'];
  }
  include "container/Dados-Relatorio.php";
  
}else{
  //Prod
  "<br>Permissão: " . $permissao = $_SESSION['LoginUsuario']['permissao_usuario'];
  "<br>Id Usuário: " . $IdUsuario = $_SESSION['LoginUsuario']['id_usuario'];
  "<br>Protocolo: " . $Protocolo = $_GET['Protocolo'];
  if( $permissao == 1 || $permissao == 3 ){
    "<br><pre>".
    $QueryBuscarRelatorios = "
      SELECT * FROM tb_relatorios relatorio
      INNER JOIN tb_associados associado
        ON relatorio.cpf_associado = associado.cpf_associado
      INNER JOIN tb_condutores condutor
        ON relatorio.protocolo_evento = condutor.protocolo_evento
      WHERE relatorio.protocolo_evento = '$Protocolo'
    ";
    "</pre>";
  }else{
    "<br><pre>".
    $QueryBuscarRelatorios = "
      SELECT * FROM 
        tb_relatorios relatorio
      INNER JOIN tb_associados associado
        ON relatorio.cpf_associado = associado.cpf_associado
      INNER JOIN tb_condutores condutor
        ON relatorio.protocolo_evento = condutor.protocolo_evento
      WHERE sindicante_evento = '$IdUsuario' && relatorio.protocolo_evento = '$Protocolo'
    ";
    "</pre>";
  }

  $ExeQrBuscarRelatorios = mysqli_query($connection, $QueryBuscarRelatorios);
  $RowQrByscarRelatorios = mysqli_num_rows($ExeQrBuscarRelatorios);

  while( $Endereco = mysqli_fetch_assoc($ExeQrBuscarRelatorios) ){
    $Endereco1 = $Endereco['endereco_associado'];
    $Bairro1 = $Endereco['bairro_associado'];
    $Cidade1 = $Endereco['cidade_associado'];
    $Estado1 = $Endereco['estado_associado'];
    $Cep1 = $Endereco['cep_associado'];

    $Endereco2 = $Endereco['endereco_condutor'];
    $Bairro2 = $Endereco['bairro_condutor'];
    $Cidade2 = $Endereco['cidade_condutor'];
    $Estado2 = $Endereco['estado_condutor'];
    $Cep2 = $Endereco['cep_condutor'];

    $CondutorEvento = $Endereco['condutor_veiculo'];
    
  }
  include "container/Dados-Relatorio.php";
}