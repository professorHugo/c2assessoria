<?php
  if( $SysMode == 1 ){
    //Dev
    echo "<br>Protocolo: " . $Protocolo = $_GET['Protocolo'];
    echo "<br>Nome: " . $NomeAssociado = $_POST['nome_associado'];

    echo "<br>Estado Civil: " . $EstadoCivil = $_POST['estado_civil_associado'];
    echo "<br>Profissão: " . $Profissao = $_POST['profissao_associado'];
    echo "<br>Outros Veículos: " . $OutrosVeiculos = $_POST['outro_veiculo'];
    echo "<br>Id Proprietario: " . $Proprietario = $_POST['id_associado'];
    echo "<br>CPF Associado: " . $CPFAssociado = $_POST['cpf_associado'];
    echo "<br>Registro CNH: " . $RegistroCNH = $_POST['registro_cnh'];
    echo "<br>Status CNH: " . $StatusCNH = $_POST['status_cnh'];
    if($OutrosVeiculos == 2){
      $QuantidadeVeiculosExtras = $_POST['veiculos_quantidade'];
    }
    echo "<br>";
  
    if( $OutrosVeiculos == 1 ){
      echo "<br>Quantidade de Veículos extras: " . $QuantidadeVeiculosExtras = $_POST['veiculos_quantidade'];
      //Cadastrar Associado como proprietário
      echo "<br><pre>";
      echo $QueryBuscarProprietario = "
        SELECT * FROM tb_proprietario_legal WHERE protocolo_proprietario = '$Protocolo'
      ";
      echo "</pre>";
      $ExeQrBuscarProprietario = mysqli_query($connection, $QueryBuscarProprietario);
      $RowQrBuscarProprietario = mysqli_num_rows($ExeQrBuscarProprietario);

      if( $RowQrBuscarProprietario < 1 ){
        echo "<br>Proprietario ainda não cadastrado";
        echo "<br><pre>";
        echo $QueryCadastrarProprietario = "
          INSERT INTO tb_proprietario_legal(
            protocolo_proprietario,
            nome_proprietario,
            vinculo_associado
          )VALUES(
            '$Protocolo',
            '$NomeAssociado',
            'associado'
          )
        ";
        echo "</pre>";
        $ExeQrCadastrarProprietario = mysqli_query($connection, $QueryCadastrarProprietario);
        if( $ExeQrCadastrarProprietario ){
          echo "<br>Proprietario $NomeAssociado Cadastrado";
        }else{
          echo "<br>Erro: " . mysqli_error($connection);
        }
      }else{
        echo "<br>Proprietario já tem cadastro";
      }
  
      switch( $QuantidadeVeiculosExtras ){
        case 1:
          include "Veiculos1.php";
        break;
        case 2:
          include "Veiculos1.php";
          include "Veiculos2.php";
        break;
        case 3:
          include "Veiculos1.php";
          include "Veiculos2.php";
          include "Veiculos3.php";
        break;
      }
    }
  
    if( $RegistroCNH == 1 ){
      echo "<br><br>Associado Habilitado";
      
      $StatusCNH = $_POST['status_cnh'];
      switch($StatusCNH){
        case 1: $StatusCNH = "Válida";break;
        case 2: $StatusCNH = "Vencida";break;
        case 3: $StatusCNH = "Suspensa";break;
        case 4: $StatusCNH = "Cassada";break;
      }
  
      echo "<br>Status: " . $StatusCNH;
  
      include "Upload/index.php";
    }
  
    include "Atualizar-Associado.php";

    //Update data de modificação do relatório
    include 'Update-Data-Modifica-Relatorio.php';

  }else{


    //PROD
     "<br>Protocolo: " . $Protocolo = $_GET['Protocolo'];
     "<br>Nome: " . $NomeAssociado = $_POST['nome_associado'];

     "<br>Estado Civil: " . $EstadoCivil = $_POST['estado_civil_associado'];
     "<br>Profissão: " . $Profissao = $_POST['profissao_associado'];
     "<br>Outros Veículos: " . $OutrosVeiculos = $_POST['outro_veiculo'];
     "<br>Id Proprietario: " . $Proprietario = $_POST['id_associado'];
     "<br>CPF Associado: " . $CPFAssociado = $_POST['cpf_associado'];
     "<br>Registro CNH: " . $RegistroCNH = $_POST['registro_cnh'];
     "<br>Status CNH: " . $StatusCNH = $_POST['status_cnh'];
    if($OutrosVeiculos == 2){
      $QuantidadeVeiculosExtras = $_POST['veiculos_quantidade'];
    }
     "<br>";
  
    if( $OutrosVeiculos == 1 ){
       "<br>Quantidade de Veículos extras: " . $QuantidadeVeiculosExtras = $_POST['veiculos_quantidade'];
      //Cadastrar Associado como proprietário
       "<br><pre>";
       $QueryBuscarProprietario = "
        SELECT * FROM tb_proprietario_legal WHERE protocolo_proprietario = '$Protocolo'
      ";
       "</pre>";
      $ExeQrBuscarProprietario = mysqli_query($connection, $QueryBuscarProprietario);
      $RowQrBuscarProprietario = mysqli_num_rows($ExeQrBuscarProprietario);

      if( $RowQrBuscarProprietario < 1 ){
         "<br>Proprietario ainda não cadastrado";
         "<br><pre>";
         $QueryCadastrarProprietario = "
          INSERT INTO tb_proprietario_legal(
            protocolo_proprietario,
            nome_proprietario,
            vinculo_associado
          )VALUES(
            '$Protocolo',
            '$NomeAssociado',
            'associado'
          )
        ";
         "</pre>";
        $ExeQrCadastrarProprietario = mysqli_query($connection, $QueryCadastrarProprietario);
        if( $ExeQrCadastrarProprietario ){
           "<br>Proprietario <b>$NomeAssociado</b> Cadastrado";
        }else{
           "<br>Erro: " . mysqli_error($connection);
        }
      }else{
         "<br>Proprietario já tem cadastro";
      }
  
      switch( $QuantidadeVeiculosExtras ){
        case 1:
          include "Veiculos1.php";
        break;
        case 2:
          include "Veiculos1.php";
          include "Veiculos2.php";
        break;
        case 3:
          include "Veiculos1.php";
          include "Veiculos2.php";
          include "Veiculos3.php";
        break;
      }
    }
  
    if( $RegistroCNH == 1 ){
       "<br><br>Associado Habilitado";
      
      $StatusCNH = $_POST['status_cnh'];
      switch($StatusCNH){
        case 1: $StatusCNH = "Válida";break;
        case 2: $StatusCNH = "Vencida";break;
        case 3: $StatusCNH = "Suspensa";break;
        case 4: $StatusCNH = "Cassada";break;
      }
  
       "<br>Status: " . $StatusCNH;
  
      include "Upload/index.php";
    }
  
    include "Atualizar-Associado.php";

    //Update data de modificação do relatório
    include 'Update-Data-Modifica-Relatorio.php';
  }