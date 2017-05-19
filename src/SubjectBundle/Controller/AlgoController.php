<?php

namespace SubjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AlgoController extends Controller
{
    //////////////////////////////////////
    // Complète la fonction suivante //
    //////////////////////////////////////
    //

    public function dateInterval ($series)
    {

        $series = asort(array_flip($series));

        $count = 0;
        foreach ($series as $key => $value) {
            $series[$key] = $count;
            $count++;
        }

        $tab = [];
        for ($i = 1; $i<=count($series); $i++) {
            $tab[] = $series[$i] - $series[$i-1];
        }

        return max($tab);
    }
}
