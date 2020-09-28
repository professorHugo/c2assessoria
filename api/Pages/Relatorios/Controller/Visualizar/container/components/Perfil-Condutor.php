
<div class="col-12" style="margin-top: 4rem"></div>

<?php 
     "<br><pre>".
    $QueryBuscarCNHCondutor = "
        SELECT * FROM 
            tb_cnh_registros cnh
        WHERE
            protocolo_cnh = '$Protocolo' &&
            dono_cnh = '2'
    ";
     "</pre>";
    $ExeQrBuscarCNHCondutor = mysqli_query($connection, $QueryBuscarCNHCondutor);
    $RowQrBuscarCNHCondutor = mysqli_num_rows($ExeQrBuscarCNHCondutor);
    if( $RowQrBuscarCNHCondutor >=1 ){
    
        while( $ReturnCnhCondutor = mysqli_fetch_assoc($ExeQrBuscarCNHCondutor) ){
            $CNHCondutor = 
                $ReturnCnhCondutor['registro_cnh']."-". 
                $ReturnCnhCondutor['status_cnh'];
            $RGCondutor = 
                $ReturnCnhCondutor['rg_cnh']. " / ".
                $ReturnCnhCondutor['emissor_rg_cnh']."-".
                $ReturnCnhCondutor['uf_rg_cnh'];
            $CPFCondutor = $ReturnCnhCondutor['cpf_cnh'];
            $PermissaoCondutor = $ReturnCnhCondutor['permissao_cnh'];
            $AACCondutor = $ReturnCnhCondutor['aac_cnh'];
            $CategoriaCNHCondutor = $ReturnCnhCondutor['categoria_cnh'];
            $ValidadeCNHCondutor = $ReturnCnhCondutor['validade_cnh'];
            $PrimeiraHabCondutor = $ReturnCnhCondutor['primeira_hab'];
            $FotoCNHCondutor = $ReturnCnhCondutor['img_cnh'];
        }
    }else{
        echo "<br>Erro: " . mysqli_error($connection);
    }
?>

<h4 class="col-12" style="border-bottom: 1px solid #ddd">Perfil do Condutor <?php echo $NomeCondutor?></h4>


<div class="col-sm-12 col-md-3 float-left">
    Estado Civil: <?php echo $EstadoCivilCondutor?>
</div>
<div class="col-sm-12 col-md-3 float-left">
    Profissão: <?php echo $ProfissaoCond?>
</div>
<div class="col-sm-12 col-md-3 float-left">
    RG: <?php echo $RGCondutor?>
</div>
<div class="col-sm-12 col-md-3 float-left">
    CPF: <?php echo $CPFCondutor?>
</div>
<div class="col-12" style="margin-top: 2rem"></div>
<h5 class="col-12" style="border-bottom: 1px solid #ddd">CNH do Condutor: </h5>

<div class="col-sm-12 col-md-3">
    Registro: 
    <?php 
        echo $CNHCondutor;
        if($PermissaoCondutor == 'Permissao' ){
            echo " (Permissão)";
        }
    ?>
</div>

<div class="col-sm-12 col-md-2">
    Categoria: <?php echo $CategoriaCNHCondutor?>
</div>

<div class="col-sm-12 col-md-2">
    AAC: <?php if( $AACCondutor == 'AAC' ){echo "Sim";}else{echo "Não";}?>
</div>
<div class="col-sm-12 col-md-2">
    1ª Hab: 
    <?php 
        echo date("d-m-Y", strtotime($PrimeiraHabCondutor));
    ?>
</div>
<div class="col-sm-12 col-md-2">
    VAL: 
    <?php 
        echo date("d-m-Y", strtotime($ValidadeCNHCondutor));
    ?>
</div>
