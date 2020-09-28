<?php
if( isset($_GET['Id']) ){
    echo "ID: " . $IdRelatorio = $_GET['Id'];

    echo "<br><pre>".
    $QueryBuscarRelatorios = "
        SELECT * FROM 
            tb_relatorios relatorio
        INNER JOIN tb_associados associados
            ON relatorio.cpf_associado = associados.cpf_associado
        INNER JOIN tb_cnh_registros cnh
            ON relatorio.protocolo_evento = cnh.protocolo_cnh
        INNER JOIN tb_condutores condutores
            ON relatorio.protocolo_evento = condutores.protocolo_evento
        INNER JOIN tb_veiculos veiculo
            ON relatorio.placa_veiculo_evento = veiculo.placa_veiculo
        INNER JOIN tb_clientes clientes
            ON relatorio.solicitante_evento = clientes.id_cliente
        INNER JOIN tb_natureza_evento naturezas
            ON relatorio.natureza_evento = naturezas.id_natureza
        WHERE id_relatorio = '$IdRelatorio'
    ";
    echo "</pre>";
    
    "
        INNER JOIN tb_fotos fotos
            ON relatorio.protocolo_evento = fotos.protocolo_foto && fotos.id_foto = veiculo.procedente_veiculo
    ";

    $ExeQrBuscarRelatorios = mysqli_query($connection, $QueryBuscarRelatorios);
    $RowQrBuscarRelatorios = mysqli_num_rows($ExeQrBuscarRelatorios);

    while( $Relatorio = mysqli_fetch_assoc($ExeQrBuscarRelatorios) ){
        include_once "container/Relatorio.php";
    }
}else{
    //voltar para a página de Relatórios
}