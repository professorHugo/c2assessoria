<h5 
  class="col-12"
  style="
    margin-top: 4rem;
    float: left
  "
>Polícia Civil</h5>

<div class="col-12 row" id="pesquisa-pc">
  <div class="col-6">
    <label for="orgaos_publicos_pc" class="col-form-label col-form-label-lg">
      Apresentado: 
    </label>
  </div>

  <div class="col-6 float-left">
    <select 
      name="orgaos_publicos_pc" 
      id="orgaos_publicos_pc" 
      class="form-control form-control-lg"
      required
      onchange="MostrarPesquisasPC();MostrarBoletimAutenticoPC()"
    >
      <option selected disabled>Selecione</option>
      <option value="1">Sim</option>
      <option value="2">Não</option>
    </select>
  </div>

  <div id="boletim_pc" style="width: 100%">
    <!-- <?php include 'containers/Boletim-Autentico-PC.php'?> -->
  </div>
  
</div>

<div class="space-1"></div>

<div class="col-12" id="Preenchimento-Policia-Civil">
  <div id="Resultados-Pesquisas-PC"></div>
</div>