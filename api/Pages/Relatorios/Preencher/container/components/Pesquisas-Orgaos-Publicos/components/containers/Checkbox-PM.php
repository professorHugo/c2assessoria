<?php
if( isset($_GET['PM']) ){
  $Pesquisa = $_GET['PM'];

  if( $Pesquisa == 1 ){
    ?>

      <!-- Resultado 1 -->
      <div class="custom-control custom-switch">
        <div class="col-12 col-md-6 float-left">
          <input
            type="radio"
            required
            name="pm_resultado1"
            id="pm_resultado1"
            value="Em pesquisas, não há irregularidades apontadas no boletim de ocorrência."
            class="custom-control-input"
            <?php //if( $pm_resultado1 == $confirmacao1_1 ){ echo "checked";}else{echo "";}?>
          >
          <label for="pm_resultado1" class="custom-control-label"
          >Em pesquisas, <b>não há irregularidades</b> apontadas no boletim de ocorrência.</label>
        </div>
        <div class="col-12 col-md-6 float-left">
          <input
            type="radio"
            required
            name="pm_resultado1"
            id="pm_resultado1_1"
            value="Há irregularidades apontadas no boletim de ocorrência."
            class="custom-control-input"
            <?php //if( $pm_resultado1 == $confirmacao1_1 ){ echo "checked";}else{echo "";}?>
          >
          <label for="pm_resultado1_1" class="custom-control-label"
          ><b>Há irregularidades</b> apontadas no boletim de ocorrência.</label>
        </div>
      </div>

      <!-- Resultado 2 -->
      <div class="custom-control custom-switch">
        <div class="col-12 col-md-6 float-left">
          <input
            type="radio"
            required
            name="pm_resultado2"
            id="pm_resultado2"
            value="Há boletim de ocorrência do evento em questão não apresentado."
            class="custom-control-input"
            <?php //if( $pm_resultado2 == $confirmacao1_1 ){ echo "checked";}else{echo "";}?>
          >
          <label for="pm_resultado2" class="custom-control-label"
          >Há boletim de ocorrência do evento em questão <b>não apresentado</b>.</label>
        </div>
        <div class="col-12 col-md-6 float-left">
          <input
            type="radio"
            required
            name="pm_resultado2"
            id="pm_resultado2_1"
            value="Há boletim de ocorrência divergente do apresentado."
            class="custom-control-input"
            <?php //if( $pm_resultado2 == $confirmacao1_1 ){ echo "checked";}else{echo "";}?>
          >
          <label for="pm_resultado2_1" class="custom-control-label"
          >Há boletim de ocorrência divergente do <b>apresentado</b>.</label>
        </div>
      </div>

      <!-- Resultado 3 -->
      <div class="custom-control custom-switch">
        <div class="col-12 col-md-6 float-left">
          <input
            type="radio"
            required
            name="pm_resultado3"
            id="pm_resultado3"
            value="Há boletim de ocorrência relacionado ao veículo em data anterior ao evento."
            class="custom-control-input"
            <?php //if( $pm_resultado3 == $confirmacao1_1 ){ echo "checked";}else{echo "";}?>
          >
          <label for="pm_resultado3" class="custom-control-label"
          ><b>Há boletim de ocorrência relacionado ao veículo</b> em data anterior ao evento.</label>
        </div>
        <div class="col-12 col-md-6 float-left">
          <input
            type="radio"
            required
            name="pm_resultado3"
            id="pm_resultado3_1"
            value="Não há boletim de ocorrência relacionado ao veículo em data anterior ao evento."
            class="custom-control-input"
            <?php //if( $pm_resultado3 == $confirmacao1_1 ){ echo "checked";}else{echo "";}?>
          >
          <label for="pm_resultado3_1" class="custom-control-label"
          ><b><u>Não há</u> boletim de ocorrência relacionado ao veículo</b> em data anterior ao evento.</label>
        </div>
      </div>

    <?php
  }
}