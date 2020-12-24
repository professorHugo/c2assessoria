<?php
  if( $SysMode == 1 ){
    //DEV
    $ExeQrBuscarRelatorio = mysqli_query($connection, $QueryBuscarRelatorio);
    $RowQrBuscarRelatorio = mysqli_num_rows($ExeQrBuscarRelatorio);

    if( $RowQrBuscarRelatorio > 0 ){
      echo "<br><b>Relatório encontrado...............:</b>";
      echo "<br><b>Verificar se o relatório está preenchido.......:</b>";
      echo "<br>";
      echo "<br><pre>" . 
      $QueryBuscarRelatorioPreenchido = "
        SELECT * FROM 
          tb_relatorios relatorio
        INNER JOIN tb_clientes solicitante
          ON relatorio.solicitante_evento = solicitante.id_cliente
        INNER JOIN tb_sindicantes usuario
          ON relatorio.sindicante_evento = usuario.id_usuario
        INNER JOIN tb_natureza_evento naturezas
          ON relatorio.natureza_evento = naturezas.id_natureza
        INNER JOIN tb_associados associado
          ON relatorio.cpf_associado = associado.cpf_associado
        INNER JOIN tb_condutores condutor
          ON relatorio.protocolo_evento = condutor.protocolo_evento
        INNER JOIN tb_veiculos veiculo
          ON relatorio.placa_veiculo_evento = veiculo.placa_veiculo
        INNER JOIN tb_caracteristicas_tecnicas caracteristicas
          ON relatorio.caracteristicas_local_evento = caracteristicas.id_caracteristica
        INNER JOIN tb_boletim_ocorrencia bo
          ON relatorio.boletim_ocorrencia = bo.id_boletim
        INNER JOIN tb_policia_civil pc
          ON relatorio.policia_civil = pc.id_policia_civil
        INNER JOIN tb_policia_militar pm
          ON relatorio.policia_militar = pm.id_policia_militar
        INNER JOIN tb_copom copom
          ON relatorio.registro_copom = copom.id_copom
        INNER JOIN tb_registro_mobilidade mobilidade
          ON relatorio.registro_mobilidade = id_mobilidade
        INNER JOIN tb_motorista_aplicativo motorista_app
          ON relatorio.registro_motorista_app = motorista_app.id_motorista_aplicativo

        
        
        WHERE 
          relatorio.protocolo_evento = '$Protocolo' &&
          relatorio.status_relatorio != 'Editando' || 
          relatorio.status_relatorio = 'Entregue'
      ";
      /*
        -----Adicionar os entrevistados do local para apresentar os resultados-----
        -----Adicionar as fotos na parte necessária do relatório------
        pois ficará repetindo a página do relatório para cada registro

        INNER JOIN tb_local_evento local_evento ON
          relatorio.registro_local_evento = local_evento.id_local_evento &&
          relatorio.protocolo_evento = local_evento.protocolo_local_evento
        INNER JOIN tb_entrevistados entrevistados
          ON relatorio.protocolo_evento = entrevistados.protocolo_entrevistados
      */
      echo "</pre>";
      $ExeQrBuscarRelatorioPreenchido = mysqli_query($connection, $QueryBuscarRelatorioPreenchido);
      $RowQrBuscarRelatorioPreenchido = mysqli_num_rows($ExeQrBuscarRelatorioPreenchido);
      if( $RowQrBuscarRelatorioPreenchido > 0 ){
        echo "<br><b>Mostrar o relatório Preenchido..........: </b>";
        include 'Relatorio-Visualizacao.php';
      }else{
        echo "<br>O relatório <b>$Protocolo</b> está sendo preenchido";
        echo "<br>";
        ?>
          <a href="?Page=Relatorios">
            <button class="btn btn-primary">Voltar</button>
          </a>
        <?php
      }
    }else{
      echo "<br>Não foram encontrados relatórios preenchidos com o protocolo: <b>$Protocolo</b>....";
      echo "<br>";
      ?>
        <a href="?Page=Relatorios">
          <button class="btn btn-primary">Voltar</button>
        </a>
      <?php
    }
  }else{

    //PROD

    
    $ExeQrBuscarRelatorio = mysqli_query($connection, $QueryBuscarRelatorio);
    $RowQrBuscarRelatorio = mysqli_num_rows($ExeQrBuscarRelatorio);

    if( $RowQrBuscarRelatorio > 0 ){
      "<br><b>Relatório encontrado...............:</b>";
      "<br><b>Verificar se o relatório está preenchido.......:</b>";
      "<br>";
      "<br><pre>" . 
      $QueryBuscarRelatorioPreenchido = "
        SELECT * FROM 
          tb_relatorios relatorio
        INNER JOIN tb_clientes solicitante
          ON relatorio.solicitante_evento = solicitante.id_cliente
        INNER JOIN tb_sindicantes usuario
          ON relatorio.sindicante_evento = usuario.id_usuario
        INNER JOIN tb_natureza_evento naturezas
          ON relatorio.natureza_evento = naturezas.id_natureza
        INNER JOIN tb_associados associado
          ON relatorio.cpf_associado = associado.cpf_associado
        INNER JOIN tb_condutores condutor
          ON relatorio.protocolo_evento = condutor.protocolo_evento
        INNER JOIN tb_veiculos veiculo
          ON relatorio.placa_veiculo_evento = veiculo.placa_veiculo
        INNER JOIN tb_caracteristicas_tecnicas caracteristicas
          ON relatorio.caracteristicas_local_evento = caracteristicas.id_caracteristica
        INNER JOIN tb_boletim_ocorrencia bo
          ON relatorio.boletim_ocorrencia = bo.id_boletim
        INNER JOIN tb_policia_civil pc
          ON relatorio.policia_civil = pc.id_policia_civil
        INNER JOIN tb_policia_militar pm
          ON relatorio.policia_militar = pm.id_policia_militar
        INNER JOIN tb_copom copom
          ON relatorio.registro_copom = copom.id_copom
        INNER JOIN tb_registro_mobilidade mobilidade
          ON relatorio.registro_mobilidade = id_mobilidade
        INNER JOIN tb_motorista_aplicativo motorista_app
          ON relatorio.registro_motorista_app = motorista_app.id_motorista_aplicativo

        
        
        WHERE 
          relatorio.protocolo_evento = '$Protocolo' &&
          relatorio.status_relatorio != 'Editando' || 
          relatorio.status_relatorio = 'Entregue'
      ";
      /*
        -----Adicionar os entrevistados do local para apresentar os resultados-----
        -----Adicionar as fotos na parte necessária do relatório------
        pois ficará repetindo a página do relatório para cada registro

        INNER JOIN tb_local_evento local_evento ON
          relatorio.registro_local_evento = local_evento.id_local_evento &&
          relatorio.protocolo_evento = local_evento.protocolo_local_evento
        INNER JOIN tb_entrevistados entrevistados
          ON relatorio.protocolo_evento = entrevistados.protocolo_entrevistados
      */
      "</pre>";
      $ExeQrBuscarRelatorioPreenchido = mysqli_query($connection, $QueryBuscarRelatorioPreenchido);
      $RowQrBuscarRelatorioPreenchido = mysqli_num_rows($ExeQrBuscarRelatorioPreenchido);
      if( $RowQrBuscarRelatorioPreenchido > 0 ){
        "<br><b>Mostrar o relatório Preenchido..........: </b>";
        include 'Relatorio-Visualizacao.php';
      }else{
        echo "<br>O relatório <b>$Protocolo</b> está sendo preenchido";
        echo "<br>";
        ?>
          <a href="?Page=Relatorios">
            <button class="btn btn-primary">Voltar</button>
          </a>
        <?php
      }
    }else{
      echo "<br>Não foram encontrados relatórios preenchidos com o protocolo: <b>$Protocolo</b>....";
      echo "<br>";
      ?>
        <a href="?Page=Relatorios">
          <button class="btn btn-primary">Voltar</button>
        </a>
      <?php
    }
  }