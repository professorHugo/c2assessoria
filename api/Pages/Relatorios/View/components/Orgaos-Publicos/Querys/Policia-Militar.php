<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>" . 
    $QueryBuscarPoliciaMilitar = "
      SELECT * FROM tb_policia_militar
      WHERE id_policia_militar = '$PoliciaMilitar'
    ";
    echo "</pre>";
    $ExeQrBuscarPoliciaMilitar = mysqli_query($connection, $QueryBuscarPoliciaMilitar);
    $RowQrBuscarPoliciaMilitar = mysqli_num_rows($ExeQrBuscarPoliciaMilitar);
    if( $RowQrBuscarPoliciaMilitar = 1 ){
      while( $ReturnPoliciaMilitar = mysqli_fetch_assoc($ExeQrBuscarPoliciaMilitar) ){
        if( $ReturnPoliciaMilitar['foto1_policia_militar'] != '' ){
          echo "<br>Foto1: " . $FotoPoliciaMilitar1 = $ReturnPoliciaMilitar['foto1_policia_militar'];
        }else{
          echo "<br>Foto1: " . $FotoPoliciaMilitar1 = 0;
        }

        if( $ReturnPoliciaMilitar['foto2_policia_militar'] != '' ){
          echo "<br>Foto2: " . $FotoPoliciaMilitar2 = $ReturnPoliciaMilitar['foto2_policia_militar'];
        }else{
          echo "<br>Foto2: " . $FotoPoliciaMilitar2 = 0;
        }

        if( $ReturnPoliciaMilitar['foto3_policia_militar'] != '' ){
          echo "<br>Foto3: " . $FotoPoliciaMilitar3 = $ReturnPoliciaMilitar['foto3_policia_militar'];
        }else{
          echo "<br>Foto3: " . $FotoPoliciaMilitar3 = 0;
        }

        if( $ReturnPoliciaMilitar['foto4_policia_militar'] != '' ){
          echo "<br>Foto4: " . $FotoPoliciaMilitar4 = $ReturnPoliciaMilitar['foto4_policia_militar'];
        }else{
          echo "<br>Foto4: " . $FotoPoliciaMilitar4 = 0;
        }

        if( $ReturnPoliciaMilitar['foto5_policia_militar'] != '' ){
          echo "<br>Foto5: " . $FotoPoliciaMilitar5 = $ReturnPoliciaMilitar['foto5_policia_militar'];
        }else{
          echo "<br>Foto5: " . $FotoPoliciaMilitar5 = 0;
        }

        if( $ReturnPoliciaMilitar['foto6_policia_militar'] != '' ){
          echo "<br>Foto6: " . $FotoPoliciaMilitar6 = $ReturnPoliciaMilitar['foto6_policia_militar'];
        }else{
          echo "<br>Foto6: " . $FotoPoliciaMilitar6 = 0;
        }
      }
    }
  }else{
    //PROD
    "<br><pre>" . 
    $QueryBuscarPoliciaMilitar = "
      SELECT * FROM tb_policia_militar
      WHERE id_policia_militar = '$PoliciaMilitar'
    ";
    "</pre>";
    $ExeQrBuscarPoliciaMilitar = mysqli_query($connection, $QueryBuscarPoliciaMilitar);
    $RowQrBuscarPoliciaMilitar = mysqli_num_rows($ExeQrBuscarPoliciaMilitar);
    if( $RowQrBuscarPoliciaMilitar = 1 ){
      while( $ReturnPoliciaMilitar = mysqli_fetch_assoc($ExeQrBuscarPoliciaMilitar) ){
        if( $ReturnPoliciaMilitar['irregularidades_policia_militar'] != '' ){
          $IrregularidadesPoliciaMilitar = $ReturnPoliciaMilitar['irregularidades_policia_militar'];
        }
        if( $ReturnPoliciaMilitar['foto1_policia_militar'] != '' ){
          "<br>Foto1: " . $FotoPoliciaMilitar1 = $ReturnPoliciaMilitar['foto1_policia_militar'];
        }else{
          "<br>Foto1: " . $FotoPoliciaMilitar1 = 0;
        }

        if( $ReturnPoliciaMilitar['foto2_policia_militar'] != '' ){
          "<br>Foto2: " . $FotoPoliciaMilitar2 = $ReturnPoliciaMilitar['foto2_policia_militar'];
        }else{
          "<br>Foto2: " . $FotoPoliciaMilitar2 = 0;
        }

        if( $ReturnPoliciaMilitar['foto3_policia_militar'] != '' ){
          "<br>Foto3: " . $FotoPoliciaMilitar3 = $ReturnPoliciaMilitar['foto3_policia_militar'];
        }else{
          "<br>Foto3: " . $FotoPoliciaMilitar3 = 0;
        }

        if( $ReturnPoliciaMilitar['foto4_policia_militar'] != '' ){
          "<br>Foto4: " . $FotoPoliciaMilitar4 = $ReturnPoliciaMilitar['foto4_policia_militar'];
        }else{
          "<br>Foto4: " . $FotoPoliciaMilitar4 = 0;
        }

        if( $ReturnPoliciaMilitar['foto5_policia_militar'] != '' ){
          "<br>Foto5: " . $FotoPoliciaMilitar5 = $ReturnPoliciaMilitar['foto5_policia_militar'];
        }else{
          "<br>Foto5: " . $FotoPoliciaMilitar5 = 0;
        }

        if( $ReturnPoliciaMilitar['foto6_policia_militar'] != '' ){
          "<br>Foto6: " . $FotoPoliciaMilitar6 = $ReturnPoliciaMilitar['foto6_policia_militar'];
        }else{
          "<br>Foto6: " . $FotoPoliciaMilitar6 = 0;
        }
      }
    }
  }