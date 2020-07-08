<?php
if($_SESSION['CadastroSindicancia2'][0] == 1){
    $Step4 = array(
        $estadoCivil
       ,$profissaoAssociado
       ,$outroVeiculo
       ,$veiculosQuantidade
       ,$placa_veiculo1
       ,$marca_veiculo1
       ,$modelo_veiculo1
       ,$seguro_veiculo1
       ,$placa_veiculo2
       ,$marca_veiculo2
       ,$modelo_veiculo2
       ,$seguro_veiculo2
       ,$placa_veiculo3
       ,$marca_veiculo3
       ,$modelo_veiculo3
       ,$seguro_veiculo3
       ,$midiasSociais
       ,$PastaAssociado
       ,$printMidiasSociais
   );
   "<br>";
   "Passo 4: ";
   ($_SESSION['CadastroSindicancia4'] = $Step4);
}else{
    $Step5 = array(
        $nome_condutor,
        $estadoCivil,
        $profissaoAssociado,
        $outroVeiculo,
        $veiculosQuantidade,
        $placa_veiculo1,
        $marca_veiculo1,
        $modelo_veiculo1,
        $seguro_veiculo1,
        $placa_veiculo2,
        $marca_veiculo2,
        $modelo_veiculo2,
        $seguro_veiculo2,
        $placa_veiculo3,
        $marca_veiculo3,
        $modelo_veiculo3,
        $seguro_veiculo2,
        $midiasSociais,
        $PastaAssociado,
        $VinculoAssociado,
        $printMidiasSociais,
        $printMidiasSociaisCondutor
    );
    
     "<br> Passo 5: ";
    ($_SESSION['CadastroSindicancia5'] = $Step5);
}