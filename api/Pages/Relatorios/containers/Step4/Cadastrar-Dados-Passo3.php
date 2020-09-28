<?php
 echo "<br> Data do evento: " . $DataEvento = $_POST['data_evento'];
 echo "<br> Horário do evento: " . $HorarioEvento = $_POST['horario_evento'];
 echo "<br> CEP do Evento: " . $CEPEvento = $_POST['cep_evento'];
 echo "<br> Endereço do Evento: " . $EnderecoEvento = addslashes($_POST['endereco_evento']);
 echo "<br> Bairro do Evento: " . $BairroEvento = addslashes($_POST['bairro_evento']);
 echo "<br> Cidade do Evento: " . $CidadeEvento = addslashes($_POST['cidade_evento']);
 echo "<br> UF do Evento: " . $UFEvento = $_POST['estado_evento'];
 echo "<br> Nr do Evento: " . $NrEvento = $_POST['numero_evento'];

$Protocolo = $_SESSION['Protocolo']['pr'];
$Update =  date("Y/m/d H:i:s");
echo 
"<br><pre>".
$QueryInserirPasso3 = "
    UPDATE tb_relatorios SET
        horario_update = '$Update',
        data_evento = '$DataEvento',
        horario_evento = '$HorarioEvento',
        cep_evento = '$CEPEvento',
        endereco_evento = '$EnderecoEvento',
        numero_evento = '$NrEvento',
        bairro_evento = '$BairroEvento',
        cidade_evento = '$CidadeEvento',
        uf_evento = '$UFEvento',
        status_relatorio = '$_GET[Step]'
    WHERE protocolo_evento = '$Protocolo'
";
echo "</pre>";

//Verificar se já existe o protocolo cadastrado
$QueryDadosCadastrados = "SELECT * FROM tb_relatorios WHERE protocolo_evento = '$Protocolo'";
$ExeQrDadosCadastrados = mysqli_query($connection, $QueryDadosCadastrados);
$RowQrDadosCadastrados = mysqli_num_rows($ExeQrDadosCadastrados);

if($RowQrDadosCadastrados >= 1){
    $ExeQrInserirPasso3 = mysqli_query($connection, $QueryInserirPasso3);
    if($ExeQrInserirPasso3){
        echo "Passo 3 Inserido no Banco de dados";
    }else{
        echo "Erro: " . mysqli_error($connection);
    }
}
echo "<br>";
