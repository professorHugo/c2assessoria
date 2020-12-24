<script type="text/javascript">
  $(function(){
    $("body").addClass('modal-open');
  });
</script>

<!-- Modal: Salvando dados: Polícia Civil -->
<div 
  class="modal fade show" 
  id="modalLoggedIn" 
  data-keyboard="false"
  data-backdrop="static"
  tabindex="-1" 
  role="dialog" 
  aria-labelledby="staticBackdropLabel" 
  aria-hidden="true" 
  style="
      display: block;
      padding-top:10%;
      background: var(--background-transparent)
  "
>
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Salvando dados: Polícia Civil</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="col-md-12 text-center">
                <img src="img/ajax-loader.gif">
                </div>
                <div class="col-md-12 text-center">
                <p>Salvando dados cadastrados...</p>
                <p>
                  Os dados foram salvos com sucesso.
                </p>
                </div>
            </div>
        <div class="modal-footer">
            <a 
                href="?Page=Relatorios&Preencher&Protocolo=<?php echo $Protocolo ?>" 
                class="btn btn-form btn-form" 
                style="background: var(--blue);color: #fff"
            >
                Voltar
            </a>
        </div>
        </div>
    </div>
</div>