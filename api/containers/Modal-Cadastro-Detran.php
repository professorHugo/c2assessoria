
<!-- Modal Cadastro de Estadp Detran -->
<div class="modal fade" id="CadastroDetran" tabindex="-1" aria-labelledby="CadastroDetranLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <form action="?Page=Settings&Detran" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="CadastroDetranLabel">Cadastrar Estado Detran</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    
                        <label for="nome" class="col-form-label col-form-label-lg col-12 float-left">
                            Sigla do estado: 
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