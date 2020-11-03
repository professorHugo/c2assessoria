<h2 class="col-12 float-left">
    <div class="float-left">Tipos de Chaves apresentadas</div>
    <div class="float-right">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#CadastroChaves">
            Cadastrar <i class="fa fa-user-plus" aria-hidden="true"></i>
        </button>
    </div>
    
</h2>
<div class="col-12" style="border-top: 2px solid #bbb; margin-bottom: 1rem;float: left;height:1px"></div>
<table class="table table-bordered table-striped table-dark table-hover">
    <thead class="thead-dark">
        <tr>
            <td>#</td>
            <td>Tipo</td>
            <td>Ajuste</td>
        </tr>
    </thead>
    <tbody>
        <?php
            if( $RowQrBuscarChaves >= 1 ){
                while( $ReturnChaves = mysqli_fetch_assoc($ExeQrBuscarChaves) ){
                    ?>
                        <tr>
                            <td>
                                <?php echo $ReturnChaves['id_chave'] ?>
                            </td>
                            <td>
                                <?php echo $ReturnChaves['descricao_chave'] ?>
                            </td>
                            <td>
                                <a 
                                    style="cursor:pointer" 
                                    data-toggle="modal" 
                                    data-target="#EditarChaves<?php echo $ReturnChaves['id_chave']?>"
                                    title="Editar o cadastro"
                                >
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </a> &nbsp;
                                <?php
                                    if( $ReturnChaves['ativacao'] == 1){
                                        ?>
                                            <a 
                                                style="cursor:pointer" 
                                                data-toggle="modal" 
                                                data-target="#DesativarChaves<?php echo $ReturnChaves['id_chave']?>" 
                                                title="Chaves Ativado"
                                            >
                                                
                                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </a>
                                        <?php
                                    }else{
                                        ?>
                                            <a 
                                                style="cursor:pointer" 
                                                data-toggle="modal" 
                                                data-target="#AtivarChaves<?php echo $ReturnChaves['id_chave']?>" 
                                                title="Chaves Desativada"
                                            >
                                                <i class="fa fa-ban" aria-hidden="true"></i>
                                            </a>
                                        <?php
                                    }
                                ?>
                            </td>
                        </tr>
                    <?php

                    include "Modal-Ativar-Chaves.php";
                    include "Modal-Desativar-Chaves.php";
                    include "Modal-Editar-Chaves.php";
                }
            }else{

            }
        ?>
    </tbody>
</table>

<?php

if( isset($_POST['Cadastro']) ){
    include "Cadastro-Chaves.php";
}
if( isset($_POST['Editar']) ){
    include "Editar-Chaves.php";
}

if( isset($_POST['Ativar']) ){
    include "Ativar-Chaves.php";
}

if( isset($_POST['Desativar']) ){
    include "Desativar-Chaves.php";
}