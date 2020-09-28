<h5>Relatório de Sindicância: <?php echo $_GET['Cadastrar']?></h5>
<ul>
    <li>Passo <?php echo $_GET['Step']?> - Entrega do Relatório</li>
</ul>
<b>Resultado: <span class="text-danger"><?php echo "Análise";?></span></b>
<hr>

<?php
echo "<br> Protocolo: " . $Protocolo = $_SESSION['ProtocoloCondutor'];
echo "<br> CPF/Pasta do Associado: " .
$CPFAssociado = $_SESSION['PastaAssociado'];
"<br> Placa do Veículo: " . $PlacaVeiculo = $_SESSION['PlacaVeiculo'];

include_once "Cadastrar-Dados-Passo22.php";
if( $ExeQrUpdateRelatorio ){
    echo "<br>Relatório Finalizado";
?>

<script type="text/javascript">
    $(function(){
        $("body").addClass('modal-open');
    });
</script>

Modal Logged in
<div 
    class="modal fade show" 
    id="modalLoggedIn" 
    data-keyboard="false" 
    tabindex="-1" 
    role="dialog" 
    aria-labelledby="staticBackdropLabel" 
    aria-hidden="true" 
    style="
        display: block;
        padding-top:3%;
        background: var(--background-transparent)
    "
>
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Finalização do cadastro</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="col-md-12 text-center">
                </div>
                <div class="col-md-12 text-center">
                    <img src="img/sending.gif" style="z-index: -1; margin-top:-15px">
                    <p style="margin-top:-100px">Seu relatório foi cadastrado...</p>
                    <p>Protocolo: <?php echo $Protocolo ?></p>
                    <p>
                        O próximo passo é fazer a entrega, ou caso desejar, pode fazer as alterações que 
                        julgue convenientes e enecessárias
                    </p>
                </div>
            </div>
        <div class="modal-footer">
            <a href="?Page=Relatorios" class="btn btn-outline-success btn-lg btn-block">Ver Relatórios</a>
        </div>
        </div>
    </div>
</div>
<?php

echo "<br><pre>".
$UpdateRelatorio = "
    UPDATE tb_relatorios
    SET 
        status_relatorio = 'Entregue'
    WHERE protocolo_evento = '$Protocolo'
";
echo "</pre>";
$ExeQrUpdateRelatorio = mysqli_query($connection, $UpdateRelatorio);
if( $ExeQrUpdateRelatorio ){
    echo "<br>Relatório atualizado";
}else{
    echo "<br>Erro: " . mysqli_error($connection);
}

}

