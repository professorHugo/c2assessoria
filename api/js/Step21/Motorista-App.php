<?php
if( isset($_GET['motorista']) ){
    $Motorista = $_GET['motorista'];
    if( $Motorista == 1 ){
        sleep(1);
        require "../../config/Config.php";
        for( $i = 1; $i <= 6; $i++ ){
            ?>
                <div 
                    class="col-sm-12 col-md-4 float-left bg-info table-bordered" 
                    style="margin-bottom: 20px; padding-bottom: 10px"
                >
                    <label 
                        for="app<?php echo $i?>" 
                        class="col-12 col-form-label col-form-label-lg float-left"
                    >App <?php echo $i?>: 
                    </label>
                    <div class="col-12">
                        <select 
                            name="app_<?php echo $i ?>" 
                            id="app_<?php echo $i ?>"
                            class="form-control form-control-lg"
                        >
                            <option value="" selected disabled>Selecione</option>
                            <option value="1">Nenhum</option>
                            <?php
                                echo $QueryBuscarApp = "SELECT * FROM tb_app_mobilidade WHERE id_app > 1";
                                $ExeQrBuscarApp = mysqli_query($connection, $QueryBuscarApp);
                                if( mysqli_num_rows($ExeQrBuscarApp) >= 1 ){
                                    while( $App = mysqli_fetch_assoc($ExeQrBuscarApp) ){
                                        echo "
                                            <option value='$App[id_app]'>$App[nome_app]</option>
                                        ";
                                    }
                                }else{
                                    echo "
                                        <option value='' disabled>Ainda não existem apps</option>
                                    ";
                                }
                            ?>
                        </select>
                    </div>
                </div>
            <?php
        }
    }else{

    }
}