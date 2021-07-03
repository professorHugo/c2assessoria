<script type="text/javascript">
  $(function(){
    $("body").addClass('modal-open');
  });
</script>

<!-- Modal: Salvando Antifurto -->
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
      background: var(--background-transparent)
  "
>
  <div class="modal-dialog modal-dialog-centered">
    <form action="?Page=Relatorios&Preencher&Protocolo=<?php echo $Protocolo?>" method="post">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Entregando Relatório</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="col-md-12 text-center">
            <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
          </div>
          <div class="col-md-12 text-center">
            <p>Entregando o relatório <?php echo $Protocolo ?>...</p>
            <p class='lead'>
              Tem certeza que deseja entregar o relatório?
            </p>
            <p>
              Verifique se todos os dados já estão cadastrados antes de enviar.
            </p>

            <input type="hidden" name="contexto-geral" value="<?php echo $_POST['contexto_geral']?>">
          </div>
        </div>
        <div class="modal-footer row form-group">          
          <div class="col-5 float-left">
            <a 
              href="?Page=Relatorios&Preencher&Protocolo=<?php echo $Protocolo?>" 
              class="btn btn-danger btn-lg btn-block"
            >
              Voltar
            </a>
          </div>

          <div class="col-5 float-left">
            <button 
              type="submit"
              name="Entregar"
              class="btn btn-success btn-lg btn-block"
            >
              Entregar
            </button>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>