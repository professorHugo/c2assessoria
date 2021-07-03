<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>CPF Associado: " . $CPFAssociado = $_POST['cpf_associado'];
    echo "<br>Placa Veiculo: " . $PlacaVeiculo = $_POST['placa_veiculo'];
    echo "<br>Financiamento: " . $Financiamento = $_POST['financiamento_atrelado'];
    
    if( $Financiamento == 1 ){
      echo "<br>Instituição: " . $Instituicao = $_POST['instituicao_financeira'];
      echo "<br>Valor Parcelas" . $ValorParcelas = $_POST['valor_parcelas'];
      echo "<br>Total Parcelas: " . $TotalParcelas = $_POST['qtd_total_parcelas'];
      echo "<br>Parcelas Pagas: " . $ParcelasPagas = $_POST['qtd_parcelas_pagas'];
      echo "<br>Status Pagamentos: " . $StatusPagamentos = $_POST['status_pagamentos'];
  
      if( $StatusPagamentos == 2 ){
        echo "<br>Inadimplência: " . $ParcelasInadimplencia = $_POST['qtd_parcelas_inadimplente'];
        //Cadastrar o financiamento
        include 'containers/Cadastrar-Financiamento.php';
      }else{
        echo "<br>Inadimplência: " . $ParcelasInadimplencia = 0;
        //Cadastrar o financiamento
        include 'containers/Cadastrar-Financiamento.php';
      }
  
      if( !empty($_FILES['print_foto_inadimplencia_1']['name']) ){
        include 'Uploads/Foto-Parcelas1.php';
      }
  
      if( !empty($_FILES['print_foto_inadimplencia_2']['name']) ){
        include 'Uploads/Foto-Parcelas2.php';
      }
  
      if( !empty($_FILES['print_foto_inadimplencia_3']['name']) ){
        include 'Uploads/Foto-Parcelas3.php';
      }
  
      if( !empty($_FILES['print_foto_inadimplencia_4']['name']) ){
        include 'Uploads/Foto-Parcelas4.php';
      }
  
      if( !empty($_FILES['print_foto_inadimplencia_5']['name']) ){
        include 'Uploads/Foto-Parcelas5.php';
      }

      if( !empty($_FILES['print_foto_inadimplencia_6']['name']) ){
        include 'Uploads/Foto-Parcelas6.php';
      }
    }
  
    //Update do financeiro_veiculo na tb_veiculos
    include 'Update-Veiculo.php';

    //Update data de modificação do relatório
    include 'Update-Data-Modifica-Relatorio.php';
  }else{

    //PROD


    "<br>CPF Associado: " . $CPFAssociado = $_POST['cpf_associado'];
    "<br>Placa Veiculo: " . $PlacaVeiculo = $_POST['placa_veiculo'];
    "<br>Financiamento: " . $Financiamento = $_POST['financiamento_atrelado'];
    
    if( $Financiamento == 1 ){
      "<br>Instituição: " . $Instituicao = $_POST['instituicao_financeira'];
      "<br>Valor Parcelas" . $ValorParcelas = $_POST['valor_parcelas'];
      "<br>Total Parcelas: " . $TotalParcelas = $_POST['qtd_total_parcelas'];
      "<br>Parcelas Pagas: " . $ParcelasPagas = $_POST['qtd_parcelas_pagas'];
      "<br>Status Pagamentos: " . $StatusPagamentos = $_POST['status_pagamentos'];
  
      if( $StatusPagamentos == 2 ){
        "<br>Inadimplência: " . $ParcelasInadimplencia = $_POST['qtd_parcelas_inadimplente'];
        //Cadastrar o financiamento
        include 'containers/Cadastrar-Financiamento.php';
      }else{
        "<br>Inadimplência: " . $ParcelasInadimplencia = 0;
        //Cadastrar o financiamento
        include 'containers/Cadastrar-Financiamento.php';
      }
  
      if( !empty($_FILES['print_foto_inadimplencia_1']['name']) ){
        include 'Uploads/Foto-Parcelas1.php';
      }
  
      if( !empty($_FILES['print_foto_inadimplencia_2']['name']) ){
        include 'Uploads/Foto-Parcelas2.php';
      }
  
      if( !empty($_FILES['print_foto_inadimplencia_3']['name']) ){
        include 'Uploads/Foto-Parcelas3.php';
      }
  
      if( !empty($_FILES['print_foto_inadimplencia_4']['name']) ){
        include 'Uploads/Foto-Parcelas4.php';
      }
  
      if( !empty($_FILES['print_foto_inadimplencia_5']['name']) ){
        include 'Uploads/Foto-Parcelas5.php';
      }
      if( !empty($_FILES['print_foto_inadimplencia_6']['name']) ){
        include 'Uploads/Foto-Parcelas6.php';
      }
    }
  
    //Update do financeiro_veiculo na tb_veiculos
    include 'Update-Veiculo.php';

    //Update data de modificação do relatório
    include 'Update-Data-Modifica-Relatorio.php';
  }