<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>" . 
    $QueryBuscarRegistroMobilidade = "
      SELECT * FROM tb_registro_mobilidade
      WHERE id_mobilidade = '$RegistroMobilidade'
    ";
    echo "</pre>";
    $ExeQrBuscarRegistroMobilidade = mysqli_query($connection, $QueryBuscarRegistroMobilidade);
    $RowQrBuscarRegistroMobilidade = mysqli_num_rows($ExeQrBuscarRegistroMobilidade);
    if( $RowQrBuscarRegistroMobilidade = 1 ){
      while( $ReturnRegistroMobilidade = mysqli_fetch_assoc($ExeQrBuscarRegistroMobilidade) ){
        if( $ReturnRegistroMobilidade['data_mobilidade'] == 'Sim' ){
          $DataRegistroMobilidade = $ReturnRegistroMobilidade['data_mobilidade'];
        }else{
          $DataRegistroMobilidade = "Não";
        }
        if( $ReturnRegistroMobilidade['hora_mobilidade'] == 'Sim' ){
          $HoraRegistroMobilidade = $ReturnRegistroMobilidade['hora_mobilidade'];
        }else{
          $HoraRegistroMobilidade = "Não";
        }
        if( $ReturnRegistroMobilidade['trajeto_mobilidade'] == 'Sim' ){
          $TrajetoRegistroMobilidade = $ReturnRegistroMobilidade['trajeto_mobilidade'];
        }else{
          $TrajetoRegistroMobilidade = "Não";
        }
        if( $ReturnRegistroMobilidade['foto1_mobilidade'] != '' ){
          echo "<br>Foto1: " . $FotoRegistroMobilidade1 = $ReturnRegistroMobilidade['foto1_mobilidade'];
        }else{
          echo "<br>Foto1: " . $FotoRegistroMobilidade1 = 0;
        }

        if( $ReturnRegistroMobilidade['foto2_mobilidade'] != '' ){
          echo "<br>Foto2: " . $FotoRegistroMobilidade2 = $ReturnRegistroMobilidade['foto2_mobilidade'];
        }else{
          echo "<br>Foto2: " . $FotoRegistroMobilidade2 = 0;
        }

        if( $ReturnRegistroMobilidade['foto3_mobilidade'] != '' ){
          echo "<br>Foto3: " . $FotoRegistroMobilidade3 = $ReturnRegistroMobilidade['foto3_mobilidade'];
        }else{
          echo "<br>Foto3: " . $FotoRegistroMobilidade3 = 0;
        }

        if( $ReturnRegistroMobilidade['foto4_mobilidade'] != '' ){
          echo "<br>Foto4: " . $FotoRegistroMobilidade4 = $ReturnRegistroMobilidade['foto4_mobilidade'];
        }else{
          echo "<br>Foto4: " . $FotoRegistroMobilidade4 = 0;
        }

        if( $ReturnRegistroMobilidade['foto5_mobilidade'] != '' ){
          echo "<br>Foto5: " . $FotoRegistroMobilidade5 = $ReturnRegistroMobilidade['foto5_mobilidade'];
        }else{
          echo "<br>Foto5: " . $FotoRegistroMobilidade5 = 0;
        }

        if( $ReturnRegistroMobilidade['foto6_mobilidade'] != '' ){
          echo "<br>Foto6: " . $FotoRegistroMobilidade6 = $ReturnRegistroMobilidade['foto6_mobilidade'];
        }else{
          echo "<br>Foto6: " . $FotoRegistroMobilidade6 = 0;
        }
      }
    }
  }else{
    //PROD
    "<br><pre>" . 
    $QueryBuscarRegistroMobilidade = "
      SELECT * FROM tb_registro_mobilidade
      WHERE id_mobilidade = '$RegistroMobilidade'
    ";
    "</pre>";
    $ExeQrBuscarRegistroMobilidade = mysqli_query($connection, $QueryBuscarRegistroMobilidade);
    $RowQrBuscarRegistroMobilidade = mysqli_num_rows($ExeQrBuscarRegistroMobilidade);
    if( $RowQrBuscarRegistroMobilidade = 1 ){
      while( $ReturnRegistroMobilidade = mysqli_fetch_assoc($ExeQrBuscarRegistroMobilidade) ){
        if( $ReturnRegistroMobilidade['data_mobilidade'] == 'Sim' ){
          $DataRegistroMobilidade = $ReturnRegistroMobilidade['data_mobilidade'];
        }else{
          $DataRegistroMobilidade = "Não";
        }
        if( $ReturnRegistroMobilidade['hora_mobilidade'] == 'Sim' ){
          $HoraRegistroMobilidade = $ReturnRegistroMobilidade['hora_mobilidade'];
        }else{
          $HoraRegistroMobilidade = "Não";
        }
        if( $ReturnRegistroMobilidade['trajeto_mobilidade'] == 'Sim' ){
          $TrajetoRegistroMobilidade = $ReturnRegistroMobilidade['trajeto_mobilidade'];
        }else{
          $TrajetoRegistroMobilidade = "Não";
        }
        if( $ReturnRegistroMobilidade['foto1_mobilidade'] != '' ){
          "<br>Foto1: " . $FotoRegistroMobilidade1 = $ReturnRegistroMobilidade['foto1_mobilidade'];
        }else{
          "<br>Foto1: " . $FotoRegistroMobilidade1 = 0;
        }

        if( $ReturnRegistroMobilidade['foto2_mobilidade'] != '' ){
          "<br>Foto2: " . $FotoRegistroMobilidade2 = $ReturnRegistroMobilidade['foto2_mobilidade'];
        }else{
          "<br>Foto2: " . $FotoRegistroMobilidade2 = 0;
        }

        if( $ReturnRegistroMobilidade['foto3_mobilidade'] != '' ){
          "<br>Foto3: " . $FotoRegistroMobilidade3 = $ReturnRegistroMobilidade['foto3_mobilidade'];
        }else{
          "<br>Foto3: " . $FotoRegistroMobilidade3 = 0;
        }

        if( $ReturnRegistroMobilidade['foto4_mobilidade'] != '' ){
          "<br>Foto4: " . $FotoRegistroMobilidade4 = $ReturnRegistroMobilidade['foto4_mobilidade'];
        }else{
          "<br>Foto4: " . $FotoRegistroMobilidade4 = 0;
        }

        if( $ReturnRegistroMobilidade['foto5_mobilidade'] != '' ){
          "<br>Foto5: " . $FotoRegistroMobilidade5 = $ReturnRegistroMobilidade['foto5_mobilidade'];
        }else{
          "<br>Foto5: " . $FotoRegistroMobilidade5 = 0;
        }

        if( $ReturnRegistroMobilidade['foto6_mobilidade'] != '' ){
          "<br>Foto6: " . $FotoRegistroMobilidade6 = $ReturnRegistroMobilidade['foto6_mobilidade'];
        }else{
          "<br>Foto6: " . $FotoRegistroMobilidade6 = 0;
        }
      }
    }
  }