<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="?">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fa fa-tachometer" aria-hidden="true"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Advisory <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <!-- <hr class="sidebar-divider my-0"> -->

    <!-- Nav Item - Dashboard -->
    <!-- <li class="nav-item active">
    <a class="nav-link" href="index.html">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li> -->

    <!-- Divider -->
    <hr class="sidebar-divider">


    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fa fa-file-text" aria-hidden="true"></i>
        <span>Relatórios</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="?Page=Relatorios">Ver Todos</a>

            <?php
                if( 
                    $_SESSION['LoginUsuario']['permissao_usuario'] == 1 ||
                    $_SESSION['LoginUsuario']['permissao_usuario'] == 3 
                ){
                    echo '
                        <a class="collapse-item" href="?Page=Relatorios&Criar">Criar</a>
                    ';
                }
            ?>
        </div>
    </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
    
        
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
    <a 
        class="nav-link collapsed" 
        href="#" 
        data-toggle="collapse" 
        data-target="#Sindicantes" 
        aria-expanded="true" 
        -controls="collapsePages"
    >
        <i class="fas fa-fw fa-folder"></i>
        <span>
        <?php
            if( $_SESSION['LoginUsuario']['permissao_usuario'] == 1 || $_SESSION['LoginUsuario']['permissao_usuario'] == 3 ){
                echo "Sindicantes";
            }else{
                echo "Sindicante";
            }
        ?>
        </span>
    </a>
    <div id="Sindicantes" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login:</h6>
            <a class="collapse-item" href="?Page=Sindicantes">Ver Todos</a>
            <?php
                if( $_SESSION['LoginUsuario']['permissao_usuario'] == 1 || $_SESSION['LoginUsuario']['permissao_usuario'] == 3 ){
                    ?>
                        <a class="collapse-item" style="cursor:pointer" data-toggle="modal" data-target="#CadastroSindicante">Cadastrar</a>
                    <?php
                }
            ?>
            <?php
                if( $_SESSION['LoginUsuario']['permissao_usuario'] != 1 || $_SESSION['LoginUsuario']['permissao_usuario'] == 3 ){
                    ?>
                        <a class="collapse-item" href="?Page=Sindicantes&Editar">Editar Cadastro</a>
                    <?php
                }
            ?>
            
            <div class="collapse-divider"></div>
            <?php
                if( $_SESSION['LoginUsuario']['permissao_usuario'] == 1 || $_SESSION['LoginUsuario']['permissao_usuario'] == 3 ){
                    ?>
                        <h6 class="collapse-header">Relatorios:</h6>
                        <a class="collapse-item" href="?Page=Relatorios">Por Sindicante</a>
                    <?php
                }
            ?>
            
        </div>
    </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Nav Item - Pages Collapse Menu -->
<?php
    if( $_SESSION['LoginUsuario']['permissao_usuario'] == 1 || $_SESSION['LoginUsuario']['permissao_usuario'] == 3 ){
    ?>
    <!-- Heading -->
    <div class="sidebar-heading">
        Configurações
    </div>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Clientes" aria-expanded="true" aria-controls="Clientes">
            <i class="fas fa-fw fa-folder"></i>
            <span>
                Clientes
            </span>
        </a>
        <div id="Clientes" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" style="cursor:pointer" data-toggle="modal" data-target="#CadastroCliente">Cadastrar</a>
                <a class="collapse-item" href="?Page=Clientes">Ver Cadastros</a>
            <div class="collapse-divider"></div>
                <h6 class="collapse-header">Relatorios:</h6>
                <a class="collapse-item" href="?Page=Clientes&Relatorios">Por Cliente</a>
            </div>
        </div>
    </li>
 
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Configurar</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="?Page=Settings&Naturezas">Naturezas</a>
                <a class="collapse-item" href="?Page=Settings&Civil">Estado Civil</a>
                <a class="collapse-item" href="?Page=Settings&Procedentes">Procedentes</a>
                <a class="collapse-item" href="?Page=Settings&Chaves">Apresentação de Chaves</a>
                <a class="collapse-item" href="?Page=Settings&SistemasAntiFurto">Sistemas Anti-Furto</a>
                <a class="collapse-item" href="?Page=Settings&Detran">DETRAN</a>
                <!-- <a class="collapse-item" href="?Page=Settings&Vistorias">Tipos de Vistorias</a> -->
            </div>
        </div>
    </li>
<?php
    }

    if( $_SESSION['LoginUsuario']['permissao_usuario'] == 3 ){
        if( $SysMode == 2 ){
            echo "
                <li class='nav-item'>
                    <a class='nav-link collapsed' href='?MudarSys=Dev'>Mudar Para Dev</a>
                </li>
            ";
        }else{
            echo "
                <li class='nav-item'>
                    <a class='nav-link collapsed' href='?MudarSys=Prod'>Mudar Para Produção</a>
                </li>
            ";
        }
        
    }
?>
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>