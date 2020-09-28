<?php
echo "<br>CEP Associado: " . $CEPAssociado = $_POST['cep_associado'];
echo "<br>Endereço: " . $EnderecoAssociado = $_POST['endereco_associado'];
echo "<br>Nº: " . $NumeroEndAssociado = $_POST['numero_associado'];
$EnderecoAssociado = $EnderecoAssociado.", ".$NumeroEndAssociado;
echo "<br>Bairro: " . $BairroAssociado = $_POST['bairro_associado'];
echo "<br> Cidade: " . $CidadeAssociado = $_POST['cidade_associado'];
echo "<br> Estado: " . $UFAssociado = $_POST['estado_associado'];
echo "<br> Estado Civil: " . $CivilAssociado = $_POST['estado_civil'];
echo "<br>Profissão: " . $ProfissaoAssociado = $_POST['profissao_associado'];


echo "<br><pre>".
$QueryUpdateDomicilio = "
    UPDATE tb_associados
    SET
        cep_associado = '$CEPAssociado',
        endereco_associado = '$EnderecoAssociado',
        bairro_associado = '$BairroAssociado',
        cidade_associado = '$CidadeAssociado',
        estado_associado = '$UFAssociado',
        civil_associado = '$CivilAssociado',
        profissao_associado = '$ProfissaoAssociado'
    WHERE cpf_associado = '$CPFAssociado'
";
echo "</pre>";
$ExeQrUpdateDomicilio = mysqli_query($connection, $QueryUpdateDomicilio);
if( $ExeQrUpdateDomicilio ){
    echo "<br>Domicílio do associado atualizado";
}else{
    echo "<br>Erro: " . mysqli_error($connection);
}