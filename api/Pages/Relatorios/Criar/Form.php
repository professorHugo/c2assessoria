<script src="js/Criar-Relatorio/cep-associado.js"></script>
<script src="js/Criar-Relatorio/cep-condutor.js"></script>
<script src="js/Criar-Relatorio/cep-evento.js"></script>
<script src="js/Criar-Relatorio/switches.js"></script>


<form action="?Page=Relatorios&Criar&Criar-Relatorio" method="post">
  <h3>Nova Solicitação de Sindicância</h3>
  <div
    class="col-12"
    style="border-top: 2px solid #bbb; margin-bottom: 2.5rem;float: left;height:1px"
  ></div>
  <!-- Solicitante e Sindicante -->
  <?php include "container/Dados-Solicitante-Sindicante.php"?>

  <!-- Protocolo e Natureza -->
  <?php include "container/Dados-Relatorio-Data-Criacao.php"?>

  <!-- Protocolo solicitante, data e hora do evento -->
  <!-- <?php include "container/Dados-Data-Protocolo.php"?> -->

  <!-- Dados do local do evento -->
  <?php include "container/Dados-Local-Evento.php"?>

  <!-- Associado, CPF, Domicílio -->
  <?php include "container/Dados-Associado.php"?>

  <!-- Sobre o Condutor do Veículo -->
  <?php include "container/Dados-Condutor.php"?>

  <!-- Sobre o veículo -->
  <?php include "container/Dados-Veiculo.php"?>

  <div class="clearfix" style="margin: 2rem 0 0"></div>
  <hr>

  <div class="form-group row">
    <div class="col-6">
      <a
        href="?Page=Relatorios"
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
        Criar Relatório
      </button>
    </div>
  </div>

</form>

<script src="../vendor/jquery-ui-1.10.3.custom/js/jquery-1.9.1.js"></script>
<script src="../vendor/jquery-ui-1.10.3.custom/js/jquery-ui-1.10.3.custom.min.js"></script>
<script type="text/javascript" src="js/Autocomplete/Autocomplete-Marcas.js"></script>



<?php
if( isset($_GET['Criar-Relatorio']) ){
  include "components/Criar-Relatorio.php";
}

