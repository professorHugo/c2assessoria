<?php

if( isset($_GET['nome']) ){
    if( $_GET['nome'] == 2 ){
        //Se for aplicativo instalado em dispositivo de terceiros
        ?>
            <label 
                for="nome_terceiro" 
                class="col-sm-12 col-md-3 col-form-label col-form-label-lg float-left"
                id="nome_terceiro"
            >Nome do Terceiro: 
            </label>
            <div class="col-sm-12 col-md-5 float-left">
                <input 
                    type="text" 
                    name="nome_terceiro" 
                    id="nome_terceiro"
                    class="form-control form-control-lg"
                >
            </div>
            <label 
                for="telefone_terceiro" 
                class="col-sm-3 col-md-1 col-form-label col-form-label-lg float-left"
                id="telefone_terceiro"
            >Telefone: 
            </label>
            <div class="col-sm-9 col-md-3 float-left">
                <input 
                    type="text" 
                    name="telefone_terceiro" 
                    id="telefone_terceiro"
                    class="form-control form-control-lg"
                >
            </div>
            <div class="clearfix"></div>
            <hr 
                style="
                    margin-top: 1rem; 
                    margin-bottom:1rem; 
                    border:0; 
                    border-top:1px solid rgba(0,0,0,.1); 
                    width: 100%
                "
            >
        <?php
    }
}