<?php

class EstoqueDAO {

    public function RealizarMovimentoEstoque($tipo_movimento, $data, $quantidade, $nome_produto, $obs)
    {

        if (trim($nome_produto) == '' || trim($quantidade) == '')
        {

            return 0;
        } 

    }


}