<h5>Relatório de Sindicância: <?php echo $_GET['Cadastrar']?></h5>
<ul>
    <li>Passo <?php echo $_GET['Step']?> - Motorista por aplicativo
        <ul>
            <li>Utilizações anteriores</li>
        </ul>
    </li>
</ul>
<b>Resultado: <span class="text-danger"><?php echo "Análise";?></span></b>
<hr>

<?php
echo "<br> Protocolo: " . $Protocolo = $_SESSION['ProtocoloCondutor'];
echo "<br> CPF/Pasta do Associado: " .
$CPFAssociado = $_SESSION['PastaAssociado'];
"<br> Placa do Veículo: " . $PlacaVeiculo = $_SESSION['PlacaVeiculo'];

include_once "Form.php";
include_once "Cadastrar-Dados-Passo20.php";
include "./Pages/Relatorios/containers/Update-Relatorio.php";
