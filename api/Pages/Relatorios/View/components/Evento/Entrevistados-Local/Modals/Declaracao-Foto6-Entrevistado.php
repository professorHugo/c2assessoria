<div class="modal fade" id="Declaracao-Foto6-Entrevistado<?php echo $IdEntrevistado ?>" tabindex="-1" aria-labelledby="Declaracao-Foto6-EntrevistadoLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="Declaracao-Foto6-EntrevistadoLabel">
          Declaração da testemunha <b><?php echo $NomeEntrevistado ?></b> - Foto 6
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-12 text-center">
          <img src="Docs/<?php echo "$PastaFoto6Entrevistado/$NomeArquivoFoto6Entrevistado" ?>"
            alt="<?php echo $NomeArquivoFoto6Entrevistado ?>"
            class="img-fluid"
          >
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>