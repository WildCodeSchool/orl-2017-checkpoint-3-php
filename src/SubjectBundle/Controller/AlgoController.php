<?php

namespace SubjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AlgoController extends Controller
{
    //////////////////////////////////////
    // Complète la fonction suivante //
    //////////////////////////////////////
    //
    public function strlenOrder($string, $order)
    {
        $words = explode (' ', $string);
        foreach ($words as $word) {
            $length = strlen($word);
            $tabLength [$length] = $word;

        }
        if ($order == 'ASC') {
            ksort($tabLength);
        } elseif ($order=='DESC') {
            krsort($tabLength);
        }
        return implode (' ', $tabLength);
    }
}
