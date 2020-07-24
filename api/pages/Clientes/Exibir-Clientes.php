<?php
$QueryBuscarClientes = "SELECT * FROM tb_clientes";
$ExeQrBuscarClientes = mysqli_query($connection, $QueryBuscarClientes);
$RowQrByscarClientes = mysqli_num_rows($ExeQrBuscarClientes);

if($RowQrByscarClientes > 1){
    ?>
    <!-- Table de Clientes -->
    <div class="card mb-3">
        <div class="card-header">
            <a href="?url=Clientes&Cadastrar">
                <i class="fas fa-file-medical fa-fw"></i>
                Adicionar Clientes
                </i>
            </a>
        </div>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Cliente</th>
                    <th>Data de Cadastro</th>
                    <th>Editar</th>
                    <th>Apagar</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Id</th>
                    <th>Cliente</th>
                    <th>Data de Cadastro</th>
                    <th>Editar</th>
                    <th>Apagar</th>
                </tr>
                </tfoot>

        <?php
            while($ResQrBuscarClientes = mysqli_fetch_assoc($ExeQrBuscarClientes)){
        ?>
                
                <tbody>
                <tr>
                    <td>
                        <?php echo $ResQrBuscarClientes['id_cliente']?>
                    </td>
                    <td>
                        <?php echo $ResQrBuscarClientes['nome_cliente']?>
                    </td>
                    <td>
                        <?php echo $ResQrBuscarClientes['data_cadastro']?>
                    </td>
                    <td>
                        <a 
                            href="?url=Clientes&Editar&id=<?php echo $ResQrBuscarClientes['id_cliente']?>"
                            class="text-secondary"
                        >
                            <i class="fas fa-fw fa-user-edit"></i>
                        </a>
                    </td>
                    <td>
                        <a href="?url=Clientes&Delete&id=<?php echo $ResQrBuscarClientes['id_cliente']?>" class="text-danger">
                            <i class="fas fa-fw fa-user-minus"></i>
                        </a>
                    </td>
                </tr>
                </tbody>
        <?php
        }
        ?>
            </table>
        </div>
        <div class="card-footer small text-muted">Atualizado em <?php echo date('d/m/yy')?> às <?php echo date('h:i:sa');?></div>
    </div>
    <?php
}else{
    echo "<br><h1>Não há clientes cadastrados no sistema</h1>";
}