<?php
$QueryBuscarRelatorios = "SELECT * FROM tb_relatorios";
$ExeQrBuscarRelatorios = mysqli_query($connection, $QueryBuscarRelatorios);
$QtdQrBuscarRelatorios = mysqli_num_rows($ExeQrBuscarRelatorios);

if( $QtdQrBuscarRelatorios >= 0){
    while($DadosRelatorio = mysqli_fetch_assoc($ExeQrBuscarRelatorios)){
        ?>
        <!-- DataTables Example -->
        <div class="card mb-3">
        <div class="card-header">
            <a href="?url=Relatorios&Cadastrar=Cadastro&Step=1">
                <i class="fas fa-file-medical fa-fw"></i>
                Adicionar Relatório
                </i>
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
            <table class="table table-bordered" id="" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>Protocolo</th>
                    <th>Sindicante</th>
                    <th>Data Criação</th>
                    <th>Update</th>
                    <th>Ver</th>
                    <th>Apagar</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Protocolo</th>
                    <th>Sindicante</th>
                    <th>Data Criação</th>
                    <th>Update</th>
                    <th>Ver</th>
                    <th>Apagar</th>
                </tr>
                </tfoot>
                <tbody>
                <tr>
                    <td>
                        <?php echo $DadosRelatorio['protocolo_evento']?>
                    </td>
                    <td>
                        <?php echo $DadosRelatorio['solicitante_evento']?>
                    </td>
                    <td>
                        <?php echo $DadosRelatorio['horario_criacao']?>
                    </td>
                    <td>
                        <?php echo $DadosRelatorio['horario_update']?>
                    </td>
                    <td>
                        <a href="?url=Relatorios&Ver&id=<?php echo $DadosRelatorio['protocolo_evento']?>">
                            <i class="fas fa-eye fa-fw"></i>
                        </a>
                    </td>
                    <td>
                        <a href="?url=Relatorios&Delete&id=<?php echo $DadosRelatorio['protocolo_evento']?>" class="text-danger">
                            <i class="fas fa-fw fa-trash"></i>
                        </a>
                    </td>
                </tr>
                </tbody>
            </table>
            </div>
        </div>
        <div class="card-footer small text-muted">Atualizado em <?php echo date('d/m/yy')?> às <?php echo date('h:i:sa');?></div>
        </div>
    <?php
    }
}
?>