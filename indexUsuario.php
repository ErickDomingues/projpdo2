<?php


require_once './header.php';

require_once './Usuario.php';
//Cria uma instancia de clientes
$Usuario = new Usuario();
//Lista clientes
$ArrayUsuarios = $Usuario->listar();
?>

<div class="container">
    <h1>Cadastro de Usuarios</h1>
    <div CLASS="row">
        <div class="col-lg-offset-11">
            <a href="inserirUsuario.php"   class="btn btn-primary">Inserir<a/>
        </div>
    </div>
    <hr class="divider">
    <div class="row">
        <table class="table table-hover">
            <thead>
                <tr>
                    <td>
                        Usuário
                    </td>
                    <td>
                        E-mail
                    </td>
                    <td>
                        Senha
                    </td>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($ArrayUsuarios as $ViewUsuarios) {
                    ?>
                    <tr>
                        <td>
                            <?php echo $ViewUsuarios['id']; ?>
                        </td>
                        <td >
                            <?php echo $ViewUsuarios['usuario']; ?>
                        </td>
                        <td>
                            <?php echo $ViewUsuarios['email']; ?>
                        </td>
                        <td >
                            <?php echo $ViewUsuarios['senha']; ?>
                        </td>
                        <td style="width: 300px">
                            <div class="btn-group">
                                <a class="glyphicon glyphicon-remove btn btn-danger" href="deletarUsuario.php?id=<?php echo $ViewUsuarios['id']; ?>">deletar</a>
                                <a class="glyphicon glyphicon-pencil btn btn-success" href="alterarUsuario.php?id=<?php echo $ViewUsuarios['id']; ?>">alterar</a>
                                <a class="glyphicon glyphicon-zoom-in btn btn-info" href="visualizarUsuario.php?id=<?php echo $ViewUsuarios['id']; ?>">visualizar</a>
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