<h5>Dados para usar: </h5>
<?php
echo "<br> Protocolo: " . $Protocolo = $_SESSION['ProtocoloCondutor'];
echo "<br> CPF/Pasta do Associado: " . $CPFAssociado = $_SESSION['PastaAssociado'];
echo "<br> Placa do Veículo: " . $PlacaVeiculo = $_SESSION['PlacaVeiculo'];

echo "<br><br><h6><b>CNH do condutor: </b></h6>";
echo "<br>Situação da CNH do condutor: ";
$StatusCNHCondutor = $_POST['cnh_condutor'];
if( $StatusCNHCondutor < 5 ){
    switch($StatusCNHCondutor){
        case 1: echo $CNHCondutor = "Valida";break;
        case 2: echo $CNHCondutor = "Vencida";break;
        case 3: echo $CNHCondutor = "Suspensa";break;
        case 4: echo $CNHCondutor = "Cassada";break;
    }
    echo "<br>Arquivo de upload Condutor: ";
    echo $CNHCondutorFile = $_FILES['foto_cnh_condutor']['tmp_name'];
    echo "<br>RG: " . $IdentidadeCondutor = $_POST['documento_identidade_condutor'];
    echo "<br>Orgão Emissor: " . $OrgaoIdentidadeCondutor = $_POST['orgao_emissor_condutor'];
    echo "<br>UF Emissão: " . $UFEmissorCondutor = $_POST['uf_emissor_condutor'];
    echo "<br>CPF Condutor: " . $CPFCondutor = $_POST['cpf_condutor'];
    echo "<br>Data Nascimento: " . $NascimentoCondutor = $_POST['nascimento_condutor'];
    echo "<br>Permissão: " ; 
    $PermissaoCondutor = $_POST['permissao_condutor'];
    if( $PermissaoCondutor == 1 ){
        echo $TipoPermissao = "Permissao";
    }else{
        echo $TipoPermissao = "Definitiva";
    }
    echo "<br>Permissão AAC: ";
    $PermissaoAACCondutor = $_POST['acc_condutor'];
    if( $PermissaoAACCondutor = 1 ){
        echo $PermissaoAACCondutor = "AAC";
    }else{
        echo $PermissaoAACCondutor = "Sem_Permissao";
    }
    echo "<br>Categoria Habilitação: " . $CategoriaCondutor = $_POST['cat_condutor'];
    echo "<br>Registro: " . $RegistroCondutor = $_POST['registro_condutor'];
    echo "<br>Validade Habilitação: " . $ValidadeCNHCondutor = $_POST['validade_condutor'];
    echo "<br>Primeira Habilitação: " . $PrimeiraHabilitacaoCondutor = $_POST['primeira_hab_condutor'];

    echo "<hr>";

}else{
    echo $CNHCondutor = "Nao_Habilitado";
}

echo "<br><br><h6><b>CNH do Associado: </b></h6>";
echo "<br>Situação da CNH do associado: ";
$StatusCNHAssociado = $_POST['cnh_associado'];
if( $StatusCNHAssociado < 5 ){
    switch($StatusCNHAssociado){
        case 1: echo $CNHAssociado = "Valida";break;
        case 2: echo $CNHAssociado = "Vencida";break;
        case 3: echo $CNHAssociado = "Suspensa";break;
        case 4: echo $CNHAssociado = "Cassada";break;
    }
    echo "<br>Arquivo de upload Associado: ";
    echo $CNHAssociadoFile = $_FILES['foto_cnh_associado']['tmp_name'];
    echo "<br>RG: " . $IdentidadeAssociado = $_POST['documento_identidade_associado'];
    echo "<br>Orgão Emissor: " . $OrgaoIdentidadeAssociado = $_POST['orgao_emissor_associado'];
    echo "<br>UF Emissão: " . $UFEmissorAssociado = $_POST['uf_emissor_associado'];
    echo "<br>CPF Condutor: " . $CPFAssociado = $_POST['cpf_associado'];
    echo "<br>Data Nascimento: " . $NascimentoAssociado = $_POST['nascimento_associado'];
    echo "<br>Permissão: " ; 
    $PermissaoAssociado = $_POST['permissao_associado'];
    if( $PermissaoAssociado == 1 ){
        echo $TipoPermissao2 = "Permissao";
    }else{
        echo $TipoPermissao2 = "Definitiva";
    }
    echo "<br>Permissão AAC: ";
    $PermissaoAACAssociado = $_POST['acc_associado'];
    if( $PermissaoAACAssociado = 1 ){
        echo $PermissaoAACAssociado = "AAC";
    }else{
        echo $PermissaoAACAssociado = "Sem_Permissao";
    }
    echo "<br>Categoria Habilitação: " . $CategoriaAssociado = $_POST['cat_associado'];
    echo "<br>Registro: " . $RegistroAssociado = $_POST['registro_associado'];
    echo "<br>Validade Habilitação: " . $ValidadeCNHAssociado = $_POST['validade_associado'];
    echo "<br>Primeira Habilitação: " . $PrimeiraHabilitacaoAssociado = $_POST['primeira_hab_associado'];
}else{
    echo $CNHAssociado = "Nao_Habilitado";
}