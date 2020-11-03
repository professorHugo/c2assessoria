<h2 class="col-12 float-left">
    <div class="float-left">Tipos de Sistemas Anti-Furto</div>
    <div class="float-right">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#CadastroAntiFurto">
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
            if( $RowQrBuscarAntiFurto >= 1 ){
                while( $ReturnAntiFurto = mysqli_fetch_assoc($ExeQrBuscarAntiFurto) ){
                    ?>
                        <tr>
                            <td>
                                <?php echo $ReturnAntiFurto['id_sistema'] ?>
                            </td>
                            <td>
                                <?php echo $ReturnAntiFurto['tipo_sistema'] ?>
                            </td>
                            <td>
                                <a 
                                    style="cursor:pointer" 
                                    data-toggle="modal" 
                                    data-target="#EditarAntiFurto<?php echo $ReturnAntiFurto['id_sistema']?>"
                                    title="Editar o cadastro"
                                >
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </a> &nbsp;
                                <?php
                                    if( $ReturnAntiFurto['ativacao'] == 1){
                                        ?>
                                            <a 
                                                style="cursor:pointer" 
                                                data-toggle="modal" 
                                                data-target="#DesativarAntiFurto<?php echo $ReturnAntiFurto['id_sistema']?>" 
                                                title="AntiFurto Ativado"
                                            >
                                                
                                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </a>
                                        <?php
                                    }else{
                                        ?>
                                            <a 
                                                style="cursor:pointer" 
                                                data-toggle="modal" 
                                                data-target="#AtivarAntiFurto<?php echo $ReturnAntiFurto['id_sistema']?>" 
                                                title="AntiFurto Desativada"
                                            >
                                                <i class="fa fa-ban" aria-hidden="true"></i>
                                            </a>
                                        <?php
                                    }
                                ?>
                            </td>
                        </tr>
                    <?php

                    include "Modal-Ativar-AntiFurto.php";
                    include "Modal-Desativar-AntiFurto.php";
                    include "Modal-Editar-AntiFurto.php";
                }
            }else{

            }
        ?>
    </tbody>
</table>

<?php

if( isset($_POST['Cadastro']) ){
    include "Cadastro-AntiFurto.php";
}
if( isset($_POST['Editar']) ){
    include "Editar-AntiFurto.php";
}

if( isset($_POST['Ativar']) ){
    include "Ativar-AntiFurto.php";
}

if( isset($_POST['Desativar']) ){
    include "Desativar-AntiFurto.php";
}