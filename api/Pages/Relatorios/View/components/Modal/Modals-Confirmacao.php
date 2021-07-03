<?php
  if( isset($_GET['Start']) ){
    ?>

      <!-- Modal de Aviso -->
      <script type="text/javascript">
        $(function(){
          $("body").addClass('modal-open');
        });
      </script>

      <div 
        class="modal fade show" 
        id="modalLoggedIn" 
        data-keyboard="false"
        data-backdrop="static"
        tabindex="-1" 
        role="dialog" 
        aria-labelledby="staticBackdropLabel" 
        aria-hidden="true" 
        style="
            display: block;
            background: var(--background-opacity)
        "
      >
        <div class="modal-dialog modal-lg modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="staticBackdropLabel">Abrindo o relatório: <?php echo $Protocolo ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              
              <div class="col-md-12 text-center">
                <p>
                  Atenção: Todas as imagens poderão ser visualizadas em tamanho maior. <br>
                  Para isso, basta clicar na imagem que deseja visualizar.
                </p>
                <p>
                  Também é possível mudar os relatos do Associado e Condutor(caso esse seja diferente)
                </p>
              </div>
              </div>
            <div class="modal-footer">
              <a 
                  href="?Page=Relatorios&View&Protocolo=<?php echo $Protocolo ?>" 
                  class="btn btn-form btn-form" 
                  style="background: var(--blue);color: #fff"
              >
                  Entendi
              </a>
            </div>
          </div>
        </div>
      </div>

    <?php
  }

  // Editar-Relato-Associado  
  if( isset( $_GET['EditarRelato'] ) ){

    $CpfAssociado = $_POST['cpf_associado'];
    $RelatoNovo = $_POST['novo_relato'];
    "<br><pre>" .
    $QueryEditarRelatoAssociado = "
      UPDATE tb_associados
      SET
        relato_associado = '$RelatoNovo'
      WHERE cpf_associado = '$CpfAssociado'
    ";
    "</pre>";
    $ExeQrEditarRelatoAssociado = mysqli_query($connection, $QueryEditarRelatoAssociado);
    if( $ExeQrEditarRelatoAssociado ){
      "<br>Relato do associado editado";    
      ?>

      <!-- Modal de Confirmação Mudança Relato Associado -->
      <script type="text/javascript">
        $(function(){
          $("body").addClass('modal-open');
        });
      </script>

      <div 
        class="modal fade show" 
        id="modalLoggedIn" 
        data-keyboard="false"
        data-backdrop="static"
        tabindex="-1" 
        role="dialog" 
        aria-labelledby="staticBackdropLabel" 
        aria-hidden="true" 
        style="
          display: block;
          background: var(--background-transparent)
        "
      >
        <div class="modal-dialog modal-lg modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="staticBackdropLabel">Salvando a alteração no Relato do Condutor</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              
              <div class="col-md-12 text-center">
                <p>
                  As alterações no relato do associado foram realizadas com sucesso.
                </p>
              </div>
              </div>
            <div class="modal-footer">
              <a 
                  href="?Page=Relatorios&View&Protocolo=<?php echo $Protocolo ?>#Declaracao-Associado" 
                  class="btn btn-form btn-form" 
                  style="background: var(--blue);color: #fff"
              >
                  Voltar ao Relato do Associado
              </a>
            </div>
          </div>
        </div>
      </div>
      <?php
    }else{
    echo "<br>Erro: " . mysqli_error($connection);
    }
  }

  if( isset($_GET['EditarRelatoProprietarioLegal']) ){
    "<br>" . $RelatoNovo = $_POST['novo_relato'];
    "<br><pre>" .
    $QueryEditarRelatoProprietarioLegal = "
      UPDATE tb_proprietario_legal
      SET
        observacao_proprietario = '$RelatoNovo'
      WHERE protocolo_proprietario = '$Protocolo'
    ";
    "</pre>";
    $ExeQrEditarRelatoProprietarioLegal = mysqli_query($connection, $QueryEditarRelatoProprietarioLegal);
    if( $ExeQrEditarRelatoProprietarioLegal ){
      "<br>";
      ?>

      <!-- Modal de Confirmação Mudança Relato Associado -->
      <script type="text/javascript">
        $(function(){
          $("body").addClass('modal-open');
        });
      </script>

      <div 
        class="modal fade show" 
        id="modalLoggedIn" 
        data-keyboard="false"
        data-backdrop="static"
        tabindex="-1" 
        role="dialog" 
        aria-labelledby="staticBackdropLabel" 
        aria-hidden="true" 
        style="
          display: block;
          background: var(--background-transparent)
        "
      >
        <div class="modal-dialog modal-lg modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="staticBackdropLabel">
                Salvando a alteração no Relato do Proprietário Legal
              </h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              
              <div class="col-md-12 text-center">
                <p>
                  As alterações no relato do <b>Proprietário Legal foram realizadas com sucesso.
                </p>
              </div>
              </div>
            <div class="modal-footer">
              <a 
                  href="?Page=Relatorios&View&Protocolo=<?php echo $Protocolo ?>#Declaracao-Proprietario-Legal" 
                  class="btn btn-form btn-form" 
                  style="background: var(--blue);color: #fff"
              >
                  Voltar ao Relato do Associado
              </a>
            </div>
          </div>
        </div>
      </div>
      <?php
    }else{
      echo "<br>Erro: " . mysqli_error($connection);
    }
  }





  // Editar Relato Condutor
  if( isset( $_GET['EditarRelatoCondutor'] ) ){

    $Protocolo = $_POST['protocolo'];
    $RelatoNovo = $_POST['novo_relato'];
    "<br><pre>" .
    $QueryEditarRelatoAssociado = "
      UPDATE tb_condutores
      SET
        relato_condutor = '$RelatoNovo'
      WHERE protocolo_evento = '$Protocolo'
    ";
    "</pre>";
    $ExeQrEditarRelatoAssociado = mysqli_query($connection, $QueryEditarRelatoAssociado);
    if( $ExeQrEditarRelatoAssociado ){
      "<br>Relato do associado editado";    

      ?>

      <!-- Modal de Confirmação Mudança Relato Associado -->
      <script type="text/javascript">
        $(function(){
          $("body").addClass('modal-open');
        });
      </script>

      <div 
        class="modal fade show" 
        id="modalLoggedIn" 
        data-keyboard="false"
        data-backdrop="static"
        tabindex="-1" 
        role="dialog" 
        aria-labelledby="staticBackdropLabel" 
        aria-hidden="true" 
        style="
          display: block;
          background: var(--background-transparent)
        "
      >
        <div class="modal-dialog modal-lg modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="staticBackdropLabel">Salvando a alteração no Relato do Associado</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              
              <div class="col-md-12 text-center">
                <p>
                  As alterações no relato do associado foram realizadas com sucesso.
                </p>
              </div>
              </div>
            <div class="modal-footer">
              <a 
                  href="?Page=Relatorios&View&Protocolo=<?php echo $Protocolo ?>#Declaracao-Condutor" 
                  class="btn btn-form btn-form" 
                  style="background: var(--blue);color: #fff"
              >
                  Voltar ao Relato do Condutor
              </a>
            </div>
          </div>
        </div>
      </div>
      <?php
    }else{
      echo "<br>Erro: " . mysqli_error($connection);
    }
  }

  //Editar Dinâmica do evento
  if( isset($_GET['EditarDinamicaEvento']) ){
    $Protocolo = $_POST['protocolo'];
    $NovoDinamicaEvento = $_POST['novo_dinamica_evento'];

    "<br><pre>" . 
    $QueryUpdateDinamicaEvento = "
      UPDATE tb_relatorios
      SET
        dinamica_do_evento = '$NovoDinamicaEvento'
      WHERE protocolo_evento = '$Protocolo'
    ";
    "</pre>";
    $ExeQrUpdateDinamicaEvento = mysqli_query($connection, $QueryUpdateDinamicaEvento);
    if( $ExeQrUpdateDinamicaEvento ){
      "<br>Dinâmica do evento atualizada";
      ?>
        <script type="text/javascript">
          $(function(){
            $("body").addClass('modal-open');
          });
        </script>

      <div 
        class="modal fade show" 
        id="DinamicaAlterada" 
        data-keyboard="false"
        data-backdrop="static"
        tabindex="-1" 
        role="dialog" 
        aria-labelledby="staticBackdropLabel" 
        aria-hidden="true" 
        style="
          display: block;
          background: var(--background-transparent)
        "
      >
        <div class="modal-dialog modal-lg modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="staticBackdropLabel">Salvando a alteração na dinâmica do evento</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              
              <div class="col-md-12 text-center">
                <p>
                  A alteração na dinâmica do evento foi realizada com sucesso.
                </p>
              </div>
              </div>
            <div class="modal-footer">
              <a 
                  href="?Page=Relatorios&View&Protocolo=<?php echo $Protocolo ?>#Dinamica-Evento" 
                  class="btn btn-form btn-form" 
                  style="background: var(--blue);color: #fff"
              >
                  Voltar à Dinâmica do Evento
              </a>
            </div>
          </div>
        </div>
      </div>

      <?php
    }else{
      echo "<br>Erro: " . mysqli_error($connection);
    }
  }


  // Editar-Relato-Testemunha
  if( isset( $_GET['EditarRelatoTestemunha'] ) ){
    if( isset( $_POST['Salvar'] ) ){
      echo "<br>Protocolo: " . $Protocolo = $_GET['Protocolo'];
      echo "<br>Id Entrevistado: " . $IdEntrevistado = $_POST['id_testemunha'];
      echo "<br>Declaração: " . $NovaDeclaracao = $_POST['nova_declaracao'];
      echo "<br>Testemunha: " . $NomeEntrevistado = $_POST['nome_testemunha'];

      echo "<br><pre>" . 
      $QueryUpdateRelatoTestemunha = "
        UPDATE 
          tb_entrevistados
        SET
          observacao_entrevistado = '$NovaDeclaracao'
        WHERE id_entrevistado = '$IdEntrevistado'
      ";
      echo "</pre>";

      $ExeQrUpdateRelatoTestemunha = mysqli_query($connection, $QueryUpdateRelatoTestemunha);

      if( $ExeQrUpdateRelatoTestemunha ){
        ?>
          <script type="text/javascript">
            $(function(){
              $("body").addClass('modal-open');
            });
          </script>


          <div 
            class="modal fade show" 
            id="RelatoTestemunha<?php echo $IdEntrevistado?>" 
            data-keyboard="false"
            data-backdrop="static"
            tabindex="-1" 
            role="dialog" 
            aria-labelledby="staticBackdropLabel" 
            aria-hidden="true" 
            style="
              display: block;
              background: var(--background-transparent)
            "
          >
            <div class="modal-dialog modal-lg modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="staticBackdropLabel">
                    Salvando a alteração no relato da testemunha
                    <b><?php echo $NomeEntrevistado ?></b>
                  </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  
                  <div class="col-md-12 text-center">
                    <p>
                      A alteração no relato foi realizada com sucesso.
                    </p>
                  </div>
                  </div>
                <div class="modal-footer">
                  <a 
                      href="?Page=Relatorios&View&Protocolo=<?php echo $Protocolo ?>#Declaracao-Testemunha<?php echo $IdEntrevistado?>" 
                      class="btn btn-form btn-form" 
                      style="background: var(--blue);color: #fff"
                  >
                      Voltar à Declaração do Entrevistado
                  </a>
                </div>
              </div>
            </div>
          </div>
        <?php
      }
    }
  }

?>