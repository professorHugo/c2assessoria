<h4 class="col-12"
  style="
    border-bottom: 2px solid #ddd; 
    margin-bottom: 2.5rem;
    float: left;
  "
>Utilização de aplicativos de mobilidade urbana</h4>

<div class="form-group row">
  <label 
    for="utilizacao_app_mobilidade" 
    class="col-form-label col-form-label-lg col-xs-7 col-sm-7"
  >Usado após o evento: </label>

  <div class="col-xs-5 col-md-5">
    <select 
      name="utilizacao_app_mobilidade" 
      id="utilizacao_app_mobilidade" 
      class="form-control form-control-lg"
      required onchange="EscolherUsoApp()"
    >
      <option value="">Selecione</option>
      <option value="1">Sim</option>
      <option value="2">Não</option>
    </select>
  </div>

  <div style="margin-top:1rem" class="col-12"></div>
  <div class="col-12" id="return_utilizacao_app_mobilidade" style="display:none">
    <label 
      for="comprovante_apresentado" 
      class="col-form-label col-form-label-lg col-xs-7 col-sm-7 float-left"
    >Compr. Apresentado:</label>

    <div class="col-xs-5 col-sm-5 float-left">
      <select 
        name="comprovante_apresentado" 
        id="comprovante_apresentado" 
        class="form-control form-control-lg"
        onchange="comprovanteApresentado();"
      >
        <option value="" selected disabled>Selecione</option>
        <option value="1">Sim</option>
        <option value="2">Não</option>
      </select>
    </div>
  </div>

</div>