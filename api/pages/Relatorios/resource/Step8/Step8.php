<script src="js/Step8/Carregar-Foto-Vistoria.js"></script>

<h5>Relatório de Sindicância: <?php echo $_GET['Cadastrar']?></h5>
<ul>
    <li>Passo <?php echo $_GET['Step']?> - Vistoria Cautelar do Veículo</li>
</ul>
<b>Resultado: <span class="text-danger"><?php echo "Análise";?></span></b>
<hr>

<?php
    //Formulário do Passo 8
    include_once "Form.php";
    //Cadastrar dados do passo 7
    include_once "Include_Passo7.php";
    //Incluir base de uploads
    include_once "Uploads/Uploads.php";
?>