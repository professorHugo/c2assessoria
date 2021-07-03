<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>" . 
    $QueryBuscarFinanceiro = "
      SELECT * FROM 
        tb_financeiro_veiculo
      WHERE
        protocolo_financeiro = '$Protocolo'
    ";
    echo "</pre>";

    $ExeQrBuscarFinanceiro = mysqli_query($connection, $QueryBuscarFinanceiro);
    $RowQrBuscarFinanceiro = mysqli_num_rows($ExeQrBuscarFinanceiro);

    if( $RowQrBuscarFinanceiro < 1 ){
      echo "<br><pre>" . 
      $QueryCadastrarFinanceiro = "
        INSERT INTO tb_financeiro_veiculo(
          protocolo_financeiro,
          instituicao_financeiro,
          total_parcelas_financeiro,
          valor_parcela_financeiro,
          parcelas_pagas_financeiro,
          situacao_financeiro,
          parcelas_inadimplentes
        )VALUES(
          '$Protocolo',
          '$Instituicao',
          '$TotalParcelas',
          '$ValorParcelas',
          '$ParcelasPagas',
          '$StatusPagamentos',
          '$ParcelasInadimplencia'
        )
      ";
      echo "</pre>";
      $ExeQrCadastrarFinanceiro = mysqli_query($connection, $QueryCadastrarFinanceiro);
      if( $ExeQrCadastrarFinanceiro ){
        echo "<br>Financeiro cadastrado.";
      }
    }else{
      echo "<br>Financeiro já cadastrado para o protocolo <b>$Protocolo</b>";
    }
  }else{

    //PROD


    "<br><pre>" . 
    $QueryBuscarFinanceiro = "
      SELECT * FROM 
        tb_financeiro_veiculo
      WHERE
        protocolo_financeiro = '$Protocolo'
    ";
    "</pre>";

    $ExeQrBuscarFinanceiro = mysqli_query($connection, $QueryBuscarFinanceiro);
    $RowQrBuscarFinanceiro = mysqli_num_rows($ExeQrBuscarFinanceiro);

    if( $RowQrBuscarFinanceiro < 1 ){
      "<br><pre>" . 
      $QueryCadastrarFinanceiro = "
        INSERT INTO tb_financeiro_veiculo(
          protocolo_financeiro,
          instituicao_financeiro,
          total_parcelas_financeiro,
          valor_parcela_financeiro,
          parcelas_pagas_financeiro,
          situacao_financeiro,
          parcelas_inadimplentes
        )VALUES(
          '$Protocolo',
          '$Instituicao',
          '$TotalParcelas',
          '$ValorParcelas',
          '$ParcelasPagas',
          '$StatusPagamentos',
          '$ParcelasInadimplencia'
        )
      ";
      "</pre>";
      $ExeQrCadastrarFinanceiro = mysqli_query($connection, $QueryCadastrarFinanceiro);
      if( $ExeQrCadastrarFinanceiro ){
        "<br>Financeiro cadastrado.";
      }
    }else{
      "<br>Financeiro já cadastrado para o protocolo <b>$Protocolo</b>";
    }
  }