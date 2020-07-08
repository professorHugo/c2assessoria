<?php
//Variáveis base
echo "Estado Civil Associado: " . $EstadoCivilAssociado = $_POST['estado_civil'];
echo "<br> Profissão Associado: " . $ProfissaoAssociado = $_POST['profissao_associado'];
echo "<br> Associado tem outros Veículos? " . $OutrosVeiculosAssociado = $_POST['outro_veiculo'];
echo "<br> Quantidade de Veículos: " . $QuantidadeVeiculosExtra = $_POST['veiculos_quantidade'];
echo $Protocolo = $_SESSION['Protocolo']['pr'];
echo "CPF: " . $CPFAssociado = $_SESSION['Protocolo']['cpf'];

$Update =  date("Y/m/d H:i:s");
"<br> Associado apontou em midias sociais: " . $MidiasSociaisAssociado = $_POST['midias_sociais_associado'];
"<br> Print: " . $PrintMidiasSociais = $printMidiasSociais;

//Dados de veículos Adicionais
include_once "Frag/Veiculos-Extras-Associado.php";

//Verificar se o veículo (mesmo extra) já está armazenado no banco de dados
switch($QuantidadeVeiculosExtra){
    case 1: include_once "Frag/Veiculo1.php";break;
    case 2: 
        include_once "Frag/Veiculo1.php";
        include_once "Frag/Veiculo2.php";
    break;
    case 3: 
        include_once "Frag/Veiculo1.php";
        include_once "Frag/Veiculo2.php";
        include_once "Frag/Veiculo3.php";
    break;
}

//Update dos veículos do condutor
include_once "Frag/UpdateCondutor.php";
//Update dos veículos do associado
include_once "Frag/UpdateAssociado.php";

//Update no Relatório
echo "<pre>".
$Query2InserirPasso4 = "
   UPDATE tb_relatorios SET
       midias_sociais_associado = '$MidiasSociaisAssociado',
       print_midias_associado = '$PrintMidiasSociais'
   WHERE protocolo_evento = '$Protocolo'
";
//Verificar se já existe o protocolo cadastrado
$QueryDadosCadastrados = "SELECT * FROM tb_relatorios WHERE protocolo_evento = '$Protocolo'";
$ExeQrDadosCadastrados = mysqli_query($connection, $QueryDadosCadastrados);
$RowQrDadosCadastrados = mysqli_num_rows($ExeQrDadosCadastrados);

if($RowQrDadosCadastrados >= 1){
   $ExeQr2InserirPasso4 = mysqli_query($connection, $Query2InserirPasso4);
   if($ExeQr2InserirPasso4){
        echo "Passo 4 Inserido no Banco de dados";
   }else{
        echo "Erro: " . mysqli_error($connection);
   }
}
echo "<br>";
echo "<br>";