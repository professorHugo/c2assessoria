<div class="modal fade" id="Documento-Convivio-Frente<?php echo $IdEntrevistadoConvivio ?>" tabindex="-1" aria-labelledby="Documento-Convivio-FrenteLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="Documento-Convivio-FrenteLabel">
          Documento da testemunha <b><?php echo $NomeEntrevistadoConvivio ?></b> - Frente
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-12 text-center">
          <img src="Docs/<?php echo "$PastaConvivioFrente/$DocConvivioFrente" ?>"
            alt="<?php echo $DocConvivioFrente ?>"
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