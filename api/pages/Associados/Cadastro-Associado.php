<div class="col-12">
<form action="?url=Associados&CadastroParte2" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputNome">Nome do Cliente</label>
      <input type="email" class="form-control" name="inputNome" id="inputNome">
    </div>
    <div class="form-group col-md-6">
      <label for="inputSeguradora">Seguradora</label>
      <select name="inputSeguradora" name="inputSeguradora" id="inputSeguradora" class="form-control">
        <option value="Seguradora1">Seguradora 1</option>
      </select>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-2">
      <label for="inputCEP">CEP</label>
      <input type="text" class="form-control" name="inputCEP" id="inputCEP" placeholder="00000-000">
    </div>
    <div class="form-group col-md-6">
      <label for="inputCidade">Cidade</label>
      <input type="text" class="form-control" name="inputCidade" id="inputCidade" placeholder="Aguardando CEP">
    </div>
    <div class="form-group col-md-4">
      <label for="inputEstado">Estado</label>
      <input type="text" class="form-control" name="inputEstado" id="inputEstado" placeholder="Aguardando CEP">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEndereco1">Endereço</label>
    <input type="text" class="form-control" name="inputEndereco" id="inputEndereco" placeholder="Rua do Centro, 125">
  </div>
  
  <button type="submit" class="btn btn-primary">Prosseguir com o cadastro</button>
</form>
</div>