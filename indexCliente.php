<?php


require_once './header.php';

require_once './Cliente.php';
//Cria uma instancia de clientes
$Cliente = new Cliente();
if (isset($_GET['name'])) {
    $ArrayClientes = $Cliente->buscar($_GET['name']);
    $name = $_GET['name'];
} else {
//Lista clientes
    $ArrayClientes = $Cliente->listar();
}
?>

<div class="container">
    <h1>Cadastro de Clientes</h1>
    <div CLASS="row">
        <form method="get">
            <div class="col-lg-4">
                <label class="control-label">Nome</label>
                <input class="form-control" name="name" value="<?php if (isset($name)) {
    echo $name;
} ?>"/>
            </div>

            <button type="submit"   class="btn btn-info">Pesquisar</button>
        </form> 
        <div class="col-lg-offset-11">
            <a href="inserirCliente.php"   class="btn btn-primary">Inserir<a/>
        </div>
    </div>
    <hr class="divider">
    <div class="row">
        <table class="table table-hover">
            <thead>
            <td>
                Id
            </td>
            <td>
                Nome
            </td>
            </thead>
            <tbody>
                <?php
                foreach ($ArrayClientes as $ViewClientes) {
                    ?>
                    <tr>
                        <td>
                            <?php echo $ViewClientes['id']; ?>
                        </td>
                        <td >
    <?php echo $ViewClientes['name']; ?>
                        </td>
                        <td style="width: 300px">
                            <div class="btn-group">
                                <a class="glyphicon glyphicon-remove btn btn-danger" href="deletarCliente.php?id=<?php echo $ViewClientes['id']; ?>">deletar</a>
                                <a class="glyphicon glyphicon-pencil btn btn-success" href="alterarCliente.php?id=<?php echo $ViewClientes['id']; ?>">alterar</a>
                                <a class="glyphicon glyphicon-zoom-in btn btn-info" href="visualizarCliente.php?id=<?php echo $ViewClientes['id']; ?>">visualizar</a>
                            </div>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    <hr class="divider">
    <div class="btn-group">
        <a class="btn btn-primary" href="menu.php"><span class="glyphicon glyphicon-chevron-left"/>&nbsp;Voltar</a>
    </div>

</div>
<?php require_once './footer.php'; ?>