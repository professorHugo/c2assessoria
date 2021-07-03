<h4 class='col-12 rotulos'>
  Informações sobre o Perfil
</h4>
<?php include "components/Info-Perfil.php"?>

<!-- Info-Pesquisa-Convivio -->
<h4 class='col-12 rotulos' style="margin-top: 2rem">
  Pesquisas de convívio
</h4>
<?php include "components/Info-Pesquisa-Convivio.php"?>

<!-- Sobre o Veículo -->
<h4 class="col-12 rotulos" style="margin-top: 2rem">Informações sobre o veículo</h4>
<?php include "components/Info-Veiculo.php" ?>

<!-- Info-Evento -->
<h4 class='col-12 rotulos' style="margin-top: 2rem">
  Informações sobre o evento 
</h4>
<?php include "components/Info-Evento.php" ?>

<!-- Info-Local -->
<h4 class='col-12 rotulos space-3'>
  <div class="float-left" style="width: 80%">Informações sobre o local</div>
  <div class="float-left" style="width: 20%; margin-top: -5px">
    <a href="https://www.google.com/maps/place/<?php echo $EnderecoEvento?>+-+<?php echo $BairroEvento?>,+<?php echo $CidadeEvento?>+-+<?php echo $EstadoEvento?>,+<?php echo $CEPEvento?>" 
    target="_blank" class="btn btn-primary form-control">
      <i class="icones icone-navegar" aria-hidden="true"></i>
    </a>
  </div>
</h4>
<?php include "components/Info-Local.php" ?>

<!-- Info-Orgaos-Publicos -->
<h4 class='col-12 rotulos' style="margin-top: 2rem">
  Órgãos Públicos
</h4>
<?php include "components/Info-Orgaos-Publicos.php"?>


<!-- Info-Mobilidade-Urbana -->
<h4 class='col-12 rotulos' style="margin-top: 2rem">
  Aplicativo de Mobilidade Urbana
</h4>
<?php include "components/Info-Mobilidade-Urbana.php"?>

<!-- Contexto-Geral-Form -->
<h4 class='col-12 rotulos' style="margin-top: 2rem">
  <label for="contexto_geral" class="col-form-label col-form-label-lg" style="font-size: 1.5rem">
    Contexto Geral

</h4>
<div class="col-12" style="border-top: 1px solid #bbb; margin-bottom: 1rem;float: left;height:1px"></div>

<form 
  action="?Page=Relatorios&Preencher&Protocolo=<?php echo $Protocolo?>" 
  method="post"
  style="width: 100%"
>
  <div class="col-12 float-left">
    <textarea 
      name="contexto_geral" id="contexto_geral" cols="30" rows="10"
      class="form-control"
      placeholder="Digite o contexto geral sobre o evento"
    ></textarea>
  </div>

  <div class="clearfix"></div>
  <div class="form-group row" style="margin-top:2rem">
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
        name="Salvar"
        class="btn btn-outline-success btn-lg btn-block"
      >
        Entregar
      </button>
    </div>
  </div>
</form>

<?php
if( isset( $_POST['Salvar'] ) ){
  include 'Modal-Relatorio-Entregar.php';
}

if( isset($_POST['Entregar']) ){
  include 'Entregar-Relatorio.php';
}

if( isset($_GET['Abrir-Relatorio-Mensagem']) ){
  //Abrir relatório 
  include 'Abrir-Relatorio.php';
}