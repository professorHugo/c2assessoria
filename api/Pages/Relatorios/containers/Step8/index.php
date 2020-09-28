<h5>Relatório de Sindicância: <?php echo $_GET['Cadastrar']?></h5>
<ul>
    <li>Passo <?php echo $_GET['Step']?> - Vistoria Cautelar do Veículo</li>
</ul>
<b>Resultado: <span class="text-danger"><?php echo "Análise";?></span></b>
<hr>

<?php
include_once "Form.php";
include_once "Dados-Passo7.php";
include_once "Uploads.php";
include "./Pages/Relatorios/containers/Update-Relatorio.php";
