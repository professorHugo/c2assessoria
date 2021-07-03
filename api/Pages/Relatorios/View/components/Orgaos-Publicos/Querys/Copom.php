<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>" . 
    $QueryBuscarRegistroCopom = "
      SELECT * FROM tb_copom
      WHERE id_copom = '$RegistroCopom'
    ";
    echo "</pre>";
    $ExeQrBuscarRegistroCopom = mysqli_query($connection, $QueryBuscarRegistroCopom);
    $RowQrBuscarRegistroCopom = mysqli_num_rows($ExeQrBuscarRegistroCopom);
    if( $RowQrBuscarRegistroCopom = 1 ){
      while( $ReturnRegistroCopom = mysqli_fetch_assoc($ExeQrBuscarRegistroCopom) ){
        if( $ReturnRegistroCopom['texto_divergencia'] != '' ){
          echo "<br> Irregularidade: " . $IrregularidadesRegistroCopom = $ReturnRegistroCopom['texto_divergencia'];
        }
        if( $ReturnRegistroCopom['foto1_copom'] != '' ){
          echo "<br>Foto1: " . $FotoRegistroCopom1 = $ReturnRegistroCopom['foto1_copom'];
        }else{
          echo "<br>Foto1: " . $FotoRegistroCopom1 = 0;
        }

        if( $ReturnRegistroCopom['foto2_copom'] != '' ){
          echo "<br>Foto2: " . $FotoRegistroCopom2 = $ReturnRegistroCopom['foto2_copom'];
        }else{
          echo "<br>Foto2: " . $FotoRegistroCopom2 = 0;
        }

        if( $ReturnRegistroCopom['foto3_copom'] != '' ){
          echo "<br>Foto3: " . $FotoRegistroCopom3 = $ReturnRegistroCopom['foto3_copom'];
        }else{
          echo "<br>Foto3: " . $FotoRegistroCopom3 = 0;
        }

        if( $ReturnRegistroCopom['foto4_copom'] != '' ){
          echo "<br>Foto4: " . $FotoRegistroCopom4 = $ReturnRegistroCopom['foto4_copom'];
        }else{
          echo "<br>Foto4: " . $FotoRegistroCopom4 = 0;
        }

        if( $ReturnRegistroCopom['foto5_copom'] != '' ){
          echo "<br>Foto5: " . $FotoRegistroCopom5 = $ReturnRegistroCopom['foto5_copom'];
        }else{
          echo "<br>Foto5: " . $FotoRegistroCopom5 = 0;
        }

        if( $ReturnRegistroCopom['foto6_copom'] != '' ){
          echo "<br>Foto6: " . $FotoRegistroCopom6 = $ReturnRegistroCopom['foto6_copom'];
        }else{
          echo "<br>Foto6: " . $FotoRegistroCopom6 = 0;
        }
      }
    }
  }else{
    //PROD
    "<br><pre>" . 
    $QueryBuscarRegistroCopom = "
      SELECT * FROM tb_copom
      WHERE id_copom = '$RegistroCopom'
    ";
    "</pre>";
    $ExeQrBuscarRegistroCopom = mysqli_query($connection, $QueryBuscarRegistroCopom);
    $RowQrBuscarRegistroCopom = mysqli_num_rows($ExeQrBuscarRegistroCopom);
    if( $RowQrBuscarRegistroCopom = 1 ){
      while( $ReturnRegistroCopom = mysqli_fetch_assoc($ExeQrBuscarRegistroCopom) ){
        if( $ReturnRegistroCopom['texto_divergencia'] != '' ){
          $IrregularidadesRegistroCopom = $ReturnRegistroCopom['texto_divergencia'];
        }
        if( $ReturnRegistroCopom['foto1_copom'] != '' ){
          "<br>Foto1: " . $FotoRegistroCopom1 = $ReturnRegistroCopom['foto1_copom'];
        }else{
          "<br>Foto1: " . $FotoRegistroCopom1 = 0;
        }

        if( $ReturnRegistroCopom['foto2_copom'] != '' ){
          "<br>Foto2: " . $FotoRegistroCopom2 = $ReturnRegistroCopom['foto2_copom'];
        }else{
          "<br>Foto2: " . $FotoRegistroCopom2 = 0;
        }

        if( $ReturnRegistroCopom['foto3_copom'] != '' ){
          "<br>Foto3: " . $FotoRegistroCopom3 = $ReturnRegistroCopom['foto3_copom'];
        }else{
          "<br>Foto3: " . $FotoRegistroCopom3 = 0;
        }

        if( $ReturnRegistroCopom['foto4_copom'] != '' ){
          "<br>Foto4: " . $FotoRegistroCopom4 = $ReturnRegistroCopom['foto4_copom'];
        }else{
          "<br>Foto4: " . $FotoRegistroCopom4 = 0;
        }

        if( $ReturnRegistroCopom['foto5_copom'] != '' ){
          "<br>Foto5: " . $FotoRegistroCopom5 = $ReturnRegistroCopom['foto5_copom'];
        }else{
          "<br>Foto5: " . $FotoRegistroCopom5 = 0;
        }

        if( $ReturnRegistroCopom['foto6_copom'] != '' ){
          "<br>Foto6: " . $FotoRegistroCopom6 = $ReturnRegistroCopom['foto6_copom'];
        }else{
          "<br>Foto6: " . $FotoRegistroCopom6 = 0;
        }
      }
    }
  }