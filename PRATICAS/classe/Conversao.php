<?php

class Conversao
{

    public function CalcularConversao($valor, $conversao)
    {

        if (trim($valor) == '' || $conversao == '') {
            return 0;
        }

        $res = '';

        if ($conversao == 'fahrenheit') {

            return $res = $this->CalcularFahrenheit($valor);
        } else if ($conversao == 'celsius') {

            return $res = $this->CalcularCelsius($valor);
        }

        return $res;
    }

    private function CalcularFahrenheit($valor)
    {

        $res = ($valor - 32) / 1.8;

        return $res;
    }

    private function CalcularCelsius($valor)
    {


        $res = ($valor * 1.8) + 32;


        return $res;
    }
}
