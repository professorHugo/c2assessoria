<form
  action="?Page=Relatorios&Preencher&Protocolo=<?php echo $Protocolo?>&Content=Salvar"
  method="post" enctype="multipart/form-data"
  style="width: 100%"
> 
  <h4>Características técnicas do local do evento</h4>
  <div class="col-12"
    style="
      border-top: 2px solid #ddd; 
      margin-bottom: 2.5rem;
      float: left;
    "
  ></div>


  <div class="form-group row" style="margin-top: 10px">
    <label
      for="indice_criminalidade"
      class="col-sm-6 col-form-label col-form-label-lg"
    >Índice de Criminalidade:
    </label>

    <div class="col-sm-6">
      <select
        name="indice_criminalidade"
        id="indice_criminalidade"
        class="form-control form-control-lg"
        required
      >
        <option value="">Selecione</option>
        <option value="1">Baixo</option>
        <option value="2">Médio</option>
        <option value="3">Alto</option>
      </select>
    </div>
  </div>



  <div class="form-group row" style="margin-top: 10px">
    <label
      for="indice_sinistralidade"
      class="col-sm-6 col-form-label col-form-label-lg"
    >Índice de Sinistralidade:
    </label>

    <div class="col-sm-6">
      <select
        name="indice_sinistralidade"
        id="indice_sinistralidade"
        class="form-control form-control-lg"
        required
      >
        <option value="">Selecione</option>
        <option value="1">Baixo</option>
        <option value="2">Médio</option>
        <option value="3">Alto</option>
      </select>
    </div>
  </div>



  <div class="form-group row" style="margin-top: 10px">
    <label
      for="caracteristicas_local"
      class="col-sm-12 col-form-label col-form-label-lg"
    >Características do empreendimento/edificação:
    </label>

    <div class="col-sm-12">
      <select
        name="caracteristicas_local"
        id="caracteristicas_local"
        class="form-control form-control-lg"
        required
      >
        <option value="">Selecione</option>
        <option value="1">Não Aplicável</option>
        <option value="2">Estacionamento Público</option>
        <option value="3">Estacionamento Privado</option>
        <option value="4">Estacionamento de Hiper/Supermercado e Afins</option>
        <option value="5">Pátio de empresa pública</option>
        <option value="6">Pátio de empresa privada</option>
      </select>
    </div>
  </div>




  <div class="form-group row" style="margin-top: 3rem">
    <h5>Características da via</h5>
    <div class="col-12"
      style="
        border-top: 2px solid #ddd; 
        margin-bottom: 2.5rem;
        float: left;
      "
    ></div>
    
    <div class="custom-control custom-switch">
      <div class="col float-left">
        <input
          type="checkbox"
          name="rua_pavimentada"
          id="rua_pavimentada"
          class="custom-control-input"
        >
        <label for="rua_pavimentada" class="custom-control-label">Rua Pavimentada</label>
      </div>

      <div class="col float-left">
        <input
          type="checkbox"
          name="rua_nao_pavimentada"
          id="rua_nao_pavimentada"
          class="custom-control-input"
        >
        <label for="rua_nao_pavimentada" class="custom-control-label"
        >Não Pavimentada (terra/areia)</label>
      </div>

      <div class="col float-left">
        <input
          type="checkbox"
          name="permitido_estacionar"
          id="permitido_estacionar"
          class="custom-control-input"
        >
        <label for="permitido_estacionar" class="custom-control-label"
        >Permitido Estacionar</label>
      </div>

      <div class="col float-left">
        <input
          type="checkbox"
          name="nao_permitido_estacionar"
          id="nao_permitido_estacionar"
          class="custom-control-input"
        >
        <label for="nao_permitido_estacionar" class="custom-control-label"
        >Não Permitido Estacionar</label>
      </div>

      <div class="col float-left">
        <input
          type="checkbox"
          name="rua_aclive"
          id="rua_aclive"
          class="custom-control-input"
        >
        <label for="rua_aclive" class="custom-control-label"
        >Aclive</label>
      </div>

      <div class="col float-left">
        <input
          type="checkbox"
          name="rua_declive"
          id="rua_declive"
          class="custom-control-input"
        >
        <label for="rua_declive" class="custom-control-label"
        >Declive</label>
      </div>

      <div class="col float-left">
        <input
          type="checkbox"
          name="pista_sentido_unico_simples"
          id="pista_sentido_unico_simples"
          class="custom-control-input"
        >
        <label for="pista_sentido_unico_simples" class="custom-control-label"
        >Sentido Único - Pista simples</label>
      </div>

      <div class="col float-left">
        <input
          type="checkbox"
          name="pista_sentido_duplo_simples"
          id="pista_sentido_duplo_simples"
          class="custom-control-input"
        >
        <label for="pista_sentido_duplo_simples" class="custom-control-label"
        >Sentido Duplo - Pista simples</label>
      </div>

      <div class="col float-left">
        <input
          type="checkbox"
          name="pista_sentido_duplo_duplo"
          id="pista_sentido_duplo_duplo"
          class="custom-control-input"
        >
        <label for="pista_sentido_duplo_duplo" class="custom-control-label"
        >Sentido Duplo - Pista dupla</label>
      </div>

      <div class="col float-left">
        <input
          type="checkbox"
          name="pista_cruzamento_simples"
          id="pista_cruzamento_simples"
          class="custom-control-input"
        >
        <label for="pista_cruzamento_simples" class="custom-control-label"
        >Cruzamento Simples</label>
      </div>

      <div class="col float-left">
        <input
          type="checkbox"
          name="pista_cruzamento_sinalizacao_semaforo"
          id="pista_cruzamento_sinalizacao_semaforo"
          class="custom-control-input"
        >
        <label for="pista_cruzamento_sinalizacao_semaforo" class="custom-control-label"
        >Cruzamento Sinalização Semafórica</label>
      </div>

      <div class="col float-left">
        <input
          type="checkbox"
          name="pista_curva_acentuada"
          id="pista_curva_acentuada"
          class="custom-control-input"
        >
        <label for="pista_curva_acentuada" class="custom-control-label"
        >Curva Acentuada</label>
      </div>

      <div class="col float-left">
        <input
          type="checkbox"
          name="pista_curva_moderada"
          id="pista_curva_moderada"
          class="custom-control-input"
        >
        <label for="pista_curva_moderada" class="custom-control-label"
        >Curva Moderada</label>
      </div>

      <div class="col float-left">
        <input
          type="checkbox"
          name="pista_rotatoria"
          id="pista_rotatoria"
          class="custom-control-input"
        >
        <label for="pista_rotatoria" class="custom-control-label"
        >Rotatória</label>
      </div>

    </div>

  </div>



  <div class="form-group row">
    <label
      for="velocidade_maxima_permitida"
      class="col-sm-12 col-form-label col-form-label-lg"
    >Velocidade Máxima Permitida
    </label>

    <div class="col-sm-12">
      <select
        name="velocidade_maxima_permitida"
        id="velocidade_maxima_permitida"
        class="form-control form-control-lg"
        required
      >
        <option value="">Selecione</option>
        <option value="1">30Km/h</option>
        <option value="2">40Km/h</option>
        <option value="3">50Km/h</option>
        <option value="4">60Km/h</option>
        <option value="5">70Km/h</option>
        <option value="6">80Km/h</option>
        <option value="7">90Km/h</option>
        <option value="8">100Km/h</option>
        <option value="9">120Km/h</option>
      </select>
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
        class="btn btn-outline-success btn-lg btn-block"
      >
        Salvar
      </button>
    </div>
  </div>
</form>