<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>Desativar o cadastro";
    $IdCliente = $_POST['id_cliente'];
    $NomeCliente = $_POST['nome'];
    $EmailCliente = $_POST['email'];
    $TelefoneCliente = $_POST['telefone'];
    $ContatoCliente = $_POST['contato'];
    $UpdateCliente = date('Y-m-d H:i:s');
    
    echo "<br>Id: " . $IdCliente;
    echo "<br>Nome: " . $NomeCliente;
    echo "<br>Email: " . $EmailCliente;
    echo "<br>Telefone: " . $TelefoneCliente;
    echo "<br>Contato: " . $ContatoCliente;
    echo "<br>Update: " . $UpdateCliente;
    
    echo "<br><pre>" . 
    $QueryDesativarClientes = "
      UPDATE tb_clientes
      SET
        nome_cliente = '$NomeCliente',
        email_cliente = '$EmailCliente',
        telefone_cliente = '$TelefoneCliente',
        contato_cliente = '$ContatoCliente',
        data_update = '$UpdateCliente',
        ativacao = '2'
      WHERE id_cliente = '$IdCliente'
    ";
    echo "</pre>";
    $ExeQrDesativarClientes = mysqli_query($connection, $QueryDesativarClientes);
    if( $ExeQrDesativarClientes ){
      echo "<br>Cadastro do cliente <b>$NomeCliente</b> Desativado";
      echo "
        <a href='?Page=Clientes' class='btn btn-primary'>Voltar</a>
      ";
    }
  }else{

    //PROD


    "<br>Desativar o cadastro";
    $IdCliente = $_POST['id_cliente'];
    $NomeCliente = $_POST['nome'];
    $EmailCliente = $_POST['email'];
    $TelefoneCliente = $_POST['telefone'];
    $ContatoCliente = $_POST['contato'];
    $UpdateCliente = date('Y-m-d H:i:s');
    
    "<br>Id: " . $IdCliente;
    "<br>Nome: " . $NomeCliente;
    "<br>Email: " . $EmailCliente;
    "<br>Telefone: " . $TelefoneCliente;
    "<br>Contato: " . $ContatoCliente;
    "<br>Update: " . $UpdateCliente;
    
    "<br><pre>" . 
    $QueryDesativarClientes = "
      UPDATE tb_clientes
      SET
        nome_cliente = '$NomeCliente',
        email_cliente = '$EmailCliente',
        telefone_cliente = '$TelefoneCliente',
        contato_cliente = '$ContatoCliente',
        data_update = '$UpdateCliente',
        ativacao = '2'
      WHERE id_cliente = '$IdCliente'
    ";
    "</pre>";
    $ExeQrDesativarClientes = mysqli_query($connection, $QueryDesativarClientes);
    if( $ExeQrDesativarClientes ){
      include 'Modal-Desativar-Cliente.php';
    }
  }