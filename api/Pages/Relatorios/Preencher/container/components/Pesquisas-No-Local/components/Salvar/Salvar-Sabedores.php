<?php
  if( $SysMode == 1 ){
    echo "<br>Protocolo: " . $Protocolo = $_GET['Protocolo'];

    if( isset( $_POST['confirmacao1_local'] ) ){
      echo "<br>Confirmação 1: " . $Confirmacao1 = $_POST['confirmacao1_local'];
    }else{
      echo "<br>Confirmação 1: " . $Confirmacao1 = "";
    }
    
    if( isset( $_POST['confirmacao2_local'] ) ){
      echo "<br>Confirmação 2: " . $Confirmacao2 = $_POST['confirmacao2_local'];
    }else{
      echo "<br>Confirmação 2: " . $Confirmacao2 = "";
    }
    
    if( isset( $_POST['confirmacao3_local'] ) ){
      echo "<br>Confirmação 3: " . $Confirmacao3 = $_POST['confirmacao3_local'];
    }else{
      echo "<br>Confirmação 3: " . $Confirmacao3 = "";
    }
  
    if( isset( $_POST['confirmacao4_local'] ) ){
      echo "<br>Confirmação 4: " . $Confirmacao4 = $_POST['confirmacao4_local'];
    }else{
      echo "<br>Confirmação 4: " . $Confirmacao4 = "";
    }
  
    echo "<br><pre>" . 
    $QueryUpdateLocalEvento = "
      UPDATE tb_local_evento
      SET
        confirmacao1_local = '$Confirmacao1',
        confirmacao2_local = '$Confirmacao2',
        confirmacao3_local = '$Confirmacao3',
        confirmacao4_local = '$Confirmacao4',
        local_evento_salvo = 'Sim'
      WHERE
        protocolo_local_evento = '$Protocolo' &&
        testemunha_entrevistado = 0
    ";
    echo "</pre>";
    if( $ExeQrUpdateLocalEvento = mysqli_query($connection, $QueryUpdateLocalEvento) ){
      echo "<br>Local do evento atualizado";
    }else{
      echo "<br>Erro: " . mysqli_error($connection);
    }
  }else{

    
    //Prod
     "<br>Protocolo: " . $Protocolo = $_GET['Protocolo'];

    if( isset( $_POST['confirmacao1_local'] ) ){
       "<br>Confirmação 1: " . $Confirmacao1 = $_POST['confirmacao1_local'];
    }else{
       "<br>Confirmação 1: " . $Confirmacao1 = "";
    }
    
    if( isset( $_POST['confirmacao2_local'] ) ){
       "<br>Confirmação 2: " . $Confirmacao2 = $_POST['confirmacao2_local'];
    }else{
       "<br>Confirmação 2: " . $Confirmacao2 = "";
    }
    
    if( isset( $_POST['confirmacao3_local'] ) ){
       "<br>Confirmação 3: " . $Confirmacao3 = $_POST['confirmacao3_local'];
    }else{
       "<br>Confirmação 3: " . $Confirmacao3 = "";
    }

    if( isset( $_POST['confirmacao4_local'] ) ){
       "<br>Confirmação 4: " . $Confirmacao4 = $_POST['confirmacao4_local'];
    }else{
       "<br>Confirmação 4: " . $Confirmacao4 = "";
    }

     "<br><pre>" . 
    $QueryUpdateLocalEvento = "
      UPDATE tb_local_evento
      SET
        confirmacao1_local = '$Confirmacao1',
        confirmacao2_local = '$Confirmacao2',
        confirmacao3_local = '$Confirmacao3',
        confirmacao4_local = '$Confirmacao4',
        local_evento_salvo = 'Sim'
      WHERE
        protocolo_local_evento = '$Protocolo'
    ";
     "</pre>";
    if( $ExeQrUpdateLocalEvento = mysqli_query($connection, $QueryUpdateLocalEvento) ){
       "<br>Local do evento atualizado";
    }else{
      echo "<br>Erro: " . mysqli_error($connection);
    }
  }