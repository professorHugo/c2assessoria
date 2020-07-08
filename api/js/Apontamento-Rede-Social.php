<?php
if(isset($_GET['A'])){
    if($_GET['A'] == "Sim"){
    sleep(1);
    ?>
    <script>
    $(function(){
        //Print Mídias Sociais
        var $inputMidias      = document.getElementById("print_midias_sociais"),
            $fileNameMidias   = document.getElementById("name_print_midias_sociais");

        $inputMidias.addEventListener('change', function(){
            $fileNameMidias.textContent = this.value;
        });
    })
    </script>
    <input type="file" id="print_midias_sociais" name="print_midias_sociais">
    <label for="print_midias_sociais" class="label-file">Carregar Print</label>
    <span id="name_print_midias_sociais" class="file-name"></span>

    <?php
    }
}
?>

