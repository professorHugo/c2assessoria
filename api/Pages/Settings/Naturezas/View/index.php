<h2 class="col-12 float-left">
    <div class="float-left">Naturezas dos eventos</div>
    <div class="float-right">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#CadastroNaturezas">
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
            if( $RowQrBuscarNaturezas >= 1 ){
                while( $ReturnNaturezas = mysqli_fetch_assoc($ExeQrBuscarNaturezas) ){
                    ?>
                        <tr>
                            <td>
                                <?php echo $ReturnNaturezas['id_natureza'] ?>
                            </td>
                            <td>
                                <?php echo $ReturnNaturezas['descricao_natureza'] ?>
                            </td>
                            <td>
                                <a 
                                    style="cursor:pointer" 
                                    data-toggle="modal" 
                                    data-target="#EditarNatureza<?php echo $ReturnNaturezas['id_natureza']?>"
                                    title="Editar o cadastro"
                                >
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </a> &nbsp;
                                <?php
                                    if( $ReturnNaturezas['ativacao'] == 1){
                                        ?>
                                            <a 
                                                style="cursor:pointer" 
                                                data-toggle="modal" 
                                                data-target="#DesativarNatureza<?php echo $ReturnNaturezas['id_natureza']?>" 
                                                title="Natureza Ativada"
                                            >
                                                
                                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </a>
                                        <?php
                                    }else{
                                        ?>
                                            <a 
                                                style="cursor:pointer" 
                                                data-toggle="modal" 
                                                data-target="#AtivarNatureza<?php echo $ReturnNaturezas['id_natureza']?>" 
                                                title="Natureza Desativada"
                                            >
                                                <i class="fa fa-ban" aria-hidden="true"></i>
                                            </a>
                                        <?php
                                    }
                                ?>
                            </td>
                        </tr>
                    <?php

                    include "Modal-Ativar-Natureza.php";
                    include "Modal-Desativar-Natureza.php";
                    include "Modal-Editar-Natureza.php";
                }
            }else{

            }
        ?>
    </tbody>
</table>

<?php

if( isset($_POST['Cadastro']) ){
    include "Cadastro-Natureza.php";
}
if( isset($_POST['Editar']) ){
    include "Editar-Natureza.php";
}

if( isset($_POST['Ativar']) ){
    include "Ativar-Natureza.php";
}

if( isset($_POST['Desativar']) ){
    include "Desativar-Natureza.php";
}