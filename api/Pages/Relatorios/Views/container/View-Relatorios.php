<?php
$IdRelatorio = $ReturnRelatorios['id_relatorio'];
$ProtocoloRelatorio = $ReturnRelatorios['protocolo_evento'];

$UpdateRelatorio = $ReturnRelatorios['horario_update'];
$Cliente = $ReturnRelatorios['solicitante_evento'];
$NaturezaEvento = $ReturnRelatorios['natureza_evento'];
$CPFAssociado = $ReturnRelatorios['cpf_associado'];
$NomeAssociado = $ReturnRelatorios['nome_associado'];
$StatusRelatorio = $ReturnRelatorios['status_relatorio'];

?>
<div 
    class="col-sm-12 col-md-4 table-bordered"
    style="
        background: var(--white);
    "
>
    <p>Protocolo: <?php echo $ProtocoloRelatorio?></p>
    <p>Associado: <?php echo Resumo($NomeAssociado, 33) ?></p>
    <p>Status: <?php echo $StatusRelatorio ?></p>
    <p>
        Ajustes: 
        <a 
            href="?Page=Relatorios&Controle=Visualizar&Id=<?php echo $IdRelatorio?>"
            class="btn btn-default"
            style="
                background: var(--background-transparent);
                color: white
            "
        >
            <i class="fa fa-eye" aria-hidden="true"></i>
        </a>
        <!-- 
            implementar edição
        <a 
            href="?Page=Relatorios&Controle=Editar&Id=<?php echo $IdRelatorio?>"
            class="btn btn-default"
            style="
                background: var(--yellow);
                color: white
            "
        >
            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
        </a> -->
        <a 
            href="?Page=Relatorios&Controle=Entregar&Id=<?php echo $IdRelatorio?>"
            class="btn btn-default"
            style="
                background: var(--green);
                color: white
            "
        >
            <i class="fa fa-paper-plane" aria-hidden="true"></i>

        </a>
        <?php
            if( $IdUsuario = 1 ){
                ?>
                    <a 
                        href="?Page=Relatorios&Controle=Excluir&Id=<?php echo $IdRelatorio?>"
                        class="btn btn-default"
                        style="
                            background: var(--red);
                            color: white
                        "
                    >
                        <i class="fa fa-trash-o" aria-hidden="true"></i>

                    </a>
                <?php
            }
        ?>
    </p>
</div>
