<?php
require_once './Cliente.php';
//Cria uma instancia de clientes
$Cliente = new Cliente();

if (isset($_GET['name'])){
    $Cliente->setName($_GET['name']);
    $mensagem = $Cliente->inserir();
    header("location:index.php");
}
require_once './header.php';
?>
<div class="container">
    <h1>Inclusão de Clintes</h1>
    <hr class="divider">
    <div class="row">
        <form method="get">
            <div class="row">
                <h4 class="text-center text-uppercase"><?php if (isset($mensagem)){echo $mensagem;} ?> </h4>
                <div class="col-lg-4">
                    <label class="control-label">Nome</label>
                    <input class="form-control" name="name" />
                </div>
            </div>
            <hr class="divider">
            <div class="btn-group">
                <button class="btn btn-success " type="submit" name="btnSubmit"><span class="glyphicon glyphicon-check"/>&nbsp;Salvar</button>
                <a class="btn btn-primary" href="index.php"><span class="glyphicon glyphicon-chevron-left"/>&nbsp;Voltar</a>
            </div>
        </form> 
    </div>

</div>  
<?php require_once './footer.php'; ?>