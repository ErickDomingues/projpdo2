<?php
require_once './Cliente.php';
//Cria uma instancia de clientes
$Cliente = new Cliente();

require_once './header.php';
?>
<div class="container">
    <h1>Exclusão de Clintes</h1>
    <hr class="divider">
    <h4 class="text-center"><?php echo $Cliente->deletar($_GET['id']); ?> </h4>
    <hr class="divider">
    <a class="btn btn-primary" href="index.php"><span class="glyphicon glyphicon-chevron-left"/>&nbsp;Voltar</a>

</div>  
<?php require_once './footer.php'; ?>