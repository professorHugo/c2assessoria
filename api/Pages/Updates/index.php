<h2 class="col-12 float-left">
  <div class="float-left">Updates do sistema</div>
  <div class="float-right">
    <?php
      if( $Permissao == 3 ){
        ?>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#CadastroUpdate">
            Cadastrar &nbsp; <i class="fa fa-code-fork" aria-hidden="true"></i>
          </button>
        <?php
      }
    ?>
  </div>
</h2>

<div class="col-12" style="border-top: 2px solid #bbb; margin-bottom: 1rem;float: left;height:1px"></div>

<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br><pre>" . 
    $QueryBuscarUpdates = "
      SELECT * FROM tb_updates
      ORDER BY data_update DESC
    ";
    echo "</pre>";
    $ExeQrBuscarUpdates = mysqli_query($connection, $QueryBuscarUpdates);
    $RowQrBuscarUpdates = mysqli_num_rows($ExeQrBuscarUpdates);

    if( $RowQrBuscarUpdates > 0 ){
      include 'Mostrar-Updates.php';
    }else{
      echo "<br>Não tem updates para exibir";
    }
  }else{
    //PROD
    "<br><pre>" . 
    $QueryBuscarUpdates = "
      SELECT * FROM tb_updates
      ORDER BY data_update DESC
    ";
    "</pre>";
    $ExeQrBuscarUpdates = mysqli_query($connection, $QueryBuscarUpdates);
    $RowQrBuscarUpdates = mysqli_num_rows($ExeQrBuscarUpdates);

    if( $RowQrBuscarUpdates > 0 ){
      include 'Mostrar-Updates.php';
    }else{
      echo "<br>Não tem updates para exibir";
    }
  }

  
  if( isset( $_GET['Cadastrar'] ) ){
    if( isset( $_POST['Cadastro'] ) ){
      echo "<br>Título: " . $TituloUpdate = mysqli_real_escape_string($connection, $_POST['titulo_update']);
      echo "<br>Data: " . $DataUpdate = date('Y-m-d', strtotime($_POST['data_update']));
      echo "<br>Hora: " . $HorarioUpdate = $_POST['hora_update'];
      echo "<br>Texto: " . $TextoUpdate = mysqli_real_escape_string($connection, $_POST['text_update']);
      echo "<br>Data Concatenada: " . $DataUpdate2 = $DataUpdate . " " . $HorarioUpdate;

      echo "<br><pre>" . 
      $QueryBuscarUpdates2 = "
        SELECT * FROM tb_updates
        WHERE 
          data_update = '$DataUpdate' && 
          titulo_update = '$TituloUpdate' &&
          texto_update = '$TextoUpdate'
      ";
      echo "</pre>";

      $ExeQrBuscarUpdates2 = mysqli_query($connection, $QueryBuscarUpdates2);
      $RowQrBuscarUpdates2 = mysqli_num_rows($ExeQrBuscarUpdates2);

      if( $RowQrBuscarUpdates2 < 1 ){
        echo "<br>Cadastrar o update";
        echo "<br><pre>" . 
        $QueryCadastrarUpdate = "
          INSERT INTO tb_updates(
            data_update,
            titulo_update,
            texto_update
          )VALUES(
            '$DataUpdate2',
            '$TituloUpdate',
            '$TextoUpdate'
          )
        ";
        echo "</pre>";
        $ExeQrCadastrarUpdate = mysqli_query($connection, $QueryCadastrarUpdate);
        if( $ExeQrCadastrarUpdate ){
          echo "<br> Update cadastrado com sucesso!";
          echo '
            <a 
              href="?Page=Updates" 
              class="btn btn-form btn-form" 
              style="background: var(--blue);color: #fff"
            >
              Voltar
            </a>
        ';
        }
      }else{
        echo "<br>Update já cadastrado";
      }

    }
  }