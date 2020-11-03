<a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <i class="fas fa-envelope fa-fw"></i>
  <!-- Counter - Messages -->
<?php
  $IdUsuario = $_SESSION['LoginUsuario']['id_usuario'];

  $QueryBuscarMensagens = "
      SELECT * FROM 
        tb_mensagens mensagem
      INNER JOIN tb_usuarios usuario
        ON mensagem.emissor_mensagem = usuario.id_usuario
      WHERE receptor_mensagem = '$IdUsuario'
  ";
  $ExeQrBuscarMensagens = mysqli_query($connection, $QueryBuscarMensagens);

  
  if( mysqli_num_rows($ExeQrBuscarMensagens) > 0 ){
    ?>
      <span class="badge badge-danger badge-counter">
        <?php echo mysqli_num_rows($ExeQrBuscarMensagens);?>
      </span>
    <?php
  }
?>
</a>

<?php
  if( mysqli_num_rows($ExeQrBuscarMensagens) >= 1 ){
    //Se houver mensagens
    ?>
      <!-- Dropdown - Messages -->
    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
      <h6 class="dropdown-header">
          Mensagens Recebidas
      </h6>
      <?php
        while( $Mensagens = mysqli_fetch_assoc($ExeQrBuscarMensagens) ){

          ?>
            <a class="dropdown-item d-flex align-items-center" href="#">
              <div class="dropdown-list-image mr-3">
                <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                <div class="status-indicator bg-success"></div>
              </div>
              <div class="font-weight-bold">
                <div class="text-truncate">
                  <?php echo $Mensagens['assunto_mensagem']?>
                </div>
                <div class="small text-gray-500">
                  <?php 
                    "Hoje: ".$dataAtual = date('Y-m-d H:i:s');
                    "<br>Data envio: " . $dataMensagem = date('Y-m-d H:i:s', strtotime($Mensagens['data_mensagem']));
                    "<br> diferença: " . $diferenaDatas = strtotime($dataAtual) - strtotime($dataMensagem);
                    
                    $dias = floor($diferenaDatas / (60*60*24));

                    "<br>";

                    if( $dias > 0 ){
                      echo  $Mensagens['nome_usuario'] . " - Enviado há " . $dias . " Dias";
                    }else if( $diferenaDatas >= 3599){
                      $horas = floor($diferenaDatas / (60*60));
                      echo $Mensagens['nome_usuario'] . " - Enviado há <b>$horas horas</b>";
                    }else{
                      $minutos = floor($diferenaDatas / 60);
                      echo $Mensagens['nome_usuario'] . " - Enviado há <b>$minutos minutos</b>";
                    }
                      
                  ?>
                </div>
              </div>
            </a>
            <a class="dropdown-item text-center small text-gray-500" href="#">Ver todas</a>
          <?php
        }
      ?>
      
    </div>

    <?php
  }else{
    //Caso não tenha nenhuma mensagem
  }
?>
