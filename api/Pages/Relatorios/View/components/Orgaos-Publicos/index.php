<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>" . 
    $QueryBuscarOrgaosPublicos = "
      SELECT * FROM tb_relatorios
      WHERE protocolo_evento = '$Protocolo'
    ";
    echo "</pre>";
    $ExeQrBuscarOrgaosPublicos = mysqli_query($connection, $QueryBuscarOrgaosPublicos);
    $RowQrBuscarOrgaosPublicos = mysqli_num_rows($ExeQrBuscarOrgaosPublicos);

    if( $RowQrBuscarOrgaosPublicos = 1 ){
      while( $ReturnOrgaosPublicos = mysqli_fetch_assoc($ExeQrBuscarOrgaosPublicos) ){
        if( $ReturnOrgaosPublicos['boletim_ocorrencia'] != '' ){
          $BoletimOcorrencia = $ReturnOrgaosPublicos['boletim_ocorrencia'];
        }else{
          $BoletimOcorrencia = 0;
        }
        if( $ReturnOrgaosPublicos['policia_civil'] != '' ){
          $PoliciaCivil = $ReturnOrgaosPublicos['policia_civil'];
        }else{
          $PoliciaCivil = 0;
        }

        if( $ReturnOrgaosPublicos['policia_militar'] != '' ){
          $PoliciaMilitar = $ReturnOrgaosPublicos['policia_militar'];
        }else{
          $PoliciaMilitar = 0;
        }

        if( $ReturnOrgaosPublicos['registro_copom'] != '' ){
          $RegistroCopom = $ReturnOrgaosPublicos['registro_copom'];
        }else{
          $RegistroCopom = 0;
        }

        if( $ReturnOrgaosPublicos['registro_mobilidade'] != '' ){
          $RegistroMobilidade = $ReturnOrgaosPublicos['registro_mobilidade'];
        }else{
          $RegistroMobilidade = 0;
        }
      }
    }
  }else{


    //PROD
    "<br><pre>" . 
    $QueryBuscarOrgaosPublicos = "
      SELECT * FROM tb_relatorios
      WHERE protocolo_evento = '$Protocolo'
    ";
    "</pre>";
    $ExeQrBuscarOrgaosPublicos = mysqli_query($connection, $QueryBuscarOrgaosPublicos);
    $RowQrBuscarOrgaosPublicos = mysqli_num_rows($ExeQrBuscarOrgaosPublicos);

    if( $RowQrBuscarOrgaosPublicos = 1 ){
      while( $ReturnOrgaosPublicos = mysqli_fetch_assoc($ExeQrBuscarOrgaosPublicos) ){
        if( $ReturnOrgaosPublicos['boletim_ocorrencia'] != '' ){
          $BoletimOcorrencia = $ReturnOrgaosPublicos['boletim_ocorrencia'];
        }else{
          $BoletimOcorrencia = 0;
        }
        if( $ReturnOrgaosPublicos['policia_civil'] != '' ){
          $PoliciaCivil = $ReturnOrgaosPublicos['policia_civil'];
        }else{
          $PoliciaCivil = 0;
        }

        if( $ReturnOrgaosPublicos['policia_militar'] != '' ){
          $PoliciaMilitar = $ReturnOrgaosPublicos['policia_militar'];
        }else{
          $PoliciaMilitar = 0;
        }

        if( $ReturnOrgaosPublicos['registro_copom'] != '' ){
          $RegistroCopom = $ReturnOrgaosPublicos['registro_copom'];
        }else{
          $RegistroCopom = 0;
        }

        if( $ReturnOrgaosPublicos['registro_mobilidade'] != '' ){
          $RegistroMobilidade = $ReturnOrgaosPublicos['registro_mobilidade'];
        }else{
          $RegistroMobilidade = 0;
        }
      }
    }
  }
?>

<div class="col-12 space-3" id="Orgaos-Publicos">
  <h3 class="rotulos col-12">Órgãos Públicos</h3>
  <?php include 'Procedimentos-Legais.php'?>
</div>