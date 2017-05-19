<?php

namespace wcs\TvShowManagerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/tvshow")
     */
    public function indexAction()
    {
        return $this->render('TvShowManagerBundle:Default:index.html.twig');
    }
}
