<?php

namespace SubjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AlgoController extends Controller
{
    public function dateInterval ($series)
    {
        ksort($series);
        $dates = array_flip($series);
        $dateInterval = 0;
        foreach ($dates as $date) {
            $nextDate = next($dates);
            if ($nextDate != NULL) {
                $difference = abs($date - $nextDate);
            } else {
                $difference = 0;
            }
            if ($difference > $dateInterval) {
                $dateInterval = $difference;
            }
        }
        return $dateInterval;
    }
}
