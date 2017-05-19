<?php

namespace SubjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AlgoController extends Controller
{
    //////////////////////////////////////
    // Complète la fonction suivante //
    //////////////////////////////////////
    //

    public function dateInterval ($series) {
        $tempo = 0;
        $diff = 0;
        ksort($series);
        $seriesKeys = array_keys($series);
        //$seriesName = array_values($series);

        for($i=0;$i<count($seriesKeys)-1;$i++) {
            $tempo = $seriesKeys[$i+1] - $seriesKeys[$i];
            if($tempo > $diff){
                $diff = $tempo;
            }
        }
        return $diff;
    }
}

