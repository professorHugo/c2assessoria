<!-- Modal Cadastro de Update -->
<div class="modal fade" id="CadastroUpdate" tabindex="-1" aria-labelledby="CadastroUpdateLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <form action="?Page=Updates&Cadastrar" method="post">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="CadastroUpdateLabel" style="color: var(--blue)">Cadastrar Update do sistema</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            
          <label for="titulo_update" class="col-form-label col-form-label-lg col-1 float-left">
            Título: 
          </label>
          <div class="col-3 float-left">
            <input type="text" id="titulo_update" name="titulo_update" class="form-control form-control-lg">
          </div>

          <label for="data_update" class="col-form-label col-form-label-lg col-1 float-left">
            Data: 
          </label>
          <div class="col-3 float-left">
            <input type="date" name="data_update" id="data_update" class="form-control form-control-lg">
          </div>

          <label for="hora_update" class="col-form-label col-form-label-lg col-1 float-left">
            Hora: 
          </label>
          <div class="col-3 float-left">
            <input type="time" name="hora_update" id="hora_update" class="form-control form-control-lg">
          </div>

          <div class="col-12 float-left" style="margin-top: 1rem; height:1px"></div>

          <label for="text_update" class="col-form-label col-form-label-lg col-12 float-left">
            Texto descritivo completo
          </label>
          <div class="col-12 float-left">
            <textarea 
              id="text_update" 
              name="text_update" 
              class="form-control form-control-lg" 
              placeholder="Texto de descrição detalhado do update"
              rows="10"
            ></textarea>
          </div>
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            <input type="submit" name="Cadastro" class="btn btn-primary" value="Cadastrar">
        </div>
      </div>
    </form>
  </div>
</div>