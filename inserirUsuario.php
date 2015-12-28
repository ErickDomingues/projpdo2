<?php

require_once './header.php';

require_once './Usuario.php';
//Cria uma instancia de clientes
$Usuario = new Usuario();

if (isset($_GET['usuario'])) {
    $Usuario->setUsuario($_GET['usuario']);
    $Usuario->setEmail($_GET['email']);
    $Usuario->setSenha($_GET['senha']);
    $mensagem = $Usuario->inserir();
    header("location:indexUsuario.php");
}
?>
<div class="container">
    <h1>Inclusão de Usuarios</h1>
    <hr class="divider">
    <div class="row">
        <form method="get">
            <div class="row">
                <h4 class="text-center text-uppercase"><?php if (isset($mensagem)) {
    echo $mensagem;
} ?> </h4>
                <div class="col-lg-4">
                    <label class="control-label">Usuáro</label>
                    <input class="form-control" name="usuario" />
                </div>
                <div class="col-lg-4">
                    <label class="control-label">Email</label>
                    <input class="form-control" name="email" />
                </div>
                <div class="col-lg-4">
                    <label class="control-label">Senha</label>
                    <input class="form-control" name="senha" />
                </div>
            </div>
            <hr class="divider">
            <div class="btn-group">
                <button class="btn btn-success " type="submit" name="btnSubmit"><span class="glyphicon glyphicon-check"/>&nbsp;Salvar</button>
                <a class="btn btn-primary" href="indexUsuario.php"><span class="glyphicon glyphicon-chevron-left"/>&nbsp;Voltar</a>
            </div>
        </form> 
    </div>

</div>  
<?php require_once './footer.php'; ?>