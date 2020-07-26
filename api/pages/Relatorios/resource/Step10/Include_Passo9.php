<?php
//Buscar Relatório para analisar o condutor e apresentar 2 documentos caso seja diferente do associado
$QueryBuscarCondutor = "SELECT * FROM tb_relatorios WHERE protocolo_evento = '$Protocolo'";
$ExeQrBuscarCondutor = mysqli_query($connection, $QueryBuscarCondutor);
$RowQrByscarCondutor = mysqli_num_rows($ExeQrBuscarCondutor);
if($RowQrByscarCondutor >= 1){
    while($ReturnCondutor = mysqli_fetch_assoc($ExeQrBuscarCondutor)){
        if($ReturnCondutor['condutor_veiculo'] == 2){
        echo "<br>Situação CNH Associado: ".$SituacaoCNH = $_POST['cnh_associado'];
        echo "<br>Foto CNH Associado: " . $FotoCNHAssociado = $_FILES['foto_cnh_associado']['name'];
            
        }
    }
}
echo "<br>Situação CNH Condutor: ".$SituacaoCNHCondutor = $_POST['cnh_condutor'];
echo "<br>Foto CNH Condutor: " . $FotoCNHCondutor = $_FILES['foto_chn_condutor']['name'];