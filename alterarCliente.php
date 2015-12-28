<?php

require_once './header.php';

require_once './Cliente.php';
//Cria uma instancia de clientes
$Cliente = new Cliente();
$NomeCliente = $Cliente->find($_GET['id']);

if (isset($_GET['name'])){
    $Cliente->alterar($_GET['id'], $_GET['name']);
    header("location:indexCliente.php");
}
?>
<div class="container">
    <h1>Alteração de Clintes</h1>
    <hr class="divider">
    <div class="row">
        <h4 class="text-center text-uppercase">Cliente: <?php echo $NomeCliente['name']; ?> </h4>
        <form method="get">
            <div class="row">
                <div class="col-lg-2">
                    <label class="control-label">id</label>
                    <input readonly class="form-control" name="id" value="<?php echo $_GET['id']; ?>"/>
                </div>
                <div class="col-lg-4">
                    <label class="control-label">Nome</label>
                    <input class="form-control" name="name" value="<?php echo $NomeCliente['name']; ?>"/>
                </div>
            </div>
            <hr class="divider">
            <div class="btn-group">
                <button class="btn btn-success " type="submit" name="btnSubmit"><span class="glyphicon glyphicon-check"/>&nbsp;Salvar</button>
                <a class="btn btn-primary" href="indexCliente.php"><span class="glyphicon glyphicon-chevron-left"/>&nbsp;Voltar</a>
            </div>
        </form> 
    </div>

</div>  
<?php require_once './footer.php'; ?>