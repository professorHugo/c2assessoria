<script type="text/javascript">
    $(function(){
        $("body").addClass('modal-open');
    });
</script>

<!-- Modal Logged in-->
<div 
    class="modal fade show" 
    id="modalLogoff" 
    data-keyboard="false" 
    tabindex="-1" 
    role="dialog" 
    aria-labelledby="staticBackdropLabel" 
    aria-hidden="true" 
    style="
        display: block;
        padding-top:10%;
        background: var(--blue-color)!important;
    "
>
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Desconectando Usuário</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            
            <div class="col-md-12 text-center">
                <p>
                
                    O Usuário <b><?php echo $_SESSION['LoginUsuario']['nome_usuario'] ?></b>
                    será desconectado...
                
                    <?php 
                        $IdUsuario = $_SESSION['LoginUsuario']['id_usuario'];
                        $QueryUpdateStatus = "
                            UPDATE tb_usuarios
                            SET
                                usuario_status = 2
                            WHERE 
                                id_usuario = '$IdUsuario'
                        ";
                        $ExeQrUpdateStatus = mysqli_query($connection, $QueryUpdateStatus);
                        session_destroy();
                    ?>

                </p>
            </div>

            <div class="col-12 text-center">
                <img src="./img/logout.gif" class="img-fluid">
            </div>
        </div>
        <div class="modal-footer">
            Aguarde, você será redirecionado para a página de login
            <meta http-equiv="refresh" content="0;../">
        </div>
        </div>
    </div>
</div>