<h3 class="col-12">Sobre a Solicitação:</h3>
<div class="col-xs-12 col-md-4 float-left">
  <b>Protocolo: </b><br>
  <?php echo $_GET['Protocolo']?>
</div>

<div class="col-xs-12 col-md-4 float-left">
  <b>Solicitante: </b><br>
  <?php echo Resumo($Relatorio['nome_cliente'], 45)?>
</div>

<div class="col-xs-12 col-md-2 float-left">
  <b>Natureza: </b><br>
  <?php echo $Relatorio['descricao_natureza'];?>
</div>

<div class="col-12 space-1"></div>

<?php
  if( $Relatorio['condutor_veiculo'] == 1 ){
    //Se o condutor do veículo durante o evento for o próprio associado
    ?>
      <div class="col-xs-12 col-md-6 float-left">
        <b>Associado: </b><br>
        <?php echo $Relatorio['nome_associado'] ?><br>
        <b>CPF: </b>
        <?php echo $Relatorio['cpf_associado'] ?>
      </div>
    <?php
  }else{
    ?>
      <div class="col-xs-12 col-md-6 float-left">
        <b>Associado: </b><br>
        <?php echo $Relatorio['nome_associado'] ?><br>
        <b>CPF: </b>
        <?php echo $Relatorio['cpf_associado'] ?>
      </div>
      <div class="col-xs-12 col-md-6 float-left">
        <b>Condutor: </b><br>
        <?php echo $Relatorio['nome_condutor'] ?><br>
        <b>Vínculo: </b>
        <?php echo $Relatorio['vinculo_associado'] ?>
      </div>
    <?php
  }
?>
<div class="col-12 space-3"></div>

<div class="col-12 float-left">
  <h4 class="col-12 rotulos">Veículo: </h4>
  <p class="col-xs-12 col-md-4 float-left">
    <b>Marca: </b><br>
    <?php echo $Relatorio['marca_veiculo']?>
  </p>

  <p class="col-xs-12 col-md-4 float-left">
    <b>Modelo: </b><br>
    <?php echo $Relatorio['modelo_veiculo']?>
  </p>

  <p class="col-xs-12 col-md-4 float-left">
    <b>Placa: </b><br>
    <?php 
      $Placa =  $Relatorio['placa_veiculo'];
      echo substr_replace($Placa, "-", 3, 0);
    ?>
  </p>
</div>

<div class="col-12 space-1"></div>


<div class="col-12 float-left">
  <h4 class="col-12 rotulos">Sobre o Evento: </h4>
  <p class="col-xs-12 col-md-3 float-left">
    <b>Data: </b><br>
    <?php echo date("d/m/Y", strtotime($Relatorio['data_evento'])) ?>
  </p>

  <p class="col-xs-12 col-md-3 float-left">
    <b>Horario: </b><br>
    <?php echo date("H:i", strtotime($Relatorio['horario_evento'])) ?>
  </p>

  <p class="col-xs-12 col-md-6 float-left">
    <b>Local: </b>
    <?php echo "CEP - " . $Relatorio['cep_evento']?>
    <br>
    <?php 
      echo $Relatorio['endereco_evento'];
      echo ", ".$Relatorio['numero_evento'];
      echo " - ". $Relatorio['bairro_evento'];
    ?>
  </p>
</div>