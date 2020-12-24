<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br><br>Buscar Entrevistados no local";
    echo "<br><pre>" . 
    $QueryBuscarEntrevistadosLocal = "
      SELECT * FROM 
        tb_local_evento
      WHERE 
        protocolo_local_evento = '$Protocolo' &&
        testemunha_entrevistado = 0
    ";
    echo "</pre>";
    $ExeQrBuscarEntrevistadosLocal = mysqli_query($connection, $QueryBuscarEntrevistadosLocal);
    echo "<br><br>Registros: " . $RowQrBuscarEntrevistadosLocal = mysqli_num_rows($ExeQrBuscarEntrevistadosLocal);

    if( $RowQrBuscarEntrevistadosLocal > 0 ){
      echo "<br><br>Mostrar Pessoas sabedoras............:";
      ?>

        <form 
          action="
            ?Page=Relatorios&Preencher&Protocolo=<?php echo $Protocolo?>&Content=Pesquisas-No-Local&Salvar-Sabedores"
          method="post" enctype="multipart/form-data"
          style="width: 100%"
          id="SalvarEntrevistado"
        >
          <?php
            if( $SysMode == 1 ){
              echo "<br><pre>" .
              $QueryBuscarLocalEvento = "
                SELECT * FROM tb_local_evento
                WHERE protocolo_local_evento = '$Protocolo'
              ";
              echo "</pre>";
            }else{
              "<br><pre>" .
              $QueryBuscarLocalEvento = "
                SELECT * FROM tb_local_evento
                WHERE protocolo_local_evento = '$Protocolo'
              ";
              "</pre>";
            }
            
            $ExeQrBuscarLocalEvento = mysqli_query($connection, $QueryBuscarLocalEvento);
            $RowQrBuscarLocalEvento = mysqli_num_rows($ExeQrBuscarLocalEvento);
            include 'Variaveis-Confirmacao.php';
            if( $RowQrBuscarLocalEvento = 1 ){
              while($LocalEvento = mysqli_fetch_assoc($ExeQrBuscarLocalEvento)) {
                $confirmacao1_local = $LocalEvento['confirmacao1_local'];
                "<br>";
                $confirmacao1_1 = "Confirmam a versão, ratificam os informes";
                $confirmacao1_2 = "Informações divergentes";

                $confirmacao2_local = $LocalEvento['confirmacao2_local'];
                "<br>";
                $confirmacao2_1 = "Não houve apontamento de embriaguez/entorpecentes";
                $confirmacao2_2 = "Houve apontamento de embriaguez/entorpecentes";

                $confirmacao3_local = $LocalEvento['confirmacao3_local'];
                "<br>";
                $confirmacao3_1 = "Apontamento de Troca de condutor";

                $confirmacao4_local = $LocalEvento['confirmacao4_local'];
                "<br>";
                $confirmacao4_1 = "Apontamento de velocidade incompatível";

                $confirmacao5_local = $LocalEvento['confirmacao5_local'];
                "<br>";
                $confirmacao6_local = $LocalEvento['confirmacao6_local'];
                "<br>";

                
              }
            }
          ?>
          <div class="form-group row" style="margin-top: 3rem">
            <h5>Pessoas Sabedoras: </h5>
            <div class="col-12"
              style="
                border-top: 2px solid #ddd;
                margin-bottom: 1.5rem;
                float: left;
              "
            ></div>

            <div class="custom-control custom-switch">

              <div class="col float-left">
                <input
                  type="radio"
                  name="confirmacao1_local"
                  id="confirmacao1_local"
                  value="Confirmam a versão, ratificam os informes"
                  class="custom-control-input"
                  <?php if( $confirmacao1_local == $confirmacao1_1 ){ echo "checked";}else{echo "";}?>
                >
                <label for="confirmacao1_local" class="custom-control-label"
                >Confirmam a versão, ratificam os informes</label>
              </div>

              <div class="col float-left">
                <input
                  type="radio"
                  name="confirmacao1_local"
                  id="confirmacao1_local_diverge"
                  value="Informações divergentes"
                  class="custom-control-input"
                  <?php if( $confirmacao1_local == $confirmacao1_2 ){ echo "checked";}?>
                >
                <label for="confirmacao1_local_diverge" class="custom-control-label"
                >Informações Divergentes</label>
              </div>

              <div class="col float-left">
                <input
                  type="radio"
                  name="confirmacao2_local"
                  id="confirmacao2_local"
                  value="Não houve apontamento de embriaguez/entorpecentes"
                  class="custom-control-input"
                  <?php if( $confirmacao2_local == $confirmacao2_1 ){ echo "checked";}else{echo "";}?>
                >
                <label for="confirmacao2_local" class="custom-control-label"
                >Não houve apontamento de embriaguez/entorpecentes</label>
              </div>

              <div class="col float-left">
                <input
                  type="radio"
                  name="confirmacao2_local"
                  id="confirmacao2_local_diverge"
                  value="Houve apontamento de embriaguez/entorpecentes"
                  class="custom-control-input"
                  <?php if( $confirmacao2_local == $confirmacao2_2 ){ echo "checked";}else{echo "";}?>
                >
                <label for="confirmacao2_local_diverge" class="custom-control-label"
                >Houve apontamento de embriaguez/entorpecentes</label>
              </div>

              <div class="col float-left">
                <input
                  type="checkbox"
                  name="confirmacao3_local"
                  id="confirmacao3_local"
                  value="Apontamento de Troca de condutor"
                  class="custom-control-input"
                  <?php if( $confirmacao3_local == $confirmacao3_1 ){ echo "checked";}else{echo "";}?>
                >
                <label for="confirmacao3_local" class="custom-control-label"
                >Apontamento de Troca de condutor</label>
              </div>

              <div class="col float-left">
                <input
                  type="checkbox"
                  name="confirmacao4_local"
                  id="confirmacao4_local"
                  value="Apontamento de velocidade incompatível"
                  class="custom-control-input"
                  <?php if( $confirmacao4_local == $confirmacao4_1 ){ echo "checked";}else{echo "";}?>
                >
                <label for="confirmacao4_local" class="custom-control-label"
                >Apontamento de velocidade incompatível</label>
              </div>


            </div>
          </div>

          <div class="clearfix" style="margin: 1rem 0"></div>
          <hr>
          
          <div class="form-group row">
            <div class="col-6">
              <a 
                href="?Page=Relatorios&Preencher&Protocolo=<?php echo $Protocolo?>" 
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
                name="Salvar"
              >
                Salvar
              </button>
            </div>
          </div>
        </form>

      <?php
    }else{
      echo "<br><br>NÃO MOSTRAR PESSOAS SABEDORAS............:";
    }
  }else{

    //PROD



    "<br><br>Buscar Entrevistados no local";
    "<br><pre>" . 
    $QueryBuscarEntrevistadosLocal = "
      SELECT * FROM 
        tb_local_evento
      WHERE 
        protocolo_local_evento = '$Protocolo' &&
        testemunha_entrevistado = 0
    ";
    "</pre>";
    $ExeQrBuscarEntrevistadosLocal = mysqli_query($connection, $QueryBuscarEntrevistadosLocal);
    $RowQrBuscarEntrevistadosLocal = mysqli_num_rows($ExeQrBuscarEntrevistadosLocal);

    if( $RowQrBuscarEntrevistadosLocal = 1 ){
      "<br><br>Mostrar Pessoas sabedoras............:";
      ?>

        <form 
          action="
            ?Page=Relatorios&Preencher&Protocolo=<?php echo $Protocolo?>&Content=Pesquisas-No-Local&Salvar-Sabedores"
          method="post" enctype="multipart/form-data"
          style="width: 100%"
          id="SalvarEntrevistado"
        >
          <?php
            if( $SysMode == 1 ){
              echo "<br><pre>" .
              $QueryBuscarLocalEvento = "
                SELECT * FROM tb_local_evento
                WHERE protocolo_local_evento = '$Protocolo'
              ";
              echo "</pre>";
            }else{
              "<br><pre>" .
              $QueryBuscarLocalEvento = "
                SELECT * FROM tb_local_evento
                WHERE protocolo_local_evento = '$Protocolo'
              ";
              "</pre>";
            }
            
            $ExeQrBuscarLocalEvento = mysqli_query($connection, $QueryBuscarLocalEvento);
            $RowQrBuscarLocalEvento = mysqli_num_rows($ExeQrBuscarLocalEvento);
            include 'Variaveis-Confirmacao.php';
            if( $RowQrBuscarLocalEvento = 1 ){
            while($LocalEvento = mysqli_fetch_assoc($ExeQrBuscarLocalEvento)) {
              $confirmacao1_local = $LocalEvento['confirmacao1_local'];
              "<br>";
              $confirmacao1_1 = "Confirmam a versão, ratificam os informes";
              $confirmacao1_2 = "Informações divergentes";

              $confirmacao2_local = $LocalEvento['confirmacao2_local'];
              "<br>";
              $confirmacao2_1 = "Não houve apontamento de embriaguez/entorpecentes";
              $confirmacao2_2 = "Houve apontamento de embriaguez/entorpecentes";

              $confirmacao3_local = $LocalEvento['confirmacao3_local'];
              "<br>";
              $confirmacao3_1 = "Apontamento de Troca de condutor";

              $confirmacao4_local = $LocalEvento['confirmacao4_local'];
              "<br>";
              $confirmacao4_1 = "Apontamento de velocidade incompatível";

              $confirmacao5_local = $LocalEvento['confirmacao5_local'];
              "<br>";
              $confirmacao6_local = $LocalEvento['confirmacao6_local'];
              "<br>";

              
            }
            }
          ?>
          <div class="form-group row" style="margin-top: 3rem">
            <h5>Pessoas Sabedoras: </h5>
            <div class="col-12"
              style="
                border-top: 2px solid #ddd;
                margin-bottom: 1.5rem;
                float: left;
              "
            ></div>

            <div class="custom-control custom-switch">

              <div class="col float-left">
                <input
                  type="radio"
                  name="confirmacao1_local"
                  id="confirmacao1_local"
                  value="Confirmam a versão, ratificam os informes"
                  class="custom-control-input"
                  <?php if( $confirmacao1_local == $confirmacao1_1 ){ echo "checked";}else{echo "";}?>
                >
                <label for="confirmacao1_local" class="custom-control-label"
                >Confirmam a versão, ratificam os informes</label>
              </div>

              <div class="col float-left">
                <input
                  type="radio"
                  name="confirmacao1_local"
                  id="confirmacao1_local_diverge"
                  value="Informações divergentes"
                  class="custom-control-input"
                  <?php if( $confirmacao1_local == $confirmacao1_2 ){ echo "checked";}?>
                >
                <label for="confirmacao1_local_diverge" class="custom-control-label"
                >Informações Divergentes</label>
              </div>

              <div class="col float-left">
                <input
                  type="radio"
                  name="confirmacao2_local"
                  id="confirmacao2_local"
                  value="Não houve apontamento de embriaguez/entorpecentes"
                  class="custom-control-input"
                  <?php if( $confirmacao2_local == $confirmacao2_1 ){ echo "checked";}else{echo "";}?>
                >
                <label for="confirmacao2_local" class="custom-control-label"
                >Não houve apontamento de embriaguez/entorpecentes</label>
              </div>

              <div class="col float-left">
                <input
                  type="radio"
                  name="confirmacao2_local"
                  id="confirmacao2_local_diverge"
                  value="Houve apontamento de embriaguez/entorpecentes"
                  class="custom-control-input"
                  <?php if( $confirmacao2_local == $confirmacao2_2 ){ echo "checked";}else{echo "";}?>
                >
                <label for="confirmacao2_local_diverge" class="custom-control-label"
                >Houve apontamento de embriaguez/entorpecentes</label>
              </div>

              <div class="col float-left">
                <input
                  type="checkbox"
                  name="confirmacao3_local"
                  id="confirmacao3_local"
                  value="Apontamento de Troca de condutor"
                  class="custom-control-input"
                  <?php if( $confirmacao3_local == $confirmacao3_1 ){ echo "checked";}else{echo "";}?>
                >
                <label for="confirmacao3_local" class="custom-control-label"
                >Apontamento de Troca de condutor</label>
              </div>

              <div class="col float-left">
                <input
                  type="checkbox"
                  name="confirmacao4_local"
                  id="confirmacao4_local"
                  value="Apontamento de velocidade incompatível"
                  class="custom-control-input"
                  <?php if( $confirmacao4_local == $confirmacao4_1 ){ echo "checked";}else{echo "";}?>
                >
                <label for="confirmacao4_local" class="custom-control-label"
                >Apontamento de velocidade incompatível</label>
              </div>


            </div>
          </div>

          <div class="clearfix" style="margin: 1rem 0"></div>
          <hr>
          
          <div class="form-group row">
            <div class="col-6">
              <a 
                href="?Page=Relatorios&Preencher&Protocolo=<?php echo $Protocolo?>" 
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
                name="Salvar"
              >
                Salvar
              </button>
            </div>
          </div>
        </form>

      <?php
    }else{
      echo "<br><br>NÃO MOSTRAR PESSOAS SABEDORAS............:";
    }
  }
