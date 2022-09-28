<?php

class Calculo {


    public function CalculoFinal($meses, $ganho, $lucro, $perca)
    {

        if ($this->ValidarCampos($meses, $ganho, $lucro, $perca) == false) {
            return 0;
        } else {

            $cal_1 = $ganho * $meses;
            $cal_2 = $cal_1 + ($cal_1 * $lucro) / 100;
            $cal_3 = $cal_2 - ($cal_2 * $perca) / 100;

            return $cal_3;
        }

    }

    private function ValidarCampos($meses, $ganho, $lucro, $perca)
    {

        if (trim($meses) == '' || trim($ganho) == '' || trim($lucro) == '' || trim($perca) == '' ||
           !is_numeric($meses) || !is_numeric($ganho) || !is_numeric($lucro) || !is_numeric($perca)
           ) {
            return false;
        } else {
            return true;
        }

    }

}