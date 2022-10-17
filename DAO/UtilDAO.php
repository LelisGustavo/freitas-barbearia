<?php

class UtilDAO
{

    public static function CodigoLogado()
    {
        return 1; //Valor fixo por enquanto, simulando o usuário cod. logado 1
    }

    public static function DataAtual()
    {

        date_default_timezone_set('America/Sao_Paulo');

        return date('Y-m-d');
    }

    public static function HoraAtual()
    {

        date_default_timezone_set('America/Sao_Paulo');

        return date("H:i");
    }
}


