<?php

class Calculadora
{

    public function CalcularCalculadora($n1, $n2, $operacao)
    {
        if (trim($n1) == '' || trim($n2) == '' || $operacao == '') {
            return 0;
        }

        $res = '';

        if ($operacao == '+') {

            return $res = $this->Somar($n1, $n2);
        } else if ($operacao == '-') {

            return $res = $this->Subtrair($n1, $n2);
        } else if ($operacao == '*') {

            return $res = $this->Multiplicar($n1, $n2);
        } else if ($operacao == '/') {

            return $res = $this->Dividir($n1, $n2);
        }

        return $res;
    }

    private function Somar($n1, $n2)
    {
        $res = $n1 + $n2;

        return $res;
    }

    private function Subtrair($n1, $n2)
    {
        $res = $n1 - $n2;

        return $res;
    }

    private function Multiplicar($n1, $n2)
    {
        $res = $n1 * $n2;

        return $res;
    }

    private function Dividir($n1, $n2)
    {
        $res = $n1 / $n2;

        return $res;
    }
}
