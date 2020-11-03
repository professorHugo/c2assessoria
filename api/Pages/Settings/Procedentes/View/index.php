<h2 class="col-12 float-left">
    <div class="float-left">Tipos de Procedentes</div>
    <div class="float-right">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#CadastroProcedente">
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
            if( $RowQrBuscarProcedente >= 1 ){
                while( $ReturnProcedente = mysqli_fetch_assoc($ExeQrBuscarProcedente) ){
                    ?>
                        <tr>
                            <td>
                                <?php echo $ReturnProcedente['id_procedente'] ?>
                            </td>
                            <td>
                                <?php echo $ReturnProcedente['descricao_procedente'] ?>
                            </td>
                            <td>
                                <a 
                                    style="cursor:pointer" 
                                    data-toggle="modal" 
                                    data-target="#EditarProcedentes<?php echo $ReturnProcedente['id_procedente']?>"
                                    title="Editar o cadastro"
                                >
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </a> &nbsp;
                                <?php
                                    if( $ReturnProcedente['ativacao'] == 1){
                                        ?>
                                            <a 
                                                style="cursor:pointer" 
                                                data-toggle="modal" 
                                                data-target="#DesativarProcedente<?php echo $ReturnProcedente['id_procedente']?>" 
                                                title="Procedente Ativado"
                                            >
                                                
                                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </a>
                                        <?php
                                    }else{
                                        ?>
                                            <a 
                                                style="cursor:pointer" 
                                                data-toggle="modal" 
                                                data-target="#AtivarProcedente<?php echo $ReturnProcedente['id_procedente']?>" 
                                                title="Procedente Desativada"
                                            >
                                                <i class="fa fa-ban" aria-hidden="true"></i>
                                            </a>
                                        <?php
                                    }
                                ?>
                            </td>
                        </tr>
                    <?php

                    include "Modal-Ativar-Procedente.php";
                    include "Modal-Desativar-Procedente.php";
                    include "Modal-Editar-Procedente.php";
                }
            }else{

            }
        ?>
    </tbody>
</table>

<?php

if( isset($_POST['Cadastro']) ){
    include "Cadastro-Procedente.php";
}
if( isset($_POST['Editar']) ){
    include "Editar-Procedente.php";
}

if( isset($_POST['Ativar']) ){
    include "Ativar-Procedente.php";
}

if( isset($_POST['Desativar']) ){
    include "Desativar-Procedente.php";
}