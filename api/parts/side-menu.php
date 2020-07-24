<!-- Sidebar -->
<ul class="sidebar navbar-nav" id="sidebar">
    <li class="nav-item active">
        <a class="nav-link" href="index.php">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Painel de Controle</span>
        </a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-fw fa-folder"></i>
        <span>Páginas</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Associados:</h6>
            <a class="dropdown-item" href="?url=Associados">
                <i class="fas fa-eye fa-fw"></i>
                Ver Todos
            </a>
            <a class="dropdown-item" href="?url=Associados&Cadastrar">
                <i class="fas fa-file-medical fa-fw"></i>
                Cadastrar
            </a>
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Sindicantes:</h6>
            <a class="dropdown-item" href="?url=Sindicantes">
                <i class="fas fa-eye fa-fw"></i>
                Ver Todos
            </a>
            <a class="dropdown-item" href="?url=Sindicantes&Cadastrar">
                <i class="fas fa-file-medical fa-fw"></i>
                Cadastrar
            </a>
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Relatórios:</h6>
            <a class="dropdown-item" href="?url=Relatorios">
                <i class="fas fa-eye fa-fw"></i>
                Ver Todos
            </a>
            <a class="dropdown-item" href="?url=Relatorios&Cadastrar=Cadastro&Step=1">
                <i class="fas fa-file-medical fa-fw"></i>
                Cadastrar
            </a>
        </div>
    </li>
    <?php

    ?>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-fw fa-cog"></i>
        <span>Configurações</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="?url=Clientes">Clientes</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="?url=Naturezas">Naturezas</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="?url=Civil">Estado Civil</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="?url=Procedentes">Procedentes</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="?url=Chaves">Apres Chaves</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="?url=Anti-Furto">Sistemas Anti-Furto</a>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="tables.html">
        <i class="fas fa-fw fa-table"></i>
        <span>Tables</span></a>
    </li>
</ul>