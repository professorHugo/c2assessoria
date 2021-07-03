<?php
//Cadastrar uso de aplicativo de mobilidade urbana
include 'Cadastrar-Uso-Aplicativo.php';

if( $SysMode == 1 ){

  //DEV
  echo "<br><br>";

  //Caso tenha usado o aplicativo de mobilidade após o evento
  if( $UsadoAposEvento == 1 ){
    echo "<br>Comprovante apresentado: " . $Comprovante = $_POST['comprovante_apresentado'];

    //Se houve apresentação de comprovante de utilização
    if( $Comprovante == 1 ){
      
      //Dados constatados pelo comprovante de utilização

      //Data
      if( isset($_POST['data_confirmada']) ){
        echo "<br>Data Confirmada: " . $DataConfirmada = "Sim";
      }else{
        echo "<br>Data Confirmada: " . $DataConfirmada = "Não";
      }

      //Hora
      if( isset($_POST['hora_confirmada']) ){
        echo "<br>Hora Confirmada: " . $HoraConfirmada = "Sim";
      }else{
        echo "<br>Hora Confirmada: " . $HoraConfirmada = "Não";
      }

      //Trajeto
      if( isset($_POST['trajeto_confirmada']) ){
        echo "<br>Trajeto confirmado: " . $TrajetoConfirmada = "Sim";
      }else{
        echo "<br>Trajeto confirmado: " . $TrajetoConfirmada = "Não";
      }

      //Atualizar Uso de aplicativo de mobilidade urbana
      include 'Update-Uso-Aplicativos.php';

      //Cadastrar prints de mobilidade urbana 1
      if( !empty($_FILES['print_mobilidade_urbana_img1']['name']) ){
        include 'Uploads/Mobilidade1.php';
      }
      
      //Cadastrar prints de mobilidade urbana 2
      if( !empty($_FILES['print_mobilidade_urbana_img2']['name']) ){
        include 'Uploads/Mobilidade2.php';
      }

      //Cadastrar prints de mobilidade urbana 3
      if( !empty($_FILES['print_mobilidade_urbana_img3']['name']) ){
        include 'Uploads/Mobilidade3.php';
      }

      //Cadastrar prints de mobilidade urbana 4
      if( !empty($_FILES['print_mobilidade_urbana_img4']['name']) ){
        include 'Uploads/Mobilidade4.php';
      }

      //Cadastrar prints de mobilidade urbana 5
      if( !empty($_FILES['print_mobilidade_urbana_img5']['name']) ){
        include 'Uploads/Mobilidade5.php';
      }

      //Cadastrar prints de mobilidade urbana 6
      if( !empty($_FILES['print_mobilidade_urbana_img6']['name']) ){
        include 'Uploads/Mobilidade6.php';
      }

      //Update Relatório com registro do uso de aplicativo de mobilidade urbana
      include 'Update-Relatorio.php';
      
    }
  }
}else{

  //PROD
  "<br><br>";

  //Caso tenha usado o aplicativo de mobilidade após o evento
  if( $UsadoAposEvento == 1 ){
    "<br>Comprovante apresentado: " . $Comprovante = $_POST['comprovante_apresentado'];

    //Se houve apresentação de comprovante de utilização
    if( $Comprovante == 1 ){
      
      //Dados constatados pelo comprovante de utilização

      //Data
      if( isset($_POST['data_confirmada']) ){
        "<br>Data Confirmada: " . $DataConfirmada = "Sim";
      }else{
        "<br>Data Confirmada: " . $DataConfirmada = "Não";
      }

      //Hora
      if( isset($_POST['hora_confirmada']) ){
        "<br>Hora Confirmada: " . $HoraConfirmada = "Sim";
      }else{
        "<br>Hora Confirmada: " . $HoraConfirmada = "Não";
      }

      //Trajeto
      if( isset($_POST['trajeto_confirmada']) ){
        "<br>Trajeto confirmado: " . $TrajetoConfirmada = "Sim";
      }else{
        "<br>Trajeto confirmado: " . $TrajetoConfirmada = "Não";
      }

      //Atualizar Uso de aplicativo de mobilidade urbana
      include 'Update-Uso-Aplicativos.php';

      //Cadastrar prints de mobilidade urbana 1
      if( !empty($_FILES['print_mobilidade_urbana_img1']['name']) ){
        include 'Uploads/Mobilidade1.php';
      }
      
      //Cadastrar prints de mobilidade urbana 2
      if( !empty($_FILES['print_mobilidade_urbana_img2']['name']) ){
        include 'Uploads/Mobilidade2.php';
      }

      //Cadastrar prints de mobilidade urbana 3
      if( !empty($_FILES['print_mobilidade_urbana_img3']['name']) ){
        include 'Uploads/Mobilidade3.php';
      }

      //Cadastrar prints de mobilidade urbana 4
      if( !empty($_FILES['print_mobilidade_urbana_img4']['name']) ){
        include 'Uploads/Mobilidade4.php';
      }

      //Cadastrar prints de mobilidade urbana 5
      if( !empty($_FILES['print_mobilidade_urbana_img5']['name']) ){
        include 'Uploads/Mobilidade5.php';
      }

      //Cadastrar prints de mobilidade urbana 6
      if( !empty($_FILES['print_mobilidade_urbana_img6']['name']) ){
        include 'Uploads/Mobilidade6.php';
      }

      //Update Relatório com registro do uso de aplicativo de mobilidade urbana
      include 'Update-Relatorio.php';
      
    }
  }
}