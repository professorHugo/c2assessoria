<h5>Relatório de Sindicância: <?php echo $_GET['Cadastrar']?></h5>
<ul>
    <li>Passo <?php echo $_GET['Step']?> - Dinâmica do Evento
        <ul>
            <li>Local do Evento</li>
        </ul>
    </li>
</ul>
<b>Resultado: <span class="text-danger"><?php echo "Análise";?></span></b>
<hr>

<?php
//Local do Evento
include_once "Form.php";
include_once "Dados-Passo-10.php";
include_once "Cadastrar-Dados-Passo10.php";