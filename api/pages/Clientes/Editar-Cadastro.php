<?php
echo "Id do cliente: ". $IdCliente = $_GET['id'];

$QueryBuscarDadosCliente = "SELECT * FROM tb_clientes WHERE id_cliente = '$IdCliente'";
$ExeQrBuscarDadosCliente =  mysqli_query($connection, $QueryBuscarDadosCliente);
$RowQrBuscarDadosCliente = mysqli_num_rows($ExeQrBuscarDadosCliente);

if($RowQrBuscarDadosCliente >= 1){
?>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="" width="100%" cellspacing="0">
            <thead>
            <tr>
                <th>Id</th>
                <th>Cliente</th>
                <th>Data de Cadastro</th>
                <th>Salvar</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <th>Id</th>
                <th>Cliente</th>
                <th>Data de Cadastro</th>
                <th>Salvar</th>
            </tr>
            </tfoot>
            <?php
            while($ResCliente = mysqli_fetch_assoc($ExeQrBuscarDadosCliente)){
            ?>
                <form action="?url=Clientes&Save&id=<?php echo $ResCliente['id_cliente']?>" method="post">
                    <tbody>
                    <tr>
                        <td>
                            <input type="hidden" name="id_cliente" value="<?php echo $ResCliente['id_cliente']?>">
                            <span class="form-control form-control-lg">
                                <?php echo $ResCliente['id_cliente']?>
                            </span>
                        </td>
                        <td>
                            <input 
                                type="text"
                                class="form-control form-control-lg"
                                name="nome_cliente"
                                value="<?php echo $ResCliente['nome_cliente']?>"
                            >
                        </td>
                        <td>
                            <span class="form-control form-control-lg">
                                <?php echo $ResCliente['data_cadastro']?>
                            </span>
                        </td>
                        <td>
                            <button class="btn btn-default btn-lg btn-success">
                                <i class="fas fa-fw fa-save"></i>
                            </button>
                        </td>
                    </tr>
                    </tbody>
                </form>
            <?php
                }
            ?>
        </table>
    </div>
</div>
<?php
}else{
    echo "Erro ao encontrar o cadastro do cliente, volte e tente novamente.";
}