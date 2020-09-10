<?php
if(isset($_GET['A2'])){
    $CNH = $_GET['A2'];
    sleep(1);

    if( $CNH !== '5' ){
    ?>
    <div class="form-group">
        <label 
            for="documento_identidade_associado" 
            class="col-form-label col-form-label-lg col-sm-12 col-md-2 float-left"
        > Nº Identidade
        </label>
        <div class="col-sm-12 col-md-4 float-left">
            <input 
                type="number" 
                id="documento_identidade_associado" 
                name="documento_identidade_associado"
                class="form-control form-control-lg"
                placeholder="Apenas os números"
            >
        </div>
        <div class="col-sm-12 col-md-6 float-left">
            <label 
                for="orgao_emissor_associado" 
                class="col-form-label col-form-label-lg col-sm-12 col-md-2 float-left"
            >Emissor:
            </label>
            <div class="col-sm-12 col-md-4 float-left">
                <input 
                    type="text" 
                    id="orgao_emissor_associado" 
                    name="orgao_emissor_associado"
                    class="form-control form-control-lg"
                    placeholder="Digite"
                >
            </div>
            
            
            <label 
                for="uf_emissor_associado" 
                class="col-form-label col-form-label-lg col-sm-12 col-md-2 float-left"
            >UF:
            </label>
            <div class="col-sm-12 col-md-4 float-left">
                <input 
                    type="text" 
                    id="uf_emissor_associado" 
                    name="uf_emissor_associado"
                    class="form-control form-control-lg"
                    placeholder="Digite"
                >
            </div>
        </div>
    </div>

    <div class="clearfix" style="margin-bottom:5px"></div>

    <div class="form-group">
        <!-- Grupo CPF -->
        <label 
            for="cpf_associado" 
            class="col-form-label col-form-label-lg col-sm-12 col-md-2 float-left"
        > Nº CPF
        </label>
        <div class="col-sm-12 col-md-4 float-left">
            <input 
                type="number" 
                id="cpf_associado" 
                name="cpf_associado"
                class="form-control form-control-lg"
                placeholder="Apenas os números"
            >
        </div>
        <label 
            for="nascimento_associado" 
            class="col-form-label col-form-label-lg col-sm-12 col-md-2 float-left"
        > Nascimento:
        </label>
        <div class="col-sm-12 col-md-4 float-left">
            <input 
                type="date" 
                id="nascimento_associado" 
                name="nascimento_associado"
                class="form-control form-control-lg"
                placeholder="Escolha a data"
            >
        </div>
    </div>

    <div class="clearfix" style="margin-bottom:5px"></div>
    
    <div class="form-group">
        <!-- Grupo Permissão -->
        <label 
            for="permissao_associado" 
            class="col-form-label col-form-label-lg col-sm-12 col-md-2 float-left"
        > Permissão: 
        </label>
        <div class="col-sm-12 col-md-4 float-left">
            <select 
                id="permissao_associado" 
                name="permissao_associado"
                class="form-control form-control-lg"
                required
            >
                <option value="" selected disabled>Escolha</option>
                <option value="1">Permissão</option>
                <option value="2">******</option>
            </select>
        </div>
        <div class="col-sm-12 col-md-6 float-left">
            <label 
                for="acc_associado" 
                class="col-form-label col-form-label-lg col-sm-12 col-md-2 float-left"
            >ACC:
            </label>
            <div class="col-sm-12 col-md-4 float-left">
                <select 
                    id="acc_associado" 
                    name="acc_associado"
                    class="form-control form-control-lg"
                    required
                >
                <option value="" disabled selected>Escolha</option>
                <option value="1">AAC</option>
                <option value="2">********</option>
                </select>
            </div>
            
            
            <label 
                for="cat_associado" 
                class="col-form-label col-form-label-lg col-sm-12 col-md-2 float-left"
            >Cat.Hab: 
            </label>
            <div class="col-sm-12 col-md-4 float-left">
                <input 
                    type="text" 
                    id="cat_associado" 
                    name="cat_associado"
                    class="form-control form-control-lg"
                    placeholder="Digite"
                >
            </div>
        </div>
    </div>

    <div class="clearfix" style="margin-bottom:5px"></div>

    <div class="form-group">
        <!-- Grupo Permissão -->
        <label 
            for="registro_associado" 
            class="col-form-label col-form-label-lg col-sm-12 col-md-2 float-left"
        > Nº Registro: 
        </label>
        <div class="col-sm-12 col-md-2 float-left">
            <input 
                type="number" 
                id="registro_associado" 
                name="registro_associado"
                class="form-control form-control-lg"
                placeholder="Digite"
            >
        </div>
        <div class="col-sm-12 col-md-8 float-left">
            <label 
                for="validade_associado" 
                class="col-form-label col-form-label-lg col-sm-12 col-md-2 float-left"
            >Validade:
            </label>
            <div class="col-sm-12 col-md-4 float-left">
                <input 
                    type="date" 
                    id="validade_associado" 
                    name="validade_associado"
                    class="form-control form-control-lg"
                    placeholder="Digite"
                >
            </div>
            
            
            <label 
                for="primeira_hab_associado" 
                class="col-form-label col-form-label-lg col-sm-12 col-md-2 float-left"
            >1ª Hab:
            </label>
            <div class="col-sm-12 col-md-4 float-left">
                <input 
                    type="date" 
                    id="primeira_hab_associado" 
                    name="primeira_hab_associado"
                    class="form-control form-control-lg"
                    placeholder="Digite"
                >
            </div>
        </div>
    </div>
    <?php
    }
}
