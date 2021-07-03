<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>" . 
    $QueryBuscarBoletimOcorrencia = "
      SELECT * FROM 
        tb_boletim_ocorrencia
      WHERE id_boletim = '$BoletimOcorrencia'
    ";
    echo "</pre>";
    $ExeQrBuscarBoletimOcorrencia = mysqli_query($connection, $QueryBuscarBoletimOcorrencia);
    $RowQrBuscarBoletimOcorrencia = mysqli_num_rows($ExeQrBuscarBoletimOcorrencia);
    if( $RowQrBuscarBoletimOcorrencia = 1 ){
      while( $ReturnBoletim = mysqli_fetch_assoc($ExeQrBuscarBoletimOcorrencia) ){
        if( $ReturnBoletim['foto1_boletim'] != '' ){
          echo "<br>Foto1: " . $FotoBoletim1 = $ReturnBoletim['foto1_boletim'];
        }else{
          echo "<br>Foto1: " . $FotoBoletim1 = 0;
        }

        if( $ReturnBoletim['foto2_boletim'] != '' ){
          echo "<br>Foto2: " . $FotoBoletim2 = $ReturnBoletim['foto2_boletim'];
        }else{
          echo "<br>Foto2: " . $FotoBoletim2 = 0;
        }

        if( $ReturnBoletim['foto3_boletim'] != '' ){
          echo "<br>Foto3: " . $FotoBoletim3 = $ReturnBoletim['foto3_boletim'];
        }else{
          echo "<br>Foto3: " . $FotoBoletim3 = 0;
        }

        if( $ReturnBoletim['foto4_boletim'] != '' ){
          echo "<br>Foto4: " . $FotoBoletim4 = $ReturnBoletim['foto4_boletim'];
        }else{
          echo "<br>Foto4: " . $FotoBoletim4 = 0;
        }
        
        if( $ReturnBoletim['foto5_boletim'] != '' ){
          echo "<br>Foto5: " . $FotoBoletim5 = $ReturnBoletim['foto5_boletim'];
        }else{
          echo "<br>Foto5: " . $FotoBoletim5 = 0;
        }

        if( $ReturnBoletim['foto6_boletim'] != '' ){
          echo "<br>Foto6: " . $FotoBoletim6 = $ReturnBoletim['foto6_boletim'];
        }else{
          echo "<br>Foto6: " . $FotoBoletim6 = 0;
        }
      }
    }
  }else{
    //PROD
    "<br><pre>" . 
    $QueryBuscarBoletimOcorrencia = "
      SELECT * FROM 
        tb_boletim_ocorrencia
      WHERE id_boletim = '$BoletimOcorrencia'
    ";
    "</pre>";
    $ExeQrBuscarBoletimOcorrencia = mysqli_query($connection, $QueryBuscarBoletimOcorrencia);
    $RowQrBuscarBoletimOcorrencia = mysqli_num_rows($ExeQrBuscarBoletimOcorrencia);
    if( $RowQrBuscarBoletimOcorrencia = 1 ){
      while( $ReturnBoletim = mysqli_fetch_assoc($ExeQrBuscarBoletimOcorrencia) ){
        if( $ReturnBoletim['autenticidade_boletim'] == 'Sim' ){
          $IrreguladiradeBoletim = "Em pesquisa, o boletim <b>não</b> apresenta irregularidades e/ou modificações";
        }else{
          $IrreguladiradeBoletim = "Em pesquisa, o boletim <b>apresenta</b> irregularidades e/ou modificações";
        }
        if( $ReturnBoletim['foto1_boletim'] != '' ){
          "<br>Foto1: " . $FotoBoletim1 = $ReturnBoletim['foto1_boletim'];
        }else{
          "<br>Foto1: " . $FotoBoletim1 = 0;
        }

        if( $ReturnBoletim['foto2_boletim'] != '' ){
          "<br>Foto2: " . $FotoBoletim2 = $ReturnBoletim['foto2_boletim'];
        }else{
          "<br>Foto2: " . $FotoBoletim2 = 0;
        }

        if( $ReturnBoletim['foto3_boletim'] != '' ){
          "<br>Foto3: " . $FotoBoletim3 = $ReturnBoletim['foto3_boletim'];
        }else{
          "<br>Foto3: " . $FotoBoletim3 = 0;
        }

        if( $ReturnBoletim['foto4_boletim'] != '' ){
          "<br>Foto4: " . $FotoBoletim4 = $ReturnBoletim['foto4_boletim'];
        }else{
          "<br>Foto4: " . $FotoBoletim4 = 0;
        }
        
        if( $ReturnBoletim['foto5_boletim'] != '' ){
          "<br>Foto5: " . $FotoBoletim5 = $ReturnBoletim['foto5_boletim'];
        }else{
          "<br>Foto5: " . $FotoBoletim5 = 0;
        }

        if( $ReturnBoletim['foto6_boletim'] != '' ){
          "<br>Foto6: " . $FotoBoletim6 = $ReturnBoletim['foto6_boletim'];
        }else{
          "<br>Foto6: " . $FotoBoletim6 = 0;
        }
      }
    }
  }