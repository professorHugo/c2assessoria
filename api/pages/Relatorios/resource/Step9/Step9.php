<script src="js/Step9/Carregar-Foto-CNH.js"></script>

<h5>Relatório de Sindicância: <?php echo $_GET['Cadastrar']?></h5>
<ul>
    <li>Passo <?php echo $_GET['Step']?> - Documentos</li>
</ul>
<b>Resultado: <span class="text-danger"><?php echo "Análise";?></span></b>
<hr>

<?php

$Protocolo = $_SESSION['Protocolo']['pr'];
//Formulário Passo 9
include_once "Form.php";

//Dados do passo 8
include_once "Include_Passo8.php";
if($VistoriaRealizada == 1){
    //Upload da Vistoria
    include_once "Uploads/Vistoria.php";
}
