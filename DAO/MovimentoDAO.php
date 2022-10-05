<?php

class MovimentoDAO {

    public function RealizarMovimento($tipo_movimento, $categoria, $data, $empresa, $valor, $conta, $obs)
    {

        if (trim($tipo_movimento) == '' || trim($categoria) == '' || trim($data) == '' || trim($empresa) == '' || trim($valor) == '' || trim($conta) == '') {

            return 0;
        }

    }

}