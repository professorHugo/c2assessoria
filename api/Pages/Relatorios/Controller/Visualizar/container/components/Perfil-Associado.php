<h4 class="col-12" style="border-bottom: 1px solid #ddd">
    Perfil do associado: <?php echo $NomeAssociado ?>
</h4>
        
<div class="col-sm-12 col-md-2 float-left">
    Estado Civil: <?php echo $EstadoCivilAssociado?>
</div>
<div class="col-sm-12 col-md-3 float-left">
    Profissão: <?php echo $ProfissaoAssoc?>
</div>
<div class="col-sm-12 col-md-4 float-left">
    CNH Associado: 
    <?php 
        echo "$CNHAssociado - $StatusCNHAss";
    ?>
</div>
<div class="col-sm-12 col-md-3 float-left">
    RG: <?php echo $RGAssociado?>
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
    include "Veiculos-Extras.php";
}
if( $PrintAssociado == 1 ){
    include_once "Midias-Sociais-Associado.php";
}
?>