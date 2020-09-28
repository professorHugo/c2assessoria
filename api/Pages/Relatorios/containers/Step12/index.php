<h5>Relatório de Sindicância: <?php echo $_GET['Cadastrar']?></h5>
<ul>
    <li>Passo <?php echo $_GET['Step']?> - Dinâmica do Evento
        <ul>
            <li>Momento do Evento</li>
        </ul>
    </li>
</ul>
<b>Resultado: <span class="text-danger"><?php echo "Análise";?></span></b>
<hr>

<?php
//Local do Evento
 "<br> Protocolo: " . $Protocolo = $_SESSION['ProtocoloCondutor'];
 "<br> CPF/Pasta do Associado: " . 
$CPFAssociado = $_SESSION['PastaAssociado'];
 "<br> Placa do Veículo: " . $PlacaVeiculo = $_SESSION['PlacaVeiculo'];
include_once "Form.php";
include_once "Dados-Passo-11.php";
include_once "Cadastrar-Dados-Passo11.php";
include "./Pages/Relatorios/containers/Update-Relatorio.php";
