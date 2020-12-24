<?php
  if( $SysMode == 1 ){
    //DEV
    //Buscar Testemunhas
    echo $IdEntrevistado = $_GET['Entrevistado'];
    echo "<br><pre>" . 
    $QueryBuscarTestemunhas = "
      SELECT * FROM tb_entrevistados
      WHERE 
        protocolo_entrevistados = '$Protocolo' &&
        id_entrevistado = '$IdEntrevistado'
    ";
    echo "</pre>";
    $ExeQrBuscarTestemunhas = mysqli_query($connection, $QueryBuscarTestemunhas);
    while( $Testemunha = mysqli_fetch_assoc($ExeQrBuscarTestemunhas) ){
      $IdEntrevistado = $Testemunha['id_entrevistado'];
      $NomeEntrevistado = $Testemunha['nome_entrevistado'];
      $Relacionamento = $Testemunha['relacionamento_entrevistado'];
      $TipoEntrevistado = $Testemunha['tipo_entrevistado'];
      $TestemunhaEntrevistado = $Testemunha['testemunha_entrevistado'];
      $TelefoneEntrevistado = $Testemunha['telefone_entrevistado'];
      $CEPEntrevistado = $Testemunha['cep_entrevistado'];
      $EnderecoEntrevistado = $Testemunha['endereco_entrevistado'];
      $NumeroEntrevistado = $Testemunha['numero_end_entrevistado'];
      $BairroEntrevistado = $Testemunha['bairro_entrevistado'];
      $CidadeEntrevistado = $Testemunha['cidade_entrevistado'];
      $UFEntrevistado = $Testemunha['estado_entrevistado'];
      $ObsEntrevistado = $Testemunha['observacao_entrevistado'];
      $InfoSalva = $Testemunha['informacao_salva'];

      ?>
      <form 
        action="
          ?Page=Relatorios&Preencher&Protocolo=<?php echo $Protocolo?>&Content=Convivio-Condutor&SalvarEntrevistado=<?php echo $IdEntrevistado?>" 
        method="post" enctype="multipart/form-data"
        style="width: 100%"
        id="SalvarEntrevistado"
        >
          <?php include 'Dados-Associado.php' ?>
          <input type="hidden" name="testemunha_entrevistado" value="<?php echo $TestemunhaEntrevistado?>">
          <div class="col-12 row form-group float-left table-bordered" 
            style="color:#333; margin-bottom:1rem;padding: 1rem"
          >
            <!-- Nome do Entevistado -->
            <label 
              for="nome_entrevistado" 
              class="col-form-label col-form-label-lg col-12"
            >Nome do Entrevistado: </label>
            <div class="col-12">
              <input type="text" 
                name="nome_entrevistado" 
                id="nome_entrevistado" 
                class="form-control form-control-lg"
                value="<?php echo $NomeEntrevistado?>"
                required
              >
            </div>

            <!-- Telefone do Entevistado -->
            <label 
              for="telefone_entrevistado" 
              class="col-form-label col-form-label-lg col-12"
            >Telefone do Entrevistado: </label>
            <div class="col-12">
              <input type="number" 
                name="telefone_entrevistado" 
                id="telefone_entrevistado" 
                class="form-control form-control-lg"
                value="<?php echo $TelefoneEntrevistado?>"
                required
              >
            </div>

            <!-- Relacionamento do Entevistado -->
            <label 
              for="relacionamento_entrevistado" 
              class="col-form-label col-form-label-lg col-12"
            >Relação do Entrevistado: </label>
            <div class="col-12">
              <input type="text" 
                name="relacionamento_entrevistado" 
                id="relacionamento_entrevistado" 
                class="form-control form-control-lg"
                value="<?php echo $Relacionamento?>"
                placeholder="Familiar, Vizinho, Conhecido, etc"
                required
              >
            </div>

            <?php 
              if( $TipoEntrevistado == 1 ){
                include 'IMG/Documentos.php';
              }
            ?>

            <div class="col-12" style="min-height: 1px; margin-top:1rem;border-bottom: 1px solid #aaa"></div>
            <!-- Declaracao do Entevistado -->
            <label 
              for="observacao_entrevistado" 
              class="col-form-label col-form-label-lg col-12"
            >Resumo da Declaração: </label>
            <div class="col-12">
              <textarea 
                rows="5"
                name="observacao_entrevistado" 
                id="observacao_entrevistado" 
                class="form-control form-control-lg"
                placeholder="Digite o resumo da declaração do entrevistado, conforme observou na entrevista."
                required
              ><?php echo $ObsEntrevistado?></textarea>
            </div>

            <?php 
              if( $TipoEntrevistado == 1 ){
                include 'IMG/Declaracao.php';
              }
            ?>

            <div class="col-12" style="margin-top: 1rem"></div>
            <hr class="col-11">

            <?php
              if( $InfoSalva == "Sim" ){
                //Não mostrar os botões, apenas voltar
                ?>
                  <a 
                    href="?Page=Relatorios&Preencher&Protocolo=<?php echo $Protocolo?>&Content=Convivio-Condutor"
                    class="btn btn-outline-danger btn-lg btn-block"
                  >
                    Voltar
                  </a>
                <?php
              }else{
                ?>
                      <div class="form-group row col-12">
                        <div class="col-6">
                          <a
                            href="?Page=Relatorios&Preencher&Protocolo=<?php echo $Protocolo?>&Content=Convivio-Condutor"
                            class="btn btn-outline-danger btn-lg btn-block"
                          >
                            Voltar
                          </a>
                        </div>

                        <div class="col-6">
                          <button
                            type="submit"
                            name="Salvar"
                            class="btn btn-outline-success btn-lg btn-block"
                          >
                            Salvar
                          </button>
                        </div>
                      </div>
                <?php
              }
            ?>
          </div>

          
        </form>
      <?php
    }
  }else{

    //PROD


    //Buscar Testemunhas
     $IdEntrevistado = $_GET['Entrevistado'];
     "<br><pre>" . 
    $QueryBuscarTestemunhas = "
      SELECT * FROM tb_entrevistados
      WHERE 
        protocolo_entrevistados = '$Protocolo' &&
        id_entrevistado = '$IdEntrevistado'
    ";
     "</pre>";
    $ExeQrBuscarTestemunhas = mysqli_query($connection, $QueryBuscarTestemunhas);
    while( $Testemunha = mysqli_fetch_assoc($ExeQrBuscarTestemunhas) ){
      $IdEntrevistado = $Testemunha['id_entrevistado'];
      $NomeEntrevistado = $Testemunha['nome_entrevistado'];
      $Relacionamento = $Testemunha['relacionamento_entrevistado'];
      $TipoEntrevistado = $Testemunha['tipo_entrevistado'];
      $TestemunhaEntrevistado = $Testemunha['testemunha_entrevistado'];
      $TelefoneEntrevistado = $Testemunha['telefone_entrevistado'];
      $CEPEntrevistado = $Testemunha['cep_entrevistado'];
      $EnderecoEntrevistado = $Testemunha['endereco_entrevistado'];
      $NumeroEntrevistado = $Testemunha['numero_end_entrevistado'];
      $BairroEntrevistado = $Testemunha['bairro_entrevistado'];
      $CidadeEntrevistado = $Testemunha['cidade_entrevistado'];
      $UFEntrevistado = $Testemunha['estado_entrevistado'];
      $ObsEntrevistado = $Testemunha['observacao_entrevistado'];
      $InfoSalva = $Testemunha['informacao_salva'];

      ?>
      <form 
        action="
          ?Page=Relatorios&Preencher&Protocolo=<?php echo $Protocolo?>&Content=Convivio-Condutor&SalvarEntrevistado=<?php echo $IdEntrevistado?>" 
        method="post" enctype="multipart/form-data"
        style="width: 100%"
        id="SalvarEntrevistado"
        >
          <?php include 'Dados-Associado.php' ?>
          <input type="hidden" name="testemunha_entrevistado" value="<?php echo $TestemunhaEntrevistado?>">
          <div class="col-12 row form-group float-left table-bordered" 
            style="color:#333; margin-bottom:1rem;padding: 1rem"
          >
            <!-- Nome do Entevistado -->
            <label 
              for="nome_entrevistado" 
              class="col-form-label col-form-label-lg col-12"
            >Nome do Entrevistado: </label>
            <div class="col-12">
              <input type="text" 
                name="nome_entrevistado" 
                id="nome_entrevistado" 
                class="form-control form-control-lg"
                value="<?php echo $NomeEntrevistado?>"
                required
              >
            </div>

            <!-- Telefone do Entevistado -->
            <label 
              for="telefone_entrevistado" 
              class="col-form-label col-form-label-lg col-12"
            >Telefone do Entrevistado: </label>
            <div class="col-12">
              <input type="number" 
                name="telefone_entrevistado" 
                id="telefone_entrevistado" 
                class="form-control form-control-lg"
                value="<?php echo $TelefoneEntrevistado?>"
                required
              >
            </div>

            <!-- Relacionamento do Entevistado -->
            <label 
              for="relacionamento_entrevistado" 
              class="col-form-label col-form-label-lg col-12"
            >Relação do Entrevistado: </label>
            <div class="col-12">
              <input type="text" 
                name="relacionamento_entrevistado" 
                id="relacionamento_entrevistado" 
                class="form-control form-control-lg"
                value="<?php echo $Relacionamento?>"
                placeholder="Familiar, Vizinho, Conhecido, etc"
                required
              >
            </div>

            <?php 
              if( $TipoEntrevistado == 1 ){
                include 'IMG/Documentos.php';
              }
            ?>

            <div class="col-12" style="min-height: 1px; margin-top:1rem;border-bottom: 1px solid #aaa"></div>
            <!-- Declaracao do Entevistado -->
            <label 
              for="observacao_entrevistado" 
              class="col-form-label col-form-label-lg col-12"
            >Resumo da Declaração: </label>
            <div class="col-12">
              <textarea 
                rows="5"
                name="observacao_entrevistado" 
                id="observacao_entrevistado" 
                class="form-control form-control-lg"
                placeholder="Digite o resumo da declaração do entrevistado, conforme observou na entrevista."
                required
              ><?php echo $ObsEntrevistado?></textarea>
            </div>

            <?php 
              if( $TipoEntrevistado == 1 ){
                include 'IMG/Declaracao.php';
              }
            ?>

            <div class="col-12" style="margin-top: 1rem"></div>
            <hr class="col-11">

            <?php
              if( $InfoSalva == "Sim" ){
                //Não mostrar os botões, apenas voltar
                ?>
                  <a 
                    href="?Page=Relatorios&Preencher&Protocolo=<?php echo $Protocolo?>&Content=Convivio-Condutor"
                    class="btn btn-outline-danger btn-lg btn-block"
                  >
                    Voltar
                  </a>
                <?php
              }else{
                ?>
                      <div class="form-group row col-12">
                        <div class="col-6">
                          <a
                            href="?Page=Relatorios&Preencher&Protocolo=<?php echo $Protocolo?>&Content=Convivio-Condutor"
                            class="btn btn-outline-danger btn-lg btn-block"
                          >
                            Voltar
                          </a>
                        </div>

                        <div class="col-6">
                          <button
                            type="submit"
                            name="Salvar"
                            class="btn btn-outline-success btn-lg btn-block"
                          >
                            Salvar
                          </button>
                        </div>
                      </div>
                <?php
              }
            ?>
          </div>

          
        </form>
      <?php
    }
  }