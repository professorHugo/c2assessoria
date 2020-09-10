<h5>Relatório de Sindicância: <?php echo $_GET['Cadastrar']?></h5>
<ul>
    <li>Passo <?php echo $_GET['Step']?> - Dinâmica do Evento
        <ul>
            <li>Descrição dada pela testemunha</li>
        </ul>
    </li>
</ul>
<b>Resultado: <span class="text-danger"><?php echo "Análise";?></span></b>
<hr>

<?php
include "Dados-Passo12.php";
include "Form.php";
include "Cadastrar-Dados-Passo12.php";