<?php

$nilai = 11;

while ($nilai <= 100)
{

    if ($nilai >= 80)
    {
        echo "mantap borr" , $nilai , "<br>";
    }elseif($nilai >= 60){
        echo "okelah" , $nilai , "<br>";
    }elseif($nilai >= 50){
        echo "belajar lagi" , $nilai , "<br>";
    }else{
        echo "udahlahh, galulus" , $nilai , "<br>";
    }

$nilai++;
    }


?>
