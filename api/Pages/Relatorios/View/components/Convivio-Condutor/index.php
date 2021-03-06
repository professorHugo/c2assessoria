<?php
  //Query-Buscar-Sabedores
  include 'Querys/Buscar-Sabedores.php';
?>
<div class="col-12 space-3" id="Orgaos-Publicos">
  <h4 class="rotulos">
    Convívio: Condutor - 
    Total de Entrevistados <b><?php echo $TotalSabedoresCondutor ?></b>
  </h4>

  <div class="col-12 space-2" id="Resultado-Sabedores-Condutor">
    <div class="row space-1">
      <div class="col-3 float-left">
        <b>Versão dos sabedores: </b><br>
        <?php echo $Confirmacao1SabedoresCondutor ?>
      </div>
      <div class="col-3 float-left">
        <b>Embriaguez/Entorpecentes: </b><br>
        <?php echo $Confirmacao2SabedoresCondutor ?>
      </div>
      <div class="col-3 float-left">
        <b>Troca de condutor: </b><br>
        <?php echo $Confirmacao3SabedoresCondutor ?>
      </div>
      <div class="col-3 float-left">
        <b>Velocidade informada: </b><br>
        <?php echo $Confirmacao4SabedoresCondutor ?>
      </div>
    </div>

    <div class="row space-1">
      <div class="col-3 float-left">
        <b>Estado do veículo: </b><br>
        <?php echo $Confirmacao5SabedoresCondutor ?>
      </div>
      <div class="col-3 float-left">
        <b>Pernoite do veículo: </b><br>
        <?php echo $Confirmacao6SabedoresCondutor ?>
      </div>
      <div class="col-3 float-left">
        <b>Índole do Associado: </b><br>
        <?php echo $Confirmacao7SabedoresCondutor ?>
      </div>
      <div class="col-3 float-left">
        <b>Conduta do Associado: </b><br>
        <?php echo $Confirmacao8SabedoresCondutor ?>
      </div>
	  </div>

    <div class="row space-1">
      <?php
        if( isset($InformacaoGeralSabedoresCondutor) ){
        ?>
          <div class="col-12 float-left">
          <b>Invormação geral: </b><br>
          <?php echo $InformacaoGeralSabedoresCondutor ?>
          </div>
        <?php
        }
      ?>
	  </div>

    <div class="row col-12 space-2" id="Mostrar-Entrevistados-Convivio">
		  <?php include 'Buscar-Entrevistados.php'?>
	  </div>

  </div>
</div>