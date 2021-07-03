<h5 
  class="col-12"
  style="
    margin-top: 4rem;
    float: left
  "
>Polícia Militar</h5>

<div class="col-12 row" id="pesquisa-pm">
  <div class="col-6">
    <label for="orgaos_publicos_pm" class="col-form-label col-form-label-lg">
      Apresentado: 
    </label>
  </div>

  <div class="col-6">
    <select 
      name="orgaos_publicos_pm" 
      id="orgaos_publicos_pm" 
      class="form-control form-control-lg"
      required
      onchange="MostrarPesquisasPM();MostrarBoletimAutenticoPM()"
    >
      <option selected disabled>Selecione</option>
      <option value="1">Sim</option>
      <option value="2">Não</option>
    </select>
  </div>
  
  <div id="boletim_pm" style="width: 100%">
    <!-- <?php include 'containers/Boletim-Autentico-PM.php'?> -->
  </div>
</div>

<div class="space-1"></div>


<div class="col-12" id="Preenchimento-Policia-Militar">
  <div id="Resultados-Pesquisas-PM"></div>
</div>