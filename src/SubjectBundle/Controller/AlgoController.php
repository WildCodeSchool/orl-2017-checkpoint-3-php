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
        $tab = krsort($series);
        $ecart = '';
        $i= 1;
            foreach($tab as $key=>$value){
                if($i!=1){
                    $ecart[]=$key[$i-1]- $key [$i];
                }else{
                    $i++;
                }
                $i++;
            }
        return max($ecart[]);
    }
}
