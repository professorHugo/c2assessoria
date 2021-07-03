<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>" . 
    $QueryBuscarPoliciaCivil = "
      SELECT * FROM tb_policia_civil
      WHERE id_policia_civil = '$PoliciaCivil'
    ";
    echo "</pre>";
    $ExeQrBuscarPoliciaCivil = mysqli_query($connection, $QueryBuscarPoliciaCivil);
    $RowQrBuscarPoliciaCivil = mysqli_num_rows($ExeQrBuscarPoliciaCivil);
    if( $RowQrBuscarPoliciaCivil = 1 ){
      while( $ReturnPoliciaCivil = mysqli_fetch_assoc($ExeQrBuscarPoliciaCivil) ){
        if( $ReturnPoliciaCivil['foto1_policia_civil'] != '' ){
          echo "<br>Foto1: " . $FotoPoliciaCivil1 = $ReturnPoliciaCivil['foto1_policia_civil'];
        }else{
          echo "<br>Foto1: " . $FotoPoliciaCivil1 = 0;
        }

        if( $ReturnPoliciaCivil['foto2_policia_civil'] != '' ){
          echo "<br>Foto2: " . $FotoPoliciaCivil2 = $ReturnPoliciaCivil['foto2_policia_civil'];
        }else{
          echo "<br>Foto2: " . $FotoPoliciaCivil2 = 0;
        }

        if( $ReturnPoliciaCivil['foto3_policia_civil'] != '' ){
          echo "<br>Foto3: " . $FotoPoliciaCivil3 = $ReturnPoliciaCivil['foto3_policia_civil'];
        }else{
          echo "<br>Foto3: " . $FotoPoliciaCivil3 = 0;
        }

        if( $ReturnPoliciaCivil['foto4_policia_civil'] != '' ){
          echo "<br>Foto4: " . $FotoPoliciaCivil4 = $ReturnPoliciaCivil['foto4_policia_civil'];
        }else{
          echo "<br>Foto4: " . $FotoPoliciaCivil4 = 0;
        }

        if( $ReturnPoliciaCivil['foto5_policia_civil'] != '' ){
          echo "<br>Foto5: " . $FotoPoliciaCivil5 = $ReturnPoliciaCivil['foto5_policia_civil'];
        }else{
          echo "<br>Foto5: " . $FotoPoliciaCivil5 = 0;
        }

        if( $ReturnPoliciaCivil['foto6_policia_civil'] != '' ){
          echo "<br>Foto6: " . $FotoPoliciaCivil6 = $ReturnPoliciaCivil['foto6_policia_civil'];
        }else{
          echo "<br>Foto6: " . $FotoPoliciaCivil6 = 0;
        }
      }
    }
  }else{
    //PROD
    "<br><pre>" . 
    $QueryBuscarPoliciaCivil = "
      SELECT * FROM tb_policia_civil
      WHERE id_policia_civil = '$PoliciaCivil'
    ";
    "</pre>";
    $ExeQrBuscarPoliciaCivil = mysqli_query($connection, $QueryBuscarPoliciaCivil);
    $RowQrBuscarPoliciaCivil = mysqli_num_rows($ExeQrBuscarPoliciaCivil);
    if( $RowQrBuscarPoliciaCivil = 1 ){
      while( $ReturnPoliciaCivil = mysqli_fetch_assoc($ExeQrBuscarPoliciaCivil) ){
        if( $ReturnPoliciaCivil['irregularidades_policia_civil'] != '' ){
          $Irregularidades = $ReturnPoliciaCivil['irregularidades_policia_civil'];
        }
        
        if( $ReturnPoliciaCivil['foto1_policia_civil'] != '' ){
          "<br>Foto1: " . $FotoPoliciaCivil1 = $ReturnPoliciaCivil['foto1_policia_civil'];
        }else{
          "<br>Foto1: " . $FotoPoliciaCivil1 = 0;
        }

        if( $ReturnPoliciaCivil['foto2_policia_civil'] != '' ){
          "<br>Foto2: " . $FotoPoliciaCivil2 = $ReturnPoliciaCivil['foto2_policia_civil'];
        }else{
          "<br>Foto2: " . $FotoPoliciaCivil2 = 0;
        }

        if( $ReturnPoliciaCivil['foto3_policia_civil'] != '' ){
          "<br>Foto3: " . $FotoPoliciaCivil3 = $ReturnPoliciaCivil['foto3_policia_civil'];
        }else{
          "<br>Foto3: " . $FotoPoliciaCivil3 = 0;
        }

        if( $ReturnPoliciaCivil['foto4_policia_civil'] != '' ){
          "<br>Foto4: " . $FotoPoliciaCivil4 = $ReturnPoliciaCivil['foto4_policia_civil'];
        }else{
          "<br>Foto4: " . $FotoPoliciaCivil4 = 0;
        }

        if( $ReturnPoliciaCivil['foto5_policia_civil'] != '' ){
          "<br>Foto5: " . $FotoPoliciaCivil5 = $ReturnPoliciaCivil['foto5_policia_civil'];
        }else{
          "<br>Foto5: " . $FotoPoliciaCivil5 = 0;
        }

        if( $ReturnPoliciaCivil['foto6_policia_civil'] != '' ){
          "<br>Foto6: " . $FotoPoliciaCivil6 = $ReturnPoliciaCivil['foto6_policia_civil'];
        }else{
          "<br>Foto6: " . $FotoPoliciaCivil6 = 0;
        }
      }
    }
  }