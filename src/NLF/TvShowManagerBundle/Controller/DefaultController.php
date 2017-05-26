<?php

namespace NLF\TvShowManagerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('NLFTvShowManagerBundle:Default:index.html.twig');
    }
}
