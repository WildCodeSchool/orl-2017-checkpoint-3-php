<?php

namespace TvShowManagerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use TvShowManagerBundle\Entity\TvShow;

class DefaultController extends Controller
{
    /**
     * @Route("/note")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $tvShowNote = $em->getRepository(TvShow::class)->findAverageNote();
//        $tvShows = $em->getRepository(TvShow::class)->findAll();
//        foreach ($tvShows as $tvShow) {
//            $notes = [];
//            foreach ($tvShow->getEpisodes() as $episode) {
//                $notes[] = $episode->getNote();
//            }
//            $tvShowNote[$tvShow->getName()] = array_sum($notes) / count($notes);
//        }
//        arsort($tvShowNote);
        return $this->render('TvShowManagerBundle:Default:index.html.twig', [
            'tvShowNote'=>$tvShowNote
        ]);
    }
}
