<?php
if(isset($_GET['Cadastrar'])){
    include_once "pages/Associados/Cadastro-Associado.php";
}else if(isset($_GET['Ver'])){
    include_once "pages/Associados/Ver-Associado.php";
}else{

    $QueryBuscarClientes = "SELECT * FROM tb_associados";
    $ExeQrBuscarClientes = mysqli_query($connection, $QueryBuscarClientes);
    $QtdQrBuscarClientes = mysqli_num_rows($ExeQrBuscarClientes);

    if( $QtdQrBuscarClientes >= 0){
        while($DadosCliente = mysqli_fetch_assoc($ExeQrBuscarClientes)){
            ?>
            <!-- DataTables Example -->
            <div class="card mb-3">
            <div class="card-header">
                <a href="?url=Associados&Cadastrar">
                    <i class="fas fa-user-plus text-primary">
                    Adicionar Cliente
                    </i>
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                <table class="table table-bordered" id="" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Documentos</th>
                        <th>Seguradora</th>
                        <th>Cadastro</th>
                        <th>Apagar</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Nome</th>
                        <th>Documentos</th>
                        <th>Seguradora</th>
                        <th>Todos os Dados</th>
                        <th>Apagar</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    <tr>
                        <td>
                            <?php echo $DadosCliente['nome_associado']?>
                        </td>
                        <td>
                            <?php echo 
                                "CPF: ".$DadosCliente['cpf_associado'] . "<br>" .
                                "RG: ". $DadosCliente['rg_associado']
                            ?>
                        </td>
                        <td>
                            <?php echo $DadosCliente['seguradora_associado']?>
                        </td>
                        <td>
                            <a href="?url=Associados&Ver&id=<?php echo $DadosCliente['id_associado']?>">
                                Ver
                            </a>
                        </td>
                        <td>
                            <a href="?url=Associados&delete&id=<?php echo $DadosCliente['id_associado']?>" class="text-danger">
                                <i class="fas fa-fw fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    </tbody>
                </table>
                </div>
            </div>
            <div class="card-footer small text-muted">Atualizado em <?php echo date('d/m/yy')?> às <?php echo date('h:i:sa');?></div>
            </div>
            <?php
        }
    }else{
        echo 'Nada Encontrado';
    }
}