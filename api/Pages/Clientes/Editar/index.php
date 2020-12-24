<?php
 "<br>Editar o cadastro";
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
$QueryEditarClientes = "
    UPDATE tb_clientes
    SET
        nome_cliente = '$NomeCliente',
        email_cliente = '$EmailCliente',
        telefone_cliente = '$TelefoneCliente',
        contato_cliente = '$ContatoCliente',
        data_update = '$UpdateCliente'
    WHERE id_cliente = '$IdCliente'
";
 "</pre>";
$ExeQrEditarClientes = mysqli_query($connection, $QueryEditarClientes);
if( $ExeQrEditarClientes ){
    // echo "<br>Cadastro do cliente <b>$NomeCliente</b> Editado";
    echo "
        <meta http-equiv='refresh' content='0;?Page=Clientes'>
    ";
}