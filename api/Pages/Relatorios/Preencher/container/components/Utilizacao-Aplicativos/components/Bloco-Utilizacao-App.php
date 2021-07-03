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
    class="col-form-label col-form-label-lg col-lg-6 col-sm-12"
  >Usado após o evento: </label>

  <div class="col-lg-6 col-sm-12">
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
  <div class="col-12" id="return_utilizacao_app_mobilidade">
    <!-- Componente de Utilizacao de App de Mobilidade -->
    <!-- <?php include 'components/containers/Utilizacao-App-Mobilidade.php' ?> -->
  </div>

</div>