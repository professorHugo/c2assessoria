<!-- Modal Editar Dinamica do evento -->
<div class="modal fade" id="Editar-Dinamica-Evento" tabindex="-1" aria-labelledby="Editar-Dinamica-EventoLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
      <div class="modal-content">
        <form action="?Page=Relatorios&View&Protocolo=<?php echo $Protocolo ?>&EditarDinamicaEvento" method="post">
          <div class="modal-header">
            <h5 class="modal-title" id="Editar-Dinamica-EventoLabel">Dinamica do Evento</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <label for="novo_dinamica_evento" class="col-form-label col-form-label-lg"
            >Edite o texto como desejar e clique em salvar</label>
            <textarea 
              name="novo_dinamica_evento" 
              id="novo_dinamica_evento" 
              cols="30" rows="15" 
              class="form-control form-control-lg"
            ><?php echo $DinamicaEvento ?></textarea>
            <input type="hidden" name="protocolo" value="<?php echo $Protocolo?>">
          </div>
          <div class="modal-footer">
            <div class="col-3 float-left">
              <button type="button" class="btn btn-outline-danger btn-lg btn-block" data-dismiss="modal">
                Fechar
              </button>
            </div>

            <div class="col-3 float-left">
              <button
                type="submit"
                name="Salvar"
                class="btn btn-outline-success btn-lg btn-block"
              >Salvar</button>
            </div>
          </div>
        </form>
      </div>
  </div>
</div>