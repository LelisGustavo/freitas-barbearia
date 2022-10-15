<?php

require_once '../DAO/CategoriaDAO.php';

$objDAO = new CategoriaDAO();

if (isset($_POST['btnPesquisar'])) {

    $filfiltrar_nome_categoriatrar = $_POST['filtrar_nome_categoria'];

    $categorias = $objDAO->FiltrarCategoria($filtrar);
} else if (isset($_GET['filtro']) && $_GET['filtro'] != '') {

    $filtrar_nome_categoria = $_GET['filtro'];

    $categorias = $objDAO->FiltrarCategoria($filtrar_nome_categoria);
} else {

    $categorias = $objDAO->ConsultarCategoria();
}

// echo '<pre>';
// print_r($categorias);
// echo '</pre>';

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
include_once '_head.php';
?>

<body>
    <div id="wrapper">
        <?php
        include_once '_topo.php';
        include_once '_menu.php';
        ?>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Consultar Categoria</h2>
                        <h5>Consulte todas suas categorias aqui. </h5>

                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <form action="consultar_categoria.php" method="post">
                    <div class="form-group" id="divCategoria">
                        <label>Pesquisar nome da categoria</label>
                        <input type="text" onkeyup="Filtrar(this.value)" class="form-control" name="filtrar_nome_categoria" id="filtrar_nome_categoria" placeholder="Digite aqui..." value="<?= isset($filtrar_nome_categoria) ? $filtrar_nome_categoria : '' ?>">
                    </div>
                    <center>
                        <button type="submit" onclick="return ValidarCategoria()" name="btnPesquisar" class="btn btn-info">Pesquisar</button>
                    </center>
                </form>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Categorias cadastradas. Caso deseje alterar, clique no botão
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Nome da categoria</th>
                                                <th>Ação</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php for ($i = 0; $i < count($categorias); $i++) { ?>
                                                <tr class="odd gradeX">
                                                    <td><?= $categorias[$i]['nome_categoria'] ?></td>
                                                    <td><a href="alterar_categoria.php?cod=<?= $categorias[$i]['id_categoria'] ?>" class="btn btn-warning btn-sm">Alterar</a></td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>

                    </div>
                    <!-- /. PAGE INNER  -->
                </div>
                <!-- /. PAGE WRAPPER  -->
            </div>
        </div>
    </div>

    <?php include_once '_footer.php'; ?>

    <script>
        function Filtrar(categoria) {

            if (categoria.length > 2) {

                window.location = "consultar_categoria.php?filtro=" + categoria;

            }
        }
    </script>
</body>

</html>