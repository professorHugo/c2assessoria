<script src="js/Step1/BuscarAssociados.js"></script>
<script src="js/Step2/EscolhaCondutor.js"></script>
<script src="js/Step3/BuscarCEPEvento.js"></script>
<script src="js/Step4/Veiculos-Adicionais.js"></script>
<script src="js/Step4/Apontamento-Rede-Social-Associado.js"></script>
<script src="js/Step5/Veiculos-Adicionais-Condutor.js"></script>
<script src="js/Step5/Apontamento-Rede-Social-Condutor.js"></script>
<script src="js/Step6/Proprietario-Legal.js"></script>
<script src="js/Step6/Carregar-Procedente.js"></script>
<script src="js/Step6/Carregar-Foto-Chaves.js"></script>
<script src="js/Step6/Carregar-Print-Rastreador.js"></script>
<script src="js/Step7/Carregar-Prints.js"></script>
<script src="js/Step8/Carregar-Foto-Vistoria.js"></script>
<script src="js/Step9/Carregar-Foto-CNH.js"></script>
<script src="js/Step10/Carregar-Situacao-Financeira.js"></script>
<script src="js/Step12/Carregar-Testemunhas.js"></script>
<script type="text/javascript" src="js/jquery.form.js"></script>
<script src="js/Step14/Carregar-Orgaos-Publicos.js"></script>
<script src="js/Step15/Salvar-Entrevistados.js"></script>
<script src="js/Step15/BuscarCEPEntrevistado.js"></script>



<?php
if( isset($_GET['Cadastrar']) ){
    if( isset($_GET['Step']) ){
        $Step = $_GET['Step'];

        switch( $Step ) {
            case $Step:
                include_once "Pages/Relatorios/containers/Step" . $Step . "/index.php";break;
            default: include_once "Pages/Relatorios/Views/Relatorios-Entregues.php";break;
        }

    }else{
        include_once "Pages/Relatorios/Views/Relatorios-Entregues.php";
    }
}else{
    include_once "Pages/Relatorios/Views/Relatorios-Entregues.php";
}