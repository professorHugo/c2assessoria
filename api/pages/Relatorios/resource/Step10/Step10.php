<script src="js/Step9/Carregar-Foto-CNH.js"></script>

<h5>Relatório de Sindicância: <?php echo $_GET['Cadastrar']?></h5>
<ul>
    <li>Passo <?php echo $_GET['Step']?> - Financeiro</li>
</ul>
<b>Resultado: <span class="text-danger"><?php echo "Análise";?></span></b>
<hr>

<?php

$Protocolo = $_SESSION['Protocolo']['pr'];
//Formulário Passo 9
include_once "Form.php";

//Dados do passo 8
include_once "Include_Passo9.php";

//Buscar Relatório para analisar o condutor e apresentar 2 documentos caso seja diferente do associado
$QueryBuscarDadosCondutor = "SELECT * FROM tb_relatorios WHERE protocolo_evento = '$Protocolo'";
$ExeQrBuscarDadosCondutor = mysqli_query($connection, $QueryBuscarDadosCondutor);
$RowQrByscarDadosCondutor = mysqli_num_rows($ExeQrBuscarDadosCondutor);
if($RowQrByscarDadosCondutor >= 1){
    while($ReturnDadosCondutor = mysqli_fetch_assoc($ExeQrBuscarDadosCondutor)){
        if($ReturnDadosCondutor['condutor_veiculo'] == 2){
            include_once "Uploads/CNH-Condutor.php";
            include_once "Uploads/CNH-Associado.php";
        }else{
            include_once "Uploads/CNH-Condutor.php";
        }
    }
}
