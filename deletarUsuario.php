<?php

require_once './header.php';

require_once './Usuario.php';
//Cria uma instancia de clientes
$Usuario = new Usuario();

?>
<div class="container">
    <h1>Exclusão de Usuarios</h1>
    <hr class="divider">
    <h4 class="text-center"><?php echo $Usuario->deletar($_GET['id']); ?> </h4>
    <hr class="divider">
    <a class="btn btn-primary" href="indexUsuario.php"><span class="glyphicon glyphicon-chevron-left"/>&nbsp;Voltar</a>

</div>  
<?php require_once './footer.php'; ?>