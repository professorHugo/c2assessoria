<h5>Relatório de Sindicância: <?php echo $_GET['Cadastrar']?></h5>
<ul>
    <li>Passo <?php echo $_GET['Step']?> - Condutor do veículo</li>
</ul>
<b>Resultado: <span class="text-danger"><?php echo "Análise";?></span></b>
<hr>

<?php
include_once "Dados-Passo4.php";//Incluir os dados inseridos para Insert

include_once "Form.php";

if( $_POST['outro_veiculo'] == 1){

    include_once "container/Associado-Veiculo-Adicional.php"; //Captar dados dos veículos adicionais ASSOCIADO
    switch( $veiculosQuantidade ){
        case 1:
            include_once "container/Cadastro-Veiculos/Veiculo1.php";
        break;
        case 2:
            include_once "container/Cadastro-Veiculos/Veiculo1.php";
            include_once "container/Cadastro-Veiculos/Veiculo2.php";
        break;
        case 3:
            include_once "container/Cadastro-Veiculos/Veiculo1.php";
            include_once "container/Cadastro-Veiculos/Veiculo2.php";
            include_once "container/Cadastro-Veiculos/Veiculo3.php";
        break;
    }
}
include_once "container/Prints-Midias-Sociais.php";
include_once "Update-Veiculos-Associado.php";
