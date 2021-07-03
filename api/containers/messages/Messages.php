<?php
    if( $SysMessages == 1 ){
        //Sistema de mensagens ativado
        $QueryBuscarMensagens = "
            SELECT * FROM 
                tb_mensagens 
            WHERE 
                receptor_mensagem = '$IdUsuario' &&
                status_mensagem = '0'
        ";
        $ExeQrBuscarMensagens = mysqli_query($connection, $QueryBuscarMensagens);

        if( mysqli_num_rows($ExeQrBuscarMensagens) > 0 ){
            if( mysqli_num_rows($ExeQrBuscarMensagens) > 1 ){
                ?>
                    <div class="h5 mb-0 font-weight-bold text-gray-800" style="font-size: 0.9rem">
                        <?php echo mysqli_num_rows($ExeQrBuscarMensagens) . " Mensagens não lidas";?>
                    </div>
                <?php
            }else{
                ?>
                    <div class="h5 mb-0 font-weight-bold text-gray-800" style="font-size: 1rem">
                        <?php echo mysqli_num_rows($ExeQrBuscarMensagens) . " Mensagem não lida";?>
                    </div>
                <?php
            }
        }else{
            ?>
                <div class="h5 mb-0 font-weight-bold text-gray-800" style="font-size: 1rem">
                    <?php echo "Nenhuma Mensagem";?>
                </div>
            <?php
        }
    }else{
        //Sistema de mensagens desativado
    }
?>