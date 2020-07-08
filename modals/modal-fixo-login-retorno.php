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
        <h5 class="modal-title" id="staticBackdropLabel">Usuário já está Logado</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-md-12 text-center">
            <img src="img/ajax-loader.gif">
            </div>
            <div class="col-md-12 text-center">
            <p>Processando os dados encontrados...</p>
            <p>Usuário conectado: <?php echo $_SESSION['Login']['nome_usuario'] ?></p>
            </div>
        </div>
        <meta http-equiv="refresh" content="2;api/" >
      <div class="modal-footer">
        <span type="button" class="btn btn-secondary" data-dismiss="modal">Aguarde, você será redirecionado</span>
      </div>
    </div>
  </div>
</div>



<!-- <div class="modal fade in text-muted" id="modalLoggedIn" tabindex="1" role="dialog" aria-labelledby="myModalLabel" style="display: block;margin-top:15%;z-index:9999">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Usuário Logado</h4>
            </div>
            <div class="modal-body">

                <div class="col-md-12 text-center">
                    <img src="img/ajax-loader.gif">
                </div>
                <div class="col-md-12 text-center">
                    <p>Processando os dados encontrados...</p>
                    <p>Jogador conectado: <?php echo $_SESSION['LOGIN']['nome_usuario'] ?></p>
                </div>
                <div class="clearfix"></div>

            </div>
        </div>
    </div>
</div> -->