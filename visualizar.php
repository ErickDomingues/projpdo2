<?php
require_once './Cliente.php';
//Cria uma instancia de clientes
$Cliente = new Cliente();
$NomeCliente = $Cliente->find($_GET['id']);

require_once './header.php';
?>
<div class="container">
    <h1>Visualização de Clintes</h1>
    <hr class="divider">
    <div class="row">
        <h4 class="text-center text-uppercase">Dados do Cliente: <?php echo $NomeCliente['name']; ?> </h4>
        <h5 class="text-center text-uppercase">Id: <?php echo $NomeCliente['id']; ?> </h5>
        <h5 class="text-center text-uppercase">Nome: <?php echo $NomeCliente['name']; ?> </h5>

        <hr class="divider">
        <div class="btn-group">
            <a class="btn btn-primary" href="index.php"><span class="glyphicon glyphicon-chevron-left"/>&nbsp;Voltar</a>
        </div>
    </div>

</div>  
<?php require_once './footer.php'; ?>