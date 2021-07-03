<?php
  if( $SysMode == 1 ){
    //DEV

    $NomeCliente = $_POST['nome'];
    $EmailCliente = $_POST['email'];
    $TelefoneCliente = "+55".$_POST['telefone'];
    $ContatoCliente = $_POST['contato'];
    $DataCadastroCliente = date('Y-m-d');

    echo "<br>Nome: " . $NomeCliente;
    echo "<br>Email: " . $EmailCliente;
    echo "<br>Telefone: " . $TelefoneCliente;
    echo "<br>Contato: " . $ContatoCliente;
    echo "<br>DataCadastro: " . $DataCadastroCliente;

    echo "<br><pre>" . 
    $QueryBuscarClientes = "
      SELECT * FROM tb_clientes
      WHERE nome_cliente = '$NomeCliente'
    ";
    echo "</pre>";
    $ExeQrBuscarClientes = mysqli_query($connection, $QueryBuscarClientes);
    $RowQrBuscarClientes = mysqli_num_rows($ExeQrBuscarClientes);

    if( $RowQrBuscarClientes <= 1 ){
      //cadastrar o cliente
      echo "<br><pre>" . 
      $QueryCadastrarCliente = "
        INSERT INTO tb_clientes(
          nome_cliente,
          email_cliente,
          telefone_cliente,
          contato_cliente,
          data_cadastro
        )VALUES(
          '$NomeCliente',
          '$EmailCliente',
          '$TelefoneCliente',
          '$ContatoCliente',
          '$DataCadastroCliente'
        )
      ";
      echo "</pre>";
      $ExeQrCadastrarCliente = mysqli_query($connection, $QueryCadastrarCliente);

      if( $ExeQrCadastrarCliente ){
        echo "<br>Cliente <b>$NomeCliente</b> cadastrado";
        echo "
          <a href='?Page=Clientes' class='btn btn-primary'>Voltar</a>
        ";
      }else{
        echo "<br>Erro: " . mysqli_error($connection);
      }
    }
  }else{

    //PROD


    $NomeCliente = $_POST['nome'];
    $EmailCliente = $_POST['email'];
    $TelefoneCliente = "+55".$_POST['telefone'];
    $ContatoCliente = $_POST['contato'];
    $DataCadastroCliente = date('Y-m-d');

    "<br>Nome: " . $NomeCliente;
    "<br>Email: " . $EmailCliente;
    "<br>Telefone: " . $TelefoneCliente;
    "<br>Contato: " . $ContatoCliente;
    "<br>DataCadastro: " . $DataCadastroCliente;

    "<br><pre>" . 
    $QueryBuscarClientes = "
      SELECT * FROM tb_clientes
      WHERE nome_cliente = '$NomeCliente'
    ";
    "</pre>";
    $ExeQrBuscarClientes = mysqli_query($connection, $QueryBuscarClientes);
    $RowQrBuscarClientes = mysqli_num_rows($ExeQrBuscarClientes);

    if( $RowQrBuscarClientes <= 1 ){
      //cadastrar o cliente
      "<br><pre>" . 
      $QueryCadastrarCliente = "
        INSERT INTO tb_clientes(
          nome_cliente,
          email_cliente,
          telefone_cliente,
          contato_cliente,
          data_cadastro
        )VALUES(
          '$NomeCliente',
          '$EmailCliente',
          '$TelefoneCliente',
          '$ContatoCliente',
          '$DataCadastroCliente'
        )
      ";
      "</pre>";
      $ExeQrCadastrarCliente = mysqli_query($connection, $QueryCadastrarCliente);

      if( $ExeQrCadastrarCliente ){
        include 'Modal-Cadastrar-Cliente.php' ;
      }else{
        echo "<br>Erro: " . mysqli_error($connection);
      }
    }
  }