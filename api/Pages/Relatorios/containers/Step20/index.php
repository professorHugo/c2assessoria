<style>
@media(max-width: 700px){
    #telefone_terceiro{
        margin-top: 20px
    }
    #return_comprovante_mobilidade2 label#telefone_terceiro{
        margin-top: 1.3rem
    }
    #end-mobilidade-urbana label#registros_convergem{
        margin-top: .9rem
    }
    #irregularidades{
        margin-top: 10px
    }
}
</style>

<h5>Relatório de Sindicância: <?php echo $_GET['Cadastrar']?></h5>
<ul>
    <li>Passo <?php echo $_GET['Step']?> - Aplicativo de Mobilidade Urbana</li>
</ul>
<b>Resultado: <span class="text-danger"><?php echo "Análise";?></span></b>
<hr>

<?php
echo "<br> Protocolo: " . $Protocolo = $_SESSION['ProtocoloCondutor'];
echo "<br> CPF/Pasta do Associado: " .
$CPFAssociado = $_POST['cpf_associado'];
"<br> Placa do Veículo: " . $PlacaVeiculo = $_SESSION['PlacaVeiculo'];

include_once "Form.php";
include_once "Cadastrar-Dados-Passo19.php";
include "./Pages/Relatorios/containers/Update-Relatorio.php";
