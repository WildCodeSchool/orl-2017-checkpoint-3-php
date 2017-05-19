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
        $array = [];
        foreach ($series as $key=>$value){
            $array[]=$key;
        }
        array_multisort($array);
        $array2 = [];
        for($i=0;$i<count($array)-1;$i++){
            $array2[$i] = $array[$i+1]-$array[$i];
        }

        $result = max($array2);

        return $result;

    }

}
