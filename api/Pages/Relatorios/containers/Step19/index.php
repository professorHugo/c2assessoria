<h5>Relatório de Sindicância: <?php echo $_GET['Cadastrar']?></h5>
<ul>
    <li>Passo <?php echo $_GET['Step']?> - Rastreador: Telemetria</li>
</ul>
<b>Resultado: <span class="text-danger"><?php echo "Análise";?></span></b>
<hr>
<script>
$(function(){
    $('#button-upload').on('click', function() {
        $('#print_telemetria').trigger('click');
    });

    $('#print_telemetria').on('change', function() {
        var fileName = $(this)[0].files[0].name;
        $('#file_telemetria').val(fileName);
    });
});
</script>
<?php
"<br> Protocolo: " . $Protocolo = $_SESSION['ProtocoloCondutor'];
 "<br> CPF/Pasta do Associado: " .
$CPFAssociado = $_SESSION['PastaAssociado'];
 "<br> Placa do Veículo: " . $PlacaVeiculo = $_SESSION['PlacaVeiculo'];

include_once "Form.php";
include_once "Cadastrar-Dados-Passo18.php";
include "./Pages/Relatorios/containers/Update-Relatorio.php";
