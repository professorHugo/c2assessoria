<script type="text/javascript">
  $(function(){
      $("body").addClass('modal-open');
  });
</script>

<div 
  class="modal fade show" 
  id="modalLoggedIn" 
  data-keyboard="false" 
  tabindex="-1" 
  role="dialog" 
  aria-labelledby="staticBackdropLabel" 
  aria-hidden="true" 
  style="
    display: block;
    background: var(--background-opacity)
  "
>
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Cadastro de novo Cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="col-md-12 text-center">
            <img src="img/ajax-loader.gif">
          </div>
            <div class="col-md-12 text-center">
              <p>
                <b>Cadastrando</b> o cliente... <br>
                <?php echo $NomeCliente ?>
              </p>
              <p>
                <b>E-Mail: </b> <?php echo $EmailCliente?><br>
                <b>Telefone: </b> <?php echo $TelefoneCliente?><br>
                <b>Contato: </b> <?php echo $ContatoCliente?><br>
              </p>
            </div>
        </div>
      <div class="modal-footer">
        <a 
          href="?Page=Clientes" 
          class="btn btn-form btn-form" 
          style="background: var(--blue);color: #fff"
        >
          Voltar
        </a>
      </div>
    </div>
  </div>
</div>