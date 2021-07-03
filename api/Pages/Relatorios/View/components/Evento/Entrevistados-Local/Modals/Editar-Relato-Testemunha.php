<!-- Modal Editar-Relato-Testemunha<?php echo $IdEntrevistado ?> -->
<div class="modal fade" id="Editar-Relato-Testemunha<?php echo $IdEntrevistado ?>" tabindex="-1" aria-labelledby="Editar-Relato-Testemunha<?php echo $IdEntrevistado ?>Label" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
      <div class="modal-content">
        <form 
          action="?Page=Relatorios&View&Protocolo=<?php echo $Protocolo ?>&EditarRelatoTestemunha"
          method="post"
        >
          <div class="modal-header">
            <h5 class="modal-title">Relato da testemunha <b><?php echo $NomeEntrevistado ?></b></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <label for="nova_declaracao" class="col-form-label col-form-label-lg"
            >Edite o texto como desejar e clique em salvar</label>
            <textarea 
              name="nova_declaracao" 
              id="nova_declaracao" 
              cols="30" rows="15" 
              class="form-control form-control-lg"
            ><?php echo $ObservacaoEntrevistado ?></textarea>
            <input type="hidden" name="id_testemunha" value="<?php echo $IdEntrevistado?>">
            <input type="hidden" name="nome_testemunha" value="<?php echo $NomeEntrevistado?>">
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