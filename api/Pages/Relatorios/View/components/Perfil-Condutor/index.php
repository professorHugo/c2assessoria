<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>" . 
    $QueryBuscarDadosCondutor = "
      SELECT * FROM 
        tb_condutores condutor
      INNER JOIN tb_cnh_registros cnh
        ON condutor.cnh_condutor = cnh.id_cnh
      INNER JOIN tb_tb_fotos foto1
        ON cnh.img_cnh1 = foto1.id_foto
      INNER JOIN tb_fotos foto2
        ON cnh.img_cnh2 = foto2.id_foto
      INNER JOIN tb_tipos_civil estado_civil
        ON condutor.civil_condutor = estado_civil.id_civil
      WHERE
        cnh.protocolo_cnh = '$Protocolo' &&
        dono_cnh = 'condutor'
    ";
    echo "</pre>";
    $ExeQrBuscarDadosCondutor = mysqli_query($connection, $QueryBuscarDadosCondutor);
    $RowQrBuscarDadosCondutor = mysqli_num_rows($ExeQrBuscarDadosCondutor);

    if( $RowQrBuscarDadosCondutor = 1 ){
      while ( $PerfilCondutor = mysqli_fetch_assoc($ExeQrBuscarDadosCondutor) ) {
        $NomeCondutor = $PerfilCondutor['nome_condutor'];
        $EstadoCivilCondutor = $PerfilCondutor['descricao_civil'];

        $CEPCondutor = $PerfilCondutor['cep_condutor'];
        $EnderecoCondutor = $PerfilCondutor['endereco_condutor'];
        $BairroCondutor = $PerfilCondutor['bairro_condutor'];
        $CidadeCondutor = $PerfilCondutor['cidade_condutor'];
        $EstadoCondutor = $PerfilCondutor['estado_condutor'];
        $FotoProntuarioFrente = $PerfilCondutor['img_cnh1'];
        $FotoProntuarioVerso = $PerfilCondutor['img_cnh2'];
        $FotoDocumentoFrente = $PerfilCondutor['documento_frente'];
        $FotoDocumentoVerso = $PerfilCondutor['documento_verso'];
        $DeclaracaoAssociado1 = $PerfilCondutor['declaracao1'];
        $DeclaracaoAssociado2 = $PerfilCondutor['declaracao2'];
        $DeclaracaoAssociado3 = $PerfilCondutor['declaracao3'];
      }
    }
  }