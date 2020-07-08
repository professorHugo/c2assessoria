<script type="text/javascript">
    $(function(){
        $("body").addClass('modal-open');
    });
</script>
<!-- Modal Logged in-->
<div class="modal fade show" id="modalLoggedIn" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="display: block;margin-top:15%;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Desconectando Usuário</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-md-12 text-center">
            <img src="../img/ajax-loader.gif">
            </div>
            <div class="col-md-12 text-center">
            <p>Usuário: <b><?php echo $_SESSION['Login']['nome_usuario'] ?></b> desconectado com sucesso</p>
            <?php session_destroy();?>
            </div>
        </div>
        <meta http-equiv="refresh" content="1;../" >
      <div class="modal-footer">
        <span type="button" class="btn btn-secondary" data-dismiss="modal">Aguarde, você será redirecionado</span>
      </div>
    </div>
  </div>
</div>