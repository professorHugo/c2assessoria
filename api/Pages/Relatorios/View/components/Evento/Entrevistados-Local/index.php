<div class="row" id="Testemunhas-Local" style="padding-left: 25px; margin-bottom: 50px">
  <h4 class="rotulos">
    Testemunhas do evento no local
  </h4>
  <?php
    if( $SysMode == 1 ){
      //DEV
      echo "<br><pre>" . 
      $QueryBuscarTestemunhasEntrevistadas = "
        SELECT * FROM 
          tb_entrevistados 
        WHERE 
          protocolo_entrevistados = '$Protocolo' &&
          tipo_entrevistado = 1 &&
          testemunha_entrevistado = 0
      ";
      echo "</pre>";
      $ExeQrBuscarTestemunhasEntrevistadas = mysqli_query($connection, $QueryBuscarTestemunhasEntrevistadas);
      $RowQrBuscarTestemunhasEntrevistadas = mysqli_num_rows($ExeQrBuscarTestemunhasEntrevistadas);
      if( $RowQrBuscarTestemunhasEntrevistadas > 0 ){
        while( $ReturnTestemunhaEntrevistada = mysqli_fetch_assoc($ExeQrBuscarTestemunhasEntrevistadas) ){
          $IdEntrevistado = $ReturnTestemunhaEntrevistada['id_entrevistado'];
          $NomeEntrevistado = $ReturnTestemunhaEntrevistada['nome_entrevistado'];
          $RelacionamentoEntrevistado = $ReturnTestemunhaEntrevistada['relacionamento_entrevistado'];
          if( $ReturnTestemunhaEntrevistada['telefone_entrevistado'] != '' ){
            $TelefoneEntrevistado = $ReturnTestemunhaEntrevistada['telefone_entrevistado'];
          }else{
            $TelefoneEntrevistado = "Não fornecido";
          }
          
          $CEPEntrevistado = $ReturnTestemunhaEntrevistada['cep_entrevistado'];
          $EnderecoEntrevistado = $ReturnTestemunhaEntrevistada['endereco_entrevistado'];
          $NumeroEndEntrevistado = $ReturnTestemunhaEntrevistada['numero_end_entrevistado'];
          $BairroEntrevistado = $ReturnTestemunhaEntrevistada['bairro_entrevistado'];
          $CidadeEntrevistado  = $ReturnTestemunhaEntrevistada['cidade_entrevistado'];
          $UFEntrevistado = $ReturnTestemunhaEntrevistada['estado_entrevistado'];

          if( $ReturnTestemunhaEntrevistada['foto1_entrevistado'] != '' ){
            "<br>Foto: " . $Foto1Entrevistado = $ReturnTestemunhaEntrevistada['foto1_entrevistado'];
          }else{
            "<br>Foto: " . $Foto1Entrevistado = 1;
          }

          if( $ReturnTestemunhaEntrevistada['foto2_entrevistado'] != '' ){
            "<br>Foto: " . $Foto2Entrevistado = $ReturnTestemunhaEntrevistada['foto2_entrevistado'];
          }else{
            "<br>Foto: " . $Foto2Entrevistado = 1;
          }

          if( $ReturnTestemunhaEntrevistada['foto3_entrevistado'] != '' ){
            "<br>Foto: " . $Foto3Entrevistado = $ReturnTestemunhaEntrevistada['foto3_entrevistado'];
          }else{
            "<br>Foto: " . $Foto3Entrevistado = 1;
          }

          if( $ReturnTestemunhaEntrevistada['foto4_entrevistado'] != '' ){
            "<br>Foto: " . $Foto4Entrevistado = $ReturnTestemunhaEntrevistada['foto4_entrevistado'];
          }else{
            "<br>Foto: " . $Foto4Entrevistado = 1;
          }

          if( $ReturnTestemunhaEntrevistada['foto5_entrevistado'] != '' ){
            "<br>Foto: " . $Foto5Entrevistado = $ReturnTestemunhaEntrevistada['foto5_entrevistado'];
          }else{
            "<br>Foto: " . $Foto5Entrevistado = 1;
          }

          if( $ReturnTestemunhaEntrevistada['foto6_entrevistado'] != '' ){
            "<br>Foto: " . $Foto6Entrevistado = $ReturnTestemunhaEntrevistada['foto6_entrevistado'];
          }else{
            "<br>Foto: " . $Foto6Entrevistado = 1;
          }
          
          if( $ReturnTestemunhaEntrevistada['documento_entrevistado_frente'] != '' ){
            $DocumentoEntrevistadoFrente = $ReturnTestemunhaEntrevistada['documento_entrevistado_frente'];
          }else{
            $DocumentoEntrevistadoFrente = 0;
          }

          if( $ReturnTestemunhaEntrevistada['documento_entrevistado_verso'] != '' ){
            $DocumentoEntrevistadoVerso = $ReturnTestemunhaEntrevistada['documento_entrevistado_verso'];
          }else{
            $DocumentoEntrevistadoVerso = 0;
          }

          $ObservacaoEntrevistado = $ReturnTestemunhaEntrevistada['observacao_entrevistado'];
          ?>
            <div class="col-12 testemunha-local" style="margin-bottom: 50px">
              
              <div class="col-6 float-left">
                <b>Nome da testemunha: </b><br>
                <?php echo $NomeEntrevistado ?>
              </div>

              <div class="col-3 float-left">
                <b>Tipo de testemunha: </b><br>
                <?php echo $RelacionamentoEntrevistado ?>
              </div>

              <div class="col-3 float-left">
                <b>Contato: </b><br>
                <?php echo $TelefoneEntrevistado ?>
              </div>

              <div class="col-12 space-1 float-left"></div>

              <div class="col-3 float-left">
                <b>CEP: </b><br>
                <?php echo $CEPEntrevistado ?>
              </div>
              
              <div class="col-9 float-left">
                <b>Logadouro: </b><br>
                <?php 
                  echo "
                    $EnderecoEntrevistado, $NumeroEndEntrevistado - 
                    $BairroEntrevistado - $CidadeEntrevistado | $UFEntrevistado
                  ";
                ?>
              </div>

              <div class="col-12 space-2 documentos-testemunha">
                <?php include 'Documentos-Testemunha.php' ?>
              </div>
			  
			  <div class="col-12 space-2 foto-declaracao-testemunha float-left">
                <?php include 'Declaracao-Testemunha.php'?>
              </div>
              
            </div>
          <?php
        }
        
      }
    }else{
      
      //PROD
      "<br><pre>" . 
      $QueryBuscarTestemunhasEntrevistadas = "
        SELECT * FROM 
          tb_entrevistados 
        WHERE 
          protocolo_entrevistados = '$Protocolo' &&
          tipo_entrevistado = 1 &&
          testemunha_entrevistado = 0
      ";
      "</pre>";
      $ExeQrBuscarTestemunhasEntrevistadas = mysqli_query($connection, $QueryBuscarTestemunhasEntrevistadas);
      $RowQrBuscarTestemunhasEntrevistadas = mysqli_num_rows($ExeQrBuscarTestemunhasEntrevistadas);
      if( $RowQrBuscarTestemunhasEntrevistadas > 0 ){
        while( $ReturnTestemunhaEntrevistada = mysqli_fetch_assoc($ExeQrBuscarTestemunhasEntrevistadas) ){
          $IdEntrevistado = $ReturnTestemunhaEntrevistada['id_entrevistado'];
          $NomeEntrevistado = $ReturnTestemunhaEntrevistada['nome_entrevistado'];
          $RelacionamentoEntrevistado = $ReturnTestemunhaEntrevistada['relacionamento_entrevistado'];
          if( $ReturnTestemunhaEntrevistada['telefone_entrevistado'] != '' ){
            $TelefoneEntrevistado = $ReturnTestemunhaEntrevistada['telefone_entrevistado'];
          }else{
            $TelefoneEntrevistado = "Não fornecido";
          }
          
          $CEPEntrevistado = $ReturnTestemunhaEntrevistada['cep_entrevistado'];
          $EnderecoEntrevistado = $ReturnTestemunhaEntrevistada['endereco_entrevistado'];
          $NumeroEndEntrevistado = $ReturnTestemunhaEntrevistada['numero_end_entrevistado'];
          $BairroEntrevistado = $ReturnTestemunhaEntrevistada['bairro_entrevistado'];
          $CidadeEntrevistado  = $ReturnTestemunhaEntrevistada['cidade_entrevistado'];
          $UFEntrevistado = $ReturnTestemunhaEntrevistada['estado_entrevistado'];

          if( $ReturnTestemunhaEntrevistada['foto1_entrevistado'] != '' ){
            "<br>Foto: " . $Foto1Entrevistado = $ReturnTestemunhaEntrevistada['foto1_entrevistado'];
          }else{
            "<br>Foto: " . $Foto1Entrevistado = 1;
          }

          if( $ReturnTestemunhaEntrevistada['foto2_entrevistado'] != '' ){
            "<br>Foto: " . $Foto2Entrevistado = $ReturnTestemunhaEntrevistada['foto2_entrevistado'];
          }else{
            "<br>Foto: " . $Foto2Entrevistado = 1;
          }

          if( $ReturnTestemunhaEntrevistada['foto3_entrevistado'] != '' ){
            "<br>Foto: " . $Foto3Entrevistado = $ReturnTestemunhaEntrevistada['foto3_entrevistado'];
          }else{
            "<br>Foto: " . $Foto3Entrevistado = 1;
          }

          if( $ReturnTestemunhaEntrevistada['foto4_entrevistado'] != '' ){
            "<br>Foto: " . $Foto4Entrevistado = $ReturnTestemunhaEntrevistada['foto4_entrevistado'];
          }else{
            "<br>Foto: " . $Foto4Entrevistado = 1;
          }

          if( $ReturnTestemunhaEntrevistada['foto5_entrevistado'] != '' ){
            "<br>Foto: " . $Foto5Entrevistado = $ReturnTestemunhaEntrevistada['foto5_entrevistado'];
          }else{
            "<br>Foto: " . $Foto5Entrevistado = 1;
          }

          if( $ReturnTestemunhaEntrevistada['foto6_entrevistado'] != '' ){
            "<br>Foto: " . $Foto6Entrevistado = $ReturnTestemunhaEntrevistada['foto6_entrevistado'];
          }else{
            "<br>Foto: " . $Foto6Entrevistado = 1;
          }
          
          if( $ReturnTestemunhaEntrevistada['documento_entrevistado_frente'] != '' ){
            $DocumentoEntrevistadoFrente = $ReturnTestemunhaEntrevistada['documento_entrevistado_frente'];
          }else{
            $DocumentoEntrevistadoFrente = 0;
          }

          if( $ReturnTestemunhaEntrevistada['documento_entrevistado_verso'] != '' ){
            $DocumentoEntrevistadoVerso = $ReturnTestemunhaEntrevistada['documento_entrevistado_verso'];
          }else{
            $DocumentoEntrevistadoVerso = 0;
          }

          $ObservacaoEntrevistado = $ReturnTestemunhaEntrevistada['observacao_entrevistado'];
          ?>
            <div class="col-12 testemunha-local" style="margin-bottom: 100px">
              
              <div class="col-6 float-left">
                <b>Nome da testemunha: </b><br>
                <?php echo $NomeEntrevistado ?>
              </div>

              <div class="col-3 float-left">
                <b>Tipo de testemunha: </b><br>
                <?php echo $RelacionamentoEntrevistado ?>
              </div>

              <div class="col-3 float-left">
                <b>Contato: </b><br>
                <?php echo $TelefoneEntrevistado ?>
              </div>

              <div class="col-12 space-1 float-left"></div>

              <div class="col-3 float-left">
                <b>CEP: </b><br>
                <?php echo $CEPEntrevistado ?>
              </div>
              
              <div class="col-9 float-left">
                <b>Logadouro: </b><br>
                <?php 
                  echo "
                    $EnderecoEntrevistado, $NumeroEndEntrevistado - 
                    $BairroEntrevistado - $CidadeEntrevistado | $UFEntrevistado
                  ";
                ?>
              </div>

              <div class="col-12 space-2 documentos-testemunha float-left">
                <?php include 'Documentos-Testemunha.php' ?>
              </div>

              <div class="col-12 space-2 foto-declaracao-testemunha float-left">
                <?php include 'Declaracao-Testemunha.php'?>
              </div>
              
            </div>
          <?php

          

        }
      }
    }
  ?>
</div>