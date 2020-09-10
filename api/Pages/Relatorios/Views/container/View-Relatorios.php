<?php
$IdRelatorio = $ReturnRelatorios['id_relatorio'];
$ProtocoloRelatorio = $ReturnRelatorios['protocolo_evento'];

$UpdateRelatorio = $ReturnRelatorios['horario_update'];
$Cliente = $ReturnRelatorios['solicitante_evento'];
$NaturezaEvento = $ReturnRelatorios['natureza_evento'];
$CPFAssociado = $ReturnRelatorios['cpf_associado'];
$StatusRelatorio = $ReturnRelatorios['status_relatorio'];

?>
<tbody>
    <tr>
        <td><?php echo $IdRelatorio?></td>
        <td><?php echo $ProtocoloRelatorio?></td>
        <td><?php echo $CPFAssociado ?></td>
        <td><?php echo $StatusRelatorio ?></td>
        <td>
            <a href="?Page=Relatorios&Edit&Id=<?php echo $IdRelatorio?>">
                <i class="fa fa-eye" aria-hidden="true"></i>
            </a>
        </td>
    </tr>
</tbody>