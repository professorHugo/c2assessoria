<form
  action="?Page=Relatorios&Preencher&Protocolo=<?php echo $Protocolo?>&Content=Dinamica-Evento&Salvar"
  method="post" enctype="multipart/form-data"
  style="width: 100%"
>
  <div class="form-group row">
    <label
      for="dinamica_evento"
      class="col-sm-5 col-md-3 col-form-label col-form-label-lg float-left"
      style="margin-top: 10px"
    >
      Dinâmica do Evento:
    </label>

    <div class="col-12">
      <textarea 
        name="dinamica_evento" 
        id="dinamica_evento" 
        rows="5" 
        class="form-control form-control-lg"
        placeholder="Digite aqui a dinâmica do evento"
      ></textarea>
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
      >
        Salvar
      </button>
    </div>
  </div>
</form>

<?php
  if( isset($_POST['Salvar']) && isset($_GET['Salvar']) ){
    include 'components/Salvar.php';
    if( $SysMode == 2 ){
      include 'components/Modal-Salvar.php';
    }
  }