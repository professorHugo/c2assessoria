<div class="row">
    <div class="col-lg-6 d-none d-lg-block bg-login-image">
    <img 
        src="img/logo.png" 
        alt="C2 Assessoria" 
        title="C2 Assessoria" 
        class="img-fluid img-adjust"
        style="max-height:30%;margin-top:30%"
    >
    </div>
    <div class="col-lg-6">
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">
                    <?php echo $_SESSION['LoginUsuario']['nome_usuario']?>
                </h1>

                <img src="img/logo.png" alt="C2 Assessoria" title="C2 Assessoria" class="img-fluid"style="max-height:30%;">
                <i class="fa fa-lock" aria-hidden="true"></i> Sua senha está incorreta <br><br>
                <h2 class="h4 text-black-900 mb4">
                    <a href="?" class="small">
                        <i class="fa fa-chevron-left" aria-hidden="true"></i>
                        Voltar
                    </a>
                </h2>
            </div>
            
            
        </div>
    </div>
</div>