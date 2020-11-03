
<!-- Modal Cadastro de Naturezas -->
<div class="modal fade" id="CadastroNaturezas" tabindex="-1" aria-labelledby="CadastroNaturezasLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <form action="?Page=Settings&Naturezas&Cadastrar" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="CadastroNaturezasLabel">Cadastrar Naturezas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    
                        <label for="nome" class="col-form-label col-form-label-lg col-12 float-left">
                            Nome da Natureza: 
                        </label>
                        <div class="col-12 float-left">
                            <input type="text" id="nome" name="nome" class="form-control form-control-lg" placeholder="Digite o nome">
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