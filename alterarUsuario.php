<?php

require_once './header.php';

require_once './Usuario.php';
//Cria uma instancia de clientes
$Usuario = new Usuario();
$InfUsuario = $Usuario->find($_GET['id']);

if (isset($_GET['usuario'])){
    $Usuario->alterar($_GET['id'], $_GET['usuario'],$_GET['email'], $_GET['senha']);
    header("location:indexUsuario.php");
}
?>
<div class="container">
    <h1>Alteração de Clintes</h1>
    <hr class="divider">
    <div class="row">
        <h4 class="text-center text-uppercase">Usuario: <?php echo $InfUsuario['usuario']; ?> </h4>
        <form method="get">
            <div class="row">
                <div class="col-lg-2">
                    <label class="control-label">id</label>
                    <input readonly class="form-control" name="id" value="<?php echo $_GET['id']; ?>"/>
                </div>
                <div class="col-lg-4">
                    <label class="control-label">Usuario</label>
                    <input class="form-control" name="usuario" value="<?php echo $InfUsuario['usuario']; ?>"/>
                </div>
                <div class="col-lg-4">
                    <label class="control-label">Email</label>
                    <input class="form-control" name="email" value="<?php echo $InfUsuario['email']; ?>"/>
                </div>
                <div class="col-lg-4">
                    <label class="control-label">Senha</label>
                    <input class="form-control" name="senha" value="<?php echo $InfUsuario['senha']; ?>"/>
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