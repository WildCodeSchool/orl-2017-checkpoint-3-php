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
        ksort($series);
        $interval = [];
        $tmpYear = 0;
        foreach ($series as $year=>$serie) {
            if ($tmpYear != 0) {
                $interval[] = $year - $tmpYear;
            }
            $tmpYear = $year;
        }
        return max($interval);
    }

}
