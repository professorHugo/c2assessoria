<div 
  class="modal fade" 
  id="Modal-Add-Entrevistado" 
  tabindex="-1" 
  aria-labelledby="exampleModalLabel" 
  aria-hidden="true"
>
  <div class="modal-dialog modal-lg" style="min-width: 80%">
  <form
    id="form"
    enctype="multipart/form-data"
    action=""
    method="post"
  >
    <input type="hidden" name="protocolo" value="<?php echo $Protocolo ?>">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Adicionar Entrevistado</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-12">
            <label
              for="nome_testemunha"
              class="col-12 col-form-label col-form-label-lg float-left"
            >Nome do Entrevistado:</label>
            <div class="col-12">
              <input
                type="text"
                name="nome_testemunha"
                id="nome_testemunha"
                class="form-control form-control-lg"
              >
            </div>


            <div class="row">
              <div class="col-12" style="margin-top: 1rem">
                <label
                  for="tipo_entrevistado"
                  class="col-5 col-form-label col-form-label-lg float-left"
                >Tipo:</label>
                <div class="col-7 float-left">
                  <select
                    name="tipo_entrevistado"
                    id="tipo_entrevistado"
                    class="form-control form-control-lg"
                    required
                  >
                    <option value="" disabled selected>Escolha</option>
                    <option value="1">Testemunha</option>
                    <option value="2">Sabedor</option>
                  </select>
                </div>
              </div>
              <div class="col-12" style="margin-top: 1rem">
                <label 
                  for="tipo_convivio" 
                  class="col-5 col-form-label col-form-label-lg float-left"
                >Tipo de Convívio: </label>

                <div class="col-7 float-left">
                  <input 
                    type="text" 
                    name="tipo_convivio" 
                    id="tipo_convivio" 
                    class="form-control form-control-lg"
                    placeholder="Parente, Amigo, Colega, etc"
                  >
                </div>
              </div>
            </div>

            <hr>

            <div style="margin-top:10px"></div>
            <div class="row">
              <label 
                for="cep_testemunha" 
                class="col-sm-12 col-md-2 col-form-label col-form-label-lg"
              >CEP:</label>
              <div class="col-sm-12 col-md-3">
                <input
                  type="number"
                  placeholder="00000000"
                  name="cep_testemunha"
                  id="cep_testemunha"
                  class="form-control form-control-lg"
                >
              </div>

              <label
                for="endereco_testemunha"
                class="col-sm-12 col-md-2 col-form-label col-form-label-lg"
              >Endereço:</label>
              <div class="col-sm-10 col-md-4">
                <input
                  type="text"
                  name="endereco_testemunha"
                  placeholder="Rua/Av/Estrada/Etc"
                  id="endereco_testemunha"
                  class="form-control form-control-lg"
                  required
                >
              </div>

              <div class="col-sm-2 col-md-1">
                <input
                  type="text"
                  name="numero_testemunha"
                  id="numero_testemunha"
                  placeholder="Nº"
                  class="form-control form-control-lg"
                >
              </div>
            </div>
            <div style="margin-bottom:10px"></div>


            <div class="form-group row">
              <label
                for="bairro_testemunha"
                class="col-sm-12 col-md-2 col-form-label col-form-label-lg"
              >Bairro: </label>
              <div class="col-sm-12 col-md-3">
                <input
                  type="text"
                  class="form-control form-control-lg"
                  name="bairro_testemunha"
                  id="bairro_testemunha"
                  required
                >
              </div>

              <label
                for="cidade_testemunha"
                class="col-sm-12 col-md-2 col-form-label col-form-label-lg"
              >Cidade:</label>
              <div class="col-sm-10 col-md-4">
                <input
                  type="text"
                  class="form-control form-control-lg"
                  name="cidade_testemunha"
                  id="cidade_testemunha"
                >
              </div>
              <div class="col-sm-2 col-md-1">
                <input
                  type="text"
                  placeholder="uf"
                  class="form-control form-control-lg"
                  name="estado_testemunha"
                  id="estado_testemunha"
                >
              </div>
            </div>


            <hr>
            <div style="margin-top: 10px"></div>

            <div class="row">
              
              <label
                for="telefone_testemunha"
                class="col-sm-12 col-md-2 col-form-label col-form-label-lg"
              >Telefone:</label>
              <div class="col-sm-12 col-md-4">
                <input
                  type="text"
                  class="form-control form-control-lg"
                  name="telefone_testemunha"
                  id="telefone_testemunha"
                >
              </div>


              <label
                for="observacao_testemunha"
                class="col-sm-12 col-md-2 col-form-label col-form-label-lg"
              >Observação:</label>
              <div class="col-sm-12 col-md-4">
                <textarea
                  type="text"
                  class="form-control form-control-lg"
                  name="observacao_testemunha"
                  id="observacao_testemunha"
                  placeholder="Coloque a observação que julgar necessário sobre o Entrevistado..."
                ></textarea>
              </div>
            </div>

            <hr>
            <div style="margin-top: 10px"></div>


            <div id="return_testemunha"></div>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar/Cancelar</button>
        <button type="button" onclick="SalvarTestemunha()" class="btn btn-primary">
            <i class="fa fa-floppy-o" aria-hidden="true"></i>
            Salvar Entrevistado
        </button>
      </div>
    </div>
    </form>
  </div>
</div>