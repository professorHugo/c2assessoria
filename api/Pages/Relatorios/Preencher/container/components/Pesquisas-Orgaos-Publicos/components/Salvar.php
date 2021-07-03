<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br>CPF Associado: "  . $CPFAssociado = $_POST['cpf_associado'];
    echo "<br>Placa Veículo: "  . $PlacaVeiculo = $_POST['placa_veiculo'];
    echo "<br>Protocolo: "      . $Protocolo = $_GET['Protocolo'];

    echo "<br>orgaos_publicos_pc:" . $OrgaosPublicosPC = $_POST['orgaos_publicos_pc'];
    echo "<br>boletim_pc_autentico: " . $OrgaosPublicosPCAutentico = $_POST['boletim_pc_autentico'];
    if( $OrgaosPublicosPC == 1 ){
      echo "<br>pc_resultado1: "  . $PesquisaPC1 = $_POST['pc_resultado1'];
      echo "<br>pc_resultado2: "  . $PesquisaPC2 = $_POST['pc_resultado2'];
      echo "<br>pc_resultado3: "  . $PesquisaPC3 = $_POST['pc_resultado3'];
    }
    
    echo "<br>orgaos_publicos_pm:" . $OrgaosPublicosPM = $_POST['orgaos_publicos_pm'];
    echo "<br>boletim_pm_autentico: " . $OrgaosPublicosPMAutentico = $_POST['boletim_pm_autentico'];
    if( $OrgaosPublicosPM == 1 ){
      echo "<br>pm_resultado1: "  . $PesquisaPM1 = $_POST['pm_resultado1'];
      echo "<br>pm_resultado2: "  . $PesquisaPM2 = $_POST['pm_resultado2'];
      echo "<br>pm_resultado3: "  . $PesquisaPM3 = $_POST['pm_resultado3'];
    }

    include 'Cadastros/Cadastrar-Foto.php';
    
    if( !empty($_FILES['print_pesquisas_img1']['name']) ){
      include 'Uploads/Print-Pesquisas1.php';
      echo "<br>";
    }
    if( !empty($_FILES['print_pesquisas_img2']['name']) ){
      include 'Uploads/Print-Pesquisas2.php';
      echo "<br>";
    }
    if( !empty($_FILES['print_pesquisas_img3']['name']) ){
      include 'Uploads/Print-Pesquisas3.php';
      echo "<br>";
    }
    if( !empty($_FILES['print_pesquisas_img4']['name']) ){
      include 'Uploads/Print-Pesquisas4.php';
      echo "<br>";
    }
    if( !empty($_FILES['print_pesquisas_img5']['name']) ){
      include 'Uploads/Print-Pesquisas5.php';
      echo "<br>";
    }
    if( !empty($_FILES['print_pesquisas_img6']['name']) ){
      include 'Uploads/Print-Pesquisas6.php';
      echo "<br>";
    }
    if( !empty($_FILES['print_pesquisas_img7']['name']) ){
      include 'Uploads/Print-Pesquisas7.php';
      echo "<br>";
    }
    if( !empty($_FILES['print_pesquisas_img8']['name']) ){
      include 'Uploads/Print-Pesquisas8.php';
      echo "<br>";
    }
    if( !empty($_FILES['print_pesquisas_img9']['name']) ){
      include 'Uploads/Print-Pesquisas9.php';
      echo "<br>";
    }
    if( !empty($_FILES['print_pesquisas_img10']['name']) ){
      include 'Uploads/Print-Pesquisas10.php';
      echo "<br>";
    }
    if( !empty($_FILES['print_pesquisas_img11']['name']) ){
      include 'Uploads/Print-Pesquisas11.php';
      echo "<br>";
    }
    if( !empty($_FILES['print_pesquisas_img12']['name']) ){
      include 'Uploads/Print-Pesquisas12.php';
      echo "<br>";
    }

    echo "<br><br>Buscar Orgãos Públicos antes de cadastrar<br>";
    
    echo "<br><pre>" . 
    $QueryBuscarPesquisasOrgaosPublicos = "
      SELECT * FROM 
        tb_orgaos_publicos
      WHERE 
        protocolo_orgaos_publicos = '$Protocolo'
    ";
    echo "</pre>";
    $ExeQrBuscarPesquisasOrgaosPublicos = mysqli_query($connection, $QueryBuscarPesquisasOrgaosPublicos);
    $RowQrBuscarPesquisasOrgaosPublicos = mysqli_num_rows($ExeQrBuscarPesquisasOrgaosPublicos);
    
    if( $RowQrBuscarPesquisasOrgaosPublicos < 1 ){
      //Buscar Registro de fotos
      echo "<br><pre>" . 
      $QueryBuscarRegistroFotos = "
        SELECT * FROM 
          tb_orgaos_publicos_fotos
        WHERE 
          orgaos_publicos_fotos_protocolo = '$Protocolo'
      ";
      echo "</pre>";
      $ExeQrBuscarRegistroFotos = mysqli_query($connection, $QueryBuscarRegistroFotos);
      $RowQrBuscarRegistroFotos = mysqli_num_rows($ExeQrBuscarRegistroFotos);

      if( $RowQrBuscarRegistroFotos = 1 ){
        while( $ReturnRegistroFotos = mysqli_fetch_assoc($ExeQrBuscarRegistroFotos) ){
          $IdRegistroFotos = $ReturnRegistroFotos['id_orgaos_publicos_fotos'];
        }
        echo "<br> Cadastrar Pesquisa-Orgaos-Publicos.php";
        echo "<br><pre>" . 
        $QueryCadastrarPesquisaOrgaosPublicos = "
          INSERT INTO tb_orgaos_publicos(
            protocolo_orgaos_publicos,
            orgaos_publicos_fotos,
            orgaos_publicos_pc,
            boletim_pc_autentico,
            pc_resultado1,
            pc_resultado2,
            pc_resultado3,
            orgaos_publicos_pm,
            boletim_pm_autentico,
            pm_resultado1,
            pm_resultado2,
            pm_resultado3
          )VALUES(
            '$Protocolo',
            '$IdRegistroFotos',
            '$OrgaosPublicosPC',
            '$OrgaosPublicosPCAutentico',
            '$PesquisaPC1',
            '$PesquisaPC2',
            '$PesquisaPC3',
            '$OrgaosPublicosPM',
            '$OrgaosPublicosPMAutentico',
            '$PesquisaPM1',
            '$PesquisaPM2',
            '$PesquisaPM3'
          )
        ";
        echo "</pre>";

        $ExeQrCadastrarPesquisaOrgaosPublicos = mysqli_query($connection, $QueryCadastrarPesquisaOrgaosPublicos);

        if( $ExeQrCadastrarPesquisaOrgaosPublicos ){
          echo "<br>Pesquisa cadastrada, fazer update do relatório";
          include 'Update-Relatorio.php';
          echo "<br>Update na data";
          include 'Update-Data-Modifica-Relatorio.php';
        }else{
          echo "<br>Erro: " . mysqli_error($connection);
        }
      }

    }

  }else{

    //PROD
    "<br>CPF Associado: "  . $CPFAssociado = $_POST['cpf_associado'];
    "<br>Placa Veículo: "  . $PlacaVeiculo = $_POST['placa_veiculo'];
    "<br>Protocolo: "      . $Protocolo = $_GET['Protocolo'];

    "<br>orgaos_publicos_pc:" . $OrgaosPublicosPC = $_POST['orgaos_publicos_pc'];
    echo "<br>boletim_pc_autentico: " . $OrgaosPublicosPCAutentico = $_POST['boletim_pc_autentico'];
    if( $OrgaosPublicosPC == 1 ){
      "<br>pc_resultado1: "  . $PesquisaPC1 = $_POST['pc_resultado1'];
      "<br>pc_resultado2: "  . $PesquisaPC2 = $_POST['pc_resultado2'];
      "<br>pc_resultado3: "  . $PesquisaPC3 = $_POST['pc_resultado3'];
    }
    
    "<br>orgaos_publicos_pm:" . $OrgaosPublicosPM = $_POST['orgaos_publicos_pm'];
    echo "<br>boletim_pm_autentico: " . $OrgaosPublicosPMAutentico = $_POST['boletim_pm_autentico'];
    if( $OrgaosPublicosPM == 1 ){
      "<br>pm_resultado1: "  . $PesquisaPM1 = $_POST['pm_resultado1'];
      "<br>pm_resultado2: "  . $PesquisaPM2 = $_POST['pm_resultado2'];
      "<br>pm_resultado3: "  . $PesquisaPM3 = $_POST['pm_resultado3'];
    }

    include 'Cadastros/Cadastrar-Foto.php';
    
    if( !empty($_FILES['print_pesquisas_img1']['name']) ){
      include 'Uploads/Print-Pesquisas1.php';
      "<br>";
    }
    if( !empty($_FILES['print_pesquisas_img2']['name']) ){
      include 'Uploads/Print-Pesquisas2.php';
      "<br>";
    }
    if( !empty($_FILES['print_pesquisas_img3']['name']) ){
      include 'Uploads/Print-Pesquisas3.php';
      "<br>";
    }
    if( !empty($_FILES['print_pesquisas_img4']['name']) ){
      include 'Uploads/Print-Pesquisas4.php';
      "<br>";
    }
    if( !empty($_FILES['print_pesquisas_img5']['name']) ){
      include 'Uploads/Print-Pesquisas5.php';
      "<br>";
    }
    if( !empty($_FILES['print_pesquisas_img6']['name']) ){
      include 'Uploads/Print-Pesquisas6.php';
      "<br>";
    }
    if( !empty($_FILES['print_pesquisas_img7']['name']) ){
      include 'Uploads/Print-Pesquisas7.php';
      "<br>";
    }
    if( !empty($_FILES['print_pesquisas_img8']['name']) ){
      include 'Uploads/Print-Pesquisas8.php';
      "<br>";
    }
    if( !empty($_FILES['print_pesquisas_img9']['name']) ){
      include 'Uploads/Print-Pesquisas9.php';
      "<br>";
    }
    if( !empty($_FILES['print_pesquisas_img10']['name']) ){
      include 'Uploads/Print-Pesquisas10.php';
      "<br>";
    }
    if( !empty($_FILES['print_pesquisas_img11']['name']) ){
      include 'Uploads/Print-Pesquisas11.php';
      "<br>";
    }
    if( !empty($_FILES['print_pesquisas_img12']['name']) ){
      include 'Uploads/Print-Pesquisas12.php';
      "<br>";
    }

    "<br><br>Buscar Orgãos Públicos antes de cadastrar<br>";
    
    "<br><pre>" . 
    $QueryBuscarPesquisasOrgaosPublicos = "
      SELECT * FROM 
        tb_orgaos_publicos
      WHERE 
        protocolo_orgaos_publicos = '$Protocolo'
    ";
    "</pre>";
    $ExeQrBuscarPesquisasOrgaosPublicos = mysqli_query($connection, $QueryBuscarPesquisasOrgaosPublicos);
    $RowQrBuscarPesquisasOrgaosPublicos = mysqli_num_rows($ExeQrBuscarPesquisasOrgaosPublicos);
    
    if( $RowQrBuscarPesquisasOrgaosPublicos < 1 ){
      //Buscar Registro de fotos
      "<br><pre>" . 
      $QueryBuscarRegistroFotos = "
        SELECT * FROM 
          tb_orgaos_publicos_fotos
        WHERE 
          orgaos_publicos_fotos_protocolo = '$Protocolo'
      ";
      "</pre>";
      $ExeQrBuscarRegistroFotos = mysqli_query($connection, $QueryBuscarRegistroFotos);
      $RowQrBuscarRegistroFotos = mysqli_num_rows($ExeQrBuscarRegistroFotos);

      if( $RowQrBuscarRegistroFotos = 1 ){
        while( $ReturnRegistroFotos = mysqli_fetch_assoc($ExeQrBuscarRegistroFotos) ){
          "<br>Registro: " . $IdRegistroFotos = $ReturnRegistroFotos['id_orgaos_publicos_fotos'];
        }
        "<br> Cadastrar Pesquisa-Orgaos-Publicos.php";
        "<br><pre>" . 
        $QueryCadastrarPesquisaOrgaosPublicos = "
          INSERT INTO tb_orgaos_publicos(
            protocolo_orgaos_publicos,
            orgaos_publicos_fotos,
            orgaos_publicos_pc,
            boletim_pc_autentico,
            pc_resultado1,
            pc_resultado2,
            pc_resultado3,
            orgaos_publicos_pm,
            boletim_pm_autentico,
            pm_resultado1,
            pm_resultado2,
            pm_resultado3
          )VALUES(
            '$Protocolo',
            '$IdRegistroFotos',
            '$OrgaosPublicosPC',
            '$OrgaosPublicosPCAutentico',
            '$PesquisaPC1',
            '$PesquisaPC2',
            '$PesquisaPC3',
            '$OrgaosPublicosPM',
            '$OrgaosPublicosPMAutentico',
            '$PesquisaPM1',
            '$PesquisaPM2',
            '$PesquisaPM3'
          )
        ";
        "</pre>";

        $ExeQrCadastrarPesquisaOrgaosPublicos = mysqli_query($connection, $QueryCadastrarPesquisaOrgaosPublicos);

        if( $ExeQrCadastrarPesquisaOrgaosPublicos ){
          "<br>Pesquisa cadastrada, fazer update do relatório";
          include 'Update-Relatorio.php';
          "<br>Update na data";
          include 'Update-Data-Modifica-Relatorio.php';
        }else{
          echo "<br>Erro: " . mysqli_error($connection);
        }
      }

    }
  }