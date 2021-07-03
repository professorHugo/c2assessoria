<?php
if( $SysMode == 1 ){
  //DEV
  echo "<br>Apresentou Comprovante: " . $Comprovante = $_POST['apresentou_comprovante'];
  
  if( $Comprovante = 1 ){
    echo "<br>Descricação do comprovante: " . $DescricaoComprovante = $_POST['descricao_apresentou_comprovante'];
    include 'Cadastrar-Motorista-App.php';
    echo "<br>";
  }else{
    echo "<br>Descrição do comprovante: " . $DescricaoComprovante = "Não Apresentou/Não é Motorista por Aplicativo";
    include 'Cadastrar-Motorista-App.php';
  }

  if( !empty($_FILES['print_comprovante_motorista_app_img1']['name']) ){
    include 'Uploads/Motorista1.php';
    echo "<br>";
  }

  if( !empty($_FILES['print_comprovante_motorista_app_img2']['name']) ){
    include 'Uploads/Motorista2.php';
    echo "<br>";
  }

  if( !empty($_FILES['print_comprovante_motorista_app_img3']['name']) ){
    include 'Uploads/Motorista3.php';
    echo "<br>";
  }

  if( !empty($_FILES['print_comprovante_motorista_app_img4']['name']) ){
    include 'Uploads/Motorista4.php';
    echo "<br>";
  }

  if( !empty($_FILES['print_comprovante_motorista_app_img5']['name']) ){
    include 'Uploads/Motorista5.php';
    echo "<br>";
  }

  if( !empty($_FILES['print_comprovante_motorista_app_img6']['name']) ){
    include 'Uploads/Motorista6.php';
    echo "<br>";
  }


  include 'Update-Relatorio.php';


}else{


  //PROD
  echo "<br>Apresentou Comprovante: " . $Comprovante = $_POST['apresentou_comprovante'];
  
  if( $Comprovante = 1 ){
    echo "<br>Descricação do comprovante: " . $DescricaoComprovante = $_POST['descricao_apresentou_comprovante'];
    include 'Cadastrar-Motorista-App.php';
    echo "<br>";
  }else{
    echo "<br>Descrição do comprovante: " . $DescricaoComprovante = "Não Apresentou/Não é Motorista por Aplicativo";
    include 'Cadastrar-Motorista-App.php';
  }

  if( !empty($_FILES['print_comprovante_motorista_app_img1']['name']) ){
    include 'Uploads/Motorista1.php';
    echo "<br>";
  }

  if( !empty($_FILES['print_comprovante_motorista_app_img2']['name']) ){
    include 'Uploads/Motorista2.php';
    echo "<br>";
  }

  if( !empty($_FILES['print_comprovante_motorista_app_img3']['name']) ){
    include 'Uploads/Motorista3.php';
    echo "<br>";
  }

  if( !empty($_FILES['print_comprovante_motorista_app_img4']['name']) ){
    include 'Uploads/Motorista4.php';
    echo "<br>";
  }

  if( !empty($_FILES['print_comprovante_motorista_app_img5']['name']) ){
    include 'Uploads/Motorista5.php';
    echo "<br>";
  }

  if( !empty($_FILES['print_comprovante_motorista_app_img6']['name']) ){
    include 'Uploads/Motorista6.php';
    echo "<br>";
  }

  
  include 'Update-Relatorio.php';
}
