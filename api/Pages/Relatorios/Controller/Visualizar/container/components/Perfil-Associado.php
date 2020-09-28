<?php 
     "<br><pre>".
    $QueryBuscarCNHAssociado = "
        SELECT * FROM 
            tb_cnh_registros cnh
        WHERE
            protocolo_cnh = '$Protocolo' &&
            dono_cnh = '1'
    ";
     "</pre>";
    $ExeQrBuscarCNHAssociado = mysqli_query($connection, $QueryBuscarCNHAssociado);
    $RowQrBuscarCNHAssociado = mysqli_num_rows($ExeQrBuscarCNHAssociado);
    if( $RowQrBuscarCNHAssociado >=1 ){
    
        while( $ReturnCnhAssociado = mysqli_fetch_assoc($ExeQrBuscarCNHAssociado) ){
            $CNHAssociado = 
                $ReturnCnhAssociado['registro_cnh']."-". 
                $ReturnCnhAssociado['status_cnh'];
            $RGAssociado = 
                $ReturnCnhAssociado['rg_cnh']. " / ".
                $ReturnCnhAssociado['emissor_rg_cnh']."-".
                $ReturnCnhAssociado['uf_rg_cnh'];
            $CPFAssociado = $ReturnCnhAssociado['cpf_cnh'];
            $PermissaoAssociado = $ReturnCnhAssociado['permissao_cnh'];
            $AACAssociado = $ReturnCnhAssociado['aac_cnh'];
            $CategoriaCNHAssociado = $ReturnCnhAssociado['categoria_cnh'];
            $ValidadeCNHAssociado = $ReturnCnhAssociado['validade_cnh'];
            $PrimeiraHabAssociado = $ReturnCnhAssociado['primeira_hab'];
            $FotoCNHAssociado = $ReturnCnhAssociado['img_cnh'];
        }
    }else{
        echo "<br>Erro: " . mysqli_error($connection);
    }
?>

<h4 class="col-12" style="border-bottom: 1px solid #ddd">
    Perfil do associado: <?php echo $NomeAssociado ?>
</h4>
        
<div class="col-sm-12 col-md-3 float-left">
    Estado Civil: <?php echo $EstadoCivilAssociado?>
</div>
<div class="col-sm-12 col-md-3 float-left">
    Profissão: <?php echo $ProfissaoAssoc?>
</div>

<div class="col-sm-12 col-md-3 float-left">
    RG: <?php echo $RGAssociado?>
</div>
<div class="col-sm-12 col-md-3 float-left">
    CPF: <?php echo $CPFAssociado?>
</div>

<div class="col-12" style="margin-top: 2rem"></div>
<h5 class="col-12" style="border-bottom: 1px solid #ddd">CNH do Condutor: </h5>

<div class="col-sm-12 col-md-3">
    Registro: 
    <?php 
        echo $CNHAssociado;
        if($PermissaoCondutor == 'Permissao' ){
            echo " (Permissão)";
        }
    ?>
</div>
<div class="col-sm-12 col-md-2">
    Categoria: <?php echo $CategoriaCNHAssociado?>
</div>

<div class="col-sm-12 col-md-2">
    AAC: <?php if( $AACAssociado == 'AAC' ){echo "Sim";}else{echo "Não";}?>
</div>
<div class="col-sm-12 col-md-2">
    1ª Hab: 
    <?php 
        echo date("d-m-Y", strtotime($PrimeiraHabAssociado));
    ?>
</div>
<div class="col-sm-12 col-md-2">
    VAL: 
    <?php 
        echo date("d-m-Y", strtotime($ValidadeCNHAssociado));
    ?>
</div>

<div class="col-12" style="margin-top: 2rem"></div>
<h5 class="col-12">Domicílio: </h5>
<div class="col-sm-12 col-md-2 float-left">
    CEP: <?php echo $CEPAssociado?>
</div>
<div class="col-sm-12 col-md-10">
    
        Logadouro: 
        <?php echo "$EndAssociado - $BairroAssoc"?>
    
</div>

<?php
if( $Veiculo2 != "" && $Veiculo3 != "" && $Veiculo4 != "" ){
    include "Veiculos-Extras-Associado.php";
}
if( $PrintAssociado == 1 ){
    include_once "Midias-Sociais-Associado.php";
}
?>