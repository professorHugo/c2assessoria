<script src="js/Step7/Carregar-Print-Apontamentos-Detran.js"></script>

<h5>Relatório de Sindicância: <?php echo $_GET['Cadastrar']?></h5>
<ul>
    <li>Passo <?php echo $_GET['Step']?> - Apontamentos Detran</li>
</ul>
<b>Resultado: <span class="text-danger"><?php echo "Análise";?></span></b>
<hr>

<?php
    //Formulário do Passo 7
    include_once "Form.php";
    //Cadastrar dados do passo 6
    include_once "Include_Passo6.php";
?>