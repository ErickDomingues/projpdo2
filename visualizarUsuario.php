<?php

require_once './header.php';

require_once './Usuario.php';
//Cria uma instancia de clientes
$Usuario = new Usuario();
$NomeUsuario = $Usuario->find($_GET['id']);

?>
<div class="container">
    <h1>Visualização de Usuarios</h1>
    <hr class="divider">
    <div class="row">
        <h4 class="text-center text-uppercase">Dados do Usuario: <?php echo $NomeUsuario['usuario']; ?> </h4>
        <h5 class="text-center text-uppercase">Usuário: <?php echo $NomeUsuario['usuario']; ?> </h5>
        <h5 class="text-center text-uppercase">E-mail: <?php echo $NomeUsuario['email']; ?> </h5>
        <h5 class="text-center text-uppercase">Senha: <?php echo $NomeUsuario['senha']; ?> </h5>
        

        <hr class="divider">
        <div class="btn-group">
            <a class="btn btn-primary" href="indexUsuario.php"><span class="glyphicon glyphicon-chevron-left"/>&nbsp;Voltar</a>
        </div>
    </div>

</div>  
<?php require_once './footer.php'; ?>