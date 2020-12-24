<?php
if( isset($_GET['Financiamento']) ){
  $Financiamento = $_GET['Financiamento'];

  if( $Financiamento == 1 ){
    ?>
      <label
        for="instituicao_financeira"
        class="col-xs-4 col-sm-4 col-md-3 col-form-label col-form-label-lg"
        style="margin-top: 10px"
      >Instituição:
      </label>
      <div class="col-xs-8 col-sm-8 col-md-3" style="margin-top: 10px">
        <input
          type="text"
          name="instituicao_financeira"
          id="instituicao_financeira"
          class="form-control form-control-lg"
        >
      </div>

      <label
        for="valor_parcelas"
        class="col-xs-4 col-sm-5 col-md-3 col-form-label col-form-label-lg"
        style="margin-top: 10px; font-size: 1rem"
      >Valor das Parcelas:
      </label>
      <div class="col-xs-8 col-sm-7 col-md-3" style="margin-top: 10px">
        <input
          type="text"
          name="valor_parcelas"
          id="valor_parcelas"
          class="form-control form-control-lg"
          placeholder="Apenas o valor. Ex: 999,99"
        >
      </div>

      <label
        for="qtd_total_parcelas"
        class="col-xs-4 col-sm-6 col-md-3 col-form-label col-form-label-lg"
        style="margin-top: 10px"
      >Total Parcelas:
      </label>
      <div class="col-xs-8 col-sm-6 col-md-3" style="margin-top: 10px">
        <input
          type="text"
          name="qtd_total_parcelas"
          id="qtd_total_parcelas"
          class="form-control form-control-lg"
        >
      </div>

      <label
        for="qtd_parcelas_pagas"
        class="col-xs-4 col-sm-5 col-md-3 col-form-label col-form-label-lg"
        style="margin-top: 10px"
      >Total Pagas:
      </label>
      <div class="col-xs-8 col-sm-7 col-md-3" style="margin-top: 10px">
        <input
          type="text"
          name="qtd_parcelas_pagas"
          id="qtd_parcelas_pagas"
          class="form-control form-control-lg"
          placeholder="Quantidade pagas"
        >
      </div>

      <label
        for="status_pagamentos"
        class="col-xs-4 col-sm-6 col-md-6 col-form-label col-form-label-lg"
        style="margin-top: 10px; font-size: 1.05rem"
      >Status Pagamento:
      </label>
      <div class="col-xs-8 col-sm-6 col-md-6" style="margin-top: 10px">
        <select
          name="status_pagamentos"
          id="status_pagamentos"
          class="form-control form-control-lg"
          required
          onchange="statusPagamentos();statusPagamentos2()"
        >
          <option value="" disabled selected>Selecione</option>
          <option value="1">Adimplente</option>
          <option value="2">Inadimplente</option>
        </select>
      </div>

      <!-- Return Status dos pagamentos -->
      <div style="width: 100%; display:none" id="return_status_pagamentos">
        <label
          for="qtd_parcelas_inadimplente"
          class="col-xs-4 col-sm-5 col-md-3 col-form-label col-form-label-lg float-left"
          style="margin-top: 10px;"
        >Total Inadimplentes:
        </label>
        <div class="col-xs-8 col-sm-7 col-md-3 float-left" style="margin-top: 25px">
          <input
            type="text"
            name="qtd_parcelas_inadimplente"
            id="qtd_parcelas_inadimplente"
            class="form-control form-control-lg"
            placeholder="Quantidade Não Pagas"
          >
        </div>
      </div>
    <?php
  }
}