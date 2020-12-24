<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>Protocolo: " . $Protocolo;
    echo "<br>CPF Associado: " . $CPFAssociado = $_POST['cpf_associado'];
    echo "<br>Placa Veículo: " . $PlacaVeiculo = $_POST['placa_veiculo'];
    echo "<br>Estado DETRAN: " . $EstadoDetran = $_POST['estado_detran'];
    echo "<br>Multas Evento: " . $MultasEvento = $_POST['multas_evento'];
    echo "<br>Restrições Diversas: " . $RestricoesDiversas = $_POST['restricoes_diversas'];
    echo "<br>Vistoria Cautelar: " . $VistoriaCautelar = $_POST['vistoria_cautelar'];
    echo "<br>";
  
    //Cadastrar Dados DETRAN
    echo "<br><br><br>Registro do DETRAN.......:";
    include 'containers/Querys/Cadastrar-Detran.php';
  
    echo "<br>";
  
    if( $MultasEvento == 1){
      //Upload das multas e cadastro das fotos
      if( !empty($_FILES['print_foto1']['name']) ){
        echo "<br><br><br>Foto1 da Multa........:";
        include 'Uploads/Foto-Multa1.php';
      }
      if( !empty($_FILES['print_foto2']['name']) ){
        echo "<br><br><br>Foto2 da Multa.........:";
        include 'Uploads/Foto-Multa2.php';
      }
      if( !empty($_FILES['print_foto3']['name']) ){
        echo "<br><br><br>Foto3 da Multa.........:";
        include 'Uploads/Foto-Multa3.php';
      }
      
    }
  
    echo "<br>";
  
    if( $VistoriaCautelar == 1 ){
      echo "<br>Vistoria Aprovada: " . $VistoriaAprovada = $_POST['vistoria_aprovada'];
      echo "<br>Data Vistoria: " . $DataVistoria = $_POST['data_vistoria'];
      echo "<br>Imagens da vistoria: " . $ImagensVistoria = $_POST['img_vistoria'];
  
      if( isset($VistoriaAprovada) ){
        $RespostaVistoria = "Sim";
      }else{
        $RespostaVistoria = "Não";
      }
  
      //Cadastrar Dados da Vistoria
      echo "<br><br><br>Registro da VISTORIA........:";
      include 'containers/Querys/Cadastrar-Vistoria.php';

      echo "<br>";
  
      if( $ImagensVistoria == 1 ){
        //Upload das vistorias e cadastro das fotos
        
        if( !empty($_FILES['print_foto_vistoria_cautelar1']['name']) ){
          echo "<br><br><br>Foto1 da Vistoria........:";
          include 'Uploads/Foto-Vistoria1.php';
        }
        if( !empty($_FILES['print_foto_vistoria_cautelar2']['name']) ){
          echo "<br><br><br>Foto2 da Vistoria........:";
          include 'Uploads/Foto-Vistoria2.php';
        }
        if( !empty($_FILES['print_foto_vistoria_cautelar3']['name']) ){
          echo "<br><br><br>Foto3 da Vistoria........:";
          include 'Uploads/Foto-Vistoria3.php';
        }

        echo "<br><br><br>Update da Vistoria cadastrada........:";
  
        include 'containers/Querys/Update-Vistoria.php';
      }
    }
  
    echo "<br>";
  
    if( $RestricoesDiversas == 1 ){
      echo "<br>Restrições Financeiras: " . $RestricoesFinanceiras = $_POST['restricoes_financeiras'];
      echo "<br>Queixa de Roubo/Furto: " . $QueixaRouboFurto = $_POST['queixa_roubo_furto'];
      echo "<br>Outras informações: " . $OutrasInformacoes = $_POST['outras_restricoes'];
  
      if( isset($RestricoesDiversas) ){
        $RespostaRestricoesFinanceiras = "Sim";
      }else{
        $RespostaRestricoesFinanceiras = "Não";
      }
  
      if( isset($QueixaRouboFurto) ){
        $RespostaQueixa = "Sim";
      }else{
        $RespostaQueixa = "Não";
      }
      
      if( isset($OutrasInformacoes) ){
        $RespostaOutras = $OutrasInformacoes;
      }
  
      echo "<br><br><br>Update do registro do DETRAN........:";
      include 'containers/Querys/Update-Detran.php';
    }
  
    echo "<br><br><br>Update do veículo com a vistoria e o Cadastro do registro no detran........:";
    include 'containers/Querys/Update-Veiculo.php';

    //Update data de modificação do relatório
    include 'Update-Data-Modifica-Relatorio.php';
  }else{
    //PROD

    "<br>Protocolo: " . $Protocolo;
    "<br>CPF Associado: " . $CPFAssociado = $_POST['cpf_associado'];
    "<br>Placa Veículo: " . $PlacaVeiculo = $_POST['placa_veiculo'];
    "<br>Estado DETRAN: " . $EstadoDetran = $_POST['estado_detran'];
    "<br>Multas Evento: " . $MultasEvento = $_POST['multas_evento'];
    "<br>Restrições Diversas: " . $RestricoesDiversas = $_POST['restricoes_diversas'];
    "<br>Vistoria Cautelar: " . $VistoriaCautelar = $_POST['vistoria_cautelar'];
    "<br>";
  
    //Cadastrar Dados DETRAN
    "<br><br><br>Registro do DETRAN.......:";
    include 'containers/Querys/Cadastrar-Detran.php';
  
    "<br>";
  
    if( $MultasEvento == 1){
      //Upload das multas e cadastro das fotos
      if( !empty($_FILES['print_foto1']['name']) ){
        "<br><br><br>Foto1 da Multa........:";
        include 'Uploads/Foto-Multa1.php';
      }
      if( !empty($_FILES['print_foto2']['name']) ){
        "<br><br><br>Foto2 da Multa.........:";
        include 'Uploads/Foto-Multa2.php';
      }
      if( !empty($_FILES['print_foto3']['name']) ){
        "<br><br><br>Foto3 da Multa.........:";
        include 'Uploads/Foto-Multa3.php';
      }
      
    }
  
    "<br>";
  
    if( $VistoriaCautelar == 1 ){
      "<br>Vistoria Aprovada: " . $VistoriaAprovada = $_POST['vistoria_aprovada'];
      "<br>Data Vistoria: " . $DataVistoria = $_POST['data_vistoria'];
      "<br>Imagens da vistoria: " . $ImagensVistoria = $_POST['img_vistoria'];
  
      if( isset($VistoriaAprovada) ){
        $RespostaVistoria = "Sim";
      }else{
        $RespostaVistoria = "Não";
      }
  
      //Cadastrar Dados da Vistoria
      "<br><br><br>Registro da VISTORIA........:";
      include 'containers/Querys/Cadastrar-Vistoria.php';

      "<br>";
  
      if( $ImagensVistoria == 1 ){
        //Upload das vistorias e cadastro das fotos
        
        if( !empty($_FILES['print_foto_vistoria_cautelar1']['name']) ){
          "<br><br><br>Foto1 da Vistoria........:";
          include 'Uploads/Foto-Vistoria1.php';
        }
        if( !empty($_FILES['print_foto_vistoria_cautelar2']['name']) ){
          "<br><br><br>Foto2 da Vistoria........:";
          include 'Uploads/Foto-Vistoria2.php';
        }
        if( !empty($_FILES['print_foto_vistoria_cautelar3']['name']) ){
          "<br><br><br>Foto3 da Vistoria........:";
          include 'Uploads/Foto-Vistoria3.php';
        }

        "<br><br><br>Update da Vistoria cadastrada........:";
  
        include 'containers/Querys/Update-Vistoria.php';
      }
    }
  
    "<br>";
  
    if( $RestricoesDiversas == 1 ){
      "<br>Restrições Financeiras: " . $RestricoesFinanceiras = $_POST['restricoes_financeiras'];
      "<br>Queixa de Roubo/Furto: " . $QueixaRouboFurto = $_POST['queixa_roubo_furto'];
      "<br>Outras informações: " . $OutrasInformacoes = $_POST['outras_restricoes'];
  
      if( isset($RestricoesDiversas) ){
        $RespostaRestricoesFinanceiras = "Sim";
      }else{
        $RespostaRestricoesFinanceiras = "Não";
      }
  
      if( isset($QueixaRouboFurto) ){
        $RespostaQueixa = "Sim";
      }else{
        $RespostaQueixa = "Não";
      }
      
      if( isset($OutrasInformacoes) ){
        $RespostaOutras = $OutrasInformacoes;
      }
  
      "<br><br><br>Update do registro do DETRAN........:";
      include 'containers/Querys/Update-Detran.php';
    }
  
    "<br><br><br>Update do veículo com a vistoria e o Cadastro do registro no detran........:";
    include 'containers/Querys/Update-Veiculo.php';

    //Update data de modificação do relatório
    include 'Update-Data-Modifica-Relatorio.php';
  }