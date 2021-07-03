<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>" . 
    $QueryBuscarProcedencias = "
      SELECT * FROM 
        tb_veiculos veiculo
      
      INNER JOIN tb_documento_veiculo documento
        ON veiculo.documento_veiculo = documento.id_documento
      
      INNER JOIN tb_procedentes procedente
        ON veiculo.procedente_veiculo = procedente.id_procedente
      
      INNER JOIN tb_sistemas_anti_furto anti_furto
        ON veiculo.sistema_anti_furto = anti_furto.id_sistema

      INNER JOIN tb_vistorias_realizadas vistoria
        ON veiculo.vistoria_realizada = vistoria.id_vistoria

      INNER JOIN tb_registro_detran registro_detran
        ON veiculo.registro_detran = registro_detran.id_registro_detran

      INNER JOIN tb_detran_estados estados_detran
        ON registro_detran.estado_registro_detran = estados_detran.id_detran

      INNER JOIN tb_financeiro_veiculo financeiro
        ON veiculo.financeiro_veiculo = financeiro.id_financeiro

      INNER JOIN tb_sistemas_anti_furto antifurto
        ON veiculo.protocolo_evento = antifurto.protocolo_sistema
      
      
      WHERE protocolo_procedente = '$Protocolo'
    ";
    echo "</pre>";
    $ExeQrBuscarProcedentes = mysqli_query($connection, $QueryBuscarProcedencias);
    $RowQrBuscarProcedentes = mysqli_num_rows($ExeQrBuscarProcedentes);

    if( $RowQrBuscarProcedentes = 1 ){
      while( $Procedentes = mysqli_fetch_assoc($ExeQrBuscarProcedentes) ){
        echo "<br>" . $MarcaVeiculo = $Procedentes['marca_veiculo'];
        echo "<br>" . $ModeloVeiculo = $Procedentes['modelo_veiculo'];
        echo "<br>" . $PlacaVeiculo = $Procedentes['placa_veiculo'];
        echo "<br>" . $ExibirVeiculo = $MarcaVeiculo . " - " . $ModeloVeiculo;
        
        echo "<br>" . $ConfirmaProcedente = $Procedentes['confirma_procedente'];
        
        echo "<br>" . $FotoFrenteDocumentoVeiculo = $Procedentes['foto_frente_documento'];
        echo "<br>" . $FotoVersoDocumentoVeiculo = $Procedentes['foto_verso_documento'];
        echo "<br>" . $DocumentoPreenchido = $Procedentes['documento_preenchido'];

        echo "<br>" . $FotoProcedenteVeiculo1 = $Procedentes['foto_procedente1'];
        echo "<br>" . $FotoProcedenteVeiculo2 = $Procedentes['foto_procedente2'];
        echo "<br>" . $FotoProcedenteVeiculo3 = $Procedentes['foto_procedente3'];

        echo "<br>" . $ProprietarioLegal = $Procedentes['proprietario_veiculo'];

        echo "<br>" . $ProprietarioAnterior = $Procedentes['proprietario_anterior_veiculo'];

        echo "<br>" . $VistoriaObrigatoria = $Procedentes['vistoria_obrigatoria'];
        if( $VistoriaObrigatoria == 1 ){
          echo "<br>" . $VistoriaAprovada = $Procedentes['vistoria_aprovada'];
          echo "<br>" . $DataVistoria = date("d/m/Y", strtotime($Procedentes['data_vistoria']));
          echo "<br>" . $FotoVistoria1 = $Procedentes['foto1_vistoria'];
          echo "<br>" . $FotoVistoria2 = $Procedentes['foto2_vistoria'];
          echo "<br>" . $FotoVistoria3 = $Procedentes['foto3_vistoria'];
        }

        echo "<br>" . $EstadoDetran = $Procedentes['estado_detran'];

        echo "<br>" . $MultaRegistroDetran = $Procedentes['multa_registro_detran'];
        echo "<br>" . $FotoMultaDetran1 = $Procedentes['foto1_multa'];
        echo "<br>" . $FotoMultaDetran2 = $Procedentes['foto2_multa'];
        echo "<br>" . $FotoMultaDetran3 = $Procedentes['foto3_multa'];
        echo "<br>" . $RestricoesDiversas = $Procedentes['restricoes_diversas'];
        echo "<br>" . $RestricoesFinanceiras = $Procedentes['restricoes_financeiras'];
        echo "<br>" . $QueixaRegistro = $Procedentes['queixa_registro'];
        echo "<br>" . $OutrasInformacoesRegistro = $Procedentes['outras_informacoes_registro'];

        $FinanceiroVeiculo = $Procedentes['financeiro_veiculo'];
        if( $FinanceiroVeiculo != '' ){
          echo "<br>" . $InstituicaoFinanceiro = $Procedentes['instituicao_financeiro'];
          echo "<br>" . $TotalParcelasFinanceiro = $Procedentes['total_parcelas_financeiro'];
          echo "<br>" . $ValorParcelaFinanceiro = substr_replace($Procedentes['valor_parcela_financeiro'], "R$ ", 0, 0);
          echo "<br>" . $ParcelasPagasFinanceiro = $Procedentes['parcelas_pagas_financeiro'];
          echo "<br>" . $SituacaoFinanceiro = $Procedentes['situacao_financeiro'];
          if( $SituacaoFinanceiro == 2 ){ 
            echo "<br>" . $ParcelasInadimplentes = $Procedentes['parcelas_inadimplentes']; 
          }
          echo "<br>" . $FotoParcela1 = $Procedentes['foto_parcela1'];
          echo "<br>" . $FotoParcela2 = $Procedentes['foto_parcela2'];
          echo "<br>" . $FotoParcela3 = $Procedentes['foto_parcela3'];
          echo "<br>" . $FotoParcela4 = $Procedentes['foto_parcela4'];
          echo "<br>" . $FotoParcela5 = $Procedentes['foto_parcela5'];
          echo "<br>" . $FotoParcela6 = $Procedentes['foto_parcela6'];
        }

        $TipoSistema = $Procedentes['tipo_sistema'];

        echo "<br>" . $AntiFurtoComprovante1 = $Procedentes['foto_comprovante1'];
        echo "<br>" . $AntiFurtoComprovante2 = $Procedentes['foto_comprovante2'];

        echo "<br>" . $AntifurtoTelemetria1 = $Procedentes['telemetria1'];
        echo "<br>" . $AntifurtoTelemetria2 = $Procedentes['telemetria2'];
        echo "<br>" . $AntifurtoTelemetria3 = $Procedentes['telemetria3'];

      }
    }
  }else{
    //DEV
     "<br><pre>" . 
    $QueryBuscarProcedencias = "
      SELECT * FROM 
        tb_veiculos veiculo
      
      INNER JOIN tb_documento_veiculo documento
        ON veiculo.documento_veiculo = documento.id_documento
      
      INNER JOIN tb_procedentes procedente
        ON veiculo.procedente_veiculo = procedente.id_procedente
      
      INNER JOIN tb_sistemas_anti_furto anti_furto
        ON veiculo.sistema_anti_furto = anti_furto.id_sistema

      INNER JOIN tb_vistorias_realizadas vistoria
        ON veiculo.vistoria_realizada = vistoria.id_vistoria

      INNER JOIN tb_registro_detran registro_detran
        ON veiculo.registro_detran = registro_detran.id_registro_detran

      INNER JOIN tb_detran_estados estados_detran
        ON registro_detran.estado_registro_detran = estados_detran.id_detran

      INNER JOIN tb_financeiro_veiculo financeiro
        ON veiculo.financeiro_veiculo = financeiro.id_financeiro

      INNER JOIN tb_sistemas_anti_furto antifurto
        ON veiculo.protocolo_evento = antifurto.protocolo_sistema
      
      
      WHERE protocolo_procedente = '$Protocolo'
    ";
     "</pre>";
     $ExeQrBuscarProcedentes = mysqli_query($connection, $QueryBuscarProcedencias);
     $RowQrBuscarProcedentes = mysqli_num_rows($ExeQrBuscarProcedentes);

     if( $RowQrBuscarProcedentes = 1 ){
       while( $Procedentes = mysqli_fetch_assoc($ExeQrBuscarProcedentes) ){
        "<br>Marca Veículo" . $MarcaVeiculo = $Procedentes['marca_veiculo'];
        "<br>Modelo Veículo" . $ModeloVeiculo = $Procedentes['modelo_veiculo'];
        "<br>Placa Veículo" . $PlacaVeiculo = $Procedentes['placa_veiculo'];
        "<br>Veículo: " . $ExibirVeiculo = $MarcaVeiculo . " - " . $ModeloVeiculo;
        
        "<br>Confirmação Procedente: " . $ConfirmaProcedente = $Procedentes['confirma_procedente'];
        
        "<br>Documento-Frente: " . $FotoFrenteDocumentoVeiculo = $Procedentes['foto_frente_documento'];
        "<br>Documento-Verso: " . $FotoVersoDocumentoVeiculo = $Procedentes['foto_verso_documento'];
        "<br>Documento Preenchido: " . $DocumentoPreenchido = $Procedentes['documento_preenchido'];

        "<br>Foto-Procedente1: " . $FotoProcedenteVeiculo1 = $Procedentes['foto_procedente1'];
        "<br>Foto-Procedente2: " . $FotoProcedenteVeiculo2 = $Procedentes['foto_procedente2'];
        "<br>Foto-Procedente3: " . $FotoProcedenteVeiculo3 = $Procedentes['foto_procedente3'];

        "<br>Proprietario-Legal: " . $ProprietarioLegal = $Procedentes['proprietario_veiculo'];

        "<br>Proprietario-Anterior: " . $ProprietarioAnterior = $Procedentes['proprietario_anterior_veiculo'];

        "<br>Vistoria-Obrigatoria: " . $VistoriaObrigatoria = $Procedentes['vistoria_obrigatoria'];
        if( $VistoriaObrigatoria == 1 ){
          "<br>Vistoria-Aprovada: " . $VistoriaAprovada = $Procedentes['vistoria_aprovada'];
          "<br>Data-Vistoria: " . $DataVistoria = date("d/m/Y", strtotime($Procedentes['data_vistoria']));
          "<br>Foto1-Vistoria: " . $FotoVistoria1 = $Procedentes['foto1_vistoria'];
          "<br>Foto2-Vistoria: " . $FotoVistoria2 = $Procedentes['foto2_vistoria'];
          "<br>Foto3-Vistoria: " . $FotoVistoria3 = $Procedentes['foto3_vistoria'];
        }

        "<br>Estado-Detran: " . $EstadoDetran = $Procedentes['estado_detran'];

        "<br>Multa-Detran: " . $MultaRegistroDetran = $Procedentes['multa_registro_detran'];
        if( $MultaRegistroDetran == 1 ){
          "<br>Foto1-Multa: " . $FotoMultaDetran1 = $Procedentes['foto1_multa'];
          "<br>Foto2-Multa: " . $FotoMultaDetran2 = $Procedentes['foto2_multa'];
          "<br>Foto3-Multa: " . $FotoMultaDetran3 = $Procedentes['foto3_multa'];
        }
                
        "<br>Restrições-Diversas: " . $RestricoesDiversas = $Procedentes['restricoes_diversas'];
        "<br>Restrições-Financeiras: " . $RestricoesFinanceiras = $Procedentes['restricoes_financeiras'];
        "<br>Registro-Queixa: " . $QueixaRegistro = $Procedentes['queixa_registro'];
        "<br>Informações-Diversas: " . $OutrasInformacoesRegistro = $Procedentes['outras_informacoes_registro'];

        "<br>Financeiro-Veiculo: " . $FinanceiroVeiculo = $Procedentes['financeiro_veiculo'];
        if( $FinanceiroVeiculo != '' ){
          "<br>Instituição-Financeiro: " . $InstituicaoFinanceiro = $Procedentes['instituicao_financeiro'];
          "<br>Parcelas-Financeiro: " . $TotalParcelasFinanceiro = $Procedentes['total_parcelas_financeiro'];
          "<br>Valor-Pc-Financeiro: " . $ValorParcelaFinanceiro = substr_replace($Procedentes['valor_parcela_financeiro'], "R$ ", 0, 0);
          "<br>Pc-Pagas-Financeiro: " . $ParcelasPagasFinanceiro = $Procedentes['parcelas_pagas_financeiro'];
          "<br>Situação-Financeiro: " . $SituacaoFinanceiro = $Procedentes['situacao_financeiro'];
          if( $SituacaoFinanceiro == 2 ){ 
            "<br>Inadimplente-Financeiro: " . $ParcelasInadimplentes = $Procedentes['parcelas_inadimplentes']; 
          }
          "<br>Foto1-Financeiro: " . $FotoParcela1 = $Procedentes['foto_parcela1'];
          "<br>Foto2-Financeiro: " . $FotoParcela2 = $Procedentes['foto_parcela2'];
          "<br>Foto3-Financeiro: " . $FotoParcela3 = $Procedentes['foto_parcela3'];
          "<br>Foto4-Financeiro: " . $FotoParcela4 = $Procedentes['foto_parcela4'];
          "<br>Foto5-Financeiro: " . $FotoParcela5 = $Procedentes['foto_parcela5'];
          "<br>Foto6-Financeiro: " . $FotoParcela6 = $Procedentes['foto_parcela6'];
        }

        "<br>Tipo-Antifurto: " . $TipoSistema = $Procedentes['tipo_sistema'];

        "<br>Comprovante1-Antifurto: " . $AntiFurtoComprovante1 = $Procedentes['foto_comprovante1'];
        "<br>Comprovante2-Antifurto: " . $AntiFurtoComprovante2 = $Procedentes['foto_comprovante2'];

        "<br>Telemetria1-Antifurto: " . $AntifurtoTelemetria1 = $Procedentes['telemetria1'];
        "<br>Telemetria2-Antifurto: " . $AntifurtoTelemetria2 = $Procedentes['telemetria2'];
        "<br>Telemetria3-Antifurto: " . $AntifurtoTelemetria3 = $Procedentes['telemetria3'];

       }
     }
  }
?>