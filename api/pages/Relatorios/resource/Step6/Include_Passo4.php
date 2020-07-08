<?php
if($_SESSION['CadastroSindicancia2'][0] == 1){
     //novos dados do passo 4
     "Estado Civil Associado: " .  $estadoCivil = $_POST['estado_civil'];
     "<br>";
     "Profissão do Associado: " . $profissaoAssociado = $_POST['profissao_associado'];
     "<br>";
     $outroVeiculo = $_POST['outro_veiculo'];
}else{
     //novos dados do passo 4
      "Estado Civil Condutor: " .  $estadoCivil = $_POST['estado_civil_condutor'];
      "<br>";
      "Profissão do Condutor: " . $profissaoAssociado = $_POST['profissao_condutor'];
      "<br>";
     $outroVeiculo = $_POST['veiculo_proprio'];
      "Vínculo com associado: " . $VinculoAssociado = $_POST['vinculo_associado'];
}
 "<br>";

if($_SESSION['CadastroSindicancia2'][0] == 1){
      "Outros Veículos? ";
     if($outroVeiculo == 1){
      "Sim";
     }else{
           "Não";
     }
     "<br>";
}else{
      "Veículo Próprio ";
     if($outroVeiculo == 1){
           "Sim";
     }else{
           "Não";
     }
     "<br>";
}

if($_SESSION['CadastroSindicancia2'][0] == 1){
     $veiculosQuantidade = $_POST['veiculos_quantidade'];
     "Quantos: ";
     if($veiculosQuantidade >= 1){
          $veiculosQuantidade;
     }
     "<br>";
}else{
     $veiculosQuantidade = $_POST['veiculos_quantidade'];
     "Quantos: ";
     if($veiculosQuantidade >= 1){
          $veiculosQuantidade;
     }
     "<br>";
}



