<script type="text/javascript">
  $(function(){
    $("body").addClass('modal-open');
  });
</script>

<!-- Modal Perfil Salvo-->
<div 
  class="modal fade show" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
  style="display: block; padding-top:10%; background: var(--background-transparent)"
>
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Perfil salvo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        O Perfil do Condutor foi salvo com sucesso. <br><br>

      </div>
      <div class="modal-footer">
        <a href="?Page=Relatorios&Preencher&Protocolo=<?php echo $Protocolo?>" class="btn btn-primary">Voltar</a>
      </div>
    </div>
  </div>
</div>