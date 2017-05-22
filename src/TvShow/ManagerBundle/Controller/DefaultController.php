<?php

namespace TvShow\ManagerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TvShowManagerBundle:Default:index.html.twig');
    }

    /**
     * @Route("/tvshow", name="tvshow")
     */
    public function TvShowAction()
    {
        return $this->render('ManagerBundle:TvShow:index.html.twig');
    }

    /**
     * @Route("/episode", name="episode")
     */
    public function EpisodeAction()
    {
        return $this->render('MangerBundle:Episode:index.html.twig');
    }

}
