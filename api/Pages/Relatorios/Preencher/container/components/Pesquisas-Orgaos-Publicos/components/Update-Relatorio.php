<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>" . 
    $QueryBuscarRegistroOrgaosPublicos = "
      SELECT * FROM
        tb_orgaos_publicos
      WHERE
        protocolo_orgaos_publicos = '$Protocolo'
    ";
    echo "</pre>";

    $ExeQrBuscarRegistroOrgaosPublicos = mysqli_query($connection, $QueryBuscarRegistroOrgaosPublicos);
    while( $OrgaosPublicos = mysqli_fetch_assoc($ExeQrBuscarRegistroOrgaosPublicos) ){
      $IdOrgaosPublicos = $OrgaosPublicos['id_orgaos_publicos'];
    }

    //Update na tb_relatorios
    echo "<br><pre>" .
    $QueryUpdateRegistroOrgaosPublicos = "
      UPDATE tb_relatorios
      SET 
        orgaos_publicos = '$IdOrgaosPublicos'
      WHERE
        protocolo_evento = '$Protocolo' &&
        cpf_associado = '$CPFAssociado'
    ";
    echo "</pre>";
    $ExeQrUpdateRegistroOrgaosPublicos = mysqli_query($connection, $QueryUpdateRegistroOrgaosPublicos);
    if( $ExeQrUpdateRegistroOrgaosPublicos ){
      echo "<br>Registro de órgãos públicos Relatório atualizado";
    }else{
      echo "<br>Erro: " . mysqli_error($connection);
    }



  }else{

    //PROD
    "<br><pre>" . 
    $QueryBuscarRegistroOrgaosPublicos = "
      SELECT * FROM
        tb_orgaos_publicos
      WHERE
        protocolo_orgaos_publicos = '$Protocolo'
    ";
    "</pre>";

    $ExeQrBuscarRegistroOrgaosPublicos = mysqli_query($connection, $QueryBuscarRegistroOrgaosPublicos);
    while( $OrgaosPublicos = mysqli_fetch_assoc($ExeQrBuscarRegistroOrgaosPublicos) ){
      $IdOrgaosPublicos = $OrgaosPublicos['id_orgaos_publicos'];
    }

    //Update na tb_relatorios
    "<br><pre>" .
    $QueryUpdateRegistroOrgaosPublicos = "
      UPDATE tb_relatorios
      SET 
        orgaos_publicos = '$IdOrgaosPublicos'
      WHERE
        protocolo_evento = '$Protocolo' &&
        cpf_associado = '$CPFAssociado'
    ";
    "</pre>";
    $ExeQrUpdateRegistroOrgaosPublicos = mysqli_query($connection, $QueryUpdateRegistroOrgaosPublicos);
    if( $ExeQrUpdateRegistroOrgaosPublicos ){
      "<br>Registro de órgãos públicos Relatório atualizado";
    }else{
      echo "<br>Erro: " . mysqli_error($connection);
    }


    
  }