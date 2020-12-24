<!-- Modal Desativar de Cliente -->
<div class="modal fade" id="DesativarCliente<?php echo $ReturnClientes['id_cliente']?>" tabindex="-1" aria-labelledby="DesativarClienteLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <form action="?Page=Clientes&Desativar" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="DesativarClienteLabel">Desativar Cliente: <?php echo $ReturnClientes['nome_cliente']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    
                        <label for="nome" class="col-form-label col-form-label-lg col-2 float-left">
                            Nome: 
                        </label>
                        <div class="col-10 float-left">
                            <input type="text" value="<?php echo $ReturnClientes['nome_cliente']?>" id="nome" name="nome" class="form-control form-control-lg" placeholder="Digite o nome">
                        </div>

                        <div class="col-12 float-left" style="margin-top: 1rem; height:1px"></div>

                        <label for="email" class="col-form-label col-form-label-lg col-2 float-left">
                            E-mail: 
                        </label>
                        <div class="col-4 float-left">
                            <input type="text" value="<?php echo $ReturnClientes['email_cliente']?>" id="email" name="email" class="form-control form-control-lg" placeholder="email@email.com.br">
                        </div>
                        
                        <label for="telefone" class="col-form-label col-form-label-lg col-2 float-left">
                            Telefone: 
                        </label>
                        <div class="col-4 float-left">
                            <input type="text"value="<?php echo $ReturnClientes['telefone_cliente']?>" id="telefone" name="telefone" class="form-control form-control-lg" placeholder="Digite o Telefone">
                        </div>

                        <div class="col-12 float-left" style="margin-top: 1rem; height:1px"></div>

                        <label for="contato" class="col-form-label col-form-label-lg col-4 float-left">
                            Contato do Cliente: 
                        </label>
                        <div class="col-8 float-left">
                            <input type="text" value="<?php echo $ReturnClientes['contato_cliente']?>" id="contato" name="contato" class="form-control form-control-lg" placeholder="Mariazinha...">
                        </div>
                        <input type="hidden" name="id_cliente" value="<?php echo $ReturnClientes['id_cliente']?>">
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <input type="submit" name="Desativar" class="btn btn-primary" value="Desativar">
                </div>
            </div>
        </form>
    </div>
</div>