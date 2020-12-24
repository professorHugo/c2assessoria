<h2 class="col-12 float-left">
    <div class="float-left">Clientes Cadastrados</div>
    <div class="float-right">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#CadastroCliente">
            Cadastrar <i class="fa fa-user-plus" aria-hidden="true"></i>
        </button>
    </div>
    
</h2>
<div class="col-12" style="border-top: 2px solid #bbb; margin-bottom: 1rem;float: left;height:1px"></div>
<table class="table table-bordered table-striped table-dark table-hover">
    <thead class="thead-dark">
        <tr>
            <td>Nome</td>
            <td>Relaórios</td>
            <td>Data Cadastro</td>
            <td>Contato</td>
            <td>Edição</td>
        </tr>
    </thead>
    <tbody>
        <?php
        "<br><pre>".
        $QueryBuscarClientes = "
            SELECT * FROM 
            tb_clientes
        ";
        "</pre>";
        $ExeQrBuscarClientes = mysqli_query($connection, $QueryBuscarClientes);
        $RowQrBuscarClientes = mysqli_num_rows($ExeQrBuscarClientes);

        if( $RowQrBuscarClientes >= 1 ){
            while( $ReturnClientes = mysqli_fetch_assoc($ExeQrBuscarClientes) ){
                ?>

                    <tr>
                        <td><?php echo $ReturnClientes['nome_cliente']?></td>
                        <td>
                            <?php
                                  
                                $QueryBuscarRelatorios = "
                                    SELECT solicitante_evento FROM 
                                        tb_relatorios 
                                    WHERE 
                                        solicitante_evento = '$ReturnClientes[id_cliente]'
                                ";
                                $ExeQrBuscarRelatorios = mysqli_query($connection, $QueryBuscarRelatorios);
                                if( $ExeQrBuscarRelatorios ){
                                    echo mysqli_num_rows($ExeQrBuscarRelatorios);
                                }else{
                                    echo "0";
                                }
                                
                            ?>
                        </td>
                        <td><?php echo date('d/m/Y', strtotime($ReturnClientes['data_cadastro']))?></td>
                        <td>
                            <a 
                                title="Chamar no WhatsApp" 
                                href="
                                    https://api.whatsapp.com/send?phone=<?php echo $ReturnClientes['telefone_cliente']?>&text=Olá <?php echo $ReturnClientes['contato_cliente']?>
                                "
                                target="_blank"
                            >
                                <i class="fa fa-whatsapp" aria-hidden="true"></i>
                            </a> &nbsp;
                            <a href="mailto:<?php echo $ReturnClientes['email_cliente']?>" title="Enviar e-mail">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </a>
                        </td>
                        <td class="edicao">
                            <a 
                                style="cursor:pointer" 
                                data-toggle="modal" 
                                data-target="#EditarCliente<?php echo $ReturnClientes['id_cliente']?>"
                                title="Editar o cadastro"
                            >
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            </a> &nbsp;
                            <?php
                                if( $ReturnClientes['ativacao'] == 1){
                                    ?>
                                        <a 
                                            style="cursor:pointer" 
                                            data-toggle="modal" 
                                            data-target="#DesativarCliente<?php echo $ReturnClientes['id_cliente']?>" 
                                            title="Cliente Ativado"
                                        >
                                            
                                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                                        </a>
                                    <?php
                                }else{
                                    ?>
                                        <a 
                                            style="cursor:pointer" 
                                            data-toggle="modal" 
                                            data-target="#AtivarCliente<?php echo $ReturnClientes['id_cliente']?>" 
                                            title="Cliente Desativado"
                                        >
                                            <i class="fa fa-ban" aria-hidden="true"></i>
                                        </a>
                                    <?php
                                }
                            ?>
                            
                        </td>
                    </tr>
                <?php

                include "Modal/Modal-Editar-Cliente.php";
                include "Modal/Modal-Desativar-Cliente.php";
                include "Modal/Modal-Ativar-Cliente.php";

            }
        }
        ?>
    </tbody>
</table>

<?php
if( isset($_POST['Cadastro']) ){
    include_once "Cadastro/index.php";
}
if( isset($_POST['Editar']) ){
    include_once "Editar/index.php";
}
if( isset($_POST['Desativar']) ){
    include_once "Desativar/index.php";
}
if( isset($_POST['Ativar']) ){
    include_once "Ativar/index.php";
}