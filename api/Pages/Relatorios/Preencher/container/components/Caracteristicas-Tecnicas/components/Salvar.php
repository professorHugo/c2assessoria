<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>CPF Associado: " . $CPFAssociado = $_POST['cpf_associado'];
    echo "<br>Placa Veículo: " . $PlacaVeiculo = $_POST['placa_veiculo'];
    echo "<br>Protocolo: " . $Protocolo = $_GET['Protocolo'];
  
    echo "<br>Índice de Criminalidade: " . $IndiceCriminalidade = $_POST['indice_criminalidade'];
    echo "<br>Índice de Sinistralidade: " . $IndiceSinistralidade = $_POST['indice_sinistralidade'];
    echo "<br>Características Técnicas do local: " . $CaracteristicasLocal = $_POST['caracteristicas_local'];
    
    echo "<br>";
    
    if(isset($_POST['rua_pavimentada'])){
      echo "<br>Rua Pavimentada: ".$RuaPavimentada = $_POST['rua_pavimentada'];
      echo "<br>";
    }
  
    if(isset($_POST['permitido_estacionar'])){
      echo "<br>Permitido Estacionar: " . $PermitidoEstacionar = $_POST['permitido_estacionar'];
      echo "<br>";
    }
  
    if( isset($_POST['rua_aclive']) ){
      echo "<br>Inclinação: " . $AcliveDeclive = $_POST['rua_aclive'];
      echo "<br>";
    }
   
    if( isset( $_POST['pista_sentido'] ) ){
      echo "<br>Sentido da Pista: " . $PistaTipoDirecao = $_POST['pista_sentido'];
      echo "<br>";
    }
    
    if( isset( $_POST['pista_cruzamento_simples'] ) ){
      echo "<br>Pista Cruzamento Simples: " . $PistaCruzamento = "Cruzamento Simples";
      echo "<br>";
    }
    if( isset( $_POST['pista_cruzamento'] ) ){
      echo "<br>Pista Cruzamento: " . $PistaCruzamento = $_POST['pista_cruzamento'];
      echo "<br>";
    }
  
    if( isset( $_POST['pista_curva_acentuada'] ) ){
      echo "<br>Pista Curva Acentuada: " . $PistaCurva = "Acentuada";
      echo "<br>";
    }
    
    if( isset( $_POST['pista_curva'] ) ){
      echo "<br>Pista Curva: " . $PistaCurva = $_POST['pista_curva'];
      echo "<br>";
    }
  
    if( isset( $_POST['pista_rotatoria'] ) ){
      echo "<br>Pista Rotatoria: " . $PistaRotatora = "Sim";
      echo "<br>";
    }else{
      echo "<br>Pista Rotatoria: " . $PistaRotatora = "Não";
      echo "<br>";
    }
    
    echo "<br>Velocidade Máxima: " . $VelocidadeMaxima = $_POST['velocidade_maxima_permitida'];
  
    //Buscar Cadastro de Características Técnicas
    echo "<br><pre>" . 
    $QueryBusarCaracteristicasTecnicas = "
      SELECT * FROM tb_caracteristicas_tecnicas
      WHERE protocolo_caracteristica = '$Protocolo'
    ";
    echo "</pre>";
    $ExeQrBuscarCaracteristicasTecnicas = mysqli_query($connection, $QueryBusarCaracteristicasTecnicas);
    $RowQrBuscarCaracteristicasTecnicas = mysqli_num_rows($ExeQrBuscarCaracteristicasTecnicas);
  
    if( $RowQrBuscarCaracteristicasTecnicas < 1 ){
      echo "<br><pre>" . 
      $QueryCadastrarCaracteristicasTecnicas = "
        INSERT INTO tb_caracteristicas_tecnicas(
          protocolo_caracteristica,
          indice_criminalidade,
          indice_sinistralidade,
          caracteristicas_tecnicas,
          rua_pavimentada,
          permitido_estacionar,
          aclive_declive,
          tipo_direcao_pista,
          cruzamento_pista,
          pista_curvas,
          pista_rotatoria,
          velocidade_maxima
        )VALUES(
          '$Protocolo',
          '$IndiceCriminalidade',
          '$IndiceSinistralidade',
          '$CaracteristicasLocal',
          '$RuaPavimentada',
          '$PermitidoEstacionar',
          '$AcliveDeclive',
          '$PistaTipoDirecao',
          '$PistaCruzamento',
          '$PistaCurva',
          '$PistaRotatora',
          '$VelocidadeMaxima'
        )
      ";
      echo "</pre>";
      $ExeQrCadastrarCaracteristicasTecnicas = mysqli_query($connection, $QueryCadastrarCaracteristicasTecnicas);
      if( $ExeQrCadastrarCaracteristicasTecnicas ){
        echo "<br>Características técnicas cadastradas, atualizar tb_relatorios";
        echo "<br><pre>" . 
        $QueryBusarCaracteristicasTecnicas = "
          SELECT * FROM tb_caracteristicas_tecnicas
          WHERE protocolo_caracteristica = '$Protocolo'
        ";
        echo "</pre>";
        $ExeQrBuscarCaracteristicasTecnicas = mysqli_query($connection, $QueryBusarCaracteristicasTecnicas);
        while( $Caracteristicas = mysqli_fetch_assoc($ExeQrBuscarCaracteristicasTecnicas) ){
          $IdCaracteristica = $Caracteristicas['id_caracteristica'];
        }
  
        echo "<br><pre>" .
        $QueryUpdateCaracteristicas = "
          UPDATE tb_relatorios
          SET
            caracteristicas_local_evento = '$IdCaracteristica'
          WHERE protocolo_evento = '$Protocolo' && cpf_associado = '$CPFAssociado'
        ";
        echo "</pre>";
        $ExeQrUpdateCaracteristicas = mysqli_query($connection, $QueryUpdateCaracteristicas);
        if( $ExeQrUpdateCaracteristicas ){
          echo "<br>Características atualizadas no relatório";
        }else{
          echo "<br>Erro: " . mysqli_error($connection);
        }
      }
    }else{
      echo "<br>Características já cadastradas, update na tb_relatorios";
      echo "<br><pre>" . 
      $QueryBusarCaracteristicasTecnicas = "
        SELECT * FROM tb_caracteristicas_tecnicas
        WHERE protocolo_caracteristica = '$Protocolo'
      ";
      echo "</pre>";
      $ExeQrBuscarCaracteristicasTecnicas = mysqli_query($connection, $QueryBusarCaracteristicasTecnicas);
      while( $Caracteristicas = mysqli_fetch_assoc($ExeQrBuscarCaracteristicasTecnicas) ){
        $IdCaracteristica = $Caracteristicas['id_caracteristica'];
      }
  
      echo "<br><pre>" .
      $QueryUpdateCaracteristicas = "
        UPDATE tb_relatorios
        SET
          caracteristicas_local_evento = '$IdCaracteristica'
        WHERE protocolo_evento = '$Protocolo' && cpf_associado = '$CPFAssociado'
      ";
      echo "</pre>";
      $ExeQrUpdateCaracteristicas = mysqli_query($connection, $QueryUpdateCaracteristicas);
      if( $ExeQrUpdateCaracteristicas ){
        echo "<br>Características atualizadas no relatório";
      }else{
        echo "<br>Erro: " . mysqli_error($connection);
      }
    }

    //Update data de modificação do relatório
    include 'Update-Data-Modifica-Relatorio.php';
  }else{

    //PROD


    "<br>CPF Associado: " . $CPFAssociado = $_POST['cpf_associado'];
    "<br>Placa Veículo: " . $PlacaVeiculo = $_POST['placa_veiculo'];
    "<br>Protocolo: " . $Protocolo = $_GET['Protocolo'];
  
    "<br>Índice de Criminalidade: " . $IndiceCriminalidade = $_POST['indice_criminalidade'];
    "<br>Índice de Sinistralidade: " . $IndiceSinistralidade = $_POST['indice_sinistralidade'];
    "<br>Características Técnicas do local: " . $CaracteristicasLocal = $_POST['caracteristicas_local'];
    
    "<br>";
    
    if(isset($_POST['rua_pavimentada'])){
      "<br>Rua Pavimentada: ".$RuaPavimentada = $_POST['rua_pavimentada'];
      "<br>";
    }
  
    if(isset($_POST['permitido_estacionar'])){
      "<br>Permitido Estacionar: " . $PermitidoEstacionar = $_POST['permitido_estacionar'];
      "<br>";
    }
  
    if( isset($_POST['rua_aclive']) ){
      "<br>Inclinação: " . $AcliveDeclive = $_POST['rua_aclive'];
      "<br>";
    }
   
    if( isset( $_POST['pista_sentido'] ) ){
      "<br>Sentido da Pista: " . $PistaTipoDirecao = $_POST['pista_sentido'];
      "<br>";
    }
    
    if( isset( $_POST['pista_cruzamento_simples'] ) ){
      "<br>Pista Cruzamento Simples: " . $PistaCruzamento = "Cruzamento Simples";
      "<br>";
    }
    if( isset( $_POST['pista_cruzamento'] ) ){
      "<br>Pista Cruzamento: " . $PistaCruzamento = $_POST['pista_cruzamento'];
      "<br>";
    }
  
    if( isset( $_POST['pista_curva_acentuada'] ) ){
      "<br>Pista Curva Acentuada: " . $PistaCurva = "Acentuada";
      "<br>";
    }
    
    if( isset( $_POST['pista_curva'] ) ){
      "<br>Pista Curva: " . $PistaCurva = $_POST['pista_curva'];
      "<br>";
    }
  
    if( isset( $_POST['pista_rotatoria'] ) ){
      "<br>Pista Rotatoria: " . $PistaRotatora = "Sim";
      "<br>";
    }else{
      "<br>Pista Rotatoria: " . $PistaRotatora = "Não";
      "<br>";
    }
    
    "<br>Velocidade Máxima: " . $VelocidadeMaxima = $_POST['velocidade_maxima_permitida'];
  
    //Buscar Cadastro de Características Técnicas
    "<br><pre>" . 
    $QueryBusarCaracteristicasTecnicas = "
      SELECT * FROM tb_caracteristicas_tecnicas
      WHERE protocolo_caracteristica = '$Protocolo'
    ";
    "</pre>";
    $ExeQrBuscarCaracteristicasTecnicas = mysqli_query($connection, $QueryBusarCaracteristicasTecnicas);
    $RowQrBuscarCaracteristicasTecnicas = mysqli_num_rows($ExeQrBuscarCaracteristicasTecnicas);
  
    if( $RowQrBuscarCaracteristicasTecnicas < 1 ){
      "<br><pre>" . 
      $QueryCadastrarCaracteristicasTecnicas = "
        INSERT INTO tb_caracteristicas_tecnicas(
          protocolo_caracteristica,
          indice_criminalidade,
          indice_sinistralidade,
          caracteristicas_tecnicas,
          rua_pavimentada,
          permitido_estacionar,
          aclive_declive,
          tipo_direcao_pista,
          cruzamento_pista,
          pista_curvas,
          pista_rotatoria,
          velocidade_maxima
        )VALUES(
          '$Protocolo',
          '$IndiceCriminalidade',
          '$IndiceSinistralidade',
          '$CaracteristicasLocal',
          '$RuaPavimentada',
          '$PermitidoEstacionar',
          '$AcliveDeclive',
          '$PistaTipoDirecao',
          '$PistaCruzamento',
          '$PistaCurva',
          '$PistaRotatora',
          '$VelocidadeMaxima'
        )
      ";
      "</pre>";
      $ExeQrCadastrarCaracteristicasTecnicas = mysqli_query($connection, $QueryCadastrarCaracteristicasTecnicas);
      if( $ExeQrCadastrarCaracteristicasTecnicas ){
        "<br>Características técnicas cadastradas, atualizar tb_relatorios";
        "<br><pre>" . 
        $QueryBusarCaracteristicasTecnicas = "
          SELECT * FROM tb_caracteristicas_tecnicas
          WHERE protocolo_caracteristica = '$Protocolo'
        ";
        "</pre>";
        $ExeQrBuscarCaracteristicasTecnicas = mysqli_query($connection, $QueryBusarCaracteristicasTecnicas);
        while( $Caracteristicas = mysqli_fetch_assoc($ExeQrBuscarCaracteristicasTecnicas) ){
          $IdCaracteristica = $Caracteristicas['id_caracteristica'];
        }
  
        "<br><pre>" .
        $QueryUpdateCaracteristicas = "
          UPDATE tb_relatorios
          SET
            caracteristicas_local_evento = '$IdCaracteristica'
          WHERE protocolo_evento = '$Protocolo' && cpf_associado = '$CPFAssociado'
        ";
        "</pre>";
        $ExeQrUpdateCaracteristicas = mysqli_query($connection, $QueryUpdateCaracteristicas);
        if( $ExeQrUpdateCaracteristicas ){
          "<br>Características atualizadas no relatório";
        }else{
          "<br>Erro: " . mysqli_error($connection);
        }
      }
    }else{
      "<br>Características já cadastradas, update na tb_relatorios";
      "<br><pre>" . 
      $QueryBusarCaracteristicasTecnicas = "
        SELECT * FROM tb_caracteristicas_tecnicas
        WHERE protocolo_caracteristica = '$Protocolo'
      ";
      "</pre>";
      $ExeQrBuscarCaracteristicasTecnicas = mysqli_query($connection, $QueryBusarCaracteristicasTecnicas);
      while( $Caracteristicas = mysqli_fetch_assoc($ExeQrBuscarCaracteristicasTecnicas) ){
        $IdCaracteristica = $Caracteristicas['id_caracteristica'];
      }
  
      "<br><pre>" .
      $QueryUpdateCaracteristicas = "
        UPDATE tb_relatorios
        SET
          caracteristicas_local_evento = '$IdCaracteristica'
        WHERE protocolo_evento = '$Protocolo' && cpf_associado = '$CPFAssociado'
      ";
      "</pre>";
      $ExeQrUpdateCaracteristicas = mysqli_query($connection, $QueryUpdateCaracteristicas);
      if( $ExeQrUpdateCaracteristicas ){
        "<br>Características atualizadas no relatório";
      }else{
        "<br>Erro: " . mysqli_error($connection);
      }
    }

    //Update data de modificação do relatório
    include 'Update-Data-Modifica-Relatorio.php';
  }