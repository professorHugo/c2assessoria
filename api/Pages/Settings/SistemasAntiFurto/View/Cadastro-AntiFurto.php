<?php
 "Sistema Anti Furto: " . $NomeAntiFurto = $_POST['nome'];

 "<br><pre>" . 
$QueryBuscarAntiFurto = "
    SELECT * FROM 
        tb_sistemas_anti_furto 
    WHERE 
        tipo_sistema = '$NomeAntiFurto' &&
        ativacao = 1
";
 "</pre>";
$ExeQrBuscarChave = mysqli_query($connection, $QueryBuscarAntiFurto);

if( mysqli_num_rows($ExeQrBuscarChave) < 1 ){
     "<br><pre>" . 
    $QueryCadastrarChave = "
        INSERT INTO tb_sistemas_anti_furto(
            tipo_sistema
        )VALUES(
            '$NomeAntiFurto'
        )
    ";
     "</pre>";
    $ExeQrCadastrarChave = mysqli_query($connection, $QueryCadastrarChave);
    if( $ExeQrCadastrarChave ){
         "<br>Chave <b>$NomeAntiFurto</b> cadastrada";
        echo "
            <meta http-equiv='refresh' content='0;?Page=Settings&SistemasAntiFurto'>
        ";
    }
}else{
     "<br>Chave <b>$NomeAntiFurto</b> já tem cadastro";
    echo "
        <meta http-equiv='refresh' content='0;?Page=Settings&SistemasAntiFurto'>
    ";
}