<h5>Relatório de Sindicância: <?php echo $_GET['Cadastrar']?></h5>
<ul>
    <li>Passo <?php echo $_GET['Step']?> - Financeiro</li>
</ul>
<b>Resultado: <span class="text-danger"><?php echo "Análise";?></span></b>
<hr>

<?php
include_once "Dados-Passo9.php";
include_once "Form.php";
//Cadastrar CNH
include_once "Cadastrar-Dados-Passo9.php";
//Upload da CNH e atualização dos dados
include_once "Uploads.php";