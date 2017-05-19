<?php

namespace SubjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AlgoController extends Controller
{

    public function dateInterval ($series) {
        ksort($series);
        $ecart = 0;
        $preced = 3000;
        foreach ($series as $annee => $serie) {
            if ($annee - $preced > $ecart) {
                $ecart = $annee - $preced;
            }
            $preced = $annee;
        }
        return $ecart;
    }

}
