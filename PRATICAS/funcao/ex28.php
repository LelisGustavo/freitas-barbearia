<?php

function SomaTresPrimeiros($n1, $n2, $n3, $n4, $n5)
{

    if (trim(!is_numeric($n1)) || trim(!is_numeric($n2)) || trim(!is_numeric($n3)) || trim(!is_numeric($n4)) || trim(!is_numeric($n5))) {
        return 0;
    } else {
        $res = $n1 + $n2 + $n3;

        return $res;
    }
}

function MultiplicarSomaEOutrosValores($soma, $n4, $n5)
{

    if (trim(!is_numeric($n4)) || trim(!is_numeric($n5))){
        
        return 0;
    } else {
        $res = $soma * $n4 * $n5;

        return $res;
    }

}
