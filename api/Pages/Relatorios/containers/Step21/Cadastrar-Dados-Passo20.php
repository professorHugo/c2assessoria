<?php
echo "<br>Apresentou comprovante de Mobilidade: ";
$ComprovanteMobilidade = $_POST['comprovante_mobilidade'];
if( $ComprovanteMobilidade == 1 ){
    echo "Sim";
    echo "<br>Usou no dia: " . $UtilizadoDia = $_POST['utilizado_no_dia'];
    echo "<br>Usado por: "; 
    $UsuarioAplicativo = $_POST['instalado_em'];
    if( $UsuarioAplicativo == 2 ){
        echo "Terceiros";
        echo "<br>Nome do Terceiro: " . $NomeTerceiro = $_POST['nome_terceiro'];
        echo "<br>Telefone do Terceiro: " . $TelefoneTerceiro = $_POST['telefone_terceiro'];
    }
    echo "<br>Irregularidades Apontadas: " . $Irregularidades = $_POST['irregularidades'];
    echo "<br>Registros Convergem: " . $RegistrosConvergem = $_POST['registros_convergem'];

    echo "<br><pre>" . 
    $QueryByscarMobilidade = "
        SELECT * FROM tb_registro_mobilidade
        WHERE 
            protocolo_mobilidade = '$Protocolo' &&
            placa_mobilidade = '$PlacaVeiculo'
    ";
    echo "</pre>";
    $ExeQrBuscarMobilidade = mysqli_query($connection, $QueryByscarMobilidade);
    $RowQrBuscarMobilidade = mysqli_num_rows($ExeQrBuscarMobilidade);

    if( $RowQrBuscarMobilidade >= 1 ){
        echo "<br>Mobilidade já cadastrada para o protocolo <b>$Protocolo</b>";
    }else{
        echo "<br><pre>";
        echo $QueryCadastrarMobilidade = "
            INSERT INTO tb_registro_mobilidade(
                protocolo_mobilidade,
                placa_mobilidade,
                uso_dia_mobilidade,
                instalado_mobilidade,
                nome_terceiro,
                telefone_terceiro,
                irregularidades_mobilidade,
                convergencia_mobilidade
            )VALUES(
                '$Protocolo',
                '$PlacaVeiculo',
                '$UtilizadoDia',
                '$UsuarioAplicativo',
                '$NomeTerceiro',
                '$TelefoneTerceiro',
                '$Irregularidades',
                '$RegistrosConvergem'
            )
        ";
        echo "</pre>";
        $ExeQrCadastrarMobilidade = mysqli_query($connection, $QueryCadastrarMobilidade);

        if( $ExeQrCadastrarMobilidade ){
            echo "<br>Mobilidade Cadastrada";
        }else{
            echo "<br>Erro: " . mysqli_error($connection);
        }
    }
    
    include "container/Upload.php";
    
}else{
    echo "Não";
}