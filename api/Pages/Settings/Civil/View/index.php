<h2 class="col-12 float-left">
    <div class="float-left">Tipos de Estados Civis</div>
    <div class="float-right">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#CadastroCivil">
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
            if( $RowQrBuscarCivil >= 1 ){
                while( $ReturnCivil = mysqli_fetch_assoc($ExeQrBuscarCivil) ){
                    ?>
                        <tr>
                            <td>
                                <?php echo $ReturnCivil['id_civil'] ?>
                            </td>
                            <td>
                                <?php echo $ReturnCivil['descricao_civil'] ?>
                            </td>
                            <td>
                                <a 
                                    style="cursor:pointer" 
                                    data-toggle="modal" 
                                    data-target="#EditarCivil<?php echo $ReturnCivil['id_civil']?>"
                                    title="Editar o cadastro"
                                >
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </a> &nbsp;
                                <?php
                                    if( $ReturnCivil['ativacao'] == 1){
                                        ?>
                                            <a 
                                                style="cursor:pointer" 
                                                data-toggle="modal" 
                                                data-target="#DesativarCivil<?php echo $ReturnCivil['id_civil']?>" 
                                                title="Civil Ativada"
                                            >
                                                
                                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </a>
                                        <?php
                                    }else{
                                        ?>
                                            <a 
                                                style="cursor:pointer" 
                                                data-toggle="modal" 
                                                data-target="#AtivarCivil<?php echo $ReturnCivil['id_civil']?>" 
                                                title="Civil Desativada"
                                            >
                                                <i class="fa fa-ban" aria-hidden="true"></i>
                                            </a>
                                        <?php
                                    }
                                ?>
                            </td>
                        </tr>
                    <?php

                    include "Modal-Ativar-Civil.php";
                    include "Modal-Desativar-Civil.php";
                    include "Modal-Editar-Civil.php";
                }
            }else{

            }
        ?>
    </tbody>
</table>

<?php

if( isset($_POST['Cadastro']) ){
    include "Cadastro-Civil.php";
}
if( isset($_POST['Editar']) ){
    include "Editar-Civil.php";
}

if( isset($_POST['Ativar']) ){
    include "Ativar-Civil.php";
}

if( isset($_POST['Desativar']) ){
    include "Desativar-Civil.php";
}