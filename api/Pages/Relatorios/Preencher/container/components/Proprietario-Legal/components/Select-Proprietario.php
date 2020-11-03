<label 
  for="proprietario_legal" 
  class="col-sm-5 col-md-3 col-form-label col-form-label-lg"
  style="margin-top: 10px"
>Proprietario Legal:
</label>
<div class="col-sm-7 col-md-3" style="margin-top: 10px">
  <select 
    name="proprietario_legal" 
    id="proprietario_legal" 
    class="form-control form-control-lg"
    required
    onchange="proprietarioLegalSelect();proprietarioAnterior();proprietarioLegalSelect2();"
  >
    <option value="" disabled selected>Selecione</option>
    <option value="1">Associado</option>
    <option value="2">Terceiro</option>
  </select>
</div>