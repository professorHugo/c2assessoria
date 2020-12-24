<div class="col-12" style="margin-top: 1rem"></div>
<label 
  for="pessoas_sabedoras" 
  class="col-6 col-md-6 col-form-label col-form-label-lg float-left"
>Houve entrevistas: </label>

<div class="col-6 col-md-6 float-left">
  <select
    class="form-control form-control-lg"
    id="pessoas_sabedoras"
    name="pessoas_sabedoras"
    required
    onchange="selecionarEntrevistados()"
  >
    <option value="" disabled selected>Escolha</option>
    <option value="1">Sim</option>
    <option value="2">Não</option>
  </select>
</div>

<div id="return_pessoas_sabedoras" class="col-12" style="display: none">
  <label 
    for="quantidade_testemunhas" 
    class="col-9 col-md-9 col-form-label col-form-label-lg float-left"
    style=""
  >Adicionar Testemunha: </label>
  <div style="margin-bottom:10px"></div>
  <div class="col-3 col-md-3 float-left">
    <button type="button"
      class="btn btn-success"
      data-toggle="modal"
      data-target="#Modal-Add-Testemunha"
      style="font-size: 2rem;padding: 3px 15px"
      id="quantidade_testemunhas"
    >
      <i class="fa fa-plus-circle" aria-hidden="true"></i>
    </button>
  </div>
</div>
<div class="col-12" style="margin-top: 1rem"></div>
