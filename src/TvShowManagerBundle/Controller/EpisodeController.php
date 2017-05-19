<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 19/05/17
 * Time: 11:00
 */

namespace TvShowManagerBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class EpisodeController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/episode/{tvshow_id}")
     */
    public function episodeAction($tvshow_id)
    {
        $em = $this->getDoctrine()->getManager();
        $episodes = $em->getRepository('TvShowManagerBundle:Episode')
            ->findByTvshow($tvshow_id);
        $serie = $em->getRepository('TvShowManagerBundle:TvShow')->findOneById($tvshow_id);
        return $this->render('TvShowManagerBundle:Episode:episode.html.twig', ['episodes'=>$episodes, 'serie'=>$serie]);
    }

}