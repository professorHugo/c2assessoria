<?php
  if( $SysMode == 1 ){
    //DEV
    echo "<br><br>Buscar Sabedores do convivio do associado";
    echo "<br><pre>" . 
    $QueryBuscarSabedoresConvivio = "
      SELECT * FROM
        tb_entrevistados_convivio
      WHERE
        protocolo_sabedores = '$Protocolo' &&
        representante_sabedor = '2'
    ";
    echo "</pre>";
    $ExeQrBuscarSabedoresConvivio = mysqli_query($connection, $QueryBuscarSabedoresConvivio);
    echo "<br><br> Registros: " . 
    $RowQrBuscarSabedoresConvivio = mysqli_num_rows($ExeQrBuscarSabedoresConvivio);

    if( $RowQrBuscarSabedoresConvivio > 0 ){
      echo "<br><br>Mostrar Pessoas Sabedoras do convívio.........:";
      ?>

        <form 
          action="
            ?Page=Relatorios&Preencher&Protocolo=<?php echo $Protocolo?>&Content=Convivio-Condutor&Salvar-Sabedores"
          method="post" enctype="multipart/form-data"
          style="width: 100%"
          id="SalvarSabedores"
        >
          <?php
            if( $SysMode == 1 ){
              echo "<br><pre>" .
              $QueryBuscarLocalEvento = "
                SELECT * FROM tb_entrevistados_convivio
                WHERE protocolo_sabedores = '$Protocolo' && representante_sabedor = 2
              ";
              echo "</pre>";
            }else{
              "<br><pre>" .
              $QueryBuscarLocalEvento = "
                SELECT * FROM tb_entrevistados_convivio
                WHERE protocolo_sabedores = '$Protocolo' && representante_sabedor = 2
              ";
              "</pre>";
            }
            
            $ExeQrBuscarLocalEvento = mysqli_query($connection, $QueryBuscarLocalEvento);
            $RowQrBuscarLocalEvento = mysqli_num_rows($ExeQrBuscarLocalEvento);
            include 'Variaveis-Confirmacao.php';
            if( $RowQrBuscarLocalEvento = 1 ){
              while($LocalEvento = mysqli_fetch_assoc($ExeQrBuscarLocalEvento)) {
                $confirmacao1_sabedores = $LocalEvento['confirmacao1_sabedores'];
                "<br>";
                $confirmacao1_1 = "Confirmam a versão, ratificam os informes";
                "<br>";
                $confirmacao1_2 = "Há Informações divergentes";
                "<br>";
                "<br>";

                $confirmacao2_sabedores = $LocalEvento['confirmacao2_sabedores'];
                "<br>";
                $confirmacao2_1 = "Não houve apontamento de embriaguez/entorpecentes";
                "<br>";
                $confirmacao2_2 = "Houve apontamento de embriaguez/entorpecentes";
                "<br>";
                "<br>";

                $confirmacao3_sabedores = $LocalEvento['confirmacao3_sabedores'];
                "<br>";
                $confirmacao3_1 = "Apontamento de Troca de condutor";
                "<br>";
                $confirmacao3_2 = "Não houve troca de condutores";
                "<br>";
                "<br>";

                $confirmacao4_sabedores = $LocalEvento['confirmacao4_sabedores'];
                "<br>";
                $confirmacao4_1 = "Apontamento de velocidade incompatível";
                "<br>";
                $confirmacao4_2 = "Não há Apontamento de velocidade incompatível";
                "<br>";

                $confirmacao5_sabedores = $LocalEvento['confirmacao5_sabedores'];
                "<br>";
                $confirmacao5_1 = "O veículo conhecido em bom estado";
                "<br>";
                $confirmacao5_2 = "O veículo conhecido não está em bom estado";
                "<br>";

                $confirmacao6_sabedores = $LocalEvento['confirmacao6_sabedores'];
                "<br>";
                $confirmacao6_1 = "Veículo pernoita na garagem";
                "<br>";
                $confirmacao6_2 = "Veículo pernoita em via pública";
                "<br>";

                $confirmacao7_sabedores = $LocalEvento['confirmacao7_sabedores'];
                "<br>";
                $confirmacao7_1 = "Conhecido como pessoa de boa índole";
                "<br>";
                $confirmacao7_2 = "Não é conhecido";
                "<br>";

                $confirmacao8_sabedores = $LocalEvento['confirmacao8_sabedores'];
                "<br>";
                $confirmacao8_1 = "Conduta duvidosa";
                "<br>";
                $confirmacao8_2 = "Boa conduta";

                
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
                  name="confirmacao1_sabedores"
                  id="confirmacao1_sabedores"
                  value="Confirmam a versão, ratificam os informes"
                  class="custom-control-input"
                  <?php if( $confirmacao1_sabedores == $confirmacao1_1 ){ echo "checked";}else{echo "";}?>
                >
                <label for="confirmacao1_sabedores" class="custom-control-label"
                >Confirmam a versão, ratificam os informes</label>
              </div>

              <div class="col float-left">
                <input
                  type="radio"
                  name="confirmacao1_sabedores"
                  id="confirmacao1_sabedores_diverge"
                  value="Há Informações divergentes"
                  class="custom-control-input"
                  <?php if( $confirmacao1_sabedores == $confirmacao1_2 ){ echo "checked";}?>
                >
                <label for="confirmacao1_sabedores_diverge" class="custom-control-label"
                >Há Informações divergentes</label>
              </div>

              <div class="col float-left">
                <input
                  type="radio"
                  name="confirmacao2_sabedores"
                  id="confirmacao2_sabedores"
                  value="Não houve apontamento de embriaguez/entorpecentes"
                  class="custom-control-input"
                  <?php if( $confirmacao2_sabedores == $confirmacao2_1 ){ echo "checked";}else{echo "";}?>
                >
                <label for="confirmacao2_sabedores" class="custom-control-label"
                >Não houve apontamento de embriaguez/entorpecentes</label>
              </div>

              <div class="col float-left">
                <input
                  type="radio"
                  name="confirmacao2_sabedores"
                  id="confirmacao2_sabedores_diverge"
                  value="Houve apontamento de embriaguez/entorpecentes"
                  class="custom-control-input"
                  <?php if( $confirmacao2_sabedores == $confirmacao2_2 ){ echo "checked";}else{echo "";}?>
                >
                <label for="confirmacao2_sabedores_diverge" class="custom-control-label"
                >Houve apontamento de embriaguez/entorpecentes</label>
              </div>

              <div class="col float-left">
                <input
                  type="radio"
                  name="confirmacao3_sabedores"
                  id="confirmacao3_sabedores"
                  value="Apontamento de Troca de condutor"
                  class="custom-control-input"
                  <?php if( $confirmacao3_sabedores == $confirmacao3_1 ){ echo "checked";}else{echo "";}?>
                >
                <label for="confirmacao3_sabedores" class="custom-control-label"
                >Apontamento de Troca de condutor</label>
              </div>

              <div class="col float-left">
                <input
                  type="radio"
                  name="confirmacao3_sabedores"
                  id="confirmacao3_sabedores_divergente"
                  value="Não houve troca de condutores"
                  class="custom-control-input"
                  <?php if( $confirmacao3_sabedores == $confirmacao3_2 ){ echo "checked";}else{echo "";}?>
                >
                <label for="confirmacao3_sabedores_divergente" class="custom-control-label"
                >Não houve troca de condutores</label>
              </div>

              <div class="col float-left">
                <input
                  type="radio"
                  name="confirmacao4_sabedores"
                  id="confirmacao4_sabedores"
                  value="Apontamento de velocidade incompatível"
                  class="custom-control-input"
                  <?php if( $confirmacao4_sabedores == $confirmacao4_1 ){ echo "checked";}else{echo "";}?>
                >
                <label for="confirmacao4_sabedores" class="custom-control-label"
                >Apontamento de velocidade incompatível</label>
              </div>

              <div class="col float-left">
                <input
                  type="radio"
                  name="confirmacao4_sabedores"
                  id="confirmacao4_sabedores_divergente"
                  value="Não há Apontamento de velocidade incompatível"
                  class="custom-control-input"
                  <?php if( $confirmacao4_sabedores == $confirmacao4_2 ){ echo "checked";}else{echo "";}?>
                >
                <label for="confirmacao4_sabedores_divergente" class="custom-control-label"
                >Não há Apontamento de velocidade incompatível</label>
              </div>
              






              <div class="col float-left">
                <input
                  type="radio"
                  name="confirmacao5_sabedores"
                  id="confirmacao5_sabedores"
                  value="O veículo conhecido em bom estado"
                  class="custom-control-input"
                  <?php if( $confirmacao5_sabedores == $confirmacao5_1 ){ echo "checked";}else{echo "";}?>
                >
                <label for="confirmacao5_sabedores" class="custom-control-label"
                >O veículo conhecido em bom estado</label>
              </div>

              <div class="col float-left">
                <input
                  type="radio"
                  name="confirmacao5_sabedores"
                  id="confirmacao5_sabedores_diverge"
                  value="O veículo conhecido não está em bom estado"
                  class="custom-control-input"
                  <?php if( $confirmacao5_sabedores == $confirmacao5_2 ){ echo "checked";}else{echo "";}?>
                >
                <label for="confirmacao5_sabedores_diverge" class="custom-control-label"
                >O veículo conhecido <b>não</b> está em bom estado</label>
              </div>




              <div class="col float-left">
                <input
                  type="radio"
                  name="confirmacao6_sabedores"
                  id="confirmacao6_sabedores"
                  value="Veículo pernoita na garagem"
                  class="custom-control-input"
                  <?php if( $confirmacao6_sabedores == $confirmacao6_1 ){ echo "checked";}else{echo "";}?>
                >
                <label for="confirmacao6_sabedores" class="custom-control-label"
                >Veículo pernoita na garagem</label>
              </div>

              <div class="col float-left">
                <input
                  type="radio"
                  name="confirmacao6_sabedores"
                  id="confirmacao6_sabedores_diverge"
                  value="Veículo pernoita em via pública"
                  class="custom-control-input"
                  <?php if( $confirmacao6_sabedores == $confirmacao6_2 ){ echo "checked";}else{echo "";}?>
                >
                <label for="confirmacao6_sabedores_diverge" class="custom-control-label"
                >Veículo pernoita em via pública</label>
              </div>





              <div class="col float-left">
                <input
                  type="radio"
                  name="confirmacao7_sabedores"
                  id="confirmacao7_sabedores"
                  value="Conhecido como pessoa de boa índole"
                  class="custom-control-input"
                  <?php if( $confirmacao7_sabedores == $confirmacao7_1 ){ echo "checked";}else{echo "";}?>
                >
                <label for="confirmacao7_sabedores" class="custom-control-label"
                >Conhecido como pessoa de boa índole</label>
              </div>

              <div class="col float-left">
                <input
                  type="radio"
                  name="confirmacao7_sabedores"
                  id="confirmacao7_sabedores_diverge"
                  value="Não é conhecido"
                  class="custom-control-input"
                  <?php if( $confirmacao7_sabedores == $confirmacao7_2 ){ echo "checked";}else{echo "";}?>
                >
                <label for="confirmacao7_sabedores_diverge" class="custom-control-label"
                >Não é conhecido</label>
              </div>






              <div class="col float-left">
                <input
                  type="radio"
                  name="confirmacao8_sabedores"
                  id="confirmacao8_sabedores"
                  value="Conduta duvidosa"
                  class="custom-control-input"
                  <?php if( $confirmacao8_sabedores == $confirmacao8_1 ){ echo "checked";}else{echo "";}?>
                >
                <label for="confirmacao8_sabedores" class="custom-control-label"
                >Conhecido como pessoa de <b>conduta duvidosa</b></label>
              </div>

              <div class="col float-left">
                <input
                  type="radio"
                  name="confirmacao8_sabedores"
                  id="confirmacao8_sabedores_diverge"
                  value="Boa conduta"
                  class="custom-control-input"
                  <?php if( $confirmacao8_sabedores == $confirmacao8_2 ){ echo "checked";}else{echo "";}?>
                >
                <label for="confirmacao8_sabedores_diverge" class="custom-control-label"
                >Conhecido como pessoa de <b>boa conduta</b></label>
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
      echo "<br><br>Nenhum entrevistado sabedor registrado.............";
    }
  }else{

    //PROD


    "<br><br>Buscar Sabedores do convivio do associado";
    "<br><pre>" . 
    $QueryBuscarSabedoresConvivio = "
      SELECT * FROM
        tb_entrevistados_convivio
      WHERE
        protocolo_sabedores = '$Protocolo' &&
        representante_sabedor = '2'
    ";
    "</pre>";
    $ExeQrBuscarSabedoresConvivio = mysqli_query($connection, $QueryBuscarSabedoresConvivio);
    "<br><br> Registros: " . 
    $RowQrBuscarSabedoresConvivio = mysqli_num_rows($ExeQrBuscarSabedoresConvivio);

    if( $RowQrBuscarSabedoresConvivio > 0 ){
      "<br><br>Mostrar Pessoas Sabedoras do convívio.........:";
      ?>

        <form 
          action="
            ?Page=Relatorios&Preencher&Protocolo=<?php echo $Protocolo?>&Content=Convivio-Condutor&Salvar-Sabedores"
          method="post" enctype="multipart/form-data"
          style="width: 100%"
          id="SalvarSabedores"
        >
          <?php
            if( $SysMode == 1 ){
              echo "<br><pre>" .
              $QueryBuscarLocalEvento = "
                SELECT * FROM tb_entrevistados_convivio
                WHERE protocolo_sabedores = '$Protocolo' && representante_sabedor = 2
              ";
              echo "</pre>";
            }else{
              "<br><pre>" .
              $QueryBuscarLocalEvento = "
                SELECT * FROM tb_entrevistados_convivio
                WHERE protocolo_sabedores = '$Protocolo' && representante_sabedor = 2
              ";
              "</pre>";
            }
            
            $ExeQrBuscarLocalEvento = mysqli_query($connection, $QueryBuscarLocalEvento);
            $RowQrBuscarLocalEvento = mysqli_num_rows($ExeQrBuscarLocalEvento);
            include 'Variaveis-Confirmacao.php';
            if( $RowQrBuscarLocalEvento = 1 ){
              while($LocalEvento = mysqli_fetch_assoc($ExeQrBuscarLocalEvento)) {
                $confirmacao1_sabedores = $LocalEvento['confirmacao1_sabedores'];
                "<br>";
                $confirmacao1_1 = "Confirmam a versão, ratificam os informes";
                "<br>";
                $confirmacao1_2 = "Há Informações divergentes";
                "<br>";
                "<br>";

                $confirmacao2_sabedores = $LocalEvento['confirmacao2_sabedores'];
                "<br>";
                $confirmacao2_1 = "Não houve apontamento de embriaguez/entorpecentes";
                "<br>";
                $confirmacao2_2 = "Houve apontamento de embriaguez/entorpecentes";
                "<br>";
                "<br>";

                $confirmacao3_sabedores = $LocalEvento['confirmacao3_sabedores'];
                "<br>";
                $confirmacao3_1 = "Apontamento de Troca de condutor";
                "<br>";
                $confirmacao3_2 = "Não houve troca de condutores";
                "<br>";
                "<br>";

                $confirmacao4_sabedores = $LocalEvento['confirmacao4_sabedores'];
                "<br>";
                $confirmacao4_1 = "Apontamento de velocidade incompatível";
                "<br>";
                $confirmacao4_2 = "Não há Apontamento de velocidade incompatível";
                "<br>";

                $confirmacao5_sabedores = $LocalEvento['confirmacao5_sabedores'];
                "<br>";
                $confirmacao5_1 = "O veículo conhecido em bom estado";
                "<br>";
                $confirmacao5_2 = "O veículo conhecido não está em bom estado";
                "<br>";

                $confirmacao6_sabedores = $LocalEvento['confirmacao6_sabedores'];
                "<br>";
                $confirmacao6_1 = "Veículo pernoita na garagem";
                "<br>";
                $confirmacao6_2 = "Veículo pernoita em via pública";
                "<br>";

                $confirmacao7_sabedores = $LocalEvento['confirmacao7_sabedores'];
                "<br>";
                $confirmacao7_1 = "Conhecido como pessoa de boa índole";
                "<br>";
                $confirmacao7_2 = "Não é conhecido";
                "<br>";

                $confirmacao8_sabedores = $LocalEvento['confirmacao8_sabedores'];
                "<br>";
                $confirmacao8_1 = "Conduta duvidosa";
                "<br>";
                $confirmacao8_2 = "Boa conduta";

                
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
                  name="confirmacao1_sabedores"
                  id="confirmacao1_sabedores"
                  value="Confirmam a versão, ratificam os informes"
                  class="custom-control-input"
                  <?php if( $confirmacao1_sabedores == $confirmacao1_1 ){ echo "checked";}else{echo "";}?>
                >
                <label for="confirmacao1_sabedores" class="custom-control-label"
                >Confirmam a versão, ratificam os informes</label>
              </div>

              <div class="col float-left">
                <input
                  type="radio"
                  name="confirmacao1_sabedores"
                  id="confirmacao1_sabedores_diverge"
                  value="Há Informações divergentes"
                  class="custom-control-input"
                  <?php if( $confirmacao1_sabedores == $confirmacao1_2 ){ echo "checked";}?>
                >
                <label for="confirmacao1_sabedores_diverge" class="custom-control-label"
                >Há Informações divergentes</label>
              </div>

              <div class="col float-left">
                <input
                  type="radio"
                  name="confirmacao2_sabedores"
                  id="confirmacao2_sabedores"
                  value="Não houve apontamento de embriaguez/entorpecentes"
                  class="custom-control-input"
                  <?php if( $confirmacao2_sabedores == $confirmacao2_1 ){ echo "checked";}else{echo "";}?>
                >
                <label for="confirmacao2_sabedores" class="custom-control-label"
                >Não houve apontamento de embriaguez/entorpecentes</label>
              </div>

              <div class="col float-left">
                <input
                  type="radio"
                  name="confirmacao2_sabedores"
                  id="confirmacao2_sabedores_diverge"
                  value="Houve apontamento de embriaguez/entorpecentes"
                  class="custom-control-input"
                  <?php if( $confirmacao2_sabedores == $confirmacao2_2 ){ echo "checked";}else{echo "";}?>
                >
                <label for="confirmacao2_sabedores_diverge" class="custom-control-label"
                >Houve apontamento de embriaguez/entorpecentes</label>
              </div>

              <div class="col float-left">
                <input
                  type="radio"
                  name="confirmacao3_sabedores"
                  id="confirmacao3_sabedores"
                  value="Apontamento de Troca de condutor"
                  class="custom-control-input"
                  <?php if( $confirmacao3_sabedores == $confirmacao3_1 ){ echo "checked";}else{echo "";}?>
                >
                <label for="confirmacao3_sabedores" class="custom-control-label"
                >Apontamento de Troca de condutor</label>
              </div>

              <div class="col float-left">
                <input
                  type="radio"
                  name="confirmacao3_sabedores"
                  id="confirmacao3_sabedores_divergente"
                  value="Não houve troca de condutores"
                  class="custom-control-input"
                  <?php if( $confirmacao3_sabedores == $confirmacao3_2 ){ echo "checked";}else{echo "";}?>
                >
                <label for="confirmacao3_sabedores_divergente" class="custom-control-label"
                >Não houve troca de condutores</label>
              </div>

              <div class="col float-left">
                <input
                  type="radio"
                  name="confirmacao4_sabedores"
                  id="confirmacao4_sabedores"
                  value="Apontamento de velocidade incompatível"
                  class="custom-control-input"
                  <?php if( $confirmacao4_sabedores == $confirmacao4_1 ){ echo "checked";}else{echo "";}?>
                >
                <label for="confirmacao4_sabedores" class="custom-control-label"
                >Apontamento de velocidade incompatível</label>
              </div>

              <div class="col float-left">
                <input
                  type="radio"
                  name="confirmacao4_sabedores"
                  id="confirmacao4_sabedores_divergente"
                  value="Não há Apontamento de velocidade incompatível"
                  class="custom-control-input"
                  <?php if( $confirmacao4_sabedores == $confirmacao4_2 ){ echo "checked";}else{echo "";}?>
                >
                <label for="confirmacao4_sabedores_divergente" class="custom-control-label"
                >Não há Apontamento de velocidade incompatível</label>
              </div>
              






              <div class="col float-left">
                <input
                  type="radio"
                  name="confirmacao5_sabedores"
                  id="confirmacao5_sabedores"
                  value="O veículo conhecido em bom estado"
                  class="custom-control-input"
                  <?php if( $confirmacao5_sabedores == $confirmacao5_1 ){ echo "checked";}else{echo "";}?>
                >
                <label for="confirmacao5_sabedores" class="custom-control-label"
                >O veículo conhecido em bom estado</label>
              </div>

              <div class="col float-left">
                <input
                  type="radio"
                  name="confirmacao5_sabedores"
                  id="confirmacao5_sabedores_diverge"
                  value="O veículo conhecido não está em bom estado"
                  class="custom-control-input"
                  <?php if( $confirmacao5_sabedores == $confirmacao5_2 ){ echo "checked";}else{echo "";}?>
                >
                <label for="confirmacao5_sabedores_diverge" class="custom-control-label"
                >O veículo conhecido <b>não</b> está em bom estado</label>
              </div>




              <div class="col float-left">
                <input
                  type="radio"
                  name="confirmacao6_sabedores"
                  id="confirmacao6_sabedores"
                  value="Veículo pernoita na garagem"
                  class="custom-control-input"
                  <?php if( $confirmacao6_sabedores == $confirmacao6_1 ){ echo "checked";}else{echo "";}?>
                >
                <label for="confirmacao6_sabedores" class="custom-control-label"
                >Veículo pernoita na garagem</label>
              </div>

              <div class="col float-left">
                <input
                  type="radio"
                  name="confirmacao6_sabedores"
                  id="confirmacao6_sabedores_diverge"
                  value="Veículo pernoita em via pública"
                  class="custom-control-input"
                  <?php if( $confirmacao6_sabedores == $confirmacao6_2 ){ echo "checked";}else{echo "";}?>
                >
                <label for="confirmacao6_sabedores_diverge" class="custom-control-label"
                >Veículo pernoita em via pública</label>
              </div>





              <div class="col float-left">
                <input
                  type="radio"
                  name="confirmacao7_sabedores"
                  id="confirmacao7_sabedores"
                  value="Conhecido como pessoa de boa índole"
                  class="custom-control-input"
                  <?php if( $confirmacao7_sabedores == $confirmacao7_1 ){ echo "checked";}else{echo "";}?>
                >
                <label for="confirmacao7_sabedores" class="custom-control-label"
                >Conhecido como pessoa de boa índole</label>
              </div>

              <div class="col float-left">
                <input
                  type="radio"
                  name="confirmacao7_sabedores"
                  id="confirmacao7_sabedores_diverge"
                  value="Não é conhecido"
                  class="custom-control-input"
                  <?php if( $confirmacao7_sabedores == $confirmacao7_2 ){ echo "checked";}else{echo "";}?>
                >
                <label for="confirmacao7_sabedores_diverge" class="custom-control-label"
                >Não é conhecido</label>
              </div>






              <div class="col float-left">
                <input
                  type="radio"
                  name="confirmacao8_sabedores"
                  id="confirmacao8_sabedores"
                  value="Conduta duvidosa"
                  class="custom-control-input"
                  <?php if( $confirmacao8_sabedores == $confirmacao8_1 ){ echo "checked";}else{echo "";}?>
                >
                <label for="confirmacao8_sabedores" class="custom-control-label"
                >Conhecido como pessoa de <b>conduta duvidosa</b></label>
              </div>

              <div class="col float-left">
                <input
                  type="radio"
                  name="confirmacao8_sabedores"
                  id="confirmacao8_sabedores_diverge"
                  value="Boa conduta"
                  class="custom-control-input"
                  <?php if( $confirmacao8_sabedores == $confirmacao8_2 ){ echo "checked";}else{echo "";}?>
                >
                <label for="confirmacao8_sabedores_diverge" class="custom-control-label"
                >Conhecido como pessoa de <b>boa conduta</b></label>
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
      echo "<br><br>Nenhum entrevistado sabedor registrado.............";
    }
  }