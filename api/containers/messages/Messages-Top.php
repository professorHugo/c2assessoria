<a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <i class="fas fa-envelope fa-fw"></i>
  <!-- Counter - Messages -->
  <?php
    if( $SysMessages == 1 ){
      $IdUsuario = $_SESSION['LoginUsuario']['id_usuario'];
      $Permissao = $_SESSION['LoginUsuario']['permissao_usuario'];

      if( $Permissao == 1 || $Permissao == 3  ){
        $QueryBuscarMensagens = "
          SELECT * FROM 
            tb_mensagens mensagem
          INNER JOIN tb_usuarios usuario
            ON mensagem.emissor_mensagem = usuario.id_usuario
          WHERE 
            emissor_mensagem = '$IdUsuario' OR emissor_mensagem
        ";
        $ExeQrBuscarMensagens = mysqli_query($connection, $QueryBuscarMensagens);
      }else{
        $QueryBuscarMensagens = "
          SELECT * FROM 
            tb_mensagens mensagem
          INNER JOIN tb_usuarios usuario
            ON mensagem.emissor_mensagem = usuario.id_usuario
          WHERE receptor_mensagem = '$IdUsuario' && mensagem.status_mensagem != '2'
        ";
        $ExeQrBuscarMensagens = mysqli_query($connection, $QueryBuscarMensagens);
      }

      

      
      if( mysqli_num_rows($ExeQrBuscarMensagens) > 0 ){
        ?>
          <span class="badge badge-danger badge-counter">
            <?php echo mysqli_num_rows($ExeQrBuscarMensagens);?>
          </span>
        <?php
      }
    }
  ?>
</a>

<?php
  if( $SysMessages == 1 ){
    //Sistema de mensagens ativado
    if( mysqli_num_rows($ExeQrBuscarMensagens) >= 1 ){
      //Se houver mensagens
      ?>
        <!-- Dropdown - Messages -->
      <div 
        class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" 
        aria-labelledby="messagesDropdown"
      >
        <div id="Container" style="float:left; max-height: 500px; overflow: auto">
          <h6 class="dropdown-header">
            Mensagens
          </h6>
          <?php
            while( $Mensagens = mysqli_fetch_assoc($ExeQrBuscarMensagens) ){
              $ProtocoloRelatorio = $Mensagens['protocolo_relatorio'];
              $StatusMensagem = $Mensagens['status_mensagem'];
              $AssuntoMensagem = $Mensagens['assunto_mensagem'];
              $EmissorMensagem = $Mensagens['emissor_mensagem'];
              $ReceptorMensagem = $Mensagens['receptor_mensagem'];
              $RespostaMensagem = $Mensagens['resposta_mensagem'];

              if( $Permissao == 1 || $Permissao == 3 ){
                //Permissão ADM ou DEV
                if( $ReceptorMensagem == $IdUsuario ){
                  $Link = "?Page=Relatorios&Preencher&Protocolo=$ProtocoloRelatorio&Abrir-Relatorio-Mensagem";
                }else{
                  if( $StatusMensagem == 1 ){
                    $Link = "?Page=Relatorios&Preencher&Protocolo=$ProtocoloRelatorio";
                  }else if( $StatusMensagem == 2 ){
                    $Link = "?Page=Relatorios&View&Protocolo=$ProtocoloRelatorio";
                  }else{
                    $Link = "?Page=Relatorios&Preencher&Protocolo=$ProtocoloRelatorio";
                  }
                }
              }else{
                if( $ReceptorMensagem == $IdUsuario ){
                  if( $StatusMensagem == 0 ){
                    $Link = "?Page=Relatorios&Preencher&Protocolo=$ProtocoloRelatorio&Abrir-Relatorio-Mensagem";
                  }else if( $StatusMensagem == 1 ){
                    $Link = "?Page=Relatorios&Preencher&Protocolo=$ProtocoloRelatorio";
                  }else{
                    $Link = "#";
                  }
                }
              }
              
              if( $ReceptorMensagem == $IdUsuario ){
                if( $StatusMensagem == 0 ){
                  $Link = "?Page=Relatorios&Preencher&Protocolo=$ProtocoloRelatorio&Abrir-Relatorio-Mensagem";
                }else{
                  $Link = "?Page=Relatorios&Preencher&Protocolo=$ProtocoloRelatorio";
                }
              }else if( $Permissao == 1 || $Permissao == 3 ){
                if( $StatusMensagem == 1 ){
                  $Link = "?Page=Relatorios&Preencher&Protocolo=$ProtocoloRelatorio";
                }else if( $StatusMensagem == 2 ){
                  $Link = "?Page=Relatorios&View&Protocolo=$ProtocoloRelatorio&Start";
                }
              }
              
    
              ?>
                <a 
                  class="dropdown-item d-flex align-items-center" 
                  href="<?php echo $Link?>"
                >
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="../img/Favicon.png" alt="">
                    <?php
                      if( $StatusMensagem == 0 ){
                        ?>
                          <div class="status-indicator" style="color: #e74a3b!important">
                            <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                          </div>
                        <?php
                      }else if( $StatusMensagem == 1 ){
                        ?>
                          <div class="status-indicator" style="color: #f6c23e!important;">
                            <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                          </div>
                        <?php
                      }else{
                        ?>
                          <div class="status-indicator" style="color: #1cc88a!important">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                          </div>
                        <?php
                      }
                    ?>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">
                      <?php 
                        if( $_SESSION['LoginUsuario']['permissao_usuario'] == 2 ){
                          echo $AssuntoMensagem;
                        }else {
                          if( $EmissorMensagem = $IdUsuario && ( $ReceptorMensagem != $IdUsuario ) ){
                            if( $StatusMensagem == 0 ){
                              echo "Aguardando sindicante";
                            }else{
                              echo $RespostaMensagem;
                            }
                          }else{
                            echo $Mensagens['assunto_mensagem'];
                            if( $Mensagens['status_mensagem'] == 0 ){
                              $Link = "?Page=Relatorios&Preencher&Protocolo=$ProtocoloRelatorio&Abrir-Relatorio-Mensagem";
                            }else{
                              $Link = "?Page=Relatorios&Preencher&Protocolo=$ProtocoloRelatorio";
                            }
                          }
                        }
                      ?>
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
                          if( $minutos > 1 ){
                            echo $Mensagens['nome_usuario'] . " - Enviado há <b>$minutos minutos</b>";
                          }elseif( $minutos < 1 ){
                            echo $Mensagens['nome_usuario'] . " - Enviado <b>agora</b>";
                          }
                        }
                          
                      ?>
                    </div>
                </div>
              </a>
              <a 
                class="dropdown-item text-center small text-gray-800" 
                href="<?php echo $Link?>">
                Abrir Relatório
              </a>
            <?php
          }
        ?>
        </div>
      </div>
  
      <?php
    }else{
      //Caso não tenha nenhuma mensagem

      ?>
        <!-- Dropdown - Messages -->
      <div 
        class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" 
        aria-labelledby="messagesDropdown"
      >
        <div id="Container" style="float:left; max-height: 500px; overflow: auto">
          <h6 class="dropdown-header">
            Mensagens
          </h6>
          
                <a 
                  class="dropdown-item d-flex align-items-center" 
                  href="#"
                >
                  <div class="font-weight-bold">
                    <div class="text-truncate">
                    Sem novas mensagens
                    </div>
                    <div class="small text-gray-500">
                      
                    </div>
                </div>
              </a>
              
            
        </div>
      </div>
  
      <?php

    }
  }else{
    //Sistema de mensagens desativado
    ?>
      <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
        <h6 class="dropdown-header">
          Sistema de Mensagens
        </h6>
        <a class="dropdown-item d-flex align-items-center" href="#">
          <div class="dropdown-list-image mr-3">
            <img class="rounded-circle" src="../img/logo.png" alt="">
            <div class="status-indicator bg-danger"></div>
          </div>
          <div class="font-weight-bold">
            <div class="text-truncate">
              Sistema indisponível
            </div>
            <div class="small text-gray-500">
              
            </div>
          </div>
        </a>
      </div>
    <?php
  }
  
?>
