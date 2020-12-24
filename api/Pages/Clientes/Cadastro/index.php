<?php
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
            <meta http-equiv='refresh' content='0;?Page=Clientes'>
        ";
    }else{
        echo "<br>Erro: " . mysqli_error($connection);
    }
}