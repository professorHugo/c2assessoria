	<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>" . 
    $QueryBuscarTestemunhaConvivio = "
      SELECT * FROM 
        tb_entrevistados
      WHERE 
        protocolo_entrevistados = '$Protocolo' &&
        tipo_entrevistado = '1' &&
        testemunha_entrevistado = '1' &&
        perfil_entrevistado = '1'
    ";
    echo "</pre>";
    $ExeQrBuscarTestemunhaConvivio = mysqli_query($connection, $QueryBuscarTestemunhaConvivio);
    $RowQrBuscarTestemunhaConvivio = mysqli_num_rows($ExeQrBuscarTestemunhaConvivio);
    if( $RowQrBuscarTestemunhaConvivio >= 1 ){
      while( $ReturnTestemunhaConvivio = mysqli_fetch_assoc($ExeQrBuscarTestemunhaConvivio) ){
        $IdEntrevistadoConvivio = $ReturnTestemunhaConvivio['id_entrevistado'];
        $NomeEntrevistadoConvivio = $ReturnTestemunhaConvivio['nome_entrevistado'];
        $RelacionamentoEntrevistadoConvivio = $ReturnTestemunhaConvivio['relacionamento_entrevistado'];
        if( $ReturnTestemunhaConvivio['telefone_entrevistado'] != '' ){
          $TelefoneEntrevistadoConvivio = $ReturnTestemunhaConvivio['telefone_entrevistado'];
        }else{
          $TelefoneEntrevistadoConvivio = "Não fornecido";
        }

        $CepEntrevistadoConvivio = $ReturnTestemunhaConvivio['cep_entrevistado'];
        $EnderecoEntrevistadoConvivio = $ReturnTestemunhaConvivio['endereco_entrevistado'];
        $NumeroEndEntrevistadoConvivio = $ReturnTestemunhaConvivio['numero_end_entrevistado'];
        $BairroEntrevistadoConvivio = $ReturnTestemunhaConvivio['bairro_entrevistado'];
        $CidadeEntrevistadoConvivio = $ReturnTestemunhaConvivio['cidade_entrevistado'];
        $UFEntrevistadoConvivio = $ReturnTestemunhaConvivio['UF_entrevistado'];

        if( $ReturnTestemunhaConvivio['foto1_entrevistado'] != '' ){
          echo "<br>Foto 1: " . $Foto1EntrevistadoConvivio = $ReturnTestemunhaConvivio['foto1_entrevistado'];
        }else{
          echo "<br>Foto 1: " . $Foto1EntrevistadoConvivio = "1";
        }

        if( $ReturnTestemunhaConvivio['foto2_entrevistado'] != '' ){
          echo "<br>Foto 2: " . $Foto2EntrevistadoConvivio = $ReturnTestemunhaConvivio['foto2_entrevistado'];
        }else{
          echo "<br>Foto 2: " . $Foto2EntrevistadoConvivio = "1";
        }

        if( $ReturnTestemunhaConvivio['foto3_entrevistado'] != '' ){
          echo "<br>Foto 3: " . $Foto3EntrevistadoConvivio = $ReturnTestemunhaConvivio['foto3_entrevistado'];
        }else{
          echo "<br>Foto 3: " . $Foto3EntrevistadoConvivio = "1";
        }

        if( $ReturnTestemunhaConvivio['foto4_entrevistado'] != '' ){
          echo "<br>Foto 4: " . $Foto4EntrevistadoConvivio = $ReturnTestemunhaConvivio['foto4_entrevistado'];
        }else{
          echo "<br>Foto 4: " . $Foto4EntrevistadoConvivio = "1";
        }

        if( $ReturnTestemunhaConvivio['foto5_entrevistado'] != '' ){
          echo "<br>Foto 5: " . $Foto5EntrevistadoConvivio = $ReturnTestemunhaConvivio['foto5_entrevistado'];
        }else{
          echo "<br>Foto 5: " . $Foto5EntrevistadoConvivio = "1";
        }

        if( $ReturnTestemunhaConvivio['foto6_entrevistado'] != '' ){
          echo "<br>Foto 6: " . $Foto6EntrevistadoConvivio = $ReturnTestemunhaConvivio['foto6_entrevistado'];
        }else{
          echo "<br>Foto 6: " . $Foto6EntrevistadoConvivio = "1";
        }
        
        if( $ReturnTestemunhaConvivio['documento_entrevistado_frente'] != '' ){
          $DocumentoEntrevistadoFrente = $ReturnTestemunhaConvivio['documento_entrevistado_frente'];
        }else{
          $DocumentoEntrevistadoFrente = '1';
        }

        if( $ReturnTestemunhaConvivio['documento_entrevistado_verso'] != '' ){
          $DocumentoEntrevistadoVerso = $ReturnTestemunhaConvivio['documento_entrevistado_verso'];
        }else{
          $DocumentoEntrevistadoVerso = '1';
        }
        
        if( $ReturnTestemunhaConvivio['observacao_entrevistado'] != '' ){
          $ObservacaoEntrevistado = $ReturnTestemunhaConvivio['observacao_entrevistado'];
        }else{
          $ObservacaoEntrevistado = '1';
        }
        

        ?>
          <div class="col-12 entrevistado-convivio space-2" style="margin-bottom: 50px;">
            <div class="col-6 float-left">
              <b>Nome do Entrevistado: </b><br>
              <?php echo $NomeEntrevistadoConvivio?>
            </div>

            <div class="col-3 float-left">
              <b>Relacionamento: </b><br>
              <?php echo $RelacionamentoEntrevistadoConvivio?>
            </div>

            <div class="col-3 float-left">
              <b>Contato: </b><br>
              <?php echo $TelefoneEntrevistadoConvivio?>
            </div>

            <div class="col-12 space-1 float-left"></div>

            <div class="col-3 float-left">
              <b>CEP: </b><br>
              <?php echo $CepEntrevistadoConvivio?>
            </div>

            <div class="col-9 float-left">
              <b>Logadouro: </b><br>
              <?php
                echo "
                  $EnderecoEntrevistadoConvivio, $NumeroEndEntrevistadoConvivio - 
                  $BairroEntrevistadoConvivio - $CidadeEntrevistadoConvivio | $UFEntrevistadoConvivio
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
    $QueryBuscarTestemunhaConvivio = "
      SELECT * FROM 
        tb_entrevistados
      WHERE 
        protocolo_entrevistados = '$Protocolo' &&
        tipo_entrevistado = '1' &&
        testemunha_entrevistado = '1' &&
        perfil_entrevistado = '1'
    ";
    "</pre>";
    $ExeQrBuscarTestemunhaConvivio = mysqli_query($connection, $QueryBuscarTestemunhaConvivio);
    $RowQrBuscarTestemunhaConvivio = mysqli_num_rows($ExeQrBuscarTestemunhaConvivio);
    if( $RowQrBuscarTestemunhaConvivio >= 1 ){
      while( $ReturnTestemunhaConvivio = mysqli_fetch_assoc($ExeQrBuscarTestemunhaConvivio) ){
        $IdEntrevistadoConvivio = $ReturnTestemunhaConvivio['id_entrevistado'];
        $NomeEntrevistadoConvivio = $ReturnTestemunhaConvivio['nome_entrevistado'];
        $RelacionamentoEntrevistadoConvivio = $ReturnTestemunhaConvivio['relacionamento_entrevistado'];
        if( $ReturnTestemunhaConvivio['telefone_entrevistado'] != '' ){
          $TelefoneEntrevistadoConvivio = $ReturnTestemunhaConvivio['telefone_entrevistado'];
        }else{
          $TelefoneEntrevistadoConvivio = "Não fornecido";
        }

        $CepEntrevistadoConvivio = $ReturnTestemunhaConvivio['cep_entrevistado'];
        $EnderecoEntrevistadoConvivio = $ReturnTestemunhaConvivio['endereco_entrevistado'];
        $NumeroEndEntrevistadoConvivio = $ReturnTestemunhaConvivio['numero_end_entrevistado'];
        $BairroEntrevistadoConvivio = $ReturnTestemunhaConvivio['bairro_entrevistado'];
        $CidadeEntrevistadoConvivio = $ReturnTestemunhaConvivio['cidade_entrevistado'];
        $UFEntrevistadoConvivio = $ReturnTestemunhaConvivio['estado_entrevistado'];

        if( $ReturnTestemunhaConvivio['foto1_entrevistado'] != '' ){
           "<br>Foto 1: " . $Foto1EntrevistadoConvivio = $ReturnTestemunhaConvivio['foto1_entrevistado'];
        }else{
           "<br>Foto 1: " . $Foto1EntrevistadoConvivio = "1";
        }

        if( $ReturnTestemunhaConvivio['foto2_entrevistado'] != '' ){
           "<br>Foto 2: " . $Foto2EntrevistadoConvivio = $ReturnTestemunhaConvivio['foto2_entrevistado'];
        }else{
           "<br>Foto 2: " . $Foto2EntrevistadoConvivio = "1";
        }

        if( $ReturnTestemunhaConvivio['foto3_entrevistado'] != '' ){
           "<br>Foto 3: " . $Foto3EntrevistadoConvivio = $ReturnTestemunhaConvivio['foto3_entrevistado'];
        }else{
           "<br>Foto 3: " . $Foto3EntrevistadoConvivio = "1";
        }

        if( $ReturnTestemunhaConvivio['foto4_entrevistado'] != '' ){
           "<br>Foto 4: " . $Foto4EntrevistadoConvivio = $ReturnTestemunhaConvivio['foto4_entrevistado'];
        }else{
           "<br>Foto 4: " . $Foto4EntrevistadoConvivio = "1";
        }

        if( $ReturnTestemunhaConvivio['foto5_entrevistado'] != '' ){
           "<br>Foto 5: " . $Foto5EntrevistadoConvivio = $ReturnTestemunhaConvivio['foto5_entrevistado'];
        }else{
           "<br>Foto 5: " . $Foto5EntrevistadoConvivio = "1";
        }

        if( $ReturnTestemunhaConvivio['foto6_entrevistado'] != '' ){
           "<br>Foto 6: " . $Foto6EntrevistadoConvivio = $ReturnTestemunhaConvivio['foto6_entrevistado'];
        }else{
           "<br>Foto 6: " . $Foto6EntrevistadoConvivio = "1";
        }
        
        if( $ReturnTestemunhaConvivio['documento_entrevistado_frente'] != '' ){
          $DocumentoConvivioFrente = $ReturnTestemunhaConvivio['documento_entrevistado_frente'];
        }else{
          $DocumentoConvivioFrente = '1';
        }

        if( $ReturnTestemunhaConvivio['documento_entrevistado_verso'] != '' ){
          $DocumentoConvivioVerso = $ReturnTestemunhaConvivio['documento_entrevistado_verso'];
        }else{
          $DocumentoConvivioVerso = '1';
        }
        
        if( $ReturnTestemunhaConvivio['observacao_entrevistado'] != '' ){
          $ObservacaoEntrevistado = $ReturnTestemunhaConvivio['observacao_entrevistado'];
        }else{
          $ObservacaoEntrevistado = '1';
        }
        

        ?>
          <div class="col-12 entrevistado-convivio space-2" style="margin-bottom: 50px;">
            <div class="col-6 float-left">
              <b>Nome do Entrevistado: </b><br>
              <?php echo $NomeEntrevistadoConvivio?>
            </div>

            <div class="col-3 float-left">
              <b>Relacionamento: </b><br>
              <?php echo $RelacionamentoEntrevistadoConvivio?>
            </div>

            <div class="col-3 float-left">
              <b>Contato: </b><br>
              <?php echo $TelefoneEntrevistadoConvivio?>
            </div>

            <div class="col-12 space-1 float-left"></div>

            <div class="col-3 float-left">
              <b>CEP: </b><br>
              <?php echo $CepEntrevistadoConvivio?>
            </div>

            <div class="col-9 float-left">
              <b>Logadouro: </b><br>
              <?php
                echo "
                  $EnderecoEntrevistadoConvivio, $NumeroEndEntrevistadoConvivio - 
                  $BairroEntrevistadoConvivio - $CidadeEntrevistadoConvivio | $UFEntrevistadoConvivio
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