
<!-- Modal Cadastro de Sindicante -->
<div class="modal fade" id="CadastroSindicante" tabindex="-1" aria-labelledby="CadastroSindicanteLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <form action="?Page=Sindicantes&Cadastrar" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="CadastroSindicanteLabel">Cadastrar Sindicante</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    
                        <label for="nome" class="col-form-label col-form-label-lg col-4 float-left">
                            Nome do Sindicante: 
                        </label>
                        <div class="col-8 float-left">
                            <input type="text" id="nome" name="nome" class="form-control form-control-lg" placeholder="Digite o nome">
                        </div>

                        <div class="col-12 float-left" style="margin-top: 1rem; height:1px"></div>

                        <label for="email" class="col-form-label col-form-label-lg col-4 float-left">
                            E-mail do Sindicante: 
                        </label>
                        <div class="col-8 float-left">
                            <input type="text" id="email" name="email" class="form-control form-control-lg" placeholder="email@email.com.br">
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