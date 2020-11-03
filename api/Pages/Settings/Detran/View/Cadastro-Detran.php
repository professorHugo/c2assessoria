<?php
echo "<br>Estado: " . $NomeEstado = $_POST['nome'];

echo "<br><pre>" . 
$QueryBuscarEstado = "
  SELECT * FROM tb_detran_estados
  WHERE estado_detran = '$NomeEstado' && ativacao = 1
";
$ExeQrBuscarEstado = mysqli_query($connection, $QueryBuscarEstado);

if( mysqli_num_rows($ExeQrBuscarEstado) < 1 ){
  echo "<br><pre>" . 
  $QueryCadastarEstado = "
    INSERT INTO tb_detran_estados(
      estado_detran
    )VALUES(
      '$NomeEstado'
    )
  ";
  echo "</pre>";
  $ExeQrCadastrarEstado = mysqli_query($connection, $QueryCadastarEstado);
  if( $ExeQrCadastrarEstado ){
    echo "<br>Estado <b>$NomeEstado</b> Cadastrado";
    echo "<meta http-equiv='refresh' content='0;?Page=Settings&Detran'>";
  }else{
    echo "<br>Erro: " . mysqli_error($connection);
  }
}else{
  echo "<br>Estado <b>$NomeEstado</b> já cadastrado";
  echo "<meta http-equiv='refresh' content='0;?Page=Settings&Detran'>";
}