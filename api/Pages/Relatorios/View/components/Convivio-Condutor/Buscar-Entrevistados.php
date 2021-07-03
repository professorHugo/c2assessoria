<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>" . 
    $QueryBuscarTestemunhaConvivioCondutor = "
      SELECT * FROM 
        tb_entrevistados
      WHERE 
        protocolo_entrevistados = '$Protocolo' &&
        tipo_entrevistado = '1' &&
        testemunha_entrevistado = '1' &&
        perfil_entrevistado = '2'
    ";
    echo "</pre>";
    $ExeQrBuscarTestemunhaConvivioCondutor = mysqli_query($connection, $QueryBuscarTestemunhaConvivioCondutor);
    $RowQrBuscarTestemunhaConvivioCondutor = mysqli_num_rows($ExeQrBuscarTestemunhaConvivioCondutor);
    if( $RowQrBuscarTestemunhaConvivioCondutor >= 1 ){
      while( $ReturnTestemunhaConvivioCondutor = mysqli_fetch_assoc($ExeQrBuscarTestemunhaConvivioCondutor) ){
        $IdEntrevistadoConvivioCondutor = $ReturnTestemunhaConvivioCondutor['id_entrevistado'];
        $NomeEntrevistadoConvivioCondutor = $ReturnTestemunhaConvivioCondutor['nome_entrevistado'];
        $RelacionamentoEntrevistadoConvivioCondutor = $ReturnTestemunhaConvivioCondutor['relacionamento_entrevistado'];
        if( $ReturnTestemunhaConvivioCondutor['telefone_entrevistado'] != '' ){
          $TelefoneEntrevistadoConvivioCondutor = $ReturnTestemunhaConvivioCondutor['telefone_entrevistado'];
        }else{
          $TelefoneEntrevistadoConvivioCondutor = "Não fornecido";
        }

        $CepEntrevistadoConvivioCondutor = $ReturnTestemunhaConvivioCondutor['cep_entrevistado'];
        $EnderecoEntrevistadoConvivioCondutor = $ReturnTestemunhaConvivioCondutor['endereco_entrevistado'];
        $NumeroEndEntrevistadoConvivioCondutor = $ReturnTestemunhaConvivioCondutor['numero_end_entrevistado'];
        $BairroEntrevistadoConvivioCondutor = $ReturnTestemunhaConvivioCondutor['bairro_entrevistado'];
        $CidadeEntrevistadoConvivioCondutor = $ReturnTestemunhaConvivioCondutor['cidade_entrevistado'];
        $UFEntrevistadoConvivioCondutor = $ReturnTestemunhaConvivioCondutor['UF_entrevistado'];

        if( $ReturnTestemunhaConvivioCondutor['foto1_entrevistado'] != '' ){
          echo "<br>Foto 1: " . $Foto1EntrevistadoConvivioCondutor = $ReturnTestemunhaConvivioCondutor['foto1_entrevistado'];
        }else{
          echo "<br>Foto 1: " . $Foto1EntrevistadoConvivioCondutor = "1";
        }

        if( $ReturnTestemunhaConvivioCondutor['foto2_entrevistado'] != '' ){
          echo "<br>Foto 2: " . $Foto2EntrevistadoConvivioCondutor = $ReturnTestemunhaConvivioCondutor['foto2_entrevistado'];
        }else{
          echo "<br>Foto 2: " . $Foto2EntrevistadoConvivioCondutor = "1";
        }

        if( $ReturnTestemunhaConvivioCondutor['foto3_entrevistado'] != '' ){
          echo "<br>Foto 3: " . $Foto3EntrevistadoConvivioCondutor = $ReturnTestemunhaConvivioCondutor['foto3_entrevistado'];
        }else{
          echo "<br>Foto 3: " . $Foto3EntrevistadoConvivioCondutor = "1";
        }

        if( $ReturnTestemunhaConvivioCondutor['foto4_entrevistado'] != '' ){
          echo "<br>Foto 4: " . $Foto4EntrevistadoConvivioCondutor = $ReturnTestemunhaConvivioCondutor['foto4_entrevistado'];
        }else{
          echo "<br>Foto 4: " . $Foto4EntrevistadoConvivioCondutor = "1";
        }

        if( $ReturnTestemunhaConvivioCondutor['foto5_entrevistado'] != '' ){
          echo "<br>Foto 5: " . $Foto5EntrevistadoConvivioCondutor = $ReturnTestemunhaConvivioCondutor['foto5_entrevistado'];
        }else{
          echo "<br>Foto 5: " . $Foto5EntrevistadoConvivioCondutor = "1";
        }

        if( $ReturnTestemunhaConvivioCondutor['foto6_entrevistado'] != '' ){
          echo "<br>Foto 6: " . $Foto6EntrevistadoConvivioCondutor = $ReturnTestemunhaConvivioCondutor['foto6_entrevistado'];
        }else{
          echo "<br>Foto 6: " . $Foto6EntrevistadoConvivioCondutor = "1";
        }
        
        if( $ReturnTestemunhaConvivioCondutor['documento_entrevistado_frente'] != '' ){
          $DocumentoEntrevistadoFrenteCondutor = $ReturnTestemunhaConvivioCondutor['documento_entrevistado_frente'];
        }else{
          $DocumentoEntrevistadoFrenteCondutor = '1';
        }

        if( $ReturnTestemunhaConvivioCondutor['documento_entrevistado_verso'] != '' ){
          $DocumentoEntrevistadoVersoCondutor = $ReturnTestemunhaConvivioCondutor['documento_entrevistado_verso'];
        }else{
          $DocumentoEntrevistadoVersoCondutor = '1';
        }
        
        if( $ReturnTestemunhaConvivioCondutor['observacao_entrevistado'] != '' ){
          $ObservacaoEntrevistado = $ReturnTestemunhaConvivioCondutor['observacao_entrevistado'];
        }else{
          $ObservacaoEntrevistado = '1';
        }
        

        ?>
          <div class="col-12 entrevistado-convivio space-2" style="margin-bottom: 50px;">
            <div class="col-6 float-left">
              <b>Nome do Entrevistado: </b><br>
              <?php echo $NomeEntrevistadoConvivioCondutor?>
            </div>

            <div class="col-3 float-left">
              <b>Relacionamento: </b><br>
              <?php echo $RelacionamentoEntrevistadoConvivioCondutor?>
            </div>

            <div class="col-3 float-left">
              <b>Contato: </b><br>
              <?php echo $TelefoneEntrevistadoConvivioCondutor?>
            </div>

            <div class="col-12 space-1 float-left"></div>

            <div class="col-3 float-left">
              <b>CEP: </b><br>
              <?php echo $CepEntrevistadoConvivioCondutor?>
            </div>

            <div class="col-9 float-left">
              <b>Logadouro: </b><br>
              <?php
                echo "
                  $EnderecoEntrevistadoConvivioCondutor, $NumeroEndEntrevistadoConvivioCondutor - 
                  $BairroEntrevistadoConvivioCondutor - $CidadeEntrevistadoConvivioCondutor | $UFEntrevistadoConvivioCondutor
                ";
              ?>
            </div>

            <div class="col-12 space-2 documentos-entrevistado-convivio">
              <?php include 'containers/Documentos-Entrevistado.php' ?>
            </div>

            <div class="col-12 space-2 declaracao-entrevistado-convivio">
              <?php include 'containers/Declaracao-Entrevistado.php' ?>
            </div>

          </div>
        <?php
      }
    }
  }else{
    //PROD
    "<br><pre>" . 
    $QueryBuscarTestemunhaConvivioCondutor = "
      SELECT * FROM 
        tb_entrevistados
      WHERE 
        protocolo_entrevistados = '$Protocolo' &&
        tipo_entrevistado = '1' &&
        testemunha_entrevistado = '1' &&
        perfil_entrevistado = '2'
    ";
    "</pre>";
    $ExeQrBuscarTestemunhaConvivioCondutor = mysqli_query($connection, $QueryBuscarTestemunhaConvivioCondutor);
    $RowQrBuscarTestemunhaConvivioCondutor = mysqli_num_rows($ExeQrBuscarTestemunhaConvivioCondutor);
    if( $RowQrBuscarTestemunhaConvivioCondutor >= 1 ){
      while( $ReturnTestemunhaConvivioCondutor = mysqli_fetch_assoc($ExeQrBuscarTestemunhaConvivioCondutor) ){
        $IdEntrevistadoConvivioCondutor = $ReturnTestemunhaConvivioCondutor['id_entrevistado'];
        $NomeEntrevistadoConvivioCondutor = $ReturnTestemunhaConvivioCondutor['nome_entrevistado'];
        $RelacionamentoEntrevistadoConvivioCondutor = $ReturnTestemunhaConvivioCondutor['relacionamento_entrevistado'];
        if( $ReturnTestemunhaConvivioCondutor['telefone_entrevistado'] != '' ){
          $TelefoneEntrevistadoConvivioCondutor = $ReturnTestemunhaConvivioCondutor['telefone_entrevistado'];
        }else{
          $TelefoneEntrevistadoConvivioCondutor = "Não fornecido";
        }

        $CepEntrevistadoConvivioCondutor = $ReturnTestemunhaConvivioCondutor['cep_entrevistado'];
        $EnderecoEntrevistadoConvivioCondutor = $ReturnTestemunhaConvivioCondutor['endereco_entrevistado'];
        $NumeroEndEntrevistadoConvivioCondutor = $ReturnTestemunhaConvivioCondutor['numero_end_entrevistado'];
        $BairroEntrevistadoConvivioCondutor = $ReturnTestemunhaConvivioCondutor['bairro_entrevistado'];
        $CidadeEntrevistadoConvivioCondutor = $ReturnTestemunhaConvivioCondutor['cidade_entrevistado'];
        $UFEntrevistadoConvivioCondutor = $ReturnTestemunhaConvivioCondutor['estado_entrevistado'];

        if( $ReturnTestemunhaConvivioCondutor['foto1_entrevistado'] != '' ){
           "<br>Foto 1: " . $Foto1EntrevistadoConvivioCondutor = $ReturnTestemunhaConvivioCondutor['foto1_entrevistado'];
        }else{
           "<br>Foto 1: " . $Foto1EntrevistadoConvivioCondutor = "1";
        }

        if( $ReturnTestemunhaConvivioCondutor['foto2_entrevistado'] != '' ){
           "<br>Foto 2: " . $Foto2EntrevistadoConvivioCondutor = $ReturnTestemunhaConvivioCondutor['foto2_entrevistado'];
        }else{
           "<br>Foto 2: " . $Foto2EntrevistadoConvivioCondutor = "1";
        }

        if( $ReturnTestemunhaConvivioCondutor['foto3_entrevistado'] != '' ){
           "<br>Foto 3: " . $Foto3EntrevistadoConvivioCondutor = $ReturnTestemunhaConvivioCondutor['foto3_entrevistado'];
        }else{
           "<br>Foto 3: " . $Foto3EntrevistadoConvivioCondutor = "1";
        }

        if( $ReturnTestemunhaConvivioCondutor['foto4_entrevistado'] != '' ){
           "<br>Foto 4: " . $Foto4EntrevistadoConvivioCondutor = $ReturnTestemunhaConvivioCondutor['foto4_entrevistado'];
        }else{
           "<br>Foto 4: " . $Foto4EntrevistadoConvivioCondutor = "1";
        }

        if( $ReturnTestemunhaConvivioCondutor['foto5_entrevistado'] != '' ){
           "<br>Foto 5: " . $Foto5EntrevistadoConvivioCondutor = $ReturnTestemunhaConvivioCondutor['foto5_entrevistado'];
        }else{
           "<br>Foto 5: " . $Foto5EntrevistadoConvivioCondutor = "1";
        }

        if( $ReturnTestemunhaConvivioCondutor['foto6_entrevistado'] != '' ){
           "<br>Foto 6: " . $Foto6EntrevistadoConvivioCondutor = $ReturnTestemunhaConvivioCondutor['foto6_entrevistado'];
        }else{
           "<br>Foto 6: " . $Foto6EntrevistadoConvivioCondutor = "1";
        }
        
        if( $ReturnTestemunhaConvivioCondutor['documento_entrevistado_frente'] != '' ){
          $DocumentoConvivioFrenteCondutor = $ReturnTestemunhaConvivioCondutor['documento_entrevistado_frente'];
        }else{
          $DocumentoConvivioFrenteCondutor = '1';
        }

        if( $ReturnTestemunhaConvivioCondutor['documento_entrevistado_verso'] != '' ){
          $DocumentoConvivioVersoCondutor = $ReturnTestemunhaConvivioCondutor['documento_entrevistado_verso'];
        }else{
          $DocumentoConvivioVersoCondutor = '1';
        }
        
        if( $ReturnTestemunhaConvivioCondutor['observacao_entrevistado'] != '' ){
          $ObservacaoEntrevistado = $ReturnTestemunhaConvivioCondutor['observacao_entrevistado'];
        }else{
          $ObservacaoEntrevistado = '1';
        }
        

        ?>
          <div class="col-12 entrevistado-convivio space-2" style="margin-bottom: 50px;">
            <div class="col-6 float-left">
              <b>Nome do Entrevistado: </b><br>
              <?php echo $NomeEntrevistadoConvivioCondutor?>
            </div>

            <div class="col-3 float-left">
              <b>Relacionamento: </b><br>
              <?php echo $RelacionamentoEntrevistadoConvivioCondutor?>
            </div>

            <div class="col-3 float-left">
              <b>Contato: </b><br>
              <?php echo $TelefoneEntrevistadoConvivioCondutor?>
            </div>

            <div class="col-12 space-1 float-left"></div>

            <div class="col-3 float-left">
              <b>CEP: </b><br>
              <?php echo $CepEntrevistadoConvivioCondutor?>
            </div>

            <div class="col-9 float-left">
              <b>Logadouro: </b><br>
              <?php
                echo "
                  $EnderecoEntrevistadoConvivioCondutor, $NumeroEndEntrevistadoConvivioCondutor - 
                  $BairroEntrevistadoConvivioCondutor - $CidadeEntrevistadoConvivioCondutor | $UFEntrevistadoConvivioCondutor
                ";
              ?>
            </div>
          </div>

          <div class="col-12 space-2 documentos-entrevistado-convivio">
            <?php include 'containers/Documentos-Entrevistado.php' ?>
          </div>

          <div class="col-12 space-2 declaracao-entrevistado-convivio">
            <?php include 'containers/Declaracao-Entrevistado.php' ?>
          </div>
        <?php
      }
    }
  }