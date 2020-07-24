<?php
$IdCliente = $_POST['id_cliente'];
$NomeClinete = $_POST['nome_cliente'];
$QueryUpdateCliente = "
    UPDATE tb_clientes SET
        nome_cliente = '$NomeClinete'
    WHERE id_cliente = '$IdCliente'
";
$ExeQrUpdateCliente = mysqli_query($connection, $QueryUpdateCliente);

if($ExeQrUpdateCliente){
?>
    <script type="text/javascript">
        $(function(){
            $("body").addClass('modal-open');
        });
    </script>
    <!-- Modal Logged in-->
    <div class="modal fade show" id="modalSaveClient" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="display: block;margin-top:12%;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Alterando informações do cliente</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="col-md-12 text-center">
                <img src="../img/ajax-loader.gif">
                </div>
                <div class="col-md-12 text-center">
                    <p>Salvando dados do cliente...</p>
                    <p>Cliente: <?php echo $_POST['nome_cliente'] ?></p>
                </div>
            </div>
            <meta http-equiv="refresh" content="2;?url=Clientes" >
        <div class="modal-footer">
            <span type="button" class="btn btn-secondary" data-dismiss="modal">Aguarde, você será redirecionado</span>
        </div>
        </div>
    </div>
    </div>
<?php
    
}else{
    echo "erro ao atualizar o cliente.". mysqli_error($connection);
}
?>