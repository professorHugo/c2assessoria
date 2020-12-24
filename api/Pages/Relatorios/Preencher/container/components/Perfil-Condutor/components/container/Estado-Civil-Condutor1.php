<select 
    name="estado_civil_condutor" 
    id="estado_civil_condutor" 
    class="form-control form-control-lg" 
    required
>
<?php
    echo $QueryBuscarEstadoCivil = "SELECT * FROM tb_tipos_civil";
    $ExeQrBuscarEstadoCivil = mysqli_query($connection, $QueryBuscarEstadoCivil);
    $RowQrBuscarEstadoCivil = mysqli_num_rows($ExeQrBuscarEstadoCivil);

    if( $RowQrBuscarEstadoCivil > 0 ){
    ?>
        <option value="" disabled selected>Escolha</option>
    <?php
    while( $EstadoCivil = mysqli_fetch_assoc($ExeQrBuscarEstadoCivil) ){
        ?>
        <option value="<?php echo $EstadoCivil['id_civil']?>">
            <?php echo $EstadoCivil['descricao_civil']?>
        </option>
        <?php
    }
    }else{
    ?>
        <option value="" disabled selected>Estados Civis ainda não cadastrados</option>
    <?php
    }
?>
</select>