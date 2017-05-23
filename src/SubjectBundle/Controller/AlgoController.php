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
        foreach ($series as $date=>$serie) {

            if (isset($previousDate)) {
                $interval[] = $date - $previousDate;
            }

            $previousDate = $date;

        }
        return max($interval);
    }

}
