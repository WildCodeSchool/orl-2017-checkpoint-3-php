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
//        $series = [ 2005=>'How I met your mother', 1985=>'MacGyver', 1994=>'Friends', 1997=>'Buffy', 2011=>'Game of thrones', 1978=>'Dallas', ];
        sort($series);
        for($i=0; $i<$series[$i]; $i++)
        {
          return  $series[$i+1]-$series[$i];
        }
    }

}
