<h5>Relatório de Sindicância: <?php echo $_GET['Cadastrar']?></h5>
<ul>
    <li>Passo <?php echo $_GET['Step']?> - Documentos</li>
</ul>
<b>Resultado: <span class="text-danger"><?php echo "Análise";?></span></b>
<hr>

<?php
include_once "Dados-Passo8.php";
include_once "Form.php";
//Cadastrar Vistoria
include_once "Cadastrar-Dados-Passo8.php";
//Upload de arquivos
include_once "Uploads.php";