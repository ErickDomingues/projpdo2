<?php
require_once './header.php';
?>
<div class="container">
    <h1>Menu</h1>
    <div CLASS="row">
        <h4 class="text-center text-uppercase">
            <?php
            if (isset($_GET['msg'])) {
                echo $_GET['msg'];
            }
            ?> 
        </h4>
        <div class="col-lg-offset-5 col-lg-2">
            <a href="indexUsuario.php"  class="btn btn-info">Cadastro de Usuários</a>
        </div>
        <div class="col-lg-12">
            <hr class="divider">
        </div>
        <div class="col-lg-offset-5 col-lg-2">
            <a href="indexCliente.php"   class="btn btn-info">Cadastro de Clientes</a>
        </div>
    </div>

</div>
<?php require_once './footer.php'; ?>