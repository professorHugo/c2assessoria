<?php
if( $SysMode == 1 ){
  //Dev
  echo "<br>Solicitante: " . $Solicitante = $_POST['solicitante'];
  echo "<br>Sindicante: " . $Sindicante = $_POST['sindicante'];
  echo "<br>Relatorio: " . $ProtocoloRelatorio = $_POST['protocolo_solicitacao'];
  echo "<br>Natureza: " . $NaturezaEvento = $_POST['natureza_evento'];
  
  echo "<br>Protocolo Solcitante: " . $ProtocoloSolicitante = $_POST['protocolo_solicitante'];
  echo "<br>Data do Evento: " . $DataEvento = $_POST['data_evento'];
  echo "<br>Horário Evento: " . $HorarioEvento = $_POST['horario_evento'];
  
  echo "<br><br><b>Local</b>";
  echo "<br>CEP Local: " . $CEPLocalEvento = $_POST['cep_local_evento'];
  echo "<br>Endereço Evento: " . $EnderecoEvento = $_POST['endereco_local_evento'];
  echo "<br>Número Evento: " . $NumeroEvento = $_POST['numero_local_evento'];
  echo "<br>Bairro Evento: " . $BairroEvento = $_POST['bairro_local_evento'];
  echo "<br>Cidade Evento: " . $CidadeEvento = $_POST['cidade_local_evento'];
  echo "<br>Estado Evento: " . $EstadoEvento = $_POST['estado_local_evento'];
  
  echo "<br><br><b>Associado</b>";
  echo "<br>CPF Associado: " . $CPFAssociado = $_POST['cpf_associado'];
  echo "<br>Nome Associado: " . $NomeAssociado = $_POST['nome_associado'];
  echo "<br>CEP Associado: " . $CEPAssociado = $_POST['cep_associado'];
  echo "<br>Endereço: " . $EnderecoAssociado = $_POST['endereco_associado'];
  echo "<br>Número Residência: " . $NumeroAssociado = $_POST['numero_associado'];
  echo "<br>Endereço completo: " . $EnderecoAssociado = $EnderecoAssociado.", ".$NumeroAssociado;
  echo "<br>Bairro Associado: " . $BairroAssociado = $_POST['bairro_associado'];
  echo "<br>Cidade Associado: " . $CidadeAssociado = $_POST['cidade_associado'];
  echo "<br>Estado Associado: " . $EstadoAssociado = $_POST['estado_associado'];
  
  echo "<br><br><b>Condutor</b>: " . $CondutorVeiculo = $_POST['condutor_veiculo'];
  if( $CondutorVeiculo != 1 ){
    echo "<br>Nome Condutor: " . $NomeCondutor = $_POST['nome_condutor'];
    echo "<br>CEP Condutor: " . $CEPCondutor = $_POST['cep_condutor'];
    echo "<br>Endereço: " . $EnderecoCondutor = $_POST['endereco_condutor'];
    echo "<br>Número Residência: "  . $NumeroCondutor = $_POST['numero_condutor'];
    echo "<br>Endereço Completo: " . $EnderecoCompletoCondutor = $EnderecoCondutor.", ".$NumeroCondutor;
    echo "<br>Bairro Condutor: " . $BairroCondutor = $_POST['bairro_condutor'];
    echo "<br>Cidade Condutor: " . $CidadeCondutor = $_POST['cidade_condutor'];
    echo "<br>Estado Condutor: " . $EstadoCondutor = $_POST['estado_condutor'];
  }
  
  echo "<br><br><b>Veículo</b>";
  echo "<br>Placa: " . $PlacaVeiculo = $_POST['placa_veiculo'];
  echo "<br>Marca: " . $MarcaVeiculo = $_POST['marca_veiculo'];
  echo "<br>Modelo: " . $ModeloVeiculo = $_POST['modelo_veiculo'];
  
  echo "<br><br>";
  echo "<h3>Salvar os dados do cadastro de relatório</h3>";
  
  echo "<br>BuscarProtocoloRelatorio:<pre>" . 
  $QueryBuscarProtocoloRelatorio = "
    SELECT * FROM tb_relatorios
    WHERE protocolo_evento = '$ProtocoloSolicitante'
  ";
  echo "</pre>";
  $ExeQrBuscarProtocoloRelatorio = mysqli_query($connection, $QueryBuscarProtocoloRelatorio);
  if( mysqli_num_rows($ExeQrBuscarProtocoloRelatorio) < 1 ){
    echo "<br>Cadastrar Relatorio: <pre>";
    echo $QueryCadastrarRelatorio = "
      INSERT INTO tb_relatorios(
        id_relatorio,
        protocolo_evento,
        solicitante_evento,
        sindicante_evento,
        natureza_evento,
        cpf_associado,
        condutor_veiculo,
        placa_veiculo_evento,
        data_evento,
        horario_evento,
        cep_evento,
        endereco_evento,
        numero_evento,
        bairro_evento,
        cidade_evento,
        uf_evento,
        status_relatorio
      )VALUES(
        '$ProtocoloRelatorio',
        '$ProtocoloSolicitante',
        '$Solicitante',
        '$Sindicante',
        '$NaturezaEvento',
        '$CPFAssociado',
        '$CondutorVeiculo',
        '$PlacaVeiculo',
        '$DataEvento',
        '$HorarioEvento',
        '$CEPLocalEvento',
        '$EnderecoEvento',
        '$NumeroEvento',
        '$BairroEvento',
        '$CidadeEvento',
        '$EstadoEvento',
        'Criado'
      )
    ";
    echo "</pre>";
  
    $ExeQrCadastrarRelatorio = mysqli_query($connection, $QueryCadastrarRelatorio);
  
    if( $ExeQrCadastrarRelatorio ){
  
      //BuscarVeículo antes de cadastrar
      echo "<br>BuscarVeiculo<pre>";
      echo $QueryBuscarVeiculo = "
        SELECT * FROM tb_veiculos
        WHERE 
          protocolo_evento = '$ProtocoloSolicitante' &&
          placa_veiculo = '$PlacaVeiculo'
      ";
      echo "</pre>";
      
      $ExeQrBuscarVeiculo = mysqli_query($connection, $QueryBuscarVeiculo);
  
      if( mysqli_num_rows($ExeQrBuscarVeiculo) < 1 ){
      
        echo "<br>Cadastrar Veículo<pre>";
        echo $QueryCadastrarVeiculo = "
          INSERT INTO tb_veiculos(
            protocolo_evento,
            segurado_veiculo,
            condutor_veiculo,
            marca_veiculo,
            modelo_veiculo,
            placa_veiculo
          )VALUES(
            '$ProtocoloSolicitante',
            '$CPFAssociado',
            '$CondutorVeiculo',
            '$MarcaVeiculo',
            '$ModeloVeiculo',
            '$PlacaVeiculo'
          )
        ";
        echo "</pre>";
        
        $ExeQrCadastrarVeiculo = mysqli_query($connection, $QueryCadastrarVeiculo);
    
        if( $ExeQrCadastrarVeiculo ){
          echo "<br>Veículo cadastrado com sucesso";
    
          echo "<br>Procurar Veículo do associado<pre>";
          echo $QueryBuscarVeiculo = "
            SELECT * FROM tb_veiculos
            WHERE 
              protocolo_evento = '$ProtocoloSolicitante' &&
              placa_veiculo = '$PlacaVeiculo'
          ";
          echo "</pre>";
          $ExeQrBuscarVeiculo = mysqli_query($connection, $QueryBuscarVeiculo);
    
          if( mysqli_num_rows($ExeQrBuscarVeiculo) >= 1 ){
            while( $ResVeiculo = mysqli_fetch_assoc($ExeQrBuscarVeiculo) ){
              $IDVeiculo = $ResVeiculo['id_veiculo'];
            }
    
            echo "<br>Cadastrar Associado: <pre>";
            echo $QueryCadastrarAssociado = "
              INSERT INTO tb_associados(
                cpf_associado,
                seguradora_associado,
                nome_associado,
                cep_associado,
                endereco_associado,
                bairro_associado,
                cidade_associado, 
                estado_associado,
                veiculo1_associado
    
              )VALUES(
                '$CPFAssociado',
                '$Solicitante',
                '$NomeAssociado',
                '$CEPAssociado',
                '$EnderecoAssociado',
                '$BairroAssociado',
                '$CidadeAssociado',
                '$EstadoAssociado',
                '$IDVeiculo'
              )
            ";
            echo "</pre>";
            $ExeQrCadastrarAssociado = mysqli_query($connection, $QueryCadastrarAssociado);
  
            if( $ExeQrCadastrarAssociado ){
              if( $CondutorVeiculo != 1 ){
                echo "<br>Verificar cadastro do condutor<pre>";
                echo $QueryBuscarCondutor = "
                  SELECT * FROM tb_condutores
                  WHERE protocolo_evento = '$ProtocoloSolicitante'
                ";
                echo "</pre>";
                $ExeQrBuscarCondutor = mysqli_query($connection, $QueryBuscarCondutor);

                if( mysqli_num_rows($ExeQrBuscarCondutor) < 1 ){
                  echo "<br>Cadastrar condutor <pre>";
                  echo $QueryCadastrarCondutor = "
                    INSERT INTO tb_condutores(
                      protocolo_evento,
                      nome_condutor,
                      cep_condutor,
                      endereco_condutor,
                      bairro_condutor,
                      cidade_condutor,
                      estado_condutor
                    )VALUES(
                      '$ProtocoloSolicitante',
                      '$NomeCondutor',
                      '$CEPCondutor',
                      '$EnderecoCompletoCondutor',
                      '$BairroCondutor',
                      '$CidadeCondutor',
                      '$EstadoCondutor'
                    )
                  ";
                  echo "</pre>";

                  $ExeQrCadastrarCondutor = mysqli_query($connection, $QueryCadastrarCondutor);
                  if( $ExeQrCadastrarCondutor ){
                    echo "<br>Condutor cadastrado";
                  }else{
                    echo "<br>Erro: " . mysqli_error($connection);
                  }
                }
              }

              
            }else{
              echo "<br>Erro: " . mysqli_error($connection);
            }
          }
    
        }
    
      }else{
        echo "<br>Erro: " . mysqli_error($connection);
      }
  
      
  
    }else{
      echo "<br>Erro: " . mysqli_error($connection);
    }
  }else{
    echo "<br>Relatório já cadastrado";
  }
  
}else{

  //Prod
   "<br>Solicitante: " . $Solicitante = $_POST['solicitante'];
   "<br>Sindicante: " . $Sindicante = $_POST['sindicante'];
   "<br>Relatorio: " . $ProtocoloRelatorio = $_POST['protocolo_solicitacao'];
   "<br>Natureza: " . $NaturezaEvento = $_POST['natureza_evento'];
  
   "<br>Protocolo Solcitante: " . $ProtocoloSolicitante = $_POST['protocolo_solicitante'];
   "<br>Data do Evento: " . $DataEvento = $_POST['data_evento'];
   "<br>Horário Evento: " . $HorarioEvento = $_POST['horario_evento'];
  
   "<br><br><b>Local</b>";
   "<br>CEP Local: " . $CEPLocalEvento = $_POST['cep_local_evento'];
   "<br>Endereço Evento: " . $EnderecoEvento = $_POST['endereco_local_evento'];
   "<br>Número Evento: " . $NumeroEvento = $_POST['numero_local_evento'];
   "<br>Bairro Evento: " . $BairroEvento = $_POST['bairro_local_evento'];
   "<br>Cidade Evento: " . $CidadeEvento = $_POST['cidade_local_evento'];
   "<br>Estado Evento: " . $EstadoEvento = $_POST['estado_local_evento'];
  
   "<br><br><b>Associado</b>";
   "<br>CPF Associado: " . $CPFAssociado = $_POST['cpf_associado'];
   "<br>Nome Associado: " . $NomeAssociado = $_POST['nome_associado'];
   "<br>CEP Associado: " . $CEPAssociado = $_POST['cep_associado'];
   "<br>Endereço: " . $EnderecoAssociado = $_POST['endereco_associado'];
   "<br>Número Residência: " . $NumeroAssociado = $_POST['numero_associado'];
   "<br>Endereço completo: " . $EnderecoAssociado = $EnderecoAssociado.", ".$NumeroAssociado;
   "<br>Bairro Associado: " . $BairroAssociado = $_POST['bairro_associado'];
   "<br>Cidade Associado: " . $CidadeAssociado = $_POST['cidade_associado'];
   "<br>Estado Associado: " . $EstadoAssociado = $_POST['estado_associado'];
  
   "<br><br><b>Condutor</b>: " . $CondutorVeiculo = $_POST['condutor_veiculo'];
  if( $CondutorVeiculo != 1 ){
     "<br>Nome Condutor: " . $NomeCondutor = $_POST['nome_condutor'];
     "<br>CEP Condutor: " . $CEPCondutor = $_POST['cep_condutor'];
     "<br>Endereço: " . $EnderecoCondutor = $_POST['endereco_condutor'];
     "<br>Número Residência: "  . $NumeroCondutor = $_POST['numero_condutor'];
     "<br>Endereço Completo: " . $EnderecoCompletoCondutor = $EnderecoCondutor.", ".$NumeroCondutor;
     "<br>Bairro Condutor: " . $BairroCondutor = $_POST['bairro_condutor'];
     "<br>Cidade Condutor: " . $CidadeCondutor = $_POST['cidade_condutor'];
     "<br>Estado Condutor: " . $EstadoCondutor = $_POST['estado_condutor'];
  }
  
   "<br><br><b>Veículo</b>";
   "<br>Placa: " . $PlacaVeiculo = $_POST['placa_veiculo'];
   "<br>Marca: " . $MarcaVeiculo = $_POST['marca_veiculo'];
   "<br>Modelo: " . $ModeloVeiculo = $_POST['modelo_veiculo'];
  
   "<br><br>";
   "<h3>Salvar os dados do cadastro de relatório</h3>";
  
   "<br>BuscarProtocoloRelatorio:<pre>" . 
  $QueryBuscarProtocoloRelatorio = "
    SELECT * FROM tb_relatorios
    WHERE protocolo_evento = '$ProtocoloSolicitante'
  ";
   "</pre>";
  $ExeQrBuscarProtocoloRelatorio = mysqli_query($connection, $QueryBuscarProtocoloRelatorio);
  if( mysqli_num_rows($ExeQrBuscarProtocoloRelatorio) < 1 ){
     "<br>Cadastrar Relatorio: <pre>";
     $QueryCadastrarRelatorio = "
      INSERT INTO tb_relatorios(
        id_relatorio,
        protocolo_evento,
        solicitante_evento,
        sindicante_evento,
        natureza_evento,
        cpf_associado,
        condutor_veiculo,
        placa_veiculo_evento,
        data_evento,
        horario_evento,
        cep_evento,
        endereco_evento,
        numero_evento,
        bairro_evento,
        cidade_evento,
        uf_evento,
        status_relatorio
      )VALUES(
        '$ProtocoloRelatorio',
        '$ProtocoloSolicitante',
        '$Solicitante',
        '$Sindicante',
        '$NaturezaEvento',
        '$CPFAssociado',
        '$CondutorVeiculo',
        '$PlacaVeiculo',
        '$DataEvento',
        '$HorarioEvento',
        '$CEPLocalEvento',
        '$EnderecoEvento',
        '$NumeroEvento',
        '$BairroEvento',
        '$CidadeEvento',
        '$EstadoEvento',
        'Criado'
      )
    ";
     "</pre>";
  
    $ExeQrCadastrarRelatorio = mysqli_query($connection, $QueryCadastrarRelatorio);
  
    if( $ExeQrCadastrarRelatorio ){
  
      //BuscarVeículo antes de cadastrar
       "<br>BuscarVeiculo<pre>";
       $QueryBuscarVeiculo = "
        SELECT * FROM tb_veiculos
        WHERE 
          protocolo_evento = '$ProtocoloSolicitante' &&
          placa_veiculo = '$PlacaVeiculo'
      ";
       "</pre>";
      
      $ExeQrBuscarVeiculo = mysqli_query($connection, $QueryBuscarVeiculo);
  
      if( mysqli_num_rows($ExeQrBuscarVeiculo) < 1 ){
      
         "<br>Cadastrar Veículo<pre>";
         $QueryCadastrarVeiculo = "
          INSERT INTO tb_veiculos(
            protocolo_evento,
            segurado_veiculo,
            condutor_veiculo,
            marca_veiculo,
            modelo_veiculo,
            placa_veiculo
          )VALUES(
            '$ProtocoloSolicitante',
            '$CPFAssociado',
            '$CondutorVeiculo',
            '$MarcaVeiculo',
            '$ModeloVeiculo',
            '$PlacaVeiculo'
          )
        ";
         "</pre>";
        
        $ExeQrCadastrarVeiculo = mysqli_query($connection, $QueryCadastrarVeiculo);
    
        if( $ExeQrCadastrarVeiculo ){
           "<br>Veículo cadastrado com sucesso";
    
           "<br>Procurar Veículo do associado<pre>";
           $QueryBuscarVeiculo = "
            SELECT * FROM tb_veiculos
            WHERE 
              protocolo_evento = '$ProtocoloSolicitante' &&
              placa_veiculo = '$PlacaVeiculo'
          ";
           "</pre>";
          $ExeQrBuscarVeiculo = mysqli_query($connection, $QueryBuscarVeiculo);
    
          if( mysqli_num_rows($ExeQrBuscarVeiculo) >= 1 ){
            while( $ResVeiculo = mysqli_fetch_assoc($ExeQrBuscarVeiculo) ){
              $IDVeiculo = $ResVeiculo['id_veiculo'];
            }
    
             "<br>Cadastrar Associado: <pre>";
             $QueryCadastrarAssociado = "
              INSERT INTO tb_associados(
                cpf_associado,
                seguradora_associado,
                nome_associado,
                cep_associado,
                endereco_associado,
                bairro_associado,
                cidade_associado, 
                estado_associado,
                veiculo1_associado
    
              )VALUES(
                '$CPFAssociado',
                '$Solicitante',
                '$NomeAssociado',
                '$CEPAssociado',
                '$EnderecoAssociado',
                '$BairroAssociado',
                '$CidadeAssociado',
                '$EstadoAssociado',
                '$IDVeiculo'
              )
            ";
             "</pre>";
            $ExeQrCadastrarAssociado = mysqli_query($connection, $QueryCadastrarAssociado);
  
            if( $ExeQrCadastrarAssociado ){
              if( $CondutorVeiculo != 1 ){
                 "<br>Verificar cadastro do condutor<pre>";
                 $QueryBuscarCondutor = "
                  SELECT * FROM tb_condutores
                  WHERE protocolo_evento = '$ProtocoloSolicitante'
                ";
                 "</pre>";
                $ExeQrBuscarCondutor = mysqli_query($connection, $QueryBuscarCondutor);

                if( mysqli_num_rows($ExeQrBuscarCondutor) < 1 ){
                   "<br>Cadastrar condutor <pre>";
                   $QueryCadastrarCondutor = "
                    INSERT INTO tb_condutores(
                      protocolo_evento,
                      nome_condutor,
                      cep_condutor,
                      endereco_condutor,
                      bairro_condutor,
                      cidade_condutor,
                      estado_condutor
                    )VALUES(
                      '$ProtocoloSolicitante',
                      '$NomeCondutor',
                      '$CEPCondutor',
                      '$EnderecoCompletoCondutor',
                      '$BairroCondutor',
                      '$CidadeCondutor',
                      '$EstadoCondutor'
                    )
                  ";
                   "</pre>";

                  $ExeQrCadastrarCondutor = mysqli_query($connection, $QueryCadastrarCondutor);
                  if( $ExeQrCadastrarCondutor ){
                     "<br>Condutor cadastrado";
                  }else{
                    echo "<br>Erro: " . mysqli_error($connection);
                  }
                }
              }

              
            }else{
              echo "<br>Erro: " . mysqli_error($connection);
            }
          }
    
        }
    
      }else{
        echo "<br>Erro: " . mysqli_error($connection);
      }
  
      
  
    }else{
      echo "<br>Erro: " . mysqli_error($connection);
    }
  }else{
    echo "<br>Relatório já cadastrado";
  }

}

if( $SysMode == 2 ){
  include 'Modal-Relatorio-Criado.php';
}else{
  $QueryBuscarSindicantes = "
    SELECT * FROM tb_sindicantes sindicante
    INNER JOIN tb_usuarios usuario
      ON sindicante.id_usuario = usuario.id_usuario
    WHERE sindicante.ativacao = 1 && id_sindicante = '$Sindicante'
  ";
  $ExeQrBuscarSindicantes = mysqli_query($connection, $QueryBuscarSindicantes);
  while($ReturnSindicante = mysqli_fetch_assoc($ExeQrBuscarSindicantes)){
    echo $ReturnSindicante['nome_usuario'];
  }

  //Criar diretório
  if(!is_dir("Docs/".$CPFAssociado."/")){
    mkdir("Docs/".$CPFAssociado."/", 0777);
  }else{
    echo "<br>Já existe o diretório";
  }
}