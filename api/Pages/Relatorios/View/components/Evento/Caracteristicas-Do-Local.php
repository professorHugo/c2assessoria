<div class="row" id="Caracteristicas-Local" style="padding-left: 25px; margin-bottom: 50px">
  <div class="col-3 float-left">
    <b>Índice de Criminalidade: </b><br>
    <?php echo $IndiceCriminalidade ?>
  </div>
  
  <div class="col-3 float-left">
    <b>Ínidice de Sinistralidade:</b><br>
    <?php echo $IndiceSinistralidade ?>
  </div>

  <div class="col-3 float-left">
    <b>Características Técnicas: </b><br>
    <?php echo $CaracteristicasTecinicas?>
  </div>

  <div class="col-3 float-left">
    <b>Característica da via: </b><br>
    <?php echo $RuaPavimentada?>
  </div>

  <div class="col-12 space-2"></div>

  <div class="col-3 float-left">
    <b>Permissão para estacionar: </b><br>
    <?php echo $PermitidiEstacionar ?>
  </div>

  <div class="col-3 float-left">
    <b>Inclinação da via: </b><br>
    <?php echo $AcliveDeclive?>
  </div>

  <div class="col-3 float-left">
    <b>Direção da pista: </b><br>
    <?php echo $TipoDirecaoPista?>
  </div>

  <div class="col-3 float-left">
    <b>Cruzamento: </b><br>
    <?php echo $CruzamentoPista?>
  </div>

  <div class="col-12 space-2"></div>

  <div class="col-3 float-left">
    <b>Curvas: </b><br>
    <?php echo $PistaCurvas?>
  </div>

  <div class="col-3 float-left">
    <b>Rotatória: </b><br>
    <?php echo $PistaRotatoria?>
  </div>

  <div class="col-3 float-left">
    <b>Velocidade máxima: </b><br>
    <?php echo $VelocidadeMaxima?>
  </div>
  <div class="col-3 float-left">
    <b>Fotos do local: </b><br>
    <?php echo $FotosDoLocal?>
  </div>

  <div class="col-12 space-2"></div>

  <div class="col-3 float-left">
    <b>Entrevistados no local: </b><br>
    <?php 
      if( $TestemunhasEntrevistadosLocalEvento > 0 ){
        echo "Sim - ";
        if( $TestemunhasEntrevistadosLocalEvento > 1){
          echo $TestemunhasEntrevistadosLocalEvento . " Entrevistados";
        }else{
          echo $TestemunhasEntrevistadosLocalEvento . " Entrevistado";
        }
      }else{
        echo "Não";
      }
    ?>
  </div>

  <div class="col-3 float-left">
    <b>Policiamento apontado: </b><br>
    <?php echo $PoliciamentoApontado?>
  </div>
</div>