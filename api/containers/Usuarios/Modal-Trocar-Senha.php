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
  data-backdrop="static"
>
  <form action="?SavePassword" method="post">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Usuário: <?php echo $_SESSION['LoginUsuario']['nome_usuario'] ?></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="col-12 text-center">
            <p>Seja bem vindo ao Sistema <b><?php echo SYSNAME . VERSION ?></b></p>
            <p>
              Como esse é o seu primeiro acesso, por questões de segurança, é necessário mudar sua senha
            </p>
          </div>
          <div class="col-12 row form-group">
            <label 
              for="nova_senha" 
              class="col-form-label col-form-label-lg col-5"
            >Nova Senha</label>
            <div class="col-7">
              <input 
                type="password" 
                name="nova_senha" 
                id="nova_senha" 
                class="form-control form-control-lg"
                placeholder="**********"
              >
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success">
            Salvar Senha
            <i class="fa fa-floppy-o" aria-hidden="true"></i>
          </button>
        </div>
      </div>
    </div>
  </form>
</div>