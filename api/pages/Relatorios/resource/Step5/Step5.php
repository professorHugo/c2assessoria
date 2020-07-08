<script src="js/Veiculos-Adicionais-Condutor.js"></script>
<script src="js/Apontamento-Rede-Social-Associado-Condutor.js"></script>
<h5>Relatório de Sindicância: <?php echo $_GET['Cadastrar']?></h5>
<ul>
    <li>Passo <?php echo $_GET['Step']?></li>
</ul>
<b>Resultado: <span class="text-danger"><?php echo "Análise";?></span></b>
<hr>

<?php

    include_once "Include_Passo4.php";

    include_once "IncludeCondutorVeiculoProprio.php";
    
    include_once "PrintMidiasSociais.php";

    include_once "Include_NovaSession.php";    
    
    include_once "Form.php";

    include_once "Cadastrar-Dados-Passo4.php";
?>

