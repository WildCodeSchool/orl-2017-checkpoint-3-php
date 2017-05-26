<?php

namespace SubjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AlgoController extends Controller
{
    public function dateInterval($series)
    {
//        ksort($series);
//        $flip = array_flip($series);
//
//        $firstSeries = reset($flip);
//        $lastSeries = end($flip);
//
//        $ecart = $lastSeries - $firstSeries;
//
//        return $ecart;
        $dif = 0;
        ksort($series);
        $flip = array_flip($series);
        foreach ($flip as $value){
            $array[] = $value;
        }

        for ($i = 0; $i < count($array) - 1;$i++){

            $j = $i +1;
            $calcul = abs($array[$i] - $array[$j]);

            if ($calcul >= $dif){
                $dif = $calcul;
            }
        }
        return $dif;
    }

}
