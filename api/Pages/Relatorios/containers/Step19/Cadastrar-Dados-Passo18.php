<?php
// echo $_POST['nome_entrevistado1'];
echo "<br><pre>" . 
$QueryBuscarEntrevistados = "
    SELECT * FROM 
        tb_relacionamento_entrevistado relacionamento
    INNER JOIN tb_entrevistados entrevistados
    ON 
        entrevistados.relacionamento_entrevistado = relacionamento.id_relacionamento
    WHERE 
        protocolo_relacionamento = '$Protocolo' &&
        entrevistados.tipo_entrevistado = '4'
";
echo "</pre>";
echo "<hr>";
$ExeQrBuscarEntrevistados = mysqli_query($connection, $QueryBuscarEntrevistados);
$RowQrByscarEntrevistados = mysqli_num_rows($ExeQrBuscarEntrevistados);

if( $RowQrByscarEntrevistados >= 1 ){
    while( $ReturnEntrevistados = mysqli_fetch_assoc($ExeQrBuscarEntrevistados) ){
        $IdEntrevistado = $ReturnEntrevistados['id_relacionamento'];
        //Seleção individual do entrevistado para update
        echo "<br> Entrevistado: " . $Entrevistado[$IdEntrevistado] = 'nome_entrevistado'.$IdEntrevistado;
        echo "<br>Bom estado: " . $BomEstado = "bom_estado_veiculo".$IdEntrevistado;
        echo "<br>Conhecimento do evento: " . 
        $ConhecimentoEvento = "conhecimento_evento".$IdEntrevistado;
        echo "<br>Informações Divergentes: " . 
        $InformacoesDivergentes = "informacoes_divergentes".$IdEntrevistado;
        echo "<br>Pernoita na Garagem: " . 
        $PernoitaGaragem = "pernoite_garagem".$IdEntrevistado;

        echo "<br>Nome: " . $EntrevistadoNome = $_POST[$Entrevistado[$IdEntrevistado]];
        echo "<br>Bom Estado do veículo: " . $BomEstado = $_POST[$BomEstado];
        echo "<br>Conhecimento do Evento: " . $ConhecimentoEvento = $_POST[$ConhecimentoEvento];
        echo "<br>Informações Divergentes: " . $InformacoesDivergentes = $_POST[$InformacoesDivergentes];
        echo "<br>Pernoita na garagem: " . $PernoitaGaragem = $_POST[$PernoitaGaragem];

        echo "<br><br>";

        echo "<br><pre>" . 
        $QueryUpdateEntrevistado = "
            UPDATE tb_relacionamento_entrevistado
            SET
                texto_bom_estado = '$BomEstado',
                texto_conhecimento_evento = '$ConhecimentoEvento',
                texto_informacoes_divergentes = '$InformacoesDivergentes',
                texto_pernoite_garagem = '$PernoitaGaragem'
            WHERE
                protocolo_relacionamento = '$Protocolo' &&
                nome_entrevistado = '$EntrevistadoNome'
        ";
        echo "</pre>";
        $ExeQrUpdateEntrevistado = mysqli_query($connection, $QueryUpdateEntrevistado);

        if( $ExeQrUpdateEntrevistado ){
            echo "<br>Entrevistado atualizado com as respostas";
        }else{
            echo "<br>Erro: " . mysqli_error($connection);
        }


        echo "<hr>";

    }
}else{
    echo "<br>Erro: " . mysqli_error($connection);
}