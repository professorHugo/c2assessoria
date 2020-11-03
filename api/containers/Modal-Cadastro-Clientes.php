
<!-- Modal Cadastro de Cliente -->
<div class="modal fade" id="CadastroCliente" tabindex="-1" aria-labelledby="CadastroClienteLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <form action="?Page=Clientes&Cadastrar" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="CadastroClienteLabel">Cadastrar Cliente</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    
                        <label for="nome" class="col-form-label col-form-label-lg col-2 float-left">
                            Nome: 
                        </label>
                        <div class="col-10 float-left">
                            <input type="text" id="nome" name="nome" class="form-control form-control-lg" placeholder="Digite o nome">
                        </div>

                        <div class="col-12 float-left" style="margin-top: 1rem; height:1px"></div>

                        <label for="email" class="col-form-label col-form-label-lg col-2 float-left">
                            E-mail: 
                        </label>
                        <div class="col-4 float-left">
                            <input type="text" id="email" name="email" class="form-control form-control-lg" placeholder="email@email.com.br">
                        </div>
                        
                        <label for="telefone" class="col-form-label col-form-label-lg col-2 float-left">
                            Telefone: 
                        </label>
                        <div class="col-4 float-left">
                            <input type="text" id="telefone" name="telefone" class="form-control form-control-lg" placeholder="Digite o Telefone">
                        </div>

                        <div class="col-12 float-left" style="margin-top: 1rem; height:1px"></div>

                        <label for="contato" class="col-form-label col-form-label-lg col-4 float-left">
                            Contato do Cliente: 
                        </label>
                        <div class="col-8 float-left">
                            <input type="text" id="contato" name="contato" class="form-control form-control-lg" placeholder="Mariazinha...">
                        </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <input type="submit" name="Cadastro" class="btn btn-primary" value="Cadastrar">
                </div>
            </div>
        </form>
    </div>
</div>