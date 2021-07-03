<h4 class="col-12"
  style="
    border-bottom: 2px solid #ddd; 
    margin-bottom: 2.5rem;
    float: left;
  "
>Motorista por aplicativo</h4>

<div class="form-group row">
  <label 
    for="motorista_aplicativo" 
    class="col-form-label col-form-label-lg col-lg-6 col-sm-12"
    style="font-size: 1.1rem"
  >Condutor/Associado é motorista por aplicativo: </label>

  <div class="col-lg-6 col-sm-12">
    <select 
      name="motorista_aplicativo" 
      id="motorista_aplicativo" 
      class="form-control form-control-lg"
      requred onchange="selectMotoristaApp()"
    >
      <option value="" selected disabled>Selecione</option>
      <option value="1">Sim</option>
      <option value="2">Não</option>
    </select>
  </div>
</div>