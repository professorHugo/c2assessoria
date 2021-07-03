<?php
    if( $SysMode == 1 ){
        echo "Permissão: " . $Permissao = $_SESSION['LoginUsuario']['permissao_usuario'];
        echo "<br>Id: " . $IdUsuario = $_SESSION['LoginUsuario']['id_usuario'];
        if( $Permissao != 2 ){
            ?>
                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Painel de Gerenciamento</h1>
                    <a href="?Page=Relatorios&Criar" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                        <i class="fa fa-plus-circle" aria-hidden="true"></i> Criar Novo Relatório
                    </a>
                </div>
            <?php
        }
    }else{
        "Permissão: " . $Permissao = $_SESSION['LoginUsuario']['permissao_usuario'];
        "<br>Id: " . $IdUsuario = $_SESSION['LoginUsuario']['id_usuario'];
        if( $Permissao != 2 ){
            ?>
                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Painel de Gerenciamento</h1>
                    <a href="?Page=Relatorios&Criar" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                        <i class="fa fa-plus-circle" aria-hidden="true"></i> Criar Novo Relatório
                    </a>
                </div>
            <?php
        }
    }
?>


<!-- Content Row -->
<div class="row">

<!-- Relatórios cadastrados -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
            <div class="col mr-2">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Relatórios Cadastrados</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">
                    <?php
                        
                        if( $Permissao != 2 ){
                            $QueryBuscarRelatorios = "SELECT * FROM tb_relatorios";
                            $ExeQrBuscarRelatorios = mysqli_query($connection, $QueryBuscarRelatorios);
                            if( mysqli_num_rows($ExeQrBuscarRelatorios) > 0 ){
                                echo mysqli_num_rows($ExeQrBuscarRelatorios);
                            }else{
                                echo "0";
                            }
                        }else{
                            $QueryBuscarRelatorios = "SELECT * FROM tb_relatorios WHERE sindicante_evento = '$IdUsuario'";
                            $ExeQrBuscarRelatorios = mysqli_query($connection, $QueryBuscarRelatorios);
                            if( mysqli_num_rows($ExeQrBuscarRelatorios) > 0 ){
                                echo mysqli_num_rows($ExeQrBuscarRelatorios);
                            }else{
                                echo "0";
                            }
                        }
                        
                    ?>
                </div>
            </div>
            <div class="col-auto">
                <i class="fas fa-calendar fa-2x text-gray-300"></i>
            </div>
            </div>
        </div>
        </div>
    </div>
    <?php
        if( $Permissao != 2 ){
            ?>
                <!-- Sindicantes Cadastrados -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Sindicantes</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php
                                    $QueryBuscarSindicantes = "
                                        SELECT * FROM tb_sindicantes
                                        WHERE ativacao = 1
                                    ";
                                    $ExeQrBuscarSindicantes = mysqli_query($connection, $QueryBuscarSindicantes);
                                    if( mysqli_num_rows($ExeQrBuscarSindicantes) > 0 ){
                                        echo mysqli_num_rows($ExeQrBuscarSindicantes);
                                    }else{
                                        echo "0";
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-users fa-2x text-gray-300" aria-hidden="true"></i>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            <?php
        }
    ?>
    

    <!-- Relatórios Entregues -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
            <div class="col mr-2">
                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Relatórios Entregues</div>
                <div class="row no-gutters align-items-center">
                <div class="col-auto">
                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                        <?php
                            if( $Permissao != 2 ){
                                $QueryBuscarRelatorios = "
                                    SELECT * FROM tb_relatorios
                                    WHERE status_relatorio = 'Entregue'
                                ";
                                $ExeQrBuscarRelatorios = mysqli_query($connection, $QueryBuscarRelatorios);
                                if( mysqli_num_rows($ExeQrBuscarRelatorios) > 0 ){
                                    echo mysqli_num_rows($ExeQrBuscarRelatorios);
                                }else{
                                    echo "0";
                                }
                            }else{
                                $QueryBuscarRelatorios = "
                                    SELECT * FROM tb_relatorios
                                    WHERE status_relatorio = 'Entregue' && sindicante_evento = '$IdUsuario'
                                ";
                                $ExeQrBuscarRelatorios = mysqli_query($connection, $QueryBuscarRelatorios);
                                if( mysqli_num_rows($ExeQrBuscarRelatorios) > 0 ){
                                    echo mysqli_num_rows($ExeQrBuscarRelatorios);
                                }else{
                                    echo "0";
                                }
                            }
                            
                        ?>
                    </div>
                </div>
                <div class="col">
                    <?php include 'Status-Relatorios/index.php'?>
                </div>
                </div>
            </div>
            <div class="col-auto">
                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
            </div>
            </div>
        </div>
        </div>
    </div>

    <!-- Mensagens -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
            <div class="col mr-2">
                <?php
                    if( $SysMessages == 1 ){
                        //Sistema ativado
                        ?>
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Mensagens Pendentes</div>
                            <?php
                                include 'messages/Messages.php';
                            ?>
                        <?php
                    }else{
                        //Sistema Desativado
                        ?>
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Mensagens desativadas</div>
                        <?php
                    }
                ?>
                
            </div>
            <div class="col-auto">
                <i class="fas fa-comments fa-2x text-gray-300"></i>
            </div>
            </div>
        </div>
        </div>
    </div>
</div>