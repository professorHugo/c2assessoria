<h5>Cadastrar CNH's</h5>
<?php
//Buscar CNH Condutor
echo "<br><pre>" . 
$QueryBuscarCNH = "
    SELECT * FROM tb_cnh_registros
    WHERE protocolo_CNH = '$Protocolo' AND dono_cnh = 2
";
echo "</pre>";
$ExeQrBuscarCNH = mysqli_query($connection, $QueryBuscarCNH);
$RowQrBuscarCNH = mysqli_num_rows($ExeQrBuscarCNH);

if( $RowQrBuscarCNH >=1 ){
    echo "<br>CNH do condutor já cadastrada para o protocolo <b>$Protocolo</b>";
}else{
    echo "<br><pre>" . 
    $QueryCadastrarCNH = "
        INSERT INTO tb_cnh_registros(
            protocolo_cnh,
            dono_cnh,
            status_cnh,
            rg_cnh,
            emissor_rg_cnh,
            uf_rg_cnh,
            cpf_cnh,
            nascimento_cnh,
            permissao_cnh,
            aac_cnh,
            categoria_cnh,
            registro_cnh,
            validade_cnh,
            primeira_hab
        )VALUES(
            '$Protocolo',
            '2',
            '$CNHCondutor',
            '$IdentidadeCondutor',
            '$OrgaoIdentidadeCondutor',
            '$UFEmissorCondutor',
            '$CPFCondutor',
            '$NascimentoCondutor',
            '$TipoPermissao',
            '$PermissaoAACCondutor',
            '$CategoriaCondutor',
            '$RegistroCondutor',
            '$ValidadeCNHCondutor',
            '$PrimeiraHabilitacaoCondutor'
        )
    ";
    echo "</pre>";

    $ExeQrCadastrarCNH = mysqli_query($connection, $QueryCadastrarCNH);
    if( $ExeQrCadastrarCNH ){
        echo "<br>CNH do condutor cadastrada para o protocolo <b>$Protocolo</b>";
    }else{
        echo "<br>Erro: " . mysqli_error($connection);
    }
}



//Buscar CNH Associado
echo "<br><pre>" . 
$QueryBuscarCNH2 = "
    SELECT * FROM tb_cnh_registros
    WHERE protocolo_CNH = '$Protocolo' AND dono_cnh = 1
";
echo "</pre>";
$ExeQrBuscarCNH2 = mysqli_query($connection, $QueryBuscarCNH2);
$RowQrBuscarCNH2 = mysqli_num_rows($ExeQrBuscarCNH2);

if( $RowQrBuscarCNH2 >=1 ){
    echo "<br>CNH do associado já cadastrada para o protocolo <b>$Protocolo</b>";
}else{
    echo "<br><pre>" . 
    $QueryCadastrarCNH2 = "
        INSERT INTO tb_cnh_registros(
            protocolo_cnh,
            dono_cnh,
            status_cnh,
            rg_cnh,
            emissor_rg_cnh,
            uf_rg_cnh,
            cpf_cnh,
            nascimento_cnh,
            permissao_cnh,
            aac_cnh,
            categoria_cnh,
            registro_cnh,
            validade_cnh,
            primeira_hab
        )VALUES(
            '$Protocolo',
            '1',
            '$CNHAssociado',
            '$IdentidadeAssociado',
            '$OrgaoIdentidadeAssociado',
            '$UFEmissorAssociado',
            '$CPFAssociado',
            '$NascimentoAssociado',
            '$TipoPermissao2',
            '$PermissaoAACAssociado',
            '$CategoriaAssociado',
            '$RegistroAssociado',
            '$ValidadeCNHAssociado',
            '$PrimeiraHabilitacaoAssociado'
        )
    ";
    echo "</pre>";

    $ExeQrCadastrarCNH2 = mysqli_query($connection, $QueryCadastrarCNH2);
    if( $ExeQrCadastrarCNH2 ){
        echo "<br>CNH do associado cadastrada para o protocolo <b>$Protocolo</b>";
    }else{
        echo "<br>Erro: " . mysqli_error($connection);
    }
}