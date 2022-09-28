<?php

define('Gasolina', 4.10);
define('Etanol', 3.09);

class Combustivel
{

    public function CalcularTotalListros($litros, $combustivel)
    {

        if (trim($litros) == '' || trim($combustivel) == '') {
            return 0;
        }

        $res = '';

        if ($combustivel == 'gasolina') {

            return $res = $this->CalcularGasolina($litros);
        } elseif ($combustivel == 'etanol') {

            return $res = $this->CalcularEtanol($litros);
        }

        return $res;
    }

    private function CalcularGasolina($litros)
    {

        $res =  $litros * Gasolina;

        return $res;
    }

    private function CalcularEtanol($litros)
    {

        $res = $litros * Etanol;

        return $res;
    }
}
