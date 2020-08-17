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
        <h1 class="h4 text-gray-900 mb-4">Sistema de Assessoria</h1>

        <img 
            src="img/logo.png" 
            alt="C2 Assessoria" 
            title="C2 Assessoria" 
            class="img-fluid"
            style="max-height:30%;"
        >

        </div>
        <form action="?Login" class="user" method="post">
        <div class="form-group">
            <input 
            type="email" 
            class="form-control form-control-user" 
            id="exampleInputEmail" 
            aria-describedby="emailHelp" 
            placeholder="Digite seu e-mail"
            name="email"
            >
        </div>
        <div class="form-group">
            <input 
            type="password" 
            class="form-control form-control-user" 
            id="exampleInputPassword" 
            placeholder="Sua Senha"
            name="senha"
            >
        </div>
        <div class="form-group">
            <div class="custom-control custom-checkbox small">
            <input type="checkbox" class="custom-control-input" id="customCheck">
            <label class="custom-control-label" for="customCheck">Ficar Logado</label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary btn-user btn-block">
            Login
        </button>
        <hr>
        </form>
        <div class="text-center">
        <button type="button" class="btn btn-primary btn-user" data-toggle="modal" data-target="#modalSenha">
            Esqueceu a Senha?
        </button>
        </div>
        <!-- Caso queira que exista pedidos para cadastros via sistema
        <div class="text-center">
        <a class="small" href="register.html">Create an Account!</a>
        </div> 
        -->
    </div>
    </div>
</div>