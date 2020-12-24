<?php
  if( $SysMode == 1 ){
    echo "<br>Protocolo: " . $Protocolo = $_GET['Protocolo'];

    if( isset( $_POST['confirmacao1_sabedores'] ) ){
      echo "<br>Confirmação 1: " . $Confirmacao1 = $_POST['confirmacao1_sabedores'];
    }else{
      echo "<br>Confirmação 1: " . $Confirmacao1 = "";
    }
    
    if( isset( $_POST['confirmacao2_sabedores'] ) ){
      echo "<br>Confirmação 2: " . $Confirmacao2 = $_POST['confirmacao2_sabedores'];
    }else{
      echo "<br>Confirmação 2: " . $Confirmacao2 = "";
    }
    
    if( isset( $_POST['confirmacao3_sabedores'] ) ){
      echo "<br>Confirmação 3: " . $Confirmacao3 = $_POST['confirmacao3_sabedores'];
    }else{
      echo "<br>Confirmação 3: " . $Confirmacao3 = "";
    }
  
    if( isset( $_POST['confirmacao4_sabedores'] ) ){
      echo "<br>Confirmação 4: " . $Confirmacao4 = $_POST['confirmacao4_sabedores'];
    }else{
      echo "<br>Confirmação 4: " . $Confirmacao4 = "";
    }

    if( isset( $_POST['confirmacao5_sabedores'] ) ){
      echo "<br>Confirmação 5: " . $Confirmacao5 = $_POST['confirmacao5_sabedores'];
    }else{
      echo "<br>Confirmação 5: " . $Confirmacao5 = "";
    }

    if( isset( $_POST['confirmacao6_sabedores'] ) ){
      echo "<br>Confirmação 6: " . $Confirmacao6 = $_POST['confirmacao6_sabedores'];
    }else{
      echo "<br>Confirmação 6: " . $Confirmacao6 = "";
    }

    if( isset( $_POST['confirmacao7_sabedores'] ) ){
      echo "<br>Confirmação 7: " . $Confirmacao7 = $_POST['confirmacao7_sabedores'];
    }else{
      echo "<br>Confirmação 7: " . $Confirmacao7 = "";
    }

    if( isset( $_POST['confirmacao8_sabedores'] ) ){
      echo "<br>Confirmação 8: " . $Confirmacao8 = $_POST['confirmacao8_sabedores'];
    }else{
      echo "<br>Confirmação 8: " . $Confirmacao8 = "";
    }
  
    echo "<br><pre>" . 
    $QueryUpdateLocalEvento = "
      UPDATE tb_entrevistados_convivio
      SET
        confirmacao1_sabedores = '$Confirmacao1',
        confirmacao2_sabedores = '$Confirmacao2',
        confirmacao3_sabedores = '$Confirmacao3',
        confirmacao4_sabedores = '$Confirmacao4',
        confirmacao5_sabedores = '$Confirmacao5',
        confirmacao6_sabedores = '$Confirmacao6',
        confirmacao7_sabedores = '$Confirmacao7',
        confirmacao8_sabedores = '$Confirmacao8'
      WHERE
        protocolo_sabedores = '$Protocolo' &&
        representante_sabedor = 1
    ";
    echo "</pre>";
    if( $ExeQrUpdateLocalEvento = mysqli_query($connection, $QueryUpdateLocalEvento) ){
      echo "<br>Pesquisa sabedores convívio salvo";
    }else{
      echo "<br>Erro: " . mysqli_error($connection);
    }
  }else{

    //PROD

    
    "<br>Protocolo: " . $Protocolo = $_GET['Protocolo'];

    if( isset( $_POST['confirmacao1_sabedores'] ) ){
      "<br>Confirmação 1: " . $Confirmacao1 = $_POST['confirmacao1_sabedores'];
    }else{
      "<br>Confirmação 1: " . $Confirmacao1 = "";
    }
    
    if( isset( $_POST['confirmacao2_sabedores'] ) ){
      "<br>Confirmação 2: " . $Confirmacao2 = $_POST['confirmacao2_sabedores'];
    }else{
      "<br>Confirmação 2: " . $Confirmacao2 = "";
    }
    
    if( isset( $_POST['confirmacao3_sabedores'] ) ){
      "<br>Confirmação 3: " . $Confirmacao3 = $_POST['confirmacao3_sabedores'];
    }else{
      "<br>Confirmação 3: " . $Confirmacao3 = "";
    }
  
    if( isset( $_POST['confirmacao4_sabedores'] ) ){
      "<br>Confirmação 4: " . $Confirmacao4 = $_POST['confirmacao4_sabedores'];
    }else{
      "<br>Confirmação 4: " . $Confirmacao4 = "";
    }

    if( isset( $_POST['confirmacao5_sabedores'] ) ){
      "<br>Confirmação 5: " . $Confirmacao5 = $_POST['confirmacao5_sabedores'];
    }else{
      "<br>Confirmação 5: " . $Confirmacao5 = "";
    }

    if( isset( $_POST['confirmacao6_sabedores'] ) ){
      "<br>Confirmação 6: " . $Confirmacao6 = $_POST['confirmacao6_sabedores'];
    }else{
      "<br>Confirmação 6: " . $Confirmacao6 = "";
    }

    if( isset( $_POST['confirmacao7_sabedores'] ) ){
      "<br>Confirmação 7: " . $Confirmacao7 = $_POST['confirmacao7_sabedores'];
    }else{
      "<br>Confirmação 7: " . $Confirmacao7 = "";
    }

    if( isset( $_POST['confirmacao8_sabedores'] ) ){
      "<br>Confirmação 8: " . $Confirmacao8 = $_POST['confirmacao8_sabedores'];
    }else{
      "<br>Confirmação 8: " . $Confirmacao8 = "";
    }
  
    "<br><pre>" . 
    $QueryUpdateLocalEvento = "
      UPDATE tb_entrevistados_convivio
      SET
        confirmacao1_sabedores = '$Confirmacao1',
        confirmacao2_sabedores = '$Confirmacao2',
        confirmacao3_sabedores = '$Confirmacao3',
        confirmacao4_sabedores = '$Confirmacao4',
        confirmacao5_sabedores = '$Confirmacao5',
        confirmacao6_sabedores = '$Confirmacao6',
        confirmacao7_sabedores = '$Confirmacao7',
        confirmacao8_sabedores = '$Confirmacao8'
      WHERE
        protocolo_sabedores = '$Protocolo' &&
        representante_sabedor = 1
    ";
    "</pre>";
    if( $ExeQrUpdateLocalEvento = mysqli_query($connection, $QueryUpdateLocalEvento) ){
      "<br>Pesquisa sabedores convívio salvo";
    }else{
      echo "<br>Erro: " . mysqli_error($connection);
    }
  }