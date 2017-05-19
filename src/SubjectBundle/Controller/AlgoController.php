<?php

namespace SubjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AlgoController extends Controller
{
    //////////////////////////////////////
    // Complète la fonction suivante //
    //////////////////////////////////////
    //

    /* J'initialise une variable afin de trier les clés du tableau par ordre croissant.
     * Je récupére le tableau trié.
     * A partir de ce tableau, je prend la 1ere et la dernière clé.
     * J'initialise une variable pour chaque clé.
     * J'effectue un datetime:diff entre les 2 variable
     * Je retourne le résultat qui est la l'écart entre les 2 variables
     *
     * */

    public function dateInterval ($series) {


        $trie = ksort($series);
        $firstkey = array_shift(array_keys($trie));
        $latestkey = array_pop(array_keys($trie));

        $firstkey = abs($firstkey);
        $latestkey = abs($latestkey);

        if($firstkey>=$latestkey)
        {
            $ecart=$firstkey-$latestkey;
        }
        else
            {
                $ecart=$latestkey-$firstkey;
            }
        return $ecart;

    }

}
