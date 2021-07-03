<?php
  //Query-Buscar-Sabedores
  include 'Querys/Buscar-Sabedores.php';
?>
<div class="col-12 space-3" id="Convivio">
  <h4 class="rotulos">
    Convívio: Associado - 
    Total de entrevistados: <b> <?php echo $TotalSabedores ?> </b>
  </h4>
  
  <div class="col-12 space-2" id="Resultado-Sabedores-Convivio">
	  <div class="row space-1">
		<div class="col-3 float-left">
		  <b>Versão dos sabedores: </b><br>
		  <?php echo $Confirmacao1Sabedores ?>
		</div>
		<div class="col-3 float-left">
		  <b>Embriaguez/Entorpecentes: </b><br>
		  <?php echo $Confirmacao2Sabedores ?>
		</div>
		<div class="col-3 float-left">
		  <b>Troca de condutor: </b><br>
		  <?php echo $Confirmacao3Sabedores ?>
		</div>
		<div class="col-3 float-left">
		  <b>Velocidade informada: </b><br>
		  <?php echo $Confirmacao4Sabedores ?>
		</div>
	  </div>

	  <div class="row space-1">
		<div class="col-3 float-left">
		  <b>Estado do veículo: </b><br>
		  <?php echo $Confirmacao5Sabedores ?>
		</div>
		<div class="col-3 float-left">
		  <b>Pernoite do veículo: </b><br>
		  <?php echo $Confirmacao6Sabedores ?>
		</div>
		<div class="col-3 float-left">
		  <b>Índole do Associado: </b><br>
		  <?php echo $Confirmacao7Sabedores ?>
		</div>
		<div class="col-3 float-left">
		  <b>Conduta do Associado: </b><br>
		  <?php echo $Confirmacao8Sabedores ?>
		</div>
	  </div>

	  <div class="row space-1">
		<?php
		  if( isset($InformacaoGeralSabedores) ){
			?>
			  <div class="col-12 float-left">
				<b>Invormação geral: </b><br>
				<?php echo $InformacaoGeralSabedores ?>
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