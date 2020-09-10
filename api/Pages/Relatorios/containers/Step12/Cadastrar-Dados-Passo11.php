<?php
//Procurar Localo pelo Protocolo
include 'container/Query-Buscar-Local.php';

if( $RowQrBuscarLocalEvento >= 1 ){
    echo "<br>Protocolo $Protocolo já cadastrado para esse local, atualizar a <b>tb_relatorio</b>";

    //Atualizar a TB Relatórios
    include "container/Update-Relatorio.php";

}else{
    //Cadastrar Local para o protocolo
    echo "<br><pre>" . 
    $QueryCadastrarLocal = "
        INSERT INTO tb_local_evento(
            protocolo_local,
            tipo_local,
            indice_local,
            fluxo_local,
            via_local,
            classificacao_local,
            permissao_local
        )VALUES(
            '$Protocolo',
            '$TipoZona',
            '$IndiceCriminalidade',
            '$FluxoPedestres',
            '$CaracteristicaVia',
            '$ClassificacaoRegiao',
            '$PermitidoEstacionar'
        )
    ";
    echo "</pre>";
    $ExeQrCadastrarLocal = mysqli_query($connection, $QueryCadastrarLocal);

    if( $ExeQrCadastrarLocal ){
        echo "<br>Local cadastrado para o protocolo <b>$Protocolo</b>, 
        atualizar a <b>tb_relatorios</b> com este local.";

        //Procurar Localo pelo Protocolo
        include 'container/Query-Buscar-Local.php';

        if( $RowQrBuscarLocalEvento >= 1 ){
            
            //Atualizar a tb_relatorio
            include "container/Update-Relatorio.php";


        }

    }else{
        echo "<br>Erro: " . mysqli_error($connection);
    }
}