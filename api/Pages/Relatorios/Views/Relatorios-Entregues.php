<?php
$IdUsuario = $_SESSION['LoginUsuario']['id_usuario'];

if( $IdUsuario != 1 ){
    echo "<br>Permissão Sindicante<pre>" . 
    $QueryBuscarUsuario = "SELECT * FROM tb_usuarios WHERE id_usuario = $IdUsuario";
    echo "</pre>";
    $ExeQrBuscarUsuario = mysqli_query($connection, $QueryBuscarUsuario);

    if( mysqli_num_rows($ExeQrBuscarUsuario) >= 1 ){
        echo "<br><pre>" . 
        $QueryBuscarRelatorios = "
            SELECT * FROM tb_relatorios
            WHERE sindicante_evento = '$IdUsuario'
        ";
        echo "</pre>";
    }

}else{
    echo "<br>Permissão Master<pre>" . 
    $QueryBuscarRelatorios = "
        SELECT * FROM tb_relatorios
    ";
    echo "</pre>";
}

$ExeQrBuscarRelatorios = mysqli_query($connection, $QueryBuscarRelatorios);

?>
<table class="table table-bordered table-dark">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Protocolo</th>
            <th scope="col">Associado</th>
            <th scope="col">Status</th>
            <?php
                if($IdUsuario == 1){
                    echo "<th scope='col'>Dados</th>";
                }else{
                    echo "<th scope='col'>Dados</th>";
                }
            ?>
        </tr>
    </thead>

<?php
if( mysqli_num_rows($ExeQrBuscarRelatorios) >= 1 ){
    while($ReturnRelatorios = mysqli_fetch_assoc($ExeQrBuscarRelatorios)){

        include "container/View-Relatorios.php";

    }
}else{
    echo "<br>Nenhum Relatório cadastrado no sistema";
}
?>
</table>