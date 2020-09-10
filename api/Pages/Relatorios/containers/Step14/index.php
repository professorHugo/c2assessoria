<h5>Relatório de Sindicância: <?php echo $_GET['Cadastrar']?></h5>
<ul>
    <li>Passo <?php echo $_GET['Step']?> - Órgãos Públicos
        
    </li>
</ul>
<b>Resultado: <span class="text-danger"><?php echo "Análise";?></span></b>
<hr>

<?php
include "Dados-Passo13.php";
include "Form.php";
include "Cadastrar-Dados-Passo13.php";