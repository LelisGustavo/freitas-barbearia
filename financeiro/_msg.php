<?php

if (isset($ret)) {

    switch ($ret) {
        case 0:
            echo '<div class="alert alert-warning">
                Preencher o(s) campo(s) obrigatório(s).
              </div>';
            break;
        case 1:
            echo '<div class="alert alert-success">
                Ação realizada com sucesso.
              </div>';
            break;
        case -1:
            echo '<div class="alert alert-danger">
                Ocorreu um erro na operação. Tente mais tarde!
              </div>';
            break;
    }
}
