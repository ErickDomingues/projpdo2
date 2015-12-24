<?php
require_once './Cliente.php';
//Cria uma instancia de clientes
$Cliente = new Cliente();
//Lista clientes
$ArrayClientes = $Cliente->listar();

require_once './header.php';
?>

<div class="container">
    <h1>Cadastro de Clientes</h1>
    <div CLASS="row">
        <div class="col-lg-offset-11">
            <a href="inserir.php"   class="btn btn-primary">Inserir<a/>
        </div>
    </div>
    <hr class="divider">
    <div class="row">
        <table class="table table-hover">
            <thead>

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
                                <a class="glyphicon glyphicon-remove btn btn-danger" href="deletar.php?id=<?php echo $ViewClientes['id']; ?>">deletar</a>
                                <a class="glyphicon glyphicon-pencil btn btn-success" href="alterar.php?id=<?php echo $ViewClientes['id']; ?>">alterar</a>
                                <a class="glyphicon glyphicon-zoom-in btn btn-info" href="visualizar.php?id=<?php echo $ViewClientes['id']; ?>">visualizar</a>
                            </div>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>

</div>
<?php require_once './footer.php'; ?>