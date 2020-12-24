<?php
     "<br><pre>" . 
    $QueryBuscarAssociado = "
        SELECT * FROM 
            tb_relatorios relatorio
        INNER JOIN tb_associados associado
            ON relatorio.cpf_associado = associado.cpf_associado
        INNER JOIN tb_cnh_registros cnh
            ON associado.cnh_associado = cnh.id_cnh
        INNER JOIN tb_fotos foto
            ON cnh.img_cnh1 = foto.id_foto OR cnh.img_cnh2 = foto.id_foto
        WHERE 
            relatorio.protocolo_evento = '$Protocolo' &&
            associado.perfil_salvo = 1
        ";
     "</pre>";

    $ExeQrBuscarAssociado = mysqli_query($connection, $QueryBuscarAssociado);
    $RowQrBuscarAssociado = mysqli_num_rows($ExeQrBuscarAssociado);

    if( $RowQrBuscarAssociado >= 1 ){
        while($ReturnAssociado = mysqli_fetch_assoc($ExeQrBuscarAssociado)){
            $CNHAssociado = $ReturnAssociado['cnh_associado'];
            $Associado = $ReturnAssociado['cpf_associado'];
            $Foto = $ReturnAssociado['nome_foto'];
            $CategoriaFoto = $ReturnAssociado['categoria_foto'];
            ?>
                <div class="col-12 text-center">
                    <h4 class="col-12 text-left" style="margin-top: 2rem">
                        Prontuário 
                        <?php
                            if( $CategoriaFoto == 'prontuario_associado1' ){
                                echo "foto 1";
                            }else{
                                echo "foto 2";
                            }
                        ?>
                    </h4>
                    <img 
                        src="Docs/<?php echo $Associado . "/" . $Foto ?>" 
                        alt="<?php echo $Foto?>"
                        title="<?php echo $CategoriaFoto?>"
                        class="img-fluid"
                    >
                </div>
            <?php
        }
    }else{
        ?>
            <label 
                for="registro_cnh" 
                class="col-xs-5 col-sm-5 col-md-3 col-form-label col-form-label-lg"
                style="margin-top:10px"
            >
                Registro CNH
            </label>

            <div class="col-xs-7 col-sm-7 col-md-4" style="margin-top:10px">
                <select 
                name="registro_cnh" 
                id="registro_cnh"
                class="form-control form-control-lg"
                required
                onchange="registroCNH()"
                >
                <option value="">Selecione</option>
                <option value="1">Habilitado</option>
                <option value="2">Não Habilitado</option>
                </select>
            </div>
            <div class="col-md-4"></div>
            <div class="row" id="return_prontuario" style="display:none">
                <!-- Retorno do prontuário, mostrar a caixa de upload se for habilitado -->
                <label 
                for="status_cnh" 
                class="col-xs-5 col-sm-5 col-md-6 col-form-label col-form-label-lg float-left"
                style="margin-top: 10px;"
                >
                Status da CNH
                </label>

                <div class="col-xs-7 col-sm-7 col-md-6 float-left" style="margin-top:10px">
                <select 
                    name="status_cnh" 
                    id="status_cnh"
                    class="form-control form-control-lg"
                    required
                >
                    <option value="">Selecione</option>
                    <option value="1">Válida</option>
                    <option value="2">Vencida</option>
                    <option value="3">Suspensa</option>
                    <option value="4">Cassada</option>
                </select>
                </div>

                <h5 
                style="border-bottom: 1px solid #ddd; margin-top:1.8rem; width: 100%; float: left"
                >Prontuário DETRAN</h5>
                <label 
                for="prontuario_associado1" 
                class="col-xs-5 col-sm-5 col-md-6 col-form-label col-form-label-lg float-left"
                style="margin-top: 10px"
                >
                Foto/Print 1: 
                </label>

                <div class="col-xs-7 col-sm-7 com-md-3 float-left" style="margin-top: 10px">
                <input 
                    type="file" 
                    name="print_prontuario_associado1" 
                    id="print_prontuario_associado1"
                    style="display: none;"
                >
                <input 
                    type="text" 
                    name="file_prontuario_associado1" 
                    id="file_prontuario_associado1"
                    placeholder="Escolha o arquivo"
                    class="form-control form-control-lg col-9 float-left"
                    readonly
                >
                <button 
                    type="button" 
                    class="btn-default form-control form-control-lg col-3 float-left"
                    id="button-upload-associado1"
                >
                    <i class="fa fa-upload" aria-hidden="true"></i>
                </button>
                </div>


                <label 
                for="prontuario_associado2" 
                class="col-xs-5 col-sm-5 col-md-6 col-form-label col-form-label-lg float-left"
                style="margin-top: 10px"
                >
                Foto/Print 2: 
                </label>

                <div class="col-xs-7 col-sm-7 com-md-3 float-left" style="margin-top: 10px">
                <input 
                    type="file" 
                    name="print_prontuario_associado2" 
                    id="print_prontuario_associado2"
                    style="display: none;"
                >
                <input 
                    type="text" 
                    name="file_prontuario_associado2" 
                    id="file_prontuario_associado2"
                    placeholder="Escolha o arquivo"
                    class="form-control form-control-lg col-9 float-left"
                    readonly
                >
                <button 
                    type="button" 
                    class="btn-default form-control form-control-lg col-3 float-left"
                    id="button-upload-associado2"
                >
                    <i class="fa fa-upload" aria-hidden="true"></i>
                </button>
                </div>
            </div>
        <?php
    }
?>