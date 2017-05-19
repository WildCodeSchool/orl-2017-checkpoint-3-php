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
        $series = array_keys($series);
        $res=array();
        $result=0;
        $count=count($series);


            for ($i=0;$i<=$count;$i++){

                $res[]=($series[$i+1]-$series[$i]);

                $max = max($res);

                if ($max >= $result){
                    $result=$max;
                }

                if ($i = $count){

                    return $result;
                }
            }

    }

}
