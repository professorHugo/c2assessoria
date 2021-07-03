<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>" . 
    $QueryBuscarLocalEvento = "
      SELECT * FROM
        tb_relatorios relatorio
      INNER JOIN tb_local_evento local
        ON relatorio.protocolo_evento = local.protocolo_local_evento
      INNER JOIN tb_caracteristicas_tecnicas caracteristicas
        ON relatorio.protocolo_evento = caracteristicas.protocolo_caracteristica
      INNER JOIN tb_velocidade_maxima velocidade
        ON caracteristicas.velocidade_maxima = velocidade.id_velocidade
      
      INNER JOIN tb_entrevistados entrevistado
        ON relatorio.protocolo_evento = entrevistado.protocolo_entrevistados
      WHERE 
        relatorio.protocolo_evento = '$Protocolo' &&
        entrevistado.testemunha_entrevistado = 0
    ";
    echo "</pre>";
    $ExeQrBuscarLocalEvento = mysqli_query($connection, $QueryBuscarLocalEvento);
    $RowQrBuscarLocalEvento = mysqli_num_rows($ExeQrBuscarLocalEvento);
    if( $RowQrBuscarLocalEvento = 1 ){
      while( $ReturnLocalEvento = mysqli_fetch_assoc($ExeQrBuscarLocalEvento) ){
        //LocalEvento
        $QuantidadeEntrevistadosLocalEvento = $ReturnLocalEvento['quantidade_entrevistados'];
        $TestemunhasEntrevistadosLocalEvento = mysqli_num_rows($ExeQrBuscarLocalEvento);
        $FotosDoLocal = $ReturnLocalEvento['fotos_local_evento'];
        if( $FotosDoLocal == 1 ){
          $FotosDoLocal = "Sim";
          $Foto1LocalEvento = $ReturnLocalEvento['foto1_local_evento'];
          $Foto1LocalEvento = $ReturnLocalEvento['foto1_local_evento'];
          $Foto2LocalEvento = $ReturnLocalEvento['foto2_local_evento'];
          $Foto3LocalEvento = $ReturnLocalEvento['foto3_local_evento'];
        }else{
          $FotosDoLocal = "Não";
        }
        $Confirmacao1LocalEvento = $ReturnLocalEvento['confirmacao1_local'];
        $Confirmacao2LocalEvento = $ReturnLocalEvento['confirmacao2_local'];
        $Confirmacao3LocalEvento = $ReturnLocalEvento['confirmacao3_local'];
        $Confirmacao4LocalEvento = $ReturnLocalEvento['confirmacao4_local'];
        $Confirmacao5LocalEvento = $ReturnLocalEvento['confirmacao5_local'];
        $Confirmacao6LocalEvento = $ReturnLocalEvento['confirmacao6_local'];
        $SaveLocalEvento = $ReturnLocalEvento['local_evento_salvo'];
        //Características Técnicas
        $IndiceCriminalidade = $ReturnLocalEvento['indice_criminalidade'];
        $IndiceSinistralidade = $ReturnLocalEvento['indice_sinistralidade'];
        $CaracteristicasTecinicas = $ReturnLocalEvento['caracteristicas_tecnicas'];
        $RuaPavimentada = $ReturnLocalEvento['rua_pavimentada'];
        $PermitidiEstacionar = $ReturnLocalEvento['permitido_estacionar'];
        $AcliveDeclive = $ReturnLocalEvento['aclive_declive'];
        $TipoDirecaoPista = $ReturnLocalEvento['tipo_direcao_pista'];
        $CruzamentoPista = $ReturnLocalEvento['cruzamento_pista'];
        $PistaCurvas = $ReturnLocalEvento['pista_curvas'];
        $PistaRotatoria = $ReturnLocalEvento['pista_rotatoria'];
        $VelocidadeMaxima = $ReturnLocalEvento['texto_velocidade'];

        //POLICIAMENTO APONTADO
        $PoliciaCivil = $ReturnLocalEvento['policia_civil'];
        $PoliciaMilitar = $ReturnLocalEvento['policia_militar'];
        if( $PoliciaCivil != '' || $PoliciaMilitar != '' ){
          $PoliciamentoApontado = "Sim";
        }else{
          $PoliciamentoApontado = "Não";
        }
      }
    }
    
  }else{
    //PROD
    "<br><pre>" . 
    $QueryBuscarLocalEvento = "
      SELECT * FROM
        tb_relatorios relatorio
      INNER JOIN tb_local_evento local
        ON relatorio.protocolo_evento = local.protocolo_local_evento
      INNER JOIN tb_caracteristicas_tecnicas caracteristicas
        ON relatorio.protocolo_evento = caracteristicas.protocolo_caracteristica
      INNER JOIN tb_velocidade_maxima velocidade
        ON caracteristicas.velocidade_maxima = velocidade.id_velocidade
      
      INNER JOIN tb_entrevistados entrevistado
        ON relatorio.protocolo_evento = entrevistado.protocolo_entrevistados
      WHERE 
        relatorio.protocolo_evento = '$Protocolo' &&
        entrevistado.testemunha_entrevistado = 0
    ";
    "</pre>";
    $ExeQrBuscarLocalEvento = mysqli_query($connection, $QueryBuscarLocalEvento);
    $RowQrBuscarLocalEvento = mysqli_num_rows($ExeQrBuscarLocalEvento);
    if( $RowQrBuscarLocalEvento = 1 ){
      while( $ReturnLocalEvento = mysqli_fetch_assoc($ExeQrBuscarLocalEvento) ){
        //LocalEvento
        $QuantidadeEntrevistadosLocalEvento = $ReturnLocalEvento['quantidade_entrevistados'];
        $TestemunhasEntrevistadosLocalEvento = mysqli_num_rows($ExeQrBuscarLocalEvento);
        $FotosDoLocal = $ReturnLocalEvento['fotos_local_evento'];
        if( $FotosDoLocal == 1 ){
          $FotosDoLocal = "Sim";
          $Foto1LocalEvento = $ReturnLocalEvento['foto1_local_evento'];
          $Foto2LocalEvento = $ReturnLocalEvento['foto2_local_evento'];
          $Foto3LocalEvento = $ReturnLocalEvento['foto3_local_evento'];
        }else{
          $FotosDoLocal = "Não";
        }
        $Confirmacao1LocalEvento = $ReturnLocalEvento['confirmacao1_local'];
        $Confirmacao2LocalEvento = $ReturnLocalEvento['confirmacao2_local'];
        $Confirmacao3LocalEvento = $ReturnLocalEvento['confirmacao3_local'];
        $Confirmacao4LocalEvento = $ReturnLocalEvento['confirmacao4_local'];
        $Confirmacao5LocalEvento = $ReturnLocalEvento['confirmacao5_local'];
        $Confirmacao6LocalEvento = $ReturnLocalEvento['confirmacao6_local'];
        $SaveLocalEvento = $ReturnLocalEvento['local_evento_salvo'];
        //Características Técnicas
        $IndiceCriminalidade = $ReturnLocalEvento['indice_criminalidade'];
        $IndiceSinistralidade = $ReturnLocalEvento['indice_sinistralidade'];
        $CaracteristicasTecinicas = $ReturnLocalEvento['caracteristicas_tecnicas'];
        $RuaPavimentada = $ReturnLocalEvento['rua_pavimentada'];
        $PermitidiEstacionar = $ReturnLocalEvento['permitido_estacionar'];
        $AcliveDeclive = $ReturnLocalEvento['aclive_declive'];
        $TipoDirecaoPista = $ReturnLocalEvento['tipo_direcao_pista'];
        $CruzamentoPista = $ReturnLocalEvento['cruzamento_pista'];
        $PistaCurvas = $ReturnLocalEvento['pista_curvas'];
        $PistaRotatoria = $ReturnLocalEvento['pista_rotatoria'];
        $VelocidadeMaxima = $ReturnLocalEvento['texto_velocidade'];

        //POLICIAMENTO APONTADO
        $PoliciaCivil = $ReturnLocalEvento['policia_civil'];
        $PoliciaMilitar = $ReturnLocalEvento['policia_militar'];
        if( $PoliciaCivil != '' || $PoliciaMilitar != '' ){
          $PoliciamentoApontado = "Sim";
        }else{
          $PoliciamentoApontado = "Não";
        }
      }
    }
  }
?>

<h3 class="rotulos">Local do Evento: Caracteristicas do local</h3>
<?php include 'Caracteristicas-Do-Local.php'?>

<?php
  if( $FotosDoLocal = "Sim" ){
    include 'Fotos-Local-Evento/index.php';
  }
?>

<h3 class="rotulos">Local do Evento: Conhecedores/Testemunhas</h3>
<!-- Conhecedores do evento no local -->
<?php include 'Conhecedores-Local-Evento.php' ?>

<!-- Testemunhas do evento no local -->
<?php include 'Entrevistados-Local/index.php'?>