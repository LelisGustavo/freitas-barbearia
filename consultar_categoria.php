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
                <div class="form-group" id="divCategoria">
                    <label>Filtrar nome da categoria</label>
                    <input type="text" onkeyup="Filtrar(this.value)" class="form-control" name="filtrar_nome_categoria" id="filtrar_nome_categoria" placeholder="Digite aqui..." value=""> <br>
                    <center>
                    <button class="btn btn-info btn-sm">Filtrar</button>
                </center>
                </div>
                
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
                                    <tr class="odd gradeX">
                                        <td>(nome)</td>
                                        <td><a href="alterar_categoria.php" class="btn btn-warning btn-sm">Alterar</a></td>
                                    </tr>

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

</body>

</html>